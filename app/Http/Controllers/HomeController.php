<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\Models\Meeting;

class HomeController extends Controller
{
    public function index()
    {
        if(View::exists('index')) {
            $meetings = Meeting::orderBy('id', 'ASC')->where('status', 'published')->get();

            return view('index')->with(['meetings' => $meetings]);
        } else {
            abort(404);
        }
    }
}
