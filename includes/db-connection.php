<?php
  // 1. Create database connection
  //
  // Define constants rather than regular variables.
  $dbServer = "localhost";
  $dbUser = "benrodia_root";
  $dbPass = "NO.1through10";
  $dbName = "benrodia_database1";

  // Connect using the constants
  $connection = mysqli_connect($dbServer, $dbUser, $dbPass, $dbName);

  // Test if connection succeeded
  if (mysqli_connect_errno()) {
    die ('Database connection failed: ' .
        mysqli_connect_error() .
        ' )' . mysqli_connect_errno() . ')'
    );
  }

  $query = "SELECT * FROM 'portfolio'";
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die("failed to connect to portfolio.");
  }
?>
t