<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Details</title>
    
</head>

<body class="body">

<style>
*{
    margin: 0;
    padding: 0;

}

body{
    width: 100%;
    /* background-image: url(images/blue1.jpg); */
    background-image: linear-gradient(-225deg, #5D9FFF 0%, #B8DCFF 48%, #6BBBFF 100%);
    /* background-image: linear-gradient(60deg, #3d3393 0%, #2b76b9 37%, #2cacd1 65%, #35eb93 100%); */
    background-position: center;
    background-size: cover;
    height: 109vh;
    animation: infiniteScrollBg 50s linear infinite;
}
.main{
   
    width: 100%;
     background: linear-gradient(to top, rgba(0,0,0,0)50%, rgba(0,0,0,0)50%);
    background-position: center;
    background-size: cover;
    height: 109vh; 
    animation: infiniteScrollBg 50s linear infinite;
}
.navbar{
    width: 99.1%;
    height: 95px;
    margin: auto;
    background-color: black;
    overflow: hidden;
    padding: 5px 7px;

}

.icon{
    width:200px;
    float: left;
    height : 70px;
}

.logo{
    color: #224C98;
    font-size: 35px;
    font-family: Arial;
    padding-left: 20px;
    float:left;
    padding-top: 15px;

}
.menu{
    width: 400px;
    float: left;
    height: 70px;
    

}

/* .menu{
    
    width: 99.1%;
    height: 75px;
    margin: auto;
    background-color: black;
    overflow: hidden;
    padding: 5px 7px;
} */

ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
    letter-spacing: 2px;

}

ul li{
    list-style: none;
    margin-left: 60px;
    margin-top: 27px;
    font-size: 14px;

}

ul li a{
    text-decoration: none;
    color: white;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;
    

}
ul li a:hover{
    color:#89CFF0;
    letter-spacing: 2px;

}
.box{
    
    position:center;
    top: 50%;
    left: 50%;
    padding: 20px;
    box-sizing: border-box;
    background: #fff;
    border-radius: 4px;
    box-shadow: 0 5px 15px rgba(0,0,0,.5);
    background: linear-gradient(to top, rgba(255, 251, 251, 0.8)50%,rgba(250, 246, 246, 0.8)50%);
    display: flex;
    align-content: center;
    width: 600px;
    height: 200px;
    margin-top: 100px;
    margin-left: 387px;
}

.box .imgBx{
    width: 150px;
    flex:0 0 150px;
}

.box .imgBx img{
    max-width: 150%;
}

.box .content{
    padding-left: 100px;
}

.box .button{
    width: 240px;
    height: 40px;
    background: #5072A7;
    border:none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color:#fff;
    transition: 0.4s ease;
}

.utton{
    width: 240px;
    height: 40px;
   
    background: #007791;
    border:none;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color:#fff;
    transition: 0.4s ease;
}




.de{
    float: left;
    clear: left;
    display: block;
    


}

.dabba a{
    color:black;
}
.de li a:hover{
    color:black;

}
.de .lis:hover{
    color: white;
}


.nn{
    width:100px;
    /* background: #5072A7; */
    border:none;
    height: 40px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color:white;
    transition: 0.4s ease;

}


.nn a{
    text-decoration: none;
    color: black;
    font-weight: bold;
    
}

.overview{
    text-align: center;

    margin-top: 40px;
}

.circle{
    border-radius:48%;
    width:65px;
    margin-right:20px;
}

.phello{
    width: 200px;
    margin-left: -50px;
    padding: 0px;
    color:white;
}

#stat{
    margin-left: -8px;
}




</style>


