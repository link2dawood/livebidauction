		<div class="row">
			<div class="col-md-3">
				<!-- INCLUDE sidebar-{CURRENT_PAGE}.tpl -->
			</div>
			<div class="col-md-9">
				<ol class="breadcrumb"><i class="fa fa-cogs"></i>  <li>{L_239}</li><li>{L_30_0176}</li></ol>
				<p><b>{L_113}: </b> {ID}</p>
				<p><b>{L_197}: </b> {TITLE}</p>
				<p><b>{L_125}: </b> {S_NICK} ({S_NAME})</p>
				<p><b>{L_127}: </b> {MIN_BID}</p>
				<p><b>{L_111}: </b> {STARTS}</p>
				<p><b>{L_30_0177}: </b> {ENDS}</p>
				<p><b>{L_257}: </b> {AUCTION_TYPE}</p>
				<h4 class="rounded-top rounded-bottom" style="width: 98%;">{L_453}</h4>
<!-- IF B_WINNERS -->
				<table class="table table-bordered table-hover table-striped">
					<tr>
						<th><b>{L_176}</b></td>
						<th><b>{L_30_0179}</b></td>
						<th><b>{L_284}</b></td>
					</tr>
	<!-- BEGIN winners -->
					<tr>
						<td>{winners.W_NICK} ({winners.W_NAME})</td>
						<td>{winners.BID}</td>
						<td align="center">{winners.QTY}</td>
					</tr>
	<!-- END winners -->
				</table>
<!-- ELSE -->
				{L_30_0178}
<!-- ENDIF -->
				<h4 class="rounded-top rounded-bottom" style="width: 98%;">{L_30_0180}</h4>
<!-- IF B_BIDS -->
				<table class="table table-bordered table-hover table-striped">
					<tr>
						<th><b>{L_176}</b></td>
						<th><b>{L_30_0179}</b></td>
						<th><b>{L_284}</b></td>
					</tr>
	<!-- BEGIN bids -->
					<tr>
						<td>{bids.W_NICK} ({bids.W_NAME})</td>
						<td>{bids.BID}</td>
						<td align="center">{bids.QTY}</td>
					</tr>
	<!-- END bids -->
				</table>
<!-- ELSE -->
				{L_30_0178}
<!-- ENDIF -->
			</div>
		</div>