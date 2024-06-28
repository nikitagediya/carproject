<?php

include "connection.php";
$id=$_GET['id'];
$select="select * from cars where car_id='$id'";
$data= mysqli_query($con,$select);
$row=mysqli_fetch_array($data);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRATOR</title>
</head>
<body>
<style>
*{
    margin: 0;
    padding: 0;

}
body{
    /* background-image: url("../images/regs.jpg"); */
    background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);
    
    background-size: cover;
    background-position: center;
    /* margin-top: 0px; */
    
}
.main{
    width: 400px;
    margin: 100px auto 0px auto;
    margin-top: 30px;
}
.btnn{
    width: 240px;
    height: 40px;
    background: #5072A7;
    border:none;
    margin-top: 30px;
    margin-left: 40px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color:#fff;
    transition: 0.4s ease;
}

.btnn:hover{
    background: #fff;
    color:#5072A7;
}

.btnn a{
    text-decoration: none;
    color: black;
    font-weight: bold;
}

h2{
    text-align: center;
    padding: 20px;
    font-family: sans-serif;

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

form#register{
    margin: 40px;
    margin-top: 10px;

}

label{
    font-family: sans-serif;
    font-size: 18px;
    font-style: italic;
}

input#name{
    width:300px;
    border:1px solid #ddd;
    border-radius: 3px;
    outline: 0;
    padding: 7px;
    background-color: #fff;
    box-shadow:inset 1px 1px 5px rgba(0,0,0,0.3);
}


#back{
    width: 100px;
    height: 40px;
    background: #5072A7;
    border:none;
    margin-top: 10px;
    margin-left: 20px;
    font-size: 18px;
   

}


#back a{
    text-decoration: none;
    color: black;
    font-weight: bold;
}

#fam{
    color: #5072A7;
    font-family: 'Times New Roman';
    font-size: 50px;
    padding-left: 20px;
    margin-top:-10px;
    text-align: center;
    letter-spacing: 2px;
    display: inline;
    margin-left: 250px;
}

.reg{
    width: 100%;
}



</style>






<button id="back"><a href="adminvehicle.php">HOME</a></button> 
    
 <div class="main">
        
        <div class="register">
        <h2>Enter Details Of New Car</h2>
        <form id="register"  method="POST" enctype="multipart/form-data">    
            <label>Car Name : </label>
            <br>
            <input value="<?php echo $row['CAR_NAME'] ?>"  type ="text" name="carname"
            id="name" placeholder="Enter Car Name" required>
            <br><br>

            <label>Fuel Type : </label>
            <br>
            <input value="<?php echo $row['FUEL_TYPE'] ?>" type ="text" name="ftype"
            id="name" placeholder="Enter Fuel Type" required>
            <br><br>

            <label>Capacity : </label>
            <br>
            <input value="<?php echo $row['CAPACITY'] ?>"  type="number" name="capacity" min="1"
            id="name" placeholder="Enter Capacity Of Car" required>
            <br><br>
            
            <label>Price : </label>
            <br>
            <input value="<?php echo $row['PRICE'] ?>" type="number" name="price" min="1"
            id="name" placeholder="Enter Price Of Car for One Day(in rupees)" required>
            <br><br>

            <!-- <label>Car Image : </label>
            <br>
            <input value="<?php echo $row['CAR_IMG'] ?>"  type="file" name="carimage" required>
           <br><br>  -->

            <input type="submit" class="btnn"  value="UPDATE CAR" name="submit">
            
        
        
        </input>
            
        </form>
        </div> 
    </div.main>

    <?php
if(isset($_POST['submit'])){
    $name=$_POST["carname"];
    $fueltype=$_POST["ftype"];
    $capacity=$_POST["capacity"];
    $price=$_POST["price"];
    //$carimage=$_POST["carimage"];
    $update= "update cars set car_id=$id, CAR_NAME='$name', FUEL_TYPE='$fueltype', CAPACITY='$capacity', PRICE='$price' where car_id=$id";
    
    $result= mysqli_query($con,$update);

    if($result){
        //echo "data updated";
        header('location:adminvehicle.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>
</body>
</html>