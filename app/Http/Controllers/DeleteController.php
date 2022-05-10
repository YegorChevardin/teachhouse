<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class DeleteController extends Controller
{
    public function userDelete() {
        $current_user_data = User::find(Auth::user()->getAuthIdentifier());
        $current_user = Auth::user();
        if ($current_user->avatar != 'users/default.png') {
            File::delete("storage/$current_user->avatar");
        }
        Session::flush();
        Auth::logout();
        $current_user_data->delete();
        return redirect(route('home'));
    }
}
