		<div class="row">
			<div class="col-md-3">
				<!-- INCLUDE sidebar-{CURRENT_PAGE}.tpl -->
			</div>
			<div class="col-md-9">
				<ol class="breadcrumb"><i class="fa fa-cogs"></i>  <li>{L_25_0010}</li><li>{L_525}</li><li>{L_562}</li></ol>
				<form name="editadmin" action="" method="post">
					<table class="table table-bordered table-hover table-striped">
						<tr>
							<td>{L_003}</td>
							<td>{USERNAME}</td>
						</tr>
						<tr>
							<td>{L_558}</td>
							<td>{CREATED}</td>
						</tr>
						<tr>
							<td>{L_559}</td>
							<td>{LASTLOGIN}</td>
						</tr>
						<tr>
							<td colspan="2">{L_563}</td>
						</tr>
						<tr>
							<td>{L_004}</td>
							<td><input type="password" class="form-control" name="password" size="25"></td>
						</tr>
						<tr>
							<td>{L_564}</td>
							<td><input type="password" class="form-control" name="repeatpassword" size="25"></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>
								<input type="radio" name="status" value="1"<!-- IF B_ACTIVE --> checked="checked"<!-- ENDIF -->> {L_566}<br>
								<input type="radio" name="status" value="0"<!-- IF B_INACTIVE --> checked="checked"<!-- ENDIF -->> {L_567}
							</td>
						</tr>
					</table>
					<input type="hidden" name="action" value="update">
					<input type="hidden" name="id" value="{ID}">
					<input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
					<input type="submit" name="act" class="btn btn-primary" value="{L_530}">
				</form>
			</div>
		</div>
