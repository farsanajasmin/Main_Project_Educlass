
<?php

//login
include 'connection.php';
include './mail.php';




if(isset($_POST['Login']))
{
	
		
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$sql="SELECT * FROM users WHERE email='".$email."' AND password='".$password."'";

	$result=mysqli_query($db , $sql);
	if($result){
	$count= mysqli_num_rows($result);
	if($count==0)
	{
		$msg="Incorrect Username or Password";	    
		header('location:login.php?msg='.$msg);
	}
	else
		
	{
		while($row = mysqli_fetch_assoc($result))
		{
		
		$utype=$row['utype'];		
		$uid=$row['uid'];
		$user=$row['uid'];
		

		
	
		
		$status=$row['status'];
		
		if($status==0)
		{
		  $_SESSION['Logid']=$user;
	 
		 if($utype=='A')
			header('location:schoolhome.php');
		else if($utype=='C')
		    header('location:teacherhome.php?uid='.$uid);
		else if ($utype=='S')
		   { header('location:studenthome.php?uid='.$uid);	
		   }
		else if ($utype=='T')
		   { header('location:teacherhome.php?uid='.$uid);	
		   }
		   session_start();
           $_SESSION['Logid']=$row['uid'];;
		}
		else
		  {
		$msg="user not exist";	    
		header('location:login.php?msg='.$msg);
	       }
			
	    }
	}
}}
/////////



if(isset($_POST['register']))
{
	    $flag = 1;
        $flag_email = 1;
	//$regno=$_POST['regno']; 
	$name=$_POST['name']; 
	//$age=$_POST['age'];
	//$gender=$_POST['gender'];
	//$address=$_POST['address'];	
	//$qualification=$_POST['qualification'];
	//$experience=$_POST['experience'];
	$email=$_POST['email'];
	//$phone=$_POST['phone'];
    //$password=$_POST['password'];
	// Password
        $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*";
        $shfl = str_shuffle($comb);
        $password = substr($shfl,0,10);
		
	    $utype="T";
		 
		  
		     $test_sql_email = "SELECT email FROM tregister where email='$email'";
        $result_email = mysqli_query($db, $test_sql_email);
        if(mysqli_fetch_assoc($result_email)){
            $flag_email = 0;
        }

        if($flag==1 && $flag_email==1){
	//insert into user
	
	$sql1='INSERT INTO `educlass`.`users` (`email`, `password`, `utype`) VALUES ("'.$email.'","'.$password.'","'.$utype.'")';

	$result1=mysqli_query($db , $sql1);
	if($result1)
	{
	$uid=mysqli_insert_id($db);
		//insert into register
	  $sql='INSERT INTO `educlass`.`tregister` (`name`,`u_id`,`email`) VALUES ("'.$name.'","'.$uid.'","'.$email.'")';
	 
      $result=mysqli_query($db , $sql);
	  

	   
		 if($result)
		 {
			 	  header("location:verifymail3.php?eml=$email");
			
		 }
		 else
		 {
			 $msg="Error, Try again";	
		 }
		
	
  
} 
}
}

///////add class

if(isset($_POST['addclass']))
{
	//$regno=$_POST['regno']; 
	 $std='STD';
	$class1=$_POST['class'];
    $class=$std.$class1;	
	$date=$_POST['date'];
	
	
		$sql="SELECT * FROM tbl_class WHERE class='$class'";

	$result=mysqli_query($db , $sql);
	if($result){
	$count= mysqli_num_rows($result);
	if(!$count==1)
	{
	

	
	$sql2='INSERT INTO `educlass`.`tbl_class` (`class`, `date`) VALUES ("'.$class.'","'.$date.'")';

	 $result2=mysqli_query($db , $sql2);
	  if($result2)
		 {
			$msg="Class Added Successfully";	    
			header('location:class.php?msg='.$msg);
			
		 }
		 else
		 {
			 $msg="Error, Try again";	
		 }
	}
	else{
		
						   $msg1="Class Already Exsisted";	    
			header('location:class.php?msg1='.$msg1);
		
	}
	}

}
/////////////////////////////add class teacher

