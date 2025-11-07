<?php if ($this->_rootref['B_COUNTDOWN']) {  ?>
<script type="text/javascript">
$(document).ready(function() {
	var currenttime = '<?php echo (isset($this->_rootref['ENDS_IN'])) ? $this->_rootref['ENDS_IN'] : ''; ?>';
	function padlength(what)
	{
		var output=(what.toString().length == 1)? '0' + what : what;
		return output;
	}
	function displaytime()
	{
		currenttime -= 1;
		if (currenttime > 0){
			var hours = Math.floor(currenttime / 3600);
			var mins = Math.floor((currenttime - (hours * 3600)) / 60);
			var secs = Math.floor(currenttime - (hours * 3600) - (mins * 60));
			var timestring = padlength(hours) + ':' + padlength(mins) + ':' + padlength(secs);
			$("#ending_counter").html(timestring);
			setTimeout(displaytime, 1000);
		} else {
			$("#ending_counter").html('<div class="error-box"><?php echo ((isset($this->_rootref['L_911'])) ? $this->_rootref['L_911'] : ((isset($MSG['911'])) ? $MSG['911'] : '{ L_911 }')); ?></div>');
		}
	}
	setTimeout(displaytime, 1000);
});
</script>


<?php } ?>

<script type="text/javascript">
$(document).ready( function () {
function showHint() 
{
	var random = Math.random( );
	document.getElementById("showText").innerHTML = "Number: " + random;
}
});
</script>


<div class="row">
	<div class="col-md-12">
           <ul class="breadcrumb"><b><?php echo ((isset($this->_rootref['L_041'])) ? $this->_rootref['L_041'] : ((isset($MSG['041'])) ? $MSG['041'] : '{ L_041 }')); ?>:</b> <?php echo (isset($this->_rootref['TOPCATSPATH'])) ? $this->_rootref['TOPCATSPATH'] : ''; ?></ul>
	 

        <div class="panel panel-default sm-padding" style="text-align: right;">
		<?php echo (isset($this->_rootref['VIEW_HISTORY1'])) ? $this->_rootref['VIEW_HISTORY1'] : ''; ?> |
		<a href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>friend.php?id=<?php echo (isset($this->_rootref['ID'])) ? $this->_rootref['ID'] : ''; ?>"><?php echo ((isset($this->_rootref['L_106'])) ? $this->_rootref['L_106'] : ((isset($MSG['106'])) ? $MSG['106'] : '{ L_106 }')); ?></a> | 
<?php if ($this->_rootref['B_CANCONTACTSELLER']) {  ?>
		<a href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>send_email.php?auction_id=<?php echo (isset($this->_rootref['ID'])) ? $this->_rootref['ID'] : ''; ?>"><?php echo ((isset($this->_rootref['L_922'])) ? $this->_rootref['L_922'] : ((isset($MSG['922'])) ? $MSG['922'] : '{ L_922 }')); ?></a> | 
<?php } if ($this->_rootref['B_LOGGED_IN']) {  ?>
		<a href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>item_watch.php?<?php echo (isset($this->_rootref['WATCH_VAR'])) ? $this->_rootref['WATCH_VAR'] : ''; ?>=<?php echo (isset($this->_rootref['ID'])) ? $this->_rootref['ID'] : ''; ?>"><?php echo (isset($this->_rootref['WATCH_STRING'])) ? $this->_rootref['WATCH_STRING'] : ''; ?></a>
<?php } else { ?>
		<a href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>user_login.php?"><?php echo ((isset($this->_rootref['L_5202'])) ? $this->_rootref['L_5202'] : ((isset($MSG['5202'])) ? $MSG['5202'] : '{ L_5202 }')); ?></a>
<?php } ?>
	</div>
