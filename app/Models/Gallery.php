<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{   
    use \Spatie\Tags\HasTags;
    
    use HasFactory;

    const PRODUCT_TYPE = [
        'outsourcing_security' => 'Outsourcing - Security',
        'outsourcing_cleaning_service' => 'Outsourcing - Cleaning Service',
        'outsourcing_driver' => 'Outsourcing - Driver',
        
        'rental_mobil' => 'Rental - Mobil',
        'rental_motor' => 'Rental - Motor',
        'rental_alat_kantor' => 'Rental - Alat Kantor',

        'ekspedisi' => 'Ekspedisi',

        'tele_center' => 'Tele Center',
    ];

    public function scopeGetTenLatestByProductType($query, $product_type)
    {
        return $query->where('product_type', $product_type)
            ->orderBy('created_at', 'desc')
            ->take(10)->get();
    }
}
