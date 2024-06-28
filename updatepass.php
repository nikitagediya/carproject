<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="./style4.css"> -->
    <title>Password Update</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            font-family: poppins;
        }

        form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #f0f0f0;
            width: 350px;
            border-radius: 5px;
            padding: 20px 25px 30px 25px;
        }

        form h3 {
            margin-bottom: 15px;
            color: #0062cc;
        }

        form input {
            width: 100%;
            margin-bottom: 20px;
            background-color: transparent;
            border: none;
            border-bottom: 2px solid #0062cc;
            border-radius: 0;
            padding: 5px 0;
            font-weight: 550;
            font-size: 14px;
            outline: none;
        }

        form button {
            font-weight: 550;
            font-style: 15px;
            color: white;
            background-color: #0062cc;
            padding: 8px 13px;
            border: none;
            outline: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php
    require("./connection.php");

    if (isset($_GET['email']) && isset($_GET['reset_token'])) {
        date_default_timezone_set('Asia/kolkata');
        $date = date("Y-m-d");
        $query = "SELECT * from `users` WHERE `email`='$_GET[email]' AND `reset_token_hash`='$_GET[reset_token]' AND `reset_token_expires_at`='$date'";
        $result = mysqli_query($con, $query);
        if ($result) {
            if (mysqli_num_rows($result) == 1) {
                echo "<form method='POST'>
<h3>Create New Password</h3>
<input type='password' name='Password' placeholder='New Password'>
<button type='submit' name='updatepassword'>UPDATE</button>
<input type='hidden' name='email' value='$_GET[email]'>
</form>";
            } else {
                echo "
                <script>
                  alert('Invalid or Expired Link');
                  window.location.href='index1.php';
                </script>
                ";
            }
        } else {
            echo "
            <script>
              alert('Server Down! try again later');
              window.location.href='index1.php';
            </script>
            ";
        }
    }
    ?>
    <?php
    if (isset($_POST['updatepassword'])) {
        $pass = $_POST['Password'];
        $pass=md5($pass);
        $update = "UPDATE `users` SET `password`='$pass',`reset_token_hash`= NULL,`reset_token_expires_at`= NULL WHERE `email`='$_POST[email]'";
        if (mysqli_query($con, $update)) {
            echo "
        <script>
          alert('Password Updated Successfully');
          window.location.href='index1.php';
        </script>
        ";
        } else {
            echo "
            <script>
              alert('Server Down! try again later');
              window.location.href='index1.php';
            </script>
            ";
        }
    }
    ?>
</body>

</html>