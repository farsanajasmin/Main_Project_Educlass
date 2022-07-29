
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
                    <table class="table table-bordered">
                    
            <tr>
   <td colspan="10" align="center"><h3><b>File Download</b></h3></td>
   </tr> 
      <tr class="table-danger">
	 
    <th>Title</th>
    
    <th>Subjects</th>
    <th>Action</th>
		 
		 
		 
		 
       
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
						
						
							
                    }
					
					
					?>
					
					
					
					
					
	<?php
	$sql13 = "SELECT * FROM files where bch_id='$batch'";
    $result13 = mysqli_query($db, $sql13);

    $files = mysqli_fetch_all($result13, MYSQLI_ASSOC);
	?>
	       
  <?php foreach ($files as $file): ?>
    <tr>
     
      <td><?php echo $file['name']; ?></td>
     
	  <?php $sbid=$file['subjects'];
	  
	  ?>
	  
     
	 <?php $sql="SELECT * FROM tbl_subjects where sbid= '$sbid'";
        
		$result=mysqli_query($db , $sql);
		   while($row = mysqli_fetch_assoc($result))
			   
		   $sub_name=$row['sub_name'];	
		  
			   ?>
			  <td><?php echo $sub_name; ?></td>
		
		  <?php
			   
		  $f_id = $file['f_id'];

                    
                $sql = "SELECT * FROM files WHERE f_id='$f_id'";
                $result = mysqli_query($db, $sql);
                if (mysqli_num_rows($result) > 0) {
                    if ($row = mysqli_fetch_assoc($result)) {
                ?>
			
                
                <?php
				
                    }
                }
				?>
	
      <td><a href="uploads/<?php echo $row['name']; ?>" download="<?php echo $row['name']; ?>" class="download_link"><?php echo "download"; ?></a></td>
    </tr>
  <?php endforeach;?>
  
  
 
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

