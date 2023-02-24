<?php

include 'connect.php';
if(isset($_GET['id'])){
    $id =$_GET['id'];

    $sql = "delete from `users` where id = $id";

    $result = mysqli_query($conn,$sql);

    if($result){
        echo "delete successfully";
        header("location:list.php");
    }else{
        die(mysqli_error($conn));
    }
}

?>