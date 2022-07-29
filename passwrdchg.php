
<!DOCTYPE html>
<?php
include 'session.php';
//register
include 'connection.php';
?>
<?php
	  include 'trheader.php';
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
                       
             
                          <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
					<form action="" method="post" enctype="multipart/form-data">

      
     <?php



  
   $msg=$_SESSION['Logid'];


                    $sql18="SELECT * FROM users where uid='$msg'";
			
                    $result18=mysqli_query($db , $sql18);
                    while($row = mysqli_fetch_assoc($result18))
		
                    {
                        
                            $msg2=$row['email'];
						
							
                    }
					

 $sql="SELECT * FROM users where email='$msg2'";
	
	
    $result=mysqli_query($db , $sql);
	
 
		 if (isset($_POST['uppdate'])) {
		
	 
 	
	
	$password=$_POST['password'];
	
	

   
    $sql1 = "UPDATE `users` SET `password`='$password'  WHERE email='$msg2'" ;

	$result1=mysqli_query($db , $sql1);
	 
     
		 if($result1)
		 {
			echo '<script type="text/javascript">
					  
                      alert("updated Successfully");
                         location="trprofileview.php";
                           </script>';
		 }
		 else
		 {
			 $msg="Error, Try again";	
		 }
		
	}




?>



              
             

        <?php while ($row = mysqli_fetch_array($result)) { ?>
	
           <form class="forms-sample"  method="POST">
		   
				 <div class="form-group">
				 <label for="serv_tags"> <b>Change password<b></label><br><br><br><br>
                <input type="text" class="form-control" name="password" value="<?php echo $row['password']; ?>">
				 </div>

                 <button type="submit" name="uppdate" class="btn btn-primary mr-2" value="addclass">update</button>
				        
           
            </form>
		
			</center>
		
          </div>
          </div>
        <?php } ?>
                    </div>
                  
                </div>
            </div>
      
                 <!-- </div>
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
                    </div>
                  </div>
                </div>
              </div>
            </div>-->
			 
                  
               
        	 </div>
                  
                </div>
            </div>
        </section>
            
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

