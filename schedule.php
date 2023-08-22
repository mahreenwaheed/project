<?php


$conn =mysqli_connect('localhost','root','','form');

if($_POST['create']){ 

  $ID = $_POST['ID'];
  $Day = $_POST['Day'];
  $Time_start = $_POST['Time_start'];
  $Time_end = $_POST['Time_end'];
  $Semester = $_POST['Semester'];
  $courseyourselection = $_POST['course_your_selection'];
  $Subject = $_POST['subject'];
  $Teacher = $_POST['Teacher'];
  $Room = $_POST['Room'];
  
  

$sql = "INSERT INTO `schedule`(`ID` ,`Day`, `Time_start`, `Time_end`, `Semester`, `course_your_selection`, `subject`, `Teacher`, `Room`) VALUES ('$ID', '$Day','$Time_start','$Time_end','$Semester','$courseyourselection','$Subject','$Teacher','$Room')";
  $result = mysqli_query($conn, $sql);
  
  if($result){
   echo "inserted successsfully";
  }else{
      echo "inserted not  successsfully"; 
  }
}

// if(isset($_POST['create'])){  
//  if(!empty($_POST['Day'])&&!empty($_POST['Time_start'])&&!empty($_POST['Time_end'])&&!empty($_POST['Semester'])&&!empty($_POST['course_your_selection'])&&!empty($_POST['Subject'])&&!empty($_POST['Teacher'])&&!empty($_POST['Room'])) {  
//     $Day = $_POST['Day']; 
//      $Time_start = $_POST['Time_start'];
//     $Time_end = $_POST['Time_end'];
//     $Semester = $_POST['Semester'];
//     $courseyourselection = $_POST['course_your_selection'];
//     $Subject = $_POST['subject'];
//     $Teacher = $_POST['Teacher'];
//     $Room = $_POST['Room']; 



// // mysql select query
// $query = "INSERT INTO `schedule`(`Day`, `Time_start`, `Time_end`, `Semester`, `course_your_selection`, `subject`, `Teacher`, `Room`) VALUES ('$Day','$Time_start','$Time_end','$Semester','$courseyourselection','$Subject','$Teacher','$Room')";

// // for method 1

// // $result1 = mysqli_query($connect, $query);

// // for method 2

// $result2 = mysqli_query($connect, $query);

//  if($result2){
//   echo "inserted successsfully";
//  }else{
//      echo "inserted not  successsfully"; 
//  }

// $options = "";

// while($row2 = mysqli_fetch_array($result2))
// {
//     $options = $options."<option>$row2[1]</option>";
// }
//   }
// }
                









// <!-- $conn = mysqli_connect('localhost', 'root' , '' , 'project');
  
// if(isset($_POST['create'])){  
//   if(!empty($_POST['Day'])&&!empty($_POST['Time_start'])&&!empty($_POST['Time_end'])&&!empty($_POST['Semester'])&&!empty($_POST['course_your_selection'])&&!empty($_POST['Subject'])&&!empty($_POST['Teacher'])&&!empty($_POST['Room'])) {  
//     $Day = $_POST['Day']; 
//      $Time_start = $_POST['Time_start'];
//     $Time_end = $_POST['Time_end'];
//     $Semester = $_POST['Semester'];
//     $courseyourselection = $_POST['course_your_selection'];
//     $Subject = $_POST['subject'];
//     $Teacher = $_POST['Teacher'];
//     $Room = $_POST['Room']; 

    
//  $sql = "INSERT INTO `schedule`(`Day`, `Time_start`, `Time_end`, `Semester`, `course_your_selection`, `subject`, `Teacher`, `Room`) VALUES ('$Day','$Time_start','$Time_end','$Semester','$courseyourselection','$Subject','$Teacher','$Room')";
// //  $sql = "DELETE * FROM schedule";
//  $result = mysqli_query($conn, $sql);
 
//  if($result){
//   echo "inserted successsfully";
//  }else{
//      echo "inserted not  successsfully"; 
//  }
// }
// }
// }
// // } -->
 //     echo 'You have chosen: ' . $selected;  
// } else {  
//     echo 'Please select the value.';  
// }  
// }   -->

//  if($_POST['create']){ 

//     $Day = $_POST['Day'];
//     $Time_start = $_POST['Time_start'];
//     $Time_end = $_POST['Time_end'];
//     $Semester = $_POST['Semester'];
//     $courseyourselection = $_POST['course_your_selection'];
//     $Subject = $_POST['subject'];
//     $Teacher = $_POST['Teacher'];
//     $Room = $_POST['Room'];
    
    

//   $sql = "INSERT INTO `schedule`(`Day`, `Time_start`, `Time_end`, `Semester`, `course_your_selection`, `subject`, `Teacher`, `Room`) VALUES ('$Day','$Time_start','$Time_end','$Semester','$courseyourselection','$Subject','$Teacher','$Room')";
//     $result = mysqli_query($conn, $sql);
    
//     if($result){
//      echo "inserted successsfully";
//     }else{
//         echo "inserted not  successsfully"; 
//     }
//  }












 


?>

