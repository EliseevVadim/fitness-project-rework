<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'training_location_id',
        'menu_calories_id',
        'google_drive_link'
    ];

    public function trainingLocation()
    {
        return $this->belongsTo(TrainingLocation::class);
    }

    public function menuCalories()
    {
        return $this->belongsTo(MenuCalory::class);
    }
}
