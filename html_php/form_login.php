<html>
<head>
<title>login form </title>
<link href="../css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php
	include("../include/header.inc");
	include("../include/quicklinks.inc");
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
  <center><h3>LOGIN FORM</h3></center>
<form name="loginform" method="get" action="loginconf.php">
<center><table cellpadding="6px" cellspacing="6px">
		<form id="loginform">       
          <tr><td align="right">Username</td><td><input type="text" name="sidlogin" border="4px"></td></tr>
          <tr><td align="right">Password</td><td><input type="password" name="spasslogin"></td></tr>
       <!--   <tr><td>Confirm your password</td><td><input type="password"></td></tr>-->
          <tr><td align="right"><input type="submit" value="OK" ></td><td><input type="reset" value="CANCEL"></td></tr>
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