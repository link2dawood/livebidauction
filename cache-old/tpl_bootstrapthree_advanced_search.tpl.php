<div class="row">
    <div class="col-md-8 col-md-offset-2">
	
<?php if ($this->_rootref['ERROR'] != ('')) {  ?>
	<div class="alert alert-danger" role="alert">
		<?php echo (isset($this->_rootref['ERROR'])) ? $this->_rootref['ERROR'] : ''; ?>
	</div>
<?php } ?>
	<div class="well">
             <legend>
		<?php echo ((isset($this->_rootref['L_464'])) ? $this->_rootref['L_464'] : ((isset($MSG['464'])) ? $MSG['464'] : '{ L_464 }')); ?>
	</legend>
		<form class="form-horizontal" name="adsearch" method="post" action="">
        	<input type="hidden" name="csrftoken" value="<?php echo (isset($this->_rootref['_CSRFTOKEN'])) ? $this->_rootref['_CSRFTOKEN'] : ''; ?>">
			
				<div class="form-group">
					<label class="col-sm-4 control-label"><?php echo ((isset($this->_rootref['L_1000'])) ? $this->_rootref['L_1000'] : ((isset($MSG['1000'])) ? $MSG['1000'] : '{ L_1000 }')); ?></label>
					<div class="col-sm-8">
						<input type="search" class="form-control" name="title">
					 </div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label"><?php echo ((isset($this->_rootref['L_1001'])) ? $this->_rootref['L_1001'] : ((isset($MSG['1001'])) ? $MSG['1001'] : '{ L_1001 }')); ?></label>
					<div class="col-sm-8">
                                            <div class="checkbox">
						<label><input name="desc" type="checkbox" value="y"></label>
                                            </div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label"><?php echo ((isset($this->_rootref['L_25_0214'])) ? $this->_rootref['L_25_0214'] : ((isset($MSG['25_0214'])) ? $MSG['25_0214'] : '{ L_25_0214 }')); ?></label>
					<div class="col-sm-8">
                                             <div class="checkbox">
						<label><input name="closed" type="checkbox" id="closed" value="y"></label>
                                             </div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label"><?php echo ((isset($this->_rootref['L_1002'])) ? $this->_rootref['L_1002'] : ((isset($MSG['1002'])) ? $MSG['1002'] : '{ L_1002 }')); ?></label>
					<div class="col-sm-8"><?php echo (isset($this->_rootref['CATEGORY_LIST'])) ? $this->_rootref['CATEGORY_LIST'] : ''; ?></div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label"><?php echo ((isset($this->_rootref['L_1003'])) ? $this->_rootref['L_1003'] : ((isset($MSG['1003'])) ? $MSG['1003'] : '{ L_1003 }')); ?></label>
					<div class="col-sm-8">
                                               
                                               <div class="col-sm-3">
						<input maxlength="12" name="minprice" class="form-control" placeholder="<?php echo ((isset($this->_rootref['L_1004'])) ? $this->_rootref['L_1004'] : ((isset($MSG['1004'])) ? $MSG['1004'] : '{ L_1004 }')); ?>"> 
                                               </div>
                                               <div class="col-sm-2"><?php echo (isset($this->_rootref['CURRENCY'])) ? $this->_rootref['CURRENCY'] : ''; ?></div>
                                               <div class="col-sm-3">
                                               <input maxlength="12" name="maxprice" class="form-control" placeholder="<?php echo ((isset($this->_rootref['L_1005'])) ? $this->_rootref['L_1005'] : ((isset($MSG['1005'])) ? $MSG['1005'] : '{ L_1005 }')); ?>"> 
                                               </div><div class="col-sm-2"><?php echo (isset($this->_rootref['CURRENCY'])) ? $this->_rootref['CURRENCY'] : ''; ?></div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label"><?php echo ((isset($this->_rootref['L_2__0025'])) ? $this->_rootref['L_2__0025'] : ((isset($MSG['2__0025'])) ? $MSG['2__0025'] : '{ L_2__0025 }')); ?></label>
					<div class="col-sm-8">
                                             <div class="checkbox">
						<label><INPUT TYPE="checkbox" name="buyitnow" value="y"> <?php echo ((isset($this->_rootref['L_30_0100'])) ? $this->_rootref['L_30_0100'] : ((isset($MSG['30_0100'])) ? $MSG['30_0100'] : '{ L_30_0100 }')); ?></label>
						<label><INPUT TYPE="checkbox" name="buyitnowonly" value="y"> <?php echo ((isset($this->_rootref['L_30_0101'])) ? $this->_rootref['L_30_0101'] : ((isset($MSG['30_0101'])) ? $MSG['30_0101'] : '{ L_30_0101 }')); ?></label>
                                             </div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label"><?php echo ((isset($this->_rootref['L_1006'])) ? $this->_rootref['L_1006'] : ((isset($MSG['1006'])) ? $MSG['1006'] : '{ L_1006 }')); ?></label>
					<div class="col-sm-8">
                                             <div class="checkbox">
                                                 <label><?php echo (isset($this->_rootref['PAYMENTS_LIST'])) ? $this->_rootref['PAYMENTS_LIST'] : ''; ?></label>
                                             </div>
                                        </div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label"><?php echo ((isset($this->_rootref['L_125'])) ? $this->_rootref['L_125'] : ((isset($MSG['125'])) ? $MSG['125'] : '{ L_125 }')); ?></label>
					<div class="col-sm-8">
						<input class="form-control" type="text" name="seller">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label"><?php echo ((isset($this->_rootref['L_1008'])) ? $this->_rootref['L_1008'] : ((isset($MSG['1008'])) ? $MSG['1008'] : '{ L_1008 }')); ?></label>
					<div class="col-sm-8"><?php echo (isset($this->_rootref['COUNTRY_LIST'])) ? $this->_rootref['COUNTRY_LIST'] : ''; ?></div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label"><?php echo ((isset($this->_rootref['L_012'])) ? $this->_rootref['L_012'] : ((isset($MSG['012'])) ? $MSG['012'] : '{ L_012 }')); ?></label>
					<div class="col-sm-8">
                                             <input type="text" name="zipcode" class="form-control">
                                        </div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label"><?php echo ((isset($this->_rootref['L_1009'])) ? $this->_rootref['L_1009'] : ((isset($MSG['1009'])) ? $MSG['1009'] : '{ L_1009 }')); ?></label>
					<div class="col-sm-8">
						<select name="ending" class="form-control">
							<option></option>
							<option value="1"><?php echo ((isset($this->_rootref['L_1010'])) ? $this->_rootref['L_1010'] : ((isset($MSG['1010'])) ? $MSG['1010'] : '{ L_1010 }')); ?></option>
							<option value="2"><?php echo ((isset($this->_rootref['L_1011'])) ? $this->_rootref['L_1011'] : ((isset($MSG['1011'])) ? $MSG['1011'] : '{ L_1011 }')); ?></option>
							<option value="4"><?php echo ((isset($this->_rootref['L_1012'])) ? $this->_rootref['L_1012'] : ((isset($MSG['1012'])) ? $MSG['1012'] : '{ L_1012 }')); ?></option>
							<option value="6"><?php echo ((isset($this->_rootref['L_1013'])) ? $this->_rootref['L_1013'] : ((isset($MSG['1013'])) ? $MSG['1013'] : '{ L_1013 }')); ?></option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label"><?php echo ((isset($this->_rootref['L_1014'])) ? $this->_rootref['L_1014'] : ((isset($MSG['1014'])) ? $MSG['1014'] : '{ L_1014 }')); ?></label>
					<div class="col-sm-8">
						<select name="SortProperty" class="form-control">
							<option></option>
							<option value="ends"><?php echo ((isset($this->_rootref['L_1015'])) ? $this->_rootref['L_1015'] : ((isset($MSG['1015'])) ? $MSG['1015'] : '{ L_1015 }')); ?></option>
							<option value="starts"><?php echo ((isset($this->_rootref['L_1016'])) ? $this->_rootref['L_1016'] : ((isset($MSG['1016'])) ? $MSG['1016'] : '{ L_1016 }')); ?></option>
							<option value="min_bid"><?php echo ((isset($this->_rootref['L_1017'])) ? $this->_rootref['L_1017'] : ((isset($MSG['1017'])) ? $MSG['1017'] : '{ L_1017 }')); ?></option>
							<option value="max_bid"><?php echo ((isset($this->_rootref['L_1018'])) ? $this->_rootref['L_1018'] : ((isset($MSG['1018'])) ? $MSG['1018'] : '{ L_1018 }')); ?></option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label"><?php echo ((isset($this->_rootref['L_718'])) ? $this->_rootref['L_718'] : ((isset($MSG['718'])) ? $MSG['718'] : '{ L_718 }')); ?></label>
					<div class="col-sm-8">
						<select name="type" class="form-control">
							<option></option>
							<option value="2"><?php echo ((isset($this->_rootref['L_1020'])) ? $this->_rootref['L_1020'] : ((isset($MSG['1020'])) ? $MSG['1020'] : '{ L_1020 }')); ?></option>
							<option value="1"><?php echo ((isset($this->_rootref['L_1021'])) ? $this->_rootref['L_1021'] : ((isset($MSG['1021'])) ? $MSG['1021'] : '{ L_1021 }')); ?></option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<div class="text-center">
						<input name="action" type="hidden" value="search">
						<input type="submit" name="go" value="<?php echo ((isset($this->_rootref['L_5029'])) ? $this->_rootref['L_5029'] : ((isset($MSG['5029'])) ? $MSG['5029'] : '{ L_5029 }')); ?>" class="btn btn-primary">
					</div>
				</div>
			
		</form>
	</div>
    </div>
</div>