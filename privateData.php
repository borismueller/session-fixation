<?php
/**
 * Created by PhpStorm.
 * User: sick_dude_420
 * Date: 31.05.2017
 * Time: 08:46
 */

if (!isset($_SESSION['username'])) {
    echo "<form action='login.php'>";
    echo "<input type='text' name='name' placeholder='name'>";
    echo "<input type='password' name='password' placeholder='password'>";
    echo "<input type='submit'>";
    echo "</form>";
}
