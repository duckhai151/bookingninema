<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Jobs\SendEmail;
use App\Models\Seat;
use App\Models\SeatStatus;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $ticket = new Ticket();
            $ticket->name = $request['user']['name'];
            $ticket->phone = $request['user']['phone'];
            $ticket->email = $request['user']['email'];
            $ticket->showtime_id = $request['listBooking']['showtimeId'];
            $ticket->room_id = $request['listBooking']['roomId'];
            $ticket->seat_id = json_encode($request['listBooking']['seat']);
            $ticket->movie_id = $request['listBooking']['movieId'];
            $ticket->total_price = doubleval($request['listBooking']['price']);
            $ticket->status = 0;
            if($ticket->save()) {
//                foreach($request['listBooking']['seat'] as $seat) {
//                    $seatStatus = SeatStatus::where('seat_id', $seat)
//                        ->where('showtime_id',  $request['listBooking']['showtimeId'])
//                        ->first();
//                    $seatStatus->update([
//                        'status' => 1
//                    ]);
//                }
                $data = new \stdClass();
                $data->ticketId = $ticket->id;
                $data->name = $ticket->name;
                $data->phone = $ticket->phone;
                $data->email = $ticket->email;
                $data->seat_id = $ticket->seat_id;
                $data->movieName = $request['listBooking']['movieName'];
                $data->date = $request['listBooking']['date'];
                $data->time = $request['listBooking']['time'];
                $data->seatName = $request['listBooking']['seatName'];
                $this->sendMailTicket($data);
            }
        } catch (\Exception $exception) {

        }
    }

    public function sendMailTicket($data) {
        SendEmail::dispatch($data, $data->email);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ticket = Ticket::find($id);
        $ticket->status = 1;
        $ticket->save();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
