<?php
    require_once('template_header.php');
?>
<p>Bienvenu dans la premiere page</p>
<a href="page2.php">page2</a>
<a href="connected.php">accueil<a>
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