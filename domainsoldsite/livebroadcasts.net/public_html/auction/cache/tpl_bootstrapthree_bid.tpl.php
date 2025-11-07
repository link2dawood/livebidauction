<?php if ($this->_rootref['TQTY'] > (1)) {  ?>
<script type="text/javascript">
$(document).ready(function(){
	$("#qty").keydown(function(){
		$("#bidcost").text(($("#qty").val())*($("#bid").val()) + ' <?php echo (isset($this->_rootref['CURRENCY'])) ? $this->_rootref['CURRENCY'] : ''; ?>');
	});
	$("#bid").keydown(function(){
		$("#bidcost").text(($("#qty").val())*($("#bid").val()) + ' <?php echo (isset($this->_rootref['CURRENCY'])) ? $this->_rootref['CURRENCY'] : ''; ?>');
	});
});
</script>
<?php } ?>
<div class="row">
     <div class="col-md-12">
	<div class="col-md-8 col-md-offset-2 well">
		<legend>
			<?php if ($this->_rootref['PAGE'] == (1)) {  echo ((isset($this->_rootref['L_152'])) ? $this->_rootref['L_152'] : ((isset($MSG['152'])) ? $MSG['152'] : '{ L_152 }')); } else { echo ((isset($this->_rootref['L_271'])) ? $this->_rootref['L_271'] : ((isset($MSG['271'])) ? $MSG['271'] : '{ L_271 }')); } ?>
		</legend>
              <div class="row">
                <div class="col-md-6">
		<nav>
                  <ul class="pager">
			<li class="previous"><a href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>item.php?id=<?php echo (isset($this->_rootref['ID'])) ? $this->_rootref['ID'] : ''; ?>"><span aria-hidden="true">&larr;</span><?php echo ((isset($this->_rootref['L_138'])) ? $this->_rootref['L_138'] : ((isset($MSG['138'])) ? $MSG['138'] : '{ L_138 }')); ?></a></li>         
                        <li><?php echo (isset($this->_rootref['BID_HISTORY'])) ? $this->_rootref['BID_HISTORY'] : ''; ?></li>
                  </ul>
		</nav>
                </div>
              </div>
		
