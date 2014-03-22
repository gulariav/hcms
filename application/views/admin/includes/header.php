<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title><?php echo $pgTitle;?> </title>
<?php include_once('include_js.php') ; ?>
<?php include_once('include_css.php') ; ?>
<style type="text/css">
<!--
.style16 {font-weight: bold}
-->
</style>
</head>
<body>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
<tr>
    <td>

		<table width="100%"  border="0" cellspacing="0" cellpadding="0">
		<tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>

          <td bgcolor="#FFFFFF" style="color:#FF0000; padding-left: 170px; text-align: center"><h1>Welcome to Admin Panel of CMS</h1></td>
          <td bgcolor="#FFFFFF">
          	<div class="content_pad">			
				<ul class="right">
                    <li><a href="#" style="color:#000000"><span class="loged-in" ></span>Hello <?php echo $this->session->userdata('username');?></a></li>
                    <li><a href="<?php echo base_url();?>/admin/home/logout" style="color:#000000">Logout</a></li>
                </ul>
            </div>
          </td>
        </tr>
      </table></td>
  </tr>

 		 <?php include_once('menu.php') ; ?>
  
		</table>
  	 </td>
 </tr>

  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="5">
      <tr>
        <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="admincontent">
          <tr>

            <td bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="admincontent">
                <tr>
                  <td bgcolor="#FFFFFF">&nbsp;</td>
                </tr>
                <tr>
                  <td height="200" valign="top" bgcolor="#FFFFFF">





