<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMenu extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'menu_id',
        'menu_type_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'menu_id' => 'integer',
        'menu_type_id' => 'integer',
    ];



    public function menuType()
    {
        return $this->belongsTo(\App\Models\MenuType::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\TrainingUser::class);
    }

    public function menu()
    {
        return $this->belongsTo(\App\Models\Menu::class);
    }
}
