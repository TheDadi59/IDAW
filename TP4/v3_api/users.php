<?php

    $request_method=$_SERVER["REQUEST_METHOD"];
    switch ($request_method)
    {
        case 'GET': // read
            if($GET["id"] != '' )
            {
                $id = intval($GET["id"]);
                getUsers($id);
            }
            break;
        case 'POST': // creation
            if($POST["name"] != '' || $POST["email"] != '')
            {
                $name = $POST["name"];
                $email = $POST["email"];
                addUsers($name,$email);
            }

            break; 
        case 'PUT' : // update 
            
            break;
        case 'DELETE' : // delete

            break;
    }

    function getUsers($id){

    }
    function addUsers($name,$email){
        
    }

    function updateUsers(){

    }

    function deleteUsers(){
        
    }
?>