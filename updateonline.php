<html>
    <head>
        <title>Payment Form</title>
        <link rel="stylesheet" href="assets/css/stylepayment.css">
    </head>

    <body>

    <?php
	include "configure.php";
	if ($_GET['id']) {
	 $view = mysqli_query($conn, "select * from onlinepayment where id='" . $_GET['id'] . "'") or die(mysqli_error($conn));
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
                    
                </form>

                <form id="register" class="input-group" method="post">
                    <div class="title"><center><h3>Online Payment Form</h3></center></div><br>
                    <input type="text" class="input-field" name="rname" value="<?php echo $row['Name']; ?>">
                    <input type="text" class="input-field" name="rcontact" value="<?php echo $row['Contact']; ?>" >
                    <input type="text" class="input-field" name="rcity" value="<?php echo $row['City']; ?>" >
                    <input type="text" class="input-field" name="rpn" value="<?php echo $row['ProductName']; ?>" >
                    <input type="text" class="input-field" name="rpq" value="<?php echo $row['ProductQuantity']; ?>" >
                    <input type="text" class="input-field" name="rro" value="<?php echo $row['OrderId']; ?>" >
                    <input type="text" class="input-field" name="gpn" value="<?php echo $row['PaymentMode']; ?>" ><br><br>
                    <button type="submit" class="submit-btn" name="update">update</button>
</form>
<script>
            var x = document.getElementById("login");
            var y = document.getElementById("register");
            var z = document.getElementById("btn");

            function register()
            {
                x.style.left = "-400px";
                y.style.left = "50px";
                z.style.left = "110px";
            }

            function login()
            {
                x.style.left = "50px";
                y.style.left = "450px";
                z.style.left = "0";
            }
            </script>
</body>
</html>

<?php
if (isset($_POST['update'])) {
	extract($_POST);


	$update = mysqli_query($conn, "update onlinepayment set
	        Name='" . $rname  . "',
			Contact='" . $rcontact . "',
            City='" . $rcity . "',
            ProductName='" . $rpn . "',
			ProductQuantity='" . $rpq . "',
			OrderId='" . $rro . "',
			PaymentMode='" . $gpn . "'
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

