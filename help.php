
<?php include('header.php'); include('hover.php'); include('admin/dbcon.php'); ?>
</head> 
<body>
<div class="coat">
<div class="wrapper">
<div class="navbar navbar-fixed-top">
 <div class="navbar">
  <div class="navbar-inner">
  <div class="nav_jkl">
     
    </div>
  </div>
</div>
</div>

<div class="hero-unit">
<div id="myCarousel" class="carousel slide">
  <!-- Carousel items -->
   <div class="carousel-inner">
    <div class="active item"><img src="img/6.jpg" width="1090" height="260"></div>
    <div class="item"><img src="img/7.jpg" width="1090" height="260"></div>
    <div class="item"><img src="img/9.jpg" width="1090" height="260"></div>
    <div class="item"><img src="img/graduation.jpg" width="1090" height="260"></div>
	 <div class="item"><img src="img/11.jpg" width="1090" height="260"></div>
	 <div class="item"><img src="img/8.jpg" width="1090" height="260"></div>
	 
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>
</div>

<div class="hero-unit-bud">
<ul class="nav nav-tabs"> 
   
   <li class="about">
    <a href="index.php" style="color:white;"><i class="icon-info-sign icon-large"></i>Highland College</a>
   </li>
<li><a class="site" href="#settings" data-toggle="tab"><font color="white"><i class="icon-sitemap icon-large"></i></font><font color="yellow">Site Map</a></font> </li>
   <li class="active">
     <a href="index.php" style="color:white;"><i class="icon-home icon-large"></i>Home</a> 
   </li>
   <li class="dropdown">
     <a href="#"
           class="dropdown-toggle"
           data-toggle="dropdown" style="color:white;">
           <i class="icon-search icon-large"></i>Exam Schedule
           <b class="caret"></b>
       
     </a>
     <ul class="dropdown-menu">
 
       <li><a data-toggle="modal" href="#exam_teacher">Teacher</a></li>
       <li><a  data-toggle="modal" href="#exam_CYS">Course Year Section</a></li>
       <li><a data-toggle="modal" href="#exam_room">Room</a></li>
     
     </ul>
   </li>
    <li class="divider-vertical"></li>
   <li class="dropdown">
     <a href="#"
           class="dropdown-toggle"
           data-toggle="dropdown" style="color:white;">
           <i class="icon-search icon-large"></i>Class Schedule
           <b class="caret"></b>
     </a>
     <ul class="dropdown-menu">
      
       <li><a data-toggle="modal" href="#teacher">Teacher</a></li>
       <li><a data-toggle="modal" href="#CYS">Course Year Section</a></li>
       <li><a href="#room"  data-toggle="modal">Room</a></li>
     
     </ul>
   </li>
       <li class="divider-vertical"></li>
   <li><a href="help.php" class="help" id="help" style="color:white;"><i class="icon-question-sign icon-large"></i>Help</a></li>
 
     <li class="divider-vertical"></li>
   <li><a href="admin/index.php" class="admin" style="color:white;"><i class="icon-user icon-large"></i>Admin Login</a></li>
  
   
 
 
<div class="jkl">
  
<a href="https://www.facebook.com/highlandcollegbd/" class="facebook"><img src="img/facebook.png"/></a><a href="https://t.me/highlandcollegeinjibara" class="Telegram"><img src="img/Telegram-icon.png" width="40" height="40"/></a>  
</div>
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="home">
  <div class="hero-unit-y">

<img src="img/helpme.jpg">
</br>
<img src="img/helpme1.jpg">
     </div>
	</br>
  





</div>
<div class="tab-pane" id="settings">
                  <p><iframe width="1055" height="390" frameborder="10" scrolling="no" marginheight="0" marginwidth="auto"
				   src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.939893555102!2d36.928774448887005!3d10.96790959215345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x165a9f36494f92df%3A0x544a041cef553422!2z4Yuo4YiA4Yut4YiL4YqV4Yu1IOGImOGIneGIheGIq-GKlSDhiLXhiI3hjKDhipMg4Yqu4YiM4YyF!5e0!3m2!1sam!2set!4v1674215510547!5m2!1sam!2set" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"> 
				  </iframe></p></div>

          
</div>
</div>


<div class="hero-unit-bud">
 <div class="hero-unit-yy">
<p><font color="white"><b>Related Sites</b></font></p>
<a href="https://highlandcollege.net"><font color="white"> highlandcollege.net</font></a> 
</div>
</div>
<?php include('footer.php'); ?>
</div>
</div>


</body>



				<div class="modal hide fade" id="teacher">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">

   
  <h2>Search Teacher Schedule</h2>
