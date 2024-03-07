<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class Event extends Model implements HasMedia
{
    use HasFactory,  InteractsWithMedia;

    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'location',
        'available_seats',
        'category_id',
        'organizer_id',
        'status',
        'type',
    ];
    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('status');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function organizer()
    {
        return $this->belongsTo(Organizer::class);
    }
}
