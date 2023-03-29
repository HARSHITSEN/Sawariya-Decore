<?php
$conn = mysqli_connect("localhost","root","","SawariyaDecore");
$name = $_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['phone'];
$enquiry=$_POST['enquiry'];
$query = "insert into enquiry values(DEFAULT,'$name','$email','$mobile','$enquiry');";
echo $query;
$result = mysqli_query($conn,$query);
if($result){
    echo "Data Successfully Inserted";
}
else{
    echo "Data not inserted";
}
?>