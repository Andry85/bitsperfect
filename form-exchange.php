<div class="container-fluid bgc">
  <div class="container">
    <div class="row form-1">
          <div class="form-2 col-lg-6 col-md-6 nopd">
              <form action="exchange.php" method="post" novalidate="novalidate">

                <div class="alert alert-danger fade in col-xs-12">
                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                  <strong>Error!</strong> A problem has been occurred while submitting your data. A problem has been occurred while submitting your data. A problem has been occurred while submitting your data.
                </div>

                <div class="xsui-form-label">PIN Monesgramik:</div>
                <div class="new-form-credit col-sm-12 col-md-6 small_padding">
                    <input name="pin" required type="text" maxlength="19" placeholder="Your PIN Monesgramik" value="" class="pin-bottom-5">
                </div>
                <div class="new-form-credit col-xs-6 col-md-3 small_padding">
                  <input name="value" value="" maxlength="7"  placeholder="10" type="text" />
                </div>
                <div class="new-form-credit col-xs-6 col-md-3 small_padding">
                  <select class="chzn-select">
                    <option value="EUR">EUR</option>
                    <option value="CHF">CHF</option>
                    <option value="GBP">GBP</option>
                    <option value="CAD">CAD</option>
                    <option value="USD">USD</option>
                    <option value="RON">RON</option>
                    <option value="NOK">NOK</option>
                    <option value="MXN">MXN</option>
                    <option value="HRK">HRK</option>
                    <option value="PLN">PLN</option>
                    <option value="PLN">CZK</option>
                    <option value="PLN">DKK</option>
                    <option value="PLN">SEK</option>
                    <option value="PLN">AUD</option>
                    <option value="PLN">HUF</option>
                    <option value="PLN">KWD</option>
                  </select>
                </div>
                <div class="new-form-clear"></div>
                <div class="xsui-form-label">Payment method:</div>
                <div class="new-form-moneytransfer col-xs-9 small_padding">
                  <select name="purse_type" class="chzn-select">
                    <option value="PayPal">PayPal</option>
                    <option value="Bitcoin">Bitcoin</option>
                    <option value="Litecoin">Litecoin</option>
                    <option value="Webmoney">Webmoney</option>
                    <option value="Skrill">Skrill</option>
                    <option value="Neteller">Neteller</option>
                    <option value="Payeer">Payeer</option>
                    <option value="AdvancedCash">Advanced Cash</option>
                    <option value="Ethereum">Ethereum</option>
                    <option value="Moneypolo">Moneypolo</option>
                    <option value="PerfectMoney">Perfect Money</option>
                    <option value="VisaMasterCard">Visa/MasterCard</option>
                    <option value="AmazonGiftCard">Amazon Gift Card</option>
                  </select>
                </div>
                <div class="new-form-moneytransfer col-xs-3 small_padding">
                  <select  name="purse_currency" class="chzn-select">
                    <option value="USD">USD</option>
                    <option value="EUR">EUR</option>
                  </select>
                </div>
                <div class="new-form-clear"></div>
                <div class="xsui-form-label">Recipient's payment details:</div>
                <div class="new-form-purse new-form--error col-sm-12 small_padding">
                  <input name="purse" type="text" maxlength="40" value="" placeholder="Your wallet\account payment method" />
                </div>
                <div class="new-form-clear"></div>
                <div class="xsui-form-label">E-Mail:</div>
                <div class="new-form-email col-sm-12 small_padding">
                  <input name="email" type="text" maxlength="40" value="" placeholder="Your E-mail address"/> 
                </div>
                <div class="col-sm-12 small_padding">
                  <div class="get_money">YOU ARE GETTING: <span class="span_get_money">25 USD </span><span class="span_get_money"> Paypal</span></div>
                </div>
                
                <div class="xsui-button new-form-button-2 xsui-button--size-md col-md-6 col-sm-12">
                  <input type="hidden" value="7eec6ff206eb74cee762a57e80e3d5f2" name="nameform">
                 <input value="exchange now" type="submit">
                </div>
                <div class="col-md-6 col-sm-12"><span class="need-help"><a href="../exchange-help">Need help with exchange?</a></span></div>
              </form>
          </div>

          <?php include "rate-exchange.php"; ?> 

    </div>
  </div>