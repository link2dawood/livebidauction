<!-- INCLUDE user_menu_header.tpl -->

<!-- BEGIN items -->
<div class="panel panel-default">
    <div class="panel-heading">
        {L_458} <b><a href="item.php?id={items.AUC_ID}" target="_blank">{items.TITLE}</a></b>
        <small>ID: <a href="item.php?id={items.AUC_ID}" target="_blank">{items.AUC_ID}</a> - {L_25_0121} {items.ENDS}</small>
    </div>
    <div class="panel-body">
        <!-- Removed Seller and Seller's Email fields -->
        <!-- <small>{L_125}:</small> {items.SELLNICK}&nbsp;&nbsp;<span class="label label-info">{items.FB_LINK}</span><br>
        <small>{L_460}:</small> <a href="mailto:{items.SELLEMAIL}">{items.SELLEMAIL}</a><br> -->

        <small>{L_461}:</small> {items.FBID}<br>
        <small>{L_284}:</small> {items.QTY}<br>
        
        <!-- Total Due section (this will be hidden for each item) -->
        <div class="totalDueSection">
            <small>Total Due:</small> {items.TOTAL}
        </div>

        <div class="text-right">
            <!-- IF items.B_PAID -->
                <span class="label label-success">{L_755}</span>
            <!-- ELSE -->
                <form name="" method="post" action="{SITEURL}pay.php?a=2" id="fees">
                    <input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
                    <input type="hidden" name="pfval" value="{items.ID}">
                    <input type="submit" name="Pay" value="{L_756}" class="btn btn-primary btn-sm payNowButton">
                </form>
            <!-- ENDIF -->
        </div>
    </div>
</div>
<!-- END items -->

<!-- INCLUDE user_menu_footer.tpl -->

<!-- JavaScript to hide all "Total Due" sections and "Pay Now" buttons -->
<script type="text/javascript">
    $(document).ready(function() {
        // Hide all "Total Due" sections for each item
        $('.totalDueSection').hide();

        // Hide all "Pay Now" buttons for each item
        $('.payNowButton').closest('form').hide();
    });
</script>
