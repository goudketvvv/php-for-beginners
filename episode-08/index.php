<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Demo</title>
    </head>
    <body>
        <h1>Books</h1>
        <?php
            $books = [
                [
                    'name' => 'Do Androids Dream of Electric Sheep',
                    'author' => 'Philip K. Dick',
                    'purchaseUrl' => 'http://example.com',
                    'releaseYear' => '1995'
                ],
                [
                    'name' => 'Project Hail Mary',
                    'author' => 'Andy Weir',
                    'purchaseUrl' => 'http://example.com',
                    'releaseYear' => '1940'
                ],
                [
                    'name' => 'The Martian',
                    'author' => 'Paul Janssen',
                    'purchaseUrl' => 'http://example.com',
                    'releaseYear' => '1934'
                ]
            ];

            function filterByAuthor($books, $author)
            {
                $filteredBooks = [];

                foreach ($books as $book) {
                    if ($book['author'] === $author) {
                        $filteredBooks[] = $book;
                    }
                }

                return $filteredBooks;

            };

            $filteredBooks = filterByAuthor($books, 'Philip K. Dick');

        ?>

        <ul>
            <?php foreach ($filteredBooks as $book) : ?>
                <li>
                    <a href="<?= $book['purchaseUrl'] ?>">
                        <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

    </body>
</html>