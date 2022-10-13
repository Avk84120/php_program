<?php
include 'index.html';
$servername = "localhost";
$username = "root";
$password = "";
$dbname="crud";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
 
    die("Connection failed: " );
}
else 
{
  echo "Connected successfully";
  
}
if(isset($_POST["submit"]))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];

    $sql = "INSERT INTO 'user' ('id,'name','email','address','contact')
VALUES ('$id','$name', '$email','$address','$contact')";

if (!$conn->query($sql) == TRUE)
{
  echo "New record created successfully";
} 
else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
    
}
?>
