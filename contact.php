<?php
$conn = mysqli_connect("localhost","root","","SawariyaDecore");
$name = $_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['contact'];
$message=$_POST['message'];
$query = "insert into contact values(DEFAULT,'$name','$email','$mobile','$message');";

$result = mysqli_query($conn,$query);
if($result){
    echo "Data Successfully Inserted";
}
else{
    echo "Data not inserted";
}
?>