<!DOCTYPE html>
<html lang="en">

<head>
  <title>Crud in PHP</title>
  <?php include 'links.php' ?>
  <!-- <?php include 'css/style.css' ?> -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container register">
    <div class="row">
      <div class="col-md-3 register-left">
        <img src="images/crud.jpg" alt="crud image" />
        <h3>Welcome</h3>
        <p>Please fill all the details carefully. This form can change your life.</p>
        <a href="display.php">Check Form</a> </<br>

      </div>
      <div class="col-md-9 register-right">
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <h3 class="register-heading">Apply for Web Developer Post</h3>
            <!-- Form start from here -->
            <form action="upload.php" method="POST" enctype="multipart/form-data">
              <div class="row register-form">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="enter your name *" name="user" value="" required />
                  </div>
                  <div class="form-group">
                    <input type="tel" class="form-control" placeholder="enter your number *" name="mobile" value="" required />
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="enter any references *" name="refer" value="" required />
                  </div>

                  <div class="form-group">
                    <input type="file" class="form-control" name="photo" value="" required />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="enter your qualification *" name="degree" value="" required />
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="enter your email *" name="email" value="" required />
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="WebDeveloper Post *" name="jobprofile" value="Web Developer" required />
                  </div>

                  <input type="submit" class="btnRegister" name=" submit" value="Register" />
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>


<?php
/*
include 'connection.php';

if (isset($_POST['submit'])) {
  $name = $_POST['user'];
  $degree = $_POST['degree'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $refer = $_POST['refer'];
  $jobprofile = $_POST['jobprofile'];


  $insertquery = "INSERT INTO `jobregistration`(`name`, `degree`, `mobile`, `email`, `refer`, `jobpost`) VALUES ('$name','$degree','$mobile','$email','$refer','$jobprofile')";

  $res = mysqli_query($con, $insertquery);

  if ($res) {
?>
    <script>
      alert("data inserted properly");
    </script>
  <?php
  } else {
  ?>
    <script>
      alert("data not inserted properly");
    </script>
<?php
  }
}
*/
?>