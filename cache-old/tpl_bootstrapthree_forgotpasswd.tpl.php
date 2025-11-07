<div class="row">
      <div class="col-md-12">
           
<div class="col-md-6 col-md-offset-3 well">
  <legend><?php echo ((isset($this->_rootref['L_215'])) ? $this->_rootref['L_215'] : ((isset($MSG['215'])) ? $MSG['215'] : '{ L_215 }')); ?></legend>
<?php if ($this->_rootref['B_FIRST']) {  if ($this->_rootref['ERROR'] != ('')) {  ?>
    <div class="alert alert-danger">
        <?php echo (isset($this->_rootref['ERROR'])) ? $this->_rootref['ERROR'] : ''; ?>
    </div>
	<?php } ?>
	<form name="user_login" action="" method="post">
           <input type="hidden" name="csrftoken" value="<?php echo (isset($this->_rootref['_CSRFTOKEN'])) ? $this->_rootref['_CSRFTOKEN'] : ''; ?>">
	    <div class="form-group col-md-8 col-md-offset-2">
              <div class="alert alert-info" role="alert"><?php echo ((isset($this->_rootref['L_2__0039'])) ? $this->_rootref['L_2__0039'] : ((isset($MSG['2__0039'])) ? $MSG['2__0039'] : '{ L_2__0039 }')); ?></div>
            </div>
            <div class="form-group col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
		<div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
			<input type="text" NAME="TPL_username" class="form-control" placeholder="<?php echo ((isset($this->_rootref['L_003'])) ? $this->_rootref['L_003'] : ((isset($MSG['003'])) ? $MSG['003'] : '{ L_003 }')); ?>" value="<?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>">
                </div><br>
		<div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">@</span>
			<input type="text" NAME="TPL_email" class="form-control" placeholder="<?php echo ((isset($this->_rootref['L_006'])) ? $this->_rootref['L_006'] : ((isset($MSG['006'])) ? $MSG['006'] : '{ L_006 }')); ?>" value="<?php echo (isset($this->_rootref['EMAIL'])) ? $this->_rootref['EMAIL'] : ''; ?>">
                </div>
	    </div>
              <div class="clearfix"></div>
                
			<input type="submit" name="" value="<?php echo ((isset($this->_rootref['L_5431'])) ? $this->_rootref['L_5431'] : ((isset($MSG['5431'])) ? $MSG['5431'] : '{ L_5431 }')); ?>" class="btn btn-primary center-block">
		
	<input type="hidden" name="action" value="ok">
	</form>
<?php } else { ?>
	<?php echo ((isset($this->_rootref['L_217'])) ? $this->_rootref['L_217'] : ((isset($MSG['217'])) ? $MSG['217'] : '{ L_217 }')); ?>
<?php } ?>
</div>
      </div>
</div>