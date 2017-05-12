<!DOCTYPE html>
<html>
<head>
  <title>CSI-SRKRIT</title>
  <link rel="stylesheet" href="index.css"   media="all"    type="text/css" />
</head>

<body>
<div id="top">
  <img src="logo.png" alt="logo" id="logo"/>
<?php
if (!isset($_SESSION['userid'])) {
?>
  <div id="navmenubox">
    <div id="navmenuin">
       <a id="one" href="index.php">&nbspHOME&nbsp</a>
       <a  id="two" href="news.php">&nbspPOSTS&nbsp</a>
       <a  id="three" href="login.php">&nbspLOGIN&nbsp</a>
       <a  id="four" href="register.php">&nbspREGISTER&nbsp</a>
       <a  id="five" href="about.php">&nbspABOUT&nbsp</a>
       <a  id="six" href="contact.php">&nbspCONTACT&nbsp</a>
    </div>
  </div>
<?php
}
else {
?>
  <div id="navmenubox1">
    <div id="navmenuin1">
       <a id="one1" href="home.php">&nbspHOME&nbsp</a>
       <a  id="two1" href="post.php">&nbspPOST&nbsp</a>
       <a  id="three1" href="profile.php">&nbspPROFILE&nbsp</a>
       <a  id="four1" href="notif.php">&nbspNOTIFICATIONS&nbsp</a>
       <a  id="five1" href="logout.php">&nbspLOGOUT&nbsp</a>
    </div>
  </div>
<?php
}
?>

</div>
<div id="down">
   <p id="fstline">About US: </p>
  <div id="data">

<div id="paras">
    <p id="para1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDepartment of Information Technology, S.R.K.R Engineering College
registered with C.S.I and formed C.S.I Students chapter (AP-69) in
year 2009. Past from Eight years C.S.I body is very active in conducting
the activities which related to Technical, Social Awareness Programmes, and Soft Skills Programmes in the  our college.</p><br> 

    <!--img src="pic1.jpg" alt="image" id="pic1" /-->
	
    <p id="para2">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspC.S.I Students Chapter (AP-69) conducts “TECHFLEET” a National Level Symposium which discuss about current trends of Information Technology. C.S.I Students Chapter (AP-69) conducts events in every Wednesday regarding Technical and Soft Skills. We make several students to participate in these events which improve Technical Knowledge and Communication skills.</p><br> 
    <p id="para3">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspWe conducted several CSI programs on every Wednesday regarding technical and soft skills. These programs are objected to enhance the skills in programming by C-Quiz, and to improve knowledge in various technical aspects such as Linux, Core part of I.T. In soft skills we conduct several programmes such as Group Discussions, Express to impress which tells us about how to present ourselves, Debate, elocutions and other events which improve communication and inter-personal skills.</p><br> 
    <p id="para3">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspIn our C.S.I programmes we usually conduct G.R.E/G.A.TE mock examinations which improve the knowledge in students and conduct classes for G.A.T.E in areas of Computer Networks, Databases, Theory of Computation, Operating Systems and Computer Organization.</p><br>
    <p id="para3">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspWe improve the vocabulary and communication skills by conducting a PPT Sessions and a challenge to students,i.e every C.S.I member on every Saturday should prepare some words with meanings and they have to explain the words ,so that we the C.S.I body make the students good in vocabulary and by expressing they can improve their communication skills.</p><br>
    <p id="para3">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Regarding the Interview point of view we conduct mock interviews to students and Aptitude tests which include quantative, verbal and reasoning questions. On behalf of C.S.I we even conduct some programmes with a title “HOW TO FACE THE INTERVIEW”.</p><br>
</div>
<div id="div1">
	<p id="headl">C.S.I Students Chapter Co-Ordinator:</p>
	<img src="coordinator.jpg" alt="Coordinator" id="img1" width="150" height="188"/>	<p id="namel">G.P.V.S Varma</p>
	<p id="emaill">...........@gmail.com</p>
</div>
	<p id="headl2">Faculty Coordintors:</p>
<div id="div2">

	<img src="coordinator1.jpg" alt="Coordinator" id="img2" width="" height=""/>	<p id="namel2">Dr.I.HemaLatha</p>
	<p id="emaill2">...........@gmail.com</p>
</div>

<div id="div3">
	<img src="coordinator2.jpeg" alt="Coordinator" id="img3" width="150" height="188"/>	<p id="namel3">K.KishoreRaju</p>
	<p id="emaill3">...........@gmail.com</p>
</div>

<div id="div4">
	<img src="coordinator3.jpg" alt="Coordinator" id="img4" width="150" height="188"/>	<p id="namel4">D.RatnaGiri</p>
	<p id="emaill4">...........@gmail.com</p>
</div>

   </div>




<?php
  require_once('footerp.php');
?>
</div>
</body>
</html>
