<?php

namespace App\Http\Controllers;

use App\Services\Interfaces\IPostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /* @var IPostService */
    protected $postService;

    public function __construct(IPostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        $posts = $this->postService->paginate(9);
        return response()->json($posts);
    }

    public function create(Request $request)
    {
        if ( $post = $this->postService->store($request) ) {

            $requestCategories = explode(',', $request->input('categories'));
            if ( $post->categories()->sync($requestCategories, false) ) {
                return response()->json($post);
            }
            return response()->json(['success' => false], 400);
        }

        return response()->json(['success' => false], 400);
    }

    public function show($id)
    {
        $post = $this->postService->find($id);
        return response()->json($post);
    }

    public function update(Request $request, $id)
    {
        if( $post = $this->postService->update($request, $id) ) {
            $requestCategories = explode(',', $request->input('categories') );
            if( $post->categories()->sync($requestCategories, true) ) {
                return response()->json($post);
            }
            return response()->json(['success' => false], 400);
        }
        return response()->json(['success' => false], 400);
    }

    public function destroy($id)
    {
        $post = $this->postService->find($id);
        $post->delete();

        return response()->json(['success' => true]);
    }
}
