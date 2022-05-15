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
                                    <fieldset class="field-group" id="BUY_TIMEFRAME_FIELD_GROUP" style="display: block;"><br>
                                        <div id="container-outer-header-BUY_TIMEFRAME" class="container-outer-header">
                                            <h3>When do you plan to buy a home?</h3>
                                        </div>
                                        <div class="form-group" id="BUY_TIMEFRAME_FIELD_GROUP_FORM_GROUP">
                                            <div class="" id="FIELD-BODY-BUY_TIMEFRAME"><input type="hidden" id="BUY_TIMEFRAME" name="BUY_TIMEFRAME" value="" maxlength="" class="" placeholder="">
                                                <div class="" id="BUY_TIMEFRAME_OUTER_GROUP">
                                                    <div class="btn-group" id="BUY_TIMEFRAME_INNER_GROUP">
                                                        <a href="q6">
                                                            <div class="centered mb20" id="time_now-group"><button type="button" id="time_now" class="green-btn" target="BUY_TIMEFRAME" selectedvalue="Immediately">Already under contract</button></div>
                                                            <div class="centered mb20" id="time_immediate-group"><button type="button" id="time_immediate" class="green-btn" target="BUY_TIMEFRAME" selectedvalue="Immediately">Immediately - I'm making an offer</button></div>
                                                            <div class="centered mb20" id="time_30_days-group"><button type="button" id="time_30_days" class="green-btn" target="BUY_TIMEFRAME" selectedvalue="30_days">Currently shopping &amp; considering options</button></div>
                                                            <div class="centered mb20" id="time_60_days-group"><button type="button" id="time_60_days" class="green-btn" target="BUY_TIMEFRAME" selectedvalue="60_days">Soon, within next couple of months</button></div>
                                                            <div class="centered" id="time_unspecified-group"><button type="button" id="time_unspecified" class="green-btn" target="BUY_TIMEFRAME" selectedvalue="no_time_constraint">Not sure</button></div>
                                                            <div id="BUY_TIMEFRAME_BUTTONS_SOUTH_TEXT" class="buttons-south-text"><label id="BUY_TIMEFRAME_BUTTONS_SOUTH_TEXT_LABEL">(Ok to Estimate)</label></div>
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