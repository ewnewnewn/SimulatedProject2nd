<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Http\Requests\ReservationRequest;

class ReservationController extends Controller
{
    public function store(ReservationRequest $request, $shopId)
    {
        // フォームデータからReservationモデルに登録するデータを抽出
        $reservationData = [
            'user_id' => auth()->user()->id, // ユーザーID（仮定）
            'shop_id' => $shopId,
            'reservation_date' => $request->input('reservation_date'),
            'reservation_time' => $request->input('reservation_time'),
            'reservation_member' => $request->input('reservation_member'),
        ];

        Reservation::create($reservationData);

        return redirect('/done');
    }

    public function reservationDone()
    {
        return view('ReservationDone');
    }
}
