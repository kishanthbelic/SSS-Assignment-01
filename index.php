<?php
session_start();
require_once'server.php';

?>



<!DOCTYPE html>
<html>
<head>
<title> Secure Software System</title>
<meta charset="utf-8"/>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" id="bootstrap-css" />
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"> </script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="config.js"> </script>
<link rel="stylesheet" href"style.css" type="text/css">



</head>
<body>

                <form method="POST" action="server.php" >
                    
                    <input name="user_name" type="text" placeholder="Enter User Name">
                    <input name="user_pswd" type="password" placeholder="Enter your password">
                    <input name="token" type="hidden" value="<?php echo server::generate(); ?>">
                    <input type="submit" name="submit" value="login" >
                    
                </form>
          


</div>
</body>
</html>
