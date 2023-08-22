<?php

$conn = mysqli_connect('localhost', 'root', '' , 'form');

// insert data
if(isset($_POST['create'])){
    
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$Gender = $_POST['Gender'];


$sql = "INSERT INTO `sign-up`(`id`, `name`, `email`, `phone`, `password`, `Gender`) VALUES ('$id','$name','$email','$phone','$password','$Gender')";
$result = mysqli_query($conn, $sql);

if($result){
 echo "inserted successsfully";
}else{
    echo "inserted not  successsfully"; 
}
}








?>