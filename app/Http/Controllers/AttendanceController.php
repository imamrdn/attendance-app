<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::orderBy('id', 'desc')->paginate(10); //can use created_at
        return view('attendance.index', compact('attendances'));
    }

    public function create()
    {
        return view('attendance.create');
    }

    public function store(Request $request)
    {
        Attendance::create([
            'nim' => $request->nim,
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect('/attendance');
    }

    public function edit($id)
    {
        $attendance = Attendance::find($id);
        return view('attendance.edit', compact('attendance'));
    }

    public function update(Request $request, $id){
        
        Attendance::find($id)->update([
            'nim' => $request->nim,
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect('/attendance');
    }

    public function destroy($id){
        Attendance::find($id)->delete();

        return redirect('/attendance');
    }
}
