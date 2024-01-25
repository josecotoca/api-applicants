<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Production extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'productions';
    protected $guarded = ['id'];

    protected $fillable = [
        'TM',
        'form_id',
    ];

    public function form()
    {
        return $this->belongsTo('App\Models\Form', 'form_id');
    }
}
