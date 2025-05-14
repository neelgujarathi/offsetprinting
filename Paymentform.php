<html>
    <head>
        <title>Payment Form</title>
        <link rel="stylesheet" href="assets/css/stylepayment.css">
    </head>

    <body>

        <div class="hero">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <input type="button" name="bt1" value="OFF" class="toggle-btn" onclick="login()">
                    <input type="button" name="bt2" value="ON" class="toggle-btn" onclick="register()">
                </div>

                <form id="login" class="input-group" method="post">
                    <div class="title"><center><h3>Offline Payment Form</h3></center></div><br>
                    <input type="text" name="lname" class="input-field" placeholder="Customer Name" required>
                    <input type="text" name="lcontact" class="input-field" placeholder="Customer Contact" required>
                    <input type="text" name="lcity" class="input-field" placeholder="Customer City" required>
                    <input type="text" name="lpname" class="input-field" placeholder="Product Name" required>
                    <input type="text" name="lpq" class="input-field" placeholder="Product Quantity" required>
                    <input type="text" name="lci" class="input-field" placeholder="Customer Order ID" required>
                    <input type="text" name="lod" class="input-field" placeholder="Order Date" required><br><br>
                    <button type="submit" class="submit-btn" name="Submit">Submit</button>
                    <center><a href="index.html">
                    <p id="an">Go Back</p>
                    </a></center>
                </form>

                <form id="register" class="input-group" method="post">
                    <div class="title"><center><h3>Online Payment Form</h3></center></div><br>
                    <input type="text" class="input-field" placeholder="Customer Name" required name="rname">
                    <input type="text" class="input-field" placeholder="Customer Contact" required name="rcontact">
                    <input type="text" class="input-field" placeholder="Customer City" required name="rcity">
                    <input type="text" class="input-field" placeholder="Product Name" required name="rpn">
                    <input type="text" class="input-field" placeholder="Product Quantity" required name="rpq">
                    <input type="text" class="input-field" placeholder="Customer Order ID" required name="rro">
                    <input type="text" class="input-field" placeholder="GooglePay, PhonePay or NFTE" required name="gpn"><br><br>
                    <button type="submit" class="submit-btn" onclick="openPopup()" name="Process">Process</button>
                  
                    <div class = "popup" id="popup">
                        <img src="assets/images/tick.png">
                        <h2><strong>Thank You</strong></h2>
                        <p><h7>Thank you for used our services. Your order is placed now.</h7></p>
                        
                        <center><button type = "button" onclick="closePopup()"> Ok</button></center>
                    </div>
                    <center><a href="detailes.html"><p id="an">For Bank Details</p></a></center>
                    <center><a href="index.html">
                    <p id="an">Go Back</p>
                    </a></center>
                </form>
            </div>
        </div>

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

            
            let popup = document.getElementById("popup");

            function openPopup()
            {
                popup.classList.add("open-popup");
            }

            function closePopup()
            {
                popup.classList.remove("open-popup");
            }
        </script>
    </body>
</html>

<?php
 include "config.php";

 if (isset($_POST['Submit'])) {
     extract($_POST);
 
     $add = mysqli_query($conn, "insert into offlinepayment (Name, Contact, City, ProductName, ProductQuantity, OrderId, OrderDate)
     values ('$lname','$lcontact','$lcity', '$lpname', '$lpq','$lci', '$lod')") or die(mysqli_error($conn));
 
     if ($add) {
         echo "<script>;";
         echo "window.alert('Your Payment Process Successfully Done!!!');";
         echo 'window.location.href = "Paymentform.php";';
         echo "</script>";
     } else {
         echo "<script>;";
         echo "window.alert('Data error....!');";
         echo "</script>";
     }
 }

 if (isset($_POST['Process'])) {
    extract($_POST);

    $add = mysqli_query($conn, "insert into onlinepayment (Name, Contact, City, ProductName, ProductQuantity, OrderId, PaymentMode	)
    values ('$rname','$rcontact','$rcity', '$rpn', '$rpq','$rro', '$gpn')") or die(mysqli_error($conn));

    if ($add) {
        echo "<script>;";
        echo "window.alert('Your Payment Process Successfully Done!!!');";
        echo 'window.location.href = "Paymentform.php";';
        echo "</script>";
    } else {
        echo "<script>;";
        echo "window.alert('Data error....!');";
        echo "</script>";
    }
}
?>