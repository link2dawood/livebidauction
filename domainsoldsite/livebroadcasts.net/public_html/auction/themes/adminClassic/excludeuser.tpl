		<div class="row">
			<div class="col-md-3">
				<!-- INCLUDE sidebar-{CURRENT_PAGE}.tpl -->
			</div>
			<div class="col-md-9">
				<ol class="breadcrumb"><i class="fa fa-cogs"></i>  <li>{L_25_0010}</li><li>{L_045}</li><li>{ACTION}</li></ol>
				<table class="table table-bordered table-hover table-striped">
					<tr>
						<td width="204">{L_302}</td>
						<td>{REALNAME}</td>
					</tr>
					<tr>
						<td>{L_003}</td>
						<td>{USERNAME}</td>
					</tr>
					<tr>
						<td>{L_303}</td>
						<td>{EMAIL}</td>
					</tr>
					<tr>
						<td>{L_252}</td>
						<td>{DOB}</td>
					</tr>
					<tr>
						<td>{L_009}</td>
						<td>{ADDRESS}</td>
					</tr>
					<tr>
						<td>{L_011}</td>
						<td>{PROV}</td>
					</tr>
					<tr>
						<td>{L_012}</td>
						<td>{ZIP}</td>
					</tr>
					<tr>
						<td>{L_014}</td>
						<td>{COUNTRY}</td>
					</tr>
					<tr>
						<td>{L_013}</td>
						<td>{PHONE}</td>
					</tr>
					<tr>
						<td>{L_222}</td>
						<td>
							<p><a href="userfeedback.php?id={ID}">{L_208}</a></p>
						</td>
					</tr>
					<tr>
						<td width="204">&nbsp;</td>
						<td>{QUESTION}</td>
					</tr>
					<tr>
						<td width="204">&nbsp;</td>
						<td>
							<form name="details" action="" method="post">
								<input type="hidden" name="id" value="{ID}">
								<input type="hidden" name="offset" value="{OFFSET}">
								<input type="hidden" name="mode" value="{MODE}">
								<input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
								<button type="submit" class="btn btn-primary" name="action" value="Yes">{L_030}</button>
								<button type="submit" class="btn btn-danger" name="action" value="No">{L_029}</button>
							</form>
						</td>
					</tr>
				</table>
			</div>
		</div>