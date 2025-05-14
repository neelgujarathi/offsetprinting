<html>
    <head>
        <title>Feedback</title>
        <link rel="stylesheet" href="assets/css/styleshow.css">
    </head>

    <body>

        <div class="hero">
            <div class="form-box">
            <style>
                .tbl { border-collapse: collapse; width:700px; }
                .tbl th, .tbl td { padding: 30px; border: solid 2px #777;}
                .tbl th { background-color: purple; color: #fff;}
                .tbl-separate { border-collapse: separate; border-spacing: 5px;}
            </style>
            <center><table id="mytable" class="tbl">
            </div>
        </div>
    </body>
</html>


<?php
 include "configure.php";
 $add  = mysqli_query($conn, "select * from feedbackform") or die(mysqli_error($conn));
 ?>
 <thead>
     <tr><center> <h2> <strong><u><i>Our Customer's Feedbacks:-</i></u></strong> </h2></center><br>
         <th>Sr. No.</th>
         <th>Name</th>
         <th>City</th>
         <th>Our Product Design</th>
         <th>Our Customize Design</th>
         <th>Our Paper Quanlity</th>
         <th>Our Proof Service</th>
         <th>Our Printing Quanlity</th>
         <th>Our Limination Quanlity</th>
         <th>Our Home Delivery Service</th>
         <th>Our Payment Security Service</th>
     </tr>
 </thead>
 <tbody>
     <?php
     $counter = 0;
     while ($row = mysqli_fetch_array($add)) 
     {
         extract($row);
     ?>
         <tr>
             <td scope="row"><?php echo ++$counter; ?></td>
             <td><?php echo $row['Name']; ?></td>
             <td><?php echo $row['City']; ?></td>
             <td><?php echo $row['ProductDesign']; ?></td>
             <td><?php echo $row['CustomizeDesign']; ?></td>
             <td><?php echo $row['PaperQuanlity']; ?></td>
             <td><?php echo $row['ProofService']; ?></td>
             <td><?php echo $row['PrintingQuality']; ?></td>
             <td><?php echo $row['LiminationQuality']; ?></td>
             <td><?php echo $row['HomeDelivery']; ?></td>
             <td><?php echo $row['PaymentSystem']; ?></td>
             </td>
         </tr>
     <?php } ?>

 </tbody>
</table>
</center>
