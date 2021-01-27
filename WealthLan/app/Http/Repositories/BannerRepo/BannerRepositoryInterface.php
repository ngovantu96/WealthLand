<?php
namespace  App\Http\Repositories\BannerRepo;

use App\Http\Repositories\RepositoryInterface;

interface BannerRepositoryInterface extends RepositoryInterface
{

    public function create($requests);

    public function update($requests,$obj);
}

