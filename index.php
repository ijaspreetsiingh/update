<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        ::selection{
            color: aqua;
        }
        body{
            background-color: gainsboro;
        }
        form{
            padding: 40px;
            border:2px solid black;
            width: 50%;
            background-color: rgb(255, 255, 255);
            border-radius:9px;
        }
        input{
            color: black;
            font-size: 20px;
            width: 80%;
            padding: 10px;
            font-family: Arial, Helvetica, sans-serif;
        }
        input[type="submit"]{
            color: black;
            font-size:15px;
        }
        input[type="submit"]:hover{
            color: rgb(255, 255, 255);
            background-color: rgb(38, 36, 36);
        }
        h1{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
</head>
<body><br><br><br><br><br><br>
    <center>
    <form >
        <h1>Enter your Data</h1>
        <hr><br>
        <input type="text" placeholder="Enter your  name" name="name" id="">
        <br> <br>
        <input type="text" placeholder="Enter your class" name="class" id="">
        <br>   <br>
        <input type="text" name="roll" placeholder="Enter your rollno." id="">
        <br> <br>
        <input type="text" name="address" placeholder="Enter your address" id="">
        <br> <br>
        <input type="text" name="email" placeholder="Enter your email" id="">
        <br>  <br><br><br>
        <input type="submit" name="submit" id="submit">
        <br><br><br><br><br>
    </form>
</center>
    <?php
    if(isset($_GET['submit'])){
    $conn=mysqli_connect("localhost","root","","new");
    $a=$_GET['name'];
    $b=$_GET['class'];
    $c=$_GET['roll'];
    $d=$_GET['address'];
    $e=$_GET['email'];
    $data="INSERT INTO `jass` (`id`, `name`, `class`, `roll`, `address`, `email`) VALUES (NULL, '$a', '$b', '$c', '$d', '$e');";
    $quary=mysqli_query($conn,$data);
    if ($quary) {
        # code...
        header("location:update.php");
    } else {
        # code...
        echo"no done";
    }
    
    }
   ?>
    
</body>
</html>