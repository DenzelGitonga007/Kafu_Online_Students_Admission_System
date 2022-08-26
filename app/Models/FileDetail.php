<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileDetail extends Model
{
    use HasFactory;
    protected $table = 'file_details';
    protected $primaryKey = 'id';
    protected $fillable = [
        'photo',
        'medical',
        'sporting',
    ];
}
