<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 05-Apr-18
 * Time: 2:15 AM
 */
include "db.php";

if(isset($_POST['insert'])) {
    $name=$_POST['name'];
    $mobile=$_POST['phone'];
    $category=$_POST['category'];
    $username=$_POST['username'];
    $password=sha1($_POST['password']);
    $category2 = "3";

    $db = new PDO("mysql:host=mysql.hostinger.in;dbname=u689854465_makac", "u689854465_makac", "7GkAX4wNhd1x");

    if ($db) {
        $sql = "INSERT INTO 
                        workers(name,
                               mobile,
                               category,
                               username,
                               password)
                    VALUES(?,?,?,?,?)";
        $test = $db->prepare($sql);
        $test->bindParam(1, $name);
        $test->bindParam(2, $mobile);
        $test->bindParam(3, $category);
        $test->bindParam(4, $username);
        $test->bindParam(5, $password);
        if ($test->execute()) {
            $query = 'select * from workers order by worker_id DESC;';
            $stm = $db->prepare($query);
            $stm->execute();
            $res = $stm->fetchAll(PDO::FETCH_OBJ);
            $worker_id = $res[0]->worker_id;
            $sql2 = "INSERT INTO user(username, password, category, cat_id) VALUES (?,?,?,?)";
            $test2 = $db->prepare($sql2);
            $test2->bindParam(1, $username);
            $test2->bindParam(2, $password);
            $test2->bindParam(3, $category2);
            $test2->bindParam(4, $worker_id);
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
?>