<?php 
//session_start();

// Define
//////////////////////////////////////////////////////////////////////////////////////
define('TITLE','Umambo Dev 2.1');
define('URL', "http://".$_SERVER["HTTP_HOST"]);
define('GLOB','global/');
define('FOOTER','APP/views/pages/footer.template.php');
define('HEADER','App/views/pages/header.template.php');

//Functions
function stylesheet($url){
//echo "<link href=\"{$url}\" rel=\"stylesheet\" type=\"text/css\" />";
}
function script($url){
//echo "<script type=\"text/javascript\" src=\"{$url}\"></script>";
}


// Include Database Connections
//include ( $_SERVER['DOCUMENT_ROOT'] .'/'. GLOB .'includes/database_connection.inc.php' );
	
// Include Database Connections
//include ( $_SERVER['DOCUMENT_ROOT'] .'/'. GLOB .'includes/authentication.inc.php' );

//$sql = new sql_connections;// this variable is child of the object sql_connect
//$sql->sql_connect(); // Connects to the database;


?>
