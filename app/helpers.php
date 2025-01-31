<?php

use App\Models\ChooseEbright;
use App\Models\Package;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Work;

if (!function_exists('get_setting')){
    function get_setting(){
        return Setting::pluck('value', 'key')->toArray();
    }
}
if (!function_exists('get_sliders')){
    function get_sliders(){
        return Slider::first();
    }
}
if (!function_exists('get_choose_ebright')){
    function get_choose_ebright(){
        return ChooseEbright::get();
    }
}
if (!function_exists('get_services')){
    function get_services(){
        return Service::get();
    }
}
if (!function_exists('get_work')){
    function get_work(){
        return Work::get();
    }
}
if (!function_exists('get_packages')){
    function get_packages(){
        return Package::get();
    }
}
if (!function_exists('get_partners')){
    function get_partners(){
        return Partner::get();
    }
}
