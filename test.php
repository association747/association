

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style type="text/css">
body {
	background-color: #C3F;
}
body,td,th {
	color: #FFF;
}
.ข้อมูลสมาชิกสมาคมคนพิการทางการเคลื่อนไหวจังหวัดอุทัยธาน {
	font-family: "TH SarabunPSK";
	font-size: 40px;
	text-align: center;
	color: #FFF;
}
</style>
</head>

<body>
<p><span class="ข้อมูลสมาชิกสมาคมคนพิการทางการเคลื่อนไหวจังหวัดอุทัยธาน">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <img src="pop.png" width="80" height="80" />&nbsp;ข้อมูลสมาชิกสมาคมคนพิการทางการเคลื่อนไหวจังหวัดอุทัยธานี</span><br />
<br />
</p>
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
<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="wwwwwwww.png" width="185" height="50" usemap="#Map" border="0" />
<map name="Map" id="Map">
  <area shape="rect" coords="8,7,182,47" href="index.html" />
</map>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
&nbsp;&nbsp;
<table width="1338" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="72" align="center" bgcolor="#202060" style="color: #FFF; font-size: 22px; font-family: BrowalliaUPC;"><span style="">สมาคมคนพิการทางการเคลื่อนไหวจังหวัดอุทัยธานี เลขที่ 68 ม.4 ต.เกาะเทโพ อ.เมือง จ.อุทัยธานี 61000 <br>
    Tel.056-510606 , 097-9311146 (นายกสมาคม)<br />
    พัฒนาโดย นายอำพล เกตุพงษ์</span></td>
  </tr>
</table>
</body>
</html>