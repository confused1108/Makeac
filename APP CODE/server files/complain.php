<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 06-Apr-18
 * Time: 2:52 PM
 */
include "db.php";

if(isset($_POST['problem_insert'])) {
    $problem=$_POST['problem'];
    $time=$_POST['time'];
    $category=$_POST['category'];
    $username=$_POST['username'];
    $usertype=$_POST['usertype'];
    $status="0";
    if($usertype=="1")
    {
        $query=mysqli_query($con,"SELECT * FROM student WHERE roll_number='$username'");
        $row = mysqli_fetch_array($query);
        $cat_id=$row['student_id'];
        $address=$row['room_number'];
        $region=$row['hostel'];
    }
    else
    {
        $query=mysqli_query($con,"SELECT * FROM staff WHERE username='$username'");
        $row = mysqli_fetch_array($query);
        $cat_id=$row['staff_id'];
        $address=$row['address'];
        $region="5";
    }

    $db = new PDO("mysql:host=mysql.hostinger.in;dbname=u689854465_makac", "u689854465_makac", "7GkAX4wNhd1x");

    if ($db) {
        $sql = "INSERT INTO 
                        complaints(problem,
                               category,
                               timeslot,
                               user,
                               cat_id,
                               address,
                               region,
                               date,
                               status)
                    VALUES(?,?,?,?,?,?,?,?,?)";
        $test = $db->prepare($sql);
        $test->bindParam(1, $problem);
        $test->bindParam(2, $category);
        $test->bindParam(3, $time);
        $test->bindParam(4, $usertype);
        $test->bindParam(5, $cat_id);
        $test->bindParam(6, $address);
        $test->bindParam(7, $region);
        $test->bindParam(8, date('y/m/d'));
        $test->bindParam(9, $status);
        if ($test->execute())
            echo "success";
        else
            echo "error";

    } else
        echo "error";
}
?>