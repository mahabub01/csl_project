<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AdminLoginRequest;
use Auth;
use Session;
use DB;

class adminLoginController extends Controller
{
    public function adminLogin(){
    	return  view('admin.auth.login');
    }


    public function adminLoginSubmit(AdminLoginRequest $request){
 
		if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){

        		return redirect()->route('admin.dashboard');
        }
    
        return redirect()->back()->withInput($request->only('email','remember'));

    }







}
