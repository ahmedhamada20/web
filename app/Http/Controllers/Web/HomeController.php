<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('web.index');
    }
    public function aboutUs()
    {
        return view('web.aboutUs');
    }
}
