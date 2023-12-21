<?php

namespace App\Http\Controllers\view;

use App\Http\Controllers\Controller;
use App\Models\Rate;
use Illuminate\Http\Request;

class RateController extends Controller
{
    function index(){
        $rates=Rate::paginate(10);
        return view('Rate.index',compact('rates'));
    }
}
