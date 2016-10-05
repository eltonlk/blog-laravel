<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\PostRequest;

use App\Post;
use App\Tag;

class PostsAdminController extends Controller
{
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        $posts = $this->post->paginate(20);

        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(PostRequest $request)
    {
        $post = $this->post->create($request->all());
        $post->tags()->sync( $this->getTagIds($request->tags) );

        return redirect()->route('admin.posts.index');
    }

    public function edit($id)
    {
        $post = $this->post->find($id);

        return view('admin.posts.edit', compact('post'));
    }

    public function update(PostRequest $request, $id)
    {
        $post = $this->post->find($id);
        $post->update($request->all());
        $post->tags()->sync( $this->getTagIds($request->tags) );

        return redirect()->route('admin.posts.index');
    }

    public function destroy($id)
    {
        $this->post->find($id)->delete();

        return redirect()->route('admin.posts.index');
    }

    private function getTagIds($tags)
    {
        $tag_ids = [];
        $tags = array_filter(array_map('trim', explode(',', $tags)));

        foreach ($tags as $tag)
        {
            $tag_ids[] = Tag::firstOrCreate([ 'name' => $tag ])->id;
        }

        return $tag_ids;
    }
}
