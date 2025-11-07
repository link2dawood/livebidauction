		<div class="row">
			<div class="col-md-3">
				<!-- INCLUDE sidebar-{CURRENT_PAGE}.tpl -->
			</div>
			<div class="col-md-9">
				<ol class="breadcrumb"><i class="fa fa-cogs"></i>  <li>{L_25_0010}</li><li>{L_045}</li><li>{L_222}</li></ol>
				<table class="table table-bordered table-hover table-striped">
					<tr>
						<td align="right" colspan="2"><b>{NICK} ({FB_NUM}) {FB_IMG}</b></td>
					</tr>
<!-- BEGIN feedback -->
					<tr {feedback.BG}>
						<td>
							<img align="middle" src="{SITEURL}images/{feedback.FB_TYPE}.png">&nbsp;&nbsp;<b>{feedback.FB_FROM}</b>&nbsp;&nbsp;<span class="small">({L_506}{feedback.	FB_TIME})</span>
							<p>{feedback.FB_MSG}</p>
						</td>
						<td align="right">
							<a href="edituserfeed.php?id={feedback.FB_ID}">{L_298}</a> | <a href="deleteuserfeed.php?id={feedback.FB_ID}&user={ID}">{L_008}</a>
						</td>
					</tr>
<!-- END feedback -->
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