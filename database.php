<?php


$db_name = "login";
$mysql_username = "root";
$mysql_password = "";
$server_name = "login";

$conn = mysqli_connect($server_name,$mysql_username,$mysql_password,$db_name);

if($conn)
{
	// echo "connect successfully";
}   
else
{
	echo "not connected";
}

$error = '';

// echo  $_POST['name']."<br>" ;
// echo $_POST['Gender']."<br>" ;
// echo $_POST['Contactno']."<br>";
// echo $_POST['email']."<br>";
// echo $_POST['Address']."<br>";
// echo $_POST['psw']."<br>";

// if (isset($_GET['id']) && $_GET['id'] != ''){
//     echo $_GET['id'];

//     $mysql_qry = "DELETE FROM `customer` WHERE id =".$_GET['id'];
    
//     $result = mysqli_query($conn,$mysql_qry);

//     if($result)
//     {
//         echo "delete success";
//         header("Location: http://localhost/lecture%20scheduling%20system/");
//     }
//     else
//     {
//         echo  "delete not success";    
//     }   
    
// }


// if (isset($_POST['name']) && $_POST['name'] != ''
// && isset($_POST['Gender']) && $_POST['Gender'] != ''
// && isset($_POST['Contactno']) && $_POST['Contactno'] != ''
// && isset($_POST['email']) && $_POST['email'] != ''
// && isset($_POST['Address']) && $_POST['Address'] != ''
// && isset($_POST['password']) && $_POST['password'] != '') 
// {

//     if ($_POST['password'] != $_POST['con_psw'])
//     {
//         $error = "Something went wrong";
//         echo "Something went wrong";
//     } 
//     else 
//     {
//         $name = $_POST['name'];
//         $Gender=$_POST['Gender'];
//         $Contactno=$_POST['Contactno'];
//         $email=$_POST['email'];
//         $Address=$_POST['Address'];
//         $psw=$_POST['password'];

//         $mysql_qry = "INSERT INTO `students`(`Name`, `Gender`, `Contact no`, `Email`, `Address`, `Password`) VALUES ('$name','$Gender','$Contactno','$email','$Address','$psw');";
    
//         $result = mysqli_query($conn,$mysql_qry);
    
//         if($result)
//         {
//             echo " insert success";
//             // header("Location: http://localhost/lecture%20scheduling%20system/");
//         }
//         else
//         {
//             echo  " insert not success";    
//         }   
//     }
// }

//echo $_POST['email'];
//echo $_POST['psw'];

if (isset($_POST['email']) && $_POST['email'] != '' &&
isset($_POST['password']) && $_POST['password'] != '') 
{
    $email = $_POST['email'];
    $password = $_POST['password'];

//  $sql = "select * from customer where email = '$email' AND password = '$psw' ";
$sql= "INSERT INTO `students` ( `email`, `Password`) VALUES ( 'mahreenwaheed786@gmail.com', 'sssss');";

    $result = mysqli_query($conn,$sql);

    if($result > 0)
    {   
        $row = ($result);
        $a = $row["id"];
       header( 'Location:welcome.php?id='.$a );
     

    }
    else
    {
        echo "data not found";
    } 

} else 
{
// echo "hahaha";
}
//update

// if (isset($_POST['name_update']) && $_POST['name_update'] != ''
// && isset($_POST['Gender_update']) && $_POST['Gender_update'] != ''
// && isset($_POST['Contactno_update']) && $_POST['Contactno_update'] != ''
// && isset($_POST['email_update']) && $_POST['email_update'] != ''
// && isset($_POST['Address_update']) && $_POST['Address_update'] != ''
// && isset($_POST['psw_update']) && $_POST['psw_update'] != '') 
// {
//     echo "wow";

//         $name = $_POST['name_update'];
//         $Gender=$_POST['Gender_update'];
//         $Contactno=$_POST['Contactno_update'];
//         $email=$_POST['email_update'];
//         $Address=$_POST['Address_update'];
//         $psw=$_POST['psw_update'];

//         // $mysql_qry = "INSERT INTO `customer`(`Name`, `Gender`, `Contact no`, `Email`, `Address`, `Password`) VALUES ('$name','$Gender','$Contactno','$email','$Address','$psw');";
//         $mysql_qry = "UPDATE `customer` SET `Name`='$name',`Gender`='$Gender',`Contact no`='$Contactno',
//         `Email`='$email',`Address`='$Address',`Password`='$psw' WHERE id = '2';";
    
//         $result = mysqli_query($conn,$mysql_qry);
    
//         if($result)
//         {
//             echo "update success";
//             header("Location: http://localhost/lecture%20scheduling%20system/");
//         }
//         else
//         {
//             echo  "update not success";    
//         }   
    
// }
// else{
    
// }





?>