<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\Interface\BaseRepositoryInterface;

class BaseRepository implements BaseRepositoryInterface
{
    protected $model;
    private $relations;

    public function __construct(Model $model, array $relations = [])
    {
        $this->model = $model;
        $this->relations = $relations;
    }

    public function all()
    {
        $query = $this->model;

        if (!empty($this->relations)) {
            $query = $query->with($this->relations);
        }

        return $query->get();
    }

    public function get(int $id)
    {
        $query = $this->model->where('id',$id);

        if (!empty($this->relations)) {
            $query = $query->with($this->relations);
        }

        return $query->first();
    }

    public function save(Model $model)
    {
        $model->save();
        return $model;
    }

    public function update(Model $model)
    {
        $model->update();
        return $model;
    }

    public function delete(Model $model)
    {
        $model->delete();
        return $model;
    }
}
