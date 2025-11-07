<?php $this->_tpl_include('user_menu_header.tpl'); ?>
	<div class="list-group">
<?php if ($this->_rootref['THISPAGE'] == ('account')) {  ?>
		
			<a class="list-group-item" href="yourfeedback.php"><?php echo ((isset($this->_rootref['L_208'])) ? $this->_rootref['L_208'] : ((isset($MSG['208'])) ? $MSG['208'] : '{ L_208 }')); ?></a>
			<a class="list-group-item" href="buysellnofeedback.php"><?php echo ((isset($this->_rootref['L_207'])) ? $this->_rootref['L_207'] : ((isset($MSG['207'])) ? $MSG['207'] : '{ L_207 }')); echo (isset($this->_rootref['FBTOLEAVE'])) ? $this->_rootref['FBTOLEAVE'] : ''; ?></a> 
			<a class="list-group-item" href="mail.php"><?php echo ((isset($this->_rootref['L_623'])) ? $this->_rootref['L_623'] : ((isset($MSG['623'])) ? $MSG['623'] : '{ L_623 }')); echo (isset($this->_rootref['NEWMESSAGES'])) ? $this->_rootref['NEWMESSAGES'] : ''; ?></a> 
			<a class="list-group-item" href="outstanding.php"><?php echo ((isset($this->_rootref['L_422'])) ? $this->_rootref['L_422'] : ((isset($MSG['422'])) ? $MSG['422'] : '{ L_422 }')); ?></a>
			<a class="list-group-item" href="invoices.php"><?php echo ((isset($this->_rootref['L_1057'])) ? $this->_rootref['L_1057'] : ((isset($MSG['1057'])) ? $MSG['1057'] : '{ L_1057 }')); ?></a>
		        <a href="#" class="list-group-item disabled"><?php echo ((isset($this->_rootref['L_244'])) ? $this->_rootref['L_244'] : ((isset($MSG['244'])) ? $MSG['244'] : '{ L_244 }')); ?></a>
		        <a class="list-group-item" href="selleremails.php"><?php echo ((isset($this->_rootref['L_25_0188'])) ? $this->_rootref['L_25_0188'] : ((isset($MSG['25_0188'])) ? $MSG['25_0188'] : '{ L_25_0188 }')); ?></a>
			<a class="list-group-item" href="edit_data.php"><?php echo ((isset($this->_rootref['L_621'])) ? $this->_rootref['L_621'] : ((isset($MSG['621'])) ? $MSG['621'] : '{ L_621 }')); ?></a>
		
<?php } else if ($this->_rootref['THISPAGE'] == ('selling')) {  if ($this->_rootref['B_CANSELL']) {  ?>
		
				<a class="list-group-item" href="yourauctions_p.php"><?php echo ((isset($this->_rootref['L_25_0115'])) ? $this->_rootref['L_25_0115'] : ((isset($MSG['25_0115'])) ? $MSG['25_0115'] : '{ L_25_0115 }')); ?></a>
				<a class="list-group-item" href="yourauctions.php"><?php echo ((isset($this->_rootref['L_203'])) ? $this->_rootref['L_203'] : ((isset($MSG['203'])) ? $MSG['203'] : '{ L_203 }')); ?></a></li>
				<a class="list-group-item" href="yourauctions_c.php"><?php echo ((isset($this->_rootref['L_204'])) ? $this->_rootref['L_204'] : ((isset($MSG['204'])) ? $MSG['204'] : '{ L_204 }')); ?></a>
				<a class="list-group-item" href="yourauctions_s.php"><?php echo ((isset($this->_rootref['L_2__0056'])) ? $this->_rootref['L_2__0056'] : ((isset($MSG['2__0056'])) ? $MSG['2__0056'] : '{ L_2__0056 }')); ?></a>
				<a class="list-group-item" href="yourauctions_sold.php"><?php echo ((isset($this->_rootref['L_25_0119'])) ? $this->_rootref['L_25_0119'] : ((isset($MSG['25_0119'])) ? $MSG['25_0119'] : '{ L_25_0119 }')); ?></a>
				<a class="list-group-item" href="selling.php"><?php echo ((isset($this->_rootref['L_453'])) ? $this->_rootref['L_453'] : ((isset($MSG['453'])) ? $MSG['453'] : '{ L_453 }')); ?></a>
		
	
	<?php } } else if ($this->_rootref['THISPAGE'] == ('summary')) {  ?>
		
			
		<div class="panel panel-success">
                   <div class="panel-heading"><?php echo ((isset($this->_rootref['L_593'])) ? $this->_rootref['L_593'] : ((isset($MSG['593'])) ? $MSG['593'] : '{ L_593 }')); ?></div>
                  <div class="panel-body">
			<?php echo (isset($this->_rootref['FBTOLEAVE'])) ? $this->_rootref['FBTOLEAVE'] : ''; ?>
			<?php echo (isset($this->_rootref['NEWMESSAGES'])) ? $this->_rootref['NEWMESSAGES'] : ''; ?>
			<?php echo (isset($this->_rootref['NO_REMINDERS'])) ? $this->_rootref['NO_REMINDERS'] : ''; ?>
                <?php echo (isset($this->_rootref['TO_PAY'])) ? $this->_rootref['TO_PAY'] : ''; ?>
                <?php echo (isset($this->_rootref['BENDING_SOON'])) ? $this->_rootref['BENDING_SOON'] : ''; ?>
                <?php echo (isset($this->_rootref['BOUTBID'])) ? $this->_rootref['BOUTBID'] : ''; ?>
                  </div>
                </div>
                <?php if ($this->_rootref['TEMP_SUSPEND'] == 0) {  ?>
					<div class="alert alert-danger" role="alert">
		<?php echo (isset($this->_rootref['SUSPEND_MESSAGE'])) ? $this->_rootref['SUSPEND_MESSAGE'] : ''; ?>
	</div>
			
			<?php } if ($this->_rootref['TMPMSG'] != ('')) {  ?>
	<div class="alert alert-danger" role="alert">
		<?php echo (isset($this->_rootref['TMPMSG'])) ? $this->_rootref['TMPMSG'] : ''; ?>
	</div>
                          <?php } if ($this->_rootref['B_CAN_SELL']) {  ?>
                             <div class="jumbotron text-center">
                                 <span style="font-size:5.0em;" class="glyphicon glyphicon-tag grid-margin-btm-lg" aria-hidden="true"></span>
	                        <a class="btn btn-primary btn-lg btn-block" href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>select_category.php?"><?php echo ((isset($this->_rootref['L_028'])) ? $this->_rootref['L_028'] : ((isset($MSG['028'])) ? $MSG['028'] : '{ L_028 }')); ?></a>
                             </div>
                          <?php } else { ?>
		            <form name="request" action="" method="post">
                              <div class="alert alert-info" role="alert">
			<input type="hidden" name="csrftoken" value="<?php echo (isset($this->_rootref['_CSRFTOKEN'])) ? $this->_rootref['_CSRFTOKEN'] : ''; ?>">
			<p><?php echo ((isset($this->_rootref['L_25_0140'])) ? $this->_rootref['L_25_0140'] : ((isset($MSG['25_0140'])) ? $MSG['25_0140'] : '{ L_25_0140 }')); ?></p>
			<p><input type="submit" name="requesttoadmin" value="<?php echo ((isset($this->_rootref['L_25_0141'])) ? $this->_rootref['L_25_0141'] : ((isset($MSG['25_0141'])) ? $MSG['25_0141'] : '{ L_25_0141 }')); ?>"  class="btn btn-primary"></p>
                              </div>
		            </form>
                          <?php } } else { ?>
		
			<a class="list-group-item" href="auction_watch.php"><?php echo ((isset($this->_rootref['L_471'])) ? $this->_rootref['L_471'] : ((isset($MSG['471'])) ? $MSG['471'] : '{ L_471 }')); ?></a>
			<a class="list-group-item" href="item_watch.php"><?php echo ((isset($this->_rootref['L_472'])) ? $this->_rootref['L_472'] : ((isset($MSG['472'])) ? $MSG['472'] : '{ L_472 }')); ?></a>
			<a class="list-group-item" href="yourbids.php"><?php echo ((isset($this->_rootref['L_620'])) ? $this->_rootref['L_620'] : ((isset($MSG['620'])) ? $MSG['620'] : '{ L_620 }')); ?></a>
			<a class="list-group-item" href="buying.php"><?php echo ((isset($this->_rootref['L_454'])) ? $this->_rootref['L_454'] : ((isset($MSG['454'])) ? $MSG['454'] : '{ L_454 }')); ?></a>
		
<?php } ?>
	</div>

<?php $this->_tpl_include('user_menu_footer.tpl'); ?>