<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SecondController extends Controller
{
    public function _construct(){
        $this -> middleware('auth');
    }
    public function showString(){
        return 'static string';
    }
}
