<?php

namespace App\Repositories\Interface;

interface ResumeRepositoryInterface
{
    public function getByIndustryAndYear(int $industry_id,int $year);
}
