<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Demo</title>
        <style>
            body {
                display: grid;
                place-items: center;
                height: 100vh;
                margin: 0;
                text-align: center;
                font-family: sans-serif;
            }
        </style>
    </head>
    <body>
        <?php
            $name = "Dark Matter";
            $read = true;
            $message = "";

            if($read) {
                $message = "You have read $name";
            } else {
                $message = "You have NOT read $name";
            }
        ?>
        <h1>
            <?= $message ?>
        </h1>
    </body>
</html>