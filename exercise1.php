
    <!-- #Exercise1 -->
 <!-- Créez un formulaire HTML simple et acceptez le nom d'utilisateur et affichez le nom via l'instruction PHP echo.*/ -->

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
    <form action="" method="post">
        <input type="text"  name="name" placeholder="Nom">
        <input type="submit" value="Submit">
    </form>
    <?php
     
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = htmlspecialchars($_POST['name']);
            echo "Le nom est: ". $name;
        }
    
    ?>
</body>
</html>
