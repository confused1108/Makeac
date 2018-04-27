<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 05-Apr-18
 * Time: 11:50 AM
 */
include "db.php";
if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=sha1($_POST['password']);
    $query=mysqli_query($con,"select * from `user` where `username`='$username'");
    $login=mysqli_num_rows($query);
    if($login!=0)
    {
        while ($row = mysqli_fetch_array($query))
        if($row['password']==$password)
        {
            $cat=$row['category'];
        if($cat=='1')
            echo "success1";
        else if($cat=='2')
            echo "success2";
        else if($cat=='3') 
            echo "success3";
        }
    }
    else
    {
        echo "failed";
    }
}
?>