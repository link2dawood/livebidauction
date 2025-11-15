<div class="well">
<div class="alert alert-info" role="alert"><b>Total Outstandings:</b>
    {USER_BALANCE}</div>
<div class="row">
    <div class="col-lg-6">
    	<form name="" method="post" action="pay.php?a=8" id="fees">
              <input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
              <div class="form-group">
              <div class="input-group">
                  <span class="input-group-addon">{CURRENCY}</span>
                    <input type="text" name="pfval" value="{PAY_BALANCE}" class="form-control">
                    <input type="hidden" name="user_id" value="{USER_ID}" class="form-control">
                     <span class="input-group-btn"><input type="submit" name="{L_1104}" value="{L_1104}" class="btn btn-primary"></span>
              </div>
              </div>
        </form>
    </div>

    <div class="col-lg-6"><div class="form-group">
    <a class="btn btn-warning hide" href="{SITEURL}invoices.php">{L_1057}</a></div>

</div>
</div>
</div>

<!-- BEGIN to_pay -->
       <div class="panel panel-default">
        <div class="panel-heading">
              <!-- IF to_pay.WINNER_LABEL -->
                <span class="label label-info" style="margin-right:8px;">Winner ID: {to_pay.WINNER_LABEL}</span>
              <!-- ENDIF -->
              <!-- IF to_pay.B_NOTITLE -->
    	            {L_113} {to_pay.ID}
              <!-- ELSE -->
    	            <a href="{to_pay.URL}" target="_blank">{to_pay.TITLE}</a>
              <!-- ENDIF -->
        </div>
           <div class="panel-body">
                    <div class="row">
                       <div class="col-md-3 col-sm-3">
                    <p><small>{L_847}:</small> {to_pay.BID}</p>
                    <p><small>{L_350_1004}:</small> {to_pay.QUANTITY}</p>
					</div>
                       <div class="col-md-9 col-sm-9">
                  <div class="well well-sm">
                    <small>{L_319}:</small> {to_pay.SHIPPING}<br>
                    <small>{L_189}:</small> {to_pay.SHIPPING} x 1 = {to_pay.SHIPPING} / <small>{L_350_1009}</small> {to_pay.ADDITIONAL_SHIPPING} x {to_pay.ADDITIONAL_SHIPPING_QUANTITYS} = {to_pay.ADDITIONAL_SHIPPING_COST}<br>
					<small>{to_pay.BUYER_FEE}:</small> {to_pay.BUYER_FEE_VAL} <br>
					<!-- IF to_pay.TAX_FEE_COUNT gt 0 -->
					<small>{to_pay.TAX_TITLE}:</small> {to_pay.TAX_FEE}
					<!-- ENDIF -->
					</div>
                  </div>
				  
                   </div>                  

                    <div class="row">
<div class="col-md-4 col-md-offset-6 col-sm-6 col-sm-offset-4 col-xs-7">
                    <div class="alert alert-danger text-center" role="alert">{L_189}: {to_pay.TOTAL}</div>
                  </div>
                    <div class="col-md-2 col-sm-2 col-sx-5 text-right">
                    <form name="" class="hide" method="post" action="{SITEURL}admin/pay.php?a=2" id="fees">
                       <input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
    	               <input type="hidden" name="pfval" value="{to_pay.ID}">
					   <input type="hidden" name="user_id" value="{USER_ID}" class="form-control">
                       <input type="submit" name="Pay" value="{L_756}" class="btn btn-primary btn-xs">
                    </form>
                    <p><form name="" method="post" action="{SITEURL}order_print.php?hash={HASH}" id="fees" title="Print Invoice" target="_blank">
                       <input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
    	               <input type="hidden" name="pfval" value="{to_pay.AUC_ID}">
		       <input type="hidden" name="pfwon" value="{to_pay.WINID}">
		       <input type="hidden" name="user_id" value="{USER_ID}">
                       <input type="submit" type="button" value="{L_1058}" class="btn btn-default btn-xs">
                    </form></p>
                    </div>
                    </div>
           </div>
       </div>
<!-- END to_pay -->


<br />
    <div class="text-center">
        {L_5117}&nbsp;{PAGE}&nbsp;{L_5118}&nbsp;{PAGES}
        <br />
        {PREV}
<!-- BEGIN pages -->
		{pages.PAGE}&nbsp;&nbsp;
<!-- END pages -->
        {NEXT}
    </div>