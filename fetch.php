

 <?php
        mysql_connect('localhost','root','');
        mysql_select_db('ticketing');
		$q1 = $_POST['qry'];
        $select = mysql_query("select * from kb where KBQuery='$q1' ");
        $n=mysql_num_rows($select);
		if($n>0)
		{
		while($row = mysql_fetch_array($select))
        {
          echo $row['KBSoln'];
        }
		}
		else
			echo "-1";
      ?>
 
