<?php

namespace App\Http\Controllers\Admin;

use App\Models\OurService;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class OurServicesController extends Controller
{
    public function list()
    {
        $data['getRecord'] = OurService::getOurService();
        $data['header_title'] = "Service";
        return view('admin.service.list', $data);
    }
    public function add()
    {
        $data['header_title'] = "Add Service";
        return view('admin.service.add', $data);
    }
    public function insert(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'type' => 'required',
            'experience' => 'required',
            // 'slider_image' =>'required|mimes:png,jpg,bmp,jpeg'
            'file' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        if($request->file('image'))
        {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
            $imgname = $manager->read($request->file('image'));
            $img = $imgname->resize(1894,772);

            $img->toJpeg(80)->save(base_path('public/upload/service/'.$name_gen));
        }

        $service = new OurService;
        $service->name = $request->name;
        $service->type = $request->type;
        $service->experience = $request->experience;
        $service->about_service = $request->about_service;
        $service->image = $name_gen;
        $service->save();

        return redirect('admin/service/list')->with('success', 'Slider Created Successfully');

    }
    public function edit($id)
    {
        $data['getRecord'] = OurService::getSingle($id);
        $data['header_title'] = "Edit Slider";
        return view('admin.service.edit',$data);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'type' => 'required',
            'experience' => 'required',
            // 'slider_image' =>'required|mimes:png,jpg,bmp,jpeg'
            'file' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        $service = OurService::getSingle($id);

        if(!empty($request->file('image'))){

                if(!'upload/service/'.$service->image)
                {
                    $manager = new ImageManager(new Driver());
                    $name_gen = hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
                    $imgname = $manager->read($request->file('image'));
                    $img = $imgname->resize(1894,772);

                    $img->toJpeg(80)->save(base_path('public/upload/service/'.$name_gen));
                    $service->image = $name_gen;
                }
                else
                {
                    if('upload/service/'.$service->image)
                    {
                        unlink('upload/service/'.$service->image);
                    }
                    $manager = new ImageManager(new Driver());
                    $name_gen = hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
                    $imgname = $manager->read($request->file('image'));
                    $img = $imgname->resize(1894,772);

                    $img->toJpeg(80)->save(base_path('public/upload/service/'.$name_gen));
                    $service->image = $name_gen;

                }

                $service->name = $request->name;
                $service->type = $request->type;
                $service->experience = $request->experience;
                $service->about_service = $request->about_service;
                $service->save();
        }
        else
        {

            $service->name = $request->name;
            $service->type = $request->type;
            $service->experience = $request->experience;
            $service->about_service = $request->about_service;
            $service->save();
        }
        return redirect('admin/service/list')->with('success', 'Service Updated Successfully');
    }

    public function delete($id)
    {
        $service = OurService::getSingle($id);
        $service->is_delete = 1;
        $service->save();
        return redirect()->back()->with('error','Your data deleted successfully');

    }
}
