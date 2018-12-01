<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Document</title>
    
</head>
<body>
<div class='container'>
<h2 id='Etud'>Write the students 'Id' to delete it </h2>
<form action='del.php' method="POST">
            <div class="form-group">
                    <label for="First">First Name</label>
                    <input type="text" class="form-control" name="First" id="First" >
            </div>
            
            <button type="reset" class="btn btn-outline-dark">annuler</button>
            <button type="Submit" class="btn btn-outline-success" >Delete</button>
            
    </form>
    </div>
</body>
</html>