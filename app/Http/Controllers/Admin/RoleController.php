<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;

class RoleController extends Controller
{
    public function index(Request $request)
    {
    	$role = Role::all();
    	$data['roles'] = $role;
    	return view('admin.role.index',$data);
    }

    public function create(Request $request)
    {
    	return view ('admin.role.create');
    }

    public function edit(Request $request,$id)
    {
    	$role = Role::findOrFail($id);
    	$data['role'] = $role;
    	return view ('admin.role.edit',$data);
    }

    public function store(Request $request)
    {
        $role = new Role;
        $role->nama = $request->nama;
    	$role->description = $request->description;
    	$role->save();

    	return redirect('admin/role')->with('success','Data Berhasil di Simpan');
    }

    public function update(Request $request, $id)
    {
    	$role = Role::findOrFail($id);
    	$role->nama = $request->nama;
        $role->description = $request->description;
        $role->save();

    	return redirect('admin/role')->with('success','Data Berhasil di Simpan');
    }

    public function delete(Request $request, $id)
    {
    	$role = Role::findOrFail($id);
    	$role->delete();
    	
    	return redirect('admin/role')->with('success','Data Berhasil di Hapus');
    }


}
