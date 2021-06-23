<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Appointment;


class AppointmentController extends Controller
{
    public function insert_appointment(Request $request, Response $response)
    {
        $data = $request->all();

        $appointment = new Appointment();
        $appointment->name ($data['name']);
        $appointment->email($data['email']);
        $appointment->service($data['service']);
        $appointment->phone_number($data['phone_number']);
        $appointment->date($data['data']);
        $appointment->time($data['time']);
        $appointment->your_notes($data['your_notes']);

        $appointment->save();
        return $response()->json(['sucess'=>true,'msg'=>'Appointment send']);

    }
}
