<html>
    <head>
        <title>Update</title>
        <link rel="stylesheet" href="assets/css/style.css">
        
        <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
</head>

<body>
<?php
	include "configure.php";
	if ($_GET['id']) {
	 $view = mysqli_query($conn, "select * from registrationform where id='" . $_GET['id'] . "'") or die(mysqli_error($conn));
	 $row = mysqli_fetch_array($view);
	}
?>


<div class = "container">
<form action = "#" name = "myform" method="post" id = "formID">
                <div class = "user-details">
                    <div class = "input-box">
                        <span class = "details"> Full Name</span>
                        <input type="text" name="std_name" value="<?php echo $row['Name']; ?>" >
                    </div>

                    <div class = "input-box">
                        <span class = "details"> Contact</span>
                        <input type="text" name="std_contact" value="<?php echo $row['Contact']; ?>">
                    </div>


                    <div class = "input-box">
                        <span class = "details"> Email</span>
                        <input type="email" name="std_email" value="<?php echo $row['Email']; ?>" >
                    </div>

                    <div class = "input-box">
                        <span class = "details"> address</span>
                        <input type = "text" name="stud_address" value="<?php echo $row['Address']; ?>">
                    </div>



                    <div class = "input-box">
                        <span class = "details">City</span>
                        <select name="city" value="<?php echo $row['City']; ?>">
								<option value="">Select City</option>
								<option value="Nashik" <?php if ($row['City'] == 'Pune') {
															echo "selected";
														} ?>>Pune</option>
								<option value="Pune" <?php if ($row['City'] == 'Nashik') {
															echo "selected";
														} ?>>Nashik</option>
								<option value="Mumbai" <?php if ($row['City'] == 'Mumbai') {
															echo "selected";
														} ?>>Mumbai</option>
							</select>
                    </div>


                    <div class = "input-box">
                        <span class = "details"> DOB</span>
                        <input type="date" name="std_dob" value="<?php echo $row['DOB']; ?>">
                    </div>


                    <div class = "input-box">
                        <span class = "details"> Username</span>
                        <input type="text"name="std_username" value="<?php echo $row['Username']; ?>">
                    </div>

                    <div class = "input-box">
                        <span class = "details"> Password</span>
                        <input type="password" name="std_password" value="<?php echo $row['Password']; ?>">
                    </div>

                <div class = "gender-details">
                    <input type = "radio" name = "gender" value ="male" id = "dot-1" <?php if ($row['Gender'] == 'male') { ?> checked="checked" <?php } ?>>
                    <input type = "radio" name = "gender" value ="female" id = "dot-2" <?php if ($row['Gender'] == 'female') { ?> checked="checked" <?php } ?>>
                        <span class = "gender-title"> Gender</span>
                        <div class = "category">
                            <label for="dot-1">
                                <span class = "dot one"></span>
                                <span class = "gender">Male</span>&nbsp;&nbsp;&nbsp;&nbsp;
                            </label>

                            <label for="dot-2">
                                <span class = "dot two"></span>
                                <span class = "gender">Female</span>
                            </label>
                    </div>
                </div>


                <div class = "input-box">
                        <span class = "details">Language</span>
                        <select name="language" value="<?php echo $row['Language']; ?>">
								<option value="">Select Language</option>
								<option value="English" <?php if ($row['Language'] == 'English') {
															echo "selected";
														} ?>>English</option>
								<option value="Marathi" <?php if ($row['Language'] == 'Marathi') {
															echo "selected";
														} ?>>Marathi</option>
								<option value="Hindi" <?php if ($row['Language'] == 'Hindi') {
															echo "selected";
														} ?>>Hindi</option>
                                <option value="Janpanses" <?php if ($row['Language'] == 'Janpanses') {
															echo "selected";
														} ?>>Janpanses</option>
                                <option value="Spanish" <?php if ($row['Language'] == 'Spanish') {
															echo "selected";
														} ?>>Spanish</option>
                                <option value="French" <?php if ($row['Language'] == 'French') {
															echo "selected";
														} ?>>French</option>
                                <option value="Arabic" <?php if ($row['Language'] == 'Arabic') {
															echo "selected";
														} ?>>Arabic</option>
							</select>

                            <div class = "input-box">
                              <br><input type="checkbox" name="term" <?php if ($row['Conditions'] == 'Accepted') { ?> checked="checked" <?php } ?>> I Accept Terms & Conditions.
                            </div>
                    </div>

                    </div>
                    <div class = "button">
                    <input type = "submit" name = "update" value = "Update">
                </div>
                </div>

                
            </form>
          </div>
</html>

<?php
if (isset($_POST['update'])) {
	extract($_POST);


	$update = mysqli_query($conn, "update registrationform set
	        Name='" . $std_name  . "',
			Contact='" . $std_contact . "',
            Email='" . $std_email . "',
            Address='" . $stud_address . "',
			City='" . $city . "',
			DOB='" . $std_dob . "',
			Username='" . $std_username . "',
            Password='" . $std_password . "',
            Gender='" . $gender . "',
            Language='" . $language . "',
            Conditions ='".$terms."'
			where id='" . $_GET['id'] . "' ") or die(mysqli_error($conn));

	if ($update) {
		echo "<script>;";
		echo "window.alert('Data update successfully....!');";
		echo 'window.location.href = "dashboard.php";';
		echo "</script>";
	} else {
		echo "<script>;";
		echo "window.alert('Data error....!');";
		echo 'window.location.href = "dashboard.php";';
		echo "</script>";
	}
}

?>