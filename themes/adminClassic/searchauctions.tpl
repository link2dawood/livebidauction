		<div class="row">
			<div class="col-md-3">
				<!-- INCLUDE sidebar-{CURRENT_PAGE}.tpl -->
			</div>
			<div class="col-md-9">
				<ol class="breadcrumb"><i class="fa fa-cogs"></i>  <li>{L_239}</li><li>{PAGE_TITLE}</li></ol>
				<div>
					<form name="searchauctionform" method="get" action="searchauctions.php">
						<input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
						<table class="table table-bordered table-hover table-striped">
							<tr>
								<td>{L_113}</td>
								<td>
									<input type="text" class="form-control" size="11" maxlength="11" name="auctionid" value="{AUCTIONID}"> {L_RPT_23}
								</td>
							</tr>
							<tr>
								<td>{L_25_0004}</td>
								<td>
									<input type="text" class="form-control" size="11" maxlength="32" name="usernick" value="{USERNICK}"> {L_RPT_23}
								</td>
							</tr>
							<tr>
								<td>{L_RPT_22}</td>
								<td>
									<input type="text" class="form-control" size="11" maxlength="11" name="userid" value="{USERID}"> {L_RPT_23}
								</td>
							</tr>
							<tr>
								<td>{L_017}</td>
								<td>
									<input type="text" class="form-control" size="11" maxlength="20" name="titlekeywords" value="{TITLEKEYWORDS}"> {L_RPT_23}
								</td>
							</tr>
							<tr>
								<td>{L_261}</td>
								<td>
									{AUCTIONTYPE}
								</td>
							</tr>
							<tr>
								<td colspan="2" class="centered">
									<input class="btn btn-primary" name="submit" type="submit" value="{L_199}">
									<input class="btn btn-warning" name="reset" type="button" onclick="javascript: this.form.auctionid.value = ''; this.form.usernick.value = ''; this.form.userid.value = ''; this.form.titlekeywords.value = ''; this.form.auctiontype[0].checked = true;" value="{L_035}">
								</td>
							</tr>
						</table>
					</form>
				</div>
				<div class="alert alert-info">{NUM_AUCTIONS} {L_311}<!-- IF B_SEARCHUSER --> {L_934}{USERNICK}<!-- ENDIF --></div>
				<table class="table table-bordered table-hover table-striped">
					<tr>
						<th align="center"><b>{L_017}</b></th>
						<th align="center"><b>{L_557}</b></th>
						<th align="left"><b>{L_297}</b></th>
					<tr>
<!-- BEGIN auctions -->
					<tr {auctions.BG}>
						<td>
	<!-- IF auctions.SUSPENDED eq 1 -->
							<span style="color:#FF0000">{auctions.TITLE}</span>
	<!-- ELSE -->
							{auctions.TITLE}
	<!-- ENDIF -->
							<p>[ <a href="/item.php?id={auctions.ID}" target="_blank">{L_5295}</a> ]</p>
						</td>
						<td>
							<b>{L_003}:</b> {auctions.USERNAME}<br>
							<b>{L_625}:</b> {auctions.START_TIME}<br>
							<b>{L_626}:</b> {auctions.END_TIME}<br>
							<b>{L_041}:</b> {auctions.CATEGORY}
						</td>
						<td align="left">
							<a class="btn btn-success btn-xs" href="editauction.php?id={auctions.ID}&offset={PAGE}">{L_298} <i class="fa fa-edit"></i></a><br>
							<a class="btn btn-danger btn-xs" href="deleteauction.php?id={auctions.ID}&offset={PAGE}">{L_008} <i class="fa fa-trash"></i></a><br>
							<a class="btn btn-warning btn-xs" href="excludeauction.php?id={auctions.ID}&offset={PAGE}">
	<!-- IF auctions.SUSPENDED eq 0 -->
							{L_300}
	<!-- ELSE -->
							{L_310}
	<!-- ENDIF -->
							</a>
	<!-- IF auctions.B_HASWINNERS -->
							<br><a href="viewwinners.php?id={auctions.ID}&offset={PAGE}">{L__0163}</a>
	<!-- ENDIF -->
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