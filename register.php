<?php require_once('../Connections/myconnect.php'); ?>
<?php
// if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1") && ($_POST["myname"] == '') {
if ($_POST["myname"] != '') {

  $insertSQL = "INSERT INTO `admin2` (`id`, `user_name`, `user_password`, `myname`,`MRV`,`phone`, `sex`, `old`, `birth`, `mont`, `Budd`, `nality`, `religion`, `denti`, `hound`, `village`, `alley`, `road`, `district`, `canton`, `cuy`, `ipostal`, `spab`, `edc`, `current`, `cause`, `coni`) VALUES (NULL, '".$_POST['Uname']."','".$_POST['pword']."','".$_POST['myname']."','".$_POST['MRV']."','".$_POST['phone']."','".$_POST['sex']."','".$_POST['old']."','".$_POST['birth']."','".$_POST['mont']."','".$_POST['Budd']."','".$_POST['nality']."','".$_POST['religion']."','".$_POST['denti']."','".$_POST['hound']."','".$_POST['village']."','".$_POST['alley']."','".$_POST['road']."','".$_POST['district']."','".$_POST['canton']."','".$_POST['cuy']."','".$_POST['ipostal']."','".$_POST['spab']."','".$_POST['edc']."','".$_POST['current']."','".$_POST['cause']."','".$_POST['coni']."')" ;
  
  echo  $insertSQL ;

  if (!$myconnect -> query($insertSQL)) {
    echo("Error description: " . $myconnect -> error);
  }

  // $insertGoTo = "index.php";
  // if (isset($_SERVER['QUERY_STRING'])) {
  //   $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
  //   $insertGoTo .= $_SERVER['QUERY_STRING'];
  // }
  // header(sprintf("Location: %s", $insertGoTo));
}



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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      &nbsp;&nbsp;คำนำหน้าชื่อ :&nbsp;&nbsp;&nbsp;
      <input name="MRV" type="text" id="MRV" size="30" />
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 20px">ชื่อ - นามสกุล:</span>&nbsp;&nbsp;&nbsp;
      <input name="myname" type="text" id="myname" size="30" />
      <br />
      <br />
   </div>
  </label>
  <label for="Uname">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ชื่อผู้เข้าใช้งาน :&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-size: 20px">
  <input name="Uname" type="text" id="Uname" size="30" />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;รหัสผ่าน :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
  <input name="pword" type="password" id="pword" size="30" />
  <br />
  <br />
  <div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เบอร์โทรศัพท์ :</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input name="phone" type="text" id="phone" size="30" />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 24px">&nbsp;<span style="font-size: 20px">เพศ :</span></span>
    <input name="sex" type="text" id="sex" size="30" />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;อายุ :&nbsp;</span>
    <input name="old" type="text" id="old" size="30" />
    <div align="left">
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 20px">&nbsp;เกิดวันที่ :&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input name="birth" type="text" id="birth" size="30" />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 20px">เดือนเกิด :</span>&nbsp;&nbsp;
        <input name="mont" type="text" id="mont" size="30 " />
        &nbsp;&nbsp;&nbsp;<span style="font-size: 24px"><span style="font-size: 20px">พ.ศ.เกิด :</span></span>&nbsp;
        <input name="Budd" type="text" id="Budd" size="30" />
        <br />
      </p>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 20px">สัญชาติ :&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input name="nality" type="text" id="nality" size="30" />
        &nbsp;      &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<span style="font-size: 20px">ศาสนา :&nbsp;</span>&nbsp;
        <input name="religion" type="text" id="religion" size="30" />
        &nbsp;&nbsp;&nbsp;<span style="font-size: 20px">บัตรประชาชน :</span>
        <input name="denti" type="text" id="denti" size="25" />
        <br />
      </p>
      <p><span style="font-size: 20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;บ้านเลขที่ :&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input name="hound" type="text" id="hound" size="30" />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 20px">หมู่ที่ : </span>&nbsp;&nbsp;
        <input name="village" type="text" id="village" size="30" />
        &nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 24px">&nbsp;<span style="font-size: 20px">&nbsp;&nbsp;ซอย &nbsp;&nbsp;:&nbsp;</span></span>
        <input name="alley" type="text" id="alley" size="30" />
        &nbsp;<span style="font-size: 20px">&nbsp;&nbsp;<br />
      </span></p>
      <p><span style="font-size: 20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ถนน :</span>&nbsp;&nbsp;
        <input name="road" type="text" id="road" size="20" />
        <span style="font-size: 20px">ตำบล/แขวง :</span>
<input name="district" type="text" id="district" size="20" />
        &nbsp;<span style="font-size: 20px">อำเภอ/เขต :</span>
        <input name="canton" type="text" id="canton" size="20" /> 
        <span style="font-size: 20px">จังหวัด</span> :&nbsp;&nbsp;
        <input name="cuy" type="text" id="cuy" size="20" />
        &nbsp;<span style="font-size: 20px">รหัสไปรษณีย์:</span>
        <input name="ipostal" type="text" id="ipostal" size="20" />
        <br />
      </p>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 24px"><span style="font-size: 20px">ความสามารถพิเศษ :</span></span>
        <input name="spab" type="text" id="spab" size="32" />
        &nbsp;&nbsp;<span style="font-size: 20px">วุฒิการศึกษา : </span>
        <input name="edc" type="text" id="edc" size="30" />
        <span style="font-size: 20px">อาชีพปัจจุบัน :</span>
        <input name="current" type="text" id="current" size="30" />
        <br />
      </p>
      <p>&nbsp;&nbsp;&nbsp;<span style="font-size: 20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สาเหตุของความพิการ :</span>&nbsp;&nbsp;&nbsp;
        <input name="cause" type="text" id="cause" size="45" />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 20px">สภาพความพิการ :&nbsp;&nbsp;</span>
<input name="coni" type="text" id="coni" size="51" />
        <br />
        <br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="hidden" name="MM_insert" value="form1" />
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="submit" name="btnRegister" id="btnRegister" value="สมัครสมาชิก" />
      <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="dd.png" width="88" height="20" usemap="#Map" border="0" href="index.php" />
      <map name="Map" id="Map">
        <area shape="rect" coords="7,5,82,15" href="index.php" />
      </map>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
    </div>
  </div>
  <span style="font-size: 24px">
  </label>
  </span>
</form>
</body>
</html>




