<?php
//CONFIG
//<database>
define("DB_HOST","127.0.0.1");
define("DB_USERNAME","root");
define("DB_PASSWORD","");
define("DB_NAME","bagira");
//</database>
//<app>
define("ROOTDOMAIN","localhost");
define("ROOT","http://localhost");
//</app>
//CONSTS
define("EMAIL_REGEX","/^([a-zA-Z0-9_\.-]+)@([a-zA-Z0-9_\.-]+)\.([a-zA-Z\.]{2,6})$/");
define("PASSWORD_REGEX","/^[a-zA-Z0-9_-]{6,18}$/");
define("URL_REGEX","/^(https?:\/\/)?([\da-zA-Z\.-]+)\.([a-zA-Z\.]{2,6})([\/\w \.-]*)*\/?$/");
//FUNCTIONS
function db(){
	//Performs a database connection and returns the Mysqli Object
	$conn = new mysqli(DB_HOST,DB_USERNAME,base64_decode(DB_PASSWORD),DB_NAME);
	$conn->set_charset("utf8mb4_general_ci");
	return $conn;
}
function init(){
	//Basic initialization of all HTML pages
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	header_remove("X-Powered-By");
	header_remove("Server");
}
function initJson(){
	//Basic initialization of all JSON pages
	header("Content-Type: application/json");
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	header_remove("X-Powered-By");
	header_remove("Server");
}
function initJs(){
	//Basic initialization of all JSON pages
	header("Content-Type: text/javascript");
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	header_remove("X-Powered-By");
	header_remove("Server");
}
function initCss(){
	//Basic initialization of all JSON pages
	header("Content-Type: text/css");
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	header_remove("X-Powered-By");
	header_remove("Server");
}