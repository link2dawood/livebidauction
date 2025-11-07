		<div class="row">
			<div class="col-md-3">
				<!-- INCLUDE sidebar-{CURRENT_PAGE}.tpl -->
			</div>
			<div class="col-md-9">
				<ol class="breadcrumb"><i class="fa fa-cogs"></i>  <li>{L_5436}</li><li>{L_891}</li></ol>
				<form name="errorlog" action="" method="post">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12" style="overflow-y:scroll; height:500px;">
									{ERRORLOG}
								</div>
							</div>
						</div>
					</div>
					<input type="hidden" name="action" value="clearlog">
					<input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
					<button class="btn btn-primary" type="submit" name="act" class="centre">{L_890}</button>
<!-- IF TYPE eq 'distinct' -->
					<a href="errorlog.php?type=all" class="tn btn btn-danger">{L_all_error_messages}</a>
<!-- ELSE -->
					<a href="errorlog.php?type=distinct" class="tn btn btn-warning">{L_unique_error_messages}</a>
<!-- ENDIF -->
				</form>
			</div>
		</div>
