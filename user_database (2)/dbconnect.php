<?php  

  @mysql_connect("localhost", "kursus2010_user", "SUITSUp22suke") OR 
  die("andmebaasi server kättesaamatu");

  @mysql_select_db("kursus2010") OR
  die("andmebaas kättesaamatu");

?>