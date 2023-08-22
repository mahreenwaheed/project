<?php
$conn = mysqli_connect('localhost', 'root', '' , 'form');

if(isset($_POST['create'])){
    
    $id = $_POST['id'];
    // $name = $_POST['name'];
    // $email = $_POST['email'];
    // $phone = $_POST['phone'];
    // $password = $_POST['password'];
    // $Gender = $_POST['Gender'];
    
    
  
    // $sql = "UPDATE form
    // SET name = 'mahi', password = 'wow'
    // WHERE id = 2";

$sql = "UPDATE `sign-up` SET name = 'mahreen',password = 'like' WHERE id = 3";
    $result = mysqli_query($conn, $sql);
    
    if($result){
     echo "updated successsfully";
    }else{
        echo "updated not  successsfully"; 
    }
    }
    ?>