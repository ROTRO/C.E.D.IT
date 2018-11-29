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
<body>
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
  <ul class="nav nav-tabs nav-justified md-tabs elegant-color-dark " id="myTabJust" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="test1-tab-just" data-toggle="tab" href="#test1-just" role="tab" aria-controls="home-just" aria-selected="true">test1</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="test2-tab-just" data-toggle="tab" href="#test2-just" role="tab" aria-controls="profile-just" aria-selected="false">test2</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="test3-tab-just" data-toggle="tab" href="#test3-just" role="tab" aria-controls="contact-just" aria-selected="false">test3</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="test4-tab-just" data-toggle="tab" href="#test4-just" role="tab" aria-controls="contact-just" aria-selected="false">test4</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="test5-tab-just" data-toggle="tab" href="#test5-just" role="tab" aria-controls="contact-just" aria-selected="false">test5</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="test6-tab-just" data-toggle="tab" href="#test6-just" role="tab" aria-controls="contact-just" aria-selected="false">test6</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="test7-tab-just" data-toggle="tab" href="#test7-just" role="tab" aria-controls="contact-just" aria-selected="false">test7</a>
  </li>
</ul>
<div class="tab-content card pt-5" id="myTabContentJust">
  <div class="tab-pane fade show active" id="test1-just" role="tabpanel" aria-labelledby="home-tab-just">
  <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">
  <div class="text-white text-center py-5 px-4 my-5">
    <div>
      <h2 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>Create your beautiful website with MDBootstrap</strong></h2>
      <p class="mx-5 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
        optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos. Odit sed qui, dolorum!
      </p>
      <a class="btn btn-outline-white btn-md"><i class="fa fa-clone left"></i> View project</a>
    </div>
  </div>
</div>
  </div>
  <div class="tab-pane fade" id="test2-just" role="tabpanel" aria-labelledby="profile-tab-just">
  <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">
  <div class="text-white text-center py-5 px-4 my-5">
    <div>
      <h2 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>Create your beautiful website with MDBootstrap</strong></h2>
      <p class="mx-5 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
        optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos. Odit sed qui, dolorum!
      </p>
      <a class="btn btn-outline-white btn-md"><i class="fa fa-clone left"></i> View project</a>
    </div>
  </div>
</div>  </div>
  <div class="tab-pane fade" id="test3-just" role="tabpanel" aria-labelledby="contact-tab-just">
  <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">
  <div class="text-white text-center py-5 px-4 my-5">
    <div>
      <h2 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>Create your beautiful website with MDBootstrap</strong></h2>
      <p class="mx-5 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
        optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos. Odit sed qui, dolorum!
      </p>
      <a class="btn btn-outline-white btn-md"><i class="fa fa-clone left"></i> View project</a>
    </div>
  </div>
</div>  </div>
  <div class="tab-pane fade" id="test4-just" role="tabpanel" aria-labelledby="contact-tab-just">
  <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">
  <div class="text-white text-center py-5 px-4 my-5">
    <div>
      <h2 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>Create your beautiful website with MDBootstrap</strong></h2>
      <p class="mx-5 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
        optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos. Odit sed qui, dolorum!
      </p>
      <a class="btn btn-outline-white btn-md"><i class="fa fa-clone left"></i> View project</a>
    </div>
  </div>
</div>  </div>
  <div class="tab-pane fade" id="test5-just" role="tabpanel" aria-labelledby="contact-tab-just">
  <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">
  <div class="text-white text-center py-5 px-4 my-5">
    <div>
      <h2 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>Create your beautiful website with MDBootstrap</strong></h2>
      <p class="mx-5 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
        optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos. Odit sed qui, dolorum!
      </p>
      <a class="btn btn-outline-white btn-md"><i class="fa fa-clone left"></i> View project</a>
    </div>
  </div>
</div>  </div>
  <div class="tab-pane fade" id="test6-just" role="tabpanel" aria-labelledby="contact-tab-just">
  <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">
  <div class="text-white text-center py-5 px-4 my-5">
    <div>
      <h2 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>Create your beautiful website with MDBootstrap</strong></h2>
      <p class="mx-5 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
        optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos. Odit sed qui, dolorum!
      </p>
      <a class="btn btn-outline-white btn-md"><i class="fa fa-clone left"></i> View project</a>
    </div>
  </div>
</div>  </div>
  <div class="tab-pane fade" id="test7-just" role="tabpanel" aria-labelledby="contact-tab-just">
  <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">
  <div class="text-white text-center py-5 px-4 my-5">
    <div>
      <h2 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>Create your beautiful website with MDBootstrap</strong></h2>
      <p class="mx-5 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
        optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos. Odit sed qui, dolorum!
      </p>
      <a class="btn btn-outline-white btn-md"><i class="fa fa-clone left"></i> View project</a>
    </div>
  </div>
</div>  </div>
</div>




 <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
                  <!-- Bootstrap tooltips -->
                  <script type="text/javascript" src="js/popper.min.js"></script>
                  <!-- Bootstrap core JavaScript -->
                  <script type="text/javascript" src="js/bootstrap.min.js"></script>
                  <!-- MDB core JavaScript -->
                  <script type="text/javascript" src="js/mdb.min.js"></script>
                  <script>
                  // SideNav Button Initialization
                  $(".button-collapse").sideNav();
                  // SideNav Scrollbar Initialization
                  var sideNavScrollbar = document.querySelector('.custom-scrollbar');
                   Ps.initialize(sideNavScrollbar);
                    </script>
</body>

 
</html>