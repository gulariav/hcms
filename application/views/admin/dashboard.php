    <!-- =============Center Content panel Start from here==============-->
          <table width="100%" border="0" align="center" cellpadding="7" cellspacing="1" class="table_style">
                <tr>
                  <td colspan="3" align="center"></td>
                </tr>
                <tr>
                  <td width="34%" class="redtxt">&nbsp;</td>
                  <td width="26%" align="right" class="blackboldSmall">&nbsp;</td>
                  <td width="40%" align="right" class="blackboldSmall">Last Login: <?php echo $this->session->userdata['LAST_LOGIN'];?></td>
                </tr>
                <tr>
                  <td valign="top" bgcolor="#E8E8E8">
                    <table width="100%" border="0" cellspacing="1" cellpadding="5">
                      <tr>
                        <td colspan="2" ><strong>Category: </strong></td>
                      </tr>
                      <tr>
                        <td width="79%" bgcolor="#FFFFFF" >Total Department:</td>
                        <td width="21%" align="right" bgcolor="#FFFFFF"><?php echo $category?></td>
                      </tr>
                      <tr>
                        <td bgcolor="#F7F7F7" >Total Speciality:</td>
                        <td align="right" bgcolor="#F7F7F7"><?php echo $subcategory?></td>
                      </tr>
                      <tr>
                        <td bgcolor="#FFFFFF" >Services</td>
                        <td align="right" bgcolor="#FFFFFF"><?php echo $gift?></td>
                      </tr>
                      
                    </table>                  </td>
                  <td valign="top" bgcolor="#E8E8E8">
                  <table width="100%" border="0" cellspacing="1" cellpadding="5">
                    <tr>
                      <td colspan="2" ><strong>User Statistics :</strong></td>
                    </tr>
                    <tr>
                      <td width="79%" bgcolor="#FFFFFF" >Total Users</td>
                      <td width="21%" align="right" bgcolor="#FFFFFF"><a href="new_designer.php"><?php echo $new_designer; ?></a></td>
                    </tr>
                    <tr>
                      <td bgcolor="#F7F7F7" >Total Doctors</td>
                      <td align="right" bgcolor="#F7F7F7"><a href="list_designer.php"><?php echo $approved_designer; ?></a></td>
                    </tr>
                     <tr>
                      <td bgcolor="#F7F7F7" >Total Hospitals</td>
                      <td align="right" bgcolor="#F7F7F7"><a href="list_designer.php"><?php echo $approved_designer; ?></a></td>
                    </tr>
                    
                    
                  </table></td>
                  <td valign="top" bgcolor="#E8E8E8">
                  <table width="100%" border="0" cellspacing="1" cellpadding="5">
                    <tr>
                      <td colspan="2" ><strong>Package Statistic :</strong></td>
                    </tr>
                    <tr>
                      <td width="79%" bgcolor="#FFFFFF" >Total</td>
        
                      <td width="21%" align="right" bgcolor="#FFFFFF"><?php echo $today_newsletter;?></td>
                    </tr>
                    
                  </table></td>
                </tr>
                <tr>
               
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                </tr>
              </table>
                  
           <!-- =============Center Content panel End  here==============-->
                 


</body>
</html>
