<?php

namespace LibreNMS\TestPlugin\Http\Controllers;

use Illuminate\Routing\Controller;
use Kamaln7\Toastr\Facades\Toastr;

class HomeController extends Controller
{
    public function index()
    {
        Toastr::warning('All your base are belong to us!');

        return view('test-plugin::index');
    }
}
