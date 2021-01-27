<?php

namespace  App\Http\Repositories\LandRepo;

use App\Http\Repositories\RepositoryInterface;

interface LandRepositoryInterface extends RepositoryInterface
{
    public function create($request);

    public function update($request, $obj);
    public function getCategory();
    public function getUser();
}
