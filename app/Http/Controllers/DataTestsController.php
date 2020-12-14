<?php

namespace App\Http\Controllers;

use App\Mail\RegistrationMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DataTestsController extends Controller
{
    public function fakeMail()
    {
        
        $user = new User();
        $user->name = "John Doe";
        $user->confirmation_token = Str::random(10);
        
        return new RegistrationMail($user);
    }
}
