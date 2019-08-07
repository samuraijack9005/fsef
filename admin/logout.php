<html><head>
<link href="css/admin_styles.css" rel="stylesheet" type="text/css" />
</head>
<body bgcolor="tan">
<center><img src ="../ele.jpg" alt="site logo" width="100" height="100"></center><br>
<center><b><font size="6">Polling System</font></b></center><br><br>
<div id="page">
<div id="header">
<h1>Logged Out Successfully </h1>
<p align="center">&nbsp;</p>
</div>
<?
session_start();
session_destroy();
?>
You have been successfully logged out of your control panel.<br><br><br>
<div id="container">Return to <a href="index.php">Login</a><br>
Go to Student <a href="../index.php">Login</a>
</div>
<div id="footer">
<div class="bottom_addr">&copy; 2018 Polling System. All Rights Reserved</div>
</div>
</div>
</body></html>
