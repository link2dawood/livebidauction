		<div class="row">
			<div class="col-md-3">
				<!-- INCLUDE sidebar-{CURRENT_PAGE}.tpl -->
			</div>
			<div class="col-md-9">
				<ol class="breadcrumb"><i class="fa fa-money"></i>  <li>{L_25_0012}</li><li>{L_854}</li></ol>
				
					<form action="" method="get">
					    <div class="panel panel-default">
						<div class="panel-body">
					<input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
					<table cellpadding="0" cellspacing="0" width="100%" class="blank">
					<tr>
						<td>{L_313}</td>
						<td>
							<input type="text" class="form-control" name="username" value="{USER_SEARCH}">
						</td>
					</tr>
					<tr>
						<td>{L_856}</td>
						<td>
						<input type="text" class="form-control" name="from_date" id="from_date" value="{FROM_DATE}" size="20" maxlength="19">
						<script type="text/javascript">
							new tcal ({'id': 'from_date','controlname': 'from_date'});
						</script>
						-
						<input type="text" class="form-control" name="to_date" id="to_date" value="{TO_DATE}" size="20" maxlength="19">
						<script type="text/javascript">
							new tcal ({'id': 'to_date','controlname': 'to_date'});
						</script>
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>
							<input type="submit" class="btn btn-primary" name="act" value="{L_275}">
						</td>
					</tr>
					</table>
					</div>
					</div>
					</form>
				
				
				<div class="panel panel-default">
						<div class="panel-body">
				<table width="98%" cellpadding="0" cellspacing="0">
				<tr>
					<th align="center">{L_1041}</th>
<!-- IF NO_USER_SEARCH -->
					<th align="center">{L_313}</th>
<!-- ENDIF -->
					<th>{L_1039}</th>
					<th align="center">{L_1053}</th>
					<th align="center">{L_560}</th>
				</tr>
<!-- BEGIN invoices -->
				<tr>
					<td align="center">
						<span class="titleText125">{L_1041}: {invoices.INVOICE}</span>
						<p class="smallspan">{invoices.DATE}</p>
					</td>
	<!-- IF NO_USER_SEARCH -->
					<td align="center">{invoices.USER}</td>
	<!-- ENDIF -->
					<td>{invoices.INFO}</td>
					<td align="center">{invoices.TOTAL}</td>
					<td align="center">
						<!-- IF invoices.PAID --><p>{L_898}</p><!-- ENDIF --><a href="{SITEURL}order_print.php?id={invoices.INVOICE}&hash={HASH}" tagret="_blank">{L_1058}</a>
					</td>
				</tr>
<!-- END invoices -->
				</table>
				</div>
				</div>
<!-- IF PAGNATION -->
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
<!-- ENDIF -->
			</div>
		</div>
		</div>