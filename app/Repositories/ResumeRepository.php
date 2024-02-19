<?php

namespace App\Repositories;

use App\Models\Resume;

class ResumeRepository extends BaseRepository
{
    public function __construct(Resume $resume)
    {
        parent::__construct($resume);
    }

    public function getResumeByIndustryAndYear(int $industry_id,int $year)
    {
        return $this->model::query()
        ->where('year', $year)->where('industry_id', $industry_id)
        ->select(['id','year', 'month', 'biweekly', 'period_id', 'status', 'acopio', 'acopio_tm', 'priceclosing', 'priceclosing_tm', 'priceclosing_usd', 'hss', 'hss_tm', 'hss_usd', 'cs', 'cs_tm', 'cs_usd', 'acs', 'acs_tm', 'acs_usd', 'ars', 'ars_tm', 'ars_usd', 'his', 'his_tm', 'his_usd', 'exp', 'exp_tm', 'exp_usd', 'stock', 'stock_hss', 'stock_cs', 'stock_acs', 'stock_ars', 'stock_his', 'stock_exp', 'production', 'production_hss', 'production_cs', 'production_acs', 'production_ars', 'production_his', 'production_exp', 'industry_id', 'configuration_id', 'observation', 'period_id'])
        ->with(['period:id,name,year,month,biweekly,date_start,date_end,date_limit,status'])
        ->get();
    }
}

