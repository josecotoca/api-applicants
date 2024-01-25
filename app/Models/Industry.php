<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    use HasFactory;
    protected $table = 'industries';
    protected $guarded = ['id'];

    protected $fillable = [
        'name',
        'nit',
        'business_name',
        'image',
        'guild_id'
    ];

    protected $hidden = [
        'updated_at','created_at'
    ];

    public function scopeGuildId($query, $value)
    {
        if($value && $value > 0){
            return $query->where('guild_id',$value);
        }
    }

    public function guild()
    {
        return $this->hasOne('App\Models\Guild','guild_id');
    }
}
