<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM data");
?>
<!DOCTYPE html>
<html>
 <head>
     
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <title> Retrive data</title>
 </head>
<body style="overflow:scroll">

<h4 style="text-align :center">employee information</h4>
    <div class="container table-bordered scroll ">
<?php
if (mysqli_num_rows($result) > 0) {
?>

  <table class="table">
  <tr class="alert">
 
  <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><a href="http://localhost/web/update.php?id=6">Update</a></td>
    <td><a href="http://localhost/web/create.php">Add New User</a></td>

  </tr>
  <tr class="danger">
      <td>id</td>
    <td>First Name</td>
    <td>Last Name</td>
    <td>gender</td>
    <td>Email </td>
    <td>Action</td>
    <td></td>


  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr class="table-striped info ">
<td><?php echo $row["id"]; ?></td>

    <td><?php echo $row["firstname"]; ?></td>
    <td><?php echo $row["lastname"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
<!-- for update button code -->
<td><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>

    <td><a href="update.php?id=<?php echo $row["id"] ?>">Update</a></td>  
  </tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
</div>
 </body>
</html