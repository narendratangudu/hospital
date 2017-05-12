<!DOCTYPE html>
<html>
<head>
  <title>Homeopathy-Home</title>
  <link rel="stylesheet" href="index.css"   media="all"    type="text/css" />
  <style>
   #one {
	border-bottom:3px solid #1C3B23;
	}
  </style>
</head>
<body>
<?php require_once("navmenu.php"); ?>
<?php require_once('dbconnect.php'); ?>
<?php
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
     $p_id = $_GET['p_id'];
     $query = "SELECT * FROM patient WHERE p_id='$p_id'";
     $data = mysqli_query($dbc, $query);
	while($row = mysqli_fetch_array($data)) {
	      echo '<br><p id="val">Name : '.$row['pname'].'<br>';
	      echo 'Phone : '.$row['phone'].'<br>';
	      echo 'Email : '.$row['email'].'<br>';
	      echo 'Address : '.$row['address'].'<br>';
	      echo 'Gender : '.$row['gender'].'<br>';
	      echo 'Age : '.$row['age'].'<br>';
	      echo 'Symptoms : '.$row['symptoms'].'<br>';
	      echo 'JoinDate : '.$row['joindate'].'<br></p>';
	      echo '<br><a href="add_visit.php?p_id='.$row['p_id'].'" id="newlink">Add Visit</a>';
	}


     $query = "SELECT * FROM visit WHERE p_id='$p_id' ORDER BY joindate";
     $data = mysqli_query($dbc, $query);
	while($row = mysqli_fetch_array($data)) {
	      echo '<br><p id="val">Current Symptoms : '.$row['cur_symts'].'<br>';
	      echo 'Rectification : '.$row['rect'].'<br>';
	      echo 'Prescription Given : '.$row['prec'].'<br>';
	      echo 'Other notes : '.$row['other'].'<br>';
	      echo 'Date of Visit : '.$row['joindate'].'<br>';

	}



?>



</body>
</html>
