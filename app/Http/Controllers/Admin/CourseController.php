<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class CourseController extends Controller
{
    public function list()
    {
        $data['getRecord'] = Course::getCourse();
        $data['header_title'] = "Course";
        return view('admin.course.list', $data);
    }
    public function add()
    {
        $data['header_title'] = "Add Course";
        return view('admin.course.add', $data);
    }
    public function insert(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'about_course' => 'required',
            'file' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        if($request->file('image'))
        {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
            $imgname = $manager->read($request->file('image'));
            $img = $imgname->resize(370,346);

            $img->toJpeg(80)->save(base_path('public/upload/course/'.$name_gen));
        }

        $course = new Course;
        $course->name = trim($request->name);
        $course->type = trim($request->type);
        $course->experience = trim($request->experience);
        $course->about_course = trim($request->about_course);
        $course->image = $name_gen;
        $course->save();

        return redirect('admin/course/list')->with('success', 'Course Created Successfully');

    }
    public function edit($id)
    {
        $data['getRecord'] = Course::getSingle($id);
        $data['header_title'] = "Edit Course";
        return view('admin.course.edit',$data);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'about_course' => 'required',
            'file' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        $course = Course::getSingle($id);

        if(!empty($request->file('image'))){

                if(!'upload/course/'.$course->slider_image)
                {
                    $manager = new ImageManager(new Driver());
                    $name_gen = hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
                    $imgname = $manager->read($request->file('image'));
                    $img = $imgname->resize(370,346);

                    $img->toJpeg(80)->save(base_path('public/upload/course/'.$name_gen));
                    $course->image = $name_gen;
                }
                else
                {
                    if('upload/course/'.$course->slider_image)
                    {
                        unlink('upload/course/'.$course->slider_image);
                    }
                    $manager = new ImageManager(new Driver());
                    $name_gen = hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
                    $imgname = $manager->read($request->file('image'));
                    $img = $imgname->resize(370,346);

                    $img->toJpeg(80)->save(base_path('public/upload/course/'.$name_gen));
                    $course->image = $name_gen;

                }
                $course->name = trim($request->name);
                $course->type = trim($request->type);
                $course->experience = trim($request->experience);
                $course->about_course = trim($request->about_course);
                $course->save();
        }
        else
        {
        $course->name = trim($request->name);
        $course->type = trim($request->type);
        $course->experience = trim($request->experience);
        $course->about_course = trim($request->about_course);
        $course->save();
        }
        return redirect('admin/course/list')->with('success', 'Course Updated Successfully');
    }

    public function delete($id)
    {
        $course = Course::getSingle($id);
        $course->is_delete = 1;
        $course->save();
        return redirect()->back()->with('error','Your data deleted successfully');

    }
}