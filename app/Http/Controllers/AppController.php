<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wish;
use App\Models\Guest;
use Response;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (!$request->code) {
            return redirect()->route('showConfirmForm');
        }

        $wishes = Wish::all();
        return view('home')->with([
            'wishes' => $wishes,
            'donate' => true,
            'qrInfo' => [
                'image' => './assets/images/qr/nhatrai.jpg',
                'bank' => 'Viet Combank',
                'account' => 'Tạ Quang Tùng',
                'bankNumber' => '1020193195',
            ]
        ]);
    }

    public function wishList()
    {
        $wishes = Wish::all();
        return Response::json($wishes);
    }

    public function wish(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string|max:255',
            'email' => 'nullable|string|max:255|email',
            'phone' => 'nullable|max:255|numeric',
        ]);

        Wish::create($request->only(['email', 'message', 'name', 'phone']));

        return redirect()->back();
    }

    public function showConfirmForm()
    {
        return view('join');
    }

    public function join(Request $request)
    {
        dd($request->all());
    }

    public function searchGuests(Request $request)
    {
        $guests = Guest::all();
        return Response::json($guests);
    }

    public function invitation()
    {
        return view('invitation');
    }
}
