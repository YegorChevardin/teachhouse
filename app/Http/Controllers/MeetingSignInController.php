<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Models\Client;

class MeetingSignInController extends Controller
{
    public function signin(Request $request) {
        if(View::exists('thanks')) {
            $data = $request->validate([
                'name' => 'required|max:50',
                'phone' => 'required|max:20',
                'email' => 'required|max:100',
            ]);

            $client = new Client();
            $client->name = $request->input('name');
            $client->number = $request->input('phone');
            $client->email = $request->input('email');
            $client->meeting_id = $request->input('meet-time');
            if(Auth::check()) {
                $client->user_id = Auth::user()->getAuthIdentifier();
            }
            $client->save();

            return view('thanks');
        } else {
            abort(404);
        }
    }
}
