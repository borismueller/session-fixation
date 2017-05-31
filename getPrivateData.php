<?php
/**
 * Created by PhpStorm.
 * User: sick_dude_420
 * Date: 31.05.2017
 * Time: 08:50
 */
session_start();
if (isset($_SESSION['secret'])) {
	echo 'secret: '. $_SESSION['secret'];
} else echo 'go away';
