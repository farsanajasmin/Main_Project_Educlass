<?php

//login
include 'connection.php';

 
?>
<?php



if($_FILES['excelDoc']['name']) {
    $arrFileName = explode('.', $_FILES['excelDoc']['name']);
    if ($arrFileName[1] == 'csv') {
        $handle = fopen($_FILES['excelDoc']['tmp_name'], "r");
        $count = 0;
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $count++;
            if ($count == 1) {
                continue; // skip the heading header of sheet
            }
                $regno = $db->real_escape_string($data[0]);
                $name = $db->real_escape_string($data[1]);
                $bch_id = $db->real_escape_string($data[2]);
                $address= $db->real_escape_string($data[3]);
                $email = $db->real_escape_string($data[4]);
                $did = $db->real_escape_string($data[5]);
                $ac_no = $db->real_escape_string($data[6]);
                $phone = $db->real_escape_string($data[7]);
                $password = $db->real_escape_string($data[8]);
                $common = new Common();
                $SheetUpload = $common->uploadData($db,$regno,$name,$bch_id,$address,$email,$did,$ac_no,$phone,$password );
        }
        if ($SheetUpload){
            echo "<script>alert('Excel file has been uploaded successfully !');window.location.href='excelupload.php';</script>";
        }
    }
}
class Common
{
  public function uploadData($db,$regno,$name,$bch_id,$address,$email,$did,$ac_no,$phone,$passwordl)
  {
      $sql='INSERT INTO `educlass`.`tbl_studentregister` (`regno`, `name`, `bch_id` ,`address`, `email`, `gender`, `did`, `ac_no`, `phone`, `password`) VALUES ("'.$regno.'","'.$name.'","'.$bch_id.'","'.$address.'","'.$email.'","'.$gender.'",  "'.$did.'","'.$phone.'","'.$ac_no.'","'.$password.'")';
      $result1 = $db->query($sql) or die("Error in main Query".$connection->error);
      return $result1;
  }
}
?>
