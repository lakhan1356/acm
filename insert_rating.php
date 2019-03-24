<?php
// Create connection
$conn = new mysqli("localhost","root",'',"acm");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_POST['rate1'])){
$php_rating = $_POST['rate1'];  // Storing Selected Value In Variable
}
else if(isset($_POST['rate2'])){
$php_rating = $_POST['rate2'];  // Storing Selected Value In Variable
}
else if(isset($_POST['rate3'])){
$php_rating = $_POST['rate3'];  // Storing Selected Value In Variable
}
else if(isset($_POST['rate4'])){
$php_rating = $_POST['rate4'];  // Storing Selected Value In Variable
}
else if(isset($_POST['rate5'])){
$php_rating = $_POST['rate5'];  // Storing Selected Value In Variable
}



    // $php_rating=$_POST['phprating'];
if(isset($_POST['user'])){
    $username = $_POST['user'];
}
echo $username;
echo "You have selected :" .$php_rating;  // Displaying Selected Value

$sql= "UPDATE worker SET Rating = '$php_rating' WHERE username = '$username'";
$result = mysqli_query($conn,$sql);
echo "<br>";
if(isset($result)){
echo "Rating given";
}else{
echo "nhi hua";
}
$conn->close();
?>

