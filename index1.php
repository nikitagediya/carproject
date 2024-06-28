
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>CAR RENTAL</title>
    <script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>
    <link  rel="stylesheet" href="css/style.css">
    <script type="text/javascript">
        function preventBack() {
            window.history.forward(); 
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    </script>
</head>
<body>



<?php
require_once('connection.php');
    if(isset($_POST['login']))
    {
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        
        
        if(empty($email)|| empty($pass))
        {
            echo '<script>alert("please fill the blanks")</script>';
        }

        else{
            $query="select * from users where EMAIL='$email'";
            $res=mysqli_query($con,$query);
            if($row=mysqli_fetch_assoc($res)){
                $db_password = $row['PASSWORD'];
                if(md5($pass)  == $db_password)
                {
                    header("location: cardetails.php");
                    session_start();
                    $_SESSION['email'] = $email;
                    
                }
                else{
                    echo '<script>alert("Enter a proper password")</script>';
                
                }



                



            }
            else{
                echo '<script>alert("enter a proper email")</script>';
            }
        }
    }

  
?>


<style>

.hai{
    width: 100%;
    background-image: url(images/indexback.jpg);
    background-position: center;
    background-size: cover;
    height: 100vh;
    animation: infiniteScrollBg 50s linear infinite;
}

.form{
    width: 450px;
    height: 400px;
    background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
    position: absolute;
    top:-20px;
    left: 50px;
    border-radius: 10px;
    padding: 20px;
    margin-top: 120px;
}

.form h2{
    width:400px;
    font-family: sans-serif;
    text-align: center;
    color: blue;
    font-size: 22px;
    background-color: white;
    border-radius: 5px;
    margin: 2px;
    padding: 8px;
    margin-left:15px;
    margin-top: 25px;
    
    
}

.form input{
    width: 410px;
    height: 35px;
    background: transparent;
    border-bottom: 1px solid blue;
    border-top: none;
    border-right: none;
    border-left:none;
    color:#fff;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 40px;
    margin-left:17px;
    font-family: sans-serif;
}
.form input:focus{
    outline: none;
}

.btnn{
    width: 240px;
    height: 40px;
    background: #5072A7;
    border:orange;
    margin-top: 30px;
    font-size: 18px;
    
    cursor: pointer;
    color:#fff;
    transition: 0.4s ease;
}

.btnn:hover{
    background: #fff;
    color:blue;
}

.btnn a{
    text-decoration: none;
    color: black;
    font-weight: bold;
}

.form .link{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 17px;
    padding-top: 40px;
    text-align: center;
    color: #fff;
}

.form .link a{
    text-decoration: none;
    color:blue;
}

.navbar{
    
    width: 99.1%;
    height: 75px;
    margin: auto;
    background-color: black;
    overflow: hidden;
    padding: 5px 7px;
    
}
.logo{
    color: lightblue;
    font-size: 28px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight:bolder;
    padding-left: 20px;
    float:left;
    padding-top: 10px;
    margin-left: 70px;
}

ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}

ul li{
    list-style: none;
    margin-left: 150px;
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
    color: #6699CC;
}

.adminbtn{
    width: 150px;
    height: 40px;
    background: black;
    border:none;
    
    font-size: 18px;
    border-radius: 5px;
    cursor: pointer;
    color:#fff;
    transition: 0.4s ease;

}
.adminbtn a{
    text-decoration: none;
    color: white;
}

.adminbtn:hover{
    background-color: #5072A7;
}
.adminbtn a:hover{
    text-decoration: none;
    color: black;
}
.pass{
    margin-top:15px;
    margin-left:15px;
    text-decoration: none;
    color:blue;
    cursor: pointer;
    font-family: Arial, Helvetica, sans-serif;
}
.pass a{
    text-decoration: none;
    color:cornflowerblue;
    
}
.pass a:hover{
    color:white;
}

</style>
    <div class="hai">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">ND CAR LEASE</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <!-- <li><a href="index.html">HOME</a></li> -->
                    <li><a href="aboutus2.html">ABOUT</a></li>
                    <li><a href="services.html">SERVICES</a></li>
                    
                    <li><a href="contactus2.html">CONTACT</a></li>
                  <li> <button class="adminbtn"><a href="adminlogin.php">ADMIN LOGIN</a></button></li>
                </ul>
            </div>
            
          
        </div>
        <div class="content">
            <!-- <h1>NEED A <br><span>CAR</span><br><span>RENTAL?</span></h1>
            <p class="par">Live the life of Luxury.<br>
                Just rent a car of your wish from our vast collection.<br>Enjoy every moment with your family<br>
                 Join us to make this family vast.  </p>
            <button class="cn"><a href="register.php">JOIN US</a></button> -->
            <div class="form">
                <h2>Login Here</h2>
                <form method="POST"> 
                <input type="email" name="email" placeholder="Enter Email Here">
                <input type="password" name="pass" placeholder="Enter Password Here">
                <div class="pass"><a href="./reset-pass.php">Forgot your password ?</a></div>
                <input class="btnn" type="submit" value="Click to Login" name="login"></input>
                </form>
                <p class="link">Don't have an account?<br>
                <a href="register.php">Sign up</a> here</a></p>
                <!-- <p class="liw">or<br>Log in with</p>
                <div class="icon">
                    &emsp;&emsp;&emsp;&ensp;<a href="https://www.facebook.com/"><ion-icon name="logo-facebook"></ion-icon> </a>&nbsp;&nbsp;
                    <a href="https://www.instagram.com/"><ion-icon name="logo-instagram"></ion-icon> </a>&ensp;
                    <a href="https://myaccount.google.com/"><ion-icon name="logo-google"></ion-icon> </a>&ensp;
                    
                </div> -->
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>
