<html>

<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";

$db = "cakemeaway";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error)
	
{
    die("Connection failed: " . $conn->connect_error);
} 
else
{
    echo "Connected successfully";
}

mysqli_close($conn);

?>
    
</body>

</html>
