<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use TCG\Voyager\Voyager;
use App\Models\User;


class UserChangeInfo extends Controller
{
    public function changeimg(Request $request) {
        $user = Auth::user();

        $path = $request->file('avatar')->store('uploads', 'public');
        if ($user->avatar != 'users/default.png') {
            File::delete("storage/$user->avatar");
        }

        $id = $user->getAuthIdentifier();
        DB::table('users')
            ->where('id', $id)
            ->update(['avatar' => $path]);

        return redirect()->back();
    }

    public function changeName(Request $request) {
        $name = $request->name;
        $id = Auth::id();
        DB::table('users')
            ->where('id', $id)
            ->update(['name' => $name]);

        return redirect()->back();
    }

    public function changeEmail(Request $request) {
        $email = $request->email;
        $id = Auth::id();
        DB::table('users')
            ->where('id', $id)
            ->update(['email' => $email]);

        return redirect()->back();
    }
}
