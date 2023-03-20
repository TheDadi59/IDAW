<?php session_start();
    require_once('template_header.php');
// on simule une base de données
    $users = array(
        // login => password
        'riri' => 'fifi',
        'yoda' => 'maitrejedi' );

    $login = "anonymous";
    $errorText = "";
    $successfullyLogged = false;
// ----------------------------------
    if(isset($_POST['login']) && isset($_POST['password'])) 
    {
        $tryLogin=$_POST['login'];
        $tryPwd=$_POST['password'];
    // si login existe et password correspond
        if( array_key_exists($tryLogin,$users) && $users[$tryLogin]==$tryPwd ) {
            $successfullyLogged = true;
            $login = $tryLogin;
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['password'] = $_POST['password'];
        } else
            $errorText = "Erreur de login/password";
    } else
        $errorText = "Merci d'utiliser le formulaire de login";


    if(!$successfullyLogged) {
        echo $errorText;
        } else {

            echo "<h1>Bienvenu ".$login."</h1>";
        }
    
?>


<a href='page1.php'>page 1</a>
<a href='page2.php'>page 2</a>

<td><form id="logout_form" action="disconnected.php" method="POST">
    <table>
        <tr>
            <td><input type="submit" value="Se déconnecter..." /></td>
        </tr>
    </table>
</form>


<?php
    require_once('template_footer.php');
?>