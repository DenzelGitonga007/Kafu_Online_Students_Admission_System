<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NextOfKinDetail extends Model
{
    use HasFactory;

    protected $table = 'next_of_kin_details';
    protected $primaryKey = 'id';
    protected $fillable = [

        //Next of Kin
        'user_id',
        'nxtk_surname',
        'nxtk_first_name',
        'nxtk_initial_name',
        'nxtk_national_id',
        'nxtk_email',
        'nxtk_phone',
        'nxtk_city',
        'nxtk_pob',
    
    ];
}
