<?php include('session.php');  include('header.php'); include('dbcon.php'); ?>
<body>

<?php include('nav-top1.php'); ?>
    <div class="navbar navbar-fixed-top1">
    <div class="navbar-inner">
    <div class="container">
	<div class="marg">
    <ul class="nav">
  <li class="active">
    <a href="home.php"><i class="icon-home icon-large"></i>Home</a>
  </li>
  
   <li class="divider-vertical"></li>
  <li><a href="schedule.php"><i class="icon-group icon-large"></i>Class Schedule</a></li>
   <li class="divider-vertical"></li>
    <li><a href="exam_schedule.php"><i class="icon-group icon-large"></i>Exam Schedule</a></li>
   <li class="divider-vertical"></li>
  <li><a href="record.php"><i class="icon-list icon-large"></i>Entry</a></li>
   <li class="divider-vertical"></li>
  <li><a href="history_log.php"><i class="icon-table icon-large"></i>History Log</a></li>
     <li class="divider-vertical"></li>
  <li><a href="user_account.php"><i class="icon-user icon-large"></i>User Account</a></li>
  <li class="divider-vertical"></li>
  <li><a id="logout" data-toggle="modal" href="#myModal"><i class="icon-signout icon-large"></i>Logout</a></li>
   <li class="divider-vertical"></li>
</ul>
    </div>
    </div>
    </div>
    </div>
<div class="wrapper">



	

<div id="element" class="hero-body-schedule">
<div class="hero-unit-home">
    <div class="alert alert-info">
   <h2>Welcome to HCIC Class Schedule System</h2>
    </div>


	</div>	
<div class="peace">
  <center>
    <div id="piecemaker">
      <p>Put your alternative Non Flash content here.</p>
    </div>
    </center>
</div>

	

<div class="sv">
	<div class="hero-unit-mission1">
	<p><h2>Mission</h2></p>
	
	<ul>
<li>	Provide quality education supported by the state-of-the-art facilities in response to the labor market.</li>
<li>	Produce competent and ethical professionals equipped with the necessary skills and attitude to the business world.</li>
<li>Promote demand-driven research through partnership with active engagement of staffs and students and disseminate findings to end user.</li>
<li>Enhance linkages with regional, national and international organizations to advance science and technology transfer in the region and country.</li>
</ul>	</div>
	
		<div class="hero-unit-mission2">
	<p><h2>Vision</h2></p>

  HCIC ExCELS:  Highland College envisions becoming one of the top ten Universities in Ethiopia by the year 2030 G.C.
 </div>
	
	</div>	
	</div>	
		
	

<?php include('footer.php');?>
</div>
</body>
	<div class="modal hide fade" id="myModal">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	    <p><font color="gray">Are You Sure you Want to LogOut?</font></p>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">No</a>
	    <a href="logout.php" class="btn btn-primary">Yes</a>
		</div>
		</div>
		
	
