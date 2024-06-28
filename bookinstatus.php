<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="satus.css"> -->
    <title>BOOKING STATUS</title>
</head>
<body>
<style>

*{
    margin: 0;
    padding: 0;
    background-position: center;
    
}

body{
  width: 100%;
  height: 100%;
  background:#6991c7;
  position:center;    
}
.box{
    
    top: 50%;
    left: 50%;
    padding: 50px;
    box-sizing: border-box;
    background-image: linear-gradient(to top, #d9afd9 0%, #97d9e1 100%);
    border-radius: 4px;
    box-shadow: 0 5px 15px rgba(0,0,0,.5);
    display: flex;
    align-content: center;
    width: 700px;
    height: 250px;
    margin-top: 100px;
    margin-left: 440px;
  
    
}



.utton{
    width: 200px;
    height: 40px;
   
    background: #2b5876;
    border:none;
    font-size: 18px;
    border-radius: 5px;
    cursor: pointer;
    color:#fff;
    transition: 0.4s ease;
    margin-top: 10px;
    margin-left: 10px;
}
.utton a{
    text-decoration: none;
    color: white;
    font-weight: bold;
}

ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 100px;
}

ul li{
    list-style: none;
    margin-left: 200px;
    margin-top: -70px;
    font-size: 35px;

}
.name{
    font-weight: 600;
    padding-bottom:100px;
}



</style>


<?php
    require_once('connection.php');
    session_start();
    if(!isset($_SESSION['email'])) // The exact conditional depends on your login-system implementation
    {
        header('Location: index1.php'); // Instructs the visitor's browser to redirect
        exit; // <-- What you want. Prevents further code from being executed, works as a security measure.
    }
    $email = $_SESSION['email'];
    
    $sql="select * from booking where EMAIL='$email' order by BOOK_ID DESC LIMIT 1";
    $name = mysqli_query($con,$sql);
    $rows=mysqli_fetch_assoc($name);
    if($rows==null){
        echo '<script>alert("THERE ARE NO BOOKING DETAILS")</script>';
        echo '<script> window.location.href = "cardetails.php";</script>';
    }
    else{
        $sql2="select * from users where EMAIL='$email'";
        $name2 = mysqli_query($con,$sql2);
        $rows2=mysqli_fetch_assoc($name2);
        
        $car_id=$rows['CAR_ID'];
        $sql3="select * from cars where CAR_ID='$car_id'";
        $name3 = mysqli_query($con,$sql3);
        $rows3=mysqli_fetch_assoc($name3);
        
        $book_id=$rows['BOOK_ID'];
        $sql4="select * from booking where BOOK_ID='$book_id'";
        $name4 = mysqli_query($con,$sql4);
        $rows4=mysqli_fetch_assoc($name4);
        
        
        
        ?>
<div class="div">
    <ul><li> <button  class="utton"><a href="cardetails.php">Go to Home</a></button></li><li class="name">HELLO! <?php echo $rows2['FNAME']." ".$rows2['LNAME']?></li>
    
    
    
    
</ul>
<div class="box">
    <div class="content">
        <h3>CAR NAME : <?php echo $rows3['CAR_NAME']?></h3><br>
        <h3>NO OF DAYS : <?php echo $rows['DURATION']?></h3><br>
        <h3>BOOKING STATUS : <?php echo $rows['BOOK_STATUS']?></h3><br>
        <h3>YOUR BOOKING ID IS : <?php echo $rows['BOOK_ID']?></h3><br>
        
    </div>
     </div>
     
     
    </div>
    
    <?php }
?>
    
</body>

</html>