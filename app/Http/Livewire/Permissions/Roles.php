<?php

namespace App\Http\Livewire\Permissions;

use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Roles extends Component
{
    use WithPagination;

    public $modalOpen = false;

    public $name, $label, $role, $role_id = null, $update = false;

    protected $paginationTheme = 'bootstrap';

    protected $rules = [
        'name' => ['required','min:6','unique:roles,name'],
        'label' => ['required','string'],
    ];

    public function setRole($role)
    {
        $this->name = $role->name;
        $this->label = $role->label;

        if($role->id !== null)
        {
            $this->role     = $role;
            $this->update   = true;
        }
    }

    public function render()
    {
        $roles = Role::paginate(5);

        return view('livewire.permissions.roles', compact('roles'));
    }

    // Update validation in real time
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function openAddRoleModal(Role $role)
    {
        $this->update = false;
        $this->setRole($role);
        $this->resetErrorBag();

        $this->modalOpen = true;

    }

    public function saveRole()
    {
        $validatedData = $this->validate();

        if($this->update)
            $this->updateRole($validatedData);
        else
            $this->insertRole($validatedData);

    }

    public function updateRole($validatedData)
    {
        $this->role->update($validatedData);

        $this->emit('saved');
    }

    public function insertRole($validatedData)
    {
        Role::create($validatedData);

        $this->emit('saved');
    }

}
