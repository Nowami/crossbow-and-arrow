<?php
//connect to the database
$db=mysqli_connect('localhost','root','','student_form');
//if the submit button is clicked
if(isset($_POST['php_form'])) {
  $name = mysql_real_escape_string($_POST['name']);
  $email = mysql_real_escape_string($_POST['email']);
  $usn = mysql_real_escape_string($_POST['usn']);
  $comment = mysql_real_escape_string($_POST['comment']);
  $gender = mysql_real_escape_string($_POST['gender']);

  if (count($nameErr=$emailErr=$usnErr=$genderErr) == 0) {
    $sql = "INSERT INTO student_form (name,email,usn,comment,gender) VALUES('$name','$email','$usn','$comment','$gender')";
    mysqli_query($db,$sql);
    # code...
  }
}
 ?>
