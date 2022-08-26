<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherInstitutionDetail extends Model
{
    use HasFactory;
    protected $table = 'other_institution_details';
    protected $primaryKey = 'id';
    protected $fillable = [
        // First institution
        'first_institution_name',
        'first_institution_specialization',
        'first_institution_qualification',
        
        // Second Institution
        'second_institution_name',
        'second_institution_specialization',
        'second_institution_qualification',
       
        // Third Institution
        'third_institution_name',
        'third_institution_specialization',
        'third_institution_qualification',
        
    ];
}