if(isset($_POST['addclasstchr']))
{
	//$regno=$_POST['regno']; 
	$class=$_POST['ctchr'];       
	$date=$_POST['date'];
	$batch=$_POST['batch'];


	$div=$_POST['division'];

	
	$sql655="SELECT * FROM tbl_classtchr WHERE class='$batch' && division='$div'";

	$result655=mysqli_query($db , $sql655);
	if($result655){
	$count= mysqli_num_rows($result655);
	if(!$count==1)
	{
	

	$sql7="select t_id from tbl_cst where cst_id=$class";
	$result=mysqli_query($db , $sql7);
    while($row4 = mysqli_fetch_assoc($result))
	{			
	$t_id=$row4['t_id'];

	
	$sql8="select u_id from tregister where `t_id`='$t_id'";
	$result18=mysqli_query($db , $sql8);
    while($row = mysqli_fetch_assoc($result18))
	{			
	$u_id=$row['u_id'];


	
            

     
	 $sql3="UPDATE `users` SET `utype`='C' WHERE `uid`='$u_id'";
	 $result3=mysqli_query($db , $sql3);
	 
	$sql2='INSERT INTO `educlass`.`tbl_classtchr` (`cst_id`,`class`,`division`,`date`) VALUES ("'.$class.'","'.$batch.'","'.$div.'","'.$date.'")';
	

	 $result2=mysqli_query($db , $sql2);
	  if($result2)
		 {
			echo '<script type="text/javascript">
					  
                      alert("class taecher Added Successfully");
                         location="classtchr.php";
                           </script>';
		 }
	}
	}
	}
	else{
		echo '<script type="text/javascript">
					  
                      alert("Class teacher Already Exsisted");
                         location="classtchr.php";
                           </script>';
		
	}
	
	}
}
///////////////add time table
if(isset($_POST['addtimetable']))
{
	$class=$_POST['bch_id'];       
	$div=$_POST['div_idd'];
	
	
	$sql655="SELECT * FROM tbl_timetable WHERE bch_id='$class' && division='$div'";

	$result655=mysqli_query($db , $sql655);
	if($result655){
	$count= mysqli_num_rows($result655);
	if(!$count==1)
	{
	
    for ($k=0; $k <6; $k++) { 


		if($k>0)
		{
		for ($l=1; $l<=7; $l++) { 
		
		$tm=$k.$l;
		 if ($l==1)
		 {
			
         $timtbl=$_POST[$tm]; 
		 }
		
		else if($l==2)
		 {
		
         $timtbl2=$_POST[$tm];	 
		 }
		  else if($l==3)
		 {
		
         $timtbl3=$_POST[$tm];	 
		 }
		 else if($l==4)
		 {
		
         $timtbl4=$_POST[$tm];	 
		 }
	    else if($l==5)
		 {
	
         $timtbl5=$_POST[$tm];	 
		 }
		else  if($l==6)
		 {
         
         $timtbl6=$_POST[$tm];	 
		 }
		else if($l==7)
		 {
		
         $timtbl7=$_POST[$tm]; 
		 }

	if($l==7)
	{
	$days=array("weeks","Monday" ,"Tuesday" ,"wednesday" ,"Theusday" ,"Friday" );

     $day=$days[$k];

		$sql78='INSERT INTO `educlass`.`tbl_timetable`(`day`, `division`, `bch_id`, `hr1`, `hr2`, `hr3`, `hr4`, `hr5`, `hr6`, `hr7`) VALUES ("'. $day.'","'. $div.'","'. $class.'","'.$timtbl.'","'.$timtbl2.'","'.$timtbl3.'","'.$timtbl4.'","'.$timtbl5.'","'.$timtbl6.'","'.$timtbl7.'")';

	    $result78=mysqli_query($db , $sql78);	 
	
	
	}
	
	
	   
	}
	}
	
	
	
}
	}
else{
		
						   $msg1="Time Table Already Exsisted";	    
						   header('location:timetable.php?msg1='.$msg1);
	}
	{
		
		echo '<script type="text/javascript">
					  
                      alert("time table Addded successfully");
                         location="timetable.php";
                           </script>';
						   
		
	}
	}	
}


/////////delete class
if(isset($_POST['deleteclass']))
{
	$c_id=$_POST['c_id'];
	
	$sql66="delete from tbl_class where c_id=$c_id";
	$result23=mysqli_query($db , $sql66);
    if($result23)
		
	{
		
			echo '<script type="text/javascript">
                      alert("class deleted");
                         location="class.php";
                           </script>';
		 }
		 else
		 {
			 $msg="Error, Try again";	
		 }
		
}

