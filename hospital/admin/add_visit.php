<!DOCTYPE html>
<html>
<head>
  <title>Homeopathy-Add Patients</title>
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

  if (isset($_POST['submit'])) {
     $cur_symts = mysqli_real_escape_string($dbc, trim($_POST['cur_symts']));
     $rect = mysqli_real_escape_string($dbc, trim($_POST['rect']));
     $prec = mysqli_real_escape_string($dbc, trim($_POST['prec']));
     $other = mysqli_real_escape_string($dbc, trim($_POST['other']));
     
 $query = "INSERT INTO visit (p_id, cur_symts, rect, prec, other, joindate) VALUES ('$p_id', '$cur_symts', '$rect', '$prec', '$other', NOW())";
 mysqli_query($dbc, $query);
 echo "<br>Vist added";
exit();
}
?>



  <table>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']."?p_id=". $_GET['p_id'] ?>">

  <tr><td><label for="cur_symts">Current Symptoms:</label></td>
  <td><textarea id="cur_symts" name="cur_symts"></textarea></td></tr>

  <tr><td><label for="rect">Rectification:</label></td>
  <td><select name="rect" id="rect">
       <option value = "Better than Previous"> Better than Previous </option>
       <option value = "Worst than Previous"> Worst than Previous </option>
       <option value = "Same">Same</option>
      </select> </td></tr>

  <tr><td><label for = "prec" > Prescription given: </label></td>
  <td><textarea id = "prec" name = "prec" ></textarea></td></tr>

  <tr><td><label for = "other" > Any Other notes: </label></td>
  <td><textarea id = "other" name = "other" ></textarea></td></tr>

  <tr><td><input type="submit" id="submit" value="SUBMIT" name="submit"></td></tr></table>
  </form>

</body>
</html>
