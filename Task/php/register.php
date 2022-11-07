<?php
 header('Access-Control-Allow-Origin: *');
 header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
extract($_POST);
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
        print_r($_POST);
$connect=mysqli_connect("localhost","root","","test");
$check="SELECT * FROM users WHERE Email = '$Email' ";
$res=mysqli_query($connect,$check);
if($res){
  $tourresult = $res->fetch_array()[1] ?? '';
  if($tourresult){
    echo" data | Eamil already Exists";
  }else{
    if($Name!='' && $Email!='' && $Password!=''){
      $sql="INSERT INTO users(Name,Email,Password) values('$Name','$Email','$Password')";
      $result=mysqli_query($connect,$sql);
      echo" data | User Data Added Succesfully";

  }else{
      echo " data | Cannot add empty values";
  } 
  }
}else{
  echo" data | Somthin Wrong";
}
?>