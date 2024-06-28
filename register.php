<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>REGISTRATION</title>
   <link rel="stylesheet" href="css/regs.css" type="text/css">
</head>
<body>
    
<?php

require_once('connection.php');
if(isset($_POST['regs']))
{
    $fname=mysqli_real_escape_string($con,$_POST['fname']);
    $lname=mysqli_real_escape_string($con,$_POST['lname']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $lic=mysqli_real_escape_string($con,$_POST['lic']);
    $ph=mysqli_real_escape_string($con,$_POST['ph']);
   
    $pass=mysqli_real_escape_string($con,$_POST['pass']);
    $cpass=mysqli_real_escape_string($con,$_POST['cpass']);
    $gender=mysqli_real_escape_string($con,$_POST['gender']);
    $Pass=md5($pass);
    if(empty($fname)|| empty($lname)|| empty($email)|| empty($lic)|| empty($ph)|| empty($pass) || empty($gender))
    {
        echo '<script>alert("please fill the place")</script>';
    }
    else{
        if($pass==$cpass){
        $sql2="SELECT *from users where EMAIL='$email'";
        $res=mysqli_query($con,$sql2);
        if(mysqli_num_rows($res)>0){
            echo '<script>alert("EMAIL ALREADY EXISTS PRESS OK FOR LOGIN!!")</script>';
            echo '<script> window.location.href = "index1.php";</script>';

        }
        else{
        $sql="insert into users (FNAME,LNAME,EMAIL,LIC_NUM,PHONE_NUMBER,PASSWORD,GENDER) values('$fname','$lname','$email','$lic',$ph,'$Pass','$gender')";
        $result = mysqli_query($con,$sql);
          

          // $to_email = $email;
          // $subject = "NO-REPLY";
          // $body = "THIS MAIL CONTAINS YOUR AUTHENTICATION DETAILS....\nYour Password is $pass and Your Registered email is $to_email"
          //          ;
          // $headers = "From: sender email";
          
          // if (mail($to_email, $subject, $body, $headers))
          
          // {
          //     echo "Email successfully sent to $to_email...";
          // }
          
          // else
 
          // {
          // echo "Email sending failed!";
          // }
        if($result){
            echo '<script>alert("Registration Successful Press ok to login")</script>';
            echo '<script> window.location.href = "index1.php";</script>';       
           }
        else{
            echo '<script>alert("please check the connection")</script>';
        }
    
        }

        }
        else{
            echo '<script>alert("PASSWORD DID NOT MATCH")</script>';
            echo '<script> window.location.href = "register.php";</script>';
        }
    }
}


?>



  <style>
      body{
        width: 100%;
    background-image: url(images/car1.jpg);
    background-position: center;
    background-size: cover;
    height: 100vh;
    animation: infiniteScrollBg 50s linear infinite;
      }
      input#psw{
    width:300px;
    border:1px solid #ddd;
    border-radius: 3px;
    outline: 0;
    padding: 7px;
    background-color: #fff;
    box-shadow:inset 1px 1px 5px rgba(0,0,0,0.3);
}
input#cpsw{
    width:300px;
    border:1px solid #ddd;
    border-radius: 3px;
    outline: 0;
    padding: 7px;
    background-color: #fff;
    box-shadow:inset 1px 1px 5px rgba(0,0,0,0.3);
}
  #message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  
  width: 400px;
  margin-left:1000px;
  margin-top: -500px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" icon when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
.register{
    background-color: rgba(0,0,0,0.6);
    width: 1100px;
    font-size: 18px;
    border-radius: 10px;
    border: 1px solid rgba(255,255,255,0.3);
    box-shadow: 2px 2px 15px rgba(0,0,0,0.3);
    color: #fff;
    margin: auto;
    margin-left: -350px;
padding-left: 5px;
padding-right: 15px;
}

label{
    font-family: sans-serif;
    font-size: 18px;
    font-style:italic;
    margin-left: 20px;
}

input#name{
    width:300px;
    border:1px solid #ddd;
    border-radius: 3px;
    outline: 0;
    padding: 7px;
    background-color: #fff;
    box-shadow:inset 1px 1px 5px rgba(0,0,0,0.3);
    margin-left: 10px;
}

.btnn{
    width: 400px;
    height: 40px;
    background: #5072A7;
    border:none;
    margin-top: 30px;
    margin-left: 300px;
    font-size: 18px;
    border-radius: 5px;
    cursor: pointer;
    color:#fff;
    transition: 0.4s ease;
}


.btnn a{
    text-decoration: none;
    color: white;
    font-weight: bold;
}

.btnn:hover{
  background-color: black;
}

#back{
    width: 400px;
    height: 40px;
    background: deepskyblue;
    border:none;
    margin-top: 10px;
    margin-left: 300px;
    font-size: 18px;
   border-radius: 5px;

}

#back:hover{
    background: #fff;
    color:#5072A7;
}

#back a{
    text-decoration: none;
    color: black;
    font-weight: bold;
}

#fam{
    color: white;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 50px;
    padding-left: 50px;
    margin-top: 50px;
    text-align: center;
    letter-spacing: 2px;
    display: inline-table ;
    margin-left: 390px;
}

</style> 

   
    <h1 id="fam">REGISTER TO JOIN US!</h1>
 <div class="main">
        
        <div class="register">
        <h2>Register Here</h2>
        
        <form id="register" action="register.php" method="POST">    
            <label>First Name : </label>
            
            <input type ="text" name="fname"
            id="name" placeholder="Enter Your First Name" required>
            

            <label>Last Name : </label>
            
            <input type ="text" name="lname"
            id="name" placeholder="Enter Your Last Name" required>
            <br><br>

            <label>Email : </label>
            
            <input type="email" name="email"
            id="name" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="ex: example@ex.com"placeholder="Enter Valid Email" required>
            <br><br>
            
            <label>Your License number : </label>
            
            <input type="text" name="lic"
            id="name" placeholder="Enter Your License number" required>
            

            <label>Phone Number : </label>
            
            <input type="tel" name="ph" maxlength="10" onkeypress="return onlyNumberKey(event)"
            id="name" placeholder="Enter Your Phone Number" required>
            <br><br>

            <label>Password : </label>
            
            <input type="password" name="pass" maxlength="12"
            id="psw" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            
            <label>Confirm Password : </label>
            
            <input type="password" name="cpass" 
            id="cpsw" placeholder="Renter the password" required>
            <br><br>
            <tr>
                <td><label>Gender : </label></td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td>
                    <label for="one">Male</label>
                    <input type="radio" id="input_enabled" name="gender" value="male" style="width:200px">
                </td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
                <td>
                    <label for="two">Female</label>
                    <input type="radio" id="input_disabled" name="gender" value="female" style="width:160px" />
                </td>
            </tr>
            <br>

            <input type="submit" class="btnn"  value="REGISTER NOW!" name="regs" style="background-color: cadetblue;color: white"><br>
            <button id="back"><a href="index1.php">BACK TO HOME</a></button>
        
        
        </input>
            
        </form>
        </div> 
    </div>
    <div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>  
<script>
    function onlyNumberKey(evt) {
          
        // Only ASCII character in that range allowed
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }
</script>
</body>
</html>