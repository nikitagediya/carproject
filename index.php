<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ND CAR LEASE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body>

    <style>
body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
  }
  
  html {
    box-sizing: border-box;
  }
  
  *, *:before, *:after {
    box-sizing: inherit;
  }
  
  .column {
    float: left;
    width: 33.3%;
    margin-bottom: 16px;
    padding: 0 8px;
  }
  
  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    margin: 8px;
  }
  
  .about-section {
    padding: 50px;
    text-align: center;
    background-color: #54658b;
    color: white;
    background-image: url(images/car3.jpg);
    width: 100%;
    background-repeat:no-repeat;
	background-attachment:fixed;
    background-position: center;
    background-size: cover;
    height: 100vh;
  }

  .about-section h1{
    font-size: 75px;
    text-align: center;
    margin-top: 440px;
  }
  
  .about-section p{
    font-size: 40px;
    text-align: center;
    color: lightcoral;
    margin-top: -45px;
    word-spacing: 20px;
  }
  .container {
    padding: 0 16px;
  }
  
  .container::after, .row::after {
    content: "";
    clear: both;
    display: table;
  }
  
  .title {
    color: grey;
  }
  
  .button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
  }
  
  .button:hover {
    background-color: #555;
  }
  
  @media screen and (max-width: 650px) {
    .column {
      width: 100%;
      display: block;
    }
  }

  /* CSS for footer */
  .footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #33363b;
      padding: 40px 80px;
    }

    .footer .copy {
      color: #fff;
      width: 700px;
      text-align: justify;
    }

    .bottom-links {
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 40px 0;
    }

    .bottom-links .links {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 0 40px;
    }

    .bottom-links .links span {
      font-size: 20px;
      font-weight: bold;
      color: #080808;
      text-transform: uppercase;
      margin: 10px 0;
    }

    .bottom-links .links a {
      text-decoration: none;
      color: #c5c5c5;
      padding: 10px 10px;
    }

    .fa {  
  padding: 20px;  
text-align: center;  
  margin: 3px 3px;  
  font-size: 25px;  
  width: 45px;  
}  
.fa-facebook {  
  background: #3B5998;  
  color: white;  
}  
.fa-twitter {  
  background: #55ACEE;  
  color: white;  
}  

.fa-linkedin {  
  background: #007bb5;  
  color: white;  
}  
.fa-instagram {  
  background: #125688;  
  color: white;  
}  

.fa-google {  
  background: #dd4b39;  
  color: white;  
}  

.fa:hover {  
    opacity: 0.9;  
}  
</style>

