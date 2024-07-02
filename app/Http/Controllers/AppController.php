<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wish;
use App\Models\Guest;
use Response;
use Carbon\Carbon;

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

        $wishes = Wish::orderBy('id', 'desc')->get();

        $guest = Guest::where('code', $request->code)->firstOrFail();

        return view('home')->with([
            'wishes' => $wishes,
            'donate' => $guest->is_show_bank,
            'guest' => $guest,
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
        $wishes = Wish::orderBy('id', 'desc')->get();
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

        $data = $request->only(['email', 'message', 'name', 'phone']);

        if ($request->code) {
            $guest = Guest::where('code', $request->code)->first();
            $data['guest_id'] = $guest->id ?? null;
        }

        Wish::create($data);

        return Response::json([
            'status' => 'ok'
        ]);
    }

    public function showConfirmForm()
    {
        return view('join');
    }

    public function join(Request $request)
    {
        dd($request->all());
    }

    public function confirmJoin(Request $request)
    {
        $guest = Guest::where('code', $request->code)->firstOrFail();
        $guest->update([
            'confirm_at' => Carbon::now()
        ]);
        return redirect()->back();
    }


    public function searchGuests(Request $request)
    {
        $keyword = str_replace(' ', '%', $request->keyword);

        if (!$keyword) {
            return Response::json([]);
        }

        $guests = Guest::where('code', 'like', '%'.str_replace(' ', '', $request->keyword).'%')
            ->orWhere('name', 'like', '%'.$keyword.'%')
            ->orWhere('phone', 'like', '%'.str_replace(' ', '', $request->keyword).'%')
            ->orWhere('email', 'like', '%'.$keyword.'%')
            ->get()->map(function ($guest) {
                $guest->phone = '**'.substr($guest->phone, 2, 4). '**********';
                $guest->email = '**'.substr($guest->email, 2, 7). '**********';
                return $guest;
            });
        return Response::json($guests);
    }

    public function invitation()
    {
        return view('invitation');
    }
}
