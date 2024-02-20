<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    public function vacancyItems()
    {
        return $this->hasMany(VacancyItem::class)->orderBy('ordering_number');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }
}
