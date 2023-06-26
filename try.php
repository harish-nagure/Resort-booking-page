<?php
$fname=$_GET["fname"];
$lname=$_GET["lname"];
$pnumber=$_GET["pnumber"];
$mail=$_GET["email"];
$adults=$_GET["adults"];
$children=$_GET["children"];
$address=$_GET["address"];
$idate=$_GET["idate"];
$odate=$_GET["odate"];
$db=mysqli_connect("localhost","root","","feedback");
if(!$db)
{
echo"unable to connect";
exit();
}
mysqli_select_db($db,"feedback");
$sql="insert into book values (' ".$fname." ',' ".$lname." ',".$pnumber.",' ".$mail." ',".$adults.",".$children.",' " .$address." ',' ".$idate." ',' ".$odate." ')";
echo "$sql";
if(mysqli_query($db,$sql))
{
echo"correct";
}
else
{
echo"wrong";
}
?>
