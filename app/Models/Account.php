<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Account extends Authenticatable
{
    use HasFactory, HasApiTokens,Notifiable;
    protected $fillable = ['id','email','password','is_active'];

    public function user(){
        return $this->hasOne(User::class);
    }
    public function invoice(){
        return $this->hasMany(Invoice::class);
    }

}
