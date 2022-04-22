<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teachforfrnd";



$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  echo "didnot connect";
}else{
  echo "success";
}

$sql = "SELECT * from topics";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row['topicid']. " - Name: " . $row["topicname"]. " " . $row["topicurl"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

if(!$rset){
	die("COULD NOT INSERT!");

}




?>
