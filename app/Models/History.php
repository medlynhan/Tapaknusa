<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket_type_id',
        'user_id',
        'ticket_id',
        'ticket_status_id',
        'ticket_status',
        'ticket_status_date',
        'ticket_status_user_id',
        'ticket_status_user',  
    ];

    protected $table = 'mshistory';
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
