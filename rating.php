<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/stylerate.css">
        <title>Rating</title>
    </head>
    <body>
        <div class="wrapper">
            <h3> Give Rating For Our Website</h3>
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="rating">
                    <input type="number" name="rating" hidden>
                    <i class="bx bx-star star" style="--i: 0;"></i>
                    <i class="bx bx-star star" style="--i: 1;"></i>
                    <i class="bx bx-star star" style="--i: 2;"></i>
                    <i class="bx bx-star star" style="--i: 3;"></i>
                    <i class="bx bx-star star" style="--i: 4;"></i>
                </div>
                <textarea name="name" cols="2" rows="1" placeholder="Customer Name....." required></textarea>
                <textarea name="opinion" cols="30" rows="5" placeholder="Your Opinion....." required></textarea>
                <div class="btn-group">
                    <input type="submit" name="submit" value="Submit" class="btn submit">
                    <button type="reset" class="btn cancel">Cancel</button>
                    <a href="about.html">Go Back</a>
                </div>
            </form>
        </div>
        <script src="assets/js/script.js"></script>
    </body>
</html>

<?php

 include "configure.php";

 if (isset($_POST['submit'])) {
     extract($_POST);

     $add = mysqli_query($conn, "insert into feedbackform (Name, rating, feedback) 
     values ('$name', '$rating', '$opinion')") or die(mysqli_error($conn));
 
     if ($add) {
         echo "<script>;";
         echo "window.alert('Your feedback is Recorded...');";
         echo 'window.location.href = "rating.php";';
         echo "</script>";
     } else {
         echo "<script>;";
         echo "window.alert('Data error....!');";
         echo "</script>";
     }
 }
?>