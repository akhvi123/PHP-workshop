<html >  
<head>
    <title>Data Entry</title>
    <link rel="stylesheet" href="data1.css">
</head>
<body>
<h1 class="main_heading">Data Entry Page</h1>
    <center>  
        <form method="POST"  >                        
        <p>
                <label for="SNo">Serial No :</label>
                <input type="text" name="SNo">
</P>          
<p>
                <label for="PID">Product ID:</label>
                <input type="text" name="PID" >
            </p>           
<p>
                <label for="NP">Name of Product:</label>
                <input type="text" name="NP" >
            </p>           
<p>
                <label for="Ct">Count:</label>
                <input type="text" name="Ct">
            </p>             
<p>
                <label for="Arr">Date of Arrival:</label>
                <input type="Date" name="Arr">
            </p>
            <p>
                <label for="Dep">Date of Departure:</label>
                <input type="Date" name="Dep">
            </p>
            <p>
                <label for="Del">Place of Delivery:</label>
                <input type="text" name="Del" >
            </p>     
            <input type="submit" name="submit" value="Submit" >
        </form>
        <?php
include "config.php";
if(isset($_POST['submit']))
{
    $SNo=$_POST['SNo'];
    $PID=$_POST['PID'];
    $NP=$_POST['NP'];
    $Ct=$_POST['Ct'];
    $Arr=$_POST['Arr'];
    $Dep=$_POST['Dep'];
    $Del=$_POST['Del'];
$ins="INSERT INTO storage values('$SNo','$PID','$NP','$Ct','$Arr','$Dep','$Del')";
if($conn->query($ins)==TRUE)
{
echo"Entered";
}
else
{
    echo"failed";
}
}
?>
       

    </center>
    
</body>  
</html>