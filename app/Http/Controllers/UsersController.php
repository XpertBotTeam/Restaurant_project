<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules;


class UsersController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('users',compact('users'));

    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'tel' => ['required','max:255', 'unique:users'],
            'password' => ['confirmed', Rules\Password::defaults()],
        ]);
        
        $users = User::insert([
                'name' =>$request-> name,
                'email' =>$request->email,
                'tel' =>$request->tel,
                'password' => Hash::make($request->Password),
            ]);
        return redirect()->back();

        event(new Registered($user));
        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }

    

    public function delete(Request $request,$id){

        $users = User::where('id','=',$id)->delete();
        return redirect()->back();
    }

















}
