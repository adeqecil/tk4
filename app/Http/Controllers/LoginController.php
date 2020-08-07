<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\DB;

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }
	
	public function authenticate(Request $request) {
		dd(request()->user());
			if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){
				return redirect()->route('product');
			}
		
	}
}
