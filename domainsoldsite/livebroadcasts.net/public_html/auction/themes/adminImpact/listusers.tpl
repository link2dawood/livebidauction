		<script type="text/javascript">
			$(document).ready(function() {
				$('#userfilter').change(function(){
					$('#filter').submit();
				});
			});
		</script>
		<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
		<div class="row">
			<div class="col-md-3">
				<!-- INCLUDE sidebar-{CURRENT_PAGE}.tpl -->
			</div>
			<div class="col-md-9">
				<ol class="breadcrumb"><i class="fa fa-cogs"></i>  <li>{L_25_0010}</li><li>{L_045}</li></ol>
				
				<div class="alert alert-info" role="alert"><i class="fa fa-info-circle"></i> {TOTALUSERS} {L_301}</div>
				<!-- IF ERRORMESG neq "" -->
				<div class="alert alert-danger" role="alert"><i class="fa fa-info-circle"></i> {ERRORMESG}</div>
				<!-- ENDIF -->
				
				<div class="table-responsive">
				<table class="table table-bordered table-hover table-striped">
				    <tr>
				        <td colspan="8">{L_5022}</td>
				    </tr>
					<tr>
						<td class="bg-success" colspan="4">
							<form name="search" action="" method="post">
							<input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
								
								<div class="input-group">
                                    <input type="text" class="form-control" name="keyword" size="25" placeholder="{L_5024}">
                                    <span class="input-group-btn">
                                    <input type="submit" class="btn btn-primary" name="submit" value="{L_5023}">
                                    </span>
                                </div><!-- /input-group -->
							</form>
						</td>
						<td class="bg-success" align="right" colspan="4">
							<form name="filter" id="filter" action="" method="get">
							    <div class="input-group">
								<select class="form-control" name="usersfilter" id="userfilter">
									<option value="all">{L_5296}</option>
									<option value="active" <!-- IF USERFILTER eq 'active' -->selected<!-- ENDIF -->>{L_5291}</option>
									<option value="admin" <!-- IF USERFILTER eq 'admin' -->selected<!-- ENDIF -->>{L_5294}</option>
									<option value="temp" <!-- IF USERFILTER eq 'temp' -->selected<!-- ENDIF -->>{L_5294a}</option>
									<option value="fee" <!-- IF USERFILTER eq 'fee' -->selected<!-- ENDIF -->>{L_5293}</option>
									<option value="confirmed" <!-- IF USERFILTER eq 'confirmed' -->selected<!-- ENDIF -->>{L_5292}</option>
									<option value="admin_approve" <!-- IF USERFILTER eq 'admin_approve' -->selected<!-- ENDIF -->>{L_25_0136}</option>
								</select>
								<span class="input-group-btn">
								<input type="submit" class="btn btn-primary" value="{L_5029}">
								</span>
								</div>
							</form>
						</td>
					</tr>
					<tr>
						<th width="15%"><b>{L_293}</b></th>
						<th width="15%"><b>{L_294}</b></th>
						<th width="15%"><b>{L_295}</b></th>
						<th width="15%"><b>{L_296}</b></th>
						<th width="8%"><b>{L_25_0079}</b></th>
						<th width="8%"><b>{L_763}</b></th>
						<th width="8%"><b>Pending Payments</b></th>
						<th width="7%"><b>{L_560}</b></th>
						<th width="17%"><b>{L_297}</b></th>
					</tr>
