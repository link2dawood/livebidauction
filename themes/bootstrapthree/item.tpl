<script type="text/javascript">
$(document).ready(function() {
	var $counter = $('#ending_counter');
	if (!$counter.length) {
		return;
	}

	var mode = $counter.data('mode') || 'auto';
	var autoEnabled = $counter.data('auto-enabled');
	var manualLabel = $counter.data('manual-label') || '';
	var endedLabel = $counter.data('ended-label') || '';
	var remaining = parseInt($counter.data('remaining'), 10);
	if (isNaN(remaining) || remaining < 0) {
		remaining = 0;
	}

	function pad(val) {
		return (val.toString().length === 1) ? '0' + val : val;
	}

	function formatTime(seconds) {
		var hours = Math.floor(seconds / 3600);
		var mins = Math.floor((seconds % 3600) / 60);
		var secs = Math.floor(seconds % 60);
		return pad(hours) + ':' + pad(mins) + ':' + pad(secs);
	}

	function renderManual() {
		if (remaining <= 0) {
			$counter.text(manualLabel || 'Awaiting SOLD');
			return;
		}
		$counter.text((manualLabel ? manualLabel + ' ' : '') + formatTime(remaining));
		remaining--;
		setTimeout(renderManual, 1000);
	}

	function renderAuto() {
		if (!autoEnabled) {
			return;
		}
		remaining--;
		if (remaining > 0) {
			$counter.text(formatTime(remaining));
			setTimeout(renderAuto, 1000);
		} else {
			$counter.html('<div class="error-box">' + endedLabel + '</div>');
		}
	}

	if (mode === 'manual') {
		renderManual();
	} else {
		setTimeout(renderAuto, 1000);
	}
});
</script>

<script type="text/javascript">
$(document).ready( function () {
function showHint()
{
	var random = Math.random( );
	document.getElementById("showText").innerHTML = "Number: " + random;
}
});
</script>

    <script>
    // Set the date we're counting down to
    // 1. JavaScript
    // var countDownDate = new Date("April 24, 2025 18:54:00").getTime();
    // 2. PHP
    var countDownDate = '{ENDING}' * 1000;
    var now = '{NOW}' * 1000;

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get todays date and time
        // 1. JavaScript
        // var now = new Date().getTime();
        // 2. PHP
        now = now + 1000;

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
				var offset = '{TIMEZONE}';
        // Output the result in an element with id="demo"
        document.getElementById("liveauction_start").innerHTML = 'Starts in '+ days + "d " + hours + "h " +
            minutes + "m " + seconds + "s "+ 'P.S.T';

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("liveauction_start_end").innerHTML = "";
        }
    }, 1000);
    </script>

<div class="row">
	<div class="col-md-12">
           <ul class="breadcrumb"><b>{L_041}:</b> {TOPCATSPATH}</ul>
                      



        <div class="panel panel-default sm-padding" style="text-align: right;">
		{VIEW_HISTORY1} |
		<a href="{SITEURL}friend.php?id={ID}">{L_106}</a> |
<!-- IF B_CANCONTACTSELLER -->
		<a href="{SITEURL}send_email.php?auction_id={ID}">{L_922}</a> |
<!-- ENDIF -->
<!-- IF B_LOGGED_IN -->
		<a href="{SITEURL}item_watch.php?{WATCH_VAR}={ID}">{WATCH_STRING}</a>
<!-- ELSE -->
		<a href="{SITEURL}user_login.php?">{L_5202}</a>
<!-- ENDIF -->
	</div>
	<div id="your_message_">
<!-- IF B_USERBID and TEMP_SUSPEND eq 1-->
	<div class="alert alert-success" role="alert">
		{YOURBIDMSG} {AUCTIONSTATUS}
	</div>
	<!-- ELSEIF TEMP_SUSPEND eq 0 -->
	<div class="alert alert-danger" role="alert">
		{SUSPEND_MESSAGE}
	</div>
<!-- ENDIF -->
</div>
<!-- IF REG_FEE_PAID neq '' -->
	<div class="alert alert-danger" role="alert">
		{REG_FEE_PAID}
	</div>
