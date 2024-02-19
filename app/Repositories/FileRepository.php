<?php

namespace App\Repositories;

use App\Models\File;
use Illuminate\Support\Str;
use App\Repositories\BaseRepository;

class FileRepository extends BaseRepository
{

    public function __construct(File $file)
    {
        parent::__construct($file);
    }

    public function upload($file, $base_path)
    {
        $file_name = $file->getClientOriginalName();
        $file_name = Str::random(5) . '_' . $file_name;

        $file->storeAs($base_path, $file_name);
        return $file_name;
    }

    public function searchByName(String $file_name, $industry_id)
    {
        $data = $this->model::IndustryId($industry_id)->Name($file_name)->first();
        return $data;
    }
}
