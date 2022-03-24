<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\User;
use App\Kategori;

use App\Models\Gambar\Slides\Kategori_Slides;
use App\Models\Gambar\Slides\Slides;
use App\Models\About;

use App\Models\Gambar\Slides\RoomKat;
use App\Models\Gambar\Slides\RoomDetail;
use App\Models\Gambar\Slides\BedType;
use App\Models\Wedding\Wedding;
use App\Models\Wedding\WeddingTestimonial;

use App\Models\Inclusions;
use App\Models\TermCond;

use DB;
use File;
use Carbon;
use View;
use Blade;
use Hash;

use App\Helper\Helper;

use App\Mail\EmailSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

class ApiController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function list_offers(Request $request,$index){
    	$slide       = Inclusions::get_data_offers($request,$index);
        $termcond    = TermCond::get_data_offersTerm($request,$index);
        
        $data = array();

        $data["slide"] = json_encode($slide);
        $data["termcond"] = json_encode($termcond);

        $response = array();
        $response["data"] = $data;

        return $response;
    }

    public function wedding_testimonial(Request $request,$index){
        $about    = WeddingTestimonial::get_data_event_detailwedding($request,$index);

    	return json_encode($about);
    }

}
