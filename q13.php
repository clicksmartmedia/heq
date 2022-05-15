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
                                    <fieldset class="field-group" id="ACTIVE_MILITARY_FIELD_GROUP" style="display: block;"><br>
                                        <div id="container-outer-header-ACTIVE_MILITARY" class="container-outer-header">
                                            <h3>Have you (or your spouse)<br> served in the US military?</h3>
                                        </div>
                                        <div class="form-group" id="ACTIVE_MILITARY_FIELD_GROUP_FORM_GROUP">
                                            <div class="" id="FIELD-BODY-VA_STATUS"><input type="hidden" id="VA_STATUS" name="VA_STATUS" value="" maxlength="" class="" placeholder="">
                                                <div class="" id="VA_STATUS_OUTER_GROUP">
                                                    <div class="btn-group" id="VA_STATUS_INNER_GROUP">
                                                        <a href="q14">
                                                            <div class="centered mb20" id="va-stat-yes-btn-group"><button type="button" id="va-stat-yes-btn" class="green-btn" target="VA_STATUS" selectedvalue="yes">Yes</button></div>
                                                            <div class="centered" id="va-stat-no-btn-group"><button type="button" id="va-stat-no-btn" class="green-btn" target="VA_STATUS" selectedvalue="no">No</button></div>
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
                                    <a class="btn green-back-btn" href="q12"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>Back</a>
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