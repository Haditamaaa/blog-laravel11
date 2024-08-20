<?php

// namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

// class Post extends Model
// {
//     protected $fillable = ['title', 'author', 'slug', 'body'];
//     // public static function all()
//     // {
//     //     return [
//     //         [
//     //             'id' => '1',
//     //             'slug' => 'judul-artikel-1',
//     //             'title' => 'Judul Artikel A',
//     //             'author' => 'Surya Haditama',
//     //             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error commodi libero
//     //         cupiditate pariatur ad corrupti deleniti quas ratione nobis ducimus, possimus quos, provident eos, totam
//     //         ipsam quibusdam omnis! Id, dolores?',
//     //         ],
//     //         [
//     //             'id' => '2',
//     //             'slug' => 'judul-artikel-2',
//     //             'title' => 'Judul Artikel B',
//     //             'author' => 'Surya Haditama',
//     //             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit delectus corrupti,
//     //         fugiat, voluptate laboriosam debitis dolor tempora, laudantium magnam sequi animi excepturi quo nesciunt
//     //         doloribus? Ab architecto deserunt officiis voluptatibus?',
//     //         ],
//     //     ];
//     // }

//     // public static function find($slug): array
//     // {
//     //     /// Teknik Callback
//     //     // return Arr::first(static::all(), function($post) use ($slug) {
//     //     //     return $post['slug'] == $slug;
//     //     // });

//     //     /// Arrow Function
//     //     $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
//     //     if (!$post) {
//     //         abort(404);
//     //     }
//     //     return $post;
//     // }
// }