<?php 
    require_once('connection.php');
        session_start();
        
        if(!isset($_SESSION['email'])) // The exact conditional depends on your login-system implementation
    {
        header('Location: index.php'); // Instructs the visitor's browser to redirect
        exit; // <-- What you want. Prevents further code from being executed, works as a security measure.
    }
        
        $value = $_SESSION['email'];
        $_SESSION['email'] = $value;
        
        $sql="select * from users where EMAIL='$value'";
        $name = mysqli_query($con,$sql);
        $rows=mysqli_fetch_assoc($name);
        $sql2="select *from cars where AVAILABLE='Y'";
        $cars= mysqli_query($con,$sql2);
        
        // $row=mysqli_fetch_assoc($cars);
    //     if($email == "email" ){
    //         $_SESSION['email']="email";
    //         // $_SESSION['password']="password";
    //         header("location:index.php");
    // }
    // else header("location:cardetails.php");
    // ob_end_flush();
    
    
    ?>






</script>
  <div class="cd">
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">ND CAR LEASE</h2>
            </div>
            <div class="menu">
               
                <ul>
                    <li><a href="cardetails.php">HOME</a></li>
                    <li><a href="aboutus2.html">ABOUT</a></li>
                    
                    <li><a href="services.html">SERVICES</a></li>
                    <li><a href="feedback/Feedbacks.php">FEEDBACK</a></li>
                    <li><a id="stat" href="bookinstatus.php">BOOKING STATUS</a></li>
                    <li><img src="images/profile.png" class="circle" alt="Alps"></li>
                    <li><p class="phello">HELLO! &nbsp;<a id="pname"><?php echo $rows['FNAME']." ".$rows['LNAME']?></a></p></li>
                    <li><button class="nn"><a href="logout.php">LOGOUT</a></button></li>
                </ul>
            </div>
            
            
        </div>
        <div class="dabba">

            <div><h1 class="overview">OUR CARS OVERVIEW</h1>
            
            <ul class="de">
                <?php
        while($result= mysqli_fetch_array($cars))
        {
            // echo $result['CAR_ID'];
            // echo $result['AVAILABLE'];
            
            ?>    
    
    <li>
        <form method="POST">
            <div class="box">
                <div class="imgBx">
                    <img src="images/<?php echo $result['CAR_IMG']?>">
                </div>
        <div class="content">
            <?php $res=$result['CAR_ID'];?>
            <h1><?php echo $result['CAR_NAME']?></h1>
            <h2>Fuel Type : <a><?php echo $result['FUEL_TYPE']?></a> </h2>
            <h2>CAPACITY : <a><?php echo $result['CAPACITY']?></a> </h2>
            <h2>Rent Per Day : <a>₹<?php echo $result['PRICE']?>/-</a></h2>
            <button type="submit"  name="booknow" class="utton" style="margin-top: 5px;"><a href="booking.php?id=<?php echo $res;?>">Book</a></button>
        </div>
    </div></form></li>
    <?php
        }
        
        ?>
    <?php 
    require_once('connection.php');
    
    
    $value = $_SESSION['email'];
    
    $sql="select * from users where EMAIL='$value'";
    $name = mysqli_query($con,$sql);
    $rows=mysqli_fetch_assoc($name);
    // // $sql2="select *from cars where CAR_ID=1";
    // $cars= mysqli_query($con,"select *from cars where CAR_ID=1");
    
    // $row=mysqli_fetch_assoc($cars);
    
    
    
    
    
    ?>



</div>


    <!-- <li>
        <div class="box">
           <div class="imgBx">
                <img src="images/lamborghini.webp">
            </div>
            <div class="content">
                <h2>LAMBORGHINI</h2>
                <p>It has a stuning look and its in good condition.</p>
                <h1><a>₹15,000/-</a></h1>
                <button class="button" ><a href="booking.html">BOOK NOW</a></button>
            </div>
        </div></li>
        <li>
            <div class="box">
               <div class="imgBx">
                    <img src="images/porsche.jpg ">
                </div>
                <div class="content">
                    <h2>PORSCHE</h2>
                    <p>It is a cheap and best car for the family trips. <br>
                    </p>
                    <h1><a>₹10,000/-</a></h1>
                    <button class="button" ><a href="booking.html">BOOK NOW</a></button>
                </div>
            </div></li> -->
            
                
           
    </ul>
    </div>
  </div>
  </div>
    
    

 
    
     
</body>

</html>