<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SendContact;

class SendContactController extends Controller
{
    public function send_contact(Request $request)
    {

        if (empty($request->name) || empty($request->email) || empty($request->comment)) {
            return response()->json(['sucess' => false, 'msg' => 'Preencha todos os campos!']);
        }

        if (SendContact::where('email', $request->email)->exists()) {
            return response()->json(['sucess' => false, 'msg' => 'O contato já foi feito, aguarde o nosso retorno!']);
        } else {
            $contact = new SendContact;
            $contact->name = ($request->name ?? '-');
            $contact->email = ($request->email ?? '-');
            $contact->comment = ($request->comment ?? '-');

            if ($contact->save()) {
                return response()->json(['sucess' => true, 'msg' => 'Contact send']);
            } else {
                return response()->json(['sucess' => false, 'msg' => 'Insert error']);
            };
        }
    }
}
