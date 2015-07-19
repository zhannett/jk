<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	<title>Create Order</title>
        <link rel="stylesheet" type="text/css" href="css/reset.css" />
        <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="css/spottrade.css" media="screen" />
    </head>
    <body>
    	<div class="page">
             <?php include ('inc/header.inc.php');  ?>
             <div id="content">
                <div class="title">
                    <h2>Create Order</h2>
                    <div id="progressbar"></div>
                    <span>Reference #: ST001002003-BT0001</span>
                </div>
                <form id="savedSpottrade" action="" method="">
                    <fieldset>
                        <ul id="tradedata2">
                            <li>
                                <label for="selectAction">Order</label><br/>
                                <select id="selectAction">
                                    <option>BUY</option>
                                    <option>SELL</option>
                                </select>
                            </li>
                            <li>
                                <label for="selectCurrency2">Currency</label><br/>
                                <select id="selectCurrency2" class="currency2">
                                    <option>USD</option>
                                    <option>CAD</option>
                                    <option>EUR</option>
                                    <option>GBP</option>
                                    <option>JPY</option>
                                    <option>AUD</option>
                                    <option>NZD</option>
                                    <option>CHF</option>
                                </select>
                            </li>
                            <li>
                                <label for="amount2">Amount</label><br/>
                                <input type="text" id="amount2" value="" />
                            </li>
                            <li>
                                <label for="selectNumOfPayments"># of Payments</label><br/>
                                <select id="selectNumOfPayments">
                                    <option selected="selected">MULTIPLE</option>
                                    <option>SINGLE</option>
                                </select>
                            </li>
                             <li>
                                <label for="rate">Rate</label><br/>
                                <input type="text" id="rate" class="saved" />
                            </li>
                            <li>
                                <label for="selectCurrency1">Pay By</label><br/>
                                <select id="selectCurrency1" class="currency1">
                                    <option>USD</option>
                                    <option>CAD</option>
                                    <option>EUR</option>
                                    <option>GBP</option>
                                    <option>JPY</option>
                                    <option>AUD</option>
                                    <option>NZD</option>
                                    <option>CHF</option>
                                </select>
                            </li>
                            <li>
                                <label for="amount1">Pay Amount</label><br/>
                                <input type="text" id="amount1" value="" />
                            </li>
                            <li>
                                <label for=savedPayment"">Payment</label><br/>
                                <select id="selectPayment">
                                    <option>PAD CBG-825</option>
                                    <option>PAD CBG-826</option>
                                    <option>PAD CBG-827</option>
                                </select>
                            </li>
                            <li>
                                 <span id="fee"></span>
                            </li>
                            <li>
                                <button id="btn_quote">QUOTE</button><br/>
                                <button id="btn_lockin">LOCK IN</button><br/>
                                <button id="btn_clear">Clear</button>
                            </li>
                        </ul>
                     </fieldset>	
					 <?php include ('inc/benPaymentMngr.inc.php');  ?>
                     <div id="dialog-two-amounts">
                        <p>You cannot have both amount fields filled!</p>
                        <button id="btnOK">OK</button>
                     </div>
                     <div class="buttons">
                        <button id="btnSaveOrder">Save Order</button>
                        <button id="btnClearOrder" type="reset">Clear Order</button>
                        <button id="btnPostForApproval">Post for Approval</button>
                     </div>
         		</div>
             	<?php include ('inc/footer.inc.php');  ?>
         	</div>
         	<?php include ('inc/scripts.inc.php');  ?>
            <script type="text/javascript" src="js/bpm344a4b.js"></script>
        	<!--<script type="text/javascript" src="js/p3createOrder.js"></script>-->
    </body>
</html>