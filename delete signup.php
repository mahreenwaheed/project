
<?php



$conn = mysqli_connect('localhost', 'root' , '' , 'form');


if(isset($_POST['create'])){

 
$sql = "DELETE FROM `sign-up` WHERE 3";

    $result = mysqli_query($conn, $sql);

    if($result){
 echo "deleted successfully";
    }else{
        echo "deleted  not successfully";
    }
}
?>