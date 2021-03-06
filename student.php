<?php
session_start();
try {
$bdd= new PDO("mysql:host=localhost; dbname=127_0_0_1", 'root', '');
echo "Connection success: ";
}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    $name=$_SESSION['nom'];
      echo $name;
    $query = $bdd->query("SELECT `file_name` FROM `student` WHERE `fname_s`='$name' ");

   if($query)
    {$row = $query->fetch();
    $imageURL = $row["file_name"];}
    else {
      echo ('request failed');
    }

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
        <li class="nav-item active">
          <a class="nav-link" href="#"><i class="fas fa-home"></i>Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fab fa-glide-g"></i>group</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-book-open"></i> lessons</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-chart-pie"></i>statistiques</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#"><i class="fas fa-scroll"></i> tests</a>
        </li>

      </ul>
    </div>
    <form class="form-inline my-2 my-lg-0">
      <ul class="navbar-nav">
      <li class="nav-item text-white">
        <a class="nav-link disabled" href="#"></a><i class="fab fa-glide-g"></i><?php $_SESSION["nom"]+$_SESSION["prenom"] ?></a>
      </li>
      <li><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button></li>

</ul>



  </form>
  </nav>


            <div class="row my-5">
                    <div class="col-md-3 offset-md-1 ">
                     <!-- Card -->
                      <div class="card testimonial-card ">
                       <!-- Background color -->
                       <div class="card-up primary-color"></div>
                       <!-- Avatar -->
                       <div class="avatar mx-auto white">

                         <img src="<?php echo $imageURL; ?>" class="rounded-circle" alt="woman avatar">
                         <form action="uploadimg.php" method="post" enctype="multipart/form-data">
                             <input type="file" name="file">
                             <input type="submit" name="submit" value="Upload">
                         </form>
                       </div>
                       <!-- Content -->
                       <div class="card-body">
                         <!-- Name -->
                         <h4 class="card-title"><?php echo $_SESSION['nom'].' '.$_SESSION['prenom'] ;?></h4>
                         <hr>
                         <!-- Quotation -->
                         <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci</p>
                       </div>
                     </div>
                         <!-- Card -->

                        <div class="container mt-5">
                          <div class="card ">
                                  <h5 class="card-header blue-gradient text-white bg-primary">Featured</h5>
                                  <div class="card-body">
                                          <ul class="nav nav-pills  mb-3" id="pills-tab" role="tablist">
                                                  <li class="nav-item">
                                                    <a class="nav-link active " id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                                                      aria-controls="pills-home" aria-selected="true">friends</a>
                                                  </li>
                                                  <li class="nav-item">
                                                    <a class="nav-link " id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                                                      aria-controls="pills-profile" aria-selected="false">group</a>
                                                  </li>
                                                  <li class="nav-item">
                                                    <a class="nav-link " id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                                                      aria-controls="pills-contact" aria-selected="false">canlend</a>
                                                  </li>
                                                </ul>
                                                <div class="tab-content pt-2 pl-1" id="pills-tabContent">
                                                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                    <div class="list-group">
                                                    <a href="#!" class="list-group-item list-group-item-action active"> Cras justo odio </a>
                                                    <a href="#!" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                                                    <a href="#!" class="list-group-item list-group-item-action">Morbi leo risus</a>
                                                    <a href="#!" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                                                    <a href="#!" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
                                                  </div>
                                                </div>
                                                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                    <div class="list-group">
                                                      <a href="#!" class="list-group-item list-group-item-action">
                                                        Cras justo odio</a>

                                                      <a href="#!" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                                                      <a href="#!" class="list-group-item list-group-item-action">Morbi leo risus</a>
                                                      <a href="#!" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                                                      <a href="#!" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
                                                    </div></div>
                                                  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

                                                      <div class="row">
                                                            <div class="span12">
                                                            <table class="table-condensed table-bordered table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                          <th colspan="7">
                                                                            <span class="btn-group">

                                                                              <a class="btn active">February 2018</a>

                                                                            </span>
                                                                          </th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Su</th>
                                                                            <th>Mo</th>
                                                                            <th>Tu</th>
                                                                            <th>We</th>
                                                                            <th>Th</th>
                                                                            <th>Fr</th>
                                                                            <th>Sa</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>

                                                                            <td>1</td>
                                                                            <td>2</td>
                                                                            <td>3</td>
                                                                            <td>4</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>5</td>
                                                                            <td>6</td>
                                                                            <td>7</td>
                                                                            <td>8</td>
                                                                            <td>9</td>
                                                                            <td>10</td>
                                                                            <td>11</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>12</td>
                                                                            <td>13</td>
                                                                            <td>14</td>
                                                                            <td>15</td>
                                                                            <td>16</td>
                                                                            <td>17</td>
                                                                            <td>18</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>19</td>
                                                                            <td class="btn-primary"><strong>20</strong></td>
                                                                            <td>21</td>
                                                                            <td>22</td>
                                                                            <td>23</td>
                                                                            <td>24</td>
                                                                            <td>25</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>26</td>
                                                                            <td>27</td>
                                                                            <td>28</td>
                                                                            <td>29</td>

                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                      </div>
                                                  </div>
                                                </div>
                                  </div>
                                </div>
                  </div>
                         <div class="container mt-5">
                                <div class="card ">
                                        <h5 class="card-header text-white bg-primary">Featured</h5>
                                        <div class="card-body">
                                            <a href=""class="mr-4 ml-4"> <i class="fab fa-facebook-f fa-4x"></i></a>
                                            <a href=""class="mr-4"> <i class="fab fa-instagram fa-4x"></i></a>
                                            <a href=""> <i class="fab fa-twitter fa-4x"></i></a>
                                        </div>
                                      </div>
                        </div>

                    </div>
                    <div class="col-8">
                        <div class="card w-75 h-25">
                            <div class="card-body">
                              <h5 class="card-title">new lesson unity unity</h5>
                              <div class="row">
                                  <div class="col-md-4 "><img src="image/image6.png" alt="momen" style="width:200px;height:130px"></div>
                                  <div class="col-md-6"><p class="card-text">this is the place where the the lesson go there is a link with thhe picture if you want to enter it </div>
                              </div>


                            </div>
                          </div>
                          <div class="card w-75 h-25 mt-5">
                            <div class="card-body">
                              <h5 class="card-title">new lesson photoshop</h5>
                              <div class="row">
                                  <div class="col-md-4 "><img src="image/image7.png" alt="momen" style="width:200px;height:130px"></div>
                                  <div class="col-md-6"><p class="card-text">this is the place where the the lesson go there is a link with thhe picture if you want to enter it</div>
                              </div>


                            </div>
                          </div>
                          <div class="card w-75 h-25 mt-5">
                            <div class="card-body">
                              <h5 class="card-title">new lesson blender</h5>
                              <div class="row">
                                  <div class="col-md-4 "><img src="image/image8.png" alt="momen" style="width:200px;height:130px"></div>
                                  <div class="col-md-6"><p class="card-text">this is the place where the the lesson go there is a link with thhe picture if you want to enter it</p></div>
                              </div>


                            </div>
                          </div>
                          </div>
                  </div>
<footer class="page-footer font-small blue">
<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2018 Copyright:
<a href="https://mdbootstrap.com/education/angular/"> MDBootstrap.com</a>
</div>
</footer>
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
