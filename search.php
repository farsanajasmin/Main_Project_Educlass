
<?php
include 'session.php';
//login
include 'connection.php';
?>
<table  align="center">

  <tr>
  
                <td colspan="3"  rowspan="1" align="center"><h2 style="color:#800080"><b>Member Details </b> </h2><br><br></td>
                
               
      </tr>
                <td style="color:#000000"><b>Select Member:</b></td>
                
              <td><select id="mid" name="mid">
                    <option value="0" selected="selected">- -Select- -</option>
                    <?php
                    $sql="SELECT * FROM member WHERE t_id=".$t_id;
                   $result=mysqli_query($db , $sql);
                      while($row = mysqli_fetch_assoc($result))
                    {
                        if($t_id==$row['t_id'])
                            echo '<option value="'.$row['t_id'].'" selected="selected">'.$row['name'].'</option>';
                        else
                             echo '<option value="'.$row['t_id'].'" >'.$row['name'].'</option>';
                    }
                    ?>
                    </select>
                    </td>
                   <!-- </tr>
                    <tr>-->
                <td colspan="3" align="left" ><input type="submit" value="search" ></a> <img src=images/search.png height="25" width="25"></td>
              </tr>
              <tr>
  
                <td colspan="3"  rowspan="1" align="center">&nbsp;</td>
                
               
      </tr>
              
                 	</table>
                    </td>
                    
                    </form>
 <?php
 if(isset($_REQUEST['mid']))
 {
 	$mid=$_REQUEST['mid'];
 
 
 
 
 
 ?>
 <table border="1" align="center" cellspacing="10" cellpadding="10" width="420">
 <tr>
 <td>
<table  align="center" cellspacing="10" cellpadding="10" width="400" >
   <tr>
  
   </tr> 
    <tr>
    </tr>
   <?php
     $sql="SELECT * FROM member WHERE mid=".$mid; 
	$result=$db->query($sql);
	$regno;
	$regno=1;
    $row=$db->fetch_array($result);	
	$fname=$row['fname'];	
	$age=$row['age'];		
	$address=$row['address'];
	$acno=$row['acno'];
	$rno=$row['rno'];
	$aadhar=$row['aadhar'];
	$phone=$row['phone'];
	    ?>   
      
  	<tr><th align="left" >Name</th><th>:</th><th><?=$fname?></th></tr>
    <tr><th align="left" >Age</th><th>:</th><th><?=$age?></th></tr>
    <tr> <th align="left" >Address</th><th>:</th> <th><?=$address?></th></tr>
    <tr> <th align="left" >Account Number</th><th>:</th><th><?=$aadhar?></th></tr>
    <tr ><th align="left" >Aadhar</th><th>:</th><th><?=$phone?></th></tr>
     
</tr>      

   </table>
   </td>
   </tr>
   </table>
   