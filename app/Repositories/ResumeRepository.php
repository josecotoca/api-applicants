<?php

namespace App\Repositories;

use App\Models\Resume;
use App\Repositories\Interface\ResumeRepositoryInterface;

class ResumeRepository extends BaseRepository implements ResumeRepositoryInterface
{
    public function __construct(Resume $resume)
    {
        parent::__construct($resume);
    }

    public function getByIndustryAndYear(int $industry_id,int $year)
    {
        return $this->model->where('username', $username)->first();
    }
}

