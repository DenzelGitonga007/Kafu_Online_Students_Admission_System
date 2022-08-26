<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherDetail extends Model
{
    use HasFactory;

    protected $table = 'other_details';
    protected $primaryKey = 'id';
    protected $fillable = [
        // First institution
        'physical_impairment',
        'physical_impairment_details',
        'other_information',
        
    ];
}
