<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClubAndSocietyDetail extends Model
{
    use HasFactory;
    protected $table = 'club_and_society_details';
    protected $primaryKey = 'id';
    protected $fillable = [
        'first_club',
        'second_club',
        'third_club',
    ];
}
