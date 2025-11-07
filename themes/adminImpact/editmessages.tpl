		<div class="row">
			<div class="col-md-3">
				<!-- INCLUDE sidebar-{CURRENT_PAGE}.tpl -->
			</div>
			<div class="col-md-9">
				<ol class="breadcrumb"><i class="fa fa-cogs"></i>  <li>{L_25_0018}</li><li>{L_5032}</li><li>{BOARD_NAME}</li><li>{L_5063}</li></ol>
				<table class="table table-bordered table-hover table-striped">
					<tr>
						<td bgcolor="#FFFF66" colspan="4">
							<form name="clearmessages" action="" method="post">
							    <div class="row">
							        <div class="col-md-12">
						        	    {L_5065}
						        	</div>
						        	<div class="col-md-4">
							            <input type="text" class="form-control" name="days">
							        </div>
							        <div class="col-md-1">
							            {L_5115}
							          </div>
							         <div class="col-md-2">
						            	<input type="hidden" name="action" value="purge">
							            <input type="hidden" name="id" value="{ID}">
							            <input type="submit" class="btn btn-primary" name="submit" value="{L_5029}">
							        </div>
							        <div class="col-md-5">
							        </div>
							</div>
							</form>
						</td>
					</tr>
					<tr>
						<th width="55%">{L_5059}</th>
						<th width="15%">{L_5060}</th>
						<th width="15%">{L_314}</th>
						<th width="15%">&nbsp;</th>
					</tr>
<!-- BEGIN msgs -->
					<tr {msgs.BG}>
						<td>{msgs.MESSAGE}</td>
						<td>{msgs.POSTED_BY}</td>
						<td>{msgs.POSTED_AT}</td>
						<td>
						    <div class="btn-group" role="group" aria-label="...">
						    <a class="btn btn-success btn-xs" href="editmessage.php?id={ID}&msg={msgs.ID}" title="{L_298}"><i class="fa fa-edit"></i></a>
						    <a class="btn btn-danger btn-xs" href="deletemessage.php?board_id={ID}&id={msgs.ID}" title="{L_008}"><i class="fa fa-trash"></i></a>
						    </div>
						</td>
					</tr>
<!-- END msgs -->
				</table>
			</div>
		</div>