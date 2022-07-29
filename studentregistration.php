
<!DOCTYPE html>

<?php
//register
include 'connection.php';
?>
<?php
	  include 'trheader.php';
	  ?>
    <!-- partial -->
   
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
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

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
	
    



        <!-- Sign up form -->
        <section class="signup">
		
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Registration</h2>
						 <?php
                  if(isset($_REQUEST['msg']))
                  {

                      echo '<tr><td colspan="2" align="center" style="color:#FF0000">'.$_REQUEST['msg'].'</td></tr>';
                  }

                  ?>
                         <form  class="forms-sample" action= "dosaaving.php" method="post" >
						 <div class="form-group">
                               
                                <input type="number" name="regno" id="regno" placeholder="Register Number"  class="form-control" max="10" required>
                            </div>

                            <div class="form-group">
                               
                                <input type="text" name="name" id="name" placeholder="Name"  class="form-control"  required>
                            </div>
							<div class="form-group">
                      <label ></label>
                    <!--  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="class" name="class">
					-->
					<div class="col-sm-15">
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
                    </div>
						
							<div class="form-group">
                               
                                <input type="text" name="address" id="address" placeholder="Address"   class="form-control" required>
                            </div>
							<div class="form-group">
                               
                                <input type="text" name="email" id="email" placeholder="Email"   class="form-control" required>
                            </div>
							<div class="form-group">
                               
                                <input type="gender" name="gender" id="gender" placeholder="Gender"  class="form-control" required>
                            </div>
							 <div class="form-group">
                      <label > </label>
                    <!--  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="class" name="class">
					-->
					<div class="col-sm-15">
                            <select class="form-control" id="district" name="did">
							
                              <?php
                     $sql="SELECT * FROM tbl_district";
			
                    $result=mysqli_query($db , $sql);
                    while($row = mysqli_fetch_assoc($result))
		
                    {
                        //if($type==$row['mtype_id'])
                            //echo '<option value="'.$row['mtype_id'].'" selected="selected">'.$row['m_type'].'</option>';
                        //else
                             echo '<option value="'.$row['did'].'" >'.$row['district'].'</option>';
                    }
                    ?>
                            </select>
                          </div>
                    </div>
                            <div class="form-group">
                                
                                <input type="text" name="ac_no" id="ac_no" placeholder="Account Number"   class="form-control" required>
                            </div>
							<div class="form-group">
                      <label ></label>
                    <!--  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="class" name="class">
					-->
					<div class="col-sm-15">
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
                    </div>
							<div class="form-group">
                              
                                <input type="number" name="phone" id="phone" placeholder="Phone"  class="form-control" required>
								
                            </div>
                          
							<div class="form-group">
         
                                <input type="password" name="password" id="password" placeholder="Password"  class="form-control" required>
                            </div>
                           <!-- <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>-->
                            <div class="form-group form-button">
                                <input type="submit" name="register2" id="signup"  onclick="registration2()" class="form-submit" value="register"/>
                            </div>
                        </form>
                    </div>
                    <div class="">
                        <figure><img src="images/jk.jpg" alt="sing up image"></figure>
                        <!--<a href="#" class="signup-image-link">I am already member</a>-->
                    </div>
                </div>
            </div>
        </section>
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

