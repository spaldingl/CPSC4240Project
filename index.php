<!DOCTYPE html>
<html>

<h1>CPSC 4240 Intrustion Detection</h1>
<h4>Spalding, Thomas, Chase, Charlotte</h4>
<br>

<body>


    <?php
      
        if(isset($_POST['button1'])) {
            exec("./test.sh");
        }
    ?>
      
    <form method="post">
        <input type="submit" name="button1"
                value="Button1"/>
     </form>




</body>
</html>
