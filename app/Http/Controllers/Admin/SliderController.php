<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Slider;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class SliderController extends Controller
{
    public function list()
    {
        $data['getRecord'] = Slider::getSlider();
        $data['header_title'] = "Slider";
        return view('admin.slider.list', $data);
    }
    public function add()
    {
        $data['header_title'] = "Add Slider";
        return view('admin.slider.add', $data);
    }
    public function insert(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'big_title' => 'required',
            // 'slider_image' =>'required|mimes:png,jpg,bmp,jpeg'
            'file' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        if($request->file('slider_image'))
        {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('slider_image')->getClientOriginalExtension();
            $imgname = $manager->read($request->file('slider_image'));
            $img = $imgname->resize(1894,772);

            $img->toJpeg(80)->save(base_path('public/upload/slider/'.$name_gen));
        }

        $slider = new Slider;
        $slider->title = $request->title;
        $slider->slug = Str::slug($request->title);
        $slider->big_title = $request->big_title;
        $slider->status = $request->status;
        $slider->slider_image = $name_gen;
        $slider->save();

        return redirect('admin/slider/list')->with('success', 'Slider Created Successfully');

    }
    public function edit($id)
    {
        $data['getRecord'] = Slider::getSingle($id);
        $data['header_title'] = "Edit Slider";
        return view('admin.slider.edit',$data);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'big_title' => 'required',
            'file' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        $slider = Slider::getSingle($id);

        if(!empty($request->file('slider_image'))){

                if(!'upload/slider/'.$slider->slider_image)
                {
                    $manager = new ImageManager(new Driver());
                    $name_gen = hexdec(uniqid()).'.'.$request->file('slider_image')->getClientOriginalExtension();
                    $imgname = $manager->read($request->file('slider_image'));
                    $img = $imgname->resize(1894,772);

                    $img->toJpeg(80)->save(base_path('public/upload/slider/'.$name_gen));
                    $slider->slider_image = $name_gen;
                }
                else
                {
                    if('upload/slider/'.$slider->slider_image)
                    {
                        unlink('upload/slider/'.$slider->slider_image);
                    }
                    $manager = new ImageManager(new Driver());
                    $name_gen = hexdec(uniqid()).'.'.$request->file('slider_image')->getClientOriginalExtension();
                    $imgname = $manager->read($request->file('slider_image'));
                    $img = $imgname->resize(1894,772);

                    $img->toJpeg(80)->save(base_path('public/upload/slider/'.$name_gen));
                    $slider->slider_image = $name_gen;

                }
            $slider->title = $request->title;
            $slider->slug = Str::slug($request->title);
            $slider->big_title = $request->big_title;
            $slider->status = $request->status;
            $slider->save();
        }
        else
        {
            $slider->title = $request->title;
            $slider->slug = Str::slug($request->title);
            $slider->big_title = $request->big_title;
            $slider->status = $request->status;
            $slider->save();
        }
        return redirect('admin/slider/list')->with('success', 'Slider Updated Successfully');
    }

    public function delete($id)
    {
        $slider = Slider::getSingle($id);
        $slider->is_delete = 1;
        $slider->save();
        return redirect()->back()->with('error','Your data deleted successfully');

    }

}
