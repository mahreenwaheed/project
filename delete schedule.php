<?php



$conn = mysqli_connect('localhost', 'root' , '' , 'form');


if(isset($_POST['create'])){

    $sql = "DELETE FROM  schedule WHERE id ='1'";
   
// $sql = "DELETE FROM schedule WHERE 1";



    $result = mysqli_query($conn, $sql);

    if($result){
 echo "deleted successfully";
    }else{
        echo "deleted  not successfully";
    }
}
?>