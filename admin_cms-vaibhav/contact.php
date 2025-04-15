<!-- Contact.php -->
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
    <title>contact Page </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    
    <?php include'include/nav_user.php';?>
    <!-- Contact 5 - Bootstrap Brain Component -->
<section class="py-3 py-md-5 py-xl-8">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-10 col-lg-8">
        <h3 class="fs-5 mb-2 text-secondary text-uppercase">Contact</h3>
        <h2 class="display-5 mb-4 mb-md-5 mb-xl-8">We're always on the lookout to work with new clients. Please get in touch in one of the following ways.</h2>
      </div>
    </div>
  </div>

  <div  class="container" >
    <div class="row gy-4 gy-md-5 gy-lg-0 align-items-md-center">
      <div class="col-12 col-lg-6">
        <div class="border overflow-hidden">

          <form onsubmit="return validationContact()" action="#!" >
          <div class="mb-3">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" name="name" class="form-control" id="fullname" >
              <p id="error"></p>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="" name="email" class="form-control" id="emailcheck" >
              <p id="err2"></p>
            </div>
            <div class="mb-3">
              <label for="">phone number</label>
              <input type="text" id="contact" >
            </div>

            <div class="d-grid">
              <button type="submit" onclick="validatecontact()" id="message" name="register" class="btn btn-success">Register</button>
            </div>
            <?php if(isset($_GET['error'])){ ?>
                    <div class="error-message">
                        <i class="fas fa-exclamation-circle me-2"></i>Invalid username or password
                    </div>
                    <?php } ?>
        
</form>

        </div>
      </div>
    </div>
  </div>
</section>

  <script>

function validationContact() {
  const usernameInput = document.getElementById('fullname');
  const emailInput = document.getElementById('emailcheck');
  const registerInput = document.getElementById('message');
  const contact = document.getElementById('contact');

  
  //  to trim white space 
     const username = usernameInput.value.trim();
     const email = emailInput.value.trim();
    

    //  if you enter empty username and 
    if (username === '') {
        document.getElementById("error").innerHTML="Please enter your name";
        return false;
    }
    
    if (email === '') {
        alert('Please enter your password');
        emailInput.focus();
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
  function validatecontact()
	{
const contact = document.getElementById("contact").value.trim();

const contactRegex=/^[6-9][0-9]{9}$/;

 if(contactRegex.test(contact))
 {
 	alert("Valid Number");
 	 } 

 	 else
 	 {

 	 	alert("Enter your 10 digit mobile Number");
 	 }

	}


  // new 
function mailValidation(email){
    return /^[a-zA-z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email);
}
</script>
    <!-- footer -->
    <?php include'include/foot.php';?>
</body>
</html>
