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
    <title>blog Page </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
      body {
            background: linear-gradient(45deg, #0062cc, #1e88e5);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .card-img-top{
          height: 200px;
          width: 100%;
        }
    </style>
</head>
<body>
<?php include'include/nav_user.php';?>

<div class="container my-5">
    <div class="row">
 <!-- card-1 -->
  <div class="card">
    
    <div class="card-body">
      <h5 class="card-title">blog-1</h5>
      <img class="card-img-top" src="https://img.freepik.com/free-vector/gradient-beautiful-landscape_23-2149122377.jpg?t=st=1744349769~exp=1744353369~hmac=84499beedb9ff76b77547d65dcc039c315b9b0adca58d27f1b2391a147cd7be7&w=1380" alt="Card image cap">
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam ipsam placeat laborum eveniet nulla earum iste enim error voluptatum! Soluta temporibus commodi similique explicabo eos blanditiis incidunt accusantium optio. Incidunt.
      This content is a little bit longer Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam ipsam placeat laborum eveniet nulla earum iste enim error voluptatum! Soluta temporibus commodi similique explicabo eos blanditiis incidunt accusantium optio. Incidunt.
      </p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <!-- card-2 -->
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">blog title-2</h5>
      <img class="card-img-top" src="https://img.freepik.com/free-vector/gradient-beautiful-landscape_23-2149122377.jpg?t=st=1744349769~exp=1744353369~hmac=84499beedb9ff76b77547d65dcc039c315b9b0adca58d27f1b2391a147cd7be7&w=1380" alt="Card image cap">
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
      This content is a little bit longer Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam ipsam placeat laborum eveniet nulla earum iste enim error voluptatum! Soluta temporibus commodi similique explicabo eos blanditiis incidunt accusantium optio. Incidunt.
      </p>
      <p class="card-text"><small class="text-muted">Last updated 20 mins ago</small></p>
    </div>
  </div>
  <!-- card-3 -->
  <div class="card">
    
    <div class="card-body">
      <h5 class="card-title">blog title-3</h5>
      <img class="card-img-top" src="https://img.freepik.com/free-vector/gradient-beautiful-landscape_23-2149122377.jpg?t=st=1744349769~exp=1744353369~hmac=84499beedb9ff76b77547d65dcc039c315b9b0adca58d27f1b2391a147cd7be7&w=1380" alt="Card image cap">
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action
      This content is a little bit longer Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam ipsam placeat laborum eveniet nulla earum iste enim error voluptatum! Soluta temporibus commodi similique explicabo eos blanditiis incidunt accusantium optio. Incidunt..</p>
      <p class="card-text"><small class="text-muted">Last updated 50 mins ago</small></p>
    </div>
  </div>
    </div>
</div>      
<?php include'include/foot.php';?>
</body>
</html>