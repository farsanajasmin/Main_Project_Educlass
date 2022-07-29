                
  

<!DOCTYPE html>
<?php
include 'session.php';
//login
include 'connection.php';
?>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>EDUCLASS</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/faces/cccc.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <h4> <a class="navbar-brand brand-logo mr-5" href="index.html"><b><font face ="WildWest">&nbsp;EDUCLASS</font><img src="images/faces/cccc.png" alt="oh" width="44" height="512"></b></a></h4>
        <div align="justify"></div>
        <div align="justify"></div>
        
      </a></a><a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/faces/cccc.png"  width="44" height="512"/></b></a></h4>
        <div align="justify"></div></a>      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class=""></i>
              <span class=""></span>            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago                  </p>
                </div>
              </a>            </div>
          </li>
          <li class="nav-item nav-profile dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown2"><img src="images/faces/face16.jpg" alt="profile"/></a></a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings              </a>
              <a class="dropdown-item"  href="logout.php">
                <i class="ti-power-off text-primary" ></i>
                Logout              </a>            </div>
          </li>
         <!-- <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>            </a>          </li>-->
        </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section"></a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task"></button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span></span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span></span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
       <?php
	  include 'header.php';
	  ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
       <!--   <div class="row">
            <div class="col-md-12 grid-margin"
              <div class="row">-->
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                 

               </div>
               <!--  <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                      <a class="dropdown-item" href="#">January - March</a>
                      <a class="dropdown-item" href="#">March - June</a>
                      <a class="dropdown-item" href="#">June - August</a>
                      <a class="dropdown-item" href="#">August - November</a>
                    </div>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">-->
			  <html lang="en">
<head>
    <!--<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
	
