<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Leave;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PortalController extends Controller
{
    public function profile(){
        return view('user.profile.infomation');
    }

    public function ot(){
        return view('user.profile.ot');
    }

    public function nghi(){
        $leaves = Leave::where('employee_id', Auth::guard('web')->user()->identity)->get();
        return view('user.profile.nghi')->with(['leaves' => $leaves]);
    }

    public function postRegisterLeave(Request $request){
        Leave::create([
            'employee_id' => Auth::guard('web')->user()->identity,
            'start' => $request->get('start'),
            'end' => $request->get('end'),
            'total' => $request->get('total'),
            'status' => 0
        ]);

        $department = Department::where('name', Auth::guard('web')->user()->department)->first();
        if($department){
            $manager = User::where('id', $department->manager_id)->first();

            if ($manager){
                Notification::create([
                    'manager_id' => $manager->id,
                    'message' => 'Bạn có đơn xin nghỉ phép từ ' . Auth::guard('web')->user()->fullname
                ]);
            }
        }

        toastr()->success('Thêm phép nghỉ thành công', 'Thành công');

        return back();
    }

    public function postRegisterOT(Request $request){
        
    }

    
}
