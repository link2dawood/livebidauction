		<div class="row">
			<div class="col-md-3">
				<!-- INCLUDE sidebar-{CURRENT_PAGE}.tpl -->
			</div>
			<div class="col-md-9">
				<ol class="breadcrumb"><i class="fa fa-cogs"></i>  <li>{L_25_0010}</li><li>{L_045}</li><li>{RATED_USER}</li><li>{L_222}</li></ol>
				<form name="editfeedback" action="" method="post">
					<div class="plain-box">
						{RATER_USER} {L_506}{RATED_USER}
					</div>
					<table class="table table-bordered table-hover table-striped">
					<tr>
						<td>{L_503}</td>
						<td>
							<input type="radio" name="aTPL_rate" value="1" <!-- IF SEL1 -->checked="checked"<!-- ENDIF -->>
							<img src="{SITEURL}images/positive.png" border="0">
							<input type="radio" name="aTPL_rate" value="0" <!-- IF SEL2 -->checked="checked"<!-- ENDIF -->>
							<img src="{SITEURL}images/neutral.png" border="0">
							<input type="radio" name="aTPL_rate" value="-1" <!-- IF SEL3 -->checked="checked"<!-- ENDIF -->>
							<img src="{SITEURL}images/negative.png" border="0">
						</td>
					</tr>
					<tr>
						<td>{L_504}</td>
						<td>
							<textarea class="form-control" name="TPL_feedback" rows="10" cols="50">{FEEDBACK}</textarea>
						</td>
					</tr>
					</table>
					<input type="hidden" name="user" value="{RATED_USER_ID}">
					<input type="hidden" name="action" value="update">
					<input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
					<input type="submit" name="act" class="btn btn-primary" value="{L_530}">
				</form>
				<div class="plain-box">
					<p><a href="{SITEURL}admin/userfeedback.php?id={RATED_USER_ID}">{L_234}</a></p>
				</div>
			</div>
		</div>