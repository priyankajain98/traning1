<?php 
include 'conn.php';
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<h2>Employee form</h2>

<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>Full Name</th>
    <th>Phone no.</th>
    <th>E-mail</th>
    <th>Action</th>
  </tr>

 <?php  
  // LOOP TILL END OF DATA  
               while($rows=$result->fetch_assoc()) 
                { 
             ?> 
            <tr> 
                <!--FETCHING DATA FROM EACH ROW OF EVERY COLUMN--> 
                <td><?php echo $rows['ID'];?></td> 
                <td><?php echo $rows['Full Name'];?></td> 
                <td><?php echo $rows['Phone no.'];?></td> 
                <td><?php echo $rows['E-mail'];?></td> 
                <td><?php echo $rows['Action'];?></td> 
            </tr> 
            <?php 
                } 
             ?> 
</table>
</body>
</html>