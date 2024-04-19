<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table = 'reviews';


    protected $fillable = ['user_id', 'story_id', 'rating', 'comment'];


    /**
     * Get the user that wrote the review.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the story that the review belongs to.
     */
    public function story()
    {
        return $this->belongsTo(Story::class);
    }

}
