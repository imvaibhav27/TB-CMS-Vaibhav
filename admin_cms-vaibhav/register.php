<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Registration</title>
  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<?php include'include/nav_user.php';?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow-lg rounded-4">
        <div class="card-header bg-primary text-white text-center">
          <h4 class="mb-0">User Registration</h4>
        </div>
        <div class="card-body">
          <form onsubmit="return validation()" action="register.php" method="POST">
            <div class="mb-3">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" name="name" class="form-control" id="username" >
              <p id="error"></p>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="" name="email" class="form-control" id="email" >
              <p id="err2"></p>
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" >
            </div>

            <div class="mb-3">
              <label for="confirm_password" class="form-label">Confirm Password</label>
              <input type="password" name="confirm_password" class="form-control" id="confirm_password" >
            </div>

            <div class="d-grid">
              <button type="submit" onclick="" id="register" name="register" class="btn btn-success">Register</button>
            </div>
            <?php if(isset($_GET['error'])){ ?>
                    <div class="error-message">
                        <i class="fas fa-exclamation-circle me-2"></i>Invalid username or password
                    </div>
                    <?php } ?>
          </form>
        </div>
        <div class="card-footer text-center">
          <small>Already have an account? <a href="login.php">Login here</a></small>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- footer -->
<?php include'include/foot.php';?>
<!-- Bootstrap JS Bundle CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


<script type="text/javascript">

//       const usernameRegex = /^[a-zA-Z0-9_]+$/;
// if (!usernameRegex.test(username)) {
//   alert("Username can only contain letters, numbers, and underscores.");
// }
function validation() {
  const usernameInput = document.getElementById('username');
  const emailInput = document.getElementById('email');
  const passwordInput = document.getElementById('password');
  const confirm_passwordInput = document.getElementById('confirm_password');
  const registerInput = document.getElementById('register');
  
  
  //  to trim white space 
     const username = usernameInput.value.trim();
     const email = emailInput.value.trim();
     const password = passwordInput.value.trim();
     const confirm_password = confirm_passwordInput.value.trim();

    //  if you enter empty username and password
    if (username === '') {
        document.getElementById("error").innerHTML="Please enter your name";
        return false;
    }
    
    if (email === '') {
        alert('Please enter your password');
        emailInput.focus();
        return false;
    }

    if (password === '') {
        alert('Please enter your password');
        passwordInput.focus();
        return false;
    }
    
    if (confirm_password === '') {
        alert('Please enter your confirm password');
        confirm_passwordInput.focus();
        return false;
    }
    if (register === '') {
        alert('wellcome ');
        registerInput.focus();
        return false;
    }

    else if(!mailValidation(email)){
        document.getElementById("err2").innerHTML="invalid email";
        alert("invalid Email");
        return false;
  }
  else{
        return true;
    }
  }


  // new 

function mailValidation(email){
    return /^[a-zA-z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email);
}
</script>
</body>
</html>