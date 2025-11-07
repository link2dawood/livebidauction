<small><span class="text-muted"><?php echo ((isset($this->_rootref['L_5117'])) ? $this->_rootref['L_5117'] : ((isset($MSG['5117'])) ? $MSG['5117'] : '{ L_5117 }')); ?>&nbsp;<?php echo (isset($this->_rootref['PAGE'])) ? $this->_rootref['PAGE'] : ''; ?>&nbsp;<?php echo ((isset($this->_rootref['L_5118'])) ? $this->_rootref['L_5118'] : ((isset($MSG['5118'])) ? $MSG['5118'] : '{ L_5118 }')); ?>&nbsp;<?php echo (isset($this->_rootref['PAGES'])) ? $this->_rootref['PAGES'] : ''; ?></span></small>
<?php if ($this->_rootref['B_FEATURED_ITEMS']) {  ?>
<div class="row">
<div class="col-md-12">
	<table class="table table-condensed table-hover">
                   <tr>
		    <th width="15%" class="tr-image"> <small><?php echo ((isset($this->_rootref['L_741'])) ? $this->_rootref['L_741'] : ((isset($MSG['741'])) ? $MSG['741'] : '{ L_741 }')); ?></small> </th>
		    <th class="tr-title"> <small><?php echo ((isset($this->_rootref['L_017'])) ? $this->_rootref['L_017'] : ((isset($MSG['017'])) ? $MSG['017'] : '{ L_017 }')); ?></small> </th>
		    <th width="10%" class="tr-bids"> <small><?php echo ((isset($this->_rootref['L_169'])) ? $this->_rootref['L_169'] : ((isset($MSG['169'])) ? $MSG['169'] : '{ L_169 }')); ?></small> </th>
		    
		    <th width="8%" class="hidden-xs tr-bindsno"> <small><?php echo ((isset($this->_rootref['L_170'])) ? $this->_rootref['L_170'] : ((isset($MSG['170'])) ? $MSG['170'] : '{ L_170 }')); ?></small> </th>
		    <th width="18%" class="tr-timeleft hidden-xs"> <small><?php echo ((isset($this->_rootref['L_171'])) ? $this->_rootref['L_171'] : ((isset($MSG['171'])) ? $MSG['171'] : '{ L_171 }')); ?></small> </th>
		  </tr>
    
     <?php $_featured_items_count = (isset($this->_tpldata['featured_items'])) ? sizeof($this->_tpldata['featured_items']) : 0;if ($_featured_items_count) {for ($_featured_items_i = 0; $_featured_items_i < $_featured_items_count; ++$_featured_items_i){$_featured_items_val = &$this->_tpldata['featured_items'][$_featured_items_i]; ?>
		<tr align="center">
			<td align="center">
				<a href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>item.php?id=<?php echo $_featured_items_val['ID']; ?>"><img class="search-res img-rounded" src="<?php echo $_featured_items_val['IMAGE']; ?>" border="0"></a>
			</td>
			<td align="left"<?php if ($_featured_items_val['B_BOLD']) {  ?> style="font-weight: bold;"<?php } ?>>
                <a href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>item.php?id=<?php echo $_featured_items_val['ID']; ?>" class="bigfont"><?php echo $_featured_items_val['TITLE']; ?></a>
				<?php if ($this->_rootref['B_SUBTITLE'] && $_featured_items_val['SUBTITLE'] != ('')) {  ?><p><small><?php echo $_featured_items_val['SUBTITLE']; ?></small></p><?php } ?>
				
			</td>
			<td align="center">
	<?php if ($_featured_items_val['BUY_NOW'] != ('')) {  ?>
				<div class="buy-now-feat text-center"><?php echo $_featured_items_val['BUY_NOW']; ?></div><br>
	<?php } else { ?>
				<div class="no-buy-now-feat"><?php echo ((isset($this->_rootref['L_951'])) ? $this->_rootref['L_951'] : ((isset($MSG['951'])) ? $MSG['951'] : '{ L_951 }')); ?></div><br>
	<?php } ?>
                        <?php echo $_featured_items_val['BIDFORM']; ?><span class="label label-success visible-xs"><?php echo $_featured_items_val['NUMBIDS']; ?></span>
			</td>
			<td class="hidden-xs" align="center">
				
				<span class="label label-success"><?php echo $_featured_items_val['NUMBIDS']; ?></span>
			</td>
                        <td class="hidden-xs"><?php echo ((isset($this->_rootref['L_949'])) ? $this->_rootref['L_949'] : ((isset($MSG['949'])) ? $MSG['949'] : '{ L_949 }')); ?> <?php echo $_featured_items_val['CLOSES']; ?>
                        </td>
		</tr>
    <?php }} ?>
	</table>
</div>
</div>
    <br class="spacer">
<?php } ?>
<div class="row">
<div class="col-md-12">
	<table class="table table-condensed table-hover">
                  <tr>
		    <th width="12%" class="tr-image"> <small><?php echo ((isset($this->_rootref['L_741'])) ? $this->_rootref['L_741'] : ((isset($MSG['741'])) ? $MSG['741'] : '{ L_741 }')); ?></small> </th>
		    <th class="tr-title"> <small><?php echo ((isset($this->_rootref['L_017'])) ? $this->_rootref['L_017'] : ((isset($MSG['017'])) ? $MSG['017'] : '{ L_017 }')); ?></small> </th>
		    <th width="10%" class="tr-bids"> <small><?php echo ((isset($this->_rootref['L_169'])) ? $this->_rootref['L_169'] : ((isset($MSG['169'])) ? $MSG['169'] : '{ L_169 }')); ?></small> </th>
		    
		    <th width="8%" class="hidden-xs tr-bindsno"> <small><?php echo ((isset($this->_rootref['L_170'])) ? $this->_rootref['L_170'] : ((isset($MSG['170'])) ? $MSG['170'] : '{ L_170 }')); ?></small> </th>
		    <th width="18%" class="tr-timeleft hidden-xs"> <small><?php echo ((isset($this->_rootref['L_171'])) ? $this->_rootref['L_171'] : ((isset($MSG['171'])) ? $MSG['171'] : '{ L_171 }')); ?></small> </th>
		  </tr>
