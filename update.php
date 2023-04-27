
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
            font-size:20px;
        }
        table{
            background-color:white;
            padding:35px;
            border:2px solid black;
            border-radius:9px;

        }
        th{
            font-size:28px;
            color:rgb(57, 57, 138);
            width: 20%;
            background-color:rgb(97, 95, 95);
        }
        td{
          color:black;
        }
        a{
            padding:30px;
            text-decoration:none;
            color:red;
        }
        h1{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
</head>
<body>
<center>
<br>
    <h1>All data which store in Database</h1><hr>
    <br>

<table border=1px>
<tr style="font-family: Verdana, Geneva, Tahoma, sans-serif;
      ">
    <th >id</th>
        <th>
            name
        </th>
        <th>
            class
        </th>
        <th>
            roll number
        </th>
        <th>
            address
        </th>
        <th>
        Email
        </th>
        <th>
            Edit
        </th>
        <th>
            Delete
        </th>
    </tr>
  <tr>
  <?php
        $conn=mysqli_connect("localhost","root","","new");
        $sel="SELECT * FROM `jass`";
        $q=mysqli_query($conn,$sel);
        while($row=mysqli_fetch_assoc($q)){
        ?>  
    <td><?php echo$row['id'];?></td>
    <td><?php echo$row['name'];?></td>
    <td><?php echo$row['class'];?></td>
    <td><?php echo$row['roll'];?></td>
    <td><?php echo$row['address'];?></td>
    <td><?php echo$row['email'];?></td>
   <td><a href="conn.php? id=<?php echo$row['id']?>">Edit</a></td> 
   <td><a href="del.php? id=<?php echo$row['id']?>" >Delete</a></td>
  </tr>
<?php
        }
?>
</table>
</center>
</body>
</html>