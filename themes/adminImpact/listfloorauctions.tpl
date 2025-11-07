		<div class="row">
			<div class="col-md-3">
				<!-- INCLUDE sidebar-{CURRENT_PAGE}.tpl -->
			</div>
			<div class="col-md-9">
				<ol class="breadcrumb"><i class="fa fa-cogs"></i>  <li>{L_239}</li><li>{PAGE_TITLE}</li></ol>
				<div class="alert alert-info"><i class="fa fa-info-circle"></i> {NUM_AUCTIONS} {L_311}<!-- IF B_SEARCHUSER --> {L_934}{USERNAME}<!-- ENDIF --></div>
					<!-- IF TITLE_MESSAGE ne '' -->
						<div class="alert alert-danger" role="alert">
							
							{BODY_MESSAGE}
							{TITLE_MESSAGE}
						</div>
				<!-- ENDIF -->
				<!-- IF ERROR ne '' -->
						<div class="alert alert-danger" role="alert">
							
							{ERROR}
						</div>
				<!-- ENDIF -->
				<table class="table table-bordered table-hover table-striped">
				<tr>
					<th align="center" style="width:12%"><b>{L_017}</b></th>
					<th align="center"><b>Auction: ID</b></th>
					<th align="left"><b>Floor Bid</b></th>
					
					<th align="left"><b>Winning Bidder No.</b></th>
				
				<tr>
				<!-- BEGIN auctions -->
				<tr {auctions.BG}>
					<td>
						<!-- IF auctions.SUSPENDED eq 1 -->
						<span style="color:#FF0000">{auctions.TITLE}</span>
						<!-- ELSE -->
						{auctions.TITLE}
						<!-- ENDIF -->
						<p><a class="btn btn-default btn-xs" href="{SITEURL}item.php?id={auctions.ID}" target="_blank">{L_5295}</a></p>
					</td>
					<td>
						{auctions.ID}
					</td>
					<td align="left">
					<form class="form-horizontal" id = "confirmBid" name="bid" action="bid.php" method="post">
					     <input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
							<input type="hidden" name="id" value="{auctions.ID}">
							<input type="hidden" name="action" value="bid">
							<input type="text" class="input-sm bid-offer" name="bid" placeholder="Place Bid Here:">
							<input type="submit" name="" value="Place Bid" class="btn btn-success btn-xs">
						
						</form>
					</td>
					<td>
						<form class="form-horizontal" id = "confirmBid" name="bid" action="going.php" method="post">
					     <input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
							<input type="hidden" name="id" value="{auctions.ID}">
							<input type="hidden" name="going" value="3">
							<input type="text" class="input-sm bid-offer" name="bidder" placeholder="Winner ID:">
							<input type="submit" name="" value="Sold" class="btn btn-success btn-xs">
						
						</form>
						
					</td>
					
				</tr>
				<!-- END auctions -->
				</table>
				<table width="98%" cellpadding="0" cellspacing="0" class="blank">
					<tr>
						<td align="center">
							{L_5117}&nbsp;{PAGE}&nbsp;{L_5118}&nbsp;{PAGES}
							<br>
							{PREV}
<!-- BEGIN pages -->
							{pages.PAGE}&nbsp;&nbsp;
<!-- END pages -->
							{NEXT}
						</td>
					</tr>
				</table>
			</div>
		</div>