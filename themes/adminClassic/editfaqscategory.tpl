		<div class="row">
			<div class="col-md-3">
				<!-- INCLUDE sidebar-{CURRENT_PAGE}.tpl -->
			</div>
			<div class="col-md-9">
				<ol class="breadcrumb"><i class="fa fa-cogs"></i>  <li>{L_25_0018}</li><li>{L_5236}</li><li>{L_5230}</li><li>{FAQ_NAME}</li></ol>
				<form name="errorlog" action="" method="post">
					<table class="table table-bordered table-hover table-striped">
<!-- BEGIN flangs -->
					<tr>
	<!-- IF flangs.S_ROW_COUNT eq 0 -->
						<td width="20%">{L_5284}</td>
	<!-- ELSE -->
						<td>&nbsp;</td>
	<!-- ENDIF -->
						<td width="5%"><img src="{SITEURL}images/flags/{flangs.LANGUAGE}.gif"></td>
						<td width="75%" valign="top">
							<input type="text" name="category[{flangs.LANGUAGE}]" class="form-control" size="50" maxlength="150" value="{flangs.TRANSLATION}">
						</td>
					</tr>
<!-- END langs -->
					</table>
					<input type="hidden" name="id" value="{ID}">
					<input type="hidden" name="action" value="update">
					<input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
					<input type="submit" name="act" class="btn btn-primary" value="{L_530}">
				</form>
			</div>
		</div>