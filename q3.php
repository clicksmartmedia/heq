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
                                    <fieldset class="field-group" id="CRED_GRADE_FIELD_GROUP" style="display: block;">
                                        <div id="container-outer-header-CRED_GRADE" class="container-outer-header">
                                            <h3>Estimate your credit score</h3>
                                        </div>
                                        <div class="form-group" id="CRED_GRADE_FIELD_GROUP_FORM_GROUP">
                                            <div class="" id="FIELD-BODY-CRED_GRADE"><input type="hidden" id="CRED_GRADE" name="CRED_GRADE" value="" maxlength="" class="" placeholder="">
                                                <div class="" id="CRED_GRADE_OUTER_GROUP">
                                                    <a href="q4">
                                                        <div class="btn-group" id="CRED_GRADE_INNER_GROUP">
                                                            <div class="centered mb20" id="excellent_grade-group"><button type="button" id="excellent_grade" class="green-btn" target="CRED_GRADE" selectedvalue="EXCELLENT">Excellent 680+</button></div>
                                                            <div class="centered mb20" id="good_grade-group"><button type="button" id="good_grade" class="green-btn" target="CRED_GRADE" selectedvalue="GOOD">Good 640 - 679</button></div>
                                                            <div class="centered mb20" id="average_grade-group"><button type="button" id="average_grade" class="green-btn" target="CRED_GRADE" selectedvalue="GOOD">Average 600 - 639</button></div>
                                                            <div class="centered mb20" id="fair_grade-group"><button type="button" id="fair_grade" class="green-btn" target="CRED_GRADE" selectedvalue="FAIR">Fair 560 - 599</button></div>
                                                            <div class="centered" id="poor_grade-group"><button type="button" id="poor_grade" class="green-btn" target="CRED_GRADE" selectedvalue="POOR">Poor &lt; 559</button></div>
                                                            <div id="CRED_GRADE_BUTTONS_SOUTH_TEXT" class="buttons-south-text"><label id="CRED_GRADE_BUTTONS_SOUTH_TEXT_LABEL">(Ok to Estimate)</label></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div id="submit-button-container" class="submit-btn-group column-1-1 abs-position">
                                <div id="back_button_group" style="margin-top: 21px; text-align: center;">
                                    <a class="btn green-back-btn" href="q2"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>Back</a>
                                </div>
                            </div>

                            <input type="hidden" name="SR_TOKEN" id="" value="1165255328545517593">

                            <input type="hidden" name="VIEW_TYPE" value="FULL"><input type="hidden" name="NO_REDIRECT_ON_POOR" id="NO_REDIRECT_ON_POOR" value="false">
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