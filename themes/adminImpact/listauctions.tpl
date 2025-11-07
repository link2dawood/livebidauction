		<div class="row">
			<div class="col-md-3">
				<!-- INCLUDE sidebar-{CURRENT_PAGE}.tpl -->
			</div>
			<div class="col-md-9">
				<ol class="breadcrumb"><i class="fa fa-cogs"></i>  <li>{L_239}</li><li>{PAGE_TITLE}</li></ol>
				<div class="alert alert-info"><i class="fa fa-info-circle"></i> {NUM_AUCTIONS} {L_311}<!-- IF B_SEARCHUSER --> {L_934}{USERNAME}<!-- ENDIF --></div>
				<table class="table table-bordered table-hover table-striped">
				<tr>
					<th align="center"><b>{L_017}</b></th>
					<th align="center"><b>{L_557}</b></th>
					<th align="left"><b>{L_297}</b></th>
					<th align="left"><b>Go Once</b></th>
					<th align="left"><b>Go Twice</b></th>
					<th align="left"><b>Sold</b></th>
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
						<small><b>{L_003}:</b></small> {auctions.USERNAME}<br>
						<small><b>{L_625}:</b></small> {auctions.START_TIME}<br>
						<small><b>{L_626}:</b></small> {auctions.END_TIME}<br>
						<small><b>{L_041}:</b></small> {auctions.CATEGORY}
					</td>
					<td align="left">
					    <div class="btn-group" role="group" aria-label="...">
						<a class="btn btn-success btn-xs" href="editauction.php?id={auctions.ID}&offset={PAGE}" title="{L_298}"><i class="fa fa-edit"></i></a>
						<a class="btn btn-danger btn-xs"href="deleteauction.php?id={auctions.ID}&offset={PAGE}" title="{L_008}"><i class="fa fa-trash"></i></a>
						<a class="btn btn-success btn-xs" href="livestream_date.php?id={auctions.ID}" title="Add livestream Date">Add livestream Date</a>
						<a class="btn btn-warning btn-xs"href="excludeauction.php?id={auctions.ID}&offset={PAGE}" title="">
					<!-- IF auctions.SUSPENDED eq 0 -->
						{L_300}
					<!-- ELSE -->
						{L_310}
					<!-- ENDIF -->
						</a>
					<!-- IF auctions.IN_MODERATION_QUEUE -->
						<br><a href="removefrommoderation.php?id={auctions.ID}&offset={PAGE}">{L_moderator_dismiss}</a>
					<!-- ENDIF -->
					<!-- IF auctions.B_HASWINNERS -->
						<br><a href="viewwinners.php?id={auctions.ID}&offset={PAGE}">{L__0163}</a></br>
						<a class="btn btn-warning btn-xs" href="going.php?id={auctions.ID}&going=4" title="{L_630}">{L_630}</a>

					<!-- ENDIF -->
					</div>
					</td>
					<td>
						<a class="btn btn-warning btn-xs" href="going.php?id={auctions.ID}&going=1" title="{L_298}">Click</a>
					</td>
					<td>
						<a class="btn btn-danger btn-xs" href="going.php?id={auctions.ID}&going=2" title="{L_298}">Click</a>
					</td>
					<td>
						<a class="btn btn-success btn-xs" href="going.php?id={auctions.ID}&going=3" title="{L_298}">Click</a>
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
