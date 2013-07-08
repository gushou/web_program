<?php
  $mysql_connect_error = false;
  $db = @mysql_connect('localhost','order','complicated');
  if (!$db)
     $mysql_connect_error = true;
  else
  {
     mysql_query('set names utf8');
     mysql_select_db('wozaixiamen');
  }
?>



