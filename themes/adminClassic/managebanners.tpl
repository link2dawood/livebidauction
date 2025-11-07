		<div class="row">
			<div class="col-md-3">
				<!-- INCLUDE sidebar-{CURRENT_PAGE}.tpl -->
			</div>
			<div class="col-md-9">
				<ol class="breadcrumb"><i class="fa fa-cogs"></i>  <li>{L_25_0011}</li><li>{L__0008}</li></ol>
				<form name="deleteusers" action="" method="post">
					<div class="grid-margin-btm-md"><a href="newbannersuser.php" class="btn btn-success btn-xs">{L__0026} <i class="fa fa-plus"></i></a></div>
					<table class="table table-bordered table-hover table-striped">
					<tr>
						<th width="15%">{L_5180}</th>
						<th width="25%">{L__0022}</th>
						<th width="28%">{L_303}</th>
						<th width="11%">{L__0025}</th>
						<th width="10%">&nbsp;</th>
						<th width="11%">{L_008}</th>
					</tr>
<!-- BEGIN busers -->
					<tr {busers.BG}>
						<td><a href="editbannersuser.php?id={busers.ID}">{busers.NAME}</a></td>
						<td>{busers.COMPANY}</td>
						<td><a href="mailto:{busers.EMAIL}">{busers.EMAIL}</a></td>
						<td>{busers.NUM_BANNERS}</td>
						<td><a href="userbanners.php?id={busers.ID}">{L__0024}</a></td>
						<td><input type="checkbox" name="delete[]" value="{busers.ID}"></td>
					</tr>
<!-- END busers -->
					</table>
					<input type="hidden" name="action" value="deleteusers">
					<input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
					<input type="submit" name="act" class="btn btn-primary" value="{L__0028}">
				</form>
			</div>
		</div>