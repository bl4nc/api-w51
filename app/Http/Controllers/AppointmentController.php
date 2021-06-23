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
        $appointment->setName($data['name']);
        $appointment->setEmail($data['email']);
        $appointment->setService($data['service']);
        $appointment->setPhoneNumber($data['phone_number']);
        $appointment->setDate($data['data']);
        $appointment->setTime($data['time']);
        $appointment->setYourNotes($data['your_notes']);

        $appointment->save();
        return $response()->json(['sucess'=>true,'msg'=>'Appointment send']);

    }
}
