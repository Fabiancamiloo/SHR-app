<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table      = "hoteles"; 
    protected $primaryKey = "id";
    public    $timestamps = false;
}
