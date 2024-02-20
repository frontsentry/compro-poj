<?php

namespace App\Mail;

use App\Models\Report;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class WBSMail extends Mailable
{
    use Queueable, SerializesModels;

    public $fields;
    public $file_url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Report $report)
    {
        $this->fields = [
            'Nama Pelapor' => $report->name ? $report->name : '-',
            'Email' => $report->email ? $report->email : '-',
            'Nomor Kontak Pelapor' => $report->contact_name ? $report->contact_name : '-',
            'Perihal' => $report->description,
            'Pelanggaran' => $report->violation,
            'Lokasi' => $report->violation_place,
            'Unit' => $report->unit,
            'Jabatan' => $report->unit_position,
            'Tanggal' => $report->violation_date,
            'Orang Terlibat' => $report->violation_peoples,
            'Deskripsi Pelanggaran' => $report->violation_description,
            'Sumber' => $report->source,
        ];

        $this->file_url = Storage::disk('s3')->url($report->file_url);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('POJ - Whistle Blowing System')
            ->markdown('emails.wbs.submission')->with([
                'fields' => $this->fields,
                'file_url' => $this->file_url,
            ]);
    }
}
