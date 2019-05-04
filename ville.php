<?php
$edit_state = false;

$db = mysqli_connect('localhost', 'root', '', 'batle') or die(mysqli_error($mysqli));
//if save button is clicked
if(isset($_POST['submit'])) {
    $nom= $_POST['nom'];
    $superficie= $_POST['superficie'];
    
    $query ="INSERT INTO crud(nom, superficie, pays) VALUES('nom', '$superficie')";
    mysqli_query($db, $query);
    
}
$results = mysqli_query($db, "SELECT * FROM crud");


?>




<!DOCTYPE>
<html>
    <head>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title></title>
    </head>
    <body>
       <h1>Table des villes de l'Afrique</h1>
        <form method="POST" action="">
           <input type="Password" name="superficie" placeholder=" une taille en km2">
            <select class="form-control" name="commune">
                <option value="Yopougon">Abidjan</option>
                <option value="Cocody">Bouake</option>
                <option value="Abobo">Yamoussoukro</option>
                </select>
                
                <button type="submit" name="submit" class="btn btn-primary">Modifier la superficie</button>
                
        </form>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Superficie</th>
                    <th>Pays</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Abidjan</td>
                    <td>.......</td>
                    <td>Cote d'ivoire</td>
                </tr>
                <tr>
                    <td>Bouake</td>
                    <td>.......</td>
                    <td>Cote d'ivoire</td>
                </tr>
                <tr>
                    <td>Yamoussoukro</td>
                    <td>.......</td>
                    <td>Cote d'ivoire</td>
                </tr>
            </tbody>
        </table>

    </body>
</html>