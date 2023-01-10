
<?php
include "connection.php";

?>
<?php session_start();?>

<?php

if(!empty($_POST['submit'])){  
    $otp=$_POST['otp']; 


 $query="select * from `login` where otp='$otp'";
 $result=mysqli_query($connection,$query);
  $count=mysqli_num_rows($result);

if($count >0)
{
 header('location:/tbocwwb/new-application.php');
}
else{
 echo "Login not successful"; 
}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

       <input type="text"  name="otp">
       <input type="submit"  name="submit" value="submit">
    </form>
</body>
</html>