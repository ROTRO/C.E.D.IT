<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Quiz</title>

    <?php

   $i=0;
    require 'Connect.php';
    $reponse = $bdd->query('SELECT Answers,CA,CC,Vrai FROM answers');
    $reponse1= $bdd->query('SELECT Question,CQ FROM questions');
    $Tab=array();



while ($donnees = $reponse->fetch())
{
   $tab[]=$donnees;

}
while ($donnees = $reponse1->fetch())
{
   $tab1[]=$donnees;
}

function eext()
{
   $GLOBALS['i']=$GLOBALS['i']+4;
   print $GLOBALS['i'];
}

?>


     <script>

    tab = <?php echo json_encode($GLOBALS['tab1'])?>;
    i=0;
    j=0;
    Score=0;
    tab1=<?php echo json_encode($GLOBALS['tab'])?>;

    window.onload = function what(){

    document.getElementById('Q').innerHTML=tab[0][0];
    document.getElementById('1').innerHTML=tab1[0][0];
    document.getElementById('a').setAttribute("value",tab1[0][3]);
    document.getElementById('2').innerHTML=tab1[1][0];
    document.getElementById('b').setAttribute("value",tab1[1][3]);
    document.getElementById('3').innerHTML=tab1[2][0];
    document.getElementById('c').setAttribute("value",tab1[2][3]);
    document.getElementById('4').innerHTML=tab1[3][0];

    document.getElementById('d').setAttribute("value",tab1[3][3]);}
    OK=true;
    //Function Next
    function next(){

      if((document.getElementById('a').checked == false) && document.getElementById('b').checked == false && document.getElementById('c').checked == false && document.getElementById('d').checked == false)
      {alert('Veuillez selectioner au moins un Reponse');}
       else if(tab[i][i+1]==undefined)
       {if(OK !=false){
         if(document.getElementById('a').checked == true)
        {document.getElementById('a').checked=false;
          if(document.getElementById('a').value =='V')
           Score++;
        }
        else if(document.getElementById('b').checked == true)
         {document.getElementById('b').checked=false;
           if(document.getElementById('b').value =='V')
            Score++;
         }
         else if(document.getElementById('c').checked == true)
          {document.getElementById('c').checked=false;
            if(document.getElementById('c').value =='V')
             Score++;
          }
          else if(document.getElementById('d').checked == true)
           {document.getElementById('d').checked=false;
             if(document.getElementById('d').value =='V')
              Score++;
           }}
           OK=false;
           if (confirm('Are you sure you want to Submit your answer ?')) {
             document.getElementById('Next').setAttribute("type","Submit");
             document.getElementById('Next').innerHTML = 'Sumbit Answers';
           } else {
               alert(Score);
           }

     }
      else {
        if(document.getElementById('a').checked == true)
         {document.getElementById('a').checked=false;
           if(document.getElementById('a').value =='V')
            Score++;
         }
         else if(document.getElementById('b').checked == true)
          {document.getElementById('b').checked=false;
            if(document.getElementById('b').value =='V')
             Score++;
          }
          else if(document.getElementById('c').checked == true)
           {document.getElementById('c').checked=false;
             if(document.getElementById('c').value =='V')
              Score++;
           }
           else if(document.getElementById('d').checked == true)
            {document.getElementById('d').checked=false;
              if(document.getElementById('d').value =='V')
               Score++;
            }
        i++;
        j=j+4;
        document.getElementById('Q').innerHTML=tab[i][0];
        document.getElementById('1').innerHTML=tab1[j][0];
        document.getElementById('1').setAttribute("value",tab1[j][3]);
        document.getElementById('2').innerHTML=tab1[j+1][0];
          document.getElementById('2').setAttribute("value",tab1[j+1][3]);
        document.getElementById('3').innerHTML=tab1[j+2][0];
        document.getElementById('3').setAttribute("value",tab1[j+2][3]);
        document.getElementById('4').innerHTML=tab1[j+3][0];
        document.getElementById('4').setAttribute("value",tab1[j+3][3]);
      }
    }
    </script>
    <style>
p {
  text-align: center;
  font-size: 60px;
  margin-top: 0px;
}
</style>
    <script>
// Set the date we're counting down to
var countDownDate = new Date().getTime()+3600000;

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds

    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML =   hours + "h "
    + minutes + "m " + seconds + "s ";

    // If the count down is over, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>
  </head>
  <body>
    <div class='container'>
     <p id="demo"></p>
   </div>
   <div class='container'>
     <div style='border: 2px solid black;'>
     <div class='jumbotron' style='width:90%'>
       <form action='Quiz.php' method='Post'>
       <h3 style='text-align:center;color:midnightblack;margin-top:2%;padding-right:5%;' id='Q' >:</h3>
       <table style=''>

      <tr><td> <input type='radio' name='a' id='a'></td><td id='1'name='1'></td></tr>
      <tr><td> <input type='radio' name='a' id='b'></td><td id='2'name='2'></td></tr>
      <tr><td> <input type='radio' name='a' id='c'></td><td id='3'name='3'></td></tr>
      <tr><td> <input type='radio' name='a' id='d'></td><td id='4'name='4'></td></tr>

     </table>
     <div style='margin-top:5%;text-align:center;'>
       <button class='btn btn-danger' type='button' id='Backward'>Backward</button>
       <button class='btn btn-success' type='button' onclick='next()' id='Next'>Next</button>
     </div>
     <span id='A'></span>
   </form>
     </div>
   </div>
 </div>

  </body>
</html>
