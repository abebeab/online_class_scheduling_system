<?php include('header.php'); include('hover.php'); include('admin/dbcon.php'); ?>
</head>
<body>
<div class="coat">
  <div class="wrapper">
    <div class="navbar navbar-fixed-top">
      <div class="navbar">
        <div class="navbar-inner">
          <div class="nav_jkl">
            <div class="container">
              <ul class="nav">
                <a class="brand" href="#">
                  <font color="white">Class Schedule Viewer</font>
                </a>
                <li class="active">
                  <a href="index.php"><i class="icon-home icon-large"></i>Home</a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-search icon-large"></i>Exam Schedule
                    <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a data-toggle="modal" href="#exam_teacher">Teacher</a></li>
                    <li><a data-toggle="modal" href="#exam_CYS">Course Year Section</a></li>
                    <li><a data-toggle="modal" href="#exam_room">Room</a></li>
                  </ul>
                </li>
                <li class="divider-vertical"></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-search icon-large"></i>Class Schedule
                    <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a data-toggle="modal" href="#teacher">Teacher</a></li>
                    <li><a data-toggle="modal" href="#CYS">Course Year Section</a></li>
                    <li><a href="#room" data-toggle="modal">Room</a></li>
                  </ul>
                </li>
                <li class="divider-vertical"></li>
                <li><a href="help.php" class="help" id="help"><i class="icon-question-sign icon-large"></i>Help</a></li>
                <li class="divider-vertical"></li>
                <li><a href="admin/index.php" class="admin"><i class="icon-user icon-large"></i>Admin Login</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="hero-unit">
    </div>

    <div class="hero-unit-bud">
      <ul class="nav nav-tabs"> 
        <li class="active"><a href="" data-toggle="tab"><font color="white"><i class="icon-search icon-large"></i></font><font color="orange">Search Course Year Section</font></a></li>
      </ul>

      <div class="tab-content" id="printable">
        <div class="tab-pane active" id="home">
          <div class="hero-unit-y">

            <?php 
            if (isset($_POST['save'])){
              $CYS=$_POST['CYS'];
              $semester=$_POST['semester'];
              $sy=$_POST['sy'];

              $search_query_all=mysqli_query($conn,"select * from schedule where CYS like '%$CYS%' and semester like '%$semester%' and sy like '%$sy%'")or die(mysqli_error());
              $search_query=mysqli_query($conn,"select * from schedule where CYS like '%$CYS%' and type='Exam'   and semester like '%$semester%' and sy like '%$sy%'")or die(mysqli_error());
              $search_query2=mysqli_query($conn,"select * from schedule where CYS like '%$CYS%'and type='Exam'   and semester like '%$semester%' and sy like '%$sy%'")or die(mysqli_error());
              $search_query1=mysqli_query($conn,"select * from schedule where CYS like '%$CYS%' and semester like '%$semester%' and sy like '%$sy%'")or die(mysqli_error());
              $count=mysqli_num_rows($search_query);
              $count2=mysqli_num_rows($search_query2);
              $row=mysqli_fetch_assoc($search_query1);
              $row_all=mysqli_fetch_assoc($search_query_all);
            ?> 
            <div class="teph">
              <img src="img/hlogo.jpg" class="logo-circle" width="80" height="80">
            </div>
            <h2 class='_header'>Course Schedule</h2>
            <a class="btn btn-primary" href="index.php">  <i class=" icon-arrow-left icon-large"></i>&nbsp;Back</a>
            <hr>

            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="green"><b><?php echo $CYS; ?> </b></font></p>
            <h3>School year: <?php echo $sy; ?> &nbsp;&nbsp;&nbsp;&nbsp;
              Semester: <?php echo $semester; ?> 
            </h3>
            </br></br></br></br></br>

            <?php if ($count != 0){ ?>
            </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Exam Schedule
            </br></br>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Day</th>
                  <th>Time Start</th>
                  <th>Time End</th>
                  <th>Proctor</th>
                  <th>Subject</th>
                  <th>Room</th>
                </tr>
              </thead>

              <tbody>
                <?php
                while($search_rows=mysqli_fetch_array($search_query)){
                ?>
                <tr>
                  <td width="110"><?php echo $search_rows['day']; ?></td>
                  <td width="100"><?php echo $search_rows['time']; ?></td>
                  <td width="100"><?php echo $search_rows['time_end']; ?></td>
                  <td width="200"><?php echo $search_rows['teacher']; ?></td>
                  <td width="300"><?php echo $search_rows['subject']; ?></td>
                  <td width="130"><?php echo $search_rows['room']; ?></td>
                </tr>
                <?php }} else {
                echo 'No Schedule Available ';
                } ?>
              </tbody>
            </table>

            </br>
            <button id="print" class="btn btn-info" name="save"><i class="icon-print icon-large"></i>&nbsp;Print Schedule</button>
            </br>
            </br>
            <?php 
            }
            ?>

          </div>
        </div>
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

<!-- Modal HTML and Scripts -->

<style>
  .logo-circle {
    border-radius: 50%;  /* Makes the image circular */
    width: 100px;  /* Ensure the width is 80px */
    height: 80px; /* Ensure the height is 80px */
    object-fit: cover; /* Ensures the image fits within the circle */
  }
</style>

<script>
  $('#print').click(function(){
    var content = $('#printable').clone()
    var _ns = $('noscript').clone()
    _ns.append(content)
    var nw = window.open('Print','_blank','height=750,with=850')
    nw.document.write(_ns.html())
    nw.document.close()
    setTimeout(function(){
      nw.print()
      setTimeout(function(){
        nw.close()
      },750)
    },1000)
  })
</script>

<?php include('exm.php'); ?>
</html>
