<html>
    <head>
        
        <title>Product Order Form</title>
       
        <link rel="stylesheet" href="assets/css/styleorder.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>

    <body>
        <div class = "container">
            <h1 class = "form-title">Product Order Form</h1>
        

        <form action = "#" method="post" name="myform" enctype="multipart/form-data">
            <div class="main-user-info">
            <div class="user-input-box">
                    <label>Name</label>
                    <input type = "text" name = "name"  placeholder="Enter name" value="" required>
                </div>

                <div class="user-input-box">
                    <label>Contact</label>
                    <input type = "text" name = "contact" placeholder="Enter contact1" required>
                </div>

                <div class="user-input-box">
                    <label>Email</label>
                    <input type = "text" name = "email"  placeholder="Enter contact2" required>
                </div>

                <div class="user-input-box">
                    <label>Address</label>
                    <textarea name = "address" cols="33" rows="2" required class="nee">  </textarea>
                </div>

                
                <div class = "gender-details-box">
                    <span class="gender-title">Item Name</span>
                    <div class="gender-category">
                        <input type="radio" name = "iname" value="Visiting Cards" onclick="UpdateList(this.value)" id="vc" required>
                        <label>Visiting Cards</label>
                        <input type="radio" name = "iname" value="Wedding" onclick="UpdateList(this.value)" id="wc" required>
                        <label for="no">Wedding </label><br>
                        <input type="radio" name = "iname" value="Doctor Files" onclick="UpdateList(this.value)" id="df" required>
                        <label for="no">Doctor Files</label>
                        &nbsp;&nbsp; <input type="radio" name = "iname" value="Prescription" onclick="UpdateList(this.value)" id="dp" required>
                       <label for="no">Prescription</label><br>
                    </div>
                </div>

                <div class="user-input-box">
                    <label>Design ID</label>
                    <input type = "text" name = "design"  placeholder="Enter design id" required>
                </div>

                <div class="user-input-box">
                    <label>Item Quantity</label>
                    <input type = "text" name = "quantity"  placeholder="Enter item quantity" id ="n" required>
                    </div>


                    <div class="user-input-box">
                    <label>Product Size</label>
                    <select name="optionlist" id="pz">
                        <option>None</option>
                        <option>None</option>
                        <option>None</option>
                        <option>None</option>
                    </select>
                </div>


                    <div class="user-input-box">
                    <label>Paper GSM</label>
                    <select name="gsm" id="pp">
                        <option>180 GSM Paper</option>
                        <option>200 GSM Paper</option>
                        <option>250 GSM Paper</option>
                        <option>300 GSM Paper</option>
                    </select>
                </div>

               
                <div class="user-input-box">
                    <label>Product Type</label>
                    <select name="type" id="pt">
                        <option >Non-Terriable</option>
                        <option >Terriable</option>
                        <option>Card like ATM </option>
                    </select>
                </div>

                <div class = "gender-details-box">
                    <span class="gender-title">Printing Side</span>
                    <div class="gender-category">
                        <input type="radio" name = "fix" id="ps" value="Front Side" required>
                        <label>FrontSide</label>
                        <input type="radio" name = "fix" id="os" value="Front Back Side" required>
                        <label for="no">FrontBackSide</label>
                    </div>
                </div>
  
                <div class="user-input-box">
                    <label>Limination</label>
                    <select name="limi" id="l">
                        <option>Glossy Limination</option>
                        <option>Matt Limination</option>
                        <option>Spot Limination</option>
                        <option>Matt Limination + Spot Limination</option>
                        <option>GLossy Limination + Spot Limination</option>
                    </select>
                </div>


                <div class="user-input-box">
                    <label>Product Matter</label>
                   <input type="file" accept=".jpg, .jpeg, .png" name="m">
                </div>


                <div class="user-input-box">
                    <label>Your Total Bill</label>
                    <input type = "text" name = "wpn"  id="amt">
                </div>
               
            </div>
            <div class = "form-submit-btn">
                <input type ="submit" name = "submit" value = "Place Order" onclick="calculate()"> 
            </div>
         
                <a href="customizevisitingcard.php" class="gender-category" >
                    <p>For Customize Design</p>
                </a>
                <a href="index.html" class="gender-category" >
                    <p>Go Back</p>
                </a>
            </div>
               
        </form>
    </body>
</html>

