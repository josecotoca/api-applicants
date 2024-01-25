<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $guarded = ['id'];

    const STATUS_ACTIVE = 'activo';
    const STATUS_INACTIVE = 'inactivo';

    protected $fillable = [
        'name',
        'description',
        'unit',
        'factor',
        'status'
    ];

    protected $hidden = [
        'updated_at','created_at'
    ];

    public function scopeName($query, $value)
    {
        if($value && $value!=''){
            return $query->where('name','LIKE',"%".$value."%")
            ->orWhere('description','LIKE',"%$value%")
            ->orWhere('unit','LIKE',"%$value%");
        }
    }
}
