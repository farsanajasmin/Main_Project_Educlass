
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
      <!-- partial:partials/_sidebar.html -->

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
                   
                         <button class="btn btn-sm btn-light bg-white dropdown-" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <i class="mdi mdi-calendar"></i> 
                    </button>
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

     <?php
                     $sql="SELECT tbl_batch.bch_id,tbl_division.div_id from tbl_cst Left join tbl_division on tbl_cst.division=tbl_division.div_id Left join tbl_batch on tbl_cst.bch_id=tbl_batch.bch_id where tbl_cst.t_id='$t_id'";
			
                    $result=mysqli_query($db , $sql);
                    while($row = mysqli_fetch_assoc($result))
		
                    {
                        
                    
                 
global $batch;


    
     $batch = $row['bch_id'];
	
	
global $div;


    
     $div = $row['div_id'];
	

	 ?>  
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
					 <form action="" method="post" enctype="multipart/form-data" >
        
		   <div class="form-group"  style="margin-top:-5px;>
					  <label for="">Subjects</label>
                    <!--  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="class" name="class">
					-->
					<div class="col-sm-12">
                            <select class="form-control" id="sbid" name="sbid">
                               <?php
                   $sql="SELECT tbl_subjects.sub_name,tbl_subjects.sbid from tbl_cst Left join tbl_subjects on tbl_cst.sbid=tbl_subjects.sbid where tbl_cst.t_id='$t_id'";
			
                    $result=mysqli_query($db , $sql);
                    while($row = mysqli_fetch_assoc($result))
		
                    {
                        //if($type==$row['mtype_id'])
                            //echo '<option value="'.$row['mtype_id'].'" selected="selected">'.$row['m_type'].'</option>';
                        //else
                             echo '<option value="'.$row['sbid'].'" >'.$row['sub_name'].'</option>';
                    }
                    ?>
                            </select>
                          
						  </div><br>
						  
						    
						   <div class="form-group" style="margin-top:-5px;>
						   <label for="">Batch</label>
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
                         
                     
                    </div></br>
					  
						   <div class="form-group" style="margin-top:-5px;>
						   <label for="">Division</label>
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
                        
                     
                    </div><br>
					
            
					 <div class="form-group" style="margin-top:-5px;>
                      <label for=""> Start Date</label>
					  <div class="col-sm-12">
                    <!--  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="class" name="class">
					 <div class="form-group">
                      <label for="exampleInputPassword1">date</label>-->
                      <input type="date" class="form-control" id="exampleInputPassword1" placeholder="creation date:dd/mm/yyy" name="date1" required>
                   
                   
                    </div><br>
					  <div class="form-group" style="margin-top:-5px;>
                      <label for=""> End Date</label>
					  <div class="col-sm-12">
                    <!--  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="class" name="class">
					 <div class="form-group">
                      <label for="exampleInputPassword1">date</label>-->
                      <input type="date" class="form-control" id="exampleInputPassword1" placeholder="creation date:dd/mm/yyy" name="date2" required>
                
                    </div>   <br> 
					  <div class="form-group" style="margin-top:-5px;>
                      <label for=""> Title</label>
					  <div class="col-sm-12">
                    <!--  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="class" name="class">
					 <div class="form-group">
                      <label for="exampleInputPassword1">date</label>-->
                      <input type="text" class="form-control" id="exampleInputPassword1" name="title" required>
                   
                   
                    </div><br>
					<div class="form-group" style="margin-top:-5px;>
                      <label for=""> Max Mark</label>
					  <div class="col-sm-12">
                    <!--  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="class" name="class">
					 <div class="form-group">
                      <label for="exampleInputPassword1">date</label>-->
                      <input type="text" class="form-control" id="exampleInputPassword1" name="mark" required>
                   
                   
                    </div>
					<div class="form-group">
                      <label for="exampleInputUsername1">Question</label><br><br><br>
                       <input type="file" name="myfile"> <br>
                    </div>
          
                 <button type="submit" name="addshedule" class="btn btn-primary mr-2" value="addshedule">Add</button>
                    <button class="btn btn-light">Cancel</button>
        </form>
		<?php
					}?>  
		                       <?php
 // Uploads files
if (isset($_POST['addshedule'])) { // if save button on the form is clicked
    // name of the uploaded file
	  $date1=$_POST['date1'];
	  $date2=$_POST['date2'];
	  $subjects=$_POST['sbid'];
	  $batch=$_POST['bch_id'];
	  $division=$_POST['div_id'];
	  $title=$_POST['title'];
	  $max=$_POST['mark'];
	  
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
      $destination = 'questions/' . $filename;

       $extension = pathinfo($filename, PATHINFO_EXTENSION);
	     $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 100000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
		 if (move_uploaded_file($file, $destination)) {
        // move the uploaded (temporary) file to the specified destination
        #
            $sql = "INSERT INTO tbl_quesions (q_name, size, subject, start_date, end_date, bch_id, division, title, max) VALUES ('$filename',$size, $subjects,'$date1','$date2','$batch','$division','$title','$max')";
            if (mysqli_query($db, $sql)) {
               if($result)
		 {
			echo '<script type="text/javascript">
					  
                      alert("file upload  Successfully");
                         location="texamshedule.php";
                           </script>';
		 }
		
            }
		 }  else
		 {
			 $msg="Error, Try again";	
		 }
    }
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

