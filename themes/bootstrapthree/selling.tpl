<!-- INCLUDE user_menu_header.tpl -->
<!-- BEGIN a -->
	<!-- BEGIN w -->
	     <div class="panel panel-default">
                   <div class="panel-heading">
			<a href="{SITEURL}item.php?id={a.AUCTIONID}" target="_blank">{a.TITLE}</a> <small><span class="text-muted"> (ID: <a href="{SITEURL}item.php?id={a.AUCTIONID}" target="_blank">{a.AUCTIONID}</a> - {L_25_0121} {a.ENDS})</span></small>
                   </div>
                   <div class="panel-body">
                   <div class="col-md-8 col-sm-7">
			<p><small><span class="text-muted">{L_455}:</span></small> <a href="{SITEURL}profile.php?user_id={a.w.WINNERID}&auction_id={a.AUCTIONID}">{a.w.NICK}</a> {a.w.FB}<br>
		
			<small><span class="text-muted">{L_457}:</span></small> {a.w.BIDF}<br>
		
			<small><span class="text-muted">{L_284}:</span></small> {a.w.QTY}</p>
		    </div>
                    <div class="col-md-4 col-sm-5 text-right">
                        <form name="" method="post" action="{SITEURL}order_packingslip.php" id="fees" target="_blank">
				<input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
				<input type="hidden" name="pfval" value="{a.AUCTIONID}">
				<input type="hidden" name="pfwon" value="{a.w.ID}">
				<input type="hidden" name="user_id" value="{SELLER_ID}">
                                <input type="submit" type="button" class="btn btn-default btn-xs" value="Print Packingslip">
<!-- IF a.w.B_PAID -->
			<span class="btn btn-success btn-xs">{L_898}</span>
<!-- ELSE -->
			<a class="btn btn-warning btn-xs" href="{SITEURL}selling.php?paid={a.w.ID}{AUCID}">{L_899}</a>
<!-- ENDIF -->
				
			</form>

                 </div>
		</div>
           </div>
	<!-- END w -->
<!-- END a -->


<!-- IF NUM_WINNERS eq 0 -->
	<div class="alert alert-danger" role="alert">
			{L_198}
	</div>
<!-- ENDIF -->


<!-- INCLUDE user_menu_footer.tpl -->