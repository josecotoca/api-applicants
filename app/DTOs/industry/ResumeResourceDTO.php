<?php

namespace App\DTOs\industry;

use WendellAdriel\ValidatedDTO\ResourceDTO;

class ResumeResourceDTO extends ResourceDTO
{
    public int $year;
    public int $month;
    public int $biweekly;
    public int $period_id;
    public string $status;
    public string $acopio;
    public float $acopio_tm;
    public string $priceclosing;
    public float $priceclosing_tm;
    public float $priceclosing_usd;
    public string $hss;
    public float $hss_tm;
    public float $hss_usd;
    public string $cs;
    public float $cs_tm;
    public float $cs_usd;
    public string $acs;
    public float $acs_tm;
    public float $acs_usd;
    public string $ars;
    public float $ars_tm;
    public float $ars_usd;
    public string $his;
    public float $his_tm;
    public float $his_usd;
    public string $exp;
    public float $exp_tm;
    public float $exp_usd;
    public string $stock;
    public float $stock_hss;
    public float $stock_cs;
    public float $stock_acs;
    public float $stock_ars;
    public float $stock_his;
    public float $stock_exp;
    public string $production;
    public float $production_hss;
    public float $production_cs;
    public float $production_acs;
    public float $production_ars;
    public float $production_his;
    public float $production_exp;
    public int $industry_id;
    public int $configuration_id;
    public string $observation;

    protected function defaults(): array
    {
        return [];
    }

    protected function casts(): array
    {
        return [];
    }
}
