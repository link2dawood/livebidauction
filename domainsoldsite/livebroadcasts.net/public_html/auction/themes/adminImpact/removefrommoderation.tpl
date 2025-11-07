		<div class="row">
			<div class="col-md-3">
				<!-- INCLUDE sidebar-{CURRENT_PAGE}.tpl -->
			</div>
			<div class="col-md-9">
				<ol class="breadcrumb"><i class="fa fa-cogs"></i>  <li>{L_239}</li><li>{PAGE_TITLE}</li></ol>
				<table class="table table-bordered table-hover table-striped">
					<tr>
						<td width="20%">{L_312}</td>
						<td>{TITLE}</td>
					</tr>
					<tr>
						<td>{L_313}</td>
						<td>{NICK}</td>
					</tr>
					<tr>
						<td>{L_314}</td>
						<td>{STARTS}</td>
					</tr>
					<tr>
						<td>{L_022}</td>
						<td>{DURATION}</td>
					</tr>
					<tr>
						<td>{L_287}</td>
						<td>{CATEGORY}</td>
					</tr>
					<tr>
						<td>{L_018}</td>
						<td>{DESCRIPTION}</td>
					</tr>
					<tr>
						<td>{L_116}</td>
						<td>{CURRENT_BID}</td>
					</tr>
					<tr>
						<td>{L_258}</td>
						<td>{QTY}</td>
					</tr>
					<tr>
						<td>{L_021}</td>
						<td>{RESERVE_PRICE}</td>
					</tr>
					<tr>
						<td>{L_300}</td>
						<td>
<!-- IF SUSPENDED eq 0 -->
							{L_029}
<!-- ELSE -->
							{L_030}
<!-- ENDIF -->
						</td>
					</tr>
					<tr>
						<td colspan="2">
							{L_remove_auction_from_moderation_explain}
						</td>
					</tr>
					<tr>
						<td width="204">&nbsp;</td>
						<td>
							<form name="details" action="" method="post">
								<input type="hidden" name="id" value="{ID}">
								<input type="hidden" name="offset" value="{OFFSET}">
								<input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
								<button class="btn btn-primary" type="submit" name="action" value="Yes">{L_030}</button>
								<button class="btn btn-danger" type="submit" name="action" value="No">{L_029}</button>
							</form>
						</td>
					</tr>
				</table>
			</div>
		</div>