<?php  	
	// $error = '';
	function redirect_to($locationn) {		
		header("Location:$locationn");	
		exit;
	}

	function validate(){
		// if  (isset($_POST["name"]) && isset($_POST["password"]) || !empty($_POST["name"]) && !empty($_POST["password"])) {
		// 		$name = $_POST["name"]; 
		// 		$password= $_POST["password"]; 
		//       	if ($name =='Admin' && $password == 'admin') {
		//       		redirect_to('pages/index.php');
		//       	}else {
		//       		$error = "Validation error";
		//       	}		
		// }
		// else {
		//       	$name='';
		//       	$error= "Pls log in";
		// }  
	}
	function insert_db($sql,$name,$password,$level){
	$name= $_POST['name'];
	$password= $_POST['password'];
	$level= $_POST['level'];
	$sql= 'INSERT INTO users (Name, password,User_level, date_created) values ($name, $password, $level, date(d/m/y))';
		
	}
?>
