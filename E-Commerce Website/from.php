<?php
$n=$_POST['firstname'];
$c=$_POST['secondname'];
$d=$_POST['pass'];
$con=mysqli_connect("localhost","root","","ecommerce1");
$sql="INSERT INTO signin(first_name,second_name,password)values('$n','$c','$d')";

$r=mysqli_query($con,$sql);

if($r){
    echo"student details added sucess";
}
else{
    echo"not added";
}

?>