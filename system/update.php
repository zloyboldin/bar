<?

header('Content-Type: text/html; charset="UTF-8"');
/// GOOGLE SECOND GOAL UPDATE
$servername = "mysql85.1gb.ru";
$username = "gb_coversion";
$password = "92cd1bd4b90";
$dbname = "gb_coversion";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); 
} 
$result =$conn->query("SELECT * FROM maintable WHERE STATUS in (select STATUS from maintable group by STATUS having count(*)>1)");
print_r($result);echo '<br/>';
echo "<pre>";
while ($row = $result->fetch_assoc()) {
	
	print_r($row);
}
echo "</pre>";
 $result->free();
	$conn->close();
?>
