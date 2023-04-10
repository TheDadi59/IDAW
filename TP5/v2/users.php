<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/index.css"> 
        <link href="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.css" rel="stylesheet"/>
        
        <script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <title>tabletest</title>
            <style>
                body{ margin-top: 5em; }
                .table {
                margin-top: 100px;
                margin-bottom: 100px;
                }
                .btn{          
                display: flex;
                flex-direction: column;
                align-items: flex-end;
                padding: 6px;
                gap: 12px;
                border-radius: 2px;
                }
            </style>
    </head>

    <body>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">CRUD</th>
                </tr>
            </thead>
            <tbody id="studentsTableBody">
            </tbody>
        </table>

        <form id="addStudentForm" action="" method="POST">

            <div class="form-group row">

                <label for="inputNom" class="col-sm-2 col-form-label">Nom*</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="inputNom" >
                </div>

                <label for="inputPrenom" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="inputEmail" >
                </div>
            </div>

            <div class="form-group row">
                <span class="col-sm-2"></span>
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-primary form-control">Submit</button>
                </div>
            </div>
        </form>

    </body>

    <script>

// -------------------------------Read---------------------------------
    $('#myForm').submit(function(event) {
        // Empêcher la soumission normale du formulaire
        event.preventDefault();

        // Récupérer les données du formulaire
        var formData = $(this).serialize();
    
        $.ajax({ 
        
            url: "http://localhost/IDAW/TP4/v3_api/users.php", // a adapter pour tous

            method: "GET",

            dataType : "json",
        })

        .done(function(response){
            addStudent();
        })

        .fail(function(error){
            alert("La requête s'est terminée en échec. Infos : " + JSON.stringify(error));
        })

        .always(function(){
            alert("Lecture effectuee...");
        
        
        });
    }

            
// -------------------------------Create---------------------------------
function createtable(){
    $.post({ 
            
            url: "http://localhost/IDAW/TP4/v3_api/users.php", // a adapter pour tous

            method: "POST",

            dataType : "json",
        })

        .done(function(response){
            addStudent(response);
            alert("Creation effectuee...");
        })

        .fail(function(error){
            alert("La requête s'est terminée en échec. Infos : " + JSON.stringify(error));
        })

        .always(function(){
            alert("request done...");
        });
    }
// -------------------------------Update---------------------------------
function UpdateTable(){
    $.ajax({ 
            
            url: "http://localhost/IDAW/TP4/v3_api/users.php", // a adapter pour tous

            method: "PUT",

            dataType : "json",
        })

        .done(function(response){
            
        })

        .fail(function(error){
            alert("La requête s'est terminée en échec. Infos : " + JSON.stringify(error));
        })

        .always(function(){
            alert("Mise a jour effectuee...");
        });
}
// -------------------------------Delete---------------------------------
function DeleteTable(){
var id = (event.target).closest("tr");

$.ajax({ 
        
        url: `http://localhost/IDAW/TP4/v3_api/users.php?id=${id}`, // a adapter pour tous

        method: "DELETE",

        dataType : "json",
    })

    .done(function(response){

    })

    .fail(function(error){
        alert("La requête s'est terminée en échec. Infos : " + JSON.stringify(error));
    })

    .always(function(){
        alert("Suppression effectuee...");
    });
}
/*-------------------------------------------function------------------------------------------------*/

                function onFormSubmit() {
                // prevent the form to be sent to the server
                    event.preventDefault();
                    
                    let tableRows = document.getElementsByTagName('tr');
                    let id = "student-"+tableRows.length;
                    let nom = $("#inputNom").val();
                    let email = $("#inputEmail").val();
                    addStudent(id,nom,email);
                }

                function addStudent(response){
                    for(let i=0;i<response.length;i++)
                        $("#studentsTableBody").append(`<tr id="${response[i]['id']}"><td>${response[i]['nom']}</td><td>${response[i]['email']}</td><td> <button type="button" onclick="DeleteData()">Delete</button> <button type="button" onclick="EditData(${id})">Edit</button></td></tr>`);
                    resetCache();
                }
                //this dans le delete() dans append puis e.closest("tr.remove");

                function resetCache(){
                    $(':input').val('');
                }

                function DeleteData() {
                    $(event.target).closest("tr").remove();
                }

                // function EditData() {
                //     let currentid = (event.target).closest("tr");
                //     DeleteData();
                //     onFormSubmit();
                // }
            
    </script>
</html>



<script>
$(document).ready(function(){
    //Lors du clic sur le bouton...
    $("button").click(function(){
        let chaine = $("form").serialize();
        let tb = $("form").serializeArray();
    });
});
</script>