<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TokenController extends Controller
{
    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            toastr()->error('Login error, silahkan periksa email dan password anda!', 'Error');
            return back();
        } else {
            $request->session()->regenerate();
            if (Auth::user()->isAdmin == 'admin') {
                toastr()->success('Login successfully!', 'Success');
                return redirect('/admin/dashboard');
            } elseif (Auth::user()->isAdmin == 'pimpinan') {
                toastr()->success('Login successfully', 'Success');
                return redirect('/pimpinan/dashboard');
            } else {
                toastr()->success('Login successfully', 'Success');
                return redirect('/jamaah/dashboard');
            }
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/signin');
    }
}
