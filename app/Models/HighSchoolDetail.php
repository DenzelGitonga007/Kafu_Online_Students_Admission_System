<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HighSchoolDetail extends Model
{
    use HasFactory;
    protected $table = 'high_school_details';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        // First High School
        'first_high_school_name',
        'first_high_school_address',
        'first_high_school_town',
        'first_high_school_from_date',
        'first_high_school_to_date',

        // Second High School
        'second_high_school_name',
        'second_high_school_address',
        'second_high_school_town',
        'second_high_school_from_date',
        'second_high_school_to_date',

        // Thirs High School
        'third_high_school_name',
        'third_high_school_address',
        'third_high_school_town',
        'third_high_school_from_date',
        'third_high_school_to_date',
        
    ];
}
