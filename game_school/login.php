<?php 
require_once "head.php"; // agar aapka head.php styling aur CSS include karta hai

$s = "mysql:host=localhost;port=3308;dbname=game";
$u = "root";
$p = "";
$conn = new PDO($s, $u, $p);

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = $conn->prepare("SELECT * FROM registration WHERE email = ?");
    $sql->execute([$email]);
    $login = $sql->fetch();

    if ($login && $password === $login['password']) { // agar hashed password nahi use kar rahe ho to
        $_SESSION['login'] = [
            'id' => $login['id'],
            'name' => $login['name'],
            'email' => $login['email']
        ];
        header("Location: mainpage.php"); // login ke baad redirect mainpage.php par
        exit;
    } else {
        $_SESSION['error'] = "Invalid login credentials.";
    }
}
?>

<section class="section coming-soon" data-section="section3">
  <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="col-md-6">
      <div class="right-content text-center">
        <?php if (!empty($_SESSION['error'])): ?>
          <div class="alert alert-danger">
            <?php 
              echo $_SESSION['error']; 
              unset($_SESSION['error']);
            ?>
          </div>
        <?php endif; ?>

        <form id="contact" action="" method="post">
          <div class="row">
            <div class="col-md-12">
              <fieldset>
                <input name="email" type="email" class="form-control" placeholder="Your Email" required="">
              </fieldset>
            </div>
            <div class="col-md-12">
              <fieldset>
                <input name="password" type="password" class="form-control" placeholder="Password" required="">
              </fieldset>
            </div>
            <div class="col-md-12 mt-3">
              <fieldset>
                <button type="submit" class="button" name="login">Login</button>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php require_once "footer.php"; ?>
