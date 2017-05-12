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
  if (isset($_POST['submit'])) {
     $p_id = mysqli_real_escape_string($dbc, trim($_POST['p_id']));
     $query = "SELECT * FROM patient WHERE p_id='".$p_id."'";
     $data = mysqli_query($dbc, $query);
	while($row = mysqli_fetch_array($data)) {
	      echo '<br><a href="view_patient.php?p_id='.$row['p_id'].'" id="newlink">'.$row['pname'].'</a>';

	}
}




?>

 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <label for="p_id">Patient Id :</label>
  <input type="text" name="p_id" id="p_id">
  <input type="submit" id="submit" value="SEARCH" name="submit">
 </form>

</body>
</html>
