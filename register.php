<?php require_once('../Connections/myconnect.php'); ?>
<?php
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1") && $_POST["myname"] != '') {
// print_r($_POST);
// exit();
  // $insertSQL = sprintf("INSERT INTO admin2 (user_name, user_password, myname) VALUES (%s, %s, %s)",
  //                      GetSQLValueString($_POST['Uname'], "text"),
  //                      GetSQLValueString($_POST['pword'], "text"),
  //                      GetSQLValueString($_POST['myname'], "text"));
                     
  
  // $insertSQL = "INSERT INTO admin2 (user_name, user_password,myname,phone,sex,old,birth,mont,Budd,nality,religion,denti,hound,village,alley,road,district,canton,cuy,ipostal,spab,edc,current,cause,coni) VALUES ($_POST['Uname'],$_POST['pword'],$_POST['myname'],$_POST['phone'],$_POST['sex'],$_POST['old'],$_POST['birth'],$_POST['mont'],$_POST['Budd'],$_POST['nality'],$_POST['religion'],$_POST['denti'],$_POST['hound'],$_POST['village'],$_POST['alley'],$_POST['road'],$_POST['district'],$_POST['canton'],$_POST['cuy'],$_POST['ipostal'],$_POST['spab'],$_POST['edc'],$_POST['current'],$_POST['cause'],$_POST['coni'])" ;
  $insertSQL = "INSERT INTO `admin2` (`id`, `user_name`, `user_password`, `myname`,`MRV`,`phone`, `sex`, `old`, `birth`, `mont`, `Budd`, `nality`, `religion`, `denti`, `hound`, `village`, `alley`, `road`, `district`, `canton`, `cuy`, `ipostal`, `spab`, `edc`, `current`, `cause`, `coni`) VALUES (NULL, '".$_POST['Uname']."','".$_POST['pword']."','".$_POST['myname']."','".$_POST['MRV']."','".$_POST['phone']."','".$_POST['sex']."','".$_POST['old']."','".$_POST['birth']."','".$_POST['mont']."','".$_POST['Budd']."','".$_POST['nality']."','".$_POST['religion']."','".$_POST['denti']."','".$_POST['hound']."','".$_POST['village']."','".$_POST['alley']."','".$_POST['road']."','".$_POST['district']."','".$_POST['canton']."','".$_POST['cuy']."','".$_POST['ipostal']."','".$_POST['spab']."','".$_POST['edc']."','".$_POST['current']."','".$_POST['cause']."','".$_POST['coni']."')" ;
  // $insertSQL = "INSERT INTO `admin2` (`id`, `user_name`, `user_password`, `myname`, `phone`, `sex`, `old`, `birth`, `mont`, `Budd`, `nality`, `religion`, `denti`, `hound`, `village`, `alley`, `road`, `district`, `canton`, `cuy`, `ipostal`, `spab`, `edc`, `current`, `cause`, `coni`) VALUES (NULL, '".$_POST['Uname']."', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2')" ;
  echo  $insertSQL ;

  if (!$myconnect -> query($insertSQL)) {
    echo("Error description: " . $myconnect -> error);
  }
  // exit();
  // $insertSQL = sprintf("INSERT INTO admin2 (user_name, user_password,myname,phone,sex,old,birth,mont,Budd,nality,religion,denti,hound,village,alley,road,district,canton,cuy,ipostal,spab,edc,current,cause,coni) VALUES (%s, %s, %s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)",
  //                      GetSQLValueString($_POST['Uname'], "text"),
  //                      GetSQLValueString($_POST['pword'], "text"),
  //                      GetSQLValueString($_POST['myname'], "text"),
  //                      GetSQLValueString($_POST['MRV'], "text"),
  //                      GetSQLValueString($_POST['phone'], "text"),
  //                      GetSQLValueString($_POST['sex'], "text"),
  //                      GetSQLValueString($_POST['old'], "text"),
  //                      GetSQLValueString($_POST['birth'], "text"),
  //                      GetSQLValueString($_POST['mont'], "text"),
  //                      GetSQLValueString($_POST['Budd'], "text"),
  //                      GetSQLValueString($_POST['nality'], "text"),
  //                      GetSQLValueString($_POST['religion'], "text"),
  //                      GetSQLValueString($_POST['denti'], "text"),
  //                      GetSQLValueString($_POST['hound'], "text"),
  //                      GetSQLValueString($_POST['village'], "text"),
  //                      GetSQLValueString($_POST['alley'], "text"),
  //                      GetSQLValueString($_POST['road'], "text"),
  //                      GetSQLValueString($_POST['district'], "text"),
  //                      GetSQLValueString($_POST['canton'], "text"),
  //                      GetSQLValueString($_POST['cuy'], "text"),
  //                      GetSQLValueString($_POST['ipostal'], "text"),
  //                      GetSQLValueString($_POST['spab'], "text"),
  //                      GetSQLValueString($_POST['edc'], "text"),
  //                      GetSQLValueString($_POST['current'], "text"),
  //                      GetSQLValueString($_POST['cause'], "text"),
  //                      GetSQLValueString($_POST['coni'], "text"));
                       

  // mysql_select_db($database_myconnect, $myconnect);
  // print_r($_POST);
  // $Result1 = mysqli_query($insertSQL, $myconnect) or die(mysql_error());
  // $myconnect->query($insertSQL) or die($mysqli->connect_error);
 
 
	// echo "true" ;
	// exit ;
  $insertGoTo = "index.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

