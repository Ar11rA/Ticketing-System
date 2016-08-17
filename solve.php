<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("#srch").click(function(){
    loadmore();
  });
});

function loadmore()
{
  var id=document.forms["f1"]["qry"].value;
  $.ajax({
  type: 'post',
  url: 'fetch.php',
  data: {"qry": id},
  success: function (response) {
    //content.innerHTML = content.innerHTML+response;
if(response==-1)
{	alert("NO EXISTING SOLUTION");
}
else
	document.forms["f1"]["sln"].value=response;
   // We increase the value by 2 because we limit the results by 2
   
  }
  });
}
</script>

<style>
body{
background-image:url("5.jpg");
background-repeat:no-repeat;
background-size:100%;
	}
.bml{
	
text-align:center;
margin-left:427px;
margin-right:300px;
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
height:100px;
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
</style>
</head>
<div class="bml">
<form name="f1" method="post" action="solved.php">
<?php
$link = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('ticketing', $link); 
$t1=$_POST["ticket"];

$query = mysql_query("SELECT * FROM student, tid WHERE TQuery = Squery AND TID ='$t1'");
$data1 = mysql_fetch_array($query);
?> 
<input type="hidden" name="id" value="<?php echo $t1?>" readonly>
<b>Name:</b><br>
<input type="text" name="name" value="<?php echo $data1['SName']?>" readonly>
<br><br>
<b>Registration No.:</b></br>
<input type="text" name="rno" value="<?php echo $data1['SRegNo']?>" readonly>
<br>
<br>
<b>Phone:</b></br>
<input type="text" name="bday" value="<?php echo $data1['SPhone']?>" readonly>
<br>
<br>
<b>E-mail:</b></br>
<input type="email" name="mail" value="<?php echo $data1['SEmail']?>" readonly>
<br>
<br>
<b>Query:</b></br>
<input type="text" name="qry"  value="<?php echo $data1['Squery']?>" readonly> 
 </br></br>	
<button type="button" id="srch">Search for solution</button>
</br>	
</br></br>
<div id="content"> <div id="result_para"> </div> </div>
<b>Solution:</b></br>
<input type="text" name="sln" rows="10" cols="60"  > 
<br><br>
<input type="submit">&nbsp;&nbsp;&nbsp;<button type="button" name="cancel">Cancel</button>
<br>
<br>
</form>
</div>
</body>
</html>