<div class="about-section">
    
    <h1>YOUR journey, our PRIORITY!</h1>
    <p>Get a car wherever and whenever you need it.</p>
    <h3>scroll for more > </h3>
  </div>
  
  <h2 style="text-align:center">Our Cars Collection</h2>
  <div class="row">
    <div class="column">
      <div class="card">
        <img src="images/swift.jpg" alt="Jane" style="width:100%">
        <div class="container">
          <h2>MARUTI SUZUKI SWIFT DZIRE</h2>
          <p class="title">ND- MARUTI</p>
          <p>Lorem ipsum dolor sit amet.
          </p>
          <p>jane@example.com</p>
          <p><button class="button"><a href="index1.php" style="color: white; font-weight: bold;">BOOK NOW</a></button></p>
        </div>
      </div>
    </div>
  
    <div class="column">
      <div class="card">
        <img src="images/honda.jpg" alt="Mike" style="width:100%">
        <div class="container">
          <h2>HONDA CITY</h2>
          <p class="title">ND- HONDA</p>
          <p>Lorem ipsum dolor sit amet.</p>
          <p>mike@example.com</p>
          <p><button class="button"><a href="index1.php" style="color: white; font-weight: bold;">BOOK NOW</a></button></p>
        </div>
      </div>
    </div>
  
    <div class="column">
        <div class="card">
          <img src="images/mercedes.jpg" alt="Mike" style="width:100%">
          <div class="container">
            <h2>MERCEDES BENZ</h2>
            <p class="title">ND- MERCEDES</p>
            <p>Lorem ipsum dolor sit amet.</p>
            <p>mike@example.com</p>
            <p><button class="button"><a href="index1.php" style="color: white; font-weight: bold;">BOOK NOW</a></button></p>
          </div>
        </div>
      </div>

    <div class="column">
        <div class="card" >
          <img src="images/thar.jpg" alt="Mike" style="width:100%">
          <div class="container">
            <h2>THAR</h2>
            <p class="title">ND- MAHINDRA</p>
            <p>Lorem ipsum dolor sit amet.</p>
            <p>mike@example.com</p>
            <p><button class="button"><a href="index1.php" style="color: white; font-weight: bold;">BOOK NOW</a></button></p>
          </div>
        </div>
      </div>

    <div class="column">
      <div class="card">
        <img src="images/toyota.jpg" alt="John" style="width:100%">
        <div class="container">
          <h2>TOYOTA INNOVA CRYSTA</h2>
          <p class="title">ND- TOYOTA</p>
          <p>Lorem ipsum dolor sit amet.</p>
          <p>john@example.com</p>
          <p><button class="button"><a href="index1.php" style="color: white; font-weight: bold;">BOOK NOW</a></button></p>
        </div>
      </div>
    </div>

    <div class="column">
        <div class="card">
          <img src="images/audi.jpg" alt="Mike" style="width:100%">
          <div class="container">
            <h2>AUDI</h2>
            <p class="title">ND- AUDI</p>
            <p>Lorem ipsum dolor sit amet.</p>
            <p>mike@example.com</p>
            <p><button class="button"><a href="index1.php" style="color: white; font-weight: bold;">BOOK NOW</a></button></p>
          </div>
        </div>
      </div>
    

      <div class="column" style="position: absolute; left: 0%; top: 266.5%;">
        <div class="card" >
          <img src="images/lamborghini.webp" alt="Jane" style="width:100%">
          <div class="container">
            <h2>LAMBORGHINI</h2>
            <p class="title">ND- LAMBORGHINI</p>
            <p>Lorem ipsum dolor sit amet.</p>
            <p>jane@example.com</p>
            <p><button class="button"><a href="index1.php" style="color: white; font-weight: bold;">BOOK NOW</a></button></p>
          </div>
        </div>
      </div>


      <div class="column" style="position: absolute; left: 33.3%; top: 266.5%;">
        <div class="card">
          <img src="images/bmw.jpg" alt="Jane" style="width:100%">
          <div class="container">
            <h2>BMW</h2>
            <p class="title">ND- BMW</p>
            <p>Lorem ipsum dolor sit amet.</p>
            <p>jane@example.com</p>
            <p><button class="button"><a href="index1.php" style="color: white; font-weight: bold;">BOOK NOW</a></button></p>
          </div>
        </div>
      </div>

      <div class="column" >
        <div class="card">
          <img src="images/porsche.jpg" alt="Jane" style="width:100%">
          <div class="container">
            <h2>PORSCHE</h2>
            <p class="title">ND- PORSCHE</p>
            <p>Lorem ipsum dolor sit amet.</p>
            <p>jane@example.com</p>
            <p><button class="button"><a href="index1.php" style="color: white; font-weight: bold;">BOOK NOW</a></button></p>
          </div>
        </div>
      </div>
  </div>


  <footer class="footer">
    <div class="copy">&copy; 2024 Developer <BR>Copyright 1999-2024 by Refsnes Data. All Rights Reserved.<BR>The ND CAR LEASE is an online platform that facilitates access to the best travel deals by directing consumers to travel providers. We provide our own travel services or quotes. While the ND CAR LEASE connects the general public to our travel services. All prices are subject to availability. Although we aim to provide our users with the cheapest rates.</div>
    <div class="bottom-links">
      <div class="links">
        <span>CONTACT US</span>
        <a > EMAIL ID: ndcar@gmail.com</a>
        <a >CONTACT NO.: xxxxxxxxxx</a>
        <a></a>
        <a></a>
      </div>
      
      <div class="links">
        <span>Social Links</span>
        <ul>     
            <a href="#" class="fa fa-facebook"> </a>   
            
            <a href="#" class="fa fa-twitter"> </a>  
             
            <a href="#" class="fa fa-linkedin"> </a>  
           
            <a href="#" class="fa fa-instagram"> </a>  
             
            <a href="#" class="fa fa-google"> </a>  
            
            </ul>
      </div> 
    </div>
    
  </footer>

  </body>
  </html>