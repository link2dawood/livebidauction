<div class="row">
			<div class="col-md-3">
				<?php $this->_tpl_include('sidebar-' . ((isset($this->_rootref['CURRENT_PAGE'])) ? $this->_rootref['CURRENT_PAGE'] : '') . '.tpl'); ?>
			</div>
	        <div class="col-md-9">
		
		<div class="row">
			
			<div class="col-md-12 well">
<?php if ($this->_rootref['ERROR'] != ('')) {  ?>
				<div class="alert alert-danger" role="alert"><b><?php echo (isset($this->_rootref['ERROR'])) ? $this->_rootref['ERROR'] : ''; ?></b></div>
<?php } ?>
				<form action="" method="post">
					<input type="hidden" name="csrftoken" value="<?php echo (isset($this->_rootref['_CSRFTOKEN'])) ? $this->_rootref['_CSRFTOKEN'] : ''; ?>">
					<div class="row">
						<div class="col-md-12"><?php echo (isset($this->_rootref['MESSAGE'])) ? $this->_rootref['MESSAGE'] : ''; ?></div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-12 text-center">
<?php if ($this->_rootref['TYPE'] == (1)) {  ?>
							<input type="hidden" name="id" value="<?php echo (isset($this->_rootref['ID'])) ? $this->_rootref['ID'] : ''; ?>">
							<button class="btn btn-primary" type="submit" name="action" value="Yes"><?php echo ((isset($this->_rootref['L_030'])) ? $this->_rootref['L_030'] : ((isset($MSG['030'])) ? $MSG['030'] : '{ L_030 }')); ?></button>
							<button class="btn btn-danger" type="submit" name="action" value="No"><?php echo ((isset($this->_rootref['L_029'])) ? $this->_rootref['L_029'] : ((isset($MSG['029'])) ? $MSG['029'] : '{ L_029 }')); ?></button>
<?php } else if ($this->_rootref['TYPE'] == (2)) {  ?>
							<input type="hidden" name="id" value="<?php echo (isset($this->_rootref['ID'])) ? $this->_rootref['ID'] : ''; ?>">
							<input type="hidden" name="user" value="<?php echo (isset($this->_rootref['USERID'])) ? $this->_rootref['USERID'] : ''; ?>">
							<button class="btn btn-primary" type="submit" name="action" value="Yes"><?php echo ((isset($this->_rootref['L_030'])) ? $this->_rootref['L_030'] : ((isset($MSG['030'])) ? $MSG['030'] : '{ L_030 }')); ?></button>
							<button class="btn btn-danger" type="submit" name="action" value="No"><?php echo ((isset($this->_rootref['L_029'])) ? $this->_rootref['L_029'] : ((isset($MSG['029'])) ? $MSG['029'] : '{ L_029 }')); ?></button>
<?php } ?>
						</div>
					</div>
				</form>
			</div>
			
		</div>
		    </div>
</div>