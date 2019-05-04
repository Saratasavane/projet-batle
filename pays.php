<?php
$db = mysqli_connect('localhost', 'root', '', 'batle') or die(mysqli_error($mysqli));
//if save button is clicked
if(isset($_POST['submit'])) {
    $nom= $_POST['nom'];
    $superficie= $_POST['superficie'];
    $nombredevilles= $_POST['nombredevilles'];
    
    $query ="INSERT INTO crud(nom, superficie, nombredevilles) VALUES('nom', '$superficie', '$nombredevilles')";
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
       <h1>Table des pays de l'Afrique</h1>
        <form method="POST" action="">
           <input type="text" name="nom" placeholder="Entrez un nom">
           <input type="Password" name="superficie" placeholder="Entrez un nom">
           <input type="text" name="nombredevilles" placeholder="Entrez un nom">
            <button type="submit" name="submit" class="btn btn-primary">Ajouter 3 villes</button>
        </form>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Superficie</th>
                    <th>Nombre de villes</th>
                </tr>
            </thead>
            <tbody>
               <?php while($row = mysqli_fetch_array($results)){ ?>
                <tr>
                    <td>cote d'ivoire</td>
                    <td><?php echo $row['superficie']; ?></td>
                    <td><?php echo $row['nombredevilles']; ?></td>
                </tr>
                <tr>
                    <td>ghana</td>
                    <td><?php echo $row['superficie']; ?></td>
                    <td><?php echo $row['nombredevilles']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
    
    
    
    
    
    
    
    
    
    
    
    </html>