<?php
session_start();
if(isset($_SESSION['username']))
{
    header("Location:admin/dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<style>
.container{
  display: flex;
  justify-content: center;
  align-items: center;
}
.form {
  display: flex;
  flex-direction: column;
  gap: 10px;
  max-width: 350px;
  padding: 20px;
  border-radius: 20px;
  position: relative;
  background-color: #1a1a1a;
  color: #fff;
  border: 1px solid #333;
}
.title {
  font-size: 28px;
  font-weight: 600;
  letter-spacing: -1px;
  position: relative;
  display: flex;
  align-items: center;
  padding-left: 30px;
  color: #00bfff;
}
.title::before {
  width: 18px;
  height: 18px;
}
.title::after {
  width: 18px;
  height: 18px;
  animation: pulse 1s linear infinite;
}
.title::before,
.title::after {
  position: absolute;
  content: "";
  height: 16px;
  width: 16px;
  border-radius: 50%;
  left: 0px;
  background-color: #00bfff;
}
.message, 
.signin {
  font-size: 14.5px;
  color: rgba(255, 255, 255, 0.7);
}
.signin {
  text-align: center;
}
.signin a:hover {
  text-decoration: underline royalblue;
}
.signin a {
  color: #00bfff;
}
.flex {
  display: flex;
  width: 100%;
  gap: 6px;
}
.form label {
  position: relative;
}
.form label .input {
  background-color: #333;
  color: #fff;
  width: 100%;
  padding: 20px 05px 05px 10px;
  outline: 0;
  border: 1px solid rgba(105, 105, 105, 0.397);
  border-radius: 10px;
}
.form label .input + span {
  color: rgba(255, 255, 255, 0.5);
  position: absolute;
  left: 10px;
  top: 0px;
  font-size: 0.9em;
  cursor: text;
  transition: 0.3s ease;
}
.form label .input:placeholder-shown + span {
  top: 12.5px;
  font-size: 0.9em;
}
.form label .input:focus + span,
.form label .input:valid + span {
  color: #00bfff;
  top: 0px;
  font-size: 0.7em;
  font-weight: 600;
}
.input {
  font-size: medium;
}
.submit {
  border: none;
  outline: none;
  padding: 10px;
  border-radius: 10px;
  color: #fff;
  font-size: 16px;
  transform: .3s ease;
  background-color: #00bfff;
}
.submit:hover {
  background-color: #00bfff96;
}
@keyframes pulse {
  from {
    transform: scale(0.9);
    opacity: 1;
  }

  to {
    transform: scale(1.8);
    opacity: 0;
  }
}

</style>
<body>
<?php include'../include/admin_nav.php';?>
<div class="container">
<form class="form" onsubmit="return validationLogin()">
    <p class="title">Register </p>
    <p class="message">Signup now and get full access to our app. </p>
        <div class="flex">
        <label>
            <input class="input" id="" type="text" placeholder="" required="">
            <span>Firstname</span>
        </label>

        <label>
            <input class="input" type="text" placeholder="" required="">
            <span>Lastname</span>
        </label>
    </div>  
            
    <label>
        <input class="input" type="email" placeholder="" required="">
        <span>Email</span>
    </label> 
        
    <label>
        <input class="input" type="password" placeholder="" required="">
        <span>Password</span>
    </label>
    <label>
        <input class="input" type="password" placeholder="" required="">
        <span>Confirm password</span>
    </label>
    <button class="submit">Submit</button>
    <p class="signin">Already have an acount ? <a href="#">Signin</a> </p>
</form>
</div>
<!-- footer -->
<?php include'../include/foot.php';?>

<!-- Java script -->
<script type="text/javascript">
        const usernameRegex = /^[a-zA-Z0-9_]+$/;
if (!usernameRegex.test(username)) {
  alert("Username can only contain letters, numbers, and underscores.");
}
function validationLogin() {
//  to trim white space 
    const usernameInput = document.getElementById('username');
    const passwordInput = document.getElementById('password');
    
  
    const username = usernameInput.value.trim();
    const password = passwordInput.value.trim();

//  if you enter empty username and password
    if (username === '') {
        alert('Please enter your username');
        usernameInput.focus();
        return false;
    }

    if (password === '') {
        alert('Please enter your password');
        passwordInput.focus();
        return false;
    }

    return true;
}
</script>
</body>
</html>
