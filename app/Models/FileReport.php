<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileReport extends Model
{
    use HasFactory;

    const TYPE = [
        'annual_report' => 'Laporan Tahunan',
        'financial_report' => 'Laporan Keuangan',
    ];    

    public function scopeGetLatestByType($query, $type)
    {
        return $query->where('type', $type)->orderBy('updated_at', 'desc')->get();
    }
}
