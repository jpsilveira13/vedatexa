<?php

namespace vedatexa\Http\Controllers\Site;

use Illuminate\Http\Request;
use vedatexa\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index(){
        return view('site.store');
    }
}
