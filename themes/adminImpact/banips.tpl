		<div class="row">
			<div class="col-md-3">
				<!-- INCLUDE sidebar-{CURRENT_PAGE}.tpl -->
			</div>
			<div class="col-md-9">
				<ol class="breadcrumb"><i class="fa fa-cogs"></i>  <li>{L_25_0010}</li><li>{L_2_0017}</li><li>{L_2_0020}</li></ol>
				<form name="errorlog" action="" method="post">
					<table class="table table-bordered table-hover table-striped">
						<tr>
							<td class="bg-success" colspan="5">
								<div class="text-muted"><small>{L_2_0021}</small></div>
								<div class="input-group">
								    <input class="form-control" type="text" name="ip" placeholder="{L_2_0024}">
								    <span class="input-group-btn">
								        <input class="btn btn-primary" type="submit" name="Submit2" value="&gt;&gt;">
								    </span>
								</div>
							</td>
						</tr>
						<tr>
							<th width="29%"><b>{L_087}</b></td>
							<th width="25%"><b>{L_2_0009}</b></td>
							<th width="19%"><b>{L_560}</b></td>
							<th width="18%"><b>{L_5028}</b></td>
							<th width="9%"><b>{L_008}</b></td>
						</tr>
<!-- BEGIN ips -->
						<tr {ips.BG}>
							<td>{L_2_0025}</td>
							<td align="center">{ips.IP}</td>
							<td align="center">
	<!-- IF ips.ACTION eq 'accept' -->
								{L_2_0012}
	<!-- ELSE -->
								{L_2_0013}
	<!-- ENDIF -->
							</td>
							<td>
	<!-- IF ips.ACTION eq 'accept' -->
								<input type="checkbox" name="deny[]" value="{ips.ID}">
								&nbsp;{L_2_0006}
	<!-- ELSE -->
								<input type="checkbox" name="accept[]" value="{ips.ID}">
								&nbsp;{L_2_0007}
	<!-- ENDIF -->
							</td>
							<td align="center"><input type="checkbox" name="delete[]" value="{ips.ID}"></td>
<!-- BEGINELSE -->
							<td colspan="5">{L_831}</td>
<!-- END ips -->
						</tr>
					</table>
					<input type="hidden" name="action" value="update">
					<input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
					<input type="submit" name="act" class="btn btn-primary" value="{L_2_0015}">
				</form>
			</div>
		</div>