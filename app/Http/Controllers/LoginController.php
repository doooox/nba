<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        $credentials = auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]);

        if ($credentials) {
            return redirect('/teams');
        } else {
            return back()->withErrors([
                'message' => 'Please check you credentials!'
            ]);
        }
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/teams');
    }
}
