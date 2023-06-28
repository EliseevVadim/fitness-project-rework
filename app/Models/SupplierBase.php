<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierBase extends Model
{
    use HasFactory;

    protected $fillable = [
        'base_type_id',
        'name',
        'price',
        'discount_price',
        'content_link'
    ];

    public function supplierBaseTypes()
    {
        return $this->belongsTo(SupplierBaseType::class, 'base_type_id', 'id');
    }

    public function customers()
    {
        return $this->hasMany(SupplierBaseCustomer::class, 'supplier_base_id', 'id');
    }
}
