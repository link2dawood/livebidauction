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
						<div class="col-md-6">
							<input type="hidden" name="id" value="{ID}">
              <label>Duration</label>
              <select name="duration" class="form-control">
          	<option "<!-- IF DATE eq 1 -->" selected="true" "<!-- ENDIF -->" value="1">1 day</option>
          	<option "<!-- IF DATE eq 2 -->" selected="true" "<!-- ENDIF -->" value="2">2 days</option>
          	<option "<!-- IF DATE eq 2.5 -->" selected="true" "<!-- ENDIF -->" value="2.5">2.5 days</option>
          	<option "<!-- IF DATE eq 3 -->" selected="true" "<!-- ENDIF -->" value="3">3 days</option>
          	<option "<!-- IF DATE eq 7 -->" selected="true" "<!-- ENDIF -->" value="7">1 week</option>
          	<option "<!-- IF DATE eq 14 -->" selected="true" "<!-- ENDIF -->" value="14">2 weeks</option>
          	<option "<!-- IF DATE eq 21 -->" selected="true" "<!-- ENDIF -->" value="21">3 weeks</option>
          	<option "<!-- IF DATE eq 30 -->" selected="true" "<!-- ENDIF -->" value="30">1 month</option>
          </select>
        </div>
        <div class="col-md-6">
          <br>
							<button class="btn btn-primary" type="submit" name="action" value="save">Save</button>
						</div>
					</div>
				</form>
			</div>

		</div>
		    </div>
</div>
