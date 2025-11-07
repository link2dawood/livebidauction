		<div class="row">
			<div class="col-md-3">
				<!-- INCLUDE sidebar-{CURRENT_PAGE}.tpl -->
			</div>
			<div class="col-md-9">
				<ol class="breadcrumb"><i class="fa fa-cogs"></i>  <li>{L_5142}</li><li>{L_069}</li></ol>
				<div class="alert alert-info alert-dismissable" role="alert"><i class="fa fa-info-circle"></i> {L_122}</div>
				<form name="durations" action="" method="post">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3"><strong>{L_097}</strong></div>
								<div class="col-md-6"><strong>{L_087}</strong></div>
								<div class="col-md-3"><strong>{L_008}</strong></div>
							</div>
<!-- BEGIN dur -->
							<div class="row">
								<div class="col-md-3"><input type="text" class="form-control" name="new_days[{dur.ID}]" value="{dur.DAYS}" size="5"></div>
								<div class="col-md-6"><input type="text" class="form-control" name="new_durations[{dur.ID}]" value="{dur.DESC}" size="25"></div>
								<div class="col-md-3"><input type="checkbox" name="delete[]" value="{dur.ID}"></div>
							</div>
<!-- END dur -->
							<div class="row">
								<div class="col-md-9 text-right">{L_30_0102}</div>
								<div class="col-md-3"><input type="checkbox" class="selectall" value="delete"></div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-12">{L_394}:</div> 
								<div class="col-md-3"><input type="text" class="form-control" name="new_days[]" size="5" maxlength="5"></div>
								<div class="col-md-6"><input type="text" class="form-control" name="new_durations[]" size="25"></div>
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
