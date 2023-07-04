<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./index.php" method="GET">
        <input type="text" name="name" id="name">
        <input type="number" name="age" id="age">
        <input type="email" name="mail" id="mail">
    </form>
    <button type="submit">Send</button>
    
    <?php
        $name = $_GET['name'];
        $age = $_GET['age'];
        $mail = $_GET['mail'];

        if (strlen($name) >= 3){
            echo "Acceso riuscito";
        } else {
            echo "Acceso negato";
        };
    ?>

</body>
</html>