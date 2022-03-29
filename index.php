<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP Objet</h1>

    <h2>Instanciation</h2>
    <?php
        include_once("user.class.php");
        $user1 = new User();
        $user2 = new User();
        $user3 = new User();
        $user4 = new User();

        //$user1->pseudo = "Dupont"; si la propriété pseudo était public
        $user1->setPseudo("Dupont"); //On passe par un setter car propriété privée
        $user1->setEmail("dupont@gmail.com");
        $user2->setPseudo("Durant");
        $user3->setPseudo("Dubois");
        $user4->setPseudo("");

        $user1->envoyerEmail("Le titre", "Le texte du mail");
        
        // var_dump($user4);
    
    ?>

</body>
</html>