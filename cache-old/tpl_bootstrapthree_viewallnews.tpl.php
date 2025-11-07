<div class="row">
	<div class="col-md-offset-2 col-md-8">
	<legend><?php echo ((isset($this->_rootref['L_342'])) ? $this->_rootref['L_342'] : ((isset($MSG['342'])) ? $MSG['342'] : '{ L_342 }')); ?></legend>
	<ul class="list-group">
	<?php $_news_count = (isset($this->_tpldata['news'])) ? sizeof($this->_tpldata['news']) : 0;if ($_news_count) {for ($_news_i = 0; $_news_i < $_news_count; ++$_news_i){$_news_val = &$this->_tpldata['news'][$_news_i]; ?>
	<li class="list-group-item"><a href="viewnews.php?id=<?php echo $_news_val['ID']; ?>"><span class="glyphicon glyphicon-file" aria-hidden="true" style="padding-right: 10px;"></span><?php echo $_news_val['TITLE']; ?></a></li>
	<?php }} ?>
	</ul>
        </div>
</div>