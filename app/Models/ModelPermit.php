<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPermit extends Model
{
    use HasFactory;
    protected $table = "model_permits";
    protected $primaryKey = 'id';
    protected $fillable = [
        'model_name',
        'desc',
    ];
}
