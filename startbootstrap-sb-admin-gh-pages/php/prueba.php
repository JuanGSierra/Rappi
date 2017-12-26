<?php
  $localhost = "3306";
  $user = "edurappi";
  $password = "PS0m1fGAC1";

  try{
    mysql_connect($localhost, $user, $password);
    mysql_select_database('edurappi_juandavid');
    echo "SUCCES";

  } catch(Exception $ex){
    echo $ex;
  }
 ?>