<!-- ENDIF -->


            <div class="row grid-padding">
             <div class="col-md-5 col-sm-5 grid-padding">
                <div class="item-title visible-xs text-capitalize">{TITLE}</div>


                 <!-- IF B_HASIMAGE -->
                   <div class="main-gallery panel panel-default">
                        <div class="panel-heading"><span class="label label-default">{L_113}: {ID}</span>
                        </div>
                            <div class="panel-body"><div class="col-md-12">
                               <img class="img-rounded img-responsive center-block" src="{SITEURL}getthumb.php?w={THUMBWIDTH}&fromfile={PIC_URL}" border="0" align="center" width="430px"></div>
               <!-- IF B_HASGALELRY -->
                      <div> <a name="gallery"></a>
                            <div id="gallery">
                                <!-- BEGIN gallery --><div class="col-md-4 col-xs-4 col-sm-4">
				<a href="{SITEURL}{UPLOADEDPATH}{ID}/{gallery.V}" title="">
					<img class="img-rounded img-responsive" src="{SITEURL}getthumb.php?w={THUMBWIDTH}&fromfile={UPLOADEDPATH}{ID}/{gallery.V}" border="0"></a></div>
		                <!-- END gallery -->
                            </div>
                      </div>
                           </div>
                              <div class="panel-footer">{L_611} <font color="#ff3300"><b>{AUCTION_VIEWS}</b></font> {L_612}</div>
                   </div>

	         <!-- ENDIF -->
                 <!-- ELSE -->
                        <div class="panel panel-default">
                          <div class="panel-heading"><span class="label label-default">{L_113}: {ID}</span></div>
                            <div class="panel-body">
                         <img class="thumbnail img-responsive center-block" src="{SITEURL}/themes/{THEME}/img/no-picture-gallery.png" alt="no picture" width="430px" />
                            </div>
                              <div class="panel-footer">{L_611} <font color="#ff3300"><b>{AUCTION_VIEWS}</b></font> {L_612}</div>
                        </div>
                 <!-- ENDIF -->
             </div>

             <div class="col-md-7 col-sm-7">
                  <div class="item-title hidden-xs text-capitalize">{TITLE}</div>
		<!-- IF B_CANEDIT -->
	  			<a class="btn btn-primary btn-xs" href="{SITEURL}edit_active_auction.php?id={ID}">{L_30_0069}</a>
                <!-- ENDIF -->

				<div class="panel panel-default">
					  <table class="table table-bordered table-condensed table-striped">
						<!-- auction type -->
						<tr>
						 <td width="30%" align="left">{L_261}: </td>
						  <td align="left">Live Auction</td>
						</tr>
						<!-- higher bidder -->
<!-- IF B_HASBUYER and B_NOTBNONLY -->
						<tr>
						  <td width='30%' style="leftpan" valign="top">
							{L_117}:
						  </td>
						  <td>
	<!-- BEGIN high_bidders -->

		<!-- IF B_BIDDERPRIV -->
							<b id="buyer">{high_bidders.BUYER_NAME}</b>
		<!-- ELSE -->
							<a href="{SITEURL}profile.php?user_id={high_bidders.BUYER_ID}&auction_id={ID}"><b>{high_bidders.BUYER_NAME}</b></a>
							<b>(<a href="{SITEURL}feedback.php?id={high_bidders.BUYER_ID}&faction=show">{high_bidders.BUYER_FB}</a>)</b>
		<!-- ENDIF -->
							{high_bidders.BUYER_FB_ICON}
	<!-- END high_bidders -->
						  </td>
						 </tr>
<!-- ENDIF -->
<!-- IF QTY gt 1 -->
						<tr>
						  <td width="30%" align="left">{L_901}: </td>
						  <td align="left">{QTY}</td>
						</tr>
<!-- ENDIF -->
<!-- IF B_NOTBNONLY -->
						<tr>
						  <td width="30%" align="left">{L_119}: </td>
						  <td align="left"><span id="NoBids">{NUMBIDS}</span> {VIEW_HISTORY2}</td>
						</tr>
	<!-- IF ATYPE eq 2 -->
						<tr>
						  <td width="30%" align="left">
						  	{L_038}:
						  </td>
						  <td align="left">{MINBID}</td>
						</tr>
	<!-- ENDIF -->
						<tr>
						  <td width="30%" align="left">{L_116}: </td>
						  <td align="left" valign="middle"><span id="current_bid">{MAXBID}</span><!-- IF B_HASRESERVE -->&nbsp;<span class="text-muted"><small>{L_514}<small></span><!-- ENDIF --></td>
						</tr>
<!-- ENDIF -->
						<tr>
						  <td width="30%" align="left">{L_023}: </td>
						  <td align="left">{SHIPPING_COST}</td>
						</tr>
<!-- IF B_ADDITIONAL_SHIPPING_COST or B_BUY_NOW_ONLY-->
						<tr>
						  <td width="30%" align="left">{L_350_1008}: </td>
						  <td align="left">{ADDITIONAL_SHIPPING_COST}</td>
						</tr>
