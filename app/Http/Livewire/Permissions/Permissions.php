<?php

namespace App\Http\Livewire\Permissions;

use App\Models\Permission;
use Livewire\Component;
use Livewire\WithPagination;

class Permissions extends Component
{
    use WithPagination;

    public function render()
    {
        $permissions = Permission::paginate(10);

        return view('livewire.permissions.permissions', compact('permissions'));
    }
}
