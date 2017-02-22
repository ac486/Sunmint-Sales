<?php
include (  "account.php"     );


	$dbhandle = new mysqli($hostname, $username, $password, $db);
	if ($dbhandle->connect_errno)
	{
		die( "Failed to connect to MySQL: (" . $dbhandle->connect_errno . ") " . $dbhandle->connect_error);
	} 
	else
	{ 
		echo "CONNECTED TO MYSQL";
		
		#return $dbhandle;
	}

$user = $_POST["un"];
$pass = $_POST["pw"];

$selectStmt = $dbhandle->prepare("SELECT username,password FROM login WHERE username=$user and password=$pass");
if(!selectStmt){
	die("failed")
}
if(!(selectStmt->bind_param("ss",$user,$pass)){
	echo "Binding param failed";
}
$selectStmt->execute();
$selectStmt->store_result();
/*
$selectStmt = "SELECT * FROM login WHERE username='$user' and password='$pass'";
$result = mysql_query($selectStmt);
$count = mysql_num_rows($result);
echo mysql_num_rows($result);
if($count==1)
		echo "success";
else
		echo "failed";
*/

/*
FOR INSERT
//creating a prepared statement
$stmt = $dbhandle->prepare("INSERT INTO login (username, password,firstname, lastname) VALUES (?, ?, ?, ?)");

$stmt->bind_param("ssss", $username, $password, $firstname, $lastname);*/
	
#$dbhandle = getConnection();



?>