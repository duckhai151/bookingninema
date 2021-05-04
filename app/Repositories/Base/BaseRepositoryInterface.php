<?php

namespace App\Repositories\Base;

interface BaseRepositoryInterface
{
    public function all();

    public function allWithTrash();

    public function find($id);

    public function limit($limit);

    public function create($attributes = []);

    public function update($id, $attributes = []);

    public function delete($id);

    public function restore($id);

    public function destroy($id);

    public function last();

    public function paginate($sortBy, $perPage);

    public function getModel();

}

?>
