<?php
if ((isset($_POST['search']))) {
  $email = $_POST['email'];
  $servername = "localhost";
  $username = "root";
  $userpassword = "";
  $databaseuser = "login";
  $connection = mysqli_connect($servername, $username, $userpassword, $databaseuser);
  if (!$connection) {
    print("<script> alert('Unsccessfully')</script>" . mysqli_connect_error($connection));
  } else {
    $sql = "select email from admin where email='$email'";
    $result = mysqli_query($connection, $sql) or die("<script>alert('failed');</script>");
    if (mysqli_num_rows($result) > 0) {
      print("<script> window.location.href='https://localhost/web/website%20project/change.php';</script>");
    } else {  
      print("<script>alert('Not Found !');</script>");
      print("<script> window.location.href='https://localhost/web/website%20project/change.php';</script>");
    }
  }
  mysqli_close($connection);
}
?>