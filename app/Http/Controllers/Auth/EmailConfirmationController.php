<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class EmailConfirmationController extends Controller
{
    public function verify($token)
    {
        if(! $user = User::whereConfirmationToken($token)->first()) {
            return redirect('/')->with('danger', "Veuillez fournir un token valide");
        }

        $user->confirmation_token = null;
        $user->email_verified_at = now();
        $user->save();

        auth()->loginUsingId($user->id);

        return redirect('/')
            ->with('success', "Votre e-mail a été confirmé. Vous pouvez continuer votre voyage");
    }
}
