<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    public $timestamps = false;
    protected $table = 'evenementen';
    protected $fillable = ['name', 'date', 'time', 'location','ticket_count', 'description'];
}
