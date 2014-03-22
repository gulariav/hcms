<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>HMS Admin Panel</title>
<?php include_once('includes/include_js.php') ; ?>
<?php include_once('includes/include_css.php') ; ?>
</head>

<body> 
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>

<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td bgcolor="#FFFFFF" align="center"><h1>Welcome to Admin Panel of HMS</h1></td>
        </tr>
      </table></td>
  </tr>
  <tr>

    <td width="99%" height="35" background="<?php echo base_url();?>assets/images/topmbg.jpg"><table width="100%"  border="0" cellspacing="0" cellpadding="0" class="topmenu">
        <tr>
          <td height="35" background="<?php echo base_url();?>assets/images/three_0.gif" class="topmenubrown">&nbsp;&nbsp;||&nbsp;&nbsp;<a href="#" target="blank" class="topmenu">Hospital Management System</a></td>
        </tr>
      </table>
          </td>
  </tr>

</table>
</td>
  </tr>
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="admincontent">
          <tr>
            <td bgcolor="#FFFFFF"> <form action="<?php echo base_url();?>/admin/home/loginaction" method="post" name="frm" id="frm" >
              <br>

              <table width="100%"  border="0" cellpadding="1" cellspacing="0">
                
               
                <tr>
                  <td height="50"><br>
                    <table width="32%"  border="0" align="center" cellpadding="3" cellspacing="0" class="content">
                        <tr>
                        	<td width="9%">&nbsp;</td>
                        	<td >&nbsp;</td>
                            <td width="9%"><?php session_start();
						if($_SESSION['ERROR']!=''){
								echo $_SESSION['ERROR'];
								$_SESSION['ERROR']='';		
}?></td>
                        </tr>
                        <tr><td colspan="3">&nbsp;</td></tr>
                        <tr>
                          <td width="7%" height="25"><div align="right">Username <span class="redcontent">*</span> </div></td>
                          <td width="9%">&nbsp;</td>
                          <td width="9%">
                          <input name="username" value="" type="text" class="input-bx" id="username" />                        </td>
                          </tr>
                           <tr><td colspan="3"></td></tr>
                        <tr>
                          <td><div align="right">Password <span class="redcontent">*</span></div></td>

                          <td>&nbsp;</td>
                          <td><input name="password" type="password" class="input-bx" id="password"></td>
                          </tr>
                          <tr><td colspan="3"></td></tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td> <input name="Submit" id="login" type="submit" value="Login" class="SaveButton"/></td>
                        </tr>
                    </table>                      </td>

                </tr>
              </table>
            </form></td>
          </tr>
          <tr>
            <td height="100" bgcolor="#FFFFFF">&nbsp;</td>
          </tr>
          
        </table></td>
      </tr>

    </table></td>
  </tr>

<?php include_once('includes/footer.php') ; ?>

</table>
</body>
</html>
