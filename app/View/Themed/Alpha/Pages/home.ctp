<div id="cm_masthd_wrap">
	<div class="container">
    	<div class="row">
        	<div class="col-sm-12">
            	<div id="cm_masthd_title">
                Would you like to resolve your money struggles by this time tomorrow?
                </div>
            </div>
        </div>
        <div class="row cm_masthd_icons">
        	<div class="col-sm-3 col-xs-6">
           	  <div class="cm_masthd_iconbox">
                <i class="fa fa-usd"></i>
                </div>
                <div class="cm_masthd_icontext">
                Loans from <br>
                $100 to $5,000 </div>
            </div>
        	<div class="col-sm-3 col-xs-6">
           	  <div class="cm_masthd_iconbox">
                <i class="fa fa-calculator"></i>
                </div>
                <div class="cm_masthd_icontext">
                Multiple <br>
                repayment options </div>
            </div>
        	<div class="col-sm-3 col-xs-6">
           	  <div class="cm_masthd_iconbox">
                <i class="fa fa-cogs"></i>
                </div>
                <div class="cm_masthd_icontext">
                24/7 Approvals  </div>
            </div>
        	<div class="col-sm-3 col-xs-6">
           	  <div class="cm_masthd_iconbox">
                <i class="fa fa-calendar"></i>
                </div>
                <div class="cm_masthd_icontext">
                Get your cash as <br>
                fast as tomorrow </div>
            </div>
        </div>
       
        <form class="form-horizontal" role="form" id="LeadInForm" action="/application" method="post">
	        <div class="row" id="cm_formrow">
                <!--intended use-->
                <div class="col-sm-3">
                        <label for="LoanPurpose">Intended Use:</label>
                        <select name="LoanPurpose" id="LoanPurpose" tabindex="1" class="form-control" 
                        data-parsley-required="true" 
                        data-parsley-group="step1">
                            <option value="">-Choose-</option>
                            <option value="auto"<?php echo ($this->Session->read('Application.LoanPurpose') == 'auto') ? ' selected="selected"' : ''; ?>>Auto Repair</option>
                            <option value="debt"<?php echo ($this->Session->read('Application.LoanPurpose') == 'debt') ? ' selected="selected"' : ''; ?>>Debt Consolidation</option>
                            <option value="home"<?php echo ($this->Session->read('Application.LoanPurpose') == 'home') ? ' selected="selected"' : ''; ?>>Home Improvement</option>
                            <option value="major"<?php echo ($this->Session->read('Application.LoanPurpose') == 'major') ? ' selected="selected"' : ''; ?>>Major Purchase</option>
                            <option value="medical"<?php echo ($this->Session->read('Application.LoanPurpose') == 'medical') ? ' selected="selected"' : ''; ?>>Medical</option>
                            <option value="other"<?php echo ($this->Session->read('Application.LoanPurpose') == 'other') ? ' selected="selected"' : ''; ?>>Other</option>
                        </select>
                        </div>
                        <!-- end-->

	        	<div class="col-sm-3">
	            <label for="CreditRating">Rate your credit:</label>
	              <select name="CreditRating" class="form-control" id="CreditRating" tabindex="1" data-parsley-required="true">
					<option value="">-Select-</option>
					<option value="excellent" <?php echo ($this->Session->read('Application.CreditRating') == 'excellent') ? 'selected="selected"' : '' ?>>Excellent (760+)</option>
					<option value="good"<?php echo ($this->Session->read('Application.CreditRating') == 'good') ? 'selected="selected"' : '' ?>>Good (700+)</option>
					<option value="fair"<?php echo ($this->Session->read('Application.CreditRating') == 'fair') ? 'selected="selected"' : '' ?>>Fair (640+)</option>
					<option value="poor"<?php echo ($this->Session->read('Application.CreditRating') == 'poor') ? 'selected="selected"' : '' ?>>Poor</option>
					<option value="unsure"<?php echo ($this->Session->read('Application.CreditRating') == 'unsure') ? 'selected="selected"' : '' ?>>Unsure</option>
				</select>
	            </div>
	        	<div class="col-sm-3">
	            <label for="Zip">Zip Code:</label>
	             <input name="Zip" type="text" class="form-control" id="Zip" tabindex="2" size="15" maxlength="5" value="<?php echo $this->Session->read('Application.Zip'); ?>" placeholder="Zip Code" 
									data-parsley-required="true" 
									data-parsley-pattern="/^[0-9]{5}?$/"/>
	            </div>
	        	<div class="col-sm-3">
	            <label for="Military">Are you active military?</label>
	            <select name="Military" class="form-control" id="Military" tabindex="3" data-parsley-required="true">
					<option value="true">Yes</option>
					<option value="false" selected>No</option>
				</select>
	            </div>
	        </div>
      
        <div class="row">
        	<div class="col-sm-7 col-sm-offset-2">
                <div class="ckbox ckbox-success" id="p1auth">
                    <input type="checkbox" value="true" id="Agree" tabindex="5" name="Agree" />
						<label for="Agree">I am / we are over Eighteen (18) years of age,
									am / are a U.S. resident and am not currently in bankruptcy.
									I/We have read and agree to the <a
									href="https://global.leadstudio.com/terms"
									data-title="Terms and Conditions" data-toggle="lightbox"
									data-gallery="remoteload">Terms and Conditions</a>, <a
									href="https://global.leadstudio.com/privacy?site=Peer%20Point%20Funding"
									data-title="Privacy Policy" data-toggle="lightbox"
									data-gallery="remoteload">Privacy Policy</a> and <a
									href="https://global.leadstudio.com/econsent"
									data-title="E-consent" data-toggle="lightbox"
									data-gallery="remoteload">E-consent</a>.
								</label>                </div>
            </div>
        </div>
   	</form>
        <div class="row">
        	<div class="col-sm-4 col-sm-offset-4 text-center">
            <br><div class="btn-lg btn-warning cursor" id="button-app-start" role="button">GET CASH NOW <span class="glyphicon glyphicon-chevron-right"></div>
            </div>
        </div>
    </div>
