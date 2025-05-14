<html>
    <head>
        <title>Update</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>

<?php
	include "configure.php";
	if ($_GET['id']) {
	 $view = mysqli_query($conn, "select * from registrationform where id='" . $_GET['id'] . "'") or die(mysqli_error($conn));
	 $row = mysqli_fetch_array($view);
	}
?>


<div class="wthree_agile_admin_info">
		  <div class="w3_agileits_top_nav">
			<ul id="gn-menu" class="gn-menu-main">
			</ul>
		</div>
		<div class="clearfix"></div>
		<br><br><br><br>
				<div class="inner_content">
					<div class="inner_content_w3_agile_info">
					

							<div class="registration admin_agile">
								
							                   <div class="signin-form profile admin">
													<h2>Reset Password</h2>
													<div class="login-form">
														<form action="#" method="post">
                                                            <label>Enter Username</label>
															<input type="text" name="username" value="" required placeholder="Enter Username">
                                                            <label>Enter New Password</label>
															<input type="password" name="std_password" value="" required placeholder="Enter Password">
															<div class="tp">
																<input type="submit" name ="update" value="update">
                                                                <a href="customerlogin.php">Go Back</a>
															</div>
														</form>
													</div>
                                                </div>
                            </div>
												

					

				    </div>
					
				</div>
		
	</div>

          
												
</html>

<?php
if (isset($_POST['update'])) {
	extract($_POST);


	$update = mysqli_query($conn, "update registrationform set
			Username='" . $std_username . "',
            Password='" . $std_password . "'
			where id='" . $_GET['id'] . "' ") or die(mysqli_error($conn));

	if ($update) {
		echo "<script>;";
		echo "window.alert('Data update successfully....!');";
		echo 'window.location.href = "customerlogin.php";';
		echo "</script>";
	} else {
		echo "<script>;";
		echo "window.alert('Data error....!');";
		echo 'window.location.href = "dashboard.php";';
		echo "</script>";
	}
}

?>