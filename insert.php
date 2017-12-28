<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$con = mysqli_connect("localhost", "root", "", "form1");

// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$name = $_POST['name'];
$email = $_POST['email'];
$usn =$_POST['usn'];
$comment = $_POST['comment'];
$gender = $_POST['gender'];


// attempt insert query execution
$sql = "INSERT INTO student_form (name,email,usn,comment,gender) VALUES ('$name', '$email', '$usn','$comment','$gender')";
if(mysqli_query($con, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not  execute $sql. " . mysqli_error($con);
}
header("refresh:2, URL=php_form.php");
// close connection
mysqli_close($con);
?>
