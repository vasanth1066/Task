<?php
extract($_POST);
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$connect = mysqli_connect("localhost", "root", "", "test");
$sql = "SELECT * FROM users WHERE Email = '$Email' ";
$result = mysqli_query($connect, $sql);
if ($result) {
  $tourresult = $result->fetch_array()[2] ?? '';
  echo $tourresult;
  if ($tourresult === $Password && $Password != "" && $Email != "") {

    echo " data | login success";
    header('Location:http://localhost/Task/profile.html');
  } else {
    echo " data | username/password wrong";
  }
} else {
  echo " data | Somthing Wrong";
}
?>