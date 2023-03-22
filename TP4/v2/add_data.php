<?php

    print_r($_POST);

    require_once("connection_open.php");

    if(isset($_POST['name']) && isset($_POST['email'])) 
    {
        if($_POST['name'] != '' || $_POST['email'] != '' ) 
        {
            print_r($_POST);
            $name = $_POST['name'];
            $email = $_POST['email'];
            $dernier_id = $pdo->lastInsertId();
            $sql = "INSERT INTO `users` (id, nom, email) VALUES  ('$dernier_id++', '$name', '$email' )";
            echo $sql;
            $request=$pdo->prepare($sql);
            $request->execute();
            echo 'La colonne a été ajoutée avec succès.';
        }
        else
            $errorText = "Veuillez saisir une donnée valide";
    } else
        $errorText = "ERROR PAGE";
 
?>
<a href="users.php">users</a>
