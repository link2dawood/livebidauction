<div class="row">
   <div class="col-md-12">
	<legend><?php echo ((isset($this->_rootref['L_199'])) ? $this->_rootref['L_199'] : ((isset($MSG['199'])) ? $MSG['199'] : '{ L_199 }')); ?></legend>
	
<?php if ($this->_rootref['ERROR'] != ('')) {  ?>
		<div class="alert alert-danger" role="alert">
			<?php echo (isset($this->_rootref['ERROR'])) ? $this->_rootref['ERROR'] : ''; ?>
		</div>
<?php } else { if ($this->_rootref['NUM_AUCTIONS'] > 0) {  $this->_tpl_include('browse.tpl'); } else { ?>
		<div class="alert alert-danger" role="alert">
			<?php echo ((isset($this->_rootref['L_198'])) ? $this->_rootref['L_198'] : ((isset($MSG['198'])) ? $MSG['198'] : '{ L_198 }')); ?>
		</div>
	<?php } } ?>
	
   </div>
</div>