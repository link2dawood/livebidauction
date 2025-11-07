		<div class="row">
			<div class="col-md-3">
				<!-- INCLUDE sidebar-{CURRENT_PAGE}.tpl -->
			</div>
			<div class="col-md-9">
				<ol class="breadcrumb"><i class="fa fa-cogs"></i>  <li>{L_25_0018}</li><li>{L_5232}</li></ol>
					<table class="table table-bordered table-hover table-striped">
					<tr>
						<td colspan="3"><a class="btn btn-success btn-xs" href="newfaq.php">{L_5231} <i class="fa fa-plus"></i></a></td>
					</tr>
<!-- BEGIN cats -->
					<tr>
						<th width="86%">{cats.CAT}</th>
						<th>&nbsp;</th>
					</tr>
	<!-- BEGIN faqs -->
					<tr>
						<td><a href="editfaq.php?id={faqs.ID}">{faqs.FAQ}</a></td>
						<td align="center">
							<input type="checkbox" name="delete[]" value="{faqs.ID}">
						</td>
					</tr>
	<!-- END faqs -->
<!-- END cats -->
					<tr>
						<td align="right">{L_30_0102}</td>
						<td align="center"><input type="checkbox" class="selectall" value="delete"></td>
					</tr>
					</table>
					<input type="hidden" name="action" value="delete">
					<input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
					<input type="submit" name="act" class="btn btn-danger" value="{L_008}">
				</form>
			</div>
		</div>