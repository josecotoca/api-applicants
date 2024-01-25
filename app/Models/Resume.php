<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;
    protected $table = 'resumes';
    protected $guarded = ['id'];

    protected $fillable = [
        'stock',
        'production',
        'acopio',
        'priceclosing',
        'hss',
        'his',
        'acs',
        'ars',
        'cs',
        'exp',
        'industry_id',
        'period_id',
        'year',
        'configuration_id',
        'observation',
        'status'
    ];

    protected $hidden = [
        'updated_at', 'created_at'
    ];

    public function scopeYear($query, $value)
    {
        if ($value && $value > 0) {
            return $query->where('year', $value);
        }
    }

    public function scopeIndustryId($query, $value)
    {
        if ($value && $value > 0) {
            return $query->where('industry_id', $value);
        }
    }

    public function scopePeriodId($query, $value)
    {
        if ($value && $value > 0) {
            return $query->where('period_id', $value);
        }
    }

    public function period()
    {
        return $this->belongsTo('App\Models\Period', 'period_id');
    }

    public function industry()
    {
        return $this->belongsTo('App\Models\Industry', 'industry_id');
    }
}
