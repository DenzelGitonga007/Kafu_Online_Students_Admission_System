<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpouseDetail extends Model
{
    use HasFactory;

    // The fillable fields
    protected $table = 'spouse_details';
    protected $primaryKey = 'id';
    protected $fillable = [
        'marital_status',
        'spouse_surname',
        'spouse_first_name',
        'spouse_last_name',
        'spouse_national_id',
        'spouse_email',
        'spouse_phone',
        'spouse_city',
        'spouse_pob',
        'spouse_occupation',

    ];
}
