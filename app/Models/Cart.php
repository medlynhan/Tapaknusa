<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; 

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket_type_id',
        'user_id',
        'quantity',
        'price',
        'total_price',
        'status',
        'created_at',
        'updated_at'
    ];

    protected $table = 'msusercart';
    public $timestamps = false;

    public function ticketType()
    {
        return $this->belongsTo(TicketType::class, 'ticket_type_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


}
