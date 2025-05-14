<html>
    <head>
        
        <title>Order</title>
       
        <link rel="stylesheet" href="assets/css/styleorder.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>

    <body>

    <?php
	include "configure.php";
	if ($_GET['id']) {
	 $view = mysqli_query($conn, "select * from productorderform where id='" . $_GET['id'] . "'") or die(mysqli_error($conn));
	 $row = mysqli_fetch_array($view);
	}
    ?>
        <div class = "container">
            <h1 class = "form-title">Product Order Form</h1>
        

        <form action = "#" method="post" name="myform" enctype="multipart/form-data">
            <div class="main-user-info">
            <div class="user-input-box">
                    <label>Name</label>
                    <input type = "text" name = "name" value="<?php echo $row['Name']; ?>">
                </div>

                <div class="user-input-box">
                    <label>Contact</label>
                    <input type = "text" name = "contact" value="<?php echo $row['Contact']; ?>">
                </div>

                <div class="user-input-box">
                    <label>Email</label>
                    <input type = "text" name = "email"  value="<?php echo $row['Email']; ?>">
                </div>

                <div class="user-input-box">
                    <label>Address</label>
                    <textarea name = "address" cols="33" rows="2" value="<?php echo $row['Address']; ?>" class="nee">  </textarea>
                </div>

                <div class = "gender-details-box">
                    <span class="gender-title">Item Name</span>
                    <div class="gender-category">
                        <input type="radio" name = "iname" value="Visiting Cards" onclick="UpdateList(this.value)" id="vc" <?php if ($row['ItemName'] == 'Visiting Cards') { ?> checked="checked" <?php } ?>>
                        <label>Visiting Cards</label>
                        <input type="radio" name = "iname" value="Wedding" onclick="UpdateList(this.value)" id="wc" <?php if ($row['ItemName'] == 'Wedding') { ?> checked="checked" <?php } ?>>
                        <label for="no">Wedding </label><br>
                        <input type="radio" name = "iname" value="Doctor Files" onclick="UpdateList(this.value)" id="df" <?php if ($row['ItemName'] == 'Doctor Files') { ?> checked="checked" <?php } ?>>
                        <label for="no">Doctor Files</label>
                        &nbsp;&nbsp; <input type="radio" name = "iname" value="Prescription" onclick="UpdateList(this.value)" id="dp" <?php if ($row['ItemName'] == 'Prescription') { ?> checked="checked" <?php } ?>>
                       <label for="no">Prescription</label><br>
                    </div>
                </div>

                <div class="user-input-box">
                    <label>Design ID</label>
                    <input type = "text" name = "design"  value="<?php echo $row['DesignId']; ?>">
                </div>

                <div class="user-input-box">
                    <label>Item Quantity</label>
                    <input type = "text" name = "quantity"  placeholder="Enter item quantity" id ="n" value="<?php echo $row['ItemQuantity']; ?>">
                    </div>

                    <div class="user-input-box">
                    <label>Product Size</label>
                    <select name="optionlist" id ="pz" value="<?php echo $row['ProductSize']; ?>">
								<option value="None" <?php if ($row['ProductSize'] == 'None') {
															echo "selected";
														} ?>>None</option>
								<option value="None" <?php if ($row['ProductSize'] == 'None') {
															echo "selected";
														} ?>>None</option>
								<option value="None" <?php if ($row['ProductSize'] == 'None') {
															echo "selected";
														} ?>>None</option>
                                <option value="None" <?php if ($row['ProductSize'] == 'None') {
															echo "selected";
														} ?>>None</option>
                                <option value="None" <?php if ($row['ProductSize'] == 'None') {
															echo "selected";
														} ?>>None</option>
                                <option value="None" <?php if ($row['ProductSize'] == 'None') {
															echo "selected";
														} ?>>None</option>
                                <option value="None" <?php if ($row['ProductSize'] == 'None') {
															echo "selected";
														} ?>>None</option>
							</select>
                </div>


                <div class="user-input-box">
                    <label>Paper GSM</label>
                    <select name="gsm" id ="pp" value="<?php echo $row['PaperGSM']; ?>">
								<option value="Non-Terriable" <?php if ($row['PaperGSM'] == '180 GSM Paper') {
															echo "selected";
														} ?>>180 GSM Paper</option>
								<option value="Terriable" <?php if ($row['PaperGSM'] == '200 GSM Paper') {
															echo "selected";
														} ?>>200 GSM Paper</option>
								<option value="Card like ATM" <?php if ($row['PaperGSM'] == '250 GSM Paper') {
															echo "selected";
														} ?>>200 GSM Paper</option>
                                <option value="Card like ATM" <?php if ($row['PaperGSM'] == '300 GSM Paper') {
															echo "selected";
														} ?>>300 GSM Paper</option>
							</select>
                </div>


                <div class="user-input-box">
                    <label>Product Type</label>
                    <select name="type" id ="pt" value="<?php echo $row['ProductType']; ?>">
								<option value="Non-Terriable" <?php if ($row['ProductType'] == 'Non-Terriable') {
															echo "selected";
														} ?>>Non-Terriable</option>
								<option value="Terriable" <?php if ($row['ProductType'] == 'Terriable') {
															echo "selected";
														} ?>>Terriable</option>
								<option value="Card like ATM" <?php if ($row['ProductType'] == 'Card like ATM') {
															echo "selected";
														} ?>>Card like ATM</option>
							</select>
                </div>


                <div class = "gender-details-box">
                    <span class="gender-title">Printing Side</span>
                    <div class="gender-category">
                        <input type="radio" name = "fix" id="ps" value="Front Side" <?php if ($row['PrintingSide'] == 'Front Side') { ?> checked="checked" <?php } ?>>
                        <label>FrontSide</label>
                        <input type="radio" name = "fix" id="os" value="Front Back Side" <?php if ($row['PrintingSide'] == 'Front Back Side') { ?> checked="checked" <?php } ?>>
                        <label for="no">FrontBackSide</label>
                    </div>
                </div>


                <div class="user-input-box">
                    <label>Limination</label>
                    <select name="limi" id ="l" value="<?php echo $row['Limination']; ?>">
								<option value="Non-Terriable" <?php if ($row['Limination'] == 'Glossy Limination') {
															echo "selected";
														} ?>>Glossy Limination</option>
								<option value="Terriable" <?php if ($row['Limination'] == 'Matt Limination') {
															echo "selected";
														} ?>>Matt Limination</option>
								<option value="Card like ATM" <?php if ($row['Limination'] == 'Spot Limination') {
															echo "selected";
														} ?>>Spot Limination</option>
                                <option value="Card like ATM" <?php if ($row['Limination'] == 'Matt Limination + Spot Limination') {
															echo "selected";
														} ?>>Matt Limination + Spot Limination</option>
                                <option value="Card like ATM" <?php if ($row['Limination'] == 'GLossy Limination + Spot Limination') {
															echo "selected";
														} ?>>GLossy Limination + Spot Limination</option>
							</select>
                </div>

                <div class="user-input-box">
                    <label>Product Matter</label>
                   <input type="file" accept=".jpg, .jpeg, .png" name="m" value="<?php echo $row['ProductMatter']; ?>">
                </div>


                <div class="user-input-box">
                    <label>Total Bill</label>
                    <input type = "text" name = "amt"  value="<?php echo $row['TotalBill']; ?>">
                </div>


               
            </div>
            <div class = "form-submit-btn">
                <input type ="submit" name = "update" value = "update"> 
            </div>
          
        </div>
        </form>

        <script>
            function UpdateList(ElementValue)
    {
        with(document.forms.myform)
        {
            if(ElementValue == "Visiting Cards")
            {
                optionlist[0].text = "None";
                
                optionlist[1].text = "None";
              
                optionlist[2].text = "None";
                
                optionlist[3].text = "None";
               

                type[0].text = "Non-Terriable";
                
                type[1].text = "Terriable";
                
                type[2].text = "Card like ATM ";
                
            }

            if(ElementValue == "Wedding")
            {
                optionlist[0].text = "8 * 6 inches + Single Side";
                
                optionlist[1].text = "12 * 8 inches + Single Side";
               
                optionlist[2].text = "8 * 8 inches + Single Side";
               
                optionlist[3].text = "12 * 8 inches + Two Fold(horizontal)";
                

                type[0].text = "One Color printing";
                
                type[1].text = "Four Color printing ";
             
                type[2].text = "Screen Printing";
               
                
            }

            if(ElementValue == "Doctor Files")
            {
                optionlist[0].text = "12 * 18 inches + Greenboard File Paper";
                
                optionlist[1].text = "14 * 20 inches + Greenboard File Paper";
                
                optionlist[2].text = "10 * 15 inches + Greenboard File Paper";
                
                optionlist[3].text = "15 * 12 inches + Greenboard File Paper";
               

                type[0].text = "Terriable";
                
                type[1].text = "Non-Terriable";
              
                type[2].text = "Cardboard File";
             
            }

            if(ElementValue == "Prescription")
            {
                optionlist[0].text = "8 * 10 inches";
               
                optionlist[1].text = "8 * 10 inches + round cut on corner";
              
                optionlist[2].text = "8*10 inches+roundcut on corner+File hole";
               
                optionlist[3].text = "None";
                

                type[0].text = "Presentation Paper+Green cover paper";
               
                type[1].text = "Executive Bond Paper+Green cover paper";
             
                type[2].text = "-";
             
            }
        }
    }
</script>
    </body>
</html>

<?php
if (isset($_POST['update'])) {
	extract($_POST);


	$update = mysqli_query($conn, "update productorderform set
	        Name='" . $name  . "',
			Contact='" . $contact . "',
            Email='" . $email . "',
            Address='" . $address . "',
            ItemName='" . $iname . "',
			DesignId='" . $design . "',
            ItemQuantity='" . $quantity . "',
            ProductSize='" . $optionlist . "',
            PaperGSM='" . $gsm . "',
            ProductType='" . $type . "',
            PrintingSide='" . $fix . "',
            Limination='" . $limi . "',
            ProductMatter='" . $m . "',
			TotalBill='" . $wpn . "'
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
