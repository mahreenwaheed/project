<?php


$conn = mysqli_connect('localhost', 'root' , '' , 'form');


if(isset($_POST['create'])){

    
   
//  $Day = $_POST['$Day'];
//  $Semester =$_POST['$Semester'];

    $sql = "UPDATE schedule
SET Day = 'wednesday', Semester = '6', Time_Start = '12:00'
WHERE id = 1";



    $result = mysqli_query($conn, $sql);

    if($result){
 echo "updated successfully";
    }else{
        echo "updated  not successfully";
    }
}

?>