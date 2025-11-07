		<div class="row">
			<div class="col-md-3">
				<!-- INCLUDE sidebar-{CURRENT_PAGE}.tpl -->
			</div>
			<div class="col-md-9">
				<ol class="breadcrumb"><i class="fa fa-cogs"></i>  <li>{L_25_0018}</li><li>{L_5232}</li><li>{FAQ_NAME}</li></ol>
				<form name="editfaq" action="" method="post">
					<table class="table table-bordered table-hover table-striped">
					<tr>
						<td>{L_5238}</td>
						<td>&nbsp;</td>
						<td>
							<select class="form-control" name="category">
<!-- BEGIN cats -->
								<option value="{cats.ID}"<!-- IF cats.ID eq FAQ_CAT -->selected="selected"<!-- ENDIF -->>{cats.CAT}</option>
<!-- END cats -->
							</select>
						</td>
					</tr>
<!-- BEGIN qs -->
					<tr>
	<!-- IF qs.S_ROW_COUNT eq 0 -->
						<td>{L_5239}:</td>
	<!-- ELSE -->
						<td>&nbsp;</td>
	<!-- ENDIF -->
						<td align="right"><img src="../images/flags/{qs.LANG}.gif"></td>
						<td><input type="text" class="form-control" name="question[{qs.LANG}]" maxlength="200" value="{qs.QUESTION}"></td>
					</tr>
<!-- END qs -->
<!-- BEGIN as -->
					<tr>
	<!-- IF as.S_ROW_COUNT eq 0 -->
						<td valign="top">{L_5240}:</td>
	<!-- ELSE -->
						<td>&nbsp;</td>
	<!-- ENDIF -->
						<td align="right" valign="top"><img src="../images/flags/{as.LANG}.gif"></td>
						<td>{as.ANSWER}</td>
					</tr>
<!-- END as -->
					</table>
					<input type="hidden" name="action" value="update">
					<input type="hidden" name="id" value="{ID}">
					<input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
					<input type="submit" name="act" class="btn btn-primary" value="{L_530}">
				</form>
			</div>
		</div>
