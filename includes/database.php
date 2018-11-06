<?php 
	 $database = 'localhost';
	 $dbuser = 'root';
	 $dbpassword = '';
	 $dbname = 'hms';

      $conn=mysqli_connect($database,$dbuser,$dbpassword, $dbname);
      
      // while($row = mysqli_fetch_array($result) ) {    
      //       $User_level=$row['User_level'];

            
      //       } 
 // $database = 'localhost';
 // $dbuser = 'root';
 // $dbpassword = '';
 // $dbname = 'Hms';
 // $name= $_POST['name'];
	// $password= $_POST['password'];
	// $level= $_POST['level'];
	// $sql= 'INSERT INTO users (Name, password,User_level, date_created) values ($name, $password, $level, date(d/m/y))';
 //  $conn=mysqli_connect($database,$dbuser,$dbpassword);
 //   $dbn = mysqli_select_db($dbname, $conn);
	// $result= mysqli_query($sql,$conn);
	// if ($result==TRUE) {
	// 	echo "Successfull";
	// }else{
	// 	echo "failed";
	// } 

 ?>