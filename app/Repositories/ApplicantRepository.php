<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Contracts\ApplicantRepositoryInterface;
use App\Models\Applicant;

class ApplicantRepository extends BaseRepository implements ApplicantRepositoryInterface
{
    public function __construct(Applicant $applicant)
    {
        parent::__construct($applicant);
    }

    public function getApplicantsByOwner(int $ownerId)
    {
        return $this->model->OwnerId($ownerId)->get();
    }
}
