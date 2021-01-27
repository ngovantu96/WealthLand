<?php

namespace App\Http\Repositories\IntroduceRepo;

use App\Http\Repositories\RepositoryInterface;

interface IntroduceRepositoryInterface extends RepositoryInterface
{
    public function create($request);

    public function update($request,$obj);
}
