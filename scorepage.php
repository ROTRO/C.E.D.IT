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
    <div class="container mt-5">
    <!-- Jumbotron -->
    <div class="jumbotron p-0">

    

   <!-- Card content -->
    <div class="card-body text-center mb-3 blue-gradient white-text ">

    <!-- Title -->
    <h1 class="card-title h3 my-4"><strong>Result</strong></h1>
   
 
    <h4 class="card-title h3 my-4"><strong>you had on the your evalution 100%<sub>(10/10)</sub></strong></h4>
   </div>
<!-- Jumbotron -->
<table class="table">
  <thead class="black white-text">
    <tr>
      <th scope="col">answer number</th>
      <th scope="col">your answer</th>
      <th scope="col">correct answer</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><h3><span class="badge badge-primary">answer c</span></h3></td>
      <td><h3><span class="badge badge-success">correct answer c</span></td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><h3><span class="badge badge-primary">answer a</span></h3></td>
      <td><h3><span class="badge badge-success">correct answer a</span></h3></td>
     
    </tr>
    
  </tbody>
</table>
</div>

</div>


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
          
          </script>
</body>
</html>