<?php
$logfile_path = 'visitors.json';
include 'log.php';
appendConnectionInfo($logfile_path);
?>
<html>
<head>
  <title>Your page to be logged</title>
</head>

<body>
  <h1>See your IP and user agent infos <a href="visitors.json">here</a></h1>
</body>
</html>