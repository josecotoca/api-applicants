<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Applicant extends Model
{
    use HasFactory;
    protected $table = 'applicants';
    protected $guarded = ['id'];

    protected $fillable = [
        'name',
        'source',
        'owner',
        'created_by',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'updated_at'
    ];

    public function scopeName($query, $value)
    {
        if($value && $value!=''){
            return $query->where(DB::raw('lower(name)'),'LIKE',"%".Str::lower($value)."%")
            ->orWhere(DB::raw('lower(source)'),'LIKE',"%".Str::lower($value)."%");
        }
    }

    public function scopeSource($query, $value)
    {
        if($value && $value!=''){
            return $query->where(DB::raw('lower(source)'),'LIKE',"%".Str::lower($value)."%");
        }
    }

    public function scopeOwnerId($query, $value)
    {
        if($value && $value > 0){
            return $query->where('owner',$value);
        }
    }

    public function owner()
    {
        return $this->hasOne('App\Models\user','owner');
    }

    public function creator()
    {
        return $this->hasOne('App\Models\user','created_by');
    }

}
