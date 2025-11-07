
<script>
document.querySelectorAll('.countdown').forEach(function(el){
    let remaining = parseInt(el.dataset.remaining, 10);
    const paused = el.dataset.paused === 'true';

    if(paused){
        // frozen countdown
        el.innerHTML = el.innerHTML; // keep the PHP-rendered time
        return; // stop countdown
    }

    function updateCountdown() {
        if(remaining <= 0){
            el.innerHTML = 'Ended';
            clearInterval(interval);
            return;
        }
        const h = Math.floor(remaining / 3600);
        const m = Math.floor((remaining % 3600) / 60);
        const s = remaining % 60;
        el.innerHTML = h + 'h ' + m + 'm ' + s + 's';
        remaining--;
    }

    updateCountdown();
    const interval = setInterval(updateCountdown, 1000);
});

</script>




<div class="row">
       <div class="col-md-3">
<div class="visible-xs visible-sm">
           <div class="dropdown">
  <button class="btn btn-default btn-block dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
    <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true" style="padding-right: 10px;"></span>{L_276}
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu drop-width" role="menu" aria-labelledby="dropdownMenu1">
    <!-- BEGIN cat_list -->
            <li role="presentation"><a role="menuitem" tabindex="-1" href="browse.php?id={cat_list.ID}">{cat_list.IMAGE}{cat_list.NAME}<span>{cat_list.CATAUCNUM}</span></a> </li>
        <!-- END cat_list -->
            <li role="presentation" class="divider"></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="{SITEURL}browse.php?id=0"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>  {L_277}</a></li>
  </ul>
</div><br>
</div>



       <div class="panel panel-default hidden-xs hidden-sm">
  <!-- Default panel contents -->
  <div class="panel-heading"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true" style="padding-right: 10px;"></span>{L_276}</div>
    <div class="list-group">
            
        <!-- BEGIN cat_list -->
            <a class="list-group-item" href="browse.php?id={cat_list.ID}">{cat_list.IMAGE}{cat_list.NAME}<span class="pull-right">{cat_list.CATAUCNUM}</span><br>{cat_list.DESCRIPTION}</a>
        <!-- END cat_list -->
            <a class="list-group-item" href="{SITEURL}browse.php?id=0"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>  {L_277}</a>
    </div>
            </div>
       </div>


       <div class="col-md-6">
          <div class="row">
            <!-- BEGIN featured -->
            <div class="col-md-4 col-sm-4 col-xs-6 featured-item" align="center">
              
                <div><a href="{SITEURL}item.php?id={featured.ID}"><img class="thumbnail img-responsive" style="width: 150px; height: 120px;" src="{featured.IMAGE}"></a></div>
                <div class="feat-title"><a href="{SITEURL}item.php?id={featured.ID}">{featured.TITLE}</a></div>
                <div>{featured.BID}</div>
                <div><small><span class="text-muted">{featured.ENDS}</span></small></div>
            
      <div class="countdown" 
     data-remaining="{$REMAINING}" 
     data-paused="{$PAUSED}">
    {$ENDS}
</div>
 






            </div>
        <!-- END featured -->
           </div>

        <div class="row">
        <!-- IF B_HOT_ITEMS -->
            <div class="col-md-12"><legend>{L_279}</legend></div>
        <!-- BEGIN hotitems -->
            <div class="col-md-4 col-sm-4 col-xs-6 featured-item" align="center">
                <div><a href="{SITEURL}item.php?id={hotitems.ID}"><img class="thumbnail img-responsive" style="width: 150px; height: 120px;" src="{hotitems.IMAGE}"></a></div>
                <div class="feat-title"><a href="{SITEURL}item.php?id={hotitems.ID}">{hotitems.TITLE}</a></div>
                <div>{hotitems.BID}</div>
                <div><small><span class="text-muted">{hotitems.ENDS}</span></small></div>
            </div>
        <!-- END hotitems -->
        <!-- ENDIF -->
        </div>

        <!-- IF B_AUC_LAST -->
   <div class="col-md-6">
        <h4>{L_278}</h4>
    <table class="table table-condensed">
        <!-- BEGIN auc_last -->
        <tr class="well">
           <td> <p style="display:block;"><a href="{SITEURL}item.php?id={auc_last.ID}">{auc_last.TITLE}</a>
                <br><span class="text-muted"><small>{auc_last.DATE}</small></span></p></td>
        </tr>
        <!-- END auc_last -->
    </table>
  </div>
    <!-- ENDIF -->


    <!-- IF B_AUC_ENDSOON -->
       <div class="col-md-6">
            <h4>{L_280}</h4>
          <table class="table table-condensed">
              <!-- BEGIN end_soon -->
              <tr class="well">
                 <td><p style="display:block;"><a href="{SITEURL}item.php?id={end_soon.ID}">{end_soon.TITLE}</a>
                 <br><span class="text-muted"><small>{end_soon.DATE}</small></span></p></td>
              </tr>
        <!-- END end_soon -->
        </table>
      </div>
    <!-- ENDIF -->

