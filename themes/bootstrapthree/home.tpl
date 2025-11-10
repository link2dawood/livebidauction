
<script>
(function(){
    const POLL_INTERVAL = 5000;

    function formatTime(value){
        const h = Math.floor(value / 3600);
        const m = Math.floor((value % 3600) / 60);
        const s = value % 60;
        return h + 'h ' + m + 'm ' + s + 's';
    }

    function parseRemaining(value){
        const numeric = parseInt(value, 10);
        return (isNaN(numeric) || numeric < 0) ? 0 : numeric;
    }

    function setupCountdown(el){
        const auctionId = parseInt(el.dataset.auctionId, 10);
        const endedLabel = el.dataset.endedLabel || 'Ended';
        let state = {
            mode: el.dataset.mode || 'auto',
            remaining: parseRemaining(el.dataset.remaining),
            manualLabel: el.dataset.manualLabel || '',
            autoEnabled: el.dataset.autoEnabled === 'true'
        };

        function render(){
            const remaining = Math.max(state.remaining, 0);
            if (state.mode === 'manual'){
                el.classList.add('countdown-manual');
                el.classList.remove('countdown-auto');
                const label = state.manualLabel || endedLabel;
                el.textContent = remaining > 0 ? label + ' ' + formatTime(remaining) : label;
            } else {
                el.classList.add('countdown-auto');
                el.classList.remove('countdown-manual');
                if (!state.autoEnabled){
                    el.textContent = endedLabel;
                    return;
                }
                if (remaining <= 0){
                    el.textContent = endedLabel;
                    state.autoEnabled = false;
                    return;
                }
                el.textContent = formatTime(remaining);
            }
        }

        function tick(){
            if (state.mode === 'manual' || (state.mode === 'auto' && state.autoEnabled)){
                if (state.remaining > 0){
                    state.remaining -= 1;
                }
                render();
            }
        }

        async function poll(){
            if (!auctionId){
                return;
            }
            try{
                const response = await fetch('func.php?q=' + auctionId + '&t=' + Date.now(), {cache: 'no-store'});
                if (!response.ok){
                    throw new Error('Poll failed');
                }
                const data = await response.json();
                if (typeof data.manual_mode !== 'undefined'){
                    state.mode = data.manual_mode ? 'manual' : 'auto';
                }
                if (typeof data.manual_label !== 'undefined'){
                    state.manualLabel = data.manual_label;
                }
                if (typeof data.remaining !== 'undefined'){
                    state.remaining = parseRemaining(data.remaining);
                }
                if (typeof data.auto_enabled !== 'undefined'){
                    state.autoEnabled = !!data.auto_enabled;
                }
                render();
            } catch(e){
                // Swallow errors; next poll will retry.
            } finally{
                setTimeout(poll, POLL_INTERVAL);
            }
        }

        render();
        setInterval(tick, 1000);
        if (auctionId){
            poll();
        }
    }

    document.addEventListener('DOMContentLoaded', function(){
        document.querySelectorAll('.countdown').forEach(setupCountdown);
    });
})();
</script>

<style>
.countdown {
    display: block;
    margin-top: 4px;
    font-size: 1.05rem;
    font-weight: 600;
}
.countdown-manual {
    color: #c0392b;
    font-size: 1.2rem;
}
.countdown-auto {
    color: #2c3e50;
}
</style>




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
            
      <!-- IF featured.COUNTDOWN_MODE eq 'manual' -->
        <div style="font-size: 16px; font-weight: bold; color: #d9534f; padding: 10px; background-color: #fff3cd; border-radius: 4px;">
            {featured.MANUAL_LABEL}
        </div>
      <!-- ELSE -->
        <div class="countdown" 
           data-remaining="{featured.REMAINING}" 
           data-mode="{featured.COUNTDOWN_MODE}"
           data-manual-label="{featured.MANUAL_LABEL_ATTR}"
           data-auto-enabled="<!-- IF featured.AUTO_ENABLED -->true<!-- ELSE -->false<!-- ENDIF -->"
           data-ended-label="{L_911}"
           data-auction-id="{featured.ID}"
           style="font-size: 14px; font-weight: bold;">
            {featured.ENDS}
        </div>
      <!-- ENDIF -->
 






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