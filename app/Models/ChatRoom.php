<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatRoom extends Model
{
    use HasFactory;

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }

    protected $table = 'chat_rooms';
    protected $fillable=['name'];
}
