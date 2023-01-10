<?php
$connection= new mysqli('localhost','root','','labourcess'); 
if(!$connection){ 
    die(mysqli_error($connection));
}
?>