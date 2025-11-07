		<div class="row">
			<div class="col-md-3">
				<!-- INCLUDE sidebar-{CURRENT_PAGE}.tpl -->
			</div>
			<div class="col-md-9">
				<ol class="breadcrumb"><i class="fa fa-cogs"></i>  <li>{L_25_0010}</li><li>{L_525}</li></ol>
				<form name="errorlog" action="" method="post">
					<div class="alert alert-info"><a href="newadminuser.php">{L_367}</a></div>
					<div class="table-responsive">
					<table class="table table-bordered table-hover table-striped">
						<tr>
							<th width="30%">{L_003}</th>
							<th width="16%">{L_558}</th>
							<th width="29%">{L_559}</th>
							<th width="12%">{L_560}</th>
							<th width="13%">{L_561}</th>
						</tr>
<!-- BEGIN users -->
						<tr {users.BG}>
							<td><a href="editadminuser.php?id={users.ID}">{users.USERNAME}</a></td>
							<td align="center">{users.CREATED}</td>
							<td align="center">{users.LASTLOGIN}</td>
							<td align="center">{users.STATUS}</td>
							<td align="center"><input type="checkbox" name="delete[]" value="{users.ID}"></td>
						</tr>
<!-- END users -->
					</table>
					</div>
					<input type="hidden" name="action" value="update">
					<input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
					<input type="submit" class="btn btn-danger" name="Submit" value="{L_561}">
				</form>
			</div>
		</div>