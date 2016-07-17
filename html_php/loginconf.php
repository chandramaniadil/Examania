<html>
<head>
<title>Registration Check</title>
</head>
<center>
<h3>LOGIN SUCESSFULL <b></b></h3>
<body>
<?php
$u=$_REQUEST['sidlogin'];
$p=$_REQUEST['spasslogin'];


$con=mysql_connect("localhost","root","");
mysql_select_db("examania",$con);
$rsUser=mysql_query("select * from student_details where s_username='$u'",$con);
	if(mysql_num_rows($rsUser)>0)
		{	
			$row=mysql_fetch_array($rsUser);
			if($row['s_pass']==$p)
			{
				if($row['s_type']=='user')
				{
					header("location:user_myprofile.php");
				}
				else
				{
					header("location:admin_panel_dash.php");
				}
			}
			else
			{
				header("location:form_login.php?sta=wp");
			}
		}
	else
	{
		header("location:form_login.php?sta=wu");
	}
	
?>

</body>
</html>