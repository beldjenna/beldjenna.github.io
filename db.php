<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dbname = "test";


$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dbname);

// Check if connection failed

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// if connection succeed

else {

	// if we clicked submit

	if (isset($_POST['submit'])) {

		$username = $_POST['username'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $fullname = $_POST['fullname'];
        $cardnumber = $_POST['cardnumber'];
        $expiration = $_POST['expiration'];
        $cvc = $_POST['cvc'];


			$sql_add = "INSERT INTO signup (username, address, email, password, gender, fullname, cardnumber, expiration, cvc) 
			VALUES ('$username', '$address', '$email',' $password', '$gender', '$fullname', '$cardnumber', '$expiration', '$cvc');";

			// Check if sql query is valid

			if (!mysqli_query($conn, $sql_add)) {
				header("location: index.php?error=sqlerror");
				exit();
			} 
			else {
				header("location: index.php?error=seccess");
				exit();
			}

	}
}

?>




<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dbname = "BASE_ETUDIANTS";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword); 

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

else {

  $sql_DB = "CREATE DATABASE BASE_ETUDIANTS";

  if (mysqli_query($conn, $sql_DB)) {

    $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dbname); 

    $sql_TABLE = "CREATE TABLE etudiants (
      
      id int(20) AUTO_INCREMENT PRIMARY KEY NOT NULL,
      nom varchar(30) NOT NULL,
      prenom varchar(30) NOT NULL,
      vile varchar(30) NOT NULL,
      date_de_naissance varchar(30) NOT NULL,
      specialite varchar(30) NOT NULL,
      login varchar(30) NOT NULL,
      pass varchar(30) NOT NULL
    );";

    if (mysqli_query($conn, $sql_TABLE)) {
      echo "Table etudiants created successfully";
    } 
    else {
      echo "Error creating table: " . mysqli_error($conn);
    }
  }

  else {
    echo "Error creating database: " . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>