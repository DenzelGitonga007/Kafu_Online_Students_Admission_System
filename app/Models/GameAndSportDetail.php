<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameAndSportDetail extends Model
{
    use HasFactory;
    protected $table = 'game_and_sport_details';
    protected $primaryKey = 'id';
    protected $fillable = [
        'games_and_sports',
        'games_represenation',
    ];
}
