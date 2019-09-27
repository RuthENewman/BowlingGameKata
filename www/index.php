<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./style.css" type="text/css" />
        <?php
            $headTitle = 'Bowling Alley Kata';
        ?>
        <title><?php echo $headTitle?></title>
    </head>
    <body>
        <header>
            <h1><?php echo $headTitle;?></h1>
        </header>
        <div>
            <?php
                echo $this->score();
            ?>
        </div>
</html>