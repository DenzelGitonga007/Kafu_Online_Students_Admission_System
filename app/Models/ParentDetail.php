<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentDetail extends Model
{
    use HasFactory;
    protected $table = 'parent_details';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        // Father
        'father',
        'father_surname',
        'father_first_name',
        'father_last_name',
        'father_national_id',
        'father_occupation',
        
        // Mother
        'mother',
        'mother_surname',
        'mother_first_name',
        'mother_last_name',
        'mother_national_id',
        'mother_occupation',

        //Guardian
        'guardian_surname',
        'guardian_first_name',
        'guardian_initial_name',
        'guardian_national_id',
        'guardian_email',
        'guardian_phone',
        'guardian_city',
        'guardian_pob',
        'guardian_occupation',

    ];
}
