<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentm extends Model
{
    use HasFactory;
    protected $table = "students";
    public $timestamps = false;
}