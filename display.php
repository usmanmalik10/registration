<!DOCTYPE html>
<html lang="en">

<head>
  <title>Display</title>

  <?php include 'links.php'; ?>
  <!-- <?php include 'css/style.css'; ?> -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <div class="main-div">
    <h1>List of candidates for web developer job</h1>
    <div class="center-div">
      <div class="table-responsive">
        <table>
          <thead>
            <tr>
              <th>id</th>
              <th>name</th>
              <th>degree</th>
              <th>mobile</th>
              <th>email</th>
              <th>refer</th>
              <th>post</th>
              <th>Images</th>
              <th colspan="2">operation</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include 'connection.php';
            $selectquery = " select * from jobregistration ";
            $query = mysqli_query($con, $selectquery);
            $nums = mysqli_num_rows($query);
            while ($res = mysqli_fetch_array($query)) {

              // echo $res['id'] . "<br>";
            ?>


              <tr>
                <td><?php echo $res['id']; ?></td>
                <td><?php echo $res['name']; ?></td>
                <td><?php echo $res['degree']; ?></td>
                <td><?php echo $res['mobile']; ?></td>
                <td><span class="email-style"><?php echo $res['email']; ?></span></td>
                <td><?php echo $res['refer']; ?></td>
                <td><?php echo $res['jobpost']; ?></td>
                <td> <img src=" <?php echo $res['photo']; ?>" alt="Candidate images" width="100" height="100"> </td>
                <td>
                  <a href="update.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="Update">
                    <i class="fa fa-edit" aria-hidden="true"></i>
                  </a>
                </td>
                <td> <a href="delete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="Delete">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                  </a> </td>

              </tr>

            <?php

            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>

</html>

<script>
  $(document).ready(function() {
    $('[data-toggle=" tooltip"]').tooltip();
  });
</script>