<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalDetail extends Model
{
    use HasFactory;
    // Indicating the fillable fields
    protected $table = 'personal_details';
    protected $primaryKey = 'id';
    protected $fillable = [
        'surname', 
        'first_name', 
        'last_name'
    ];
}
