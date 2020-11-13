<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends ApiController
{
    public function room(Request $request)
    {
        $room = Room::where('id', $request->id)
                    ->with('seats')
                    ->first();
        return array_merge(self::success(), [
            'room' => $room,
        ]);
    }
}
