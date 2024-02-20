<?php

namespace App\Http\Controllers;

use App\Mail\SendMessageHeadOffice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request)
    {
        $rules = ['captcha' => 'required|captcha'];
        $validator = validator()->make(request()->all(), $rules);
        if ($validator->fails()) {
            return redirect('head-office#sent')
                ->withInput()
                ->with('error-captcha', 'Kode Captcha Salah! Coba lagi');
        }

        $fields = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'product' => $request->product,
            'message' => $request->message,
        ];

        $mail_destination = '';
        if (env('MAIL_TO_INFO') != '') {
            $mail_destination = env('MAIL_TO_INFO');
        } else {
            $mail_destination = 'galuhpradipta95+infopoj@gmail.com';
        }
        Mail::to($mail_destination)->send(new SendMessageHeadOffice($fields));
        return redirect('head-office#main-content')->with('success', 'Pesan berhasil dikirim!');
    }
}
