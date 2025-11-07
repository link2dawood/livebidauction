		<div class="row">
			<div class="col-md-3">
				<!-- INCLUDE sidebar-{CURRENT_PAGE}.tpl -->
			</div>
			<div class="col-md-9">
				<ol class="breadcrumb"><i class="fa fa-cogs"></i>  <li>{L_25_0018}</li><li>{L_516}</li><li>{TITLE}</li></ol>
				<form name="addnew" action="" method="post">
				    <div class="panel panel-default">
						<div class="panel-body">
					<table width="98%" cellpadding="2" class="blank">
<!-- BEGIN lang -->
						<tr valign="top">
	<!-- IF lang.S_ROW_COUNT eq 0 -->
							<td align="right">{L_519}:</td>
	<!-- ELSE -->
							<td>&nbsp;</td>
	<!-- ENDIF -->
							<td width="35" align="right"><img src="../images/flags/{lang.LANG}.gif"></td>
							<td><input type="text" name="title[{lang.LANG}]" class="form-control" size="40" maxlength="255" value="{lang.TITLE}"></td>
						</tr>
<!-- END lang -->
<!-- BEGIN lang -->
						<tr>
	<!-- IF lang.S_ROW_COUNT eq 0 -->
							<td valign="top" align="right">{L_520}:</td>
	<!-- ELSE -->
							<td>&nbsp;</td>
	<!-- ENDIF -->
							<td align="right" valign="top"><img src="../images/flags/{lang.LANG}.gif"></td>
							<td>{lang.CONTENT}</td>
						</tr>
<!-- END lang -->
						</tr>
						<tr>
							<td align="right">{L_521}</td>
							<td>&nbsp;</td>
							<td>
								<input type="radio" name="suspended" value="0"<!-- IF B_ACTIVE --> checked="checked"<!-- ENDIF -->> {L_030}
								<input type="radio" name="suspended" value="1"<!-- IF B_INACTIVE --> checked="checked"<!-- ENDIF -->> {L_029}
							</td>
						</tr>
					</table>
					</div>
					</div>
<!-- IF ID ne '' -->
					<input type="hidden" name="id" value="{ID}">
<!-- ENDIF -->
					<input type="hidden" name="action" value="update">
					<input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
					<input type="submit" class="btn btn-primary" value="{BUTTON}">
				</form>
			</div>
		</div>
