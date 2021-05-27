<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Mail PHP</title>
</head>
<body>
    <form action="enviar.php" method="post" class="formulario conteiner">
        <fieldset>
            <div>
                <input type="text" placeholder="name" name="name">
            </div>
            <div>
                <input type="email" placeholder="email" name="email">
            </div>
            <div>
                <input type="text" placeholder="asunto" name="asunto">
            </div>
            <div>
                <textarea placeholder="mensaje" name="msg"></textarea>
            </div>
            <div>
                <input type="submit">
            </div>
        </fieldset>
    </form>
<?php
include("correo.php")
?>
</body>
</html>