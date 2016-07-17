<!--exam_portal_login.php-->
<html>
<head>
<title>login form </title>
<link href="../css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php
	include("../include/header.inc");
	include("../include/quicklinks.inc");
	include("../include/dbconnect.inc");
$rsexam=mysql_query("select exam_id,exam_name from exam_type",$con);
 $num=mysql_num_rows($rsexam);
?>

<div id="errorMsg">
	<?php
		if(isset($_REQUEST['sta']))
			{
				if($_REQUEST['sta']=='wu')
					{
						echo"WRONG USERNAME";
					}
				else
					if($_REQUEST['sta']=='wp')
					{
						echo"WRONG PASSWORD";
					}
			}
	?>
   </div> 
  <center><h3> EXAM PORTAL LOGIN</h3></center>
<form name="loginform_exam" method="get" action="loginconf_exam.php">
<center>
	<table cellpadding="6px" cellspacing="6px">
		       
          <tr>
          	<td align="right">Username</td>
          	<td><input type="text" name="sidlogin_exam" border="4px"></td>
           </tr>
          <tr>
          	<td align="right">Password</td>
            <td><input type="password" name="spasslogin_exam"></td>
            </tr>
          <tr>
          <td>Exam type</td>
          <td><select name="s_exam">
          <?php 
          while($row=mysql_fetch_array($rsexam))
			{
				$exam=$row['exam_id'];
				$exam_name=$row['exam_name'];
				echo "<option value='$exam'>";
				echo "$exam_name";
				echo"</option>";
			}
          ?>
          </td>
          </tr>
          <tr>
          	<td align="right"><input type="submit" value="OK" ></td>
            <td><input type="reset" value="CANCEL"></td></tr>
          
      </table>
      </center>
</form>

	</div>
</div>
<?php
	include("../include/footer.inc");
?>
</body>
</html>