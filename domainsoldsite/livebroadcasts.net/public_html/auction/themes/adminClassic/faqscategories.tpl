		<div class="row">
			<div class="col-md-3">
				<!-- INCLUDE sidebar-{CURRENT_PAGE}.tpl -->
			</div>
			<div class="col-md-9">
				<ol class="breadcrumb"><i class="fa fa-cogs"></i>  <li>{L_25_0018}</li><li>{L_5236}</li><li>{L_5230}</li></ol>
				<form name="newfaqcat" action="" method="post">
					<table class="table table-bordered table-hover table-striped">
<!-- IF B_ADDCAT -->
						<tr bgcolor="#FFFF66">
							<td>{L_165}</td>
							<td colspan="2">
	<!-- BEGIN lang -->
								<p>{lang.LANG}:&nbsp;<input type="text" class="form-control" name="cat_name[{lang.LANG}]" size="25" maxlength="200"></p>
	<!-- END lang -->
								<button type="submit" class="btn btn-success btn-xs" name="action" value="Insert">{L_5204}</button>
							</td>
						</tr>
<!-- ELSE -->
						<tr>
							<td colspan="3"><a  class="btn btn-success btn-xs" href="faqscategories.php?do=add">{L_5234}</a></td>
						</tr>
<!-- ENDIF -->
						<tr>
							<th width="10%"><b>{L_5237}</b></th>
							<th><b>{L_287}</b></th>
							<th width="14%"><b>{L_008}</b></th>
						</tr>
<!-- BEGIN cats -->
						<tr {cats.BG}>
							<td>{cats.ID}</td>
							<td><a href="editfaqscategory.php?id={cats.ID}">{cats.CATEGORY}</a> <!-- IF cats.FAQS gt 0 -->{cats.FAQSTXT}<!-- ENDIF --></td>
							<td align="center"><input type="checkbox" name="delete[]" value="{cats.ID}"></td>
						</tr>
<!-- END cats -->
					</table>
					<input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
					<button type="submit" class="btn btn-danger" name="action" value="Delete">{L_008}</button>
				</form>
			</div>
		</div>