<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['id','picture','name','premiere_date','country','desc','age_limit','trailer'];
    use HasFactory;
}
