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
                                        <div class="form-group" id="HI_FIELD_GROUP_FORM_GROUP">
                                            <div id="HI_FIELD_GROUP_FORM_GROUP_TASK_FIELD_LABEL_PAIR" class="field-label-pair mb20" style="display: block;">
                                                <div class="centered mb20" id="FIELD-LABEL-TASK"><label class="input-label" for="TASK" id="TASK_LABEL">What sort of project is it?</label></div>
                                                <div class="input-body" id="FIELD-BODY-TASK"><select class="select-input " name="TASK" id="TASK" validateelement="FIELD-BODY-TASK">
                                                        <option value="">Please select...</option>
                                                        <optgroup label="Additions or Remodels">
                                                            <option value="BATHROOM_REMODEL">Bathroom Remodel</option>
                                                            <option value="KITCHEN_REMODEL">Kitchen Remodel</option>
                                                            <option value="BASEMENT_REMODEL">Basement Remodel</option>
                                                            <option value="MULTIPLE_ROOM_REMODEL">Multiple Room Remodel</option>
                                                            <option value="ADDITION_TO_STRUCTURE">Addition to Existing Structure</option>
                                                        </optgroup>
                                                        <optgroup label="Flooring">
                                                            <option value="INSTALL_CARPET">Install Carpet</option>
                                                            <option value="INSTALL_STONE_FLOOR">Install Stone Floor</option>
                                                            <option value="INSTALL_LAMINATE_FLOOR">Install Laminate Floor</option>
                                                            <option value="REFINISH_FLOOR">Refinish Hardwood Floor</option>
                                                            <option value="INSTALL_VINYL_FLOOR">Install Vinyl Floor</option>
                                                            <option value="REPAIR_WOOD_FLOOR">Repair Hardwood Floor</option>
                                                            <option value="INSTALL_WOOD_FLOOR">Install Hardwood Floor</option>
                                                            <option value="INSTALL_TILE_FLOOR">Install Tile Floor</option>
                                                        </optgroup>
                                                        <optgroup label="Handyman">
                                                            <option value="HANDYMAN_SINGLE_PROJECT">Handyman for a single project</option>
                                                            <option value="HANDYMAN_MULTIPLE_PROJECTS">Handyman for multiple projects</option>
                                                        </optgroup>
                                                        <optgroup label="Heating &amp; Cooling">
                                                            <option value="INSTALL_HVAC">Install HVAC System</option>
                                                            <option value="REPAIR_HVAC">Repair or Service HVAC System</option>
                                                            <option value="INSTALL_HEAT_PUMP">Install Heat Pump</option>
                                                            <option value="REPAIR_HEAT_PUMP">Repair or Service Heat Pump</option>
                                                            <option value="INSTALL_FURNACE">Install Gas or Electrical Furnace</option>
                                                            <option value="REPAIR_FURNACE">Repair or Service Gas or Electrical Furnace</option>
                                                            <option value="INSTALL_SWAMP_COOLER">Install Swamp Cooler</option>
                                                            <option value="REPAIR_SWAMP_COOLER">Repair or Service Swamp Cooler</option>
                                                        </optgroup>
                                                        <optgroup label="Painting">
                                                            <option value="PAINT_1-2_ROOMS">1-2 Rooms</option>
                                                            <option value="PAINT_3-4_ROOMS">3-4 Rooms</option>
                                                            <option value="PAINT_5+_ROOMS">5+ Rooms</option>
                                                            <option value="PAINT_EXTERIOR">Exterior</option>
                                                        </optgroup>
                                                        <optgroup label="Plumbing">
                                                            <option value="REPAIR_SEWER_MAIN">Repair Sewer Main</option>
                                                            <option value="INSTALL_SEPTIC_SYSTEM">Install Septic System</option>
                                                            <option value="REPAIR_SEPTIC_SYSTEM">Repair Septic System</option>
                                                            <option value="GAS_PIPING">Install Gas Pipes</option>
                                                            <option value="INSTALL_SHOWER">Install New Shower</option>
                                                            <option value="INSTALL_PLUMBING">Install New Plumbing</option>
                                                            <option value="INSTALL_WATER_MAIN">Install Water Main</option>
                                                        </optgroup>
                                                        <optgroup label="Roofing">
                                                            <option value="INSTALL_SHINGLE_ROOF">Install Asphalt Shingle Roof</option>
                                                            <option value="INSTALL_WOOD_ROOF"> Install Wood or Composite Roof</option>
                                                            <option value="INSTALL_METAL_ROOF"> Install Metal Roof</option>
                                                            <option value="INSTALL_TILE_ROOF"> Install Traditional Tile Roof</option>
                                                            <option value="ROOF_REPAIR">Roof Repair</option>
                                                        </optgroup>
                                                        <optgroup label="Siding">
                                                            <option value="INSTALL_VINYL_SIDING">Install Vinyl Siding</option>
                                                            <option value="INSTALL_WOOD_SIDING">Install Wood or Fiber Siding</option>
                                                            <option value="INSTALL_METAL_SIDING">Install Metal Siding</option>
                                                            <option value="INSTALL_BRICK_STONE">Install Brick or Stone Siding</option>
                                                            <option value="INSTALL_STONE">Install Stucco</option>
                                                            <option value="SIDING_REPAIR">Siding Repair</option>
                                                        </optgroup>
                                                        <optgroup label="Solar">
                                                            <option value="ELECTRIC">Electrical</option>
                                                            <option value="POOL_HEATING">Pool Heating</option>
                                                            <option value="HOT_WATER">Hot Water</option>
                                                        </optgroup>
                                                        <optgroup label="Windows">
                                                            <option value="INSTALL_1_WINDOW">Install 1 Window</option>
                                                            <option value="INSTALL_2_WINDOWS">Install 2 Windows</option>
                                                            <option value="INSTALL_3-5_WINDOWS">Install 3-5 Windows</option>
                                                            <option value="INSTALL_6-9_WINDOWS">Install 6-9 Windows</option>
                                                            <option value="INSTALL_10+_WINDOWS">Install 10+ Windows</option>
                                                            <option value="REPAIR_WINDOWS">Window Repair</option>
                                                        </optgroup>
                                                    </select></div>
                                                <div class="clear"></div>
                                            </div>
                                            <div id="HI_FIELD_GROUP_FORM_GROUP_PROJECT_FIELD_LABEL_PAIR" class="field-label-pair ">
                                                <div class="" id="FIELD-LABEL-PROJECT"><label class="" for="PROJECT" id="PROJECT_LABEL"></label></div>
                                                <div class="" id="FIELD-BODY-PROJECT"><input type="hidden" id="PROJECT" name="PROJECT" value="" maxlength="" class="" placeholder=""></div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div id="submit-button-container" class="submit-btn-group column-1-1 abs-position">
                                <div id="continue_button_group">
                                    <a href="q14-3">
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