<!-- BEGIN users -->
					<tr {users.BG}>
						<td>
							<b>{users.NICK}</b><br>
							<div class="btn-group" role="group" aria-label="...">
                                <a class="btn btn-default btn-xs" href="listauctions.php?uid={users.ID}&offset={PAGE}" data-toggle="tooltip" data-placement="right" title="{L_5094}"><i class="fa fa-gavel"></i></a>
                                <a class="btn btn-default btn-xs" href="userfeedback.php?id={users.ID}&offset={PAGE}" data-toggle="tooltip" data-placement="right" title="{L_503}"><i class="fa fa-comment"></i></a>
							    <a class="btn btn-default btn-xs" href="viewuserips.php?id={users.ID}&offset={PAGE}" data-toggle="tooltip" data-placement="right" title="{L_2_0004}">&nbsp;<i class="fa fa-map-marker"></i>&nbsp;</a>
                            </div>
						</td>
						<td>{users.NAME}</td>
						<td>{users.COUNTRY}</td>
						<td><a href="mailto:{users.EMAIL}">{users.EMAIL}</a></td>
						<td align="center">{users.NEWSLETTER}</td>
						<td align="center">
							{users.BALANCE}
	<!-- IF users.BALANCE_CLEAN lt 0 -->
							<p><a href="listusers.php?payreminder=1&id={users.ID}&offset={PAGE}"><small>{L_764}</small></a></p>
	<!-- ENDIF -->
						</td>
						<td align="center">
							{users.TOTALAUCTIONS}
	<!-- IF users.TOTALAUCTIONS gt 0 -->
	<!-- IF users.TEMP_SUSPENDED eq 0 -->
							<a class="btn btn-warning btn-xs" href="excludeuser.php?id={users.ID}&offset={PAGE}&temp_susp=0" title="{L_299}"><i class="fa fa-lock"></i></a>
	<!-- ELSE -->						
							<a class="btn btn-success btn-xs" href="excludeuser.php?id={users.ID}&offset={PAGE}&temp_susp=1" title="{L_305a}"><i class="fa fa-unlock"></i></a>
	<!-- ENDIF -->
	<!-- ENDIF -->
						</td>
						<td>
	<!-- IF users.SUSPENDED eq 0 -->
							<b><span style="color:green;">{L_5291}</span></b>
	<!-- ELSEIF users.SUSPENDED eq 1 -->
							<b><span style="color:violet;">{L_5294}</span></b>
	<!-- ELSEIF users.SUSPENDED eq 7 -->
							<b><span style="color:red;">{L_5297}</span></b>
	<!-- ELSEIF users.SUSPENDED eq 8 -->
							<b><span style="color:orange;">{L_5292}</span></b><br>
							<a href="listusers.php?resend=1&id={users.ID}&offset={PAGE}"><small>{L_25_0074}</small></a>
	<!-- ELSEIF users.SUSPENDED eq 9 -->
							<b><span style="color:red;">{L_5293}</span></b>
	<!-- ELSEIF users.SUSPENDED eq 10 -->
							<b><small style="color:orange;"><a href="excludeuser.php?id={users.ID}&offset={PAGE}">{L_25_0136}</a></small></b>
	<!-- ENDIF -->
						</td>
						<td>
						    <div class="btn-group" role="group" aria-label="...">
                                <a class="btn btn-primary btn-xs" href="edituser.php?userid={users.ID}&offset={PAGE}" title="{L_298}"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-danger btn-xs" href="edituser.php?userid={users.ID}&offset={PAGE}" title="{L_008}"><i class="fa fa-trash"></i> </a>
                                
	<!-- IF users.SUSPENDED eq 0 -->
								<a class="btn btn-warning btn-xs" href="excludeuser.php?id={users.ID}&offset={PAGE}" title="{L_305}"><i class="fa fa-lock"></i></a>
	<!-- ELSEIF users.SUSPENDED eq 8 -->
								<a class="btn btn-success btn-xs" href="excludeuser.php?id={users.ID}&offset={PAGE}" title="{L_515}"><i class="fa fa-user-plus"></i></a>
	<!-- ELSE -->
								<a class="btn btn-success btn-xs" href="excludeuser.php?id={users.ID}&offset={PAGE}" title="{L_299}"><i class="fa fa-unlock"></i></a>
	<!-- ENDIF -->
							
                            </div>
						    <br>
						   
						</td>
					</tr>
<!-- END users -->
				</table>
				</div>
				
				<table width="98%" cellpadding="0" cellspacing="0" class="blank">
					<tr>
						<td align="center">
							{L_5117}&nbsp;{PAGE}&nbsp;{L_5118}&nbsp;{PAGES}
							<br>
							{PREV}
<!-- BEGIN pages -->
							{pages.PAGE}&nbsp;&nbsp;
<!-- END pages -->
							{NEXT}
						</td>
					</tr>
				</table>
			</div>
		</div>