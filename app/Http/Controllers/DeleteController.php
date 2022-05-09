<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DeleteController extends Controller
{
    public function userDelete() {
        $current_user = User::find(Auth::user()->getAuthIdentifier());
        $current_user->delete();

        return redirect(route('logout.perform'));
    }
}
