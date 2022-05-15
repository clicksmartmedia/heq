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
                                    <fieldset class="field-group" id="HI_FIELD_GROUP_B" style="display: block;">
                                        <div id="container-outer-header-HI_GROUP_B" class="container-outer-header">
                                            <h3>What phase of your <br> project are you in?</h3>
                                        </div>
                                        <div class="form-group" id="HI_FIELD_GROUP_B_FORM_GROUP">
                                            <div id="HI_FIELD_GROUP_B_FORM_GROUP_PROJECT_STATUS_FIELD_LABEL_PAIR" class="field-label-pair valid">
                                                <div class="mb20" id="FIELD-BODY-PROJECT_STATUS"><input type="hidden" id="PROJECT_STATUS" name="PROJECT_STATUS" value="PLANNING_AND_BUDGETING" maxlength="" class="" placeholder="">
                                                    <div class="" id="PROJECT_STATUS_OUTER_GROUP">
                                                        <div class="btn-group" id="PROJECT_STATUS_INNER_GROUP">
                                                            <div class="centered mb20" id="ha-status-no-btn-group"><button type="button" id="ha-status-no-btn" class="green-btn selected" target="PROJECT_STATUS" selectedvalue="PLANNING_AND_BUDGETING">Planning</button></div>
                                                            <div class="centered" id="ha-status-yes-btn-group"><button type="button" id="ha-status-yes-btn" class="green-btn" target="PROJECT_STATUS" selectedvalue="READY_TO_HIRE">Ready to Hire</button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="error-message-PROJECT_STATUS" class="error-message loc-bottom" style="display: none;"></div>
                                            </div>
                                            <div id="HI_FIELD_GROUP_B_FORM_GROUP_TIMELINE_FIELD_LABEL_PAIR" class="field-label-pair mb20" style="display: block;">
                                                <div class="centered mb20" id="FIELD-LABEL-TIMELINE"><label class="input-label" for="TIMELINE" id="TIMELINE_LABEL">When do you want to start?</label></div>
                                                <div class="input-body valid" id="FIELD-BODY-TIMELINE"><select class="select-input " name="TIMELINE" id="TIMELINE" validateelement="FIELD-BODY-TIMELINE">
                                                        <option value="">Please select...</option>
                                                        <option value="EMERGENCY">Emergency — Today</option>
                                                        <option value="1_WEEK">Within 1 week</option>
                                                        <option value="2_WEEKS">1–2 weeks</option>
                                                        <option value="3_WEEKS">More than 2 weeks</option>
                                                        <option value="FLEXIBLE">Timing is flexible</option>
                                                    </select>
                                                    <div id="error-message-TIMELINE" class="error-message loc-bottom" style="display: none;"></div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div id="OPTIN_DISCLOSURE" class="mb20" style="display: block;">
                                                By clicking "continue" (and subsequently completing your mortgage inquiry),
                                                you are giving your consent to be contacted at the phone number you provide
                                                (including wireless number) by HomeAdvisor, other service providers and/or
                                                contractors. Contacting you is for the purpose of confirming and scheduling
                                                your home improvement project request and multiple contractor bids.
                                                You understand that automated phone technology, by voice or text messages,
                                                may be used to reach you. Please note that providing consent does not
                                                obligate you to purchase or use any product or service.
                                                Click "continue" to agree and complete your mortgage inquiry.
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="clear"></div>
                                </div>
                            </div>

                            <div id="submit-button-container" class="submit-btn-group column-1-1">
                                <div id="continue_button_group">
                                    <a href="q15">
                                        <button type="button" id="continue_button" class="orange-btn" style=""><span>continue</span><i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
                                    </a>
                                </div>

                                <div id="back_button_group" style="margin-top: 21px; text-align: center;">
                                    <a class="btn green-back-btn" href="q14-2"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>Back</a>
                                </div>

                                <div id="skip_button_group" style="display:none">
                                    <button type="button" id="skip_button" class="btn"><span>Skip</span></button>
                                </div>
                            </div>
                            <input type="hidden" name="SR_TOKEN" id="" value="1165259752985717593">
                            <input type="hidden" name="VIEW_TYPE" value="FULL"><input type="hidden" name="NO_REDIRECT_ON_POOR" id="NO_REDIRECT_ON_POOR" value="false">
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