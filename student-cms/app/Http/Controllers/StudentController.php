<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function home()
    {
        return view('student.home');
    }

    public function edit()
    {
        return view('student.edit');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'phone' => 'required',
            'pro_class' => 'required',
            'email' => 'required|email'
            ]);
    
        Auth::user()->update($request->all());
        session()->flash('message', 'Update Successfully');
        return Redirect::route('student_home');
    }
}
