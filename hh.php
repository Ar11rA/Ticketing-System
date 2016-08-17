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
input[type=text],input[type=email],select{
border:3px solid black;
border-radius:5px;
width:40%;
padding:0;
margin:0;
height:40px;
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
height:130px;
background-color:rgba(240,240,240,0.7);
}
input[type=submit],button
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
b
{text-align:center;
font-size:25px;
color:white;
}
::-webkit-input-placeholder {
   color: black;
}
table
{
width:75%;
margin-left:100px;
}
table td,th
{color:black;

padding:10px;
text-align:center;
}
table,table th,table td
{background-color:hsla(135,85%,75%,0.1);
border:1px solid black;
border-collapse:collapse;
}
table th{
background-color:hsla(135,85%,75%,0.6);
color:white;
}

	
</style>

<div class="bml">
<h1> Welcome Employee! </h1><br>
<h3> Here is a list of tickets you need to solve <h3>
<?php
$link = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('ticketing', $link); 
$query = mysql_query('select * from tid where TSolution="" order by TPID asc');
 
?>

         <table>
            <tr>
                <th>TICKET ID</th>
                <th>QUERY</th>
                <th>PRIORITY</th>	
                
            </tr>

<?php
               while ($row = mysql_fetch_array($query)) {
?>
                  <tr>
                <td><?php echo $row['TID']; ?></td>
                <td><?php echo $row['TQuery']; ?></td>
                <td><?php echo $row['TPID']; ?></td>
                
                </tr>
				 <?php
               }

            ?>
        </table>
<br><br><br>
<form name="f1" method="post" action="solve.php">

<?php
$link = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('ticketing', $link); 
$query = mysql_query('select * from tid where TSolution="" order by TPID');
echo "<select name=\"ticket\">"; 
while ($row = mysql_fetch_array($query)) {
	echo "<option value=\"".$row['TID']."\">".$row['TID']."</option>";

}
echo "</select>";
?> 
<input type="submit" value="Solve">
</form>
</div>
</body>
</html>