<script>
    document.getElementById("amt").readOnly = true;
    function calculate()
    {
        var cal;
        var qty = document.getElementById("n").value;
        var typ = document.getElementById("pt").value;
        var limi = document.getElementById("l").value;
        var size = document.getElementById("pz").value;
        

       if(document.getElementById("vc").checked)
       {
        if(typ=="Non-Terriable" && limi=="Glossy Limination" && document.getElementById("ps").checked)
        {
            cal = 2.0*qty+300;
        }
        if(typ=="Non-Terriable" && limi=="Glossy Limination" && document.getElementById("os").checked)
        {
            cal = 2.0*qty+600;
        }
        if(typ=="Terriable" && limi=="Glossy Limination" && document.getElementById("ps").checked)
        {
            cal = 1.6*qty+300;
        }
        if(typ=="Terriable" && limi=="Glossy Limination" && document.getElementById("os").checked)
        {
            cal = 1.6*qty+600;
        }
        if(typ=="Non-Terriable" && limi=="Matt Limination" && document.getElementById("ps").checked)
        {
            cal = 2.2*qty+300;
        }
        if(typ=="Non-Terriable" && limi=="Matt Limination" && document.getElementById("os").checked)
        {
            cal = 2.2*qty+600;
        }
        if(typ=="Terriable" && limi=="Matt Limination" && document.getElementById("ps").checked)
        {
            cal = 1.8*qty+300;
        }
        if(typ=="Terriable" && limi=="Matt Limination" && document.getElementById("os").checked)
        {
            cal = 1.8*qty+600;
        }
        if(typ=="Card like ATM" && limi=="Glossy Limination" && document.getElementById("ps").checked)
        {
            cal = 3.5*qty+300;
        }
        if(typ=="Card like ATM" && limi=="Glossy Limination" && document.getElementById("os").checked)
        {
            cal = 3.5*qty+600;
        }
        if(typ=="Card like ATM" && limi=="Matt Limination" && document.getElementById("ps").checked)
        {
            cal = 3.7*qty+300;
        }
        if(typ=="Card like ATM" && limi=="Matt Limination" && document.getElementById("os").checked)
        {
            cal = 3.7*qty+600;
        }
        if(typ=="Non-Terriable" && limi=="Spot Limination" && document.getElementById("ps").checked)
        {
            cal = 2.7*qty+300;
        }
        if(typ=="Non-Terriable" && limi=="Spot Limination" && document.getElementById("os").checked)
        {
            cal = 2.7*qty+600;
        }
        if(typ=="Terriable" && limi=="Spot Limination" && document.getElementById("ps").checked)
        {
            cal = 2.3*qty+300;
        }
        if(typ=="Terriable" && limi=="Spot Limination" && document.getElementById("os").checked)
        {
            cal = 2.3*qty+600;
        }
        if(typ=="Non-Terriable" && limi=="Matt Limination + Spot Limination" && document.getElementById("ps").checked)
        {
            cal = 4.3*qty+300;
        }
        if(typ=="Non-Terriable" && limi=="Matt Limination + Spot Limination" && document.getElementById("os").checked)
        {
            cal = 4.3*qty+600;
        }
        if(typ=="Terriable" && limi=="Matt Limination + Spot Limination" && document.getElementById("ps").checked)
        {
            cal = 3.8*qty+300;
        }
        if(typ=="Terriable" && limi=="Matt Limination + Spot Limination" && document.getElementById("os").checked)
        {
            cal = 3.8*qty+600;
        }
        if(typ=="Card like ATM" && limi=="Spot Limination" && document.getElementById("ps").checked)
        {
            cal = 4.5*qty+300;
        }
        if(typ=="Card like ATM" && limi=="Spot Limination" && document.getElementById("os").checked)
        {
            cal = 4.5*qty+600;
        }
        if(typ=="Card like ATM" && limi=="Matt Limination + Spot Limination" && document.getElementById("ps").checked)
        {
            cal = 5.1*qty+300;
        }
        if(typ=="Card like ATM" && limi=="Matt Limination + Spot Limination" && document.getElementById("os").checked)
        {
            cal = 5.1*qty+600;
        }
        if(typ=="Card like ATM" && limi=="GLossy Limination + Spot Limination" && document.getElementById("ps").checked)
        {
            cal = 4.8*qty+300;
        }
        if(typ=="Card like ATM" && limi=="GLossy Limination + Spot Limination" && document.getElementById("os").checked)
        {
            cal = 4.8*qty+600;
        }
        if(typ=="Non-Terriable" && limi=="GLossy Limination + Spot Limination" && document.getElementById("ps").checked)
        {
            cal = 4.5*qty+300;
        }
        if(typ=="Non-Terriable" && limi=="GLossy Limination + Spot Limination" && document.getElementById("os").checked)
        {
            cal = 4.5*qty+600;
        }
        if(typ=="Terriable" && limi=="GLossy Limination + Spot Limination" && document.getElementById("ps").checked)
        {
            cal = 4.2*qty+300;
        }
        if(typ=="Terriable" && limi=="GLossy Limination + Spot Limination" && document.getElementById("os").checked)
        {
            cal = 4.2*qty+600;
        }     
       }

       if(document.getElementById("wc").checked)
       {
        if(size=="8 * 6 inches + Single Side" && typ=="One Color printing" && document.getElementById("ps").checked)
        {
            cal = 3.2*qty+300;
        }
        if(size=="8 * 6 inches + Single Side" && typ=="One Color printing" && document.getElementById("os").checked)
        {
            cal = 3.2*qty+600;
        }
        if(size=="12 * 8 inches + Single Side" && typ=="One Color printing" && document.getElementById("ps").checked)
        {
            cal = 4.2*qty+300;
        }
        if(size=="12 * 8 inches + Single Side" && typ=="One Color printing" && document.getElementById("os").checked)
        {
            cal = 4.2*qty+600;
        }
        if(size=="8 * 8 inches + Single Side" && typ=="One Color printing" && document.getElementById("ps").checked)
        {
            cal = 2.2*qty+300;
        }
        if(size=="8 * 8 inches + Single Side" && typ=="One Color printing" && document.getElementById("os").checked)
        {
            cal = 2.2*qty+600;
        }
        if(size=="12 * 8 inches + Two Fold(horizontal)" && typ=="One Color printing" && document.getElementById("ps").checked)
        {
            cal = 5.2*qty+300;
        }
        if(size=="12 * 8 inches + Two Fold(horizontal)" && typ=="One Color printing" && document.getElementById("os").checked)
        {
            cal = 5.2*qty+600;
        }
        if(size=="8 * 6 inches + Single Side" && typ=="Four Color printing" && document.getElementById("ps").checked)
        {
            cal = 5.5*qty+300;
        }
        if(size=="8 * 6 inches + Single Side" && typ=="Four Color printing" && document.getElementById("os").checked)
        {
            cal = 5.5*qty+600;
        }
        if(size=="12 * 8 inches + Single Side" && typ=="Four Color printing" && document.getElementById("ps").checked)
        {
            cal = 5.8*qty+300;
        }
        if(size=="12 * 8 inches + Single Side" && typ=="Four Color printing" && document.getElementById("os").checked)
        {
            cal = 5.8*qty+600;
        }
        if(size=="8 * 8 inches + Single Side" && typ=="Four Color printing" && document.getElementById("ps").checked)
        {
            cal = 5.3*qty+300;
        }
        if(size=="8 * 8 inches + Single Side" && typ=="Four Color printing" && document.getElementById("os").checked)
        {
            cal = 5.3*qty+600;
        }
        if(size=="12 * 8 inches + Two Fold(horizontal)" && typ=="Four Color printing" && document.getElementById("ps").checked)
        {
            cal = 5.9*qty+300;
        }
        if(size=="12 * 8 inches + Two Fold(horizontal)" && typ=="Four Color printing" && document.getElementById("os").checked)
        {
            cal = 5.9*qty+600;
        }
        if(size=="8 * 6 inches + Single Side" && typ=="Screen Printing" && document.getElementById("ps").checked)
        {
            cal = 6.3*qty+300;
        }
        if(size=="8 * 6 inches + Single Side" && typ=="Screen Printing" && document.getElementById("os").checked)
        {
            cal = 6.3*qty+600;
        }
        if(size=="12 * 8 inches + Single Side" && typ=="Screen Printing" && document.getElementById("ps").checked)
        {
            cal = 6.6*qty+300;
        }
        if(size=="12 * 8 inches + Single Side" && typ=="Screen Printing" && document.getElementById("os").checked)
        {
            cal = 6.6*qty+600;
        }
        if(size=="8 * 8 inches + Single Side" && typ=="Screen Printing" && document.getElementById("ps").checked)
        {
            cal = 6.1*qty+300;
        }
        if(size=="8 * 8 inches + Single Side" && typ=="Screen Printing" && document.getElementById("os").checked)
        {
            cal = 6.1*qty+600;
        }
        if(size=="12 * 8 inches + Two Fold(horizontal)" && typ=="Screen Printing" && document.getElementById("ps").checked)
        {
            cal = 6.8*qty+300;
        }
        if(size=="12 * 8 inches + Two Fold(horizontal)" && typ=="Screen Printing" && document.getElementById("os").checked)
        {
            cal = 6.8*qty+600;
        }
       }


       if(document.getElementById("df").checked)
       {
        if(size=="12 * 18 inches + Greenboard File Paper" && typ=="Terriable" && document.getElementById("ps").checked)
        {
            cal = 12*qty+300;
        }
        if(size=="12 * 18 inches + Greenboard File Paper" && typ=="Terriable" && document.getElementById("os").checked)
        {
            cal = 12*qty+700;
        }
        if(size=="14 * 20 inches + Greenboard File Paper" && typ=="Terriable" && document.getElementById("ps").checked)
        {
            cal = 15*qty+300;
        }
        if(size=="14 * 20 inches + Greenboard File Paper" && typ=="Terriable" && document.getElementById("os").checked)
        {
            cal = 15*qty+700;
        }
        if(size=="10 * 15 inches + Greenboard File Paper" && typ=="Terriable" && document.getElementById("ps").checked)
        {
            cal = 11*qty+300;
        }
        if(size=="10 * 15 inches + Greenboard File Paper" && typ=="Terriable" && document.getElementById("os").checked)
        {
            cal = 11*qty+700;
        }
        if(size=="15 * 12 inches + Greenboard File Paper" && typ=="Terriable" && document.getElementById("ps").checked)
        {
            cal = 16*qty+300;
        }
        if(size=="15 * 12 inches + Greenboard File Paper" && typ=="Terriable" && document.getElementById("os").checked)
        {
            cal = 16*qty+700;
        }
        if(size=="12 * 18 inches + Greenboard File Paper" && typ=="Non-Terriable" && document.getElementById("ps").checked)
        {
            cal = 17*qty+300;
        }
        if(size=="12 * 18 inches + Greenboard File Paper" && typ=="Non-Terriable" && document.getElementById("os").checked)
        {
            cal = 17*qty+700;
        }
        if(size=="14 * 20 inches + Greenboard File Paper" && typ=="Non-Terriable" && document.getElementById("ps").checked)
        {
            cal = 20*qty+300;
        }
        if(size=="14 * 20 inches + Greenboard File Paper" && typ=="Non-Terriable" && document.getElementById("os").checked)
        {
            cal = 20*qty+700;
        }
        if(size=="10 * 15 inches + Greenboard File Paper" && typ=="Non-Terriable" && document.getElementById("ps").checked)
        {
            cal = 16*qty+300;
        }
        if(size=="10 * 15 inches + Greenboard File Paper" && typ=="Non-Terriable" && document.getElementById("os").checked)
        {
            cal = 16*qty+700;
        }
        if(size=="15 * 12 inches + Greenboard File Paper" && typ=="Non-Terriable" && document.getElementById("ps").checked)
        {
            cal = 22*qty+300;
        }
        if(size=="15 * 12 inches + Greenboard File Paper" && typ=="Non-Terriable" && document.getElementById("os").checked)
        {
            cal = 22*qty+700;
        }
        if(size=="12 * 18 inches + Greenboard File Paper" && typ=="Cardboard File" && document.getElementById("ps").checked)
        {
            cal = 10*qty+300;
        }
        if(size=="12 * 18 inches + Greenboard File Paper" && typ=="Cardboard File" && document.getElementById("os").checked)
        {
            cal = 10*qty+700;
        }
        if(size=="14 * 20 inches + Greenboard File Paper" && typ=="Cardboard File" && document.getElementById("ps").checked)
        {
            cal = 14*qty+300;
        }
        if(size=="14 * 20 inches + Greenboard File Paper" && typ=="Cardboard File" && document.getElementById("os").checked)
        {
            cal = 14*qty+700;
        }
        if(size=="10 * 15 inches + Greenboard File Paper" && typ=="Cardboard File" && document.getElementById("ps").checked)
        {
            cal = 11*qty+300;
        }
        if(size=="10 * 15 inches + Greenboard File Paper" && typ=="Cardboard File" && document.getElementById("os").checked)
        {
            cal = 11*qty+700;
        }
        if(size=="15 * 12 inches + Greenboard File Paper" && typ=="Cardboard File" && document.getElementById("ps").checked)
        {
            cal = 17*qty+300;
        }
        if(size=="15 * 12 inches + Greenboard File Paper" && typ=="Cardboard File" && document.getElementById("os").checked)
        {
            cal = 17*qty+700;
        }
       }

       if(document.getElementById("dp").checked)
       {
        if(size=="8 * 10 inches" && typ=="Presentation Paper+Green cover paper" && document.getElementById("ps").checked)
        {
            cal = 3.0*qty+300;
        }
        if(size=="8 * 10 inches + round cut on corner" && typ=="Presentation Paper+Green cover paper" && document.getElementById("ps").checked)
        {
            cal = 4.0*qty+300;
        }
        if(size=="8*10 inches+roundcut" && typ=="Presentation Paper+Green cover paper" && document.getElementById("ps").checked)
        {
            cal = 5.0*qty+300;
        }
        if(size=="None" && typ=="Presentation Paper+Green cover paper" && document.getElementById("ps").checked)
        {
            cal = 2.0*qty+300;
        }
        if(size=="8 * 10 inches" && typ=="Executive Bond Paper" && document.getElementById("ps").checked)
        {
            cal = 5.0*qty+300;
        }
        if(size=="8 * 10 inches + round cut on corner" && typ=="Executive Bond Paper" && document.getElementById("ps").checked)
        {
            cal = 4.5*qty+300;
        }
        if(size=="8*10 inches+roundcut" && typ=="Executive Bond Paper" && document.getElementById("ps").checked)
        {
            cal = 6.0*qty+300;
        }
        if(size=="None" && typ=="Executive Bond Paper" && document.getElementById("ps").checked)
        {
            cal = 3.0*qty+300;
        }
       }

       var input = document.getElementById('amt');
       input.setAttribute("value","Rs:- "+cal+"/-");
       
    }

    function UpdateList(ElementValue)
    {
        with(document.forms.myform)
        {
            if(ElementValue == "Visiting Cards")
            {
                document.getElementById("os").disabled = false;
                document.getElementById("l").disabled = false;
                document.getElementById("pz").disabled = true;
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
                document.getElementById("os").disabled = true;
                document.getElementById("l").disabled = false;
                document.getElementById("pz").disabled = false;
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
                document.getElementById("os").disabled = false;
                document.getElementById("l").disabled = false;
                document.getElementById("pz").disabled = false;
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
                if(document.getElementById("dp").checked)
                {
                    document.getElementById("os").disabled = true;
                    document.getElementById("l").disabled = true;
                    document.getElementById("pz").disabled = false;
                }
                optionlist[0].text = "8 * 10 inches";
               
                optionlist[1].text = "8 * 10 inches + round cut on corner";
              
                optionlist[2].text = "8*10 inches+roundcut";
               
                optionlist[3].text = "None";
                

                type[0].text = "Presentation Paper+Green cover paper";
               
                type[1].text = "Executive Bond Paper";
             
                type[2].text = "-";
             
            }
        }
    }
</script>



<?php

 include "configure.php";

 if (isset($_POST['submit'])) {
     extract($_POST);

     $filename =  $_FILES["m"]["name"];
     $filesize = $_FILES["m"]["size"];
     $tempname = $_FILES["m"]["tmp_name"];
     $folder = "upload/".$filename;

     move_uploaded_file( $tempname,  $folder);

     $add = mysqli_query($conn, "insert into productorderform (Name, Contact, Email, Address, ItemName, DesignId, ItemQuantity, ProductSize	, PaperGSM, ProductType	, PrintingSide, Limination, ProductMatter, TotalBill) 
     values ('$name', '$contact', '$email', '$address', '$iname', '$design', '$quantity', '$optionlist', '$gsm', '$type',  '$fix',  '$limi', '$folder', '$wpn')") or die(mysqli_error($conn));
 
     if ($add) {
         echo "<script>;";
         echo "window.alert('Your Order is Placed.....');";
         echo 'window.location.href = "Paymentform.php";';
         echo "</script>";
     } else {
         echo "<script>;";
         echo "window.alert('Data error....!');";
         echo "</script>";
     }
 }
?>
