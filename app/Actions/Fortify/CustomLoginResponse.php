<?php

namespace App\Actions\Fortify;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class CustomLoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {

        if (Auth::user()->is_admin) {
            return redirect('/admin');
        }

        return redirect('/')->with('scroll', 'hero');
    }
}