<?php $_items_count = (isset($this->_tpldata['items'])) ? sizeof($this->_tpldata['items']) : 0;if ($_items_count) {for ($_items_i = 0; $_items_i < $_items_count; ++$_items_i){$_items_val = &$this->_tpldata['items'][$_items_i]; ?>
		<tr align="center" <?php echo $_items_val['ROWCOLOUR']; ?>>
			<td align="center">
				<a href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>item.php?id=<?php echo $_items_val['ID']; ?>"><img class="search-res img-rounded" src="<?php echo $_items_val['IMAGE']; ?>" border="0"></a>
			</td>
			<td align="left"<?php if ($_items_val['B_BOLD']) {  ?> style="font-weight: bold;"<?php } ?>>
                <a href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>item.php?id=<?php echo $_items_val['ID']; ?>" class="bigfont"><?php echo $_items_val['TITLE']; ?></a>
				<?php if ($this->_rootref['B_SUBTITLE'] && $_items_val['SUBTITLE'] != ('')) {  ?><p><small><?php echo $_items_val['SUBTITLE']; ?></small></p><?php } ?>
				
			</td>
			<td align="center">
	<?php if ($_items_val['BUY_NOW'] != ('')) {  ?>
				<div class="buy-now-feat text-center"><?php echo $_items_val['BUY_NOW']; ?></div><br>
	<?php } else { ?>
				<div class="no-buy-now-feat"><?php echo ((isset($this->_rootref['L_951'])) ? $this->_rootref['L_951'] : ((isset($MSG['951'])) ? $MSG['951'] : '{ L_951 }')); ?></div><br>
	<?php } ?>
                      <?php echo $_items_val['BIDFORM']; ?><span class="label label-success visible-xs"><?php echo $_items_val['NUMBIDS']; ?></span>
			</td>
			<td align="center" class="hidden-xs">
				
				<span class="label label-success"><?php echo $_items_val['NUMBIDS']; ?></span>
			</td>
                        <td class="hidden-xs"><?php echo ((isset($this->_rootref['L_949'])) ? $this->_rootref['L_949'] : ((isset($MSG['949'])) ? $MSG['949'] : '{ L_949 }')); ?> <?php echo $_items_val['CLOSES']; ?>
                        </td>
		</tr>
<?php }} ?>
		
	</table>
<div class="text-center">
			<td><?php echo ((isset($this->_rootref['L_290'])) ? $this->_rootref['L_290'] : ((isset($MSG['290'])) ? $MSG['290'] : '{ L_290 }')); ?> <?php echo (isset($this->_rootref['NUM_AUCTIONS'])) ? $this->_rootref['NUM_AUCTIONS'] : ''; ?></td>
		</div>
</div>
</div>
	<table width="100%" cellpadding="0" cellspacing="0" border="0">
		<tr>
			<td align="center">

				<small><span class="text-muted"><?php echo ((isset($this->_rootref['L_5117'])) ? $this->_rootref['L_5117'] : ((isset($MSG['5117'])) ? $MSG['5117'] : '{ L_5117 }')); ?>&nbsp;<?php echo (isset($this->_rootref['PAGE'])) ? $this->_rootref['PAGE'] : ''; ?>&nbsp;<?php echo ((isset($this->_rootref['L_5118'])) ? $this->_rootref['L_5118'] : ((isset($MSG['5118'])) ? $MSG['5118'] : '{ L_5118 }')); ?>&nbsp;<?php echo (isset($this->_rootref['PAGES'])) ? $this->_rootref['PAGES'] : ''; ?></span></small>
<nav>
  <ul class="pagination">
				<br>
				<li><?php echo (isset($this->_rootref['PREV'])) ? $this->_rootref['PREV'] : ''; ?></li>
<?php $_pages_count = (isset($this->_tpldata['pages'])) ? sizeof($this->_tpldata['pages']) : 0;if ($_pages_count) {for ($_pages_i = 0; $_pages_i < $_pages_count; ++$_pages_i){$_pages_val = &$this->_tpldata['pages'][$_pages_i]; ?>
				<li><?php echo $_pages_val['PAGE']; ?></li>
<?php }} ?>
				<li><?php echo (isset($this->_rootref['NEXT'])) ? $this->_rootref['NEXT'] : ''; ?></li>
</ul>
</nav>
			</td>
		</tr>
	</table>