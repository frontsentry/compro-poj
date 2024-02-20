<?php

namespace App\Mail;

use App\Models\VacancyApplication;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;


class VacancyApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $fields;
    public $cv_url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(VacancyApplication $application)
    {       
        $this->fields = [
            'Nama' => $application->name,
            'Kewarganegaraan' => $application->nationality,
            'Jenis Kelamin' => $application->gender,
            'Alamat' => $application->address,
            'Provinsi' => $application->province,
            'Email' => $application->email,
            'Telepon' => $application->phone,
            'Posisi' => $application->vacancy_name,
            'Tahun Pengalaman' => $application->years_of_experience,
            'Keahlian' => $application->work_expertise,
            'Penempatan' => $application->work_placement,
            'Pendidikan Terakhir' => $application->latest_education,
            'Gelar Pendidikan' => $application->education_major,
            'Info Tambahan' => $application->additional_information,
            
        ];

        $this->cv_url = Storage::disk('s3')->url($application->cv_url);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
        return $this->subject('POJ - Lamaran Pekerjaan')
            ->markdown('emails.vacancy.application')->with([
                'fields' => $this->fields,
                'cv_url' => $this->cv_url,
            ]);
    }
}
