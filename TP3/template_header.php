<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ma page</title>
        <?php 
            if(isset($_COOKIE['style'])){
                echo "<link rel='stylesheet' href='css/{$_COOKIE["style"]}.css'>";
                
            }else{
                echo "<link rel='stylesheet' href='css/style1.css'>";
            }
        ?>
    </head>