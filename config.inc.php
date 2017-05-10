<?php
//CONFIG
//<database>
define("DB_HOST","127.0.0.1");
define("DB_USERNAME","root");
define("DB_PASSWORD","");
define("DB_NAME","bagira");
//</database>
//<app>
define("ROOTDOMAIN","bagi.ra");
define("ROOT","http://bagi.ra");
//</app>
//FUNCTIONS
function db(){
	$conn = new mysqli(DB_HOST,DB_USERNAME,base64_decode(DB_PASSWORD),DB_NAME);
	$conn->set_charset("utf8mb4_general_ci");
	return $conn;
}