</div>
<div id="sec02_wrap">
	<div class="container">
    	<div class="row">
        	<div class="col-sm-12">
            	<div id="sec02_banner">
                Serving ALL Credit Types – We even have lenders specializing in less than perfect credit! </div>
            </div>
        </div>
    </div>
</div>
<div id="sec03_wrap">
	<div class="container">
    	<div class="row">
        	<div class="col-sm-4">
            	<div class="sec03_icon">
                	<span class="fa fa-reply"></span>
                </div>
                <div class="sec03_title">
                Submit Information
              </div>
                <div class="sec03_text">
                <strong>It's Fast<br>
                </strong>Receive quick short-term loans with online approvals. </div>
            </div>
        	<div class="col-sm-4">
            	<div class="sec03_icon">
                	<span class="fa fa-check-circle"></span>
                </div>
                <div class="sec03_title">
                Get Connected
              </div>
                <div class="sec03_text">
                <strong>It's Easy<br>
                </strong>Our process is private, safe and secure. </div>
            </div>
        	<div class="col-sm-4">
            	<div class="sec03_icon">
                	<span class="fa fa-money"></span>
                </div>
                <div class="sec03_title">
                Get Results
              </div>
                <div class="sec03_text">
                <strong>It's FREE<br>
                </strong>Connect with our online lender network immediately! </div>
            </div>
        </div>
    </div>
</div>
<div id="cm_sec04_wrap">
	<div class="container">
    	<div class="row">
        	<div class="col-sm-6 col-sm-offset-6">
            	<div id="cm_sec04_title">
                Experience Financial Freedom
                </div>
                <div id="cm_sec04_text">
                We are wherever you are. With our mobile optimized site, you are free to get funds anywhere on the go from your phone or tablet, all with the same great security. 
				<br><br>
				No lines, no waiting. Just a simple, secure way to get cash sent directly to your bank account from around the world.
                </div>
            </div>
        </div>
    </div>
</div>
<div id="cm_sec05_wrap">
	<div class="container">
    	<div class="row">
        	<div class="col-sm-4 cm_sec05_divider">
            	<div class="cm_sec05_title">
                More Lenders
                </div>
                <div class="cm_sec05_text">
                You get real-time access to multiple lenders with loan solutions
                </div>
            </div>
        	<div class="col-sm-4 cm_sec05_divider">
            	<div class="cm_sec05_title">
                All Credit Types OK
                </div>
                <div class="cm_sec05_text">
                Even with less than perfect credit, no credit or past financial struggles, you may still qualify
                </div>
            </div>
        	<div class="col-sm-4">
            	<div class="cm_sec05_title">
                One Easy Form
                </div>
                <div class="cm_sec05_text">
                You can reach multiple lenders with one single profile
                </div>
            </div>
        </div>
    </div>
</div>