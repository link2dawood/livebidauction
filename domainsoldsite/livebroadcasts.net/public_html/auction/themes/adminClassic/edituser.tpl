		<div class="row">
			<div class="col-md-3">
				<!-- INCLUDE sidebar-{CURRENT_PAGE}.tpl -->
			</div>
			<div class="col-md-9">
				<ol class="breadcrumb"><i class="fa fa-cogs"></i>  <li>{L_25_0010}</li><li>{L_045}</li><li>{L_511}</li></ol>
				<form name="errorlog" action="" method="post">
					<table class="table table-bordered table-hover table-striped">
					<tr>
						<td width="204">{L_302} *</td>
						<td><input type="text" class="form-control" name="name" size="40" maxlength="255" value="{REALNAME}"></td>
						<td><b>{L_448}</b></td>
					</tr>
					<tr>
						<td>{L_003}</td>
						<td>{USERNAME}</td>
						<td rowspan="15" width="33%" valign="top">
							{USERGROUPS}
						</td>
					</tr>
					<tr class="bg">
						<td>&nbsp;</td>
						<td><small>{L_243}</small></td>
					</tr>
					<tr class="bg">
						<td>{L_004} *</td>
						<td><input type="password" class="form-control" name="password" size="20" maxlength="20"></td>
					</tr>
					<tr class="bg">
						<td>{L_004} *</td>
						<td><input type="password" class="form-control" name="repeat_password" size="20" maxlength="20"></td>
					</tr>
					<tr>
						<td>{L_303} *</td>
						<td><input type="text" class="form-control" name="email" size="50" maxlength="50" value="{EMAIL}"></td>
					</tr>
					<tr>
						<td>{L_252}{REQUIRED(0)}</td>
						<td><input type="text" class="form-control" name="birthdate" size="10" maxlength="10" value="{DOB}"></td>
					</tr>
					<tr>
						<td>{L_009}{REQUIRED(1)}</td>
						<td><input type="text" class="form-control" name="address" size="40" maxlength="255" value="{ADDRESS}"></td>
					</tr>
					<tr>
						<td>{L_010}{REQUIRED(2)}</td>
						<td><input type="text" class="form-control" name="city" size="40" maxlength="255" value="{CITY}"></td>
					</tr>
					<tr>
						<td>{L_011}{REQUIRED(3)}</td>
						<td><input type="text" class="form-control" name="prov" size="40" maxlength="255" value="{PROV}"></td>
					</tr>
					<tr>
						<td>{L_012}{REQUIRED(5)}</td>
						<td><input type="text" class="form-control" name="zip" size="15" maxlength="15" value="{ZIP}"></td>
					</tr>
					<tr>
						<td>{L_014}{REQUIRED(4)}</td>
						<td>
							<select class="form-control" name="country">
								<option value=""></option>
								{COUNTRY_LIST}
							</select>
						</td>
					</tr>
					<tr>
						<td>{L_013}{REQUIRED(6)}</td>
						<td><input type="text" class="form-control" name="phone" size="40" maxlength="40" value="{PHONE}"></td>
					</tr>
					<tr>
						<td>{L_763}</td>
						<td><input type="text" class="form-control" name="balance" size="40" maxlength="10" value="{BALANCE}"></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><a href="userfeedback.php?id={ID}">{L_208}</a></td>
					</tr>
					</table>
					<input type="hidden" name="id" value="{ID}">
					<input type="hidden" name="offset" value="{OFFSET}">
					<input type="hidden" name="action" value="update">
					<input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
					<input type="submit" name="act" class="btn btn-primary" value="{L_071}">
				</form>
			</div>
		</div>
