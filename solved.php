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

$sol =$_POST["sln"];
$id=$_POST["id"];
	$sql = "update tid set Tsolution = '$sol' where TID='$id'";
	
   $retval = mysql_query( $sql, $link );
   
 if($retval)
 {echo "<div class='bml'>";
	 echo "<h1>Form successfully submitted!!</h1>";echo"<br>";
 echo "<h3>Thank you for providing the solution</h3>";echo"<br>";
 echo "<h3>The student will be notified soon.</h3>";echo"<br>";
echo"</div>";
 }
 else
echo 'unsuccessful    '. mysql_error();
 ?>
<center>
<button type="button" onclick="window.open('index.html');">Go to Home</button>
</center>
 </body>
</html>