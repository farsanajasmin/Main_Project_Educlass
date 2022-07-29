
<!DOCTYPE html>
<?php
include 'session.php';
//register
include 'connection.php';
?>
<?php
	  include 's_header.php';
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
$msg=$_SESSION['Logid'];


                    $sql18="SELECT * FROM users where uid='$msg'";
			
                    $result18=mysqli_query($db , $sql18);
                    while($row = mysqli_fetch_assoc($result18))
		
                    {
                        
                            $msg1=$row['email'];
							
						
							
                    }
					
					?>
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
      <!-- partial -->
        <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
               <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                 <!-- <h3 class="font-weight-bold">Welcome Admin</h3>
                  <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6>-->
                </div>
              <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                 <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                   
                        
                  <!--  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
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
        <!--  <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
              <!--  <div class="card-people mt-auto">
                  <img src="images/dashboard/cc.jpg" alt="people"
				  
				 -->
				<!DOCTYPE html>
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

    
        <!-- Sign up form -->
        <div class="col-lg-10 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"></h4>
                  
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                    
            <tr>
   <td colspan="10" align="center"><h3><b>Questions</b></h3></td>
   </tr> 
      <tr class="table-danger">
	 
    <th>Title</th>
    <th>size </th>
    <th>subjects</th>
   
    <th>start_date</th>
    <th>end_date</th>
    <th>Max</th>
    <th>Action</th>
	
		 
		 
		 
		 
       
    </tr>
	<?php
	$sql13 = "SELECT * FROM tbl_quesions where bch_id='$batch' && division='$division'";
    $result13 = mysqli_query($db, $sql13);

    $files = mysqli_fetch_all($result13, MYSQLI_ASSOC);
	?>
	       
 
	
	
   <?php foreach ($files as $file): ?>
    <tr>
     
      <td><?php echo $file['title']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
	  <?php $sbid=$file['subject'];
	  $max=$file['max'];
	  
	  ?>
	  
     
	 <?php $sql="SELECT * FROM tbl_subjects where sbid= '$sbid'";
        
		$result=mysqli_query($db , $sql);
		   while($row = mysqli_fetch_assoc($result))
			   
		   $sub_name=$row['sub_name'];	
		   $start_date=$file['start_date'];	
		   $end_date=$file['end_date'];	
		  
			   ?>
			    
			  <td><?php echo $sub_name; ?></td>
			  <td><?php echo $start_date; ?></td>
			  <td><?php echo $end_date; ?></td>
			   <td><?php echo $max; ?></td>
		
		  <?php
			   
		  $q_id = $file['q_id'];

                    
                $sql = "SELECT * FROM tbl_quesions WHERE q_id='$q_id'";
                $result = mysqli_query($db, $sql);
                if (mysqli_num_rows($result) > 0) {
                    if ($row = mysqli_fetch_assoc($result)) {
                ?>
			
                
                <?php
				
                    }
                }
				?>
	
      <td><a href="questions/<?php echo $row['q_name']; ?>" download="<?php echo $row['q_name']; ?>" class="download_link"><?php echo "download"; ?></a></td>
    </tr>
  <?php endforeach;?>
  
 
   </table>
 
            
			</div>
			</div>
          </div>

        <!-- Sing in  Form -->
      <!--  <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="your_name" id="your_name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->

    </div>


        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © EDUCLASS   <a href="https://www.bootstrapdash.com/" target="_blank"></a></span>
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

