<?php
include "header.php";
include('nav_bar.php')
?>
<?php
   $school = trim($_POST['school']);
  // echo $school;
?>
      <form action="" method="post" enctype="multipart/form-data">
      <fieldset>
        <legend><strong>Sessions Settings</strong></legend>
        <table width="700" align="center" style="border: 1px solid #d5dfec;">
          <tr>
            <td colspan="18" align="left" valign="middle" class="ruler" bgcolor="#dddddd"><h2>Sessions</h2>
              Click a session to set as default session</td>
          </tr>
          <tr>
            <td colspan="18" align="left" valign="middle" class="ruler" >&nbsp;</td>
          </tr>
          <tr>
            <td  align="left" valign="middle">&nbsp;</td>
            <td  align="left" valign="middle"><strong>Sessions</strong></td>
            <td ><strong>Status</strong></td>
            <td  align="left" valign="middle">&nbsp;</td>
            <td  align="left" valign="middle">&nbsp;</td>
          </tr>
          <?php $query = "select * from sessions order by session_Id";
        $result = mysql_query($query) or die(mysql_error());
        while ($sessions = mysql_fetch_array($result)){
          //if($sessions['session_Status'])

 ?>
          <tr>
            <td>&nbsp;</td>
            <td><a href="set_session.php?session_Id=<?php echo $sessions['session_Id'];  ?>" title="Click to set default"><?php echo $sessions['session_Name']  ?></a></td>
            <td><?php echo $sessions['session_Status']; ?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <?php
        }
  ?>
        </table>
      </fieldset>
</form>
      </div>
  
</div>
</body>
</html>