
<!DOCTYPE html>
<?php
	  include 'trheader.php';
	  ?>
<?php

//register
include 'connection.php';
?>
<?php
$msg=$_SESSION['Logid'];


                    $sql18="SELECT * FROM users where uid='$msg'";
			
                    $result18=mysqli_query($db , $sql18);
                    while($row = mysqli_fetch_assoc($result18))
		
                    {
                        
                            $msg=$row['email'];
						
							
                    }
					
					?>

					 <?php
	 
		
	 
	$sql10 ="select * from tregister where email='$msg'";
	$result10=mysqli_query($db , $sql10);
	
    while($row = mysqli_fetch_assoc($result10))
	{			
	 
        
	$t_id=$row['t_id'];    
	
	
   	//echo $cst_id,"cst";
	#
	
	}
	?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                 <!-- <h3 class="font-weight-bold">Welcome </h3>
                  <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6>-->
                </div>
                <div class="col-12 col-xl-4">
                <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white dropdown-" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <i class="mdi mdi-calendar"></i> 
                    </button>
                 <!--   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                      <a class="dropdown-item" href="#">January - March</a>
                      <a class="dropdown-item" href="#">March - June</a>
                      <a class="dropdown-item" href="#">June - August</a>
                      <a class="dropdown-item" href="#">August - November</a>
                    </div>-->
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
         <!-- <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="images/dashboard/cc.jpg" alt="people"
				  
				  
				  <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
	
    



        <!-- Sign up form -->
        <section class="signup">
		
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                      
						<center>

 <div class="col-lg-15 mx-auto">
           
            
                 <form action="" method="post" class="form-horizontal col-md-15 col-md-offset-10">

         <div class="form-group"  style="margin-top:-5px;>
                      <label for="exampleInputUsername1">Batch</label>
					  <div class="col-sm-12">
                            <select class="form-control" id="bch_id" name="bch_id">
                               <?php
                    $sql="SELECT tbl_batch.bch_name,tbl_batch.bch_id from tbl_cst Left join tbl_batch on tbl_cst.bch_id=tbl_batch.bch_id where tbl_cst.t_id='$t_id'";
			
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
                          </div>
                     
                  <br>
				   <div class="form-group"  style="margin-top:-5px;>
                      <label for="exampleInputUsername1">Division</label>
					  <div class="col-sm-12">
                            <select class="form-control" id="div_id" name="div_id">
                               <?php
                       $sql="SELECT tbl_division.division,tbl_division.div_id from tbl_cst Left join tbl_division on tbl_cst.division=tbl_division.div_id where tbl_cst.t_id='$t_id'";
			
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
                          </div>
                     
                    </br>
					<input type="submit" class="btn btn-primary col-md-6 col-md-offset-10" value="search" name="batch" />
               
