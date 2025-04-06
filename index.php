
<?php include('header.php'); include('hover.php'); include('admin/dbcon.php'); ?>

<script type="text/javascript">
	$(document).ready(function()
		{
		$('.more').hide();
		
		 $("#click").click(function () {
      $(".more").toggle("slow");
      $("#click").hide("slow");
    });
	
	

		
		});
</script>
<script type="text/javascript">
	$(document).ready(function()
		{
		$('.more1').hide();
		
		 $("#click1").click(function () {
      $(".more1").toggle("slow");
      $("#click1").hide("slow");
    });
	
	

		
		});
</script>

</head> 
<body>

<div class="coat">

<div class="wrapper_home">
<div class="navbar navbar-fixed-top">
 <div class="navbar">
  <div class="navbar-inner1">
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
<div class="jkl">
<a href="https://www.facebook.com/highlandcollegbd/" class="facebook"><img src="img/facebook.png"/></a> <a href="https://t.me/highlandcollegeinjibara" class="Telegram"><img src="img/Telegram-icon.png" width="40" height="40"/></a> 
</div>
<ul class="nav nav-tabs"> 
   <li><a class="about" href="#profile" data-toggle="tab" style="color:white;"> <i class=" icon-info-sign icon-large"></i> About Highland College</a> </li>

    <li><a class="site" href="#settings" data-toggle="tab"><font color="white"><i class="icon-sitemap icon-large"></i></font><font color="yellow">Site Map</a></font></li>
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
 
  
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="home">
  <div class="hero-unit-y">

  
  <p><h1>WELL COME TO HIGHLAND  COLLEGE</h1></p>
  <center><p><blockquote><i><h2 style="color:blue;">  What is High in HIghland is Quality!</h2></i></blockquote></p></center>
  <hr>
  <p>
  Wellcome to Highland College; Currently, the College has two campuses, one main campus in Bahir Dar and its branch campus is at Injibara. The College has also upgrading its training and offers Degree and TVET programs in various fields of study in regular, extension and distance divisions. 
 Highland college provides mainly management and accounting and finance field of studies with distance , regular and extension programs
 
  We are  also interested to notify you that our college is in the pipe line to open other market oriented departments in the not distant future.</div>
 </div>
  <div class="tab-pane" id="profile">
    <div class="hero-unit-y">
  <div class="hero-unit-y">
  <div class="about_nav">

  <ul class="nav nav-tabs nav-stacked">
 
<ul class="nav nav-tabs nav-stacked">
  <li class="active"><a href="#"><font color="white"><i class="icon-book icon-large"></i></font><font color="orange">History</font></a></li>
  <li><a data-toggle="modal" href="#mission"><font color="white"><i class=" icon-list-alt icon-large"></i></font><font color="orange">Mission</font></a></li>
  <li><a data-toggle="modal" href="#vision"><font color="white"><i class=" icon-list-alt icon-large"></i></font><font color="orange">Vision</font></a></li>
  <li><a data-toggle="modal" href="#mandate"><font color="white"><i class=" icon-list-alt icon-large"></i></font><font color="orange">Values</font></a></li>
  <li><a data-toggle="modal" href="#hymm"><font color="white"><i class=" icon-music icon-large"></i></font><font color="orange">HCIC Goals</font></a></li>