<?php if ($this->_rootref['B_USERBID'] && $this->_rootref['TEMP_SUSPEND'] == (1)) {  ?>
	<div class="alert alert-success" role="alert">
		<?php echo (isset($this->_rootref['YOURBIDMSG'])) ? $this->_rootref['YOURBIDMSG'] : ''; ?> <?php echo (isset($this->_rootref['AUCTIONSTATUS'])) ? $this->_rootref['AUCTIONSTATUS'] : ''; ?>
	</div>
	<?php } else if ($this->_rootref['TEMP_SUSPEND'] == 0) {  ?>
	<div class="alert alert-danger" role="alert">
		<?php echo (isset($this->_rootref['SUSPEND_MESSAGE'])) ? $this->_rootref['SUSPEND_MESSAGE'] : ''; ?>
	</div>
<?php } ?>
	
		
            <div class="row grid-padding">
             <div class="col-md-5 col-sm-5 grid-padding">
                <div class="item-title visible-xs text-capitalize"><?php echo (isset($this->_rootref['TITLE'])) ? $this->_rootref['TITLE'] : ''; ?></div>
                 <?php if ($this->_rootref['B_HASIMAGE']) {  ?>
                   <div class="main-gallery panel panel-default">
                        <div class="panel-heading"><span class="label label-default"><?php echo ((isset($this->_rootref['L_113'])) ? $this->_rootref['L_113'] : ((isset($MSG['113'])) ? $MSG['113'] : '{ L_113 }')); ?>: <?php echo (isset($this->_rootref['ID'])) ? $this->_rootref['ID'] : ''; ?></span></div>
                            <div class="panel-body"><div class="col-md-12">
                               <img class="img-rounded img-responsive center-block" src="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>getthumb.php?w=<?php echo (isset($this->_rootref['THUMBWIDTH'])) ? $this->_rootref['THUMBWIDTH'] : ''; ?>&fromfile=<?php echo (isset($this->_rootref['PIC_URL'])) ? $this->_rootref['PIC_URL'] : ''; ?>" border="0" align="center" width="430px"></div>
               <?php if ($this->_rootref['B_HASGALELRY']) {  ?>
                      <div> <a name="gallery"></a>
                            <div id="gallery">
                                <?php $_gallery_count = (isset($this->_tpldata['gallery'])) ? sizeof($this->_tpldata['gallery']) : 0;if ($_gallery_count) {for ($_gallery_i = 0; $_gallery_i < $_gallery_count; ++$_gallery_i){$_gallery_val = &$this->_tpldata['gallery'][$_gallery_i]; ?><div class="col-md-4 col-xs-4 col-sm-4">
				<a href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; echo (isset($this->_rootref['UPLOADEDPATH'])) ? $this->_rootref['UPLOADEDPATH'] : ''; echo (isset($this->_rootref['ID'])) ? $this->_rootref['ID'] : ''; ?>/<?php echo $_gallery_val['V']; ?>" title="">
					<img class="img-rounded img-responsive" src="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>getthumb.php?w=<?php echo (isset($this->_rootref['THUMBWIDTH'])) ? $this->_rootref['THUMBWIDTH'] : ''; ?>&fromfile=<?php echo (isset($this->_rootref['UPLOADEDPATH'])) ? $this->_rootref['UPLOADEDPATH'] : ''; echo (isset($this->_rootref['ID'])) ? $this->_rootref['ID'] : ''; ?>/<?php echo $_gallery_val['V']; ?>" border="0"></a></div>
		                <?php }} ?>
                            </div>
                      </div>
                           </div>
                              <div class="panel-footer"><?php echo ((isset($this->_rootref['L_611'])) ? $this->_rootref['L_611'] : ((isset($MSG['611'])) ? $MSG['611'] : '{ L_611 }')); ?> <font color="#ff3300"><b><?php echo (isset($this->_rootref['AUCTION_VIEWS'])) ? $this->_rootref['AUCTION_VIEWS'] : ''; ?></b></font> <?php echo ((isset($this->_rootref['L_612'])) ? $this->_rootref['L_612'] : ((isset($MSG['612'])) ? $MSG['612'] : '{ L_612 }')); ?></div>
                   </div>
	         
	         <?php } } else { ?>
                        <div class="panel panel-default">
                          <div class="panel-heading"><span class="label label-default"><?php echo ((isset($this->_rootref['L_113'])) ? $this->_rootref['L_113'] : ((isset($MSG['113'])) ? $MSG['113'] : '{ L_113 }')); ?>: <?php echo (isset($this->_rootref['ID'])) ? $this->_rootref['ID'] : ''; ?></span></div>
                            <div class="panel-body">
                         <img class="thumbnail img-responsive center-block" src="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>/themes/<?php echo (isset($this->_rootref['THEME'])) ? $this->_rootref['THEME'] : ''; ?>/img/no-picture-gallery.png" alt="no picture" width="430px" />
                            </div>
                              <div class="panel-footer"><?php echo ((isset($this->_rootref['L_611'])) ? $this->_rootref['L_611'] : ((isset($MSG['611'])) ? $MSG['611'] : '{ L_611 }')); ?> <font color="#ff3300"><b><?php echo (isset($this->_rootref['AUCTION_VIEWS'])) ? $this->_rootref['AUCTION_VIEWS'] : ''; ?></b></font> <?php echo ((isset($this->_rootref['L_612'])) ? $this->_rootref['L_612'] : ((isset($MSG['612'])) ? $MSG['612'] : '{ L_612 }')); ?></div>
                        </div>
                 <?php } ?>
             </div>
             
             <div class="col-md-7 col-sm-7">
                  <div class="item-title hidden-xs text-capitalize"><?php echo (isset($this->_rootref['TITLE'])) ? $this->_rootref['TITLE'] : ''; ?></div>
		<?php if ($this->_rootref['B_CANEDIT']) {  ?>
	  			<a class="btn btn-primary btn-xs" href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>edit_active_auction.php?id=<?php echo (isset($this->_rootref['ID'])) ? $this->_rootref['ID'] : ''; ?>"><?php echo ((isset($this->_rootref['L_30_0069'])) ? $this->_rootref['L_30_0069'] : ((isset($MSG['30_0069'])) ? $MSG['30_0069'] : '{ L_30_0069 }')); ?></a>
                <?php } ?> 
					
				<div class="panel panel-default"> 
					  <table class="table table-bordered table-condensed table-striped">
						<!-- auction type -->
						<tr>
						 <td width="30%" align="left"><?php echo ((isset($this->_rootref['L_261'])) ? $this->_rootref['L_261'] : ((isset($MSG['261'])) ? $MSG['261'] : '{ L_261 }')); ?>: </td>
						  <td align="left">Live Auction</td>
						</tr>
						<!-- higher bidder --><?php if ($this->_rootref['B_HASBUYER'] && $this->_rootref['B_NOTBNONLY']) {  ?>
						<tr>
						  <td width='30%' style="leftpan" valign="top">
							<?php echo ((isset($this->_rootref['L_117'])) ? $this->_rootref['L_117'] : ((isset($MSG['117'])) ? $MSG['117'] : '{ L_117 }')); ?>:
						  </td>
						  <td>
	<?php $_high_bidders_count = (isset($this->_tpldata['high_bidders'])) ? sizeof($this->_tpldata['high_bidders']) : 0;if ($_high_bidders_count) {for ($_high_bidders_i = 0; $_high_bidders_i < $_high_bidders_count; ++$_high_bidders_i){$_high_bidders_val = &$this->_tpldata['high_bidders'][$_high_bidders_i]; if ($this->_rootref['B_BIDDERPRIV']) {  ?>
							<b><?php echo $_high_bidders_val['BUYER_NAME']; ?></b>
		<?php } else { ?>
							<a href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>profile.php?user_id=<?php echo $_high_bidders_val['BUYER_ID']; ?>&auction_id=<?php echo (isset($this->_rootref['ID'])) ? $this->_rootref['ID'] : ''; ?>"><b><?php echo $_high_bidders_val['BUYER_NAME']; ?></b></a>
							<b>(<a href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>feedback.php?id=<?php echo $_high_bidders_val['BUYER_ID']; ?>&faction=show"><?php echo $_high_bidders_val['BUYER_FB']; ?></a>)</b> 
		<?php } ?>
							<?php echo $_high_bidders_val['BUYER_FB_ICON']; ?>
	<?php }} ?>
						  </td>
						 </tr>
<?php } if ($this->_rootref['QTY'] > (1)) {  ?>
						<tr>
						  <td width="30%" align="left"><?php echo ((isset($this->_rootref['L_901'])) ? $this->_rootref['L_901'] : ((isset($MSG['901'])) ? $MSG['901'] : '{ L_901 }')); ?>: </td>
						  <td align="left"><?php echo (isset($this->_rootref['QTY'])) ? $this->_rootref['QTY'] : ''; ?></td>
						</tr>
<?php } if ($this->_rootref['B_NOTBNONLY']) {  ?>
						<tr>
						  <td width="30%" align="left"><?php echo ((isset($this->_rootref['L_119'])) ? $this->_rootref['L_119'] : ((isset($MSG['119'])) ? $MSG['119'] : '{ L_119 }')); ?>: </td>
						  <td align="left"><?php echo (isset($this->_rootref['NUMBIDS'])) ? $this->_rootref['NUMBIDS'] : ''; ?> <?php echo (isset($this->_rootref['VIEW_HISTORY2'])) ? $this->_rootref['VIEW_HISTORY2'] : ''; ?></td>
						</tr>
	<?php if ($this->_rootref['ATYPE'] == (2)) {  ?>
						<tr>
						  <td width="30%" align="left">
						  	<?php echo ((isset($this->_rootref['L_038'])) ? $this->_rootref['L_038'] : ((isset($MSG['038'])) ? $MSG['038'] : '{ L_038 }')); ?>:
						  </td>
						  <td align="left"><?php echo (isset($this->_rootref['MINBID'])) ? $this->_rootref['MINBID'] : ''; ?></td>
						</tr>
	<?php } ?>
						<tr>
						  <td width="30%" align="left"><?php echo ((isset($this->_rootref['L_116'])) ? $this->_rootref['L_116'] : ((isset($MSG['116'])) ? $MSG['116'] : '{ L_116 }')); ?>: </td>
						  <td align="left" valign="middle"><span id="current_bid"><?php echo (isset($this->_rootref['MAXBID'])) ? $this->_rootref['MAXBID'] : ''; ?></span><?php if ($this->_rootref['B_HASRESERVE']) {  ?>&nbsp;<span class="text-muted"><small><?php echo ((isset($this->_rootref['L_514'])) ? $this->_rootref['L_514'] : ((isset($MSG['514'])) ? $MSG['514'] : '{ L_514 }')); ?><small></span><?php } ?></td>
						</tr>
<?php } ?>
						<tr>
						  <td width="30%" align="left"><?php echo ((isset($this->_rootref['L_023'])) ? $this->_rootref['L_023'] : ((isset($MSG['023'])) ? $MSG['023'] : '{ L_023 }')); ?>: </td>
						  <td align="left"><?php echo (isset($this->_rootref['SHIPPING_COST'])) ? $this->_rootref['SHIPPING_COST'] : ''; ?></td>
						</tr>
<?php if ($this->_rootref['B_ADDITIONAL_SHIPPING_COST'] || $this->_rootref['B_BUY_NOW_ONLY']) {  ?>
						<tr>
						  <td width="30%" align="left"><?php echo ((isset($this->_rootref['L_350_1008'])) ? $this->_rootref['L_350_1008'] : ((isset($MSG['350_1008'])) ? $MSG['350_1008'] : '{ L_350_1008 }')); ?>: </td>
						  <td align="left"><?php echo (isset($this->_rootref['ADDITIONAL_SHIPPING_COST'])) ? $this->_rootref['ADDITIONAL_SHIPPING_COST'] : ''; ?></td>
						</tr>
<?php } if ($this->_rootref['B_BUY_NOW']) {  ?>
						<tr>
						  <td width="30%" align="left"><?php echo ((isset($this->_rootref['L_496'])) ? $this->_rootref['L_496'] : ((isset($MSG['496'])) ? $MSG['496'] : '{ L_496 }')); ?>:</td>
						  <td align="left">
						  	<?php echo (isset($this->_rootref['BUYNOW2'])) ? $this->_rootref['BUYNOW2'] : ''; ?>
						  </td>
						</tr>
<?php } if ($this->_rootref['B_HASENDED']) {  ?>
						<tr>
						  <td colspan="2" align="left"><b><?php echo ((isset($this->_rootref['L_904'])) ? $this->_rootref['L_904'] : ((isset($MSG['904'])) ? $MSG['904'] : '{ L_904 }')); ?></b></td>
						</tr>
<?php } ?>
					  </table>
                                       </div>
					
             </div>

			<div class="col-md-7 col-sm-9">
				<div class="panel panel-default">
					<div class="panel-heading"><b>Auction Updates</b></div>

				<div class="panel-body"">
					<div id="somid">
						<p id="demo"><span class='alert alert-success'>Please wait!</span></p>
						<script>
							$(document).ready(function () {
								myFunction();
							});
							function myFunction() 
							{



								var xmlhttp = new XMLHttpRequest();

							    xmlhttp.onreadystatechange = function() {
							        if (xmlhttp.readyState == XMLHttpRequest.DONE) {  
							           if (xmlhttp.status == 200) {
									   var result = JSON.parse(xmlhttp.responseText);
									   
							               document.getElementById("demo").innerHTML = result.result;
							               document.getElementById("current_bid").innerHTML = result.current_bid;
							           }
							           else if (xmlhttp.status == 400) {
							              alert('Something went wrong with the live update...');
							           }
							        }
							    };

							    xmlhttp.open("GET", "https://auction.livebroadcasts.net/func.php?q="+<?php echo (isset($this->_rootref['ID'])) ? $this->_rootref['ID'] : ''; ?>, true);
						        xmlhttp.send();
							  	setTimeout(myFunction, 1000);
							}

						</script>
					</div>
				</div>
			</div>

             <div class="col-md-8 col-sm-12">
				<div class="panel panel-default">
					<div class="panel-heading"><b>Live Stream</b></div>

				<div class="panel-body">
				<div>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/21X5lGlDOfg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				</div>
			</div>

            

		  
<?php if ($this->_rootref['B_HASENDED'] == (false) && $this->_rootref['B_CAN_BUY']) {  ?>
               <div class="well well-sm">
                          <div class="row">
	<?php if ($this->_rootref['B_NOTBNONLY']) {  if ($this->_rootref['TEMP_SUSPEND'] == (1)) {  ?>
		             
				          <form name="bid" action="<?php echo (isset($this->_rootref['BIDURL'])) ? $this->_rootref['BIDURL'] : ''; ?>bid.php" target="_blank" method="post">
				               <div class="form-group">
                                                   <div class="col-md-3 col-md-offset-2">
		                       <?php if ($this->_rootref['QTY'] > (1)) {  ?>
							 <input type="text" class="form-control" name="qty" placeholder="<?php echo ((isset($this->_rootref['L_284'])) ? $this->_rootref['L_284'] : ((isset($MSG['284'])) ? $MSG['284'] : '{ L_284 }')); ?>"> <?php echo (isset($this->_rootref['QTY'])) ? $this->_rootref['QTY'] : ''; ?> <?php echo ((isset($this->_rootref['L_5408'])) ? $this->_rootref['L_5408'] : ((isset($MSG['5408'])) ? $MSG['5408'] : '{ L_5408 }')); ?>
		                       <?php } ?>
							 <input type="text" class="form-control" name="bid" placeholder="<?php echo ((isset($this->_rootref['L_121'])) ? $this->_rootref['L_121'] : ((isset($MSG['121'])) ? $MSG['121'] : '{ L_121 }')); ?>">
                                                   </div>
                                               </div>
                                               <div class="col-md-5">
		                      <?php if ($this->_rootref['ATYPE'] == (1)) {  ?>
						  <div class="bg-warning md-padding"><?php echo ((isset($this->_rootref['L_124'])) ? $this->_rootref['L_124'] : ((isset($MSG['124'])) ? $MSG['124'] : '{ L_124 }')); ?>: <?php echo (isset($this->_rootref['NEXTBID'])) ? $this->_rootref['NEXTBID'] : ''; ?></div><br>
		                      <?php } ?>
					       </div>
				   <div class="col-md-8 col-md-offset-2">
					 <input type="hidden" name="seller_id" value="<?php echo (isset($this->_rootref['SELLER_ID'])) ? $this->_rootref['SELLER_ID'] : ''; ?>">
					 <input type="hidden" name="title" value="<?php echo (isset($this->_rootref['TITLE'])) ? $this->_rootref['TITLE'] : ''; ?>" >
					 <input type="hidden" name="category" value="<?php echo (isset($this->_rootref['CAT_ID'])) ? $this->_rootref['CAT_ID'] : ''; ?>" >
					 <input type="hidden" name="id" value="<?php echo (isset($this->_rootref['ID'])) ? $this->_rootref['ID'] : ''; ?>">
                     <input type="hidden" name="csrftoken" value="<?php echo (isset($this->_rootref['_CSRFTOKEN'])) ? $this->_rootref['_CSRFTOKEN'] : ''; ?>">
					 <input type="submit" name="" value="<?php echo ((isset($this->_rootref['L_30_0208'])) ? $this->_rootref['L_30_0208'] : ((isset($MSG['30_0208'])) ? $MSG['30_0208'] : '{ L_30_0208 }')); ?>" class="form-control btn btn-primary">
                                  </div>
					
				         </form>
						<?php } } else { ?>
                                         <div class="col-md-8 col-md-offset-2">
				<?php echo (isset($this->_rootref['BUYNOW'])) ? $this->_rootref['BUYNOW'] : ''; ?> <a class="btn btn-success btn-block" href="<?php echo (isset($this->_rootref['BIDURL'])) ? $this->_rootref['BIDURL'] : ''; ?>buy_now.php?id=<?php echo (isset($this->_rootref['ID'])) ? $this->_rootref['ID'] : ''; ?>"><?php echo ((isset($this->_rootref['L_496'])) ? $this->_rootref['L_496'] : ((isset($MSG['496'])) ? $MSG['496'] : '{ L_496 }')); ?></a>
                                         </div>


	                              <?php } ?>
                       </div>
               </div> 
                                      
                                      <?php } ?>
                                    
                    </div>
                </div>
             </div></div>


<div class="row">
    <div class="col-md-12">

    
          <div class="panel panel-default">
              <div class="panel-heading">
                 <h3 class="panel-title"><a name="description"></a><?php echo ((isset($this->_rootref['L_018'])) ? $this->_rootref['L_018'] : ((isset($MSG['018'])) ? $MSG['018'] : '{ L_018 }')); ?></h3>
              </div>
                <div class="panel-body">
                <?php echo (isset($this->_rootref['AUCTION_DESCRIPTION'])) ? $this->_rootref['AUCTION_DESCRIPTION'] : ''; ?>
                </div>
          </div>

        <?php if ($this->_rootref['B_HAS_QUESTIONS']) {  ?>
	<div class="panel panel-default">
             <div class="panel-heading">
             <h3 class="panel-title"><a name="questions"></a><?php echo ((isset($this->_rootref['L_552'])) ? $this->_rootref['L_552'] : ((isset($MSG['552'])) ? $MSG['552'] : '{ L_552 }')); ?></h3>
             </div>
                 <div class="panel-body">
        <?php $_questions_count = (isset($this->_tpldata['questions'])) ? sizeof($this->_tpldata['questions']) : 0;if ($_questions_count) {for ($_questions_i = 0; $_questions_i < $_questions_count; ++$_questions_i){$_questions_val = &$this->_tpldata['questions'][$_questions_i]; ?>
      	        <span class="glyphicon glyphicon-comment" aria-hidden="true" style="padding-right: 10px;"></span><?php echo ((isset($this->_rootref['L_5239'])) ? $this->_rootref['L_5239'] : ((isset($MSG['5239'])) ? $MSG['5239'] : '{ L_5239 }')); ?>
                 <div class="well well-sm">
		<?php $_conv_count = (isset($_questions_val['conv'])) ? sizeof($_questions_val['conv']) : 0;if ($_conv_count) {for ($_conv_i = 0; $_conv_i < $_conv_count; ++$_conv_i){$_conv_val = &$_questions_val['conv'][$_conv_i]; ?>
        	<p><span class="text-muted"><small><?php echo $_conv_val['BY_WHO']; ?>:</small></span> <?php echo $_conv_val['MESSAGE']; ?></p>
                <?php }} ?>
                </div>
        <?php }} ?>
                </div>
        </div>
        <?php } ?>
      

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo ((isset($this->_rootref['L_724'])) ? $this->_rootref['L_724'] : ((isset($MSG['724'])) ? $MSG['724'] : '{ L_724 }')); ?></h3>
  </div>
  <div class="panel-body">
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
	  <tr>
		<td>
		  <div class="tableContent2">
			<div class="table2">
<?php if ($this->_rootref['COUNTRY'] != ('') || $this->_rootref['ZIP'] != ('')) {  ?>
			  <b><?php echo ((isset($this->_rootref['L_014'])) ? $this->_rootref['L_014'] : ((isset($MSG['014'])) ? $MSG['014'] : '{ L_014 }')); ?>:</b> <?php echo (isset($this->_rootref['COUNTRY'])) ? $this->_rootref['COUNTRY'] : ''; ?> (<?php echo (isset($this->_rootref['ZIP'])) ? $this->_rootref['ZIP'] : ''; ?>)<br>
<?php } ?>
			  <b><?php echo ((isset($this->_rootref['L_025'])) ? $this->_rootref['L_025'] : ((isset($MSG['025'])) ? $MSG['025'] : '{ L_025 }')); ?>:</b> <?php echo (isset($this->_rootref['SHIPPING'])) ? $this->_rootref['SHIPPING'] : ''; ?>, <?php echo (isset($this->_rootref['INTERNATIONAL'])) ? $this->_rootref['INTERNATIONAL'] : ''; ?><br>
<?php if ($this->_rootref['SHIPPINGTERMS'] != ('')) {  ?>
			  <table border="0" cellpadding="0" cellspacing="0">
				<tr>
				  <td valign="top"><b><?php echo ((isset($this->_rootref['L_25_0215'])) ? $this->_rootref['L_25_0215'] : ((isset($MSG['25_0215'])) ? $MSG['25_0215'] : '{ L_25_0215 }')); ?>:</b>&nbsp;</td>
				  <td valign="top"><?php echo (isset($this->_rootref['SHIPPINGTERMS'])) ? $this->_rootref['SHIPPINGTERMS'] : ''; ?></td>
				</tr>
			  </table>
<?php } ?>
			  <br>
			  <b><?php echo ((isset($this->_rootref['L_026'])) ? $this->_rootref['L_026'] : ((isset($MSG['026'])) ? $MSG['026'] : '{ L_026 }')); ?>:</b> <?php echo (isset($this->_rootref['PAYMENTS'])) ? $this->_rootref['PAYMENTS'] : ''; ?><br>
<?php if (! $this->_rootref['B_BUY_NOW_ONLY']) {  ?>
			  <b><?php if ($this->_rootref['ATYPE'] == (1)) {  echo ((isset($this->_rootref['L_127'])) ? $this->_rootref['L_127'] : ((isset($MSG['127'])) ? $MSG['127'] : '{ L_127 }')); } else { echo ((isset($this->_rootref['L_038'])) ? $this->_rootref['L_038'] : ((isset($MSG['038'])) ? $MSG['038'] : '{ L_038 }')); } ?>:</b> <?php echo (isset($this->_rootref['MINBID'])) ? $this->_rootref['MINBID'] : ''; ?><br>
<?php } ?>
			  <br>
			  <b><?php echo ((isset($this->_rootref['L_113'])) ? $this->_rootref['L_113'] : ((isset($MSG['113'])) ? $MSG['113'] : '{ L_113 }')); ?>:</b> <?php echo (isset($this->_rootref['ID'])) ? $this->_rootref['ID'] : ''; ?><br>
			  <br>
			  <b><?php echo ((isset($this->_rootref['L_041'])) ? $this->_rootref['L_041'] : ((isset($MSG['041'])) ? $MSG['041'] : '{ L_041 }')); ?>:</b> <?php echo (isset($this->_rootref['CATSPATH'])) ? $this->_rootref['CATSPATH'] : ''; ?><br>
              <?php if ($this->_rootref['SECCATSPATH'] != ('')) {  ?><b><?php echo ((isset($this->_rootref['L_814'])) ? $this->_rootref['L_814'] : ((isset($MSG['814'])) ? $MSG['814'] : '{ L_814 }')); ?>:</b> <?php echo (isset($this->_rootref['SECCATSPATH'])) ? $this->_rootref['SECCATSPATH'] : ''; } ?>
			</div>
		  </div>
		</td>
	  </tr>
	</table>
  </div>
</div>

        <?php if ($this->_rootref['B_SHOWHISTORY']) {  ?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><a name="history"></a><?php echo ((isset($this->_rootref['L_26_0001'])) ? $this->_rootref['L_26_0001'] : ((isset($MSG['26_0001'])) ? $MSG['26_0001'] : '{ L_26_0001 }')); ?></h3>
  </div>
  <div class="panel-body">
    <table class="table table-bordered table-striped table-condensed">
			<tr>
				<th width="33%" align="center"><?php echo ((isset($this->_rootref['L_176'])) ? $this->_rootref['L_176'] : ((isset($MSG['176'])) ? $MSG['176'] : '{ L_176 }')); ?></th>
				<th width="33%" align="center"><?php echo ((isset($this->_rootref['L_130'])) ? $this->_rootref['L_130'] : ((isset($MSG['130'])) ? $MSG['130'] : '{ L_130 }')); ?></th>
				<th width="33%" align="center"><?php echo ((isset($this->_rootref['L_175'])) ? $this->_rootref['L_175'] : ((isset($MSG['175'])) ? $MSG['175'] : '{ L_175 }')); ?></th>
	<?php if ($this->_rootref['ATYPE'] == (2)) {  ?>
				<th width="33%" align="center"><?php echo ((isset($this->_rootref['L_284'])) ? $this->_rootref['L_284'] : ((isset($MSG['284'])) ? $MSG['284'] : '{ L_284 }')); ?></th>
	<?php } ?>
			</tr>
	<?php $_bidhistory_count = (isset($this->_tpldata['bidhistory'])) ? sizeof($this->_tpldata['bidhistory']) : 0;if ($_bidhistory_count) {for ($_bidhistory_i = 0; $_bidhistory_i < $_bidhistory_count; ++$_bidhistory_i){$_bidhistory_val = &$this->_tpldata['bidhistory'][$_bidhistory_i]; ?>
			<tr valign="top" <?php echo $_bidhistory_val['BGCOLOUR']; ?>>
				<td>
		<?php if ($this->_rootref['B_BIDDERPRIV']) {  ?>
					<?php echo $_bidhistory_val['NAME']; ?>
		<?php } else { ?>
					<a href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>profile.php?user_id=<?php echo $_bidhistory_val['ID']; ?>"><?php echo $_bidhistory_val['NAME']; ?></a>
		<?php } ?>
				</td>
				<td align="center">
					<?php echo $_bidhistory_val['BID']; ?>
				</td>
				<td align="center">
					<?php echo $_bidhistory_val['WHEN']; ?>
				</td>
		<?php if ($this->_rootref['ATYPE'] == (2)) {  ?>
				<td align="center">
					<?php echo $_bidhistory_val['QTY']; ?>
				</td>
		<?php } ?>
			</tr>
	<?php }} ?>
		</table>
  </div>
</div>
<?php } ?>

</div>
</div>
</div>
</div>