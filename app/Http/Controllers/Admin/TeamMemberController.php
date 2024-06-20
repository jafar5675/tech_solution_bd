<?php

namespace App\Http\Controllers\Admin;

use App\Models\TeamMember;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class TeamMemberController extends Controller
{
    public function list()
    {
        $data['getRecord'] = TeamMember::getTeamMember();
        $data['header_title'] = "Team Member";
        return view('admin.team.list', $data);
    }
    public function add()
    {
        $data['header_title'] = "Add Team Member";
        return view('admin.team.add', $data);
    }
    public function insert(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'qualification' => 'required',
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

            $img->toJpeg(80)->save(base_path('public/upload/team/'.$name_gen));
        }

        $member = new TeamMember;
        $member->name = $request->name;
        $member->qualification = $request->qualification;
        $member->experience = $request->experience;
        $member->about_member = $request->about_member;
        $member->image = $name_gen;
        $member->save();

        return redirect('admin/team/list')->with('success', 'Team Member Created Successfully');

    }
    public function edit($id)
    {
        $data['getRecord'] = TeamMember::getSingle($id);
        $data['header_title'] = "Edit Expert";
        return view('admin.team.edit',$data);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'qualification' => 'required',
            'experience' => 'required',
            'file' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        $member = TeamMember::getSingle($id);

        if(!empty($request->file('image'))){

                if(!'upload/team/'.$member->image)
                {
                    $manager = new ImageManager(new Driver());
                    $name_gen = hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
                    $imgname = $manager->read($request->file('image'));
                    $img = $imgname->resize(1894,772);

                    $img->toJpeg(80)->save(base_path('public/upload/team/'.$name_gen));
                    $member->image = $name_gen;
                }
                else
                {
                    if('upload/team/'.$member->image)
                    {
                        unlink('upload/team/'.$member->image);
                    }
                    $manager = new ImageManager(new Driver());
                    $name_gen = hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
                    $imgname = $manager->read($request->file('image'));
                    $img = $imgname->resize(1894,772);

                    $img->toJpeg(80)->save(base_path('public/upload/team/'.$name_gen));
                    $member->image = $name_gen;

                }
                $member->name = $request->name;
                $member->qualification = $request->qualification;
                $member->experience = $request->experience;
                $member->about_member = $request->about_member;
                $member->save();
        }
        else
        {
            $member->name = $request->name;
            $member->qualification = $request->qualification;
            $member->experience = $request->experience;
            $member->about_member = $request->about_member;
            $member->save();
        }
        return redirect('admin/team/list')->with('success', 'Team Member Updated Successfully');
    }

    public function delete($id)
    {
        $member = TeamMember::getSingle($id);
        $member->is_delete = 1;
        $member->save();
        return redirect()->back()->with('error','Your data deleted successfully');

    }
}
