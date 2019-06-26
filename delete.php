<?php
if (isset($_GET['id'])){

    $id = $_GET['id'];
    //extract($_GET);
    require 'crud.php';
    $sql ="delete from tasks where task_id = $id";
    mysqli_query($conn,$sql);
}

header("location:view.php"); //redirect to show.php



?>