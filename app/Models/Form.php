<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Form extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'forms';
    protected $guarded = ['id'];

    protected $fillable = [
        'date_reception',
        'date_close',
        'batch',
        'option_id',
        'industry_id',
        'period_id',
        'product_id',
        'status',
    ];

    public function option()
    {
        return $this->belongsTo('App\Models\Option','option_id');
    }

    public function industry()
    {
        return $this->belongsTo('App\Models\Industry','industry_id');
    }

    public function period()
    {
        return $this->belongsTo('App\Models\Period','period_id');
    }
}
