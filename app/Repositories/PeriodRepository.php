<?php

namespace App\Repositories;

use App\Models\Period;
use App\Models\User;

class PeriodRepository extends BaseRepository
{
    public function __construct(Period $period)
    {
        parent::__construct($period);
    }

    public function getPeriodActive()
    {
        return $this->model::where('status', Period::STATUS_ACTIVE)->first();
    }
}
