<?php
$connect=mysqli_connect("localhost","root","","users");
if (!$connect){
    die('connection error'.mysqli_connect_error());
}else{
    echo 'Connected Succesfully';
}
?>