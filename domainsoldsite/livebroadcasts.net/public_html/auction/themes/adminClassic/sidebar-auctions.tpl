		<div class="visible-xs visible-sm">
			<div class="dropdown grid-margin-btm-md">
                <button class="btn btn-default btn-block dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    {L_239} & {L_moderation}
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="{SITEURL}admin/listauctions.php">{L_067}</a></li>
                    <li><a href="{SITEURL}admin/listclosedauctions.php">{L_214}</a></li>
                    <li><a href="{SITEURL}admin/listreportedauctions.php">{L_view_reported_auctions}</a></li>
                    <li><a href="{SITEURL}admin/listsuspendedauctions.php">{L_5227}</a></li>
                    <li><a href="searchauctions.php">{L_067a}</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{SITEURL}admin/moderateauctions.php">{L_moderation_queue}</a></li>
                </ul>
            </div>
        </div>
				
				
			<div>
				<ul class="list-group hidden-xs">
					<li class="list-group-item active">{L_239}</li>
					<li class="list-group-item"><a href="{SITEURL}admin/listauctions.php">{L_067}</a></li>
					<li class="list-group-item"><a href="{SITEURL}admin/listclosedauctions.php">{L_214}</a></li>
					<li class="list-group-item"><a href="{SITEURL}admin/listreportedauctions.php">{L_view_reported_auctions}</a></li>
					<li class="list-group-item"><a href="{SITEURL}admin/listsuspendedauctions.php">{L_5227}</a></li>
					<li class="list-group-item"><a href="searchauctions.php">{L_067a}</a></li>
				</ul>
				<ul class="list-group hidden-xs">
					<li class="list-group-item active">{L_moderation}</li>
					<li class="list-group-item"><a href="{SITEURL}admin/moderateauctions.php">{L_moderation_queue}</a></li>
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
			</div>