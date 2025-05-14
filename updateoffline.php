<html>
    <head>
        <title>Payment Form</title>
        <link rel="stylesheet" href="assets/css/stylepayment.css">
    </head>

    <body>

    <?php
	include "configure.php";
	if ($_GET['id']) {
	 $view = mysqli_query($conn, "select * from offlinepayment where id='" . $_GET['id'] . "'") or die(mysqli_error($conn));
	 $row = mysqli_fetch_array($view);
	}
    ?>
        <div class="hero">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <input type="button" name="bt1" value="OFF" class="toggle-btn" onclick="login()">
                    <input type="button" name="bt2" value="ON" class="toggle-btn" onclick="register()">
                </div>

                <form id="login" class="input-group" method="post">
                    <div class="title"><center><h3>Offline Payment Form</h3></center></div><br>
                    <input type="text" name="lname" class="input-field" value="<?php echo $row['Name']; ?>">
                    <input type="text" name="lcontact" class="input-field" value="<?php echo $row['Contact']; ?>">
                    <input type="text" name="lcity" class="input-field" value="<?php echo $row['City']; ?>">
                    <input type="text" name="lpname" class="input-field" value="<?php echo $row['ProductName']; ?>">
                    <input type="text" name="lpq" class="input-field" value="<?php echo $row['ProductQuantity']; ?>">
                    <input type="text" name="lci" class="input-field" value="<?php echo $row['OrderId']; ?>">
                    <input type="text" name="lod" class="input-field" value="<?php echo $row['OrderDate']; ?>"><br><br>
                    <button type="submit" class="submit-btn" name="update">update</button>
                </form>
</body>
</html>

<?php
if (isset($_POST['update'])) {
	extract($_POST);


	$update = mysqli_query($conn, "update offlinepayment set
	        Name='" . $lname  . "',
			Contact='" . $lcontact . "',
            City='" . $lcity . "',
            ProductName='" . $lpname . "',
			ProductQuantity='" . $lpq . "',
			OrderId='" . $lci . "',
			OrderDate='" . $lod . "'
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

