<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicketType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'attraction_id',
        'quantity',
        'status'
    ];

    protected $table = 'msttickettypes';
    public $timestamps = false;

    public function cart()
    {
        return $this->hasMany(UserCart::class, 'id');
    }

    public function history()
    {
        return $this->hasMany(History::class, 'id');
    }

    public function attraction()
    {
        return $this->belongsTo(Attraction::class, 'attraction_id');
    }

}
