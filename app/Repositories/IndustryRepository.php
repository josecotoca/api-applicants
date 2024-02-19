<?php

namespace App\Repositories;

use App\Models\Industry;
use App\Repositories\BaseRepository;

class IndustryRepository extends BaseRepository
{

    public function __construct(Industry $form)
    {
        parent::__construct($form);
    }

    public function getIndustryByUser($user_id)
    {
        return $this->model::select('industries.*')
            ->join('industry_users', 'industry_users.industry_id', '=', 'industries.id')
            ->where('industry_users.user_id', $user_id)
            ->first();
    }
}
