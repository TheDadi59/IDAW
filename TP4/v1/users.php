<?php
    require_once('connection_open.php');
    // require_once('db_init.php');
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
//-----


    /*** close the database connection ***/
    require_once('connection_close.php');
?>