</form><form action="" method="post" class="form-horizontal col-md-40 col-md-offset-30">
    <div class="form-group" style="margin-top:-5px;"><br><br>
	       <?php

    if(isset($_POST['batch'])){

     $i=0;
     $radio = 0;
     $batch = $_POST['bch_id'];
     $div= $_POST['div_id'];

  ?>
         
	<p>Select Teacher-Subject</p><br>
                 
                    <!--  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="class" name="class">
					-->
					<div class="col-sm-12" class="form-control">
                            <select class="form-control" id="cst_id" name="cst_id">
                               <?php
                   
			$sql="SELECT tbl_batch.bch_name,tbl_division.division,tregister.name,tbl_subjects.sub_name,
		tbl_cst.date,tbl_cst.cst_id FROM tbl_cst LEFT JOIN tbl_batch  ON tbl_cst.bch_id=tbl_batch.bch_id LEFT JOIN tbl_division  
		ON tbl_cst.division=tbl_division.div_id  LEFT JOIN tregister ON tbl_cst.t_id=tregister.t_id LEFT JOIN tbl_subjects 
		ON tbl_cst.sbid=tbl_subjects.sbid where tbl_cst.bch_id='$batch' && tbl_cst.division='$div' ";
                    $result=mysqli_query($db , $sql);
                    while($row = mysqli_fetch_assoc($result))
		
                    {
						$cst_id=$row['cst_id'];
                       $bch_name=$row['bch_name'];       
	                        $name=$row['name'];       
	                   $sub_name=$row['sub_name']; 
                        $date=$row['date'];	
                        $division=$row['division'];	
	 
                        //if($type==$row['mtype_id'])
                            //echo '<option value="'.$row['mtype_id'].'" selected="selected">'.$row['m_type'].'</option>';
                        //else
                             echo '<option value="'.$row['cst_id'].'" >'.$row['name'].'-'.$row['sub_name'].'</option>';
                    }
                    ?>
	
                            </select>
                          </div><br>
						   <div class="form-group"  style="margin-top:-10px;>
                      <label for="exampleInputUsername1">Select Date</label>
					  <div class="col-sm-12">
                            
							<input type="date" class="form-control" id="class" placeholder="give link" name="date" value="date('Y-m-d')">
                          </div><br>
                   
                   <div class="form-group"  style="margin-top:-10px;>
                      <label for="exampleInputUsername1">Select Hour</label>
                          <div class="col-sm-12">
                            <select class="form-control"  class="col-sm-10" id="hour" name="hour" >
							
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							
					</select>
					 </div><br>
                    
                   
	
                    <button type="submit" name="report" class="btn btn-primary mr-2" value="viewreport">view report</button>
                   
                  </form>
            </div>
          </div>

		        <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
              <div class="card-body">
              <h4 class="card-title"></h4>
                  
             
            
   </div>
			</div>
          </div>
        
		                    			 	   		  				<?php
	}
	?> 
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
			 <?php
	 if(isset($_POST['report'])){
		 $cst_id=$_POST['cst_id'];       
	    
	     $hour=$_POST['hour'];
	     $date=$_POST['date'];
		?>
              <div class="table-responsive pt-3">
              <table class="table table-bordered">
 
            <tr>
   <td colspan="10" align="center"><h3><b>attendance report</b></h3></td>
   </tr> 
      <tr class="table-primary">
	   
		   <th align="left" >name</th>
		   <th align="left" >attendance</th>

		 
    
    </tr>

	<?php
	 
	
	
	$sql11 ="select * from tbl_attendance where tbl_attendance.cst_id = '$cst_id' AND tbl_attendance.date = '$date' AND tbl_attendance.hour = '$hour'";
	$regno;
	$regno=1;
	$result11=mysqli_query($db , $sql11);
	
    while($row = mysqli_fetch_assoc($result11))
	{			
	 
        
	$stu_id=$row['stu_id'];    
    //echo $stu_id,"stu";	
	
    $attendance=$row['attendance'];	
	
  // echo	$attendance;
		
	$sql12 ="select * from tbl_studentregister where tbl_studentregister .stu_id = '$stu_id' ";

	$result12=mysqli_query($db , $sql12);
	
    while($row = mysqli_fetch_assoc($result12))
	{			
	 
        
	$stu_name=$row['name'];    
  	
	
   
	}
	
	?>
							        
  <tr>
    
    <td><?=$stu_name?></td>

    <td><?=$attendance?></td>
	
   
    
    
</tr> 
     
  <?php
  $regno++;
	}
	
 ?>
 
   </table>
  
   </div>
			</div>
          

          
            <!--      <div class="weather-info">
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
                </div>-->
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                  <!--  <div class="card-body">
                      <p class="mb-4">Number of schools</p>
                      <p class="fs-30 mb-2">100</p>
                      <p>10.00% (30 days)</p>
                    </div>-->
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                  <!--  <div class="card-body">
                      <p class="mb-4">Total Faculty</p>
                      <p class="fs-30 mb-2">34043</p>
                      <p>22.00% (30 days)</p>
                    </div>-->
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                   <!-- <div class="card-body">
                      <p class="mb-4">Number of students</p>
                      <p class="fs-30 mb-2">61344</p>
                      <p>2.00% (30 days)</p>
                    </div>-->
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                   <!-- <div class="card-body">
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
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © EDUCLASS   <a href="https://www.bootstrapdash.com/" target="_blank"></a></span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">EDUCLASS <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
		<?php
	 }
	 ?>
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