</div>

       <div class="col-md-3">
           <!-- IF B_MULT_LANGS -->
    <div class="well">
      <div>{L_2__0001}</div>
      <div>{FLAGS}</div>
    </div>
          <!-- ENDIF -->
         
          <!-- IF B_LOGIN_BOX -->
	     <!-- IF B_LOGGED_IN -->
    <div class="panel panel-default">
    	<div class="panel-heading">{L_200} {YOURUSERNAME}</div>
        <div class="list-group">
        
            <a class="list-group-item" href="{SITEURL}edit_data.php?">{L_244}</a>
            <a class="list-group-item" href="{SITEURL}user_menu.php">{L_622}</a>
            <a class="list-group-item" href="{SITEURL}logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> {L_245}</a>
        
        </div>
    </div>
	<!-- ELSE -->
<div class="panel panel-default">
    <div class="panel-heading">
    	{L_221}
    </div>
    <div class="panel-body">
        <form name="login" action="{SSLURL}user_login.php" method="post">
        <input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
                 <div class="input-group">
                   <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                   <input type="text" name="username" id="username" class="form-control" placeholder="{L_003}">
                 </div>
                    <br>
                 <div class="input-group">
                   <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                   <input type="password" name="password" id="password" class="form-control" placeholder="{L_004}">
                 </div>
                 <div class="pull-right">
                    <small><a href="{SITEURL}forgotpasswd.php">{L_215}</a></small>
                 </div>
                    <br>
             <div class="text-center">
                     <div class="checkbox">
                          <input type="checkbox" name="rememberme" id="rememberme" value="1"><label for="rememberme">&nbsp;{L_25_0085}</label>              
                     </div>
             </div>
             <div class="text-center">
                      <input type="submit" name="action" value="{L_275}" class="btn btn-primary">
             </div>
        </form>
    </div></div>
	<!-- ENDIF -->
<!-- ENDIF -->

     <!-- IF B_HELPBOX -->
     <div class="panel panel-default">
            <div class="panel-heading">{L_281}</div>
             <div class="list-group">
              <!-- IF B_BOARDS -->
              <a  class="list-group-item" href="{SITEURL}boards.php"><span class="glyphicon glyphicon-th-list" aria-hidden="true" style="padding-right: 10px;"></span>{L_5030}</a>
              <!-- ENDIF -->
           <!-- BEGIN helpbox -->
           <a href="{SITEURL}viewhelp.php?cat={helpbox.ID}" alt="faqs"  class="list-group-item new-window">{helpbox.TITLE}</a>
           <!-- END helpbox -->
           </div>
     </div>
     <!-- ENDIF -->

     <!-- IF B_NEWS_BOX -->
     <div class="panel panel-default">
           <div class="panel-heading">{L_282}</div>
       <div class="panel-body">
         <ul class="nav">
           <!-- BEGIN newsbox -->
           <span class="glyphicon glyphicon-file" aria-hidden="true" style="padding-right: 5px;"></span><a href="viewnews.php?id={newsbox.ID}">{newsbox.TITLE}</a><br>
           <span class="text-muted"><small>{newsbox.DATE}</small></span>
           <li class="divider"></li>
           <br>
           <!-- END newsbox --> 
         </ul>
           <div class="pull-right"><a href="{SITEURL}viewallnews.php">{L_341}</a></div>
           <br>
       </div>   
     </div>
     <!-- ENDIF -->

       </div>

</div>