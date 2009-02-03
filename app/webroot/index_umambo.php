<?php
require 'app/config/config.php';

$request = $_SERVER['REQUEST_URI'];
$url = substr($request,1);
$file =  'pages'.$request.'/index.php';



if (is_file("$file")){ 
$_SESSION['OWNERID'] = $_SESSION['USERID'];
require $file; 
//If the file exist, Load Page
} elseif($request == '/') {
require 'pages/homepage/index.php';
//If its the root url then go to the index page
}else{

$sql = "SELECT * FROM Members WHERE url='$url' " ;

if($owner = mysql_fetch_array(mysql_query($sql))){
$_SESSION['OWNERID'] =  $owner['ID'];
$_SESSION['OWNERDISPLAY'] =  $owner['DISPLAY_NAME'];
require 'pages/portfolio/public.php';
exit;
}
require 'pages/404/404.php';
// If none of them are TRUE go the 404 Error Page
 } 
	
?>
