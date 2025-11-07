<div class="row">
			<div class="col-md-3">
				<!-- INCLUDE sidebar-{CURRENT_PAGE}.tpl -->
			</div>
	        <div class="col-md-9">
		
		<div class="row">
			
			<div class="col-md-12 well">
<!-- IF ERROR ne '' -->
				<div class="alert alert-danger" role="alert"><b>{ERROR}</b></div>
<!-- ENDIF -->
				<form action="" method="post">
					<input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
					<div class="row">
						<div class="col-md-12">{MESSAGE}</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-12 text-center">
<!-- IF TYPE eq 1 -->
							<input type="hidden" name="id" value="{ID}">
							<button class="btn btn-primary" type="submit" name="action" value="Yes">{L_030}</button>
							<button class="btn btn-danger" type="submit" name="action" value="No">{L_029}</button>
<!-- ELSEIF TYPE eq 2 -->
							<input type="hidden" name="id" value="{ID}">
							<input type="hidden" name="user" value="{USERID}">
							<button class="btn btn-primary" type="submit" name="action" value="Yes">{L_030}</button>
							<button class="btn btn-danger" type="submit" name="action" value="No">{L_029}</button>
<!-- ENDIF -->
						</div>
					</div>
				</form>
			</div>
			
		</div>
		    </div>
</div>