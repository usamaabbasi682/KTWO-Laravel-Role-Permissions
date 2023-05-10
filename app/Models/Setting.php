<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Setting extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $table = "settings";
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'app_name',
        'app_url',
        'login_page_heading',
        'allow_registration',
        'allow_forgot_pwd',
    ];

    protected $casts = [
        'allow_registration' => 'boolean',
        'allow_forgot_pwd' => 'boolean',
    ];
    
}
