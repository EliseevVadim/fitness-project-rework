<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingLocation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

//    public function trainings()
//    {
//        return $this->hasMany('\App\Models\Training','training_location_id', 'id');
//    }
    public function days()
    {
        return $this->hasMany('\App\Models\Days','training_location_id', 'id');
    }
}
