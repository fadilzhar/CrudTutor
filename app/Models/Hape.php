<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hape extends Model
{
    use HasFactory;
    protected $fillable=['Name','Type','Series'];
}
