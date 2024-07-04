<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guest;

class GuestController extends Controller
{
    public function index(Request $request)
    {
        $guests = Guest::orderBy('id', 'desc');
        
        if ($request->code) {
            $guests->where('code', 'like', '%'.$request->code.'%');
        }

        if ($request->name) {
            $guests->where('name', 'like', '%'.$request->name.'%');
        }

        if ($request->email) {
            $guests->where('email', 'like', '%'.$request->email.'%');
        }

        if ($request->phone) {
            $guests->where('phone', 'like', '%'.$request->phone.'%');
        }

        if ($request->side) {
            $guests->where('side', $request->side);
        }

        return view('admin.guest.index', [
            'guests' => $guests->paginate(10)
        ]);
    }

    public function edit($id)
    {
        return view('admin.guest.edit', ['guest' => Guest::findOrFail($id)]);
    }

    public function create()
    {
        return view('admin.guest.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'nullable|string|max:255|email',
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|numeric',
            'side' => 'required|string|numeric',
            'address' => 'required|string|max:255',
        ]);

        Guest::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'side' => $request->side,
            'address' => $request->address,
            'code' => getdate()[0]
        ]);

        return redirect()->route('admin.guest.index');
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'email' => 'nullable|string|max:255|email',
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|numeric',
            'side' => 'required|string|numeric',
            'address' => 'required|string|max:255',
        ]);


        $guest = Guest::findOrFail($id);

        $guest->update($request->only([
            'email', 'name', 'phone', 'side', 'address'
        ]));

        $guest->save();

        return redirect()->route('admin.guest.index');
    }

    public function delete($id)
    {
        Guest::whereId($id)->delete();

        return redirect()->route('admin.guest.index');
    }
}
