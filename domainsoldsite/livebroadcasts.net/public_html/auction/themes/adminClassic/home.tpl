		<div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tags fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{C_AUCTIONS}</div>
                                        <div>{L_25_0057}</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{SITEURL}admin/listauctions.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{C_CLOSED}</div>
                                        <div>{L_354}</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{SITEURL}admin/listclosedauctions.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-gavel fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{C_BIDS}</div>
                                        <div>{L_25_0059}</div>
                                    </div> 
                                </div>
                            </div>
                            <a href="{SITEURL}admin/listauctions.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{C_USERS}</div>
                                        <div>{L_25_0055}</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{SITEURL}admin/listusers.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
<!-- /.row -->

	<div class="row">
			<div class="col-md-4">
			    <div class="white-box">
			        <h3 class="box-title">{L_5161}</h3>
			        <ul class="list-inline two-part">
                                <li style="width: 40%;"><i class="fa fa-bar-chart fa-2x text-success"></i></li>
                                <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">{A_PAGEVIEWS}</span></li>
                    </ul>
			    </div>
			</div>
	
			<div class="col-md-4">
			    <div class="white-box">
			        <h3 class="box-title">{L_5162}</h3>
			        <ul class="list-inline two-part">
                                <li style="width: 40%;"><i class="fa fa-pie-chart fa-2x text-danger"></i></li>
                                <li class="text-right"><i class="ti-arrow-up text-danger"></i> <span class="counter text-danger">{A_UVISITS}</span></li>
                    </ul>
			    </div>
			</div>
	
			<div class="col-md-4">
			    <div class="white-box">
			        <h3 class="box-title">{L_5163}</h3>
			        <ul class="list-inline two-part">
                                <li style="width: 40%;"><i class="fa fa-area-chart fa-2x text-info"></i></li>
                                <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">{A_USESSIONS}</span></li>
                    </ul>
			    </div>
			</div>
		</div>
		
	    <div class="row">
			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-heading">{L_1061}</div>
					<div class="panel-body">
						<form name="anotes" action="" method="post">
							<textarea rows="15" name="anotes" class="form-control">{ADMIN_NOTES}</textarea>
							<input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
							<br>
							<button class="btn btn-primary" type="submit" name="act">{L_007}</button>
						</form>
					</div>
				</div>
			</div>
		
			<div class="col-md-9">
<!-- IF UPDATE_AVAILABLE -->
				<div class="alert alert-danger alert-dismissable" role="alert">
				    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				    <i class="fa fa-warning"></i> {L_30_0211}
				</div>
<!-- ELSE -->
				<div class="alert alert-info alert-dismissable" role="alert">
				    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				    <i class="fa fa-info-circle"></i> {L_30_0212}
				</div>
<!-- ENDIF -->


                <table class="table table-striped table-bordered">
						<tr>
							<th colspan="2">{L_25_0025}</th>
						</tr>
						<tr>
							<td width="172"><strong>{L_528}</strong></td>
							<td>{SITEURL}</td>
						</tr>
						<tr class="bg">
							<td><strong>{L_527}</strong></td>
							<td>{SITENAME}</td>
						</tr>
						<tr>
							<td><strong>{L_540}</strong></td>
							<td>{ADMINMAIL}</td>
						</tr>
						<tr class="bg">
							<td><strong>{L_25_0026}</strong></td>
							<td>{CRON}</td>
						</tr>
						<tr>
							<td><strong>{L_663}</strong></td>
							<td>{GALLERY}</td>
						</tr>
						<tr class="bg">
							<td><strong>{L_2__0025}</strong></td>
							<td>{BUY_NOW}</td>
						</tr>
						<tr>
							<td><strong>{L_5008}</strong></td>
							<td>{CURRENCY}</td>
						</tr>
						<tr class="bg">
							<td><strong>{L_25_0035}</strong></td>
							<td>{TIMEZONE}</td>
						</tr>
						<tr>
							<td><strong>{L_363}</strong></td>
							<td>{DATEFORMAT} <small>({DATEEXAMPLE})</small></td>
						</tr>
						<tr>
							<td><strong>{L_1131}</strong></td>
							<td>{EMAIL_HANDLER}</td>
						</tr>
						<tr class="bg">
							<td><strong>{L_5322}</strong></td>
							<td>{DEFULTCONTRY}</td>
						</tr>
						<tr>
							<td><strong>{L_2__0002}</strong></td>
							<td>
<!-- BEGIN langs -->
								<p>{langs.LANG}<!-- IF langs.B_DEFAULT --> ({L_2__0005})<!-- ENDIF --></p>
<!-- END langs -->
							</td>
						</tr>
						<tr class="bg">
							<td><strong>{L_30_0214}</strong></td>
							<td>{THIS_VERSION} ({CUR_VERSION})</td>
						</tr>
					</table>
					<table class="table table-striped table-bordered">
						<tr class="success">
							<th colspan="4">{L_25_0031}</th>
						</tr>
						<tr>
							<td width="25%"><strong>{L_25_0055}</strong></td>
							<td width="25%">{C_USERS}</td>
							<td width="25%"><strong>{L_25_0056}</strong></td>
							<td width="25%">
<!-- IF USERCONF eq 0 -->
								<strong>{L_893}</strong>: {C_IUSERS}<br>
								<strong>{L_892}</strong>: {C_UUSERS} (<a href="{SITEURL}admin/listusers.php?usersfilter=admin_approve">{L_5295}</a>)
<!-- ELSE -->
								{C_IUSERS}
<!-- ENDIF -->
							</td>
						</tr>
						<tr class="bg">
							<td><strong>{L_25_0057}</strong></td>
							<td>{C_AUCTIONS}</td>
							<td><strong>{L_354}</strong></td>
							<td>{C_CLOSED}</td>
						</tr>
						<tr>
							<td><strong>{L_25_0059}</strong></td>
							<td>{C_BIDS}</td>
							<td><th colspan="2"></th></td>
							
						</tr>
					</table>
					
					<table class="table table-striped table-bordered">
						<tr class="warning"><th colspan="4">{L_25_0063}</th></tr>
						<tr>
							<td><strong>{L_5161}</strong></td>
							<td>{A_PAGEVIEWS}</td>
						</tr>
						<tr>
							<td><strong>{L_5162}</strong></td>
							<td>{A_UVISITS}</td>
						</tr>
						<tr>
							<td><strong>{L_5163}</strong></td>
							<td>{A_USESSIONS}</td>
							</tr>
					</table>
					
					<table class="table table-striped table-bordered">
					<tr class="danger">
						<th colspan="2">{L_080}</th>
					</tr>
					<tr>
						<td width="70%">{L_30_0032}</td>
						<td>
							<form action="?action=clearcache" method="post">
								<input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
								<input type="submit" class="btn btn-primary" name="submit" value="{L_30_0031}">
							</form>
						</td>
					</tr>
										<tr class="bg">
						<td width="70%">{L_30_0032a}</td>
						<td>
							<form action="?action=clear_image_cache" method="post">
								<input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
								<input type="submit" class="btn btn-success" name="submit" value="{L_30_0031a}">
							</form>
						</td>
					</tr>
					<tr>
						<td>{L_1030}</td>
						<td>
							<form action="?action=updatecounters" method="post">
								<input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
								<input type="submit" class="btn btn-warning" name="submit" value="{L_1031}">
							</form>
						</td>
					</tr>
				</table>
				</div>
			</div>
		</div>
