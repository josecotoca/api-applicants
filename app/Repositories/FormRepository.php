<?php
namespace App\Repositories;

use App\Models\Form;
use App\Repositories\BaseRepository;

class FormRepository extends BaseRepository
{

    public function __construct(Form $form)
    {
        parent::__construct($form);
    }


}
