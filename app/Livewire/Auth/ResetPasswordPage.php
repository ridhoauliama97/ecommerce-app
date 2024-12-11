<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Url;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;

#[Title('Reset Password - Authentication')]
class ResetPasswordPage extends Component
{
    public $token;
    #[Url]
    public $email;
    public $password;
    public $password_confirmation;

    public function mount($token)
    {
        $this->token = $token;
    }

    public function save()
    {
        $this->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|max:255|confirmed',
            // 'password_confirmation' => 'required|same:password',
        ]);

        $status = Password::reset(
            [
                'email' => $this->email,
                'password' => $this->password,
                'password_confirmation' => $this->password_confirmation,
                'token' => $this->token
            ],
            function (User $user, string $password) {
                $password = $this->password;
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();
                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET ? redirect('/login') : session()->flash('error', 'Oops!! Something went wrong!');

        // Reset the password using Laravel's Auth facade
        // auth()->resetPasswordUsingToken($this->token, $this->password);

        // $this->dispatchBrowserEvent('alert', [
        //     'type' => 'success',
        //     'message' => 'Password reset successfully. You can now log in.'
        // ]);

        // redirect()->route('login');
    }
    public function render()
    {
        return view('livewire.auth.reset-password-page');
    }
}
