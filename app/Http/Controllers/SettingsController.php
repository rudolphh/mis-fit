<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateSettingsRequest;


class SettingsController extends Controller
{
    /** 
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Update the user's profile.
     *
     * @param  Request  $request
     * @return Response
     */
    public function settingsForm(Request $request)
    {
        $content_title = 'Settings';
        $user = $request->user();

        // if this is our first time
        if(is_null($user->height)){

            $update_message = 'Update your settings before continuing.';
            session()->flash('update_message', $update_message);
        }

        return view('forms.settings', compact('content_title', 'user'));
    }

    public function updateSettings(UpdateSettingsRequest $request)
    {
        Auth()->user()->update($request->all());
        
        session()->flash('success', 'Settings Updated.');

        //session()->flash('flash_message_important','');
        return redirect('/home'); 
    }


    // private function flass_message($message, $type, $important=false){

    //     session()
    // }

}