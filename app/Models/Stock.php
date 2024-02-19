<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stock extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'stocks';
    protected $guarded = ['id'];

    protected $fillable = [
        'tm',
        'form_id',
        'product_id',
        'product_name'
    ];

    public function form()
    {
        return $this->belongsTo('App\Models\Form', 'form_id');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }

}
