<script type="text/javascript">
			$(document).ready(function() {
				$('#userfilter').change(function(){
					$('#filter').submit();
				});
			});
		</script>
		<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
		<div class="row">
			<div class="col-md-3">
				<?php $this->_tpl_include('sidebar-' . ((isset($this->_rootref['CURRENT_PAGE'])) ? $this->_rootref['CURRENT_PAGE'] : '') . '.tpl'); ?>
			</div>
			<div class="col-md-9">
				<ol class="breadcrumb"><i class="fa fa-cogs"></i>  <li><?php echo ((isset($this->_rootref['L_25_0010'])) ? $this->_rootref['L_25_0010'] : ((isset($MSG['25_0010'])) ? $MSG['25_0010'] : '{ L_25_0010 }')); ?></li><li><?php echo ((isset($this->_rootref['L_045'])) ? $this->_rootref['L_045'] : ((isset($MSG['045'])) ? $MSG['045'] : '{ L_045 }')); ?></li></ol>
				
				<div class="alert alert-info" role="alert"><i class="fa fa-info-circle"></i> <?php echo (isset($this->_rootref['TOTALUSERS'])) ? $this->_rootref['TOTALUSERS'] : ''; ?> <?php echo ((isset($this->_rootref['L_301'])) ? $this->_rootref['L_301'] : ((isset($MSG['301'])) ? $MSG['301'] : '{ L_301 }')); ?></div>
				<?php if ($this->_rootref['ERRORMESG'] != ("")) {  ?>
				<div class="alert alert-danger" role="alert"><i class="fa fa-info-circle"></i> <?php echo (isset($this->_rootref['ERRORMESG'])) ? $this->_rootref['ERRORMESG'] : ''; ?></div>
				<?php } ?>
				
				<div class="table-responsive">
				<table class="table table-bordered table-hover table-striped">
				    <tr>
				        <td colspan="8"><?php echo ((isset($this->_rootref['L_5022'])) ? $this->_rootref['L_5022'] : ((isset($MSG['5022'])) ? $MSG['5022'] : '{ L_5022 }')); ?></td>
				    </tr>
					<tr>
						<td class="bg-success" colspan="4">
							<form name="search" action="" method="post">
							<input type="hidden" name="csrftoken" value="<?php echo (isset($this->_rootref['_CSRFTOKEN'])) ? $this->_rootref['_CSRFTOKEN'] : ''; ?>">
								
								<div class="input-group">
                                    <input type="text" class="form-control" name="keyword" size="25" placeholder="<?php echo ((isset($this->_rootref['L_5024'])) ? $this->_rootref['L_5024'] : ((isset($MSG['5024'])) ? $MSG['5024'] : '{ L_5024 }')); ?>">
                                    <span class="input-group-btn">
                                    <input type="submit" class="btn btn-primary" name="submit" value="<?php echo ((isset($this->_rootref['L_5023'])) ? $this->_rootref['L_5023'] : ((isset($MSG['5023'])) ? $MSG['5023'] : '{ L_5023 }')); ?>">
                                    </span>
                                </div><!-- /input-group -->
							</form>
						</td>
						<td class="bg-success" align="right" colspan="4">
							<form name="filter" id="filter" action="" method="get">
							    <div class="input-group">
								<select class="form-control" name="usersfilter" id="userfilter">
									<option value="all"><?php echo ((isset($this->_rootref['L_5296'])) ? $this->_rootref['L_5296'] : ((isset($MSG['5296'])) ? $MSG['5296'] : '{ L_5296 }')); ?></option>
									<option value="active" <?php if ($this->_rootref['USERFILTER'] == ('active')) {  ?>selected<?php } ?>><?php echo ((isset($this->_rootref['L_5291'])) ? $this->_rootref['L_5291'] : ((isset($MSG['5291'])) ? $MSG['5291'] : '{ L_5291 }')); ?></option>
									<option value="admin" <?php if ($this->_rootref['USERFILTER'] == ('admin')) {  ?>selected<?php } ?>><?php echo ((isset($this->_rootref['L_5294'])) ? $this->_rootref['L_5294'] : ((isset($MSG['5294'])) ? $MSG['5294'] : '{ L_5294 }')); ?></option>
									<option value="temp" <?php if ($this->_rootref['USERFILTER'] == ('temp')) {  ?>selected<?php } ?>><?php echo ((isset($this->_rootref['L_5294a'])) ? $this->_rootref['L_5294a'] : ((isset($MSG['5294a'])) ? $MSG['5294a'] : '{ L_5294a }')); ?></option>
									<option value="fee" <?php if ($this->_rootref['USERFILTER'] == ('fee')) {  ?>selected<?php } ?>><?php echo ((isset($this->_rootref['L_5293'])) ? $this->_rootref['L_5293'] : ((isset($MSG['5293'])) ? $MSG['5293'] : '{ L_5293 }')); ?></option>
									<option value="confirmed" <?php if ($this->_rootref['USERFILTER'] == ('confirmed')) {  ?>selected<?php } ?>><?php echo ((isset($this->_rootref['L_5292'])) ? $this->_rootref['L_5292'] : ((isset($MSG['5292'])) ? $MSG['5292'] : '{ L_5292 }')); ?></option>
									<option value="admin_approve" <?php if ($this->_rootref['USERFILTER'] == ('admin_approve')) {  ?>selected<?php } ?>><?php echo ((isset($this->_rootref['L_25_0136'])) ? $this->_rootref['L_25_0136'] : ((isset($MSG['25_0136'])) ? $MSG['25_0136'] : '{ L_25_0136 }')); ?></option>
								</select>
								<span class="input-group-btn">
								<input type="submit" class="btn btn-primary" value="<?php echo ((isset($this->_rootref['L_5029'])) ? $this->_rootref['L_5029'] : ((isset($MSG['5029'])) ? $MSG['5029'] : '{ L_5029 }')); ?>">
								</span>
								</div>
							</form>
						</td>
					</tr>
					<tr>
						<th width="15%"><b><?php echo ((isset($this->_rootref['L_293'])) ? $this->_rootref['L_293'] : ((isset($MSG['293'])) ? $MSG['293'] : '{ L_293 }')); ?></b></th>
						<th width="15%"><b><?php echo ((isset($this->_rootref['L_294'])) ? $this->_rootref['L_294'] : ((isset($MSG['294'])) ? $MSG['294'] : '{ L_294 }')); ?></b></th>
						<th width="15%"><b><?php echo ((isset($this->_rootref['L_295'])) ? $this->_rootref['L_295'] : ((isset($MSG['295'])) ? $MSG['295'] : '{ L_295 }')); ?></b></th>
						<th width="15%"><b><?php echo ((isset($this->_rootref['L_296'])) ? $this->_rootref['L_296'] : ((isset($MSG['296'])) ? $MSG['296'] : '{ L_296 }')); ?></b></th>
						<th width="8%"><b><?php echo ((isset($this->_rootref['L_25_0079'])) ? $this->_rootref['L_25_0079'] : ((isset($MSG['25_0079'])) ? $MSG['25_0079'] : '{ L_25_0079 }')); ?></b></th>
						<th width="8%"><b><?php echo ((isset($this->_rootref['L_763'])) ? $this->_rootref['L_763'] : ((isset($MSG['763'])) ? $MSG['763'] : '{ L_763 }')); ?></b></th>
						<th width="8%"><b>Pending Payments</b></th>
						<th width="7%"><b><?php echo ((isset($this->_rootref['L_560'])) ? $this->_rootref['L_560'] : ((isset($MSG['560'])) ? $MSG['560'] : '{ L_560 }')); ?></b></th>
						<th width="17%"><b><?php echo ((isset($this->_rootref['L_297'])) ? $this->_rootref['L_297'] : ((isset($MSG['297'])) ? $MSG['297'] : '{ L_297 }')); ?></b></th>
					</tr>
