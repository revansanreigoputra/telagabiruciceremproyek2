<?php

namespace App\Livewire\Auth;


use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Register')]
class RegisterPage extends Component {

    public $name;
    public $email;
    public $password;

    // register user
    public function save() {
        $this->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','string', 'email','max:255', 'unique:users'],
            'password' => ['required','string','min:8', 'max:255'],
        ]);

        // save ke database
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        // login user
        auth()->login($user);

        // redirect ke halaman dashboard
        return redirect()->intended();

    }

    public function render() {
        return view('livewire.auth.register-page');
    }
}
