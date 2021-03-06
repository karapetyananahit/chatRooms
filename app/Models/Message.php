<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['message'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function room()
    {
        return $this->belongsTo(ChatRoom::class);
    }
}