</head>
<body>
                       
           <div class="col-lg-10 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"></h4>
                  
                  <div class="table-responsive pt-3">
     
	
 <form action="" method="post" class="form-horizontal col-md-15 col-md-offset-10">

         <div class="form-group" style="margin-top:-5px;>
                      <label for="exampleInputUsername1">Batch</label>
					  <div class="col-sm-6">
                            <select class="form-control" id="bch_id" name="bch_id">
                               <?php
                    $sql="SELECT bch_id,bch_name FROM tbl_batch";
			
                    $result=mysqli_query($db , $sql);
                    while($row = mysqli_fetch_assoc($result))
		
                    {
                        //if($type==$row['mtype_id'])
                            //echo '<option value="'.$row['mtype_id'].'" selected="selected">'.$row['m_type'].'</option>';
                        //else
                             echo '<option value="'.$row['bch_id'].'" >'.$row['bch_name'].'</option>';
                    }
                    ?>
                            </select>
                          </div><br>
                     
                    </div><div class="form-group" style="margin-top:-5px;>
                      <label for="exampleInputUsername1">Division</label>
					  <div class="col-sm-6">
                            <select class="form-control" id="div_id" name="div_id">
                               <?php
                    $sql="SELECT div_id,division FROM tbl_division";
			
                    $result=mysqli_query($db , $sql);
                    while($row = mysqli_fetch_assoc($result))
		
                    {
                        //if($type==$row['mtype_id'])
                            //echo '<option value="'.$row['mtype_id'].'" selected="selected">'.$row['m_type'].'</option>';
                        //else
                             echo '<option value="'.$row['div_id'].'" >'.$row['division'].'</option>';
                    }
                    ?>
                            </select>
                          </div><br>
                     
                    </div>
					<input type="submit" class="btn btn-primary col-md-6 col-md-offset-10" value="schedule" name="batch" /><br><br>
               
			   
			   <?php
	
	
	 if(isset($_POST['batch'])){

    
     $batch = $_POST['bch_id'];
     $division = $_POST['div_id'];
	 
	 ?>
</form>
					
		<table border='1'>		
 <tr>
   <td colspan="10" align="center"><h3><b>Time Table</b></h3></td>
   </tr> 
				  <tr>
				  <th>Week</th>
	<th>1</th>
	<th>2</th>
	<th>3</th>
	<th>4</th>
	<th>5</th>
	<th>6</th>
	<th>7</th>
	</tr>
			
	<?php
	 
		       

$i=0;
        $k=1; 
     
				
	
 $sql10 ="select * from tbl_timetable where bch_id='$batch' && division='$division'";
	$result10=mysqli_query($db , $sql10);
	
    while($row = mysqli_fetch_assoc($result10))
	{			
	
if($k<6){


		
			$hr=$row['hr1'];
			$sql="SELECT tbl_batch.bch_name,tbl_division.division,tregister.name,tbl_subjects.sub_name,
		tbl_cst.date,tbl_cst.cst_id FROM tbl_cst LEFT JOIN tbl_batch  ON tbl_cst.bch_id=tbl_batch.bch_id LEFT JOIN tbl_division  
		ON tbl_cst.division=tbl_division.div_id  LEFT JOIN tregister ON tbl_cst.t_id=tregister.t_id LEFT JOIN tbl_subjects 
		ON tbl_cst.sbid=tbl_subjects.sbid where tbl_cst.cst_id='$hr'";
        $result=mysqli_query($db , $sql);
		while($row1= mysqli_fetch_assoc($result))
	{			
	
       
	$name1=$row1['name'];       
	$sub_name1=$row1['sub_name']; 

	
	}             
                        //if($type==$row['mtype_id'])
                            //echo '<option value="'.$row['mtype_id'].'" selected="selected">'.$row['m_type'].'</option>';
                        //else
                  
                    
	        $hr2=$row['hr2'];
		
			$sql="SELECT tbl_batch.bch_name,tbl_division.division,tregister.name,tbl_subjects.sub_name,
		tbl_cst.date,tbl_cst.cst_id FROM tbl_cst LEFT JOIN tbl_batch  ON tbl_cst.bch_id=tbl_batch.bch_id LEFT JOIN tbl_division  
		ON tbl_cst.division=tbl_division.div_id  LEFT JOIN tregister ON tbl_cst.t_id=tregister.t_id LEFT JOIN tbl_subjects 
		ON tbl_cst.sbid=tbl_subjects.sbid where tbl_cst.cst_id='$hr2'";
        $result=mysqli_query($db , $sql);
		while($row2= mysqli_fetch_assoc($result))
	{			
	
       
	$name2=$row2['name'];       
	$sub_name2=$row2['sub_name']; 

	
	}             
	        $hr3=$row['hr3'];
			$sql="SELECT tbl_batch.bch_name,tbl_division.division,tregister.name,tbl_subjects.sub_name,
		tbl_cst.date,tbl_cst.cst_id FROM tbl_cst LEFT JOIN tbl_batch  ON tbl_cst.bch_id=tbl_batch.bch_id LEFT JOIN tbl_division  
		ON tbl_cst.division=tbl_division.div_id  LEFT JOIN tregister ON tbl_cst.t_id=tregister.t_id LEFT JOIN tbl_subjects 
		ON tbl_cst.sbid=tbl_subjects.sbid where tbl_cst.cst_id='$hr3'";
        $result=mysqli_query($db , $sql);
		while($row3= mysqli_fetch_assoc($result))
	{			
	
       
	$name3=$row3['name'];       
	$sub_name3=$row3['sub_name']; 

	
	}             
	        $hr4=$row['hr4'];
			
			$sql="SELECT tbl_batch.bch_name,tbl_division.division,tregister.name,tbl_subjects.sub_name,
		tbl_cst.date,tbl_cst.cst_id FROM tbl_cst LEFT JOIN tbl_batch  ON tbl_cst.bch_id=tbl_batch.bch_id LEFT JOIN tbl_division  
		ON tbl_cst.division=tbl_division.div_id  LEFT JOIN tregister ON tbl_cst.t_id=tregister.t_id LEFT JOIN tbl_subjects 
		ON tbl_cst.sbid=tbl_subjects.sbid where tbl_cst.cst_id='$hr4'";
        $result=mysqli_query($db , $sql);
		while($row4= mysqli_fetch_assoc($result))
	{			
	
       
	$name4=$row4['name'];       
	$sub_name4=$row4['sub_name']; 

	
	}             
	        $hr5=$row['hr5'];
			
			
			$sql="SELECT tbl_batch.bch_name,tbl_division.division,tregister.name,tbl_subjects.sub_name,
		tbl_cst.date,tbl_cst.cst_id FROM tbl_cst LEFT JOIN tbl_batch  ON tbl_cst.bch_id=tbl_batch.bch_id LEFT JOIN tbl_division  
		ON tbl_cst.division=tbl_division.div_id  LEFT JOIN tregister ON tbl_cst.t_id=tregister.t_id LEFT JOIN tbl_subjects 
		ON tbl_cst.sbid=tbl_subjects.sbid where tbl_cst.cst_id='$hr5'";
        $result=mysqli_query($db , $sql);
		while($row5= mysqli_fetch_assoc($result))
	{			
	
       
	$name5=$row5['name'];       
	$sub_name5=$row5['sub_name']; 

	
	}             
	        $hr6=$row['hr6'];
			$sql="SELECT tbl_batch.bch_name,tbl_division.division,tregister.name,tbl_subjects.sub_name,
		tbl_cst.date,tbl_cst.cst_id FROM tbl_cst LEFT JOIN tbl_batch  ON tbl_cst.bch_id=tbl_batch.bch_id LEFT JOIN tbl_division  
		ON tbl_cst.division=tbl_division.div_id  LEFT JOIN tregister ON tbl_cst.t_id=tregister.t_id LEFT JOIN tbl_subjects 
		ON tbl_cst.sbid=tbl_subjects.sbid where tbl_cst.cst_id='$hr6'";
        $result=mysqli_query($db , $sql);
		while($row6= mysqli_fetch_assoc($result))
	{			
	
       
	$name6=$row6['name'];       
	$sub_name6=$row6['sub_name']; 

	
	}             
	        $hr7=$row['hr7'];
			
			$sql="SELECT tbl_batch.bch_name,tbl_division.division,tregister.name,tbl_subjects.sub_name,
		tbl_cst.date,tbl_cst.cst_id FROM tbl_cst LEFT JOIN tbl_batch  ON tbl_cst.bch_id=tbl_batch.bch_id LEFT JOIN tbl_division  
		ON tbl_cst.division=tbl_division.div_id  LEFT JOIN tregister ON tbl_cst.t_id=tregister.t_id LEFT JOIN tbl_subjects 
		ON tbl_cst.sbid=tbl_subjects.sbid where tbl_cst.cst_id='$hr7'";
        $result=mysqli_query($db , $sql);
		while($row7= mysqli_fetch_assoc($result))
	{			
	
       
	$name7=$row7['name'];       
	$sub_name7=$row7['sub_name']; 

	
	}             
		?>

	<tr>
	<td><?php 
	if($i<5)
	{
	$days=array("Monday" ,"Tuesday" ,"wednesday" ,"Theusday" ,"Friday" ); 
	echo $days[$i];
	}?>
	</td>
	<td><?php echo $name1."-".$sub_name1;?></td>
	<td><?php echo  $name2."-".$sub_name2;?></td>
	<td><?php echo  $name3."-".$sub_name3;?></td>
	<td><?php echo $name4."-".$sub_name4;?></td>
	<td><?php echo $name5."-".$sub_name5;?></td>
	<td><?php echo $name6."-".$sub_name6;?></td>
	<td><?php echo $name7."-".$sub_name7;?></td>
	</tr>
	
	
	<?php
	
	
	
		
	

	
	
}
$k++;
$i++;
}
	
	
	
    ?> 
					
	</table>
                   <br><br> <table class="table table-bordered">
                    
            <tr>
   <td colspan="10" align="center"><h3><b>View Schedule</b></h3></td>
   </tr> 
      <tr class="table-danger">
	    <th align="left" >Teacher</th>
         <th align="left" >Subjects</th>
       
         <th align="left" >Class</th>
       
		 
		 
		 
		 
		 
       
    </tr>
	
					  <tr>
	<?php
	
	
	
    
	
	   $sql="SELECT tregister.name,tbl_subjects.sub_name,tbl_shedule.faculty,tbl_shedule.meet,tbl_cst.cst_id FROM tbl_cst  LEFT JOIN tregister ON tbl_cst.t_id=tregister.t_id  LEFT JOIN tbl_shedule ON tbl_cst.cst_id=tbl_shedule.faculty LEFT JOIN tbl_subjects 
		ON tbl_cst.sbid=tbl_subjects.sbid where tbl_cst.bch_id='$batch' && tbl_cst.division='$division' && tbl_cst.cst_id=tbl_shedule.faculty";
	
	
    $result=mysqli_query($db , $sql);
	$regno;
	$regno=1;
    while($row = mysqli_fetch_assoc($result))
	{			
	
   	$cst_id=$row['cst_id'];
	$teacher=$row['name']; 
	
	$subject=$row['sub_name'];
	
	$meet=$row['meet'];
    	


	
		

	
	
	
	 
	
	
	
	
		
						?>
							        

    <td><?=$teacher?></td>
    <td><?=$subject?></td>
	
	<td><a href="<?php echo $meet?>" target="_blank"> <?=$meet?></a></td>
	
	
	
    
    
</tr> 
     
  <?php
  $regno++;
	}
  }
 ?>
 
   </table>
   
	
   
            
			</div>
			</div>
          </div>
