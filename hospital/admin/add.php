<!DOCTYPE html>
<html>
<head>
  <title>Homeopathy-Add Patients</title>
  <link rel="stylesheet" href="index.css"   media="all"    type="text/css" />
  <style>
   #three {
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
     $pname = mysqli_real_escape_string($dbc, trim($_POST['pname']));
     $phone = mysqli_real_escape_string($dbc, trim($_POST['phone']));
     $email = mysqli_real_escape_string($dbc, trim($_POST['email']));
     $addr = mysqli_real_escape_string($dbc, trim($_POST['addr']));
     $gender = mysqli_real_escape_string($dbc, trim($_POST['gender']));
     $age = mysqli_real_escape_string($dbc, trim($_POST['age']));
     $symts = mysqli_real_escape_string($dbc, trim($_POST['symts']));

 $query = "INSERT INTO patient (pname, phone, email, address, gender, age, symptoms, joindate) VALUES ('$pname', '$phone', '$email', '$addr', '$gender', '$age', '$symts', NOW())";
 mysqli_query($dbc, $query);
 echo "<br>Patient is added";
exit();
}
?>


  <p id="tweet2">"Please Enter Patient details"</p> <br>
  <table>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <tr><td><label for="pname">Patient Name:</label></td>
  <td><input type="text" name="pname" id="pname"></td></tr>

  <tr><td><label for="phone">Contact Number:</label></td>
  <td><input type="text" name="phone" id="phone"></td></tr>

  <tr><td><label for="email">Email Address:</label></td>
  <td><input type="text" name="email" id="email"></td></tr>

  <tr><td><label for="addr">Address:</label></td>
  <td><textarea id="addr" name="addr"></textarea></td></tr>

  <tr><td><label for="gender">Gender:</label></td>
  <td><select name="gender" id="gender">
       <option value = "Male"> Male </option>
       <option value = "Female"> Female </option>
      </select> </td></tr>

  <tr><td><label for="age">Age:</label></td>
  <td><input type="text" name="age" id="age"></td></tr>

  <tr><td><label for="symts">Symptoms:</label></td>
  <td><textarea id="symts" name="symts"></textarea></td></tr>

  <tr><td><input type="submit" id="submit" value="SUBMIT" name="submit"></td></tr></table>
  </form>

</body>
</html>
