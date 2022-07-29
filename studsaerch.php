
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
        <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
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
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
					<form action="studsaerch.php" method="post" enctype="multipart/form-data">

<table  align="left">

  <tr>
  
                <td colspan="3"  rowspan="1" align="center"><h2 style="blue"><b>Student Details </b> </h2><br><br></td>
                
               
      </tr>
	  <form action="" method="post" class="form-horizontal col-md-15 col-md-offset-10">

         <div class="form-group"  style="margin-top:-5px;>
                      <label for="exampleInputUsername1">Batch</label>
					  <div class="col-sm-6">
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
						  
                      <div class="form-group" style="margin-top:-5px;>
                      <label for="exampleInputEmail1">Division</label>
                    <!--  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="class" name="class">
					-->
					<div class="col-sm-6" >
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
                          </div><br>
                   
					<input type="submit" class="btn btn-primary col-md-6 col-md-offset-10" value="Search" name="batch" />
               
</form>
<?php
global $batch;
 if(isset($_POST['bch_id']))

    
     $batch = $_POST['bch_id'];
	 ?>
	 <?php
global $division;
 if(isset($_POST['div_id']))

    
     $division = $_POST['div_id'];

	 ?>
	

	
                <td style="color:#000000"><b>Select Student:</b></td>
                
              <td><select id="stu_id" name="stu_id" class="form-control">
                    <option value="0" selected="selected">- -Select- -</option>
                    <?php
               $sql="SELECT * FROM tbl_studentregister WHERE bch_id='$batch' and division='$division'";
                    $result=mysqli_query($db , $sql);
                    while($row = mysqli_fetch_assoc($result))
                    {
                        if($stu_id==$row['stu_id'])
                            echo '<option value="'.$row['stu_id'].'" selected="selected">'.$row['name'].'</option>';
                        else
                             echo '<option value="'.$row['stu_id'].'" >'.$row['name'].'</option>';
                    }
                    ?>
                    </select>
                    </td>
                   <!-- </tr>
                    <tr>-->
                <td colspan="1" align="left" > 
				 <button class="btn btn-sm btn-primary"  width="5" type="submit">Search</button>
				 </td>
				
              </tr>
              <tr>
  
                <td colspan="3"  rowspan="1" align="center">&nbsp;</td>
                
               
      </tr>
              
                 	</table>
                    </td>
                    
                    </form>
                       <?php
 if(isset($_REQUEST['stu_id']))
 {
 	$stu_id=$_REQUEST['stu_id'];
 
 
 
 
 
 ?>
 
 <table   align="center" cellspacing="10" cellpadding="10" width="400" >
   <tr>
  
   </tr> 
    <tr>
         
         
        
     
         
 
      
    </tr>
	<?php
	$sql1="SELECT * FROM tbl_studentregister WHERE tbl_studentregister.stu_id=".$stu_id;
	
	
    $result1=mysqli_query($db , $sql1);
	$no;
	$no=1;
    while($row = mysqli_fetch_assoc($result1))
	{			
	 
  
	$name=$row['name'];	
	
	$gender=$row['gender'];	
    $address=$row['address']; 		
	$acno=$row['ac_no'];

	$email=$row['email'];
	$phone=$row['phone'];
   
	
	
	
	
	
	
		
						?>
							        
  <tr>
  
  
    <tr><th align="left" >Name</th><th>:</th><th><?=$name?></th></tr>
     <tr> <th align="left" >gender</th><th>:</th><th><?=$gender?></th></tr>
    <tr ><th align="left" >address</th><th>:</th><th><?=$address?></th></tr>
    <tr><th align="left" >account number</th><th>:</th><th><?=$acno?></th></tr>
    <tr> <th align="left" >email</th><th>:</th> <th><?=$email?></th></tr>
    <tr><th align="left" >Phone Number</th><th>:</th> <th><?=$phone?></th></tr>
  
   
  
    
    
</tr> 
     
  <?php
  $no++;
	}
   
 ?>
   </table>
   
   
   <?php
   
   }
   ?>
                    </div>
                  
                </div>
            </div>
        </section>

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

