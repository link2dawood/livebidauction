		<div class="row">
			<div class="col-md-3">
				<!-- INCLUDE sidebar-{CURRENT_PAGE}.tpl -->
			</div>
			<div class="col-md-9">
				<ol class="breadcrumb"><i class="fa fa-cogs"></i>  <li>{L_5142}</li><li>{L_081}</li></ol>
				<form name="payments" action="" method="post">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
								    <div class="alert alert-info" role="alert">{L_094}</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12"><img src="../images/nodelete.gif" width="20" height="21" style="vertical-align:middle;"> {L_2__0030}</div>
							</div>
							<div class="row">
								<div class="col-md-9"><strong>{L_087}</strong></div>
								<div class="col-md-3"><strong>{L_008}</strong></div>
							</div>
<!-- BEGIN countries -->
							<div class="row">
								<div class="col-md-9">
									<input type="text" class="form-control" name="new_countries[]" size="45" value="{countries.COUNTRY}">
									<input type="hidden" name="old_countries[]" value="{countries.COUNTRY}">
								</div>
								<div class="col-md-3">{countries.SELECTBOX}</div>
							</div>
<!-- END countries -->
							<div class="row">
								<div class="col-md-9 text-right">{L_30_0102}</div>
								<div class="col-md-3"><input type="checkbox" class="selectall" value="delete"></div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-9">{L_394}: <input type="text" class="form-control" name="new_countries[]" size="45"></div>
								<div class="col-md-3">&nbsp;</div>
							</div>
						</div>
					</div>
					<input type="hidden" name="action" value="update">
					<input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
					<button class="btn btn-primary" type="submit" name="act" class="centre">{L_089}</button>
				</form>
			</div>
		</div>