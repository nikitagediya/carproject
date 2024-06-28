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
    
    font-size: 0.9em;
    min-width: 400px;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow:0 0  20px rgba(0,0,0,0.15);
    margin-left : 300px ;
    margin-top: 25px;
    width: 800px;
    height: 500px;
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
    margin-top: 70px;
    margin-left: 620px;
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
    background-color: red;
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
    background-color: lightcoral;
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
    background-color: lightblue;
    color: #dddddd;
}
</style>
<?php

require_once('connection.php');
$query="select *from users";
$queryy=mysqli_query($con,$query);
$num=mysqli_num_rows($queryy);


?>
<div class="hai">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">ND CAR LEASE</h2>
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
        <div>
            <h1 class="header">TOTAL USERS</h1>
            <div>
                <div>
                    <table class="content-table">
                <thead>
                    <tr>
                        <th>NAME</th> 
                        <th>EMAIL</th>
                        <th>LICENSE NUMBER</th>
                        <th>PHONE NUMBER</th> 
                        <th>GENDER</th> 
                        <th>DELETE USERS</th>
                        <th>UPDATE USERS</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                
                
                while($res=mysqli_fetch_array($queryy)){
                
                
                ?>
                <tr  class="active-row">
                    <td><?php echo $res['FNAME']."  ".$res['LNAME'];?></php></td>
                    <td><?php echo $res['EMAIL'];?></php></td>
                    <td><?php echo $res['LIC_NUM'];?></php></td>
                    <td><?php echo $res['PHONE_NUMBER'];?></php></td>
                    <td><?php echo $res['GENDER'];?></php></td>
                    <td><button type="submit" class="but" name="approve"><a href="deleteuser.php?id=<?php echo $res['EMAIL']?>" onclick="return confirm('Are you sure?')">DELETE USER</a></button></td>
                    <td><button type="submit" class="put" name="approve"><a href="updateuser.php?id=<?php echo $res['EMAIL']?>">UPDATE USER</a></button></td>
                
                </tr>
               <?php } ?>
                </tbody>
                </table>
                </div>
            </div>
        </div>
</body>
</html>