<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
    

    protected $table = 'msusers';
    public $timestamps = false;
    
    protected $fillable = [
        'name', 'password', 'email' 
    ];

    public function cart()
    {
        return $this->hasMany(Cart::class, 'id');
    }

    public function history()
    {
        return $this->hasMany(History::class, 'id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'id');
    }

}
