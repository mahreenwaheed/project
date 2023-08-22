<?php
$conn =mysqli_connect('localhost','root','','project');

if($_POST['create']){ 


  $Day = $_POST['Day'];
  $Time_start = $_POST['Time_start'];
  $Time_end = $_POST['Time_end'];
  $Semester = $_POST['Semester'];
  $courseyourselection = $_POST['course_your_selection'];
  $Subject = $_POST['subject'];
  $Teacher = $_POST['Teacher'];
  $Room = $_POST['Room'];
  
  

$sql = "INSERT INTO `class schedule`(`Day`, `Time_start`, `Time_end`, `Semester`, `course_your_selection`, `subject`, `Teacher`, `Room`) VALUES ( '$Day','$Time_start','$Time_end','$Semester','$courseyourselection','$Subject','$Teacher','$Room')";
  $result = mysqli_query($conn, $sql);
  
  if($result){
   echo "inserted successsfully";
  }else{
      echo "inserted not  successsfully"; 
  }
}


?>