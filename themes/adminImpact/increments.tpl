		<div class="row">
			<div class="col-md-3">
				<!-- INCLUDE sidebar-{CURRENT_PAGE}.tpl -->
			</div>
			<div class="col-md-9">
				<ol class="breadcrumb"><i class="fa fa-cogs"></i>  <li>{L_5142}</li><li>{L_128}</li></ol>
				<form name="increments" action="" method="post">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12"><div class="alert alert-info">{L_135}</div></div>
							</div>
							<div class="row">
								<div class="col-md-3"><strong>{L_240}</strong></div>
								<div class="col-md-3"><strong>{L_241}</strong></div>
								<div class="col-md-3"><strong>{L_137}</strong></div>
								<div class="col-md-3"><strong>{L_008}</strong></div>
							</div>
<!-- BEGIN increments -->
							<div class="row">
								<div class="col-md-3">
									<input type="hidden" name="id[]" value="{increments.ID}">
									<input type="text" class="form-control" name="lows[]" value="{increments.LOW}" size="10">
								</div>
								<div class="col-md-3"><input type="text" class="form-control" name="highs[]" value="{increments.HIGH}" size="10"></div>
								<div class="col-md-3"><input type="text" class="form-control" name="increments[]" value="{increments.INCREMENT}" size="10"></div>
								<div class="col-md-3"><input type="checkbox" name="delete[]" value="{increments.ID}"></div>
							</div>
<!-- END increments -->
							<div class="row">
								<div class="col-md-9 text-right">{L_30_0102}</div>
								<div class="col-md-3"><input type="checkbox" class="selectall" value="delete"></div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-12">{L_394}: </div>
								<div class="col-md-3"><input type="hidden" name="id[]" value=""><input type="text" class="form-control" name="lows[]" size="10"></div>
								<div class="col-md-3"><input type="text" class="form-control" name="highs[]" size="10"></div>
								<div class="col-md-3"><input type="text" class="form-control" name="increments[]" size="10"></div>
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