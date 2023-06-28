<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierBaseCustomer extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'supplier_base_id'
    ];

    public function supplierBase()
    {
        return $this->belongsTo(SupplierBase::class, 'supplier_base_id', 'id');
    }
}
