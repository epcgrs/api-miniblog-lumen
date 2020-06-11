<?php

namespace App\Services\Interfaces;

use App\Models\Post;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

interface IPostService
{
    public function paginate(int $perPage) : LengthAwarePaginator;
    public function store(Request $request) : ?Post;
    public function find(int $id) : ?Post;
    public function update(Request $request, int $id): ?Post;
}
