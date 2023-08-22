<?php


$conn = mysqli_connect('localhost', 'root' , '' , 'form');


if(isset($_POST['create'])){

    
   
 
    $sql = "UPDATE login
SET email = 'mahreen12345@gmail.com', password = 'hi'
WHERE id = 1";



    $result = mysqli_query($conn, $sql);

    if($result){
 echo "updated successfully";
    }else{
        echo "updated  not successfully";
    }
}


?>