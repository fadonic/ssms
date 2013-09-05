<?php
include "header.php";
include('nav_bar.php');
?>
<?php
   $school = trim($_POST['school']);
  // echo $school;
?>
      <form action="trans_add_subject.php" method="post" enctype="multipart/form-data">
      <fieldset>
        <legend><strong>Term Settings</strong></legend>
        <table width="700" align="center" style="border: 1px solid #d5dfec;">
          <tr>
            <td colspan="18" align="left" valign="middle" class="ruler" bgcolor="#dddddd"><h2>School term</h2>
              Click a term to set as default term</td>
          </tr>
          <tr>
            <td colspan="18" align="left" valign="middle" class="ruler" >&nbsp;</td>
          </tr>
          <tr>
            <td width="26"  align="left" valign="middle">&nbsp;</td>
            <td width="315"  align="left" valign="middle"><strong>Term</strong></td>
            <td width="218" ><strong>Status</strong></td>
            <td width="59"  align="left" valign="middle">&nbsp;</td>
            <td width="58"  align="left" valign="middle">&nbsp;</td>
          </tr>
          <?php $query = "select * from terms order by term_Id";
        $result = mysql_query($query) or die(mysql_error());
        while ($terms = mysql_fetch_array($result)){
 ?>
          <tr>
            <td>&nbsp;</td>
            <td><a href="set_term.php?term_Id=<?php echo $terms['term_Id'];  ?>" title="Click to set default"><?php echo $terms['term_Name']  ?></a></td>
            <td><?php echo $terms['term_Status']; ?></td>
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