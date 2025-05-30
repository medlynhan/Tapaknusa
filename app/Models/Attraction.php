<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'image', 'price', 'location', 'category_id', 'city_id', 'country_id', 'created_at', 'updated_at'];
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
