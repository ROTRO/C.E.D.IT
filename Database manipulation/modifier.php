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
<form action='Modif.php' method="POST">
    <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" class="form-control" name="id" id="id" >
                    
            </div>
            <div class="form-group">
                    <label for="First">First Name</label>
                    <input type="text" class="form-control" name="First" id="First" >
                    
            </div>
            <div class="form-group">
                    <label for="Last">Last Name</label>
                    <input type="text" class="form-control" name="Last" id="Last">
                    
            </div>
            <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email"  id="email" >
                    
            </div>
            <div class="form-group">
                    <label for="Phone">Phone</label>
                    <input type="text" class="form-control"  name="Phone" id="Phone">
                    
            </div>
           
            <button type="reset" class="btn btn-outline-dark">Empty Fields</button>
            <button type="Submit" class="btn btn-outline-success" >Submit</button>
            
    </form>
    </div>
</body>
</html>