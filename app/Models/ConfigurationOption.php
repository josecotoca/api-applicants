<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigurationOption extends Model
{
    use HasFactory;
    protected $table = 'configuration_options';
    protected $guarded = ['id'];

    protected $fillable = [
        'configuration_id',
        'option_id',
    ];

    public function configuration()
    {
        return $this->belongsTo('App\Models\Configuration', 'configuration_id');
    }

    public function option()
    {
        return $this->belongsTo('App\Models\Option', 'option_id');
    }
}
