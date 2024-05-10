<!-- Layer_Name_bottom  display: none; -->
<div
    style="display: flex; height: 38px; width: 100%; background-color: #2e578647; font-family: 'Times New Roman'; justify-content: center;align-items: center; border-radius: 6px">

    <a href="<?php echo base_url('HomePage/Menu'); ?>"
        style="position: absolute; left: 100px; width: 150px; height: 50px; display: block; text-decoration: none; color: black;">
        <div style="width: 100%; height: 100%; background-color: #ccc; text-align: center; line-height: 50px;">
            Menu
        </div>
    </a>

    <div
        style="width: 50%; display: flex; justify-content: space-between; align-items: center; border-radius: 7px; background-color: #f4fcff;">
        <!-- left arrow -->
        <span id="prevLayer" class="Layer_leftArrow" title="previous">
            <i class="fa-solid fa-arrow-left fa-beat-fade fa-lg" style="margin-right: 11px;color: #c7d6dc;"></i>
        </span>
        <span>
            <div
                style="height: 38px; width: 100%; background-color: white; font-family: 'Times New Roman'; display: flex;">
                <div id="layerNone" style="display: flex;">
                    <h4>Layers Selected None</h4>
                </div>
                <!-- EXPO -->
                <div id="ExposureRow_M" style="flex-grow: 1; display: none; flex-wrap: wrap;">
                    <h4 id="EXPOSURE_M" style="border-radius: 2px;margin-right: 10px;"></h4>
                    <h5 id="exposure_layers_Title_M" style="color: #000000;margin-right: 10px;margin-right: 10px;">
                    </h5>
                    <h5 id="exposure_layers_lists_M" style="display: flex; flex-wrap: wrap;"></h5>
                </div>
                <!--  -->
                <!-- RADARPRODUCTS -->
                <div id="RADAR_Row_M" style="flex-grow: 1; display: none;">
                    <h4 id="RADARPRODUCTS_M" style="border-radius: 8px; background-color: #00719c; margin-right: 10px;">
                    </h4>
                    <h5 id="RADARPRODUCTS_Title_M" style="color: #000000;margin-right: 10px;"></h5>
                    <h5 id="RADARPRODUCTS_lists_M" style="display: flex;flex-wrap: wrap;"></h5>
                </div>
                <!--  -->
                <!-- SATELLITE -->
                <div id="SATELLITE_Row_M" style="flex-grow: 1; display: none;">
                    <h4 id="SATELLITE_M" style="border-radius: 8px; background-color: #00719c;margin-right: 10px;">
                    </h4>
                    <h5 id="SATELLITE_Title_M" style="color: #000000;margin-right: 10px;"></h5>
                    <h5 id="SATELLITE_lists_M" style="display: flex;flex-wrap: wrap;"></h5>
                </div>
                <!--  -->
            </div>
        </span>
        <!-- right arrow -->
        <span class="Layer_rightArrow" title="Next" onClick="nextLayer"><i
                class="fa-solid fa-arrow-right fa-beat-fade fa-lg" style="margin-right: 11px;color: #c7d6dc;"></i>
        </span>
    </div>

    <span>
        <!-- USERNAME -->
        <span>
            <?php if (!empty($name)): ?>
            <strong class="username" style="color: black;">&nbsp;&nbsp;&nbsp;USER:
                <?= ucfirst($name) ?>!!</strong>
            <?php endif; ?>
        </span>

        <!-- LOGOUT -->
        <span>&nbsp;&nbsp;&nbsp;
            <span class="logOut_btn"><a href="<?php echo base_url();?>Login/logout">LogOut</a>
            </span>
        </span>
    </span>
</div>