<?php

namespace App\Http\Controllers;

use App\Imports\ImportLabour;
use App\Models\Employee;
use App\Models\Labour;
use App\Models\Leave;
use App\Models\TimeKeeping;
use App\Models\TotalLabour;
use App\Models\TotalLeave;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class LabourSalaryController extends Controller
{
    public function labour()
    {
        $year = date('Y');

        $employee = Employee::all();
        foreach ($employee as $item) {
            $identity = $item->identity;
            for ($i = 1; $i <= 12; $i++) {
                $count = DB::table('labours')->where('employee_id', '=', $identity)->whereMonth('date', '=', $i)->whereYear('date', '=', $year)->count();
                $labour = TotalLabour::where([['month', '=', $i], ['employee_id', '=', $identity], ['year', '=', $year]])->first();
                if (!$labour) {
                    TotalLabour::create([
                        'employee_id' => $identity,
                        'month' => $i,
                        'year' => $year,
                        'real_labour' => $count,
                        'leave_labour' => 0,
                        'ot_labour' => 0,
                        'total_labour' => 0
                    ]);
                }else{
                    $labour->update([
                        'employee_id' => $identity,
                        'month' => $i,
                        'year' => $year,
                        'real_labour' => $count,
                        'leave_labour' => 0,
                        'ot_labour' => 0,
                        'total_labour' => 0
                    ]);
                }
            }
        }

        $labours = TotalLabour::all();
        return view('admin.labour-salary.labour')->with(['total_labours' => $labours]);
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
        // $labours = TotalLabour::all();
        return view('admin.labour-salary.salary');
    }

    public function viewSalary(Request $request){
        // dd($request->all());

        $total_labour = TotalLabour::all();
        
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
        $ots = TimeKeeping::all();
        return view('admin.labour-salary.ot')->with(['ots' => $ots]);
    }
}
