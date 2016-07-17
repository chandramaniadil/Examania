<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>hit counter</title>
</head>
<body>
<?php
$counterFile="./count.dat";
if((!file_exists($counterFile)))
{
	if(!($handle=fopen($counterFile,"w")))
	{
		die( "cannot create counter file.");
	}
	else
	{
		fwrite($handle,0);
		fclose($handle);
	}
}
if(!($handle=fopen($counterFile,"r")))
{
	die("cannot read the counter file.");
}
$counter=(int)fread($handle,20);
fclose($handle);
$counter++;
echo "<p>You are vistor no.$counter.</p>";
if(!($handle = fopen($counterFile,"w")))
{
	die("cannot open counter file for writing");
}
fwrite($handle,$counter);
fclose($handle);
?>




</body>
</html>