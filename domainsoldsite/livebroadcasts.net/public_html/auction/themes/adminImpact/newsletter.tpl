		<div class="row">
			<div class="col-md-3">
				<!-- INCLUDE sidebar-{CURRENT_PAGE}.tpl -->
			</div>
			<div class="col-md-9">
				<ol class="breadcrumb"><i class="fa fa-cogs"></i>  <li>{L_25_0010}</li><li>{L_607}</li></ol>
				<form name="conf" action="" method="post">
<!-- IF B_PREVIEW -->
					<div class="main-box jumbo-box">
						<h1>{SUBJECT}</h1>
						{PREVIEW}
					</div>
<!-- ENDIF -->
					<table class="table table-bordered table-hover table-striped">
						<tr valign="top">
							<td width="175">{L_5299}</td>
							<td style="padding:3px;">
								{SELECTBOX}
							</td>
						</tr>
						<tr valign="top">
							<td width="175">{L_332}</td>
							<td style="padding:3px;">
								<input type="text" class="form-control" name="subject" value="{SUBJECT}" size="50" maxlength="255">
							</td>
						</tr>
						<tr valign="top">
							<td width="175">{L_605}</td>
							<td style="padding:3px;">
								{EDITOR}
							</td>
						</tr>
					</table>
<!-- IF B_PREVIEW -->
					<span class="smallspan">{L_606}</span>
					<input type="hidden" name="action" value="submit">
					<input type="submit" name="act" class="btn btn-primary" value="{L_398}">
<!-- ELSE -->
					<input type="hidden" name="action" value="preview">
					<input type="submit" name="act" class="btn btn-primary" value="{L_25_0224}">
<!-- ENDIF -->
					<input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
				</form>
			</div>
		</div>
