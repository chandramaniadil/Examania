
<html>
<head>
<link href="../css/style.css" type="text/css" rel="stylesheet" />
<title>Welcome to EXAMANIA</title>
<style>
p{color:#3D4A54;
}
</style>
</head>
<body>
<?php
	include("../include/header.inc");
?>
<!--====================================================header closed================================================-->

<?php
	include("../include/quicklinks.inc");
?>
<!--=====================================================Quick links=================================================-->	
	
    <!-- 	<div id="space">
        </div><!--end of space -->
        <div class="modules">
        	<h3>NOTIFICATIONS...</h3>
            <a href="news.php">News and notifications related to the online exams.</a><br>
            

        </div><!--end of module 1 -->
        <div class="modules">
        	<h3>COURSES...</h3>
            Want to enquire about EXAMANIA and its courses?<br>
            <a href="courses.php"> Click here</a>

        </div><!--end of module 2 -->
        <div class="modules">
        	<h3>LOGIN/REGISTER...</h3>
            If you are an existing user please login to your account<br>
            <a href="form_login.php"> Login</a><br>
            else REGISTER NOW!! 
            <a href="form_reg.php">Register</a>
        </div><!--end of module 3 -->
        
        <div class="modules">
        	<h3>REFERENCES...</h3>
            EXAMANIA provides you the name of best books that can be referred during oyur preparation.<br>
            <a href="references.php"> Click here</a>
        </div><!--end of module 4 -->
        
        <div class="modules">
        	<h3>DOWNLOADS...</h3>
            <a href="downloads.php">Download previous years papers</a><br>
            
			<a href="downloads.php">Download sample papers</a><br>
             
        </div><!--end of module 5 -->
        
        <div class="modules">
        	<h3>ENQUIRY...</h3>
            Want to enquire about EXAMANIA and its courses?<br>
            <a href="form_enq.php"> Click here</a>
        </div><!--end of module 6 -->
        
	</div><!--end of dynamic-->
    <div style="clear:both;">
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
</div>
</div><!--end of middleone-->


<!--====================================================footer starts================================================-->
<?php
 	include("../include/footer.inc");
?>   
</body>
</html>
