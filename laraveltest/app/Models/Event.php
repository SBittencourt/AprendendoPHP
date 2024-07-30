<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [    
        'name', 
        'external_link', 
        'start_date',
        'end_date',
        'place',
        'main_color', 
        'main_descriptio', 
        'second_description', 
        'photo', 
        'header_photo', 
    ];

    public function photo()
    {
        return $this->hasMany(Photo::class, 'event_id');
    }

}
