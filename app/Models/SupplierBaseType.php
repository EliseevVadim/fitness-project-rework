<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierBaseType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function supplierBases()
    {
        return $this->hasMany(SupplierBase::class, 'base_type_id', 'id');
    }
}
