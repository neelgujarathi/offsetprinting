<html>
    <head><title>Registration Form</title>
        <link rel="stylesheet" href="assets/css/style.css">
        
        <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
        
      </head>
    <body>
        <div class = "container">
            <div class = "title">Registration Form</div>
            <br>
            <form action = "#" name = "myform" method="post" onsubmit="return validateform()" id = "formID">
                <div class = "user-details">
                    <div class = "input-box">
                        <span class = "details"> Full Name</span>
                        <input type="text" name="std_name" placeholder="Enter your name" class="validate[required,custom[onlyLetterSp]] text-input" >
                    </div>

                    <div class = "input-box">
                        <span class = "details"> Contact</span>
                        <input type="text" name="std_contact" placeholder="Enter your contact" class="validate[required,custom[phone]] text-input"  >
                    </div>


                    <div class = "input-box">
                        <span class = "details"> Email</span>
                        <input type="email" name="std_email" placeholder="Enter your email" class="validate[required,custom[email]]">
                    </div>

                    <div class = "input-box">
                        <span class = "details"> Address</span>
                        <textarea name="stud_address" cols="32" rows="3"></textarea>
                    </div>

                    <div class = "input-box">
                        <span class = "details">City</span>
                        <select name = "city">
                            <option value="" >Select Option</option>
                            <option value="Pune"class="validate[required,custom[onlyLetterSp]] text-input" >Pune </option >
                            <option value="Nashik" class="validate[required,custom[onlyLetterSp]] text-input">Nashik</option>
                            <option value="Mumbai"class="validate[required,custom[onlyLetterSp]] text-input" >Mumbai</option>
                        </select>
                    </div>


                    <div class = "input-box">
                        <span class = "details"> DOB</span>
                        <input type="date" name="std_dob" placeholder="Enter your birth date" class="validate[required,custom[date]]">
                    </div>


                    <div class = "input-box">
                        <span class = "details"> Username</span>
                        <input type="text"name="std_username" placeholder="Enter your uesrname" class="validate[required,custom[onlyLetterSp]] text-input">
                    </div>

                    <div class = "input-box">
                        <span class = "details"> Password</span>
                        <input type="password" name="std_password" placeholder="Enter password" class="validate[required] text-input">
                    </div>

                    <div class = "gender-details">
                    <input type = "radio" name = "gender" value ="male" id = "dot-1">
                    <input type = "radio" name = "gender" value ="female" id = "dot-2">
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
                        <select name = "language">
                            <option value="" >Select Language</option>
                            <option value="English"class="validate[required,custom[onlyLetterSp]] text-input" >English </option >
                            <option value="Marathi" class="validate[required,custom[onlyLetterSp]] text-input">Marathi</option>
                            <option value="Hindi"class="validate[required,custom[onlyLetterSp]] text-input" >Hindi</option>
                            <option value="Janpanese"class="validate[required,custom[onlyLetterSp]] text-input" >Janpanese</option>
                            <option value="Spanish"class="validate[required,custom[onlyLetterSp]] text-input" >Spanish</option> 
                            <option value="French"class="validate[required,custom[onlyLetterSp]] text-input" >French</option> 
                            <option value="Arabic"class="validate[required,custom[onlyLetterSp]] text-input" >Arabic</option>
                        </select>
                    </div>
                </div>

                <div class = "input-box">
                        <br><input type="checkbox" name="term" value="Accepted" required> <a href="terms&conditions.html">&nbsp;&nbsp;&nbsp;I Accept Terms & Conditions.</a>
                    </div>

                <div class = "button">
                    <input type = "submit" name = "Register" value = "Register" onclick="validateform()">
                </div>
                <center><a href="index.html">
                    <p id="an">Go Back</p>
                    </a></center>
            </form>
        </div>
             
    </body>
</html>

<script>
    function validateform()
    {  
    var name=document.myform.std_name.value;  
    if(name=="")
    {
        alert("Please enter your name...");
        return false;
    }
    
    var contact=document.myform.std_contact.value;  
    if(contact=="")
    {
        alert("Please enter your contact number...");
        return false;
    }
    
    var email=document.myform.std_email.value;  
    if(email=="")
    {
        alert("Please enter your email address...");
        return false;
    }
    
    var address=document.myform.stud_address.value;  
    if(address=="")
    {
        alert("Please enter your address...");
        return false;
    }
    

    var city=document.myform.city.value;  
    if(city=="")
    {
        alert("Please enter your city...");
        return false;
    }
    
    var DOB=document.myform.std_dob.value;  
    if(DOB=="")
    {
        alert("Please enter your Birth date...");
        return false;
    }
    
    var username=document.myform.std_username.value;  
    if(username=="")
    {
        alert("Please enter your username...");
        return false;
    }
    
    var password=document.myform.std_password.value;  
    if(password=="")
    {
        alert("Please enter your password...");
        return false;
    }
    
    }
    </script>

<?php
 include "config.php";

 if (isset($_POST['Register'])) {
     extract($_POST);
 
     $add = mysqli_query($conn, "insert into registrationform (Name, Contact, Email, Address, City, DOB, Username, Password, Gender, Language, Conditions)
     values ('$std_name', '$std_contact', '$std_email', '$stud_address', '$city', '$std_dob', '$std_username', '$std_password', '$gender', '$language', '$term')") or die(mysqli_error($conn));
  
     if ($add) {
         echo "<script>;";
         echo "window.alert('Your Registration Process Successful....!');";
         echo 'window.location.href = "RegistractionForm.php";';
         echo "</script>";
     } else {
         echo "<script>;";
         echo "window.alert('Data error....!');";
         echo "</script>";
     }
 }
?>