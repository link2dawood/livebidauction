<div class="well">
    <!-- INCLUDE user_menu_header.tpl -->

    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body">
            <table class="table table-bordered" id="paymentTable">
                <thead>
                    <tr>
                        <th style="width: 22%; text-align: center;" scope="col">{L_1041}</th>
                        <th scope="col">{L_1039}</th>
                        <th style="width: 10%; text-align: center;" scope="col">{L_1053}</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- BEGIN to_pay -->
                    <tr>
                        <th>{L_1041}: AUC{to_pay.AUC_ID}</th>
                        <td>{to_pay.TITLE}</td>
                        <td class="totalAmount" style="text-align: center;">{to_pay.TOTAL}</td>
                    </tr>
                    
                    <!-- END to_pay -->
                      <tr>
                        <th colspan="2" style="text-align: right;">Grand Total</th> <!-- Grand Total Text -->
                        <td id="grandTotal" style="font-weight:700;text-align: center;">0</td> <!-- Grand Total Display -->
                    </tr>
                </tbody>
            </table>

            <!-- Add Grand Total Row -->
          
                  
          
        </div>
    </div>

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

    <!-- INCLUDE user_menu_footer.tpl -->
</div>

<script>
    // Function to calculate grand total
    function calculateGrandTotal() {
        let totalAmountElements = document.querySelectorAll('.totalAmount');
        let grandTotal = 0;

        totalAmountElements.forEach(function(element) {
            grandTotal += parseFloat(element.innerText) || 0; // Add each total, handling NaN if the value is not a valid number
        });

        // Update the grand total on the page
        document.getElementById('grandTotal').innerText = grandTotal.toFixed(2); // Display as a number with two decimal places
    }

    // Call the function to calculate the grand total
    calculateGrandTotal();
</script>
