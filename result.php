<html>
    <head><link rel="stylesheet" href="result1.css"></head>
    <body>
    <h1 class="main_heading">Data Access Page</h1>
<?php
include "config.php";
$find=$_GET["search"];
$sql="SELECT * FROM storage WHERE id=$find";
$output=$conn->query($sql);
if($output->num_rows>0)
{
    echo"<table border=1 cellspacing=1 cellpadding=1><tr><th>Serial No</th>
    <th>Product ID</th>
    <th>Name of Product</th>
    <th>Count</th>
    <th>Arrival date</th>
    <th>Departure date</th>
    <th>Delivery Place</th>" ;
    while($row=$output->fetch_assoc())
    {
        echo 
        "<tr><td><font color=red>".$row["sn"].
        "</font></td><td><font color=red>".$row["id"].
        "</font></td><td><font color=red>".$row["nm"].
        "</font></td><td><font color=red>".$row["ct"].
        "</font></td><td><font color=red>".$row["arr"].
        "</font></td><td><font color=red>".$row["dep"].
        "</font></td><td><font color=red>".$row["pla"]."</font></td></tr>";
    }
    echo"</table>";
}
else
{
    echo"Not Found!";
}
?>
</body>
</html>