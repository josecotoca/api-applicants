<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Acopio extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'acopios';
    protected $guarded = ['id'];

    protected $fillable = [
        'TM_BRUTO',
        'TM_LIQUIDO',
        'vendor_ci',
        'vendor_nit',
        'vendor_name',
        'form_id'
    ];

    public function form()
    {
        return $this->belongsTo('App\Models\Form', 'form_id');
    }

}
