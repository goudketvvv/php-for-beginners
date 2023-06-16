<?php

$books = [
    [
        'name' => 'Do Androids Dream of Electric Sheep',
        'author' => 'Philip K. Dick',
        'purchaseUrl' => 'http://example.com',
        'releaseYear' => '2000'
    ],
    [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'purchaseUrl' => 'http://example.com',
        'releaseYear' => '2011'
    ],
    [
        'name' => 'The Martian',
        'author' => 'Andy Weir',
        'purchaseUrl' => 'http://example.com',
        'releaseYear' => '1934'
    ]
];

$filteredBooks = array_filter($books, function ($book) {
    return $book['releaseYear'] > 1950 && $book['author'] === 'Andy Weir';
});

require "index.view.php";