<?php $_users_count = (isset($this->_tpldata['users'])) ? sizeof($this->_tpldata['users']) : 0;if ($_users_count) {for ($_users_i = 0; $_users_i < $_users_count; ++$_users_i){$_users_val = &$this->_tpldata['users'][$_users_i]; ?>
					<tr <?php echo $_users_val['BG']; ?>>
						<td>
							<b><?php echo $_users_val['NICK']; ?></b><br>
							<div class="btn-group" role="group" aria-label="...">
                                <a class="btn btn-default btn-xs" href="listauctions.php?uid=<?php echo $_users_val['ID']; ?>&offset=<?php echo (isset($this->_rootref['PAGE'])) ? $this->_rootref['PAGE'] : ''; ?>" data-toggle="tooltip" data-placement="right" title="<?php echo ((isset($this->_rootref['L_5094'])) ? $this->_rootref['L_5094'] : ((isset($MSG['5094'])) ? $MSG['5094'] : '{ L_5094 }')); ?>"><i class="fa fa-gavel"></i></a>
                                <a class="btn btn-default btn-xs" href="userfeedback.php?id=<?php echo $_users_val['ID']; ?>&offset=<?php echo (isset($this->_rootref['PAGE'])) ? $this->_rootref['PAGE'] : ''; ?>" data-toggle="tooltip" data-placement="right" title="<?php echo ((isset($this->_rootref['L_503'])) ? $this->_rootref['L_503'] : ((isset($MSG['503'])) ? $MSG['503'] : '{ L_503 }')); ?>"><i class="fa fa-comment"></i></a>
							    <a class="btn btn-default btn-xs" href="viewuserips.php?id=<?php echo $_users_val['ID']; ?>&offset=<?php echo (isset($this->_rootref['PAGE'])) ? $this->_rootref['PAGE'] : ''; ?>" data-toggle="tooltip" data-placement="right" title="<?php echo ((isset($this->_rootref['L_2_0004'])) ? $this->_rootref['L_2_0004'] : ((isset($MSG['2_0004'])) ? $MSG['2_0004'] : '{ L_2_0004 }')); ?>">&nbsp;<i class="fa fa-map-marker"></i>&nbsp;</a>
                            </div>
						</td>
						<td><?php echo $_users_val['NAME']; ?></td>
						<td><?php echo $_users_val['COUNTRY']; ?></td>
						<td><a href="mailto:<?php echo $_users_val['EMAIL']; ?>"><?php echo $_users_val['EMAIL']; ?></a></td>
						<td align="center"><?php echo $_users_val['NEWSLETTER']; ?></td>
						<td align="center">
							<?php echo $_users_val['BALANCE']; ?>
	<?php if ($_users_val['BALANCE_CLEAN'] < 0) {  ?>
							<p><a href="listusers.php?payreminder=1&id=<?php echo $_users_val['ID']; ?>&offset=<?php echo (isset($this->_rootref['PAGE'])) ? $this->_rootref['PAGE'] : ''; ?>"><small><?php echo ((isset($this->_rootref['L_764'])) ? $this->_rootref['L_764'] : ((isset($MSG['764'])) ? $MSG['764'] : '{ L_764 }')); ?></small></a></p>
	<?php } ?>
						</td>
						<td align="center">
							<?php echo $_users_val['TOTALAUCTIONS']; ?>
	<?php if ($_users_val['TOTALAUCTIONS'] > 0) {  if ($_users_val['TEMP_SUSPENDED'] == 0) {  ?>
							<a class="btn btn-warning btn-xs" href="excludeuser.php?id=<?php echo $_users_val['ID']; ?>&offset=<?php echo (isset($this->_rootref['PAGE'])) ? $this->_rootref['PAGE'] : ''; ?>&temp_susp=0" title="<?php echo ((isset($this->_rootref['L_299'])) ? $this->_rootref['L_299'] : ((isset($MSG['299'])) ? $MSG['299'] : '{ L_299 }')); ?>"><i class="fa fa-lock"></i></a>
	<?php } else { ?>						
							<a class="btn btn-success btn-xs" href="excludeuser.php?id=<?php echo $_users_val['ID']; ?>&offset=<?php echo (isset($this->_rootref['PAGE'])) ? $this->_rootref['PAGE'] : ''; ?>&temp_susp=1" title="<?php echo ((isset($this->_rootref['L_305a'])) ? $this->_rootref['L_305a'] : ((isset($MSG['305a'])) ? $MSG['305a'] : '{ L_305a }')); ?>"><i class="fa fa-unlock"></i></a>
	<?php } } ?>
						</td>
						<td>
	<?php if ($_users_val['SUSPENDED'] == 0) {  ?>
							<b><span style="color:green;"><?php echo ((isset($this->_rootref['L_5291'])) ? $this->_rootref['L_5291'] : ((isset($MSG['5291'])) ? $MSG['5291'] : '{ L_5291 }')); ?></span></b>
	<?php } else if ($_users_val['SUSPENDED'] == (1)) {  ?>
							<b><span style="color:violet;"><?php echo ((isset($this->_rootref['L_5294'])) ? $this->_rootref['L_5294'] : ((isset($MSG['5294'])) ? $MSG['5294'] : '{ L_5294 }')); ?></span></b>
	<?php } else if ($_users_val['SUSPENDED'] == (7)) {  ?>
							<b><span style="color:red;"><?php echo ((isset($this->_rootref['L_5297'])) ? $this->_rootref['L_5297'] : ((isset($MSG['5297'])) ? $MSG['5297'] : '{ L_5297 }')); ?></span></b>
	<?php } else if ($_users_val['SUSPENDED'] == (8)) {  ?>
							<b><span style="color:orange;"><?php echo ((isset($this->_rootref['L_5292'])) ? $this->_rootref['L_5292'] : ((isset($MSG['5292'])) ? $MSG['5292'] : '{ L_5292 }')); ?></span></b><br>
							<a href="listusers.php?resend=1&id=<?php echo $_users_val['ID']; ?>&offset=<?php echo (isset($this->_rootref['PAGE'])) ? $this->_rootref['PAGE'] : ''; ?>"><small><?php echo ((isset($this->_rootref['L_25_0074'])) ? $this->_rootref['L_25_0074'] : ((isset($MSG['25_0074'])) ? $MSG['25_0074'] : '{ L_25_0074 }')); ?></small></a>
	<?php } else if ($_users_val['SUSPENDED'] == (9)) {  ?>
							<b><span style="color:red;"><?php echo ((isset($this->_rootref['L_5293'])) ? $this->_rootref['L_5293'] : ((isset($MSG['5293'])) ? $MSG['5293'] : '{ L_5293 }')); ?></span></b>
	<?php } else if ($_users_val['SUSPENDED'] == (10)) {  ?>
							<b><small style="color:orange;"><a href="excludeuser.php?id=<?php echo $_users_val['ID']; ?>&offset=<?php echo (isset($this->_rootref['PAGE'])) ? $this->_rootref['PAGE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_25_0136'])) ? $this->_rootref['L_25_0136'] : ((isset($MSG['25_0136'])) ? $MSG['25_0136'] : '{ L_25_0136 }')); ?></a></small></b>
	<?php } ?>
						</td>
						<td>
						    <div class="btn-group" role="group" aria-label="...">
                                <a class="btn btn-primary btn-xs" href="edituser.php?userid=<?php echo $_users_val['ID']; ?>&offset=<?php echo (isset($this->_rootref['PAGE'])) ? $this->_rootref['PAGE'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_298'])) ? $this->_rootref['L_298'] : ((isset($MSG['298'])) ? $MSG['298'] : '{ L_298 }')); ?>"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-danger btn-xs" href="deleteuser.php?id=<?php echo $_users_val['ID']; ?>&offset=<?php echo (isset($this->_rootref['PAGE'])) ? $this->_rootref['PAGE'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_008'])) ? $this->_rootref['L_008'] : ((isset($MSG['008'])) ? $MSG['008'] : '{ L_008 }')); ?>"><i class="fa fa-trash"></i> </a>
                                <a class="btn btn-info btn-xs" href="outstandings.php?id=<?php echo $_users_val['ID']; ?>&offset=<?php echo (isset($this->_rootref['PAGE'])) ? $this->_rootref['PAGE'] : ''; ?>" title="View Outstandings"><i class="fa fa-eye"></i> </a>
                                
	<?php if ($_users_val['SUSPENDED'] == 0) {  ?>
								<a class="btn btn-warning btn-xs" href="excludeuser.php?id=<?php echo $_users_val['ID']; ?>&offset=<?php echo (isset($this->_rootref['PAGE'])) ? $this->_rootref['PAGE'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_305'])) ? $this->_rootref['L_305'] : ((isset($MSG['305'])) ? $MSG['305'] : '{ L_305 }')); ?>"><i class="fa fa-lock"></i></a>
	<?php } else if ($_users_val['SUSPENDED'] == (8)) {  ?>
								<a class="btn btn-success btn-xs" href="excludeuser.php?id=<?php echo $_users_val['ID']; ?>&offset=<?php echo (isset($this->_rootref['PAGE'])) ? $this->_rootref['PAGE'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_515'])) ? $this->_rootref['L_515'] : ((isset($MSG['515'])) ? $MSG['515'] : '{ L_515 }')); ?>"><i class="fa fa-user-plus"></i></a>
	<?php } else { ?>
								<a class="btn btn-success btn-xs" href="excludeuser.php?id=<?php echo $_users_val['ID']; ?>&offset=<?php echo (isset($this->_rootref['PAGE'])) ? $this->_rootref['PAGE'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_299'])) ? $this->_rootref['L_299'] : ((isset($MSG['299'])) ? $MSG['299'] : '{ L_299 }')); ?>"><i class="fa fa-unlock"></i></a>
	<?php } ?>
							
                            </div>
						    <br>
						   
						</td>
					</tr>
<?php }} ?>
				</table>
				</div>
				
				<table width="98%" cellpadding="0" cellspacing="0" class="blank">
					<tr>
						<td align="center">
							<?php echo ((isset($this->_rootref['L_5117'])) ? $this->_rootref['L_5117'] : ((isset($MSG['5117'])) ? $MSG['5117'] : '{ L_5117 }')); ?>&nbsp;<?php echo (isset($this->_rootref['PAGE'])) ? $this->_rootref['PAGE'] : ''; ?>&nbsp;<?php echo ((isset($this->_rootref['L_5118'])) ? $this->_rootref['L_5118'] : ((isset($MSG['5118'])) ? $MSG['5118'] : '{ L_5118 }')); ?>&nbsp;<?php echo (isset($this->_rootref['PAGES'])) ? $this->_rootref['PAGES'] : ''; ?>
							<br>
							<?php echo (isset($this->_rootref['PREV'])) ? $this->_rootref['PREV'] : ''; ?>
<?php $_pages_count = (isset($this->_tpldata['pages'])) ? sizeof($this->_tpldata['pages']) : 0;if ($_pages_count) {for ($_pages_i = 0; $_pages_i < $_pages_count; ++$_pages_i){$_pages_val = &$this->_tpldata['pages'][$_pages_i]; ?>
							<?php echo $_pages_val['PAGE']; ?>&nbsp;&nbsp;
<?php }} ?>
							<?php echo (isset($this->_rootref['NEXT'])) ? $this->_rootref['NEXT'] : ''; ?>
						</td>
					</tr>
				</table>
			</div>
		</div>