<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Game School</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/fontawesome.css" />
  <link rel="stylesheet" href="assets/css/templatemo-grad-school.css" />
  <link rel="stylesheet" href="assets/css/owl.css" />
  <link rel="stylesheet" href="assets/css/lightbox.css" />
  <style>
    /* Simple dropdown style */
    .user-dropdown {
      position: relative;
      display: inline-block;
      cursor: pointer;
      color: white;
      font-weight: bold;
      padding: 8px 15px;
    }

    .user-dropdown i {
      font-size: 18px;
    }

    .user-dropdown-content {
      display: none;
      position: absolute;
      background-color: #222;
      min-width: 120px;
      right: 0;
      z-index: 1;
      border-radius: 4px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .user-dropdown-content a {
      color: white;
      padding: 10px 15px;
      text-decoration: none;
      display: block;
      font-weight: normal;
    }

    .user-dropdown-content a:hover {
      background-color: #555;
    }

    .user-dropdown:hover .user-dropdown-content {
      display: block;
    }
  </style>
</head>

<body>

<header class="main-header clearfix" role="header">
  <div class="logo">
    <a href="#"><em>game</em> School</a>
  </div>
  <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
  <nav id="menu" class="main-nav" role="navigation">
    <ul class="main-menu">
      <li><a href="mainpage.php">Home</a></li>
      <li class="has-submenu"><a href="#section2">About Us</a>
        <ul class="sub-menu">
          <li><a href="school.php">Who we are?</a></li>
          <li><a href="register_page.php">Registration</a></li>
        </ul>
      </li>
      <li><a href="course.php">Courses</a></li>
      <li><a href="#section6">Contact</a></li>

      <?php if (isset($_SESSION['login'])): ?>
        <li class="user-dropdown">
          Welcome, <?php echo htmlspecialchars($_SESSION['login']['name']); ?>
          <div class="user-dropdown-content">
            <a href="logout.php">Logout</a>
          </div>
        </li>
      <?php else: ?>
        <li class="user-dropdown">
          <i class="fa fa-user"></i>
          <div class="user-dropdown-content">
            <a href="login.php">Login</a>
            <a href="register_page.php">Register</a>
          </div>
        </li>
      <?php endif; ?>
    </ul>
  </nav>
</header>

</body>
</html>
