<?php


define('DB_SERVER','bpfhuevzdtbtp2akhpzi-mysql.services.clever-cloud.com');

define('DB_USER','uiwjqlctrc1xxudl');

define('DB_PASS' ,'uqi8WE2CCJMJOcj80wTX');

define('DB_NAME', 'bpfhuevzdtbtp2akhpzi');


$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection

if (mysqli_connect_errno())

{

 echo "Failed to connect to MySQL: " . mysqli_connect_error();

}

?>