<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>About Us | Blog</title>
  
  <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <script
      src="https://kit.fontawesome.com/8ad8054466.js"
      crossorigin="anonymous"
    ></script>

  <style>
    .hero {
      background: url('https://source.unsplash.com/1600x400/?blog,nature') no-repeat center center;
      background-size: cover;
      color: black;
      padding: 100px 0;
    }
    .hero h1 {
      font-size: 3rem;
      font-weight: bold;
    }
    .section-title {
      font-size: 2rem;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
<?php include'include/nav_user.php';?>

<!-- Hero Section -->
<section class="hero text-center">
  <div class="container">
    <h1>About This Blog</h1>
    <p class="lead">Thoughts. Stories. Life unfiltered.</p>
  </div>
</section>

<!-- About Section -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="https://source.unsplash.com/600x400/?writing,blogger" alt="Blog image" class="img-fluid rounded-4 shadow" />
      </div>
      <div class="col-md-6">
        <h2 class="section-title">Who We Are</h2>
        <p>Welcome to <strong>Thoda Hain Thode Ki Jarurat Hain</strong> – a personal blog where we share stories, experiences, and thoughts that touch the heart and stir the soul.</p>
        <p>Whether it's small joys, unspoken struggles, or the magic of everyday life – our aim is to connect, inspire, and grow together.</p>
      </div>
    </div>
  </div>
</section>

<!-- Mission Section -->
<section class="py-5">
  <div class="container text-center">
    <h2 class="section-title">Our Mission</h2>
    <p class="mx-auto" style="max-width: 700px;">To spread positivity, embrace vulnerability, and remind everyone that even in the chaos, there is beauty, strength, and something worth writing about.</p>
  </div>
</section>

<!-- Author Section -->
<section class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="section-title">Meet the Author</h2>
    <img src="https://source.unsplash.com/100x100/?person,smile" alt="Author" class="rounded-circle mb-3" />
    <h5>Aatulya Tanmaya Raman</h5>
    <p class="text-muted">Blogger | Data Analyst | Unyielding Heart</p>
    <p class="mx-auto" style="max-width: 600px;">With a heart full of hope and a mind full of questions, I started this blog to document life in its rawest form. I believe our stories are bridges that bring us closer — and I'm here to build those, one post at a time.</p>
  </div>
</section>

<!-- Footer -->
<?php include'include/foot.php';?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>