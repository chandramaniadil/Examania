<?php
function updateTable($sql)
{
	require_once("../include/dbconnect.inc");
	$rs=mysql_query($sql);
	$firstcol=mysql_field_name($rs,0);
	$col=mysql_num_fields($rs);
	$row=mysql_num_rows($rs);
	$tablename=mysql_field_table($rs,0);
	echo "<form method='get' action='updateselected.php'>";
	echo "<input type='hidden' name='txttable' value=$tablename>";
	echo "<input type='hidden' name='txtcol' value=$firstcol>";
	echo "<table border='1'>";
	echo"<th>";
	echo "Check";
	echo "</th>";
	
	//$rid=mysql_result($rs,0);	
	for($i=0;$i<$col;$i++)
	{
		echo"<th>";
		echo mysql_field_name($rs,$i);
		echo "</th>";
		
		
	}
	echo "</tr>";
	
		$rid=mysql_result($rs,$i[0]);
	for($i=0;$i<$row;$i++)
	{
		if($i%2==0)
		{
			echo "<tr bgcolor=#ccooff>";
		}
		else
		{
			echo "<tr>";
		}
		
		$rid=mysql_result($rs,$i);
		echo "<td>";
		echo "<input type='checkbox' name='chkid[]' value='$rid'>";
		echo "</td>";
		for($j=0;$j<$col;$j++)
		{
			echo "<td>";
			echo mysql_result($rs,$i,$j);
			echo "</td>";
			
		}
		
		echo "</tr>";
	}
	echo "</table>";
	echo "<input type='submit' value='accept'>";
	echo " </form>";
}
?>