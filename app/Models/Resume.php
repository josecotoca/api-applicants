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
        'year',
        'month',
        'biweekly',
        'period_id',
        'status',
        'acopio',
        'acopio_tm',
        'priceclosing',
        'priceclosing_tm',
        'priceclosing_usd',
        'hss',
        'hss_tm',
        'hss_usd',
        'cs',
        'cs_tm',
        'cs_usd',
        'acs',
        'acs_tm',
        'acs_usd',
        'ars',
        'ars_tm',
        'ars_usd',
        'his',
        'his_tm',
        'his_usd',
        'exp',
        'exp_tm',
        'exp_usd',
        'stock',
        'stock_hss',
        'stock_cs',
        'stock_acs',
        'stock_ars',
        'stock_his',
        'stock_exp',
        'production',
        'production_hss',
        'production_cs',
        'production_acs',
        'production_ars',
        'production_his',
        'production_exp',
        'industry_id',
        'configuration_id',
        'observation',
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

    public function scopeMonth($query, $value)
    {
        if ($value && $value > 0) {
            return $query->where('month', $value);
        }
    }

    public function scopeBiweekly($query, $value)
    {
        if ($value && $value > 0) {
            return $query->where('biweekly', $value);
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
