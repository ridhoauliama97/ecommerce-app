<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Login Page - Authentication | Ecommerce Application')]
class LoginPage extends Component
{
    public $email;
    public $password;

    public function login()
    {
        $this->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8|max:255'
        ]);

        // Authenticate user using Laravel's Auth facade
        if (!auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->flash('error', 'Invalid Credentials');
            return;
        }

        // Redirect to home page
        return redirect()->intended();
    }
    public function render()
    {
        return view('livewire.auth.login-page');
    }
}
