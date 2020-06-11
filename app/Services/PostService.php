<?php

namespace App\Services;

use App\Models\Post;
use App\Repositories\Interfaces\IPostRepository;
use App\Services\Interfaces\IPostService;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

class PostService implements IPostService
{
    /* @var IPostRepository */
    protected $postRepository;

    public function __construct(IPostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function paginate(int $perPage) : LengthAwarePaginator
    {
        return $this->postRepository->paginate($perPage);
    }

    public function store(Request $request): ?Post
    {
        return $this->postRepository->store($request);
    }

    public function find(int $id): ?Post
    {
        return $this->postRepository->find($id);
    }

    public function update(Request $request, int $id): ?Post
    {
        return $this->postRepository->update($request, $id);
    }

}