<!-- ENDIF -->
<!-- IF B_BUY_NOW -->
						<tr>
						  <td width="30%" align="left">{L_496}:</td>
						  <td align="left">
						  	{BUYNOW2}
						  </td>
						</tr>
<!-- ENDIF -->
<!-- IF B_HASENDED -->
						<tr>
						  <td colspan="2" align="left"><b>{L_904}</b></td>
						</tr>
<!-- ENDIF -->
					  </table>
                                       </div>

             </div>

			<div class="col-md-7 col-sm-9">
				<div class="panel panel-default">
					<div class="panel-heading"><b>Auction Updates</b></div>

				<div class="panel-body"">
					<div id="somid">
						<p id="demo"><span class='alert alert-success'>Click here to view live updates about this auction</span></p>
						<script>
							$(document).ready(function () {
								myFunction();
							});
							function myFunction()
							{



								var xmlhttp = new XMLHttpRequest();

							    xmlhttp.onreadystatechange = function() {
							        if (xmlhttp.readyState == XMLHttpRequest.DONE) {
							           if (xmlhttp.status == 200) {
									   var result = JSON.parse(xmlhttp.responseText);

							               document.getElementById("demo").innerHTML = result.result;
							               document.getElementById("current_bid").innerHTML = result.current_bid;
							               document.getElementById("NoBids").innerHTML = result.num_bids;
														 if (document.getElementById("buyer")) {
															    document.getElementById("buyer").innerHTML = result.Winner;
															}

							              /* document.getElementById("your_message").innerHTML = result.bid_message; */
							           }
							           else if (xmlhttp.status == 400) {
							              alert('Something went wrong with the live update...');
							           }
							        }
							    };

							    xmlhttp.open("GET", '{SITEURL}/func.php?q='+{ID}, true);
						        xmlhttp.send();
							  	setTimeout(myFunction, 1000);
							}

						</script>
					</div>
				</div>
			</div>

             <div class="col-md-12 col-sm-12">
				<div class="panel panel-default">
					<div class="panel-heading"><b>Live Stream <span id="liveauction_start_end">
						 <span class="" style="background-color:#ff3300; color:#fff; padding:5px;">
							 <span id="liveauction_start"></span>
						 </span></span></b>
					 </div>

				<div class="panel-body">
				<div>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/HtoSy3x7Bk0" title="Previously Unknown Patek Philippe Smashes its Estimate at Auction | Sotheby&#39;s" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				</div>
				</div>
			</div>




<!-- IF B_HASENDED eq false and B_CAN_BUY -->
               <div class="well well-sm">
                          <div class="row">
	<!-- IF B_NOTBNONLY -->
	<!-- IF TEMP_SUSPEND eq 1 -->
	<!-- IF REG_FEE_PAID eq '' -->

				          <form name="bid" id="placeBid" action="{BIDURL}bid.php" method="post">
				               <div class="form-group">
                                                   <div class="col-md-3 col-md-offset-2">
		                       <!-- IF QTY gt 1 -->
							 <input type="text" class="form-control" name="qty" placeholder="{L_284}"> {QTY} {L_5408}
		                       <!-- ENDIF -->
							 <input type="text" class="form-control bid-offer" name="bid" placeholder="{L_121}">
                                                   </div>
                                               </div>
                                               <div class="col-md-5">
		                      <!-- IF ATYPE eq 1 -->
						  <div class="bg-warning md-padding">{L_124}: {NEXTBID}</div><br>
		                      <!-- ENDIF -->
					       </div>
				   <div class="col-md-8 col-md-offset-2">
					 <input type="hidden" name="seller_id" value="{SELLER_ID}">
					 <input type="hidden" name="title" value="{TITLE}" >
					 <input type="hidden" name="category" value="{CAT_ID}" >
					 <input type="hidden" name="id" value="{ID}">
                     <input type="hidden" name="csrftoken" value="{_CSRFTOKEN}">
					 <input type="submit" name="" value="{L_30_0208}" data-toggle="modal" data-target="#bidProceed" class="form-control btn btn-primary">
                                  </div>

				         </form>
						<!-- ENDIF -->
						<!-- ENDIF -->
	                              <!-- ELSE -->
                                         <div class="col-md-8 col-md-offset-2">
				{BUYNOW} <a class="btn btn-success btn-block" href="{BIDURL}buy_now.php?id={ID}">{L_496}</a>
                                         </div>


	                              <!-- ENDIF -->
                       </div>
               </div>

                                      <!-- ENDIF -->

                    </div>
                </div>
             </div></div>


