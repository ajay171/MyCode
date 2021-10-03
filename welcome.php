<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
    <title>Document</title>
</head>
<body >
     
<form    action="create.php" method="POST" >
        <div class="form-group">
            <label for="firstname" >Firstname:</label>
            <input type="text" name="firstname" class="form-control"> </div>

            <label for="lastname" >Lastname:</label>
            <input type="text" name="lastname" class="form-control"> </div>   

            <label for="gender" >Gender:</label>
            <input type="text" name="gender" class="form-control"> </div>

            <label for="email" >Email:</label>
            <input type="email" name="email" class="form-control"> 
        </div>

        
            <input type="submit" name="Save" class="btn btn-default"> </div>

    </form> 
    </body>
</html>