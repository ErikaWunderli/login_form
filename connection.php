<? php
   
$server     = "localhost";
$username   = "root";
$password   = "root";
$db         = "user_database";

//Create a connection
$conn = mysqli_connect( $server, $username, $password, $db);    

//Check conncetion
if (!$conn) {
    die( "Connection failed: " . mysqli_connect_error() );
    
}

echo "Connected successfully!";
?>