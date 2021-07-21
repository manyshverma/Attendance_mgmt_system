
<?php 

	include "Config.php"; ?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Dashboard I Admin Panel</title>
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<style type="text/css">
	#main .module.width_full .module_content .stats_graph center table tr td table {
	font-size: 10px;
}
    <style>
	body {
        background-image: url("banner1.jpg");
} 
	
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>
</style>
</head>


<body>

	

		
		
	
			<?php
        
        $host="localhost";
        $username="root";
        $password="";
        $db_name="attnd1";
        $tbl_name="message";
        
        $con=mysqli_connect("$host","$username","$password")or die("cannot connect");
        mysqli_select_db($con,"$db_name")or die("cannot select DB");
        $sql="SELECT*FROM $tbl_name ORDER BY id_message DESC";
        $result=mysqli_query($con,$sql);
        ?>
			
			
		<article class="module width_quarter">
			<header><h3>Messages</h3></header>
			<div class="message_list">
				<div class="module_content">
                                    <?php
        while($rows=mysqli_fetch_array ($result))
        {
        ?>
		<div>

					<div class="message"><p> From::<b><?php echo $rows['name'];?></div></p>
					<div class="message"><p> Notice Subject::<b><?php echo $rows['email'];?></div></p>
					
					<div><p><strong>Message::<?php echo $rows['message'];?></strong></p></div>
		</div>
		<br>
        <?php
        
        }
        
        ?>

				</div>
			</div>

			<footer>
        <?php
        mysqli_close($con);
        ?>

				<form class="post_message">
				</form>
			</footer>
		</article><!-- end of messages article -->
		
		<div class="clear"></div><!-- end of post new article --><!-- end of styles article -->
	  <div class="spacer"></div>
	</section>


</body>

</html>