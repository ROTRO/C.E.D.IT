<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Document</title>
    <style>#test{margin-top:5%;}
    #Etud{text-align:center;Color:red;margin-top:2%;}</style>
    <?php 
    require'connexion.php'
     ?>
</head>
<body>
<div class='Jumbotron'>
<h2 id='Etud'>List of Students</h2>
</div>
<div id='test'>
    <div class='container'>
  
    <form action='add.php'>
      <table class="table">
      <tr>
      <th> ID </th>
      <th> First Name </th>
      <th> Last Name </th>
     <th> Email </th>
     <th> Phone Number </th>
      </tr>
        <?php
        $request = $bdd->query('SELECT * FROM etudiant');
        while($data = $request->fetch())
        {echo '<tr>';
            echo '<td>'.$data['id'].'</td><td>'.$data['first_name'].'</td><td>'.$data['last_name'].'</td><td>'.$data['email'].'</td><td>'.$data['phone'].'</td>';
         echo '</tr>';
        } 
        ?>
      </table>
     
      <button type='submit' class='btn btn-success' >Add Student</button>
      </form>
      <div style='margin-top:2%;'>
      <form action='Delete.php'>
      <button type='submit' class='btn btn-danger' >Delete Student</button>
      </form>
      </div>
      <div style='margin-top:2%;'>
      <form action='modifier.php'>
      <button type='submit' class='btn btn-dark' >Modify Student</button>
      </form>
      <div>
     
    </div>
    </div>
</body>
</html>