<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;

class SetPermissions extends Component
{
    public function render()
    {
        return view('users.set-permissions');
    }

    public function setPermissions()
    {
       dd('Setez atat permisiunile cat si rolurile');
    }
}
