<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Priority extends Model
{
    use HasFactory;
    protected $primaryKey = 'priority_id';
    protected $table='ts_priority';
    public $timestamps = false;
}
