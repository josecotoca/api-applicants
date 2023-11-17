<?php

namespace App\Contracts;

interface ApplicantRepositoryInterface
{
    public function getApplicantsByOwner(int $ownerId);
}
