	<?php
	require_once 'includes/functions.php';
    include 'includes/database.php';
         
            $link = mysqli_connect("localhost", "root", "","hms");

            if (!$link) {
                echo "Error: Unable to connect to MySQL." . PHP_EOL;
                echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
                echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
                exit;
            }
//             $db_select = mysqli_select_db( $link,"hms");//the first is the name of database, secondly connection created above
// if (!$db_select) {
// die("database selection failed") ;
// }
// else{ echo "created";
// }
            // echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
            // echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
            // $sql= 'INSERT INTO users (Name, password,User_level ) values ("Abd", "12", "3")';
           // $query= mysqli_query($link, $sql);

           //  if (!$query){
           //      echo " <br> Error while quering" . mysqli_connect_error(). PHP_EOL;
           //  }

           //  mysqli_close($link);
         
	 ?>
<!DOCTYPE html>
<html>
<head>
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="dist/css/main.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<title>Hospital Management System</title>
</head>
<body>
	    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
	 		<div class="col-md-offset-5 col-sm-offset-3 "><?php  ?></div>
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign Up</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="signup.php">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Name" name="name"  autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <select class="form-control" name="level">
                                  <option>-Access Level-</option>
                                  <option>1</option> <!--1. Student, 2. Record office,Medical Personeel 4. 5.Admin-->
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                                <div class="">
                                    <a href="index.php">
                                        Have Account already Sign in
                                    </a>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button  class="btn btn-lg btn-success btn-block" type="submit">Submit</a>
                            </fieldset>
                    <?php 
                             ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
</html>