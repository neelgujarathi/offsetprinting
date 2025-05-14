<?php
include "configure.php";
$add  = mysqli_query($conn, "select * from registrationform") or die(mysqli_error($conn));
?>
<table border="2" cellpadding="2" cellspacing="2">
<thead>
    <tr>
        <center><h2> <strong><u><i>Customer's Registration Information:-</i></u></strong> </h2></center><br>
        <th>Sr. No.</th>
        <th>Name</th>
        <th>Contect</th>
        <th>Email</th>
        <th>Address</th>
        <th>City</th>
        <th>DOB</th>
        <th>Username</th>
        <th>Password</th>
        <th>Gender</th>
        <th>Language</th>
        <th>Terms and Conditions</th>
        
    </tr>
</thead>
<tbody>
<?php
    
    $email = mysqli_real_escape_string($conn, $_POST['name']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	$log = mysqli_query($conn, "select * from registrationform where Email='$email' and Password='$password'") or die(mysqli_error($conn));

	if (mysqli_num_rows($log) > 0) {
		$fetch = mysqli_fetch_array($log);

		echo "<tr><td>".$_SESSION['id'] = $fetch['id']."</td>";
        echo "<td>".$_SESSION['Name'] = $fetch['Name']."</td>";
        echo "<td>".$_SESSION['Contact'] = $fetch['Contact']."</td>";
        echo "<td>".$_SESSION['Email'] = $fetch['Email']."</td>";
        echo "<td>".$_SESSION['Address'] = $fetch['Address']."</td>";
        echo "<td>".$_SESSION['City'] = $fetch['City']."</td>";
        echo "<td>".$_SESSION['DOB'] = $fetch['DOB']."</td>";
        echo "<td>".$_SESSION['Username'] = $fetch['Username']."</td>";
        echo "<td>".$_SESSION['Password'] = $fetch['Password']."</td>";
        echo "<td>".$_SESSION['Gender'] = $fetch['Gender']."</td>";
        echo "<td>".$_SESSION['Language'] = $fetch['Language']."</td>";
        echo "<td>".$_SESSION['Conditions'] = $fetch['Conditions']."</td></tr>";
        
    }
    ?>
</tbody>
</table><br><br>

<?php
include "configure.php";
$add  = mysqli_query($conn, "select * from productorderform") or die(mysqli_error($conn));
?>
<table border="2" cellpadding="2" cellspacing="2">
<thead>
    <tr>
        <center><h2> <strong><u><i>Customer's Product form Information:-</i></u></strong> </h2></center><br>
        <th>Sr. No.</th>
        <th>Name</th>
        <th>Contect</th>
        <th>Email</th>
        <th>Address</th>
        <th>Item Name</th>
        <th>Design Id</th>
        <th>Item Quantity</th>
        <th>Product Size</th>
        <th>Paper GSM</th>
        <th>Product Type</th>
        <th>Printing Side</th>
        <th>Limination</th>
        <th>Product Matter</th>
        <th>Total Bill</th>
        <th>Status</th>
    </tr>
</thead>
<tbody>
<?php
    
    $email = mysqli_real_escape_string($conn, $_POST['name']);

	$log = mysqli_query($conn, "select * from productorderform where Email='$email'") or die(mysqli_error($conn));

	if (mysqli_num_rows($log) > 0) {
		$fetch = mysqli_fetch_array($log);

		echo "<tr><td>".$_SESSION['id'] = $fetch['id']."</td>";
        echo "<td>".$_SESSION['Name'] = $fetch['Name']."</td>";
        echo "<td>".$_SESSION['Contact'] = $fetch['Contact']."</td>";
        echo "<td>".$_SESSION['Email'] = $fetch['Email']."</td>";
        echo "<td>".$_SESSION['Address'] = $fetch['Address']."</td>";
        echo "<td>".$_SESSION['ItemName'] = $fetch['ItemName']."</td>";
        echo "<td>".$_SESSION['DesignId'] = $fetch['DesignId']."</td>";
        echo "<td>".$_SESSION['ItemQuantity'] = $fetch['ItemQuantity']."</td>";
        echo "<td>".$_SESSION['ProductSize'] = $fetch['ProductSize']."</td>";
        echo "<td>".$_SESSION['PaperGSM'] = $fetch['PaperGSM']."</td>";
        echo "<td>".$_SESSION['ProductType'] = $fetch['ProductType']."</td>";
        echo "<td>".$_SESSION['PrintingSide'] = $fetch['PrintingSide']."</td>";
        echo "<td>".$_SESSION['Limination'] = $fetch['Limination']."</td>";
        echo "<td><img src=".$_SESSION['ProductMatter'] = $fetch['ProductMatter']." height='100px' width='100px' alt='Image' ></td>";
        echo "<td>".$_SESSION['TotalBill'] = $fetch['TotalBill']."</td>";
        echo "<td>In Process</td></tr>";
    }
    ?>

</tbody>
</table><br><br>

<?php
include "configure.php";
$add  = mysqli_query($conn, "select * from customizedesign") or die(mysqli_error($conn));
?>
<table border="2" cellpadding="2" cellspacing="2">
<thead>
    <tr>
        <center><h2> <strong><u><i>Customer's Customize Order form Information:-</i></u></strong> </h2></center><br>
        <th>Sr. No.</th>
        <th>Name</th>
        <th>Contect</th>
        <th>Email</th>
        <th>Address</th>
        <th>Item Name</th>
        <th>Design Id</th>
        <th>Item Quantity</th>
        <th>Product Size</th>
        <th>Paper GSM</th>
        <th>Product Type</th>
        <th>Printing Side</th>
        <th>Limination</th>
        <th>Product Matter</th>
        <th>Total Bill</th>
    </tr>
</thead>
<tbody>
<?php
    
    $email = mysqli_real_escape_string($conn, $_POST['name']);
    if($email==$_SESSION['Email'] = $fetch['Email'])
    {
        $log = mysqli_query($conn, "select * from customizedesign where Email='$email'") or die(mysqli_error($conn));

	if (mysqli_num_rows($log) > 0) {
		$fetch = mysqli_fetch_array($log);

		echo "<tr><td>".$_SESSION['id'] = $fetch['id']."</td>";
        echo "<td>".$_SESSION['Name'] = $fetch['Name']."</td>";
        echo "<td>".$_SESSION['Email'] = $fetch['Email']."</td>";
        echo "<td>".$_SESSION['Address'] = $fetch['Address']."</td>";
        echo "<td>".$_SESSION['ItemName'] = $fetch['ItemName']."</td>";
        echo "<td>".$_SESSION['Quantity'] = $fetch['Quantity']."</td>";
        echo "<td>".$_SESSION['ItemSize'] = $fetch['ItemSize']."</td>";
        echo "<td>".$_SESSION['ItemType'] = $fetch['ItemType']."</td>";
        echo "<td>".$_SESSION['Limination'] = $fetch['Limination']."</td>";
        echo "<td>".$_SESSION['PrintingSide'] = $fetch['PrintingSide']."</td>";
        echo "<td><img src=".$_SESSION['Design'] = $fetch['Design']."height='100px' width='100px' alt='Image'</td>";
        echo "<td><img src=".$_SESSION['Matter'] = $fetch['Matter']."height='100px' width='100px' alt='Image'</td>";
        echo "<td>".$_SESSION['Comment'] = $fetch['Comment']."</td></tr>";
        echo "<td>".$_SESSION['Cost'] = $fetch['Cost']."</td></tr>";
    } 
    }
    else
    {
        echo "Data is not found!!";
    }

	?>

</tbody>
</table><br><br>
<center><a href="index.html">
    Go Back to Home Page
</a></center>