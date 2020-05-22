<?php
// msql_connect('localhost','root','');
// mysql_select_db('CYPB');
$connect_error1="There is problem loading this page please contact to admin error code:B100";
$con = new mysqli('localhost','root','','finalproject');
if ($con->connect_error) {
	    die($connect_error1);
}
 ?>