////////////delete allocation
if(isset($_GET['deleteallocation']))
{
	$cst_id=$_GET['deleteallocation'];
	
	$sql67="delete from tbl_cst where cst_id=$cst_id";                                                                           


	 $result26=mysqli_query($db , $sql67);
	  if($result26)
		 {
			$msg="Allocation deleted";	    
			header('location:assignsub.php?msg='.$msg);
			
		 }
		 else
		 {
			 $msg="Error, Try again";	
		 }		 
}
////////delete class teaacher
if(isset($_GET['deleteclstchr']))
{
	                                                                     
$cst_id=$_GET['deleteclstchr'];

	$sql7="select t_id from tbl_cst where cst_id=$cst_id";
	$result=mysqli_query($db , $sql7);
    while($row4 = mysqli_fetch_assoc($result))
	{			
	$t_id=$row4['t_id'];

	
	$sql8="select u_id from tregister where `t_id`='$t_id'";
	$result18=mysqli_query($db , $sql8);
    while($row = mysqli_fetch_assoc($result18))
	{			
	$u_id=$row['u_id'];


	
            

     
	 $sql3="UPDATE `users` SET `utype`='T' WHERE `uid`='$u_id'";
	 $result3=mysqli_query($db , $sql3);
	 $sql26="delete from tbl_classtchr where cst_id=$cst_id";
	 $result26=mysqli_query($db , $sql26);
	  if($result26)
		 {
			echo '<script type="text/javascript">
					  
                      alert("class taecher deleted");
                         location="classtchr.php";
                           </script>';
		 }
		 else
		 {
			 $msg="Error, Try again";	
		 }		 
}
	}
}
/////////delete subjects


if(isset($_GET['deletesub']))
{
	$sbid=$_GET['deletesub'];
	
	$sql66="delete from tbl_subjects where sbid=$sbid";


	 $result23=mysqli_query($db , $sql66);
	  if($result23)
		 {
			$msg="Subject Deleted";	    
			header('location:addsub.php?msg='.$msg);

		
		 }
		 else
		 {
			 $msg="Error, Try again";	
		 }
		

}
/////////delete division
if(isset($_POST['deletedivision']))
{
	$div_id=$_POST['div_id'];
	
	$sql67="delete from tbl_division where div_id=$div_id";


	 $result27=mysqli_query($db , $sql67);
	  if($result27)
		 {
			echo '<script type="text/javascript">
					  
                      alert(" Division Deleted");
                         location="adddivision.php";
                           </script>';
		 }
		 else
		 {
			 $msg="Error, Try again";	
		 }
		
////////////////////add schedule

}////////delete schedule
if(isset($_POST['deleteschedule']))
{
	$cs_id=$_POST['csttt_id'];
	
	$sql67="delete from tbl_shedule where faculty=$cs_id";


	 $result27=mysqli_query($db , $sql67);
	  if($result27)
		 {
			echo '<script type="text/javascript">
					  
                      alert(" schedule deleted");
                         location="tviewshedule.php";
                           </script>';
		 }
		 else
		 {
			 $msg="Error, Try again";	
		 }
		

}
///////addbatch

if(isset($_POST['addbatch']))
{
	
	
	
	
		
	
	
	//$regno=$_POST['regno']; 
	$bch_nam=$_POST['bch_name'];       
	$c_id=$_POST['c_id'];
	$date=$_POST['date'];
	
	
	
	
	
	$sqll4="select class from tbl_class where c_id='$c_id'"; 
	 $resultl4=mysqli_query($db , $sqll4);
	  while($rowl4 = mysqli_fetch_assoc($resultl4))
	  {
			  $cname=$rowl4['class'];
		  }
		$bch_name=$bch_nam.'-'.$cname;  
		
		
	$sql="SELECT * FROM tbl_batch WHERE bch_name='$bch_name'";

	$result=mysqli_query($db , $sql);
	if($result){
	$count= mysqli_num_rows($result);
	if(!$count==1)
	//insert into user
	{
	
	$sql3='INSERT INTO `educlass`.`tbl_batch` (`bch_name`, `c_id`, `date`) VALUES ("'.$bch_name.'","'.$c_id.'","'.$date.'")';

	 $result3=mysqli_query($db , $sql3);
	 	  if($result3)
		 {
			$msg="Batch Added Successfully";	    
			header('location:batch.php?msg='.$msg); 
			
		 }
		 else
		 {
			 $msg="Error, Try again";	
		 }
	}
	 else{
		
						   $msg1="Batch Already Exsisted";	    
			header('location:batch.php?msg1='.$msg1); 
			
		
	}
	}
}





///////adddivision
if(isset($_POST['adddivision']))
{
	//$regno=$_POST['regno']; 
	$div="Division";
	$division1=$_POST['division'];       
	$division=$div.'-'.$division1;      
	$date=$_POST['date'];
	
	
	$sql="SELECT * FROM tbl_division WHERE division='$division'";

	$result=mysqli_query($db , $sql);
	if($result){
	$count= mysqli_num_rows($result);
	if(!$count==1)
	//insert into user
	{
	$sql2='INSERT INTO `educlass`.`tbl_division` (`division`, `date`) VALUES ("'.$division.'","'.$date.'")';

	 $result2=mysqli_query($db , $sql2);
	  if($result2)
		 {
			$msg="Division Added Successfully";	    
			header('location:adddivision.php?msg='.$msg);  
			
		 }
		 else
		 {
			 $msg="Error, Try again";	
		 }
	}
	 else{
		$msg1="Division Already Exsisted";	    
		header('location:adddivision.php?msg1='.$msg1);  
		
		
	}
	}	

}
////////////////edit division

