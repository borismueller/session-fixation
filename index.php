<?php
/**
 * Created by PhpStorm.
 * User: sick_dude_420
 * Date: 31.05.2017
 * Time: 08:13
 */

echo "yo <br>";
echo "<a href=privateData.php> login </a> <br>";

if (isset($_GET['SID'])) {
	echo "yo";
	session_id($_GET['SID']);
}
session_start();
var_dump(session_id());
