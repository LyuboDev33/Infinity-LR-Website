<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

use function Ramsey\Uuid\v1;

class ProfileController extends Controller {


    public function getSpecificUser($email) { 
        $assessmentUsers = [];
    
        if ($email) {
            $assessmentUsers = DB::table('assesments')
                ->where('email_of_user', $email)
                ->get();
        } else { 
            $assessmentUsers = collect(["message" => "Потребителя все още не е направил теста си"]);
        }
    
        if (Auth::user()->acces_type === "user") {
            return redirect()->route('dashboard');
        } else {
            return view('profile.files.user', ['assesment_users' => $assessmentUsers]);
        }
    }

    public function get_all_users() {

        $allUsers = DB::table('users')
            ->where('acces_type', 'user')
            ->orderBy('id', 'desc')
            ->get();

        

        if ($user = Auth::user()->acces_type === "user") {
            return redirect()->route('dashboard');
        } else {
            return view('profile.files.give-access', [
                'all_users' => $allUsers ]);
        }
    }

    public function update_event(Request $request) {

        $id = $request->hidden_id;
    
        $event = DB::table('events')->where('id', $id)->first();
        $fileName = $event->image_event;
    
        if ($request->hasFile('update_image')) {
            $file = $request->file('update_image');
            $destinationPath = public_path('images/event-images');
            $fileName = $file->getClientOriginalName();
            $file->move($destinationPath, $fileName);
        }
    
        DB::table('events')
            ->where('id', $id)
            ->update([
                'name_event' => $request->event_name,
                'image_event' => $fileName,
                'date_time_event' => $request->event_date,
                'event_link' => $request->event_link,
                'recording_link' => $request->recording_link,
            ]);
    
        return redirect()->route('get_events')->with("eventMSG", 'Събитието беше обновено');
    }

    public function insert_events (Request $request) { 

        $file = $request->file('pics');
        $fileName = $file->getClientOriginalName();
        $destinationPath = public_path('images/event-images');
        $file->move($destinationPath, $fileName);

        DB::table('events')
        ->insert([
            'name_event' => $request->date_event, 
            'image_event' =>  $fileName,
            'date_time_event' => $request->date_event, 
            'event_link' => $request->link_for_registration,
            'recording_link' => ""
        ]);

        // When a new event is inserted, there is no need to add a recording link 
        // because the event is not over yet.

        return redirect()->route('get_events')->with("eventMSG", 'Събитието беше добавено успешно');
    }


    public function getEvents () { 

         $allEvents = DB::table('events')
        ->orderBy('id', 'desc')
        ->get();

        return view('profile.files.events', ['allEvents'=> $allEvents]);

    }
    // Above is the code is written for the add Events Part inside the admin dashboard
    // --------------------------------------------------------------------------------
    // --------------------------------------------------------------------------------
    // --------------------------------------------------------------------------------

    
     
    public function get_library () { 
        return view('profile.files.biblioteka');
    }

    public function give_permission(Request $request)
    {

        $authorized = $request->input('select_access') === "Дай достъп" ? "authorized" : "not_authorized";
        $email = $request->input('theEmail');

        DB::table('users')
            ->where('email', $email)
            ->update(['authorize_user' => $authorized]);

        return redirect()->route('get_all_users');
    }

    public function delete_user(Request $request)
    {
        $email = $request->email_delete;

        DB::table('users')
            ->where('email', $email)
            ->delete();

        return redirect()->route('get_all_users');
    }

   

    public function get_specific_user($data) {


        $specificUser = DB::table('users')
            ->where('email', $data)
            ->get();

        if (Auth::user()->acces_type === "user") {

            return redirect()->route('dashboard');
        } else {

            return view('profile.files.potrebiteli', ['specific_user' => $specificUser]);
        }
    }



    public function update_access(Request $request)
    {
    }

    public function edit(Request $request)
    {
        return view('profile.files.profile', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {

        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
