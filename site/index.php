<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Meu Site em PHP</title>
    </head>
    <body>

        <?php
            include('include/header.php');
        ?>

        <div>
        <?php 
        echo 'Olá sou um site';
        ?>
        </div>

        <?php
            include_once('include/footer.php');
        ?>

    </body>
</html>