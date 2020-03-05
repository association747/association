

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>
<p>&nbsp;</p>
<table width="844" height="79" border="1" align="center">
  <tr>
    <td width="100" height="48" align="center">คำนำหน้า</td>
    <td width="224" align="center">ชื่อ-นามสกุล</td>
    <td width="85" align="center">เพศ</td>
    <td width="149" align="center">เบอร์โทรศัพท์</td>
    <td width="118" align="center">สาเหตุความพิการ</td>
    <td width="128" align="center">สภาพความพิการ</td>
  </tr>
 <?php
 require_once('../Connections/myconnect.php'); 

  $sql="select*from admin2";
  
  $result=mysqli_query($myconnect,$sql);
 while($row = mysqli_fetch_assoc($result)){

 

  ?>

  <tr align="center">
    <td height="23"><?php echo $row['mrv'] ;?></td>
    <td><?php echo $row['myname'] ;?></td>
    <td><?php echo $row['sex'] ;?></td></td>
    <td><?php echo $row['phone'] ;?></td></td>
    <td><?php echo $row['cause'] ;?></td></td>
    <td><?php echo $row['coni'] ;?></td></td>
  </tr>
  <?php

 }
  ?>

</table>
</body>
</html>