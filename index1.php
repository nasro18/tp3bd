<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">   
<div class="jumbotron">
            <h3>Liste des étudiants DSI22 g1 </h3>
        </div>

        <table class="table">
       
  <a href="creat.php"> <h2>nouvo Etudiante</h2></a>
  <tr class="table-primary">
        <td>id</td>
        <td>nom</td>
        <td>prenom</td>
        <td>email</td>
        <td>phone</td>

    </tr>
    </thead>
    <?php
    require 'connexion.php';
         $rep= $bd->query('SELECT * FROM etudiante');
          while($data= $rep->fetch())
          {
              echo '<tr>';
              echo '<td>' .$data['id'].'</td>';
              echo '<td>' .$data['nom'].'</td>';
              echo '<td>' .$data['prenom']. '</td>' ;
              echo '<td>' .$data['email']. '</td>' ;
              echo '<td>' .$data['phone']. '</td>' ;
              echo '<td><a href="update.php?id='.$data['id'].'"><i class="fas fa-user-edit">&nbsp;Editer</i></a>&nbsp;&nbsp;';
                        echo '<a href="delete.php?id='.$data['id'].'"><i class="fas fa-user-times">&nbsp;Supprimer</i></a></td>';
              echo '</tr>';
          }


                    
     ?>

 </table>



 </div>





 
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>