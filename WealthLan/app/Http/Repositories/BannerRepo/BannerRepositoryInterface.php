<?php
namespace  App\Http\Repositories\BannerRepo;

use App\Http\Repositories\RepositoryInterface;

interface BannerRepositoryInterface extends RepositoryInterface
{

    public function create($request);

    public function update($request,$obj);
}

