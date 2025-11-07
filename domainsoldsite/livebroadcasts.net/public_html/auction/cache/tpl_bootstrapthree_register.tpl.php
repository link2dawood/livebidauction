<div class="row">
	<div class="col-md-12">
		<?php if ($this->_rootref['B_FIRST']) {  if ($this->_rootref['ERROR'] != ('')) {  ?>
		<div class="alert alert-danger">
			<?php echo (isset($this->_rootref['ERROR'])) ? $this->_rootref['ERROR'] : ''; ?>
		</div>
	<?php } ?>
		<div class="col-md-7 well">
                   <legend><?php echo ((isset($this->_rootref['L_001'])) ? $this->_rootref['L_001'] : ((isset($MSG['001'])) ? $MSG['001'] : '{ L_001 }')); ?></legend>
			<form name="registration" action="<?php echo (isset($this->_rootref['SSLURL'])) ? $this->_rootref['SSLURL'] : ''; ?>register.php" method="post">
                                 <input type="hidden" name="csrftoken" value="<?php echo (isset($this->_rootref['_CSRFTOKEN'])) ? $this->_rootref['_CSRFTOKEN'] : ''; ?>">
				
					
				<div class="form-group col-lg-6 <?php if ($this->_rootref['MISSING0'] == (1)) {  ?>has-error<?php } ?>">
                                  <label for="TPL_name"><?php echo ((isset($this->_rootref['L_002'])) ? $this->_rootref['L_002'] : ((isset($MSG['002'])) ? $MSG['002'] : '{ L_002 }')); ?> *</label>
					 <input type="text" class="form-control" name="TPL_name" <?php if ($this->_rootref['MISSING0'] == (1)) {  ?>id="inputError1"<?php } ?> value="<?php echo (isset($this->_rootref['V_YNAME'])) ? $this->_rootref['V_YNAME'] : ''; ?>">
                            <?php if ($this->_rootref['MISSING0'] == (1)) {  ?><div class="error-box missing"><?php echo ((isset($this->_rootref['L_937'])) ? $this->_rootref['L_937'] : ((isset($MSG['937'])) ? $MSG['937'] : '{ L_937 }')); ?></div><?php } ?>
				</div>
					
					<div class="form-group col-lg-6 <?php if ($this->_rootref['MISSING1'] == (1)) {  ?>has-error<?php } ?>">
					     <label for="TPL_nick"><?php echo ((isset($this->_rootref['L_003'])) ? $this->_rootref['L_003'] : ((isset($MSG['003'])) ? $MSG['003'] : '{ L_003 }')); ?> *</label>
						<input type="text" name="TPL_nick" class="form-control"  value="<?php echo (isset($this->_rootref['V_UNAME'])) ? $this->_rootref['V_UNAME'] : ''; ?>" <?php if ($this->_rootref['MISSING1'] == (1)) {  ?>id="inputError1"<?php } ?> placeholder="<?php echo ((isset($this->_rootref['L_050'])) ? $this->_rootref['L_050'] : ((isset($MSG['050'])) ? $MSG['050'] : '{ L_050 }')); ?>"> 
                            <?php if ($this->_rootref['MISSING1'] == (1)) {  ?><div class="error-box missing"><?php echo ((isset($this->_rootref['L_938'])) ? $this->_rootref['L_938'] : ((isset($MSG['938'])) ? $MSG['938'] : '{ L_938 }')); ?></div><?php } ?>
					</div>

                                        <div class="col-lg-12"></div>
					
                                        <div class="form-group col-lg-6 <?php if ($this->_rootref['MISSING2'] == (1)) {  ?>has-error<?php } ?>">
						<label for="TPL_password"><?php echo ((isset($this->_rootref['L_004'])) ? $this->_rootref['L_004'] : ((isset($MSG['004'])) ? $MSG['004'] : '{ L_004 }')); ?> *</label>
						  <input type="password" name="TPL_password" class="form-control" <?php if ($this->_rootref['MISSING2'] == (1)) {  ?>id="inputError1"<?php } ?> placeholder="<?php echo ((isset($this->_rootref['L_050'])) ? $this->_rootref['L_050'] : ((isset($MSG['050'])) ? $MSG['050'] : '{ L_050 }')); ?>">
                            <?php if ($this->_rootref['MISSING2'] == (1)) {  ?><div class="error-box missing"><?php echo ((isset($this->_rootref['L_939'])) ? $this->_rootref['L_939'] : ((isset($MSG['939'])) ? $MSG['939'] : '{ L_939 }')); ?></div><?php } ?>
                                        </div>
					
                                        <div class="form-group col-lg-6 <?php if ($this->_rootref['MISSING3'] == (1)) {  ?>has-error<?php } ?>">
					   <label for="TPL_repeat_password"><?php echo ((isset($this->_rootref['L_005'])) ? $this->_rootref['L_005'] : ((isset($MSG['005'])) ? $MSG['005'] : '{ L_005 }')); ?> *</label>
						<input type="password" name="TPL_repeat_password" class="form-control" <?php if ($this->_rootref['MISSING3'] == (1)) {  ?>id="inputError1"<?php } ?>>
                            <?php if ($this->_rootref['MISSING3'] == (1)) {  ?><div class="error-box missing"><?php echo ((isset($this->_rootref['L_940'])) ? $this->_rootref['L_940'] : ((isset($MSG['940'])) ? $MSG['940'] : '{ L_940 }')); ?></div><?php } ?>
					</div>

                                        <div class="col-lg-12"></div>
					
                                        <div class="form-group col-lg-12 <?php if ($this->_rootref['MISSING4'] == (1)) {  ?>has-error<?php } ?>">
					   <label for="TPL_email"><?php echo ((isset($this->_rootref['L_006'])) ? $this->_rootref['L_006'] : ((isset($MSG['006'])) ? $MSG['006'] : '{ L_006 }')); ?> *</label>
						<input type="email" name="TPL_email" class="form-control" value="<?php echo (isset($this->_rootref['V_EMAIL'])) ? $this->_rootref['V_EMAIL'] : ''; ?>" <?php if ($this->_rootref['MISSING4'] == (1)) {  ?>id="inputError1"<?php } ?>>
                            <?php if ($this->_rootref['MISSING4'] == (1)) {  ?><div class="error-box missing"><?php echo ((isset($this->_rootref['L_941'])) ? $this->_rootref['L_941'] : ((isset($MSG['941'])) ? $MSG['941'] : '{ L_941 }')); ?></div><?php } ?>
					</div>
        <?php if ($this->_rootref['BIRTHDATE']) {  ?>
					<div class="form-group col-lg-12 <?php if ($this->_rootref['MISSING5'] == (1)) {  ?>has-error<?php } ?>">
						<label for="TPL_year"><?php echo ((isset($this->_rootref['L_252'])) ? $this->_rootref['L_252'] : ((isset($MSG['252'])) ? $MSG['252'] : '{ L_252 }')); echo (isset($this->_rootref['REQUIRED'][0])) ? $this->_rootref['REQUIRED'][0] : ''; ?></label>
                                        <fieldset class="row">
						<div class="register-date col-md-8"><?php echo ((isset($this->_rootref['L_DATEFORMAT'])) ? $this->_rootref['L_DATEFORMAT'] : ((isset($MSG['DATEFORMAT'])) ? $MSG['DATEFORMAT'] : '{ L_DATEFORMAT }')); ?></div> <div class="register-date col-md-4"><input type="text" name="TPL_year" class="form-control" value="<?php echo (isset($this->_rootref['V_YEAR'])) ? $this->_rootref['V_YEAR'] : ''; ?>" <?php if ($this->_rootref['MISSING5'] == (1)) {  ?>id="inputError1"<?php } ?>></div>
                                                
                                        </fieldset>
                            <?php if ($this->_rootref['MISSING5'] == (1)) {  ?><div class="error-box missing"><?php echo ((isset($this->_rootref['L_948'])) ? $this->_rootref['L_948'] : ((isset($MSG['948'])) ? $MSG['948'] : '{ L_948 }')); ?></div><?php } ?>
					</div>
        <?php } ?>

                                        <div class="col-lg-12"></div>

        <?php if ($this->_rootref['ADDRESS']) {  ?>
					<div class="form-group col-lg-6 <?php if ($this->_rootref['MISSING6'] == (1)) {  ?>has-error<?php } ?>">
					    <label for="TPL_address"><?php echo ((isset($this->_rootref['L_009'])) ? $this->_rootref['L_009'] : ((isset($MSG['009'])) ? $MSG['009'] : '{ L_009 }')); echo (isset($this->_rootref['REQUIRED'][1])) ? $this->_rootref['REQUIRED'][1] : ''; ?></label>
						<input type="text" name="TPL_address" class="form-control" value="<?php echo (isset($this->_rootref['V_ADDRE'])) ? $this->_rootref['V_ADDRE'] : ''; ?>" <?php if ($this->_rootref['MISSING6'] == (1)) {  ?>id="inputError1"<?php } ?>>
                            <?php if ($this->_rootref['MISSING6'] == (1)) {  ?><div class="error-box missing"><?php echo ((isset($this->_rootref['L_942'])) ? $this->_rootref['L_942'] : ((isset($MSG['942'])) ? $MSG['942'] : '{ L_942 }')); ?></div><?php } ?>
					</div>
        <?php } if ($this->_rootref['CITY']) {  ?>
					<div class="form-group col-lg-6 <?php if ($this->_rootref['MISSING7'] == (1)) {  ?>has-error<?php } ?>">
					    <label for="TPL_city"><?php echo ((isset($this->_rootref['L_010'])) ? $this->_rootref['L_010'] : ((isset($MSG['010'])) ? $MSG['010'] : '{ L_010 }')); echo (isset($this->_rootref['REQUIRED'][2])) ? $this->_rootref['REQUIRED'][2] : ''; ?></label>
						<input type="text" name="TPL_city" class="form-control" value="<?php echo (isset($this->_rootref['V_CITY'])) ? $this->_rootref['V_CITY'] : ''; ?>" <?php if ($this->_rootref['MISSING7'] == (1)) {  ?>id="inputError1"<?php } ?>>
                            <?php if ($this->_rootref['MISSING7'] == (1)) {  ?><div class="error-box missing"><?php echo ((isset($this->_rootref['L_943'])) ? $this->_rootref['L_943'] : ((isset($MSG['943'])) ? $MSG['943'] : '{ L_943 }')); ?></div><?php } ?>
					</div>
        <?php } ?>

                                        <div class="col-lg-12"></div>

        <?php if ($this->_rootref['PROV']) {  ?>
					<div class="form-group col-lg-6 <?php if ($this->_rootref['MISSING8'] == (1)) {  ?>has-error<?php } ?>">
					    <label for="TPL_prov"><?php echo ((isset($this->_rootref['L_011'])) ? $this->_rootref['L_011'] : ((isset($MSG['011'])) ? $MSG['011'] : '{ L_011 }')); echo (isset($this->_rootref['REQUIRED'][3])) ? $this->_rootref['REQUIRED'][3] : ''; ?></label>
						<input type="text" name="TPL_prov" class="form-control" value="<?php echo (isset($this->_rootref['V_PROV'])) ? $this->_rootref['V_PROV'] : ''; ?>" <?php if ($this->_rootref['MISSING8'] == (1)) {  ?>id="inputError1"<?php } ?>>
                            <?php if ($this->_rootref['MISSING8'] == (1)) {  ?><div class="error-box missing"><?php echo ((isset($this->_rootref['L_944'])) ? $this->_rootref['L_944'] : ((isset($MSG['944'])) ? $MSG['944'] : '{ L_944 }')); ?></div><?php } ?>
					</div>
        <?php } if ($this->_rootref['COUNTRY']) {  ?>
					<div class="form-group col-lg-6 <?php if ($this->_rootref['MISSING9'] == (1)) {  ?>has-error<?php } ?>">
					    <label for="TPL_country"><?php echo ((isset($this->_rootref['L_014'])) ? $this->_rootref['L_014'] : ((isset($MSG['014'])) ? $MSG['014'] : '{ L_014 }')); echo (isset($this->_rootref['REQUIRED'][4])) ? $this->_rootref['REQUIRED'][4] : ''; ?></label>
						<select name="TPL_country" class="form-control" <?php if ($this->_rootref['MISSING9'] == (1)) {  ?>id="inputError1"<?php } ?>>
								<option value=""><?php echo ((isset($this->_rootref['L_251'])) ? $this->_rootref['L_251'] : ((isset($MSG['251'])) ? $MSG['251'] : '{ L_251 }')); ?></option>
								<?php echo ((isset($this->_rootref['L_COUNTRIES'])) ? $this->_rootref['L_COUNTRIES'] : ((isset($MSG['COUNTRIES'])) ? $MSG['COUNTRIES'] : '{ L_COUNTRIES }')); ?>
						</select>
                            <?php if ($this->_rootref['MISSING9'] == (1)) {  ?><div class="error-box missing"><?php echo ((isset($this->_rootref['L_945'])) ? $this->_rootref['L_945'] : ((isset($MSG['945'])) ? $MSG['945'] : '{ L_945 }')); ?></div><?php } ?>
					</div>
        <?php } ?>

                                        <div class="col-lg-12"></div>

        <?php if ($this->_rootref['ZIP']) {  ?>
					<div class="form-group col-lg-6 <?php if ($this->_rootref['MISSING10'] == (1)) {  ?>has-error<?php } ?>">
					    <label for="TPL_zip"><?php echo ((isset($this->_rootref['L_012'])) ? $this->_rootref['L_012'] : ((isset($MSG['012'])) ? $MSG['012'] : '{ L_012 }')); echo (isset($this->_rootref['REQUIRED'][5])) ? $this->_rootref['REQUIRED'][5] : ''; ?></label>
						<input type="text" name="TPL_zip" class="form-control" value="<?php echo (isset($this->_rootref['V_POSTCODE'])) ? $this->_rootref['V_POSTCODE'] : ''; ?>" <?php if ($this->_rootref['MISSING10'] == (1)) {  ?>id="inputError1"<?php } ?>>
                            <?php if ($this->_rootref['MISSING10'] == (1)) {  ?><div class="error-box missing"><?php echo ((isset($this->_rootref['L_946'])) ? $this->_rootref['L_946'] : ((isset($MSG['946'])) ? $MSG['946'] : '{ L_946 }')); ?></div><?php } ?>
					</div>
        <?php } if ($this->_rootref['TEL']) {  ?>
					<div class="form-group col-lg-6 <?php if ($this->_rootref['MISSING11'] == (1)) {  ?>has-error<?php } ?>">
					    <label for="TPL_phone"><?php echo ((isset($this->_rootref['L_013'])) ? $this->_rootref['L_013'] : ((isset($MSG['013'])) ? $MSG['013'] : '{ L_013 }')); echo (isset($this->_rootref['REQUIRED'][6])) ? $this->_rootref['REQUIRED'][6] : ''; ?></label>
						<input type="text" name="TPL_phone" class="form-control" value="<?php echo (isset($this->_rootref['V_PHONE'])) ? $this->_rootref['V_PHONE'] : ''; ?>" <?php if ($this->_rootref['MISSING11'] == (1)) {  ?>id="inputError1"<?php } ?>>
                            <?php if ($this->_rootref['MISSING11'] == (1)) {  ?><div class="error-box missing"><?php echo ((isset($this->_rootref['L_947'])) ? $this->_rootref['L_947'] : ((isset($MSG['947'])) ? $MSG['947'] : '{ L_947 }')); ?></div><?php } ?>
					</div>
        <?php } ?>

                                        <div class="col-lg-12"></div>

					<div class="form-group col-lg-12">
						<label><?php echo ((isset($this->_rootref['L_346'])) ? $this->_rootref['L_346'] : ((isset($MSG['346'])) ? $MSG['346'] : '{ L_346 }')); ?></label>
						<div class="timezone">
							<?php echo (isset($this->_rootref['TIMEZONE'])) ? $this->_rootref['TIMEZONE'] : ''; ?>
						</div>
					</div>
        <?php if ($this->_rootref['B_NLETTER']) {  ?>
					<div class="form-group col-lg-12">
                                          <div class="alert alert-info" role="alert">
						<label><?php echo ((isset($this->_rootref['L_608'])) ? $this->_rootref['L_608'] : ((isset($MSG['608'])) ? $MSG['608'] : '{ L_608 }')); ?></label>
						<label class="checkbox-inline"><input type="radio" name="TPL_nletter" value="1" <?php echo (isset($this->_rootref['V_YNEWSL'])) ? $this->_rootref['V_YNEWSL'] : ''; ?>>
							<?php echo ((isset($this->_rootref['L_030'])) ? $this->_rootref['L_030'] : ((isset($MSG['030'])) ? $MSG['030'] : '{ L_030 }')); ?></label>
						<label class="checkbox-inline"><input type="radio" name="TPL_nletter" value="2" <?php echo (isset($this->_rootref['V_NNEWSL'])) ? $this->_rootref['V_NNEWSL'] : ''; ?>>
							<?php echo ((isset($this->_rootref['L_029'])) ? $this->_rootref['L_029'] : ((isset($MSG['029'])) ? $MSG['029'] : '{ L_029 }')); ?></label>
                                          </div>
					</div>
        <?php } ?>
				
</div>
              <div class="col-md-4 col-md-offset-1 well">
				<legend><?php echo ((isset($this->_rootref['L_719'])) ? $this->_rootref['L_719'] : ((isset($MSG['719'])) ? $MSG['719'] : '{ L_719 }')); ?></legend>
				<?php if ($this->_rootref['B_PAYPAL']) {  ?>
                                   <div class="form-group <?php if ($this->_rootref['MISSING12'] == (1)) {  ?>has-error<?php } ?> col-lg-12">
					<label for="TPL_pp_email"><?php echo ((isset($this->_rootref['L_720'])) ? $this->_rootref['L_720'] : ((isset($MSG['720'])) ? $MSG['720'] : '{ L_720 }')); echo (isset($this->_rootref['REQUIRED'][7])) ? $this->_rootref['REQUIRED'][7] : ''; ?></label>
						<input type="text" name="TPL_pp_email" class="form-control" value="<?php echo (isset($this->_rootref['PP_EMAIL'])) ? $this->_rootref['PP_EMAIL'] : ''; ?>" <?php if ($this->_rootref['MISSING12'] == (1)) {  ?>id="inputError1"<?php } ?>>
                            <?php if ($this->_rootref['MISSING12'] == (1)) {  ?><div class="error-box missing"><?php echo ((isset($this->_rootref['L_810'])) ? $this->_rootref['L_810'] : ((isset($MSG['810'])) ? $MSG['810'] : '{ L_810 }')); ?></div><?php } ?>
				   </div>	
				<?php } if ($this->_rootref['B_AUTHNET']) {  ?>
                                     <div class="form-group <?php if ($this->_rootref['MISSING13'] == (1)) {  ?>has-error<?php } ?> col-lg-12">
					<label for="TPL_authnet_id"><?php echo ((isset($this->_rootref['L_773'])) ? $this->_rootref['L_773'] : ((isset($MSG['773'])) ? $MSG['773'] : '{ L_773 }')); echo (isset($this->_rootref['REQUIRED'][8])) ? $this->_rootref['REQUIRED'][8] : ''; ?></label>
						<input type="text" name="TPL_authnet_id" class="form-control" value="<?php echo (isset($this->_rootref['AN_ID'])) ? $this->_rootref['AN_ID'] : ''; ?>" <?php if ($this->_rootref['MISSING13'] == (1)) {  ?>id="inputError1"<?php } ?>>
                            <?php if ($this->_rootref['MISSING13'] == (1)) {  ?><div class="error-box missing"><?php echo ((isset($this->_rootref['L_811'])) ? $this->_rootref['L_811'] : ((isset($MSG['811'])) ? $MSG['811'] : '{ L_811 }')); ?></div><?php } ?>
				     
					<label for="TPL_authnet_pass"><?php echo ((isset($this->_rootref['L_774'])) ? $this->_rootref['L_774'] : ((isset($MSG['774'])) ? $MSG['774'] : '{ L_774 }')); echo (isset($this->_rootref['REQUIRED'][8])) ? $this->_rootref['REQUIRED'][8] : ''; ?></label>
						<input type="text" name="TPL_authnet_pass" class="form-control" value="<?php echo (isset($this->_rootref['AN_PASS'])) ? $this->_rootref['AN_PASS'] : ''; ?>" <?php if ($this->_rootref['MISSING13'] == (1)) {  ?>id="inputError1"<?php } ?>>
                                      </div>
				<?php } if ($this->_rootref['B_WORLDPAY']) {  ?>
					<div class="form-group <?php if ($this->_rootref['MISSING14'] == (1)) {  ?>has-error<?php } ?> col-lg-12">
					   <label for="TPL_worldpay_id"><?php echo ((isset($this->_rootref['L_824'])) ? $this->_rootref['L_824'] : ((isset($MSG['824'])) ? $MSG['824'] : '{ L_824 }')); echo (isset($this->_rootref['REQUIRED'][9])) ? $this->_rootref['REQUIRED'][9] : ''; ?></label>
						<input type="text" name="TPL_worldpay_id" class="form-control" value="<?php echo (isset($this->_rootref['WP_ID'])) ? $this->_rootref['WP_ID'] : ''; ?>" <?php if ($this->_rootref['MISSING14'] == (1)) {  ?>id="inputError1"<?php } ?>>
                            <?php if ($this->_rootref['MISSING14'] == (1)) {  ?><div class="error-box missing"><?php echo ((isset($this->_rootref['L_823'])) ? $this->_rootref['L_823'] : ((isset($MSG['823'])) ? $MSG['823'] : '{ L_823 }')); ?></div><?php } ?>
					</div>
				<?php } if ($this->_rootref['B_TOOCHECKOUT']) {  ?>
					<div class="form-group <?php if ($this->_rootref['MISSING15'] == (1)) {  ?>has-error<?php } ?> col-lg-12">
					    <label for="TPL_toocheckout_id"><?php echo ((isset($this->_rootref['L_826'])) ? $this->_rootref['L_826'] : ((isset($MSG['826'])) ? $MSG['826'] : '{ L_826 }')); echo (isset($this->_rootref['REQUIRED'][10])) ? $this->_rootref['REQUIRED'][10] : ''; ?></label>
						<input type="text" name="TPL_toocheckout_id" class="form-control" value="<?php echo (isset($this->_rootref['TC_ID'])) ? $this->_rootref['TC_ID'] : ''; ?>" <?php if ($this->_rootref['MISSING15'] == (1)) {  ?>class="missing"<?php } ?>>
                            <?php if ($this->_rootref['MISSING15'] == (1)) {  ?><div class="error-box missing"><?php echo ((isset($this->_rootref['L_821'])) ? $this->_rootref['L_821'] : ((isset($MSG['821'])) ? $MSG['821'] : '{ L_821 }')); ?></div><?php } ?>
					</div>
				<?php } if ($this->_rootref['B_MONEYBOOKERS']) {  ?>
					<div class="form-group <?php if ($this->_rootref['MISSING16'] == (1)) {  ?>has-error<?php } ?> col-lg-12">
					    <label for="TPL_moneybookers_email"><?php echo ((isset($this->_rootref['L_825'])) ? $this->_rootref['L_825'] : ((isset($MSG['825'])) ? $MSG['825'] : '{ L_825 }')); echo (isset($this->_rootref['REQUIRED'][11])) ? $this->_rootref['REQUIRED'][11] : ''; ?></label>
						<input type="text" name="TPL_moneybookers_email" class="form-control" value="<?php echo (isset($this->_rootref['MB_EMAIL'])) ? $this->_rootref['MB_EMAIL'] : ''; ?>" <?php if ($this->_rootref['MISSING16'] == (1)) {  ?>class="missing"<?php } ?>>
                            <?php if ($this->_rootref['MISSING16'] == (1)) {  ?><div class="error-box missing"><?php echo ((isset($this->_rootref['L_822'])) ? $this->_rootref['L_822'] : ((isset($MSG['822'])) ? $MSG['822'] : '{ L_822 }')); ?></div><?php } ?>
					</div>
				<?php } ?>
                                 
                                        <div class="form-group col-lg-12">
                                            <div class="capchabox"><?php echo (isset($this->_rootref['CAPCHA'])) ? $this->_rootref['CAPCHA'] : ''; ?></div>
                                        </div>
                                        <div class="form-group col-lg-12">
					     <div class="checkbox">
                                                 <label>
					            <input type="checkbox" name="terms_check" id="terms_check"> <?php echo ((isset($this->_rootref['L_858'])) ? $this->_rootref['L_858'] : ((isset($MSG['858'])) ? $MSG['858'] : '{ L_858 }')); ?>
                                                 </label>
                                             </div>
                                             <br><br>
                                             <div class="text-center">
					<input type="hidden" name="action" value="first">
					<input type="submit" name="" value="<?php echo ((isset($this->_rootref['L_235'])) ? $this->_rootref['L_235'] : ((isset($MSG['235'])) ? $MSG['235'] : '{ L_235 }')); ?>" class="btn btn-primary">
					<input type="reset" name="" value="<?php echo ((isset($this->_rootref['L_035'])) ? $this->_rootref['L_035'] : ((isset($MSG['035'])) ? $MSG['035'] : '{ L_035 }')); ?>" class="btn btn-default">
				             </div>
                                        </div>
			</form>
		</div>
<?php } else { ?>
		<div class="well">
        	<h2><?php echo ((isset($this->_rootref['L_HEADER'])) ? $this->_rootref['L_HEADER'] : ((isset($MSG['HEADER'])) ? $MSG['HEADER'] : '{ L_HEADER }')); ?></h2>
        	<p><?php echo ((isset($this->_rootref['L_MESSAGE'])) ? $this->_rootref['L_MESSAGE'] : ((isset($MSG['MESSAGE'])) ? $MSG['MESSAGE'] : '{ L_MESSAGE }')); ?></p>
            <p><?php echo ((isset($this->_rootref['L_860'])) ? $this->_rootref['L_860'] : ((isset($MSG['860'])) ? $MSG['860'] : '{ L_860 }')); ?></p>
        </div>
<?php } ?>
	</div>
</div>