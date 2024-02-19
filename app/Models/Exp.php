<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Exp extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'exp';
    protected $guarded = ['id'];

    protected $fillable = [
        'vendor_ci',
        'vendor_nit',
        'vendor_name',
        'invoice_number',
        'invoice_date',
        'product_id',
        'product_name',
        'TM_quantity',
        'TM_price_usd',
        'TOTAL_usd',
        'form_id'
    ];

    public function form()
    {
        return $this->belongsTo('App\Models\Form', 'form_id');
    }

}
