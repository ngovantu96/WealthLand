<?php
namespace App\Http\Repositories\ImageRepo;


use App\Http\Repositories\RepositoryInterface;

interface ImageRepositoryInterface extends RepositoryInterface
{
    public function create($request);

    public function update($request, $obj);
}
