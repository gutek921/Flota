<?php

  $dbhost = 'mysql.cba.pl';     
  $dblogin = 'Systemzp';
  $dbpass = 'Szp12000';
  $dbselect = 'szp_c0_pl';
  mysql_connect($dbhost,$dblogin,$dbpass);
  mysql_select_db($dbselect) or die("Błąd przy wyborze bazy danych");
  mysql_query("SET CHARACTER SET UTF8");
?>