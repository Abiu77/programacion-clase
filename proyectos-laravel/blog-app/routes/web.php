<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $posts = [
        [
            'title' => 'Novedades de Laravel 9',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum cupiditate possimus corrupti accusamus assumenda, enim asperiores'
        ],
        [
            'title' => 'Curso de Laravel 9',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum cupiditate possimus corrupti accusamus assumenda, enim asperiores'
        ],
        [
            'title' => 'Manejo basico de Eloquent',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum cupiditate possimus corrupti accusamus assumenda, enim asperiores'
        ],
    ];
    return view('welcome')->with('posts', $posts);
});