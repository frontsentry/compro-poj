<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebSetting extends Model
{
    use HasFactory;

    const TYPE = [
        'total_outsourcing' => 'Total Outsourcing',
        'total_transport_fleet' => 'Total Armada',
        'total_telecentre' => 'Total Telecentre',
        'email_receiver_vacancy' => 'Email Penerima Lamaran Pekerjaan',
        'email_receiver_wbs' => 'Email Penerima WBS',
    ];
}
