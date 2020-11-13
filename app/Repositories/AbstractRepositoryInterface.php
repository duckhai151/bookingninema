<?php

namespace App\Repositories;

interface AbstractRepositoryInterface
{

    public function model();

    public function all();

    public function store(array $data);

    public function show($id);

    public function edit($id);

    public function delete($id);

}

?>
