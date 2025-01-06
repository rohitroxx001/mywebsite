<?php 
$servername = "localhost"; 
$username = "root"; 
$password = "root"; 
$dbname = "movie"; 
 
// Create connection 
$conn = new mysqli($servername, $username, $password, $dbname); 
 
// Check connection 
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
} 
 
// Example of handling a GET request 
if ($_SERVER['REQUEST_METHOD'] == 'GET') { 
    $sql = "SELECT * FROM movie"; 
    $result = $conn->query($sql); 
 
    $data = []; 
    if ($result->num_rows > 0) { 
        while($row = $result->fetch_assoc()) { 
            $data[] = $row['name']; 
        } 
    } 
    echo json_encode($data); 

} 
 
$conn->close(); 
?> 