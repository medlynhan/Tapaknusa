<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; 

class Attraction extends Model
{
    use HasFactory;
    protected $fillable = ['title','destination', 'description', 'startPrice', 'address', 'schedule', 'operationa_hours'];
    protected $table = 'msattractions';
    public $timestamps = false;

    public function reviews()
    {
        return $this->hasMany(Review::class, 'id');
    }

    public function ticketTypes()
    {
        return $this->hasMany(TicketType::class, 'id');
    }
}
