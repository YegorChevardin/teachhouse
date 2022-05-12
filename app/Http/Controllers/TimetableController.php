<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Client;

class TimetableController extends Controller
{
    public function index() {
        if(View::exists('timetable')) {
            $clients =  Client::orderBy('meeting_id', 'DESC')->paginate(9);

            return view('timetable', ['clients' => $clients, 'counter' => 0]);
        } else {
            abort(404);
        }
    }
}
