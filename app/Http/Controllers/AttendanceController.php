<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::paginate(10);
        return view('attendance.index', compact('attendances'));
    }

    public function create()
    {
        return view('attendance.create');
    }

    public function store(Request $request)
    {
        $attendance = new Attendance();
        $attendance->nim = $request->nim;
        $attendance->name = $request->name;
        $attendance->email = $request->email;
        $attendance->save();

        return redirect('/attendance');
    }
}
