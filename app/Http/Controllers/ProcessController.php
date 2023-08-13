<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use App\Models\TimeKeeping;
use Illuminate\Http\Request;

class ProcessController extends Controller
{
    public function index(){
        $leaves = Leave::where('status', 0)->get();
        $ots = TimeKeeping::where('status', 0)->get();
        return view('admin.administrator.process')->with(['leaves' => $leaves, 'ots' => $ots]);
    }

    public function acceptLeave(Leave $leave){
        $leave->update([
            'status' => 1
        ]);

        toastr()->success('Duyệt thành công','Thành công');
        return back();
    }
    public function acceptOt(TimeKeeping $ot){
        $ot->update([
            'status' => 1
        ]);

        toastr()->success('Duyệt thành công','Thành công');
        return back();
    }
}