// if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
	 
//   $insertSQL = sprintf("INSERT INTO admin2 (user_name, user_password, myname) VALUES (%s, %s, %s)",
//                        GetSQLValueString($_POST['Uname'], "text"),
//                        GetSQLValueString($_POST['pword'], "text"),
//                        GetSQLValueString($_POST['myname'], "text"));

//   mysql_select_db($database_myconnect, $myconnect);
//   $Result1 = mysql_query($insertSQL, $myconnect) or die(mysql_error());

  // $insertGoTo = "../โปรเจ็คเว็บไซต์/index.html";
  // if (isset($_SERVER['QUERY_STRING'])) {
  //   $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
  //   $insertGoTo .= $_SERVER['QUERY_STRING'];
  // }
  // header(sprintf("Location: %s", $insertGoTo));

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#สมัครสมาชิกสมาคมคนพิการทางการเคลื่อนไหวจังหวัดอุทัยธานี {
	font-size: 36px;
	font-family: Modern;
}
.สมัครสมาชิกสมาคมคนพิการทางการเคลื่อนไหวจังหวัดอุทัยธานี {
	font-size: 24px;
}
.สมัครสมาชิกสมาคมคนพิการทางการเคลื่อนไหวจังหวัดอุทัยธานี {
	font-size: 24px;
}
body {
	background-color: #C9F;
}
body,td,th {
	color: #000;
	font-size: 20px;
}
</style>
</head>

<body bgcolor="#FFFFFF">

 <p>&nbsp;</p>
 <form id="form1" name="form1" method="post">
   <div align="center"><span class="สมัครสมาชิกสมาคมคนพิการทางการเคลื่อนไหวจังหวัดอุทัยธานี" id="สมัครสมาชิกสมาคมคนพิการทางการเคลื่อนไหวจังหวัดอุทัยธานี">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สมัครสมาชิกสมาคมคนพิการทางการเคลื่อนไหวจังหวัดอุทัยธานี</span>
   </div>
   <label for="myname">
     <div align="center"><br />
     </div>
   </label>
  <label for="myname">
    <div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;คำนำหน้าชื่อ :&nbsp;&nbsp;&nbsp;
      <input name="MRV" type="text" id="MRV" value="" size="30" />
      
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 20px">ชื่อ - นามสกุล:</span>&nbsp;&nbsp;&nbsp;
      <input name="myname" type="text" id="myname" size="30" />
      <br />
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #C00; font-size: 16px; font-family: BrowalliaUPC;">***กรุณากรอกข้อมูล***&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;***กรุณากรอกข้อมูล***</span><br />
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 20px">ชื่อผู้เข้าใช้งาน :</span>&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 20px">
      <input name="Uname" type="text" id="Uname" size="30" />
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;รหัสผ่าน :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
      <input name="pword" type="password" id="pword" size="30" />
      <br />
      <span style="color: #C00; font-size: 16px; font-family: BrowalliaUPC;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;***กรุณากรอกข้อมูล***</span> <span style="color: #C00; font-size: 16px; font-family: BrowalliaUPC;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;***กรุณากรอกข้อมูล***</span><br />
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 20px">เบอร์โทรศัพท์ :</span>&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;
      <input name="phone" type="text" id="phone" size="30" />
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 20px">เพศ :</span>&nbsp;&nbsp;
      &nbsp;&nbsp;
