<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Exports\AttendanceExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::orderBy('id', 'desc')->paginate(5); //can use created_at
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

    public function export_excel()
	{
		return Excel::download(new AttendanceExport, 'users-' . time() . '.xlsx');
	}

}
