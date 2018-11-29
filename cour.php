<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>student</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="css/style.css" rel="stylesheet">
    </head>
<body style="background-color: rgb(241, 241, 241)">
<nav class="navbar navbar-expand-lg navbar-dark primary-color">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link" href="group.html"><i class="fas fa-home"></i>Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="student.php"><i class="fas fa-user-circle"></i> profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="groupe.html"><i class="fab fa-glide-g"></i>group</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lessons.php"><i class="fas fa-book-open"></i> lessons</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="statistique.php"><i class="fas fa-chart-pie"></i>statistiques</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="test.php"><i class="fas fa-scroll"></i> tests</a>
        </li>

      </ul>
    </div>
    <form class="form-inline my-2 my-lg-0">
      <ul class="navbar-nav">
      <li class="nav-item text-white">
        <a class="nav-link disabled" href="#"></a><i class="fab fa-glide-g"></i><?php  echo $_SESSION['prenom']." ".$_SESSION['nom'] ?></a>
      </li>
      <li><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button></li>
      </ul>
  </form>
  </nav>



    <div class="container mt-5">
    <div class="card w-100% h-25">
            <div class="card-body">
            <h5 class="card-title">new lesson HTML5 1 </h5>
                 <div class="row">  
                 <a href=""> <div class="col-md-3"><img src="image/htmlp.png" alt="erreur" style="width:200px;height:100px"></div> </a> 
                 <div class="col-md-6"><p class="card-text">this is the place where the the lesson go there is a link with thhe picture if you want to enter it </div>
            </div>
         </div>
    </div>

   <div class="card w-100% h-25">
            <div class="card-body">
            <h5 class="card-title">new lesson HTML5 2 </h5>
                 <div class="row">  
                 <a href=""> <div class="col-md-3"><img src="image/htmlp.png" alt="erreur" style="width:200px;height:100px"></div> </a> 
                 <div class="col-md-6"><p class="card-text">this is the place where the the lesson go there is a link with thhe picture if you want to enter it </div>
            </div>
         </div>
    </div>

    <div class="card w-100% h-25">
            <div class="card-body">
            <h5 class="card-title">new lesson HTML5 3 </h5>
                 <div class="row">  
                 <a href=""> <div class="col-md-3"><img src="image/htmlp.png" alt="erreur" style="width:200px;height:100px"></div> </a> 
                 <div class="col-md-6"><p class="card-text">this is the place where the the lesson go there is a link with thhe picture if you want to enter it </div>
            </div>
         </div>
    </div>
    

    <div class="card w-100% h-25">
            <div class="card-body">
            <h5 class="card-title">new lesson HTML5 4 </h5>
                 <div class="row">  
                 <a href=""> <div class="col-md-3"><img src="image/htmlp.png" alt="erreur" style="width:200px;height:100px"></div> </a> 
                 <div class="col-md-6"><p class="card-text">this is the place where the the lesson go there is a link with thhe picture if you want to enter it </div>
            </div>
         </div>
    </div>


    <div class="card w-100% h-25">
            <div class="card-body">
            <h5 class="card-title">new lesson HTML5 5 </h5>
                 <div class="row">  
                 <a href=""> <div class="col-md-3"><img src="image/htmlp.png" alt="erreur" style="width:200px;height:100px"></div> </a> 
                 <div class="col-md-6"><p class="card-text">this is the place where the the lesson go there is a link with thhe picture if you want to enter it </div>
            </div>
         </div>
    </div>


    <div class="card w-100% h-25">
            <div class="card-body">
            <h5 class="card-title">new lesson HTML5 6 </h5>
                 <div class="row">  
                 <a href=""> <div class="col-md-3"><img src="image/htmlp.png" alt="erreur" style="width:200px;height:100px"></div> </a> 
                 <div class="col-md-6"><p class="card-text">this is the place where the the lesson go there is a link with thhe picture if you want to enter it </div>
            </div>
         </div>
    </div>


    <div class="card w-100% h-25">
            <div class="card-body">
            <h5 class="card-title">new lesson HTML5 7 </h5>
                 <div class="row">  
                <a href=""> <div class="col-md-3"><img src="image/htmlp.png" alt="erreur" style="width:200px;height:100px"></div> </a> 
                 <div class="col-md-6"><p class="card-text">this is the place where the the lesson go there is a link with thhe picture if you want to enter it </div>
            </div>
         </div>
    </div>


    <div class="card w-100% h-25">
            <div class="card-body">
            <h5 class="card-title">new lesson HTML5 8 </h5>
                 <div class="row">  
                 <a href=""> <div class="col-md-3"><img src="image/htmlp.png" alt="erreur" style="width:200px;height:100px"></div> </a> 
                 <div class="col-md-6"><p class="card-text">this is the place where the the lesson go there is a link with thhe picture if you want to enter it </div>
            </div>
         </div>
    </div>

    </div>
</body>
</html>