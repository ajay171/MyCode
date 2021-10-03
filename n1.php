<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
</head>
<body>
    <?php 
    include_once('welcome.php');
    include_once('database.php');
if(isset($_POST['Save'])){
    
    $firstname=$_GET["firstname"];
    $lastname=$_GET["lastname"];
    $firstname=$_GET["gender"];
    $firstname=$_GET["email"];
    

    $sql="INSERT INTO data ( firstname, lastname, gender , email)
     VALUES ('$firstname','$lastname','$gender','$email',)" ;
    
    
    if(mysqli_query($conn,$sql)){
        echo"record created successfully";
    }else{
        echo"error" .$sql ."" .mysqli_error($conn);
    }
    mysqli_close($conn);
}

    ?>
</body>
</html>