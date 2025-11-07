		<div class="row">
			<div class="col-md-3">
				<!-- INCLUDE sidebar-{CURRENT_PAGE}.tpl -->
			</div>
			<div class="col-md-9">
				<ol class="breadcrumb"><i class="fa fa-cogs"></i>  <li>{L_25_0018}</li><li>{L_516}</li></ol>
				<div class="alert alert-info">{NEWS_COUNT}{L_517}</div>
				<table class="table table-bordered table-hover table-striped">
					<tr>
						<th width="20%">{L_314}</th>
						<th width="60%">{L_312}</th>
						<th>{L_297}</th>
					</tr>
<!-- BEGIN news -->
					<tr {news.BG}>
						<td>{news.DATE}</td>
						<td <!-- IF news.SUSPENDED eq 1 -->style="background: #FAD0D0; color: #B01717; font-weight: bold;"<!-- ENDIF -->>{news.TITLE}</td>
						<td>
						    <div class="btn-group" role="group" aria-label="...">
							<a class="btn btn-success btn-xs" href="editnew.php?id={news.ID}&PAGE={PAGE}" title="{L_298}"><i class="fa fa-edit"></i></a>
							<a class="btn btn-danger btn-xs" href="deletenew.php?id={news.ID}&PAGE={PAGE}" title="{L_008}"><i class="fa fa-trash"></i></a>
							</div>
						</td>
					</tr>
<!-- END news -->
				</table>
				<div class="plain-box"><a class="btn btn-primary" href="addnew.php" class="button">{L_518} <i class="fa fa-plus"></i></a></div>
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