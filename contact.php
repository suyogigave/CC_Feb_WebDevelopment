<?php
$con= new mysqli('localhost','root','','portfolio');

$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Phone=$_POST['Phone'];
$Enquirie=$_POST['Enquirie'];


 
$sql = "INSERT INTO contact_me (Name, Email,Phone,Enquirie) 
VALUES ('$_POST[Name]','$_POST[Email]','$_POST[Phone]','$_POST[Enquirie]')";
 
if($con->query($sql) == true) {
    echo "<h2>Thank You.!!</h2>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

$con->close();
?>
