<?php

namespace App\Http\Controllers;

use App\Http\Requests\TitleRequest;
use App\Models\Title;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function chucdanh(){
        $titles = Title::all();
        return view('admin.categories.chucdanh.index')->with(['titles' => $titles]);
    }

    public function themChucDanh(TitleRequest $titleRequest){
        $data = $titleRequest->all();

        Title::create([
            'name' => $data['name'],
            'identity' => $data['identity'],
            'english_name' => $data['english_name']
        ]);

        toastr()->success('Thêm chức danh thành công', 'Thành công');
        return back();
    }


    public function destroy(Request $request){
        $title = Title::where('id', $request->get('id'))->first();
        $title->delete();
        toastr()->success('Xóa chức danh thành công', 'Thành công');
        return back();
    }

    public function calamviec(){
        return view('admin.categories.calamviec.index');
    }

    public function loaichamcong(){
        return view('admin.categories.loaichamcong.index');
    }

    public function loaihopdong(){
        return view('admin.categories.loaihopdong.index');
    }
}
