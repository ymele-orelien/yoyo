<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{


    public function store(StoreUserRequest $request)
    {


        try {
            $data =  new User();
            $data->name = $request->name;
            $data->email = $request->email;
            $data->password = Hash::make($request->password);
            $data->save();

            return redirect()->route('login');
        } catch (Exception $exception) {

            // dd($exception);
            Toastr::error('Une erreur est survenue !!!');
            return back();
        }
    }
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'name'=>['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
            'active'=>['1']
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}

