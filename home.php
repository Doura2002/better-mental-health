<?php 
include_once "db/conn.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1>users list</h1>

<a id="btn" href="login.php">Add New</a>

<a id="delete" href="index.html">Back</a>
<br> <br>
<table id="customers">
    <tbody>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Passowrd</th>
            <th>Gender</th>
            <th>University</th>
            <th>Year</th>
            <th>Disease</th>

            <th>Delete</th>
        </tr>

        <?php $select = mysqli_query($conn,"SELECT * FROM `users`"); 
        
        while($row = mysqli_fetch_assoc($select)):?>
        <tr>
            <td><?= $row['name'];?></td>
            <td><?= $row['email'];?></td>
            <td><?= $row['password'];?></td>
            <td><?= $row['gender'];?></td>
            <td><?= $row['university'];?></td>
            <td><?= $row['year'];?></td>
            <td><?= $row['disease'];?></td>
            <td><a id="delete" href="delete.php?id=<?= $row['id'];?>">Delete</a></td>
        

        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<a href=""></a>
    
<style>
    #btn {
        padding: 6px;
        border-radius: 6px;
        background-color: blue;
        margin-top: 10px;
        text-decoration: none;
        color: #fff;
    }

    #delete{
        padding: 6px;
        border-radius: 6px;
        margin-top: 10px;
        text-decoration: none;
        color: #222;
        background-color: red;
    }

    #customers {

  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #222;
  color: white;
}
</style>
</body>
</html>