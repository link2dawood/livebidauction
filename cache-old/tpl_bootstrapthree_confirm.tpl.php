<div class="row">
	<div class="col-md-12">
             <div class="col-md-8 col-md-offset-2 well">
		<legend><?php echo ((isset($this->_rootref['L_248'])) ? $this->_rootref['L_248'] : ((isset($MSG['248'])) ? $MSG['248'] : '{ L_248 }')); ?></legend>

<?php if ($this->_rootref['PAGE'] == (error)) {  ?>
			<div class="alert alert-danger" role="alert">
            	<?php echo (isset($this->_rootref['ERROR'])) ? $this->_rootref['ERROR'] : ''; ?>
            </div>
<?php } else if ($this->_rootref['PAGE'] == (confirm)) {  ?>
			<form name="registration" action="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>confirm.php" method="post">
				<p><?php echo ((isset($this->_rootref['L_267'])) ? $this->_rootref['L_267'] : ((isset($MSG['267'])) ? $MSG['267'] : '{ L_267 }')); ?></p>
				<input type="hidden" name="id" value="<?php echo (isset($this->_rootref['USERID'])) ? $this->_rootref['USERID'] : ''; ?>">
				<input type="hidden" name="hash" value="<?php echo (isset($this->_rootref['HASH'])) ? $this->_rootref['HASH'] : ''; ?>">
                <input type="hidden" name="csrftoken" value="<?php echo (isset($this->_rootref['_CSRFTOKEN'])) ? $this->_rootref['_CSRFTOKEN'] : ''; ?>">
				<input type="submit" name="action" value="<?php echo ((isset($this->_rootref['L_249'])) ? $this->_rootref['L_249'] : ((isset($MSG['249'])) ? $MSG['249'] : '{ L_249 }')); ?>" class="btn btn-primary">
				<input type="submit" name="action" value="<?php echo ((isset($this->_rootref['L_250'])) ? $this->_rootref['L_250'] : ((isset($MSG['250'])) ? $MSG['250'] : '{ L_250 }')); ?>" class="btn btn-danger">
			</form>
<?php } else if ($this->_rootref['PAGE'] == (confirmed)) {  ?>
			<?php echo ((isset($this->_rootref['L_330'])) ? $this->_rootref['L_330'] : ((isset($MSG['330'])) ? $MSG['330'] : '{ L_330 }')); ?>
<?php } else if ($this->_rootref['PAGE'] == (refused)) {  ?>
			<?php echo ((isset($this->_rootref['L_331'])) ? $this->_rootref['L_331'] : ((isset($MSG['331'])) ? $MSG['331'] : '{ L_331 }')); ?>
<?php } ?>
		</div>
	</div>
</div>