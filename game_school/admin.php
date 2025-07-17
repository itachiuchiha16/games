<?php
session_start();

// Check if user is logged in and is admin
if (!isset($_SESSION['login']) || $_SESSION['login']['email'] !== 'admin@example.com') {
    // Redirect non-admin users to homepage or login
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin Panel - Game School</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/fontawesome.css" />
  <link rel="stylesheet" href="assets/css/templatemo-grad-school.css" />
</head>

<body>

  <header class="main-header clearfix" role="header" style="background-color:#004080; padding: 15px;">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="logo text-white" style="font-size: 24px; font-weight: bold;">
        <em>game</em> School - Admin Panel
      </div>
      <nav>
        <ul class="nav">
          <li class="nav-item"><a href="mainpage.php" class="nav-link text-white">Home</a></li>
          <li class="nav-item"><a href="logout.php" class="nav-link text-white">Logout</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="container mt-5">
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['login']['name']); ?></h2>
    <p>This is your admin panel. You can manage the website here.</p>

    <hr>

    <h4>Admin Actions</h4>
    <ul>
      <li><a href="manage_users.php">Manage Users</a></li>
      <li><a href="manage_courses.php">Manage Courses</a></li>
      <li><a href="site_settings.php">Site Settings</a></li>
      <!-- Add more admin links as needed -->
    </ul>
  </main>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
