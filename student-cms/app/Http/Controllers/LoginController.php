<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function loginGet()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $this->validate($request, User::rules());
        $id = $request->get('id');
        $password = $request->get('password');

        if (Auth::attempt(['id' => $id, 'password' => $password], $request->get('remember'))) {
            if (!Auth::user()->is_admin) {
                return Redirect::route('stu_home');
            } else {
                return Redirect::action('Admin\AdminController@index');
            }
        } else {
            return Redirect::route('login')
            ->withInput()
            ->withErrors('Wrong username and password, please try again');
        }
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
        }
        return Redirect::route('login');
    }
}
