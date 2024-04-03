<?php

namespace App\Http\Controllers\Web;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebController extends Controller
{
    public function index()
    {
        $Services=Service::get();
        return view("web.index",compact("Services"));
    }

    public function about()
    {
        $Services=Service::get();
        return view("web.about",compact("Services"));
    }

    public function service()
    {
        $Services=Service::get();
        return view("web.service",compact("Services"));
    }

    public function contact()
    {
        $Services=Service::get();
        return view("web.contact",compact("Services"));
    }

}
