<?php
namespace App\Repositories;

use App\Models\Industry;
use App\Models\Option;
use App\Repositories\BaseRepository;

class OptionRepository extends BaseRepository
{

    public function __construct(Option $form)
    {
        parent::__construct($form);
    }

    public function getOptionsByIndustryId($industry_id){
        return $this->model::select('options.*')
        ->join('configuration_options', 'configuration_options.option_id', '=', 'options.id')
        ->join('configurations', 'configurations.id', '=', 'configuration_options.configuration_id')
        ->where('configurations.industry_id', $industry_id)
        ->where('configurations.status', 'vigente')
        ->get();
    }
}
