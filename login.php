
<?php


$conn = mysqli_connect('localhost', 'root', '' , 'form');

// insert data
if(isset($_POST['create'])){
    
$id = $_POST['id'];
$email = $_POST['email'];
$password = $_POST['password'];



$sql = "INSERT INTO `login`(`id`,  `email`, `password`) VALUES ('$id','$email','$password')";
$result = mysqli_query($conn, $sql);

if($result){
 echo "inserted successsfully";
}else{
    echo "inserted not  successsfully"; 
}
}



 
 






// // update date


// if(isset($_POST['create'])){
      
//     $Email = $_POST['Email'];
//     $password = $_POST['password'];
   
// }


// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "project";


 
// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
 


//    $sql = "UPDATE `students` SET `password`='mah' WHERE password = 'lahore'";

// // //  $sql = "INSERT INTO `students`(`email`, `password`) VALUES ('@mah786@gmail.com','mah')";
 
// if ($conn->query($sql) === TRUE) {
//     echo "record updated successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }


// delete date_add



// if(isset($_POST['create'])){
      
//     $Email = $_POST['Email'];
//     $password = $_POST['password'];
   
// }


// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "project";



// // // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
 

// $sql = "DELETE  FROM students WHERE 1" ;

// if ($conn->query($sql) === TRUE) {
//     echo "record deleted successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
?>