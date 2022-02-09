<?php

namespace App\Http\Controllers\Livewire;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Enable2FaController extends Controller
{

    /**
     * Show the user profile screen.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */

    public function show(Request $request)
    {
        return view('profile.enable2-fa', [
            'request'   => $request,
            'user'      => $request->user(),
        ]);
    }
}
