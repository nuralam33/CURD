<?php

include 'connect.php'


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
            <center>User Registartion List</center>
        </div>

        <div class="card-body">
       <a href="index.php" class="btn btn-sm btn-success">Add Users</a>

       <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                
                $sql = "Select * from `users`";

                $result = mysqli_query($conn,$sql);

                if($result){
                    
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $phone = $row['phone'];

                        echo '  <tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$name.'</td>
                        <td>'.$email.'</td>
                        <td>'.$phone.'</td>
                        <td>
                            <button class="btn btn-primary">
                            <a href="edit.php? id='.$id.'" class="text-white text-decoration-none" >Edit</a>
                            </button>

                            <button class="btn btn-danger">
                            <a href="delete.php? id='.$id.'"class="text-white text-decoration-none" >Delete</a>
                            </button>
                        </td>
                        
                        
                    </tr>';
                    }
                    
                }

                ?>
                </tbody>
                </table>
        </div>
    </div>
</div>

</body>
</html>