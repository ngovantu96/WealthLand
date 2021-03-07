<?php
namespace App\Http\Repositories\PostRepo;

use App\Http\Repositories\RepositoryInterface;

interface PostRepositoryInterface extends RepositoryInterface
{
    public function create($request);
    public function update($request, $obj);
}
