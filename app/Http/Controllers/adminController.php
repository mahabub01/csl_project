<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class adminController extends Controller
{
	public function __construct(){
		$this->middleware('auth:admin');
	}

    public function dashboard(){
    	return  view('admin.dashboard');
    }

    public function adminLogout(){
    	Auth::guard('admin')->logout();
    	/*Session::destroy();*/
    	Session::regenerate();
    	return redirect()->route('admin.login');
    }






}
