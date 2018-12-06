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
        <style>
        .file-field.medium .file-path-wrapper {
    height: 3rem; }
    .file-field.medium .file-path-wrapper .file-path {
      height: 2.8rem; }
  
  .file-field.big-2 .file-path-wrapper {
    height: 3.7rem; }
    .file-field.big-2 .file-path-wrapper .file-path {
      height: 3.5rem; }
        </style>
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
    <form class="form-inline my-2 my-lg-0 ">
      <ul class="navbar-nav">
      <li class="nav-item text-white">
        <a class="nav-link disabled" href="#"></a><i class="fab fa-glide-g"></i></a>
      </li>
      <li><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button></li>
      </ul>
  </form>
  </nav>

  <div class="container blue-gradient white-text mt-5 ">
    <h1 class="mt-5 d-flex justify-content-center">upload your lesson here </h1>
    <label for="">add the name of the lesson</label>
    <div class="md-form mt-3 white">
                <input type="text" id="materialSubscriptionFormPasswords" class="form-control" >
                <label for="materialSubscriptionFormPasswords">Name</label>
     </div>
     <div class="form-group green-border-focus">
           <label for="exampleFormControlTextarea5">add add description</label>
           <textarea class="form-control" id="exampleFormControlTextarea5" rows="3"></textarea>
      </div>
  <label for="">add your file here</label>
  <div class="input-group my-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
</div>
<button type="button" class="btn btn-primary btn-rounded purple-gradient mb-3">Primary</button>
  </div>

                  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
                  <!-- Bootstrap tooltips -->
                  <script type="text/javascript" src="js/popper.min.js"></script>
                  <!-- Bootstrap core JavaScript -->
                  <script type="text/javascript" src="js/bootstrap.min.js"></script>
                  <!-- MDB core JavaScript -->
                  <script type="text/javascript" src="js/mdb.min.js"></script>
                  <script>
                  $('.file_upload').file_upload();
                    </script> 
</body>
</html>