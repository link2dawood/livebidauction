				<div class="visible-xs visible-sm">
			<div class="dropdown grid-margin-btm-md">
                <button class="btn btn-default btn-block dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    {L_25_0023}
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					<li><a href="{SITEURL}admin/stats_settings.php">{L_5142}</a></li>
					<li><a href="{SITEURL}admin/viewaccessstats.php">{L_5143}</a></li>
					<li><a href="{SITEURL}admin/viewbrowserstats.php">{L_5165}</a></li>
					<li><a href="{SITEURL}admin/viewplatformstats.php">{L_5318}</a></li>
					<li><a href="{SITEURL}admin/analytics.php">{L_google_analytics}</a></li>
                </ul>
            </div>
        </div>
				
				
				<ul class="list-group hidden-xs">
					<li class="list-group-item active">{L_25_0023}</li>
					<li class="list-group-item"><a href="{SITEURL}admin/stats_settings.php">{L_5142}</a></li>
					<li class="list-group-item"><a href="{SITEURL}admin/viewaccessstats.php">{L_5143}</a></li>
					<li class="list-group-item"><a href="{SITEURL}admin/viewbrowserstats.php">{L_5165}</a></li>
					<li class="list-group-item"><a href="{SITEURL}admin/viewplatformstats.php">{L_5318}</a></li>
					<li class="list-group-item"><a href="{SITEURL}admin/analytics.php">{L_google_analytics}</a></li>
				</ul>
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