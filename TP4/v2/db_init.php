<?php
    require_once('connection_open.php');

    // Suppression de toutes les tables de la base de données
    //$pdo->query('SET FOREIGN_KEY_CHECKS = 0');
    $tables = $pdo->query('SHOW TABLES')->fetchAll(PDO::FETCH_COLUMN);
    foreach ($tables as $table) {
        $pdo->query("DROP TABLE IF EXISTS `$table`");
    }
    //$pdo->query('SET FOREIGN_KEY_CHECKS = 1');

    // Importation de la structure et des données de test
        $sql = file_get_contents('bdd/dbtest.sql');
        $pdo->exec($sql);


    //require_once('connection_open.php');
    //$bdd = file_get_contents("bdd/dbtest.sql");
    //$request = $pdo->exec($bdd);
    //print_r($result);
    //$pdo->exec($bdd);
?>
