<div class="row">
      <div class="col-md-12">
		<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 well">
                   <legend><?php echo ((isset($this->_rootref['L_181'])) ? $this->_rootref['L_181'] : ((isset($MSG['181'])) ? $MSG['181'] : '{ L_181 }')); ?></legend>
                      
                <?php if ($this->_rootref['ERROR'] != ('')) {  ?>
		<div class="alert alert-danger">
			<?php echo (isset($this->_rootref['ERROR'])) ? $this->_rootref['ERROR'] : ''; ?>
		</div>
                <?php } ?>
                    <div class="col-md-6">
                        <h2><?php echo ((isset($this->_rootref['L_862'])) ? $this->_rootref['L_862'] : ((isset($MSG['862'])) ? $MSG['862'] : '{ L_862 }')); ?></h2>
                    <form name="user_login" action="<?php echo (isset($this->_rootref['SSLURL'])) ? $this->_rootref['SSLURL'] : ''; ?>user_login.php" method="post">
                       <div class="form-group col-md-10">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                            <input type="text" name="username" class="form-control" placeholder="<?php echo ((isset($this->_rootref['L_187'])) ? $this->_rootref['L_187'] : ((isset($MSG['187'])) ? $MSG['187'] : '{ L_187 }')); ?>" value="<?php echo (isset($this->_rootref['USER'])) ? $this->_rootref['USER'] : ''; ?>">
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                            <input type="password" name="password" class="form-control" placeholder="<?php echo ((isset($this->_rootref['L_004'])) ? $this->_rootref['L_004'] : ((isset($MSG['004'])) ? $MSG['004'] : '{ L_004 }')); ?>" value="">
                        </div>
                       </div>
                       <div class="clearfix"></div>
                          <div class="form-group col-md-10">
                             <input type="submit" name="input" value="Login" class="btn btn-primary">
                             <input type="hidden" name="action" value="login">
                             <div class="pull-right">
                             <input type="checkbox" name="rememberme" value="1">&nbsp;<?php echo ((isset($this->_rootref['L_25_0085'])) ? $this->_rootref['L_25_0085'] : ((isset($MSG['25_0085'])) ? $MSG['25_0085'] : '{ L_25_0085 }')); ?>
                             </div>
                          </div>
                       <div class="clearfix"></div>
                          <div class="form-group col-md-10">
                             <a href="forgotpasswd.php"><?php echo ((isset($this->_rootref['L_215'])) ? $this->_rootref['L_215'] : ((isset($MSG['215'])) ? $MSG['215'] : '{ L_215 }')); ?></a>
                          </div><div class="clearfix"></div>
                    </form>
                    </div>
                    <div class="col-md-6 hidden-xs">
                         <?php echo ((isset($this->_rootref['L_863'])) ? $this->_rootref['L_863'] : ((isset($MSG['863'])) ? $MSG['863'] : '{ L_863 }')); ?>
                    </div>
        </div>
     </div>
</div>