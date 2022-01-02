<html>
<head> </head>
<body>
    <?php
    include "config.php";
    ?>
    <form action ="result.php" >
        <input type= "text" name = "search">
        <input type ="submit" value = "submit">
</form>
<?php
$conn->close();
?>
</body>
</html>