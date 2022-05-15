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
                                    <fieldset class="field-group" id="FHA_BANK_FORECLOSURE_FIELD_GROUP" style="display: block;"><br>
                                        <div id="container-outer-header-FHA_BANK_FORECLOSURE" class="container-outer-header">
                                            <h3>Have you had a bankruptcy/foreclosure <br> in the past 3 years?</h3>
                                        </div>
                                        <div class="form-group" id="FHA_BANK_FORECLOSURE_FIELD_GROUP_FORM_GROUP">
                                            <div class="" id="FIELD-BODY-FHA_BANK_FORECLOSURE"><input type="hidden" id="FHA_BANK_FORECLOSURE" name="FHA_BANK_FORECLOSURE" value="" maxlength="" class="" placeholder="">
                                                <div class="" id="FHA_BANK_FORECLOSURE_OUTER_GROUP">
                                                    <div class="btn-group" id="FHA_BANK_FORECLOSURE_INNER_GROUP">
                                                        <a href="q11">
                                                            <div class="centered mb20" id="fha-yes-btn-group"><button type="button" id="fha-yes-btn" class="green-btn" target="FHA_BANK_FORECLOSURE" selectedvalue="yes">Yes</button></div>
                                                            <div class="centered" id="fha-no-btn-group"><button type="button" id="fha-no-btn" class="green-btn" target="FHA_BANK_FORECLOSURE" selectedvalue="no">No</button></div>
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
                                    <a class="btn green-back-btn" href="q9"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>Back</a>
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