<div class="row">
    <div class="col-md-12">


          <div class="panel panel-default">
              <div class="panel-heading">
                 <h3 class="panel-title"><a name="description"></a>{L_018}</h3>
              </div>
                <div class="panel-body">
                {AUCTION_DESCRIPTION}
                </div>
          </div>

        <!-- IF B_HAS_QUESTIONS -->
	<div class="panel panel-default">
             <div class="panel-heading">
             <h3 class="panel-title"><a name="questions"></a>{L_552}</h3>
             </div>
                 <div class="panel-body">
        <!-- BEGIN questions -->
      	        <span class="glyphicon glyphicon-comment" aria-hidden="true" style="padding-right: 10px;"></span>{L_5239}
                 <div class="well well-sm">
		<!-- BEGIN conv -->
        	<p><span class="text-muted"><small>{questions.conv.BY_WHO}:</small></span> {questions.conv.MESSAGE}</p>
                <!-- END conv -->
                </div>
        <!-- END questions -->
                </div>
        </div>
        <!-- ENDIF -->


<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">{L_724}</h3>
  </div>
  <div class="panel-body">
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
	  <tr>
		<td>
		  <div class="tableContent2">
			<div class="table2">
<!-- IF COUNTRY ne '' or ZIP ne '' -->
			  <b>{L_014}:</b> {COUNTRY} ({ZIP})<br>
<!-- ENDIF -->
			  <b>{L_025}:</b> {SHIPPING}, {INTERNATIONAL}<br>
<!-- IF SHIPPINGTERMS ne '' -->
			  <table border="0" cellpadding="0" cellspacing="0">
				<tr>
				  <td valign="top"><b>{L_25_0215}:</b>&nbsp;</td>
				  <td valign="top">{SHIPPINGTERMS}</td>
				</tr>
			  </table>
<!-- ENDIF -->
			  <br>
			  <b>{L_026}:</b> {PAYMENTS}<br>
<!-- IF ! B_BUY_NOW_ONLY -->
			  <b><!-- IF ATYPE eq 1 -->{L_127}<!-- ELSE -->{L_038}<!-- ENDIF -->:</b> {MINBID}<br>
<!-- ENDIF -->
			  <br>
			  <b>{L_113}:</b> {ID}<br>
			  <br>
			  <b>{L_041}:</b> {CATSPATH}<br>
              <!-- IF SECCATSPATH ne '' --><b>{L_814}:</b> {SECCATSPATH}<!-- ENDIF -->
			</div>
		  </div>
		</td>
	  </tr>
	</table>
  </div>
</div>

        <!-- IF B_SHOWHISTORY -->
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><a name="history"></a>{L_26_0001}</h3>
  </div>
  <div class="panel-body">
    <table class="table table-bordered table-striped table-condensed">
			<tr>
				<th width="33%" align="center">{L_176}</th>
				<th width="33%" align="center">{L_130}</th>
				<th width="33%" align="center">{L_175}</th>
	<!-- IF ATYPE eq 2 -->
				<th width="33%" align="center">{L_284}</th>
	<!-- ENDIF -->
			</tr>
	<!-- BEGIN bidhistory -->
			<tr valign="top" {bidhistory.BGCOLOUR}>
				<td>
		<!-- IF B_BIDDERPRIV -->
					{bidhistory.NAME}
		<!-- ELSE -->
					<a href="{SITEURL}profile.php?user_id={bidhistory.ID}">{bidhistory.NAME}</a>
		<!-- ENDIF -->
				</td>
				<td align="center">
					{bidhistory.BID}
				</td>
				<td align="center">
					{bidhistory.WHEN}
				</td>
		<!-- IF ATYPE eq 2 -->
				<td align="center">
					{bidhistory.QTY}
				</td>
		<!-- ENDIF -->
			</tr>
	<!-- END bidhistory -->
		</table>
  </div>
</div>
<!-- ENDIF -->
<div id="bidProceed" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">
	<div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Confirm Bid</h4>

     </div>
	 <div class="modal-body bid">

	</div>

	 <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left close_btn">Close</button>

        </div>
    </div>

  </div>

</div>
<script>
$('#placeBid').on('submit', function(e){
           e.preventDefault();
		   	 var data = $(this).serialize();
		 console.log(data);
		var url = $(this).attr('action');

	$.ajax({
      url:url,
      method: "POST",
	  data: data,
      success:function(respuesta){
	 // console.log(respuesta);
      $('.bid').html(respuesta);
      $('.bid-offer').val("");


	  },
	  error:function(res){
	    $('.bid').html(res);
	  }

  	})

})
 /*  function proceedBid(th){


 } */
</script>

</div>
</div>
</div>
</div>
