<?php

namespace App\Http\Livewire;

use App\Mail\RegistrationMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Illuminate\Support\Str;

class RegistrationForm extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    public function updated($field)
    {
        $this->validateOnly($field, $this->getRules());
    }

    protected function getRules(): array
    {
        return [
            "name" => "required|min:2",
            "email" => "required|email|unique:users,email",
            "password" => "required|min:2|confirmed"
        ];
    }

    protected function resetForm():void
    {
        $this->name = "";
        $this->email = "";
        $this->password = "";
        $this->password_confirmation = "";
    }

    public function createUser(): void
    {
        $this->validate($this->getRules());

        $user = User::create([
            "name" => $this->name,
            "email" => $this->email,
            "password" => bcrypt($this->password),
            "confirmation_token" => Str::random(30)
        ]);
        
        $this->resetForm();
        session()->flash("success", "Vous avez reçu un email pour confimer votre compte.");

        Mail::to($user->email)->send(new RegistrationMail($user));
    }


    public function render()
    {
        return view('livewire.registration-form');
    }
}
