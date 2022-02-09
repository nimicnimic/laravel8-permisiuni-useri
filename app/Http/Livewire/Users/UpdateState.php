<?php

namespace App\Http\Livewire\Users;

use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Http\Request;
use Livewire\Component;

class UpdateState extends Component
{
    /**
     * The component's state.
     *
     * @var array
     */
    public $state = [];

    public function mount(Request $request)
    {
        $this->user     = $request->user;
        $this->state    = $this->user->withoutRelations()->toArray();
    }

    /**
     * Update the user's profile information.
     *
     * @param  App\Actions\Fortify\UpdateUserProfileInformation $actualizare
     * @return void
     */



    public function updateState(UpdateUserProfileInformation $updater)
    {
        $this->resetErrorBag();

        $updater->update(
            $this->user,
            $this->state
        );

        $this->emit('saved');

        $this->emit('refresh-navigation-menu');
    }

    public function render()
    {
        return view('users.update-state');
    }
}