<?php if ($this->_rootref['PAGE'] == (1)) {  if ($this->_rootref['ERROR'] != ('')) {  ?>
			<div class="alert alert-danger" role="alert">
				<?php echo (isset($this->_rootref['ERROR'])) ? $this->_rootref['ERROR'] : ''; ?>
			</div>
	<?php } ?>
			<form class="form-horizontal" name="bid" action="<?php echo (isset($this->_rootref['ASSLURL'])) ? $this->_rootref['ASSLURL'] : ''; ?>bid.php" method="post">
            <input type="hidden" name="csrftoken" value="<?php echo (isset($this->_rootref['_CSRFTOKEN'])) ? $this->_rootref['_CSRFTOKEN'] : ''; ?>">
                                <div class="col-md-12 text-center"><?php echo (isset($this->_rootref['IMAGE'])) ? $this->_rootref['IMAGE'] : ''; ?></div>
                                <div class="col-md-8 col-md-offset-2">
			
				<div class="form-group">
					
					<label class="col-sm-5 control-label"><?php echo ((isset($this->_rootref['L_154'])) ? $this->_rootref['L_154'] : ((isset($MSG['154'])) ? $MSG['154'] : '{ L_154 }')); ?></label>
					<div class="col-sm-7"><p class="form-control-static"><?php echo (isset($this->_rootref['TITLE'])) ? $this->_rootref['TITLE'] : ''; ?></p></div>
				</div>
				<div class="form-group">
					<label class="col-sm-5 control-label"><?php echo ((isset($this->_rootref['L_116'])) ? $this->_rootref['L_116'] : ((isset($MSG['116'])) ? $MSG['116'] : '{ L_116 }')); ?></label>
					<div class="col-sm-7"><p class="form-control-static"><?php echo (isset($this->_rootref['CURRENT_BID'])) ? $this->_rootref['CURRENT_BID'] : ''; ?></p></div>
				</div>
				<div class="form-group">
					<label class="col-sm-5 control-label"><?php echo ((isset($this->_rootref['L_156'])) ? $this->_rootref['L_156'] : ((isset($MSG['156'])) ? $MSG['156'] : '{ L_156 }')); ?></label>
                                        <div class="col-sm-7">
					<input type="text" class="form-control" name="bid" id="bid" value="<?php echo (isset($this->_rootref['BID'])) ? $this->_rootref['BID'] : ''; ?>">
						<?php if ($this->_rootref['ATYPE'] == (1)) {  ?>(<?php echo ((isset($this->_rootref['L_283'])) ? $this->_rootref['L_283'] : ((isset($MSG['283'])) ? $MSG['283'] : '{ L_283 }')); ?>: <?php echo (isset($this->_rootref['NEXT_BID'])) ? $this->_rootref['NEXT_BID'] : ''; ?>)<?php } ?>
                                        </div>
				</div>
	<?php if ($this->_rootref['TQTY'] > (1)) {  ?>
				<div class="form-group">
					<label class="col-sm-5 control-label"><?php echo ((isset($this->_rootref['L_284'])) ? $this->_rootref['L_284'] : ((isset($MSG['284'])) ? $MSG['284'] : '{ L_284 }')); ?>:</label>
                                        <div class="col-sm-7">
					<input type="number" class="form-control" name="qty" id="qty" value="<?php echo (isset($this->_rootref['QTY'])) ? $this->_rootref['QTY'] : ''; ?>" min="1" max="<?php echo (isset($this->_rootref['TQTY'])) ? $this->_rootref['TQTY'] : ''; ?>" step="1">
                                        </div>
				</div>
	<?php } if ($this->_rootref['B_USERAUTH']) {  ?>
				<div class="form-group">
					<label class="col-sm-5 control-label"><?php echo ((isset($this->_rootref['L_003'])) ? $this->_rootref['L_003'] : ((isset($MSG['003'])) ? $MSG['003'] : '{ L_003 }')); ?></label>
					<div class="col-sm-7"><p class="form-control-static"><?php echo (isset($this->_rootref['YOURUSERNAME'])) ? $this->_rootref['YOURUSERNAME'] : ''; ?></p></div>
				</div>
				<div class="form-group">
					<label class="col-sm-5 control-label"><?php echo ((isset($this->_rootref['L_004'])) ? $this->_rootref['L_004'] : ((isset($MSG['004'])) ? $MSG['004'] : '{ L_004 }')); ?></label>
					<div class="col-sm-7"><input type="password" name="password" class="form-control"  value="">
					</div>
				</div>
	<?php } ?>
			
			<div class="text-center">
				<input type="hidden" name="id" value="<?php echo (isset($this->_rootref['ID'])) ? $this->_rootref['ID'] : ''; ?>">
				<div class="alert alert-success" role="alert"><?php echo (isset($this->_rootref['AGREEMENT'])) ? $this->_rootref['AGREEMENT'] : ''; ?></div>
				<input type="hidden" name="action" value="bid">
				<input type="submit" name="Input" value="<?php echo ((isset($this->_rootref['L_5199'])) ? $this->_rootref['L_5199'] : ((isset($MSG['5199'])) ? $MSG['5199'] : '{ L_5199 }')); ?>" class="btn btn-primary">
			</div>
			</form></div>
<?php } else { ?>
			
			<div class="alert alert-success" role="alert"><?php echo ((isset($this->_rootref['L_699'])) ? $this->_rootref['L_699'] : ((isset($MSG['699'])) ? $MSG['699'] : '{ L_699 }')); ?> <?php echo (isset($this->_rootref['BID'])) ? $this->_rootref['BID'] : ''; ?> <?php echo ((isset($this->_rootref['L_700'])) ? $this->_rootref['L_700'] : ((isset($MSG['700'])) ? $MSG['700'] : '{ L_700 }')); ?><br>
                                   <?php echo ((isset($this->_rootref['L_272'])) ? $this->_rootref['L_272'] : ((isset($MSG['272'])) ? $MSG['272'] : '{ L_272 }')); ?>&nbsp;
			<a href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>item.php?id=<?php echo (isset($this->_rootref['ID'])) ? $this->_rootref['ID'] : ''; ?>"><?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>item.php?id=<?php echo (isset($this->_rootref['ID'])) ? $this->_rootref['ID'] : ''; ?></a>
                        </div>
<?php } ?>
		
	</div>
    </div>
</div>