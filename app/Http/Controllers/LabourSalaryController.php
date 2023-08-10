<?php

namespace App\Http\Controllers;

use App\Imports\ImportLabour;
use App\Models\Employee;
use App\Models\Labour;
use App\Models\Leave;
use App\Models\TotalLeave;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class LabourSalaryController extends Controller
{
    public function labour()
    {
        $labours = Labour::all();
        return view('admin.labour-salary.labour')->with(['labours' => $labours]);
    }

    public function postExcel(Request $request)
    {
        Excel::import(
            new ImportLabour,
            $request->file('excel')->store('file')
        );
        return redirect()->back();
    }

    public function salary()
    {
        return view('admin.labour-salary.salary');
    }


    public function totalOnLeave()
    {
        $total_leaves = TotalLeave::all();
        return view('admin.labour-salary.tonghopphep')->with(['total_leaves' => $total_leaves]);
    }

    public function refreshToTalOnLeave()
    {
        $total_leaves = TotalLeave::all();
        foreach ($total_leaves as $item) {
            $employee = Employee::where('identity', $item->employee_id)->first();
            $this_month = Carbon::parse(now());
            $start_month = Carbon::parse($employee->start_working_date);
            $diff = $start_month->diffInMonths($this_month);
            $item->update([
                'remaining' => $diff,
            ]);
            $item->save();
        }

        toastr()->success('Cập nhật thành công', 'Thành công');

        return redirect(route('labour-salary.total-on-leave'));
    }

    public function onLeave()
    {
        $leaves = Leave::all();
        return view('admin.labour-salary.nghiphep')->with(['leaves' => $leaves]);
    }

    public function timeKeeping()
    {
        return view('admin.labour-salary.ot');
    }
}
