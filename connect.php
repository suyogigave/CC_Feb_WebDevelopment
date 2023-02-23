<?php

$con= new mysqli('localhost','root','','portfolio');

if($con){
    echo "******* Welcome ********";
}
else{
    die(mysqli_error($con));
}
?>