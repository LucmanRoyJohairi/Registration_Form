<?php 
  
  global $sql;
  //include ('index.html');
  include ('db_connection.php');

  
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $gender = $_POST["gender"];
  $email = $_POST["email"];
  $status = $_POST["status"];

  $sql = "INSERT INTO tblusers(firstname,lastname,gender,email,status)  
            VALUES (?,?,?,?,?)";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sssss", $fname, $lname,$gender,$email,$status);
  $stmt->execute();

  echo "New record created successfully";

  $stmt->close();
  $conn->close();
?>