if(isset($_POST['updatedivision']))
{
	
	//$regno=$_POST['regno']; 
	$div_id=$_POST['div_id'];
	$division=$_POST['division'];       
	$date=$_POST['date'];
	
//insert into user
	
	//$sql2='INSERT INTO `educlass`.`tbl_class` (`class`, `date`) VALUES ("'.$class.'","'.$date.'")';
	
    $sql="UPDATE `tbl_division` SET `division`='$division',`date`='$date'  WHERE `div_id`='$div_id'";
	

	 $result2=mysqli_query($db , $sql);
	  if($result2)
		 {
			echo '<script type="text/javascript">
					  
                      alert("division updated Successfully");
                         location="adddivision.php";
                           </script>';
		 }
		 else
		 {
			 $msg="Error, Try again";	
		 }
		

}
/////////edit batch

if(isset($_POST['updatebatch']))
{
	//$regno=$_POST['regno']; 
	$bch_id=$_POST['bch_id'];
	$batch=$_POST['batch'];       
	$class=$_POST['c_id'];       
	$date=$_POST['date'];
	
//insert into user
	
	//$sql2='INSERT INTO `educlass`.`tbl_class` (`class`, `date`) VALUES ("'.$class.'","'.$date.'")';
	  $sql="UPDATE `tbl_batch` SET `bch_name`='$batch',`c_id`='$class',`date`='$date'  WHERE `bch_id`='$bch_id'";
	

	 $result2=mysqli_query($db , $sql);
	  if($result2)
		 {
			echo '<script type="text/javascript">
					  
                      alert("batch updated Successfully");
                         location="batch.php";
                           </script>';
		 }
		 else
		 {
			 $msg="Error, Try again";	
		 }
		

}
/////////////edit subjects


if(isset($_POST['updatesub']))
{
	//$regno=$_POST['regno']; 
	$sbid=$_POST['sbid'];
	$subject1=$_POST['subject'];       
	$subject=strtoupper($subject1);       
	echo   $subject;    
	
	 
//insert into user
$sql="SELECT * FROM tbl_subjects WHERE sub_name='$subject'";

	$result=mysqli_query($db , $sql);
	if($result){
	$count= mysqli_num_rows($result);
	if(!$count==1)
	//insert into user
	{
	
	//$sql2='INSERT INTO `educlass`.`tbl_class` (`class`, `date`) VALUES ("'.$class.'","'.$date.'")';
	  $sql="UPDATE `tbl_subjects` SET `sub_name`='$subject'  WHERE `sbid`='$sbid'";
	

	 $result2=mysqli_query($db , $sql);
	  if($result2)
		 {
			$msg="Subject Updated Successfully";	    
			header('location:addsub.php?msg='.$msg);  
			
		 }
		 else
		 {
			 $msg="Error, Try again";	
		 } 
	}else{
		
						   $msg1="Subject Already Exsisted";	    
			header('location:addsub.php?msg1='.$msg1);
		
		 }
	}
		

}



////////////edit class
if(isset($_POST['updateclass']))
{
	//$regno=$_POST['regno']; 
	$c_id=$_POST['c_id'];
	 $std='STD';
	$class1=$_POST['class'];
    $class=$std.$class1;
	      
	$date=$_POST['date'];
	
//insert into user
	
	//$sql2='INSERT INTO `educlass`.`tbl_class` (`class`, `date`) VALUES ("'.$class.'","'.$date.'")';
	  $sql="UPDATE `tbl_class` SET `class`='$class',`date`='$date'  WHERE `c_id`='$c_id'";
	

	 $result2=mysqli_query($db , $sql);
	  if($result2)
		 {
			echo '<script type="text/javascript">
					  
                      alert("class updated Successfully");
                         location="class.php";
                           </script>';
		 }
		 else
		 {
			 $msg="Error, Try again";	
		 }
		

}

