
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




<h1>&nbsp&nbspUndo Recent IP Block</h1>
<br>
<br>
<body>

    <?php
	  session_start();
	  $ip1 = $_SESSION["latest_kick"];
        if(isset($_POST['unkick']) && isset($_SESSION["latest_kick"])) {
		 exec("sudo iptables -D INPUT -s " . $ip1 . " -j DROP");
            echo "<script>window.location = window.location.pathname;</script>";
            exit();
        }
    ?>
      
    <form method="post">
        <input type="submit" name="unkick"
                value=<?php echo htmlspecialchars($_SESSION["latest_kick"]);?>>


     </form>



</body>
</html>
