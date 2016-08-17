	<!doctype html>
<html>
<head>
<style>
body{
background-image:url("5.jpg");
background-repeat:no-repeat;
background-size:100%;
	}
.bml{
text-align:center;
margin-left:430px;
margin-right:300px;
margin-top:10px;
padding-top:10px;
padding-bottom:10px;
width:55%;
	
}
input[type=text],input[type=email],select,input[type=number]{
border:3px solid black;
border-radius:5px;
width:40%;
padding:0;
margin:0;
height:30px;
color:black;
background-color:rgba(240,240,240,0.7);
}
textarea
{font-size:20px;
border:3px solid black;
border-radius:5px;
width:40%;
padding:0;
margin:0;
height:100px;
background-color:rgba(240,240,240,0.7);
}
input[type=submit],button
{
width:15%;
height:25px;
border-style:ridge;
border-color: black;
border-width:3px;
border-radius:3px;
background-color:hsla(135,85%,75%,0.6);
cursor:pointer;
}
b
{text-align:center;
font-size:25px;
color:white;
}
::-webkit-input-placeholder {
   color: black;
}

	
</style>
</head>
<body>

<div class="bml">
<i><h1 style="text-align:center;color:white;font-size:45px;">Raise a Ticket</h1></i><br><br><br>
<form action="raisefill.php" method="post">
<b>Name:</b></br>
<input type="text" name="name" placeholder="Enter name" required >
<br><br><b>RegNo.:</b><br>
<input type="text" name="rno" placeholder="Enter reg no" required >
<br>
<br>
<b>E-mail.:</b></br>
<input type="email" name="mail" placeholder="Enter mail" required >
<br>
<br>
<b>Phone.:</b></br>
<input type="number" min="1000000000" max="9999999999" name="phone" placeholder="Enter phone number"  required >
<br>
<br><br><br>
<?php
$link = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('ticketing', $link); 
$query = mysql_query('select * from priority'); 
echo "<select name=\"Quetype\">"; 
while ($row = mysql_fetch_array($query)) {
	echo "<option value=\"".$row['PID']."\">".$row['PType']."</option>";

}
echo "</select>";
?>
<br><br>
<b>Query.:</b></br>
<input type="text" name="qry" placeholder="Enter query" required >
<br>

<br>
<b>Comments:</b></br>
<textarea name="comm" placeholder="Comments please" rows="10" cols="60">
</textarea>	
</br></br>

<br>
<br>
<input type="submit">
</form>
</div>
</body>
</html>

