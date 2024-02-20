<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Models\Vacancy;
use App\Models\WebSetting;
use App\Models\VacancyApplication;
use App\Mail\VacancyApplicationMail;

class VacancyController extends Controller
{
    public function pageJobVacancy()
    {
        $vacancies = Vacancy::active()->orderBy('created_at', 'desc')->get();
        return view('vacancy.job-vacancy', compact('vacancies'));
    }

    public function pageJoinUs()
    {
        $vacancies = Vacancy::active()->get();
        return view('vacancy.join-us', compact('vacancies'));
    }

    public function createApplication(Request $request)
    {
        $rules = ['captcha' => 'required|captcha'];
        $validator = validator()->make(request()->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('join-us')->with('error', 'Captcha is invalid');
        }

        $application = new VacancyApplication;

        try {
            if ($request->has('file')) {
                $file = $request->file('file');
                $path = 'vacancy/' . $request->input('vacancy_id') . '/' . $file->getClientOriginalName();
                $cloudPath = Storage::disk('s3')->put($path, $file);
                $vacancy = array_merge($request->except('_token'), ['cv_url' => $cloudPath], ['vacancy_id' => 0]);
            }

            $application = VacancyApplication::create($vacancy);
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

        
        $webSetting = WebSetting::where('key', 'email_receiver_vacancy')->first();
        Mail::to($webSetting->value)->send(new VacancyApplicationMail($application));

        return redirect()->back()->with('success', 'Lamaran berhasil dikirim');
    }
}
