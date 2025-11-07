<div class="row">
       <div class="col-md-12">
	
		<ul class="breadcrumb"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true" style="margin-right:10px;"></span><a href="browse.php?id=0"><?php echo ((isset($this->_rootref['L_287'])) ? $this->_rootref['L_287'] : ((isset($MSG['287'])) ? $MSG['287'] : '{ L_287 }')); ?></a> : <?php echo (isset($this->_rootref['CAT_STRING'])) ? $this->_rootref['CAT_STRING'] : ''; ?></ul>
	
	

<?php if ($this->_rootref['TOP_HTML'] != ('')) {  ?>
   <div class="row">
       <div class="col-md-12">
   <div class="well hidden-xs">
		<table width="98%" border="0" cellspacing="0" cellpadding="4">
			<?php echo (isset($this->_rootref['TOP_HTML'])) ? $this->_rootref['TOP_HTML'] : ''; ?>
		</table>
   </div>
   <div class="btn-group visible-xs">
  <button type="button" class="btn btn-default btn-sm btn-block dropdown-toggle" data-toggle="dropdown" data-target="#sub-cats" aria-expanded="false">
    <span class="glyphicon glyphicon-list" aria-hidden="true"></span> <?php echo ((isset($this->_rootref['L_276'])) ? $this->_rootref['L_276'] : ((isset($MSG['276'])) ? $MSG['276'] : '{ L_276 }')); ?> <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" style="margin-top:22px; padding: 3px;">
                        <table>
			<?php echo (isset($this->_rootref['TOP_HTML'])) ? $this->_rootref['TOP_HTML'] : ''; ?></table>
		 </ul>
</div>
</div>
</div>
<?php } ?>

		<br>
<?php if ($this->_rootref['NUM_AUCTIONS'] > 0) {  if ($this->_rootref['ID'] > 0) {  ?>
<div class="well well-sm">
                <form name="catsearch" action="?id=<?php echo (isset($this->_rootref['ID'])) ? $this->_rootref['ID'] : ''; ?>" method="post">
                       <input type="hidden" name="csrftoken" value="<?php echo (isset($this->_rootref['_CSRFTOKEN'])) ? $this->_rootref['_CSRFTOKEN'] : ''; ?>">
    <div class="row">
          
                 <div class="col-md-7 col-sm-7">
                   <input type="text" name="catkeyword" class="form-control" placeholder="<?php echo ((isset($this->_rootref['L_30_0070'])) ? $this->_rootref['L_30_0070'] : ((isset($MSG['30_0070'])) ? $MSG['30_0070'] : '{ L_30_0070 }')); ?>">
                 </div>
                 <div class="col-md-5 col-sm-5">
                   <input type="submit" name="" value="<?php echo ((isset($this->_rootref['L_103'])) ? $this->_rootref['L_103'] : ((isset($MSG['103'])) ? $MSG['103'] : '{ L_103 }')); ?>" class="btn btn-default">&nbsp;&nbsp;<a href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>adsearch.php"><?php echo ((isset($this->_rootref['L_464'])) ? $this->_rootref['L_464'] : ((isset($MSG['464'])) ? $MSG['464'] : '{ L_464 }')); ?></a>
                 </div>
           
    </div>
		</form>
</div>
	<?php } $this->_tpl_include('browse.tpl'); } else { ?>
		<div class="alert alert-danger" role="alert">
			<?php echo ((isset($this->_rootref['L_198'])) ? $this->_rootref['L_198'] : ((isset($MSG['198'])) ? $MSG['198'] : '{ L_198 }')); ?>
		</div>
<?php } ?>
	
     </div>
</div>