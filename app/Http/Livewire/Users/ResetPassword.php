<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;

class ResetPassword extends Component
{
    public function render()
    {
        return view('users.reset-password');
    }

    public function resetPassword()
    {
        dd('Aici voi reseta parola direct, atribuind o parola random trimisa pe emailul utilizatorului ori generand o parola fixa, apoi fortand utilizatorul sa o schimbe la prima logare.');
    }
}
