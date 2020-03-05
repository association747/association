<?php require_once('../Connections/myconnect.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
  // print_r($_SESSION);
}
$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
   print_r($_accesscheck);
}

if (isset($_POST['uname']) && $_POST['uname'] != '') {
  $loginUsername=$_POST['uname'];
  $password=$_POST['pword'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "../โปรเจ็คเว็บไซต์/index.html";
  // $MM_redirectLoginSuccess = "for-admin.php";
  $MM_redirectLoginFailed = "index.php";
  $MM_redirecttoReferrer = false;
  // mysql_select_db($database_myconnect, $myconnect);
  
   $LoginRS__query=("SELECT user_name, user_password FROM admin2 WHERE user_name= '".$_POST['uname']."' AND user_password='".$_POST['pword']."'"); 
 $result = $myconnect -> query($LoginRS__query);
   if (!$result) {

    echo("Error description: " . $myconnect -> error);
    
  }
  else {
    if(mysqli_num_rows($result) > 0){
      $_SESSION['MM_Username'] = $loginUsername;
      $_SESSION['MM_UserGroup'] = $loginStrGroup;	      
      header("Location: " . $MM_redirectLoginSuccess );
    }
  
  
   
  }

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login</title>
<style type="text/css">
body {
	background-color: #C6F;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="POST" action="<?php echo $loginFormAction; ?>">
  <label for="uname">
    <div align="center"><span style="font-size: 24px"><br />
      &nbsp;&nbsp;&nbsp;<img src="aa.png" width="150" height="150" /><br />
      UserName :&nbsp;</span>
      <input type="text" name="uname" id="uname" />
    </div>
  </label>
  <div align="center"><br />
  </div>
  <label for="pword">
    <div align="center"><span style="font-size: 24px">password :&nbsp;&nbsp; </span>
      <input type="password" name="pword" id="pword" />
    </div>
  </label>
  <div align="center">
    <p><br />
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="submit" name="btnlogin" id="btnlogin" value="LogIn" /> 
    </p>
    <p><a href="register.php" style="font-size: 24px">  สมัครสมาชิก</a></p>
    <p><img src="wwwwwwww.png" width="150" height="40" usemap="#Map" border="0" />
      <map name="Map" id="Map">
        <area shape="rect" coords="5,2,144,36" href="index.html" />
      </map>
    </p>
  </div>
</form>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<table width="1338" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="72" align="center" bgcolor="#202060" style="color: #FFF; font-size: 22px; font-family: BrowalliaUPC;">สมาคมคนพิการทางการเคลื่อนไหวจังหวัดอุทัยธานี เลขที่ 68 ม.4 ต.เกาะเทโพ อ.เมือง จ.อุทัยธานี 61000 <br>
    Tel.056-510606 , 097-9311146 (นายกสมาคม)<br />
    พัฒนาโดย นายอำพล เกตุพงษ์</td>
  </tr>
</table>
</body>
</html>





