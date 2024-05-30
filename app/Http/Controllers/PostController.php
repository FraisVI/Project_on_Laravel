<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function indexPost()
    {
        $posts = Post::where('is_published', 0)->firts();
        dump($posts->title);
        return dump('end');
    }

    public function create()
    {
        $postsArray = [
            [
                'title' => 'title from phpshtorm',
                'content' => 'some interesting content',
                'image' => 'imageblabla.jpg',
                'likes' => 20,
                'is_published' => 1,
            ],
            [
                'title' => 'another title from phpshtorm',
                'content' => 'another some interesting content',
                'image' => 'another imageblabla.jpg',
                'likes' => 50,
                'is_published' => 1,
            ],
        ];

        foreach ($postsArray as $item) {
            Post::create($item);
        }

        dd('created');
    }

    public function update()
    {
        $post = Post::find(12);

        $post->update([
            'title' => 'updated',
            'content' => 'updated',
            'image' => 'updated',
            'likes' => 150,
            'is_published' => 0,
        ]);
        echo 'updated';
    }

    public function delete()
    {
        $post = Post::find(2);
        $post->delete();
        dd('deleted');
    }

    public function firstOrCreate()
    {
        $anotherPost = [
            'title' => 'some post',
            'content' => 'some content',
            'image' => 'some imageblabla.jpg',
            'likes' => 50000,
            'is_published' => 1,
        ];

        $post = Post::firstOrCreate([
            'title' => 'some title from phpshtorm',
        ],[
            'title' => 'some title from phpshtorm',
            'content' => 'some content',
            'image' => 'some imageblabla.jpg',
            'likes' => 50000,
            'is_published' => 1,
        ]);
        dump($post->content);
        dd('finished');
    }

    public function updateOrCreate()
    {
        $anotherPost = [
            'title' => 'updateOrCreate some post',
            'content' => 'updateOrCreate some post some content',
            'image' => 'updateOrCreate some post some imageblabla.jpg',
            'likes' => 500,
            'is_published' => 1,
        ];

        $post = Post::updateOrCreate([
            'title' => 'some title from phpshtorm',
        ],[
            'title' => 'some title from phpshtorm',
            'content' => 'not old some post some content',
            'image' => 'not old some post some imageblabla.jpg',
            'likes' => 500,
            'is_published' => 1,
        ]);
        dump($post->content);
    }
}
