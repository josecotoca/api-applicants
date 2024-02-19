<?php

namespace App\Services;

use Exception;
use App\Repositories\FileRepository;
use App\Repositories\FormRepository;
use App\Repositories\UserRepository;
use App\Repositories\PeriodRepository;
use App\Repositories\IndustryRepository;
use App\Repositories\OptionRepository;
use App\Repositories\ResumeRepository;

class IndustryService
{
    private $repository_file;
    private $repository_user;
    private $repository_form;
    private $repository_industry;
    private $repository_period;
    private $repository_option;
    private $repository_resume;

    public function __construct(
        FileRepository $repository_file,
        UserRepository $repository_user,
        FormRepository $repository_form,
        IndustryRepository $repository_industry,
        PeriodRepository $repository_period,
        OptionRepository $repository_option,
        ResumeRepository $repository_resume
        )
    {
        $this->repository_file = $repository_file;
        $this->repository_user = $repository_user;
        $this->repository_form = $repository_form;
        $this->repository_industry = $repository_industry;
        $this->repository_period = $repository_period;
        $this->repository_option = $repository_option;
        $this->repository_resume = $repository_resume;
    }


    public function getIndustryByUser($user_id)
    {
        $data = $this->repository_industry->getIndustryByUser($user_id);
        return $data;
    }

    public function getPeriodActive()
    {
        return $this->repository_period->getPeriodActive();
    }

    public function getOptionsByIndustry($industry_id)
    {
        return $this->repository_option->getOptionsByIndustryId($industry_id);
    }

    public function getResumesByYearAndIndustry($industry_id, $year)
    {
        return $this->repository_resume->getResumeByIndustryAndYear($industry_id,$year);
    }

    //$this->model
    //(file, 'files/empresa')t

}
