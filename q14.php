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
                                    <fieldset class="field-group" id="HI_FIELD_GROUP" style="display: block;"><br>
                                        <div id="container-outer-header-HI_GROUP" class="container-outer-header">
                                            <h3>In need of a home improvement project? <span class="line-break">Speak with a local contractor today.</span></h3>
                                        </div>
                                        <div class="form-group" id="HI_FIELD_GROUP_FORM_GROUP">
                                            <div id="HI_FIELD_GROUP_FORM_GROUP_HI_PRO_FIELD_LABEL_PAIR" class="field-label-pair mb20">
                                                <div class="" id="FIELD-BODY-HI_PRO"><input type="hidden" id="HI_PRO" name="HI_PRO" value="" maxlength="" class="" placeholder="">
                                                    <div class="" id="HI_PRO_OUTER_GROUP">
                                                        <div class="btn-group" id="HI_PRO_INNER_GROUP">
                                                            <a href="q14-2">
                                                                <div class="centered mb20" id="ha-pro-yes-btn-group"><button type="button" id="ha-pro-yes-btn" class="green-btn" target="HI_PRO" selectedvalue="yes">Yes</button></div>
                                                            </a>
                                                            <a href="q15">
                                                                <div class="centered" id="ha-pro-no-btn-group"><button type="button" id="ha-pro-no-btn" class="green-btn" target="HI_PRO" selectedvalue="no">No</button></div>
                                                            </a>
                                                        </div>
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
                                    <a class="btn green-back-btn" href="q13"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>Back</a>
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