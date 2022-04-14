<?php

namespace App\Http\Repositories;

interface RepositoryInterface
{
    public function getAll();

    public function findById(int $id);

    public function create($request);

    public function update($request, $obj);

    public function delete($id);


}
