<?php

namespace App\Http\Livewire\Users;

use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Http\Traits\JudetTrait;
use Illuminate\Support\Facades\Auth;

class UpdateProfileInformationForm extends Component
{
    use WithFileUploads;
    use JudetTrait;

    /**
     * The component's state.
     *
     * @var array
     */
    public $state = [];

    /**
     * The new avatar for the user.
     *
     * @var mixed
     */
    public $photo;

    /**
     * Prepare the component.
     *
     * @return void
     */

    public $user;

    public $judete;

    public function mount(Request $request)
    {
        $this->user     = $request->user ?? Auth::user();
        $this->judete   = $this->getJudete();
        $this->state    = $this->user->withoutRelations()->toArray();
    }

    /**
     * Update the user's profile information.
     *
     * @param  \Laravel\Fortify\Contracts\UpdatesProfileInformation  $updater
     * @return void
     */
    public function updateProfileInformation(UpdateUserProfileInformation $updater)
    {

        $this->resetErrorBag();

        $updater->update(
            $this->user,
            $this->photo
                ? array_merge($this->state, ['photo' => $this->photo])
                : $this->state
        );

        if (isset($this->photo)) {
            return redirect()->route('users.show');
        }

        $this->emit('saved');

        $this->emit('refresh-navigation-menu');
    }

    /**
     * Delete user's profile photo.
     *
     * @return void
     */
    public function deleteProfilePhoto()
    {
        $this->user->deleteProfilePhoto();

        $this->emit('refresh-navigation-menu');
    }

    /**
     * Get the current user of the application.
     *
     * @return mixed
     */
    public function getUserProperty()
    {
        return $this->user;
    }

    /**
     * Render the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('users.update-profile-information-form');
    }
}
