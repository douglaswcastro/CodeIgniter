
<div  class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
	
  <?php
  if($msg != ""){ ?>
    
  <div class="alert alert-success col-md-12 alert-dismissible fade show" role="alert">
  <?= $msg; ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
  </div>
<?php } ?>

