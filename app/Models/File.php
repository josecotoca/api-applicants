<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class File extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'files';
    protected $guarded = ['id'];

    protected $fillable = [
        'name',
        'industry_id',
        'user_id',
    ];

    protected $hidden = [
        'created_at'
    ];

    public function scopeName($query, $value)
    {
        if($value && $value!=''){
            return $query->where('name','LIKE',"%".$value."%");
        }
    }

    public function scopeUserId($query, $value)
    {
        if($value && $value > 0){
            return $query->where('user_id',$value);
        }
    }

    public function scopeIndustryId($query, $value)
    {
        if($value && $value > 0){
            return $query->where('industry_id',$value);
        }
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function industry()
    {
        return $this->belongsTo('App\Models\Industry','industry_id');
    }
}
