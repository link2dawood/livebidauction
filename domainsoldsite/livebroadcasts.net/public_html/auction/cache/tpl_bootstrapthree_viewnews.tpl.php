<div class="row">
	<div class="col-md-offset-2 col-md-8">
		<div class="well">
			<legend><?php echo (isset($this->_rootref['TITLE'])) ? $this->_rootref['TITLE'] : ''; ?></legend>
		<?php $_list_count = (isset($this->_tpldata['list'])) ? sizeof($this->_tpldata['list']) : 0;if ($_list_count) {for ($_list_i = 0; $_list_i < $_list_count; ++$_list_i){$_list_val = &$this->_tpldata['list'][$_list_i]; ?>
			<p><a href="viewnews.php?id=<?php echo $_list_val['ID']; ?>"><?php echo $_list_val['TITLE']; ?></a> - <?php echo $_list_val['DATE']; ?></p>
                <?php }} $_news_count = (isset($this->_tpldata['news'])) ? sizeof($this->_tpldata['news']) : 0;if ($_news_count) {for ($_news_i = 0; $_news_i < $_news_count; ++$_news_i){$_news_val = &$this->_tpldata['news'][$_news_i]; ?>
			<?php echo $_news_val['CONT']; ?>
                <?php }} ?>
		
                </div>
	</div>
</div>