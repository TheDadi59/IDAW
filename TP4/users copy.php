<?php
    require_once('connection_open.php');
    require_once('db_init.php');
//-----
    $request = $pdo->prepare("select * from users"); // c'est la ligne de commande
    $request->execute(); // c'est le go
    echo("<table>
    <tr>
      <th>id</th>
      <th>nom</th>
      <th>email</th>
    </tr>");
    foreach($request as $user){
        echo("<tr>
        <td>{$user["id"]}</td>
        <td>{$user["nom"]}</td>
        <td>{$user["email"]}</td>
      </tr>");  
    }
    echo("
    <form id='add' action='add_table.php' method='POST'>
        <table>
            <tr>
                <th>Nom :</th>
                <td><input type='text' name='nom'></td>
            </tr>
            <tr>
                <th>Email :</th>
                <td><input type='text' name='email'></td>
            </tr>
            <tr>
                <th></th>
                <td><input type='submit' value='Add' /></td>
            </tr>
        </table>
    </form>");
//-----


    /*** close the database connection ***/
    require_once('connection_close.php');
?>