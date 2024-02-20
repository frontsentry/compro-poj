<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\WebSetting;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\WBSMail;


class ReportController extends Controller
{   
    public function create(Request $request) 
    {   
        $rules = ['captcha' => 'required|captcha'];
        $validator = validator()->make(request()->all(), $rules);
        if ($validator->fails()) {
            return redirect('report#sent')->with('error-captcha', 'Kode Captcha Salah! Coba lagi');
        }

        $report = new Report;
        try {    
            if ($request->has('file')) {
                $file = $request->file('file');
                $path = 'report/' . uniqid() . '/' . $file->getClientOriginalName();
                $cloudPath = Storage::disk('s3')->put($path, $file);
                $report = array_merge($request->except('_token'), ['file_url' => $cloudPath]);
                
            }

            $report = Report::create($report);
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('report')->with('error', $e->getMessage());
        }   

        $webSetting = WebSetting::where('key', 'email_receiver_wbs')->first();
        Mail::to($webSetting->value)->send(new WBSMail($report));
        
        return redirect('report#sent')->with('report-success', 'Pesan terkirim');
        
    }
}
