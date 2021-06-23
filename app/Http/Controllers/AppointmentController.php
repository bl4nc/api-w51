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
        print_r($data);
        $appintment = new Appointment();
    }
}
