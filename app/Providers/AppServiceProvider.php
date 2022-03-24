<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Gambar\Slides\RoomKat;
use App\Models\General;
use App\Models\Socials;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        //$roomkat = RoomKat::get_list_roomcat();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        //view()->share('roomkat', RoomKat::get_list_roomcat());
        //view()->share('general', General::get_data_general_nofirst());
        //view()->share('socials',  Socials::get_data_nosocials());
    }
}
