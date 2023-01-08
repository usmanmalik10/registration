<?php
include 'connection.php';

if (isset($_POST['submit'])) {
  $name = $_POST['user'];
  $degree = $_POST['degree'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $refer = $_POST['refer'];
  $jobprofile = $_POST['jobprofile'];
  $file = $_FILES['photo'];

  // print_r($file);
  $filename = $file['name'];
  $filepath = $file['tmp_name'];
  $fileerror = $file['error'];

  $file_ext = explode('.', $filename);

  $file_ext_check = strtolower(end($file_ext));

  echo $file_ext_check;

  $valid_file_ext = array('png', 'jpg', 'jpeg');

  if ($fileerror == 0) {

    if (in_array($file_ext_check, $valid_file_ext)) {

      $destfile = 'upload/' . $filename;
      // echo "$destfile";
      move_uploaded_file($filepath, $destfile);

      $insertquery = "insert into jobregistration(name, degree, mobile, email, refer, jobpost, photo ) values ('$name','$degree','$mobile','$email','$refer','$jobprofile', '$destfile')";

      $query = mysqli_query($con, $insertquery);

      if ($query) {
        echo "Inserted";
      } else {
        echo "Not Inserted";
      }
      header('location: index.php');
    }
?>
    <script type="text/javascript">
      alert("Not valid Ext");
      window.location = "index.php";
    </script>
<?php
  }
} else {
  echo "No button has been clicked";
}

/*
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