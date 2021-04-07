
<!DOCTYPE html>
<html>


<head>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <link href="home.css" rel="stylesheet" type="text/css">
    <div class="navigation-bar">
        <div id="navigation-container">
	      <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font size="6" color="#ffffff"><b>4240 SSH Intrusion Detection System</b></font>
	      <img src="tinypaw.png">

        </div>
    </div>
</head>




<h1>&nbsp&nbspIP's accessing server via SSH</h1>
<br>
<br>
<h3>&nbsp&nbsp&nbspKick Off IP</h3>
<body>

    <?php
	session_start();
	
	$output = shell_exec('grep -E -o "([0-9]{1,3}[.]){3}[0-9]{1,3}" /var/log/snort/snortLogger.log | grep -v -E "172.31.91.165"');
	$ips = preg_split('/\s+/', $output);


	$ip1 = $ips[0];
	$_SESSION["ip1"] = $ip1;

	$ip2 = $ips[1];
	$_SESSION["ip2"] = $ip2;

	$ip3 = $ips[2];
	$_SESSION["ip3"] = $ip3;

	      
        if(isset($_POST['kick1'])) {
		 exec("sudo iptables -A INPUT -s " . $ip1 . " -j DROP");
		$_SESSION["latest_kick"] = $ip1;
            echo "<script>window.location = window.location.pathname;</script>";
            exit();
        }

        if(isset($_POST['kick2'])) {
		 exec("sudo iptables -A INPUT -s " . $ip2 . " -j DROP");
		$_SESSION["latest_kick"] = $ip2;
            echo "<script>window.location = window.location.pathname;</script>";
            exit();
        }


        if(isset($_POST['kick3'])) {
		 exec("sudo iptables -A INPUT -s " . $ip3 . " -j DROP");
		$_SESSION["latest_kick"] = $ip3;
            echo "<script>window.location = window.location.pathname;</script>";
            exit();
        }


        if(isset($_POST['kick4'])) {
		 exec("sudo iptables -A INPUT -s " . $ip4 . " -j DROP");
		$_SESSION["latest_kick"] = $ip4;
            echo "<script>window.location = window.location.pathname;</script>";
            exit();
        }






    ?>
      
    <form method="post">
        <input type="submit" name="kick1"
                value=<?php echo htmlspecialchars($_SESSION["ip1"]);?>>


     </form>

    <form method="post">
        <input type="submit" name="kick2"
                value=<?php echo htmlspecialchars($_SESSION["ip2"]);?>>


     </form>


    <form method="post">
        <input type="submit" name="kick3"
                value=<?php echo htmlspecialchars($_SESSION["ip3"]);?>>


     </form>





<br><br>

    <form method="post" action=undo.php>
        <input type="submit" name="unkick1"
                value="Undo Recent Kick">


     </form>




</body>
</html>
