<html>
<head>
<title>grade1</title>
</head>
<body>
<table border="1" cellspacing="1" cellpadding="1" width="200" height="200">
<tr>
<th>classid</th>
<th>studentid</th>
<th>teacherid</th>
<th>locid</th>
<th>date</th>
<th>flag</th>
<th>comments</th>
</tr>
<?php
  include 'conn.php';
  $query = "(SELECT  a.classid, a.fname, b.teacherid, c.locid
             FROM class_master c JOIN student_master a 
             ON c.classid = a.classid JOIN teacher_link b
             ON c.classid = b.classid 
             WHERE c.classid = 'grade1' )";
  $result = mysql_query($query);



  while( $row = mysql_fetch_array($result))
{
  echo "<form action=insertattend.php method=POST>";
  echo "<tr>";
  echo "<td>" . "<input type=text value=" .$row['classid']." </td>";
  echo "<td>" . "<input type=text value=" .$row['fname']." </td>";
  echo "<td>" . "<input type=text value=" .$row['teacherid']." </td>";
  echo "<td>" . "<input type=text value=" .$row['locid']." </td>";
  echo "<td>" . "<input name=date type=date value='date'></td>";
  echo "<td>" . "<input type=radio name=attend value='present'>";?>P
  <?php echo "<input type=radio name=attend value='absent'>";?>A
  <?php
  echo"</td>";
  echo "<td><input name=comment type=comment row=3 column=5></td>";
  }
  echo "</tr>";     
  ?>
  </table>
  <input type="submit" value="submit">
  </form>
  </body>
  </html>