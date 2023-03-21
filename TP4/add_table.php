<?php
    if(isset($_POST['nom']) && isset($_POST['email'])) 
    {
        if($_POST['nom'] == '' || $_POST['email'] == '' ) 
        {
            $sql = "ALTER TABLE mytable ADD new_column VARCHAR(50)";
            $pdo->exec($sql);
            echo 'La colonne a été ajoutée avec succès.';
        } 
        else
            $errorText = "Veuillez saisir une donnée valide";
    } else
        $errorText = "ERROR PAGE";

?>