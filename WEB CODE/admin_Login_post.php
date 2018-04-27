<!DOCTYPE html>
<html>

<head>

<title>
</title>

    
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

</head>

<body>


<?php
include "connect.inc_sad.php";
session_start();
            $user = $_POST['username'];
            $pass = sha1($_POST['password']);
          
            $query = mysqli_query($con,"SELECT * FROM admin WHERE username='$user'");
            $numrows = mysqli_num_rows($query);
            if ($numrows!=0)
            {
         
	            while ($row = mysqli_fetch_assoc($query))
	            {                                         
	             if($pass==$row['password'])
	                    {
	                        $_SESSION['admin_id']    = $row['admin_id'];
	                        $_SESSION['username']  = $row['username'];
	                        $_SESSION['signed_in'] = true;
	                         header("location:adminpanel.php");
	                    }    
	                
		              else
		                {
		                    echo "<br><br><p style='font-size:34px; text-align:center; font-weight:bold;'>You have supplied a wrong user/password combination. Please try again.</p>";
		                     echo '<p style="text-align:center; font-size:19px; font-weight:bold; font-decoration:none;"><a href="admin_Login.php">Sign In again</a></p>';
		                }
	            }
                     
            }

            else
            {
                echo "<br><br><p style='font-size:34px; text-align:center; font-weight:bold;'>You have supplied a wrong user/password combination. Please try again.</p>";
                echo '<p style="text-align:center; font-size:19px; font-weight:bold; font-decoration:none;"><a href="admin_Login.php">Sign In again</a></p>';               
            }
              
         
        ?>


</body>



</html>
