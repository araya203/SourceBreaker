<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $casts = [
        'done' => 'boolean',
    ];

    protected $fillable = [
        'title',
        'done',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
