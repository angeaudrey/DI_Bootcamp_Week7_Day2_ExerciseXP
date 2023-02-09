<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise2</title>
</head>
<body>
    <form method="post">
        
        <input type="text" name="name" id="name" placeholder="Nom">
        <input type="text" name="age" id="age" placeholder="Age">
        <input type="submit" value="Envoyer">
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = htmlspecialchars($_POST['name']);
            $age = htmlspecialchars($_POST['age']);
            echo "Hi $name. You are $age years old.";
        }
    ?>
</body>
</html>
