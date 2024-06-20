<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\OurExpert;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class OurExpertsController extends Controller
{
    public function list()
    {
        $data['getRecord'] = OurExpert::getExperts();
        $data['header_title'] = "Expert";
        return view('admin.experts.list', $data);
    }
    public function add()
    {
        $data['header_title'] = "Add Expert";
        return view('admin.experts.add', $data);
    }
    public function insert(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'designation' => 'required',
            'experience' => 'required',
            // 'slider_image' =>'required|mimes:png,jpg,bmp,jpeg'
            'file' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        if($request->file('expert_image'))
        {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('expert_image')->getClientOriginalExtension();
            $imgname = $manager->read($request->file('expert_image'));
            $img = $imgname->resize(370,373);

            $img->toJpeg(80)->save(base_path('public/upload/expert/'.$name_gen));
        }

        $expert = new OurExpert;
        $expert->name = $request->name;
        $expert->designation = $request->designation;
        $expert->experience = $request->experience;
        $expert->message = $request->message;
        $expert->project_experience = $request->project_experience;
        $expert->about_expert = $request->about_expert;
        $expert->expert_image = $name_gen;
        $expert->save();

        return redirect('admin/expert/list')->with('success', 'Expert Created Successfully');

    }
    public function edit($id)
    {
        $data['getRecord'] = OurExpert::getSingle($id);
        $data['header_title'] = "Edit Expert";
        return view('admin.experts.edit',$data);
    }

    public function update($id, Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'name' => 'required',
            'designation' => 'required',
            'experience' => 'required',
            'file' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        $expert = OurExpert::getSingle($id);

        if(!empty($request->file('expert_image'))){

                if(!'upload/expert/'.$expert->expert_image)
                {
                    $manager = new ImageManager(new Driver());
                    $name_gen = hexdec(uniqid()).'.'.$request->file('expert_image')->getClientOriginalExtension();
                    $imgname = $manager->read($request->file('expert_image'));
                    $img = $imgname->resize(370,373);

                    $img->toJpeg(80)->save(base_path('public/upload/expert/'.$name_gen));
                    $expert->expert_image = $name_gen;
                }
                else
                {
                    if('upload/expert/'.$expert->expert_image)
                    {
                        unlink('upload/expert/'.$expert->expert_image);
                    }
                    $manager = new ImageManager(new Driver());
                    $name_gen = hexdec(uniqid()).'.'.$request->file('expert_image')->getClientOriginalExtension();
                    $imgname = $manager->read($request->file('expert_image'));
                    $img = $imgname->resize(370,373);

                    $img->toJpeg(80)->save(base_path('public/upload/expert/'.$name_gen));
                    $expert->expert_image = $name_gen;

                }
                $expert->name = $request->name;
                $expert->designation = $request->designation;
                $expert->experience = $request->experience;
                $expert->message = $request->message;
                $expert->project_experience = $request->project_experience;
                $expert->about_expert = $request->about_expert;
                $expert->save();
        }
        else
        {
            $expert->name = $request->name;
            $expert->designation = $request->designation;
            $expert->experience = $request->experience;
            $expert->message = $request->message;
            $expert->project_experience = $request->project_experience;
            $expert->about_expert = $request->about_expert;
            $expert->save();
        }
        return redirect('admin/expert/list')->with('success', 'Expert Updated Successfully');
    }

    public function delete($id)
    {
        $expert = OurExpert::getSingle($id);
        $expert->is_delete = 1;
        $expert->save();
        return redirect()->back()->with('error','Your data deleted successfully');

    }
}