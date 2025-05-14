<html>
    <head>
        
        <title>Feedback</title>
       
        <link rel="stylesheet" href="assets/css/stylefeedback.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>

    <body>
        <div class = "container">
            <h1 class = "form-title">Customer Feedback Form</h1>
        

        <form action = "#" method="post" name="myform" enctype="multipart/form-data">
            <div class="main-user-info">
            <div class="user-input-box">
                    <label>Name</label>
                    <input type = "text" name = "name"  placeholder="Enter Customer name" value="" required>
                </div>

                <div class="user-input-box">
                    <label>City</label>
                    <input type = "text" name = "city"  placeholder="Enter City" required>
                </div>

                <div class = "gender-details-box">
                    <br><span class="gender-title">How Was Our Product Design?</span>
                    <div class="gender-category">
                        <input type="radio" name = "design" value="Bad" required>
                        <label>Bad</label>
                        &nbsp;&nbsp;<input type="radio" name = "design" value="Average" required>
                        <label for="no">Average </label><br>
                        <input type="radio" name = "design" value="Good" required>
                        <label for="no">Good</label>
                        <input type="radio" name = "design" value="Excellent" required>
                        <label for="no">Excellent</label><br>
                    </div>
                </div>


                <div class = "gender-details-box">
                    <br><span class="gender-title">How Was Customize Design?</span>
                    <div class="gender-category">
                        <input type="radio" name = "cdesign" value="Bad" required>
                        <label>Bad</label>
                        &nbsp;&nbsp;<input type="radio" name = "cdesign" value="Average" required>
                        <label for="no">Average </label><br>
                        <input type="radio" name = "cdesign" value="Good" required>
                        <label for="no">Good</label>
                        <input type="radio" name = "cdesign" value="Excellent" required>
                        <label for="no">Excellent</label><br>
                    </div>
                </div>


                <div class = "gender-details-box">
                    <br><span class="gender-title">How Was Our Paper Quality?</span>
                    <div class="gender-category">
                        <input type="radio" name = "paper" value="Bad" id="vc" required>
                        <label>Bad</label>
                        &nbsp;&nbsp;<input type="radio" name = "paper" value="Average" id="wc" required>
                        <label for="no">Average </label><br>
                        <input type="radio" name = "paper" value="Good" id="df" required>
                        <label for="no">Good</label>
                        <input type="radio" name = "paper" value="Excellent" id="dp" required>
                        <label for="no">Excellent</label><br>
                    </div>
                </div>


                <div class = "gender-details-box">
                   <br> <span class="gender-title">How Was Our Proof Service?</span>
                    <div class="gender-category">
                        <input type="radio" name = "proof" value="Bad" id="vc" required>
                        <label>Bad</label>
                        &nbsp;&nbsp;<input type="radio" name = "proof" value="Average" id="wc" required>
                        <label for="no">Average </label><br>
                        <input type="radio" name = "proof" value="Good" id="df" required>
                        <label for="no">Good</label>
                        <input type="radio" name = "proof" value="Excellent" id="dp" required>
                        <label for="no">Excellent</label><br>
                    </div>
                </div>

                <div class = "gender-details-box">
                   <br> <span class="gender-title">How Was our Printing Quality?</span>
                    <div class="gender-category">
                        <input type="radio" name = "gsm" value="Bad" id="vc" required>
                        <label>Bad</label>
                        &nbsp;&nbsp;<input type="radio" name = "gsm" value="Average" id="wc" required>
                        <label for="no">Average </label><br>
                        <input type="radio" name = "gsm" value="Good" id="df" required>
                        <label for="no">Good</label>
                        <input type="radio" name = "gsm" value="Excellent" id="dp" required>
                        <label for="no">Excellent</label><br>
                    </div>
                </div>



                <div class = "gender-details-box">
                   <br> <span class="gender-title">How Was Limination Quality?</span>
                    <div class="gender-category">
                        <input type="radio" name = "limi" value="Bad" id="vc" required>
                        <label>Bad</label>
                        &nbsp;&nbsp;<input type="radio" name = "limi" value="Average" id="wc" required>
                        <label for="no">Average </label><br>
                        <input type="radio" name = "limi" value="Good" id="df" required>
                        <label for="no">Good</label>
                        <input type="radio" name = "limi" value="Excellent" id="dp" required>
                        <label for="no">Excellent</label><br>
                    </div>
                </div>


                <div class = "gender-details-box">
                    <br><span class="gender-title">How Was Our Home Delivery?</span>
                    <div class="gender-category">
                        <input type="radio" name = "home" value="Bad" required>
                        <label>Bad</label>
                        &nbsp;&nbsp;<input type="radio" name = "home" value="Average" required>
                        <label for="no">Average </label><br>
                        <input type="radio" name = "home" value="Good" required>
                        <label for="no">Good</label>
                        <input type="radio" name = "home" value="Excellent" required>
                        <label for="no">Excellent</label><br>
                    </div>
                </div>

                <div class = "gender-details-box">
                    <br><span class="gender-title">How Was Payment System?</span>
                    <div class="gender-category">
                        <input type="radio" name = "Payment" value="Bad" required>
                        <label>Bad</label>
                        &nbsp;&nbsp;<input type="radio" name = "Payment" value="Average" required>
                        <label for="no">Average </label><br>
                        <input type="radio" name = "Payment" value="Good" required>
                        <label for="no">Good</label>
                        <input type="radio" name = "Payment" value="Excellent" required>
                        <label for="no">Excellent</label><br>
                    </div>
                </div>
            </div>
            <div class = "form-submit-btn">
                <input type ="submit" name = "submit" value = "Submit"> 
            </div>
            <center><a href="about.html">
                    <p id="an">Go Back</p>
                    </a></center>
        </div>
        </form>
    </body>
</html>



<?php

 include "configure.php";

 if (isset($_POST['submit'])) {
     extract($_POST);

     $add = mysqli_query($conn, "insert into feedbackform (Name, City, ProductDesign, CustomizeDesign, PaperQuanlity, ProofService,	PrintingQuality, LiminationQuality, HomeDelivery, PaymentSystem) 
     values ('$name','$city', '$design', '$cdesign','$paper','$proof','$gsm', '$limi', '$home', '$Payment')") or die(mysqli_error($conn));
 
     if ($add) {
         echo "<script>;";
         echo "window.alert('Your feedback is Recorded...');";
         echo 'window.location.href = "feedbackform.php";';
         echo "</script>";
     } else {
         echo "<script>;";
         echo "window.alert('Data error....!');";
         echo "</script>";
     }
 }
?>