<input name="sex" type="text" id="sex" size="30" />
      <span style="font-size: 20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;อายุ :&nbsp;</span>
      <input name="old" type="text" id="old" size="30" />
      <br />
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 20px">เกิดวันที่ :</span>&nbsp;&nbsp;
&nbsp;
&nbsp;&nbsp;
<input name="birth" type="text" id="birth" size="30" />
      <span style="font-size: 20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เดือนเกิด :</span>
      <input name="mont" type="text" id="mont" size="30 " />
      &nbsp;<span style="font-size: 24px"><span style="font-size: 20px">พ.ศ.เกิด :</span></span>
      <input name="Budd" type="text" id="Budd" size="30" />
      <br />
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 20px">สัญชาติ :</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input name="nality" type="text" id="nality" size="30" />
      <span style="font-size: 20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ศาสนา :</span>&nbsp;
      <input name="religion" type="text" id="religion" size="30" />
      <span style="font-size: 20px">บัตรประชาชน :</span>
      <input name="denti" type="text" id="denti" size="25" />
      <br />
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 20px">บ้านเลขที่ :</span>&nbsp;
      &nbsp;
      &nbsp;&nbsp;
      <input name="hound" type="text" id="hound" size="30" />
      <span style="font-size: 20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หมู่ที่ :</span>
      <input name="village" type="text" id="village" size="30" />
      <span style="font-size: 20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ซอย &nbsp;&nbsp;:</span>
      <input name="alley" type="text" id="alley" size="30" />
      <br />
   </div>
  </label>
  <label for="Uname">
  &nbsp;&nbsp;<span style="font-size: 20px">ถนน :</span>
  <input name="road" type="text" id="road" size="15" />
  <span style="font-size: 20px">ตำบล/แขวง :</span><span style="font-size: 20px">
  <input name="district" type="text" id="district" size="17" />
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;อำเภอ/เขต :&nbsp;&nbsp;
  <input name="canton" type="text" id="canton" size="15" />
  </span><span style="font-size: 20px">&nbsp;&nbsp;จังหวัด :&nbsp;&nbsp;
  <input name="cuy" type="text" id="cuy" size="15" />
  &nbsp;&nbsp;รหัสไปรษณีย์:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
  <input name="ipostal" type="text" id="ipostal" size="15" />
  <br />
  <span style="font-size: 20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ความสามารถพิเศษ :</span>
  <input name="spab" type="text" id="spab" size="32" />
  <span style="font-size: 20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วุฒิการศึกษา :</span>
<input name="edc" type="text" id="edc" size="30" />
  <span style="font-size: 20px">อาชีพปัจจุบัน :</span>
  <input name="current" type="text" id="current" size="25" />
  <br />
  <span style="font-size: 20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สาเหตุของความพิการ :</span>&nbsp;
  <input name="cause" type="text" id="cause" size="45" />
  &nbsp;&nbsp;<span style="font-size: 20px">สภาพความพิการ :&nbsp;</span>
<input name="coni" type="text" id="coni" size="51" />
  <br />
  <div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="hidden" name="MM_insert" value="form1" />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" name="btnRegister" id="btnRegister" value="สมัครสมาชิก" />
    <button onclick="index.php">เข้าสู่ระบบ</button>
    <input type="reset" value="Reset">
      
    <map name="Map" id="Map">
      <area shape="rect" coords="7,5,84,15" href="index.php" />
    </map>
    <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div align="left">    </div>
  </div>
  <span style="font-size: 24px">
  </label>
  </span>
</form>
<table width="1338" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="72" align="center" bgcolor="#202060" style="color: #FFF; font-size: 22px; font-family: BrowalliaUPC;">สมาคมคนพิการทางการเคลื่อนไหวจังหวัดอุทัยธานี เลขที่ 68 ม.4 ต.เกาะเทโพ อ.เมือง จ.อุทัยธานี 61000 <br>
    Tel.056-510606 , 097-9311146 (นายกสมาคม)<br />
    พัฒนาโดย นายอำพล เกตุพงษ์</td>
  </tr>
</table>
</body>
</html>




