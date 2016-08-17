<html>
<body>
<style>
body{
background-image:url("5.jpg");
background-repeat:no-repeat;
background-size:100%;
	}
	h1,h3
	{color:white;}
.bml{
text-align:center;
margin-left:430px;
margin-right:300px;
margin-top:30px;
padding-top:30px;
padding-bottom:10px;
width:55%;
}
button
{
width:15%;
height:35px;
border-style:ridge;
border-color: black;
border-width:3px;
border-radius:3px;
background-color:hsla(135,85%,75%,0.6);
cursor:pointer;
}
</style>
<?php 

$link = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('ticketing', $link); 

$name =$_POST["name"];
$rno =$_POST["rno"];
$email =$_POST["mail"];
$phn =$_POST["phone"];
$q=$_POST["qry"];
$qty=$_POST["Quetype"];
//echo $qty;
$sql1 = "INSERT INTO `ticketing`.`student` (`SID`, `SName`, `SRegNo`, `SPhone`, `SEmail`,`Squery`) VALUES (NULL, '$name', '$rno', '$phn', '$email','$q');";
mysql_select_db('ticketing');
$runq1 = mysql_query( $sql1, $link );
$sql2 = "INSERT INTO `ticketing`.`tid` (`TID`, `TPID`, `TQuery`, `TSolution`) VALUES (NULL, '$qty','$q','');";
$runq2 = mysql_query( $sql2, $link );

if($runq1 && $runq2)
{echo "<div class='bml'>";
	echo "<h1>Form successfully submitted!!</h1>";echo"<br>";
 echo "<h3>Thank you for filling in the issue</h3>";echo"<br>";
echo "<h3>You will be notified soon.</h3>";echo"<br>";
echo"</div>";}
else
	echo 'unsuccessful  '. mysql_error();
?>
<br>
<center><button type="button" onclick="window.open('index.html');">Go to Home</button></center>

</body>
</html>