<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Package;
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
    public function ourPartners()
    {
        return view('web.ourPartners');
    }
    public function ourClients()
    {
        return view('web.ourClients');
    }

    public function contact()
    {
        return view('web.contact');
    }

    public function serviceDetails($id)
    {
        $row= Package::findorfail($id);
        return view('web.service-details',compact('row'));
    }
}
