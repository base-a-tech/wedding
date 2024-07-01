<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.manager.index', [
            'admins' => Admin::all()
        ]);
    }

    public function edit($id)
    {
        return view('admin.manager.edit', ['admin' => Admin::findOrFail($id)]);
    }

    public function create()
    {
        return view('admin.manager.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|string|max:255|email|unique:admins,email',
            'password' => 'required|string|max:255',
            'name' => 'required|string|max:255'
        ]);

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('admin.manager.index');
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'email' => 'required|string|max:255|email|exists:admins,email',
            'password' => 'nullable|string|max:255',
            'name' => 'required|string|max:255'
        ]);

        $admin = Admin::findOrFail($id);

        $admin->name = $request->name;
        $admin->email = $request->email;
        if ($admin->password) {
            $admin->password = Hash::make($request->password);
        }

        $admin->save();

        return redirect()->route('admin.manager.index');
    }

    public function delete($id)
    {
        Admin::whereId($id)->delete();

        return redirect()->route('admin.manager.index');
    }
}
