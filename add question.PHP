<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <div class='jumbotron'>
      <h2 style='text-align:center;color:skyblue;'>Inserer Un Question</h2>
      </div>
    <div class='container'>
      <form class="forma" action="addQuestion.php" method="Post">
        <div class="form-group para">
                   <label for="Q"class="cor">Question</label>
                   <input type="text" class="form-control" id="Q" name="Q" >
           </div>
           <div class="form-group para1">
                   <label for="A1"class="cor1">Answer 1</label>
                   <input type="text" class="form-control" id="A1" name="A1">
           </div>
           <div class="form-group para1">
                   <label for="A2"class="cor1">Answer 2</label>
                   <input type="text" class="form-control" id="A2"  name="A2">
           </div>
           <div class="form-group para">
                   <label for="A3"class="cor">Answer 3</label>
                   <input type="text" class="form-control" id="A3" name="A3">
           </div>
           <div class="form-group para">
                   <label for="A4"class="cor">Answer 4</label>
                   <input type="text" class="form-control" id="A4" name="A4">
           </div>
          <div class="but">
           <button type="button" class="btn btn-danger btn-md"> Cancel</button>
          <button type="submit" class="btn btn-success btn-md" >Submit</button>
        </div>
        </form>
      </div>

  </body>
</html>
