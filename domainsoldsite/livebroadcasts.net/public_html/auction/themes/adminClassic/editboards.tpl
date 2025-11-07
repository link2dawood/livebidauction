		<div class="row">
			<div class="col-md-3">
				<!-- INCLUDE sidebar-{CURRENT_PAGE}.tpl -->
			</div>
			<div class="col-md-9">
				<ol class="breadcrumb"><i class="fa fa-cogs"></i>  <li>{L_25_0018}</li><li>{L_5032}</li><li>{L_5052}</li></ol>
				<form name="errorlog" action="" method="post">
					<table class="table table-bordered table-hover table-striped">
					<tr>
						<td width="24%">{L_5034}</td>
						<td width="76%">
							<input type="text" class="form-control" name="name" size="25" maxlength="255" value="{NAME}">
						</td>
					</tr>
					<tr>
						<td>{L_5043}</td>
						<td>{MESSAGES} (<a href="editmessages.php?id={ID}">{L_5063}</a>)</td>
					</tr>
					<tr>
						<td>{L_5053}</td>
						<td>{LAST_POST}</td>
					</tr>
					<tr>
						<td>{L_5035}</td>
						<td>
							<p>{L_5036}</p>
							<input type="text" class="form-control" name="msgstoshow" size="4" maxlength="4" value="{MSGTOSHOW}">
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>
							<input type="radio" name="active" value="1"<!-- IF B_ACTIVE --> checked="checked"<!-- ENDIF -->> {L_5038}<br>
							<input type="radio" name="active" value="0"<!-- IF B_DEACTIVE --> checked="checked"<!-- ENDIF -->> {L_5039}
						</td>
					</tr>
					</table>
					<input type="hidden" name="action" value="update">
					<input type="hidden" name="id" value="{ID}">
					<input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
					<input type="submit" name="act" class="btn btn-primary" value="{L_530}">
				</form>
			</div>
		</div>
