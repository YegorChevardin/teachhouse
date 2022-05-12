<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Rate;

class ContactController extends Controller
{
    public function rate(Request $request) {
        if(View::exists('thanks')) {
            $data = $request->validate([
                'name' => 'required|max:50',
                'subject' => 'required|max:100',
                'email' => 'required|max:100',
                'text' => 'required|max:1000'
            ]);

            $rate = new Rate;
            $rate->name = $request->input('name');
            $rate->email = $request->input('email');
            $rate->theme = $request->input('subject');
            $rate->text = $request->input('text');
            $rate->save();

            return view('thanks', ['rate' => true]);
        } else {
            abort(404);
        }
    }
}
