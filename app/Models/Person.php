<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'peps';
    protected $primaryKey = 'id';
    protected $fillable = ['first_name', 'last_name', 'email','phone_number','password','profile_image'];

    use HasFactory;
}
