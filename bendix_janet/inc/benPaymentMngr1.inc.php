<div class="title title2">
    <h2>Beneficiary Payment(s) Manager:</h2>
</div>
<fieldset id="beneficiary">
    <ul>
        <li class="first"><label for="benAmount">Payment Amount: </label> </li>
        <li> <span id="benCurrency" class="saved"></span> </li>
        <li> <input type="text" id="benAmount" value="" /> </li>
        <li>
            <select id="benProduct">
                <option>WIRE</option>
                <option>ACH</option>
                <option>DRAFT</option>
                <option>CHEQUE</option>
            </select> 
       </li>
       <li id="lbl_benCurrencyRem"><label for="benCurrencyRem"> Remaining Balance for Payments: </label></li>
       <li id="span_benCurrencyRem"> <span id="benCurrencyRem" class="saved"></span></li>
       <li id="span_benAmountRem"><span id="benAmountRem" class="saved"></span></li>
   </ul>
   <ul>
        <li class="first"><label for="selectBeneficiary">Select Beneficiary:</label></li>
        <li><select id="selectBeneficiary"></select></li>
        <li><select id="beneficiaryAccountNum"></select></li>
        <li><select id="ffc"></select></li>
        <li><button id="btn_info">Information</button></li>
        </li>
    </ul>
    <ul>
        <li class="first"><label for="newBenNotes">Beneficiary Notes:</label></li>
        <li><span id="savedBenNotes" class="saved"></span></li>
        <li><input id="newBenNotes" type="text" value="" /></li>
    </ul>
    <ul>
        <li class="first"><label for="notesForBendix">Notes to BENDIX</label></li>
        <li><input id="notesForBendix" type="text" value="" /></li>
        <li><button id="btnAddLine">Add Payment Line Item</button></li>
        <li><button id="btnSaveEdited">Save Edit Data</button></li>
    </ul>
</fieldset>