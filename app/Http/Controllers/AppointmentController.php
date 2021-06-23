<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Appointment;


class AppointmentController extends Controller
{
    public function insert_appointment(Request $request)
    {
        if (empty($request->name) || empty($request->email) || empty($request->service) || empty($request->phone_number) || empty($request->date) || empty($request->time) || empty($request->your_notes)) {
            return response()->json(['sucess' => false, 'msg' => 'Preencha todos os campos!']);
        }
        if (Appointment::where('email', $request->email)->exists()) {
            return response()->json(['sucess' => false, 'msg' => 'O Appointment já foi feito, aguarde o nosso retorno!']);
        } else {
            $appointment = new Appointment;
            $appointment->name = ($request->name ?? '-');
            $appointment->email = ($request->email ?? '-');
            $appointment->service = ($request->service ?? '-');
            $appointment->phone_number = ($request->phone_number ?? '-');
            $appointment->date = ($request->date);
            $appointment->time = ($request->time);
            $appointment->your_notes = ($request->your_notes ?? '-');

            if ($appointment->save()) {
                return response()->json(['sucess' => true, 'msg' => 'Appointment send']);
            } else {
                return response()->json(['sucess' => false, 'msg' => 'Insert error']);
            };
        }
    }
}
