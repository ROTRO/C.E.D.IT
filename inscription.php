<html>

<head>

    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Page Title</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->

    <!-- <script src="main.js"></script> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"

        crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"

        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"

        crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"

        crossorigin="anonymous"></script>

    <style type="text/css">

      .msg-erreur{

      padding :0 0 0 30px;

      display:inline;

      color: #ff5b5b;

      display: none;

      }

      </style>

      <script>

      $(document).ready(function(e){

      $("#envoyer").click(function(){

      if ($("#nom").val() == "") {

        $("#erreur").css('visibility','visible');

        $("#erreur").text("The Field Name should not be Empty" ).show().fadeIn( 1000 );e.preventDefault();

}

      else if($("#prenom").val() == "")

      {$("#erreur").css('visibility','visible');

        $("#erreur").text("This Field Last Name should not be Empty" ).show().fadeIn( 1000 );e.preventDefault();

}

      else if ($("#tel").val() == "")

      {$("#erreur").css('visibility','visible');

        $("#erreur").text("This Field Telephone should not be Empty" ).show().fadeIn( 1000 );e.preventDefault();

}

      else if ($("#email").val() == "")

      {$("#erreur").css('visibility','visible');

        $("#erreur").text("This Field Email should not be Empty" ).show().fadeIn( 1000 );e.preventDefault();

}

      else if ($("#CIN").val() == "")

      {$("#erreur").css('visibility','visible');

        $("#erreur").text("This Field CIN should not be Empty" ).show().fadeIn( 1000 );e.preventDefault();

}

      else if  ($("#snumber").val() == "")

      {$("#erreur").css('visibility','visible');

        $("#erreur").text("This Field Student Number should not be Empty" ).show().fadeIn( 1000 );e.preventDefault();

}

      else if ($("#login").val() == "")

      {$("#erreur").css('visibility','visible');

        $("#erreur").text("This Field Username should not be Empty" ).show().fadeIn( 1000 );e.preventDefault();

}

      else if  ($("#password").val() == "")

      {$("#erreur").css('visibility','visible');

        $("#erreur").text("This Field Password should not be Empty" ).show().fadeIn( 1000 );e.preventDefault();

}

      else {

              $("#erreur").css('visibility','hidden');

              $("#envoyer").prop("type", "Submit");

      }

     var filter =/^[a-zA-Z]+$/;

     if (!document.getElementById('nom').value.match(filter)){

        $("#erreur").css('visibility','visible');

        alert(document.getElementById('nom').value);

        $("#erreur").text("name  invalid please try again" ).show().fadeIn( 1000 );e.preventDefault();

}

     if (!document.getElementById('prenom').value.match(filter)){

        $("#erreur").css('visibility','visible');

        $("#erreur").text("last name invalid please try again" ).show().fadeIn( 1000 );e.preventDefault();

}

     var filter =/^[0-9]+$/;

     if (!document.getElementById('tel').value.match(filter)){

        $("#erreur").css('visibility','visible');

        $("#erreur").text("tel invalid please try again" ).show().fadeIn( 1000 );e.preventDefault();

}

     if (!document.getElementById('CIN').value.match(filter)){

        $("#erreur").css('visibility','visible');

        $("#erreur").text("CIN invalid please try again" ).show().fadeIn( 1000 );e.preventDefault();

}



          })

       })



     </script>



</head>



<body style="background-color: rgb(241, 241, 241)">








        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

                <a class="navbar-brand" href="#">Navbar</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"

                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>

                </button>



                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item active">

                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link" href="#">Link</a>

                        </li>

                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"

                                aria-haspopup="true" aria-expanded="false">

                                Dropdown

                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="#">Action</a>

                                <a class="dropdown-item" href="#">Another action</a>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="#">Something else here</a>

                            </div>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link disabled" href="#">Disabled</a>

                        </li>

                    </ul>

                    <form class="form-inline my-2 my-lg-0">

                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

                    </form>

                </div>

            </nav>

        <section class="testimonial py-5" id="testimonial">

                <div class="container">

                    <div class="row ">

                        <div class="col-md-4 py-5 bg-primary text-white text-center ">

                            <div class=" ">

                                <div class="card-body">

                                    <img src="http://www.ansonika.com/mavia/img/registration_bg.svg" style="width:30%">

                                    <h2 class="py-3">Registration</h2>

                                    <p>Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu, facete detracto patrioque an per, lucilius pertinacia eu vel.

                                </p>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-8 py-5 border" style="background-color: rgb(255, 255, 255)">

                            <h4 class="pb-4">Please fill with your details</h4>

                            <form method='Post' action='inscri.php'>

                                <div class="form-row">

                                    <div class="form-group col-md-6" method="POST" action="">

                                      <input id="nom" name="nom" placeholder="First Name" class="form-control" type="text">

                                    </div>

                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>





                                    <div class="form-group col-md-6">

                                            <input id="prenom" name="prenom" placeholder="Last name" class="form-control" type="text">

                                    </div>

                                  </div>

                                  <div class="form-row">

                                    <div class="form-group col-md-6">

                                        <input id="tel" name="tel" placeholder="Phone Number" class="form-control" type="text">

                                    </div>

                                    <span class="etel-erreur"></span>

                                    <div class="form-group col-md-6">

                                            <input type="email" name="email" class="form-control" id="Email" placeholder="Email">

                                    </div>

                                    <span class="email-erreur"></span>

                                    <div class="form-group col-md-6">

                                            <input id="CIN" name="CIN" placeholder="CIN" class="form-control" type="text">

                                    </div>

                                    <span class="cin-erreur"></span>

                                    <div class="form-group col-md-6">

                                            <input id="snumber" name="snumber" placeholder="Student Number" class="form-control" type="text" >

                                    </div>

                                    <span class="number-erreur"></span>

                                    <div class="form-group col-md-12">

                                            <input id="login" name="login" placeholder="Username" class="form-control" type="text">

                                    </div>

                                    <span class="login-erreur"></span>

                                    <div class="form-group col-md-12">

                                      <input id="password" name="password" placeholder="Password" class="form-control" type="password" >

                                    </div>

                                    <span class="password-erreur"></span>

                                </div>

                                <div class="form-row">

                                    <div class="form-group">

                                        <div class="form-group">

                                            <div class="form-check">

                                              <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" >

                                              <label class="form-check-label" for="invalidCheck2">

                                                <small>By clicking Submit, you agree to our Terms & Conditions, Visitor Agreement and Privacy Policy.</small>

                                              </label>

                                            </div>

                                          </div>



                                      </div>

                                </div>



                                <div class="form-row">

                                    <button type="button" class="btn btn-success" id="envoyer">Submit</button>



                                </div>

                                <span style='margin-left:30%;visibility:hidden;'class='alert alert-danger'id='erreur'></span>

                            </form>

                        </div>

                    </div>

                </div>

            </section>

   </body>

</html>
