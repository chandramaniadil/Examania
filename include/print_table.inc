<?php
function displayTable($sql)
{
	require_once("../include/dbconnect.inc");
	$rs=mysql_query($sql);
	$firstcol=mysql_field_name($rs,0);
	$col=mysql_num_fields($rs);
	$row=mysql_num_rows($rs);
	$tablename=mysql_field_table($rs,0);
	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>"."S No"."</th>";
	//$rid=mysql_result($rs,0);	
	for($i=0;$i<$col;$i++)
	{
//		$rid=mysql_result($rs,$i);
		echo"<th>";
		echo mysql_field_name($rs,$i);
		echo "</th>";
	}
	echo "</tr>";
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
		echo "<td>".($i+1)."</td>";
		$rid=mysql_result($rs,$i);
		for($j=0;$j<$col;$j++)
		{
			echo "<td>";
			echo mysql_result($rs,$i,$j);
			echo "</td>";
			
		}
		echo "<td>"."<a href='update.php?tab=$tablename & col1=$firstcol & id=$rid'>Delete</a>"."</td>";
		echo "</tr>";
	}
	echo "</table>";
}
?>