<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\Interfaces\IPostRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

class PostRepository implements IPostRepository
{
    public function paginate(int $perPage): LengthAwarePaginator
    {
        return Post::with('categories')->latest()->paginate($perPage);
    }

    public function store(Request $request) : ?Post
    {
        $post               = new Post;
        $post->title        = $request->input('title');
        $post->content      = $request->input('content');
        if ($post->save()) {
            return $post;
        }
        return NULL;
    }

    public function find(int $id): ?Post
    {
        return Post::with('categories')->find($id);
    }

    public function update(Request $request, int $id): ?Post
    {
        $post = $this->find($id);

        $post->title = $request->input('title');
        $post->content = $request->input('content');
        if($post->save()) {
            return $post;
        }

        return NULL;
    }

}
