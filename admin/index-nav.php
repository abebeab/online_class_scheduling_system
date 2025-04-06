	<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
	<div class="container">
	     
		<a class="branded">
		<img src="img/hlogo.jpg" width="100" height="90">
 	</a> 
	<a class="brand">
	 <h1><center>Academic Scheduling System</center></h1>
	 <div class="chmsc_nav"><font size="5" color="white"> <center>Higland College Injibara Campus</center></font></div>
 	</a>
<div class="time_top">	
<font color="orange">
<?php
                    $Today = date('Y-m-d');  // Using correct format for date
                    $new = date('l, F d, Y', strtotime($Today)); // Formatted date
                    echo $new;
                    ?>
</font>
<br>
	<a href="../index.php" class="btn btn-warning"><i class="icon-arrow-left icon-large"></i>&nbsp;Back to Home</a>
	
</div>
	</div>
	</div>
	</div>