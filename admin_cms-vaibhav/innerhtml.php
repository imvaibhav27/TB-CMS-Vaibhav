<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>button abled</title>
</head>
<script>
    function chkinput(){
      var username = document.getElementById('username').value;
      var button = document.getElementById("button");
      if(username.trim() === ""){
        button.disabled= true;
      }
      else{
        button.disabled = false;
        button.style.backgroundColor="pink";
      }
    }
  </script>
  <style>
  </style>
<body>
  <form action="" method="post">
    <label for="">name</label>
    <input type="text" name="username" id="username" onkeyup="chkinput()">
    <button disabled type="submit" id="button" style="color:blue">click for result</button>
  </form>
  
</body>
</html>