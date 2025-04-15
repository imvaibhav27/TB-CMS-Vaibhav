<?php
session_start();
// include('../databaseconnection/db.php');

// Simulate a logged-in user (Replace with actual session data)
$user_id = $_SESSION['user_id'] ?? 1; // fallback to ID 1 for demo

// Fetch user details
$user_query = "SELECT * FROM users WHERE id = $user_id";
$user_result = $conn->query($user_query);
$user = $user_result->fetch_assoc();

// Fetch user's posts (optional)
$posts_query = "SELECT * FROM posts WHERE user_id = $user_id ORDER BY created_at DESC";
$posts_result = $conn->query($posts_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title><?= $user['name'] ?> - Profile</title>
  
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
    .profile-img {
      width: 130px;
      height: 130px;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid #fff;
      margin-top: -65px;
    }
  </style>
</head>
<body class="bg-light">
<?php include'../include/admin_nav.php';?>

<div class="container mt-5">
  <div class="card shadow-lg p-4">
    <div class="text-center">
      <img src="https://source.unsplash.com/130x130/?person" alt="Profile" class="profile-img shadow">
      <h2 class="mt-3"><?= $user['name'] ?></h2>
      <p class="text-muted"><?= $user['bio'] ?? 'No bio added yet.' ?></p>
      <a href="edit_profile.php" class="btn btn-outline-primary btn-sm">Edit Profile</a>
    </div>

    <hr>

    <div class="row mt-4">
      <div class="col-md-6">
        <p><strong>Email:</strong> <?= $user['email'] ?></p>
        <p><strong>Mobile:</strong> <?= $user['mobile'] ?? '—' ?></p>
      </div>
      <div class="col-md-6">
        <p><strong>City:</strong> <?= $user['city'] ?? '—' ?></p>
        <p><strong>State:</strong> <?= $user['state'] ?? '—' ?></p>
      </div>
    </div>

    <hr>

    <h5 class="mb-3">📝 Your Posts</h5>
    <?php if ($posts_result->num_rows > 0): ?>
      <ul class="list-group">
        <?php while ($post = $posts_result->fetch_assoc()): ?>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <div>
              <strong><?= $post['title'] ?></strong>
              <small class="d-block text-muted">Posted on <?= date('d M Y', strtotime($post['created_at'])) ?></small>
            </div>
            <a href="post.php?id=<?= $post['id'] ?>" class="btn btn-sm btn-secondary">View</a>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php else: ?>
      <p class="text-muted">You haven't posted anything yet.</p>
    <?php endif; ?>
  </div>
</div>

<!-- Footer -->
<?php include'include/foot.php';?>
</body>
</html>