///studentregister
if(isset($_POST['register2']))
{
	$regno=$_POST['regno']; 
	$name=$_POST['name']; 
	$bch_id=$_POST['bch_id']; 
	$div_id=$_POST['div_id']; 
	
	$address=$_POST['address'];
    $email=$_POST['email'];	
	$gender=$_POST['gender'];
	$did=$_POST['did'];
	$ac_no=$_POST['ac_no'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
	$utype="S";
	//insert into user
	
	$sql1='INSERT INTO `educlass`.`users` (`email`, `password`, `utype`) VALUES ("'.$email.'","'.$password.'","'.$utype.'")';

	$result1=mysqli_query($db , $sql1);
	if($result1)
	{
	//$uid=$db->insert_id();
		//insert into register
	  $sql='INSERT INTO `educlass`.`tbl_studentregister` (`regno`, `name`, `bch_id`, `address`, `email`, `gender`, `did`, `ac_no`, `phone`, `password`, `division`) VALUES ("'.$regno.'","'.$name.'","'.$bch_id.'","'.$address.'","'.$email.'","'.$gender.'",  "'.$did.'","'.$ac_no.'","'.$phone.'","'.$password.'","'.$div_id.'")';
	  
      $result=mysqli_query($db , $sql);
			  if($result)
		 {
			echo '<script type="text/javascript">
					  
                      alert("student registered Successfully");
                         location="studentregistration.php";
                           </script>';
		 }
		 else
		 {
			 $msg="Error, Try again";	
		 }
}
}
/////addsub
if(isset($_POST['addsub']))
{
	//$regno=$_POST['regno']; 
	$sub_name1=$_POST['sub_name'];       
	$sub_name=strtoupper($sub_name1);     
	
	$sql="SELECT * FROM tbl_subjects WHERE sub_name='$sub_name'";

	$result=mysqli_query($db , $sql);
	if($result){
	$count= mysqli_num_rows($result);
	if(!$count==1)
	//insert into user
	{
	//insert into tbl_subjects
	
	$sql4='INSERT INTO `educlass`.`tbl_subjects` (`sub_name` ) VALUES ("'.$sub_name.'")';

	 $result4=mysqli_query($db , $sql4);
	 	  if($result4)
		 {
			$msg="Subject Added Successfully";	    
			header('location:addsub.php?msg='.$msg);  
			
			
		 }
		 else
		 {
			 $msg="Error, Try again";	
		 }
	}
		 else{
			$msg1="Subject Already Exsisted";	    
			header('location:addsub.php?msg1='.$msg1);
		
		
		 }
	}
}

////////////////////add classsubteacher

if(isset($_POST['addcst']))
{
	//$regno=$_POST['regno']; 
	$bch_id=$_POST['bch_id'];       
	$t_id=$_POST['t_id'];       
	$sbid=$_POST['sbid']; 
	$division=$_POST['div_id']; 
	
    $date=$_POST['date'];	
	
		
	$sql="SELECT * FROM tbl_cst WHERE bch_id='$bch_id' && sbid='$sbid' &&  division='$division'";

	$result=mysqli_query($db , $sql);
	if($result){
	$count= mysqli_num_rows($result);
	if(!$count==1)
	//insert into user
	{
	
	
	//insert into tbl_subjects
	
	$sql5='INSERT INTO `educlass`.`tbl_cst` (`bch_id`, `t_id`, `sbid`, `date`, `division`) VALUES ("'.$bch_id.'","'.$t_id.'","'.$sbid.'","'.$date.'","'.$division.'")';

	 $result5=mysqli_query($db , $sql5);
		  if($result5)
		 {
			$msg="Assigned Successfully";	    
			header('location:assignsub.php?msg='.$msg);  
			
		 }
		 else
		 {
			 $msg="Error, Try again";	
		 } 
		 
	}else{

						   $msg1="Allocation Already Exsisted";	    
						   header('location:assignsub.php?msg1='.$msg1);  
	}
	}	

}
/*if(isset($_POST['attendance']))
{
	     
	$sbid=$_POST['sbid']; 
    $date= date('Y-m-d');
	$batch=$_POST['batch'];
	$regno=$_POST['regno'];
	$hour=$_POST['hour'];
	 foreach ($_POST['st_status'] as $i => $st_status) {
        
        $stat_id = $_POST['stat_id'][$i];
		echo $stat_id;
	 }
	
	echo $sbid;
	echo $date;
	echo $batch;
	echo $regno;
	
	echo $hour;



}*/

//////view report
if(isset($_POST['report']))
{
	//$regno=$_POST['regno']; 
	$sub_name=$_POST['sub_name'];       
	
	
	//insert into tbl_subjects
	
	$sql4='INSERT INTO `educlass`.`tbl_subjects` (`sub_name` ) VALUES ("'.$sub_name.'")';

	 $result4=mysqli_query($db , $sql4);
	  header('location:addsub.php?message='.$msg);

}

?>