Please select data on each field to filter.
<hr>
	   <form id="save_voter" class="form-horizontal" method="POST" action="search_teacher_result.php">	
    <fieldset>
	</br>
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter601">
    
	<div class="control-group">
    <label class="control-label" for="input01">Teacher:</label>
    <div class="controls">
   <select name="teacher" class="span333">
	<option>--Select--</option>
		<?php $teacher_query=mysqli_query($conn,"select * from teacher")or die(mysqli_error());
while($teacher_row=mysqli_fetch_array($teacher_query)){
	?>
	<font size="30"><option><?php echo $teacher_row['Name'] ?></option></font>
	<?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Semester:</label>
    <div class="controls">
   <select name="semester" class="span333">
	<option>--Select--</option>
	<option>1st</option>
	<option>2nd</option>
	</select>
    </div>
    </div>
	
	
	<div class="control-group">
    <label class="control-label" for="input01">School Year:</label>
    <div class="controls">
   <select name="sy" class="span333">
	<option>--Select--</option>
<?php $sy_query=mysqli_query($conn,"select * from sy")or die(mysqli_error());
while($sy_row=mysqli_fetch_array($sy_query)){
 ?>
<option><?php echo $sy_row['sy']; ?></option>
 <?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">

	<div class="control-group">
    <div class="controls">
	<button id="save_voter" class="btn btn-primary" name="save"><i class="icon-ok icon-large"></i>Submit</button>
    </div>
    </div>
	
    </fieldset>
    </form>
  
  
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
				
				
								<div class="modal hide fade" id="CYS">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">


  <h2>Search Course Year Section Schedule</h2>
Please select data on each field to filter.
<hr>
	   <form id="save_voter" class="form-horizontal" method="POST" action="CYS_result.php">	
    <fieldset>
	</br>
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter601">
    
	<div class="control-group">
    <label class="control-label" for="input01">Course Year Section:</label>
    <div class="controls">
   <select name="CYS" class="span333">
	<option>--Select--</option>
	<?php $CYS_query=mysqli_query($conn,"select * from course")or die(mysqli_error());
while($CYS_row=mysqli_fetch_array($CYS_query)){
	?>
	<option><?php echo $CYS_row['course_year_section']; ?></option>
	<?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Semester:</label>
    <div class="controls">
   <select name="semester" class="span333">
	<option>--Select--</option>
	<option>1st</option>
	<option>2nd</option>
	</select>
    </div>
    </div>
	
	
	<div class="control-group">
    <label class="control-label" for="input01">School Year:</label>
    <div class="controls">
   <select name="sy" class="span333">
	<option>--Select--</option>
<?php $sy_query=mysqli_query($conn,"select * from sy")or die(mysqli_error());
while($sy_row=mysqli_fetch_array($sy_query)){
 ?>
<option><?php echo $sy_row['sy']; ?></option>
 <?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">

	<div class="control-group">
    <div class="controls">
	<button id="save_voter" class="btn btn-primary" name="save"><i class="icon-ok icon-large"></i>Submit</button>
    </div>
    </div>
	
    </fieldset>
    </form>
 
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
		
		
		
					<div class="modal hide fade" id="room">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">

  <h2>Search Rooms Schedule</h2>
Please select data on each field to filter.
<hr>
	   <form id="save_voter" class="form-horizontal" method="POST" action="search_room_result.php">	
    <fieldset>
	</br>
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter601">
    
	<div class="control-group">
    <label class="control-label" for="input01">Rooms:</label>
    <div class="controls">
   <select name="room" class="span333">
	<option>--Select--</option>
	<?php $room_query=mysqli_query($conn,"select * from room")or die(mysqli_error());
while($room_row=mysqli_fetch_array($room_query)){
	?>
	<option><?php echo $room_row['room_name']; ?></option>
	<?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Semester:</label>
    <div class="controls">
   <select name="semester" class="span333">
	<option>--Select--</option>
	<option>1st</option>
	<option>2nd</option>
	</select>
    </div>
    </div>
	
	
	<div class="control-group">
    <label class="control-label" for="input01">School Year:</label>
    <div class="controls">
   <select name="sy" class="span333">
	<option>--Select--</option>
<?php $sy_query=mysqli_query($conn,"select * from sy")or die(mysqli_error());
while($sy_row=mysqli_fetch_array($sy_query)){
 ?>
<option><?php echo $sy_row['sy']; ?></option>
 <?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">

	<div class="control-group">
    <div class="controls">
	<button id="save_voter" class="btn btn-primary" name="save"><i class="icon-ok icon-large"></i>Submit</button>
    </div>
    </div>
	
    </fieldset>
    </form>
 
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
		
	
	
					<div class="modal hide fade" id="exam_teacher">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">

	    
  
 <?php include('exm.php'); ?>
</html>



