				<div class="visible-xs visible-sm">
			<div class="dropdown grid-margin-btm-md">
                <button class="btn btn-default btn-block dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    {L_25_0018}, {L_5236} & {L_5030}
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="{SITEURL}admin/news.php">{L_516}</a></li>
                    <li><a href="{SITEURL}admin/aboutus.php">{L_5074}</a></li>
                    <li><a href="{SITEURL}admin/terms.php">{L_5075}</a></li>
                    <li><a href="{SITEURL}admin/privacypolicy.php">{L_402}</a></li>
                    <li><a href="{SITEURL}admin/cookiespolicy.php">{L_1110}</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{SITEURL}admin/faqscategories.php">{L_5230}</a></li>
                    <li><a href="{SITEURL}admin/newfaq.php">{L_5231}</a></li>
                    <li><a href="{SITEURL}admin/faqs.php">{L_5232}</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{SITEURL}admin/boardsettings.php">{L_5047}</a></li>
                    <li><a href="{SITEURL}admin/newboard.php">{L_5031}</a></li>
                    <li><a href="{SITEURL}admin/boards.php">{L_5032}</a></li>
                </ul>
            </div>
        </div>
				
				
				<ul class="list-group hidden-xs">
					<li class="list-group-item active">{L_25_0018}</li>
					<li class="list-group-item"><a href="{SITEURL}admin/news.php">{L_516}</a></li>
					<li class="list-group-item"><a href="{SITEURL}admin/aboutus.php">{L_5074}</a></li>
					<li class="list-group-item"><a href="{SITEURL}admin/terms.php">{L_5075}</a></li>
					<li class="list-group-item"><a href="{SITEURL}admin/privacypolicy.php">{L_402}</a></li>
					<li class="list-group-item"><a href="{SITEURL}admin/cookiespolicy.php">{L_1110}</a></li>
					<li class="list-group-item active">{L_5236}</li>
					<li class="list-group-item"><a href="{SITEURL}admin/faqscategories.php">{L_5230}</a></li>
					<li class="list-group-item"><a href="{SITEURL}admin/newfaq.php">{L_5231}</a></li>
					<li class="list-group-item"><a href="{SITEURL}admin/faqs.php">{L_5232}</a></li>
					<li class="list-group-item active">{L_5030}</li>
					<li class="list-group-item"><a href="{SITEURL}admin/boardsettings.php">{L_5047}</a></li>
					<li class="list-group-item"><a href="{SITEURL}admin/newboard.php">{L_5031}</a></li>
					<li class="list-group-item"><a href="{SITEURL}admin/boards.php">{L_5032}</a></li>
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