<?php
    require_once('config.php');

    $connectionString = "mysql:host=". _MYSQL_HOST;

    if(defined('_MYSQL_PORT'))
        $connectionString .= ";port=". _MYSQL_PORT;

    $connectionString .= ";dbname=" . _MYSQL_DBNAME;
    $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' );

    try {
        $pdo = new PDO($connectionString,_MYSQL_USER,_MYSQL_PASSWORD,$options);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    catch (PDOException $erreur) {
        myLog('Erreur : '.$erreur->getMessage());
    }

    $request = $pdo->prepare("select * from users"); // c'est la ligne de commande

//-----
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
    // TODO: add your code here
    // retrieve data from database using fetch(PDO::FETCH_OBJ) and
    // display them in HTML array

    /*** close the database connection ***/
    $pdo = null;
?>