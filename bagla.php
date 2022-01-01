<?php
 /* $serverName = "LAPTOP-QJ5NCCE8"; //serverName\instanceName

// Since UID and PWD are not specified in the $connectionInfo array,
// The connection will be attempted using Windows Authentication.
$connectionInfo = array( "Database"=>"JewelryStoreDatabaseProject");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}*/
 //new PDO("sqlsrv:server=[LAPTOP-QJ5NCCE8];Database=[JewelryStoreDatabaseProject]");
$server_name = "LAPTOP-QJ5NCCE8";
$db_name="JewelryStoreDatabaseProject";
try
{


    $conn = new PDO("sqlsrv:Server=$server_name;Database=$db_name;ConnectionPooling=0", "", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($conn) {
    	# code...
    }

}
catch(PDOException $e)
{

    $e->getMessage();

}

?>