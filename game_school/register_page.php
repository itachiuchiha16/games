<?php require_once "head.php"; ?>
<?php
$s = "mysql:host=localhost;port=3308;dbname=game";
$u = "root";
$p = "";
$conn = new PDO($s, $u, $p);
?>

<?php


if(isset($_POST['submit']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password=$_POST['password'];

  $sql = $conn->prepare("INSERT INTO registration (name,email,phone,password) values (?,?,?,?)");
  $sql->execute([$name,$email,$phone,$password]);

     header("Location: login.php");
        exit;
}


?>

  <section class="section coming-soon" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-xs-12">
          <div class="continer centerIt">
            <div>
              <h4>Take <em>any online course</em> and win ₹1051 for your next registration</h4>
              <div class="counter">

                <div class="days">
                  <div class="value"></div>
                  <span>Days</span>
                </div>

                <div class="hours">
                  <div class="value">00</div>
                  <span>Hours</span>
                </div>

                <div class="minutes">
                  <div class="value">00</div>
                  <span>Minutes</span>
                </div>

                <div class="seconds">
                  <div class="value">00</div>
                  <span>Seconds</span>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="right-content">
            <div class="top-content">
              <h6>Register your free account and <em>get immediate</em> access to online courses</h6>
            </div>
            <form id="contact" action="" method="post">
              <div class="row">
                <div class="col-md-12">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="phone" type="text" class="form-control" id="phone-number" placeholder="Your Phone Number" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
              <fieldset>
                <input name="password" type="password" class="form-control" id="password" placeholder="Create a Password" required="">
               </fieldset>
               </div>

                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="button" name="submit">Get it now</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  


  <!-- ***** Main Banner Area End ***** -->
<?php require_once "footer.php"; ?>