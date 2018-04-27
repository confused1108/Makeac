<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 07-Apr-18
 * Time: 8:28 AM
 */
include "db.php";
if(isset($_POST['insert']))
{
    $id=$_POST['id'];
    $status="1";
    $q=mysqli_query($con,"UPDATE `complaints` SET `status`='$status' where `complaint_id`='$id'");
    if($q)
        echo "success";
    else
        echo "error";
}
?>