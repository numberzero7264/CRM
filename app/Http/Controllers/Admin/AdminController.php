<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\Helper;  

class AdminController extends Controller
{
    //
    public function index(){
        return view('layout.Home',[
            'title'=>'Trang chủ'
        ]);
        // echo 'admin';
    }
}