</div>
	<!--
              <div class="row">
			  
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome Admin</h3>
                  <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6>
                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                      <a class="dropdown-item" href="#">January - March</a>
                      <a class="dropdown-item" href="#">March - June</a>
                      <a class="dropdown-item" href="#">June - August</a>
                      <a class="dropdown-item" href="#">August - November</a>
                    </div>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="images/dashboard/cc.jpg" alt="people"
				  >
                  <div class="weather-info">
                    <div class="d-flex">
                      <div>
                        <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                      </div>
                      <div class="ml-2">
                        <h4 class="location font-weight-normal">Bangalore</h4>
                        <h6 class="font-weight-normal">India</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Number of schools</p>
                      <p class="fs-30 mb-2">100</p>
                      <p>10.00% (30 days)</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Faculty</p>
                      <p class="fs-30 mb-2">34043</p>
                      <p>22.00% (30 days)</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Number of students</p>
                      <p class="fs-30 mb-2">61344</p>
                      <p>2.00% (30 days)</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Number of parents</p>
                      <p class="fs-30 mb-2">47033</p>
                      <p>0.22% (30 days)</p>
                    </div>-->
					
                  </div>
                </div>
              </div>
            </div>

			
          </div>
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © EDUCLASS  <a href="https://www.bootstrapdash.com/" target="_blank"></a></span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">EDUCLASS <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>




  