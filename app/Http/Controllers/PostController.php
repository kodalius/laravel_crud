<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class PostController extends Controller
{
    public function index()
    {
        //$posts = Post::all();

        $posts = Post::all();

        return view('post.index',compact('posts'));
    }


    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.create',compact('categories','tags'));

    }
    public function store()
    {
        $data = request()->validate([
            'title' => 'required|string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => ''
        ]);
        $tags = $data['tags'];
        unset($data['tags']);



        $post = Post::create($data);

        $post->tags()->attach($tags);




        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {

        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.edit', compact('post','categories','tags'));
    }



    public function update(Post $post)
    {

        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => ''
        ]);
        $tags =$data['tags'];
        unset($data['tags']);
        $post->update($data);
        $post->tags()->sync($tags);
        return redirect()->route('post.show', $post->id);
    }


    public function delete()
    {
        $post = Post::find(15);




        $post->delete();
        dd('deleted');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }
    public function firstOrCreate()
    {
        $anotherPost = [
            'title' => ' some post title',
            'content' => 'some content',
            'image' => ' some image.jpg',
            'likes' => 53333,
            'is_published' => 50000
        ];
        $post = Post::firstOrCreate(
            [
                'content' => 'pizdaa'

            ],
            [

                'title' => ' wwww',
                'content' => 'pizda',
                'image' => ' some image.jpg',
                'likes' => 53333,
                'is_published' => 0

            ]
        );
        dump($post->content);
        dd('finished');
    }

    public function updateOrCreate()
    {
        $anotherPost = [
            'title' => ' some post title',
            'content' => 'some content',
            'image' => ' some image.jpg',
            'likes' => 53333,
            'is_published' => 50000
        ];
        $post = Post::updateOrCreate([
            'content' => 'cobaka'
        ], [
            'title' => 'sasha',
            'content' => 'cat'

        ]);

        dump($post->content);
        dd('finished');
    }

}
