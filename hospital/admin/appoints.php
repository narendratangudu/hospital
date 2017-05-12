<!DOCTYPE html>
<html>
<head>
  <title>Homeopathy-Home</title>
  <link rel="stylesheet" href="index.css"   media="all"    type="text/css" />
  <style>
   #four {
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
     $date = mysqli_real_escape_string($dbc, trim($_POST['date']));
     $addr = mysqli_real_escape_string($dbc, trim($_POST['addr']));
     $oldornew = mysqli_real_escape_string($dbc, trim($_POST['oldornew']));
     $p_id = mysqli_real_escape_string($dbc, trim($_POST['p_id']));

if($oldornew !='old')
{
 $p_id = 'new';
}
if (!empty($pname) && !empty($phone) && !empty($email) && !empty($date) && !empty($addr) && !empty($oldornew) && !empty($p_id)) {
 $query = "INSERT INTO appoint (pname, phone, email, date, address, oldornew, p_id, subdate) VALUES ('$pname', '$pname', '$email', '$date', '$addr', '$oldornew', '$p_id', NOW())";
 mysqli_query($dbc, $query);
 echo "<br>Your Appointment is received";
exit();
}
else {
echo "Please enter all fields";
}
}
?>


  <p id="tweet2">"Patients can also request an appointment with Dr.Prudvi Raj by submitting the form below and our staff will get back to you by e-mail or phone to conform your appointment request"</p> <br>
  <table>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <tr><td><label for="pname">Patient Name:</label></td>
  <td><input type="text" name="pname" id="pname"></td></tr>

  <tr><td><label for="phone">Contact Number:</label></td>
  <td><input type="text" name="phone" id="phone"></td></tr>

  <tr><td><label for="email">Email Address:</label></td>
  <td><input type="text" name="email" id="email"></td></tr>

  <tr><td><label for="date">Date:</label></td>
  <td><input type="text" name="date" id="date"></td></tr>

  <tr><td><label for="addr">Address:</label></td>
  <td><textarea id="addr" name="addr"></textarea></td></tr>



  <tr><td><label for="old">Old Patient</label>
  <input type="radio" name="oldornew" id="old" value="old" >
  <label for="new">New Patient</label>
  <input type="radio" name="oldornew" id="new" value="new"></td></tr>

  <tr><td><label for="p_id">Patient Id(only for old Patients):</label></td>
  <td><input type="text" name="p_id" id="p_id"></td></tr>

  <tr><td><input type="submit" id="submit" value="SUBMIT" name="submit"></td></tr></table>
  </form>

</body>
</html>
