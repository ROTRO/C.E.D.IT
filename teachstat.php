
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
    <style>
   .chip.chip-md {
  height: 42px;
  line-height: 42px;
  border-radius: 21px;
}
.chip.chip-md img {
  height: 42px;
  width: 42px;
}

.chip.chip-lg {
  height: 52px;
  line-height: 52px;
  border-radius: 26px;
}
.chip.chip-lg img {
  height: 52px;
  width: 52px;
}
    </style>
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
        <li class="nav-item">
          <a class="nav-link" href="student.php"><i class="fas fa-user-circle"></i> profile</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="groupe.html "><i class="fab fa-glide-g"></i> group</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lessons.php"><i class="fas fa-book-open"></i> lessons</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="statistique.php"><i class="fas fa-chart-pie"></i> statistiques</a>
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
 
            <div class="row my-5">
                    <div class="col-md-3 offset-md-1 ">
                     <!-- Card -->
                      <div class="card testimonial-card ">
                       <!-- Background color -->
                       <div class="card-up primary-color"></div>
                       <!-- Avatar -->
                       <div class="avatar mx-auto white">
                         <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" class="rounded-circle" alt="woman avatar">
                       </div> 
                       <!-- Content -->
                       <div class="card-body">
                         <!-- Name -->
                         <h4 class="card-title">Anna Doe</h4>
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
                                                      aria-controls="pills-home" aria-selected="true">students</a>
                                                  </li>
                                                  <li class="nav-item">
                                                    <a class="nav-link " id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                                                      aria-controls="pills-profile" aria-selected="false">group</a>
                                                  </li>
                                                  <li class="nav-item">
                                                    <a class="nav-link " id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                                                      aria-controls="pills-contact" aria-selected="false">canl</a>
                                                  </li>
                                                </ul>
                                                <div class="tab-content pt-2 pl-1" id="pills-tabContent">
                                                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                  <table class="table">
                                                 <tr><td><div class="chip chip-md pink darken-2 white-text"><img src="https://mdbootstrap.com/img/Photos/Avatars/img(28).jpg" alt="Contact Person"> Martha Lores</div></td></tr>
                                                 <tr><td><div class="chip chip-md teal lighten-2 white-text"><img src="https://mdbootstrap.com/img/Photos/Avatars/img(28).jpg" alt="Contact Person"> Martha Lores</div></td></tr>
                                                 <tr><td><div class="chip chip-md cyan white-text"><img src="https://mdbootstrap.com/img/Photos/Avatars/img(28).jpg" alt="Contact Person"> Martha Lores</div></td></tr>
                                                 <tr><td><div class="chip chip-md indigo white-text"><img src="https://mdbootstrap.com/img/Photos/Avatars/img(28).jpg" alt="Contact Person"> Martha Lores</div></td></tr>
                                                 <tr><td><div class="chip chip-md green darken-2 white-text"><img src="https://mdbootstrap.com/img/Photos/Avatars/img(28).jpg" alt="Contact Person"> Martha Lores</div></td></tr>
                                                 </table> 
                                                </div>
                                                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                  <table class="table">
                                                  <tr><td>html</td></tr>
                                                  <tr><td>unity</td></tr>
                                                  <tr><td>photoshop</td></tr>
                                                  <tr><td>.....</td></tr>

                                                </table>
                                                    </div>
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
                    <div class="col-7">
                        
                        <div class="card testimonial-card "> <h3 class="card-header text-white bg-primary" 7 style="text-align:center">your stats</h3> <canvas id="pieChart"></canvas>
                        <canvas id="horizontalBar"></canvas>
                        <table class="table table-borderless my-4">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">name</th>
                      <th scope="col">score</th>
                      <th scope="col">group</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>96%</td>
                      <td><span class="badge badge-primary badge-pill">HTML5</span></td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>92%</td>
                      <td><span class="badge badge-primary badge-pill">UNITY</span></td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry the Bird</td>
                      <td>88%</td>
                      <td><span class="badge badge-primary badge-pill">CISCO</span></td>

                    </tr>
                  </tbody>
                </table>  
                              
                          
                         
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
            //pie
            var ctxP = document.getElementById("pieChart").getContext('2d');
            var myPieChart = new Chart(ctxP, {
              type: 'pie',
              data: {
                labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
                datasets: [{
                  data: [300, 50, 100, 40, 120],
                  backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
                  hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
                }]
              },
              options: {
                responsive: true
              }
            });
          
          //the bars chart
          new Chart(document.getElementById("horizontalBar"), {
    "type": "horizontalBar",
    "data": {
      "labels": ["Red", "Orange", "Yellow", "Green", "Blue",],
      "datasets": [{
        "label": "your groups",
        "data": [22, 33, 55, 12, 86, 23, 14],
        "fill": false,
        "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)",
          "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(54, 162, 235, 0.2)"
        ],
        "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)",
          "rgb(75, 192, 192)", "rgb(54, 162, 235)",
        ],
        "borderWidth": 1
      }]
    },
    "options": {
      "scales": {
        "xAxes": [{
          "ticks": {
            "beginAtZero": true
          }
        }]
      }
    }
  });

          </script>
</body>
</html>