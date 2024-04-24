<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;
    protected $table      = "habitaciones"; 
    protected $primaryKey = "id";
    public    $timestamps = false;
}
