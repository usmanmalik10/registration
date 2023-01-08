<?php


?>


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
        <p>Please fill all the details carefully. This form can change your lige.</p>
        <a href="/display.php">Check Form</a> </<br>

      </div>
      <div class="col-md-9 register-right">
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <h3 class="register-heading">Apply for Web Developer Post</h3>
            <!-- Form start from here -->
            <form action="" method="POST">
              <div class="row register-form">

                <?php
                include 'connection.php';
                // $name = $_GET['name'];

                $id = $_GET['id'];

                $showquery = "select * from jobregistration where id={$id}";

                $showdata = mysqli_query($con, $showquery);

                $arrdata = mysqli_fetch_array($showdata);

                if (isset($_POST['submit'])) {

                  $idupdate = $_GET['id'];

                  $name = $_POST['user'];
                  $degree = $_POST['degree'];
                  $mobile = $_POST['mobile'];
                  $email = $_POST['email'];
                  $refer = $_POST['refer'];
                  $jobprofile = $_POST['jobprofile'];
                  $file = $_POST['photo'];

                  // print_r($file);
                  // $filename = $file['name'];
                  // $filepath = $file['tmp_name'];
                  // $fileerror = $file['error'];


                  // if ($fileerror == 0) {
                  //   $destfile = 'upload/' . $filename;
                  //   // echo "$destfile";
                  //   move_uploaded_file($filepath, $destfile);


                  // $insertquery = "INSERT INTO `jobregistration`(`name`, `degree`, `mobile`, `email`, `refer`, `jobpost`) VALUES ('$name','$degree','$mobile','$email','$refer','$jobprofile')";



                  $query = " update jobregistration set id=$id, name='$name', degree='$degree', mobile= '$mobile', email='$email', refer='$refer', jobpost='$jobprofile', photo='$file' where id=${idupdate}";

                  $res = mysqli_query($con, $query);

                  if ($res) {
                ?>
                    <script>
                      alert("data updated properly");
                    </script>
                  <?php
                  } else {
                  ?>
                    <script>
                      alert("data not updated ");
                    </script>
                <?php
                  }
                }
                // }
                ?>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="enter your name *" name="user" value="<?php echo $arrdata['name']; ?>" required />
                  </div>
                  <div class="form-group">
                    <input type="tel" class="form-control" placeholder="enter your number *" name="mobile" value="<?php echo $arrdata['mobile']; ?>" required />
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="enter any references *" name="refer" value="<?php echo $arrdata['refer']; ?>" required />
                  </div>
                  <div class="form-group">
                    <input type="file" class="form-control" name="photo" value="<?php echo $arrdata['photo']; ?>" required />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="enter your qualification *" name="degree" value="<?php echo $arrdata['degree']; ?>" required />
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="enter your email *" name="email" value="<?php echo $arrdata['email']; ?>" required />
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="WebDeveloper Post *" name="jobprofile" value="Web Developer" required />
                  </div>

                  <input type="submit" class="btnRegister" name=" submit" value="Update" />
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