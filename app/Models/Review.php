<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'attraction_id',
        'rating',
        'comment',
        'created_at',
        'updated_at'
    ];

    protected $table = 'msreviews';
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function attraction()
    {
        return $this->belongsTo(Attraction::class, 'attraction_id');
    }

}
