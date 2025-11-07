		<div class="row">
			<div class="col-md-3">
				<!-- INCLUDE sidebar-{CURRENT_PAGE}.tpl -->
			</div>
			<div class="col-md-9">
				<ol class="breadcrumb"><i class="fa fa-cogs"></i>  <li>{L_25_0018}</li><li>{L_5236}</li><li>{L_5231}</li></ol>
				<form name="newfaq" action="" method="post">
					<table class="table table-bordered table-hover table-striped">
						<tr valign="top">
							<td align="right">{L_5231}:</td>
							<td>&nbsp;</td>
							<td>
								<select class="form-control" name="category">
<!-- BEGIN cats -->
									<option value="{cats.ID}">{cats.CATEGORY}</option>
<!-- END cats -->
								</select>
							</td>
						</tr>
<!-- BEGIN lang -->
						<tr valign="top">
	<!-- IF lang.S_ROW_COUNT eq 0 -->
							<td align="right">{L_5239}:</td>
	<!-- ELSE -->
							<td>&nbsp;</td>
	<!-- ENDIF -->
							<td width="35" align="right"><img src="../images/flags/{lang.LANG}.gif"></td>
							<td><input type="text" class="form-control" name="question[{lang.LANG}]" size="40" maxlength="255" value="{lang.TITLE}"></td>
						</tr>
<!-- END lang -->
<!-- BEGIN lang -->
						<tr>
	<!-- IF lang.S_ROW_COUNT eq 0 -->
							<td valign="top" align="right">{L_5240}:</td>
	<!-- ELSE -->
							<td>&nbsp;</td>
	<!-- ENDIF -->
							<td align="right" valign="top"><img src="../images/flags/{lang.LANG}.gif"></td>
							<td><textarea class="form-control" name="answer[{lang.LANG}]" cols="45" rows="20">{lang.CONTENT}</textarea></td>
						</tr>
<!-- END lang -->
						</tr>
					</table>
					<input type="hidden" name="action" value="update">
					<input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
					<input type="submit" name="act" class="btn btn-primary" value="{L_530}">
				</form>
			</div>
		</div>