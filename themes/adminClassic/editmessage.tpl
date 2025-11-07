		<div class="row">
			<div class="col-md-3">
				<!-- INCLUDE sidebar-{CURRENT_PAGE}.tpl -->
			</div>
			<div class="col-md-9">
				<ol class="breadcrumb"><i class="fa fa-cogs"></i>  <li>{L_25_0018}</li><li>{L_5032}</li><li>{BOARD_NAME}</li><li>{L_5276}</li></ol>
				<form name="editmessage" action="" method="post">
					<table class="table table-bordered table-hover table-striped">
						<tr>
							<td width="24%" valign="top">{L_5059}</td>
							<td>
								<textarea rows="8" cols="40" class="form-control" name="message">{MESSAGE}</textarea>
							</td>
						</tr>
						<tr>
							<td>{L_5060}</td>
							<td>{USER} - {POSTED}</td>
						</tr>
					</table>
					<input type="hidden" name="action" value="update">
					<input type="hidden" name="id" value="{BOARD_ID}">
					<input type="hidden" name="msg" value="{MSG_ID}">
					<input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
					<input type="submit" name="act" class="btn btn-primary" value="{L_530}">
				</form>
			</div>
		</div>