<?php

include 'connect.php';
    $id = $_GET['id'];
    $sql = "Select * from `users` where id = $id";

    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];



if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "update `users` set id =$id ,name ='$name',email ='$email',phone ='$name' where id = $id";
    $result = mysqli_query($conn,$sql);

    if($result){
        echo "data update successfully";
        header("location:list.php");
    }else{
        die(mysqli_error($conn));
    }
}



?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <div class="card">
        <div class="card-heder">
            <center>User Registartion From Update </center>
        </div>
        <div class="card-body">
        <a href="list.php" class="btn btn-sm btn-success">Users</a>
        <form method= "post">
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">User Name</label>
                <input type="text" class="form-control" value="<?php echo $name;?>" name="name" id="exampleInputName" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label">Email</label>
                <input type="email" class="form-control"value="<?php echo $email;?>"  name="email" id="exampleInputEmail">
            </div>
            <div class="mb-3">
                <label for="exampleInputPhone" class="form-label">Phone</label>
                <input type="tel" class="form-control"value="<?php echo $phone;?>"  name="phone" id="exampleInputPhone">
            </div> 
            <button type="submit" name="submit" class="btn btn-primary ">Update</button>
        </form>
        </div>
    </div>
</div>

</body>
</html>


