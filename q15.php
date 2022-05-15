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
                                    <fieldset class="field-group" id="BANK_FIELD_GROUP" style="display: block;"><br>
                                        <div id="container-outer-header-BANK" class="container-outer-header"><span>Have a banking or credit account <span class="line-break">with any of the following?</span></span> </div>
                                        <div class="form-group" id="BANK_FIELD_GROUP_FORM_GROUP">
                                            <div class="" id="FIELD-BODY-BANK"><input type="hidden" id="BANK" name="BANK" value="" maxlength="" class="" placeholder="">
                                                <div class="" id="BANK_OUTER_GROUP">
                                                    <div class="btn-group checkbox-wrapper" id="BANK_INNER_GROUP">
                                                        <div class="checkbox" id="bank-bank-of-america-checkbox-group"><input type="checkbox" id="bank-bank-of-america-checkbox" class="checkbox" target="BANK" value="bank_of_america" name="BANK_checkbox_name"><label for="bank-bank-of-america-checkbox">Bank of America</label>
                                                            <div class="clear"></div>
                                                        </div>
                                                        <div class="checkbox" id="bank-chase-checkbox-group"><input type="checkbox" id="bank-chase-checkbox" class="checkbox" target="BANK" value="chase" name="BANK_checkbox_name"><label for="bank-chase-checkbox">Chase</label>
                                                            <div class="clear"></div>
                                                        </div>
                                                        <div class="checkbox" id="bank-citi-checkbox-group"><input type="checkbox" id="bank-citi-checkbox" class="checkbox" target="BANK" value="citi" name="BANK_checkbox_name"><label for="bank-citi-checkbox">Citi</label>
                                                            <div class="clear"></div>
                                                        </div>
                                                        <div class="checkbox" id="bank-usaa-checkbox-group"><input type="checkbox" id="bank-usaa-checkbox" class="checkbox" target="BANK" value="usaa" name="BANK_checkbox_name"><label for="bank-usaa-checkbox">USAA</label>
                                                            <div class="clear"></div>
                                                        </div>
                                                        <div class="checkbox" id="bank-wells-fargo-checkbox-group"><input type="checkbox" id="bank-wells-fargo-checkbox" class="checkbox" target="BANK" value="wells_fargo" name="BANK_checkbox_name"><label for="bank-wells-fargo-checkbox">Wells Fargo</label>
                                                            <div class="clear"></div>
                                                        </div>
                                                        <div class="checkbox" id="bank-other-checkbox-group"><input type="checkbox" id="bank-other-checkbox" class="checkbox" target="BANK" value="other" name="BANK_checkbox_name"><label for="bank-other-checkbox">Other</label>
                                                            <div class="clear"></div>
                                                        </div>
                                                        <div id="BANK_CHECKBOXS_SOUTH_TEXT" class="buttons-south-text"><label id="BANK_CHECKBOXS_SOUTH_TEXT_LABEL">Ok to Click more than one</label></div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div id="submit-button-container" class="submit-btn-group column-1-1 abs-position">
                                <div id="continue_button_group">
                                    <a href="q16">
                                        <button type="button" id="continue_button" class="orange-btn" style=""><span>continue</span><i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
                                    </a>
                                </div>
                                <div id="back_button_group" style="margin-top: 21px; text-align: center;">
                                    <a class="btn green-back-btn" href="q14"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>Back</a>
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