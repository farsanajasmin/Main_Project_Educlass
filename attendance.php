
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
                     <i class="mdi mdi-calendar"></i> Today(<?php echo date('Y-m-d'); ?>)
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
                  <div >
                      
						<center>
						


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

  <div class="content">
    <h3>Attendance of <?php echo date('Y-m-d'); ?></h3>
    <br>

    <center><p><?php if(isset($att_msg)) echo $att_msg; if(isset($error_msg)) echo $error_msg; ?></p></center> 
    
    <form action="" method="post" class="form-horizontal col-md-60 col-md-offset-60">

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
					<input type="submit" class="btn btn-primary col-md-6 col-md-offset-10" value="Search" name="batch" />
               
</form>

   <form action="" method="post" class="form-horizontal col-md-60 col-md-offset-60">
    <div class="form-group" style="margin-top:-5px;"><br><br>
	<table border='1' >
	
	          <?php

    if(isset($_POST['batch'])){
$radio=0;
$i=0;
        $k=1; 
     $batch = $_POST['bch_id'];
     $div= $_POST['div_id'];

 $sql10 ="select * from tbl_timetable where bch_id='$batch' && division='$div'";
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
}

    ?>  
	
	</table>
	</form>
	</div>
	
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
					<p>students list</p>
                        
    <table  border="" class="table table-stripped">
      <thead>
        <tr class="table-info">
          <th scope="col">Reg. No.</th>
          <th scope="col">Name</th>
          <th scope="col">status</th>
         
          
         
        </tr>
      </thead>
  <?php
      $sql ="select * from tbl_studentregister where tbl_studentregister.bch_id = '$batch' and tbl_studentregister.division='$div'order by bch_id asc";
  $result=mysqli_query($db , $sql);
     while($data = mysqli_fetch_assoc($result)) {
       $i++;
     ?>
	  <input type="hidden" name="stat_id[]" value="<?php echo $data['regno']; ?>">
   
     <tr colspan="10" align="center">
       <td><?php echo $data['regno']; ?>  </td>
       <td><?php echo $data['name']; ?></td>
       
     
	    
      
		<td>
         <input type="radio" name="st_status[<?php echo $radio; ?>]" value="Present" checked>present <br>

         <input type="radio" name="st_status[<?php echo $radio; ?>]" value="Absent" >absent	
    
	  
       <br><br>
	
	
        </td>
      
	   
	   
     </tr>
<input type="text" name="batch" value="<?php echo $batch; ?>" hidden><br>
  </td>
     <?php

        $radio++;
      } 

      ?>
    </table><br>
	 <input type="submit" class="btn btn-primary col-md-6 col-md-offset-10" value="Save!" name="attendance" />
	</center>
	</form>
	
                    </div>
                </div>
            </div>
        </section>
		</div>
		<?php
		
		if(isset($_POST['attendance']))
{
	     
	$cst=$_POST['cst_id']; 
	echo $cst;
    $date= $_POST['date'];
	echo $date;

$stu_id;

	
	$hour=$_POST['hour'];
	echo $hour;

	 foreach ($_POST['st_status'] as $i => $st_status) {
		 
		  $stat_id = $_POST['stat_id'][$i];
		    $batch=$_POST['batch'];
		 
        $sql7="SELECT stu_id FROM tbl_studentregister where tbl_studentregister.regno='$stat_id'";
			
                    $result=mysqli_query($db , $sql7);
                    while($row = mysqli_fetch_assoc($result))
					{
						$stu_id= $row['stu_id'];
					}
					
				
       
		//echo $cst,"cst";
		//echo $st_status;
		//echo $stat_id ,"do";
		
		//$regno=$_POST['regno'];
	 
	   //echo $batch;
	//echo $regno;
	////echo $date;
	
	
	//echo $hour;
	
	$sql9='INSERT INTO `educlass`.`tbl_attendance` (`cst_id`, `stu_id`, `date`, `hour`, `attendance` ) VALUES ("'.$cst.'","'.$stu_id.'","'.$date.'","'.$hour.'","'.$st_status.'")';

	 $result9=mysqli_query($db , $sql9);
	 	  if($result9)
		 {
			echo '<script type="text/javascript">
					  
                      alert("attendance saved Successfully");
                         location="attendance.php";
                           </script>';
		 }
		 else
		 {
			 $msg="Error, Try again";	
		 }


	 }
	
	//echo $sbid ,"sub";
	

}
?>
		
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

