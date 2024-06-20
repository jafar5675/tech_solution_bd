<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ProjectController extends Controller
{
    public function list()
    {
        $data['getRecord'] = Project::getProject();
        $data['header_title'] = "Project";
        return view('admin.project.list', $data);
    }
    public function add()
    {
        $data['header_title'] = "Add Project";
        return view('admin.project.add', $data);
    }
    public function insert(Request $request)
    {
        $this->validate($request,[
            'project_name' => 'required',
            'short_title' => 'required',
            'file' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        if($request->file('icon'))
        {
            $manager = new ImageManager(new Driver());
            $icon_gen = hexdec(uniqid()).'.'.$request->file('icon')->getClientOriginalExtension();
            $imgname = $manager->read($request->file('icon'));
            $img = $imgname->resize(97,53);

            $img->toJpeg(80)->save(base_path('public/upload/project/icon/'.$icon_gen));

        }
        if($request->file('image'))
        {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
            $imgname = $manager->read($request->file('image'));
            $img = $imgname->resize(370,423);

            $img->toJpeg(80)->save(base_path('public/upload/project/'.$name_gen));
        }

        $project = new Project;
        $project->project_name = trim($request->project_name);
        $project->short_title = trim($request->short_title);
        $project->short_description = trim($request->short_description);
        $project->client = trim($request->client);
        $project->category = trim($request->category);
        $project->service = trim($request->service);
        $project->web = trim($request->web);
        $project->deployment = trim($request->deployment);
        $project->challenge = trim($request->challenge);
        $project->result = trim($request->result);
        $project->image = $name_gen;
        $project->icon = $icon_gen;
        $project->save();

        return redirect('admin/project/list')->with('success', 'Project Details Created Successfully');

    }
    public function edit($id)
    {
        $data['getRecord'] = Project::getSingle($id);
        $data['header_title'] = "Edit Project";
        return view('admin.project.edit',$data);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'type' => 'required',
            'file' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        $project = Project::getSingle($id);

        if(!empty($request->file('icon'))){
            $manager = new ImageManager(new Driver());
            $icon_gen = hexdec(uniqid()).'.'.$request->file('icon')->getClientOriginalExtension();
            $imgname = $manager->read($request->file('icon'));
            $img = $imgname->resize(97,53);

            $img->toJpeg(80)->save(base_path('public/upload/project/icon/'.$icon_gen));
            $project->icon = $icon_gen;
        }
        if(!empty($request->file('image'))){

                if(!'upload/project/'.$project->image)
                {
                    $manager = new ImageManager(new Driver());
                    $name_gen = hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
                    $imgname = $manager->read($request->file('image'));
                    $img = $imgname->resize(370,423);

                    $img->toJpeg(80)->save(base_path('public/upload/project/'.$name_gen));
                    $project->image = $name_gen;
                }
                else
                {
                    if('upload/project/'.$project->image)
                    {
                        unlink('upload/project/'.$project->image);
                    }
                    $manager = new ImageManager(new Driver());
                    $name_gen = hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
                    $imgname = $manager->read($request->file('image'));
                    $img = $imgname->resize(370,423);

                    $img->toJpeg(80)->save(base_path('public/upload/project/'.$name_gen));
                    $project->image = $name_gen;

                }
                $project->project_name = trim($request->project_name);
                $project->short_title = trim($request->short_title);
                $project->short_description = trim($request->short_description);
                $project->client = trim($request->client);
                $project->category = trim($request->category);
                $project->service = trim($request->service);
                $project->web = trim($request->web);
                $project->deployment = trim($request->deployment);
                $project->challenge = trim($request->challenge);
                $project->result = trim($request->result);
                $project->save();
        }
        else
        {
        $project->project_name = trim($request->project_name);
        $project->short_title = trim($request->short_title);
        $project->short_description = trim($request->short_description);
        $project->client = trim($request->client);
        $project->category = trim($request->category);
        $project->service = trim($request->service);
        $project->web = trim($request->web);
        $project->deployment = trim($request->deployment);
        $project->challenge = trim($request->challenge);
        $project->result = trim($request->result);
        $project->save();
        }
        return redirect('admin/project/list')->with('success', 'Project Detail Updated Successfully');
    }

    public function delete($id)
    {
        $project = Project::getSingle($id);
        $project->is_delete = 1;
        $project->save();
        return redirect()->back()->with('error','Your data deleted successfully');

    }
}