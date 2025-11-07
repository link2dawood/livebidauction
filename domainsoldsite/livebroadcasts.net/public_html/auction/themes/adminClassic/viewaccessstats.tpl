		<div class="row">
			<div class="col-md-3">
				<!-- INCLUDE sidebar-{CURRENT_PAGE}.tpl -->
			</div>
			<div class="col-md-9">
				<ol class="breadcrumb"><i class="fa fa-cogs"></i>  <li>{L_25_0023}</li><li>{L_5143}</li></ol>
				<div class="panel panel-default">
						<div class="panel-body">
				            <div style="font-size: 16px; font-weight: bold; text-align: center;" class="centre">
					        {L_5158}<i>{SITENAME}</i><br>
				        	{STATSMONTH}
				            </div>
				
				            <div style="text-align: center;" class="centre">
					        <a href="viewbrowserstats.php">{L_5165}</a> | <a href="viewplatformstats.php">{L_5318}</a>
				            </div>
				        </div>
				</div>
				<table class="table table-bordered table-hover table-striped">
					<tr>
						<td colspan="3"><b>{L_5164}</b></td>
					</tr>
					<tr>
						<td width="22" bgcolor="#3c763d">&nbsp;</td>
						<td width="144"><b>&nbsp;{L_5161} : </b></td>
						<td width="78"><b>{TOTAL_PAGEVIEWS}</b></td>
					</tr>
					<tr>
						<td bgcolor="#a94442">&nbsp;</td>
						<td><b>&nbsp;{L_5162} : </b></td>
						<td><b>{TOTAL_UNIQUEVISITORS}</b></td>
					</tr>
					<tr>
						<td bgcolor="#31708f">&nbsp;</td>
						<td><b>&nbsp;{L_5163} :</b></td>
						<td><b>{TOTAL_USERSESSIONS}</b></td>
					</tr>
				</table>

				<table class="table table-bordered table-hover table-striped">
					<tr>
						<th align="center" width="80"><b>{STATSTEXT}</b></td>
						<th height="21" style="text-align:right;">{L_829}<a href="viewaccessstats.php?type=d">{L_109}</a>/ <a href="viewaccessstats.php?type=w">{L_828}</a>/ <a href="	viewaccessstats.php?type=m">{L_830}</a></td>
					</tr>
<!-- BEGIN sitestats -->
					<tr class="bg">
						<td align="center" height="45"><b>{sitestats.DATE}</b></td>
						<td>
	<!-- IF sitestats.PAGEVIEWS eq 0 -->
							<div style="height:20px;"><b>0</b></div>
	<!-- ELSE -->
							<div style="height:20px; margin-bottom: 2px; width:{sitestats.PAGEVIEWS_WIDTH}%; background-color:#3c763d; color:#FFFFFF;"><b> {sitestats.PAGEVIEWS}</b></div>
	<!-- ENDIF -->
	<!-- IF sitestats.UNIQUEVISITORS eq 0 -->
							<div style="height:20px;"><b>0</b></div>
	<!-- ELSE -->
							<div style="height:20px; margin-bottom: 2px; width:{sitestats.UNIQUEVISITORS_WIDTH}%; background-color:#a94442; color:#FFFFFF;"><b> {sitestats.UNIQUEVISITORS}</b></div>
	<!-- ENDIF -->
	<!-- IF sitestats.USERSESSIONS eq 0 -->
							<div style="height:20px;"><b>0</b></div>
	<!-- ELSE -->
							<div style="height:20px; margin-bottom: 2px; width:{sitestats.USERSESSIONS_WIDTH}%; background-color:#31708f; color:#FFFFFF;"><b> {sitestats.USERSESSIONS}</b></div>
	<!-- ENDIF -->
						</td>
					</tr>
<!-- END sitestats -->
				</table>
			</div>
		</div>