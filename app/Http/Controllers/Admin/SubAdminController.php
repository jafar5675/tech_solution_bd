<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class SubAdminController extends Controller
{
    public function list()
    {
        $data['getRecord'] = User::getSubAdmin();
        $data['header_title'] = "Subadmin";
        return view('admin.subadmin.list',$data);
    }
    public function add()
    {
        $data['header_title'] = "Add New Subdmin";
        return view('admin.subadmin.add',$data);
    }

    public function insert(Request $request)
    {
        request()->validate([
            'email' => 'required|email|unique:users'
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->status = $request->status;
        $user->is_admin = 2;
        $user->save();

        return redirect('admin/subadmin/list')->with('success', 'Subdmin Created Successfully');
    }

    public function edit($id)
    {
        $data['getRecord'] = User::getSingle($id);
        $data['header_title'] = "Edit Subadmin";
        return view('admin.subadmin.edit',$data);
    }

    public function update($id,Request $request)
    {
        request()->validate([
            'email' => 'required|email|unique:users,email,'.$id
        ]);
        $user = User::getSingle($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if(!empty($request->password))
        {
            $user->password = Hash::make($request->password);
        }
        $user->status = $request->status;
        $user->is_admin = 2;
        $user->save();

        return redirect('admin/subadmin/list')->with('success', 'Subadmin Updated Successfully');
    }

    public function delete($id)
    {
        $user = User::getSingle($id);
        $user->is_delete = 1;
        $user->save();
        return redirect()->back()->with('error','Your data deleted successfully');

    }
}