<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $fillable= [
        'passport_or_ID_number',
        'first_name',
        'last_name',
        'email_address',
        'registration_number',
        'school',
        'course',
        'year_of_study',
		'phone_number',
        'study_level',
    ];

    protected $hidden=[
        'password_hash'
    ];

    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'passport_or_ID_number';

}
