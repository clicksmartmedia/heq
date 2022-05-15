<!DOCTYPE html>
<html lang="en">
<?php include('all_pages_header.php') ?>

<body>
    <!-- Header -->
    <?php include('all_pages_body_header.php') ?>
    <main role="main" class="wrapper">
        <section class="column-1-1">
            <div class="form-box">
                <div class="form-bottom">
                    <div id="progress-step-container" style="display: block;">
                        <span id="progressbar-text" class="progressbar-text">10%</span>
                        <div id="progressbar" role="progressbar" aria-valuemin="0" class="ui-progressbar ui-corner-all ui-widget ui-widget-content" aria-valuemax="100" aria-valuenow="10">
                            <div class="ui-progressbar-value ui-corner-left ui-widget-header" style="width: 10%;"></div>
                        </div>
                    </div>
                    <div id="site-wrapper">
                        <form id="form1" role="form" action="/?formFlowConfigId=2113&amp;estprg=1&amp;viewType=FULL&amp;__submit=1" method="post" onsubmit="self.exitPop['ClicksNet'].submitButtonClick('ClicksNet')">
                            <div class="content" id="form-content">
                                <!-- Container for slides in the slideshow -->
                                <div class="field-groups" id="field-groups">
                                    <fieldset class="field-group" id="PERSONAL_FIELD_GROUP" style="">
                                        <div id="container-outer-header-PERSONAL_DETAIL" class="container-outer-header">
                                            <h3>Your rates are ready to view.<span class="address-sub-label">Enter your information for personalized results.</span></h3>
                                        </div>
                                        <div class="form-group personal-details-slide" id="PERSONAL_FIELD_GROUP_FORM_GROUP">
                                            <div id="PERSONAL_FIELD_GROUP_FORM_GROUP_FNAME_FIELD_LABEL_PAIR" class="field-label-pair mb20">
                                                <div class="input-label header hidden" id="FIELD-LABEL-FNAME"><label class="" for="FNAME" id="FNAME_LABEL">First Name</label></div>
                                                <div class="input-body" id="FIELD-BODY-FNAME"><input type="text" id="FNAME" name="FNAME" value="" maxlength="250" class="validate" validateelement="FIELD-BODY-FNAME" placeholder="First"></div>
                                            </div>
                                            <div id="PERSONAL_FIELD_GROUP_FORM_GROUP_LNAME_FIELD_LABEL_PAIR" class="field-label-pair ">
                                                <div class="input-label header hidden" id="FIELD-LABEL-LNAME"><label class="" for="LNAME" id="LNAME_LABEL">Last Name</label></div>
                                                <div class="input-body" id="FIELD-BODY-LNAME"><input type="text" id="LNAME" name="LNAME" value="" maxlength="250" class="validate" validateelement="FIELD-BODY-LNAME" placeholder="Last"></div>
                                            </div>
                                            <div id="PERSONAL_FIELD_GROUP_FORM_GROUP_EMAIL_FIELD_LABEL_PAIR" class="field-label-pair mb0">
                                                <div class="input-label header hidden" id="FIELD-LABEL-EMAIL"><label class="" for="EMAIL" id="EMAIL_LABEL">Email</label></div>
                                                <div class="input-body" id="FIELD-BODY-EMAIL"><input type="email" id="EMAIL" name="EMAIL" value="" maxlength="250" class="validate" validateelement="FIELD-BODY-EMAIL" placeholder="Email">
                                                    <div id="EMAIL_SOUTH_TEXT" class="south-text"><label id="EMAIL_SOUTH_TEXT_LABEL">We take your privacy seriously. <br>For confirmation only.</label></div>
                                                </div>
                                            </div>
                                            <div id="PERSONAL_FIELD_GROUP_FORM_GROUP_PRI_PHONE_FIELD_LABEL_PAIR" class="field-label-pair ">
                                                <div class="input-label tiny" id="FIELD-LABEL-PRI_PHONE"><label class="" for="PRI_PHONE" id="PRI_PHONE_LABEL">Primary Phone</label></div>
                                                <div class="input-body" id="FIELD-BODY-PRI_PHONE"><span class="phone-extras">(</span><input type="tel" id="PRI_PHONE-p1" name="PRI_PHONE-p1" value="" size="3" maxlength="3" class="phone-field PRI_PHONE-phone-field" target="PRI_PHONE"><span class="phone-extras">)</span><input type="tel" id="PRI_PHONE-p2" name="PRI_PHONE-p1" value="" size="3" maxlength="3" class="phone-field PRI_PHONE-phone-field" target="PRI_PHONE"> <span class="phone-extras">-</span><input type="tel" id="PRI_PHONE-p3" name="PRI_PHONE-p1" value="" size="4" maxlength="4" class="phone-field PRI_PHONE-phone-field" target="PRI_PHONE"><input type="hidden" id="PRI_PHONE" name="PRI_PHONE" value="" maxlength="10" class="validate" validateelement="FIELD-BODY-PRI_PHONE" placeholder="Phone number"></div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div id="submit-button-container" class="submit-btn-group column-1-1 last-slide-cta">
                                <div id="continue_button_group">
                                    <a href="#">
                                        <button type="button" id="continue_button" class="orange-btn" style=""><span>continue</span><i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
                                    </a>
                                </div>
                                <div id="back_button_group" style="margin-top: 21px; text-align: center;">
                                    <a class="btn green-back-btn" href="q16"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>Back</a>
                                </div>

                                <div id="skip_button_group" style="display:none">
                                    <button type="button" id="skip_button" class="btn"><span>Skip</span></button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div id="tmmfs_submitButtonDisclaimer" class="disclaimer centered" style="display:none;"></div>
                </div>
            </div>
        </section>
    </main>
    <?php include('footer.php') ?>
</body>

</html>