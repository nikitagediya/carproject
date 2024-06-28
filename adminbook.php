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
.hai{
    width: 100%;
    background-image: url(images/blue3.jpg);
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
    height: 75px;
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
    color: lightblue;
    font-size: 28px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight:bolder;
    padding-left: 20px;
    float:left;
    padding-top: 10px;
    margin-left: 70px;
} 


.menu{
    width: 400px;
    float: left;
    height: 70px;

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

.content-table{
   border-collapse: collapse;
    
    font-size: 1em;
    /* min-width: 400px; */
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow:0 0  20px rgba(0,0,0,0.15);
    margin-left : 100px ;
    margin-top: 25px;
    width: 1300px;
    height: 300px;
}
.content-table thead tr{
    background-color: steelblue;
    color: white;
    text-align: left;
}

.content-table th,
.content-table td{
    padding: 12px 15px;


}

.content-table tbody tr{
    border-bottom: 1px solid #dddddd;
}
.content-table tbody tr:nth-of-type(even){
    background-color: #f3f3f3;

}
.content-table tbody tr:last-of-type{
    border-bottom: 2px solid steelblue;
}

.content-table thead .active-row{
    font-weight:  bold;
    color: orange;
}


.header{
    margin-top: -600px;
    margin-left: 600px;
    color: darkblue;
}


.nn{
    
    width:150px;
        margin-left: -90px;
;
    /* background: #5072A7; */
    border:none;
    height: 40px;
    font-size: 18px;
    border-radius: 5px;
    cursor: pointer;
    background-color: black;
    transition: 0.4s ease;

}

.nn:hover{
    background-color: #5072A7;
    transition: 1s ease;
}

.nn a{
    text-decoration: none;
    color: white;
    font-weight: bold;
    
}

.nn a:hover{
    
    color: white;
}

.but {
    width: 120px;
    color: white;
    background-color: green;
    padding: 5px;
    border-radius: 5px;
    font-weight: bolder;
}

.but a{
    color: white;
    text-decoration: none;
}

.but a:hover{
    color: black;
}

.but:hover{
    background-color: lightblue;
    color: #dddddd;
}
.put {
    width: 120px;
    color: white;
    background-color: blue;
    padding: 5px;
    border-radius: 5px;
    font-weight: bolder;
}

.put a{
    color: white;
    text-decoration: none;
}

.put a:hover{
    color: black;
}

.put:hover{
    background-color: lightcoral;
    color: #dddddd;
}
</style>
<?php

require_once('connection.php');
$query="SELECT *from booking ORDER BY BOOK_ID DESC";    
$queryy=mysqli_query($con,$query);
$num=mysqli_num_rows($queryy);


?>

<div class="hai">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">ND CAR <br> LEASE</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="adminvehicle.php">VEHICLES</a></li>
                    <li><a href="adminusers.php">USERS</a></li>
                    <li><a href="admindash.php">FEEDBACKS</a></li>
                    <li><a href="adminbook.php">BOOKINGS</a></li>
                    <li><a href="admincont.php">CONTACT</a></li>
                    
                  <li> <button class="nn"><a href="logout1.php">LOGOUT</a></button></li>
                </ul>
            </div>
         </div>

         </div>
        <div>
            <h1 class="header">BOOKING REQUESTS</h1>
            <div>
                <div>
                    <table class="content-table">
                <thead>
                    <tr>
                        <th>CAR ID</th>
                        <th>EMAIL</th>
                        <th>BOOK PLACE</th>
                        <th>BOOK DATE</th>
                        <th>DURATION</th>
                        <th>PHONE NUMBER</th>
                        <th>DESTINATION</th>
                        <th>RETURN DATE</th>
                        <th>BOOKING STATUS</th>
                        <th>APPROVE</th>
                        <th>CAR RETURNED</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                
                
                while($res=mysqli_fetch_array($queryy)){
                
                
                ?>
                <tr  class="active-row">
                    
                    <td><?php echo $res['CAR_ID'];?></php></td>
                    <td><?php echo $res['EMAIL'];?></php></td>
                    <td><?php echo $res['BOOK_PLACE'];?></php></td>
                    <td><?php echo $res['BOOK_DATE'];?></php></td>
                    <td><?php echo $res['DURATION'];?></php></td>
                    <td><?php echo $res['PHONE_NUMBER'];?></php></td>
                    <td><?php echo $res['DESTINATION'];?></php></td>
                    <td><?php echo $res['RETURN_DATE'];?></php></td>
                    <td><?php echo $res['BOOK_STATUS'];?></php></td>
                    <td><button type="submit"  class="but"  name="approve"><a href="approve.php?id=<?php echo $res['BOOK_ID']?>">APPROVE</a></button></td>
                    <td><button type="submit" class="put" name="approve"><a href="adminreturn.php?id=<?php echo $res['CAR_ID']?>&bookid=<?php echo $res['BOOK_ID']?>">RETURNED</a></button></td>
                </tr>
               <?php } ?>
                </tbody>
                </table>
                
                </div>
            </div>
        </div>
</body>
</html>