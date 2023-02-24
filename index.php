<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

<center>
    <br><br><br><br><br>
    <h1>Login </h1>
    <div>
<form method="post" >
    <div style="display:flex; flex-direction:column;width:250px;padding:20px; ">
    <input  type="text" name="name" placeholder="Enter Full-name" >
<input style="margin-top:20px;" type="email" name="email" placeholder="Enter Email" >
<br>
<input  type="text" name="password" placeholder="Enter Password" >


<button style="margin-top:20px;" class="btn btn-primary" type="submit" name="btn" >Submit</button>
</div>






</form>

</center>


<?php


$con = mysqli_connect("localhost","root","","hello smarty");
if( isset($_POST["btn"])){
  mysqli_query($con,"insert into workers(name,email,password) values('".$_POST["name"]."','".$_POST["email"]."','".$_POST["password"]."')");
  echo "<script>alert('submitted')</script>";
}





?>

</body>
</html>
