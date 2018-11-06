<?php 
  include 'functions.php';
  include 'database.php';
?>
 
 <!-- 	//$error ='';
  	$conn=mysqli_connect($database,$dbuser,$dbpassword, $dbname);
	$sql = 'SELECT * FROM users ';
	$result= mysqli_query($conn, $sql);	
	$return = mysqli_fetch_array($result);
print_r($return);
 -->
<table class="table table-bordered table-hover">
                            	   <thead>
                            	    <tr>
                            	        <th>NAME</th>
                                        <th>USER LEVEL</th>
                                        <th>DATE JOINED</th>
                                     </tr>
                                    </thead>
                                    
                                    <tbody>
<?php

$conn=mysqli_connect($database,$dbuser,$dbpassword, $dbname);
                                    $query = "SELECT * FROM users";
                                    $select_personal = mysqli_query($conn,$query);
                                    
                                    while($row = mysqli_fetch_assoc($select_personal)) {
                                    	$name = $row['Name'];
                                        $User_level = $row['User_level'];
                                        $date_created = $row['date_created'];
                                        
                                    echo "<tr>";
                                    echo "<td>$name</td>";
                                    echo "<td>$User_level</td>";
                                    echo "<td>$date_created</td>";
                                    echo "<td><a href='blank-page.php?delete={$name}'>Delete</a></td>";
                                    echo "<td><a href='blank.page.php?source=edit_cad&p_id={$name}'>Edit</a></td>";
                                    
                                    
                                    echo "</tr>";
                                   
                                 
                                    
                                    }
                                    
                                    
                                    
                                    ?>

                                          
                                      </tbody>
                               </table>








<!-- if  (isset($_POST["name"]) && isset($_POST["password"]) || !empty($_POST["name"]) && !empty($_POST["password"])) {
				$name = $_POST["name"]; 
				$password= $_POST["password"];

		      	if ($name ==$return['Name'] && $password == 'admin') {
		      		redirect_to('../pages/index.php');
		      	}else {
		      		$error = "Validation error";
		      	}		
		}
		else {
		      	$name='';
		      	$error= "Pls log in";
		} 
 -->
