<!DOCTYPE>
<html>
<head>
<title>Welcome page</title>
</head>
<body>
<?php
echo $name=$_POST["fname"];
echo $midname=$_POST["mname"];
echo $lastname=$_POST["lname"];
echo $dob=$_POST["dob"];
echo $address=$_POST["address"];
echo $city=$_POST["city"];
echo $zip=$_POST["zipcode"];
echo $zip=$_POST["state"];
echo $email=$_POST["e-mail"];
echo $phone=$_POST["phone"];
?>
<h2>Welcome Page</h2>
<span>first name: </span><?php echo $name; ?><br>
<span>middle name: </span><?php echo $midname; ?><br>
<span>last name: </span><?php echo $lastname; ?><br>
<span>Date of birth: </span><?php echo $dob; ?><br>
<span>address: </span><?php echo $address; ?><br>
<span>city: </span><?php echo $city; ?><br>
<span>zipcode: </span><?php echo $zip; ?><br>
<span>e-mail: </span><?php echo $email; ?><br>
<span>phone: </span><?php echo $phone; ?><br>
</body>
</html>

