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
                                    <fieldset class="field-group" id="LOAN_TYPE_FIELD_GROUP"><br>
                                        <div id="container-outer-header-LOAN_TYPE" class="container-outer-header">
                                            <h3>What type of loan are <span class="line-break-mobi">you interested in?</span></h3>
                                        </div>
                                        <div class="form-group" id="LOAN_TYPE_FIELD_GROUP_FORM_GROUP">
                                            <div class="" id="FIELD-BODY-LOAN_TYPE"><input type="hidden" id="LOAN_TYPE" name="LOAN_TYPE" value="" maxlength="" class="" placeholder="">
                                                <div class="" id="LOAN_TYPE_OUTER_GROUP">
                                                    <div class="btn-group" id="LOAN_TYPE_INNER_GROUP">
                                                        <a href="q10">
                                                            <div class="column-1-3 centered mb20" id="fixed-btn-group"><button type="button" id="fixed-btn" class="green-btn" target="LOAN_TYPE" selectedvalue="Fixed">Fixed</button></div>
                                                            <div class="column-1-3 centered mb20" id="adjust-btn-group"><button type="button" id="adjust-btn" class="green-btn" target="LOAN_TYPE" selectedvalue="Adjustable">Adjustable</button></div>
                                                            <div class="column-1-3 centered" id="fixed-or-adjust-btn-group"><button type="button" id="fixed-or-adjust-btn" class="green-btn" target="LOAN_TYPE" selectedvalue="Fixed_or_Adjustable">Fixed Or Adjustable</button></div>
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
                                    <a class="btn green-back-btn" href="q8"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>Back</a>
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