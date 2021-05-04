<?php

namespace App\Repositories\Base;

use App\Repositories\Base\BaseRepositoryInterface;

abstract class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }

    abstract public function getModel();

    public function all()
    {
        // TODO: Implement all() method.
    }

    public function allWithTrash()
    {
        // TODO: Implement allWithTrash() method.
    }

    public function find($id)
    {
        // TODO: Implement find() method.
    }

    public function limit($limit)
    {
        // TODO: Implement limit() method.
    }

    public function create($attributes = [])
    {
        // TODO: Implement create() method.
    }

    public function update($id, $attributes = [])
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function restore($id)
    {
        // TODO: Implement restore() method.
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }

    public function last()
    {
        // TODO: Implement last() method.
    }

    public function paginate($sortBy, $perPage)
    {
        // TODO: Implement paginate() method.
    }
}

?>
