<?php
if (isset($_COOKIE['vaccine'])) {
   $vaccines = unserialize($_COOKIE['vaccine']);
   foreach ($vaccines as $vaccine){ ?>

      <div class="control-group">
      <label class="control-label">
      <?php echo '&nbsp'.'<a href="javascript:void(0);"  rel="tooltip"    
          title="Delete" onclick="delete_vaccination('.$vaccine->vaccination_record_id.');">
          <i class="icon-minus-sign"></i></a>'.'';?>
          <?php echo $vaccine->vaccination_record_brand;?>

      </label>
      </div>

<?php }} ?>