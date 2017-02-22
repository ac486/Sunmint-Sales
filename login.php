<?php

$hostname = "localhost";
$username = "root";
$password = "mysql";


( $dbh = mysql_connect ( $hostname, $username, $password ) )
            or die ( "Unable to connect to MySQL database" );
print "Connected to MySQL<br><br>";
mysql_select_db( $dbh, $project );



?>