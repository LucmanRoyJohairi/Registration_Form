<?php 
  
  global $sql;
  //include ('index.html');
  include ('db_connection.php');

  /*
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $gender = $_POST["gender"];
  $email = $_POST["email"];
  $status = $_POST["status"];*/

  $sql = "INSERT INTO tblusers  VALUES ('1','Roy','lucs','male','123roy','single')";

  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
?>