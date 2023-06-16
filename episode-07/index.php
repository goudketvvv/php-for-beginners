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
                    'releaseYear' => '1995'
                ],
            ]; 
        ?>

        <p>
            <?php foreach ($books as $book) : ?>
                <li>
                    <a href="<?= $book['purchaseUrl'] ?>">
                        <?= $book['name']; ?>
                    </a><br>
                    <span>
                        Written by <?= $book['author'] ?>
                    </span><br>
                    <span>
                        Came out in <?= $book['releaseYear'] ?>
                    </span>
                </li><br><br>
            <?php endforeach; ?>
        </p>

    </body>
</html>