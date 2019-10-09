<!DOCTYPE html>
<html>

<head>

 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  
  <title>MakeAC</title>


</head> 



<body>

<div style="background-image:url(workhour1.jpg); background-repeat: no-repeat;background-size: 100%;height:636px;">


<div class="container" style="background-color:#989898;width: 100%;opacity: 0.8">
<div class="row">
<div class="col-md-4">

<h1 style="font-weight:bold;font-size:42px;color:white;">MakeAC</h1>
  
</div>

<div class="col-md-4">

  
</div>


<div class="col-md-4">
<img src="europaa.jpg">
</div>

</div>
</div>


   <script>
  function validateForm() {
    var x = document.forms["myForm"]["username"].value;
    if (x == "")
        {
        alert("Username is required");
        return false;
      }
      var y = document.forms["myForm"]["password"].value;
    if (y == "") 
        {
        alert("Password is required");
        return false;
      }
    }
   </script>

 
   <div class="container-fluid"  align="center">
   <div class="row">
   <div class="col-sm-4 col-md-4 col-lg-4"></div>
   <div class="col-sm-4 col-md-4 col-lg-4">
  <form style="width: 90%;margin-top:15%;padding:16px;border-radius: 5px;background-color:lightgrey " align="left"  method="post" action="admin_Login_post.php" name="myForm" onsubmit="return validateForm()" >
 


        <div class="form-group">

      <label for="username" style="font-size: 18px ">Username</label>
      <input type="text" class="form-control" id="username"  name="username"  style="font-size :20px;padding:20px">
    </div>



    <div class="form-group">

      <label for="password" style="font-size: 18px ">Password</label>
      <input type="password" class="form-control" id="password" name="password"  style="font-size :20px;padding:20px">

    </div>





    <div class="form-group">

      <input type="submit" class="btn btn-primary btn-block" name="submit" value="Login" style="font-size :20px;padding:6px">


    </div>


  </form>
  </div>
  <div class="col-sm-4 col-md-4 col-lg-4"></div>

</div>
</div>




<div class="container" style="background-color:#808080;color:#FFFFFF;margin-top:14.3%; width: 100%;opacity:0.8">

    <div class="row">

        <div style="font-size: 17px;margin-top: 7px " align="center" class="col-md-4">
        <p><span class="glyphicon glyphicon-earphone"></span>&nbsp;
        <span >7898378532</span></p>  
        </div>


        <!--<div align="center" class="col-md-4" >
        <p><span class="material-icons">email</span>
        <span style="font-size:15px">Europa Developments</span></p>
        </div>-->

        <div style="font-size: 17px;margin-top: 7px " align="center" class="col-md-4">
        <p><span class="glyphicon glyphicon-envelope"></span>&nbsp;
        <span >makeac@europallp.in</span></p>  
        </div>

        <div style="font-size: 17px;margin-top: 7px " align="center" class="col-md-4">
        <p><span class="glyphicon glyphicon-earphone"></span>&nbsp;
        <span >7441183308</span></p>  
        </div>


    </div>

</div>




</body>

</html>
