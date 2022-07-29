
<!DOCTYPE html>
<?php

	
include 'session.php';
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
	  include 's_header.php';
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
				  <table border='1' >
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
$msg=$_SESSION['Logid'];


                    $sql18="SELECT * FROM users where uid='$msg'";
			
                    $result18=mysqli_query($db , $sql18);
                    while($row = mysqli_fetch_assoc($result18))
		
                    {
                        
                            $msg1=$row['email'];
							
						
							
                    }
					
					?>
					<?php
					
					  $sql5="SELECT * FROM tbl_studentregister where email='$msg1'";
			
                    $result5=mysqli_query($db , $sql5);
                    while($row = mysqli_fetch_assoc($result5))
		
                    {
                        
                            $batch=$row['bch_id'];
							
                            $division=$row['division'];
							
						

					}
					
					?>
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
					
	
                   <br><br> <table class="table table-bordered">
                    
            <tr>
   <td colspan="10" align="center"><h3><b>View Schedule</b></h3></td>
   </tr> 
      <tr class="table-danger">
	    <th align="left" >Teacher</th>
         <th align="left" >Subjects</th>
       
         <th align="left" >Meet</th>
       
		 
		 
		 
		 
		 
       
    </tr>
	<?php
$msg=$_SESSION['Logid'];


                    $sql18="SELECT * FROM users where uid='$msg'";
			
                    $result18=mysqli_query($db , $sql18);
                    while($row = mysqli_fetch_assoc($result18))
		
                    {
                        
                            $msg1=$row['email'];
							
						
							
                    }
					
					?>
					<?php
					
					  $sql5="SELECT * FROM tbl_studentregister where email='$msg1'";
			
                    $result5=mysqli_query($db , $sql5);
                    while($row = mysqli_fetch_assoc($result5))
		
                    {
                        
                            $batch=$row['bch_id'];
							
                            $division=$row['division'];
							
						
					}
					
					
					?>
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
  
 ?>
 
   </table>
   
	
   
            
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

