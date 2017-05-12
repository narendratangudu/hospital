<!DOCTYPE html>
<html>
<head>
  <title>Homeopathy-Add Patients</title>
  <link rel="stylesheet" href="index.css"   media="all"    type="text/css" />
  <style>
   #two {
	border-bottom:3px solid #1C3B23;
	}
  </style>
</head>
<body>
					<table id="tabl">
                                        <tr>
                                            <th>Patient_id</th>
                                            <th>Patient_Name</th>
                                            <th>Address</th>
                                            <th>Gender</th>
                                            <th>Age</th>
                                            <th>Symptoms</th>
					    <th>View Patient</th>
                                        </tr>
<?php require_once("navmenu.php"); ?>
<?php require_once('dbconnect.php'); ?>
<?php
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  if (isset($_POST['submit'])) {
     $pname = mysqli_real_escape_string($dbc, trim($_POST['pname']));
     $addr = mysqli_real_escape_string($dbc, trim($_POST['addr']));
     $gender = mysqli_real_escape_string($dbc, trim($_POST['gender']));
     $age = mysqli_real_escape_string($dbc, trim($_POST['age']));
     $symts = mysqli_real_escape_string($dbc, trim($_POST['symts']));
     $joindate = mysqli_real_escape_string($dbc, trim($_POST['joindate']));


$query = "SELECT * FROM patient WHERE p_id != 0 ";

if(!empty($pname)) {
	$query .= "AND pname LIKE '%$pname%' ";
}

if(!empty($addr)) {
	$query .= "AND address LIKE '%$addr%' ";
}

if(!empty($gender)) {
	$query .= "AND gender LIKE '%$gender%' ";
}

if(!empty($age)) {
	$query .= "AND age <= '$age' ";
}

if(!empty($symts)) {
	$query .= "AND symptoms LIKE '%$symts%' ";
}

if(!empty($joindate)) {
	$query .= "AND joindate LIKE '%$joindate%' ";
}

$data = mysqli_query($dbc, $query);

    while($row = mysqli_fetch_array($data))
              {
              echo "<tr><td>$row[p_id]</td><td>$row[pname]</td><td>$row[address]</td><td>$row[gender]</td><td>$row[age]</td><td>$row[symptoms]</td>";
             echo "<td align='center'><a href='view_patient.php?p_id=$row[p_id]'>View Patient</a></td>";
				   }
echo "</table>";

}
?>


  <p id="tweet2">Advanced Search</p> <br>
  <table>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <tr><td><label for="pname">Patient Name:</label></td>
  <td><input type="text" name="pname" id="pname"></td></tr>

  <tr><td><label for="addr">Address:</label></td>
  <td><input type="text" name="addr" id="addr"></td></tr>

  <tr><td><label for="gender">Gender:</label></td>
  <td><input type="text" name="gender" id="gender"></td></tr>

  <tr><td><label for="age">Age:</label></td>
  <td><input type="text" name="age" id="age"></td></tr>

  <tr><td><label for="symts">Symptoms:</label></td>
  <td><input type="text" name="symts" id="symts"></td></tr>

  <tr><td><label for="joindate">Joindate:</label></td>
  <td><input type="text" name="joindate" id="joindate"></td></tr>

  <tr><td><input type="submit" id="submit" value="SEARCH" name="submit"></td></tr></table>
  </form>

</body>
</html>
