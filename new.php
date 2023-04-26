<?php
$conn=mysqli_connect("localhost","root","","new");
session_start();
$aa=$_SESSION['id'];
        $a=$_GET['name'];
        $b=$_GET['class'];
        $c=$_GET['roll'];
        $d=$_GET['address'];
        $e=$_GET['email'];
        $new="UPDATE `jass` SET `name` = '$a' ,`class` ='$b' , `roll`='$c', `address`='$d',`email`='$e' WHERE `jass`.`id` = $aa;";
$done=mysqli_query($conn ,$new);
echo "$a";
if ($done) {
    # code...
    echo"done";
    header("location:update.php");
}
else{
    echo"no";
}
?>