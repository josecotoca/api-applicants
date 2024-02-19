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
        'short_name',
        'unit',
        'factor',
    ];

    protected $hidden = [
        'updated_at','created_at'
    ];

    public function scopeName($query, $value)
    {
        if($value && $value!=''){
            return $query->where('name','LIKE',"%".$value."%")
            ->orWhere('short_name','LIKE',"%$value%")
            ->orWhere('unit','LIKE',"%$value%");
        }
    }
}
