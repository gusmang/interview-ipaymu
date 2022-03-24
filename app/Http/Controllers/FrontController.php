<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\User;
use App\Models\Product\Product;

use DB;
use File;
use Carbon;
use View;
use Blade;
use Hash;
use Config;

use App\Helper\Helper;

use App\Mail\EmailSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

class FrontController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(Request $request){
        $data = Product::get_data_product($request);
        $totals = count(Product::get_data_product_aktif($request));

        $totals = ceil($totals/Config::get("myconfig.limitProduct"));

        //echo Config::get("myconfig.limitProduct");
        //return;

    	return view('front.pages.home' , compact('data','totals'));
    }

    public function checkout(Request $request){
    	return view('front.pages.checkout');
    }

    public function payment(Request $request){
        
    	$va           = '1179001936384166'; //get on iPaymu dashboard
        $secret       = 'UqTUJTbWBaxtyToqCk0Pi0g0mFLwe1'; //get on iPaymu dashboard

        $url          = 'https://my.ipaymu.com/api/v2/payment'; //url
        $method       = 'POST'; //method

        $dataCart = json_decode($request->t_list_product);

        //return $dataCart;
        $product = array();
        $qty = array();
        $price = array();

        foreach($dataCart as $row){
            array_push($product , $row->name);
            array_push($qty , $row->qty);
            array_push($price , $row->price);
            //return $row->price;
        }

        //return $price;

        //Request Body//
        $body['product']    = $product;
        $body['qty']        = $qty;
        $body['price']      = $price;
        $body['returnUrl']  = 'https://localhost/ipaymu-trial/thankyou.php';
        $body['cancelUrl']  = 'https://mywebsite.com/cancel';
        $body['notifyUrl']  = 'https://mywebsite.com/notify';
        //End Request Body//

        //Generate Signature
        // *Don't change this
        $jsonBody     = json_encode($body, JSON_UNESCAPED_SLASHES);
        $requestBody  = strtolower(hash('sha256', $jsonBody));
        $stringToSign = strtoupper($method) . ':' . $va . ':' . $requestBody . ':' . $secret;
        $signature    = hash_hmac('sha256', $stringToSign, $secret);
        $timestamp    = Date('YmdHis');
        //End Generate Signature


        $ch = curl_init($url);

        $headers = array(
            'Accept: application/json',
            'Content-Type: application/json',
            'va: ' . $va,
            'signature: ' . $signature,
            'timestamp: ' . $timestamp
        );

        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        curl_setopt($ch, CURLOPT_POST, count($body));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonBody);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        $err = curl_error($ch);
        $ret = curl_exec($ch);
        curl_close($ch);
        if($err) {
            echo $err;
        } else {

            //Response
            $ret = json_decode($ret);
            if($ret->Status == 200) {
                $sessionId  = $ret->Data->SessionID;
                $url        =  $ret->Data->Url;
                echo $url;
            } else {
                echo $ret;
            }
            //End Response
        };
    }

}
