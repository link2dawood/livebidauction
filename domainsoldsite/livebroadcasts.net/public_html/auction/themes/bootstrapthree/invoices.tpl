<!-- INCLUDE user_menu_header.tpl -->
<div class="panel panel-default">
<table class="table table-bordered table-condensed table-striped">
<tr style="background-color:{TBLHEADERCOLOUR}">
	<th style="width: 10%; text-align: center;" class="titTable7">{L_1041}</th>
	<th class="titTable7">{L_1039}</th>
	<th style="width: 10%; text-align: center;" class="titTable7">{L_1053}</th>
</tr>
<!-- BEGIN topay -->
<tr>
	<td style="text-align: center;">
		<small>{L_1041}: {topay.INVOICE}</small>
		<p class="smallspan"><small>{topay.DATE}</small></p>
	</td>
	<td>{topay.INFO}</td>
	<td style="text-align: center;">{topay.TOTAL}</td>
</tr>
<!-- END topay -->
</table> 
</div>
<br /><br />

    <div class="text-center">
        {L_5117}&nbsp;{PAGE}&nbsp;{L_5118}&nbsp;{PAGES}
        <br />
        {PREV}
<!-- BEGIN pages -->
		{pages.PAGE}&nbsp;&nbsp;
<!-- END pages -->
        {NEXT}
    </div>


<!-- INCLUDE user_menu_footer.tpl -->