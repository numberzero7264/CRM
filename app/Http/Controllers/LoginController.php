<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index(){
        return view('login',[
            'title'=>'Đăng nhập hệ thống CRM'
        ]);
    }
    /**
     * Summary of store
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    public function store(Request $request){
        // dd($request->input());
        
        $this->validate($request,[
            'email' => 'required|email:filter',
            'password' => 'required',
        ]);
        if (Auth::attempt([
            'email' => $request->input('email'), 
            'password' => $request->input('password')
        ],$request->input('remember')))
        {
            // return view('Home',[
            //     'title' => 'Trang chủ'
            // ]);
            return redirect()->route('admin');
        }
        else{
            Session::flash('error', 'Email hoặc mật khẩu không chính xác');
            return redirect()->back();
        // echo bcrypt('Sangzero,.2011');
    }

    }
}
