<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Home', [
        'cardItems' => [
            ['header' => 'Card 1', 'title' => 'Title 1', 'text' => 'This is the first card.', 'link' => '#'],
            ['header' => 'Card 2', 'title' => 'Title 2', 'text' => 'This is the second card.', 'link' => '#'],
            ['header' => 'Card 3', 'title' => 'Title 3', 'text' => 'This is the third card.', 'link' => '#'],
            ['header' => 'Card 4', 'title' => 'Title 4', 'text' => 'This is the fourth card.', 'link' => '#'],
            ['header' => 'Card 5', 'title' => 'Title 5', 'text' => 'This is the fifth card.', 'link' => '#'],
            ['header' => 'Card 6', 'title' => 'Title 6', 'text' => 'This is the sixth card.', 'link' => '#'],
        ]
    ]);
});


Route::get('/about', function () {
    return inertia('About', ['username' => 'Adrian']);
});
