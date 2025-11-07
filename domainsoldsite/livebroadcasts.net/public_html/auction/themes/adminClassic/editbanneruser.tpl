		<div class="row">
			<div class="col-md-3">
				<!-- INCLUDE sidebar-{CURRENT_PAGE}.tpl -->
			</div>
			<div class="col-md-9">
				<ol class="breadcrumb"><i class="fa fa-cogs"></i>  <li>{L_25_0011}</li><li>{L__0008}</li><li>{L_511}</li></ol>
				<form name="editbanneruser" action="" method="post">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3">{L_302}</div>
								<div class="col-md-9"><input type="text" class="form-control" name="name" value="{NAME}"></div>
							</div>
							<div class="row">
								<div class="col-md-3">{L__0022}</div>
								<div class="col-md-9"><input type="text" class="form-control" name="company" value="{COMPANY}"></div>
							</div>
							<div class="row">
								<div class="col-md-3">{L_107}</div>
								<div class="col-md-9"><input type="text" class="form-control" name="email" value="{EMAIL}"></div>
							</div>
						</div>
					</div>
					<input type="hidden" name="id" value="{ID}">
					<input type="hidden" name="action" value="update">
					<input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
					<button class="btn btn-primary" type="submit" name="act">{L_530}</button>
				</form>
			</div>
		</div>