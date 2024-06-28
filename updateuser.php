<?php

include "connection.php";
$email=$_GET['id'];
$select="select * from users where email='$email'";
$data= mysqli_query($con,$select);
$row=mysqli_fetch_array($data);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>REGISTRATION</title>
   <link rel="stylesheet" href="css/regs.css" type="text/css">
</head>
<body>
    

<style>
      body{
        /* background:  #fff; */
        background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);
        background-size: auto;
         background-position:unset;
         /* background-repeat: ; */
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

h1{
  margin-left: 36%;
}

.register{
    background-color: rgba(0,0,0,0.6);
    width: 100%;
    font-size: 18px;
    border-radius: 10px;
    border: 1px solid rgba(255,255,255,0.3);
    box-shadow: 2px 2px 15px rgba(0,0,0,0.3);
    color: #fff;
    margin: auto;

}
</style> 

    <button id="back"><a href="adminvehicle.php">HOME</a></button>
    <h1 id="fam">JOIN OUR FAMILY OF CARS!</h1>
 <div class="main">
        
        <div class="register">
        <h2>Update Here</h2>
        
        <form id="register" method="POST">    
            <label>First Name : </label>
            <br>
            <input value="<?php echo $row['FNAME'] ?>" type ="text" name="fname"
            id="name" placeholder="Enter Your First Name" required>
            <br><br>

            <label>Last Name : </label>
            <br>
            <input value="<?php echo $row['LNAME'] ?>" type ="text" name="lname"
            id="name" placeholder="Enter Your Last Name" required>
            <br><br>

            <label>Email : </label>
            <br>
            <input value="<?php echo $row['EMAIL'] ?>" type="email" name="email"
            id="name" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="ex: example@ex.com"placeholder="Enter Valid Email" required>
            <br><br>
            
            <label>Your License number : </label>
            <br>
            <input value="<?php echo $row['LIC_NUM'] ?>" type="text" name="lic"
            id="name" placeholder="Enter Your License number" required>
            <br><br>

            <label>Phone Number : </label>
            <br>
            <input value="<?php echo $row['PHONE_NUMBER'] ?>" type="tel" name="phone" maxlength="10" onkeypress="return onlyNumberKey(event)"
            id="name" placeholder="Enter Your Phone Number" required>
            <br><br> 

            <!-- <label>Password : </label>
            <br>
            <input type="password" name="pass" maxlength="12"
            id="psw" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            <br><br>
            <label>Confirm Password : </label>
            <br>
            <input type="password" name="cpass" 
            id="cpsw" placeholder="Renter the password" required>
            <br><br> -->
            <!-- <tr>
                <td><label">Gender : </label></td><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td>
                    <label for="one">Male</label>
                    <input type="radio" id="input_enabled" name="gender" value="male" style="width:200px">
                </td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
                <td>
                    <label for="two">Female</label>
                    <input value="<?php //echo $row['GENDER'] ?>" type="radio" id="input_disabled" name="gender" value="female" style="width:160px" />
                </td>
            </tr>
            <br><br> -->

            <input type="submit" class="btnn"  value="UPDATE" name="submit" style="background-color: #5072A7;color: white">
            
        </input>
            
        </form>
        </div> 
    </div>
  

    <?php
    if(isset($_POST['submit'])){
    $firstname=$_POST["fname"];
    $lastname=$_POST["lname"];
    $email=$_POST["email"];
    $lic=$_POST["lic"];
    $phone=$_POST["phone"];
    //$gender=$_POST["gender"];
    $update= "update users set EMAIL='$email', FNAME='$firstname', LNAME='$lastname', EMAIL='$email', LIC_NUM='$lic', PHONE_NUMBER='$phone' where EMAIL='$email'";
    $result= mysqli_query($con,$update);
    echo '<script>alert("USER UPDATED SUCCESFULLY")</script>';
    echo '<script> window.location.href = "adminusers.php";</script>';
    
}
?>
</body>
</html>