</ul>
</ul>
  
  </div>


  <div class="history_chmsc">
  <p><h2>Highland College History</h2></p>
  <hr>
  <p>
  Highland College was established in Bahir Dar town, Ethiopia, in August of 2003 by a team of professionals who have many years of teaching experience at university and business consultancy service.Some of the share members are PhD holders and others are at master level in different disciplines.
 Our College has recorded enormous remarkable achievements in the past twelve years. Since its establishment, it has graduated thousands of competent professionals in various fields, programs, and levels; and as a result, has contributed its best to overall development endeavours of the country. To realize its vision: “Highland College aspires to be the top ten universities in Ethiopia by 2027,” the College has designed a five year’s Strategic Plan which would enable it to run several things. I would like to assure you that there will be many opportunities in the future with this Strategic Plan.
 Finally, I advise you to maintain your relationship so that you will be able to network with the College community to pursue new endeavors.</p>
 </div>
 </div>
 </div>
  </div>

  <div class="tab-pane" id="settings">
                  <p><iframe width="1055" height="390" frameborder="10" scrolling="no" marginheight="0" marginwidth="auto"
				   src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.939893555102!2d36.928774448887005!3d10.96790959215345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x165a9f36494f92df%3A0x544a041cef553422!2z4Yuo4YiA4Yut4YiL4YqV4Yu1IOGImOGIneGIheGIq-GKlSDhiLXhiI3hjKDhipMg4Yqu4YiM4YyF!5e0!3m2!1sam!2set!4v1674215510547!5m2!1sam!2set" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"> 
				  </iframe></p>

  </div>

  <br>
  
 
 <div class="hero-unit-yy">
<p><font color="white"><b>Related Sites</b></font></p>
<a href="https://highlandcollege.net"><font color="white"> highlandcollege.net</font></a>   
 
</div>
 
 

</div>
</div>


</body>
<?php include('footer.php'); ?>

<div class="modal hide fade" id="pic">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
<div class="turn">
<img src="img/turnover.jpg" width="500" height="350"/>
</div>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>

<div class="modal hide fade" id="mission">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	 <h2><p>Mission</p></h2>
	 
<ul>
<li>	Provide quality education supported by the state-of-the-art facilities in response to the labor market.</li>
<li>	Produce competent and ethical professionals equipped with the necessary skills and attitude to the business world.</li>
<li>Promote demand-driven research through partnership with active engagement of staffs and students and disseminate findings to end user.</li>
<li>Enhance linkages with regional, national and international organizations to advance science and technology transfer in the region and country.</li>
</ul>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
		
		
		
		<div class="modal hide fade" id="vision">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	 <h2><p>Vission</p></h2>
  <p>HCIC ExCELS:  Highland College envisions becoming one of the top ten Universities in Ethiopia by the year 2030 G.C. 	 
	
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div> 
		
				<div class="modal hide fade" id="mandate">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	 <h2><p>Values</p></h2>
	 <p>.Excellence</p>
 

 <p>.Students’ First</p>
 
 <p>.Accountability</p>
 
 <p>.Diversity</p>
 
 <p>.Integrity.</p>
 
 <p>.Transparency</p>
 
 <p>.Equality</p> </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		 
		</div>
		 <div class="modal hide fade" id="hymm">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
<h2><p>HCIC Educational Goals</p></h2>

<ul>
<li>
<p>Produce knowledgeable, skilled and attitudinally matured graduates with a view to nationally and internationally competitive human power</p></li>

<li><p>Design and provide community  and consultancy service that shall cater to the developmental needs of the region & the country;</p></li>

<li><p>Conduct research focusing on knowledge transfer and solving societal problems with the country’s priority needs;</p></li>

<li><p>Promote and enhance linkages with governmental, non-governmental organizations and the private sector stakeholders.</p></li>

	</ul>
 	 
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
		</div>
		
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

	    
  
  <h2>Search Teacher Schedule On Exam Day</h2>
Please select data on each field to filter.
<hr>
	   <form id="save_voter" class="form-horizontal" method="POST" action="exam_teacher_result.php">	
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
		
		
		
		
					<div class="modal hide fade" id="exam_room">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">

  <h2>Search Rooms Schedule On Exam Day</h2>
Please select data on each field to filter.
<hr>
	   <form id="save_voter" class="form-horizontal" method="POST" action="exam_room_result.php">	
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
		
		
					
								<div class="modal hide fade" id="exam_CYS">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">

 
  <h2>Search Course Year Section Schedule On Exam Day</h2>
Please select data on each field to filter.
<hr>
	   <form id="save_voter" class="form-horizontal" method="POST" action="exam_CYS_result.php">	
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
		
			
		
</html>



