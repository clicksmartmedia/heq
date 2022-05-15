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
                                    <fieldset class="field-group" id="EST_VAL_FIELD_GROUP" style="display: block;"><br>
                                        <div id="container-outer-header-EST_VAL" class="container-outer-header">
                                            <h3>Please estimate the value <span class="line-break-mobi">of the property</span></h3>
                                        </div>
                                        <div class="form-group" id="EST_VAL_FIELD_GROUP_FORM_GROUP">

                                            <div class="" id="FIELD-LABEL-EST_VAL"><label class="" for="EST_VAL" id="EST_VAL_LABEL"></label></div>
                                            <div class="" id="FIELD-BODY-EST_VAL"><input type="hidden" id="EST_VAL" name="EST_VAL" value="175000" maxlength="" class="" placeholder=""></div>
                                            <div id="EST_VAL_DISPLAY_SMALL" class="visible-xs slider-display-value slider-display-value-xs">$170,001 - $175,000</div>
                                            <div id="EST_VAL_SLIDER" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                                <div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="width: 28.9157%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 28.9157%;"></span>
                                            </div>
                                            <div id="EST_VAL_DISPLAY" class="hidden-xs slider-display-value slider-display-value-sm">$170,001 - $175,000</div>
                                            <div id="EST_VAL_SLIDER_SOUTH_TEXT" class="slider-south-text"><label id="EST_VAL_SLIDER_SOUTH_TEXT_LABEL">(OK to estimate)</label></div>

                                        </div>
                                    </fieldset>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div id="submit-button-container" class="submit-btn-group column-1-1 abs-position">
                                <div id="continue_button_group">
                                    <a href="q8">
                                        <button type="button" id="continue_button" class="orange-btn" style=""><span>continue</span><i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
                                    </a>
                                </div>
                                <div id="back_button_group" style="margin-top: 21px; text-align: center;">
                                    <a class="btn green-back-btn" href="q6"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>Back</a>
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