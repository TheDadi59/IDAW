<?php
$request_method = $_SERVER["REQUEST_METHOD"];

switch ($request_method) {
    case 'GET': // read
        if (!empty($_GET["id"])) {
            $id = intval($GET["id"]);
            getUsers($id);
        }
        break;

    case 'POST': // creation

        if (!empty($POST["name"])) {
            if (!empty($POST["email"]))
            {
                addUsers($name, $email);
            }       
        }
        break;

    case 'PUT': // update 
        $json = file_get_contents('php://input');
        $put = json_decode($json, TRUE);
        $id = $put['id'];
        $name = $put['name'];
        $email = $put['email'];
        updateUsers($id, $name, $email);
        break;
        
    case 'DELETE': // delete
        if (!empty($_GET["id"])) {
            $id = intval($_GET["id"]);
            deleteUsers($id);
        }
        break;

    default:
        break;
}

function getUsers($id)
{
    require_once('db_init.php');

    if ($id === null) {
        $request = $pdo->prepare("select * from users");
    } else {
        $request = $pdo->prepare("select * from users where id = $id");
    }

    $request->execute();
    $table = array();
    $table = $request->fetchAll();

    echo json_encode($table, 300);
}
function addUsers($name, $email)
{
    require_once("db_init.php");

    if (isset($_POST['name']) && isset($_POST['email'])) {
        if ($_POST['name'] != '' || $_POST['email'] != '') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $dernier_id = $pdo->lastInsertId();
            $sql = "INSERT INTO `users` (id, nom, email) VALUES  ('$dernier_id++', '$name', '$email' )";
            echo $sql;
            $request = $pdo->prepare($sql);
            $request->execute();
            $table = array();
            $table = $request->fetchAll();

            echo json_encode($table, 300);
        } else
            $errorText = "Veuillez saisir une donnée valide";
    } else
        $errorText = "ERROR PAGE";
}

function updateUsers($id, $name, $email)
{
    require_once('db_init.php');
    $sql = "UPDATE users SET name = '$name', email = '$email' WHERE id ='$id'";
    $pdo->prepare($sql)->execute();
}

function deleteUsers($id)
{
    require_once('db_init.php');
    if ($id === null) {
        $sql = " TRUNCATE TABLE `users`";
        $request = $pdo->prepare($sql);
    } else {
        $sql = "DELETE FROM `users` WHERE id= '$id'";
        $request = $pdo->prepare($sql);
    }
    $request->execute();
}
