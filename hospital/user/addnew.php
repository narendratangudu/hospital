<!DOCTYPE html>
<html>
<head>
  <title>Homeopathy-Home</title>
  <link rel="stylesheet" href="index.css"   media="all"    type="text/css" />
</head>
<body>
  <a href="index.php"><img src="logo.png" id="logo" alt="logo" title="Go to home page"/></a><br>
  <a id="one" href="home.php">Home</a>
  <a id="two" href="appoints.php">Appointments</a>
  <a id="three" href="appoint.php">Stock</a>
  <p>Add New patient:</p>
  <form enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   Name:<input type="text" name="pname" value="<?php if (!empty($pid)) echo $pid; ?>"><br>
   Address:<textarea name="address"><?php if (!empty($pid)) echo $pid; ?></textarea><br>
   Symptoms:<input type="text" name="pname" value="<?php if (!empty($pid)) echo $pid; ?>"><br>
   <input type="submit" value="SEARCH" name="submit"/>
  </form>

<!--

<?php
   $querys = "SELECT * FROM user WHERE userid= '" . mysqli_real_escape_string($dbc, trim($_SESSION['userid'])) . "' AND superuser = 'YES'";
   $datas = mysqli_query($dbc, $querys);
if (mysqli_num_rows($datas) != 0) {
	echo '<div id="extra"><a id="pending" href="pendingpost.php">Pending Posts</a></div>';
}
   $querya = "SELECT * FROM user WHERE userid= '" . mysqli_real_escape_string($dbc, trim($_SESSION['userid'])) . "' AND admin = 'YES'";
   $dataa = mysqli_query($dbc, $querya);
if (mysqli_num_rows($dataa) != 0) {
	echo '<div id="extra2"><a id="admin" href="pendinguser.php">Pending Users</a></div>';
	echo '<div id="extra3"><a id="emails" href="emails.php">Emails</a></div>';
}



?>
<div id="top">
  <img src="logo.png" alt="logo" id="logo"/>
<?php
   $query = "SELECT * FROM user WHERE userid= '" . mysqli_real_escape_string($dbc, trim($_SESSION['userid'])) . "'";
   $data = mysqli_query($dbc, $query);
   $row = mysqli_fetch_array($data);
   $fname= $row['fname'];
   $lname= $row['lname'];
echo '<p id="username">Hi '.$fname.' '.$lname.'</p>';
?>


  <div id="navmenubox">
    <div id="navmenuin">
<?php
  require_once('navmenu.php');
?>
    </div>
  </div>

<div id="down">
  <div id="posts">
   <p id="line">Latest News: </p>

  <div id="csinews">
   <p id="fstline1">CSI Events: </p>
     <?php
       $query = "SELECT * FROM csinews WHERE event=1 ORDER BY date DESC LIMIT 5";
       $data = mysqli_query($dbc, $query);
        while($row = mysqli_fetch_array($data)) {
          echo '<table id="data1"><tr><td><p id="parag"><a id="onee1" href="csinews.php?newsid='.htmlspecialchars($row['newsid']).'">&#8226'.htmlspecialchars($row['title']).'.</a> Posted on:'.$row['date'].'</p></td></tr></table>';
        }

     ?>
     <a href="csieventsall.php" id="viewmore1" >&nbsp&nbspview more..&nbsp&nbsp</a>
   </div>


  <div id="csinews">
   <p id="fstline1">CSI Latest news: </p>
     <?php
       $query = "SELECT * FROM csinews WHERE event !=1 ORDER BY date DESC LIMIT 5";
       $data = mysqli_query($dbc, $query);
        while($row = mysqli_fetch_array($data)) {
          echo '<table id="data1"><tr><td><a id="onee1" href="csinews.php?newsid='.htmlspecialchars($row['newsid']).'">&#8226'.htmlspecialchars($row['title']).'.</a></td></tr></table>';
        }

     ?>
     <a href="csinewsall.php" id="viewmore1" >&nbsp&nbspview more..&nbsp&nbsp</a>
   </div>

  <div id="genews">
   <p id="sndline">General news: </p>
     <?php
       $query = "SELECT * FROM genews ORDER BY date DESC LIMIT 5";
       $data = mysqli_query($dbc, $query);
        while($row = mysqli_fetch_array($data)) {
          echo '<table id="data2"><tr><td><a id="onee2" href="genews.php?newsid='.htmlspecialchars($row['newsid']).'">&#8226'.htmlspecialchars($row['title']).'.</a></td></tr></table>';
        }
     ?>
     <a href="genewsall.php" id="viewmore2" >&nbsp&nbspview more..&nbsp&nbsp</a>
   </div>



  <p id="fstline">Recent posts: </p>
<?php
   $query = "SELECT * FROM publicnews WHERE approve = 'YES' ORDER BY date DESC LIMIT 5";
   $data = mysqli_query($dbc, $query);

while($row = mysqli_fetch_array($data)) {
$posting = htmlspecialchars($row['posting']);
if(strlen($posting) > 185){
$posting = substr($posting,0,185);
}
      echo '<table id="data"><tr><td><p id="onee"><a id="viewprofile" href="viewprofile.php?userid='.htmlspecialchars($row['userid']).'"> '.htmlspecialchars($row['fname']).'&nbsp'.htmlspecialchars($row['lname']).'&nbsp('.htmlspecialchars($row['level']).')&nbsp&nbsp'.'</a></p></td></tr>';

if(is_file(UPLOADPATH . htmlspecialchars($row['image'])) && filesize(UPLOADPATH . htmlspecialchars($row['image'])) > 0) {
      echo '<tr><td><img src="' .UPLOADPATH . htmlspecialchars($row['image']).'" alt="image" id="postimg" width="100px" height="100px" "/><p id="twoo">'.$posting.'</p></td></tr>';
}
else {
      echo '<tr><td><p id="twoo">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$posting.'</p></td></tr>';
}
      echo '<tr><td><p  id="on">On&nbsp'.htmlspecialchars($row['date']).'<a id="threee" href="viewpost.php?postid='.htmlspecialchars($row['postid']).'">&nbsp&nbspview more&nbsp&nbsp</a></p></td></tr></table>';

}
	echo '</div>';
	echo '<a id="viewmore" href="newsallpriv.php">&nbspview more&nbsp</a>';
?>




<?php
    mysqli_close($dbc);

?>



<?php
  require_once('footerp.php');
?>
</div>
</div>
-->
</body>
</html>
