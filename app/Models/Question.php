<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'category_id',
        'question_number',
        'question_text',
        'image',
    ];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tests()
    {
        return $this->belongsToMany(Test::class);
    }
}
