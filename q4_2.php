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
                                    <fieldset class="field-group" id="SPEC_HOME_FIELD_GROUP" style="display: block;"><br>
                                        <div class="form-group" id="SPEC_HOME_FIELD_GROUP_FORM_GROUP">
                                            <div id="SPEC_HOME_FIELD_GROUP_FORM_GROUP_PURCHASE_CONTRACT_FIELD_LABEL_PAIR" class="field-label-pair valid">
                                                <div id="error-message-PURCHASE_CONTRACT" class="error-message loc-top" style="display: none;"></div>
                                                <div class="centered mb20" id="FIELD-LABEL-PURCHASE_CONTRACT"><label class="input-label centered" for="PURCHASE_CONTRACT" id="PURCHASE_CONTRACT_LABEL">Have you signed a purchase contract?</label></div>
                                                <div class="" id="FIELD-BODY-PURCHASE_CONTRACT"><input type="hidden" id="PURCHASE_CONTRACT" name="PURCHASE_CONTRACT" value="" maxlength="" class="" placeholder="">
                                                    <div class="" id="PURCHASE_CONTRACT_OUTER_GROUP">
                                                        <a href="q5">
                                                            <div class="btn-group" id="PURCHASE_CONTRACT_INNER_GROUP">
                                                                <div class="centered mb20" id="purchase-contract-yes-btn-group"><button type="button" id="purchase-contract-yes-btn" class="green-btn" target="PURCHASE_CONTRACT" selectedvalue="yes">Yes</button></div>
                                                                <div class="centered" id="purchase-contract-no-btn-group"><button type="button" id="purchase-contract-no-btn" class="green-btn" target="PURCHASE_CONTRACT" selectedvalue="no">No</button></div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div id="submit-button-container" class="submit-btn-group column-1-1 abs-position">
                                <div id="back_button_group" style="margin-top: 21px; text-align: center;">
                                    <a class="btn green-back-btn" href="q4"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>Back</a>
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