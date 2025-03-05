<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gebruiker extends Model
{
    public $timestamps = false;
    protected $table = 'gebruikers';
    protected $fillable = ['name', 'email', 'password', 'role'];
}
