<?php
ob_start();
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("highcourt") or die(mysql_error());
?>