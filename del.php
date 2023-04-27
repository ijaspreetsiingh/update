<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn=mysqli_connect("localhost","root","","new");
    session_start();
    //$aa=$_SESSION['id'];
    $id=$_GET['id'];
    echo $id;
    $del="DELETE FROM `jass` WHERE `jass`.`id` = $id;";
    $q=mysqli_query($conn,$del);
    if ($q) {
        # code...
        header("location:update.php");
    }
    else{
        echo "Not done";
    }
    ?>
</body>
</html>