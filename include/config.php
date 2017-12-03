<?php 
/*
powered by : s2mi alatawi
*/


  $host = 'localhost';
  $username = 'root';
  $password = 'toor';
  $db_name = 'cms_system';

  $conn = mysqli_connect($host,$username,$password,$db_name);
          mysqli_set_charset($conn,"utf8");
		  
  if(!$conn){
	  
	  echo mysqli_connect_error("خطاء في عملية الاتصال") . mysqli_connect_errno();
  }
  
  function close_db(){
	  
	  global $conn;
	  mysqli_close($conn);
	  
  }
?>