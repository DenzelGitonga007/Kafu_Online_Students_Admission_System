<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmergencyContactDetail extends Model
{
    use HasFactory;
    protected $table = 'emergency_contact_details';
    protected $primaryKey = 'id';
    protected $fillable = [

        //Emergency Contact
        'user_id',
        'emerge_con_surname',
        'emerge_con_first_name',
        'emerge_con_initial_name',
        'emerge_con_national_id',
        'emerge_con_email',
        'emerge_con_phone',
        'emerge_con_city',
        'emerge_con_pob',
        'emerge_con_occupation',
        
    ];
}
