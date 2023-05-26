<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Demo</title>
    </head>
    <body>
        <h1>Favorite heroes</h1>
        <?php
          $heroes = ["Harry Potter", "Gandalf", "Buzz Lightyear"]; 
        ?>

        <ul>
            <?php foreach ($heroes as $hero) {
                echo "<li>{$hero}</li>";
            } 
            ?>
        </ul>

        <ol>
            <?php foreach ($heroes as $hero) : ?>
                <li><?= $hero ?></li>
            <?php endforeach; ?>
        </ol>

    </body>
</html>