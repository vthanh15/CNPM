<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SliderFormRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    public function index(){
        $slider = Slider::all();
        return view('admin.slider.index', compact('slider'));
    }
    public function create(){
        return view('admin.slider.create');
    }

    public function store(SliderFormRequest $request){
        $data = $request->validated();
        $slider = new Slider;
        $slider->title = $data['title'];
        if($request->hasfile('image')){
            $destination = 'uploads/slider/' . $slider->image;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/slider/', $filename);
            $slider->image = $filename;
        }
        $slider->short_description = $data['short_description'];
        $slider->description = $data['description'];
        $slider->location = $data['location'];
        $slider->status = $request->status == true ? '1' : '0';
        $slider->created_by = Auth::user()->id;
        $slider->save();
        
        return redirect('admin/slider')->with('message','Thêm thành công!');
    }

    public function edit($sliders_id){
        $slider = Slider::find($sliders_id);
        return view('admin.slider.edit', compact('slider'));
    }

    public function update(SliderFormRequest $request, $sliders_id){
        $data = $request->validated();
        
        $slider = Slider::find($sliders_id);
        $slider->title = $data['title'];
        if($request->hasfile('image')){
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/slider/', $filename);
            $slider->image = $filename;
        }
        $slider->short_description = $data['short_description'];
        $slider->description = $data['description'];
        $slider->location = $data['location'];
        $slider->status = $request->status == true ? '1':'0';
        $slider->created_by = Auth::user()->id;
        $slider->update();

        return redirect('admin/slider')->with('message','Cập nhật thành công');
    }

    public function destroy($sliders_id){
        $slider = Slider::find($sliders_id);
        $slider->delete();
        return redirect()->route('slider') ->with('message', 'Xóa thành công');
    }
}
