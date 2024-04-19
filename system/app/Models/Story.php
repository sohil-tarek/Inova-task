<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    protected $table = 'stories';

    protected $fillable = ['user_id', 'title', 'body'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
