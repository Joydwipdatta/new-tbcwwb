
<?php
include "connection.php";


  $number=$_SESSION['number'];

  if($number== true){
    
        $query="SELECT * FROM `login` WHERE number='$number'";
        $data=mysqli_query($connection,$query);
        $result=mysqli_fetch_assoc($data);
    }
    else{
        header('location:login.php');
    }


  ?>