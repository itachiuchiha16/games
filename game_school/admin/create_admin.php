<?php
if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];

$s = "mysql:host=localhost;port=3308;dbname=game";
$u="root";
$p= "";
$conn = new pdo($s,$u,$p);

$sql = $conn->prepare("INSERT INTO admin (username , password) VALUES (?,?)");
$sql->execute([$username,$password]);
exit;


}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    * {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background: linear-gradient(135deg, #d0e6a5, #86c232);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .form-container {
      background-color: #ffffffd9;
      padding: 40px 30px;
      border-radius: 12px;
      box-shadow: 0 4px 25px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 400px;
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 25px;
      font-weight: bold;
      color: #4a752c;
      text-transform: capitalize;
    }

    .form-control:focus {
      box-shadow: 0 0 0 0.2rem rgba(118, 190, 47, 0.3);
      border-color: #86c232;
    }

    .btn-primary {
      background-color: #86c232;
      border: none;
    }

    .btn-primary:hover {
      background-color: #5a901e;
    }
  </style>
</head>
<body>

  <div class="form-container">
    <h2>create Admin</h2>
    <form action="" method="post">
      <div class="mb-3">
        <label for="exampleInputUsername" class="form-label">Username</label>
        <input type="text" name="username" class="form-control" id="exampleInputUsername" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Remember me</label>
      </div>
      <button type="submit" name="submit" class="btn btn-primary w-100">Submit</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
