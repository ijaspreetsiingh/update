<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            ::selection{
            color: aqua;
            background-color:black;
        }
        body{
            background-color: gainsboro;
        }
        form{
            padding:10px;
            border:2px solid black;
            width: 30%;
            border-radius:9px;
            background-color:white;
        }
        input{
            padding:7px;
            width: 70%;
            font-size:20px;
        }
        h2,h1{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
</head>
<body>
    <?php
            $conn=mysqli_connect("localhost","root","","new");
            $a=$_GET['id'];
            session_start();
            $_SESSION['id']=$a;
            $sel="SELECT * FROM `jass` where id='$a'";
            $q=mysqli_query($conn,$sel);
            $s=mysqli_fetch_assoc($q);
    ?>
    <center>
       
        <h1>
            Edit your data
            <hr>
        </h1>
    </center>
    <center>
<form action="new.php" >
    <h2>id</h2>
    <input type="text" name="" value="<?php echo$a;?>" id="">
    <h2>name</h2>
        <input type="text" value="<?php echo$s['name'];?>" placeholder="name" name="name" id="">
        <br>    <h2>class</h2>
        <input type="text" value="<?php echo$s['class'];?>"  placeholder="class" name="class" id="">
        <br>      <h2>roll</h2>
        <input type="text" name="roll" value="<?php echo$s['roll'];?>  " placeholder="rollno." id="">
        <br>    <h2>address</h2>
        <input value="<?php echo$s['address'];?>"  type="text" name="address" placeholder="address" id="">
        <br>    <h2>email</h2>
        <input value="<?php echo$s['email'];?> " type="text" name="email" placeholder="email" id="">
        <br> <br><br>
        <input type="submit" name="submit" id="submit">
        <br><br><br>
    </form>
    </center>
</body>
</html>