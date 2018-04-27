<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 05-Apr-18
 * Time: 2:15 AM
 */
include "db.php";

if(isset($_POST['insert'])) {
    $name = $_POST['name'];
    $mobile = $_POST['phone'];
    $roll_number = $_POST['roll'];
    $room_number = $_POST['room'];
    $hostel = $_POST['region'];
    $password = sha1($_POST['password']);
    $category = "1";
    $query=mysqli_query($con,"SELECT * from user WHERE username='$roll_number'");
    if(mysqli_num_rows($query)>0)
        echo "error2";
    else
    {
        $db = new PDO("mysql:host=mysql.hostinger.in;dbname=u689854465_makac", "u689854465_makac", "7GkAX4wNhd1x");

        if ($db) {
            $sql = "INSERT INTO 
                        student(name,
                               mobile,
                               roll_number,
                               room_number,
                               hostel,
                               password)
                    VALUES(?,?,?,?,?,?)";
            $test = $db->prepare($sql);
            $test->bindParam(1, $name);
            $test->bindParam(2, $mobile);
            $test->bindParam(3, $roll_number);
            $test->bindParam(4, $room_number);
            $test->bindParam(5, $hostel);
            $test->bindParam(6, $password);
            if ($test->execute()) {
                $query = 'select * from student order by student_id DESC;';
                $stm = $db->prepare($query);
                $stm->execute();
                $res = $stm->fetchAll(PDO::FETCH_OBJ);
                $student_id = $res[0]->student_id;
                $sql2 = "INSERT INTO user(username, password, category, cat_id) VALUES (?,?,?,?)";
                $test2 = $db->prepare($sql2);
                $test2->bindParam(1, $roll_number);
                $test2->bindParam(2, $password);
                $test2->bindParam(3, $category);
                $test2->bindParam(4, $student_id);
                if ($test2->execute()) {
                    echo "success";
                } else {
                    echo "error";
                }
            } else {
                echo "error";
            }
        } else {
            echo "error";
        }
    }
}
?>