<?php

//error_reporting(0); 
$tidb_servername = "mysql.jinbility-dev.svc.cluster.local";
$tidb_username = "user67ok";
$tidb_password = "userroot67";
$port = 3306;
$tidb_db_name ="sampledb";
$tidb_options = array(
	//PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	PDO::MYSQL_ATTR_SSL_CA => 'cacert-2023-05-30.pem',
	PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => 'VERIFY_IDENTITY',
);
try {

//$db = new PDO("mysql:host=$tidb_servername;dbname=$tidb_db_name;charset=utf8", $tidb_username);

$db = new PDO("mysql:host=$tidb_servername;dbname=$tidb_db_name;charset=utf8", $tidb_username);

    // set the PDO error mode to exception
    //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 echo "Tidb Connected successfully  and working."; 
}
catch(PDOException $e)
    {
    //echo "Connection failed: " . $e->getMessage();
echo "<div style='color:white;background:red;padding:10px;border:none;'>Connection to TIDB Cloud Database Failed...Check your TIDB Credentials and Internet as well</div>";
}


mysql username:  user67ok
password: user67passo67

root user password :  userroot67
dbname:  sampledb





