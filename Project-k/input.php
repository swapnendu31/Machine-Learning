<?php
$servername = "localhost";
$username = "root";
$password = "";
$i = 0;
// Create connection
$conn = new mysqli($servername, $username, $password);

// $name = $_POST['name'];
// $no = $_POST['no'];
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
else{ echo "connected";
}
$i=$i+1;
echo $i;
// echo $no.$name;
// $sql = "INSERT INTO mm (aa, bb, cc) VALUES ('$no','2002-03-16','$name')";
// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//   }
$conn->close
?>
