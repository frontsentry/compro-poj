<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VacancyItem extends Model
{
    use HasFactory;

    public function Vacancy()
    {
        return $this->belongsTo(Vacancy::class);
    }
}
