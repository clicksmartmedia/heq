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
                                    <fieldset class="field-group" id="DEMOGRAPHIC_FIELD_GROUP" style="display: block;"><br>
                                        <div id="container-outer-header-DEMOGRAPHIC" class="container-outer-header">
                                            <h3>What is your current address?<span class="address-sub-label">Property prices vary by neighborhood - your address helps calculate the most relevant offers</span></h3>
                                        </div>
                                        <div class="form-group mb20" id="DEMOGRAPHIC_FIELD_GROUP_FORM_GROUP">
                                            <div id="DEMOGRAPHIC_FIELD_GROUP_FORM_GROUP_ADDRESS_FIELD_LABEL_PAIR" class="field-label-pair ">
                                                <div class="hidden" id="FIELD-LABEL-ADDRESS"><label class="" for="ADDRESS" id="ADDRESS_LABEL"></label></div>
                                                <div class="input-body error" id="FIELD-BODY-ADDRESS">
                                                    <div id="error-message-ADDRESS" class="error-message loc-top">Address is required</div><input type="text" id="ADDRESS" name="ADDRESS" value="" maxlength="250" class="validate" validateelement="FIELD-BODY-ADDRESS">
                                                    <div id="ADDRESS_SOUTH_TEXT" class="south-text"><label id="ADDRESS_SOUTH_TEXT_LABEL">For confirmation only</label></div>
                                                </div>
                                            </div>
                                            <div id="DEMOGRAPHIC_FIELD_GROUP_FORM_GROUP_ZIP_FIELD_LABEL_PAIR" class="field-label-pair ">
                                                <div class="input-label header hidden" id="FIELD-LABEL-ZIP"><label class="" for="ZIP" id="ZIP_LABEL">ZIP Code</label></div>
                                                <div class="input-body centered" id="FIELD-BODY-ZIP"><input type="tel" id="ZIP" name="ZIP" value="21061" maxlength="5" class="validate" validateelement="FIELD-BODY-ZIP" placeholder="ZIP"></div>
                                            </div>
                                            <div id="city-none-edit-container" class="city-state centered">Islamabad, 08</div>
                                        </div>
                                    </fieldset>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div id="submit-button-container" class="submit-btn-group column-1-1 abs-position">
                                <div id="continue_button_group">
                                    <a href="q17">
                                        <button type="button" id="continue_button" class="orange-btn" style=""><span>continue</span><i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
                                    </a>
                                </div>
                                <div id="back_button_group" style="margin-top: 21px; text-align: center;">
                                    <a class="btn green-back-btn" href="q15"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>Back</a>
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