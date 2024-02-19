<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Priceclosing extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'priceclosings';
    protected $guarded = ['id'];

    const REG_RAU = 'RAU';
    const REG_GENERAL = 'GENERAL';
    const REG_PROPIO = 'PROPIO';

    protected $fillable = [
        'regimen',
        'TM_RECEIVED',
        'PRICE_RECEIVED',
        'IMPORT_TOTAL',
        'form_id'
    ];

    public function form()
    {
        return $this->belongsTo('App\Models\Form', 'form_id');
    }

}
