<div class="alert alert-info" role="alert">{TOP_MESSAGE}</div>

<div class="well">
   <div class="row">
<div class="col-md-3">
    <img src="images/paypal.gif">
</div>
<div class="col-md-7">
{L_767}
    </div>
<div class="col-md-2 text-right">
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="form_paypal">
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="business" value="nic@wsft.com">
        <input type="hidden" name="receiver_email" value="nic@wsft.com">
        <input type="hidden" name="amount" value="{PAY_VAL}">
        <input type="hidden" name="currency_code" value="{CURRENCY}">
        <input type="hidden" name="return" value="{SITEURL}validate.php?completed">
        <input type="hidden" name="cancel_return" value="{SITEURL}validate.php?fail">
        <input type="hidden" name="item_name" value="{TITLE}">
        <input type="hidden" name="undefined_quantity" value="0">
        <input type="hidden" name="no_shipping" value="1">
        <input type="hidden" name="no_note" value="1">
        <input type="hidden" name="custom" value="{CUSTOM_CODE}">
        <input type="hidden" name="notify_url" value="{SITEURL}validate.php?paypal">
        <input class="btn btn-primary" name="submit" type="submit" value="{L_756}" border="0">
    </form>
</div>

<!-- IF B_ENAUTHNET -->
<div class="col-md-3">
    <img src="images/authnet.gif">
</div>
<div class="col-md-7">
    Authorize.Net
</div>
<div class="col-md-2 text-right">
    <form action="https://secure.authorize.net/gateway/transact.dll" method="post" id="form_authnet">
        <input type="hidden" name="x_description" value="{TITLE}">
        <input type="hidden" name="x_login" value="{AN_PAYTOID}">
        <input type="hidden" name="x_amount" value="{PAY_VAL}">
        <input type="hidden" name="x_show_form" value="PAYMENT_FORM">
        <input type="hidden" name="x_relay_response" value="TRUE">
        <input type="hidden" name="x_relay_url" value="{SITEURL}validate.php?authnet">
        <input type="hidden" name="x_fp_sequence" value="{AN_SEQUENCE}">
        <input type="hidden" name="x_fp_timestamp" value="{TIMESTAMP}">
        <input type="hidden" name="x_fp_hash" value="{AN_KEY}">
        <input type="hidden" name="custom" value="{CUSTOM_CODE}">
        <input class="btn btn-primary" name="submit" type="submit" value="{L_756}" border="0">
    </form>
</div>
<!-- ENDIF -->

<!-- IF B_ENWORLDPAY -->
<div class="col-md-3">
    <img src="images/worldpay.gif">
</div>
<div class="col-md-7">
    WorldPay
</div>
<div class="col-md-2 text-right">
    <form action="https://select.worldpay.com/wcc/purchase" method="post" id="form_worldpay">
    	<input type="hidden" name="instId" value="{WP_PAYTOID}">
        <input type="hidden" name="amount" value="{PAY_VAL}">
        <input type="hidden" name="currency" value="{CURRENCY}">
        <input type="hidden" name="desc" value="{TITLE}">
        <input type="hidden" name="MC_callback" value="{SITEURL}validate.php?worldpay">
        <input type="hidden" name="cartId" value="{CUSTOM_CODE}">
        <input class="btn btn-primary" name="submit" type="submit" value="{L_756}" border="0">
    </form>
</div>
<!-- ENDIF -->

<!-- IF B_ENMONEYBOOKERS -->
<div class="col-md-3">
    <img src="images/moneybookers.gif">
</div>
<div class="col-md-7">
    Moneybookers
</div>
<div class="col-md-2 text-right">
    <form action="https://www.moneybookers.com/app/payment.pl" method="post" id="form_moneybookers">
    	<input type="hidden" name="pay_to_email" value="{MB_PAYTOEMAIL}">
        <input type="hidden" name="amount" value="{PAY_VAL}">
        <input type="hidden" name="language" value="EN">
        <input type="hidden" name="merchant_fields" value="trans_id">
        <input type="hidden" name="currency" value="{CURRENCY}">
        <input type="hidden" name="return_url" value="{SITEURL}validate.php?completed">
        <input type="hidden" name="cancel_url" value="{SITEURL}validate.php?fail">
        <input type="hidden" name="status_url" value="{SITEURL}validate.php?moneybookers">
        <input type="hidden" name="trans_id" value="{CUSTOM_CODE}">
        <input class="btn btn-primary" name="submit" type="submit" value="{L_756}" border="0">
    </form>
</div>
<!-- ENDIF -->

<!-- IF B_ENMONEYBOOKERS -->
<div class="col-md-3">
    <img src="images/toocheckout.gif">
</div>
<div class="col-md-7">
    2Checkout
</div>
<div class="col-md-2 text-right">
    <form action="https://www2.2checkout.com/2co/buyer/purchase" method="post" id="form_toocheckout">
    	<input type="hidden" name="sid" value="{TC_PAYTOID}">
        <input type="hidden" name="total" value="{PAY_VAL}">
        <input type="hidden" name="cart_order_id" value="{CUSTOM_CODE}">
        <input class="btn btn-primary" name="submit" type="submit" value="{L_756}" border="0">
    </form>
</div>
<!-- ENDIF -->
   </div>
</div>
<!-- IF B_TOUSER -->
<div class="alert alert-danger text-center" role="alert">
    {TOUSER_STRING}
</div>
<!-- ENDIF -->