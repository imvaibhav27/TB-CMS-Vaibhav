<!-- index page -->
<?php
session_start();
if(isset($_SESSION['username']))
{
    header("Location:admin/dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login Page </title>

     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

   <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

     <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- new  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>

<?php include'include/nav_user.php';?>



<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <h1 class="text-center"> User login page</h1>
        </div>
        <div class="col-sm-6">
        <form action="login.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <button  onclick="v" type="submit" class="btn btn-primary">Submit</button>
</form></div>

    </div>
</div>

<div class="container bg-warning">

<?php

if(isset($_GET['error'])){

echo"<p> invalid id and password</p>";
} ?>



</div>
</form>
<script type="text/javascript">
  function validationlogin()
  {
    const username =document.form["loginform"]["username"].value;
    const password =document.form["loginform"]["password"].value;
    
    //check it is not empty
    
    if(username===""){
      alert("username is empty");
      return false;
    }
    if(password===""){
      alert("password is empty");
      return false;
    }
    return true;
  }
</script>
  <?php include'include/foot.php';?>
</body>
</html>