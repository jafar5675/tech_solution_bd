<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuBarController extends Controller
{
    public function list()
    {
        $data['getRecord'] = Menu::getMenu();
        $data['header_title'] = "Menu";
        return view('admin.menubar.list',$data);
    }
    public function add()
    {
        $data['header_title'] = "Add New Menu";
        return view('admin.menubar.add',$data);
    }

    public function insert(Request $request)
    {
        request()->validate([
            'name' => 'required'
        ]);
        $menu = new Menu;
        $menu->name = $request->name;
        $menu->status = $request->status;
        $menu->save();

        return redirect('admin/menu/list')->with('success', 'Menu Created Successfully');
    }

    public function edit($id)
    {
        $data['getRecord'] = Menu::getSingle($id);
        $data['header_title'] = "Edit Admin";
        return view('admin.menubar.edit',$data);
    }

    public function update($id,Request $request)
    {
        request()->validate([
            'menu' => 'required,'.$id
        ]);
        $Menu = Menu::getSingle($id);
        $Menu->name = $request->name;
        $Menu->status = $request->status;
        $Menu->is_admin = 1;
        $Menu->save();

        return redirect('admin/menu/list')->with('success', 'Admin Updated Successfully');
    }

    public function delete($id)
    {
        $Menu = Menu::getSingle($id);
        $Menu->is_delete = 1;
        $Menu->save();
        return redirect()->back()->with('error','Your data deleted successfully');

    }

}
