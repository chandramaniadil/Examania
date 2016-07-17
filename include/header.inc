
	<div id="main"> 
    	<div id="one"><a href="index.php"><img src="../images/index.jpg" width=100 height=100 title="examania" alt="examania"></a></div>
        <div id="two"><a href="index.php"><img src="../images/index.jpg" width=300 height=100 title="examania" alt="examania"></a></div>
        <div id="three"><a href="form_login.php">Login</a></div>
        <div id="images"><img src="../images/imagescgf.jpg" width=910 height=100 title="examania" alt="examania"/></div>
        <div id="four">
			<ul><li><a href="index.php">Home</a></li>
            	<li id="coursesubmenu"><a href="#">Courses</a>
			<ul>	
			<?php
					require_once("../include/dbconnect.inc");
					$rscourse=mysql_query("select * from courses",$con);
					$col=mysql_num_fields($rscourse);
					for($i=0;$i<$col;$i++)
{
	
	$row=mysql_fetch_array($rscourse);
	echo "<li>".$row['c_name']."</li>";
}
				?>
				
                    </ul>
                </li>
                <li><a href="news.php">News</a></li>
                <li id="helpsubmenu"><a href="help.php">Help</a>
                	<ul><li><a href="help.php">FAQs</a></li>
                    	<li><a href="form_feedback.php">Feedback</a></li>
                    </ul>
                </li>
                <li><a href="form_enq.php">Enquiry</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
			</ul>
         </div><!--closing of four div-->
        	
    </div><!--closing of main-->
</body>
</html>