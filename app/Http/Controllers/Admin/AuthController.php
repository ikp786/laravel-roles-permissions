<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use Hash;
use Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
	//control_panel
	public function loginView()
	{
		if (!Auth::check()) {
			$title         = "Login";
			$data          = compact('title');
			return view('admin.login', $data);
		} else {
			return redirect()->route('dashboard');
		}
	}

	public function adminLogin(Request $request)
	{
		$error_message = [
			'email.required' 		 => 'Email  should be required',
			'password.required' 	 => 'Password required',
		];
		$request->validate([
			'email'          => 'required|email',
			'password'       => 'required'
		], $error_message);
		try {
			if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
				return redirect()->route('dashboard');
			}
			return redirect()->back()->With('Failed', 'Invalid login details')->withInput($request->only(['email']));
		} catch (\Throwable $e) {
			return redirect()->back()->With('Failed', $e->getLine());
		}
	}
}
