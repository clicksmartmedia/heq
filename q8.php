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
                                    <fieldset class="field-group" id="DOWN_PAY_FIELD_GROUP"><br>
                                        <div id="container-outer-header-DOWN_PAY" class="container-outer-header">
                                            <h3>How much is your <span class="line-break-mobi">down payment?</span></h3>
                                        </div>
                                        <div class="form-group" id="DOWN_PAY_FIELD_GROUP_FORM_GROUP">
                                            <div class="" id="FIELD-LABEL-DOWN_PMT"><label class="" for="DOWN_PMT" id="DOWN_PMT_LABEL"></label></div>
                                            <div class="" id="FIELD-BODY-DOWN_PMT"><input type="hidden" id="DOWN_PMT" name="DOWN_PMT" value="35000" maxlength="" class="" placeholder=""></div>
                                            <div id="DOWN_PMT_DISPLAY_SMALL" class="visible-xs slider-display-value slider-display-value-xs">$35,000 (20% down)</div>
                                            <div id="DOWN_PMT_SLIDER" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                                <div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="width: 23.8095%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 23.8095%;"></span>
                                            </div>
                                            <div id="DOWN_PMT_DISPLAY" class="hidden-xs slider-display-value slider-display-value-sm">$35,000 (20% down)</div>
                                            <div id="DOWN_PMT_SLIDER_SOUTH_TEXT" class="slider-south-text"><label id="DOWN_PMT_SLIDER_SOUTH_TEXT_LABEL">(OK to estimate)</label></div>
                                        </div>
                                    </fieldset>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div id="submit-button-container" class="submit-btn-group column-1-1 abs-position">
                                <div id="continue_button_group">
                                    <a href="q9">
                                        <button type="button" id="continue_button" class="orange-btn" style=""><span>continue</span><i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
                                    </a>
                                </div>
                                <div id="back_button_group" style="margin-top: 21px; text-align: center;">
                                    <a class="btn green-back-btn" href="q7"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>Back</a>
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