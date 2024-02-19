<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    use HasFactory;
    protected $table = 'configurations';
    protected $guarded = ['id'];

    protected $fillable = [
        'description',
        'year',
        'industry_id',
        'status'
    ];

    protected $hidden = [
        'updated_at','created_at'
    ];

    public function industry()
    {
        return $this->belongsTo('App\Models\Industry', 'industry_id');
    }

    public function configuration_options()
    {
        return $this->hasMany('App\Models\ConfigurationOption');
    }

}
