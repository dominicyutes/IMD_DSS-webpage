<script>
//bg color List
let bgClickedExposureLists = [];

let bgClickedMetarTempLists = [];
let bgClickedMetarDewPointLists = [];
let bgClickedMetarVisibilityLists = [];
let bgClickedMetarWindSpeedAndDirectionLists = [];

let bgClickedSynopTempLists = [];
let bgClickedSynopMeanSeaLevelLists = [];
let bgClickedSynopCloudCoverLists = [];
let bgClickedSynopGeopotentialHeightLists = [];
let bgClickedSynopRelativeHumidityLists = [];
let bgClickedSynopVisibilityLists = [];
let bgClickedSynopWindSpeedAndDirectionLists = [];
let bgClickedSynop3hRainfallLists = [];

let bgClickedSOUNDING00UTCWINDLists = [];
let bgClickedSOUNDING12UTCWINDLists = [];
let bgClickedSOUNDING00UTCTEMPLists = [];
let bgClickedSOUNDING12UTCTEMPLists = [];
let bgClickedSOUNDING00UTCDEWPOINTLists = [];
let bgClickedSOUNDING12UTCDEWPOINTLists = [];

let bgClickedSHIPANDBUOYLists = [];

let bgClickedRadarLists = [];

let bgClickedLightningLists = [];

let bgClickedSATELLITELists = [];

let bgClickedWRFReflectivityLists = [];
let bgClickedWRFlightningProductLists = [];
let bgClickedWRFAccumlatedRainfallLists = [];
let bgClickedlightningPotentialindexLists = [];
let bgClickedNCUMRlightningProductLists = [];
let bgClickedNCUMRWindGustLists = [];
let bgClickedNCUMRRainfallLists = [];
let bgClickedHRRR_SPHourlyDBZLists = [];
let bgClickedHRRR_NEHourlyDBZLists = [];
let bgClickedHRRR_NWHourlyDBZLists = [];
let bgClickedEWRFMaxZLists = [];

let bgClickedEWRFLightningLists = [];

let bgClickedRainfallIntensityDay1Lists = [];
let bgClickedRainfallIntensityDay2Lists = [];
let bgClickedRainfallIntensityDay3Lists = [];
let bgClickedRainfallIntensityDay4Lists = [];
let bgClickedRainfallIntensityDay5Lists = [];
let bgClickedMSLPDay1Lists = [];
let bgClickedMSLPDay2Lists = [];
let bgClickedMSLPDay3Lists = [];
let bgClickedMSLPDay4Lists = [];
let bgClickedMSLPDay5Lists = [];
let bgClicked10mWINDDay1Lists = [];
let bgClicked10mWINDDay2Lists = [];
let bgClicked10mWINDDay3Lists = [];
let bgClicked10mWINDDay4Lists = [];
let bgClicked10mWINDDay5Lists = [];

let bgArrayForMac = [bgClickedExposureLists, bgClickedMetarTempLists, bgClickedMetarDewPointLists,
    bgClickedMetarVisibilityLists, bgClickedMetarWindSpeedAndDirectionLists, bgClickedSynopTempLists,
    bgClickedSynopMeanSeaLevelLists, bgClickedSynopCloudCoverLists, bgClickedSynopGeopotentialHeightLists,
    bgClickedSynopRelativeHumidityLists, bgClickedSynopVisibilityLists, bgClickedSynopWindSpeedAndDirectionLists,
    bgClickedSynop3hRainfallLists, bgClickedSOUNDING00UTCWINDLists, bgClickedSOUNDING12UTCWINDLists,
    bgClickedSOUNDING00UTCTEMPLists, bgClickedSOUNDING12UTCTEMPLists, bgClickedSOUNDING00UTCDEWPOINTLists,
    bgClickedSOUNDING12UTCDEWPOINTLists, bgClickedSHIPANDBUOYLists, bgClickedRadarLists, bgClickedLightningLists,
    bgClickedSATELLITELists, bgClickedWRFReflectivityLists, bgClickedWRFlightningProductLists,
    bgClickedWRFAccumlatedRainfallLists, bgClickedlightningPotentialindexLists, bgClickedNCUMRlightningProductLists,
    bgClickedNCUMRWindGustLists, bgClickedNCUMRRainfallLists, bgClickedHRRR_SPHourlyDBZLists,
    bgClickedHRRR_NEHourlyDBZLists, bgClickedHRRR_NWHourlyDBZLists, bgClickedEWRFMaxZLists,
    bgClickedEWRFLightningLists, bgClickedRainfallIntensityDay1Lists, bgClickedRainfallIntensityDay2Lists,
    bgClickedRainfallIntensityDay3Lists, bgClickedRainfallIntensityDay4Lists, bgClickedRainfallIntensityDay5Lists,
    bgClickedMSLPDay1Lists, bgClickedMSLPDay2Lists, bgClickedMSLPDay3Lists, bgClickedMSLPDay4Lists,
    bgClickedMSLPDay5Lists, bgClicked10mWINDDay1Lists, bgClicked10mWINDDay2Lists, bgClicked10mWINDDay3Lists,
    bgClicked10mWINDDay4Lists, bgClicked10mWINDDay5Lists
];

function updateBackgroundColor() {
    //exposure bgClickedExposureLists
    if (bgClickedExposureLists.length > 0) {
        $("#exposure").css("background-color", 'rgb(180, 194, 224)');
    } else {
        $("#exposure").css("background-color", '#eff4ff');
    }

    //metar bgClickedMetarLists
    if (
        bgClickedMetarTempLists.length === 0 &&
        bgClickedMetarDewPointLists.length === 0 &&
        bgClickedMetarVisibilityLists.length === 0 &&
        bgClickedMetarWindSpeedAndDirectionLists.length === 0
    ) {
        $("#metar").css("background-color", '#eff4ff');
    } else {
        $("#metar").css("background-color", 'rgb(180, 194, 224)');
    }

    //synop bgClickedSynopLists
    if (
        bgClickedSynopTempLists.length === 0 &&
        bgClickedSynopMeanSeaLevelLists.length === 0 &&
        bgClickedSynopCloudCoverLists.length === 0 &&
        bgClickedSynopGeopotentialHeightLists.length === 0 &&
        bgClickedSynopRelativeHumidityLists.length === 0 &&
        bgClickedSynopVisibilityLists.length === 0 &&
        bgClickedSynopWindSpeedAndDirectionLists.length === 0 &&
        bgClickedSynop3hRainfallLists.length === 0
    ) {
        $("#synop").css("background-color", '#eff4ff');
    } else {
        $("#synop").css("background-color", 'rgb(180, 194, 224)');
    }

    //SOUNDING bgClickedSoundingLists
    if (
        bgClickedSOUNDING00UTCWINDLists.length === 0 &&
        bgClickedSOUNDING12UTCWINDLists.length === 0 &&
        bgClickedSOUNDING00UTCTEMPLists.length === 0 &&
        bgClickedSOUNDING12UTCTEMPLists.length === 0 &&
        bgClickedSOUNDING00UTCDEWPOINTLists.length === 0 &&
        bgClickedSOUNDING12UTCDEWPOINTLists.length === 0
    ) {
        $("#sounding").css("background-color", '#eff4ff');
    } else {
        $("#sounding").css("background-color", 'rgb(180, 194, 224)');
    }

    //SHIPANDBUOY bgClickedSHIPANDBUOYLists
    if (bgClickedSHIPANDBUOYLists.length > 0) {
        $("#ship_and_buoy").css("background-color", 'rgb(180, 194, 224)');
    } else {
        $("#ship_and_buoy").css("background-color", '#eff4ff');
    }

    //radar bgClickedRadarLists
    if (bgClickedRadarLists.length > 0) {
        $("#radar").css("background-color", 'rgb(180, 194, 224)');
    } else {
        $("#radar").css("background-color", '#eff4ff');
    }

    //SATELLITE bgClickedSATELLITELists
    if (bgClickedSATELLITELists.length > 0) {
        $("#satellite").css("background-color", 'rgb(180, 194, 224)');
    } else {
        $("#satellite").css("background-color", '#eff4ff');
    }

    let bgchecknum = bgClickedLightningLists.length;
    // lightning bgClickedLightningLists
    if (bgClickedLightningLists.length > 0) {
        $("#lightning").css("background-color", 'rgb(180, 194, 224)');
        // console.log(bgchecknum, "bgchecknum-11");
    } else {
        $("#lightning").css("background-color", '#eff4ff');
        // console.log(bgchecknum, "bgchecknum-22");
    }

    //mesolscale bgClickedSynopLists
    if (
        bgClickedWRFReflectivityLists.length === 0 &&
        bgClickedWRFlightningProductLists.length === 0 &&
        bgClickedWRFAccumlatedRainfallLists.length === 0 &&
        bgClickedlightningPotentialindexLists.length === 0 &&
        bgClickedNCUMRlightningProductLists.length === 0 &&
        bgClickedNCUMRWindGustLists.length === 0 &&
        bgClickedNCUMRRainfallLists.length === 0 &&
        bgClickedHRRR_SPHourlyDBZLists.length === 0 &&
        bgClickedHRRR_NEHourlyDBZLists.length === 0 &&
        bgClickedHRRR_NWHourlyDBZLists.length === 0 &&
        bgClickedEWRFMaxZLists.length === 0 &&
        bgClickedEWRFLightningLists.length === 0
    ) {
        $("#mesolscale").css("background-color", '#eff4ff');
    } else {
        $("#mesolscale").css("background-color", 'rgb(180, 194, 224)');
    }

    //medium_range 
    if (
        bgClickedRainfallIntensityDay1Lists.length === 0 &&
        bgClickedRainfallIntensityDay2Lists.length === 0 &&
        bgClickedRainfallIntensityDay3Lists.length === 0 &&
        bgClickedRainfallIntensityDay4Lists.length === 0 &&
        bgClickedRainfallIntensityDay5Lists.length === 0 &&
        bgClickedMSLPDay1Lists.length === 0 &&
        bgClickedMSLPDay2Lists.length === 0 &&
        bgClickedMSLPDay3Lists.length === 0 &&
        bgClickedMSLPDay4Lists.length === 0 &&
        bgClickedMSLPDay5Lists.length === 0 &&
        bgClicked10mWINDDay1Lists.length === 0 &&
        bgClicked10mWINDDay2Lists.length === 0 &&
        bgClicked10mWINDDay3Lists.length === 0 &&
        bgClicked10mWINDDay4Lists.length === 0 &&
        bgClicked10mWINDDay5Lists.length === 0
    ) {
        $("#medium_range").css("background-color", '#eff4ff');
    } else {
        $("#medium_range").css("background-color", 'rgb(180, 194, 224)');
    }
}

let modelNamesArr = ["", 'Metar', 'Synop', 'Radar', 'Satellite', 'Lightning', 'Sounding', 'Ship and Buoy'];

// "Exposure","Mesolscale Forecast", "Medium Range"
let modelNamesArrMAC = ["", "Exposure",
    'Metar', 'Synop', 'Radar', 'Satellite', 'Lightning', 'Sounding', 'Ship and Buoy', "Mesolscale Forecast",
    "Medium Range"
];

//Parameters
let Parameters = [{
        name: 'Exposure Layers',
        category: 'Exposure'
    }, {
        name: 'Metar 00UTC',
        category: 'Metar'
    },
    {
        name: 'Metar 01UTC',
        category: 'Metar'
    },
    {
        name: 'Metar 02UTC',
        category: 'Metar'
    },
    {
        name: 'Metar 03UTC',
        category: 'Metar'
    },
    {
        name: 'Metar 04UTC',
        category: 'Metar'
    },
    {
        name: 'Metar 05UTC',
        category: 'Metar'
    },
    {
        name: 'Metar 06UTC',
        category: 'Metar'
    },
    {
        name: 'Metar 07UTC',
        category: 'Metar'
    },
    {
        name: 'Metar 08UTC',
        category: 'Metar'
    },
    {
        name: 'Metar 09UTC',
        category: 'Metar'
    },
    {
        name: 'Metar 10UTC',
        category: 'Metar'
    },
    {
        name: 'Metar 11UTC',
        category: 'Metar'
    },
    {
        name: 'Metar 12UTC',
        category: 'Metar'
    },
    {
        name: 'Metar 13UTC',
        category: 'Metar'
    },
    {
        name: 'Metar 14UTC',
        category: 'Metar'
    },
    {
        name: 'Metar 15UTC',
        category: 'Metar'
    },
    {
        name: 'Metar 16UTC',
        category: 'Metar'
    },
    {
        name: 'Metar 17UTC',
        category: 'Metar'
    },
    {
        name: 'Metar 18UTC',
        category: 'Metar'
    },
    {
        name: 'Metar 19UTC',
        category: 'Metar'
    },
    {
        name: 'Metar 20UTC',
        category: 'Metar'
    },
    {
        name: 'Metar 21UTC',
        category: 'Metar'
    },
    {
        name: 'Metar 22UTC',
        category: 'Metar'
    },
    {
        name: 'Metar 23UTC',
        category: 'Metar'
    },
    {
        name: 'Synop 00UTC',
        category: 'Synop'
    },
    {
        name: 'Synop 03UTC',
        category: 'Synop'
    },
    {
        name: 'Synop 06UTC',
        category: 'Synop'
    },
    {
        name: 'Synop 09UTC',
        category: 'Synop'
    },
    {
        name: 'Synop 12UTC',
        category: 'Synop'
    },
    {
        name: 'Synop 15UTC',
        category: 'Synop'
    },
    {
        name: 'Synop 18UTC',
        category: 'Synop'
    },
    {
        name: 'Synop 21UTC',
        category: 'Synop'
    },
    {
        name: 'Radar Products',
        category: 'Radar'
    },
    {
        name: 'Satellite Observation',
        category: 'Satellite'
    },
    {
        name: 'Lightning',
        category: 'Lightning'
    },
    {
        name: 'Sounding_00 UTC Wind',
        category: 'Sounding'
    },
    {
        name: 'Sounding_12 UTC Wind',
        category: 'Sounding'
    },
    {
        name: 'Sounding_00 UTC Temp',
        category: 'Sounding'
    },
    {
        name: 'Sounding_12 UTC Temp',
        category: 'Sounding'
    },
    {
        name: 'Sounding_00 UTC Dew Point',
        category: 'Sounding'
    },
    {
        name: 'Sounding_12 UTC Dew Point',
        category: 'Sounding'
    },
    {
        name: 'Ship and Buoy',
        category: 'Ship and Buoy'
    },
    {
        name: 'WRF Reflectivity',
        category: 'Mesolscale Forecast'
    },
    {
        name: 'WRF Lightning Product',
        category: 'Mesolscale Forecast'
    },
    {
        name: 'WRF Accumlated Rainfall',
        category: 'Mesolscale Forecast'
    },
    {
        name: 'Lightning Potential Index',
        category: 'Mesolscale Forecast'
    },
    {
        name: 'NCUMR Lightning Product',
        category: 'Mesolscale Forecast'
    },
    {
        name: 'NCUMR Wind Gust',
        category: 'Mesolscale Forecast'
    },
    {
        name: 'NCUMR Rainfall',
        category: 'Mesolscale Forecast'
    },
    {
        name: 'HRRR_SP Hourly DBZ',
        category: 'Mesolscale Forecast'
    },
    {
        name: 'HRRR_NE Hourly DBZ',
        category: 'Mesolscale Forecast'
    },
    {
        name: 'HRRR_NW Hourly DBZ',
        category: 'Mesolscale Forecast'
    },
    {
        name: 'EWRF MaxZ',
        category: 'Mesolscale Forecast'
    },
    {
        name: 'EWRF Lightning',
        category: 'Mesolscale Forecast'
    },
    {
        name: 'Rainfall Intensity Day1',
        category: 'Medium Range'
    },
    {
        name: 'Rainfall Intensity Day2',
        category: 'Medium Range'
    },
    {
        name: 'Rainfall Intensity Day3',
        category: 'Medium Range'
    },
    {
        name: 'Rainfall Intensity Day4',
        category: 'Medium Range'
    },
    {
        name: 'Rainfall Intensity Day5',
        category: 'Medium Range'
    },
    {
        name: 'MSLP Day1',
        category: 'Medium Range'
    },
    {
        name: 'MSLP Day2',
        category: 'Medium Range'
    },
    {
        name: 'MSLP Day3',
        category: 'Medium Range'
    },
    {
        name: 'MSLP Day4',
        category: 'Medium Range'
    },
    {
        name: 'MSLP Day5',
        category: 'Medium Range'
    },
    {
        name: '10m WIND Day 1',
        category: 'Medium Range'
    },
    {
        name: '10m WIND Day 2',
        category: 'Medium Range'
    },
    {
        name: '10m WIND Day 3',
        category: 'Medium Range'
    },
    {
        name: '10m WIND Day 4',
        category: 'Medium Range'
    },
    {
        name: '10m WIND Day 5',
        category: 'Medium Range'
    }
];

//metarParametersList
let subParametersList = [{
        name: 'District Boundaries',
        category: 'Exposure Layers'
    },
    {
        name: 'Airport',
        category: 'Exposure Layers'
    },
    {
        name: 'Oil Refineries',
        category: 'Exposure Layers'
    },
    {
        name: 'Power Station',
        category: 'Exposure Layers'
    },
    {
        name: 'Power Plant',
        category: 'Exposure Layers'
    }, {
        name: 'DEM',
        category: 'Exposure Layers'
    },
    {
        name: 'Hospital',
        category: 'Exposure Layers'
    },
    {
        name: 'Industrail',
        category: 'Exposure Layers'
    },
    {
        name: 'sports',
        category: 'Exposure Layers'
    },
    {
        name: 'Road Network',
        category: 'Exposure Layers'
    },
    {
        name: 'Socio Economic Zone',
        category: 'Exposure Layers'
    },
    {
        name: 'Railway Network',
        category: 'Exposure Layers'
    },
    {
        name: 'LULC',
        category: 'Exposure Layers'
    },
    {
        name: 'Temperature_00',
        category: 'Metar 00UTC'
    },
    {
        name: 'Dew Point temperature_00',
        category: 'Metar 00UTC'
    },
    {
        name: 'Visibility_00',
        category: 'Metar 00UTC'
    },
    {
        name: 'Wind Speed And Direction_00',
        category: 'Metar 00UTC'
    },
    {
        name: 'Temperature_01',
        category: 'Metar 01UTC'
    },
    {
        name: 'Dew Point temperature_01',
        category: 'Metar 01UTC'
    },
    {
        name: 'Visibility_01',
        category: 'Metar 01UTC'
    },
    {
        name: 'Wind Speed And Direction_01',
        category: 'Metar 01UTC'
    },
    {
        name: 'Temperature_02',
        category: 'Metar 02UTC'
    },
    {
        name: 'Dew Point temperature_02',
        category: 'Metar 02UTC'
    },
    {
        name: 'Visibility_02',
        category: 'Metar 02UTC'
    },
    {
        name: 'Wind Speed And Direction_02',
        category: 'Metar 02UTC'
    },
    {
        name: 'Temperature_03',
        category: 'Metar 03UTC'
    },
    {
        name: 'Dew Point temperature_03',
        category: 'Metar 03UTC'
    },
    {
        name: 'Visibility_03',
        category: 'Metar 03UTC'
    },
    {
        name: 'Wind Speed And Direction_03',
        category: 'Metar 03UTC'
    },
    {
        name: 'Temperature_04',
        category: 'Metar 04UTC'
    },
    {
        name: 'Dew Point temperature_04',
        category: 'Metar 04UTC'
    },
    {
        name: 'Visibility_04',
        category: 'Metar 04UTC'
    },
    {
        name: 'Wind Speed And Direction_04',
        category: 'Metar 04UTC'
    },
    {
        name: 'Temperature_05',
        category: 'Metar 05UTC'
    },
    {
        name: 'Dew Point temperature_05',
        category: 'Metar 05UTC'
    },
    {
        name: 'Visibility_05',
        category: 'Metar 05UTC'
    },
    {
        name: 'Wind Speed And Direction_05',
        category: 'Metar 05UTC'
    },
    {
        name: 'Temperature_06',
        category: 'Metar 06UTC'
    },
    {
        name: 'Dew Point temperature_06',
        category: 'Metar 06UTC'
    },
    {
        name: 'Visibility_06',
        category: 'Metar 06UTC'
    },
    {
        name: 'Wind Speed And Direction_06',
        category: 'Metar 06UTC'
    },
    {
        name: 'Temperature_07',
        category: 'Metar 07UTC'
    },
    {
        name: 'Dew Point temperature_07',
        category: 'Metar 07UTC'
    },
    {
        name: 'Visibility_07',
        category: 'Metar 07UTC'
    },
    {
        name: 'Wind Speed And Direction_07',
        category: 'Metar 07UTC'
    },
    {
        name: 'Temperature_08',
        category: 'Metar 08UTC'
    },
    {
        name: 'Dew Point temperature_08',
        category: 'Metar 08UTC'
    },
    {
        name: 'Visibility_08',
        category: 'Metar 08UTC'
    },
    {
        name: 'Wind Speed And Direction_08',
        category: 'Metar 08UTC'
    },
    {
        name: 'Temperature_09',
        category: 'Metar 09UTC'
    },
    {
        name: 'Dew Point temperature_09',
        category: 'Metar 09UTC'
    },
    {
        name: 'Visibility_09',
        category: 'Metar 09UTC'
    },
    {
        name: 'Wind Speed And Direction_09',
        category: 'Metar 09UTC'
    },
    {
        name: 'Temperature_10',
        category: 'Metar 10UTC'
    },
    {
        name: 'Dew Point temperature_10',
        category: 'Metar 10UTC'
    },
    {
        name: 'Visibility_10',
        category: 'Metar 10UTC'
    },
    {
        name: 'Wind Speed And Direction_10',
        category: 'Metar 10UTC'
    },
    {
        name: 'Temperature_11',
        category: 'Metar 11UTC'
    },
    {
        name: 'Dew Point temperature_11',
        category: 'Metar 11UTC'
    },
    {
        name: 'Visibility_11',
        category: 'Metar 11UTC'
    },
    {
        name: 'Wind Speed And Direction_11',
        category: 'Metar 11UTC'
    },
    {
        name: 'Temperature_12',
        category: 'Metar 12UTC'
    },
    {
        name: 'Dew Point temperature_12',
        category: 'Metar 12UTC'
    },
    {
        name: 'Visibility_12',
        category: 'Metar 12UTC'
    },
    {
        name: 'Wind Speed And Direction_12',
        category: 'Metar 12UTC'
    },
    {
        name: 'Temperature_13',
        category: 'Metar 13UTC'
    },
    {
        name: 'Dew Point temperature_13',
        category: 'Metar 13UTC'
    },
    {
        name: 'Visibility_13',
        category: 'Metar 13UTC'
    },
    {
        name: 'Wind Speed And Direction_13',
        category: 'Metar 13UTC'
    },
    {
        name: 'Temperature_14',
        category: 'Metar 14UTC'
    },
    {
        name: 'Dew Point temperature_14',
        category: 'Metar 14UTC'
    },
    {
        name: 'Visibility_14',
        category: 'Metar 14UTC'
    },
    {
        name: 'Wind Speed And Direction_14',
        category: 'Metar 14UTC'
    },
    {
        name: 'Temperature_15',
        category: 'Metar 15UTC'
    },
    {
        name: 'Dew Point temperature_15',
        category: 'Metar 15UTC'
    },
    {
        name: 'Visibility_15',
        category: 'Metar 15UTC'
    },
    {
        name: 'Wind Speed And Direction_15',
        category: 'Metar 15UTC'
    },
    {
        name: 'Temperature_16',
        category: 'Metar 16UTC'
    },
    {
        name: 'Dew Point temperature_16',
        category: 'Metar 16UTC'
    },
    {
        name: 'Visibility_16',
        category: 'Metar 16UTC'
    },
    {
        name: 'Wind Speed And Direction_16',
        category: 'Metar 16UTC'
    },
    {
        name: 'Temperature_17',
        category: 'Metar 17UTC'
    },
    {
        name: 'Dew Point temperature_17',
        category: 'Metar 17UTC'
    },
    {
        name: 'Visibility_17',
        category: 'Metar 17UTC'
    },
    {
        name: 'Wind Speed And Direction_17',
        category: 'Metar 17UTC'
    },
    {
        name: 'Temperature_18',
        category: 'Metar 18UTC'
    },
    {
        name: 'Dew Point temperature_18',
        category: 'Metar 18UTC'
    },
    {
        name: 'Visibility_18',
        category: 'Metar 18UTC'
    },
    {
        name: 'Wind Speed And Direction_18',
        category: 'Metar 18UTC'
    },
    {
        name: 'Temperature_19',
        category: 'Metar 19UTC'
    },
    {
        name: 'Dew Point temperature_19',
        category: 'Metar 19UTC'
    },
    {
        name: 'Visibility_19',
        category: 'Metar 19UTC'
    },
    {
        name: 'Wind Speed And Direction_19',
        category: 'Metar 19UTC'
    },
    {
        name: 'Temperature_20',
        category: 'Metar 20UTC'
    },
    {
        name: 'Dew Point temperature_20',
        category: 'Metar 20UTC'
    },
    {
        name: 'Visibility_20',
        category: 'Metar 20UTC'
    },
    {
        name: 'Wind Speed And Direction_20',
        category: 'Metar 20UTC'
    },
    {
        name: 'Temperature_21',
        category: 'Metar 21UTC'
    },
    {
        name: 'Dew Point temperature_21',
        category: 'Metar 21UTC'
    },
    {
        name: 'Visibility_21',
        category: 'Metar 21UTC'
    },
    {
        name: 'Wind Speed And Direction_21',
        category: 'Metar 21UTC'
    },
    {
        name: 'Temperature_22',
        category: 'Metar 22UTC'
    },
    {
        name: 'Dew Point temperature_22',
        category: 'Metar 22UTC'
    },
    {
        name: 'Visibility_22',
        category: 'Metar 22UTC'
    },
    {
        name: 'Wind Speed And Direction_22',
        category: 'Metar 22UTC'
    },
    {
        name: 'Temperature_23',
        category: 'Metar 23UTC'
    },
    {
        name: 'Dew Point temperature_23',
        category: 'Metar 23UTC'
    },
    {
        name: 'Visibility_23',
        category: 'Metar 23UTC'
    },
    {
        name: 'Wind Speed And Direction_23',
        category: 'Metar 23UTC'
    },
    {
        name: 'Temperature_00',
        category: 'Synop 00UTC'
    },
    {
        name: 'Mean Sealevel Pressure_00',
        category: 'Synop 00UTC'
    },
    {
        name: 'Geopotential Height_00',
        category: 'Synop 00UTC'
    },
    {
        name: 'Relative Humidity_00',
        category: 'Synop 00UTC'
    },
    {
        name: 'Visibility_00',
        category: 'Synop 00UTC'
    },
    {
        name: 'Wind Speed And Direction_00',
        category: 'Synop 00UTC'
    },
    {
        name: '3h Rainfall_00',
        category: 'Synop 00UTC'
    },
    {
        name: 'Temperature_03',
        category: 'Synop 03UTC'
    },
    {
        name: 'Mean Sealevel Pressure_03',
        category: 'Synop 03UTC'
    },
    {
        name: 'Geopotential Height_03',
        category: 'Synop 03UTC'
    },
    {
        name: 'Relative Humidity_03',
        category: 'Synop 03UTC'
    },
    {
        name: 'Visibility_03',
        category: 'Synop 03UTC'
    },
    {
        name: 'Wind Speed And Direction_03',
        category: 'Synop 03UTC'
    },
    {
        name: '3h Rainfall_03',
        category: 'Synop 03UTC'
    },
    {
        name: 'Temperature_06',
        category: 'Synop 03UTC'
    },
    {
        name: 'Mean Sealevel Pressure_06',
        category: 'Synop 06UTC'
    },
    {
        name: 'Geopotential Height_06',
        category: 'Synop 06UTC'
    },
    {
        name: 'Relative Humidity_06',
        category: 'Synop 06UTC'
    },
    {
        name: 'Visibility_06',
        category: 'Synop 06UTC'
    },
    {
        name: 'Wind Speed And Direction_06',
        category: 'Synop 06UTC'
    },
    {
        name: '3h Rainfall_06',
        category: 'Synop 06UTC'
    },
    {
        name: 'Temperature_09',
        category: 'Synop 09UTC'
    },
    {
        name: 'Mean Sealevel Pressure_09',
        category: 'Synop 09UTC'
    },
    {
        name: 'Geopotential Height_09',
        category: 'Synop 09UTC'
    },
    {
        name: 'Relative Humidity_09',
        category: 'Synop 09UTC'
    },
    {
        name: 'Visibility_09',
        category: 'Synop 09UTC'
    },
    {
        name: 'Wind Speed And Direction_09',
        category: 'Synop 09UTC'
    },
    {
        name: '3h Rainfall_09',
        category: 'Synop 09UTC'
    },
    {
        name: 'Temperature_12',
        category: 'Synop 12UTC'
    },
    {
        name: 'Mean Sealevel Pressure_12',
        category: 'Synop 12UTC'
    },
    {
        name: 'Geopotential Height_12',
        category: 'Synop 12UTC'
    },
    {
        name: 'Relative Humidity_12',
        category: 'Synop 12UTC'
    },
    {
        name: 'Visibility_12',
        category: 'Synop 12UTC'
    },
    {
        name: 'Wind Speed And Direction_12',
        category: 'Synop 12UTC'
    },
    {
        name: '3h Rainfall_12',
        category: 'Synop 12UTC'
    },
    {
        name: 'Temperature_15',
        category: 'Synop 15UTC'
    },
    {
        name: 'Mean Sealevel Pressure_15',
        category: 'Synop 15UTC'
    },
    {
        name: 'Geopotential Height_15',
        category: 'Synop 15UTC'
    },
    {
        name: 'Relative Humidity_15',
        category: 'Synop 15UTC'
    },
    {
        name: 'Visibility_15',
        category: 'Synop 15UTC'
    },
    {
        name: 'Wind Speed And Direction_15',
        category: 'Synop 15UTC'
    },
    {
        name: '3h Rainfall_15',
        category: 'Synop 15UTC'
    },
    {
        name: 'Temperature_18',
        category: 'Synop 18UTC'
    },
    {
        name: 'Mean Sealevel Pressure_18',
        category: 'Synop 18UTC'
    },
    {
        name: 'Geopotential Height_18',
        category: 'Synop 18UTC'
    },
    {
        name: 'Relative Humidity_18',
        category: 'Synop 18UTC'
    },
    {
        name: 'Visibility_18',
        category: 'Synop 18UTC'
    },
    {
        name: 'Wind Speed And Direction_18',
        category: 'Synop 18UTC'
    },
    {
        name: '3h Rainfall_18',
        category: 'Synop 18UTC'
    },
    {
        name: 'Temperature_21',
        category: 'Synop 21UTC'
    },
    {
        name: 'Mean Sealevel Pressure_21',
        category: 'Synop 21UTC'
    },
    {
        name: 'Geopotential Height_21',
        category: 'Synop 21UTC'
    },
    {
        name: 'Relative Humidity_21',
        category: 'Synop 21UTC'
    },
    {
        name: 'Visibility_21',
        category: 'Synop 21UTC'
    },
    {
        name: 'Wind Speed And Direction_21',
        category: 'Synop 21UTC'
    },
    {
        name: '3h Rainfall_21',
        category: 'Synop 21UTC'
    },
    {
        name: 'Radar Reflectivity',
        category: 'Radar Products'
    },
    {
        name: 'Radar Animation',
        category: 'Radar Products'
    },
    {
        name: 'TIR1',
        category: 'Satellite Observation'
    },
    {
        name: 'VIS',
        category: 'Satellite Observation'
    },
    {
        name: 'CTBT',
        category: 'Satellite Observation'
    },
    {
        name: 'Low Level Convergence',
        category: 'Satellite Observation'
    },
    {
        name: 'Upper Level Convergence',
        category: 'Satellite Observation',
    },
    {
        name: 'MID Level Shear',
        category: 'Satellite Observation'
    },
    {
        name: 'Vorticity at 200hPa',
        category: 'Satellite Observation'
    },
    {
        name: 'Vorticity at 500hPa',
        category: 'Satellite Observation'
    },
    {
        name: 'Vorticity at 700hPa',
        category: 'Satellite Observation'
    },
    {
        name: 'Vorticity at 850hPa',
        category: 'Satellite Observation'
    },
    {
        name: 'Last 00-05 min',
        category: 'Lightning'
    },
    {
        name: 'Last 05-10 min',
        category: 'Lightning'
    },
    {
        name: 'Last 10-15 min',
        category: 'Lightning'
    },
    {
        name: 'ILDN Last 05 min',
        category: 'Lightning'
    },
    {
        name: 'Nowcast Alert',
        category: 'Lightning'
    },
    {
        name: '1000 hpa Wind_00',
        category: 'Sounding_00 UTC Wind'
    },
    {
        name: '850 hpa Wind_00',
        category: 'Sounding_00 UTC Wind'
    },
    {
        name: '700 hpa Wind_00',
        category: 'Sounding_00 UTC Wind'
    },
    {
        name: '500 hpa Wind_00',
        category: 'Sounding_00 UTC Wind'
    },
    {
        name: '300 hpa Wind_00',
        category: 'Sounding_00 UTC Wind'
    },
    {
        name: '200 hpa Wind_00',
        category: 'Sounding_00 UTC Wind'
    },
    {
        name: '100 hpa Wind_00',
        category: 'Sounding_00 UTC Wind'
    },
    {
        name: '50 hpa Wind_00',
        category: 'Sounding_00 UTC Wind'
    },
    {
        name: '1000 hpa Wind_12',
        category: 'Sounding_12 UTC Wind'
    },
    {
        name: '850 hpa Wind_12',
        category: 'Sounding_12 UTC Wind'
    },
    {
        name: '700 hpa Wind_12',
        category: 'Sounding_12 UTC Wind'
    },
    {
        name: '500 hpa Wind_12',
        category: 'Sounding_12 UTC Wind'
    },
    {
        name: '300 hpa Wind_12',
        category: 'Sounding_12 UTC Wind'
    },
    {
        name: '200 hpa Wind_12',
        category: 'Sounding_12 UTC Wind'
    },
    {
        name: '100 hpa Wind_12',
        category: 'Sounding_12 UTC Wind'
    },
    {
        name: '50 hpa Wind_12',
        category: 'Sounding_12 UTC Wind'
    },
    {
        name: '1000 hpa Temp_00',
        category: 'Sounding_00 UTC Temp'
    },
    {
        name: '850 hpa Temp_00',
        category: 'Sounding_00 UTC Temp'
    },
    {
        name: '700 hpa Temp_00',
        category: 'Sounding_00 UTC Temp'
    },
    {
        name: '500 hpa Temp_00',
        category: 'Sounding_00 UTC Temp'
    },
    {
        name: '300 hpa Temp_00',
        category: 'Sounding_00 UTC Temp'
    },
    {
        name: '200 hpa Temp_00',
        category: 'Sounding_00 UTC Temp'
    },
    {
        name: '100 hpa Temp_00',
        category: 'Sounding_00 UTC Temp'
    },
    {
        name: '50 hpa Temp_00',
        category: 'Sounding_00 UTC Temp'
    },
    {
        name: '1000 hpa Temp_12',
        category: 'Sounding_12 UTC Temp'
    },
    {
        name: '850 hpa Temp_12',
        category: 'Sounding_12 UTC Temp'
    },
    {
        name: '700 hpa Temp_12',
        category: 'Sounding_12 UTC Temp'
    },
    {
        name: '500 hpa Temp_12',
        category: 'Sounding_12 UTC Temp'
    },
    {
        name: '300 hpa Temp_12',
        category: 'Sounding_12 UTC Temp'
    },
    {
        name: '200 hpa Temp_12',
        category: 'Sounding_12 UTC Temp'
    },
    {
        name: '100 hpa Temp_12',
        category: 'Sounding_12 UTC Temp'
    },
    {
        name: '50 hpa Temp_12',
        category: 'Sounding_12 UTC Temp'
    },
    {
        name: '1000 hpa DewPoint_00',
        category: 'Sounding_00 UTC Dew Point'
    },
    {
        name: '850 hpa DewPoint_00',
        category: 'Sounding_00 UTC Dew Point'
    },
    {
        name: '700 hpa DewPoint_00',
        category: 'Sounding_00 UTC Dew Point'
    },
    {
        name: '500 hpa DewPoint_00',
        category: 'Sounding_00 UTC Dew Point'
    },
    {
        name: '300 hpa DewPoint_00',
        category: 'Sounding_00 UTC Dew Point'
    },
    {
        name: '200 hpa DewPoint_00',
        category: 'Sounding_00 UTC Dew Point'
    },
    {
        name: '100 hpa DewPoint_00',
        category: 'Sounding_00 UTC Dew Point'
    },
    {
        name: '50 hpa DewPoint_00',
        category: 'Sounding_00 UTC Dew Point'
    },
    {
        name: '1000 hpa DewPoint_12',
        category: 'Sounding_12 UTC Dew Point'
    },
    {
        name: '850 hpa DewPoint_12',
        category: 'Sounding_12 UTC Dew Point'
    },
    {
        name: '700 hpa DewPoint_12',
        category: 'Sounding_12 UTC Dew Point'
    },
    {
        name: '500 hpa DewPoint_12',
        category: 'Sounding_12 UTC Dew Point'
    },
    {
        name: '300 hpa DewPoint_12',
        category: 'Sounding_12 UTC Dew Point'
    },
    {
        name: '200 hpa DewPoint_12',
        category: 'Sounding_12 UTC Dew Point'
    },
    {
        name: '100 hpa DewPoint_12',
        category: 'Sounding_12 UTC Dew Point'
    },
    {
        name: '50 hpa DewPoint_12',
        category: 'Sounding_12 UTC Dew Point'
    },
    {
        name: '00UTC',
        category: 'Ship and Buoy'
    },
    {
        name: '01UTC',
        category: 'Ship and Buoy'
    },
    {
        name: '02UTC',
        category: 'Ship and Buoy'
    },
    {
        name: '03UTC',
        category: 'Ship and Buoy'
    },
    {
        name: '04UTC',
        category: 'Ship and Buoy'
    },
    {
        name: '05UTC',
        category: 'Ship and Buoy'
    },
    {
        name: '06UTC',
        category: 'Ship and Buoy'
    },
    {
        name: '07UTC',
        category: 'Ship and Buoy'
    },
    {
        name: '08UTC',
        category: 'Ship and Buoy'
    },
    {
        name: '09UTC',
        category: 'Ship and Buoy'
    },
    {
        name: '10UTC',
        category: 'Ship and Buoy'
    },
    {
        name: '11UTC',
        category: 'Ship and Buoy'
    },
    {
        name: '12UTC',
        category: 'Ship and Buoy'
    },
    {
        name: '13UTC',
        category: 'Ship and Buoy'
    },
    {
        name: '14UTC',
        category: 'Ship and Buoy'
    },
    {
        name: '15UTC',
        category: 'Ship and Buoy'
    },
    {
        name: '16UTC',
        category: 'Ship and Buoy'
    },
    {
        name: '17UTC',
        category: 'Ship and Buoy'
    },
    {
        name: '18UTC',
        category: 'Ship and Buoy'
    },
    {
        name: '19UTC',
        category: 'Ship and Buoy'
    },
    {
        name: '20UTC',
        category: 'Ship and Buoy'
    },
    {
        name: '21UTC',
        category: 'Ship and Buoy'
    },
    {
        name: '22UTC',
        category: 'Ship and Buoy'
    },
    {
        name: '23UTC',
        category: 'Ship and Buoy'
    },
    {
        name: 'WRF R Next 03 Hrs',
        category: 'WRF Reflectivity'
    },
    {
        name: 'WRF R Next 03-06 Hrs',
        category: 'WRF Reflectivity'
    },
    {
        name: 'WRF LP Next 03 Hrs',
        category: 'WRF Lightning Product'
    },
    {
        name: 'WRF LP Next 03-06 Hrs',
        category: 'WRF Lightning Product'
    },
    {
        name: 'WRF AR Next 03 Hrs',
        category: 'WRF Accumlated Rainfall'
    },
    {
        name: 'WRF AR Next 03-06 Hrs',
        category: 'WRF Accumlated Rainfall'
    },
    {
        name: 'LP Next 01 Hrs',
        category: 'Lightning Potential Index'
    },
    {
        name: 'LP Next 01-02 Hrs',
        category: 'Lightning Potential Index'
    },
    {
        name: 'LP Next 02-03 Hrs',
        category: 'Lightning Potential Index'
    },
    {
        name: 'NCUMR LP Next 03 Hrs',
        category: 'NCUMR Lightning Product'
    },
    {
        name: 'NCUMR LP Next 03-06 Hrs',
        category: 'NCUMR Lightning Product'
    },
    {
        name: 'NCUMR WG Next 03 Hrs',
        category: 'NCUMR Wind Gust'
    },
    {
        name: 'NCUMR WG Next 03-06 Hrs',
        category: 'NCUMR Wind Gust'
    },
    {
        name: 'NCUMR R Next 03 Hrs',
        category: 'NCUMR Rainfall'
    },
    {
        name: 'NCUMR R Next 03-06 Hrs',
        category: 'NCUMR Rainfall'
    },
    {
        name: 'HRRR SP Next 01 Hrs',
        category: 'HRRR_SP Hourly DBZ'
    },
    {
        name: 'HRRR SP Next 01-02 Hrs',
        category: 'HRRR_SP Hourly DBZ'
    },
    {
        name: 'HRRR SP Next 02-03 Hrs',
        category: 'HRRR_SP Hourly DBZ'
    },
    {
        name: 'HRRR NE Next 01 Hrs',
        category: 'HRRR_NE Hourly DBZ'
    },
    {
        name: 'HRRR NE Next 01-02 Hrs',
        category: 'HRRR_NE Hourly DBZ'
    },
    {
        name: 'HRRR NE Next 02-03 Hrs',
        category: 'HRRR_NE Hourly DBZ'
    },
    {
        name: 'HRRR NW Next 01 Hrs',
        category: 'HRRR_NW Hourly DBZ'
    },
    {
        name: 'HRRR NW Next 01-02 Hrs',
        category: 'HRRR_NW Hourly DBZ'
    },
    {
        name: 'HRRR NW Next 02-03 Hrs',
        category: 'HRRR_NW Hourly DBZ'
    },
    {
        name: 'EWRF M Next 01 Hrs',
        category: 'EWRF MaxZ'
    },
    {
        name: 'EWRF M Next 01-02 Hrs',
        category: 'EWRF MaxZ'
    },
    {
        name: 'EWRF M Next 02-03 Hrs',
        category: 'EWRF MaxZ'
    },
    {
        name: 'EWRF L Next 01 Hrs',
        category: 'EWRF Lightning'
    },
    {
        name: 'EWRF L Next 01-02 Hrs',
        category: 'EWRF Lightning'
    },
    {
        name: 'EWRF L Next 02-03 Hrs',
        category: 'EWRF Lightning'
    },
    {
        name: 'RI GFS DAY1',
        category: 'Rainfall Intensity Day1'
    },
    {
        name: 'RI NCUM DAY1',
        category: 'Rainfall Intensity Day1'
    },
    {
        name: 'RI NEPS DAY1',
        category: 'Rainfall Intensity Day1'
    },
    {
        name: 'RI WRF DAY1',
        category: 'Rainfall Intensity Day1'
    },
    {
        name: 'RI GEFS DAY1',
        category: 'Rainfall Intensity Day1'
    },
    {
        name: 'RI ECMWF DAY1',
        category: 'Rainfall Intensity Day1'
    },
    {
        name: 'RI GFS DAY2',
        category: 'Rainfall Intensity Day2'
    },
    {
        name: 'RI NCUM DAY2',
        category: 'Rainfall Intensity Day2'
    },
    {
        name: 'RI NEPS DAY2',
        category: 'Rainfall Intensity Day2'
    },
    {
        name: 'RI WRF DAY2',
        category: 'Rainfall Intensity Day2'
    },
    {
        name: 'RI GEFS DAY2',
        category: 'Rainfall Intensity Day2'
    },
    {
        name: 'RI ECMWF DAY2',
        category: 'Rainfall Intensity Day2'
    },
    {
        name: 'RI GFS DAY3',
        category: 'Rainfall Intensity Day3'
    },
    {
        name: 'RI NCUM DAY3',
        category: 'Rainfall Intensity Day3'
    },
    {
        name: 'RI NEPS DAY3',
        category: 'Rainfall Intensity Day3'
    },
    {
        name: 'RI WRF DAY3',
        category: 'Rainfall Intensity Day3'
    },
    {
        name: 'RI GEFS DAY3',
        category: 'Rainfall Intensity Day3'
    },
    {
        name: 'RI ECMWF DAY3',
        category: 'Rainfall Intensity Day3'
    },
    {
        name: 'RI GFS DAY4',
        category: 'Rainfall Intensity Day4'
    },
    {
        name: 'RI NCUM DAY4',
        category: 'Rainfall Intensity Day4'
    },
    {
        name: 'RI NEPS DAY4',
        category: 'Rainfall Intensity Day4'
    },
    {
        name: 'RI GEFS DAY4',
        category: 'Rainfall Intensity Day4'
    },
    {
        name: 'RI ECMWF DAY4',
        category: 'Rainfall Intensity Day4'
    },
    {
        name: 'RI GFS DAY5',
        category: 'Rainfall Intensity Day5'
    },
    {
        name: 'RI NCUM DAY5',
        category: 'Rainfall Intensity Day5'
    },
    {
        name: 'RI NEPS DAY5',
        category: 'Rainfall Intensity Day5'
    },
    {
        name: 'RI GEFS DAY5',
        category: 'Rainfall Intensity Day5'
    },
    {
        name: 'RI ECMWF DAY5',
        category: 'Rainfall Intensity Day5'
    },
    {
        name: 'MSLP GFS DAY1',
        category: 'MSLP Day1'
    },
    {
        name: 'MSLP NCUM DAY1',
        category: 'MSLP Day1'
    },
    {
        name: 'MSLP NEPS DAY1',
        category: 'MSLP Day1'
    },
    {
        name: 'MSLP WRF DAY1',
        category: 'MSLP Day1'
    },
    {
        name: 'MSLP GEFS DAY1',
        category: 'MSLP Day1'
    },
    {
        name: 'MSLP GFS DAY2',
        category: 'MSLP DAY2'
    },
    {
        name: 'MSLP NCUM DAY2',
        category: 'MSLP DAY2'
    },
    {
        name: 'MSLP NEPS DAY2',
        category: 'MSLP DAY2'
    },
    {
        name: 'MSLP WRF DAY2',
        category: 'MSLP DAY2'
    },
    {
        name: 'MSLP GEFS DAY2',
        category: 'MSLP DAY2'
    },
    {
        name: 'MSLP GFS DAY3',
        category: 'MSLP Day3'
    },
    {
        name: 'MSLP NCUM DAY3',
        category: 'MSLP Day3'
    },
    {
        name: 'MSLP NEPS DAY3',
        category: 'MSLP Day3'
    },
    {
        name: 'MSLP WRF DAY3',
        category: 'MSLP Day3'
    },
    {
        name: 'MSLP GEFS DAY3',
        category: 'MSLP Day3'
    },
    {
        name: 'MSLP GFS DAY4',
        category: 'MSLP Day4'
    },
    {
        name: 'MSLP NCUM DAY4',
        category: 'MSLP Day4'
    },
    {
        name: 'MSLP NEPS DAY4',
        category: 'MSLP Day4'
    },
    {
        name: 'MSLP GEFS DAY4',
        category: 'MSLP Day4'
    },
    {
        name: 'MSLP GFS DAY5',
        category: 'MSLP Day5'
    },
    {
        name: 'MSLP NCUM DAY5',
        category: 'MSLP Day5'
    },
    {
        name: 'MSLP NEPS DAY5',
        category: 'MSLP Day5'
    },
    {
        name: 'MSLP GEFS DAY5',
        category: 'MSLP Day5'
    },
    {
        name: '10m WIND GFS DAY1',
        category: '10m WIND Day 1'
    },
    {
        name: '10m WIND NCUM DAY1',
        category: '10m WIND Day 1'
    },
    {
        name: '10m WIND NEPS DAY1',
        category: '10m WIND Day 1'
    },
    {
        name: '10m WIND WRF DAY1',
        category: '10m WIND Day 1'
    },
    {
        name: '10m WIND GEFS DAY1',
        category: '10m WIND Day 1'
    },
    {
        name: '10m WIND GFS DAY2',
        category: '10m WIND Day 2'
    },
    {
        name: '10m WIND NCUM DAY2',
        category: '10m WIND Day 2'
    },
    {
        name: '10m WIND NEPS DAY2',
        category: '10m WIND Day 2'
    },
    {
        name: '10m WIND WRF DAY2',
        category: '10m WIND Day 2'
    },
    {
        name: '10m WIND GEFS DAY2',
        category: '10m WIND Day 2'
    },
    {
        name: '10m WIND GFS DAY3',
        category: '10m WIND Day 3'
    },
    {
        name: '10m WIND NCUM DAY3',
        category: '10m WIND Day 3'
    },
    {
        name: '10m WIND NEPS DAY3',
        category: '10m WIND Day 3'
    },
    {
        name: '10m WIND WRF DAY3',
        category: '10m WIND Day 3'
    },
    {
        name: '10m WIND GEFS DAY3',
        category: '10m WIND Day 3'
    },
    {
        name: '10m WIND GFS DAY4',
        category: '10m WIND Day 4'
    },
    {
        name: '10m WIND NCUM DAY4',
        category: '10m WIND Day 4'
    },
    {
        name: '10m WIND NEPS DAY4',
        category: '10m WIND Day 4'
    },
    {
        name: '10m WIND WRF DAY4',
        category: '10m WIND Day 4'
    },
    {
        name: '10m WIND GEFS DAY4',
        category: '10m WIND Day 4'
    },
    {
        name: '10m WIND GFS DAY5',
        category: '10m WIND Day 5'
    },
    {
        name: '10m WIND NCUM DAY5',
        category: '10m WIND Day 5'
    },
    {
        name: '10m WIND NEPS DAY5',
        category: '10m WIND Day 5'
    },
    {
        name: '10m WIND WRF DAY5',
        category: '10m WIND Day 5'
    },
    {
        name: '10m WIND GEFS DAY5',
        category: '10m WIND Day 5'
    }
];

//*********************************************************************** */
//

//observation ModelNames-Dropdown    MA-ModelsArray
let getModelNames = document.getElementById("modelNames");
let pushModelNames = '';
for (let MA = 0; MA < modelNamesArr.length; MA++) {
    pushModelNames += `<option class="test">${modelNamesArr[MA]}</option><br/><br/>`;
}
getModelNames.innerHTML = pushModelNames;

//secondDropdown-SD observation
function showParameterNames(value) {
    let getparameterNames = document.getElementById("parameterNames");
    let pushparameterNames = '';
    var SecondDropdown = Parameters.filter(x => x.category == value);
    if (SecondDropdown.length > 0) {
        for (let SD = 0; SD < SecondDropdown.length; SD++) {
            if (SecondDropdown[SD].name) {
                pushparameterNames += `<option>${SecondDropdown[SD].name}</option><br/><br/>`;
            }
        }
        getparameterNames.innerHTML = pushparameterNames;
        showSubParameterNames(SecondDropdown[0].name);
    } else {
        showSubParameterNames('');
    }
    if (value === "Satellite" || value === "Radar") {
        document.getElementById("TimNon").style.display = "contents";
    } else {
        DatRem();
    }

}

//OBSERVATION thirdDropdown-SD
function showSubParameterNames(value) {
    console.log(value, "value");
    let getsubparameterNames = document.getElementById("subparameterpp");
    let pushsubparameterNames = '';
    var SecondDropdown = subParametersList.filter(x => x.category == value);
    console.log(SecondDropdown, "SecondDropdown");
    for (let SD = 0; SD < SecondDropdown.length; SD++) {
        if (SecondDropdown[SD].name) {
            pushsubparameterNames += `<option>${SecondDropdown[SD].name}</option><br/><br/>`;
        }
    }
    getsubparameterNames.innerHTML = pushsubparameterNames;
    console.log(getsubparameterNames, "jjjjjj")
}

//time UTC
//hr HS-hourSelect
let getHourSelect = document.getElementById("hourSelect");
let pushHourSelect = '';
for (let HS = 0; HS < 25; HS++) {
    pushHourSelect += `<option>${[HS]}</option><br/><br/>`;
}
getHourSelect.innerHTML = pushHourSelect;

//min MS-minuteSelect
let getMinSelect = document.getElementById("minuteSelect");
let pushMinSelect = '';
for (let MS = 0; MS < 60; MS++) {
    pushMinSelect += `<option>${[MS]}</option><br/><br/>`;
}
getMinSelect.innerHTML = pushMinSelect;

let obstesting1;
let obstesting2;
//submitForm for observation
function obs_SubmitForm() {
    let model_Names = document.getElementById('modelNames').value;
    let parameter_Names = document.getElementById('parameterNames').value;
    let sub_parameter = document.getElementById('subparameterpp').value;
    let fromDate = document.getElementById('start_date').value;
    let hour_Select = document.getElementById('hourSelect').value;
    let minute_Select = document.getElementById('minuteSelect').value;

    console.log(parameter_Names, "parameter_Names");

    let TimeForObs = hour_Select + ":" + minute_Select;
    console.log(sub_parameter, "sub_parameter");

    if (sub_parameter === "Temperature_00") {
        if (parameter_Names === "Metar 00UTC") {
            map.eachLayer(layer => {
                if (layer instanceof L.TileLayer.WMS) {
                    map.removeLayer(layer);
                }
            });

            obstesting1;
            let obstesting1Ready = false;

            obstesting1 = setInterval(function() {
                map.addLayer(met00utc_tem);
                document.getElementById('obsLayTxt').innerHTML = 'METAR 00UTC Temperature_00';
                document.getElementById("METAR_mm").style.display = "block";
            });


            document.getElementById("obsLayerNamShw").style.display = "block";
        }
    }

    // if (sub_parameter === "00UTC") {
    //     if (parameter_Names === "Ship and Buoy") {
    //         map.eachLayer(layer => {
    //             if (layer instanceof L.TileLayer.WMS) {
    //                 map.removeLayer(layer);
    //             }
    //         });

    //         obstesting2;
    //         let obstesting2Ready = false;

    //         obstesting2 = setInterval(function() {
    //             map.addLayer(ship_00utc);
    //             document.getElementById('obsLayTxt').innerHTML = 'Ship & Buoy Observation - 00UTC';
    //             document.getElementById("SHIPANDBUOY_mm").style.display = "block";
    //         });



    //         // let message = "OBSERVATION" + "\n" + "Model: " + model_Names + "\n" +
    //         //     "Parameter: " + parameter_Names + "\n" +
    //         //     "SubParameter: " + sub_parameter + "\n" +
    //         //     "Start Date: " + fromDate + "\n" +
    //         //     "Time: " + hour_Select + ":" + minute_Select;
    //         // alert(message);
    //     }
    // }
}

function obs_Rem_() {
    setTimeout(function() {
        map.removeLayer(met00utc_tem);
        clearInterval(obstesting1);

        map.eachLayer(layer => {
            if (layer instanceof L.TileLayer.WMS) {
                map.removeLayer(layer);
            }
        });

        document.getElementById('modelNames').value = '';
        document.getElementById('parameterNames').value = '';
        document.getElementById('subparameter').value = '';
        document.getElementById('start_date').value = '';
        document.getElementById('hourSelect').value = '';
        document.getElementById('minuteSelect').value = '';
        document.getElementById('obsLayTxt').innerHTML = '';
        document.getElementById("obsLayerNamShw").style.display = "none";
        document.getElementById("METAR_mm").style.display = "none";
    }, 1000);

    setTimeout(function() {
        map.removeLayer(ship_00utc);
        clearInterval(obstesting2);
        document.getElementById('modelNames').value = '';
        document.getElementById('parameterNames').value = '';
        document.getElementById('subparameter').value = '';
        document.getElementById('start_date').value = '';
        document.getElementById('hourSelect').value = '';
        document.getElementById('minuteSelect').value = '';
        document.getElementById("SHIPANDBUOY_mm").style.display = "none";
    }, 1000);
}

function obsLayerNameX() {
    obs_Rem_();
    document.getElementById("obsLayerNamShw").style.display = "none";
    obs_Rem_();
    map.eachLayer(layer => {
        if (layer instanceof L.TileLayer.WMS) {
            map.removeLayer(layer);
        }
    });
}

// 
function DatRem() {
    var TimNonElement = document.getElementById("TimNon");

    if (TimNonElement) {
        TimNonElement.style.display = "none";
        console.log("Element hidden Satellite");
    }
}
// Weather Inference Toggle
function weatherinference() {
    let observationContainerFn = document.getElementById("ObservationContainer");
    let isHiddenObser = observationContainerFn.classList.contains('hidden');
    let macroContainerFn = document.getElementById("macroContainer");
    let isHiddenMacro = macroContainerFn.classList.contains('hidden');

    // Deactivate other sections
    observationContainerFn.classList.add('hidden');
    macroContainerFn.classList.add('hidden');

    let weatherinferencecont = document.getElementById("weatherinferencecontainer");
    let map = document.getElementById('map');
    let isHidden = weatherinferencecont.classList.contains('hidden');
    weatherinferencecont.classList.toggle('hidden');
    map.style.width = isHidden ? '83%' : '100%';
}

// MACRO Toggle
function macToggleObservation() {
    let observationContainerFn = document.getElementById("ObservationContainer");
    let isHiddenObser = observationContainerFn.classList.contains('hidden');
    let weatherinferenceFn = document.getElementById("weatherinferencecontainer");
    let isHiddeninference = weatherinferenceFn.classList.contains('hidden');

    // Deactivate other sections
    observationContainerFn.classList.add('hidden');
    weatherinferenceFn.classList.add('hidden');

    let macroContainerFn = document.getElementById("macroContainer");
    let map = document.getElementById('map');
    let isHidden = macroContainerFn.classList.contains('hidden');
    macroContainerFn.classList.toggle('hidden');
    map.style.width = isHidden ? '83%' : '100%';
}

// Observation Toggle
function toggleObservation() {
    let macroContainerFn = document.getElementById("macroContainer");
    let isHiddenMacro = macroContainerFn.classList.contains('hidden');
    let weatherinferenceFn = document.getElementById("weatherinferencecontainer");
    let isHiddeninference = weatherinferenceFn.classList.contains('hidden');

    // Deactivate other sections
    macroContainerFn.classList.add('hidden');
    weatherinferenceFn.classList.add('hidden');

    let observationContainerFn = document.getElementById("ObservationContainer");
    let map = document.getElementById('map');
    let isHidden = observationContainerFn.classList.contains('hidden');
    observationContainerFn.classList.toggle('hidden');
    map.style.width = isHidden ? '83%' : '100%';
}

//

// 
function obsCloseX() {
    let map = document.getElementById('map');
    map.style.width = '100%';

    toggleObservation();
    obs_Rem_();
    weatherinference();
}

function inferenceCloseX() {
    let map = document.getElementById('map');
    map.style.width = '100%';

    weatherinference();
}


// MACRO
// MACRO create popup
let create_Macro = document.querySelector('.create_Macro');
let create_Macro_body = document.querySelector('.create_Macro_body_div');
// let create_Macro_close = document.querySelector('.macroLegend');

function closCreatMac() {
    console.log("close");
    addedInfoContainer.innerHTML = '';
    macroAddArr = [];
    showSavedMacroList();
    document.getElementById('macroNames').value = '';
    document.getElementById('mac_modelNames').value = '';
    document.getElementById('mac_parameterNames').value = '';
    document.getElementById('mac_subparameter').value = '';
}




//View MACRO
let view_Create_Macro = document.querySelector('.view_Create_Macro');
let view_Create_Macro_body = document.querySelector('.view_Create_Macro_body');
let view_Create_Macro_body_close = document.querySelector('.view_Create_Macro_body .viewMacroLegend');
//

//macro ModelNames-Dropdown    MA-ModelsArray
let getMacModelNames = document.getElementById("mac_modelNames");
let pushMacModelNames = '';
for (let MA = 0; MA < modelNamesArrMAC.length; MA++) {
    pushMacModelNames += `<option>${modelNamesArrMAC[MA]}</option>`;
}
getMacModelNames.innerHTML = pushMacModelNames;

//macro secondDropdown-MSD MACRO
function macShowParameterNames(value) {
    let macGetParameterNames = document.getElementById("mac_parameterNames");
    let macPushParameterNames = '';
    var macSecondDropdown = Parameters.filter(y => y.category == value);
    for (let MSD = 0; MSD < macSecondDropdown.length; MSD++) {
        if (macSecondDropdown[MSD].name) {
            macPushParameterNames += `<option>${macSecondDropdown[MSD].name}</option><br/><br/>`;
        }
    }
    macGetParameterNames.innerHTML = macPushParameterNames;
    macShowSubParameterNames(macSecondDropdown[0].name);
}

//MACRO-ThirdDropdown-MTD
function macShowSubParameterNames(value) {
    let macGetSubParameterNames = document.getElementById("mac_subparameter");
    let macPushSubParameterNames = '';
    var macSecondDropdown = subParametersList.filter(x => x.category == value);

    for (let MTD = 0; MTD < macSecondDropdown.length; MTD++) {
        if (macSecondDropdown[MTD].name) {
            macPushSubParameterNames += `<option>${macSecondDropdown[MTD].name}</option><br/><br/>`;
        }
    }
    macGetSubParameterNames.innerHTML = macPushSubParameterNames;
}

let user_id = "<?php echo $user_id; ?>";
console.log("User ID:", user_id);

let login_in_User = "<?php echo $name; ?>";
console.log("$name:", login_in_User);
//



// macroGroup username dialog box
$(document).ready(function() {
    //
    $('.modelForMacroGroup1').hide();

    $('#userFilterLink').click(function(e) {
        e.preventDefault();
        $('.modelForMacroGroup1').toggle();
    });

    $('.modelForMacroGroupLegend').click(function() {
        $('.modelForMacroGroup1').hide();
    });
});
// macroGroup username dialog box ENDS HERE


let counter = 0;
let macroAddArr = [];
let editingMacroId = null;

//add btn
function macAddForm() {
    let macroName = document.getElementById("macroNames").value;
    let modelName = document.getElementById("mac_modelNames").value;
    let parameterName = document.getElementById("mac_parameterNames").value;
    let subParameterName = document.getElementById("mac_subparameter").value;

    if (editingMacroId !== null) {
        let editedMacroIndex = macroAddArr.findIndex(macro => macro.ulId === editingMacroId);
        if (editedMacroIndex !== -1) {
            macroAddArr[editedMacroIndex].macroName = macroName;
            macroAddArr[editedMacroIndex].modelName = modelName;
            macroAddArr[editedMacroIndex].parameterName = parameterName;
            macroAddArr[editedMacroIndex].subParameterName = subParameterName;
            renderMacroItems(macroAddArr);
        }
    } else {
        let macroObject = {
            ulId: counter++,
            macroName: macroName,
            modelName: modelName,
            parameterName: parameterName,
            subParameterName: subParameterName,
            user_id: user_id
        };
        macroAddArr.push(macroObject);
    }

    console.log("Updated Macro Array:", macroAddArr);

    document.getElementById('mac_modelNames').value = '';
    document.getElementById('mac_parameterNames').value = '';
    document.getElementById('mac_subparameter').value = '';

    renderMacroItems(macroAddArr);
}

//below add-submit btn content
function renderMacroItems(macros) {
    console.log("Received Macros:", macros);

    addedInfoContainer.innerHTML = "";

    macros.forEach(macro => {
        if (macro &&
            typeof macro === 'object' &&
            macro.hasOwnProperty('macroName') &&
            macro.hasOwnProperty('modelName') &&
            macro.hasOwnProperty('parameterName') &&
            macro.hasOwnProperty('subParameterName')) {
            console.log("Current Macro:", macro);
            let macroName = macro.macroName ? macro.macroName.trim() : '';
            let modelName = macro.modelName ? macro.modelName.trim() : '';
            let parameterName = macro.parameterName ? macro.parameterName.trim() : '';
            let subParameterName = macro.subParameterName ? macro.subParameterName.trim() : '';
            // let ulId = macro.ulId || '';
            let ulId;
            if (typeof macro.ulId !== 'undefined') {
                ulId = macro.ulId;
            }
            // console.log(macroName, modelName, parameterName, subParameterName, ulId, "XXXXXX");
            // 
            if (macro) {
                let addedInfoDiv = `<div style="color: #1d334e;" id="toggleDiv">
                    <div style="color: #1d334e;">
                        <span onclick="editMacroLayer(${ulId})">
                            <i class="fa-solid fa-plus fa-xs"></i> ${macroName}: ${modelName}
                        </span>&nbsp;&nbsp;
                        <span title="Edit" onclick="editMacroLayer(${ulId})">
                        <i class="fa-sharp fa-solid fa-pen-to-square fa-xs"></i></span>
                        <span title="Delete" onclick="deleteMacroLayer(${ulId})">
                            <i class="fa-sharp fa-solid fa-trash fa-xs"></i>
                        </span>
                    </div>

                    <ul id="${ulId}" class="listContainerMacro">
                        <li>${modelName}</li>
                        <li>${parameterName}</li>
                        <li>${subParameterName}</li>
                    </ul>
                    <input type="hidden" class="macroName" value="${macroName}">
                    <input type="hidden" class="modelName" value="${modelName}">
                    <input type="hidden" class="parameterName" value="${parameterName}">
                    <input type="hidden" class="subParameterName" value="${subParameterName}">
                </div>`;
                console.log("Rendering Macro Item:", ulId, macroName, modelName);
                addedInfoContainer.innerHTML += addedInfoDiv;
            } else {
                console.error("Missing or invalid properties in macro object:", macro);
            }
        }
    });
}

//add-btn below content edit without DB
function editMacroLayer(param) {
    if (typeof param === 'number') {
        let ulId = param;
        editingMacroId = ulId;
        let macroIndex = macroAddArr.findIndex(macro => macro.ulId === ulId);
        if (macroIndex !== -1) {
            let macro = macroAddArr[macroIndex];
            console.log("Editing Macro Object:", macro);
            document.getElementById('macroNames').value = macro.macroName;
            document.getElementById('mac_modelNames').value = macro.modelName;
            document.getElementById('mac_parameterNames').value = macro.parameterName;
            document.getElementById('mac_subparameter').value = macro.subParameterName;
        }
    }
}

let UpdateMAcListID; // this variable is for sending the id from fn editMacroLayerDB to fn updateForm

// edit MacroGroup from DB
function editMacroLayerDB(id, modelname, parametername, subparametername) {
    handleFormBtn();
    UpdateMAcListID = id;
    console.log("ID_for UpdateBtn:", id);
    console.log("Model Name:", modelname);
    console.log("Parameter Name:", parametername);
    console.log("Subparameter Name:", subparametername);

    let modelDropdown = document.getElementById("mac_modelNames");
    for (let i = 0; i < modelDropdown.options.length; i++) {
        if (modelDropdown.options[i].value === modelname) {
            modelDropdown.selectedIndex = i;
            break;
        }
    }

    let parameterDropdown = document.getElementById("mac_parameterNames");
    for (let i = 0; i < parameterDropdown.options.length; i++) {
        if (parameterDropdown.options[i].value === parametername) {
            parameterDropdown.selectedIndex = i;
            break;
        }
    }

    let subparameterDropdown = document.getElementById("mac_subparameter");
    for (let i = 0; i < subparameterDropdown.options.length; i++) {
        if (subparameterDropdown.options[i].value === subparametername) {
            subparameterDropdown.selectedIndex = i;
            break;
        }
    }

}

// update btn - DB
function updateForm() {
    let macroName = document.getElementById("macroNames").value;
    let modelName = document.getElementById("mac_modelNames").value;
    let parameterName = document.getElementById("mac_parameterNames").value;
    let subParameterName = document.getElementById("mac_subparameter").value;

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "<?php echo base_url('HomePage/updateMacro'); ?>", true);
    xhr.setRequestHeader("Content-Type", "application/json");

    let data = {
        id: UpdateMAcListID,
        macroName: macroName,
        modelName: modelName,
        parameterName: parameterName,
        subParameterName: subParameterName,
        user_id: user_id
    };
    console.log(data, "data");

    xhr.send(JSON.stringify(data));

    xhr.onload = function() {
        if (xhr.status == 200) {
            console.log("Values updated successfully-200 from script.");
        } else {
            console.error("Error occurred while updating values. Status code: " + xhr.status);
        }
    };
}

// add save update cancel btn view logic
function handleFormBtn() {
    document.getElementById("addBtn").style.display = 'none';
    document.getElementById("subBtn").style.display = 'none';
    document.getElementById("updBtn").style.display = 'block';
    document.getElementById("canBtn").style.display = 'block';
}

//cancel btn
function cancelForm() {
    document.getElementById("addBtn").style.display = 'block';
    document.getElementById("subBtn").style.display = 'block';
    document.getElementById("updBtn").style.display = 'none';
    document.getElementById("canBtn").style.display = 'none';
    closCreatMac();
}

function deleteMacroLayer(ulId) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "<?php echo base_url('HomePage/delete_macro_by_id'); ?>", true);
    xhr.setRequestHeader("Content-Type", "application/json");

    let data = {
        macroId: ulId
    };

    xhr.send(JSON.stringify(data));
    console.log(ulId, "ulId");

    xhr.onload = function() {
        if (xhr.status == 200) {
            console.log(xhr.responseText, "2");

            showSavedMacroList();

            closCreatMac();
        }
    };
}

//save btn- storing in DB
function submitForm() {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "<?php echo base_url('HomePage/submitForm'); ?>", true);
    xhr.setRequestHeader("Content-Type", "application/json");

    let data = {
        macroAddArr: macroAddArr
    };
    console.log(data, "submit-btn DATA");

    xhr.send(JSON.stringify(data));

    xhr.onload = function() {
        if (xhr.status == 200) {
            let addedInfoContainer = document.getElementById('addedInfoContainer');
            console.log("Added Info Container:", addedInfoContainer);

            if (addedInfoContainer) {
                addedInfoContainer.innerHTML = '';
            }

            document.getElementById('macroNames').value = '';

            showSavedMacroList();
            console.log("Form submitted successfully.");
        } else {
            console.error("Error occurred while submitting the form.");
        }
    };
}

let selectedUserId = null; //Storing the user_id here from userFilteration
let allMacros = null;

// showing MacroGroup-Name
function showSavedMacroList() {
    let showAllCreatedMacro = document.getElementById("showCreatedMacro");
    showAllCreatedMacro.innerHTML = "";

    let xhr = new XMLHttpRequest();

    if (user_id == "450632a9-5717-4261-ada6-dc97cbea0ee9") {
        xhr.open("GET", "<?php echo base_url('HomePage/getAllMacros'); ?>", true); // superAdmin MACROGROUP-Name view
    } else {
        xhr.open("GET", "<?php echo base_url('HomePage/getUserMacros?user_id=') ?>" + user_id,
            true); // userPrespective MACROGROUP-Name view
    }


    xhr.onload = function() {
        if (xhr.status == 200) {
            let macros = JSON.parse(xhr.responseText);

            let uniqueMacroNames = new Set();

            if (allMacros) {
                macros = macros
            } else {
                if (selectedUserId) {
                    macros = macros.filter(x => x.user_id == selectedUserId);
                    // console.log("1");
                } else {
                    macros = macros.filter(x => x.user_id == user_id);
                    // console.log("2");
                }
            }

            macros.forEach(macro => {
                // console.log(macro, "macro");
                if (!uniqueMacroNames.has(macro.macroname)) {
                    let showInfoDiv = `<div class="createMacro">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div style="display: flex; align-items: center;">
                                <i class="fa-solid fa-asterisk fa-beat fa-xs" style="color: #1d334e;"></i>&nbsp;
                                <span style="font-family: 'Times New Roman, sans-serif;font-size: 15px;font-weight: 600;color: #1d334e;">
                                    ${macro.macroname}
                                </span>
                            </div>

                            <?php if ($user_id == "450632a9-5717-4261-ada6-dc97cbea0ee9"): ?>
                                                        <div>
                                                            <span style="padding-right: 10px;" onclick="tempCloseGrp(this)">X</span>
                                                        </div>
                            <?php endif; ?>
                            
                        </div>


                        <div class="saveMacroView">
                            <button title="Play" class="play-button" onclick="playMacro('${macro.macroname}')">
                                <i class="fa-solid fa-play fa-xs"></i>
                            </button>

                            <button title="View" class="view-button" onclick="viewMacro('${macro.macroname}')">
                                <i class="fa-solid fa-eye fa-xs"></i>
                            </button>

                            <button title="Edit" class="edit-button" onclick="editMacro('${macro.macroname}')">
                                <i class="fa-solid fa-pen-to-square fa-xs"></i>
                            </button>

                            <button title="Delete" class="delete-button" onclick="alertDeleteMacro('${macro.macroname}')">
                                <i class="fa-solid fa-trash fa-xs"></i>
                            </button> 
                        </div>
                    </div>`;
                    showAllCreatedMacro.innerHTML += showInfoDiv;
                    uniqueMacroNames.add(macro.macroname); // Add the macro name to the set
                }
            });
        } else {
            console.error("Error occurred while fetching saved macros.");
        }
    };

    xhr.send();
}
showSavedMacroList();

function tempCloseGrp(element) {
    let macroElement = element.closest('.createMacro');
    macroElement.remove();
}


$(document).ready(function() {
    $('#userFilterLink').click(function(e) {
        e.preventDefault();
        $.ajax({
            url: $(this).attr('href'),
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                if (Array.isArray(response)) {
                    let names = response.map(function(item) {
                        return item.name.trim(); //.toUpperCase()
                    });
                    $('#showMacroGrpUsers').html("");
                    names.forEach(function(name) {
                        $('#showMacroGrpUsers').append(
                            '<span style="margin-left: 20px;" class="macroGrpUserWise">' +
                            name +
                            '</span><br>'
                        );
                    });
                } else {
                    console.error("Response is not in the expected format.");
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });

    $('#showMacroGrpUsers').on('click', '.macroGrpUserWise', function() {
        let userName = $(this).text();
        // Highlight the clicked element
        $('#showMacroGrpUsers .macroGrpUserWise').css('background-color',
            ''); // Remove highlight from all
        $(this).css('background-color', 'yellow'); // Highlight the clicked one

        $.ajax({
            url: '<?php echo base_url(); ?>HomePage/fetch_user_details/' + encodeURIComponent(
                userName),
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                if (response.error) {
                    console.error(response.error);
                } else {
                    let user_id_users = response.user_id;
                    selectedUserId = user_id_users;
                    showSavedMacroList();
                    $.ajax({
                        url: '<?php echo base_url(); ?>HomePage/fetchMacrosByUserId/' +
                            encodeURIComponent(user_id_users),
                        type: 'GET',
                        dataType: 'json',
                        success: function(macrosResponse) {
                            console.log(macrosResponse, "macrosResponse");
                            macrosResponse.forEach(function(macro_table_data) {
                                console.log(macro_table_data.macroname,
                                    "macro_table_data");
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                        }
                    });
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });

    $('#showMacroGrpUsersALL').on('click', function() {
        $('#showMacroGrpUsersALL').css('background-color', 'yellow'); // Highlight "All MAcros"
        $('#showMacroGrpUsers .macroGrpUserWise').css('background-color',
            ''); // Remove highlight from all other users
        console.log("All macros");
    });

    let allMacrosClickEvent = document.getElementById("showMacroGrpUsersALL");
    allMacrosClickEvent.addEventListener("click", function() {
        allMacros = true;
        showSavedMacroList();
        console.log("allMacrosClickEvent Element clicked!");
    });
});







// + MAIN play btn
function playMacro(macroname) {
    updateBackgroundColor();
    bgArrayForMac.forEach(array => array.length = 0);
    console.log(macroname, "macroname");

    macPlayerPlay(macroname);

    if (macroname) {
        document.getElementById("macroDetails").style.display = "block";
        // 
        document.querySelector('.stopBtnClas').onclick = function() {
            macPlayerStop(macroname);
            console.log("stop Btn");
        };
        document.querySelector('.playBtnClas').onclick = function() {
            macPlayerPlay(macroname);
            console.log("play Btn");
        };
        document.querySelector('.pauseBtnClas').onclick = function() {
            macPlayerPause(macroname);
            console.log("pause Btn");
        };
        document.querySelector('.leftMacBtn').onclick = function() {
            macPlayerLeft(macroname);
            console.log("left Btn");
        };
        document.querySelector('.rightMacBtn').onclick = function() {
            macPlayerRight(macroname);
            console.log("right Btn");
        };
        document.querySelector('.playBtnClasX').onclick = function() {
            macroRunFnX(macroname);
            console.log("right Btn");
        };
    } else {
        console.error("Macro not found for macroname:", macroname);
    }
}

let countingElement = document.getElementById("counting");
let playerTextElement = document.getElementById("playerText");
let currentIndex = 0;
let interval;
let isPaused = false;
let pausedIndex;

function playNextCase() {
    if (currentIndex < response.length && !isPaused) {
        let item = response[currentIndex];
        console.log(item, "item");
        let subParameterName = item.subparametername;
        console.log("Subparameter Name:", subParameterName);

        map.eachLayer(layer => {
            if (layer instanceof L.TileLayer.WMS) {
                map.removeLayer(layer);
            }
        });

        switch (subParameterName) {
            case "Last 00-05 min":
                map.addLayer(mywmsIITM);
                break;
            case "00UTC":
                map.addLayer(ship_00utc);
                break;
            case "Radar Reflectivity":
                map.addLayer(rad_ref);
                break;
            case "Oil Refineries":
                map.addLayer(exp_oil);
                break;
            case "RI GFS DAY1":
                map.addLayer(med_gfs1);
                break;
            default:
                console.log("Unknown subparameter:", subParameterName);
                break;
        }

        playerTextElement.innerHTML = item.subparametername;

        startCountdown(10, function() {
            map.eachLayer(layer => {
                if (layer instanceof L.TileLayer.WMS) {
                    map.removeLayer(layer);
                }
            });
            currentIndex++;
            playNextCase();
        });
    } else {
        console.log("All cases played or paused.");
    }
}

function startCountdown(seconds, callback) {
    clearInterval(interval);
    interval = setInterval(function() {
        if (!isPaused) {
            seconds--;
            countingElement.innerHTML = seconds;
            if (seconds <= 0) {
                clearInterval(interval);
                if (callback) {
                    callback();
                }
            }
        }
    }, 1000);
}

// player play btn
function macPlayerPlay(macroname) {
    currentIndex = pausedIndex || 0;
    pausedIndex = null;
    let xhr = new XMLHttpRequest();

    let url = "<?php echo base_url('HomePage/getMacroByMacroname'); ?>?macroname=" + encodeURIComponent(macroname);
    console.log("Request URL:", url);

    xhr.open("GET", url, true);

    xhr.onload = function() {
        if (xhr.status == 200) {
            response = JSON.parse(xhr.responseText);
            if (response && response.length > 0) {
                isPaused = false;
                playNextCase();
            } else {
                console.log("No data found for the given macroname.");
            }
        } else {
            console.error("Error occurred while fetching data. Status:", xhr.status);
        }
    };

    xhr.send();
}

function macPlayerResume(macroname) {
    isPaused = false;
    playNextCase();
}

// player Pause btn
function macPlayerPause(macroname) {
    isPaused = true;
    pausedIndex = currentIndex;
    console.log("Pausing macro:", macroname);
    clearInterval(interval);
}

//player Stops btn
function macPlayerStop(macroname) {
    console.log("Stopping macro:", macroname);
    currentIndex = 0;
    countingElement.innerHTML = 0;
    clearInterval(interval);
    map.eachLayer(layer => {
        if (layer instanceof L.TileLayer.WMS) {
            map.removeLayer(layer);
        }
    });
}

// player left btn
function macPlayerLeft(macroname) {
    map.eachLayer(layer => {
        if (layer instanceof L.TileLayer.WMS) {
            map.removeLayer(layer);
        }
    });
    if (currentIndex > 0) {
        currentIndex--;
        playNextCase();
        console.log("Going left in macro:", macroname);
    } else {
        console.log("Already at the beginning of the macro:", macroname);
    }
}

// player right btn
function macPlayerRight(macroname) {
    map.eachLayer(layer => {
        if (layer instanceof L.TileLayer.WMS) {
            map.removeLayer(layer);
        }
    });
    if (currentIndex < response.length - 1) {
        currentIndex++;
        playNextCase();
        console.log("Going right in macro:", macroname);
    } else {
        console.log("Already at the end of the macro:", macroname);
    }
}


// player close X btn
function macroRunFnX(macroname) {
    macPlayerStop(macroname);
    map.eachLayer(layer => {
        if (layer instanceof L.TileLayer.WMS) {
            map.removeLayer(layer);
        }
    });
    playerTextElement.innerHTML = "";
    document.getElementById("macroDetails").style.display = "none";
}

//player ends here


// viewMacro
function viewMacro(macroname) {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "<?php echo base_url('HomePage/getMacroByMacroname?macroname='); ?>" + encodeURIComponent(
        macroname), true);

    xhr.onload = function() {
        if (xhr.status === 200) {
            try {
                // Attempt to parse the response as JSON
                let macro = JSON.parse(xhr.responseText);
                if (Array.isArray(macro) && macro.length > 0) {
                    view_Create_Macro.style.display = 'block';
                    let viewMacroDetails = document.getElementById("viewMacroDetails");
                    let viewMacroTitleVar = document.getElementById("viewMacroTitle");
                    viewMacroTitleVar.innerHTML = macro[0].macroname;
                    let viewTempMacro = macro.map(macroItem => {
                        let modelName = macroItem.modelname.trim();
                        let parameterName = macroItem.parametername.trim();
                        let subParameterName = macroItem.subparametername.trim();
                        if (modelName && parameterName && subParameterName) {
                            return `<div style="font-family: 'Times New Roman'; font-size: 15px; color: #1d334e;" class="macroListCSS" id="toggleDiv">
                                <span onclick="MacroPlusToggle('${macroItem.ulId}view')">+ ${macroItem.macroname}: ${subParameterName}</span>
                                <ul id="${macroItem.ulId}view" class="listContainerMacro" style="font-family: 'Times New Roman'; font-size: 13px;">
                                    <li>${modelName}</li>
                                    <li>${parameterName}</li>
                                    <li>${subParameterName}</li>
                                </ul>
                            </div>`;
                        } else {
                            console.error("Missing properties in macroItem:", macroItem);
                            return '';
                        }
                    });
                    viewMacroDetails.innerHTML = viewTempMacro.join("");
                } else {
                    console.error("No macro found with the given macroname or empty response:", macroname);
                }
            } catch (e) {
                console.error("Error parsing JSON response:", e);
                console.error("Server response:", xhr.responseText); // Log the response text
            }
        } else {
            console.error("Error occurred while fetching macro details. Status:", xhr.status);
            console.error("Server response:", xhr.responseText); // Log the response text
        }
    };

    xhr.send();
}

// + MAIN edit btn DB
function editMacro(macroname) {
    console.log(macroname, "macroname");
    let xhr = new XMLHttpRequest();
    // let url = "<?php echo base_url('HomePage/getMacroByMacroname?macroname='); ?>" + encodeURIComponent(macroname);
    // console.log("Request URL:", url);

    xhr.open("GET", "<?php echo base_url('HomePage/getMacroByMacroname?macroname='); ?>" + encodeURIComponent(
        macroname), true);

    xhr.onload = function() {
        if (xhr.status == 200) {
            let macro = JSON.parse(xhr.responseText);
            console.log(macro, "macro");
            macro.forEach(item => {
                console.log("Fetched macroname1:", item.id);
                console.log("Fetched macroname1:", item.macroname);
                console.log("Fetched macroname1:", item.modelname);
                console.log("Fetched macroname1:", item.parametername);
                console.log("Fetched macroname1:", item.subparametername);

                // Update UI with fetched macro details
                document.getElementById('macroNames').value = item.macroname;

                // In editMacro function, modify the onclick event for editMacroLayerDB to pass all required parameters
                let addedInfoDiv = `<div style="color: #1d334e;" id="toggleDiv">
                     <div style="color: #1d334e;">
                         <span>
                             <i class="fa-solid fa-plus fa-xs"></i> ${item.macroname}: ${item.modelname}
                         </span>&nbsp;&nbsp;

                         <span title="Edit" onclick="editMacroLayerDB(${item.id}, '${item.modelname}', '${item.parametername}', '${item.subparametername}')">
                            <i class="fa-sharp fa-solid fa-pen-to-square fa-xs"></i>
                        </span>
                         <span title="Delete" onclick="deleteMacroLayer(${item.id})">
                             <i class="fa-sharp fa-solid fa-trash fa-xs"></i>
                         </span>
                     </div>

                     <ul id="${item.id}" class="listContainerMacro">
                         <li>${item.modelname}</li>
                         <li>${item.parametername}</li>
                         <li>${item.subparametername}</li>
                     </ul>
                     <input type="hidden" class="macroName" value="${item.macroname}">
                     <input type="hidden" class="modelName" value="${item.modelname}">
                     <input type="hidden" class="parameterName" value="${item.parametername}">
                     <input type="hidden" class="subParameterName" value="${item.subparametername}">
                 </div>`;


                addedInfoContainer.innerHTML += addedInfoDiv;
            });
            createMacroForm();

        } else {
            console.error("Error occurred while fetching macro details. Status code: " + xhr.status);
        }
    };

    xhr.send();
}


// Function to delete the macro
function deleteMacro(macroName, userName, deleteReason) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "<?php echo base_url('HomePage/delete_macro'); ?>", true);
    xhr.setRequestHeader("Content-Type", "application/json");

    let data = {
        macroname: macroName,
        userName: userName,
        deleteReason: deleteReason
    };

    xhr.onload = function() {
        if (xhr.status === 200) {
            view_Create_Macro.style.display = 'none';
            showSavedMacroList();
            closeDeleteMacroModal();
            console.log("Macro(s) deleted successfully.");
            console.log("UserName:", userName);
            console.log("DeleteReason:", deleteReason);
        } else {
            console.error("Error occurred while deleting macro(s).");
        }
    };

    xhr.send(JSON.stringify(data));
}

// Function to show the delete confirmation modal
function alertDeleteMacro(macroName) {
    document.getElementById('deleteMacroModal').style.display = 'block';

    document.getElementById('macCanBtn').onclick = function() {
        let userName = document.getElementById('userName').value;
        let deleteReason = document.getElementById('deleteReason').value;
        deleteMacro(macroName, userName, deleteReason); // Pass all three parameters
    };

    document.getElementById('userName').value = "";
    document.getElementById('deleteReason').value = "";
    document.getElementById('macCanBtn').disabled = true; // Disable the submit button initially

    // Add event listeners to enable the submit button only when both inputs are filled
    document.getElementById('userName').addEventListener('input', toggleSubmitButton);
    document.getElementById('deleteReason').addEventListener('input', toggleSubmitButton);
}

// Function to close the delete confirmation modal
function closeDeleteMacroModal() {
    document.getElementById('deleteMacroModal').style.display = 'none';
}

// 
function toggleSubmitButton() {
    let userName = document.getElementById('userName').value;
    let deleteReason = document.getElementById('deleteReason').value;
    document.getElementById('macCanBtn').disabled = !(userName && deleteReason);
}

function MacroPlusToggle(ulId) {
    ulId = parseInt(ulId);
    console.log("Received ulId:", ulId);
    console.log("Contents of macroAddArr:", macroAddArr);

    let macroObject = macroAddArr.find(obj => obj.ulId === ulId);

    if (macroObject) {
        console.log("Corresponding macroObject:", macroObject);
    } else {
        console.log("Macro object not found for ulId:", ulId);
    }
}


//********************************************************* */
//Macro Create Macro Toggle
function createMacroForm() {
    create_Macro.style.display = "block";
}

const mywmsIITM = L.tileLayer.wms(
    "http://103.215.208.107:8585/geoserver/cite/wms", {
        layers: 'cite:awssample',
        format: 'image/png',
        transparent: true,
        version: '1.1.0',
        attribution: "awssample",
        layerName: "mywmsIITM"
    });

// const mywmsIITM = L.tileLayer.wms("http://webgis.imd.gov.in:8080/geoserver/IMD_Data/wms", {
//     layers: 'IMD_Data:MAJOR_TOWNS',
//     format: 'image/png',
//     transparent: true,
//     version: '1.1.0',
//     attribution: "MAJOR_TOWNS",
//     layerName: "exp_oil"
// });

const mywmsNcum = L.tileLayer.wms("http://103.215.208.107:8585/geoserver/cite/wms", {
    layers: 'cite:LLWS_12hr_fcst_FL',
    format: 'image/png',
    transparent: true,
    version: '1.1.0',
    attribution: "LLWS_12hr_fcst_FL",
    layerName: "mywmsNcum"
});

const mywmsNowcast = L.tileLayer.wms("http://103.215.208.107:8585/geoserver/aasdagrometgis/wms", {
    layers: 'aasdagrometgis:Nowcast',
    format: 'image/png',
    transparent: true,
    version: '1.1.0',
    attribution: "Nowcast",
    layerName: "mywmsNowcast"
});


//leaflet starts here
// const map = L.map('map', {
//     cursor: true,
//     timeDimension: true,
//     timeDimensionOptions: {
//         timeInterval: "2023-12-04/2023-12-04",
//         validTimeRange: "00:00/23:00",
//         period: "PT1H"
//     },
//     timeDimensionControl: true
// }).setView([22.79459, 80.06406], 5);

// const map = L.map('map', {
//     zoom: 5,
//     cursor: true
// }).setView([22.79459, 80.06406]);


let sampleLayerBtn;
// Create a custom control button for model popup
var SampleLayerBtn = L.Control.extend({
    options: {
        position: 'topright'
    },
    onAdd: function() {
        // Create a button element
        var button = L.DomUtil.create('span',
            'leaflet-bar leaflet-control leaflet-control-custom custom-btn4');
        button.innerHTML = 'Sample Layer';

        button.style.fontSize = '15px';
        button.style.fontFamily = 'Times New Roman';
        button.style.top = '-40px';
        button.style.left = '-46px';

        // click event listener
        L.DomEvent.on(button, 'click', function() {
            testImageTimeLayer = L.timeDimension.layer.imageOverlay(imageLayer, {
                getUrlFunction: getSirenaImageUrl
            });
            testImageTimeLayer.addTo(map);
            console.log("welcome");
        });

        return button;
    }
});



L.TimeDimension.Layer.ImageOverlay = L.TimeDimension.Layer.extend({

    initialize: function(layer, options) {
        L.TimeDimension.Layer.prototype.initialize.call(this, layer, options);
        this._layers = {};
        this._defaultTime = 0;
        this._timeCacheBackward = this.options.cacheBackward || this.options.cache || 0;
        this._timeCacheForward = this.options.cacheForward || this.options.cache || 0;
        this._getUrlFunction = this.options.getUrlFunction;

        this._baseLayer.on('load', (function() {
            this._baseLayer.setLoaded(true);
            this.fire('timeload', {
                time: this._defaultTime
            });
        }).bind(this));
    },

    eachLayer: function(method, context) {
        for (var prop in this._layers) {
            if (this._layers.hasOwnProperty(prop)) {
                method.call(context, this._layers[prop]);
            }
        }
        return L.TimeDimension.Layer.prototype.eachLayer.call(this, method, context);
    },

    _onNewTimeLoading: function(ev) {
        var layer = this._getLayerForTime(ev.time);
        if (!this._map.hasLayer(layer)) {
            this._map.addLayer(layer);
        }
    },

    isReady: function(time) {
        var layer = this._getLayerForTime(time);
        return layer.isLoaded();
    },

    _update: function() {
        if (!this._map)
            return;
        var time = map.timeDimension.getCurrentTime();
        var layer = this._getLayerForTime(time);
        if (this._currentLayer == null) {
            this._currentLayer = layer;
        }
        if (!this._map.hasLayer(layer)) {
            this._map.addLayer(layer);
        } else {
            this._showLayer(layer, time);
        }
    },

    _showLayer: function(layer, time) {
        if (this._currentLayer && this._currentLayer !== layer) {
            this._currentLayer.hide();
            this._map.removeLayer(this._currentLayer);
        }
        layer.show();
        if (this._currentLayer && this._currentLayer === layer) {
            return;
        }
        this._currentLayer = layer;
        // Cache management
        var times = this._getLoadedTimes();
        var strTime = String(time);
        var index = times.indexOf(strTime);
        var remove = [];
        // remove times before current time
        if (this._timeCacheBackward > -1) {
            var objectsToRemove = index - this._timeCacheBackward;
            if (objectsToRemove > 0) {
                remove = times.splice(0, objectsToRemove);
                this._removeLayers(remove);
            }
        }
        if (this._timeCacheForward > -1) {
            index = times.indexOf(strTime);
            var objectsToRemove = times.length - index - this._timeCacheForward - 1;
            if (objectsToRemove > 0) {
                remove = times.splice(index + this._timeCacheForward + 1, objectsToRemove);
                this._removeLayers(remove);
            }
        }
    },

    _getLayerForTime: function(time) {
        if (time == 0 || time == this._defaultTime) {
            return this._baseLayer;
        }
        if (this._layers.hasOwnProperty(time)) {
            return this._layers[time];
        }
        var url = this._getUrlFunction(this._baseLayer.getURL(), time);
        imageBounds = this._baseLayer._bounds;

        var newLayer = L.imageOverlay(url, imageBounds, this._baseLayer.options);
        this._layers[time] = newLayer;
        newLayer.on('load', (function(layer, time) {
            layer.setLoaded(true);
            if (map.timeDimension && time == map.timeDimension.getCurrentTime() && !map
                .timeDimension.isLoading()) {
                this._showLayer(layer, time);
            }
            this.fire('timeload', {
                time: time
            });
        }).bind(this, newLayer, time));

        // Hack to hide the layer when added to the map.
        // It will be shown when timeload event is fired from the map (after all layers are loaded)
        newLayer.onAdd = (function(map) {
            Object.getPrototypeOf(this).onAdd.call(this, map);
            this.hide();
        }).bind(newLayer);
        return newLayer;
    },

    _getLoadedTimes: function() {
        var result = [];
        for (var prop in this._layers) {
            if (this._layers.hasOwnProperty(prop)) {
                result.push(prop);
            }
        }
        return result.sort();
    },

    _removeLayers: function(times) {
        for (var i = 0, l = times.length; i < l; i++) {
            this._map.removeLayer(this._layers[times[i]]);
            delete this._layers[times[i]];
        }
    },

});

L.timeDimension.layer.imageOverlay = function(layer, options) {
    return new L.TimeDimension.Layer.ImageOverlay(layer, options);
};

L.ImageOverlay.include({
    _visible: true,
    _loaded: false,

    _originalUpdate: L.imageOverlay.prototype._update,

    _update: function() {
        if (!this._visible && this._loaded) {
            return;
        }
        this._originalUpdate();
    },

    setLoaded: function(loaded) {
        this._loaded = loaded;
    },

    isLoaded: function() {
        return this._loaded;
    },

    hide: function() {
        this._visible = false;
        if (this._image && this._image.style)
            this._image.style.display = 'none';
    },

    show: function() {
        this._visible = true;
        if (this._image && this._image.style)
            this._image.style.display = 'block';
    },

    getURL: function() {
        return this._url;
    },

});

function addZ(n) {
    return n < 10 ? '0' + n : '' + n;
}

var today = new Date('2024-02-01');
// console.log(today);
var today_month = today.getMonth() + 1;
var date = today.getFullYear() + '-' + today_month + '-' + today.getDate();
var time = today.getHours() + ":00:00";
var dateTime = date + ' ' + time;
// console.log(dateTime);
var endDate = new Date('2024-02-01');
endDate.setDate(endDate.getDate() + 2);
endDate.setUTCMinutes(0, 0, 0);

var startDate = new Date(dateTime);
// console.log(endDate);

//MAP Starts Here
var map = L.map('map', {
    renderer: L.canvas({
        padding: 0
    }),
    zoom: 5,
    timeDimension: true,
    timeDimensionControl: false,
    timeDimensionOptions: {
        timeInterval: "P02D/" + endDate.toISOString(),
        period: "PT1H",
        validTimeRange: "00:00/23:00",
        currentTime: startDate
    },
    center: [22.79459, 80.06406],
});

// Function to toggle timeDimensionControl
var testImageTimeLayer;

function toggleTimeDimensionControl() {
    if (!map.timeDimensionControl) {
        map.timeDimensionControl = L.control.timeDimension({
            // position: 'topleft',
            autoPlay: false,
            playerOptions: {
                buffer: 10,
                transitionTime: 500,
                loop: true,
            }
        }).addTo(map);
        sampleLayerBtn = new SampleLayerBtn().addTo(map);

        // observation and Macro below X
        let macroContainerFn = document.getElementById("macroContainer");
        let observationContainerFn = document.getElementById("ObservationContainer");
        let mapVar = document.getElementById('map');
        macroContainerFn.classList.add('hidden');
        observationContainerFn.classList.add('hidden');
        mapVar.style.width = '100%';

        // 
        map.removeControl(panelLayers2);
        map.removeControl(panelLayers3);
        map.removeControl(panelLayers4);
        map.removeControl(panelLayers5);
        map.removeControl(panelLayers6);
        map.removeControl(panelLayers7);
        map.removeControl(panelLayers8);
        map.removeControl(panelLayers9);
        map.removeControl(panelLayers10);
        map.removeControl(panelLayers11);
        Model_Time.style.display = "none";

    } else {
        if (testImageTimeLayer) {
            map.removeLayer(testImageTimeLayer);
            testImageTimeLayer = null;
            console.log("Layer removed");
        }
        map.removeControl(map.timeDimensionControl);
        map.timeDimensionControl = null;
        // 
        if (sampleLayerBtn) {
            map.removeControl(sampleLayerBtn);
            sampleLayerBtn = null;
        }
        // 

    }
    map.on('timeload', function(event) {
        if (event.time && testImageTimeLayer) {
            testImageTimeLayer.addTo(map);
        }
    });
}



// Create a custom control
var timeDimensionControlButton = L.Control.extend({
    onAdd: function() {
        var button = L.DomUtil.create('button',
            'yourButtonClass'); // Create a button with a specified class
        button.innerHTML = '<i class="fa-regular fa-clock" style="font-size: 20px;"></i>';
        button.style.backgroundColor = 'white';
        button.style.border = '0 solid black';
        button.style.padding = '7px';
        button.title = 'Time Dimension';
        button.onclick = function() {
            toggleTimeDimensionControl();
        };

        return button;
    },

    onRemove: function() {
        // Nothing to do here
    }
});

// Add the custom control to the map
var timeDimensionControl = new timeDimensionControlButton({
    position: 'topleft'
});
timeDimensionControl.addTo(map);

var imgBegnUrl = 'https://satark.rimes.int/FC_LT_NCM/OUT/20240201/00/';

// Add image layer
var imageUrl = imgBegnUrl + '00Z04FEB2024.png',
    imageBounds = [
        [-51, 0],
        [51, 180]
    ];

var imageLayer = L.imageOverlay(imageUrl, imageBounds, {
    opacity: 1
});
Date.prototype.format = function(mask, utc) {
    return dateFormat(this, mask, utc);
};

var getSirenaImageUrl = function(baseUrl, time) {
    var beginUrl = imgBegnUrl;
    var new_date_time = new Date(time);
    new_date_time = new_date_time.setMonth(new_date_time.getMonth());
    var new_time = new Date(new_date_time).format('HH') + 'Z' + moment(new_date_time).format("DD") + moment(
        new_date_time).format("MMM") + moment(new_date_time).format("YYYY");
    beginUrl = beginUrl + new_time.toUpperCase();
    url = beginUrl + '.png';
    console.log(url);
    return url;
};

L.Control.TimeDimensionCustom = L.Control.TimeDimension.extend({
    _getDisplayDateFormat: function(date) {
        return moment(date).format("LL h A");
    }
});

// 

function toggleTimeDimensionControlObs_Mac() {
    if (map.timeDimensionControl) {
        if (testImageTimeLayer) {
            map.removeLayer(testImageTimeLayer);
            testImageTimeLayer = null;
            console.log("Layer removed");
        }
        map.removeControl(map.timeDimensionControl);
        map.timeDimensionControl = null;
        // 
        if (sampleLayerBtn) {
            map.removeControl(sampleLayerBtn);
            sampleLayerBtn = null;
        }
    }
}
//  time dimension ends here

// Add the GeoJSON data to the map
_dist_geojson = "DATA/INDIA_STATE.json";
var geojson = new L.GeoJSON.AJAX(_dist_geojson, {
    style: function(feature) {
        return {
            color: 'black',
            fillColor: 'transparent',
            opacity: 0.5,
            fillOpacity: 0.0,
            weight: 2
        };
    }
});

geojson.on('data:loaded', function() {
    geojson.addTo(map);
});
//

//
// const Stadia_Outdoors = L.tileLayer('https://tiles.stadiamaps.com/tiles/outdoors/{z}/{x}/{y}{r}.{ext}', {
//     minZoom: 0,
//     maxZoom: 20,
//     attribution: '&copy; <a href="https://www.stadiamaps.com/" target="_blank">Stadia Maps</a> &copy; <a href="https://openmaptiles.org/" target="_blank">OpenMapTiles</a> &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
//     ext: 'png'
// });

//
const OpenStreetMap = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
});
// OpenStreetMap.addTo(map);

const streets = L.tileLayer(
    'https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}', {
        maxZoom: 32,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
    }
);
streets.addTo(map);

const imagery = L.tileLayer(
    'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
        maxZoom: 29,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
    }
);
// imagery.addTo(map);

const Stadia_AlidadeSmoothDark = L.tileLayer(
    'https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.png', {
        minZoom: 0,
        maxZoom: 20,
        attribution: '&copy; <a href="https://www.stadiamaps.com/" target="_blank">Stadia Maps</a> &copy; <a href="https://openmaptiles.org/" target="_blank">OpenMapTiles</a> &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    }
);
// Stadia_AlidadeSmoothDark.addTo(map);

const darkGreyCanvas = L.tileLayer(
    'https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/{z}/{y}/{x}', {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
    }
);
// darkGreyCanvas.addTo(map);





//WMS layers  dummy data for testing start
//synop
const syn00utc_tem = L.tileLayer.wms("http://webgis.imd.gov.in:8080/geoserver/IMD_Data/wms", {
    layers: 'IMD_Data:HW_Annual_Days',
    format: 'image/png',
    transparent: true,
    version: '1.1.0',
    attribution: "HW_Annual_Days",
    layerName: "syn00utc_tem"
});

const syn00utc_rain = L.tileLayer.wms("http://103.215.208.132:8080/geoserver/IMD_Data/wms", {
    layers: 'IMD_Data:Rainfall_Day1_Mask',
    format: 'image/png',
    transparent: true,
    version: '1.1.0',
    attribution: "Rainfall_Day1_Mask",
    crs: L.CRS.EPSG4326,
    layerName: "syn00utc_rain"
});

const syn03utc_rain = L.tileLayer.wms("http://103.215.208.132:8080/geoserver/IMD_Data/wms", {
    layers: 'IMD_Data:Rainfall_Day2_Mask',
    format: 'image/png',
    transparent: true,
    version: '1.1.0',
    attribution: "Rainfall_Day2_Mask",
    crs: L.CRS.EPSG4326,
    layerName: "syn03utc_rain"
});


const syn06utc_rain = L.tileLayer.wms("http://103.215.208.132:8080/geoserver/IMD_Data/wms", {
    layers: 'IMD_Data:Rainfall_Day3_Mask',
    format: 'image/png',
    transparent: true,
    version: '1.1.0',
    attribution: "Rainfall_Day3_Mask",
    crs: L.CRS.EPSG4326,
    layerName: "syn06utc_rain"
});

const syn09utc_rain = L.tileLayer.wms("http://103.215.208.132:8080/geoserver/IMD_Data/wms", {
    layers: 'IMD_Data:Rainfall_Day4_Mask',
    format: 'image/png',
    transparent: true,
    version: '1.1.0',
    attribution: "Rainfall_Day4_Mask",
    crs: L.CRS.EPSG4326,
    layerName: "syn09utc_rain"
});

const syn12utc_rain = L.tileLayer.wms("http://103.215.208.132:8080/geoserver/IMD_Data/wms", {
    layers: 'IMD_Data:Rainfall_Day5_Mask',
    format: 'image/png',
    transparent: true,
    version: '1.1.0',
    attribution: "Rainfall_Day5_Mask",
    crs: L.CRS.EPSG4326,
    layerName: "syn12utc_rain"
});


const syn15utc_rain = L.tileLayer.wms("http://103.215.208.132:8080/geoserver/IMD_Data/wms", {
    layers: 'IMD_Data:Rainfall_Day6_Mask',
    format: 'image/png',
    transparent: true,
    version: '1.1.0',
    attribution: "Rainfall_Day6_Mask",
    crs: L.CRS.EPSG4326,
    layerName: "syn15utc_rain"
});

const syn18utc_rain = L.tileLayer.wms("http://103.215.208.132:8080/geoserver/IMD_Data/wms", {
    layers: 'IMD_Data:Rainfall_Day7_Mask',
    format: 'image/png',
    transparent: true,
    version: '1.1.0',
    attribution: "Rainfall_Day7_Mask",
    crs: L.CRS.EPSG4326,
    layerName: "syn18utc_rain"
});

const syn21utc_rain = L.tileLayer.wms("http://103.215.208.132:8080/geoserver/IMD_Data/wms", {
    layers: 'IMD_Data:Rainfall_Day1_Mask',
    format: 'image/png',
    transparent: true,
    version: '1.1.0',
    attribution: "Rainfall_Day1_Mask",
    crs: L.CRS.EPSG4326,
    layerName: "syn21utc_rain"
});

//metar
// const met00utc_tem = L.tileLayer.wms("http://webgis.imd.gov.in:8080/geoserver/IMD_Data/wms", {
//     layers: 'IMD_Data:HW_Annual_Days',
//     format: 'image/png',
//     transparent: true,
//     version: '1.1.0',
//     attribution: "HW_Annual_Days",
//     layerName: "met00utc_tem"
// });

const met00utc_tem = L.tileLayer.wms("http://webgis.imd.gov.in:8080/geoserver/IMD_Data/wms", {
    layers: 'IMD_Data:HW_Annual_Days',
    format: 'image/png',
    transparent: true,
    version: '1.1.0',
    attribution: "HW_Annual_Days",
    layerName: "met00utc_tem"
});


//medium
const med_gfs1 = L.tileLayer.wms("http://webgis.imd.gov.in:8080/geoserver/IMD_Data/wms", {
    layers: 'IMD_Data:Rainfall_C7',
    format: 'image/png',
    transparent: true,
    version: '1.1.0',
    attribution: "Rainfall_C7",
    layerName: "med_gfs1"
});

const med_ncum1 = L.tileLayer.wms("http://webgis.imd.gov.in:8080/geoserver/IMD_Data/wms", {
    layers: 'IMD_Data:Rainfall_Day7_Mask',
    format: 'image/png',
    transparent: true,
    version: '1.1.0',
    attribution: "Rainfall_Day7_Mask",
    crs: L.CRS.EPSG4326,
    layerName: "med_ncum1"
});


//satellite



//radar
const rad_ref = L.tileLayer.wms("http://103.215.208.107:8585/geoserver/cite/wms", {
    layers: 'cite:LLWS_12hr_fcst_FL',
    format: 'image/png',
    transparent: true,
    version: '1.1.0',
    attribution: "LLWS_12hr_fcst_FL",
    layerName: "rad_ref"
});



//sounding



//exposure
const exp_oil = L.tileLayer.wms("http://webgis.imd.gov.in:8080/geoserver/IMD_Data/wms", {
    layers: 'IMD_Data:MAJOR_TOWNS',
    format: 'image/png',
    transparent: true,
    version: '1.1.0',
    attribution: "MAJOR_TOWNS",
    layerName: "exp_oil"
});

//ship and buoy
const ship_00utc = L.tileLayer.wms("http://103.215.208.107:8585/geoserver/cite/wms", {
    layers: 'cite:awssample',
    format: 'image/png',
    transparent: true,
    version: '1.1.0',
    attribution: "awssample",
    layerName: "ship_00utc"
});
// WMS layers dummy data for testing end

//leaflet Fullscreen
const fullscreenControl = new L.Control.Fullscreen();

// Add the control to the map
fullscreenControl.addTo(map);

// Adjusting the height using inline style
const controlElement = document.querySelector(
    '.leaflet-control-fullscreen-button'); // Change the selector according to your control's class or structure
controlElement.style.width = '38px';




var baseMaps = [{
        name: "Streets",
        layer: streets
    },
    {
        name: "Open Street Map",
        layer: OpenStreetMap
    },
    {
        name: "Imagery",
        layer: imagery
    },
    {
        name: "Dark",
        layer: Stadia_AlidadeSmoothDark
    },
    {
        name: "Dark Gray Canvas",
        layer: darkGreyCanvas
    },
];

// styleEditor starts here
var styleEditor = L.control.styleEditor({
    position: "topleft",
    useGrouping: false,
    openOnLeafletDraw: true,
});
map.addControl(styleEditor);

var styleEditor = document.querySelector('.leaflet-control-styleeditor-interior');
if (styleEditor) {
    styleEditor.style.height = '38px';
    styleEditor.style.width = '38px';
}


// drawControl starts here
const drawnItems = new L.FeatureGroup();
map.addLayer(drawnItems);

const drawControl = new L.Control.Draw({
    edit: {
        featureGroup: drawnItems
    }
});
map.addControl(drawControl);


var polylineDrawTool = document.querySelector('.leaflet-draw-draw-polyline');
if (polylineDrawTool) {
    polylineDrawTool.style.height = '38px';
    polylineDrawTool.style.width = '38px';
}
var polylineDrawTool = document.querySelector('.leaflet-draw-draw-polygon');
if (polylineDrawTool) {
    polylineDrawTool.style.height = '38px';
    polylineDrawTool.style.width = '38px';
}
var polylineDrawTool = document.querySelector('.leaflet-draw-draw-rectangle');
if (polylineDrawTool) {
    polylineDrawTool.style.height = '38px';
    polylineDrawTool.style.width = '38px';
}
var polylineDrawTool = document.querySelector('.leaflet-draw-draw-circle');
if (polylineDrawTool) {
    polylineDrawTool.style.height = '38px';
    polylineDrawTool.style.width = '38px';
}
var polylineDrawTool = document.querySelector('.leaflet-draw-draw-marker');
if (polylineDrawTool) {
    polylineDrawTool.style.height = '38px';
    polylineDrawTool.style.width = '38px';
}

var polylineDrawTool = document.querySelector('.leaflet-draw-draw-circlemarker');
if (polylineDrawTool) {
    polylineDrawTool.style.height = '38px';
    polylineDrawTool.style.width = '38px';
}
var polylineDrawTool = document.querySelector('.leaflet-draw-edit-edit.leaflet-disabled');
if (polylineDrawTool) {
    polylineDrawTool.style.height = '38px';
    polylineDrawTool.style.width = '38px';
}
var polylineDrawTool = document.querySelector('.leaflet-draw-edit-remove.leaflet-disabled');
if (polylineDrawTool) {
    polylineDrawTool.style.height = '38px';
    polylineDrawTool.style.width = '38px';
}

// map.on('draw:created', function(e) {
//     console.log(e, "eeeeeeeeee");
//     const layer = e.layer;
//     console.log(layer, "layer");
//     drawnItems.addLayer(layer);
// });


// map.on('draw:created', function (e) {
//     const layer = e.layer;
//     const userText = prompt('Enter Name:');

//     if (userText !== null) {
//         const geoJSONData = layer.toGeoJSON();

//         // Replace "Feature" with the tool name
//         geoJSONData.geometry.type = getToolName(layer);

//         // Remove unnecessary properties from GeoJSON data
//         const simplifiedGeoJSON = {
//             type: geoJSONData.geometry.type,
//             coordinates: geoJSONData.geometry.coordinates
//         };

//         // Create popup content with user text and simplified GeoJSON
//         const popupContent = `<p>${userText}</p><p>${JSON.stringify(simplifiedGeoJSON)}</p>`;

//         layer.bindPopup(popupContent);

//         drawnItems.addLayer(layer);
//     }
// });

// Assuming you have included Leaflet and Leaflet.Draggable libraries

var markerDataArray = [];

// Leaflet draw event listener for drawing layers
map.on('draw:created', function(e) {
    const layer = e.layer;
    const userText = prompt('Enter Name:');

    if (userText !== null) {
        const geoJSONData = layer.toGeoJSON();
        const lat = geoJSONData.geometry.coordinates[1];
        const lon = geoJSONData.geometry.coordinates[0];
        const fontSize = '20px';
        const tooltipContent = `
            <div style="
                background-color: black; 
                color: white; 
                padding: 5px; 
                border: 1px solid white; 
                border-radius: 3px;
            ">
                <p style="font-size: ${fontSize}; margin: 0;">${userText}</p>
            </div>
        `;
        layer.bindTooltip(tooltipContent, {
            permanent: true,
            direction: 'top',
            opacity: 0.7
        });

        drawnItems.addLayer(layer);

        markerDataArray.push({
            latitude: lat,
            longitude: lon,
            tooltipText: userText
        });

        // console.log(markerDataArray);

        setTimeout(function() {
            layer.openTooltip();
            const tooltip = layer.getTooltip();
            const tooltipContainer = tooltip._container;

            L.DomUtil.addClass(tooltipContainer, 'leaflet-tooltip-draggable');
            L.DomEvent.on(tooltipContainer, 'mousedown', function() {
                L.DomUtil.addClass(tooltipContainer, 'leaflet-grab');
            });

            const tooltipDraggable = new L.Draggable(tooltipContainer, tooltipContainer);
            tooltipDraggable.enable();
        }, 0);
    }
});






// function getToolName(layer) {
//     if (layer instanceof L.Marker) {
//         return "Marker";
//     } else if (layer instanceof L.Circle) {
//         return "Circle";
//     } else if (layer instanceof L.Rectangle) {
//         return "Rectangle";
//     } else if (layer instanceof L.Polygon) {
//         return "Polygon";
//     } else if (layer instanceof L.Polyline) {
//         return "LineString";
//     } else if (layer instanceof L.CircleMarker) {
//         return "CircleMarker";
//     } else {
//         return "Unknown";
//     }
// }

// Selector for the geocoding control
var geocoderControl = document.querySelector('.leaflet-control-geocoder');
if (geocoderControl) {
    geocoderControl.style.height = '41px';
    geocoderControl.style.width = '41px';
}






var customButtonsContainer = L.DomUtil.create('div', 'leaflet-bar leaflet-control customClass');
map.getContainer().appendChild(customButtonsContainer);

// Add L.control.mousePosition to the container
L.control.mousePosition({
    position: 'bottomleft'
}).addTo(map);

// Create a custom control button for MacroButton
var PrintButton = L.Control.extend({
    options: {
        position: 'topleft'
    },
    onAdd: function() {
        var printbtn = L.DomUtil.create('span',
            'leaflet-bar leaflet-control leaflet-control-custom custom-btn2 printbutton');
        printbtn.innerHTML = 'Download PDF';

        // Set font size to 15px
        printbtn.style.fontSize = '15px';
        printbtn.style.fontFamily = 'Times New Roman';
        printbtn.style.top = '-431px';
        printbtn.style.left = '54px';

        // L.DomEvent.on(printbtn, 'click', function() {
        //     printFn();
        // });

        return printbtn;
    }
});

function printFn() {
    //console.log("print working");
};
//print ends here
new PrintButton().addTo(map);


// Create a custom control button for model popup
var LegendButton = L.Control.extend({
    options: {
        position: 'topleft'
    },
    onAdd: function() {
        // Create a button element
        var button = L.DomUtil.create('span',
            'leaflet-bar leaflet-control leaflet-control-custom custom-btn3');
        button.innerHTML = 'Legend';
        button.id = 'popup';

        // Set font size to 15px
        button.style.fontSize = '15px';
        button.style.fontFamily = 'Times New Roman';
        button.style.top = '-498px';
        button.style.left = '54px';

        // click event listener
        L.DomEvent.on(button, 'click', function() {
            // Your click event handling code goes here
        });

        return button;
    }
});
new LegendButton().addTo(map);



// custom control button for MacroButton
var MacroButton = L.Control.extend({
    options: {
        position: 'topleft'
    },
    onAdd: function() {
        var macbtn = L.DomUtil.create('span',
            'leaflet-bar leaflet-control leaflet-control-custom custom-btn2');
        macbtn.innerHTML = 'Macro';

        // Set font size to 15px
        macbtn.style.fontSize = '15px';
        macbtn.style.fontFamily = 'Times New Roman';
        macbtn.style.display = 'block';
        macbtn.style.top = '-563px';
        macbtn.style.left = '54px';
        // click event
        L.DomEvent.on(macbtn, 'click', function() {
            macToggleObservation();
            map.removeControl(panelLayers2);
            map.removeControl(panelLayers3);
            map.removeControl(panelLayers4);
            map.removeControl(panelLayers5);
            map.removeControl(panelLayers6);
            map.removeControl(panelLayers7);
            map.removeControl(panelLayers8);
            map.removeControl(panelLayers9);
            map.removeControl(panelLayers10);
            map.removeControl(panelLayers11);
            Model_Time.style.display = "none";
            // 
            toggleTimeDimensionControlObs_Mac();
        });

        return macbtn;
    }
});
new MacroButton().addTo(map);

//custom control button for ObservationButton
var ObservationButton = L.Control.extend({
    options: {
        position: 'topleft'
    },
    onAdd: function() {
        var obsbtn = L.DomUtil.create('span',
            'leaflet-bar leaflet-control leaflet-control-custom custom-btn');
        obsbtn.innerHTML = 'Observation';
        // Set font size to 15px
        obsbtn.style.fontSize = '15px';
        obsbtn.style.fontFamily = 'Times New Roman';
        obsbtn.style.top = '-629px';
        obsbtn.style.left = '50px';
        // click event
        L.DomEvent.on(obsbtn, 'click', function() {
            toggleObservation();
            // map.addControl(panelLayers);
            map.removeControl(panelLayers2);
            map.removeControl(panelLayers3);
            map.removeControl(panelLayers4);
            map.removeControl(panelLayers5);
            map.removeControl(panelLayers6);
            map.removeControl(panelLayers7);
            map.removeControl(panelLayers8);
            map.removeControl(panelLayers9);
            map.removeControl(panelLayers10);
            map.removeControl(panelLayers11);
            Model_Time.style.display = "none";
            // 
            toggleTimeDimensionControlObs_Mac();
        });

        return obsbtn;
    }
});
new ObservationButton().addTo(map);
// 

// MOdels time update BOX starts here
function timeUpdateBoxTog() {
    var modelBody = document.querySelector('.model-body_MM');
    var arrowIcon = document.querySelector('.fa-bounce');
    var modelMM = document.querySelector('.model_MM');

    if (modelBody && arrowIcon && modelMM) {
        if (modelBody.style.height === '50px' || modelBody.style.height === '') {
            modelBody.style.height = '300px';
            modelMM.style.top = '43%';

            arrowIcon.classList.remove('fa-arrow-up');
            arrowIcon.classList.add('fa-arrow-down');
            arrowIcon.style.color = '#f5f5f5';
            arrowIcon.style.cursor = 'pointer';
        } else {
            modelBody.style.height = '50px';
            modelMM.style.top = '56%';

            arrowIcon.classList.remove('fa-arrow-down');
            arrowIcon.classList.add('fa-arrow-up');
            arrowIcon.style.color = '#f5f5f5';
            arrowIcon.style.cursor = 'pointer';
        }
    }
}



















// sideByside splitFunctioin
let sideBySideControl = null;
let sideBySideVisible = false;
let activeLayers = 0;
// mywmsIITM mywmsNcum mywmsNowcast exp_oil ship_00utc med_gfs1 syn00utc_tem rad_ref

const layersArray = [
    [mywmsIITM, mywmsNcum],
    [mywmsIITM, mywmsNowcast],
    [mywmsNcum, mywmsNowcast],
    [mywmsIITM, exp_oil],
    [mywmsNcum, exp_oil],
    [mywmsNowcast, exp_oil],
    [mywmsIITM, ship_00utc],
    [mywmsNcum, ship_00utc],
    [mywmsNowcast, ship_00utc],
    [ship_00utc, exp_oil],
    [mywmsIITM, med_gfs1],
    [mywmsNcum, med_gfs1],
    [mywmsNowcast, med_gfs1],
    [exp_oil, med_gfs1],
    [ship_00utc, med_gfs1],
    [mywmsIITM, syn00utc_tem],
    [mywmsNcum, syn00utc_tem],
    [mywmsNowcast, syn00utc_tem],
    [exp_oil, syn00utc_tem],
    [ship_00utc, syn00utc_tem],
    [med_gfs1, syn00utc_tem],
    [mywmsIITM, rad_ref],
    [mywmsNcum, rad_ref],
    [mywmsNowcast, rad_ref],
    [exp_oil, rad_ref],
    [ship_00utc, rad_ref],
    [med_gfs1, rad_ref],
    [syn00utc_tem, rad_ref]
];

function createSideBySide(layer1, layer2) {
    const isActiveLayer1 = map.hasLayer(layer1);
    const isActiveLayer2 = map.hasLayer(layer2);

    if (isActiveLayer1 && isActiveLayer2) {
        sideBySideVisible = true;
        sideBySideControl = L.control.sideBySide(layer1, layer2).addTo(map);
    } else {
        console.log("nothing");
    }
}

function toggleSideBySide() {
    if (sideBySideVisible) {
        if (sideBySideControl !== null) {
            map.removeControl(sideBySideControl);
            sideBySideControl = null;
        }
        sideBySideVisible = false;
    } else {
        for (const layers of layersArray) {
            createSideBySide(...layers);
        }
    }
    updateActiveLayers();
}


function updateActiveLayers() {
    activeLayers = 0;
    allOverLayers.forEach(group => {
        group.layers.forEach(layer => {
            if (layer.active) {
                activeLayers++;
            }
        });
    });

    // Check if side-by-side is active and more than 2 layers are active
    console.log(sideBySideVisible, activeLayers);
    if (sideBySideVisible && activeLayers > 2) {
        alert("Only two layers can be active when side-by-side view is active please unselect the layer!");
        // Disable additional layers
        allOverLayers.forEach(group => {
            group.layers.forEach(layer => {
                console.log("side by side layer name", layer);
                if (layer.active && activeLayers > 2) {
                    layer.active = false;
                    activeLayers--;
                }
            });
        });
    } else {
        //alert("Side by side is working with 2 layers");
    }
}

// Create a container div for both controls
var controlsContainer = L.DomUtil.create('div', 'leaflet-bar leaflet-control');

const ToggleControl = L.Control.extend({
    onAdd: function(map) {
        // Extracting the hand symbol and curved arrow paths from the provided SVG
        const handArrowSVG = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
        handArrowSVG.setAttribute('xmlns', 'http://www.w3.org/2000/svg');
        handArrowSVG.setAttribute('viewBox', '0 0 24 24');
        handArrowSVG.setAttribute('width', '24');
        handArrowSVG.setAttribute('height', '24');

        // Creating and appending the hand symbol path to the new SVG
        const handPath = document.createElementNS('http://www.w3.org/2000/svg', 'path');
        handPath.setAttribute('d',
            'M20.13 3.87C18.69 2.17 15.6 1 12 1S5.31 2.17 3.87 3.87L2 2v5h5L4.93 4.93c1-1.29 3.7-2.43 7.07-2.43s6.07 1.14 7.07 2.43L17 7h5V2l-1.87 1.87z'
        );
        handPath.setAttribute('fill', 'currentColor'); // Change the fill color if needed
        handArrowSVG.appendChild(handPath);

        // Creating and appending the curved arrow path to the new SVG
        const arrowPath = document.createElementNS('http://www.w3.org/2000/svg', 'path');
        arrowPath.setAttribute('d',
            'm18.89 14.75-4.09-2.04c-.28-.14-.58-.21-.89-.21H13v-6c0-.83-.67-1.5-1.5-1.5S10 5.67 10 6.5v10.74l-3.25-.74c-.33-.07-.68.03-.92.28l-.83.84 4.54 4.79c.38.38 1.14.59 1.67.59h6.16c1 0 1.84-.73 1.98-1.72l.63-4.46c.12-.85-.32-1.68-1.09-2.07z'
        );
        arrowPath.setAttribute('fill', 'currentColor'); // Change the fill color if needed
        handArrowSVG.appendChild(arrowPath);

        // Creating and styling the toggle button
        const button = L.DomUtil.create('button', 'toggle-button');
        // button.textContent = 'side-by-side Layers';
        button.style.backgroundColor = 'white';
        button.style.border = '3px solid #c2c1ae';
        button.title = 'Split Screen';
        button.style.position = 'absolute';
        button.style.top = '536px';
        button.style.left = '1px';
        // Appending the hand symbol and curved arrow SVG to the toggle button
        button.appendChild(handArrowSVG);

        // Function to handle button click
        function handleButtonClick() {
            L.DomEvent.off(button, 'click', handleButtonClick);
        }

        L.DomEvent.on(button, 'click', handleButtonClick);

        button.onclick = function() {
            toggleSideBySide();
            // button.textContent = sideBySideVisible ? 'Hide' : 'Show';
            position: "bottomleft"
        };
        return button;
    },

    onRemove: function(map) {}
});

// (new ToggleControl()).addTo(map);

const toggleControl = new ToggleControl({
    position: 'topleft'
});
toggleControl.addTo(map);
//side-by-side ends here

//searchControl
L.Control.geocoder({
    position: "topleft",
    title: "Location Search"
}).addTo(map);
var geocoderControl = document.querySelector('.leaflet-control-geocoder');
if (geocoderControl) {
    geocoderControl.style.top = '48px';
}
// L.Control.geocoder({
//     position: "topleft",
// }).on('markgeocode', function(e) {
//     console.log(e.geocode);
// }).addTo(map);
document.querySelector('.leaflet-control-geocoder').title = 'Location Search';
//searchControl ends here

var controlsContainer = L.DomUtil.create('div', 'controls-container');





// customButtonsContainer.appendChild(new MacroButton().onAdd());
// customButtonsContainer.appendChild(new MacroButton().onAdd());
// customButtonsContainer.appendChild(new LegendButton().onAdd());
// customButtonsContainer.appendChild(new PrintButton().onAdd());
// customButtonsContainer.appendChild(new ToggleControl().onAdd());
// Add the container to the map
// ************


//
// Add a marker for Delhi
var delhiMarker = L.marker([28.6139, 77.2090]);
delhiMarker.bindPopup("<b>Delhi</b>").openPopup();

// Add a marker for Jaipur
var jaipurMarker = L.marker([26.9124, 75.7873]);
jaipurMarker.bindPopup("<b>Jaipur</b>").openPopup();

// Add a marker for bhopal
var bhopalMarker = L.marker([23.2599, 77.4126]);
bhopalMarker.bindPopup("<b>Bhopal</b>").openPopup();

// Add a marker for Lucknow
var lucknowMarker = L.marker([26.8467, 80.9462]);
lucknowMarker.bindPopup("<b>Lucknow</b>").openPopup();

// Add a marker for Patna
var patnaMarker = L.marker([25.5941, 85.1376]);
patnaMarker.bindPopup("<b>Patna</b>").openPopup();

// Add a marker for Pune
var PuneMarker = L.marker([18.5204, 73.8567]);
PuneMarker.bindPopup("<b>Pune</b>").openPopup();

// Add a marker for Mumbai
var MumbaiMarker = L.marker([19.0760, 72.8777]);
MumbaiMarker.bindPopup("<b>Mumbai</b>").openPopup();

// Add a marker for Ranchi
var RanchiMarker = L.marker([23.3441, 85.3096]);
RanchiMarker.bindPopup("<b>Ranchi</b>").openPopup();

// Add a marker for Surat
var SuratMarker = L.marker([21.1702, 72.8311]);
SuratMarker.bindPopup("<b>Surat</b>").openPopup();

// Add a marker for Jodhpur
var JodhpurMarker = L.marker([26.2389, 73.0243]);
JodhpurMarker.bindPopup("<b>Jodhpur</b>").openPopup();

// Add a marker for Kanpur
var KanpurMarker = L.marker([26.4499, 80.3319]);
KanpurMarker.bindPopup("<b>Kanpur</b>").openPopup();

// Add a marker for Meerut
var MeerutMarker = L.marker([28.6139, 77.2090]);
MeerutMarker.bindPopup("<b>Meerut</b>").openPopup();

// Add a marker for Solapur
var SolapurMarker = L.marker([17.6599, 75.9064]);
SolapurMarker.bindPopup("<b>Solapur</b>").openPopup();

// Add a marker for Vijayapura
var VijayapuraMarker = L.marker([16.8302, 75.7100]);
VijayapuraMarker.bindPopup("<b>Vijayapura</b>").openPopup();

// Add a marker for Bidar
var BidarMarker = L.marker([17.9136, 77.5305]);
BidarMarker.bindPopup("<b>Bidar</b>").openPopup();

// Add a marker for Jeypur
var JeypurMarker = L.marker([18.8565, 82.5644]);
JeypurMarker.bindPopup("<b>Jeypur</b>").openPopup();

// Add a marker for Rayagada
var RayagadaMarker = L.marker([19.1662, 83.4166]);
RayagadaMarker.bindPopup("<b>Rayagada</b>").openPopup();

// Add a marker for Bobbili
var BobbiliMarker = L.marker([18.5697, 83.3666]);
BobbiliMarker.bindPopup("<b>Bobbili</b>").openPopup();

// // Add a marker for Bobbili
var ggg = L.marker([18.5696, 83.3668]);
ggg.bindPopup("<b>ggg</b>").openPopup();

// Add a marker for Bobbili
var HHHHHH = L.marker([18.5611, 83.3615]);
HHHHHH.bindPopup("<b>gggggggg</b>").openPopup();

//
var X1 = L.marker([18.5612, 83.3612]);
X1.bindPopup("<b>X1</b>").openPopup();

//
var X2 = L.marker([18.5613, 83.3613]);
X2.bindPopup("<b>X2</b>").openPopup();

//
var X3 = L.marker([18.5614, 83.3614]);
X3.bindPopup("<b>X3</b>").openPopup();

//
var X4 = L.marker([18.5615, 83.3615]);
X4.bindPopup("<b>X4</b>").openPopup();

//
var X5 = L.marker([18.5616, 83.3616]);
X5.bindPopup("<b>X5</b>").openPopup();

//
var X6 = L.marker([18.5617, 83.3617]);
X6.bindPopup("<b>X6</b>").openPopup();

//
var X7 = L.marker([18.5618, 83.3618]);
X7.bindPopup("<b>X7</b>").openPopup();

//
var X8 = L.marker([18.5619, 83.3619]);
X8.bindPopup("<b>X8</b>").openPopup();

//
var X9 = L.marker([18.5620, 83.3620]);
X9.bindPopup("<b>X9</b>").openPopup();

//
var X10 = L.marker([18.5621, 83.3621]);
X10.bindPopup("<b>X10</b>").openPopup();

//
var X11 = L.marker([18.5622, 83.3622]);
X11.bindPopup("<b>X11</b>").openPopup();

//
var X11 = L.marker([18.5623, 83.3623]);
X11.bindPopup("<b>X11</b>").openPopup();

//
var X12 = L.marker([18.5624, 83.3624]);
X12.bindPopup("<b>X12</b>").openPopup();

//
var X13 = L.marker([18.5625, 83.3625]);
X13.bindPopup("<b>X13</b>").openPopup();

//
var X14 = L.marker([18.5626, 83.3626]);
X14.bindPopup("<b>X14</b>").openPopup();

//
var X15 = L.marker([18.5627, 83.3627]);
X15.bindPopup("<b>X15</b>").openPopup();

//
var X16 = L.marker([18.5628, 83.3628]);
X16.bindPopup("<b>X16</b>").openPopup();

//
var X17 = L.marker([18.5629, 83.3629]);
X17.bindPopup("<b>X17</b>").openPopup();

//
var X18 = L.marker([18.5630, 83.3630]);
X18.bindPopup("<b>X18</b>").openPopup();

//
var X19 = L.marker([18.5631, 83.3631]);
X19.bindPopup("<b>X19</b>").openPopup();

//
var X20 = L.marker([18.5632, 83.3632]);
X20.bindPopup("<b>X20</b>").openPopup();

//
var X21 = L.marker([18.5633, 83.3633]);
X21.bindPopup("<b>X21</b>").openPopup();

//
var X22 = L.marker([18.5634, 83.3634]);
X22.bindPopup("<b>X22</b>").openPopup();

//
var X23 = L.marker([18.5635, 83.3635]);
X23.bindPopup("<b>X23</b>").openPopup();

//
var X24 = L.marker([18.5636, 83.3636]);
X24.bindPopup("<b>X24</b>").openPopup();

//
var X25 = L.marker([18.5637, 83.3637]);
X25.bindPopup("<b>X25</b>").openPopup();

//
var X26 = L.marker([18.5638, 83.3638]);
X26.bindPopup("<b>X26</b>").openPopup();

//
var X27 = L.marker([18.5639, 83.3639]);
X27.bindPopup("<b>X27</b>").openPopup();

//
var X28 = L.marker([18.5640, 83.3640]);
X28.bindPopup("<b>X28</b>").openPopup();

//
var X29 = L.marker([18.5641, 83.3641]);
X29.bindPopup("<b>X29</b>").openPopup();

//
var X30 = L.marker([18.5642, 83.3642]);
X30.bindPopup("<b>X30</b>").openPopup();

//
var X31 = L.marker([18.5643, 83.3643]);
X31.bindPopup("<b>X31</b>").openPopup();

//
var X32 = L.marker([18.5644, 83.3644]);
X32.bindPopup("<b>X32</b>").openPopup();

//
var X33 = L.marker([18.5645, 83.3645]);
X33.bindPopup("<b>X33</b>").openPopup();

//
var X34 = L.marker([18.5646, 83.3646]);
X34.bindPopup("<b>X34</b>").openPopup();

//
var X35 = L.marker([18.5647, 83.3647]);
X35.bindPopup("<b>X35</b>").openPopup();

//
var X36 = L.marker([18.5648, 83.3648]);
X36.bindPopup("<b>X36</b>").openPopup();

//
var X37 = L.marker([18.5649, 83.3649]);
X37.bindPopup("<b>X37</b>").openPopup();

//
var X38 = L.marker([18.5650, 83.3650]);
X38.bindPopup("<b>X38</b>").openPopup();

var X39 = L.marker([18.5651, 83.3652]);
X39.bindPopup("<b>X39</b>").openPopup();

var X40 = L.marker([18.5652, 83.3652]);
X40.bindPopup("<b>X40</b>").openPopup();

var X41 = L.marker([18.5653, 83.3653]);
X41.bindPopup("<b>X41</b>").openPopup();

var X42 = L.marker([18.5654, 83.3654]);
X42.bindPopup("<b>X42</b>").openPopup();

var X43 = L.marker([18.5655, 83.3655]);
X43.bindPopup("<b>X43</b>").openPopup();

var X44 = L.marker([18.5656, 83.3656]);
X44.bindPopup("<b>X44</b>").openPopup();

var Airport = L.marker([18.7657, 83.7657]);
Airport.bindPopup("<b>Airport</b>").openPopup();

var X46 = L.marker([18.5658, 83.3658]);
X46.bindPopup("<b>X46</b>").openPopup();

var X47 = L.marker([18.5659, 83.3659]);
X47.bindPopup("<b>X47</b>").openPopup();

var X48 = L.marker([18.5660, 83.3660]);
X48.bindPopup("<b>X48</b>").openPopup();

var X49 = L.marker([18.5661, 83.3661]);
X49.bindPopup("<b>X49</b>").openPopup();

var X50 = L.marker([18.5662, 83.3662]);
X50.bindPopup("<b>X50</b>").openPopup();

var X51 = L.marker([18.5663, 83.3663]);
X51.bindPopup("<b>X51</b>").openPopup();

var X52 = L.marker([18.5664, 83.3664]);
X52.bindPopup("<b>X52</b>").openPopup();

var X53 = L.marker([18.5665, 83.3665]);
X53.bindPopup("<b>X53</b>").openPopup();

var X54 = L.marker([18.5666, 83.3666]);
X54.bindPopup("<b>X54</b>").openPopup();

var X55 = L.marker([18.5667, 83.3667]);
X55.bindPopup("<b>X55</b>").openPopup();

var X56 = L.marker([18.5668, 83.3668]);
X56.bindPopup("<b>X56</b>").openPopup();

var X57 = L.marker([18.5669, 83.3669]);
X57.bindPopup("<b>X57</b>").openPopup();

var X58 = L.marker([18.5670, 83.3670]);
X58.bindPopup("<b>X58</b>").openPopup();

var X59 = L.marker([18.5671, 83.3671]);
X59.bindPopup("<b>X59</b>").openPopup();

var X60 = L.marker([18.5672, 83.3672]);
X60.bindPopup("<b>X60</b>").openPopup();

var X61 = L.marker([18.5673, 83.3673]);
X61.bindPopup("<b>X61</b>").openPopup();

var X62 = L.marker([18.5674, 83.3674]);
X62.bindPopup("<b>X62</b>").openPopup();

var X63 = L.marker([18.5675, 83.3675]);
X63.bindPopup("<b>X63</b>").openPopup();

var X64 = L.marker([18.5676, 83.3676]);
X64.bindPopup("<b>X64</b>").openPopup();

var X65 = L.marker([18.5677, 83.3677]);
X65.bindPopup("<b>X65</b>").openPopup();

var X66 = L.marker([18.5678, 83.3678]);
X66.bindPopup("<b>X66</b>").openPopup();

var X67 = L.marker([18.5679, 83.3679]);
X67.bindPopup("<b>X67</b>").openPopup();

var X67 = L.marker([18.5680, 83.3680]);
X67.bindPopup("<b>X67</b>").openPopup();

var X68 = L.marker([18.5681, 83.3681]);
X68.bindPopup("<b>X68</b>").openPopup();

var X69 = L.marker([18.5682, 83.3682]);
X69.bindPopup("<b>X69</b>").openPopup();

var X70 = L.marker([18.5683, 83.3683]);
X70.bindPopup("<b>X70</b>").openPopup();

var X71 = L.marker([18.5685, 83.3685]);
X71.bindPopup("<b>X71</b>").openPopup();

var X72 = L.marker([18.5686, 83.3686]);
X72.bindPopup("<b>X72</b>").openPopup();

var X73 = L.marker([18.5687, 83.3687]);
X73.bindPopup("<b>X73</b>").openPopup();

var X74 = L.marker([18.5688, 83.3688]);
X74.bindPopup("<b>X74</b>").openPopup();

var X75 = L.marker([18.5689, 83.3689]);
X75.bindPopup("<b>X75</b>").openPopup();

var X76 = L.marker([18.5712, 83.3712]);
X76.bindPopup("<b>X76</b>").openPopup();

var X77 = L.marker([18.5713, 83.3713]);
X77.bindPopup("<b>X77</b>").openPopup();

var X78 = L.marker([18.5714, 83.3714]);
X78.bindPopup("<b>X78</b>").openPopup();

var X79 = L.marker([18.5690, 83.3690]);
X79.bindPopup("<b>X79</b>").openPopup();

var X80 = L.marker([18.5691, 83.3691]);
X80.bindPopup("<b>X80</b>").openPopup();

var X81 = L.marker([18.5692, 83.3692]);
X81.bindPopup("<b>X81</b>").openPopup();

var X82 = L.marker([18.5693, 83.3693]);
X82.bindPopup("<b>X82</b>").openPopup();

var X83 = L.marker([18.5694, 83.3694]);
X83.bindPopup("<b>X83</b>").openPopup();

var X84 = L.marker([18.5695, 83.3695]);
X84.bindPopup("<b>X84</b>").openPopup();

var X85 = L.marker([18.5696, 83.3696]);
X85.bindPopup("<b>X85</b>").openPopup();

var X86 = L.marker([18.5697, 83.3697]);
X86.bindPopup("<b>X86</b>").openPopup();

var X87 = L.marker([18.5698, 83.3698]);
X87.bindPopup("<b>X87</b>").openPopup();

var X88 = L.marker([18.5699, 83.3699]);
X88.bindPopup("<b>X88</b>").openPopup();

var X89 = L.marker([18.5700, 83.3700]);
X89.bindPopup("<b>X89</b>").openPopup();

var X90 = L.marker([18.5701, 83.3701]);
X90.bindPopup("<b>X90</b>").openPopup();

var X91 = L.marker([18.5702, 83.3702]);
X91.bindPopup("<b>X91</b>").openPopup();

var X92 = L.marker([18.5703, 83.3703]);
X92.bindPopup("<b>X92</b>").openPopup();

var X93 = L.marker([18.5704, 83.3704]);
X93.bindPopup("<b>X93</b>").openPopup();

var X94 = L.marker([18.5705, 83.3705]);
X94.bindPopup("<b>X94</b>").openPopup();

var X95 = L.marker([18.5706, 83.3706]);
X95.bindPopup("<b>X95</b>").openPopup();

var X96 = L.marker([18.5707, 83.3707]);
X96.bindPopup("<b>X96</b>").openPopup();

var X97 = L.marker([18.5708, 83.3708]);
X97.bindPopup("<b>X97</b>").openPopup();

var X98 = L.marker([18.5709, 83.3709]);
X98.bindPopup("<b>X98</b>").openPopup();

var X99 = L.marker([18.5710, 83.3710]);
X99.bindPopup("<b>X99</b>").openPopup();

var X100 = L.marker([18.5711, 83.3711]);
X100.bindPopup("<b>X100</b>").openPopup();

var X101 = L.marker([18.5715, 83.3715]);
X101.bindPopup("<b>X101</b>").openPopup();

var X102 = L.marker([18.5716, 83.3716]);
X102.bindPopup("<b>X102</b>").openPopup();

var X103 = L.marker([18.5717, 83.3717]);
X103.bindPopup("<b>X103</b>").openPopup();

var X104 = L.marker([18.5718, 83.3718]);
X104.bindPopup("<b>X104</b>").openPopup();

var X105 = L.marker([18.5719, 83.3719]);
X105.bindPopup("<b>X105</b>").openPopup();

var X106 = L.marker([18.5720, 83.3720]);
X106.bindPopup("<b>X106</b>").openPopup();

var X107 = L.marker([18.5721, 83.3721]);
X107.bindPopup("<b>X107</b>").openPopup();

var X108 = L.marker([18.5722, 83.3722]);
X108.bindPopup("<b>X108</b>").openPopup();

var X109 = L.marker([18.5723, 83.3723]);
X109.bindPopup("<b>X109</b>").openPopup();

var X110 = L.marker([18.5724, 83.3724]);
X110.bindPopup("<b>X110</b>").openPopup();

var X111 = L.marker([18.5725, 83.3725]);
X111.bindPopup("<b>X111</b>").openPopup();

var X112 = L.marker([18.5726, 83.3726]);
X112.bindPopup("<b>X112</b>").openPopup();

var X113 = L.marker([18.5727, 83.3727]);
X113.bindPopup("<b>X113</b>").openPopup();

var X114 = L.marker([18.5728, 83.3728]);
X114.bindPopup("<b>X114</b>").openPopup();

var X115 = L.marker([18.5729, 83.3729]);
X115.bindPopup("<b>X115</b>").openPopup();

var X116 = L.marker([18.5730, 83.3730]);
X116.bindPopup("<b>X116</b>").openPopup();

var X117 = L.marker([18.5731, 83.3731]);
X117.bindPopup("<b>X117</b>").openPopup();

var X118 = L.marker([18.5732, 83.3732]);
X118.bindPopup("<b>X118</b>").openPopup();

var X119 = L.marker([18.5733, 83.3733]);
X119.bindPopup("<b>X118</b>").openPopup();

var X120 = L.marker([18.5734, 83.3734]);
X120.bindPopup("<b>X120</b>").openPopup();

var X121 = L.marker([18.5735, 83.3735]);
X121.bindPopup("<b>X121</b>").openPopup();

var X122 = L.marker([18.5736, 83.3736]);
X122.bindPopup("<b>X122</b>").openPopup();

var X123 = L.marker([18.5737, 83.3737]);
X123.bindPopup("<b>X123</b>").openPopup();

var X124 = L.marker([18.5738, 83.3738]);
X124.bindPopup("<b>X124</b>").openPopup();

var X125 = L.marker([18.5739, 83.3739]);
X125.bindPopup("<b>X125</b>").openPopup();

var X126 = L.marker([18.5740, 83.3740]);
X126.bindPopup("<b>X126</b>").openPopup();

var X127 = L.marker([18.5741, 83.3741]);
X127.bindPopup("<b>X127</b>").openPopup();

var X128 = L.marker([18.5742, 83.3742]);
X128.bindPopup("<b>X128</b>").openPopup();

var X129 = L.marker([18.5743, 83.3743]);
X129.bindPopup("<b>X129</b>").openPopup();

var X130 = L.marker([18.5744, 83.3744]);
X130.bindPopup("<b>X130</b>").openPopup();

var X131 = L.marker([18.5745, 83.3745]);
X131.bindPopup("<b>X131</b>").openPopup();

var X132 = L.marker([18.5746, 83.3746]);
X132.bindPopup("<b>X132</b>").openPopup();

var X133 = L.marker([18.5747, 83.3747]);
X133.bindPopup("<b>X133</b>").openPopup();

var X134 = L.marker([18.5748, 83.3748]);
X134.bindPopup("<b>X134</b>").openPopup();

var X135 = L.marker([18.5749, 83.3749]);
X135.bindPopup("<b>X135</b>").openPopup();

var X136 = L.marker([18.5750, 83.3750]);
X136.bindPopup("<b>X136</b>").openPopup();

var X137 = L.marker([18.5751, 83.3751]);
X137.bindPopup("<b>X137</b>").openPopup();

var X138 = L.marker([18.5752, 83.3752]);
X138.bindPopup("<b>X138</b>").openPopup();

var X139 = L.marker([18.5753, 83.3753]);
X139.bindPopup("<b>X139</b>").openPopup();

var X140 = L.marker([18.5754, 83.3754]);
X140.bindPopup("<b>X140</b>").openPopup();

var X141 = L.marker([18.5755, 83.3755]);
X141.bindPopup("<b>X141</b>").openPopup();

var X142 = L.marker([18.5756, 83.3756]);
X142.bindPopup("<b>X142</b>").openPopup();

var X143 = L.marker([18.5757, 83.3757]);
X143.bindPopup("<b>X143</b>").openPopup();

var X144 = L.marker([18.5758, 83.3758]);
X144.bindPopup("<b>X144</b>").openPopup();

var X145 = L.marker([18.5759, 83.3759]);
X145.bindPopup("<b>X145</b>").openPopup();

var X146 = L.marker([18.5760, 83.3760]);
X146.bindPopup("<b>X146</b>").openPopup();

var X147 = L.marker([18.5761, 83.3761]);
X147.bindPopup("<b>X147</b>").openPopup();

var X148 = L.marker([18.5762, 83.3762]);
X148.bindPopup("<b>X148</b>").openPopup();

var X149 = L.marker([18.5763, 83.3763]);
X149.bindPopup("<b>X149</b>").openPopup();

var X150 = L.marker([18.5764, 83.3764]);
X150.bindPopup("<b>X150</b>").openPopup();

var X151 = L.marker([18.5765, 83.3765]);
X151.bindPopup("<b>X151</b>").openPopup();

var X152 = L.marker([18.5766, 83.3766]);
X152.bindPopup("<b>X152</b>").openPopup();

var X153 = L.marker([18.5767, 83.3767]);
X153.bindPopup("<b>X153</b>").openPopup();

var X154 = L.marker([18.5768, 83.3768]);
X154.bindPopup("<b>X154</b>").openPopup();

var X155 = L.marker([18.5769, 83.3769]);
X155.bindPopup("<b>X155</b>").openPopup();

var X156 = L.marker([18.5770, 83.3770]);
X156.bindPopup("<b>X156</b>").openPopup();

var X157 = L.marker([18.5771, 83.3771]);
X157.bindPopup("<b>X157</b>").openPopup();

var X158 = L.marker([18.5772, 83.3772]);
X158.bindPopup("<b>X158</b>").openPopup();

var X159 = L.marker([18.5773, 83.3773]);
X159.bindPopup("<b>X159</b>").openPopup();

var X160 = L.marker([18.5774, 83.3774]);
X160.bindPopup("<b>X160</b>").openPopup();

var X161 = L.marker([18.5775, 83.3775]);
X161.bindPopup("<b>X161</b>").openPopup();

var X162 = L.marker([18.5776, 83.3776]);
X162.bindPopup("<b>X162</b>").openPopup();

var X163 = L.marker([18.5777, 83.3777]);
X163.bindPopup("<b>X163</b>").openPopup();

var X164 = L.marker([18.5778, 83.3778]);
X164.bindPopup("<b>X164</b>").openPopup();

var X165 = L.marker([18.5779, 83.3779]);
X165.bindPopup("<b>X165</b>").openPopup();

var X166 = L.marker([18.5780, 83.3780]);
X166.bindPopup("<b>X166</b>").openPopup();

var X167 = L.marker([18.5825, 83.845]);
X167.bindPopup("<b>X167</b>").openPopup();

var Airport = L.marker([18.9790, 83.3790]);
Airport.bindPopup("<b>Airport</b>").openPopup();

var X169 = L.marker([18.9860, 83.9900]);
X169.bindPopup("<b>X169</b>").openPopup();

var X170 = L.marker([18.8895, 83.8955]);
X170.bindPopup("<b>X170</b>").openPopup();

var X171 = L.marker([18.7930, 83.7010]);
X171.bindPopup("<b>X171</b>").openPopup();

var X172 = L.marker([18.6965, 83.6065]);
X172.bindPopup("<b>X172</b>").openPopup();

var X173 = L.marker([18.5980, 83.5070]);
X173.bindPopup("<b>X173</b>").openPopup();

var X174 = L.marker([18.4990, 83.4090]);
X174.bindPopup("<b>X174</b>").openPopup();

var X175 = L.marker([18.3100, 83.3100]);
X175.bindPopup("<b>X175</b>").openPopup();

var X176 = L.marker([18.2110, 83.3110]);
X176.bindPopup("<b>X176</b>").openPopup();

var X177 = L.marker([18.1120, 83.2120]);
X177.bindPopup("<b>X177</b>").openPopup();

var X178 = L.marker([18.0130, 83.1130]);
X178.bindPopup("<b>X178</b>").openPopup();

var X179 = L.marker([18.5140, 83.4140]);
X179.bindPopup("<b>X179</b>").openPopup();

var X180 = L.marker([18.5150, 83.4150]);
X180.bindPopup("<b>X180</b>").openPopup();

var X181 = L.marker([18.5160, 83.4160]);
X181.bindPopup("<b>X181</b>").openPopup();

var X182 = L.marker([18.5170, 83.4170]);
X182.bindPopup("<b>X182</b>").openPopup();

var X183 = L.marker([18.5180, 83.4180]);
X183.bindPopup("<b>X183</b>").openPopup();

var X184 = L.marker([18.5190, 83.4190]);
X184.bindPopup("<b>X184</b>").openPopup();

var X185 = L.marker([18.5200, 83.4200]);
X185.bindPopup("<b>X185</b>").openPopup();

var X186 = L.marker([18.5210, 83.4210]);
X186.bindPopup("<b>X186</b>").openPopup();

var X187 = L.marker([18.5220, 83.4220]);
X187.bindPopup("<b>X187</b>").openPopup();

var X188 = L.marker([18.5230, 83.4230]);
X188.bindPopup("<b>X188</b>").openPopup();

var X189 = L.marker([18.5240, 83.4240]);
X189.bindPopup("<b>X189</b>").openPopup();

var X190 = L.marker([18.5250, 83.4250]);
X190.bindPopup("<b>X190</b>").openPopup();

var X191 = L.marker([18.5260, 83.4260]);
X191.bindPopup("<b>X191</b>").openPopup();

var X192 = L.marker([18.5170, 83.4170]);
X192.bindPopup("<b>X192</b>").openPopup();

var X193 = L.marker([18.5180, 83.4180]);
X193.bindPopup("<b>X193</b>").openPopup();

var X194 = L.marker([18.5190, 83.4190]);
X194.bindPopup("<b>X194</b>").openPopup();

var X195 = L.marker([18.5200, 83.4200]);
X195.bindPopup("<b>X195</b>").openPopup();

var X196 = L.marker([18.5210, 83.4210]);
X196.bindPopup("<b>X196</b>").openPopup();

var X197 = L.marker([18.5220, 83.4220]);
X197.bindPopup("<b>X197</b>").openPopup();

var X198 = L.marker([18.5230, 83.4230]);
X198.bindPopup("<b>X198</b>").openPopup();

var X199 = L.marker([18.5240, 83.4240]);
X199.bindPopup("<b>X199</b>").openPopup();

var X200 = L.marker([18.5300, 83.4300]);
X200.bindPopup("<b>X200</b>").openPopup();

var X201 = L.marker([18.5310, 83.4310]);
X201.bindPopup("<b>X201</b>").openPopup();

var X202 = L.marker([18.5320, 83.4320]);
X202.bindPopup("<b>X202</b>").openPopup();

var X203 = L.marker([18.5330, 83.4330]);
X203.bindPopup("<b>X203</b>").openPopup();

var X204 = L.marker([18.5340, 83.4340]);
X204.bindPopup("<b>X204</b>").openPopup();

var X205 = L.marker([18.5350, 83.4350]);
X205.bindPopup("<b>X205</b>").openPopup();

var X206 = L.marker([18.5360, 83.4360]);
X206.bindPopup("<b>X206</b>").openPopup();

var X207 = L.marker([18.5370, 83.4370]);
X207.bindPopup("<b>X207</b>").openPopup();

var X208 = L.marker([18.5380, 83.4380]);
X208.bindPopup("<b>X208</b>").openPopup();

var X209 = L.marker([18.5390, 83.4390]);
X209.bindPopup("<b>X209</b>").openPopup();

var X210 = L.marker([18.5400, 83.4400]);
X210.bindPopup("<b>X210</b>").openPopup();

var X211 = L.marker([18.5410, 83.4410]);
X211.bindPopup("<b>X211</b>").openPopup();

var X212 = L.marker([18.5420, 83.4420]);
X212.bindPopup("<b>X212</b>").openPopup();

var X213 = L.marker([18.5430, 83.4430]);
X213.bindPopup("<b>X213</b>").openPopup();

var X214 = L.marker([18.5440, 83.4440]);
X214.bindPopup("<b>X214</b>").openPopup();

var X215 = L.marker([18.5450, 83.4450]);
X215.bindPopup("<b>X215</b>").openPopup();

var X216 = L.marker([18.5460, 83.4460]);
X216.bindPopup("<b>X216</b>").openPopup();

var X217 = L.marker([18.5470, 83.4470]);
X217.bindPopup("<b>X217</b>").openPopup();

var X218 = L.marker([18.5480, 83.4480]);
X218.bindPopup("<b>X218</b>").openPopup();

var X219 = L.marker([18.5490, 83.4490]);
X219.bindPopup("<b>X219</b>").openPopup();

var X220 = L.marker([18.5500, 83.4500]);
X210.bindPopup("<b>X210</b>").openPopup();

var X221 = L.marker([18.5510, 83.4510]);
X221.bindPopup("<b>X221</b>").openPopup();

var X222 = L.marker([18.5520, 83.4520]);
X222.bindPopup("<b>X222</b>").openPopup();

var X223 = L.marker([18.5530, 83.4530]);
X223.bindPopup("<b>X223</b>").openPopup();

var X224 = L.marker([18.5540, 83.4540]);
X224.bindPopup("<b>X224</b>").openPopup();

var X225 = L.marker([18.5550, 83.4550]);
X225.bindPopup("<b>X225</b>").openPopup();

var X226 = L.marker([18.5560, 83.4560]);
X226.bindPopup("<b>X226</b>").openPopup();

var X227 = L.marker([18.5570, 83.4570]);
X227.bindPopup("<b>X227</b>").openPopup();

var X228 = L.marker([18.5580, 83.4580]);
X228.bindPopup("<b>X228</b>").openPopup();

var X229 = L.marker([18.5590, 83.4590]);
X229.bindPopup("<b>X229</b>").openPopup();

var X230 = L.marker([18.5600, 83.4600]);
X230.bindPopup("<b>X230</b>").openPopup();

var X231 = L.marker([18.5610, 83.4610]);
X231.bindPopup("<b>X231</b>").openPopup();

var X232 = L.marker([18.5620, 83.4620]);
X232.bindPopup("<b>X232</b>").openPopup();

var X233 = L.marker([18.5630, 83.4630]);
X233.bindPopup("<b>X233</b>").openPopup();

var X234 = L.marker([18.5640, 83.4640]);
X234.bindPopup("<b>X234</b>").openPopup();

var X235 = L.marker([18.5650, 83.4650]);
X235.bindPopup("<b>X235</b>").openPopup();

var X236 = L.marker([18.5660, 83.4660]);
X236.bindPopup("<b>X236</b>").openPopup();

var X237 = L.marker([18.5670, 83.4670]);
X237.bindPopup("<b>X237</b>").openPopup();

var X238 = L.marker([18.5680, 83.4680]);
X238.bindPopup("<b>X238</b>").openPopup();

var X239 = L.marker([18.5690, 83.4690]);
X239.bindPopup("<b>X239</b>").openPopup();

var X240 = L.marker([18.5700, 83.4700]);
X240.bindPopup("<b>X240</b>").openPopup();

var X241 = L.marker([18.5710, 83.4710]);
X241.bindPopup("<b>X241</b>").openPopup();

var X242 = L.marker([18.5720, 83.4720]);
X242.bindPopup("<b>X242</b>").openPopup();

var X243 = L.marker([18.5730, 83.4730]);
X243.bindPopup("<b>X243</b>").openPopup();

var X244 = L.marker([18.5740, 83.4740]);
X244.bindPopup("<b>X244</b>").openPopup();

var X245 = L.marker([18.5750, 83.4750]);
X245.bindPopup("<b>X245</b>").openPopup();

var X246 = L.marker([18.5760, 83.4760]);
X246.bindPopup("<b>X246</b>").openPopup();

var X247 = L.marker([18.5770, 83.4770]);
X247.bindPopup("<b>X247</b>").openPopup();

var X248 = L.marker([18.5780, 83.4780]);
X248.bindPopup("<b>X248</b>").openPopup();

var X249 = L.marker([18.5790, 83.4790]);
X249.bindPopup("<b>X249</b>").openPopup();

var X250 = L.marker([18.5800, 83.4800]);
X250.bindPopup("<b>X250</b>").openPopup();

var X251 = L.marker([18.5810, 83.4810]);
X251.bindPopup("<b>X251</b>").openPopup();

var X252 = L.marker([18.5820, 83.4820]);
X252.bindPopup("<b>X252</b>").openPopup();

var X253 = L.marker([18.5830, 83.4830]);
X253.bindPopup("<b>X253</b>").openPopup();

var X254 = L.marker([18.5840, 83.4840]);
X254.bindPopup("<b>X254</b>").openPopup();

var X255 = L.marker([18.5850, 83.4850]);
X255.bindPopup("<b>X255</b>").openPopup();

var X256 = L.marker([18.5860, 83.4860]);
X256.bindPopup("<b>X256</b>").openPopup();

var X257 = L.marker([18.5870, 83.4870]);
X257.bindPopup("<b>X257</b>").openPopup();

var X258 = L.marker([18.5880, 83.4880]);
X258.bindPopup("<b>X258</b>").openPopup();

var X259 = L.marker([18.5890, 83.4890]);
X259.bindPopup("<b>X259</b>").openPopup();

var X260 = L.marker([18.5900, 83.4900]);
X260.bindPopup("<b>X260</b>").openPopup();

var X261 = L.marker([18.5910, 83.4910]);
X261.bindPopup("<b>X261</b>").openPopup();

var X262 = L.marker([18.5920, 83.4920]);
X262.bindPopup("<b>X262</b>").openPopup();

var X263 = L.marker([18.5930, 83.4930]);
X263.bindPopup("<b>X263</b>").openPopup();

var X264 = L.marker([18.5940, 83.4940]);
X264.bindPopup("<b>X264</b>").openPopup();

var X265 = L.marker([18.5950, 83.4950]);
X265.bindPopup("<b>X265</b>").openPopup();

var X266 = L.marker([18.5960, 83.4960]);
X266.bindPopup("<b>X266</b>").openPopup();

var X267 = L.marker([18.5970, 83.4970]);
X267.bindPopup("<b>X267</b>").openPopup();

var X268 = L.marker([18.5980, 83.4980]);
X268.bindPopup("<b>X268</b>").openPopup();

var X269 = L.marker([18.5990, 83.4990]);
X269.bindPopup("<b>X269</b>").openPopup();

var X270 = L.marker([18.6000, 83.5000]);
X270.bindPopup("<b>X270</b>").openPopup();

var X271 = L.marker([18.6010, 83.5010]);
X271.bindPopup("<b>X271</b>").openPopup();

var X272 = L.marker([18.6020, 83.5020]);
X272.bindPopup("<b>X272</b>").openPopup();

var X273 = L.marker([18.6030, 83.5030]);
X273.bindPopup("<b>X273</b>").openPopup();

var X274 = L.marker([18.6040, 83.5040]);
X274.bindPopup("<b>X274</b>").openPopup();

var X275 = L.marker([18.6050, 83.5050]);
X275.bindPopup("<b>X275</b>").openPopup();

var X276 = L.marker([18.6060, 83.5060]);
X276.bindPopup("<b>X276</b>").openPopup();

var X277 = L.marker([18.6070, 83.5070]);
X277.bindPopup("<b>X277</b>").openPopup();

var X278 = L.marker([18.6080, 83.5080]);
X278.bindPopup("<b>X278</b>").openPopup();

var X279 = L.marker([18.6090, 83.5090]);
X279.bindPopup("<b>X279</b>").openPopup();

var X280 = L.marker([18.6100, 83.5100]);
X280.bindPopup("<b>X280</b>").openPopup();

var X281 = L.marker([18.6110, 83.5110]);
X281.bindPopup("<b>X281</b>").openPopup();

var X282 = L.marker([18.6120, 83.5120]);
X282.bindPopup("<b>X282</b>").openPopup();

var X283 = L.marker([18.6130, 83.5130]);
X283.bindPopup("<b>X283</b>").openPopup();

var X284 = L.marker([18.6140, 83.5140]);
X284.bindPopup("<b>X284</b>").openPopup();

var X285 = L.marker([18.6150, 83.5150]);
X285.bindPopup("<b>X285</b>").openPopup();

var X286 = L.marker([18.6160, 83.5160]);
X286.bindPopup("<b>X286</b>").openPopup();

var X287 = L.marker([18.6170, 83.5170]);
X287.bindPopup("<b>X287</b>").openPopup();

var X288 = L.marker([18.6180, 83.5180]);
X288.bindPopup("<b>X288</b>").openPopup();

var X289 = L.marker([18.6190, 83.5190]);
X289.bindPopup("<b>X289</b>").openPopup();

var X290 = L.marker([18.6200, 83.5200]);
X290.bindPopup("<b>X290</b>").openPopup();

var X291 = L.marker([18.6210, 83.5210]);
X291.bindPopup("<b>X291</b>").openPopup();

var X292 = L.marker([18.6220, 83.5220]);
X292.bindPopup("<b>X292</b>").openPopup();

var X293 = L.marker([18.6230, 83.5230]);
X293.bindPopup("<b>X293</b>").openPopup();

var X294 = L.marker([18.6240, 83.5240]);
X294.bindPopup("<b>X294</b>").openPopup();

var X295 = L.marker([18.6250, 83.5250]);
X295.bindPopup("<b>X295</b>").openPopup();

var X296 = L.marker([18.6260, 83.5260]);
X296.bindPopup("<b>X296</b>").openPopup();

var X297 = L.marker([18.6270, 83.5270]);
X297.bindPopup("<b>X297</b>").openPopup();

var X298 = L.marker([18.6280, 83.5280]);
X298.bindPopup("<b>X298</b>").openPopup();

var X299 = L.marker([18.6290, 83.5290]);
X299.bindPopup("<b>X299</b>").openPopup();

var X300 = L.marker([18.6300, 83.5300]);
X300.bindPopup("<b>X300</b>").openPopup();

var X301 = L.marker([18.6310, 83.5310]);
X301.bindPopup("<b>X301</b>").openPopup();

var X302 = L.marker([18.6320, 83.5320]);
X302.bindPopup("<b>X302</b>").openPopup();

var X303 = L.marker([18.6330, 83.5330]);
X303.bindPopup("<b>X303</b>").openPopup();

var X304 = L.marker([18.6340, 83.5340]);
X304.bindPopup("<b>X304</b>").openPopup();

var X305 = L.marker([18.6350, 83.5350]);
X305.bindPopup("<b>X305</b>").openPopup();

var X306 = L.marker([18.6360, 83.5360]);
X306.bindPopup("<b>X306</b>").openPopup();

var X307 = L.marker([18.6370, 83.5370]);
X307.bindPopup("<b>X307</b>").openPopup();

var X308 = L.marker([18.6380, 83.5380]);
X308.bindPopup("<b>X308</b>").openPopup();

var X309 = L.marker([18.6390, 83.5390]);
X309.bindPopup("<b>X309</b>").openPopup();

var X310 = L.marker([18.6400, 83.5400]);
X310.bindPopup("<b>X310</b>").openPopup();
//
const overLayers = [
    // {
    //     group: "Lightning",
    //     collapsed: true,
    //     layers: [{
    //             active: false,
    //             name: "Last 00-05 min",
    //             class: "Last 00-05 min",
    //             layer: mywmsIITM,
    //         },
    //         {
    //             active: false,
    //             name: "Last 05-10 min",
    //             layer: mywmsNcum,
    //         },
    //         {
    //             active: false,
    //             name: "Last 10-15 min",
    //             layer: mywmsNowcast,
    //         },
    //     ]
    // },
    // {
    //     group: "Radar Reflectivity",
    //     collapsed: true,
    //     layers: [{
    //             active: false,
    //             name: "Radar Reflectivity",
    //             layer: lucknowMarker
    //         },
    //         {
    //             active: false,
    //             name: "Radar Animation",
    //             layer: patnaMarker
    //         },

    //     ]
    // }
];



//SYNOP
const overLayers2 = [{
        group: "SYNOP 00UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "Temperature_00",
                layer: syn00utc_tem,
            },
            {
                active: false,
                name: "Mean Sea Level Pressure_00",
                layer: HHHHHH,
            },
            {
                active: false,
                name: "Cloud Cover_00",
                layer: X1,
            },
            {
                active: false,
                name: "Geopotential Height_00",
                layer: X2
            },
            {
                active: false,
                name: "Relative Humidity_00",
                layer: X3
            },
            {
                active: false,
                name: "Visibility_00",
                layer: X4
            },
            {
                active: false,
                name: "Wind Speed and Direction_00",
                layer: X5
            },
            {
                active: false,
                name: "3h Rainfall_00",
                layer: syn00utc_rain,
            },
        ]
    },
    {

        group: "SYNOP 03UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "Temperature_03",
                layer: X7
            },
            {
                active: false,
                name: "Mean Sea Level Pressure_03",
                layer: X8
            },
            {
                active: false,
                name: "Cloud Cover_03",
                layer: X9
            },
            {
                active: false,
                name: "Geopotential Height_03",
                layer: X10
            },
            {
                active: false,
                name: "Relative Humidity_03",
                layer: X11
            },
            {
                active: false,
                name: "Visibility_03",
                layer: X12
            },
            {
                active: false,
                name: "Wind Speed and Direction_03",
                layer: X13
            },
            {
                active: false,
                name: "3h Rainfall_03",
                layer: syn03utc_rain,
            },
        ]
    },
    {

        group: "SYNOP 06UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "Temperature_06",
                layer: X15
            },
            {
                active: false,
                name: "Mean Sea Level Pressure_06",
                layer: X16
            },
            {
                active: false,
                name: "Cloud Cover_06",
                layer: X17
            },
            {
                active: false,
                name: "Geopotential Height_06",
                layer: X18
            },
            {
                active: false,
                name: "Relative Humidity_06",
                layer: X19
            },
            {
                active: false,
                name: "Visibility_06",
                layer: X20
            },
            {
                active: false,
                name: "Wind Speed and Direction_06",
                layer: X21
            },
            {
                active: false,
                name: "3h Rainfall_06",
                layer: syn06utc_rain,
            },
        ]
    },
    {

        group: "SYNOP 09UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "Temperature_09",
                layer: X23
            },
            {
                active: false,
                name: "Mean Sea Level Pressure_09",
                layer: X24
            },
            {
                active: false,
                name: "Cloud Cover_09",
                layer: X25
            },
            {
                active: false,
                name: "Geopotential Height_09",
                layer: X26
            },
            {
                active: false,
                name: "Relative Humidity_09",
                layer: X27
            },
            {
                active: false,
                name: "Visibility_09",
                layer: X28
            },
            {
                active: false,
                name: "Wind Speed and Direction_09",
                layer: X29
            },
            {
                active: false,
                name: "3h Rainfall_09",
                layer: syn09utc_rain,
            },
        ]
    },
    {

        group: "SYNOP 12UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "Temperature_12",
                layer: X31
            },
            {
                active: false,
                name: "Mean Sea Level Pressure_12",
                layer: X32
            },
            {
                active: false,
                name: "Cloud Cover_12",
                layer: X33
            },
            {
                active: false,
                name: "Geopotential Height_12",
                layer: X34
            },
            {
                active: false,
                name: "Relative Humidity_12",
                layer: X35
            },
            {
                active: false,
                name: "Visibility_12",
                layer: X36
            },
            {
                active: false,
                name: "Wind Speed and Direction_12",
                layer: X37
            },
            {
                active: false,
                name: "3h Rainfall_12",
                layer: syn12utc_rain,
            },
        ]
    },
    {

        group: "SYNOP 15UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "Temperature_15",
                layer: X39
            },
            {
                active: false,
                name: "Mean Sea Level Pressure_15",
                layer: X40
            },
            {
                active: false,
                name: "Cloud Cover_15",
                layer: X41
            },
            {
                active: false,
                name: "Geopotential Height_15",
                layer: X42
            },
            {
                active: false,
                name: "Relative Humidity_15",
                layer: X43
            },
            {
                active: false,
                name: "Visibility_15",
                layer: X44
            },
            {
                active: false,
                name: "Wind Speed and Direction_15",
                layer: Airport
            },
            {
                active: false,
                name: "3h Rainfall_15",
                layer: syn15utc_rain,
            },
        ]
    },
    {

        group: "SYNOP 18UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "Temperature_18",
                layer: X47
            },
            {
                active: false,
                name: "Mean Sea Level Pressure_18",
                layer: X48
            },
            {
                active: false,
                name: "Cloud Cover_18",
                layer: X49
            },
            {
                active: false,
                name: "Geopotential Height_18",
                layer: X50
            },
            {
                active: false,
                name: "Relative Humidity_18",
                layer: X51
            },
            {
                active: false,
                name: "Visibility_18",
                layer: X52
            },
            {
                active: false,
                name: "Wind Speed and Direction_18",
                layer: X53
            },
            {
                active: false,
                name: "3h Rainfall_18",
                layer: syn18utc_rain,
            },
        ]
    },
    {

        group: "SYNOP 21UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "Temperature_21",
                layer: X55
            },
            {
                active: false,
                name: "Mean Sea Level Pressure_21",
                layer: X56
            },
            {
                active: false,
                name: "Cloud Cover_21",
                layer: X57
            },
            {
                active: false,
                name: "Geopotential Height_21",
                layer: X58
            },
            {
                active: false,
                name: "Relative Humidity_21",
                layer: X59
            },
            {
                active: false,
                name: "Visibility_21",
                layer: X60
            },
            {
                active: false,
                name: "Wind Speed and Direction_21",
                layer: X61
            },
            {
                active: false,
                name: "3h Rainfall_21",
                layer: syn21utc_rain,
            },
        ]
    },

];
//METAR
var overLayers3 = [{

        group: "METAR 00UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "Temperature_00",
                layer: met00utc_tem,
            },
            {
                active: false,
                name: "Dew Point Temperature_00",
                layer: X49,
            },
            {
                active: false,
                name: "Visibility_00",
                layer: X50,
            },
            {
                active: false,
                name: "Wind Speed and Direction_00",
                layer: MeerutMarker
            },

        ]
    },
    {

        group: "METAR 01UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "Temperature_01",
                layer: X63
            },
            {
                active: false,
                name: "Dew Point Temperature_01",
                layer: X64
            },
            {
                active: false,
                name: "Visibility_01",
                layer: X65
            },
            {
                active: false,
                name: "Wind Speed and Direction_01",
                layer: X66
            },

        ]
    },
    {

        group: "METAR 02UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "Temperature_02",
                layer: X67
            },
            {
                active: false,
                name: "Dew Point Temperature_02",
                layer: X68
            },
            {
                active: false,
                name: "Visibility_02",
                layer: X69
            },
            {
                active: false,
                name: "Wind Speed and Direction_02",
                layer: X70
            },

        ]
    },
    {

        group: "METAR 03UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "Temperature_03",
                layer: X71
            },
            {
                active: false,
                name: "Dew Point Temperature_03",
                layer: X72
            },
            {
                active: false,
                name: "Visibility_03",
                layer: X73
            },
            {
                active: false,
                name: "Wind Speed and Direction_03",
                layer: X74
            },

        ]
    },

    {

        group: "METAR 04UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "Temperature_04",
                layer: X75
            },
            {
                active: false,
                name: "Dew Point Temperature_04",
                layer: X76
            },
            {
                active: false,
                name: "Visibility_04",
                layer: X77
            },
            {
                active: false,
                name: "Wind Speed and Direction_04",
                layer: X78
            },

        ]
    },
    {

        group: "METAR 05UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "Temperature_05",
                layer: X79
            },
            {
                active: false,
                name: "Dew Point Temperature_05",
                layer: X80
            },
            {
                active: false,
                name: "Visibility_05",
                layer: X81
            },
            {
                active: false,
                name: "Wind Speed and Direction_05",
                layer: X82
            },

        ]
    },
    {

        group: "METAR 06UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "Temperature_06",
                layer: X83
            },
            {
                active: false,
                name: "Dew Point Temperature_06",
                layer: X84
            },
            {
                active: false,
                name: "Visibility_06",
                layer: X85
            },
            {
                active: false,
                name: "Wind Speed and Direction_06",
                layer: X86
            },

        ]
    },
    {

        group: "METAR 07UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "Temperature_07",
                layer: X87
            },
            {
                active: false,
                name: "Dew Point Temperature_07",
                layer: X88
            },
            {
                active: false,
                name: "Visibility_07",
                layer: X89
            },
            {
                active: false,
                name: "Wind Speed and Direction_07",
                layer: X90
            },

        ]
    },
    {

        group: "METAR 08UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "Temperature_08",
                layer: X91
            },
            {
                active: false,
                name: "Dew Point Temperature_08",
                layer: X92
            },
            {
                active: false,
                name: "Visibility_08",
                layer: X93
            },
            {
                active: false,
                name: "Wind Speed and Direction_08",
                layer: X94
            },

        ]
    },
    {

        group: "METAR 09UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "Temperature_09",
                layer: X95
            },
            {
                active: false,
                name: "Dew Point Temperature_09",
                layer: X96
            },
            {
                active: false,
                name: "Visibility_09",
                layer: X97
            },
            {
                active: false,
                name: "Wind Speed and Direction_09",
                layer: X98
            },

        ]
    },
    {

        group: "METAR 10UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "Temperature_10",
                layer: X99
            },
            {
                active: false,
                name: "Dew Point Temperature_10",
                layer: X100
            },
            {
                active: false,
                name: "Visibility_10",
                layer: X101
            },
            {
                active: false,
                name: "Wind Speed and Direction_10",
                layer: X102
            },

        ]
    },
    {

        group: "METAR 11UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "Temperature_11",
                layer: X103
            },
            {
                active: false,
                name: "Dew Point Temperature_11",
                layer: X104
            },
            {
                active: false,
                name: "Visibility_11",
                layer: X105
            },
            {
                active: false,
                name: "Wind Speed and Direction_11",
                layer: X106
            },

        ]
    },
    {

        group: "METAR 12UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "Temperature_12",
                layer: X107
            },
            {
                active: false,
                name: "Dew Point Temperature_12",
                layer: X108
            },
            {
                active: false,
                name: "Visibility_12",
                layer: X109
            },
            {
                active: false,
                name: "Wind Speed and Direction_12",
                layer: X110
            },

        ]
    },
    {

        group: "METAR 13UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "Temperature_13",
                layer: X111
            },
            {
                active: false,
                name: "Dew Point Temperature_13",
                layer: X112
            },
            {
                active: false,
                name: "Visibility_13",
                layer: X113
            },
            {
                active: false,
                name: "Wind Speed and Direction_13",
                layer: X114
            },

        ]
    },
    {

        group: "METAR 14UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "Temperature_14",
                layer: X115
            },
            {
                active: false,
                name: "Dew Point Temperature_14",
                layer: X116
            },
            {
                active: false,
                name: "Visibility_14",
                layer: X117
            },
            {
                active: false,
                name: "Wind Speed and Direction_14",
                layer: X118
            },

        ]
    },
    {

        group: "METAR 15UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "Temperature_15",
                layer: X119
            },
            {
                active: false,
                name: "Dew Point Temperature_15",
                layer: X120
            },
            {
                active: false,
                name: "Visibility_15",
                layer: X121
            },
            {
                active: false,
                name: "Wind Speed and Direction_15",
                layer: X122
            },

        ]
    },
    {

        group: "METAR 16UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "Temperature_16",
                layer: X123
            },
            {
                active: false,
                name: "Dew Point Temperature_16",
                layer: X124
            },
            {
                active: false,
                name: "Visibility_16",
                layer: X125
            },
            {
                active: false,
                name: "Wind Speed and Direction_16",
                layer: X126
            },

        ]
    },
    {

        group: "METAR 17UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "Temperature_17",
                layer: X127
            },
            {
                active: false,
                name: "Dew Point Temperature_17",
                layer: X128
            },
            {
                active: false,
                name: "Visibility_17",
                layer: X129
            },
            {
                active: false,
                name: "Wind Speed and Direction_17",
                layer: X130
            },

        ]
    },
    {

        group: "METAR 18UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "Temperature_18",
                layer: X131
            },
            {
                active: false,
                name: "Dew Point Temperature_18",
                layer: X132
            },
            {
                active: false,
                name: "Visibility_18",
                layer: X133
            },
            {
                active: false,
                name: "Wind Speed and Direction_18",
                layer: X134
            },

        ]
    },
    {

        group: "METAR 19UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "Temperature_19",
                layer: X135
            },
            {
                active: false,
                name: "Dew Point Temperature_19",
                layer: X136
            },
            {
                active: false,
                name: "Visibility_19",
                layer: X137
            },
            {
                active: false,
                name: "Wind Speed and Direction_19",
                layer: X138
            },

        ]
    },
    {

        group: "METAR 20UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "Temperature_20",
                layer: X139
            },
            {
                active: false,
                name: "Dew Point Temperature_20",
                layer: X140
            },
            {
                active: false,
                name: "Visibility_20",
                layer: X141
            },
            {
                active: false,
                name: "Wind Speed and Direction_20",
                layer: X142
            },

        ]
    },
    {

        group: "METAR 21UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "Temperature_21",
                layer: X143
            },
            {
                active: false,
                name: "Dew Point Temperature_21",
                layer: X144
            },
            {
                active: false,
                name: "Visibility_21",
                layer: X145
            },
            {
                active: false,
                name: "Wind Speed and Direction_21",
                layer: X146
            },

        ]
    },
    {

        group: "METAR 22UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "Temperature_22",
                layer: X147
            },
            {
                active: false,
                name: "Dew Point Temperature_22",
                layer: X148
            },
            {
                active: false,
                name: "Visibility_22",
                layer: X149
            },
            {
                active: false,
                name: "Wind Speed and Direction_22",
                layer: X150
            },

        ]
    },
    {

        group: "METAR 23UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "Temperature_23",
                layer: X151
            },
            {
                active: false,
                name: "Dew Point Temperature_23",
                layer: X152
            },
            {
                active: false,
                name: "Visibility_23",
                layer: X153
            },
            {
                active: false,
                name: "Wind Speed and Direction_23",
                layer: X154
            },

        ]
    },


];

//mesolscale
var overLayers4 = [

    {
        group: "WRF Reflectivity",
        collapsed: true,
        layers: [{
                active: false,
                name: "WRF R Next 03 Hrs",
                layer: X250
            },
            {
                active: false,
                name: "WRF R Next 03-06 Hrs",
                layer: X251
            },
        ]
    },


    {
        group: "WRF Lightning Product",
        collapsed: true,
        layers: [{
                active: false,
                name: "WRF LP Next 03 Hrs",
                layer: X252
            },
            {
                active: false,
                name: "WRF LP Next 03-06 Hrs",
                layer: X253
            },
        ]
    },

    {
        group: "WRF Accumlated Rainfall",
        collapsed: true,
        layers: [{
                active: false,
                name: "WRF AR Next 03 Hrs",
                layer: X254
            },
            {
                active: false,
                name: "WRF AR Next 03-06 Hrs",
                layer: X255
            },
        ]
    },


    {
        group: "Lightning Potential Index",
        collapsed: true,
        layers: [{
                active: false,
                name: "LP Next 01 Hrs",
                layer: X256
            },
            {
                active: false,
                name: "LP Next 01-02 Hrs",
                layer: X257
            },
            {
                active: false,
                name: "LP Next 02-03 Hrs",
                layer: X258
            },
        ]
    },


    {
        group: "NCUMR Lightning Product",
        collapsed: true,
        layers: [{
                active: false,
                name: "NCUMR LP Next 03 Hrs",
                layer: X259
            },
            {
                active: false,
                name: "NCUMR LP Next 03-06 Hrs",
                layer: X260
            },
        ]
    },

    {
        group: "NCUMR Wind Gust",
        collapsed: true,
        layers: [{
                active: false,
                name: "NCUMR WG Next 03 Hrs",
                layer: X261
            },
            {
                active: false,
                name: "NCUMR WG Next 03-06 Hrs",
                layer: X262
            },
        ]
    },


    {
        group: "NCUMR Rainfall",
        collapsed: true,
        layers: [{
                active: false,
                name: "NCUMR R Next 03 Hrs",
                layer: X262
            },
            {
                active: false,
                name: "NCUMR R Next 03-06 Hrs",
                layer: X263
            },
        ]
    },


    {
        group: "HRRR_SP Hourly DBZ",
        collapsed: true,
        layers: [{
                active: false,
                name: "HRRR SP Next 01 Hrs",
                layer: X264
            },
            {
                active: false,
                name: "HRRR SP Next 01-02 Hrs",
                layer: X266
            },
            {
                active: false,
                name: "HRRR SP Next 02-03 Hrs",
                layer: X267
            },
        ]
    },
    {
        group: "HRRR_NE Hourly DBZ",
        collapsed: true,
        layers: [{
                active: false,
                name: "HRRR NE Next 01 Hrs",
                layer: X268
            },
            {
                active: false,
                name: "HRRR NE Next 01-02 Hrs",
                layer: X269
            },
            {
                active: false,
                name: "HRRR NE Next 02-03 Hrs",
                layer: X270
            },
        ]
    },
    {
        group: "HRRR_NW Hourly DBZ",
        collapsed: true,
        layers: [{
                active: false,
                name: "HRRR NW Next 01 Hrs",
                layer: X271
            },
            {
                active: false,
                name: "HRRR NW Next 01-02 Hrs",
                layer: X272
            },
            {
                active: false,
                name: "HRRR NW Next 02-03 Hrs",
                layer: X273
            },
        ]
    },
    {
        group: "EWRF MaxZ",
        collapsed: true,
        layers: [{
                active: false,
                name: "EWRF M Next 01 Hrs",
                layer: X274
            },
            {
                active: false,
                name: "EWRF M Next 01-02 Hrs",
                layer: X275
            },
            {
                active: false,
                name: "EWRF M Next 02-03 Hrs",
                layer: X276
            },
        ]
    },
    {
        group: "EWRF Lightning",
        collapsed: true,
        layers: [{
                active: false,
                name: "EWRF L Next 01 Hrs",
                layer: X277
            },
            {
                active: false,
                name: "EWRF L Next 01-02 Hrs",
                layer: X278
            },
            {
                active: false,
                name: "EWRF L Next 02-03 Hrs",
                layer: X279
            },

        ]
    },


];

//MediumRange
var overLayers5 = [

    {
        group: "Rainfall Intensity Day1",
        collapsed: true,
        layers: [{
                active: false,
                name: "RI GFS DAY1",
                layer: med_gfs1,
            },
            {
                active: false,
                name: "RI NCUM Day1",
                layer: med_ncum1,
            },
            {
                active: false,
                name: "RI NEPS Day1",
                layer: X282
            },
            {
                active: false,
                name: "RI WRF Day1",
                layer: X283
            },
            {
                active: false,
                name: "RI GEFS Day1",
                layer: X284
            },
            {
                active: false,
                name: "RI ECMWF Day1",
                layer: X285
            },

        ]
    },
    {
        group: "Rainfall Intensity Day2",
        collapsed: true,
        layers: [{
                active: false,
                name: "RI GFS Day2",
                layer: X286
            },
            {
                active: false,
                name: "RI NCUM Day2",
                layer: X289
            },
            {
                active: false,
                name: "RI NEPS Day2",
                layer: X290
            },
            {
                active: false,
                name: "RI WRF Day2",
                layer: X291
            },
            {
                active: false,
                name: "RI GEFS Day2",
                layer: X292
            },
            {
                active: false,
                name: "RI ECMWF Day2",
                layer: X293
            },

        ]
    },
    {
        group: "Rainfall Intensity Day3",
        collapsed: true,
        layers: [{
                active: false,
                name: "RI GFS Day3",
                layer: X294
            },
            {
                active: false,
                name: "RI NCUM Day3",
                layer: X295
            },
            {
                active: false,
                name: "RI NEPS Day3",
                layer: X296
            },
            {
                active: false,
                name: "RI WRF Day3",
                layer: X297
            },
            {
                active: false,
                name: "RI GEFS Day3",
                layer: X298
            },
            {
                active: false,
                name: "RI ECMWF Day3",
                layer: X299
            },

        ]
    },
    {
        group: "Rainfall Intensity Day4",
        collapsed: true,
        layers: [{
                active: false,
                name: "RI GFS Day4",
                layer: X300
            },
            {
                active: false,
                name: "RI NCUM Day4",
                layer: X301
            },
            {
                active: false,
                name: "RI NEPS Day4",
                layer: X302
            },

            {
                active: false,
                name: "RI GEFS Day4",
                layer: X303
            },
            {
                active: false,
                name: "RI ECMWF Day4",
                layer: X304
            },

        ]
    },
    {
        group: "Rainfall Intensity Day5",
        collapsed: true,
        layers: [{
                active: false,
                name: "RI GFS Day5",
                layer: X305
            },
            {
                active: false,
                name: "RI NCUM Day5",
                layer: X306
            },
            {
                active: false,
                name: "RI NEPS Day5",
                layer: X307
            },

            {
                active: false,
                name: "RI GEFS Day5",
                layer: X308
            },
            {
                active: false,
                name: "RI ECMWF Day5",
                layer: X309
            },

        ]
    },
    {
        group: "MSLP Day1",
        collapsed: true,
        layers: [{
                active: false,
                name: "MSLP GFS Day1",
                layer: X310
            },
            {
                active: false,
                name: "MSLP NCUM Day1",
                layer: X11
            },
            {
                active: false,
                name: "MSLP NEPS Day1",
                layer: X12
            },
            {
                active: false,
                name: "MSLP WRF Day1",
                layer: X13
            },
            {
                active: false,
                name: "MSLP GEFS Day1",
                layer: X14
            },

        ]
    },
    {
        group: "MSLP Day2",
        collapsed: true,
        layers: [{
                active: false,
                name: "MSLP GFS Day2",
                layer: X15
            },
            {
                active: false,
                name: "MSLP NCUM Day2",
                layer: X16
            },
            {
                active: false,
                name: "MSLP NEPS Day2",
                layer: X17
            },
            {
                active: false,
                name: "MSLP WRF Day2",
                layer: X18
            },
            {
                active: false,
                name: "MSLP GEFS Day2",
                layer: X19
            },

        ]
    },
    {
        group: "MSLP Day3",
        collapsed: true,
        layers: [{
                active: false,
                name: "MSLP GFS Day3",
                layer: X20
            },
            {
                active: false,
                name: "MSLP NCUM Day3",
                layer: X21
            },
            {
                active: false,
                name: "MSLP NEPS Day3",
                layer: X22
            },
            {
                active: false,
                name: "MSLP WRF Day3",
                layer: X23
            },
            {
                active: false,
                name: "MSLP GEFS Day3",
                layer: X24
            },

        ]
    },
    {
        group: "MSLP Day4",
        collapsed: true,
        layers: [{
                active: false,
                name: "MSLP GFS Day4",
                layer: X25
            },
            {
                active: false,
                name: "MSLP NCUM Day4",
                layer: X26
            },
            {
                active: false,
                name: "MSLP NEPS Day4",
                layer: X27
            },

            {
                active: false,
                name: "MSLP GEFS Day4",
                layer: X28
            },

        ]
    },
    {
        group: "MSLP Day5",
        collapsed: true,
        layers: [{
                active: false,
                name: "MSLP GFS Day5",
                layer: X29
            },
            {
                active: false,
                name: "MSLP NCUM Day5",
                layer: X30
            },
            {
                active: false,
                name: "MSLP NEPS Day5",
                layer: X31
            },

            {
                active: false,
                name: "MSLP GEFS Day5",
                layer: X32
            },

        ]
    },
    {
        group: "10m Wind Day1",
        collapsed: true,
        layers: [{
                active: false,
                name: "10m WIND GFS Day1",
                layer: X33
            },
            {
                active: false,
                name: "10m WIND NCUM Day1",
                layer: X34
            },
            {
                active: false,
                name: "10m WIND NEPS Day1",
                layer: X35
            },
            {
                active: false,
                name: "10m WIND WRF Day1",
                layer: X36
            },
            {
                active: false,
                name: "10m WIND GEFS Day1",
                layer: X37
            },

        ]
    },
    {
        group: "10m Wind Day2",
        collapsed: true,
        layers: [{
                active: false,
                name: "10m WIND GFS Day2",
                layer: X38
            },
            {
                active: false,
                name: "10m WIND NCUM Day2",
                layer: X39
            },
            {
                active: false,
                name: "10m WIND NEPS Day2",
                layer: X40
            },
            {
                active: false,
                name: "10m WIND WRF Day2",
                layer: X41
            },
            {
                active: false,
                name: "10m WIND GEFS Day2",
                layer: X42
            },

        ]
    },
    {
        group: "10m Wind Day3",
        collapsed: true,
        layers: [{
                active: false,
                name: "10m WIND GFS Day3",
                layer: X43
            },
            {
                active: false,
                name: "10m WIND NCUM Day3",
                layer: X44
            },
            {
                active: false,
                name: "10m WIND NEPS Day3",
                layer: Airport
            },
            {
                active: false,
                name: "10m WIND WRF Day3",
                layer: X46
            },
            {
                active: false,
                name: "10m WIND GEFS Day3",
                layer: X47
            },

        ]
    },
    {
        group: "10m Wind Day4",
        collapsed: true,
        layers: [{
                active: false,
                name: "10m WIND GFS Day4",
                layer: X48
            },
            {
                active: false,
                name: "10m WIND NCUM Day4",
                layer: X49
            },
            {
                active: false,
                name: "10m WIND NEPS Day4",
                layer: X50
            },

            {
                active: false,
                name: "10m WIND GEFS Day4",
                layer: X51
            },

        ]
    },
    {
        group: "10m Wind Day5",
        collapsed: true,
        layers: [{
                active: false,
                name: "10m WIND GFS Day5",
                layer: X52
            },
            {
                active: false,
                name: "10m WIND NCUM Day5",
                layer: X53
            },
            {
                active: false,
                name: "10m WIND NEPS Day5",
                layer: X54
            },

            {
                active: false,
                name: "10m WIND GEFS Day5",
                layer: X55
            },

        ]
    },

];

//Satellite
var overLayers6 = [{
        group: "Satellite Observation",
        collapsed: false,
        layers: [{
                active: false,
                name: "TIR1",
                layer: X157
            },
            {
                active: false,
                name: "VIS",
                layer: X158
            },
            {
                active: false,
                name: "CTBT",
                layer: X159,
            },
            {
                active: false,
                name: "Low Level Convergence",
                layer: X160
            },
            {
                active: false,
                name: "Upper Level Divergence",
                layer: X161
            },
            {
                active: false,
                name: "Mid Level Shear",
                layer: X162
            },
            {
                active: false,
                name: "Vorticity at 200hPa",
                layer: X163
            },
            {
                active: false,
                name: "Vorticity at 500hPa",
                layer: X164
            },
            {
                active: false,
                name: "Vorticity at 700hPa",
                layer: X165
            },
            {
                active: false,
                name: "Vorticity at 850hPa",
                layer: X166
            },


        ]
    },

];

//Radar
var overLayers7 = [{
        group: "Radar Products",
        collapsed: false,
        layers: [{
                active: false,
                name: "Radar Reflectivity",
                layer: rad_ref,
            },
            {
                active: false,
                name: "Radar Animation",
                layer: X249
            },

        ]
    },

];

//Lightning
var overLayers8 = [{
        group: "Lightning",
        collapsed: false,
        layers: [{
                active: false,
                name: "Last 00-05 min",
                layer: mywmsIITM,
            },
            {
                active: false,
                name: "Last 05-10 min",
                layer: mywmsNcum,
            },
            {
                active: false,
                name: "Last 10-15 min",
                layer: mywmsNowcast,
            },
            {
                active: false,
                name: "ILDN Last 05 min",
                layer: X1
            },
            {
                active: false,
                name: "Nowcast Alerts",
                layer: X2
            },
        ]
    },

];

//SOUNDING
var overLayers9 = [{
        group: "Sounding_00UTC Wind",
        collapsed: true,
        layers: [{
                active: false,
                name: "1000 hPa Wind",
                layer: X178
            },
            {
                active: false,
                name: "850 hPa Wind",
                layer: X179
            },
            {
                active: false,
                name: "700 hPa Wind",
                layer: X180
            },
            {
                active: false,
                name: "500 hPa Wind",
                layer: X181
            },
            {
                active: false,
                name: "300 hPa Wind",
                layer: X182
            },
            {
                active: false,
                name: "200 hPa Wind",
                layer: X183
            },
            {
                active: false,
                name: "100 hPa Wind",
                layer: X184
            },
            {
                active: false,
                name: "50 hPa Wind",
                layer: X185
            },

        ]
    },
    {
        group: "Sounding_12UTC Wind",
        collapsed: true,
        layers: [{
                active: false,
                name: "1000 hPa Wind",
                layer: X186
            },
            {
                active: false,
                name: "850 hPa Wind",
                layer: X187
            },
            {
                active: false,
                name: "700 hPa Wind",
                layer: X188
            },
            {
                active: false,
                name: "500 hPa Wind",
                layer: X189
            },
            {
                active: false,
                name: "300 hPa Wind",
                layer: X190
            },
            {
                active: false,
                name: "200 hPa Wind",
                layer: X191
            },
            {
                active: false,
                name: "100 hPa Wind",
                layer: X192
            },
            {
                active: false,
                name: "50 hPa Wind",
                layer: X193
            },

        ]
    },
    {
        group: "Sounding_00UTC Temp",
        collapsed: true,
        layers: [

            {
                active: false,
                name: "1000 hPa Temp",
                layer: X194
            },
            {
                active: false,
                name: "850 hPa Temp",
                layer: X195
            },
            {
                active: false,
                name: "700 hPa Temp",
                layer: X196
            },
            {
                active: false,
                name: "500 hPa Temp",
                layer: X197
            },
            {
                active: false,
                name: "300 hPa Temp",
                layer: X198
            },
            {
                active: false,
                name: "200 hPa Temp",
                layer: X199
            },
            {
                active: false,
                name: "100 hPa Temp",
                layer: X200
            },
            {
                active: false,
                name: "50 hPa Temp",
                layer: X201
            },
        ]
    },
    {
        group: "Sounding_12UTC Temp",
        collapsed: true,
        layers: [

            {
                active: false,
                name: "1000 hPa Temp",
                layer: X202
            },
            {
                active: false,
                name: "850 hPa Temp",
                layer: X203
            },
            {
                active: false,
                name: "700 hPa Temp",
                layer: X204
            },
            {
                active: false,
                name: "500 hPa Temp",
                layer: X205
            },
            {
                active: false,
                name: "300 hPa Temp",
                layer: X206
            },
            {
                active: false,
                name: "200 hPa Temp",
                layer: X207
            },
            {
                active: false,
                name: "100 hPa Temp",
                layer: X208
            },
            {
                active: false,
                name: "50 hPa Temp",
                layer: X209
            },
        ]
    },
    {
        group: "Sounding_00UTC Dew Point",
        collapsed: true,
        layers: [

            {
                active: false,
                name: "1000 hPa Dew Point",
                layer: X208
            },
            {
                active: false,
                name: "850 hPa Dew Point",
                layer: X209
            },
            {
                active: false,
                name: "700 hPa Dew Point",
                layer: X210
            },
            {
                active: false,
                name: "500 hPa Dew Point",
                layer: X211
            },
            {
                active: false,
                name: "300 hPa Dew Point",
                layer: X212
            },
            {
                active: false,
                name: "200 hPa Dew Point",
                layer: X213
            },
            {
                active: false,
                name: "100 hPa Dew Point",
                layer: X214
            },
            {
                active: false,
                name: "50 hPa Dew Point",
                layer: X215
            },
        ]
    },
    {
        group: "Sounding_12UTC Dew Point",
        collapsed: true,
        layers: [

            {
                active: false,
                name: "1000 hPa Dew Point",
                layer: X216
            },
            {
                active: false,
                name: "850 hPa Dew Point",
                layer: X217
            },
            {
                active: false,
                name: "700 hPa Dew Point",
                layer: X218
            },
            {
                active: false,
                name: "500 hPa Dew Point",
                layer: X219
            },
            {
                active: false,
                name: "300 hPa Dew Point",
                layer: X220
            },
            {
                active: false,
                name: "200 hPa Dew Point",
                layer: X221
            },
            {
                active: false,
                name: "100 hPa Dew Point",
                layer: X222
            },
            {
                active: false,
                name: "50 hPa Dew Point",
                layer: X223
            },
        ]
    },


];

//Exposure 
var overLayers10 = [{
    group: "Exposure Layers",
    collapsed: false,
    layers: [{
            active: false,
            name: "District Boundaries",
            layer: X144
        },
        {
            active: false,
            name: "Airport",
            layer: X121
        },
        {
            active: false,
            name: "Oil Refineries",
            layer: exp_oil,
        },
        {
            active: false,
            name: "Power Station",
            layer: SolapurMarker
        },
        {
            active: false,
            name: "Power Plant",
            layer: VijayapuraMarker
        },
        {
            active: false,
            name: "DEM",
            layer: X170
        },
        {
            active: false,
            name: "Hospital",
            layer: X171
        },
        {
            active: false,
            name: "Industrail",
            layer: X172
        },

        {
            active: false,
            name: "sports",
            layer: X173
        },
        {
            active: false,
            name: "Road Network",
            layer: X174
        },
        {
            active: false,
            name: "Socio Economic Zone",
            layer: X175
        },
        {
            active: false,
            name: "Railway Network",
            layer: X176
        },
        {
            active: false,
            name: "LULC",
            layer: X177
        },


    ]
}, ];

//SHIP AND BUOY
var overLayers11 = [{
    group: "Ship and Buoy Observation",
    collapsed: false,
    layers: [{
            active: false,
            name: "00UTC",
            layer: ship_00utc,
        },
        {
            active: false,
            name: "01UTC",
            layer: X225
        },
        {
            active: false,
            name: "02UTC",
            layer: X226
        },
        {
            active: false,
            name: "03UTC",
            layer: X227
        },
        {
            active: false,
            name: "04UTC",
            layer: X228
        },
        {
            active: false,
            name: "05UTC",
            layer: X229
        },
        {
            active: false,
            name: "06UTC",
            layer: X230
        },
        {
            active: false,
            name: "07UTC",
            layer: X231
        },
        {
            active: false,
            name: "08UTC",
            layer: X232
        },
        {
            active: false,
            name: "09UTC",
            layer: X233
        },
        {
            active: false,
            name: "10UTC",
            layer: X234
        },
        {
            active: false,
            name: "11UTC",
            layer: X235
        },
        {
            active: false,
            name: "12UTC",
            layer: X236
        },
        {
            active: false,
            name: "13UTC",
            layer: X237
        },
        {
            active: false,
            name: "14UTC",
            layer: X199
        },
        {
            active: false,
            name: "15UTC",
            layer: X238
        },
        {
            active: false,
            name: "16UTC",
            layer: X239
        },
        {
            active: false,
            name: "17UTC",
            layer: X240
        },
        {
            active: false,
            name: "18UTC",
            layer: X241
        },
        {
            active: false,
            name: "19UTC",
            layer: X242
        },
        {
            active: false,
            name: "20UTC",
            layer: X243
        },
        {
            active: false,
            name: "21UTC",
            layer: X244
        },
        {
            active: false,
            name: "22UTC",
            layer: X245
        },
        {
            active: false,
            name: "23UTC",
            layer: X246
        },
    ]
}, ];


const allOverLayers = overLayers.concat(overLayers2, overLayers3, overLayers4, overLayers5, overLayers6,
    overLayers7,
    overLayers8, overLayers9, overLayers10, overLayers11);

allOverLayers.forEach(group => {
    group.layers.forEach(layer => {
        layer.layer.on('add remove', function() {
            layer.active = !layer.active;
            updateActiveLayers();
        });
    });
});

var baseMaps1 = {
    "OpenStreetMap": OpenStreetMap,
    "Streets": streets,
    "Imagery": imagery,
    "Stadia_AlidadeSmoothDark": Stadia_AlidadeSmoothDark,
    "DarkGreyCanvas": darkGreyCanvas
};

var overlayMaps = {
    // "Cities": cities
};

var layerControl = L.control.layers(baseMaps1, overlayMaps).addTo(map);


// PanelLayers collapse group
var panelLayers = new L.Control.PanelLayers(baseMaps, overLayers, {
    position: "topright"
});

var panelLayers2 = new L.Control.PanelLayers("", overLayers2, {
    collapsibleGroups: true,
});

var panelLayers3 = new L.Control.PanelLayers("", overLayers3, {
    collapsibleGroups: true
});

var panelLayers4 = new L.Control.PanelLayers('', overLayers4, {
    collapsibleGroups: true
});
var panelLayers5 = new L.Control.PanelLayers('', overLayers5, {
    collapsibleGroups: true
});
var panelLayers6 = new L.Control.PanelLayers('', overLayers6, {
    collapsibleGroups: true
});
var panelLayers7 = new L.Control.PanelLayers('', overLayers7, {
    collapsibleGroups: true
});
var panelLayers8 = new L.Control.PanelLayers('', overLayers8, {
    collapsibleGroups: true
});
var panelLayers9 = new L.Control.PanelLayers('', overLayers9, {
    collapsibleGroups: true
});
var panelLayers10 = new L.Control.PanelLayers("", overLayers10, {
    collapsibleGroups: true,
});
var panelLayers11 = new L.Control.PanelLayers('', overLayers11, {
    collapsibleGroups: true
});

//panelLayers,
var panelLayersArray = [panelLayers, panelLayers2, panelLayers3, panelLayers4, panelLayers5, panelLayers6,
    panelLayers7,
    panelLayers8, panelLayers9, panelLayers10, panelLayers11
];

// Models Time Updation code 
let Model_Time = document.getElementById("model_Tim");
let Model_Time_Title = document.getElementById("Model_Tim_Tit");
let Model_Time_List = document.getElementById("Model_Tim_lis");
// *******


//PanelLayers and Models Time button click starts here
const buttons = [{
        id: "synop",
        panel: panelLayers2,
        title: "Synop",
        updateTime: "Synop's Data Update Time"
    },
    {
        id: "metar",
        panel: panelLayers3,
        title: "Metar",
        updateTime: "Metar's Data Update Time"
    },
    {
        id: "mesolscale",
        panel: panelLayers4,
        title: "Mesoscale",
        updateTime: "Mesoscale's Data Update Time"
    },
    {
        id: "medium_range",
        panel: panelLayers5,
        title: "Medium Range",
        updateTime: "Medium Range's Data Update Time"
    },
    {
        id: "satellite",
        panel: panelLayers6,
        title: "Satellite",
        updateTime: "Satellite's Data Update Time"
    },
    {
        id: "radar",
        panel: panelLayers7,
        title: "Radar",
        updateTime: "Radar's Data Update Time"
    },
    {
        id: "lightning",
        panel: panelLayers8,
        title: "Lightning",
        updateTime: "Lightning's Data Update Time"
    },
    {
        id: "sounding",
        panel: panelLayers9,
        title: "Sounding",
        updateTime: "Sounding's Data Update Time"
    },
    {
        id: "exposure",
        panel: panelLayers10,
        title: "Exposure",
        updateTime: "Exposure's Data Update Time"
    },
    {
        id: "ship_and_buoy",
        panel: panelLayers11,
        title: "Ship and Buoy",
        updateTime: "Ship and Buoy's Data Update Time"
    }
];

let activeButtonId = null;

function handleClick(event) {
    const buttonId = event.target.id;
    console.log(buttonId, "buttonId");

    if (buttonId === activeButtonId) {
        const button = buttons.find(btn => btn.id === buttonId);
        if (!button) return;

        map.removeControl(button.panel);
        Model_Time.style.display = "none";
        activeButtonId = null;

        return;
    }

    const button = buttons.find(btn => btn.id === buttonId);
    if (!button) return;

    buttons.forEach(btn => {
        if (btn.id === buttonId) {
            map.addControl(btn.panel);
        } else {
            map.removeControl(btn.panel);
        }
    });

    activeButtonId = buttonId;

    let macroContainerFn = document.getElementById("macroContainer");
    let observationContainerFn = document.getElementById("ObservationContainer");
    let mapVar = document.getElementById('map');
    macroContainerFn.classList.add('hidden');
    observationContainerFn.classList.add('hidden');
    mapVar.style.width = '100%';

    Model_Time.style.display = "block";
    Model_Time_Title.innerHTML = button.title;
    Model_Time_List.innerHTML = button.updateTime;
}


buttons.forEach(btn => {
    document.getElementById(btn.id).addEventListener("click", handleClick);
});
// PanelLayers and Models Time button click ends here


// *******
// Image
let metarTempLegendImage = document.querySelector('#metarTempImage');
let metarDewPointLegendImage = document.querySelector('#metarDewPointImage');
let metarVisibilityLegendImage = document.querySelector('#metarVisibilityImage');
let metarWindSpeedAndDirectionLegendImage = document.querySelector('#metarWindSpeedAndDirectionImage');

let synopTempLegendImage = document.querySelector('#synopTempImage');
let synopMeanSeaLevelLegendImage = document.querySelector('#synopMeanSeaLevelImage');
let synopCloudCoverLegendImage = document.querySelector('#synopCloudCoverImage');
let synopGeopotentialHeightLegendImage = document.querySelector('#synopGeopotentialHeightImage');
let synopRelativeHumidityLegendImage = document.querySelector('#synopRelativeHumidityImage');
let synopVisibilityLegendImage = document.querySelector('#synopVisibilityImage');
let synopWindSpeedAndDirectionLegendImage = document.querySelector('#synopWindSpeedAndDirectionImage');
let synop3hRainfallLegendImage = document.querySelector('#synop3hRainfallImage');

let soundingImage = document.querySelector('#soundingImage');
let LIGHTININGImage = document.querySelector('#LIGHTININGImage');
let RADARImage = document.querySelector('#RADARImage');
let SHIPANDBUOYImage = document.querySelector('#SHIPANDBUOYImage');

let WRFReflectivityImage = document.querySelector('#WRFReflectivityImage');
let WRFlightningProductImage = document.querySelector('#WRFlightningProductImage');
let WRFAccumlatedRainfallImage = document.querySelector('#WRFAccumlatedRainfallImage');
let lightningPotentialindexImage = document.querySelector('#lightningPotentialindexImage');
let NCUMRlightningProductImage = document.querySelector('#NCUMRlightningProductImage');
let NCUMRWindGustImage = document.querySelector('#NCUMRWindGustImage');
let NCUMRRainfallImage = document.querySelector('#NCUMRRainfallImage');
let HRRR_SPHourlyDBZImage = document.querySelector('#HRRR_SPHourlyDBZImage');
let HRRR_NEHourlyDBZImage = document.querySelector('#HRRR_NEHourlyDBZImage');
let HRRR_NWHourlyDBZImage = document.querySelector('#HRRR_NWHourlyDBZImage');
let EWRFMaxZImage = document.querySelector('#EWRFMaxZImage');
let EWRFLightningImage = document.querySelector('#EWRFLightningImage');

let RainfallIntensityImage = document.querySelector('#RainfallIntensityImage');
let MSLPDayImage = document.querySelector('#MSLPDayImage');
let mWINDDayImage = document.querySelector('#mWINDDayImage');

//
let panelLayerLightningTitle = document.querySelector('#panelLayer-Lightning-Title')
let panelLayerLightninglists = document.querySelector('#panelLayer-Lightning-lists')
//
let panelLayerRadarTitle = document.querySelector('#panelLayer-radar-Title')
let panelLayerRadarlists = document.querySelector('#panelLayer-radar-lists')
// console.log(panelLayerRadarlists, "______panelLayerRadarlists");

//EXPOSURE
let panelLayerExposureTitle = document.querySelector('#exposure-layers-Title')
let panelLayerExposureLists = document.querySelector('#exposure-layers-lists')

// metarTemp
let panelLayermetarTemp_Title = document.querySelector('#metarTemp-Title')
let panelLayermetarTemp_lists = document.querySelector('#metarTemp-lists')

// metarDewPoint
let panelLayermetarDewPoint_Title = document.querySelector('#metarDewPoint-Title')
let panelLayermetarDewPoint_lists = document.querySelector('#metarDewPoint-lists')

// metarVisibility
let panelLayermetarVisibility_Title = document.querySelector('#metarVisibility-Title')
let panelLayermetarVisibility_lists = document.querySelector('#metarVisibility-lists')

// metarWindSpeedAndDirection
let panelLayermetarWindSpeedAndDirection_Title = document.querySelector('#metarWindSpeedAndDirection-Title')
let panelLayermetarWindSpeedAndDirection_lists = document.querySelector('#metarWindSpeedAndDirection-lists')

// synopTemp
let panelLayersynopTemp_Title = document.querySelector('#synopTemp-Title')
let panelLayersynopTemp_lists = document.querySelector('#synopTemp-lists')

// synopMeanSeaLevel
let panelLayersynopMeanSeaLevel_Title = document.querySelector('#synopMeanSeaLevel-Title')
let panelLayersynopMeanSeaLevel_lists = document.querySelector('#synopMeanSeaLevel-lists')

// synopCloudCover
let panelLayersynopCloudCover_Title = document.querySelector('#synopCloudCover-Title')
let panelLayersynopCloudCover_lists = document.querySelector('#synopCloudCover-lists')

// synopGeopotentialHeight
let panelLayersynopGeopotentialHeight_Title = document.querySelector('#synopGeopotentialHeight-Title')
let panelLayersynopGeopotentialHeight_lists = document.querySelector('#synopGeopotentialHeight-lists')

// synopRelativeHumidity
let panelLayersynopRelativeHumidity_Title = document.querySelector('#synopRelativeHumidity-Title')
let panelLayersynopRelativeHumidity_lists = document.querySelector('#synopRelativeHumidity-lists')

// synopVisibility
let panelLayersynopVisibility_Title = document.querySelector('#synopVisibility-Title')
let panelLayersynopVisibility_lists = document.querySelector('#synopVisibility-lists')

// synopWindSpeedAndDirection
let panelLayersynopWindSpeedAndDirection_Title = document.querySelector('#synopWindSpeedAndDirection-Title')
let panelLayersynopWindSpeedAndDirection_lists = document.querySelector('#synopWindSpeedAndDirection-lists')

// synop3hRainfall
let panelLayersynop3hRainfall_Title = document.querySelector('#synop3hRainfall-Title')
let panelLayersynop3hRainfall_lists = document.querySelector('#synop3hRainfall-lists')
// lector('#SYNOP21UTC-lists')

// Radar
let panelLayerRADARPRODUCTS_Title = document.querySelector('#RADARPRODUCTS-Title')
let panelLayerRADARPRODUCTS_lists = document.querySelector('#RADARPRODUCTS-lists')

// SATELLITE
let panelLayerSATELLITE_Title = document.querySelector('#SATELLITE-Title')
let panelLayerSATELLITE_lists = document.querySelector('#SATELLITE-lists')

// LIGHTINING
let panelLayerLIGHTINING_Title = document.querySelector('#LIGHTINING-Title')
let panelLayerLIGHTINING_lists = document.querySelector('#LIGHTINING-lists')

// SOUNDING
let panelLayerSOUNDING00UTCWIND_Title = document.querySelector('#SOUNDING00UTCWIND-Title')
let panelLayerSOUNDING00UTCWIND_lists = document.querySelector('#SOUNDING00UTCWIND-lists')

let panelLayerSOUNDING12UTCWIND_Title = document.querySelector('#SOUNDING12UTCWIND-Title')
let panelLayerSOUNDING12UTCWIND_lists = document.querySelector('#SOUNDING12UTCWIND-lists')

let panelLayerSOUNDING00UTCTEMP_Title = document.querySelector('#SOUNDING00UTCTEMP-Title')
let panelLayerSOUNDING00UTCTEMP_lists = document.querySelector('#SOUNDING00UTCTEMP-lists')

let panelLayerSOUNDING12UTCTEMP_Title = document.querySelector('#SOUNDING12UTCTEMP-Title')
let panelLayerSOUNDING12UTCTEMP_lists = document.querySelector('#SOUNDING12UTCTEMP-lists')

let panelLayerSOUNDING00UTCDEWPOINT_Title = document.querySelector('#SOUNDING00UTCDEWPOINT-Title')
let panelLayerSOUNDING00UTCDEWPOINT_lists = document.querySelector('#SOUNDING00UTCDEWPOINT-lists')

let panelLayerSOUNDING12UTCDEWPOINT_Title = document.querySelector('#SOUNDING12UTCDEWPOINT-Title')
let panelLayerSOUNDING12UTCDEWPOINT_lists = document.querySelector('#SOUNDING12UTCDEWPOINT-lists')

// SHIPANDBUOY
let panelLayerSHIPANDBUOY_Title = document.querySelector('#SHIPANDBUOY-Title')
let panelLayerSHIPANDBUOY_lists = document.querySelector('#SHIPANDBUOY-lists')

// MESOLSCALE
let panelLayerWRFReflectivity_Title = document.querySelector('#WRFReflectivity-Title')
let panelLayerWRFReflectivity_lists = document.querySelector('#WRFReflectivity-lists')

let panelLayerWRFlightningProduct_Title = document.querySelector('#WRFlightningProduct-Title')
let panelLayerWRFlightningProduct_lists = document.querySelector('#WRFlightningProduct-lists')

let panelLayerWRFAccumlatedRainfall_Title = document.querySelector('#WRFAccumlatedRainfall-Title')
let panelLayerWRFAccumlatedRainfall_lists = document.querySelector('#WRFAccumlatedRainfall-lists')

let panelLayerlightningPotentialindex_Title = document.querySelector('#lightningPotentialindex-Title')
let panelLayerlightningPotentialindex_lists = document.querySelector('#lightningPotentialindex-lists')

let panelLayerNCUMRlightningProduct_Title = document.querySelector('#NCUMRlightningProduct-Title')
let panelLayerNCUMRlightningProduct_lists = document.querySelector('#NCUMRlightningProduct-lists')

let panelLayerWRFNCUMRlightningProduct_Title = document.querySelector('#WRFNCUMRlightningProduct-Title')
let panelLayerWRFNCUMRlightningProduct_lists = document.querySelector('#WRFNCUMRlightningProduct-lists')

let panelLayerNCUMRWindGust_Title = document.querySelector('#NCUMRWindGust-Title')
let panelLayerNCUMRWindGust_lists = document.querySelector('#NCUMRWindGust-lists')

let panelLayerNCUMRRainfall_Title = document.querySelector('#NCUMRRainfall-Title')
let panelLayerNCUMRRainfall_lists = document.querySelector('#NCUMRRainfall-lists')

let panelLayerHRRR_SPHourlyDBZ_Title = document.querySelector('#HRRR_SPHourlyDBZ-Title')
let panelLayerHRRR_SPHourlyDBZ_lists = document.querySelector('#HRRR_SPHourlyDBZ-lists')

let panelLayerHRRR_NEHourlyDBZ_Title = document.querySelector('#HRRR_NEHourlyDBZ-Title')
let panelLayerHRRR_NEHourlyDBZ_lists = document.querySelector('#HRRR_NEHourlyDBZ-lists')

let panelLayerHRRR_NWHourlyDBZ_Title = document.querySelector('#HRRR_NWHourlyDBZ-Title')
let panelLayerHRRR_NWHourlyDBZ_lists = document.querySelector('#HRRR_NWHourlyDBZ-lists')

let panelLayerEWRFMaxZ_Title = document.querySelector('#EWRFMaxZ-Title')
let panelLayerEWRFMaxZ_lists = document.querySelector('#EWRFMaxZ-lists')

let panelLayerEWRFLightning_Title = document.querySelector('#EWRFLightning-Title')
let panelLayerEWRFLightning_lists = document.querySelector('#EWRFLightning-lists')

// MEDIUM
let panelLayerRainfallIntensityDay1_Title = document.querySelector('#RainfallIntensityDay1-Title')
let panelLayerRainfallIntensityDay1_lists = document.querySelector('#RainfallIntensityDay1-lists')

let panelLayerRainfallIntensityDay2_Title = document.querySelector('#RainfallIntensityDay2-Title')
let panelLayerRainfallIntensityDay2_lists = document.querySelector('#RainfallIntensityDay2-lists')

let panelLayerRainfallIntensityDay3_Title = document.querySelector('#RainfallIntensityDay3-Title')
let panelLayerRainfallIntensityDay3_lists = document.querySelector('#RainfallIntensityDay3-lists')

let panelLayerRainfallIntensityDay4_Title = document.querySelector('#RainfallIntensityDay4-Title')
let panelLayerRainfallIntensityDay4_lists = document.querySelector('#RainfallIntensityDay4-lists')

let panelLayerRainfallIntensityDay5_Title = document.querySelector('#RainfallIntensityDay5-Title')
let panelLayerRainfallIntensityDay5_lists = document.querySelector('#RainfallIntensityDay5-lists')

let panelLayerMSLPDay1_Title = document.querySelector('#MSLPDay1-Title')
let panelLayerMSLPDay1_lists = document.querySelector('#MSLPDay1-lists')

let panelLayerMSLPDay2_Title = document.querySelector('#MSLPDay2-Title')
let panelLayerMSLPDay2_lists = document.querySelector('#MSLPDay2-lists')

let panelLayerMSLPDay3_Title = document.querySelector('#MSLPDay3-Title')
let panelLayerMSLPDay3_lists = document.querySelector('#MSLPDay3-lists')

let panelLayerMSLPDay4_Title = document.querySelector('#MSLPDay4-Title')
let panelLayerMSLPDay4_lists = document.querySelector('#MSLPDay4-lists')

let panelLayerMSLPDay5_Title = document.querySelector('#MSLPDay5-Title')
let panelLayerMSLPDay5_lists = document.querySelector('#MSLPDay5-lists')

let panelLayer10mWINDDay1_Title = document.querySelector('#mWINDDay1-Title')
let panelLayer10mWINDDay1_lists = document.querySelector('#mWINDDay1-lists')

let panelLayer10mWINDDay2_Title = document.querySelector('#mWINDDay2-Title')
let panelLayer10mWINDDay2_lists = document.querySelector('#mWINDDay2-lists')

let panelLayer10mWINDDay3_Title = document.querySelector('#mWINDDay3-Title')
let panelLayer10mWINDDay3_lists = document.querySelector('#mWINDDay3-lists')

let panelLayer10mWINDDay4_Title = document.querySelector('#mWINDDay4-Title')
let panelLayer10mWINDDay4_lists = document.querySelector('#mWINDDay4-lists')

let panelLayer10mWINDDay5_Title = document.querySelector('#mWINDDay5-Title')
let panelLayer10mWINDDay5_lists = document.querySelector('#mWINDDay5-lists')


document.querySelectorAll('#popup').forEach(function(openModel) {
    // console.log(openModel, "__openModel");
    openModel.onclick = () => {
        console.log("openModel working!!!");
        model.style.display = 'block';
    }
});
//
let clickedLightningLists = [];
let clickedRadarLists = [];
let clickedExposureLists = [];

let clickedRADARPRODUCTSLists = [];

let clickedSATELLITELists = [];

let clickedLIGHTININGLists = [];

let clickedSOUNDING00UTCWINDLists = [];
let clickedSOUNDING12UTCWINDLists = [];
let clickedSOUNDING00UTCTEMPLists = [];
let clickedSOUNDING12UTCTEMPLists = [];
let clickedSOUNDING00UTCDEWPOINTLists = [];
let clickedSOUNDING12UTCDEWPOINTLists = [];

let clickedSHIPANDBUOYLists = [];

let clickedWRFReflectivityLists = [];
let clickedWRFlightningProductLists = [];
let clickedWRFAccumlatedRainfallLists = [];
let clickedlightningPotentialindexLists = [];
let clickedNCUMRlightningProductLists = [];
let clickedNCUMRWindGustLists = [];
let clickedNCUMRRainfallLists = [];
let clickedHRRR_SPHourlyDBZLists = [];
let clickedHRRR_NEHourlyDBZLists = [];
let clickedHRRR_NWHourlyDBZLists = [];
let clickedEWRFMaxZLists = [];
let clickedEWRFLightningLists = [];

let clickedRainfallIntensityDay1Lists = [];
let clickedRainfallIntensityDay2Lists = [];
let clickedRainfallIntensityDay3Lists = [];
let clickedRainfallIntensityDay4Lists = [];
let clickedRainfallIntensityDay5Lists = [];
let clickedMSLPDay1Lists = [];
let clickedMSLPDay2Lists = [];
let clickedMSLPDay3Lists = [];
let clickedMSLPDay4Lists = [];
let clickedMSLPDay5Lists = [];
let clicked10mWINDDay1Lists = [];
let clicked10mWINDDay2Lists = [];
let clicked10mWINDDay3Lists = [];
let clicked10mWINDDay4Lists = [];
let clicked10mWINDDay5Lists = [];


let clickedMetarTempLists = [];
let clickedMetarDewPointLists = [];
let clickedMetarVisibilityLists = [];
let clickedMetarWindSpeedAndDirectionLists = [];

let clickedSynopTempLists = [];
let clickedSynopMeanSeaLevelLists = [];
let clickedSynopCloudCoverLists = [];
let clickedSynopGeopotentialHeightLists = [];
let clickedSynopRelativeHumidityLists = [];
let clickedSynopVisibilityLists = [];
let clickedSynopWindSpeedAndDirectionLists = [];
let clickedSynop3hRainfallLists = [];



//Fn for exposure
function remove_layer_or_add(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log("if part");
        clickedExposureLists = clickedExposureLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });

        panelLayerExposureLists.innerHTML = clickedExposureLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        console.log("else part");
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

// METAR
//Fn for MetarTempLists
function remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log("if part,dominic");
        clickedMetarTempLists = clickedMetarTempLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });

        console.log(clickedMetarTempLists, "clickedMetarTempLists");
        panelLayermetarTemp_lists.innerHTML = clickedMetarTempLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        console.log("else part,dominic");
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

//Fn for MetarDWP
function removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        clickedMetarDewPointLists = clickedMetarDewPointLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayermetarDewPoint_lists.innerHTML = clickedMetarDewPointLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

//Fn for MetarVisi
function removeLayerOrAdd_MetarVisi(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        clickedMetarVisibilityLists = clickedMetarVisibilityLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayermetarVisibility_lists.innerHTML = clickedMetarVisibilityLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

//Fn for MetarWSD
function removeLayerOrAdd_MetarWSD(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        clickedMetarWindSpeedAndDirectionLists = clickedMetarWindSpeedAndDirectionLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayermetarWindSpeedAndDirection_lists.innerHTML = clickedMetarWindSpeedAndDirectionLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

// SYNOP
//Fn for SynopTempLists
function remOrAdSynopTempLists(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        clickedSynopTempLists = clickedSynopTempLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayersynopTemp_lists.innerHTML = clickedSynopTempLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

//Fn for SynopMeanSeaLevelLists
function remOrAdSynopMeanSeaLevel(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        clickedSynopMeanSeaLevelLists = clickedSynopMeanSeaLevelLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
        });
        panelLayersynopMeanSeaLevel_lists.innerHTML = clickedSynopMeanSeaLevelLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

//Fn for SynopCloudCoverLists
function remOrAdCloudCoverLists(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        clickedSynopCloudCoverLists = clickedSynopCloudCoverLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayersynopCloudCover_lists.innerHTML = clickedSynopCloudCoverLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

//Fn for SynopGeopotentialHeightLists
function remOrAdGeopotentialHeightLists(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        clickedSynopGeopotentialHeightLists = clickedSynopGeopotentialHeightLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayersynopGeopotentialHeight_lists.innerHTML = clickedSynopGeopotentialHeightLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

//Fn for SynopRelativeHumidityLists
function remOrAdRelativeHumidityLists(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        clickedSynopRelativeHumidityLists = clickedSynopRelativeHumidityLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayersynopRelativeHumidity_lists.innerHTML = clickedSynopRelativeHumidityLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

//Fn for SynopVisibilityLists
function remOrAdVisibilityLists(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        clickedSynopVisibilityLists = clickedSynopVisibilityLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayersynopVisibility_lists.innerHTML = clickedSynopVisibilityLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

//Fn for SynopWindSpeedAndDirectionLists
function remOrAdWindSpeedAndDirectionLists(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        clickedSynopWindSpeedAndDirectionLists = clickedSynopWindSpeedAndDirectionLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayersynopWindSpeedAndDirection_lists.innerHTML = clickedSynopWindSpeedAndDirectionLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

//Fn for Synop3hRainfallLists
function remOrAd3hRainfallLists(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        clickedSynop3hRainfallLists = clickedSynop3hRainfallLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayersynop3hRainfall_lists.innerHTML = clickedSynop3hRainfallLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

// SOUNDING
//Fn for Sounding_00UTC Wind
function remOrAdd_Sounding_00UTC_W(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log("if part,dominic");
        clickedSOUNDING00UTCWINDLists = clickedSOUNDING00UTCWINDLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayerSOUNDING00UTCWIND_lists.innerHTML = clickedSOUNDING00UTCWINDLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        console.log("else part,dominic");
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

//Fn for Sounding_12UTC Wind
function remOrAdd_Sounding_12UTC_W(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log("if part,works Sounding_12UTC");
        clickedSOUNDING12UTCWINDLists = clickedSOUNDING12UTCWINDLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayerSOUNDING12UTCWIND_lists.innerHTML = clickedSOUNDING12UTCWINDLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        console.log("else part,works Sounding_12UTC");
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

//Fn for Sounding_00UTC Temp
function remOrAdd_Sounding_00UTC_Temp(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        clickedSOUNDING00UTCTEMPLists = clickedSOUNDING00UTCTEMPLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayerSOUNDING00UTCTEMP_lists.innerHTML = clickedSOUNDING00UTCTEMPLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

//Fn for Sounding_12UTC Temp
function remOrAdd_Sounding_12UTC_Temp(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        clickedSOUNDING12UTCTEMPLists = clickedSOUNDING12UTCTEMPLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayerSOUNDING12UTCTEMP_lists.innerHTML = clickedSOUNDING12UTCTEMPLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

//Fn for Sounding_00UTC Dew Point
function remOrAdd_Sounding_00UTC_DP(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        clickedSOUNDING00UTCDEWPOINTLists = clickedSOUNDING00UTCDEWPOINTLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayerSOUNDING00UTCDEWPOINT_lists.innerHTML = clickedSOUNDING00UTCDEWPOINTLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

//Fn for Sounding_12UTC Dew Point
function remOrAdd_Sounding_12UTC_DP(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        clickedSOUNDING12UTCDEWPOINTLists = clickedSOUNDING12UTCDEWPOINTLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayerSOUNDING12UTCDEWPOINT_lists.innerHTML = clickedSOUNDING12UTCDEWPOINTLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

// SnBO
//Fn for Ship and Buoy Observation
function remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log("if part");
        clickedSHIPANDBUOYLists = clickedSHIPANDBUOYLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayerSHIPANDBUOY_lists.innerHTML = clickedSHIPANDBUOYLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        console.log("else part");
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

// Radar
//Fn for Radar
function remove_layer_or_add_Radar(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        clickedRADARPRODUCTSLists = clickedRADARPRODUCTSLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayerRADARPRODUCTS_lists.innerHTML = clickedRADARPRODUCTSLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

// Satellite
//Fn for Satellite
function remove_layer_or_add_Sat(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        clickedSATELLITELists = clickedSATELLITELists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayerSATELLITE_lists.innerHTML = clickedSATELLITELists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

// Lightning
//Fn for Lightning
function remove_layer_or_add_Light(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log(_context_layer, "_context_layer,_context_layer");
        clickedLIGHTININGLists = clickedLIGHTININGLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayerLIGHTINING_lists.innerHTML = clickedLIGHTININGLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

// mesolscale
//Fn for WRF Reflectivity
function remLayOrAdclickedWRFRef(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log(_context_layer, "_context_layer,_context_layer");
        clickedWRFReflectivityLists = clickedWRFReflectivityLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayerWRFReflectivity_lists.innerHTML = clickedWRFReflectivityLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

//Fn for WRF Lightning Product
function remLayOrAdclickedWRF_lig_pro(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log(_context_layer, "_context_layer,_context_layer");
        clickedWRFlightningProductLists = clickedWRFlightningProductLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayerWRFlightningProduct_lists.innerHTML = clickedWRFlightningProductLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

//Fn for WRF Accumlated Rainfall
function remLayOrAdclickedWRF_acc_rain(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log(_context_layer, "_context_layer,_context_layer");
        clickedWRFAccumlatedRainfallLists = clickedWRFAccumlatedRainfallLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayerWRFAccumlatedRainfall_lists.innerHTML = clickedWRFAccumlatedRainfallLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

//Fn for Lightning Potential Index
function remLayOrAdclickedLig_pot(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log(_context_layer, "_context_layer,_context_layer");
        clickedlightningPotentialindexLists = clickedlightningPotentialindexLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayerlightningPotentialindex_lists.innerHTML = clickedlightningPotentialindexLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

//Fn for NCUMR Lightning Product
function remLayOrAdclickedLig_pro(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log(_context_layer, "_context_layer,_context_layer");
        clickedNCUMRlightningProductLists = clickedNCUMRlightningProductLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayerNCUMRlightningProduct_lists.innerHTML = clickedNCUMRlightningProductLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

//Fn for NCUMR Wind Gust
function remLayOrAdclickedNCUMR_WG(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log(_context_layer, "_context_layer,_context_layer");
        clickedNCUMRWindGustLists = clickedNCUMRWindGustLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayerNCUMRWindGust_lists.innerHTML = clickedNCUMRWindGustLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

//Fn for NCUMR Rainfall
function remLayOrAdclickedNCUMR_RF(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log(_context_layer, "_context_layer,_context_layer");
        clickedNCUMRRainfallLists = clickedNCUMRRainfallLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayerNCUMRRainfall_lists.innerHTML = clickedNCUMRRainfallLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

//Fn for HRRR_SP Hourly DBZ
function remLayOrAdclickedHRRR_DBZ(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log(_context_layer, "_context_layer,_context_layer");
        clickedHRRR_SPHourlyDBZLists = clickedHRRR_SPHourlyDBZLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayerHRRR_SPHourlyDBZ_lists.innerHTML = clickedHRRR_SPHourlyDBZLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

//Fn for HRRR_NE Hourly DBZ
function remLayOrAdclickedHRRR_NE_DBZ(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log(_context_layer, "_context_layer,_context_layer");
        clickedHRRR_NEHourlyDBZLists = clickedHRRR_NEHourlyDBZLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayerHRRR_NEHourlyDBZ_lists.innerHTML = clickedHRRR_NEHourlyDBZLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

//Fn for HRRR_NW Hourly DBZ
function remLayOrAdclickedHRRR_NW_DBZ(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log(_context_layer, "_context_layer,_context_layer");
        clickedHRRR_NWHourlyDBZLists = clickedHRRR_NWHourlyDBZLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayerHRRR_NWHourlyDBZ_lists.innerHTML = clickedHRRR_NWHourlyDBZLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

//Fn for HRRR_NW Hourly DBZ
function remLayOrAdclickedHRRR_NW_DBZ(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log(_context_layer, "_context_layer,_context_layer");
        clickedHRRR_NWHourlyDBZLists = clickedHRRR_NWHourlyDBZLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayerHRRR_NWHourlyDBZ_lists.innerHTML = clickedHRRR_NWHourlyDBZLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

//Fn for EWRF MaxZ
function remLayOrAdclickedEWRF_MaxZ(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log(_context_layer, "_context_layer,_context_layer");
        clickedEWRFMaxZLists = clickedEWRFMaxZLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayerEWRFMaxZ_lists.innerHTML = clickedEWRFMaxZLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

//Fn EWRF Lightning
function remLayOrAdclickedEWRF_Light(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log(_context_layer, "_context_layer,_context_layer");
        clickedEWRFLightningLists = clickedEWRFLightningLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayerEWRFLightning_lists.innerHTML = clickedEWRFLightningLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

// MediumRange
//Fn Rainfall Intensity Day1
function remLayOrAdclickedRI_Day1(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log(_context_layer, "_context_layer,_context_layer");
        clickedRainfallIntensityDay1Lists = clickedRainfallIntensityDay1Lists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayerRainfallIntensityDay1_lists.innerHTML = clickedRainfallIntensityDay1Lists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

// Rainfall Intensity Day2
function remLayOrAdclickedRI_Day2(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log(_context_layer, "_context_layer,_context_layer");
        clickedRainfallIntensityDay2Lists = clickedRainfallIntensityDay2Lists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayerRainfallIntensityDay2_lists.innerHTML = clickedRainfallIntensityDay2Lists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

// Rainfall Intensity Day3
function remLayOrAdclickedRI_Day3(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log(_context_layer, "_context_layer,_context_layer");
        clickedRainfallIntensityDay3Lists = clickedRainfallIntensityDay3Lists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayerRainfallIntensityDay3_lists.innerHTML = clickedRainfallIntensityDay3Lists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

// Rainfall Intensity Day4
function remLayOrAdclickedRI_Day4(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log(_context_layer, "_context_layer,_context_layer");
        clickedRainfallIntensityDay4Lists = clickedRainfallIntensityDay4Lists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayerRainfallIntensityDay4_lists.innerHTML = clickedRainfallIntensityDay4Lists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

// Rainfall Intensity Day5
function remLayOrAdclickedRI_Day5(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log(_context_layer, "_context_layer,_context_layer");
        clickedRainfallIntensityDay5Lists = clickedRainfallIntensityDay5Lists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayerRainfallIntensityDay5_lists.innerHTML = clickedRainfallIntensityDay5Lists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

//Fn MSLP Day1
function remLayOrAdclickedMSLP_Day1(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log(_context_layer, "_context_layer,_context_layer");
        clickedMSLPDay1Lists = clickedMSLPDay1Lists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayerMSLPDay1_lists.innerHTML = clickedMSLPDay1Lists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

// MSLP Day2
function remLayOrAdclickedMSLP_Day2(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log(_context_layer, "_context_layer,_context_layer");
        clickedMSLPDay2Lists = clickedMSLPDay2Lists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayerMSLPDay2_lists.innerHTML = clickedMSLPDay2Lists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

// MSLP Day3
function remLayOrAdclickedMSLP_Day3(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log(_context_layer, "_context_layer,_context_layer");
        clickedMSLPDay3Lists = clickedMSLPDay3Lists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayerMSLPDay3_lists.innerHTML = clickedMSLPDay3Lists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

// MSLP Day4
function remLayOrAdclickedMSLP_Day4(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log(_context_layer, "_context_layer,_context_layer");
        clickedMSLPDay4Lists = clickedMSLPDay4Lists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayerMSLPDay4_lists.innerHTML = clickedMSLPDay4Lists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

// MSLP Day5
function remLayOrAdclickedMSLP_Day5(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log(_context_layer, "_context_layer,_context_layer");
        clickedMSLPDay5Lists = clickedMSLPDay5Lists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayerMSLPDay5_lists.innerHTML = clickedMSLPDay5Lists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

//Fn 10m Wind Day1
function remLayOrAdclicked_10W_Day1(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log(_context_layer, "_context_layer,_context_layer");
        clicked10mWINDDay1Lists = clicked10mWINDDay1Lists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayer10mWINDDay1_lists.innerHTML = clicked10mWINDDay1Lists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

// 10m Wind Day2
function remLayOrAdclicked_10W_Day2(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log(_context_layer, "_context_layer,_context_layer");
        clicked10mWINDDay2Lists = clicked10mWINDDay2Lists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayer10mWINDDay2_lists.innerHTML = clicked10mWINDDay2Lists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

// 10m Wind Day3
function remLayOrAdclicked_10W_Day3(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log(_context_layer, "_context_layer,_context_layer");
        clicked10mWINDDay3Lists = clicked10mWINDDay3Lists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayer10mWINDDay3_lists.innerHTML = clicked10mWINDDay3Lists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

// 10m Wind Day4
function remLayOrAdclicked_10W_Day4(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log(_context_layer, "_context_layer,_context_layer");
        clicked10mWINDDay4Lists = clicked10mWINDDay4Lists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayer10mWINDDay4_lists.innerHTML = clicked10mWINDDay4Lists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

// 10m Wind Day5
function remLayOrAdclicked_10W_Day5(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log(_context_layer, "_context_layer,_context_layer");
        clicked10mWINDDay5Lists = clicked10mWINDDay5Lists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });
        panelLayer10mWINDDay5_lists.innerHTML = clicked10mWINDDay5Lists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}

var getLayer_name;

$("body").on("change", "input[type=checkbox]", function() {
    var _this = $(this);
    // console.log(_this, '_thiscgdghbg');
    var isChecked = _this.prop('checked');
    var layer_group_name = _this.context._layer ? _this.context._layer.group.name : '';
    // console.log(layer_group_name, "layer_group_name");
    var layer_name;
    // 
    if (isChecked) { // True
        console.log("Checked");

        layer_name = _this.context._layer ? _this.context._layer.name : _this.context.className;

        // console.log(layer_name, "layer_name,layer_name");

        var forExistLayer = _this.context._layer ? layer_group_name + ' ' + layer_name : _this.context
            .className;

        // console.log(forExistLayer, "forExistLayer,forExistLayer");

        var _class_name = _this.attr("class");
        console.log(_class_name, "_class_name,_class_name,11");

        if (_class_name == 'Exposure Layers District Boundaries') {
            // console.log(_class_name, "_class_name,_class_name,22");
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X144;
            remove_layer_or_add(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Exposure Layers Airport') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X121;
            remove_layer_or_add(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Exposure Layers Oil Refineries') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = exp_oil;
            remove_layer_or_add(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Exposure Layers Power Station') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = SolapurMarker;
            remove_layer_or_add(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Exposure Layers Power Plant') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = VijayapuraMarker;
            remove_layer_or_add(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Exposure Layers DEM') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X170;
            remove_layer_or_add(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Exposure Layers Hospital') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X171;
            remove_layer_or_add(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Exposure Layers Industrail') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X172;
            remove_layer_or_add(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Exposure Layers sports') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X173;
            remove_layer_or_add(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Exposure Layers Road Network') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X174;
            remove_layer_or_add(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Exposure Layers Socio Economic Zone') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X175;
            remove_layer_or_add(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Exposure Layers Railway Network') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X176;
            remove_layer_or_add(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Exposure Layers LULC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X177;
            remove_layer_or_add(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar00UTC-Temp
        if (_class_name == 'METAR 00UTC Temperature_00') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = met00utc_tem;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar00UTC-DPT
        if (_class_name == 'METAR 00UTC Dew Point Temperature_00') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X49;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar00UTC-Vis
        if (_class_name == 'METAR 00UTC Visibility_00') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X50;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar00UTC-Vis
        if (_class_name == 'METAR 00UTC Wind Speed and Direction_00') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = MeerutMarker;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //
        //METAR 01UTC-Temp
        if (_class_name == 'METAR 01UTC Temperature_01') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X63;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar01UTC-DPT
        if (_class_name == 'METAR 01UTC Dew Point Temperature_01') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X64;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar01UTC-Vis
        if (_class_name == 'METAR 01UTC Visibility_01') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X65;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar01UTC-Vis
        if (_class_name == 'METAR 01UTC Wind Speed and Direction_01') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X66;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //
        //METAR 02UTC-Temp
        if (_class_name == 'METAR 02UTC Temperature_02') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X67;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-02UTC-DPT
        if (_class_name == 'METAR 02UTC Dew Point Temperature_02') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X68;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-02UTC-Vis
        if (_class_name == 'METAR 02UTC Visibility_02') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X69;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-02UTC-WSAD
        if (_class_name == 'METAR 02UTC Wind Speed and Direction_02') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X70;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //
        //METAR 03UTC-Temp
        if (_class_name == 'METAR 03UTC Temperature_03') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X71;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-03UTC-DPT
        if (_class_name == 'METAR 03UTC Dew Point Temperature_03') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X72;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-03UTC-Vis
        if (_class_name == 'METAR 03UTC Visibility_03') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X73;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-03UTC-WSAD
        if (_class_name == 'METAR 03UTC Wind Speed and Direction_03') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X74;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //
        //METAR 04UTC-Temp
        if (_class_name == 'METAR 04UTC Temperature_04') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X75;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-04UTC-DPT
        if (_class_name == 'METAR 04UTC Dew Point Temperature_04') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X76;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-04UTC-Vis
        if (_class_name == 'METAR 04UTC Visibility_04') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X77;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-04UTC-WSAD
        if (_class_name == 'METAR 04UTC Wind Speed and Direction_04') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X78;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //
        //METAR 05UTC-Temp
        if (_class_name == 'METAR 05UTC Temperature_05') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X79;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-05UTC-DPT
        if (_class_name == 'METAR 05UTC Dew Point Temperature_05') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X80;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-05UTC-Vis
        if (_class_name == 'METAR 05UTC Visibility_05') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X81;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-05UTC-WSAD
        if (_class_name == 'METAR 05UTC Wind Speed and Direction_05') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X82;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //
        //METAR 06UTC-Temp
        if (_class_name == 'METAR 06UTC Temperature_06') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X83;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-06UTC-DPT
        if (_class_name == 'METAR 06UTC Dew Point Temperature_06') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X84;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-06UTC-Vis
        if (_class_name == 'METAR 06UTC Visibility_06') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X85;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-06UTC-WSAD
        if (_class_name == 'METAR 06UTC Wind Speed and Direction_06') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X86;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //
        //METAR 07UTC-Temp
        if (_class_name == 'METAR 07UTC Temperature_07') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X87;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-07UTC-DPT
        if (_class_name == 'METAR 07UTC Dew Point Temperature_07') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X88;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-07UTC-Vis
        if (_class_name == 'METAR 07UTC Visibility_07') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X89;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-07UTC-WSAD
        if (_class_name == 'METAR 07UTC Wind Speed and Direction_07') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X90;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //
        //METAR 08UTC-Temp
        if (_class_name == 'METAR 08UTC Temperature_08') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X91;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-08UTC-DPT
        if (_class_name == 'METAR 08UTC Dew Point Temperature_08') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X92;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-08UTC-Vis
        if (_class_name == 'METAR 08UTC Visibility_08') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X93;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-08UTC-WSAD
        if (_class_name == 'METAR 08UTC Wind Speed and Direction_08') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X94;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //
        //METAR 09UTC-Temp
        if (_class_name == 'METAR 09UTC Temperature_09') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X95;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-09UTC-DPT
        if (_class_name == 'METAR 09UTC Dew Point Temperature_09') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X96;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-09UTC-Vis
        if (_class_name == 'METAR 09UTC Visibility_09') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X97;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-09UTC-WSAD
        if (_class_name == 'METAR 09UTC Wind Speed and Direction_09') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X98;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //
        //METAR 10UTC-Temp
        if (_class_name == 'METAR 10UTC Temperature_10') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X99;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-10UTC-DPT
        if (_class_name == 'METAR 10UTC Dew Point Temperature_10') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X100;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-10UTC-Vis
        if (_class_name == 'METAR 10UTC Visibility_10') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X101;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-10UTC-WSAD
        if (_class_name == 'METAR 10UTC Wind Speed and Direction_10') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X102;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //
        //METAR 11UTC-Temp
        if (_class_name == 'METAR 11UTC Temperature_11') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X103;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-11UTC-DPT
        if (_class_name == 'METAR 11UTC Dew Point Temperature_11') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X104;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-11UTC-Vis
        if (_class_name == 'METAR 11UTC Visibility_11') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X105;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-11UTC-WSAD
        if (_class_name == 'METAR 11UTC Wind Speed and Direction_11') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X106;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //
        //METAR 12UTC-Temp
        if (_class_name == 'METAR 12UTC Temperature_12') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X107;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-12UTC-DPT
        if (_class_name == 'METAR 12UTC Dew Point Temperature_12') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X108;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-12UTC-Vis
        if (_class_name == 'METAR 12UTC Visibility_12') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X109;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-12UTC-WSAD
        if (_class_name == 'METAR 12UTC Wind Speed and Direction_12') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X110;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //
        //METAR 13UTC-Temp
        if (_class_name == 'METAR 13UTC Temperature_13') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X111;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-13UTC-DPT
        if (_class_name == 'METAR 13UTC Dew Point Temperature_13') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X112;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-13UTC-Vis
        if (_class_name == 'METAR 13UTC Visibility_13') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X113;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-13UTC-WSAD
        if (_class_name == 'METAR 13UTC Wind Speed and Direction_13') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X114;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //
        //METAR 14UTC-Temp
        if (_class_name == 'METAR 14UTC Temperature_14') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X115;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-14UTC-DPT
        if (_class_name == 'METAR 14UTC Dew Point Temperature_14') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X116;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-14UTC-Vis
        if (_class_name == 'METAR 14UTC Visibility_14') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X117;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-14UTC-WSAD
        if (_class_name == 'METAR 14UTC Wind Speed and Direction_14') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X118;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //
        //METAR 15UTC-Temp
        if (_class_name == 'METAR 15UTC Temperature_15') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X119;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-15UTC-DPT
        if (_class_name == 'METAR 15UTC Dew Point Temperature_15') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X120;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-15UTC-Vis
        if (_class_name == 'METAR 15UTC Visibility_15') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X121;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-15UTC-WSAD
        if (_class_name == 'METAR 15UTC Wind Speed and Direction_15') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X122;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //
        //METAR 16UTC-Temp
        if (_class_name == 'METAR 16UTC Temperature_16') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X123;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-16UTC-DPT
        if (_class_name == 'METAR 16UTC Dew Point Temperature_16') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X124;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-16UTC-Vis
        if (_class_name == 'METAR 16UTC Visibility_16') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X125;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-16UTC-WSAD
        if (_class_name == 'METAR 16UTC Wind Speed and Direction_16') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X126;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //
        //METAR 17UTC-Temp
        if (_class_name == 'METAR 17UTC Temperature_17') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X127;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-17UTC-DPT
        if (_class_name == 'METAR 17UTC Dew Point Temperature_17') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X128;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-17UTC-Vis
        if (_class_name == 'METAR 17UTC Visibility_17') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X129;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-17UTC-WSAD
        if (_class_name == 'METAR 17UTC Wind Speed and Direction_17') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X130;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //
        //METAR 18UTC-Temp
        if (_class_name == 'METAR 18UTC Temperature_18') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X131;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-18UTC-DPT
        if (_class_name == 'METAR 18UTC Dew Point Temperature_18') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X132;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-18UTC-Vis
        if (_class_name == 'METAR 18UTC Visibility_18') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X133;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-18UTC-WSAD
        if (_class_name == 'METAR 18UTC Wind Speed and Direction_18') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X134;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //
        //METAR 19UTC-Temp
        if (_class_name == 'METAR 19UTC Temperature_19') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X135;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-19UTC-DPT
        if (_class_name == 'METAR 19UTC Dew Point Temperature_19') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X136;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-19UTC-Vis
        if (_class_name == 'METAR 19UTC Visibility_19') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X137;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-19UTC-WSAD
        if (_class_name == 'METAR 19UTC Wind Speed and Direction_19') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X138;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //
        //METAR 20UTC-Temp
        if (_class_name == 'METAR 20UTC Temperature_20') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X139;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-20UTC-DPT
        if (_class_name == 'METAR 20UTC Dew Point Temperature_20') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X140;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-20UTC-Vis
        if (_class_name == 'METAR 20UTC Visibility_20') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X141;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-20UTC-WSAD
        if (_class_name == 'METAR 20UTC Wind Speed and Direction_20') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X142;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //
        //METAR 21UTC-Temp
        if (_class_name == 'METAR 21UTC Temperature_21') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X143;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-21UTC-DPT
        if (_class_name == 'METAR 21UTC Dew Point Temperature_21') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X144;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-21UTC-Vis
        if (_class_name == 'METAR 21UTC Visibility_21') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X145;
            removeLayerOrAdd_MetarVisi(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-21UTC-WSAD
        if (_class_name == 'METAR 21UTC Wind Speed and Direction_21') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X146;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //
        //METAR 22UTC-Temp
        if (_class_name == 'METAR 22UTC Temperature_22') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X147;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-22UTC-DPT
        if (_class_name == 'METAR 22UTC Dew Point Temperature_22') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X148;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-22UTC-Vis
        if (_class_name == 'METAR 22UTC Visibility_22') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X149;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-22UTC-WSAD
        if (_class_name == 'METAR 22UTC Wind Speed and Direction_22') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X150;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //
        //METAR 23UTC-Temp
        if (_class_name == 'METAR 23UTC Temperature_23') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X151;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-23UTC-DPT
        if (_class_name == 'METAR 23UTC Dew Point Temperature_23') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X152;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-23UTC-Vis
        if (_class_name == 'METAR 23UTC Visibility_23') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X153;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Metar-23UTC-WSAD
        if (_class_name == 'METAR 23UTC Wind Speed and Direction_23') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X154;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        // SYNOP
        //SYNOP 00UTC Temp
        if (_class_name == 'SYNOP 00UTC Temperature_00') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = syn00utc_tem;
            remOrAdSynopTempLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 00UTC MSLP
        if (_class_name == 'SYNOP 00UTC Mean Sea Level Pressure_00') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = HHHHHH;
            remOrAdSynopMeanSeaLevel(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 00UTC CC
        if (_class_name == 'SYNOP 00UTC Cloud Cover_00') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X1;
            remOrAdCloudCoverLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 00UTC GH
        if (_class_name == 'SYNOP 00UTC Geopotential Height_00') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X2;
            remOrAdGeopotentialHeightLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 00UTC RH
        if (_class_name == 'SYNOP 00UTC Relative Humidity_00') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X3;
            remOrAdRelativeHumidityLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 00UTC V
        if (_class_name == 'SYNOP 00UTC Visibility_00') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X4;
            remOrAdVisibilityLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 00UTC V
        if (_class_name == 'SYNOP 00UTC Wind Speed and Direction_00') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X5;
            remOrAdWindSpeedAndDirectionLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 00UTC 3h
        if (_class_name == 'SYNOP 00UTC 3h Rainfall_00') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X6;
            remOrAd3hRainfallLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        // 03UTC
        //SYNOP 03UTC Temp
        if (_class_name == 'SYNOP 03UTC Temperature_03') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X7;
            remOrAdSynopTempLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 03UTC MSLP
        if (_class_name == 'SYNOP 03UTC Mean Sea Level Pressure_03') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X8;
            remOrAdSynopMeanSeaLevel(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 03UTC CC
        if (_class_name == 'SYNOP 03UTC Cloud Cover_03') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X9;
            remOrAdCloudCoverLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 03UTC GH
        if (_class_name == 'SYNOP 03UTC Geopotential Height_03') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X10;
            remOrAdGeopotentialHeightLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 03UTC RH
        if (_class_name == 'SYNOP 03UTC Relative Humidity_03') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X11;
            remOrAdRelativeHumidityLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 03UTC V
        if (_class_name == 'SYNOP 03UTC Visibility_03') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X12;
            remOrAdVisibilityLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 03UTC V
        if (_class_name == 'SYNOP 03UTC Wind Speed and Direction_03') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X13;
            remOrAdWindSpeedAndDirectionLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 03UTC 3h
        if (_class_name == 'SYNOP 03UTC 3h Rainfall_03') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X14;
            remOrAd3hRainfallLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        // 06UTC
        //SYNOP 06UTC Temp
        if (_class_name == 'SYNOP 06UTC Temperature_06') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X15;
            remOrAdSynopTempLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 06UTC MSLP
        if (_class_name == 'SYNOP 06UTC Mean Sea Level Pressure_06') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X16;
            remOrAdSynopMeanSeaLevel(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 06UTC CC
        if (_class_name == 'SYNOP 06UTC Cloud Cover_06') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X17;
            remOrAdCloudCoverLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 06UTC GH
        if (_class_name == 'SYNOP 06UTC Geopotential Height_06') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X18;
            remOrAdGeopotentialHeightLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 06UTC RH
        if (_class_name == 'SYNOP 06UTC Relative Humidity_06') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X19;
            remOrAdRelativeHumidityLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 06UTC V
        if (_class_name == 'SYNOP 06UTC Visibility_06') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X20;
            remOrAdVisibilityLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 06UTC V
        if (_class_name == 'SYNOP 06UTC Wind Speed and Direction_06') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X21;
            remOrAdWindSpeedAndDirectionLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 06UTC 3h
        if (_class_name == 'SYNOP 06UTC 3h Rainfall_06') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X22;
            remOrAd3hRainfallLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        // 09UTC
        //SYNOP 09UTC Temp
        if (_class_name == 'SYNOP 09UTC Temperature_09') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X23;
            remOrAdSynopTempLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 09UTC MSLP
        if (_class_name == 'SYNOP 09UTC Mean Sea Level Pressure_09') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X24;
            remOrAdSynopMeanSeaLevel(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 09UTC CC
        if (_class_name == 'SYNOP 09UTC Cloud Cover_09') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X25;
            remOrAdCloudCoverLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 09UTC GH
        if (_class_name == 'SYNOP 09UTC Geopotential Height_09') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X26;
            remOrAdGeopotentialHeightLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 09UTC RH
        if (_class_name == 'SYNOP 09UTC Relative Humidity_09') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X27;
            remOrAdRelativeHumidityLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 09UTC V
        if (_class_name == 'SYNOP 09UTC Visibility_09') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X28;
            remOrAdVisibilityLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 09UTC V
        if (_class_name == 'SYNOP 09UTC Wind Speed and Direction_09') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X29;
            remOrAdWindSpeedAndDirectionLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 09UTC 3h
        if (_class_name == 'SYNOP 09UTC 3h Rainfall_09') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X30;
            remOrAd3hRainfallLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        // 12UTC
        //SYNOP 12UTC Temp
        if (_class_name == 'SYNOP 12UTC Temperature_12') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X31;
            remOrAdSynopTempLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 12UTC MSLP
        if (_class_name == 'SYNOP 12UTC Mean Sea Level Pressure_12') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X32;
            remOrAdSynopMeanSeaLevel(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 12UTC CC
        if (_class_name == 'SYNOP 12UTC Cloud Cover_12') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X33;
            remOrAdCloudCoverLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 12UTC GH
        if (_class_name == 'SYNOP 12UTC Geopotential Height_12') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X34;
            remOrAdGeopotentialHeightLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 12UTC RH
        if (_class_name == 'SYNOP 12UTC Relative Humidity_12') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X35;
            remOrAdRelativeHumidityLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 12UTC V
        if (_class_name == 'SYNOP 12UTC Visibility_12') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X36;
            remOrAdVisibilityLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 12UTC V
        if (_class_name == 'SYNOP 12UTC Wind Speed and Direction_12') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X37;
            remOrAdWindSpeedAndDirectionLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 12UTC 3h
        if (_class_name == 'SYNOP 12UTC 3h Rainfall_12') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X38;
            remOrAd3hRainfallLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        // 15UTC
        //SYNOP 15UTC Temp
        if (_class_name == 'SYNOP 15UTC Temperature_15') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X39;
            remOrAdSynopTempLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 15UTC MSLP
        if (_class_name == 'SYNOP 15UTC Mean Sea Level Pressure_15') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X40;
            remOrAdSynopMeanSeaLevel(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 15UTC CC
        if (_class_name == 'SYNOP 15UTC Cloud Cover_15') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X41;
            remOrAdCloudCoverLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 15UTC GH
        if (_class_name == 'SYNOP 15UTC Geopotential Height_15') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X42;
            remOrAdGeopotentialHeightLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 15UTC RH
        if (_class_name == 'SYNOP 15UTC Relative Humidity_15') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X43;
            remOrAdRelativeHumidityLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 15UTC V
        if (_class_name == 'SYNOP 15UTC Visibility_15') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X44;
            remOrAdVisibilityLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 15UTC V
        if (_class_name == 'SYNOP 15UTC Wind Speed and Direction_15') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X45;
            remOrAdWindSpeedAndDirectionLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 15UTC 3h
        if (_class_name == 'SYNOP 15UTC 3h Rainfall_15') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X46;
            remOrAd3hRainfallLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        // 18UTC
        //SYNOP 18UTC Temp
        if (_class_name == 'SYNOP 18UTC Temperature_18') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X47;
            remOrAdSynopTempLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 18UTC MSLP
        if (_class_name == 'SYNOP 18UTC Mean Sea Level Pressure_18') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X48;
            remOrAdSynopMeanSeaLevel(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 18UTC CC
        if (_class_name == 'SYNOP 18UTC Cloud Cover_18') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X49;
            remOrAdCloudCoverLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 18UTC GH
        if (_class_name == 'SYNOP 18UTC Geopotential Height_18') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X50;
            remOrAdGeopotentialHeightLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 18UTC RH
        if (_class_name == 'SYNOP 18UTC Relative Humidity_18') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X51;
            remOrAdRelativeHumidityLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 18UTC V
        if (_class_name == 'SYNOP 18UTC Visibility_18') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X52;
            remOrAdVisibilityLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 18UTC V
        if (_class_name == 'SYNOP 18UTC Wind Speed and Direction_18') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X53;
            remOrAdWindSpeedAndDirectionLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 18UTC 3h
        if (_class_name == 'SYNOP 18UTC 3h Rainfall_18') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X54;
            remOrAd3hRainfallLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        // 21UTC
        //SYNOP 21UTC Temp
        if (_class_name == 'SYNOP 21UTC Temperature_21') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X55;
            remOrAdSynopTempLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 21UTC MSLP
        if (_class_name == 'SYNOP 21UTC Mean Sea Level Pressure_21') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X56;
            remOrAdSynopMeanSeaLevel(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 21UTC CC
        if (_class_name == 'SYNOP 21UTC Cloud Cover_21') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X57;
            remOrAdCloudCoverLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 21UTC GH
        if (_class_name == 'SYNOP 21UTC Geopotential Height_21') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X58;
            remOrAdGeopotentialHeightLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 21UTC RH
        if (_class_name == 'SYNOP 21UTC Relative Humidity_21') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X59;
            remOrAdRelativeHumidityLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 21UTC V
        if (_class_name == 'SYNOP 21UTC Visibility_21') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X60;
            remOrAdVisibilityLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 21UTC V
        if (_class_name == 'SYNOP 21UTC Wind Speed and Direction_21') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X61;
            remOrAdWindSpeedAndDirectionLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //SYNOP 21UTC 3h
        if (_class_name == 'SYNOP 21UTC 3h Rainfall_21') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X62;
            remOrAd3hRainfallLists(_context_layer, _layer_to_remove_add, uncheckLayer);
        }




        //
        //Sounding_00UTC Wind 
        if (_class_name == 'Sounding_00UTC Wind 1000 hPa Wind') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X178;
            remOrAdd_Sounding_00UTC_W(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_00UTC Wind 850 hPa Wind') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X179;
            remOrAdd_Sounding_00UTC_W(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_00UTC Wind 700 hPa Wind') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X180;
            remOrAdd_Sounding_00UTC_W(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_00UTC Wind 500 hPa Wind') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X181;
            remOrAdd_Sounding_00UTC_W(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_00UTC Wind 300 hPa Wind') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X182;
            remOrAdd_Sounding_00UTC_W(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_00UTC Wind 200 hPa Wind') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X183;
            remOrAdd_Sounding_00UTC_W(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_00UTC Wind 100 hPa Wind') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X184;
            remOrAdd_Sounding_00UTC_W(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_00UTC Wind 50 hPa Wind') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X185;
            remOrAdd_Sounding_00UTC_W(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //
        //SOUNDING_12_UTC Wind
        if (_class_name == 'Sounding_12UTC Wind 1000 hPa Wind') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X186;
            remOrAdd_Sounding_12UTC_W(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_12UTC Wind 850 hPa Wind') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X187;
            remOrAdd_Sounding_12UTC_W(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_12UTC Wind 700 hPa Wind') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X188;
            remOrAdd_Sounding_12UTC_W(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_12UTC Wind 500 hPa Wind') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X189;
            remOrAdd_Sounding_12UTC_W(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_12UTC Wind 300 hPa Wind') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X190;
            remOrAdd_Sounding_12UTC_W(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_12UTC Wind 200 hPa Wind') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X191;
            remOrAdd_Sounding_12UTC_W(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_12UTC Wind 100 hPa Wind') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X192;
            remOrAdd_Sounding_12UTC_W(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_12UTC Wind 50 hPa Wind') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X193;
            remOrAdd_Sounding_12UTC_W(_context_layer, _layer_to_remove_add, uncheckLayer);
        }


        //
        //Sounding_00UTC Temp
        if (_class_name == 'Sounding_00UTC Temp 1000 hPa Temp') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X194;
            remOrAdd_Sounding_00UTC_Temp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_00UTC Temp 850 hPa Temp') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X195;
            remOrAdd_Sounding_00UTC_Temp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_00UTC Temp 700 hPa Temp') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X196;
            remOrAdd_Sounding_00UTC_Temp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_00UTC Temp 500 hPa Temp') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X197;
            remOrAdd_Sounding_00UTC_Temp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_00UTC Temp 300 hPa Temp') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X198;
            remOrAdd_Sounding_00UTC_Temp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_00UTC Temp 200 hPa Temp') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X199;
            remOrAdd_Sounding_00UTC_Temp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_00UTC Temp 100 hPa Temp') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X200;
            remOrAdd_Sounding_00UTC_Temp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_00UTC Temp 50 hPa Temp') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X201;
            remOrAdd_Sounding_00UTC_Temp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Sounding_12UTC Temp
        if (_class_name == 'Sounding_12UTC Temp 1000 hPa Temp') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X202;
            remOrAdd_Sounding_12UTC_Temp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_12UTC Temp 850 hPa Temp') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X203;
            remOrAdd_Sounding_12UTC_Temp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_12UTC Temp 700 hPa Temp') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X204;
            remOrAdd_Sounding_12UTC_Temp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_12UTC Temp 500 hPa Temp') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X205;
            remOrAdd_Sounding_12UTC_Temp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_12UTC Temp 300 hPa Temp') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X206;
            remOrAdd_Sounding_12UTC_Temp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_12UTC Temp 200 hPa Temp') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X207;
            remOrAdd_Sounding_12UTC_Temp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_12UTC Temp 100 hPa Temp') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X208;
            remOrAdd_Sounding_12UTC_Temp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_12UTC Temp 50 hPa Temp') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X209;
            remOrAdd_Sounding_12UTC_Temp(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Sounding_00UTC Dew Point 
        if (_class_name == 'Sounding_00UTC Dew Point 1000 hPa Dew Point') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X208;
            remOrAdd_Sounding_00UTC_DP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_00UTC Dew Point 850 hPa Dew Point') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X209;
            remOrAdd_Sounding_00UTC_DP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_00UTC Dew Point 700 hPa Dew Point') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X210;
            remOrAdd_Sounding_00UTC_DP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_00UTC Dew Point 500 hPa Dew Point') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X211;
            remOrAdd_Sounding_00UTC_DP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_00UTC Dew Point 300 hPa Dew Point') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X212;
            remOrAdd_Sounding_00UTC_DP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_00UTC Dew Point 200 hPa Dew Point') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X213;
            remOrAdd_Sounding_00UTC_DP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_00UTC Dew Point 100 hPa Dew Point') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X214;
            remOrAdd_Sounding_00UTC_DP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_00UTC Dew Point 50 hPa Dew Point') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X215;
            remOrAdd_Sounding_00UTC_DP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Sounding_12UTC Dew Point 
        if (_class_name == 'Sounding_12UTC Dew Point 1000 hPa Dew Point') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X216;
            remOrAdd_Sounding_12UTC_DP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_12UTC Dew Point 850 hPa Dew Point') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X217;
            remOrAdd_Sounding_12UTC_DP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_12UTC Dew Point 700 hPa Dew Point') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X218;
            remOrAdd_Sounding_12UTC_DP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_12UTC Dew Point 500 hPa Dew Point') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X219;
            remOrAdd_Sounding_12UTC_DP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_12UTC Dew Point 300 hPa Dew Point') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X220;
            remOrAdd_Sounding_12UTC_DP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_12UTC Dew Point 200 hPa Dew Point') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X221;
            remOrAdd_Sounding_12UTC_DP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_12UTC Dew Point 100 hPa Dew Point') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X222;
            remOrAdd_Sounding_12UTC_DP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Sounding_12UTC Dew Point 50 hPa Dew Point') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X223;
            remOrAdd_Sounding_12UTC_DP(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        // SHIPANDBUOY
        if (_class_name == 'Ship and Buoy Observation 00UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = ship_00utc;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Ship and Buoy Observation 01UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X225;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Ship and Buoy Observation 02UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X226;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Ship and Buoy Observation 03UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X227;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Ship and Buoy Observation 04UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X228;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Ship and Buoy Observation 05UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X229;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Ship and Buoy Observation 06UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X230;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Ship and Buoy Observation 07UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X231;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Ship and Buoy Observation 08UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X232;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Ship and Buoy Observation 09UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X233;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Ship and Buoy Observation 10UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X234;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Ship and Buoy Observation 11UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X235;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Ship and Buoy Observation 12UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X236;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Ship and Buoy Observation 13UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X237;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Ship and Buoy Observation 14UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X199;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Ship and Buoy Observation 15UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X238;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Ship and Buoy Observation 16UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X239;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Ship and Buoy Observation 17UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X240;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Ship and Buoy Observation 18UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X241;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Ship and Buoy Observation 19UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X242;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Ship and Buoy Observation 20UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X243;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Ship and Buoy Observation 21UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X244;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Ship and Buoy Observation 22UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X245;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Ship and Buoy Observation 23UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X246;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //
        // Radar
        if (_class_name == 'Radar Products Radar Reflectivity') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = rad_ref;
            remove_layer_or_add_Radar(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Radar Products Radar Animation') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X249;
            remove_layer_or_add_Radar(_context_layer, _layer_to_remove_add, uncheckLayer);
        }


        //
        // Satellite
        if (_class_name == 'Satellite Observation TIR1') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X157;
            remove_layer_or_add_Sat(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Satellite Observation VIS') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X158;
            remove_layer_or_add_Sat(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Satellite Observation CTBT') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X159;
            remove_layer_or_add_Sat(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Satellite Observation Low Level Convergence') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X160;
            remove_layer_or_add_Sat(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Satellite Observation Upper Level Divergence') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X161;
            remove_layer_or_add_Sat(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Satellite Observation Mid Level Shear') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X162;
            remove_layer_or_add_Sat(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Satellite Observation Vorticity at 200hPa') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X163;
            remove_layer_or_add_Sat(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Satellite Observation Vorticity at 500hPa') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X164;
            remove_layer_or_add_Sat(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Satellite Observation Vorticity at 700hPa') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X165;
            remove_layer_or_add_Sat(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Satellite Observation Vorticity at 850hPa') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X166;
            remove_layer_or_add_Sat(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        // 
        // Lightning
        if (_class_name == 'Lightning Last 00-05 min') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = mywmsIITM;
            remove_layer_or_add_Light(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Lightning Last 05-10 min') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = mywmsNcum;
            remove_layer_or_add_Light(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Lightning Last 10-15 min') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = mywmsNowcast;
            remove_layer_or_add_Light(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Lightning ILDN Last 05 min') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X1;
            remove_layer_or_add_Light(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_class_name == 'Lightning Nowcast Alerts') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X2;
            remove_layer_or_add_Light(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        // 
        // mesolscale
        // WRF Reflectivity
        if (_class_name == 'WRF Reflectivity WRF R Next 03 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X250;
            remLayOrAdclickedWRFRef(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'WRF Reflectivity WRF R Next 03-06 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X251;
            remLayOrAdclickedWRFRef(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        // WRF Lightining
        if (_class_name == 'WRF Lightning Product WRF LP Next 03 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X252;
            remLayOrAdclickedWRF_lig_pro(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'WRF Lightning Product WRF LP Next 03-06 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X253;
            remLayOrAdclickedWRF_lig_pro(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //WRF Accumlated Rainfall 
        if (_class_name == 'WRF Accumlated Rainfall WRF AR Next 03 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X254;
            remLayOrAdclickedWRF_acc_rain(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'WRF Accumlated Rainfall WRF AR Next 03-06 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X255;
            remLayOrAdclickedWRF_acc_rain(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Lightning Potential Index
        if (_class_name == 'Lightning Potential Index LP Next 01 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X256;
            remLayOrAdclickedLig_pot(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Lightning Potential Index LP Next 01-02 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X257;
            remLayOrAdclickedLig_pot(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Lightning Potential Index LP Next 02-03 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X258;
            remLayOrAdclickedLig_pot(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //NCUMR Lightning Product
        if (_class_name == 'NCUMR Lightning Product NCUMR LP Next 03 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X259;
            remLayOrAdclickedLig_pro(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'NCUMR Lightning Product NCUMR LP Next 03-06 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X260;
            remLayOrAdclickedLig_pro(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //NCUMR Lightning Product
        if (_class_name == 'NCUMR Wind Gust NCUMR WG Next 03 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X261;
            remLayOrAdclickedNCUMR_WG(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'NCUMR Wind Gust NCUMR WG Next 03-06 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X262;
            remLayOrAdclickedNCUMR_WG(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //NCUMR Rainfall
        if (_class_name == 'NCUMR Rainfall NCUMR R Next 03 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X5;
            remLayOrAdclickedNCUMR_RF(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'NCUMR Rainfall NCUMR R Next 03-06 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X263;
            remLayOrAdclickedNCUMR_RF(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //HRRR_SP Hourly DBZ
        if (_class_name == 'HRRR_SP Hourly DBZ HRRR SP Next 01 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X264;
            remLayOrAdclickedHRRR_DBZ(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'HRRR_SP Hourly DBZ HRRR SP Next 01-02 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X266;
            remLayOrAdclickedHRRR_DBZ(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'HRRR_SP Hourly DBZ HRRR SP Next 02-03 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X267;
            remLayOrAdclickedHRRR_DBZ(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //HRRR_SP Hourly DBZ
        if (_class_name == 'HRRR_NE Hourly DBZ HRRR NE Next 01 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X268;
            remLayOrAdclickedHRRR_NE_DBZ(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'HRRR_NE Hourly DBZ HRRR NE Next 01-02 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X269;
            remLayOrAdclickedHRRR_NE_DBZ(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'HRRR_NE Hourly DBZ HRRR NE Next 02-03 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X270;
            remLayOrAdclickedHRRR_NE_DBZ(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //HRRR_NW Hourly DBZ
        if (_class_name == 'HRRR_NW Hourly DBZ HRRR NW Next 01 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X271;
            remLayOrAdclickedHRRR_NW_DBZ(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'HRRR_NW Hourly DBZ HRRR NW Next 01-02 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X272;
            remLayOrAdclickedHRRR_NW_DBZ(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'HRRR_NW Hourly DBZ HRRR NW Next 02-03 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X273;
            remLayOrAdclickedHRRR_NW_DBZ(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //EWRF MaxZ
        if (_class_name == 'EWRF MaxZ EWRF M Next 01 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X274;
            remLayOrAdclickedEWRF_MaxZ(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'EWRF MaxZ EWRF M Next 01-02 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X275;
            remLayOrAdclickedEWRF_MaxZ(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'EWRF M Next 02-03 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X276;
            remLayOrAdclickedEWRF_MaxZ(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //EWRF Lightning
        if (_class_name == 'EWRF Lightning EWRF L Next 01 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X277;
            remLayOrAdclickedEWRF_Light(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'EWRF Lightning EWRF L Next 01-02 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X278;
            remLayOrAdclickedEWRF_Light(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'EWRF Lightning EWRF L Next 02-03 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X279;
            remLayOrAdclickedEWRF_Light(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        // MediumRange
        //Rainfall Intensity Day1
        if (_class_name == 'Rainfall Intensity Day1 RI GFS DAY1') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = med_gfs1;
            remLayOrAdclickedRI_Day1(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Rainfall Intensity Day1 RI NCUM Day1') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X281;
            remLayOrAdclickedRI_Day1(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Rainfall Intensity Day1 RI NEPS Day1') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X282;
            remLayOrAdclickedRI_Day1(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Rainfall Intensity Day1 RI WRF Day1') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X283;
            remLayOrAdclickedRI_Day1(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Rainfall Intensity Day1 RI GEFS Day1') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X284;
            remLayOrAdclickedRI_Day1(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Rainfall Intensity Day1 RI ECMWF Day1') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X285;
            remLayOrAdclickedRI_Day1(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Rainfall Intensity Day2
        if (_class_name == 'Rainfall Intensity Day2 RI GFS Day2') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X286;
            remLayOrAdclickedRI_Day2(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Rainfall Intensity Day2 RI NCUM Day2') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X289;
            remLayOrAdclickedRI_Day2(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Rainfall Intensity Day2 RI NEPS Day2') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X290;
            remLayOrAdclickedRI_Day2(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Rainfall Intensity Day2 RI WRF Day2') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X291;
            remLayOrAdclickedRI_Day2(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Rainfall Intensity Day2 RI GEFS Day2') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X292;
            remLayOrAdclickedRI_Day2(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Rainfall Intensity Day2 RI ECMWF Day2') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X293;
            remLayOrAdclickedRI_Day2(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Rainfall Intensity Day3
        if (_class_name == 'Rainfall Intensity Day3 RI GFS Day3') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X294;
            remLayOrAdclickedRI_Day3(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Rainfall Intensity Day3 RI NCUM Day3') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X295;
            remLayOrAdclickedRI_Day3(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Rainfall Intensity Day3 RI NEPS Day3') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X296;
            remLayOrAdclickedRI_Day3(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Rainfall Intensity Day3 RI WRF Day3') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X297;
            remLayOrAdclickedRI_Day3(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Rainfall Intensity Day3 RI GEFS Day3') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X298;
            remLayOrAdclickedRI_Day3(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Rainfall Intensity Day3 RI ECMWF Day3') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X299;
            remLayOrAdclickedRI_Day3(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Rainfall Intensity Day4
        if (_class_name == 'Rainfall Intensity Day4 RI GFS Day4') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X300;
            remLayOrAdclickedRI_Day4(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Rainfall Intensity Day4 RI NCUM Day4') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X301;
            remLayOrAdclickedRI_Day4(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Rainfall Intensity Day4 RI NEPS Day4') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X302;
            remLayOrAdclickedRI_Day4(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Rainfall Intensity Day4 RI GEFS Day4') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X303;
            remLayOrAdclickedRI_Day4(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Rainfall Intensity Day4 RI ECMWF Day4') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X304;
            remLayOrAdclickedRI_Day4(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //Rainfall Intensity Day5
        if (_class_name == 'Rainfall Intensity Day5 RI GFS Day5') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X305;
            remLayOrAdclickedRI_Day5(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Rainfall Intensity Day5 RI NCUM Day5') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X306;
            remLayOrAdclickedRI_Day5(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Rainfall Intensity Day5 RI NEPS Day5') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X307;
            remLayOrAdclickedRI_Day5(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Rainfall Intensity Day5 RI GEFS Day5') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X308;
            remLayOrAdclickedRI_Day5(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'Rainfall Intensity Day5 RI ECMWF Day5') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X309;
            remLayOrAdclickedRI_Day5(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //MSLP Day1
        if (_class_name == 'MSLP Day1 MSLP GFS Day1') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X310;
            remLayOrAdclickedMSLP_Day1(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'MSLP Day1 MSLP NCUM Day1') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X11;
            remLayOrAdclickedMSLP_Day1(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'MSLP Day1 MSLP NEPS Day1') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X12;
            remLayOrAdclickedMSLP_Day1(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'MSLP Day1 MSLP WRF Day1') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X13;
            remLayOrAdclickedMSLP_Day1(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'MSLP Day1 MSLP GEFS Day1') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X14;
            remLayOrAdclickedMSLP_Day1(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //MSLP Day2
        if (_class_name == 'MSLP Day2 MSLP GFS Day2') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X15;
            remLayOrAdclickedMSLP_Day2(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'MSLP Day2 MSLP NCUM Day2') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X16;
            remLayOrAdclickedMSLP_Day2(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'MSLP Day2 MSLP NEPS Day2') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X17;
            remLayOrAdclickedMSLP_Day2(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'MSLP Day2 MSLP WRF Day2') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X18;
            remLayOrAdclickedMSLP_Day2(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'MSLP Day2 MSLP GEFS Day2') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X19;
            remLayOrAdclickedMSLP_Day2(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //MSLP Day3
        if (_class_name == 'MSLP Day3 MSLP GFS Day3') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X20;
            remLayOrAdclickedMSLP_Day3(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'MSLP Day3 MSLP NCUM Day3') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X21;
            remLayOrAdclickedMSLP_Day3(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'MSLP Day3 MSLP NEPS Day3') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X22;
            remLayOrAdclickedMSLP_Day3(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'MSLP Day3 MSLP WRF Day3') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X23;
            remLayOrAdclickedMSLP_Day3(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'MSLP Day3 MSLP GEFS Day3') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X24;
            remLayOrAdclickedMSLP_Day3(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //MSLP Day4
        if (_class_name == 'MSLP Day4 MSLP GFS Day4') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X25;
            remLayOrAdclickedMSLP_Day4(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'MSLP Day4 MSLP NCUM Day4') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X26;
            remLayOrAdclickedMSLP_Day4(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'MSLP Day4 MSLP NEPS Day4') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X27;
            remLayOrAdclickedMSLP_Day4(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'MSLP Day4 MSLP GEFS Day4') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X28;
            remLayOrAdclickedMSLP_Day4(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //MSLP Day5
        if (_class_name == 'MSLP Day5 MSLP GFS Day5') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X29;
            remLayOrAdclickedMSLP_Day5(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'MSLP Day5 MSLP NCUM Day5') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X30;
            remLayOrAdclickedMSLP_Day5(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'MSLP Day5 MSLP NEPS Day5') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X31;
            remLayOrAdclickedMSLP_Day5(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == 'MSLP Day5 MSLP GEFS Day5') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X32;
            remLayOrAdclickedMSLP_Day5(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //10m Wind Day1
        if (_class_name == '10m Wind Day1 10m WIND GFS Day1') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X33;
            remLayOrAdclicked_10W_Day1(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == '10m Wind Day1 10m WIND NCUM Day1') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X34;
            remLayOrAdclicked_10W_Day1(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == '10m Wind Day1 10m WIND NEPS Day1') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X35;
            remLayOrAdclicked_10W_Day1(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == '10m Wind Day1 10m WIND WRF Day1') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X36;
            remLayOrAdclicked_10W_Day1(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == '10m Wind Day1 10m WIND GEFS Day1') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X37;
            remLayOrAdclicked_10W_Day1(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //10m Wind Day2
        if (_class_name == '10m Wind Day2 10m WIND GFS Day2') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X33;
            remLayOrAdclicked_10W_Day2(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == '10m Wind Day2 10m WIND NCUM Day2') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X38;
            remLayOrAdclicked_10W_Day2(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == '10m Wind Day2 10m WIND NEPS Day2') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X39;
            remLayOrAdclicked_10W_Day2(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == '10m Wind Day2 10m WIND WRF Day2') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X40;
            remLayOrAdclicked_10W_Day2(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == '10m Wind Day2 10m WIND GEFS Day2') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X41;
            remLayOrAdclicked_10W_Day2(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //10m Wind Day3
        if (_class_name == '10m Wind Day3 10m WIND GFS Day3') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X43;
            remLayOrAdclicked_10W_Day3(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == '10m Wind Day3 10m WIND NCUM Day3') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X44;
            remLayOrAdclicked_10W_Day3(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == '10m Wind Day3 10m WIND NEPS Day3') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = Airport;
            remLayOrAdclicked_10W_Day3(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == '10m Wind Day3 10m WIND WRF Day3') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X46;
            remLayOrAdclicked_10W_Day3(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == '10m Wind Day3 10m WIND GEFS Day3') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X47;
            remLayOrAdclicked_10W_Day3(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //10m Wind Day4
        if (_class_name == '10m Wind Day4 10m WIND GFS Day4') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X48;
            remLayOrAdclicked_10W_Day4(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == '10m Wind Day4 10m WIND NCUM Day4') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X49;
            remLayOrAdclicked_10W_Day4(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == '10m Wind Day4 10m WIND NEPS Day4') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X50;
            remLayOrAdclicked_10W_Day4(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == '10m Wind Day4 10m WIND GEFS Day4') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X51;
            remLayOrAdclicked_10W_Day4(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        //10m Wind Day5
        if (_class_name == '10m Wind Day5 10m WIND GFS Day5') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X52;
            remLayOrAdclicked_10W_Day5(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == '10m Wind Day5 10m WIND NCUM Day5') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X53;
            remLayOrAdclicked_10W_Day5(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == '10m Wind Day5 10m WIND NEPS Day5') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X54;
            remLayOrAdclicked_10W_Day5(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (_class_name == '10m Wind Day5 10m WIND GEFS Day5') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X55;
            remLayOrAdclicked_10W_Day5(_context_layer, _layer_to_remove_add, uncheckLayer);
        }











        //bgClickedExposureLists[]
        if (_this.context._layer?.group.name == "Exposure Layers") {
            if (layer_name == 'District Boundaries') {
                bgClickedExposureLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == 'Airport') {
                bgClickedExposureLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == 'Oil Refineries') {
                bgClickedExposureLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == 'Power Station') {
                bgClickedExposureLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == 'Power Plant') {
                bgClickedExposureLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == 'DEM') {
                bgClickedExposureLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == 'Hospital') {
                bgClickedExposureLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == 'Industrail') {
                bgClickedExposureLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == 'sports') {
                bgClickedExposureLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == 'Road Network') {
                bgClickedExposureLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == 'Socio Economic Zone') {
                bgClickedExposureLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == 'Railway Network') {
                bgClickedExposureLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == 'LULC') {
                bgClickedExposureLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            console.log(bgClickedExposureLists, "....bgClickedExposureLists");
        }

        //bgClicked METAR 00UTC[]
        if (_this.context._layer?.group.name == "METAR 00UTC") {
            if (layer_name == 'Temperature_00') {
                bgClickedMetarTempLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarTempLists, "....bgClickedMetarTempLists");
            }
            if (layer_name == 'Dew Point Temperature_00') {
                bgClickedMetarDewPointLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarDewPointLists, "....bgClickedMetarDewPointLists");
            }
            if (layer_name == 'Visibility_00') {
                bgClickedMetarVisibilityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarVisibilityLists, "....bgClickedMetarVisibilityLists");
            }
            if (layer_name == 'Wind Speed and Direction_00') {
                bgClickedMetarWindSpeedAndDirectionLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //bgClicked METAR 01UTC[]
        if (_this.context._layer?.group.name == "METAR 01UTC") {
            if (layer_name == 'Temperature_01') {
                bgClickedMetarTempLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarTempLists, "....bgClickedMetarTempLists");
            }
            if (layer_name == 'Dew Point Temperature_01') {
                bgClickedMetarDewPointLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarDewPointLists, "....bgClickedMetarDewPointLists");
            }
            if (layer_name == 'Visibility_01') {
                bgClickedMetarVisibilityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarVisibilityLists, "....bgClickedMetarVisibilityLists");
            }
            if (layer_name == 'Wind Speed and Direction_01') {
                bgClickedMetarWindSpeedAndDirectionLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //bgClicked METAR 02UTC[]
        if (_this.context._layer?.group.name == "METAR 02UTC") {
            if (layer_name == 'Temperature_02') {
                bgClickedMetarTempLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarTempLists, "....bgClickedMetarTempLists");
            }
            if (layer_name == 'Dew Point Temperature_02') {
                bgClickedMetarDewPointLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarDewPointLists, "....bgClickedMetarDewPointLists");
            }
            if (layer_name == 'Visibility_02') {
                bgClickedMetarVisibilityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarVisibilityLists, "....bgClickedMetarVisibilityLists");
            }
            if (layer_name == 'Wind Speed and Direction_02') {
                bgClickedMetarWindSpeedAndDirectionLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //bgClicked METAR 03UTC[]
        if (_this.context._layer?.group.name == "METAR 03UTC") {
            if (layer_name == 'Temperature_03') {
                bgClickedMetarTempLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarTempLists, "....bgClickedMetarTempLists");
            }
            if (layer_name == 'Dew Point Temperature_03') {
                bgClickedMetarDewPointLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarDewPointLists, "....bgClickedMetarDewPointLists");
            }
            if (layer_name == 'Visibility_03') {
                bgClickedMetarVisibilityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarVisibilityLists, "....bgClickedMetarVisibilityLists");
            }
            if (layer_name == 'Wind Speed and Direction_03') {
                bgClickedMetarWindSpeedAndDirectionLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //bgClicked METAR 04UTC[]
        if (_this.context._layer?.group.name == "METAR 04UTC") {
            if (layer_name == 'Temperature_04') {
                bgClickedMetarTempLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarTempLists, "....bgClickedMetarTempLists");
            }
            if (layer_name == 'Dew Point Temperature_04') {
                bgClickedMetarDewPointLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarDewPointLists, "....bgClickedMetarDewPointLists");
            }
            if (layer_name == 'Visibility_04') {
                bgClickedMetarVisibilityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarVisibilityLists, "....bgClickedMetarVisibilityLists");
            }
            if (layer_name == 'Wind Speed and Direction_04') {
                bgClickedMetarWindSpeedAndDirectionLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //bgClicked METAR 05UTC[]
        if (_this.context._layer?.group.name == "METAR 05UTC") {
            if (layer_name == 'Temperature_05') {
                bgClickedMetarTempLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarTempLists, "....bgClickedMetarTempLists");
            }
            if (layer_name == 'Dew Point Temperature_05') {
                bgClickedMetarDewPointLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarDewPointLists, "....bgClickedMetarDewPointLists");
            }
            if (layer_name == 'Visibility_05') {
                bgClickedMetarVisibilityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarVisibilityLists, "....bgClickedMetarVisibilityLists");
            }
            if (layer_name == 'Wind Speed and Direction_05') {
                bgClickedMetarWindSpeedAndDirectionLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //bgClicked METAR 06UTC[]
        if (_this.context._layer?.group.name == "METAR 06UTC") {
            if (layer_name == 'Temperature_06') {
                bgClickedMetarTempLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarTempLists, "....bgClickedMetarTempLists");
            }
            if (layer_name == 'Dew Point Temperature_06') {
                bgClickedMetarDewPointLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarDewPointLists, "....bgClickedMetarDewPointLists");
            }
            if (layer_name == 'Visibility_06') {
                bgClickedMetarVisibilityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarVisibilityLists, "....bgClickedMetarVisibilityLists");
            }
            if (layer_name == 'Wind Speed and Direction_06') {
                bgClickedMetarWindSpeedAndDirectionLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //bgClicked METAR 07UTC[]
        if (_this.context._layer?.group.name == "METAR 07UTC") {
            if (layer_name == 'Temperature_07') {
                bgClickedMetarTempLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarTempLists, "....bgClickedMetarTempLists");
            }
            if (layer_name == 'Dew Point Temperature_07') {
                bgClickedMetarDewPointLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarDewPointLists, "....bgClickedMetarDewPointLists");
            }
            if (layer_name == 'Visibility_07') {
                bgClickedMetarVisibilityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarVisibilityLists, "....bgClickedMetarVisibilityLists");
            }
            if (layer_name == 'Wind Speed and Direction_07') {
                bgClickedMetarWindSpeedAndDirectionLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //bgClicked METAR 08UTC[]
        if (_this.context._layer?.group.name == "METAR 08UTC") {
            if (layer_name == 'Temperature_08') {
                bgClickedMetarTempLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarTempLists, "....bgClickedMetarTempLists");
            }
            if (layer_name == 'Dew Point Temperature_08') {
                bgClickedMetarDewPointLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarDewPointLists, "....bgClickedMetarDewPointLists");
            }
            if (layer_name == 'Visibility_08') {
                bgClickedMetarVisibilityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarVisibilityLists, "....bgClickedMetarVisibilityLists");
            }
            if (layer_name == 'Wind Speed and Direction_08') {
                bgClickedMetarWindSpeedAndDirectionLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //bgClicked METAR 09UTC[]
        if (_this.context._layer?.group.name == "METAR 09UTC") {
            if (layer_name == 'Temperature_09') {
                bgClickedMetarTempLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarTempLists, "....bgClickedMetarTempLists");
            }
            if (layer_name == 'Dew Point Temperature_09') {
                bgClickedMetarDewPointLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarDewPointLists, "....bgClickedMetarDewPointLists");
            }
            if (layer_name == 'Visibility_09') {
                bgClickedMetarVisibilityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarVisibilityLists, "....bgClickedMetarVisibilityLists");
            }
            if (layer_name == 'Wind Speed and Direction_09') {
                bgClickedMetarWindSpeedAndDirectionLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //bgClicked METAR 10UTC[]
        if (_this.context._layer?.group.name == "METAR 10UTC") {
            if (layer_name == 'Temperature_10') {
                bgClickedMetarTempLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarTempLists, "....bgClickedMetarTempLists");
            }
            if (layer_name == 'Dew Point Temperature_10') {
                bgClickedMetarDewPointLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarDewPointLists, "....bgClickedMetarDewPointLists");
            }
            if (layer_name == 'Visibility_10') {
                bgClickedMetarVisibilityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarVisibilityLists, "....bgClickedMetarVisibilityLists");
            }
            if (layer_name == 'Wind Speed and Direction_10') {
                bgClickedMetarWindSpeedAndDirectionLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //bgClicked METAR 11UTC[]
        if (_this.context._layer?.group.name == "METAR 11UTC") {
            if (layer_name == 'Temperature_11') {
                bgClickedMetarTempLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarTempLists, "....bgClickedMetarTempLists");
            }
            if (layer_name == 'Dew Point Temperature_11') {
                bgClickedMetarDewPointLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarDewPointLists, "....bgClickedMetarDewPointLists");
            }
            if (layer_name == 'Visibility_11') {
                bgClickedMetarVisibilityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarVisibilityLists, "....bgClickedMetarVisibilityLists");
            }
            if (layer_name == 'Wind Speed and Direction_11') {
                bgClickedMetarWindSpeedAndDirectionLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //bgClicked METAR 12UTC[]
        if (_this.context._layer?.group.name == "METAR 12UTC") {
            if (layer_name == 'Temperature_12') {
                bgClickedMetarTempLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarTempLists, "....bgClickedMetarTempLists");
            }
            if (layer_name == 'Dew Point Temperature_12') {
                bgClickedMetarDewPointLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarDewPointLists, "....bgClickedMetarDewPointLists");
            }
            if (layer_name == 'Visibility_12') {
                bgClickedMetarVisibilityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarVisibilityLists, "....bgClickedMetarVisibilityLists");
            }
            if (layer_name == 'Wind Speed and Direction_12') {
                bgClickedMetarWindSpeedAndDirectionLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //bgClicked METAR 13UTC[]
        if (_this.context._layer?.group.name == "METAR 13UTC") {
            if (layer_name == 'Temperature_13') {
                bgClickedMetarTempLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarTempLists, "....bgClickedMetarTempLists");
            }
            if (layer_name == 'Dew Point Temperature_13') {
                bgClickedMetarDewPointLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarDewPointLists, "....bgClickedMetarDewPointLists");
            }
            if (layer_name == 'Visibility_13') {
                bgClickedMetarVisibilityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarVisibilityLists, "....bgClickedMetarVisibilityLists");
            }
            if (layer_name == 'Wind Speed and Direction_13') {
                bgClickedMetarWindSpeedAndDirectionLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //bgClicked METAR 14UTC[]
        if (_this.context._layer?.group.name == "METAR 14UTC") {
            if (layer_name == 'Temperature_14') {
                bgClickedMetarTempLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarTempLists, "....bgClickedMetarTempLists");
            }
            if (layer_name == 'Dew Point Temperature_14') {
                bgClickedMetarDewPointLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarDewPointLists, "....bgClickedMetarDewPointLists");
            }
            if (layer_name == 'Visibility_14') {
                bgClickedMetarVisibilityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarVisibilityLists, "....bgClickedMetarVisibilityLists");
            }
            if (layer_name == 'Wind Speed and Direction_14') {
                bgClickedMetarWindSpeedAndDirectionLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //bgClicked METAR 15UTC[]
        if (_this.context._layer?.group.name == "METAR 15UTC") {
            if (layer_name == 'Temperature_15') {
                bgClickedMetarTempLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarTempLists, "....bgClickedMetarTempLists");
            }
            if (layer_name == 'Dew Point Temperature_15') {
                bgClickedMetarDewPointLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarDewPointLists, "....bgClickedMetarDewPointLists");
            }
            if (layer_name == 'Visibility_15') {
                bgClickedMetarVisibilityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarVisibilityLists, "....bgClickedMetarVisibilityLists");
            }
            if (layer_name == 'Wind Speed and Direction_15') {
                bgClickedMetarWindSpeedAndDirectionLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //bgClicked METAR 16UTC[]
        if (_this.context._layer?.group.name == "METAR 16UTC") {
            if (layer_name == 'Temperature_16') {
                bgClickedMetarTempLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarTempLists, "....bgClickedMetarTempLists");
            }
            if (layer_name == 'Dew Point Temperature_16') {
                bgClickedMetarDewPointLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarDewPointLists, "....bgClickedMetarDewPointLists");
            }
            if (layer_name == 'Visibility_16') {
                bgClickedMetarVisibilityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarVisibilityLists, "....bgClickedMetarVisibilityLists");
            }
            if (layer_name == 'Wind Speed and Direction_16') {
                bgClickedMetarWindSpeedAndDirectionLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //bgClicked METAR 17UTC[]
        if (_this.context._layer?.group.name == "METAR 17UTC") {
            if (layer_name == 'Temperature_17') {
                bgClickedMetarTempLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarTempLists, "....bgClickedMetarTempLists");
            }
            if (layer_name == 'Dew Point Temperature_17') {
                bgClickedMetarDewPointLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarDewPointLists, "....bgClickedMetarDewPointLists");
            }
            if (layer_name == 'Visibility_17') {
                bgClickedMetarVisibilityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarVisibilityLists, "....bgClickedMetarVisibilityLists");
            }
            if (layer_name == 'Wind Speed and Direction_17') {
                bgClickedMetarWindSpeedAndDirectionLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //bgClicked METAR 18UTC[]
        if (_this.context._layer?.group.name == "METAR 18UTC") {
            if (layer_name == 'Temperature_18') {
                bgClickedMetarTempLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarTempLists, "....bgClickedMetarTempLists");
            }
            if (layer_name == 'Dew Point Temperature_18') {
                bgClickedMetarDewPointLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarDewPointLists, "....bgClickedMetarDewPointLists");
            }
            if (layer_name == 'Visibility_18') {
                bgClickedMetarVisibilityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarVisibilityLists, "....bgClickedMetarVisibilityLists");
            }
            if (layer_name == 'Wind Speed and Direction_18') {
                bgClickedMetarWindSpeedAndDirectionLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //bgClicked METAR 19UTC[]
        if (_this.context._layer?.group.name == "METAR 19UTC") {
            if (layer_name == 'Temperature_19') {
                bgClickedMetarTempLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarTempLists, "....bgClickedMetarTempLists");
            }
            if (layer_name == 'Dew Point Temperature_19') {
                bgClickedMetarDewPointLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarDewPointLists, "....bgClickedMetarDewPointLists");
            }
            if (layer_name == 'Visibility_19') {
                bgClickedMetarVisibilityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarVisibilityLists, "....bgClickedMetarVisibilityLists");
            }
            if (layer_name == 'Wind Speed and Direction_19') {
                bgClickedMetarWindSpeedAndDirectionLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //bgClicked METAR 20UTC[]
        if (_this.context._layer?.group.name == "METAR 20UTC") {
            if (layer_name == 'Temperature_20') {
                bgClickedMetarTempLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarTempLists, "....bgClickedMetarTempLists");
            }
            if (layer_name == 'Dew Point Temperature_20') {
                bgClickedMetarDewPointLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarDewPointLists, "....bgClickedMetarDewPointLists");
            }
            if (layer_name == 'Visibility_20') {
                bgClickedMetarVisibilityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarVisibilityLists, "....bgClickedMetarVisibilityLists");
            }
            if (layer_name == 'Wind Speed and Direction_20') {
                bgClickedMetarWindSpeedAndDirectionLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //bgClicked METAR 21UTC[]
        if (_this.context._layer?.group.name == "METAR 21UTC") {
            if (layer_name == 'Temperature_21') {
                bgClickedMetarTempLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarTempLists, "....bgClickedMetarTempLists");
            }
            if (layer_name == 'Dew Point Temperature_21') {
                bgClickedMetarDewPointLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarDewPointLists, "....bgClickedMetarDewPointLists");
            }
            if (layer_name == 'Visibility_21') {
                bgClickedMetarVisibilityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarVisibilityLists, "....bgClickedMetarVisibilityLists");
            }
            if (layer_name == 'Wind Speed and Direction_21') {
                bgClickedMetarWindSpeedAndDirectionLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //bgClicked METAR 22UTC[]
        if (_this.context._layer?.group.name == "METAR 22UTC") {
            if (layer_name == 'Temperature_22') {
                bgClickedMetarTempLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarTempLists, "....bgClickedMetarTempLists");
            }
            if (layer_name == 'Dew Point Temperature_22') {
                bgClickedMetarDewPointLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarDewPointLists, "....bgClickedMetarDewPointLists");
            }
            if (layer_name == 'Visibility_22') {
                bgClickedMetarVisibilityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarVisibilityLists, "....bgClickedMetarVisibilityLists");
            }
            if (layer_name == 'Wind Speed and Direction_22') {
                bgClickedMetarWindSpeedAndDirectionLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //bgClicked METAR 23UTC[]
        if (_this.context._layer?.group.name == "METAR 23UTC") {
            if (layer_name == 'Temperature_23') {
                bgClickedMetarTempLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarTempLists, "....bgClickedMetarTempLists");
            }
            if (layer_name == 'Dew Point Temperature_23') {
                bgClickedMetarDewPointLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarDewPointLists, "....bgClickedMetarDewPointLists");
            }
            if (layer_name == 'Visibility_23') {
                bgClickedMetarVisibilityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarVisibilityLists, "....bgClickedMetarVisibilityLists");
            }
            if (layer_name == 'Wind Speed and Direction_23') {
                bgClickedMetarWindSpeedAndDirectionLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //bgClicked SYNOP 00UTC[]
        if (_this.context._layer?.group.name == "SYNOP 00UTC") {
            if (layer_name == 'Temperature_00') {
                bgClickedSynopTempLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopTempLists, "....bgClickedSynopTempLists");
            }
            if (layer_name == 'Mean Sea Level Pressure_00') {
                bgClickedSynopMeanSeaLevelLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopMeanSeaLevelLists, "....bgClickedSynopMeanSeaLevelLists");
            }
            if (layer_name == 'Cloud Cover_00') {
                bgClickedSynopCloudCoverLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopCloudCoverLists, "....bgClickedSynopCloudCoverLists");
            }
            if (layer_name == 'Geopotential Height_00') {
                bgClickedSynopGeopotentialHeightLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopGeopotentialHeightLists,
                    "....bgClickedSynopGeopotentialHeightLists");
            }
            if (layer_name == 'Relative Humidity_00') {
                bgClickedSynopRelativeHumidityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopRelativeHumidityLists,
                    "....bgClickedSynopRelativeHumidityLists");
            }
            if (layer_name == 'Visibility_00') {
                bgClickedSynopVisibilityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopVisibilityLists,
                    "....bgClickedSynopVisibilityLists");
            }
            if (layer_name == 'Wind Speed and Direction_00') {
                bgClickedSynopWindSpeedAndDirectionLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopWindSpeedAndDirectionLists,
                    "....bgClickedSynopWindSpeedAndDirectionLists");
            }
            if (layer_name == '3h Rainfall_00') {
                bgClickedSynop3hRainfallLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynop3hRainfallLists,
                    "....bgClickedSynop3hRainfallLists");
            }
        }

        //bgClicked SYNOP 03UTC[]
        if (_this.context._layer?.group.name == "SYNOP 03UTC") {
            if (layer_name == 'Temperature_03') {
                bgClickedSynopTempLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopTempLists, "....bgClickedSynopTempLists");
            }
            if (layer_name == 'Mean Sea Level Pressure_03') {
                bgClickedSynopMeanSeaLevelLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopMeanSeaLevelLists, "....bgClickedSynopMeanSeaLevelLists");
            }
            if (layer_name == 'Cloud Cover_03') {
                bgClickedSynopCloudCoverLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopCloudCoverLists, "....bgClickedSynopCloudCoverLists");
            }
            if (layer_name == 'Geopotential Height_03') {
                bgClickedSynopGeopotentialHeightLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopGeopotentialHeightLists,
                    "....bgClickedSynopGeopotentialHeightLists");
            }
            if (layer_name == 'Relative Humidity_03') {
                bgClickedSynopRelativeHumidityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopRelativeHumidityLists,
                    "....bgClickedSynopRelativeHumidityLists");
            }
            if (layer_name == 'Visibility_03') {
                bgClickedSynopVisibilityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopVisibilityLists,
                    "....bgClickedSynopVisibilityLists");
            }
            if (layer_name == 'Wind Speed and Direction_03') {
                bgClickedSynopWindSpeedAndDirectionLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopWindSpeedAndDirectionLists,
                    "....bgClickedSynopWindSpeedAndDirectionLists");
            }
            if (layer_name == '3h Rainfall_03') {
                bgClickedSynop3hRainfallLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynop3hRainfallLists,
                    "....bgClickedSynop3hRainfallLists");
            }
        }

        //bgClicked SYNOP 06UTC[]
        if (_this.context._layer?.group.name == "SYNOP 06UTC") {
            if (layer_name == 'Temperature_06') {
                bgClickedSynopTempLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopTempLists, "....bgClickedSynopTempLists");
            }
            if (layer_name == 'Mean Sea Level Pressure_06') {
                bgClickedSynopMeanSeaLevelLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopMeanSeaLevelLists, "....bgClickedSynopMeanSeaLevelLists");
            }
            if (layer_name == 'Cloud Cover_06') {
                bgClickedSynopCloudCoverLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopCloudCoverLists, "....bgClickedSynopCloudCoverLists");
            }
            if (layer_name == 'Geopotential Height_06') {
                bgClickedSynopGeopotentialHeightLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopGeopotentialHeightLists,
                    "....bgClickedSynopGeopotentialHeightLists");
            }
            if (layer_name == 'Relative Humidity_06') {
                bgClickedSynopRelativeHumidityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopRelativeHumidityLists,
                    "....bgClickedSynopRelativeHumidityLists");
            }
            if (layer_name == 'Visibility_06') {
                bgClickedSynopVisibilityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopVisibilityLists,
                    "....bgClickedSynopVisibilityLists");
            }
            if (layer_name == 'Wind Speed and Direction_06') {
                bgClickedSynopWindSpeedAndDirectionLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopWindSpeedAndDirectionLists,
                    "....bgClickedSynopWindSpeedAndDirectionLists");
            }
            if (layer_name == '3h Rainfall_06') {
                bgClickedSynop3hRainfallLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynop3hRainfallLists,
                    "....bgClickedSynop3hRainfallLists");
            }
        }

        //bgClicked SYNOP 09UTC[]
        if (_this.context._layer?.group.name == "SYNOP 09UTC") {
            if (layer_name == 'Temperature_09') {
                bgClickedSynopTempLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopTempLists, "....bgClickedSynopTempLists");
            }
            if (layer_name == 'Mean Sea Level Pressure_09') {
                bgClickedSynopMeanSeaLevelLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopMeanSeaLevelLists, "....bgClickedSynopMeanSeaLevelLists");
            }
            if (layer_name == 'Cloud Cover_09') {
                bgClickedSynopCloudCoverLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopCloudCoverLists, "....bgClickedSynopCloudCoverLists");
            }
            if (layer_name == 'Geopotential Height_09') {
                bgClickedSynopGeopotentialHeightLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopGeopotentialHeightLists,
                    "....bgClickedSynopGeopotentialHeightLists");
            }
            if (layer_name == 'Relative Humidity_09') {
                bgClickedSynopRelativeHumidityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopRelativeHumidityLists,
                    "....bgClickedSynopRelativeHumidityLists");
            }
            if (layer_name == 'Visibility_09') {
                bgClickedSynopVisibilityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopVisibilityLists,
                    "....bgClickedSynopVisibilityLists");
            }
            if (layer_name == 'Wind Speed and Direction_09') {
                bgClickedSynopWindSpeedAndDirectionLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopWindSpeedAndDirectionLists,
                    "....bgClickedSynopWindSpeedAndDirectionLists");
            }
            if (layer_name == '3h Rainfall_09') {
                bgClickedSynop3hRainfallLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynop3hRainfallLists,
                    "....bgClickedSynop3hRainfallLists");
            }
        }

        //bgClicked SYNOP 12UTC[]
        if (_this.context._layer?.group.name == "SYNOP 12UTC") {
            if (layer_name == 'Temperature_12') {
                bgClickedSynopTempLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopTempLists, "....bgClickedSynopTempLists");
            }
            if (layer_name == 'Mean Sea Level Pressure_12') {
                bgClickedSynopMeanSeaLevelLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopMeanSeaLevelLists, "....bgClickedSynopMeanSeaLevelLists");
            }
            if (layer_name == 'Cloud Cover_12') {
                bgClickedSynopCloudCoverLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopCloudCoverLists, "....bgClickedSynopCloudCoverLists");
            }
            if (layer_name == 'Geopotential Height_12') {
                bgClickedSynopGeopotentialHeightLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopGeopotentialHeightLists,
                    "....bgClickedSynopGeopotentialHeightLists");
            }
            if (layer_name == 'Relative Humidity_12') {
                bgClickedSynopRelativeHumidityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopRelativeHumidityLists,
                    "....bgClickedSynopRelativeHumidityLists");
            }
            if (layer_name == 'Visibility_12') {
                bgClickedSynopVisibilityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopVisibilityLists,
                    "....bgClickedSynopVisibilityLists");
            }
            if (layer_name == 'Wind Speed and Direction_12') {
                bgClickedSynopWindSpeedAndDirectionLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopWindSpeedAndDirectionLists,
                    "....bgClickedSynopWindSpeedAndDirectionLists");
            }
            if (layer_name == '3h Rainfall_12') {
                bgClickedSynop3hRainfallLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynop3hRainfallLists,
                    "....bgClickedSynop3hRainfallLists");
            }
        }

        //bgClicked SYNOP 15UTC[]
        if (_this.context._layer?.group.name == "SYNOP 15UTC") {
            if (layer_name == 'Temperature_15') {
                bgClickedSynopTempLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopTempLists, "....bgClickedSynopTempLists");
            }
            if (layer_name == 'Mean Sea Level Pressure_15') {
                bgClickedSynopMeanSeaLevelLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopMeanSeaLevelLists, "....bgClickedSynopMeanSeaLevelLists");
            }
            if (layer_name == 'Cloud Cover_15') {
                bgClickedSynopCloudCoverLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopCloudCoverLists, "....bgClickedSynopCloudCoverLists");
            }
            if (layer_name == 'Geopotential Height_15') {
                bgClickedSynopGeopotentialHeightLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopGeopotentialHeightLists,
                    "....bgClickedSynopGeopotentialHeightLists");
            }
            if (layer_name == 'Relative Humidity_15') {
                bgClickedSynopRelativeHumidityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopRelativeHumidityLists,
                    "....bgClickedSynopRelativeHumidityLists");
            }
            if (layer_name == 'Visibility_15') {
                bgClickedSynopVisibilityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopVisibilityLists,
                    "....bgClickedSynopVisibilityLists");
            }
            if (layer_name == 'Wind Speed and Direction_15') {
                bgClickedSynopWindSpeedAndDirectionLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopWindSpeedAndDirectionLists,
                    "....bgClickedSynopWindSpeedAndDirectionLists");
            }
            if (layer_name == '3h Rainfall_15') {
                bgClickedSynop3hRainfallLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynop3hRainfallLists,
                    "....bgClickedSynop3hRainfallLists");
            }
        }

        //bgClicked SYNOP 18UTC[]
        if (_this.context._layer?.group.name == "SYNOP 18UTC") {
            if (layer_name == 'Temperature_18') {
                bgClickedSynopTempLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopTempLists, "....bgClickedSynopTempLists");
            }
            if (layer_name == 'Mean Sea Level Pressure_18') {
                bgClickedSynopMeanSeaLevelLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopMeanSeaLevelLists, "....bgClickedSynopMeanSeaLevelLists");
            }
            if (layer_name == 'Cloud Cover_18') {
                bgClickedSynopCloudCoverLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopCloudCoverLists, "....bgClickedSynopCloudCoverLists");
            }
            if (layer_name == 'Geopotential Height_18') {
                bgClickedSynopGeopotentialHeightLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopGeopotentialHeightLists,
                    "....bgClickedSynopGeopotentialHeightLists");
            }
            if (layer_name == 'Relative Humidity_18') {
                bgClickedSynopRelativeHumidityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopRelativeHumidityLists,
                    "....bgClickedSynopRelativeHumidityLists");
            }
            if (layer_name == 'Visibility_18') {
                bgClickedSynopVisibilityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopVisibilityLists,
                    "....bgClickedSynopVisibilityLists");
            }
            if (layer_name == 'Wind Speed and Direction_18') {
                bgClickedSynopWindSpeedAndDirectionLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopWindSpeedAndDirectionLists,
                    "....bgClickedSynopWindSpeedAndDirectionLists");
            }
            if (layer_name == '3h Rainfall_18') {
                bgClickedSynop3hRainfallLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynop3hRainfallLists,
                    "....bgClickedSynop3hRainfallLists");
            }
        }

        //bgClicked SYNOP 21UTC[]
        if (_this.context._layer?.group.name == "SYNOP 21UTC") {
            if (layer_name == 'Temperature_21') {
                bgClickedSynopTempLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopTempLists, "....bgClickedSynopTempLists");
            }
            if (layer_name == 'Mean Sea Level Pressure_21') {
                bgClickedSynopMeanSeaLevelLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopMeanSeaLevelLists, "....bgClickedSynopMeanSeaLevelLists");
            }
            if (layer_name == 'Cloud Cover_21') {
                bgClickedSynopCloudCoverLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopCloudCoverLists, "....bgClickedSynopCloudCoverLists");
            }
            if (layer_name == 'Geopotential Height_21') {
                bgClickedSynopGeopotentialHeightLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopGeopotentialHeightLists,
                    "....bgClickedSynopGeopotentialHeightLists");
            }
            if (layer_name == 'Relative Humidity_21') {
                bgClickedSynopRelativeHumidityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopRelativeHumidityLists,
                    "....bgClickedSynopRelativeHumidityLists");
            }
            if (layer_name == 'Visibility_21') {
                bgClickedSynopVisibilityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopVisibilityLists,
                    "....bgClickedSynopVisibilityLists");
            }
            if (layer_name == 'Wind Speed and Direction_21') {
                bgClickedSynopWindSpeedAndDirectionLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynopWindSpeedAndDirectionLists,
                    "....bgClickedSynopWindSpeedAndDirectionLists");
            }
            if (layer_name == '3h Rainfall_21') {
                bgClickedSynop3hRainfallLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSynop3hRainfallLists,
                    "....bgClickedSynop3hRainfallLists");
            }
        }

        //bgClicked SOUNDING_00_UTC WIND []
        if (_this.context._layer?.group.name == "Sounding_00UTC Wind") {
            if (layer_name == '1000 hPa Wind') {
                bgClickedSOUNDING00UTCWINDLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING00UTCWINDLists, "....bgClickedSOUNDING00UTCWINDLists");
            }
            if (layer_name == '850 hPa Wind') {
                bgClickedSOUNDING00UTCWINDLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING00UTCWINDLists, "....bgClickedSOUNDING00UTCWINDLists");
            }
            if (layer_name == '700 hPa Wind') {
                bgClickedSOUNDING00UTCWINDLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING00UTCWINDLists, "....bgClickedSOUNDING00UTCWINDLists");
            }
            if (layer_name == '500 hPa Wind') {
                bgClickedSOUNDING00UTCWINDLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING00UTCWINDLists,
                    "....bgClickedSOUNDING00UTCWINDLists");
            }
            if (layer_name == '300 hPa Wind') {
                bgClickedSOUNDING00UTCWINDLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING00UTCWINDLists,
                    "....bgClickedSOUNDING00UTCWINDLists");
            }
            if (layer_name == '200 hPa Wind') {
                bgClickedSOUNDING00UTCWINDLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING00UTCWINDLists,
                    "....bgClickedSOUNDING00UTCWINDLists");
            }
            if (layer_name == '100 hPa Wind') {
                bgClickedSOUNDING00UTCWINDLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING00UTCWINDLists,
                    "....bgClickedSOUNDING00UTCWINDLists");
            }
            if (layer_name == '50 hPa Wind') {
                bgClickedSOUNDING00UTCWINDLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING00UTCWINDLists,
                    "....bgClickedSOUNDING00UTCWINDLists");
            }
        }

        //bgClicked SOUNDING_12_UTC WIND []
        if (_this.context._layer?.group.name == "Sounding_12UTC Wind") {
            if (layer_name == '1000 hPa Wind') {
                bgClickedSOUNDING12UTCWINDLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING12UTCWINDLists, "....bgClickedSOUNDING12UTCWINDLists");
            }
            if (layer_name == '850 hPa Wind') {
                bgClickedSOUNDING12UTCWINDLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING12UTCWINDLists, "....bgClickedSOUNDING12UTCWINDLists");
            }
            if (layer_name == '700 hPa Wind') {
                bgClickedSOUNDING12UTCWINDLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING12UTCWINDLists, "....bgClickedSOUNDING12UTCWINDLists");
            }
            if (layer_name == '500 hPa Wind') {
                bgClickedSOUNDING12UTCWINDLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING12UTCWINDLists,
                    "....bgClickedSOUNDING12UTCWINDLists");
            }
            if (layer_name == '300 hPa Wind') {
                bgClickedSOUNDING12UTCWINDLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING12UTCWINDLists,
                    "....bgClickedSOUNDING12UTCWINDLists");
            }
            if (layer_name == '200 hPa Wind') {
                bgClickedSOUNDING12UTCWINDLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING12UTCWINDLists,
                    "....bgClickedSOUNDING12UTCWINDLists");
            }
            if (layer_name == '100 hPa Wind') {
                bgClickedSOUNDING12UTCWINDLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING12UTCWINDLists,
                    "....bgClickedSOUNDING12UTCWINDLists");
            }
            if (layer_name == '50 hPa Wind') {
                bgClickedSOUNDING12UTCWINDLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING12UTCWINDLists,
                    "....bgClickedSOUNDING12UTCWINDLists");
            }
        }

        //bgClicked SOUNDING_00_UTC TEMP []
        if (_this.context._layer?.group.name == "Sounding_00UTC Temp") {
            if (layer_name == '1000 hPa Temp') {
                bgClickedSOUNDING00UTCTEMPLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING00UTCTEMPLists, "....bgClickedSOUNDING00UTCTEMPLists");
            }
            if (layer_name == '850 hPa Temp') {
                bgClickedSOUNDING00UTCTEMPLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING00UTCTEMPLists, "....bgClickedSOUNDING00UTCTEMPLists");
            }
            if (layer_name == '700 hPa Temp') {
                bgClickedSOUNDING00UTCTEMPLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING00UTCTEMPLists, "....bgClickedSOUNDING00UTCTEMPLists");
            }
            if (layer_name == '500 hPa Temp') {
                bgClickedSOUNDING00UTCTEMPLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING00UTCTEMPLists,
                    "....bgClickedSOUNDING00UTCTEMPLists");
            }
            if (layer_name == '300 hPa Temp') {
                bgClickedSOUNDING00UTCTEMPLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING00UTCTEMPLists,
                    "....bgClickedSOUNDING00UTCTEMPLists");
            }
            if (layer_name == '200 hPa Temp') {
                bgClickedSOUNDING00UTCTEMPLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING00UTCTEMPLists,
                    "....bgClickedSOUNDING00UTCTEMPLists");
            }
            if (layer_name == '100 hPa Temp') {
                bgClickedSOUNDING00UTCTEMPLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING00UTCTEMPLists,
                    "....bgClickedSOUNDING00UTCTEMPLists");
            }
            if (layer_name == '50 hPa Temp') {
                bgClickedSOUNDING00UTCTEMPLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING00UTCTEMPLists,
                    "....bgClickedSOUNDING00UTCTEMPLists");
            }
        }

        //bgClicked SOUNDING_12_UTC TEMP []
        if (_this.context._layer?.group.name == "Sounding_12UTC Temp") {
            if (layer_name == '1000 hPa Temp') {
                bgClickedSOUNDING12UTCTEMPLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING12UTCTEMPLists, "....bgClickedSOUNDING12UTCTEMPLists");
            }
            if (layer_name == '850 hPa Temp') {
                bgClickedSOUNDING12UTCTEMPLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING12UTCTEMPLists, "....bgClickedSOUNDING12UTCTEMPLists");
            }
            if (layer_name == '700 hPa Temp') {
                bgClickedSOUNDING12UTCTEMPLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING12UTCTEMPLists, "....bgClickedSOUNDING12UTCTEMPLists");
            }
            if (layer_name == '500 hPa Temp') {
                bgClickedSOUNDING12UTCTEMPLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING12UTCTEMPLists,
                    "....bgClickedSOUNDING12UTCTEMPLists");
            }
            if (layer_name == '300 hPa Temp') {
                bgClickedSOUNDING12UTCTEMPLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING12UTCTEMPLists,
                    "....bgClickedSOUNDING12UTCTEMPLists");
            }
            if (layer_name == '200 hPa Temp') {
                bgClickedSOUNDING12UTCTEMPLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING12UTCTEMPLists,
                    "....bgClickedSOUNDING12UTCTEMPLists");
            }
            if (layer_name == '100 hPa Temp') {
                bgClickedSOUNDING12UTCTEMPLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING12UTCTEMPLists,
                    "....bgClickedSOUNDING12UTCTEMPLists");
            }
            if (layer_name == '50 hPa Temp') {
                bgClickedSOUNDING12UTCTEMPLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING12UTCTEMPLists,
                    "....bgClickedSOUNDING12UTCTEMPLists");
            }
        }

        //bgClicked SOUNDING_00UTC DEW POINT []
        if (_this.context._layer?.group.name == "Sounding_00UTC Dew Point") {
            if (layer_name == '1000 hPa Dew Point') {
                bgClickedSOUNDING00UTCDEWPOINTLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING00UTCDEWPOINTLists, "....bgClickedSOUNDING00UTCDEWPOINTLists");
            }
            if (layer_name == '850 hPa Dew Point') {
                bgClickedSOUNDING00UTCDEWPOINTLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING00UTCDEWPOINTLists, "....bgClickedSOUNDING00UTCDEWPOINTLists");
            }
            if (layer_name == '700 hPa Dew Point') {
                bgClickedSOUNDING00UTCDEWPOINTLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING00UTCDEWPOINTLists, "....bgClickedSOUNDING00UTCDEWPOINTLists");
            }
            if (layer_name == '500 hPa Dew Point') {
                bgClickedSOUNDING00UTCDEWPOINTLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING00UTCDEWPOINTLists,
                    "....bgClickedSOUNDING00UTCDEWPOINTLists");
            }
            if (layer_name == '300 hPa Dew Point') {
                bgClickedSOUNDING00UTCDEWPOINTLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING00UTCDEWPOINTLists,
                    "....bgClickedSOUNDING00UTCDEWPOINTLists");
            }
            if (layer_name == '200 hPa Dew Point') {
                bgClickedSOUNDING00UTCDEWPOINTLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING00UTCDEWPOINTLists,
                    "....bgClickedSOUNDING00UTCDEWPOINTLists");
            }
            if (layer_name == '100 hPa Dew Point') {
                bgClickedSOUNDING00UTCDEWPOINTLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING00UTCDEWPOINTLists,
                    "....bgClickedSOUNDING00UTCDEWPOINTLists");
            }
            if (layer_name == '50 hPa Dew Point') {
                bgClickedSOUNDING00UTCDEWPOINTLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING00UTCDEWPOINTLists,
                    "....bgClickedSOUNDING00UTCDEWPOINTLists");
            }
        }

        //bgClicked SOUNDING_12UTC DEW POINT []
        if (_this.context._layer?.group.name == "Sounding_12UTC Dew Point") {
            if (layer_name == '1000 hPa Dew Point') {
                bgClickedSOUNDING12UTCDEWPOINTLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING12UTCDEWPOINTLists, "....bgClickedSOUNDING12UTCDEWPOINTLists");
            }
            if (layer_name == '850 hPa Dew Point') {
                bgClickedSOUNDING12UTCDEWPOINTLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING12UTCDEWPOINTLists, "....bgClickedSOUNDING12UTCDEWPOINTLists");
            }
            if (layer_name == '700 hPa Dew Point') {
                bgClickedSOUNDING12UTCDEWPOINTLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING12UTCDEWPOINTLists, "....bgClickedSOUNDING12UTCDEWPOINTLists");
            }
            if (layer_name == '500 hPa Dew Point') {
                bgClickedSOUNDING12UTCDEWPOINTLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING12UTCDEWPOINTLists,
                    "....bgClickedSOUNDING12UTCDEWPOINTLists");
            }
            if (layer_name == '300 hPa Dew Point') {
                bgClickedSOUNDING12UTCDEWPOINTLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING12UTCDEWPOINTLists,
                    "....bgClickedSOUNDING12UTCDEWPOINTLists");
            }
            if (layer_name == '200 hPa Dew Point') {
                bgClickedSOUNDING12UTCDEWPOINTLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING12UTCDEWPOINTLists,
                    "....bgClickedSOUNDING12UTCDEWPOINTLists");
            }
            if (layer_name == '100 hPa Dew Point') {
                bgClickedSOUNDING12UTCDEWPOINTLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING12UTCDEWPOINTLists,
                    "....bgClickedSOUNDING12UTCDEWPOINTLists");
            }
            if (layer_name == '50 hPa Dew Point') {
                bgClickedSOUNDING12UTCDEWPOINTLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedSOUNDING12UTCDEWPOINTLists,
                    "....bgClickedSOUNDING12UTCDEWPOINTLists");
            }
        }

        //
        //bgClicked SHIP AND BUOY OBSERVATION []
        if (_this.context._layer?.group.name == "Ship and Buoy Observation") {
            if (layer_name == '00UTC') {
                bgClickedSHIPANDBUOYLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == '01UTC') {
                bgClickedSHIPANDBUOYLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == '02UTC') {
                bgClickedSHIPANDBUOYLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == '03UTC') {
                bgClickedSHIPANDBUOYLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == '04UTC') {
                bgClickedSHIPANDBUOYLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == '05UTC') {
                bgClickedSHIPANDBUOYLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == '06UTC') {
                bgClickedSHIPANDBUOYLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == '07UTC') {
                bgClickedSHIPANDBUOYLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == '08UTC') {
                bgClickedSHIPANDBUOYLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == '09UTC') {
                bgClickedSHIPANDBUOYLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == '10UTC') {
                bgClickedSHIPANDBUOYLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == '11UTC') {
                bgClickedSHIPANDBUOYLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == '12UTC') {
                bgClickedSHIPANDBUOYLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == '13UTC') {
                bgClickedSHIPANDBUOYLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == '14UTC') {
                bgClickedSHIPANDBUOYLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == '15UTC') {
                bgClickedSHIPANDBUOYLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == '16UTC') {
                bgClickedSHIPANDBUOYLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == '17UTC') {
                bgClickedSHIPANDBUOYLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == '18UTC') {
                bgClickedSHIPANDBUOYLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == '19UTC') {
                bgClickedSHIPANDBUOYLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == '20UTC') {
                bgClickedSHIPANDBUOYLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == '21UTC') {
                bgClickedSHIPANDBUOYLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == '22UTC') {
                bgClickedSHIPANDBUOYLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == '23UTC') {
                bgClickedSHIPANDBUOYLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            console.log(bgClickedSHIPANDBUOYLists, "....bgClickedSHIPANDBUOYLists");
        }

        //
        //bgClickedRadarLists[]
        if (_this.context._layer?.group.name == "Radar Products") {
            if (layer_name == 'Radar Reflectivity') {
                bgClickedRadarLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == 'Radar Animation') {
                bgClickedRadarLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            console.log(bgClickedRadarLists, "....bgClickedRadarLists");
        }

        //
        //bgClickedSATELLITELists[]
        if (_this.context._layer?.group.name == "Satellite Observation") {
            if (layer_name == 'TIR1') {
                bgClickedSATELLITELists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == 'VIS') {
                bgClickedSATELLITELists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == 'CTBT') {
                bgClickedSATELLITELists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == 'Low Level Convergence') {
                bgClickedSATELLITELists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == 'Upper Level Divergence') {
                bgClickedSATELLITELists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == 'Mid Level Shear') {
                bgClickedSATELLITELists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == 'Vorticity at 200hPa') {
                bgClickedSATELLITELists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == 'Vorticity at 500hPa') {
                bgClickedSATELLITELists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == 'Vorticity at 700hPa') {
                bgClickedSATELLITELists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == 'Vorticity at 850hPa') {
                bgClickedSATELLITELists.push(
                    layer_group_name + " " + layer_name
                );
            }
            console.log(bgClickedSATELLITELists, "....bgClickedSATELLITELists");
        }

        //Lightning
        //bgClickedLightningLists[]
        if (_this.context._layer?.group.name == "Lightning") {
            if (layer_name == 'Last 00-05 min') {
                bgClickedLightningLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == 'Last 05-10 min') {
                bgClickedLightningLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == 'Last 10-15 min') {
                bgClickedLightningLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == 'ILDN Last 05 min') {
                bgClickedLightningLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == 'Nowcast Alerts') {
                bgClickedLightningLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            console.log(bgClickedLightningLists, "....bgClickedLightningLists");
        }

        //mesolscale
        //bgClickedWRFReflectivityLists[]
        if (_this.context._layer?.group.name == "WRF Reflectivity") {
            if (layer_name == 'WRF R Next 03 Hrs') {
                bgClickedWRFReflectivityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedWRFReflectivityLists, "....bgClickedWRFReflectivityLists");
            }
            if (layer_name == 'WRF R Next 03-06 Hrs') {
                bgClickedWRFReflectivityLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedWRFReflectivityLists, "....bgClickedWRFReflectivityLists");
            }
        }

        //bgClickedWRFlightningProductLists[]
        if (_this.context._layer?.group.name == "WRF Lightning Product") {
            if (layer_name == 'WRF LP Next 03 Hrs') {
                bgClickedWRFlightningProductLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedWRFlightningProductLists, "....bgClickedWRFlightningProductLists");
            }
            if (layer_name == 'WRF LP Next 03-06 Hrs') {
                bgClickedWRFlightningProductLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedWRFlightningProductLists, "....bgClickedWRFlightningProductLists");
            }
        }

        //bgClickedWRFAccumlatedRainfallLists[]
        if (_this.context._layer?.group.name == "WRF Accumlated Rainfall") {
            if (layer_name == 'WRF AR Next 03 Hrs') {
                bgClickedWRFAccumlatedRainfallLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedWRFAccumlatedRainfallLists, "....bgClickedWRFAccumlatedRainfallLists");
            }
            if (layer_name == 'WRF AR Next 03-06 Hrs') {
                bgClickedWRFAccumlatedRainfallLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedWRFAccumlatedRainfallLists, "....bgClickedWRFAccumlatedRainfallLists");
            }
        }

        //bgClickedlightningPotentialindexLists[]
        if (_this.context._layer?.group.name == "Lightning Potential Index") {
            if (layer_name == 'LP Next 01 Hrs') {
                bgClickedlightningPotentialindexLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedlightningPotentialindexLists,
                    "....bgClickedlightningPotentialindexLists");
            }
            if (layer_name == 'LP Next 01-02 Hrs') {
                bgClickedlightningPotentialindexLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedlightningPotentialindexLists,
                    "....bgClickedlightningPotentialindexLists");
            }
            if (layer_name == 'LP Next 02-03 Hrs') {
                bgClickedlightningPotentialindexLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedlightningPotentialindexLists,
                    "....bgClickedlightningPotentialindexLists");
            }
        }

        //bgClickedNCUMRlightningProductLists[]
        if (_this.context._layer?.group.name == "NCUMR Lightning Product") {
            if (layer_name == 'NCUMR LP Next 03 Hrs') {
                bgClickedNCUMRlightningProductLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedNCUMRlightningProductLists, "....bgClickedNCUMRlightningProductLists");
            }
            if (layer_name == 'NCUMR LP Next 03-06 Hrs') {
                bgClickedNCUMRlightningProductLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedNCUMRlightningProductLists, "....bgClickedNCUMRlightningProductLists");
            }
        }

        //bgClickedNCUMRWindGustLists[]
        if (_this.context._layer?.group.name == "NCUMR Wind Gust") {
            if (layer_name == 'NCUMR WG Next 03 Hrs') {
                bgClickedNCUMRWindGustLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedNCUMRWindGustLists, "....bgClickedNCUMRWindGustLists");
            }
            if (layer_name == 'NCUMR WG Next 03-06 Hrs') {
                bgClickedNCUMRWindGustLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedNCUMRWindGustLists, "....bgClickedNCUMRWindGustLists");
            }
        }

        //bgClickedNCUMRRainfallLists[]
        if (_this.context._layer?.group.name == "NCUMR Rainfall") {
            if (layer_name == 'NCUMR R Next 03 Hrs') {
                bgClickedNCUMRRainfallLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedNCUMRRainfallLists, "....bgClickedNCUMRRainfallLists");
            }
            if (layer_name == 'NCUMR R Next 03-06 Hrs') {
                bgClickedNCUMRRainfallLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedNCUMRRainfallLists, "....bgClickedNCUMRRainfallLists");
            }
        }

        //bgClickedHRRR_SPHourlyDBZLists[]
        if (_this.context._layer?.group.name == "HRRR_SP Hourly DBZ") {
            if (layer_name == 'HRRR SP Next 01 Hrs') {
                bgClickedHRRR_SPHourlyDBZLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedHRRR_SPHourlyDBZLists, "....bgClickedHRRR_SPHourlyDBZLists");
            }
            if (layer_name == 'HRRR SP Next 01-02 Hrs') {
                bgClickedHRRR_SPHourlyDBZLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedHRRR_SPHourlyDBZLists, "....bgClickedHRRR_SPHourlyDBZLists");
            }
            if (layer_name == 'HRRR SP Next 02-03 Hrs') {
                bgClickedHRRR_SPHourlyDBZLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedHRRR_SPHourlyDBZLists, "....bgClickedHRRR_SPHourlyDBZLists");
            }
        }

        //bgClickedHRRR_NEHourlyDBZLists[]
        if (_this.context._layer?.group.name == "HRRR_NE Hourly DBZ") {
            if (layer_name == 'HRRR NE Next 01 Hrs') {
                bgClickedHRRR_NEHourlyDBZLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedHRRR_NEHourlyDBZLists, "....bgClickedHRRR_NEHourlyDBZLists");
            }
            if (layer_name == 'HRRR NE Next 01-02 Hrs') {
                bgClickedHRRR_NEHourlyDBZLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedHRRR_NEHourlyDBZLists, "....bgClickedHRRR_NEHourlyDBZLists");
            }
            if (layer_name == 'HRRR NE Next 02-03 Hrs') {
                bgClickedHRRR_NEHourlyDBZLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedHRRR_NEHourlyDBZLists, "....bgClickedHRRR_NEHourlyDBZLists");
            }
        }

        //bgClickedHRRR_NWHourlyDBZLists[]
        if (_this.context._layer?.group.name == "HRRR_NW Hourly DBZ") {
            if (layer_name == 'HRRR NW Next 01 Hrs') {
                bgClickedHRRR_NWHourlyDBZLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedHRRR_NWHourlyDBZLists, "....bgClickedHRRR_NWHourlyDBZLists");
            }
            if (layer_name == 'HRRR NW Next 01-02 Hrs') {
                bgClickedHRRR_NWHourlyDBZLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedHRRR_NWHourlyDBZLists, "....bgClickedHRRR_NWHourlyDBZLists");
            }
            if (layer_name == 'HRRR NW Next 02-03 Hrs') {
                bgClickedHRRR_NWHourlyDBZLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedHRRR_NWHourlyDBZLists, "....bgClickedHRRR_NWHourlyDBZLists");
            }
        }

        //bgClickedEWRFMaxZLists[]
        if (_this.context._layer?.group.name == "EWRF MaxZ") {
            if (layer_name == 'EWRF M Next 01 Hrs') {
                bgClickedEWRFMaxZLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedEWRFMaxZLists, "....bgClickedEWRFMaxZLists");
            }
            if (layer_name == 'EWRF M Next 01-02 Hrs') {
                bgClickedEWRFMaxZLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedEWRFMaxZLists, "....bgClickedEWRFMaxZLists");
            }
            if (layer_name == 'EWRF M Next 02-03 Hrs') {
                bgClickedEWRFMaxZLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedEWRFMaxZLists, "....bgClickedEWRFMaxZLists");
            }
        }

        //bgClickedEWRFLightningLists[]
        if (_this.context._layer?.group.name == "EWRF Lightning") {
            if (layer_name == 'EWRF L Next 01 Hrs') {
                bgClickedEWRFLightningLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedEWRFLightningLists, "....bgClickedEWRFLightningLists");
            }
            if (layer_name == 'EWRF L Next 01-02 Hrs') {
                bgClickedEWRFLightningLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedEWRFLightningLists, "....bgClickedEWRFLightningLists");
            }
            if (layer_name == 'EWRF L Next 02-03 Hrs') {
                bgClickedEWRFLightningLists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedEWRFLightningLists, "....bgClickedEWRFLightningLists");
            }
        }
        //mesolscale ends here

        //medium_range
        //bgClickedRainfallIntensityDay1Lists[]
        if (_this.context._layer?.group.name == "Rainfall Intensity Day1") {
            if (layer_name == 'RI GFS DAY1') {
                bgClickedRainfallIntensityDay1Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedRainfallIntensityDay1Lists, "....bgClickedRainfallIntensityDay1Lists");
            }
            if (layer_name == 'RI NCUM Day1') {
                bgClickedRainfallIntensityDay1Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedRainfallIntensityDay1Lists, "....bgClickedRainfallIntensityDay1Lists");
            }
            if (layer_name == 'RI NEPS Day1') {
                bgClickedRainfallIntensityDay1Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedRainfallIntensityDay1Lists, "....bgClickedRainfallIntensityDay1Lists");
            }
            if (layer_name == 'RI WRF Day1') {
                bgClickedRainfallIntensityDay1Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedRainfallIntensityDay1Lists, "....bgClickedRainfallIntensityDay1Lists");
            }
            if (layer_name == 'RI GEFS Day1') {
                bgClickedRainfallIntensityDay1Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedRainfallIntensityDay1Lists, "....bgClickedRainfallIntensityDay1Lists");
            }
            if (layer_name == 'RI ECMWF Day1') {
                bgClickedRainfallIntensityDay1Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedRainfallIntensityDay1Lists, "....bgClickedRainfallIntensityDay1Lists");
            }
        }

        //bgClickedRainfallIntensityDay2Lists[]
        if (_this.context._layer?.group.name == "Rainfall Intensity Day2") {
            if (layer_name == 'RI GFS Day2') {
                bgClickedRainfallIntensityDay2Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedRainfallIntensityDay2Lists, "....bgClickedRainfallIntensityDay2Lists");
            }
            if (layer_name == 'RI NCUM Day2') {
                bgClickedRainfallIntensityDay2Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedRainfallIntensityDay2Lists, "....bgClickedRainfallIntensityDay2Lists");
            }
            if (layer_name == 'RI NEPS Day2') {
                bgClickedRainfallIntensityDay2Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedRainfallIntensityDay2Lists, "....bgClickedRainfallIntensityDay2Lists");
            }
            if (layer_name == 'RI WRF Day2') {
                bgClickedRainfallIntensityDay2Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedRainfallIntensityDay2Lists, "....bgClickedRainfallIntensityDay2Lists");
            }
            if (layer_name == 'RI GEFS Day2') {
                bgClickedRainfallIntensityDay2Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedRainfallIntensityDay2Lists, "....bgClickedRainfallIntensityDay2Lists");
            }
            if (layer_name == 'RI ECMWF Day2') {
                bgClickedRainfallIntensityDay2Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedRainfallIntensityDay2Lists, "....bgClickedRainfallIntensityDay2Lists");
            }
        }

        //bgClickedRainfallIntensityDay3Lists[]
        if (_this.context._layer?.group.name == "Rainfall Intensity Day3") {
            if (layer_name == 'RI GFS Day3') {
                bgClickedRainfallIntensityDay3Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedRainfallIntensityDay3Lists, "....bgClickedRainfallIntensityDay3Lists");
            }
            if (layer_name == 'RI NCUM Day3') {
                bgClickedRainfallIntensityDay3Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedRainfallIntensityDay3Lists, "....bgClickedRainfallIntensityDay3Lists");
            }
            if (layer_name == 'RI NEPS Day3') {
                bgClickedRainfallIntensityDay3Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedRainfallIntensityDay3Lists, "....bgClickedRainfallIntensityDay3Lists");
            }
            if (layer_name == 'RI WRF Day3') {
                bgClickedRainfallIntensityDay3Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedRainfallIntensityDay3Lists, "....bgClickedRainfallIntensityDay3Lists");
            }
            if (layer_name == 'RI GEFS Day3') {
                bgClickedRainfallIntensityDay3Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedRainfallIntensityDay3Lists, "....bgClickedRainfallIntensityDay3Lists");
            }
            if (layer_name == 'RI ECMWF Day3') {
                bgClickedRainfallIntensityDay3Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedRainfallIntensityDay3Lists, "....bgClickedRainfallIntensityDay3Lists");
            }
        }

        //bgClickedRainfallIntensityDay4Lists[]
        if (_this.context._layer?.group.name == "Rainfall Intensity Day4") {
            if (layer_name == 'RI GFS Day4') {
                bgClickedRainfallIntensityDay4Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedRainfallIntensityDay4Lists, "....bgClickedRainfallIntensityDay4Lists");
            }
            if (layer_name == 'RI NCUM Day4') {
                bgClickedRainfallIntensityDay4Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedRainfallIntensityDay4Lists, "....bgClickedRainfallIntensityDay4Lists");
            }
            if (layer_name == 'RI NEPS Day4') {
                bgClickedRainfallIntensityDay4Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedRainfallIntensityDay4Lists, "....bgClickedRainfallIntensityDay4Lists");
            }
            if (layer_name == 'RI WRF Day4') {
                bgClickedRainfallIntensityDay4Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedRainfallIntensityDay4Lists, "....bgClickedRainfallIntensityDay4Lists");
            }
            if (layer_name == 'RI GEFS Day4') {
                bgClickedRainfallIntensityDay4Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedRainfallIntensityDay4Lists, "....bgClickedRainfallIntensityDay4Lists");
            }
            if (layer_name == 'RI ECMWF Day4') {
                bgClickedRainfallIntensityDay4Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedRainfallIntensityDay4Lists, "....bgClickedRainfallIntensityDay4Lists");
            }
        }

        //bgClickedRainfallIntensityDay5Lists[]
        if (_this.context._layer?.group.name == "Rainfall Intensity Day5") {
            if (layer_name == 'RI GFS Day5') {
                bgClickedRainfallIntensityDay5Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedRainfallIntensityDay5Lists, "....bgClickedRainfallIntensityDay5Lists");
            }
            if (layer_name == 'RI NCUM Day5') {
                bgClickedRainfallIntensityDay5Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedRainfallIntensityDay5Lists, "....bgClickedRainfallIntensityDay5Lists");
            }
            if (layer_name == 'RI NEPS Day5') {
                bgClickedRainfallIntensityDay5Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedRainfallIntensityDay5Lists, "....bgClickedRainfallIntensityDay5Lists");
            }
            if (layer_name == 'RI WRF Day5') {
                bgClickedRainfallIntensityDay5Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedRainfallIntensityDay5Lists, "....bgClickedRainfallIntensityDay5Lists");
            }
            if (layer_name == 'RI GEFS Day5') {
                bgClickedRainfallIntensityDay5Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedRainfallIntensityDay5Lists, "....bgClickedRainfallIntensityDay5Lists");
            }
            if (layer_name == 'RI ECMWF Day5') {
                bgClickedRainfallIntensityDay5Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedRainfallIntensityDay5Lists, "....bgClickedRainfallIntensityDay5Lists");
            }
        }

        //bgClickedMSLPDay1Lists[]
        if (_this.context._layer?.group.name == "MSLP Day1") {
            if (layer_name == 'MSLP GFS Day1') {
                bgClickedMSLPDay1Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMSLPDay1Lists, "....bgClickedMSLPDay1Lists");
            }
            if (layer_name == 'MSLP NCUM Day1') {
                bgClickedMSLPDay1Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMSLPDay1Lists, "....bgClickedMSLPDay1Lists");
            }
            if (layer_name == 'MSLP NEPS Day1') {
                bgClickedMSLPDay1Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMSLPDay1Lists, "....bgClickedMSLPDay1Lists");
            }
            if (layer_name == 'MSLP WRF Day1') {
                bgClickedMSLPDay1Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMSLPDay1Lists, "....bgClickedMSLPDay1Lists");
            }
            if (layer_name == 'MSLP GEFS Day1') {
                bgClickedMSLPDay1Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMSLPDay1Lists, "....bgClickedMSLPDay1Lists");
            }
            if (layer_name == 'MSLP ECMWF Day1') {
                bgClickedMSLPDay1Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMSLPDay1Lists, "....bgClickedMSLPDay1Lists");
            }
        }

        //bgClickedMSLPDay2Lists[]
        if (_this.context._layer?.group.name == "MSLP Day2") {
            if (layer_name == 'MSLP GFS Day2') {
                bgClickedMSLPDay2Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMSLPDay2Lists, "....bgClickedMSLPDay2Lists");
            }
            if (layer_name == 'MSLP NCUM Day2') {
                bgClickedMSLPDay2Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMSLPDay2Lists, "....bgClickedMSLPDay2Lists");
            }
            if (layer_name == 'MSLP NEPS Day2') {
                bgClickedMSLPDay2Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMSLPDay2Lists, "....bgClickedMSLPDay2Lists");
            }
            if (layer_name == 'MSLP WRF Day2') {
                bgClickedMSLPDay2Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMSLPDay2Lists, "....bgClickedMSLPDay2Lists");
            }
            if (layer_name == 'MSLP GEFS Day2') {
                bgClickedMSLPDay2Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMSLPDay2Lists, "....bgClickedMSLPDay2Lists");
            }
            if (layer_name == 'MSLP ECMWF Day2') {
                bgClickedMSLPDay2Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMSLPDay2Lists, "....bgClickedMSLPDay2Lists");
            }
        }

        //bgClickedMSLPDay3Lists[]
        if (_this.context._layer?.group.name == "MSLP Day3") {
            if (layer_name == 'MSLP GFS Day3') {
                bgClickedMSLPDay3Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMSLPDay3Lists, "....bgClickedMSLPDay3Lists");
            }
            if (layer_name == 'MSLP NCUM Day3') {
                bgClickedMSLPDay3Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMSLPDay3Lists, "....bgClickedMSLPDay3Lists");
            }
            if (layer_name == 'MSLP NEPS Day3') {
                bgClickedMSLPDay3Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMSLPDay3Lists, "....bgClickedMSLPDay3Lists");
            }
            if (layer_name == 'MSLP WRF Day3') {
                bgClickedMSLPDay3Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMSLPDay3Lists, "....bgClickedMSLPDay3Lists");
            }
            if (layer_name == 'MSLP GEFS Day3') {
                bgClickedMSLPDay3Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMSLPDay3Lists, "....bgClickedMSLPDay3Lists");
            }
            if (layer_name == 'MSLP ECMWF Day3') {
                bgClickedMSLPDay3Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMSLPDay3Lists, "....bgClickedMSLPDay3Lists");
            }
        }

        //bgClickedMSLPDay4Lists[]
        if (_this.context._layer?.group.name == "MSLP Day4") {
            if (layer_name == 'MSLP GFS Day4') {
                bgClickedMSLPDay4Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMSLPDay4Lists, "....bgClickedMSLPDay4Lists");
            }
            if (layer_name == 'MSLP NCUM Day4') {
                bgClickedMSLPDay4Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMSLPDay4Lists, "....bgClickedMSLPDay4Lists");
            }
            if (layer_name == 'MSLP NEPS Day4') {
                bgClickedMSLPDay4Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMSLPDay4Lists, "....bgClickedMSLPDay4Lists");
            }
            if (layer_name == 'MSLP WRF Day4') {
                bgClickedMSLPDay4Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMSLPDay4Lists, "....bgClickedMSLPDay4Lists");
            }
            if (layer_name == 'MSLP GEFS Day4') {
                bgClickedMSLPDay4Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMSLPDay4Lists, "....bgClickedMSLPDay4Lists");
            }
            if (layer_name == 'MSLP ECMWF Day4') {
                bgClickedMSLPDay4Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMSLPDay4Lists, "....bgClickedMSLPDay4Lists");
            }
        }

        //bgClickedMSLPDay5Lists[]
        if (_this.context._layer?.group.name == "MSLP Day5") {
            if (layer_name == 'MSLP GFS Day5') {
                bgClickedMSLPDay5Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMSLPDay5Lists, "....bgClickedMSLPDay5Lists");
            }
            if (layer_name == 'MSLP NCUM Day5') {
                bgClickedMSLPDay5Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMSLPDay5Lists, "....bgClickedMSLPDay5Lists");
            }
            if (layer_name == 'MSLP NEPS Day5') {
                bgClickedMSLPDay5Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMSLPDay5Lists, "....bgClickedMSLPDay5Lists");
            }
            if (layer_name == 'MSLP WRF Day5') {
                bgClickedMSLPDay5Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMSLPDay5Lists, "....bgClickedMSLPDay5Lists");
            }
            if (layer_name == 'MSLP GEFS Day5') {
                bgClickedMSLPDay5Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMSLPDay5Lists, "....bgClickedMSLPDay5Lists");
            }
            if (layer_name == 'MSLP ECMWF Day5') {
                bgClickedMSLPDay5Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClickedMSLPDay5Lists, "....bgClickedMSLPDay5Lists");
            }
        }

        //bgClicked10mWINDDay1Lists[]
        if (_this.context._layer?.group.name == "10m Wind Day1") {
            if (layer_name == '10m WIND GFS Day1') {
                bgClicked10mWINDDay1Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClicked10mWINDDay1Lists, "....bgClicked10mWINDDay1Lists");
            }
            if (layer_name == '10m WIND NCUM Day1') {
                bgClicked10mWINDDay1Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClicked10mWINDDay1Lists, "....bgClicked10mWINDDay1Lists");
            }
            if (layer_name == '10m WIND NEPS Day1') {
                bgClicked10mWINDDay1Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClicked10mWINDDay1Lists, "....bgClicked10mWINDDay1Lists");
            }
            if (layer_name == '10m WIND WRF Day1') {
                bgClicked10mWINDDay1Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClicked10mWINDDay1Lists, "....bgClicked10mWINDDay1Lists");
            }
            if (layer_name == '10m WIND GEFS Day1') {
                bgClicked10mWINDDay1Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClicked10mWINDDay1Lists, "....bgClicked10mWINDDay1Lists");
            }
        }

        //bgClicked10mWINDDay2Lists[]
        if (_this.context._layer?.group.name == "10m Wind Day2") {
            if (layer_name == '10m WIND GFS Day2') {
                bgClicked10mWINDDay2Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClicked10mWINDDay2Lists, "....bgClicked10mWINDDay2Lists");
            }
            if (layer_name == '10m WIND NCUM Day2') {
                bgClicked10mWINDDay2Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClicked10mWINDDay2Lists, "....bgClicked10mWINDDay2Lists");
            }
            if (layer_name == '10m WIND NEPS Day2') {
                bgClicked10mWINDDay2Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClicked10mWINDDay2Lists, "....bgClicked10mWINDDay2Lists");
            }
            if (layer_name == '10m WIND WRF Day2') {
                bgClicked10mWINDDay2Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClicked10mWINDDay2Lists, "....bgClicked10mWINDDay2Lists");
            }
            if (layer_name == '10m WIND GEFS Day2') {
                bgClicked10mWINDDay2Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClicked10mWINDDay2Lists, "....bgClicked10mWINDDay2Lists");
            }
        }

        //bgClicked10mWINDDay3Lists[]
        if (_this.context._layer?.group.name == "10m Wind Day3") {
            if (layer_name == '10m WIND GFS Day3') {
                bgClicked10mWINDDay3Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClicked10mWINDDay3Lists, "....bgClicked10mWINDDay3Lists");
            }
            if (layer_name == '10m WIND NCUM Day3') {
                bgClicked10mWINDDay3Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClicked10mWINDDay3Lists, "....bgClicked10mWINDDay3Lists");
            }
            if (layer_name == '10m WIND NEPS Day3') {
                bgClicked10mWINDDay3Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClicked10mWINDDay3Lists, "....bgClicked10mWINDDay3Lists");
            }
            if (layer_name == '10m WIND WRF Day3') {
                bgClicked10mWINDDay3Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClicked10mWINDDay3Lists, "....bgClicked10mWINDDay3Lists");
            }
            if (layer_name == '10m WIND GEFS Day3') {
                bgClicked10mWINDDay3Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClicked10mWINDDay3Lists, "....bgClicked10mWINDDay3Lists");
            }
        }

        //bgClicked10mWINDDay4Lists[]
        if (_this.context._layer?.group.name == "10m Wind Day4") {
            if (layer_name == '10m WIND GFS Day4') {
                bgClicked10mWINDDay4Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClicked10mWINDDay4Lists, "....bgClicked10mWINDDay4Lists");
            }
            if (layer_name == '10m WIND NCUM Day4') {
                bgClicked10mWINDDay4Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClicked10mWINDDay4Lists, "....bgClicked10mWINDDay4Lists");
            }
            if (layer_name == '10m WIND NEPS Day4') {
                bgClicked10mWINDDay4Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClicked10mWINDDay4Lists, "....bgClicked10mWINDDay4Lists");
            }
            // if (layer_name == '10m WIND WRF DAY4') {
            //     bgClicked10mWINDDay4Lists.push(
            //         layer_group_name + " " + layer_name);
            //     console.log(bgClicked10mWINDDay4Lists, "....bgClicked10mWINDDay4Lists");
            // }
            if (layer_name == '10m WIND GEFS Day4') {
                bgClicked10mWINDDay4Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClicked10mWINDDay4Lists, "....bgClicked10mWINDDay4Lists");
            }
        }

        //bgClicked10mWINDDay5Lists[]
        if (_this.context._layer?.group.name == "10m Wind Day5") {
            if (layer_name == '10m WIND GFS Day5') {
                bgClicked10mWINDDay5Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClicked10mWINDDay5Lists, "....bgClicked10mWINDDay5Lists");
            }
            if (layer_name == '10m WIND NCUM Day5') {
                bgClicked10mWINDDay5Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClicked10mWINDDay5Lists, "....bgClicked10mWINDDay5Lists");
            }
            if (layer_name == '10m WIND NEPS Day5') {
                bgClicked10mWINDDay5Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClicked10mWINDDay5Lists, "....bgClicked10mWINDDay5Lists");
            }
            // if (layer_name == '10m WIND WRF DAY5') {
            //     bgClicked10mWINDDay5Lists.push(
            //         layer_group_name + " " + layer_name);
            //     console.log(bgClicked10mWINDDay5Lists, "....bgClicked10mWINDDay5Lists");
            // }
            if (layer_name == '10m WIND GEFS Day5') {
                bgClicked10mWINDDay5Lists.push(
                    layer_group_name + " " + layer_name);
                console.log(bgClicked10mWINDDay5Lists, "....bgClicked10mWINDDay5Lists");
            }
        }




        //HomePage_Lightning
        if (_this.context._layer?.group.name == "Lightning") {

            // if (panelLayerLightningTitle.innerHTML == '') {
            //     panelLayerLightningTitle.innerHTML = _this.context._layer?.group.name + ':';
            //     // legendModel1.src = 'http://103.215.208.18/dwr_img/GIS/legend/model_nowcast.png';
            //     // legendModel1.style.height = '35vh';
            //     // legendModel1.style.width = '72%';
            //     Light_RadarRow.style.display = 'block';
            // }

            // if (layer_name == 'Last 00-05 min') {
            //     clickedLightningLists.push(
            //         `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}`
            //     );
            //     map.addLayer(delhiMarker);
            // }
            // if (layer_name == 'Last 05-10 min') {
            //     clickedLightningLists.push(
            //         `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}`
            //     );
            //     map.addLayer(jaipurMarker);
            // }
            // if (layer_name == 'Last 10-15 min') {
            //     clickedLightningLists.push(
            //         `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}`
            //     );
            //     map.addLayer(bhopalMarker);
            // }
            // panelLayerLightninglists.innerHTML = clickedLightningLists.join("");

            // if (layer_name == 'TEMPERATURE') {
            //     clickedMETAR00UTCLists.push(
            //         _this
            //         // `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} <img src="img/temp.jpeg" style="width: 125px; height: 150px;">`
            //     );
            // }
            // if (layer_name == 'DEW POINT TEMPERATURE') {
            //     clickedMETAR00UTCLists.push(
            //         `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} <img src="img/temp.jpeg" style="width: 125px; height: 150px;">`
            //     );
            // }
            // if (layer_name == 'VISIBILITY') {
            //     clickedMETAR00UTCLists.push(
            //         `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} <img src="img/visiblity.jpeg" style="width: 125px; height: 150px;">`
            //     );
            // }
            // if (layer_name == 'WIND SPEED AND DIRECTION') {
            //     clickedMETAR00UTCLists.push(
            //         `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} <div style="width: 30px; 
            //         height: 15px;
            //         display: flex;
            //         border: 2px solid black;">
            //         <div style="flex: 1; background-color: green;"></div>
            //         <div style="flex: 1; background-color: black;"></div>
            //         </div>`
            //     );
            // }
            // panelLayerMETAR00UTC_lists.innerHTML = clickedMETAR00UTCLists.join("");
        }
        //HomePage_Radar
        // if (_this.context._layer?.group.name == "Radar Reflectivity") {
        //     if (panelLayerRadarTitle.innerHTML == '') {
        //         panelLayerRadarTitle.innerHTML = _this.context._layer?.group.name + ':'
        //         Light_RadarRow.style.display = 'block';
        //     }

        //     if (layer_name == 'Radar Reflectivity') {
        //         clickedRadarLists.push(
        //             `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}`
        //         );
        //     }
        //     if (layer_name == 'Radar Animation') {
        //         clickedRadarLists.push(
        //             `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}`
        //         );
        //     }
        //     panelLayerRadarlists.innerHTML = clickedRadarLists.join("");
        // }
        //EXPOSURE
        if (_this.context._layer?.group.name == "Exposure Layers") {
            if (panelLayerExposureTitle.innerHTML == '') {
                EXPOSURE.innerHTML = "EXPOSURE"
                panelLayerExposureTitle.innerHTML = _this.context._layer?.group.name + ':'
                ExposureRow.style.display = 'block';
                // 
            }

            let ExposureLayersExit = clickedExposureLists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            console.log(ExposureLayersExit, "ExposureLayersExit");

            if (!ExposureLayersExit) {

                if (layer_name == 'District Boundaries') {
                    clickedExposureLists.push(
                        `<span style=" flex-direction: column; margin-right: 20px; margin-bottom: 10px;">` +
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} ` + `<span style="width: 30px; 
                        height: 1px; 
                        border-bottom: 2px dashed #000;
                        display: inline-block;"></span>` +
                        `</span>`
                    );
                }
                if (layer_name == 'Airport') {
                    clickedExposureLists.push(
                        `<span style=" flex-direction: column; margin-right: 20px; margin-bottom: 10px;">` +
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} ` +
                        `<i class="fas fa-plane"></i>` +
                        `</span>`
                    );
                }
                if (layer_name == 'Hospital') {
                    clickedExposureLists.push(
                        `<span style=" flex-direction: column; margin-right: 20px; margin-bottom: 10px;">` +
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} ` +
                        `<i class="fas fa-hospital"></i>` +
                        `</span>
                        `
                    );
                }
                if (layer_name == 'sports') {
                    clickedExposureLists.push(
                        `<span style=" flex-direction: column; margin-right: 20px; margin-bottom: 10px;">` +
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} ` + `<i class="fas fa-football-ball"></i>
                        ` +
                        `</span>`
                    );
                }
                if (layer_name === 'Power Plant') {
                    clickedExposureLists.push(
                        `<span style=" flex-direction: column; margin-right: 20px; margin-bottom: 10px;">` +
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}  ` + `
                         <img src="img/powerplant.jpeg" width="20" height="20" />` +
                        `</span>`
                    );
                }
                if (layer_name == 'Power Station') {
                    clickedExposureLists.push(
                        `<span style=" flex-direction: column; margin-right: 20px; margin-bottom: 10px;">` +
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} ` + `
                        <img src="img/powerstation.png" width="20" height="20" />` +
                        `</span>`
                    );
                }
                if (layer_name == 'Oil Refineries') {
                    clickedExposureLists.push(
                        `<span style=" flex-direction: column; margin-right: 20px; margin-bottom: 10px;">` +
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                        ` <i class="fas fa-industry"></i>` +
                        `</span>`
                    );
                }
                if (layer_name == 'Industrail') {
                    clickedExposureLists.push(
                        `<span style=" flex-direction: column; margin-right: 20px; margin-bottom: 10px;">` +
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` + ` 
                        <img src="img/industry.jpeg" width="20" height="20" />` +
                        `</span>`
                    );
                }
                if (layer_name === 'Socio Economic Zone') {
                    clickedExposureLists.push(
                        `<span style=" flex-direction: column; margin-right: 20px; margin-bottom: 10px;">` +
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} ` + `
                         <img src="img/socio_economic_zone.jpeg" width="20" height="20" />` +
                        `</span>`
                    );
                }
                if (layer_name == 'Road Network') {
                    clickedExposureLists.push(
                        `<span style=" flex-direction: column; margin-right: 20px; margin-bottom: 10px;">` +
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                        ` <img src="img/road_network.jpeg" style="width: 25px; height: auto;">` +
                        `</span>`
                    );
                }
                if (layer_name == 'Railway Network') {
                    clickedExposureLists.push(
                        `<span style=" flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                        ` <img src="img/railway.jpeg" style="width: 25px; height: auto;">` +
                        `</span>`
                    );
                }
                if (layer_name == 'DEM') {
                    clickedExposureLists.push(
                        `<span style=" flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                        `<img src="img/DEM.jpeg" style="width: 125px; height: auto;">` +
                        `</span>`
                    );
                }
                if (layer_name == 'LULC') {
                    clickedExposureLists.push(
                        `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                        `<img src="img/LULC.jpeg" style="width: 175px; height: 250px;">` +
                        `</span>`
                    );
                }
            }
            panelLayerExposureLists.innerHTML = clickedExposureLists.join("");
        }

        //METAR
        if (_this.context._layer?.group.name == "METAR 00UTC") {
            if (layer_name == 'Temperature_00') {
                metarTempImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Dew Point Temperature_00') {
                metarDewPointImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Visibility_00') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Wind Speed and Direction_00') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
        }
        if (_this.context._layer?.group.name == "METAR 01UTC") {
            if (layer_name == 'Temperature_01') {
                metarTempImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Dew Point Temperature_01') {
                metarDewPointImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Visibility_01') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Wind Speed and Direction_01') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
        }
        if (_this.context._layer?.group.name == "METAR 02UTC") {
            if (layer_name == 'Temperature_02') {
                metarTempImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Dew Point Temperature_02') {
                metarDewPointImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Visibility_02') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Wind Speed and Direction_02') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
        }
        if (_this.context._layer?.group.name == "METAR 03UTC") {
            if (layer_name == 'Temperature_03') {
                metarTempImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Dew Point Temperature_03') {
                metarDewPointImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Visibility_03') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Wind Speed and Direction_03') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
        }
        if (_this.context._layer?.group.name == "METAR 04UTC") {
            if (layer_name == 'Temperature_04') {
                metarTempImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Dew Point Temperature_04') {
                metarDewPointImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Visibility_04') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Wind Speed and Direction_04') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
        }
        if (_this.context._layer?.group.name == "METAR 05UTC") {
            if (layer_name == 'Temperature_05') {
                metarTempImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Dew Point Temperature_05') {
                metarDewPointImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Visibility_05') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Wind Speed and Direction_05') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
        }
        if (_this.context._layer?.group.name == "METAR 06UTC") {
            if (layer_name == 'Temperature_06') {
                metarTempImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Dew Point Temperature_06') {
                metarDewPointImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Visibility_06') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Wind Speed and Direction_06') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
        }
        if (_this.context._layer?.group.name == "METAR 07UTC") {
            if (layer_name == 'Temperature_07') {
                metarTempImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Dew Point Temperature_07') {
                metarDewPointImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Visibility_07') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Wind Speed and Direction_07') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
        }
        if (_this.context._layer?.group.name == "METAR 08UTC") {
            if (layer_name == 'Temperature_08') {
                metarTempImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Dew Point Temperature_08') {
                metarDewPointImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Visibility_08') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Wind Speed and Direction_08') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
        }
        if (_this.context._layer?.group.name == "METAR 09UTC") {
            if (layer_name == 'Temperature_09') {
                metarTempImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Dew Point Temperature_09') {
                metarDewPointImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Visibility_09') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Wind Speed and Direction_09') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
        }
        if (_this.context._layer?.group.name == "METAR 10UTC") {
            if (layer_name == 'Temperature_10') {
                metarTempImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Dew Point Temperature_10') {
                metarDewPointImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Visibility_10') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Wind Speed and Direction_10') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
        }
        if (_this.context._layer?.group.name == "METAR 11UTC") {
            if (layer_name == 'Temperature_11') {
                metarTempImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Dew Point Temperature_11') {
                metarDewPointImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Visibility_11') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Wind Speed and Direction_11') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
        }
        if (_this.context._layer?.group.name == "METAR 12UTC") {
            if (layer_name == 'Temperature_12') {
                metarTempImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Dew Point Temperature_12') {
                metarDewPointImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Visibility_12') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Wind Speed and Direction_12') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
        }
        if (_this.context._layer?.group.name == "METAR 13UTC") {
            if (layer_name == 'Temperature_13') {
                metarTempImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Dew Point Temperature_13') {
                metarDewPointImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Visibility_13') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Wind Speed and Direction_13') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
        }
        if (_this.context._layer?.group.name == "METAR 14UTC") {
            if (layer_name == 'Temperature_14') {
                metarTempImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Dew Point Temperature_14') {
                metarDewPointImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Visibility_14') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Wind Speed and Direction_14') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
        }
        if (_this.context._layer?.group.name == "METAR 15UTC") {
            if (layer_name == 'Temperature_15') {
                metarTempImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Dew Point Temperature_15') {
                metarDewPointImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Visibility_15') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Wind Speed and Direction_15') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
        }
        if (_this.context._layer?.group.name == "METAR 16UTC") {
            if (layer_name == 'Temperature_16') {
                metarTempImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Dew Point Temperature_16') {
                metarDewPointImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Visibility_16') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Wind Speed and Direction_16') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
        }
        if (_this.context._layer?.group.name == "METAR 17UTC") {
            if (layer_name == 'Temperature_17') {
                metarTempImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Dew Point Temperature_17') {
                metarDewPointImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Visibility_17') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Wind Speed and Direction_17') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
        }
        if (_this.context._layer?.group.name == "METAR 18UTC") {
            if (layer_name == 'Temperature_18') {
                metarTempImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Dew Point Temperature_18') {
                metarDewPointImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Visibility_18') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Wind Speed and Direction_18') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
        }
        if (_this.context._layer?.group.name == "METAR 19UTC") {
            if (layer_name == 'Temperature_19') {
                metarTempImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Dew Point Temperature_19') {
                metarDewPointImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Visibility_19') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Wind Speed and Direction_19') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
        }
        if (_this.context._layer?.group.name == "METAR 20UTC") {
            if (layer_name == 'Temperature_20') {
                metarTempImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Dew Point Temperature_20') {
                metarDewPointImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Visibility_20') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Wind Speed and Direction_20') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
        }
        if (_this.context._layer?.group.name == "METAR 21UTC") {
            if (layer_name == 'Temperature_21') {
                metarTempImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Dew Point Temperature_21') {
                metarDewPointImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Visibility_21') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Wind Speed and Direction_21') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
        }
        if (_this.context._layer?.group.name == "METAR 22UTC") {
            if (layer_name == 'Temperature_22') {
                metarTempImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Dew Point Temperature_22') {
                metarDewPointImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Visibility_22') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Wind Speed and Direction_22') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
        }
        if (_this.context._layer?.group.name == "METAR 23UTC") {
            if (layer_name == 'Temperature_23') {
                metarTempImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Dew Point Temperature_23') {
                metarDewPointImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Visibility_23') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
            if (layer_name == 'Wind Speed and Direction_23') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name, forExistLayer)
            }
        }


        // SYNOP--
        if (_this.context._layer?.group.name == "SYNOP 00UTC") {
            if (layer_name == 'Temperature_00') {
                synopTempImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Mean Sea Level Pressure_00') {
                synopMeanSeaLevelImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Cloud Cover_00') {
                synopCloudCoverImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Geopotential Height_00') {
                synopGeopotentialHeightImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Relative Humidity_00') {
                synopRelativeHumidityImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Visibility_00') {
                synopVisibilityImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Wind Speed and Direction_00') {
                synopWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == '3h Rainfall_00') {
                synop3hRainfallImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
        }
        if (_this.context._layer?.group.name == "SYNOP 03UTC") {
            if (layer_name == 'Temperature_03') {
                synopTempImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Mean Sea Level Pressure_03') {
                synopMeanSeaLevelImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Cloud Cover_03') {
                synopCloudCoverImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Geopotential Height_03') {
                synopGeopotentialHeightImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Relative Humidity_03') {
                synopRelativeHumidityImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Visibility_03') {
                synopVisibilityImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Wind Speed and Direction_03') {
                synopWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == '3h Rainfall_03') {
                synop3hRainfallImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
        }
        if (_this.context._layer?.group.name == "SYNOP 06UTC") {
            if (layer_name == 'Temperature_06') {
                synopTempImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Mean Sea Level Pressure_06') {
                synopMeanSeaLevelImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Cloud Cover_06') {
                synopCloudCoverImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Geopotential Height_06') {
                synopGeopotentialHeightImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Relative Humidity_06') {
                synopRelativeHumidityImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Visibility_06') {
                synopVisibilityImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Wind Speed and Direction_06') {
                synopWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == '3h Rainfall_06') {
                synop3hRainfallImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
        }
        if (_this.context._layer?.group.name == "SYNOP 09UTC") {
            if (layer_name == 'Temperature_09') {
                synopTempImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Mean Sea Level Pressure_09') {
                synopMeanSeaLevelImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Cloud Cover_09') {
                synopCloudCoverImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Geopotential Height_09') {
                synopGeopotentialHeightImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Relative Humidity_09') {
                synopRelativeHumidityImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Visibility_09') {
                synopVisibilityImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Wind Speed and Direction_09') {
                synopWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == '3h Rainfall_09') {
                synop3hRainfallImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
        }
        if (_this.context._layer?.group.name == "SYNOP 12UTC") {
            if (layer_name == 'Temperature_12') {
                synopTempImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Mean Sea Level Pressure_12') {
                synopMeanSeaLevelImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Cloud Cover_12') {
                synopCloudCoverImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Geopotential Height_12') {
                synopGeopotentialHeightImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Relative Humidity_12') {
                synopRelativeHumidityImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Visibility_12') {
                synopVisibilityImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Wind Speed and Direction_12') {
                synopWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == '3h Rainfall_12') {
                synop3hRainfallImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
        }
        if (_this.context._layer?.group.name == "SYNOP 15UTC") {
            if (layer_name == 'Temperature_15') {
                synopTempImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Mean Sea Level Pressure_15') {
                synopMeanSeaLevelImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'CLOUD COVER_15') {
                synopCloudCoverImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Geopotential Height_15') {
                synopGeopotentialHeightImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Relative Humidity_15') {
                synopRelativeHumidityImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Visibility_15') {
                synopVisibilityImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Wind Speed and Direction_15') {
                synopWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == '3h Rainfall_15') {
                synop3hRainfallImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
        }
        if (_this.context._layer?.group.name == "SYNOP 18UTC") {
            if (layer_name == 'Temperature_18') {
                synopTempImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Mean Sea Level Pressure_18') {
                synopMeanSeaLevelImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Cloud Cover_18') {
                synopCloudCoverImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Geopotential Height_18') {
                synopGeopotentialHeightImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Relative Humidity_18') {
                synopRelativeHumidityImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Visibility_18') {
                synopVisibilityImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Wind Speed and Direction_18') {
                synopWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == '3h Rainfall_18') {
                synop3hRainfallImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
        }
        if (_this.context._layer?.group.name == "SYNOP 21UTC") {
            if (layer_name == 'Temperature_21') {
                synopTempImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Mean Sea Level Pressure') {
                synopMeanSeaLevelImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Cloud Cover_21') {
                synopCloudCoverImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Geopotential Height_21') {
                synopGeopotentialHeightImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Relative Humidity_21') {
                synopRelativeHumidityImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Visibility_21') {
                synopVisibilityImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == 'Wind Speed and Direction_21') {
                synopWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
            if (layer_name == '3h Rainfall_21') {
                synop3hRainfallImageAndLegend(layer_group_name, layer_name, forExistLayer);
            }
        }


        // RADAR--
        if (_this.context._layer?.group.name == "Radar Products") {
            if (panelLayerRADARPRODUCTS_Title.innerHTML == '') {
                RADARPRODUCTS.innerHTML = "RADAR"
                panelLayerRADARPRODUCTS_Title.innerHTML = _this.context._layer?.group.name + ':'
                RADAR_Row.style.display = 'block';
            }
            let AlreadyExit = clickedRADARPRODUCTSLists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name == 'Radar Reflectivity') {
                    clickedRADARPRODUCTSLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} <br>`
                    );
                    RADARLegendImage();
                }
                if (layer_name == 'Radar Animation') {
                    clickedRADARPRODUCTSLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} <br>`
                    );
                    RADARLegendImage();
                }
            }
            panelLayerRADARPRODUCTS_lists.innerHTML = clickedRADARPRODUCTSLists.join("");
        }

        // Satellite
        if (_this.context._layer?.group.name == "Satellite Observation") {
            if (panelLayerSATELLITE_Title.innerHTML == '') {
                SATELLITE.innerHTML = "SATELLITE"
                panelLayerSATELLITE_Title.innerHTML = _this.context._layer?.group.name + ':'
                SATELLITE_Row.style.display = 'block';
            }
            let AlreadyExit = clickedSATELLITELists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name == 'TIR1') {
                    clickedSATELLITELists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}`
                    );
                }
                if (layer_name == 'VIS') {
                    clickedSATELLITELists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}`
                    );
                }
                if (layer_name == 'CTBT') {
                    clickedSATELLITELists.push(
                        `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
                <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
                <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
                <span style="align-items: center; width:35px; height:18px; border-radius: 15%; background-color: #0001f9; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 0;">-40</span>
                    <span style="align-items: center; width:35px; height:18px; border-radius: 15%; background-color: #02fbfd; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 0;">-50</span>
                    <span style="align-items: center; width:35px; height:18px; border-radius: 15%; background-color: #a200c9; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 0;">-60</span>
                    <span style="align-items: center; width:35px; height:18px; border-radius: 15%; background-color: #fe0000; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 0;">-80</span>
                </span>
                </span>`
                    );
                }
                if (layer_name == 'Low Level Convergence') {
                    clickedSATELLITELists.push(
                        `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
                <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
                <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
                    <span style="align-items: center; width:20px; height:18px; border-radius: 15%; background-color: #1a9641; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">0</span>
                    <span style="align-items: center; width:20px; height:18px; border-radius: 15%; background-color: #8acc62; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">20</span>
                    <span style="align-items: center; width:20px; height:18px; border-radius: 15%; background-color: #0a06fa; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">40</span>
                
                    <span style="align-items: center; width:20px; height:18px; border-radius: 15%; background-color: #faff60; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">60</span>
                    <span style="align-items: center; width:20px; height:18px; border-radius: 15%; background-color: #f69053; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">80</span>
                    <span style="align-items: center; width:20px; height:18px; border-radius: 15%; background-color: #d7191c; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">100</span>

                    </span>
                </span>`
                    );
                }
                if (layer_name == 'Upper Level Divergence') {
                    clickedSATELLITELists.push(
                        `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
                <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
                <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
                    <span style="align-items: center; width:20px; height:18px; border-radius: 15%; background-color: #1a9641; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">0</span>
                    <span style="align-items: center; width:20px; height:18px; border-radius: 15%; background-color: #8acc62; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">20</span>
                    <span style="align-items: center; width:20px; height:18px; border-radius: 15%; background-color: #0a06fa; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">40</span>
                
                    <span style="align-items: center; width:20px; height:18px; border-radius: 15%; background-color: #faff60; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">60</span>
                    <span style="align-items: center; width:20px; height:18px; border-radius: 15%; background-color: #f69053; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">80</span>
                    <span style="align-items: center; width:20px; height:18px; border-radius: 15%; background-color: #d7191c; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">100</span>

                    </span>
                </span>`
                    );
                }
                if (layer_name == 'Mid Level Shear') {
                    clickedSATELLITELists.push(
                        `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
                <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
                <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
                <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
                    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #3288bd; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">-20</span>
                    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #66c2a5; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">-5</span>
                    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #abdda4; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">10</span>
                    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #becf50; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">25</span>
                    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fbef00; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">40</span>
                    </span>
                    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
                    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #f4a582; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">55</span>
                    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fdae61; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">70</span>
                    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #f46d43; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">85</span>
                    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #d53e4f; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">100</span>
                
                    </span>
                </span>`
                    );
                }
                if (layer_name == 'Vorticity at 200hPa') {
                    clickedSATELLITELists.push(
                        `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
                <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
                <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
                <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #e66101; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;"><=-250</span>
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #f08428; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">-250--200</span>
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #f9a74f; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">-200--150</span>
                
                    </span>
                    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
                    
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #fcc581; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">-150--100</span>
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #fadebc; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">-100--50</span>
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #f7f758; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">-50-0</span>
                
                    </span>
                    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
                    
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #57f14c; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">0-50</span>
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #c0bada; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">50-100</span>
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #a195c7; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">100-150</span>
                
                    </span>
                    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #8068b0; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">150-200</span>
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #5e3c99; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">200-250</span>
                
                    </span>

                    </span>
                </span>`
                    );
                }
                if (layer_name == 'Vorticity at 500hPa') {
                    clickedSATELLITELists.push(
                        `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
                <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
                <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
                <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #e66101; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;"><=-250</span>
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #f08428; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">-250--200</span>
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #f9a74f; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">-200--150</span>
                
                    </span>
                    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
                    
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #fcc581; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">-150--100</span>
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #fadebc; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">-100--50</span>
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #f7f758; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">-50-0</span>
                
                    </span>
                    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
                    
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #57f14c; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">0-50</span>
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #c0bada; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">50-100</span>
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #a195c7; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">100-150</span>
                
                    </span>
                    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #8068b0; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">150-200</span>
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #5e3c99; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">200-250</span>
                
                    </span>

                    </span>
                </span>`
                    );
                }
                if (layer_name == 'Vorticity at 700hPa') {
                    clickedSATELLITELists.push(
                        `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
                <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
                <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
                <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #e66101; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;"><=-250</span>
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #f08428; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">-250--200</span>
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #f9a74f; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">-200--150</span>
                
                    </span>
                    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
                    
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #fcc581; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">-150--100</span>
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #fadebc; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">-100--50</span>
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #f7f758; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">-50-0</span>
                
                    </span>
                    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
                    
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #57f14c; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">0-50</span>
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #c0bada; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">50-100</span>
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #a195c7; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">100-150</span>
                
                    </span>
                    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #8068b0; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">150-200</span>
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #5e3c99; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">200-250</span>
                
                    </span>

                    </span>
                </span>`
                    );
                }
                if (layer_name == 'Vorticity at 850hPa') {
                    clickedSATELLITELists.push(
                        `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
                <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
                <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
                <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #e66101; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;"><=-250</span>
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #f08428; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">-250--200</span>
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #f9a74f; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">-200--150</span>
                
                    </span>
                    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
                    
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #fcc581; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">-150--100</span>
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #fadebc; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">-100--50</span>
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #f7f758; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">-50-0</span>
                
                    </span>
                    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
                    
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #57f14c; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">0-50</span>
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #c0bada; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">50-100</span>
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #a195c7; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">100-150</span>
                
                    </span>
                    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #8068b0; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">150-200</span>
                    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #5e3c99; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">200-250</span>
                
                    </span>

                    </span>
                </span>`
                    );
                }
            }
            panelLayerSATELLITE_lists.innerHTML = clickedSATELLITELists.join("");
        }

        //Lightning --
        if (_this.context._layer?.group.name == "Lightning") {
            if (panelLayerLIGHTINING_Title.innerHTML == '') {
                LIGHTINING.innerHTML = "LIGHTINING"
                panelLayerLIGHTINING_Title.innerHTML = _this.context._layer?.group.name + ':'
                LIGHTINING_Row.style.display = 'block';
            }
            let AlreadyExit = clickedLIGHTININGLists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name == 'Last 00-05 min') {
                    clickedLIGHTININGLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} <br>`
                    );
                    LIGHTININGLegendImage();
                }
                if (layer_name == 'Last 05-10 min') {
                    clickedLIGHTININGLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} <br>`
                    );
                    LIGHTININGLegendImage();
                }
                if (layer_name == 'Last 10-15 min') {
                    clickedLIGHTININGLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} <br>`
                    );
                    LIGHTININGLegendImage();
                }
                if (layer_name == 'ILDN Last 05 min') {
                    clickedLIGHTININGLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} <br>`
                    );
                    LIGHTININGLegendImage();
                }
                if (layer_name == 'Nowcast Alerts') {
                    clickedLIGHTININGLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} <br>`
                    );
                    LIGHTININGLegendImage();
                }
            }
            panelLayerLIGHTINING_lists.innerHTML = clickedLIGHTININGLists.join("");
        }

        // SOUNDING //
        if (_this.context._layer?.group.name == "Sounding_00UTC Wind") {
            if (panelLayerSOUNDING00UTCWIND_Title.innerHTML == '') {
                SOUNDING.innerHTML = "SOUNDING"
                panelLayerSOUNDING00UTCWIND_Title.innerHTML = _this.context._layer?.group.name + ':'
                SOUNDING_Row.style.display = 'block';
            }
            let AlreadyExit = clickedSOUNDING00UTCWINDLists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name == '1000 hPa Wind') {
                    clickedSOUNDING00UTCWINDLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '850 hPa Wind') {
                    clickedSOUNDING00UTCWINDLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '700 hPa Wind') {
                    clickedSOUNDING00UTCWINDLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '500 hPa Wind') {
                    clickedSOUNDING00UTCWINDLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '300 hPa Wind') {
                    clickedSOUNDING00UTCWINDLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '200 hPa Wind') {
                    clickedSOUNDING00UTCWINDLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '100 hPa Wind') {
                    clickedSOUNDING00UTCWINDLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '50 hPa Wind') {
                    clickedSOUNDING00UTCWINDLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
            }
            panelLayerSOUNDING00UTCWIND_lists.innerHTML = clickedSOUNDING00UTCWINDLists.join("");
        }

        if (_this.context._layer?.group.name == "Sounding_12UTC Wind") {
            if (panelLayerSOUNDING12UTCWIND_Title.innerHTML == '') {
                SOUNDING.innerHTML = "SOUNDING"
                panelLayerSOUNDING12UTCWIND_Title.innerHTML = _this.context._layer?.group.name + ':'
                SOUNDING_Row.style.display = 'block';
            }

            let AlreadyExit = clickedSOUNDING12UTCWINDLists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name == '1000 hPa Wind') {
                    clickedSOUNDING12UTCWINDLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '850 hPa Wind') {
                    clickedSOUNDING12UTCWINDLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '700 hPa Wind') {
                    clickedSOUNDING12UTCWINDLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '500 hPa Wind') {
                    clickedSOUNDING12UTCWINDLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '300 hPa Wind') {
                    clickedSOUNDING12UTCWINDLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '200 hPa Wind') {
                    clickedSOUNDING12UTCWINDLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '100 hPa Wind') {
                    clickedSOUNDING12UTCWINDLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '50 hPa Wind') {
                    clickedSOUNDING12UTCWINDLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
            }
            panelLayerSOUNDING12UTCWIND_lists.innerHTML = clickedSOUNDING12UTCWINDLists.join("");
        }

        if (_this.context._layer?.group.name == "Sounding_00UTC Temp") {
            if (panelLayerSOUNDING00UTCTEMP_Title.innerHTML == '') {
                SOUNDING.innerHTML = "SOUNDING"
                panelLayerSOUNDING00UTCTEMP_Title.innerHTML = _this.context._layer?.group.name + ':'
                SOUNDING_Row.style.display = 'block';
            }

            let AlreadyExit = clickedSOUNDING00UTCTEMPLists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name == '1000 hPa Temp') {
                    clickedSOUNDING00UTCTEMPLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '850 hPa Temp') {
                    clickedSOUNDING00UTCTEMPLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '700 hPa Temp') {
                    clickedSOUNDING00UTCTEMPLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '500 hPa Temp') {
                    clickedSOUNDING00UTCTEMPLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '300 hPa Temp') {
                    clickedSOUNDING00UTCTEMPLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '200 hPa Temp') {
                    clickedSOUNDING00UTCTEMPLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '100 hPa Temp') {
                    clickedSOUNDING00UTCTEMPLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '50 hPa Temp') {
                    clickedSOUNDING00UTCTEMPLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
            }
            panelLayerSOUNDING00UTCTEMP_lists.innerHTML = clickedSOUNDING00UTCTEMPLists.join("");
        }

        if (_this.context._layer?.group.name == "Sounding_12UTC Temp") {
            if (panelLayerSOUNDING12UTCTEMP_Title.innerHTML == '') {
                SOUNDING.innerHTML = "SOUNDING"
                panelLayerSOUNDING12UTCTEMP_Title.innerHTML = _this.context._layer?.group.name + ':'
                SOUNDING_Row.style.display = 'block';
            }

            let AlreadyExit = clickedSOUNDING12UTCTEMPLists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {

                if (layer_name == '1000 hPa Temp') {
                    clickedSOUNDING12UTCTEMPLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '850 hPa Temp') {
                    clickedSOUNDING12UTCTEMPLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '700 hPa Temp') {
                    clickedSOUNDING12UTCTEMPLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '500 hPa Temp') {
                    clickedSOUNDING12UTCTEMPLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '300 hPa Temp') {
                    clickedSOUNDING12UTCTEMPLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '200 hPa Temp') {
                    clickedSOUNDING12UTCTEMPLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '100 hPa Temp') {
                    clickedSOUNDING12UTCTEMPLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '50 hPa Temp') {
                    clickedSOUNDING12UTCTEMPLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
            }
            panelLayerSOUNDING12UTCTEMP_lists.innerHTML = clickedSOUNDING12UTCTEMPLists.join("");
        }

        if (_this.context._layer?.group.name == "Sounding_00UTC Dew Point") {
            if (panelLayerSOUNDING00UTCDEWPOINT_Title.innerHTML == '') {
                SOUNDING.innerHTML = "SOUNDING"
                panelLayerSOUNDING00UTCDEWPOINT_Title.innerHTML = _this.context._layer?.group.name + ':'
                SOUNDING_Row.style.display = 'block';
            }
            let AlreadyExit = clickedSOUNDING00UTCDEWPOINTLists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name == '1000 hPa Dew Point') {
                    clickedSOUNDING00UTCDEWPOINTLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '850 hPa Dew Point') {
                    clickedSOUNDING00UTCDEWPOINTLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '700 hPa Dew Point') {
                    clickedSOUNDING00UTCDEWPOINTLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '500 hPa Dew Point') {
                    clickedSOUNDING00UTCDEWPOINTLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '300 hPa Dew Point') {
                    clickedSOUNDING00UTCDEWPOINTLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '200 hPa Dew Point') {
                    clickedSOUNDING00UTCDEWPOINTLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '100 hPa Dew Point') {
                    clickedSOUNDING00UTCDEWPOINTLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '50 hPa Dew Point') {
                    clickedSOUNDING00UTCDEWPOINTLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
            }
            panelLayerSOUNDING00UTCDEWPOINT_lists.innerHTML = clickedSOUNDING00UTCDEWPOINTLists.join("");
        }

        if (_this.context._layer?.group.name == "Sounding_12UTC Dew Point") {
            if (panelLayerSOUNDING12UTCDEWPOINT_Title.innerHTML == '') {
                SOUNDING.innerHTML = "SOUNDING"
                panelLayerSOUNDING12UTCDEWPOINT_Title.innerHTML = _this.context._layer?.group.name + ':'
                SOUNDING_Row.style.display = 'block';
            }
            let AlreadyExit = clickedSOUNDING12UTCDEWPOINTLists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name == '1000 hPa Dew Point') {
                    clickedSOUNDING12UTCDEWPOINTLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '850 hPa Dew Point') {
                    clickedSOUNDING12UTCDEWPOINTLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '700 hPa Dew Point') {
                    clickedSOUNDING12UTCDEWPOINTLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '500 hPa Dew Point') {
                    clickedSOUNDING12UTCDEWPOINTLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '300 hPa Dew Point') {
                    clickedSOUNDING12UTCDEWPOINTLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '200 hPa Dew Point') {
                    clickedSOUNDING12UTCDEWPOINTLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '100 hPa Dew Point') {
                    clickedSOUNDING12UTCDEWPOINTLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
                if (layer_name == '50 hPa Dew Point') {
                    clickedSOUNDING12UTCDEWPOINTLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    soundingLegendImage();
                }
            }
            panelLayerSOUNDING12UTCDEWPOINT_lists.innerHTML = clickedSOUNDING12UTCDEWPOINTLists.join("");
        }

        if (_this.context._layer?.group.name == "Ship and Buoy Observation") {
            if (panelLayerSHIPANDBUOY_Title.innerHTML == '') {
                SHIPANDBUOY.innerHTML = "SHIP AND BUOY"
                panelLayerSHIPANDBUOY_Title.innerHTML = _this.context._layer?.group.name + ':'
                SHIPANDBUOY_Row.style.display = 'block';
            }
            let AlreadyExit = clickedSHIPANDBUOYLists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name == '00UTC') {
                    clickedSHIPANDBUOYLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    SHIPANDBUOYLegendImage();
                }
                if (layer_name == '01UTC') {
                    clickedSHIPANDBUOYLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    SHIPANDBUOYLegendImage();
                }
                if (layer_name == '02UTC') {
                    clickedSHIPANDBUOYLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    SHIPANDBUOYLegendImage();
                }
                if (layer_name == '03UTC') {
                    clickedSHIPANDBUOYLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    SHIPANDBUOYLegendImage();
                }
                if (layer_name == '04UTC') {
                    clickedSHIPANDBUOYLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    SHIPANDBUOYLegendImage();
                }
                if (layer_name == '05UTC') {
                    clickedSHIPANDBUOYLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    SHIPANDBUOYLegendImage();
                }
                if (layer_name == '06UTC') {
                    clickedSHIPANDBUOYLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    SHIPANDBUOYLegendImage();
                }
                if (layer_name == '07UTC') {
                    clickedSHIPANDBUOYLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    SHIPANDBUOYLegendImage();
                }
                if (layer_name == '08UTC') {
                    clickedSHIPANDBUOYLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    SHIPANDBUOYLegendImage();
                }
                if (layer_name == '09UTC') {
                    clickedSHIPANDBUOYLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    SHIPANDBUOYLegendImage();
                }
                if (layer_name == '10UTC') {
                    clickedSHIPANDBUOYLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    SHIPANDBUOYLegendImage();
                }
                if (layer_name == '11UTC') {
                    clickedSHIPANDBUOYLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    SHIPANDBUOYLegendImage();
                }
                if (layer_name == '12UTC') {
                    clickedSHIPANDBUOYLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    SHIPANDBUOYLegendImage();
                }
                if (layer_name == '13UTC') {
                    clickedSHIPANDBUOYLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    SHIPANDBUOYLegendImage();
                }
                if (layer_name == '14UTC') {
                    clickedSHIPANDBUOYLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    SHIPANDBUOYLegendImage();
                }
                if (layer_name == '15UTC') {
                    clickedSHIPANDBUOYLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    SHIPANDBUOYLegendImage();
                }
                if (layer_name == '16UTC') {
                    clickedSHIPANDBUOYLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    SHIPANDBUOYLegendImage();
                }
                if (layer_name == '17UTC') {
                    clickedSHIPANDBUOYLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    SHIPANDBUOYLegendImage();
                }
                if (layer_name == '18UTC') {
                    clickedSHIPANDBUOYLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    SHIPANDBUOYLegendImage();
                }
                if (layer_name == '19UTC') {
                    clickedSHIPANDBUOYLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    SHIPANDBUOYLegendImage();
                }
                if (layer_name == '20UTC') {
                    clickedSHIPANDBUOYLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    SHIPANDBUOYLegendImage();
                }
                if (layer_name == '21UTC') {
                    clickedSHIPANDBUOYLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    SHIPANDBUOYLegendImage();
                }
                if (layer_name == '22UTC') {
                    clickedSHIPANDBUOYLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    SHIPANDBUOYLegendImage();
                }
                if (layer_name == '23UTC') {
                    clickedSHIPANDBUOYLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    SHIPANDBUOYLegendImage();
                }
            }
            panelLayerSHIPANDBUOY_lists.innerHTML = clickedSHIPANDBUOYLists.join("");
        }
        if (_this.context._layer?.group.name == "WRF Reflectivity") {
            if (panelLayerWRFReflectivity_Title.innerHTML == '') {
                MESOLSCALE.innerHTML = "MESOLSCALE FORECAST"
                panelLayerWRFReflectivity_Title.innerHTML = _this.context._layer?.group.name + ':'
                MESOLSCALE_Row.style.display = 'block';
            }

            let AlreadyExit = clickedWRFReflectivityLists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name == 'WRF R Next 03 Hrs') {
                    clickedWRFReflectivityLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    WRFReflectivityLegendImage();
                }
                if (layer_name == 'WRF R Next 03-06 Hrs') {
                    clickedWRFReflectivityLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    WRFReflectivityLegendImage();
                }
            }
            panelLayerWRFReflectivity_lists.innerHTML = clickedWRFReflectivityLists.join("");
        }
        if (_this.context._layer?.group.name == "WRF Lightning Product") {
            if (panelLayerWRFlightningProduct_Title.innerHTML == '') {
                MESOLSCALE.innerHTML = "MESOLSCALE FORECAST"
                panelLayerWRFlightningProduct_Title.innerHTML = _this.context._layer?.group.name + ':'
                MESOLSCALE_Row.style.display = 'block';
            }
            let AlreadyExit = clickedWRFlightningProductLists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name == 'WRF LP Next 03 Hrs') {
                    clickedWRFlightningProductLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    WRFlightningProductLegendImage();
                }
                if (layer_name == 'WRF LP Next 03-06 Hrs') {
                    clickedWRFlightningProductLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    WRFlightningProductLegendImage();
                }
            }
            panelLayerWRFlightningProduct_lists.innerHTML = clickedWRFlightningProductLists.join("");
        }
        if (_this.context._layer?.group.name == "WRF Accumlated Rainfall") {
            if (panelLayerWRFAccumlatedRainfall_Title.innerHTML == '') {
                MESOLSCALE.innerHTML = "MESOLSCALE FORECAST"
                panelLayerWRFAccumlatedRainfall_Title.innerHTML = _this.context._layer?.group.name + ':'
                MESOLSCALE_Row.style.display = 'block';
            }

            let AlreadyExit = clickedWRFAccumlatedRainfallLists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name == 'WRF AR Next 03 Hrs') {
                    clickedWRFAccumlatedRainfallLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    WRFAccumlatedRainfallLegendImage();
                }
                if (layer_name == 'WRF AR Next 03-06 Hrs') {
                    clickedWRFAccumlatedRainfallLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    WRFAccumlatedRainfallLegendImage();
                }
            }
            panelLayerWRFAccumlatedRainfall_lists.innerHTML = clickedWRFAccumlatedRainfallLists.join("");
        }
        if (_this.context._layer?.group.name == "Lightning Potential Index") {
            if (panelLayerlightningPotentialindex_Title.innerHTML == '') {
                MESOLSCALE.innerHTML = "MESOLSCALE FORECAST"
                panelLayerlightningPotentialindex_Title.innerHTML = _this.context._layer?.group.name + ':'
                MESOLSCALE_Row.style.display = 'block';
            }
            let AlreadyExit = clickedlightningPotentialindexLists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name == 'LP Next 01 Hrs') {
                    clickedlightningPotentialindexLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    lightningPotentialindexLegendImage();
                }
                if (layer_name == 'LP Next 01-02 Hrs') {
                    clickedlightningPotentialindexLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    lightningPotentialindexLegendImage();
                }
                if (layer_name == 'LP Next 02-03 Hrs') {
                    clickedlightningPotentialindexLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    lightningPotentialindexLegendImage();
                }
            }
            panelLayerlightningPotentialindex_lists.innerHTML = clickedlightningPotentialindexLists.join(
                "");
        }
        if (_this.context._layer?.group.name == "NCUMR Lightning Product") {
            if (panelLayerNCUMRlightningProduct_Title.innerHTML == '') {
                MESOLSCALE.innerHTML = "MESOLSCALE FORECAST"
                panelLayerNCUMRlightningProduct_Title.innerHTML = _this.context._layer?.group.name + ':'
                MESOLSCALE_Row.style.display = 'block';
            }
            let AlreadyExit = clickedNCUMRlightningProductLists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name == 'NCUMR LP Next 03 Hrs') {
                    clickedNCUMRlightningProductLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    NCUMRlightningProductLegendImage();
                }
                if (layer_name == 'NCUMR LP Next 03-06 Hrs') {
                    clickedNCUMRlightningProductLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    NCUMRlightningProductLegendImage();
                }
            }
            panelLayerNCUMRlightningProduct_lists.innerHTML = clickedNCUMRlightningProductLists.join("");
        }
        if (_this.context._layer?.group.name == "NCUMR Wind Gust") {
            if (panelLayerNCUMRWindGust_Title.innerHTML == '') {
                MESOLSCALE.innerHTML = "MESOLSCALE FORECAST"
                panelLayerNCUMRWindGust_Title.innerHTML = _this.context._layer?.group.name + ':'
                MESOLSCALE_Row.style.display = 'block';
            }
            let AlreadyExit = clickedNCUMRWindGustLists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name == 'NCUMR WG Next 03 Hrs') {
                    clickedNCUMRWindGustLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    NCUMRWindGustLegendImage();
                }
                if (layer_name == 'NCUMR WG Next 03-06 Hrs') {
                    clickedNCUMRWindGustLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    NCUMRWindGustLegendImage();
                }
            }
            panelLayerNCUMRWindGust_lists.innerHTML = clickedNCUMRWindGustLists.join("");
        }
        if (_this.context._layer?.group.name == "NCUMR Rainfall") {
            if (panelLayerNCUMRRainfall_Title.innerHTML == '') {
                MESOLSCALE.innerHTML = "MESOLSCALE FORECAST"
                panelLayerNCUMRRainfall_Title.innerHTML = _this.context._layer?.group.name + ':'
                MESOLSCALE_Row.style.display = 'block';
            }
            let AlreadyExit = clickedNCUMRRainfallLists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name == 'NCUMR R Next 03 Hrs') {
                    clickedNCUMRRainfallLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    NCUMRRainfallLegendImage();
                }
                if (layer_name == 'NCUMR R Next 03-06 Hrs') {
                    clickedNCUMRRainfallLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    NCUMRRainfallLegendImage();
                }
            }
            panelLayerNCUMRRainfall_lists.innerHTML = clickedNCUMRRainfallLists.join("");
        }
        if (_this.context._layer?.group.name == "HRRR_SP Hourly DBZ") {
            if (panelLayerHRRR_SPHourlyDBZ_Title.innerHTML == '') {
                MESOLSCALE.innerHTML = "MESOLSCALE FORECAST"
                panelLayerHRRR_SPHourlyDBZ_Title.innerHTML = _this.context._layer?.group.name + ':'
                MESOLSCALE_Row.style.display = 'block';
            }
            let AlreadyExit = clickedHRRR_SPHourlyDBZLists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name == 'HRRR SP Next 01 Hrs') {
                    clickedHRRR_SPHourlyDBZLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    HRRR_SPHourlyDBZLegendImage();
                }
                if (layer_name == 'HRRR SP Next 01-02 Hrs') {
                    clickedHRRR_SPHourlyDBZLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    HRRR_SPHourlyDBZLegendImage();
                }
                if (layer_name == 'HRRR SP Next 02-03 Hrs') {
                    clickedHRRR_SPHourlyDBZLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    HRRR_SPHourlyDBZLegendImage();
                }
            }
            panelLayerHRRR_SPHourlyDBZ_lists.innerHTML = clickedHRRR_SPHourlyDBZLists.join("");
        }
        if (_this.context._layer?.group.name == "HRRR_NE Hourly DBZ") {
            if (panelLayerHRRR_NEHourlyDBZ_Title.innerHTML == '') {
                MESOLSCALE.innerHTML = "MESOLSCALE FORECAST"
                panelLayerHRRR_NEHourlyDBZ_Title.innerHTML = _this.context._layer?.group.name + ':'
                MESOLSCALE_Row.style.display = 'block';
            }
            let AlreadyExit = clickedHRRR_NEHourlyDBZLists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name == 'HRRR NE Next 01 Hrs') {
                    clickedHRRR_NEHourlyDBZLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    HRRR_NEHourlyDBZLegendImage();
                }
                if (layer_name == 'HRRR NE Next 01-02 Hrs') {
                    clickedHRRR_NEHourlyDBZLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    HRRR_NEHourlyDBZLegendImage();
                }
                if (layer_name == 'HRRR NE Next 02-03 Hrs') {
                    clickedHRRR_NEHourlyDBZLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    HRRR_NEHourlyDBZLegendImage();
                }
            }
            panelLayerHRRR_NEHourlyDBZ_lists.innerHTML = clickedHRRR_NEHourlyDBZLists.join("");
        }
        if (_this.context._layer?.group.name == "HRRR_NW Hourly DBZ") {
            if (panelLayerHRRR_NWHourlyDBZ_Title.innerHTML == '') {
                MESOLSCALE.innerHTML = "MESOLSCALE FORECAST"
                panelLayerHRRR_NWHourlyDBZ_Title.innerHTML = _this.context._layer?.group.name + ':'
                MESOLSCALE_Row.style.display = 'block';
            }
            let AlreadyExit = clickedHRRR_NWHourlyDBZLists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name == 'HRRR NW Next 01 Hrs') {
                    clickedHRRR_NWHourlyDBZLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    HRRR_NWHourlyDBZLegendImage();
                }
                if (layer_name == 'HRRR NW Next 01-02 Hrs') {
                    clickedHRRR_NWHourlyDBZLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    HRRR_NWHourlyDBZLegendImage();
                }
                if (layer_name == 'HRRR NW Next 02-03 Hrs') {
                    clickedHRRR_NWHourlyDBZLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    HRRR_NWHourlyDBZLegendImage();
                }
            }
            panelLayerHRRR_NWHourlyDBZ_lists.innerHTML = clickedHRRR_NWHourlyDBZLists.join("");
        }
        if (_this.context._layer?.group.name == "EWRF MaxZ") {
            if (panelLayerEWRFMaxZ_Title.innerHTML == '') {
                MESOLSCALE.innerHTML = "MESOLSCALE FORECAST"
                panelLayerEWRFMaxZ_Title.innerHTML = _this.context._layer?.group.name + ':'
                MESOLSCALE_Row.style.display = 'block';
            }
            let AlreadyExit = clickedEWRFMaxZLists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name == 'EWRF M Next 01 Hrs') {
                    clickedEWRFMaxZLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    EWRFMaxZLegendImage();
                }
                if (layer_name == 'EWRF M Next 01-02 Hrs') {
                    clickedEWRFMaxZLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    EWRFMaxZLegendImage();
                }
                if (layer_name == 'EWRF M Next 02-03 Hrs') {
                    clickedEWRFMaxZLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    EWRFMaxZLegendImage();
                }
            }
            panelLayerEWRFMaxZ_lists.innerHTML = clickedEWRFMaxZLists.join("");
        }
        if (_this.context._layer?.group.name == "EWRF Lightning") {
            if (panelLayerEWRFLightning_Title.innerHTML == '') {
                MESOLSCALE.innerHTML = "MESOLSCALE FORECAST"
                panelLayerEWRFLightning_Title.innerHTML = _this.context._layer?.group.name + ':'
                MESOLSCALE_Row.style.display = 'block';
            }
            let AlreadyExit = clickedEWRFLightningLists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name == 'EWRF L Next 01 Hrs') {
                    clickedEWRFLightningLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    EWRFLightningLegendImage();
                }
                if (layer_name == 'EWRF L Next 01-02 Hrs') {
                    clickedEWRFLightningLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    EWRFLightningLegendImage();
                }
                if (layer_name == 'EWRF L Next 02-03 Hrs') {
                    clickedEWRFLightningLists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    EWRFLightningLegendImage();
                }
            }
            panelLayerEWRFLightning_lists.innerHTML = clickedEWRFLightningLists.join("");
        }

        // MEDIUM
        if (_this.context._layer?.group.name == "Rainfall Intensity Day1") {
            if (panelLayerRainfallIntensityDay1_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayerRainfallIntensityDay1_Title.innerHTML = _this.context._layer?.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }
            let AlreadyExit = clickedRainfallIntensityDay1Lists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            console.log(layer_name, "layer_name RI");
            if (!AlreadyExit) {
                if (layer_name == 'RI GFS DAY1') {
                    clickedRainfallIntensityDay1Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    RainfallIntensityLegendImage();
                }
                if (layer_name == 'RI NCUM Day1') {
                    clickedRainfallIntensityDay1Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    RainfallIntensityLegendImage();
                }
                if (layer_name == 'RI NEPS Day1') {
                    clickedRainfallIntensityDay1Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    RainfallIntensityLegendImage();
                }
                if (layer_name == 'RI WRF Day1') {
                    clickedRainfallIntensityDay1Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    RainfallIntensityLegendImage();
                }
                if (layer_name == 'RI GEFS Day1') {
                    clickedRainfallIntensityDay1Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    RainfallIntensityLegendImage();
                }
                if (layer_name == 'RI ECMWF Day1') {
                    clickedRainfallIntensityDay1Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    RainfallIntensityLegendImage();
                }
            }
            panelLayerRainfallIntensityDay1_lists.innerHTML = clickedRainfallIntensityDay1Lists.join("");
        }
        if (_this.context._layer?.group.name == "Rainfall Intensity Day2") {
            if (panelLayerRainfallIntensityDay2_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayerRainfallIntensityDay2_Title.innerHTML = _this.context._layer?.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }
            let AlreadyExit = clickedRainfallIntensityDay2Lists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name == 'RI GFS Day2') {
                    clickedRainfallIntensityDay2Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    RainfallIntensityLegendImage();
                }
                if (layer_name == 'RI NCUM Day2') {
                    clickedRainfallIntensityDay2Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    RainfallIntensityLegendImage();
                }
                if (layer_name == 'RI NEPS Day2') {
                    clickedRainfallIntensityDay2Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    RainfallIntensityLegendImage();
                }
                if (layer_name == 'RI WRF Day2') {
                    clickedRainfallIntensityDay2Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    RainfallIntensityLegendImage();
                }
                if (layer_name == 'RI GEFS Day2') {
                    clickedRainfallIntensityDay2Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    RainfallIntensityLegendImage();
                }
                if (layer_name == 'RI ECMWF Day2') {
                    clickedRainfallIntensityDay2Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    RainfallIntensityLegendImage();
                }
            }
            panelLayerRainfallIntensityDay2_lists.innerHTML = clickedRainfallIntensityDay2Lists.join("");
        }
        if (_this.context._layer?.group.name == "Rainfall Intensity Day3") {
            if (panelLayerRainfallIntensityDay3_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayerRainfallIntensityDay3_Title.innerHTML = _this.context._layer?.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }
            let AlreadyExit = clickedRainfallIntensityDay3Lists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name == 'RI GFS Day3') {
                    clickedRainfallIntensityDay3Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    RainfallIntensityLegendImage();
                }
                if (layer_name == 'RI NCUM Day3') {
                    clickedRainfallIntensityDay3Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    RainfallIntensityLegendImage();
                }
                if (layer_name == 'RI NEPS Day3') {
                    clickedRainfallIntensityDay3Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    RainfallIntensityLegendImage();
                }
                if (layer_name == 'RI WRF Day3') {
                    clickedRainfallIntensityDay3Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    RainfallIntensityLegendImage();
                }
                if (layer_name == 'RI GEFS Day3') {
                    clickedRainfallIntensityDay3Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    RainfallIntensityLegendImage();
                }
                if (layer_name == 'RI ECMWF Day3') {
                    clickedRainfallIntensityDay3Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    RainfallIntensityLegendImage();
                }
            }
            panelLayerRainfallIntensityDay3_lists.innerHTML = clickedRainfallIntensityDay3Lists.join("");
        }
        if (_this.context._layer?.group.name == "Rainfall Intensity Day4") {
            if (panelLayerRainfallIntensityDay4_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayerRainfallIntensityDay4_Title.innerHTML = _this.context._layer?.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }
            let AlreadyExit = clickedRainfallIntensityDay4Lists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name == 'RI GFS Day4') {
                    clickedRainfallIntensityDay4Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    RainfallIntensityLegendImage();
                }
                if (layer_name == 'RI NCUM Day4') {
                    clickedRainfallIntensityDay4Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    RainfallIntensityLegendImage();
                }
                if (layer_name == 'RI NEPS Day4') {
                    clickedRainfallIntensityDay4Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    RainfallIntensityLegendImage();
                }
                if (layer_name == 'RI WRF Day4') {
                    clickedRainfallIntensityDay4Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    RainfallIntensityLegendImage();
                }
                if (layer_name == 'RI GEFS Day4') {
                    clickedRainfallIntensityDay4Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    RainfallIntensityLegendImage();
                }
                if (layer_name == 'RI ECMWF Day4') {
                    clickedRainfallIntensityDay4Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    RainfallIntensityLegendImage();
                }
            }
            panelLayerRainfallIntensityDay4_lists.innerHTML = clickedRainfallIntensityDay4Lists.join("");
        }
        if (_this.context._layer?.group.name == "Rainfall Intensity Day5") {
            if (panelLayerRainfallIntensityDay5_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayerRainfallIntensityDay5_Title.innerHTML = _this.context._layer?.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }
            let AlreadyExit = clickedRainfallIntensityDay5Lists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name == 'RI GFS Day5') {
                    clickedRainfallIntensityDay5Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    RainfallIntensityLegendImage();
                }
                if (layer_name == 'RI NCUM Day5') {
                    clickedRainfallIntensityDay5Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    RainfallIntensityLegendImage();
                }
                if (layer_name == 'RI NEPS Day5') {
                    clickedRainfallIntensityDay5Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    RainfallIntensityLegendImage();
                }
                if (layer_name == 'RI WRF Day5') {
                    clickedRainfallIntensityDay5Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    RainfallIntensityLegendImage();
                }
                if (layer_name == 'RI GEFS Day5') {
                    clickedRainfallIntensityDay5Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    RainfallIntensityLegendImage();
                }
                if (layer_name == 'RI ECMWF Day5') {
                    clickedRainfallIntensityDay5Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    RainfallIntensityLegendImage();
                }
            }
            panelLayerRainfallIntensityDay5_lists.innerHTML = clickedRainfallIntensityDay5Lists.join("");
        }










        if (_this.context._layer?.group.name == "MSLP Day1") {
            if (panelLayerMSLPDay1_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayerMSLPDay1_Title.innerHTML = _this.context._layer?.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }
            let AlreadyExit = clickedMSLPDay1Lists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name == 'MSLP GFS Day1') {
                    clickedMSLPDay1Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    MSLPDayLegendImage();
                }
                if (layer_name == 'MSLP NCUM Day1') {
                    clickedMSLPDay1Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    MSLPDayLegendImage();
                }
                if (layer_name == 'MSLP NEPS Day1') {
                    clickedMSLPDay1Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    MSLPDayLegendImage();
                }
                if (layer_name == 'MSLP WRF Day1') {
                    clickedMSLPDay1Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    MSLPDayLegendImage();
                }
                if (layer_name == 'MSLP GEFS Day1') {
                    clickedMSLPDay1Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    MSLPDayLegendImage();
                }
                if (layer_name == 'MSLP ECMWF Day1') {
                    clickedMSLPDay1Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    MSLPDayLegendImage();
                }
            }
            panelLayerMSLPDay1_lists.innerHTML = clickedMSLPDay1Lists.join("");
        }
        if (_this.context._layer?.group.name == "MSLP Day2") {
            if (panelLayerMSLPDay2_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayerMSLPDay2_Title.innerHTML = _this.context._layer?.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }
            let AlreadyExit = clickedMSLPDay2Lists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name == 'MSLP GFS Day2') {
                    clickedMSLPDay2Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    MSLPDayLegendImage();
                }
                if (layer_name == 'MSLP NCUM Day2') {
                    clickedMSLPDay2Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    MSLPDayLegendImage();
                }
                if (layer_name == 'MSLP NEPS Day2') {
                    clickedMSLPDay2Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    MSLPDayLegendImage();
                }
                if (layer_name == 'MSLP WRF Day2') {
                    clickedMSLPDay2Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    MSLPDayLegendImage();
                }
                if (layer_name == 'MSLP GEFS Day2') {
                    clickedMSLPDay2Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    MSLPDayLegendImage();
                }
                if (layer_name == 'MSLP ECMWF Day2') {
                    clickedMSLPDay2Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    MSLPDayLegendImage();
                }
            }
            panelLayerMSLPDay2_lists.innerHTML = clickedMSLPDay2Lists.join("");
        }
        if (_this.context._layer?.group.name == "MSLP Day3") {
            if (panelLayerMSLPDay3_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayerMSLPDay3_Title.innerHTML = _this.context._layer?.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }
            let AlreadyExit = clickedMSLPDay3Lists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name == 'MSLP GFS Day3') {
                    clickedMSLPDay3Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    MSLPDayLegendImage();
                }
                if (layer_name == 'MSLP NCUM Day3') {
                    clickedMSLPDay3Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    MSLPDayLegendImage();
                }
                if (layer_name == 'MSLP NEPS Day3') {
                    clickedMSLPDay3Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    MSLPDayLegendImage();
                }
                if (layer_name == 'MSLP WRF Day3') {
                    clickedMSLPDay3Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    MSLPDayLegendImage();
                }
                if (layer_name == 'MSLP GEFS Day3') {
                    clickedMSLPDay3Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    MSLPDayLegendImage();
                }
                if (layer_name == 'MSLP ECMWF Day3') {
                    clickedMSLPDay3Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    MSLPDayLegendImage();
                }
            }
            panelLayerMSLPDay3_lists.innerHTML = clickedMSLPDay3Lists.join("");
        }
        if (_this.context._layer?.group.name == "MSLP Day4") {
            if (panelLayerMSLPDay4_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayerMSLPDay4_Title.innerHTML = _this.context._layer?.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }
            let AlreadyExit = clickedMSLPDay4Lists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name == 'MSLP GFS Day4') {
                    clickedMSLPDay4Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    MSLPDayLegendImage();
                }
                if (layer_name == 'MSLP NCUM Day4') {
                    clickedMSLPDay4Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    MSLPDayLegendImage();
                }
                if (layer_name == 'MSLP NEPS Day4') {
                    clickedMSLPDay4Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    MSLPDayLegendImage();
                }
                if (layer_name == 'MSLP WRF Day4') {
                    clickedMSLPDay4Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    MSLPDayLegendImage();
                }
                if (layer_name == 'MSLP GEFS Day4') {
                    clickedMSLPDay4Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    MSLPDayLegendImage();
                }
                if (layer_name == 'MSLP ECMWF Day4') {
                    clickedMSLPDay4Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    MSLPDayLegendImage();
                }
            }
            panelLayerMSLPDay4_lists.innerHTML = clickedMSLPDay4Lists.join("");
        }
        if (_this.context._layer?.group.name == "MSLP Day5") {
            if (panelLayerMSLPDay5_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayerMSLPDay5_Title.innerHTML = _this.context._layer?.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }
            let AlreadyExit = clickedMSLPDay5Lists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name == 'MSLP GFS Day5') {
                    clickedMSLPDay5Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    MSLPDayLegendImage();
                }
                if (layer_name == 'MSLP NCUM Day5') {
                    clickedMSLPDay5Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    MSLPDayLegendImage();
                }
                if (layer_name == 'MSLP NEPS Day5') {
                    clickedMSLPDay5Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    MSLPDayLegendImage();
                }
                if (layer_name == 'MSLP WRF Day5') {
                    clickedMSLPDay5Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    MSLPDayLegendImage();
                }
                if (layer_name == 'MSLP GEFS Day5') {
                    clickedMSLPDay5Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    MSLPDayLegendImage();
                }
                if (layer_name == 'MSLP ECMWF Day5') {
                    clickedMSLPDay5Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    MSLPDayLegendImage();
                }
            }
            panelLayerMSLPDay5_lists.innerHTML = clickedMSLPDay5Lists.join("");
        }





        if (_this.context._layer?.group.name == "10m Wind Day1") {
            if (panelLayer10mWINDDay1_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayer10mWINDDay1_Title.innerHTML = _this.context._layer?.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }
            let AlreadyExit = clicked10mWINDDay1Lists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name === '10m WIND GFS Day1') {
                    clicked10mWINDDay1Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    mWINDDayLegendImage();
                }

                if (layer_name == '10m WIND NCUM Day1') {
                    clicked10mWINDDay1Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    mWINDDayLegendImage();
                }
                if (layer_name == '10m WIND NEPS Day1') {
                    clicked10mWINDDay1Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    mWINDDayLegendImage();
                }
                if (layer_name == '10m WIND WRF Day1') {
                    clicked10mWINDDay1Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    mWINDDayLegendImage();
                }
                if (layer_name == '10m WIND GEFS Day1') {
                    clicked10mWINDDay1Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    mWINDDayLegendImage();
                }
                if (layer_name == '10m WIND ECMWF Day1') {
                    clicked10mWINDDay1Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    mWINDDayLegendImage();
                }
            }
            panelLayer10mWINDDay1_lists.innerHTML = clicked10mWINDDay1Lists.join("");
        }
        if (_this.context._layer?.group.name == "10m Wind Day2") {
            if (panelLayer10mWINDDay2_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayer10mWINDDay2_Title.innerHTML = _this.context._layer?.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }
            let AlreadyExit = clicked10mWINDDay2Lists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name == '10m WIND GFS Day2') {
                    clicked10mWINDDay2Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    mWINDDayLegendImage();
                }
                if (layer_name == '10m WIND NCUM Day2') {
                    clicked10mWINDDay2Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    mWINDDayLegendImage();
                }
                if (layer_name == '10m WIND NEPS Day2') {
                    clicked10mWINDDay2Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    mWINDDayLegendImage();
                }
                if (layer_name == '10m WIND WRF Day2') {
                    clicked10mWINDDay2Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    mWINDDayLegendImage();
                }
                if (layer_name == '10m WIND GEFS Day2') {
                    clicked10mWINDDay2Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    mWINDDayLegendImage();
                }
                if (layer_name == '10m WIND ECMWF Day2') {
                    clicked10mWINDDay2Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    mWINDDayLegendImage();
                }
            }
            panelLayer10mWINDDay2_lists.innerHTML = clicked10mWINDDay2Lists.join("");
        }
        if (_this.context._layer?.group.name == "10m Wind Day3") {
            if (panelLayer10mWINDDay3_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayer10mWINDDay3_Title.innerHTML = _this.context._layer?.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }
            let AlreadyExit = clicked10mWINDDay3Lists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name == '10m WIND GFS Day3') {
                    clicked10mWINDDay3Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    mWINDDayLegendImage();
                }
                if (layer_name == '10m WIND NCUM Day3') {
                    clicked10mWINDDay3Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    mWINDDayLegendImage();
                }
                if (layer_name == '10m WIND NEPS Day3') {
                    clicked10mWINDDay3Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    mWINDDayLegendImage();
                }
                if (layer_name == '10m WIND WRF Day3') {
                    clicked10mWINDDay3Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    mWINDDayLegendImage();
                }
                if (layer_name == '10m WIND GEFS Day3') {
                    clicked10mWINDDay3Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    mWINDDayLegendImage();
                }
                if (layer_name == '10m WIND ECMWF Day3') {
                    clicked10mWINDDay3Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    mWINDDayLegendImage();
                }
            }
            panelLayer10mWINDDay3_lists.innerHTML = clicked10mWINDDay3Lists.join("");
        }
        if (_this.context._layer?.group.name == "10m Wind Day4") {
            if (panelLayer10mWINDDay4_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayer10mWINDDay4_Title.innerHTML = _this.context._layer?.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }
            let AlreadyExit = clicked10mWINDDay4Lists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name == '10m WIND GFS Day4') {
                    clicked10mWINDDay4Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    mWINDDayLegendImage();
                }
                if (layer_name == '10m WIND NCUM Day4') {
                    clicked10mWINDDay4Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    mWINDDayLegendImage();
                }
                if (layer_name == '10m WIND NEPS Day4') {
                    clicked10mWINDDay4Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    mWINDDayLegendImage();
                }
                if (layer_name == '10m WIND WRF Day4') {
                    clicked10mWINDDay4Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    mWINDDayLegendImage();
                }
                if (layer_name == '10m WIND GEFS Day4') {
                    clicked10mWINDDay4Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    mWINDDayLegendImage();
                }
                if (layer_name == '10m WIND ECMWF Day4') {
                    clicked10mWINDDay4Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    mWINDDayLegendImage();
                }
            }
            panelLayer10mWINDDay4_lists.innerHTML = clicked10mWINDDay4Lists.join("");
        }
        if (_this.context._layer?.group.name == "10m Wind Day5") {
            if (panelLayer10mWINDDay5_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayer10mWINDDay5_Title.innerHTML = _this.context._layer?.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }
            let AlreadyExit = clicked10mWINDDay5Lists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            if (!AlreadyExit) {
                if (layer_name == '10m WIND GFS Day5') {
                    clicked10mWINDDay5Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    mWINDDayLegendImage();
                }
                if (layer_name == '10m WIND NCUM Day5') {
                    clicked10mWINDDay5Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    mWINDDayLegendImage();
                }
                if (layer_name == '10m WIND NEPS Day5') {
                    clicked10mWINDDay5Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    mWINDDayLegendImage();
                }
                if (layer_name == '10m WIND WRF Day5') {
                    clicked10mWINDDay5Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    mWINDDayLegendImage();
                }
                if (layer_name == '10m WIND GEFS Day5') {
                    clicked10mWINDDay5Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    mWINDDayLegendImage();
                }
                if (layer_name == '10m WIND ECMWF Day5') {
                    clicked10mWINDDay5Lists.push(
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                    );
                    mWINDDayLegendImage();
                }
            }
            panelLayer10mWINDDay5_lists.innerHTML = clicked10mWINDDay5Lists.join("");
        }


    } else {

        console.log("unChecked");
        // console.log(_this, "............_this");
        var uncheckLayer = _this.context._layer ? layer_group_name + ' ' + _this.context._layer?.name :
            _this
            .context.className;
        console.log("uncheckLayer............", uncheckLayer);
        layer_name = _this.context._layer ? _this.context._layer?.name : _this.context.className;

        //bgClickedExposureLists[]
        if (_this.context._layer?.group.name == "Exposure Layers") {
            if (layer_name == 'District Boundaries' || layer_name == 'Airport' || layer_name ==
                'Oil Refineries' || layer_name == 'Power Station' || layer_name == 'Power Plant' ||
                layer_name == 'DEM' || layer_name == 'Hospital' || layer_name == 'Industrail' ||
                layer_name ==
                'sports' || layer_name == 'Road Network' || layer_name ==
                'Socio Economic Zone' || layer_name == 'Railway Network' || layer_name == 'LULC') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedExposureLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedExposureLists.splice(index, 1);
                }
                console.log(bgClickedExposureLists, "unchecked....bgClickedExposureLists");
            }
        }

        //bgClicked METAR 00UTC TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 00UTC") {
            if (layer_name == 'Temperature_00') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarTempLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarTempLists.splice(index, 1);
                }
                console.log(bgClickedMetarTempLists, "unchecked....bgClickedMetarTempLists");
            }
        }

        //bgClicked METAR 00UTC DEW POINT TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 00UTC") {
            if (layer_name == 'Dew Point Temperature_00') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarDewPointLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarDewPointLists.splice(index, 1);
                }
                console.log(bgClickedMetarDewPointLists, "unchecked....bgClickedMetarDewPointLists");
            }
        }

        //bgClicked METAR 00UTC VISIBILITY[]
        if (_this.context._layer?.group.name == "METAR 00UTC") {
            if (layer_name == 'Visibility_00') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarVisibilityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarVisibilityLists.splice(index, 1);
                }
                console.log(bgClickedMetarVisibilityLists, "unchecked....bgClickedMetarVisibilityLists");
            }
        }

        //bgClicked METAR 00UTC WIND SPEED AND DIRECTION[]
        if (_this.context._layer?.group.name == "METAR 00UTC") {
            if (layer_name == 'Wind Speed and Direction_00') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarWindSpeedAndDirectionLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarWindSpeedAndDirectionLists.splice(index, 1);
                }
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "unchecked....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //METAR 01UTC
        //bgClicked METAR 01UTC TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 01UTC") {
            if (layer_name == 'Temperature_01') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarTempLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarTempLists.splice(index, 1);
                }
                console.log(bgClickedMetarTempLists, "unchecked....bgClickedMetarTempLists");
            }
        }

        //bgClicked METAR 01UTC DEW POINT TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 01UTC") {
            if (layer_name == 'Dew Point Temperature_01') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarDewPointLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarDewPointLists.splice(index, 1);
                }
                console.log(bgClickedMetarDewPointLists, "unchecked....bgClickedMetarDewPointLists");
            }
        }

        //bgClicked METAR 01UTC VISIBILITY[]
        if (_this.context._layer?.group.name == "METAR 01UTC") {
            if (layer_name == 'Visibility_01') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarVisibilityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarVisibilityLists.splice(index, 1);
                }
                console.log(bgClickedMetarVisibilityLists, "unchecked....bgClickedMetarVisibilityLists");
            }
        }

        //bgClicked METAR 01UTC WIND SPEED AND DIRECTION[]
        if (_this.context._layer?.group.name == "METAR 01UTC") {
            if (layer_name == 'Wind Speed and Direction_01') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarWindSpeedAndDirectionLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarWindSpeedAndDirectionLists.splice(index, 1);
                }
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "unchecked....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //METAR 02UTC
        //bgClicked METAR 02UTC TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 02UTC") {
            if (layer_name == 'Temperature_02') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarTempLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarTempLists.splice(index, 1);
                }
                console.log(bgClickedMetarTempLists, "unchecked....bgClickedMetarTempLists");
            }
        }

        //bgClicked METAR 02UTC DEW POINT TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 02UTC") {
            if (layer_name == 'Dew Point Temperature_02') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarDewPointLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarDewPointLists.splice(index, 1);
                }
                console.log(bgClickedMetarDewPointLists, "unchecked....bgClickedMetarDewPointLists");
            }
        }

        //bgClicked METAR 02UTC VISIBILITY[]
        if (_this.context._layer?.group.name == "METAR 02UTC") {
            if (layer_name == 'Visibility_02') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarVisibilityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarVisibilityLists.splice(index, 1);
                }
                console.log(bgClickedMetarVisibilityLists, "unchecked....bgClickedMetarVisibilityLists");
            }
        }

        //bgClicked METAR 02UTC WIND SPEED AND DIRECTION[]
        if (_this.context._layer?.group.name == "METAR 02UTC") {
            if (layer_name == 'Wind Speed and Direction_02') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarWindSpeedAndDirectionLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarWindSpeedAndDirectionLists.splice(index, 1);
                }
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "unchecked....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //METAR 03UTC
        //bgClicked METAR 03UTC TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 03UTC") {
            if (layer_name == 'Temperature_03') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarTempLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarTempLists.splice(index, 1);
                }
                console.log(bgClickedMetarTempLists, "unchecked....bgClickedMetarTempLists");
            }
        }

        //bgClicked METAR 03UTC DEW POINT TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 03UTC") {
            if (layer_name == 'Dew Point Temperature_03') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarDewPointLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarDewPointLists.splice(index, 1);
                }
                console.log(bgClickedMetarDewPointLists, "unchecked....bgClickedMetarDewPointLists");
            }
        }

        //bgClicked METAR 03UTC VISIBILITY[]
        if (_this.context._layer?.group.name == "METAR 03UTC") {
            if (layer_name == 'Visibility_03') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarVisibilityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarVisibilityLists.splice(index, 1);
                }
                console.log(bgClickedMetarVisibilityLists, "unchecked....bgClickedMetarVisibilityLists");
            }
        }

        //bgClicked METAR 03UTC WIND SPEED AND DIRECTION[]
        if (_this.context._layer?.group.name == "METAR 03UTC") {
            if (layer_name == 'Wind Speed and Direction_03') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarWindSpeedAndDirectionLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarWindSpeedAndDirectionLists.splice(index, 1);
                }
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "unchecked....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //METAR 04UTC
        //bgClicked METAR 04UTC TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 04UTC") {
            if (layer_name == 'Temperature_04') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarTempLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarTempLists.splice(index, 1);
                }
                console.log(bgClickedMetarTempLists, "unchecked....bgClickedMetarTempLists");
            }
        }

        //bgClicked METAR 04UTC DEW POINT TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 04UTC") {
            if (layer_name == 'Dew Point Temperature_04') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarDewPointLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarDewPointLists.splice(index, 1);
                }
                console.log(bgClickedMetarDewPointLists, "unchecked....bgClickedMetarDewPointLists");
            }
        }

        //bgClicked METAR 04UTC VISIBILITY[]
        if (_this.context._layer?.group.name == "METAR 04UTC") {
            if (layer_name == 'Visibility_04') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarVisibilityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarVisibilityLists.splice(index, 1);
                }
                console.log(bgClickedMetarVisibilityLists, "unchecked....bgClickedMetarVisibilityLists");
            }
        }

        //bgClicked METAR 04UTC WIND SPEED AND DIRECTION[]
        if (_this.context._layer?.group.name == "METAR 04UTC") {
            if (layer_name == 'Wind Speed and Direction_04') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarWindSpeedAndDirectionLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarWindSpeedAndDirectionLists.splice(index, 1);
                }
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "unchecked....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //METAR 05UTC
        //bgClicked METAR 05UTC TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 05UTC") {
            if (layer_name == 'Temperature_05') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarTempLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarTempLists.splice(index, 1);
                }
                console.log(bgClickedMetarTempLists, "unchecked....bgClickedMetarTempLists");
            }
        }

        //bgClicked METAR 05UTC DEW POINT TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 05UTC") {
            if (layer_name == 'Dew Point Temperature_05') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarDewPointLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarDewPointLists.splice(index, 1);
                }
                console.log(bgClickedMetarDewPointLists, "unchecked....bgClickedMetarDewPointLists");
            }
        }

        //bgClicked METAR 05UTC VISIBILITY[]
        if (_this.context._layer?.group.name == "METAR 05UTC") {
            if (layer_name == 'Visibility_05') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarVisibilityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarVisibilityLists.splice(index, 1);
                }
                console.log(bgClickedMetarVisibilityLists, "unchecked....bgClickedMetarVisibilityLists");
            }
        }

        //bgClicked METAR 05UTC WIND SPEED AND DIRECTION[]
        if (_this.context._layer?.group.name == "METAR 05UTC") {
            if (layer_name == 'Wind Speed and Direction_05') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarWindSpeedAndDirectionLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarWindSpeedAndDirectionLists.splice(index, 1);
                }
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "unchecked....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //METAR 06UTC
        //bgClicked METAR 06UTC TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 06UTC") {
            if (layer_name == 'Temperature_06') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarTempLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarTempLists.splice(index, 1);
                }
                console.log(bgClickedMetarTempLists, "unchecked....bgClickedMetarTempLists");
            }
        }

        //bgClicked METAR 06UTC DEW POINT TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 06UTC") {
            if (layer_name == 'Dew Point Temperature_06') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarDewPointLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarDewPointLists.splice(index, 1);
                }
                console.log(bgClickedMetarDewPointLists, "unchecked....bgClickedMetarDewPointLists");
            }
        }

        //bgClicked METAR 06UTC VISIBILITY[]
        if (_this.context._layer?.group.name == "METAR 06UTC") {
            if (layer_name == 'Visibility_06') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarVisibilityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarVisibilityLists.splice(index, 1);
                }
                console.log(bgClickedMetarVisibilityLists, "unchecked....bgClickedMetarVisibilityLists");
            }
        }

        //bgClicked METAR 06UTC WIND SPEED AND DIRECTION[]
        if (_this.context._layer?.group.name == "METAR 06UTC") {
            if (layer_name == 'Wind Speed and Direction_06') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarWindSpeedAndDirectionLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarWindSpeedAndDirectionLists.splice(index, 1);
                }
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "unchecked....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //METAR 07UTC
        //bgClicked METAR 07UTC TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 07UTC") {
            if (layer_name == 'Temperature_07') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarTempLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarTempLists.splice(index, 1);
                }
                console.log(bgClickedMetarTempLists, "unchecked....bgClickedMetarTempLists");
            }
        }

        //bgClicked METAR 07UTC DEW POINT TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 07UTC") {
            if (layer_name == 'Dew Point Temperature_07') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarDewPointLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarDewPointLists.splice(index, 1);
                }
                console.log(bgClickedMetarDewPointLists, "unchecked....bgClickedMetarDewPointLists");
            }
        }

        //bgClicked METAR 07UTC VISIBILITY[]
        if (_this.context._layer?.group.name == "METAR 07UTC") {
            if (layer_name == 'Visibility_07') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarVisibilityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarVisibilityLists.splice(index, 1);
                }
                console.log(bgClickedMetarVisibilityLists, "unchecked....bgClickedMetarVisibilityLists");
            }
        }

        //bgClicked METAR 07UTC WIND SPEED AND DIRECTION[]
        if (_this.context._layer?.group.name == "METAR 07UTC") {
            if (layer_name == 'Wind Speed and Direction_07') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarWindSpeedAndDirectionLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarWindSpeedAndDirectionLists.splice(index, 1);
                }
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "unchecked....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //METAR 08UTC
        //bgClicked METAR 08UTC TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 08UTC") {
            if (layer_name == 'Temperature_08') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarTempLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarTempLists.splice(index, 1);
                }
                console.log(bgClickedMetarTempLists, "unchecked....bgClickedMetarTempLists");
            }
        }

        //bgClicked METAR 08UTC DEW POINT TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 08UTC") {
            if (layer_name == 'Dew Point Temperature_08') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarDewPointLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarDewPointLists.splice(index, 1);
                }
                console.log(bgClickedMetarDewPointLists, "unchecked....bgClickedMetarDewPointLists");
            }
        }

        //bgClicked METAR 08UTC VISIBILITY[]
        if (_this.context._layer?.group.name == "METAR 08UTC") {
            if (layer_name == 'Visibility_08') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarVisibilityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarVisibilityLists.splice(index, 1);
                }
                console.log(bgClickedMetarVisibilityLists, "unchecked....bgClickedMetarVisibilityLists");
            }
        }

        //bgClicked METAR 08UTC WIND SPEED AND DIRECTION[]
        if (_this.context._layer?.group.name == "METAR 08UTC") {
            if (layer_name == 'Wind Speed and Direction_08') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarWindSpeedAndDirectionLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarWindSpeedAndDirectionLists.splice(index, 1);
                }
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "unchecked....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //METAR 09UTC
        //bgClicked METAR 09UTC TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 09UTC") {
            if (layer_name == 'Temperature_09') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarTempLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarTempLists.splice(index, 1);
                }
                console.log(bgClickedMetarTempLists, "unchecked....bgClickedMetarTempLists");
            }
        }

        //bgClicked METAR 09UTC DEW POINT TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 09UTC") {
            if (layer_name == 'Dew Point Temperature_09') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarDewPointLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarDewPointLists.splice(index, 1);
                }
                console.log(bgClickedMetarDewPointLists, "unchecked....bgClickedMetarDewPointLists");
            }
        }

        //bgClicked METAR 09UTC VISIBILITY[]
        if (_this.context._layer?.group.name == "METAR 09UTC") {
            if (layer_name == 'Visibility_09') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarVisibilityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarVisibilityLists.splice(index, 1);
                }
                console.log(bgClickedMetarVisibilityLists, "unchecked....bgClickedMetarVisibilityLists");
            }
        }

        //bgClicked METAR 09UTC WIND SPEED AND DIRECTION[]
        if (_this.context._layer?.group.name == "METAR 09UTC") {
            if (layer_name == 'Wind Speed and Direction_09') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarWindSpeedAndDirectionLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarWindSpeedAndDirectionLists.splice(index, 1);
                }
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "unchecked....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //METAR 10UTC
        //bgClicked METAR 10UTC TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 10UTC") {
            if (layer_name == 'Temperature_10') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarTempLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarTempLists.splice(index, 1);
                }
                console.log(bgClickedMetarTempLists, "unchecked....bgClickedMetarTempLists");
            }
        }

        //bgClicked METAR 10UTC DEW POINT TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 10UTC") {
            if (layer_name == 'Dew Point Temperature_10') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarDewPointLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarDewPointLists.splice(index, 1);
                }
                console.log(bgClickedMetarDewPointLists, "unchecked....bgClickedMetarDewPointLists");
            }
        }

        //bgClicked METAR 10UTC VISIBILITY[]
        if (_this.context._layer?.group.name == "METAR 10UTC") {
            if (layer_name == 'Visibility_10') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarVisibilityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarVisibilityLists.splice(index, 1);
                }
                console.log(bgClickedMetarVisibilityLists, "unchecked....bgClickedMetarVisibilityLists");
            }
        }

        //bgClicked METAR 10UTC WIND SPEED AND DIRECTION[]
        if (_this.context._layer?.group.name == "METAR 10UTC") {
            if (layer_name == 'Wind Speed and Direction_10') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarWindSpeedAndDirectionLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarWindSpeedAndDirectionLists.splice(index, 1);
                }
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "unchecked....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //METAR 11UTC
        //bgClicked METAR 11UTC TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 11UTC") {
            if (layer_name == 'Temperature_11') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarTempLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarTempLists.splice(index, 1);
                }
                console.log(bgClickedMetarTempLists, "unchecked....bgClickedMetarTempLists");
            }
        }

        //bgClicked METAR 11UTC DEW POINT TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 11UTC") {
            if (layer_name == 'Dew Point Temperature_11') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarDewPointLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarDewPointLists.splice(index, 1);
                }
                console.log(bgClickedMetarDewPointLists, "unchecked....bgClickedMetarDewPointLists");
            }
        }

        //bgClicked METAR 11UTC VISIBILITY[]
        if (_this.context._layer?.group.name == "METAR 11UTC") {
            if (layer_name == 'Visibility_11') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarVisibilityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarVisibilityLists.splice(index, 1);
                }
                console.log(bgClickedMetarVisibilityLists, "unchecked....bgClickedMetarVisibilityLists");
            }
        }

        //bgClicked METAR 11UTC WIND SPEED AND DIRECTION[]
        if (_this.context._layer?.group.name == "METAR 11UTC") {
            if (layer_name == 'Wind Speed and Direction_11') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarWindSpeedAndDirectionLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarWindSpeedAndDirectionLists.splice(index, 1);
                }
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "unchecked....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //METAR 12UTC
        //bgClicked METAR 12UTC TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 12UTC") {
            if (layer_name == 'Temperature_12') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarTempLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarTempLists.splice(index, 1);
                }
                console.log(bgClickedMetarTempLists, "unchecked....bgClickedMetarTempLists");
            }
        }

        //bgClicked METAR 12UTC DEW POINT TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 12UTC") {
            if (layer_name == 'Dew Point Temperature_12') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarDewPointLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarDewPointLists.splice(index, 1);
                }
                console.log(bgClickedMetarDewPointLists, "unchecked....bgClickedMetarDewPointLists");
            }
        }

        //bgClicked METAR 12UTC VISIBILITY[]
        if (_this.context._layer?.group.name == "METAR 12UTC") {
            if (layer_name == 'Visibility_12') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarVisibilityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarVisibilityLists.splice(index, 1);
                }
                console.log(bgClickedMetarVisibilityLists, "unchecked....bgClickedMetarVisibilityLists");
            }
        }

        //bgClicked METAR 12UTC WIND SPEED AND DIRECTION[]
        if (_this.context._layer?.group.name == "METAR 12UTC") {
            if (layer_name == 'Wind Speed and Direction_12') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarWindSpeedAndDirectionLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarWindSpeedAndDirectionLists.splice(index, 1);
                }
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "unchecked....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //METAR 13UTC
        //bgClicked METAR 13UTC TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 13UTC") {
            if (layer_name == 'Temperature_13') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarTempLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarTempLists.splice(index, 1);
                }
                console.log(bgClickedMetarTempLists, "unchecked....bgClickedMetarTempLists");
            }
        }

        //bgClicked METAR 13UTC DEW POINT TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 13UTC") {
            if (layer_name == 'Dew Point Temperature_13') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarDewPointLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarDewPointLists.splice(index, 1);
                }
                console.log(bgClickedMetarDewPointLists, "unchecked....bgClickedMetarDewPointLists");
            }
        }

        //bgClicked METAR 13UTC VISIBILITY[]
        if (_this.context._layer?.group.name == "METAR 13UTC") {
            if (layer_name == 'Visibility_13') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarVisibilityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarVisibilityLists.splice(index, 1);
                }
                console.log(bgClickedMetarVisibilityLists, "unchecked....bgClickedMetarVisibilityLists");
            }
        }

        //bgClicked METAR 13UTC WIND SPEED AND DIRECTION[]
        if (_this.context._layer?.group.name == "METAR 13UTC") {
            if (layer_name == 'Wind Speed and Direction_13') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarWindSpeedAndDirectionLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarWindSpeedAndDirectionLists.splice(index, 1);
                }
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "unchecked....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //METAR 14UTC
        //bgClicked METAR 14UTC TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 14UTC") {
            if (layer_name == 'Temperature_14') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarTempLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarTempLists.splice(index, 1);
                }
                console.log(bgClickedMetarTempLists, "unchecked....bgClickedMetarTempLists");
            }
        }

        //bgClicked METAR 14UTC DEW POINT TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 14UTC") {
            if (layer_name == 'Dew Point Temperature_14') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarDewPointLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarDewPointLists.splice(index, 1);
                }
                console.log(bgClickedMetarDewPointLists, "unchecked....bgClickedMetarDewPointLists");
            }
        }

        //bgClicked METAR 14UTC VISIBILITY[]
        if (_this.context._layer?.group.name == "METAR 14UTC") {
            if (layer_name == 'Visibility_14') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarVisibilityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarVisibilityLists.splice(index, 1);
                }
                console.log(bgClickedMetarVisibilityLists, "unchecked....bgClickedMetarVisibilityLists");
            }
        }

        //bgClicked METAR 14UTC WIND SPEED AND DIRECTION[]
        if (_this.context._layer?.group.name == "METAR 14UTC") {
            if (layer_name == 'Wind Speed and Direction_14') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarWindSpeedAndDirectionLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarWindSpeedAndDirectionLists.splice(index, 1);
                }
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "unchecked....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //METAR 15UTC
        //bgClicked METAR 15UTC TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 15UTC") {
            if (layer_name == 'Temperature_15') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarTempLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarTempLists.splice(index, 1);
                }
                console.log(bgClickedMetarTempLists, "unchecked....bgClickedMetarTempLists");
            }
        }

        //bgClicked METAR 15UTC DEW POINT TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 15UTC") {
            if (layer_name == 'Dew Point Temperature_15') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarDewPointLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarDewPointLists.splice(index, 1);
                }
                console.log(bgClickedMetarDewPointLists, "unchecked....bgClickedMetarDewPointLists");
            }
        }

        //bgClicked METAR 15UTC VISIBILITY[]
        if (_this.context._layer?.group.name == "METAR 15UTC") {
            if (layer_name == 'Visibility_15') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarVisibilityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarVisibilityLists.splice(index, 1);
                }
                console.log(bgClickedMetarVisibilityLists, "unchecked....bgClickedMetarVisibilityLists");
            }
        }

        //bgClicked METAR 15UTC WIND SPEED AND DIRECTION[]
        if (_this.context._layer?.group.name == "METAR 15UTC") {
            if (layer_name == 'Wind Speed and Direction_15') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarWindSpeedAndDirectionLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarWindSpeedAndDirectionLists.splice(index, 1);
                }
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "unchecked....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //METAR 16UTC
        //bgClicked METAR 16UTC TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 16UTC") {
            if (layer_name == 'Temperature_16') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarTempLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarTempLists.splice(index, 1);
                }
                console.log(bgClickedMetarTempLists, "unchecked....bgClickedMetarTempLists");
            }
        }

        //bgClicked METAR 16UTC DEW POINT TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 16UTC") {
            if (layer_name == 'Dew Point Temperature_16') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarDewPointLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarDewPointLists.splice(index, 1);
                }
                console.log(bgClickedMetarDewPointLists, "unchecked....bgClickedMetarDewPointLists");
            }
        }

        //bgClicked METAR 16UTC VISIBILITY[]
        if (_this.context._layer?.group.name == "METAR 16UTC") {
            if (layer_name == 'Visibility_16') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarVisibilityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarVisibilityLists.splice(index, 1);
                }
                console.log(bgClickedMetarVisibilityLists, "unchecked....bgClickedMetarVisibilityLists");
            }
        }

        //bgClicked METAR 16UTC WIND SPEED AND DIRECTION[]
        if (_this.context._layer?.group.name == "METAR 16UTC") {
            if (layer_name == 'Wind Speed and Direction_16') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarWindSpeedAndDirectionLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarWindSpeedAndDirectionLists.splice(index, 1);
                }
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "unchecked....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //METAR 17UTC
        //bgClicked METAR 17UTC TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 17UTC") {
            if (layer_name == 'Temperature_17') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarTempLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarTempLists.splice(index, 1);
                }
                console.log(bgClickedMetarTempLists, "unchecked....bgClickedMetarTempLists");
            }
        }

        //bgClicked METAR 17UTC DEW POINT TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 17UTC") {
            if (layer_name == 'Dew Point Temperature_17') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarDewPointLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarDewPointLists.splice(index, 1);
                }
                console.log(bgClickedMetarDewPointLists, "unchecked....bgClickedMetarDewPointLists");
            }
        }

        //bgClicked METAR 17UTC VISIBILITY[]
        if (_this.context._layer?.group.name == "METAR 17UTC") {
            if (layer_name == 'Visibility_17') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarVisibilityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarVisibilityLists.splice(index, 1);
                }
                console.log(bgClickedMetarVisibilityLists, "unchecked....bgClickedMetarVisibilityLists");
            }
        }

        //bgClicked METAR 17UTC WIND SPEED AND DIRECTION[]
        if (_this.context._layer?.group.name == "METAR 17UTC") {
            if (layer_name == 'Wind Speed and Direction_17') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarWindSpeedAndDirectionLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarWindSpeedAndDirectionLists.splice(index, 1);
                }
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "unchecked....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //METAR 18UTC
        //bgClicked METAR 18UTC TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 18UTC") {
            if (layer_name == 'Temperature_18') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarTempLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarTempLists.splice(index, 1);
                }
                console.log(bgClickedMetarTempLists, "unchecked....bgClickedMetarTempLists");
            }
        }

        //bgClicked METAR 18UTC DEW POINT TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 18UTC") {
            if (layer_name == 'Dew Point Temperature_18') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarDewPointLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarDewPointLists.splice(index, 1);
                }
                console.log(bgClickedMetarDewPointLists, "unchecked....bgClickedMetarDewPointLists");
            }
        }

        //bgClicked METAR 18UTC VISIBILITY[]
        if (_this.context._layer?.group.name == "METAR 18UTC") {
            if (layer_name == 'Visibility_18') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarVisibilityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarVisibilityLists.splice(index, 1);
                }
                console.log(bgClickedMetarVisibilityLists, "unchecked....bgClickedMetarVisibilityLists");
            }
        }

        //bgClicked METAR 18UTC WIND SPEED AND DIRECTION[]
        if (_this.context._layer?.group.name == "METAR 18UTC") {
            if (layer_name == 'Wind Speed and Direction_18') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarWindSpeedAndDirectionLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarWindSpeedAndDirectionLists.splice(index, 1);
                }
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "unchecked....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //METAR 19UTC
        //bgClicked METAR 19UTC TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 19UTC") {
            if (layer_name == 'Temperature_19') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarTempLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarTempLists.splice(index, 1);
                }
                console.log(bgClickedMetarTempLists, "unchecked....bgClickedMetarTempLists");
            }
        }

        //bgClicked METAR 19UTC DEW POINT TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 19UTC") {
            if (layer_name == 'Dew Point Temperature_19') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarDewPointLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarDewPointLists.splice(index, 1);
                }
                console.log(bgClickedMetarDewPointLists, "unchecked....bgClickedMetarDewPointLists");
            }
        }

        //bgClicked METAR 19UTC VISIBILITY[]
        if (_this.context._layer?.group.name == "METAR 15UTC") {
            if (layer_name == 'Visibility_19') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarVisibilityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarVisibilityLists.splice(index, 1);
                }
                console.log(bgClickedMetarVisibilityLists, "unchecked....bgClickedMetarVisibilityLists");
            }
        }

        //bgClicked METAR 19UTC WIND SPEED AND DIRECTION[]
        if (_this.context._layer?.group.name == "METAR 15UTC") {
            if (layer_name == 'Wind Speed and Direction_19') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarWindSpeedAndDirectionLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarWindSpeedAndDirectionLists.splice(index, 1);
                }
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "unchecked....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //METAR 20UTC
        //bgClicked METAR 20UTC TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 20UTC") {
            if (layer_name == 'Temperature_20') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarTempLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarTempLists.splice(index, 1);
                }
                console.log(bgClickedMetarTempLists, "unchecked....bgClickedMetarTempLists");
            }
        }

        //bgClicked METAR 20UTC DEW POINT TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 20UTC") {
            if (layer_name == 'Dew Point Temperature_20') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarDewPointLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarDewPointLists.splice(index, 1);
                }
                console.log(bgClickedMetarDewPointLists, "unchecked....bgClickedMetarDewPointLists");
            }
        }

        //bgClicked METAR 20UTC VISIBILITY[]
        if (_this.context._layer?.group.name == "METAR 20UTC") {
            if (layer_name == 'Visibility_20') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarVisibilityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarVisibilityLists.splice(index, 1);
                }
                console.log(bgClickedMetarVisibilityLists, "unchecked....bgClickedMetarVisibilityLists");
            }
        }

        //bgClicked METAR 20UTC WIND SPEED AND DIRECTION[]
        if (_this.context._layer?.group.name == "METAR 20UTC") {
            if (layer_name == 'Wind Speed and Direction_20') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarWindSpeedAndDirectionLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarWindSpeedAndDirectionLists.splice(index, 1);
                }
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "unchecked....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //METAR 21UTC
        //bgClicked METAR 21UTC TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 21UTC") {
            if (layer_name == 'Temperature_21') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarTempLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarTempLists.splice(index, 1);
                }
                console.log(bgClickedMetarTempLists, "unchecked....bgClickedMetarTempLists");
            }
        }

        //bgClicked METAR 21UTC DEW POINT TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 21UTC") {
            if (layer_name == 'Dew Point Temperature_21') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarDewPointLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarDewPointLists.splice(index, 1);
                }
                console.log(bgClickedMetarDewPointLists, "unchecked....bgClickedMetarDewPointLists");
            }
        }

        //bgClicked METAR 21UTC VISIBILITY[]
        if (_this.context._layer?.group.name == "METAR 21UTC") {
            if (layer_name == 'Visibility_21') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarVisibilityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarVisibilityLists.splice(index, 1);
                }
                console.log(bgClickedMetarVisibilityLists, "unchecked....bgClickedMetarVisibilityLists");
            }
        }

        //bgClicked METAR 21UTC WIND SPEED AND DIRECTION[]
        if (_this.context._layer?.group.name == "METAR 21UTC") {
            if (layer_name == 'Wind Speed and Direction_21') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarWindSpeedAndDirectionLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarWindSpeedAndDirectionLists.splice(index, 1);
                }
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "unchecked....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //METAR 22UTC
        //bgClicked METAR 22UTC TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 22UTC") {
            if (layer_name == 'Temperature_22') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarTempLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarTempLists.splice(index, 1);
                }
                console.log(bgClickedMetarTempLists, "unchecked....bgClickedMetarTempLists");
            }
        }

        //bgClicked METAR 22UTC DEW POINT TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 22UTC") {
            if (layer_name == 'Dew Point Temperature_22') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarDewPointLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarDewPointLists.splice(index, 1);
                }
                console.log(bgClickedMetarDewPointLists, "unchecked....bgClickedMetarDewPointLists");
            }
        }

        //bgClicked METAR 22UTC VISIBILITY[]
        if (_this.context._layer?.group.name == "METAR 22UTC") {
            if (layer_name == 'Visibility_22') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarVisibilityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarVisibilityLists.splice(index, 1);
                }
                console.log(bgClickedMetarVisibilityLists, "unchecked....bgClickedMetarVisibilityLists");
            }
        }

        //bgClicked METAR 22UTC WIND SPEED AND DIRECTION[]
        if (_this.context._layer?.group.name == "METAR 22UTC") {
            if (layer_name == 'Wind Speed and Direction_22') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarWindSpeedAndDirectionLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarWindSpeedAndDirectionLists.splice(index, 1);
                }
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "unchecked....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //METAR 23UTC
        //bgClicked METAR 23UTC TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 23UTC") {
            if (layer_name == 'Temperature_23') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarTempLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarTempLists.splice(index, 1);
                }
                console.log(bgClickedMetarTempLists, "unchecked....bgClickedMetarTempLists");
            }
        }

        //bgClicked METAR 23UTC DEW POINT TEMPERATURE[]
        if (_this.context._layer?.group.name == "METAR 23UTC") {
            if (layer_name == 'Dew Point Temperature_23') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarDewPointLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarDewPointLists.splice(index, 1);
                }
                console.log(bgClickedMetarDewPointLists, "unchecked....bgClickedMetarDewPointLists");
            }
        }

        //bgClicked METAR 23UTC VISIBILITY[]
        if (_this.context._layer?.group.name == "METAR 23UTC") {
            if (layer_name == 'Visibility_23') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarVisibilityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarVisibilityLists.splice(index, 1);
                }
                console.log(bgClickedMetarVisibilityLists, "unchecked....bgClickedMetarVisibilityLists");
            }
        }

        //bgClicked METAR 23UTC WIND SPEED AND DIRECTION[]
        if (_this.context._layer?.group.name == "METAR 23UTC") {
            if (layer_name == 'Wind Speed and Direction_23') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMetarWindSpeedAndDirectionLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMetarWindSpeedAndDirectionLists.splice(index, 1);
                }
                console.log(bgClickedMetarWindSpeedAndDirectionLists,
                    "unchecked....bgClickedMetarWindSpeedAndDirectionLists");
            }
        }

        //bgClicked SYNOP 00UTC TEMPERATURE[]
        if (_this.context._layer?.group.name == "SYNOP 00UTC") {
            if (layer_name == 'Temperature_00') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopTempLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopTempLists.splice(index, 1);
                }
                console.log(bgClickedSynopTempLists,
                    "unchecked....bgClickedSynopTempLists");
            }
        }

        //bgClicked SYNOP 00UTC MEAN SEA LEVEL PRESSURE[]
        if (_this.context._layer?.group.name == "SYNOP 00UTC") {
            if (layer_name == 'Mean Sea Level Pressure_00') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopMeanSeaLevelLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopMeanSeaLevelLists.splice(index, 1);
                }
                console.log(bgClickedSynopMeanSeaLevelLists,
                    "unchecked....bgClickedSynopMeanSeaLevelLists");
            }
        }

        //bgClicked SYNOP 00UTC CLOUD COVER[]
        if (_this.context._layer?.group.name == "SYNOP 00UTC") {
            if (layer_name == 'Cloud Cover_00') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopCloudCoverLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopCloudCoverLists.splice(index, 1);
                }
                console.log(bgClickedSynopCloudCoverLists,
                    "unchecked....bgClickedSynopCloudCoverLists");
            }
        }

        //bgClicked SYNOP 00UTC GEOPOTENTIAL HEIGHT[]
        if (_this.context._layer?.group.name == "SYNOP 00UTC") {
            if (layer_name == 'Geopotential Height_00') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopGeopotentialHeightLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopGeopotentialHeightLists.splice(index, 1);
                }
                console.log(bgClickedSynopGeopotentialHeightLists,
                    "unchecked....bgClickedSynopGeopotentialHeightLists");
            }
        }

        //bgClicked SYNOP 00UTC RELATIVE HUMIDITY[]
        if (_this.context._layer?.group.name == "SYNOP 00UTC") {
            if (layer_name == 'Relative Humidity_00') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopRelativeHumidityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopRelativeHumidityLists.splice(index, 1);
                }
                console.log(bgClickedSynopRelativeHumidityLists,
                    "unchecked....bgClickedSynopRelativeHumidityLists");
            }
        }

        //bgClicked SYNOP 00UTC VISIBILITY[]
        if (_this.context._layer?.group.name == "SYNOP 00UTC") {
            if (layer_name == 'Visibility_00') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopVisibilityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopVisibilityLists.splice(index, 1);
                }
                console.log(bgClickedSynopVisibilityLists,
                    "unchecked....bgClickedSynopVisibilityLists");
            }
        }

        //bgClicked SYNOP 00UTC WIND SPEED AND DIRECTION[]
        if (_this.context._layer?.group.name == "SYNOP 00UTC") {
            if (layer_name == 'Wind Speed and Direction_00') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopWindSpeedAndDirectionLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopWindSpeedAndDirectionLists.splice(index, 1);
                }
            }
        }

        //bgClicked SYNOP 00UTC 3h RAINFALL[]
        if (_this.context._layer?.group.name == "SYNOP 00UTC") {
            if (layer_name == '3h Rainfall_00') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynop3hRainfallLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynop3hRainfallLists.splice(index, 1);
                }
                console.log(bgClickedSynop3hRainfallLists,
                    "unchecked....bgClickedSynop3hRainfallLists");
            }
        }

        //bgClicked SYNOP 03UTC TEMPERATURE[]
        if (_this.context._layer?.group.name == "SYNOP 03UTC") {
            if (layer_name == 'Temperature_03') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopTempLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopTempLists.splice(index, 1);
                }
                console.log(bgClickedSynopTempLists,
                    "unchecked....bgClickedSynopTempLists");
            }
        }

        //bgClicked SYNOP 03UTC MEAN SEA LEVEL PRESSURE[]
        if (_this.context._layer?.group.name == "SYNOP 03UTC") {
            if (layer_name == 'Mean Sea Level Pressure_03') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopMeanSeaLevelLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopMeanSeaLevelLists.splice(index, 1);
                }
                console.log(bgClickedSynopMeanSeaLevelLists,
                    "unchecked....bgClickedSynopMeanSeaLevelLists");
            }
        }

        //bgClicked SYNOP 03UTC CLOUD COVER[]
        if (_this.context._layer?.group.name == "SYNOP 03UTC") {
            if (layer_name == 'Cloud Cover_03') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopCloudCoverLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopCloudCoverLists.splice(index, 1);
                }
                console.log(bgClickedSynopCloudCoverLists,
                    "unchecked....bgClickedSynopCloudCoverLists");
            }
        }

        //bgClicked SYNOP 03UTC GEOPOTENTIAL HEIGHT[]
        if (_this.context._layer?.group.name == "SYNOP 03UTC") {
            if (layer_name == 'Geopotential Height_03') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopGeopotentialHeightLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopGeopotentialHeightLists.splice(index, 1);
                }
                console.log(bgClickedSynopGeopotentialHeightLists,
                    "unchecked....bgClickedSynopGeopotentialHeightLists");
            }
        }

        //bgClicked SYNOP 03UTC RELATIVE HUMIDITY[]
        if (_this.context._layer?.group.name == "SYNOP 03UTC") {
            if (layer_name == 'Relative Humidity_03') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopRelativeHumidityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopRelativeHumidityLists.splice(index, 1);
                }
                console.log(bgClickedSynopRelativeHumidityLists,
                    "unchecked....bgClickedSynopRelativeHumidityLists");
            }
        }

        //bgClicked SYNOP 03UTC VISIBILITY[]
        if (_this.context._layer?.group.name == "SYNOP 03UTC") {
            if (layer_name == 'Visibility_03') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopVisibilityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopVisibilityLists.splice(index, 1);
                }
                console.log(bgClickedSynopVisibilityLists,
                    "unchecked....bgClickedSynopVisibilityLists");
            }
        }

        //bgClicked SYNOP 03UTC WIND SPEED AND DIRECTION[]
        if (_this.context._layer?.group.name == "SYNOP 03UTC") {
            if (layer_name == 'Wind Speed and Direction_03') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopWindSpeedAndDirectionLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopWindSpeedAndDirectionLists.splice(index, 1);
                }
                console.log(bgClickedSynopWindSpeedAndDirectionLists,
                    "unchecked....bgClickedSynopWindSpeedAndDirectionLists");
            }
        }

        //bgClicked SYNOP 03UTC 3h RAINFALL[]
        if (_this.context._layer?.group.name == "SYNOP 03UTC") {
            if (layer_name == '3h Rainfall_03') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynop3hRainfallLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynop3hRainfallLists.splice(index, 1);
                }
                console.log(bgClickedSynop3hRainfallLists,
                    "unchecked....bgClickedSynop3hRainfallLists");
            }
        }

        //bgClicked SYNOP 06UTC TEMPERATURE[]
        if (_this.context._layer?.group.name == "SYNOP 06UTC") {
            if (layer_name == 'Temperature_06') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopTempLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopTempLists.splice(index, 1);
                }
                console.log(bgClickedSynopTempLists,
                    "unchecked....bgClickedSynopTempLists");
            }
        }

        //bgClicked SYNOP 06UTC MEAN SEA LEVEL PRESSURE[]
        if (_this.context._layer?.group.name == "SYNOP 06UTC") {
            if (layer_name == 'Mean Sea Level Pressure_06') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopMeanSeaLevelLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopMeanSeaLevelLists.splice(index, 1);
                }
                console.log(bgClickedSynopMeanSeaLevelLists,
                    "unchecked....bgClickedSynopMeanSeaLevelLists");
            }
        }

        //bgClicked SYNOP 06UTC CLOUD COVER[]
        if (_this.context._layer?.group.name == "SYNOP 06UTC") {
            if (layer_name == 'Cloud Cover_06') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopCloudCoverLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopCloudCoverLists.splice(index, 1);
                }
                console.log(bgClickedSynopCloudCoverLists,
                    "unchecked....bgClickedSynopCloudCoverLists");
            }
        }

        //bgClicked SYNOP 06UTC GEOPOTENTIAL HEIGHT[]
        if (_this.context._layer?.group.name == "SYNOP 06UTC") {
            if (layer_name == 'Geopotential Height_06') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopGeopotentialHeightLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopGeopotentialHeightLists.splice(index, 1);
                }
                console.log(bgClickedSynopGeopotentialHeightLists,
                    "unchecked....bgClickedSynopGeopotentialHeightLists");
            }
        }

        //bgClicked SYNOP 06UTC RELATIVE HUMIDITY[]
        if (_this.context._layer?.group.name == "SYNOP 06UTC") {
            if (layer_name == 'Relative Humidity_06') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopRelativeHumidityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopRelativeHumidityLists.splice(index, 1);
                }
                console.log(bgClickedSynopRelativeHumidityLists,
                    "unchecked....bgClickedSynopRelativeHumidityLists");
            }
        }

        //bgClicked SYNOP 06UTC VISIBILITY[]
        if (_this.context._layer?.group.name == "SYNOP 06UTC") {
            if (layer_name == 'VISIBILITY_06') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopVisibilityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopVisibilityLists.splice(index, 1);
                }
                console.log(bgClickedSynopVisibilityLists,
                    "unchecked....bgClickedSynopVisibilityLists");
            }
        }

        //bgClicked SYNOP 06UTC WIND SPEED AND DIRECTION[]
        if (_this.context._layer?.group.name == "SYNOP 06UTC") {
            if (layer_name == 'Wind Speed and Direction_06') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopWindSpeedAndDirectionLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopWindSpeedAndDirectionLists.splice(index, 1);
                }
                console.log(bgClickedSynopWindSpeedAndDirectionLists,
                    "unchecked....bgClickedSynopWindSpeedAndDirectionLists");
            }
        }

        //bgClicked SYNOP 06UTC 3h RAINFALL[]
        if (_this.context._layer?.group.name == "SYNOP 06UTC") {
            if (layer_name == '3h Rainfall_06') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynop3hRainfallLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynop3hRainfallLists.splice(index, 1);
                }
                console.log(bgClickedSynop3hRainfallLists,
                    "unchecked....bgClickedSynop3hRainfallLists");
            }
        }

        //
        //bgClicked SYNOP 09UTC TEMPERATURE[]
        if (_this.context._layer?.group.name == "SYNOP 09UTC") {
            if (layer_name == 'Temperature_09') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopTempLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopTempLists.splice(index, 1);
                }
                console.log(bgClickedSynopTempLists,
                    "unchecked....bgClickedSynopTempLists");
            }
        }

        //bgClicked SYNOP 09UTC MEAN SEA LEVEL PRESSURE[]
        if (_this.context._layer?.group.name == "SYNOP 09UTC") {
            if (layer_name == 'Mean Sea Level Pressure_09') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopMeanSeaLevelLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopMeanSeaLevelLists.splice(index, 1);
                }
                console.log(bgClickedSynopMeanSeaLevelLists,
                    "unchecked....bgClickedSynopMeanSeaLevelLists");
            }
        }

        //bgClicked SYNOP 09UTC CLOUD COVER[]
        if (_this.context._layer?.group.name == "SYNOP 09UTC") {
            if (layer_name == 'Cloud Cover_09') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopCloudCoverLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopCloudCoverLists.splice(index, 1);
                }
                console.log(bgClickedSynopCloudCoverLists,
                    "unchecked....bgClickedSynopCloudCoverLists");
            }
        }

        //bgClicked SYNOP 09UTC GEOPOTENTIAL HEIGHT[]
        if (_this.context._layer?.group.name == "SYNOP 09UTC") {
            if (layer_name == 'Geopotential Height_09') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopGeopotentialHeightLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopGeopotentialHeightLists.splice(index, 1);
                }
                console.log(bgClickedSynopGeopotentialHeightLists,
                    "unchecked....bgClickedSynopGeopotentialHeightLists");
            }
        }

        //bgClicked SYNOP 09UTC RELATIVE HUMIDITY[]
        if (_this.context._layer?.group.name == "SYNOP 09UTC") {
            if (layer_name == 'Relative Humidity_09') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopRelativeHumidityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopRelativeHumidityLists.splice(index, 1);
                }
                console.log(bgClickedSynopRelativeHumidityLists,
                    "unchecked....bgClickedSynopRelativeHumidityLists");
            }
        }

        //bgClicked SYNOP 09UTC VISIBILITY[]
        if (_this.context._layer?.group.name == "SYNOP 09UTC") {
            if (layer_name == 'Visibility_09') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopVisibilityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopVisibilityLists.splice(index, 1);
                }
                console.log(bgClickedSynopVisibilityLists,
                    "unchecked....bgClickedSynopVisibilityLists");
            }
        }

        //bgClicked SYNOP 09UTC WIND SPEED AND DIRECTION[]
        if (_this.context._layer?.group.name == "SYNOP 09UTC") {
            if (layer_name == 'Wind Speed and Direction_09') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopWindSpeedAndDirectionLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopWindSpeedAndDirectionLists.splice(index, 1);
                }
                console.log(bgClickedSynopWindSpeedAndDirectionLists,
                    "unchecked....bgClickedSynopWindSpeedAndDirectionLists");
            }
        }

        //bgClicked SYNOP 09UTC 3h RAINFALL[]
        if (_this.context._layer?.group.name == "SYNOP 09UTC") {
            if (layer_name == '3h Rainfall_09') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynop3hRainfallLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynop3hRainfallLists.splice(index, 1);
                }
                console.log(bgClickedSynop3hRainfallLists,
                    "unchecked....bgClickedSynop3hRainfallLists");
            }
        }

        //
        //bgClicked SYNOP 12UTC TEMPERATURE[]
        if (_this.context._layer?.group.name == "SYNOP 12UTC") {
            if (layer_name == 'Temperature_12') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopTempLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopTempLists.splice(index, 1);
                }
                console.log(bgClickedSynopTempLists,
                    "unchecked....bgClickedSynopTempLists");
            }
        }

        //bgClicked SYNOP 12UTC MEAN SEA LEVEL PRESSURE[]
        if (_this.context._layer?.group.name == "SYNOP 12UTC") {
            if (layer_name == 'Mean Sea Level Pressure_12') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopMeanSeaLevelLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopMeanSeaLevelLists.splice(index, 1);
                }
                console.log(bgClickedSynopMeanSeaLevelLists,
                    "unchecked....bgClickedSynopMeanSeaLevelLists");
            }
        }

        //bgClicked SYNOP 12UTC CLOUD COVER[]
        if (_this.context._layer?.group.name == "SYNOP 12UTC") {
            if (layer_name == 'Cloud Cover_12') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopCloudCoverLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopCloudCoverLists.splice(index, 1);
                }
                console.log(bgClickedSynopCloudCoverLists,
                    "unchecked....bgClickedSynopCloudCoverLists");
            }
        }

        //bgClicked SYNOP 12UTC GEOPOTENTIAL HEIGHT[]
        if (_this.context._layer?.group.name == "SYNOP 12UTC") {
            if (layer_name == 'Geopotential Height_12') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopGeopotentialHeightLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopGeopotentialHeightLists.splice(index, 1);
                }
                console.log(bgClickedSynopGeopotentialHeightLists,
                    "unchecked....bgClickedSynopGeopotentialHeightLists");
            }
        }

        //bgClicked SYNOP 12UTC RELATIVE HUMIDITY[]
        if (_this.context._layer?.group.name == "SYNOP 12UTC") {
            if (layer_name == 'Relative Humidity_12') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopRelativeHumidityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopRelativeHumidityLists.splice(index, 1);
                }
                console.log(bgClickedSynopRelativeHumidityLists,
                    "unchecked....bgClickedSynopRelativeHumidityLists");
            }
        }

        //bgClicked SYNOP 12UTC VISIBILITY[]
        if (_this.context._layer?.group.name == "SYNOP 12UTC") {
            if (layer_name == 'Visibility_12') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopVisibilityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopVisibilityLists.splice(index, 1);
                }
                console.log(bgClickedSynopVisibilityLists,
                    "unchecked....bgClickedSynopVisibilityLists");
            }
        }

        //bgClicked SYNOP 12UTC WIND SPEED AND DIRECTION[]
        if (_this.context._layer?.group.name == "SYNOP 12UTC") {
            if (layer_name == 'Wind Speed and Direction_12') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopWindSpeedAndDirectionLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopWindSpeedAndDirectionLists.splice(index, 1);
                }
                console.log(bgClickedSynopWindSpeedAndDirectionLists,
                    "unchecked....bgClickedSynopWindSpeedAndDirectionLists");
            }
        }

        //bgClicked SYNOP 12UTC 3h RAINFALL[]
        if (_this.context._layer?.group.name == "SYNOP 12UTC") {
            if (layer_name == '3h Rainfall_12') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynop3hRainfallLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynop3hRainfallLists.splice(index, 1);
                }
                console.log(bgClickedSynop3hRainfallLists,
                    "unchecked....bgClickedSynop3hRainfallLists");
            }
        }

        //
        //bgClicked SYNOP 15UTC TEMPERATURE[]
        if (_this.context._layer?.group.name == "SYNOP 15UTC") {
            if (layer_name == 'Temperature_15') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopTempLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopTempLists.splice(index, 1);
                }
                console.log(bgClickedSynopTempLists,
                    "unchecked....bgClickedSynopTempLists");
            }
        }

        //bgClicked SYNOP 15UTC MEAN SEA LEVEL PRESSURE[]
        if (_this.context._layer?.group.name == "SYNOP 15UTC") {
            if (layer_name == 'Mean Sea Level Pressure_15') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopMeanSeaLevelLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopMeanSeaLevelLists.splice(index, 1);
                }
                console.log(bgClickedSynopMeanSeaLevelLists,
                    "unchecked....bgClickedSynopMeanSeaLevelLists");
            }
        }

        //bgClicked SYNOP 15UTC CLOUD COVER[]
        if (_this.context._layer?.group.name == "SYNOP 15UTC") {
            if (layer_name == 'Cloud Cover_15') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopCloudCoverLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopCloudCoverLists.splice(index, 1);
                }
                console.log(bgClickedSynopCloudCoverLists,
                    "unchecked....bgClickedSynopCloudCoverLists");
            }
        }

        //bgClicked SYNOP 15UTC GEOPOTENTIAL HEIGHT[]
        if (_this.context._layer?.group.name == "SYNOP 15UTC") {
            if (layer_name == 'Geopotential Height_15') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopGeopotentialHeightLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopGeopotentialHeightLists.splice(index, 1);
                }
                console.log(bgClickedSynopGeopotentialHeightLists,
                    "unchecked....bgClickedSynopGeopotentialHeightLists");
            }
        }

        //bgClicked SYNOP 15UTC RELATIVE HUMIDITY[]
        if (_this.context._layer?.group.name == "SYNOP 15UTC") {
            if (layer_name == 'Relative Humidity_15') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopRelativeHumidityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopRelativeHumidityLists.splice(index, 1);
                }
                console.log(bgClickedSynopRelativeHumidityLists,
                    "unchecked....bgClickedSynopRelativeHumidityLists");
            }
        }

        //bgClicked SYNOP 15UTC VISIBILITY[]
        if (_this.context._layer?.group.name == "SYNOP 15UTC") {
            if (layer_name == 'Visibility_15') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopVisibilityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopVisibilityLists.splice(index, 1);
                }
                console.log(bgClickedSynopVisibilityLists,
                    "unchecked....bgClickedSynopVisibilityLists");
            }
        }

        //bgClicked SYNOP 15UTC WIND SPEED AND DIRECTION[]
        if (_this.context._layer?.group.name == "SYNOP 15UTC") {
            if (layer_name == 'Wind Speed and Direction_15') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopWindSpeedAndDirectionLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopWindSpeedAndDirectionLists.splice(index, 1);
                }
                console.log(bgClickedSynopWindSpeedAndDirectionLists,
                    "unchecked....bgClickedSynopWindSpeedAndDirectionLists");
            }
        }

        //bgClicked SYNOP 15UTC 3h RAINFALL[]
        if (_this.context._layer?.group.name == "SYNOP 15UTC") {
            if (layer_name == '3h Rainfall_15') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynop3hRainfallLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynop3hRainfallLists.splice(index, 1);
                }
                console.log(bgClickedSynop3hRainfallLists,
                    "unchecked....bgClickedSynop3hRainfallLists");
            }
        }

        //        
        //bgClicked SYNOP 18UTC TEMPERATURE[]
        if (_this.context._layer?.group.name == "SYNOP 18UTC") {
            if (layer_name == 'Temperature_18') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopTempLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopTempLists.splice(index, 1);
                }
                console.log(bgClickedSynopTempLists,
                    "unchecked....bgClickedSynopTempLists");
            }
        }

        //bgClicked SYNOP 18UTC MEAN SEA LEVEL PRESSURE[]
        if (_this.context._layer?.group.name == "SYNOP 18UTC") {
            if (layer_name == 'Mean Sea Level Pressure_18') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopMeanSeaLevelLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopMeanSeaLevelLists.splice(index, 1);
                }
                console.log(bgClickedSynopMeanSeaLevelLists,
                    "unchecked....bgClickedSynopMeanSeaLevelLists");
            }
        }

        //bgClicked SYNOP 18UTC CLOUD COVER[]
        if (_this.context._layer?.group.name == "SYNOP 18UTC") {
            if (layer_name == 'Cloud Cover_18') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopCloudCoverLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopCloudCoverLists.splice(index, 1);
                }
                console.log(bgClickedSynopCloudCoverLists,
                    "unchecked....bgClickedSynopCloudCoverLists");
            }
        }

        //bgClicked SYNOP 18UTC GEOPOTENTIAL HEIGHT[]
        if (_this.context._layer?.group.name == "SYNOP 18UTC") {
            if (layer_name == 'Geopotential Height_18') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopGeopotentialHeightLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopGeopotentialHeightLists.splice(index, 1);
                }
                console.log(bgClickedSynopGeopotentialHeightLists,
                    "unchecked....bgClickedSynopGeopotentialHeightLists");
            }
        }

        //bgClicked SYNOP 18UTC RELATIVE HUMIDITY[]
        if (_this.context._layer?.group.name == "SYNOP 18UTC") {
            if (layer_name == 'Relative Humidity_18') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopRelativeHumidityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopRelativeHumidityLists.splice(index, 1);
                }
                console.log(bgClickedSynopRelativeHumidityLists,
                    "unchecked....bgClickedSynopRelativeHumidityLists");
            }
        }

        //bgClicked SYNOP 18UTC VISIBILITY[]
        if (_this.context._layer?.group.name == "SYNOP 18UTC") {
            if (layer_name == 'Visibility_18') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopVisibilityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopVisibilityLists.splice(index, 1);
                }
                console.log(bgClickedSynopVisibilityLists,
                    "unchecked....bgClickedSynopVisibilityLists");
            }
        }

        //bgClicked SYNOP 18UTC WIND SPEED AND DIRECTION[]
        if (_this.context._layer?.group.name == "SYNOP 18UTC") {
            if (layer_name == 'Wind Speed and Direction_18') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopWindSpeedAndDirectionLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopWindSpeedAndDirectionLists.splice(index, 1);
                }
                console.log(bgClickedSynopWindSpeedAndDirectionLists,
                    "unchecked....bgClickedSynopWindSpeedAndDirectionLists");
            }
        }

        //bgClicked SYNOP 18UTC 3h RAINFALL[]
        if (_this.context._layer?.group.name == "SYNOP 18UTC") {
            if (layer_name == '3h Rainfall_18') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynop3hRainfallLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynop3hRainfallLists.splice(index, 1);
                }
                console.log(bgClickedSynop3hRainfallLists,
                    "unchecked....bgClickedSynop3hRainfallLists");
            }
        }

        //
        //bgClicked SYNOP 21UTC TEMPERATURE[]
        if (_this.context._layer?.group.name == "SYNOP 21UTC") {
            if (layer_name == 'Temperature_21') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopTempLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopTempLists.splice(index, 1);
                }
                console.log(bgClickedSynopTempLists,
                    "unchecked....bgClickedSynopTempLists");
            }
        }

        //bgClicked SYNOP 21UTC MEAN SEA LEVEL PRESSURE[]
        if (_this.context._layer?.group.name == "SYNOP 21UTC") {
            if (layer_name == 'Mean Sea Level Pressure_21') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopMeanSeaLevelLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopMeanSeaLevelLists.splice(index, 1);
                }
                console.log(bgClickedSynopMeanSeaLevelLists,
                    "unchecked....bgClickedSynopMeanSeaLevelLists");
            }
        }

        //bgClicked SYNOP 21UTC CLOUD COVER[]
        if (_this.context._layer?.group.name == "SYNOP 21UTC") {
            if (layer_name == 'Cloud Cover_21') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopCloudCoverLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopCloudCoverLists.splice(index, 1);
                }
                console.log(bgClickedSynopCloudCoverLists,
                    "unchecked....bgClickedSynopCloudCoverLists");
            }
        }

        //bgClicked SYNOP 21UTC GEOPOTENTIAL HEIGHT[]
        if (_this.context._layer?.group.name == "SYNOP 21UTC") {
            if (layer_name == 'Geopotential Height_21') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopGeopotentialHeightLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopGeopotentialHeightLists.splice(index, 1);
                }
                console.log(bgClickedSynopGeopotentialHeightLists,
                    "unchecked....bgClickedSynopGeopotentialHeightLists");
            }
        }

        //bgClicked SYNOP 21UTC RELATIVE HUMIDITY[]
        if (_this.context._layer?.group.name == "SYNOP 21UTC") {
            if (layer_name == 'Relative Humidity_21') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopRelativeHumidityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopRelativeHumidityLists.splice(index, 1);
                }
                console.log(bgClickedSynopRelativeHumidityLists,
                    "unchecked....bgClickedSynopRelativeHumidityLists");
            }
        }

        //bgClicked SYNOP 21UTC VISIBILITY[]
        if (_this.context._layer?.group.name == "SYNOP 21UTC") {
            if (layer_name == 'Visibility_21') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopVisibilityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopVisibilityLists.splice(index, 1);
                }
                console.log(bgClickedSynopVisibilityLists,
                    "unchecked....bgClickedSynopVisibilityLists");
            }
        }

        //bgClicked SYNOP 21UTC WIND SPEED AND DIRECTION[]
        if (_this.context._layer?.group.name == "SYNOP 21UTC") {
            if (layer_name == 'Wind Speed and Direction_21') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynopWindSpeedAndDirectionLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynopWindSpeedAndDirectionLists.splice(index, 1);
                }
                console.log(bgClickedSynopWindSpeedAndDirectionLists,
                    "unchecked....bgClickedSynopWindSpeedAndDirectionLists");
            }
        }

        //bgClicked SYNOP 21UTC 3h RAINFALL[]
        if (_this.context._layer?.group.name == "SYNOP 21UTC") {
            if (layer_name == '3h Rainfall_21') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSynop3hRainfallLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSynop3hRainfallLists.splice(index, 1);
                }
                console.log(bgClickedSynop3hRainfallLists,
                    "unchecked....bgClickedSynop3hRainfallLists");
            }
        }

        //mesolscale
        //bgClickedWRFReflectivityLists[]
        if (_this.context._layer?.group.name == "WRF Reflectivity") {
            if (layer_name == 'WRF R Next 03 Hrs') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedWRFReflectivityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedWRFReflectivityLists.splice(index, 1);
                }
                console.log(bgClickedWRFReflectivityLists,
                    "unchecked....bgClickedWRFReflectivityLists");
            }
        }

        //bgClickedWRFReflectivityLists[]
        if (_this.context._layer?.group.name == "WRF Reflectivity") {
            if (layer_name == 'WRF R Next 03-06 Hrs') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedWRFReflectivityLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedWRFReflectivityLists.splice(index, 1);
                }
                console.log(bgClickedWRFReflectivityLists,
                    "unchecked....bgClickedWRFReflectivityLists");
            }
        }

        //bgClickedWRFlightningProductLists[]
        if (_this.context._layer?.group.name == "WRF Lightning Product") {
            if (layer_name == 'WRF LP Next 03 Hrs') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedWRFlightningProductLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedWRFlightningProductLists.splice(index, 1);
                }
                console.log(bgClickedWRFlightningProductLists,
                    "unchecked....bgClickedWRFlightningProductLists");
            }
        }

        //bgClickedWRFlightningProductLists[]
        if (_this.context._layer?.group.name == "WRF Lightning Product") {
            if (layer_name == 'WRF LP Next 03-06 Hrs') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedWRFlightningProductLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedWRFlightningProductLists.splice(index, 1);
                }
                console.log(bgClickedWRFlightningProductLists,
                    "unchecked....bgClickedWRFlightningProductLists");
            }
        }

        //bgClickedWRFAccumlatedRainfallLists[]
        if (_this.context._layer?.group.name == "WRF Accumlated Rainfall") {
            if (layer_name == 'WRF AR Next 03 Hrs') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedWRFAccumlatedRainfallLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedWRFAccumlatedRainfallLists.splice(index, 1);
                }
                console.log(bgClickedWRFAccumlatedRainfallLists,
                    "unchecked....bgClickedWRFAccumlatedRainfallLists");
            }
        }

        //bgClickedWRFAccumlatedRainfallLists[]
        if (_this.context._layer?.group.name == "WRF Accumlated Rainfall") {
            if (layer_name == 'WRF AR Next 03-06 Hrs') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedWRFAccumlatedRainfallLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedWRFAccumlatedRainfallLists.splice(index, 1);
                }
                console.log(bgClickedWRFAccumlatedRainfallLists,
                    "unchecked....bgClickedWRFAccumlatedRainfallLists");
            }
        }

        //bgClickedlightningPotentialindexLists[]
        if (_this.context._layer?.group.name == "Lightning Potential Index") {
            if (layer_name == 'LP Next 01 Hrs') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedlightningPotentialindexLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedlightningPotentialindexLists.splice(index, 1);
                }
                console.log(bgClickedlightningPotentialindexLists,
                    "unchecked....bgClickedlightningPotentialindexLists");
            }
        }

        //bgClickedlightningPotentialindexLists[]
        if (_this.context._layer?.group.name == "Lightning Potential Index") {
            if (layer_name == 'LP Next 01-02 Hrs') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedlightningPotentialindexLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedlightningPotentialindexLists.splice(index, 1);
                }
                console.log(bgClickedlightningPotentialindexLists,
                    "unchecked....bgClickedlightningPotentialindexLists");
            }
        }

        //bgClickedlightningPotentialindexLists[]
        if (_this.context._layer?.group.name == "Lightning Potential Index") {
            if (layer_name == 'LP Next 02-03 Hrs') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedlightningPotentialindexLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedlightningPotentialindexLists.splice(index, 1);
                }
                console.log(bgClickedlightningPotentialindexLists,
                    "unchecked....bgClickedlightningPotentialindexLists");
            }
        }

        // bgClickedNCUMRlightningProductLists
        if (_this.context._layer?.group.name == "NCUMR Lightning Product") {
            if (layer_name == 'NCUMR LP Next 03 Hrs') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedNCUMRlightningProductLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedNCUMRlightningProductLists.splice(index, 1);
                }
                console.log(bgClickedNCUMRlightningProductLists,
                    "unchecked....bgClickedNCUMRlightningProductLists");
            }
        }

        // bgClickedNCUMRlightningProductLists
        if (_this.context._layer?.group.name == "NCUMR Lightning Product") {
            if (layer_name == 'NCUMR LP Next 03-06 Hrs') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedNCUMRlightningProductLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedNCUMRlightningProductLists.splice(index, 1);
                }
                console.log(bgClickedNCUMRlightningProductLists,
                    "unchecked....bgClickedNCUMRlightningProductLists");
            }
        }

        // bgClickedNCUMRWindGustLists
        if (_this.context._layer?.group.name == "NCUMR Wind Gust") {
            if (layer_name == 'NCUMR WG Next 03 Hrs') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedNCUMRWindGustLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedNCUMRWindGustLists.splice(index, 1);
                }
                console.log(bgClickedNCUMRWindGustLists,
                    "unchecked....bgClickedNCUMRWindGustLists");
            }
        }

        // bgClickedNCUMRWindGustLists
        if (_this.context._layer?.group.name == "NCUMR Wind Gust") {
            if (layer_name == 'NCUMR WG Next 03-06 Hrs') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedNCUMRWindGustLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedNCUMRWindGustLists.splice(index, 1);
                }
                console.log(bgClickedNCUMRWindGustLists,
                    "unchecked....bgClickedNCUMRWindGustLists");
            }
        }

        // bgClickedNCUMRRainfallLists
        if (_this.context._layer?.group.name == "NCUMR Rainfall") {
            if (layer_name == 'NCUMR R Next 03 Hrs') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedNCUMRRainfallLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedNCUMRRainfallLists.splice(index, 1);
                }
                console.log(bgClickedNCUMRRainfallLists,
                    "unchecked....bgClickedNCUMRRainfallLists");
            }
        }

        // bgClickedNCUMRRainfallLists
        if (_this.context._layer?.group.name == "NCUMR Rainfall") {
            if (layer_name == 'NCUMR R Next 03-06 Hrs') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedNCUMRRainfallLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedNCUMRRainfallLists.splice(index, 1);
                }
                console.log(bgClickedNCUMRRainfallLists,
                    "unchecked....bgClickedNCUMRRainfallLists");
            }
        }

        // bgClickedHRRR_SPHourlyDBZLists
        if (_this.context._layer?.group.name == "HRRR_SP Hourly DBZ") {
            if (layer_name == 'HRRR SP Next 01 Hrs') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedHRRR_SPHourlyDBZLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedHRRR_SPHourlyDBZLists.splice(index, 1);
                }
                console.log(bgClickedHRRR_SPHourlyDBZLists,
                    "unchecked....bgClickedHRRR_SPHourlyDBZLists");
            }
        }

        // bgClickedHRRR_SPHourlyDBZLists
        if (_this.context._layer?.group.name == "HRRR_SP Hourly DBZ") {
            if (layer_name == 'HRRR SP Next 01-02 Hrs') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedHRRR_SPHourlyDBZLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedHRRR_SPHourlyDBZLists.splice(index, 1);
                }
                console.log(bgClickedHRRR_SPHourlyDBZLists,
                    "unchecked....bgClickedHRRR_SPHourlyDBZLists");
            }
        }

        // bgClickedHRRR_SPHourlyDBZLists
        if (_this.context._layer?.group.name == "HRRR_SP Hourly DBZ") {
            if (layer_name == 'HRRR SP Next 02-03 Hrs') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedHRRR_SPHourlyDBZLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedHRRR_SPHourlyDBZLists.splice(index, 1);
                }
                console.log(bgClickedHRRR_SPHourlyDBZLists,
                    "unchecked....bgClickedHRRR_SPHourlyDBZLists");
            }
        }

        // bgClickedHRRR_NEHourlyDBZLists
        if (_this.context._layer?.group.name == "HRRR_NE Hourly DBZ") {
            if (layer_name == 'HRRR NE Next 01 Hrs') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedHRRR_NEHourlyDBZLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedHRRR_NEHourlyDBZLists.splice(index, 1);
                }
                console.log(bgClickedHRRR_NEHourlyDBZLists,
                    "unchecked....bgClickedHRRR_NEHourlyDBZLists");
            }
        }

        // bgClickedHRRR_NEHourlyDBZLists
        if (_this.context._layer?.group.name == "HRRR_NE Hourly DBZ") {
            if (layer_name == 'HRRR NE Next 01-02 Hrs') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedHRRR_NEHourlyDBZLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedHRRR_NEHourlyDBZLists.splice(index, 1);
                }
                console.log(bgClickedHRRR_NEHourlyDBZLists,
                    "unchecked....bgClickedHRRR_NEHourlyDBZLists");
            }
        }

        // bgClickedHRRR_NEHourlyDBZLists
        if (_this.context._layer?.group.name == "HRRR_NE Hourly DBZ") {
            if (layer_name == 'HRRR NE Next 02-03 Hrs') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedHRRR_NEHourlyDBZLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedHRRR_NEHourlyDBZLists.splice(index, 1);
                }
                console.log(bgClickedHRRR_NEHourlyDBZLists,
                    "unchecked....bgClickedHRRR_NEHourlyDBZLists");
            }
        }

        // bgClickedHRRR_NWHourlyDBZLists
        if (_this.context._layer?.group.name == "HRRR_NW Hourly DBZ") {
            if (layer_name == 'HRRR NW Next 01 Hrs') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedHRRR_NWHourlyDBZLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedHRRR_NWHourlyDBZLists.splice(index, 1);
                }
                console.log(bgClickedHRRR_NWHourlyDBZLists,
                    "unchecked....bgClickedHRRR_NWHourlyDBZLists");
            }
        }

        // bgClickedHRRR_NWHourlyDBZLists
        if (_this.context._layer?.group.name == "HRRR_NW Hourly DBZ") {
            if (layer_name == 'HRRR NW Next 01-02 Hrs') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedHRRR_NWHourlyDBZLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedHRRR_NWHourlyDBZLists.splice(index, 1);
                }
                console.log(bgClickedHRRR_NWHourlyDBZLists,
                    "unchecked....bgClickedHRRR_NWHourlyDBZLists");
            }
        }

        // bgClickedHRRR_NWHourlyDBZLists
        if (_this.context._layer?.group.name == "HRRR_NW Hourly DBZ") {
            if (layer_name == 'HRRR NW Next 02-03 Hrs') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedHRRR_NWHourlyDBZLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedHRRR_NWHourlyDBZLists.splice(index, 1);
                }
                console.log(bgClickedHRRR_NWHourlyDBZLists,
                    "unchecked....bgClickedHRRR_NWHourlyDBZLists");
            }
        }

        // bgClickedEWRFMaxZLists
        if (_this.context._layer?.group.name == "EWRF MaxZ") {
            if (layer_name == 'EWRF M Next 01 Hrs') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedEWRFMaxZLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedEWRFMaxZLists.splice(index, 1);
                }
                console.log(bgClickedEWRFMaxZLists,
                    "unchecked....bgClickedEWRFMaxZLists");
            }
        }

        // bgClickedEWRFMaxZLists
        if (_this.context._layer?.group.name == "EWRF MaxZ") {
            if (layer_name == 'EWRF M Next 01-02 Hrs') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedEWRFMaxZLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedEWRFMaxZLists.splice(index, 1);
                }
                console.log(bgClickedEWRFMaxZLists,
                    "unchecked....bgClickedEWRFMaxZLists");
            }
        }

        // bgClickedEWRFMaxZLists
        if (_this.context._layer?.group.name == "EWRF MaxZ") {
            if (layer_name == 'EWRF M Next 02-03 Hrs') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedEWRFMaxZLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedEWRFMaxZLists.splice(index, 1);
                }
                console.log(bgClickedEWRFMaxZLists,
                    "unchecked....bgClickedEWRFMaxZLists");
            }
        }

        // bgClickedEWRFMaxZLists
        if (_this.context._layer?.group.name == "EWRF Lightning") {
            if (layer_name == 'EWRF L Next 01 Hrs') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedEWRFLightningLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedEWRFLightningLists.splice(index, 1);
                }
                console.log(bgClickedEWRFLightningLists,
                    "unchecked....bgClickedEWRFLightningLists");
            }
        }

        // bgClickedEWRFMaxZLists
        if (_this.context._layer?.group.name == "EWRF Lightning") {
            if (layer_name == 'EWRF L Next 01-02 Hrs') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedEWRFLightningLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedEWRFLightningLists.splice(index, 1);
                }
                console.log(bgClickedEWRFLightningLists,
                    "unchecked....bgClickedEWRFLightningLists");
            }
        }

        // bgClickedEWRFMaxZLists
        if (_this.context._layer?.group.name == "EWRF Lightning") {
            if (layer_name == 'EWRF L Next 02-03 Hrs') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedEWRFLightningLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedEWRFLightningLists.splice(index, 1);
                }
                console.log(bgClickedEWRFLightningLists,
                    "unchecked....bgClickedEWRFLightningLists");
            }
        }


        //SOUNDING
        //bgClicked SOUNDING_00_UTC WIND [] 1000 hpa WIND
        if (_this.context._layer?.group.name == "Sounding_00UTC Wind") {
            if (layer_name == '1000 hPa Wind') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING00UTCWINDLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING00UTCWINDLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING00UTCWINDLists,
                    "unchecked....bgClickedSOUNDING00UTCWINDLists");
            }
        }

        //bgClicked SOUNDING_00_UTC WIND [] 850 hPa WIND
        if (_this.context._layer?.group.name == "Sounding_00UTC Wind") {
            if (layer_name == '850 hPa Wind') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING00UTCWINDLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING00UTCWINDLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING00UTCWINDLists,
                    "unchecked....bgClickedSOUNDING00UTCWINDLists");
            }
        }

        //bgClicked SOUNDING_00_UTC WIND [] 700 hPa WIND
        if (_this.context._layer?.group.name == "Sounding_00UTC Wind") {
            if (layer_name == '700 hPa Wind') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING00UTCWINDLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING00UTCWINDLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING00UTCWINDLists,
                    "unchecked....bgClickedSOUNDING00UTCWINDLists");
            }
        }

        //bgClicked SOUNDING_00_UTC WIND [] 500 hPa WIND
        if (_this.context._layer?.group.name == "Sounding_00UTC Wind") {
            if (layer_name == '500 hPa Wind') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING00UTCWINDLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING00UTCWINDLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING00UTCWINDLists,
                    "unchecked....bgClickedSOUNDING00UTCWINDLists");
            }
        }

        //bgClicked SOUNDING_00_UTC WIND [] 300 hPa WIND
        if (_this.context._layer?.group.name == "Sounding_00UTC Wind") {
            if (layer_name == '300 hPa Wind') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING00UTCWINDLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING00UTCWINDLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING00UTCWINDLists,
                    "unchecked....bgClickedSOUNDING00UTCWINDLists");
            }
        }

        //bgClicked SOUNDING_00_UTC WIND [] 200 hPa WIND
        if (_this.context._layer?.group.name == "Sounding_00UTC Wind") {
            if (layer_name == '200 hPa Wind') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING00UTCWINDLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING00UTCWINDLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING00UTCWINDLists,
                    "unchecked....bgClickedSOUNDING00UTCWINDLists");
            }
        }

        //bgClicked SOUNDING_00_UTC WIND [] 100 hPa WIND
        if (_this.context._layer?.group.name == "Sounding_00UTC Wind") {
            if (layer_name == '100 hPa Wind') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING00UTCWINDLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING00UTCWINDLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING00UTCWINDLists,
                    "unchecked....bgClickedSOUNDING00UTCWINDLists");
            }
        }

        //bgClicked SOUNDING_00_UTC WIND [] 50 hPa WIND
        if (_this.context._layer?.group.name == "Sounding_00UTC Wind") {
            if (layer_name == '50 hPa Wind') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING00UTCWINDLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING00UTCWINDLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING00UTCWINDLists,
                    "unchecked....bgClickedSOUNDING00UTCWINDLists");
            }
        }

        //bgClicked SOUNDING_12_UTC WIND [] 1000 hPa WIND
        if (_this.context._layer?.group.name == "Sounding_12UTC Wind") {
            if (layer_name == '1000 hPa Wind') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING12UTCWINDLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING12UTCWINDLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING12UTCWINDLists,
                    "unchecked....bgClickedSOUNDING12UTCWINDLists");
            }
        }

        //bgClicked SOUNDING_12_UTC WIND [] 850 hPa WIND
        if (_this.context._layer?.group.name == "Sounding_12UTC Wind") {
            if (layer_name == '850 hPa Wind') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING12UTCWINDLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING12UTCWINDLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING12UTCWINDLists,
                    "unchecked....bgClickedSOUNDING12UTCWINDLists");
            }
        }

        //bgClicked SOUNDING_12_UTC WIND [] 700 hPa WIND
        if (_this.context._layer?.group.name == "Sounding_12UTC Wind") {
            if (layer_name == '700 hPa Wind') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING12UTCWINDLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING12UTCWINDLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING12UTCWINDLists,
                    "unchecked....bgClickedSOUNDING12UTCWINDLists");
            }
        }

        //bgClicked SOUNDING_12_UTC WIND [] 500 hPa WIND
        if (_this.context._layer?.group.name == "Sounding_12UTC Wind") {
            if (layer_name == '500 hPa Wind') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING12UTCWINDLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING12UTCWINDLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING12UTCWINDLists,
                    "unchecked....bgClickedSOUNDING12UTCWINDLists");
            }
        }

        //bgClicked SOUNDING_12_UTC WIND [] 300 hPa WIND
        if (_this.context._layer?.group.name == "Sounding_12UTC Wind") {
            if (layer_name == '300 hPa Wind') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING12UTCWINDLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING12UTCWINDLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING12UTCWINDLists,
                    "unchecked....bgClickedSOUNDING12UTCWINDLists");
            }
        }

        //bgClicked SOUNDING_12_UTC WIND [] 200 hPa WIND
        if (_this.context._layer?.group.name == "Sounding_12UTC Wind") {
            if (layer_name == '200 hPa Wind') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING12UTCWINDLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING12UTCWINDLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING12UTCWINDLists,
                    "unchecked....bgClickedSOUNDING12UTCWINDLists");
            }
        }

        //bgClicked SOUNDING_12_UTC WIND [] 100 hPa WIND
        if (_this.context._layer?.group.name == "Sounding_12UTC Wind") {
            if (layer_name == '100 hPa Wind') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING12UTCWINDLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING12UTCWINDLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING12UTCWINDLists,
                    "unchecked....bgClickedSOUNDING12UTCWINDLists");
            }
        }

        //bgClicked SOUNDING_12_UTC WIND [] 50 hPa WIND
        if (_this.context._layer?.group.name == "Sounding_12UTC Wind") {
            if (layer_name == '50 hPa Wind') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING12UTCWINDLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING12UTCWINDLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING12UTCWINDLists,
                    "unchecked....bgClickedSOUNDING12UTCWINDLists");
            }
        }

        //SOUND TEMP 00
        //bgClicked SOUNDING_00UTC TEMP [] 1000 hPa TEMP
        if (_this.context._layer?.group.name == "Sounding_00UTC Temp") {
            if (layer_name == '1000 hPa Temp') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING00UTCTEMPLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING00UTCTEMPLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING00UTCTEMPLists,
                    "unchecked....bgClickedSOUNDING00UTCTEMPLists");
            }
        }

        //bgClicked SOUNDING_00UTC TEMP [] 850 hPa TEMP
        if (_this.context._layer?.group.name == "Sounding_00UTC Temp") {
            if (layer_name == '850 hPa Temp') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING00UTCTEMPLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING00UTCTEMPLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING00UTCTEMPLists,
                    "unchecked....bgClickedSOUNDING00UTCTEMPLists");
            }
        }

        //bgClicked SOUNDING_00UTC TEMP [] 700 hPa TEMP
        if (_this.context._layer?.group.name == "Sounding_00UTC Temp") {
            if (layer_name == '700 hPa Temp') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING00UTCTEMPLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING00UTCTEMPLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING00UTCTEMPLists,
                    "unchecked....bgClickedSOUNDING00UTCTEMPLists");
            }
        }

        //bgClicked SOUNDING_00UTC TEMP [] 500 hPa TEMP
        if (_this.context._layer?.group.name == "Sounding_00UTC Temp") {
            if (layer_name == '500 hPa Temp') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING00UTCTEMPLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING00UTCTEMPLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING00UTCTEMPLists,
                    "unchecked....bgClickedSOUNDING00UTCTEMPLists");
            }
        }

        //bgClicked SOUNDING_00UTC TEMP [] 300 hPa TEMP
        if (_this.context._layer?.group.name == "Sounding_00UTC Temp") {
            if (layer_name == '300 hPa Temp') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING00UTCTEMPLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING00UTCTEMPLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING00UTCTEMPLists,
                    "unchecked....bgClickedSOUNDING00UTCTEMPLists");
            }
        }

        //bgClicked SOUNDING_00UTC TEMP [] 200 hPa TEMP
        if (_this.context._layer?.group.name == "Sounding_00UTC Temp") {
            if (layer_name == '200 hPa Temp') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING00UTCTEMPLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING00UTCTEMPLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING00UTCTEMPLists,
                    "unchecked....bgClickedSOUNDING00UTCTEMPLists");
            }
        }

        //bgClicked SOUNDING_00UTC TEMP [] 100 hPa TEMP
        if (_this.context._layer?.group.name == "Sounding_00UTC Temp") {
            if (layer_name == '100 hPa Temp') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING00UTCTEMPLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING00UTCTEMPLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING00UTCTEMPLists,
                    "unchecked....bgClickedSOUNDING00UTCTEMPLists");
            }
        }

        //bgClicked SOUNDING_00UTC TEMP [] 50 hPa TEMP
        if (_this.context._layer?.group.name == "Sounding_00UTC Temp") {
            if (layer_name == '50 hPa Temp') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING00UTCTEMPLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING00UTCTEMPLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING00UTCTEMPLists,
                    "unchecked....bgClickedSOUNDING00UTCTEMPLists");
            }
        }

        //SOUNDING_12UTC TEMP
        //bgClicked SOUNDING_12UTC TEMP [] 1000 hPa WIND
        if (_this.context._layer?.group.name == "Sounding_12UTC Temp") {
            if (layer_name == '1000 hPa Temp') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING12UTCTEMPLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING12UTCTEMPLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING12UTCTEMPLists,
                    "unchecked....bgClickedSOUNDING12UTCTEMPLists");
            }
        }

        //bgClicked SOUNDING_12UTC TEMP [] 850 hPa TEMP
        if (_this.context._layer?.group.name == "Sounding_12UTC Temp") {
            if (layer_name == '850 hPa Temp') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING12UTCTEMPLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING12UTCTEMPLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING12UTCTEMPLists,
                    "unchecked....bgClickedSOUNDING12UTCTEMPLists");
            }
        }

        //bgClicked SOUNDING_12UTC TEMP [] 700 hPa TEMP
        if (_this.context._layer?.group.name == "Sounding_12UTC Temp") {
            if (layer_name == '700 hPa Temp') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING12UTCTEMPLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING12UTCTEMPLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING12UTCTEMPLists,
                    "unchecked....bgClickedSOUNDING12UTCTEMPLists");
            }
        }

        //bgClicked SOUNDING_12UTC TEMP [] 500 hPa TEMP
        if (_this.context._layer?.group.name == "Sounding_12UTC Temp") {
            if (layer_name == '500 hPa Temp') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING12UTCTEMPLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING12UTCTEMPLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING12UTCTEMPLists,
                    "unchecked....bgClickedSOUNDING12UTCTEMPLists");
            }
        }

        //bgClicked SOUNDING_00UTC TEMP [] 300 hPa TEMP
        if (_this.context._layer?.group.name == "Sounding_12UTC Temp") {
            if (layer_name == '300 hPa Temp') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING12UTCTEMPLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING12UTCTEMPLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING12UTCTEMPLists,
                    "unchecked....bgClickedSOUNDING12UTCTEMPLists");
            }
        }

        //bgClicked SOUNDING_12UTC TEMP [] 200 hPa TEMP
        if (_this.context._layer?.group.name == "Sounding_12UTC Temp") {
            if (layer_name == '200 hPa Temp') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING12UTCTEMPLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING12UTCTEMPLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING12UTCTEMPLists,
                    "unchecked....bgClickedSOUNDING12UTCTEMPLists");
            }
        }

        //bgClicked SOUNDING_12UTC TEMP [] 100 hPa TEMP
        if (_this.context._layer?.group.name == "Sounding_12UTC Temp") {
            if (layer_name == '100 hPa Temp') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING12UTCTEMPLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING12UTCTEMPLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING12UTCTEMPLists,
                    "unchecked....bgClickedSOUNDING12UTCTEMPLists");
            }
        }

        //bgClicked SOUNDING_12UTC TEMP [] 50 hPa TEMP
        if (_this.context._layer?.group.name == "Sounding_12UTC Temp") {
            if (layer_name == '50 hPa Temp') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING12UTCTEMPLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING12UTCTEMPLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING12UTCTEMPLists,
                    "unchecked....bgClickedSOUNDING12UTCTEMPLists");
            }
        }

        //SOUND 00UTC DEW POINT 
        //bgClicked SOUNDING_00UTC DEW POINT [] 1000 hPa DEW POINT
        if (_this.context._layer?.group.name == "Sounding_00UTC Dew Point") {
            if (layer_name == '1000 hPa Dew Point') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING00UTCDEWPOINTLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING00UTCDEWPOINTLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING00UTCDEWPOINTLists,
                    "unchecked....bgClickedSOUNDING00UTCDEWPOINTLists");
            }
        }

        //bgClicked SOUNDING_00UTC DEW POINT [] 850 hPa DEW POINT
        if (_this.context._layer?.group.name == "Sounding_00UTC Dew Point") {
            if (layer_name == '850 hPa Dew Point') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING00UTCDEWPOINTLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING00UTCDEWPOINTLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING00UTCDEWPOINTLists,
                    "unchecked....bgClickedSOUNDING00UTCDEWPOINTLists");
            }
        }

        //bgClicked SOUNDING_00UTC DEW POINT [] 700 hPa DEW POINT
        if (_this.context._layer?.group.name == "Sounding_00UTC Dew Point") {
            if (layer_name == '700 hPa Dew Point') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING00UTCDEWPOINTLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING00UTCDEWPOINTLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING00UTCDEWPOINTLists,
                    "unchecked....bgClickedSOUNDING00UTCDEWPOINTLists");
            }
        }

        //bgClicked SOUNDING_00UTC DEW POINT [] 500 hPa DEW POINT
        if (_this.context._layer?.group.name == "Sounding_00UTC Dew Point") {
            if (layer_name == '500 hPa Dew Point') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING00UTCDEWPOINTLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING00UTCDEWPOINTLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING00UTCDEWPOINTLists,
                    "unchecked....bgClickedSOUNDING00UTCDEWPOINTLists");
            }
        }

        //bgClicked SOUNDING_00UTC DEW POINT [] 300 hPa DEW POINT
        if (_this.context._layer?.group.name == "Sounding_00UTC Dew Point") {
            if (layer_name == '300 hPa Dew Point') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING00UTCDEWPOINTLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING00UTCDEWPOINTLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING00UTCDEWPOINTLists,
                    "unchecked....bgClickedSOUNDING00UTCDEWPOINTLists");
            }
        }

        //bgClicked SOUNDING_00UTC DEW POINT [] 200 hPa DEW POINT
        if (_this.context._layer?.group.name == "Sounding_00UTC Dew Point") {
            if (layer_name == '200 hPa Dew Point') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING00UTCDEWPOINTLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING00UTCDEWPOINTLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING00UTCDEWPOINTLists,
                    "unchecked....bgClickedSOUNDING00UTCDEWPOINTLists");
            }
        }

        //bgClicked SOUNDING_00UTC DEW POINT [] 100 hPa DEW POINT
        if (_this.context._layer?.group.name == "Sounding_00UTC Dew Point") {
            if (layer_name == '100 hPa Dew Point') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING00UTCDEWPOINTLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING00UTCDEWPOINTLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING00UTCDEWPOINTLists,
                    "unchecked....bgClickedSOUNDING00UTCDEWPOINTLists");
            }
        }

        //bgClicked SOUNDING_00UTC DEW POINT [] 50 hPa DEW POINT
        if (_this.context._layer?.group.name == "Sounding_00UTC Dew Point") {
            if (layer_name == '50 hPa Dew Point') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING00UTCDEWPOINTLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING00UTCDEWPOINTLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING00UTCDEWPOINTLists,
                    "unchecked....bgClickedSOUNDING00UTCDEWPOINTLists");
            }
        }

        //SOUND 12UTC DEW POINT 
        //bgClicked SOUNDING_12UTC DEW POINT [] 1000 hPa DEW POINT
        if (_this.context._layer?.group.name == "Sounding_12UTC Dew Point") {
            if (layer_name == '1000 hPa Dew Point') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING12UTCDEWPOINTLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING12UTCDEWPOINTLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING12UTCDEWPOINTLists,
                    "unchecked....bgClickedSOUNDING12UTCDEWPOINTLists");
            }
        }

        //bgClicked SOUNDING_12UTC DEW POINT [] 850 hPa DEW POINT
        if (_this.context._layer?.group.name == "Sounding_12UTC Dew Point") {
            if (layer_name == '850 hPa Dew Point') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING12UTCDEWPOINTLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING12UTCDEWPOINTLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING12UTCDEWPOINTLists,
                    "unchecked....bgClickedSOUNDING12UTCDEWPOINTLists");
            }
        }

        //bgClicked SOUNDING_12UTC DEW POINT [] 700 hPa DEW POINT
        if (_this.context._layer?.group.name == "Sounding_12UTC Dew Point") {
            if (layer_name == '700 hPa Dew Point') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING12UTCDEWPOINTLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING12UTCDEWPOINTLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING12UTCDEWPOINTLists,
                    "unchecked....bgClickedSOUNDING12UTCDEWPOINTLists");
            }
        }

        //bgClicked SOUNDING_12UTC DEW POINT [] 500 hPa DEW POINT
        if (_this.context._layer?.group.name == "Sounding_12UTC Dew Point") {
            if (layer_name == '500 hPa Dew Point') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING12UTCDEWPOINTLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING12UTCDEWPOINTLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING12UTCDEWPOINTLists,
                    "unchecked....bgClickedSOUNDING12UTCDEWPOINTLists");
            }
        }

        //bgClicked SOUNDING_12UTC DEW POINT [] 300 hPa DEW POINT
        if (_this.context._layer?.group.name == "Sounding_12UTC Dew Point") {
            if (layer_name == '300 hPa Dew Point') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING12UTCDEWPOINTLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING12UTCDEWPOINTLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING12UTCDEWPOINTLists,
                    "unchecked....bgClickedSOUNDING12UTCDEWPOINTLists");
            }
        }

        //bgClicked SOUNDING_12UTC DEW POINT [] 200 hPa DEW POINT
        if (_this.context._layer?.group.name == "Sounding_12UTC Dew Point") {
            if (layer_name == '200 hPa Dew Point') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING12UTCDEWPOINTLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING12UTCDEWPOINTLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING12UTCDEWPOINTLists,
                    "unchecked....bgClickedSOUNDING12UTCDEWPOINTLists");
            }
        }

        //bgClicked SOUNDING_12UTC DEW POINT [] 100 hPa DEW POINT
        if (_this.context._layer?.group.name == "Sounding_12UTC Dew Point") {
            if (layer_name == '100 hPa Dew Point') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING12UTCDEWPOINTLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING12UTCDEWPOINTLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING12UTCDEWPOINTLists,
                    "unchecked....bgClickedSOUNDING12UTCDEWPOINTLists");
            }
        }

        //bgClicked SOUNDING_12UTC DEW POINT [] 50 hPa DEW POINT
        if (_this.context._layer?.group.name == "Sounding_12UTC Dew Point") {
            if (layer_name == '50 hPa Dew Point') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSOUNDING12UTCDEWPOINTLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSOUNDING12UTCDEWPOINTLists.splice(index, 1);
                }
                console.log(bgClickedSOUNDING12UTCDEWPOINTLists,
                    "unchecked....bgClickedSOUNDING12UTCDEWPOINTLists");
            }
        }

        // bgClickedSHIPANDBUOYLists
        //ship_and_buoy 
        if (_this.context._layer?.group.name == "Ship and Buoy Observation") {
            if (layer_name == '00UTC' || layer_name == '01UTC' || layer_name == '02UTC' || layer_name ==
                '03UTC' || layer_name == '04UTC' || layer_name == '05UTC' || layer_name == '06UTC' ||
                layer_name == '07UTC' || layer_name == '08UTC' || layer_name == '09UTC' || layer_name ==
                '10UTC' || layer_name == '11UTC' || layer_name == '12UTC' || layer_name == '13UTC' ||
                layer_name == '14UTC' || layer_name == '15UTC' || layer_name == '16UTC' || layer_name ==
                '17UTC' || layer_name == '18UTC' || layer_name == '19UTC' || layer_name == '20UTC' ||
                layer_name == '21UTC' || layer_name == '22UTC' || layer_name == '23UTC') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSHIPANDBUOYLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSHIPANDBUOYLists.splice(index, 1);
                }
                console.log(bgClickedSHIPANDBUOYLists, "unchecked....bgClickedSHIPANDBUOYLists");
            }
        }

        // bgClickedRadarLists
        //Radar 
        if (_this.context._layer?.group.name == "Radar Products") {
            if (layer_name == 'Radar Reflectivity' || layer_name == 'Radar Animation') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedRadarLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedRadarLists.splice(index, 1);
                }
                console.log(bgClickedRadarLists, "unchecked....bgClickedRadarLists");
            }
        }

        //bgClickedSATELLITELists[]
        if (_this.context._layer?.group.name == "Satellite Observation") {
            if (layer_name == 'TIR1' || layer_name == 'VIS' || layer_name ==
                'CTBT' || layer_name == 'Low Level Convergence' || layer_name == 'Upper Level Divergence' ||
                layer_name == 'Mid Level Shear' || layer_name == 'Vorticity at 200hPa' || layer_name ==
                'Vorticity at 500hPa' || layer_name == 'Vorticity at 700hPa' || layer_name ==
                'Vorticity at 850hPa') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedSATELLITELists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedSATELLITELists.splice(index, 1);
                }
                console.log(bgClickedSATELLITELists, "unchecked....bgClickedSATELLITELists");
            }
        }

        //bg Lightning 
        if (_this.context._layer?.group.name == "Lightning") {
            if (layer_name == 'Last 00-05 min' || layer_name == 'Last 05-10 min' || layer_name ==
                'Last 10-15 min' || layer_name == 'ILDN Last 05 min' || layer_name == 'Nowcast Alerts') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedLightningLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedLightningLists.splice(index, 1);
                }
                console.log(bgClickedLightningLists, "unchecked....bgClickedLightningLists");
            }
        }

        //bg medium_range 
        if (_this.context._layer?.group.name == "Rainfall Intensity Day1") {
            if (layer_name == 'RI GFS DAY1' || layer_name == 'RI NCUM Day1' || layer_name ==
                'RI NEPS Day1' || layer_name == 'RI WRF Day1' || layer_name == 'RI GEFS Day1' || layer_name ==
                'RI ECMWF Day1'
            ) {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedRainfallIntensityDay1Lists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedRainfallIntensityDay1Lists.splice(index, 1);
                }
                console.log(bgClickedRainfallIntensityDay1Lists,
                    "unchecked....bgClickedRainfallIntensityDay1Lists");
            }
        }

        //bgClickedRainfallIntensityDay2Lists[]
        if (_this.context._layer?.group.name == "Rainfall Intensity Day2") {
            if (layer_name == 'RI GFS Day2' || layer_name == 'RI NCUM Day2' || layer_name ==
                'RI NEPS Day2' || layer_name == 'RI WRF Day2' || layer_name == 'RI GEFS Day2' || layer_name ==
                'RI ECMWF Day2') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedRainfallIntensityDay2Lists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedRainfallIntensityDay2Lists.splice(index, 1);
                }
                console.log(bgClickedRainfallIntensityDay2Lists,
                    "unchecked....bgClickedRainfallIntensityDay2Lists");
            }
        }

        //bgClickedRainfallIntensityDay3Lists[]
        if (_this.context._layer?.group.name == "Rainfall Intensity Day3") {
            if (layer_name == 'RI GFS Day3' || layer_name == 'RI NCUM Day3' || layer_name ==
                'RI NEPS Day3' || layer_name == 'RI WRF Day3' || layer_name == 'RI GEFS Day3' || layer_name ==
                'RI ECMWF Day3') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedRainfallIntensityDay3Lists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedRainfallIntensityDay3Lists.splice(index, 1);
                }
                console.log(bgClickedRainfallIntensityDay3Lists,
                    "unchecked....bgClickedRainfallIntensityDay3Lists");
            }
        }

        //bgClickedRainfallIntensityDay4Lists[]
        if (_this.context._layer?.group.name == "Rainfall Intensity Day4") {
            if (layer_name == 'RI GFS Day4' || layer_name == 'RI NCUM Day4' || layer_name ==
                'RI NEPS Day4' || layer_name == 'RI WRF Day4' || layer_name == 'RI GEFS Day4' || layer_name ==
                'RI ECMWF Day4') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedRainfallIntensityDay4Lists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedRainfallIntensityDay4Lists.splice(index, 1);
                }
                console.log(bgClickedRainfallIntensityDay4Lists,
                    "unchecked....bgClickedRainfallIntensityDay4Lists");
            }
        }

        //bgClickedRainfallIntensityDay5Lists[]
        if (_this.context._layer?.group.name == "Rainfall Intensity Day5") {
            if (layer_name == 'RI GFS Day5' || layer_name == 'RI NCUM Day5' || layer_name ==
                'RI NEPS Day5' || layer_name == 'RI WRF Day5' || layer_name == 'RI GEFS Day5' || layer_name ==
                'RI ECMWF Day5') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedRainfallIntensityDay5Lists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedRainfallIntensityDay5Lists.splice(index, 1);
                }
                console.log(bgClickedRainfallIntensityDay5Lists,
                    "unchecked....bgClickedRainfallIntensityDay5Lists");
            }
        }

        //bgClickedMSLPDay1Lists[]
        if (_this.context._layer?.group.name == "MSLP Day1") {
            if (layer_name == 'MSLP GFS Day1' || layer_name == 'MSLP NCUM Day1' || layer_name ==
                'MSLP NEPS Day1' || layer_name == 'MSLP WRF Day1' || layer_name == 'MSLP GEFS Day1' ||
                layer_name ==
                'MSLP ECMWF Day1') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMSLPDay1Lists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMSLPDay1Lists.splice(index, 1);
                }
                console.log(bgClickedMSLPDay1Lists,
                    "unchecked....bgClickedMSLPDay1Lists");
            }
        }

        //bgClickedMSLPDay2Lists[]
        if (_this.context._layer?.group.name == "MSLP Day2") {
            if (layer_name == 'MSLP GFS Day2' || layer_name == 'MSLP NCUM Day2' || layer_name ==
                'MSLP NEPS Day2' || layer_name == 'MSLP WRF Day2' || layer_name == 'MSLP GEFS Day2' ||
                layer_name ==
                'MSLP ECMWF Day2') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMSLPDay2Lists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMSLPDay2Lists.splice(index, 1);
                }
                console.log(bgClickedMSLPDay2Lists,
                    "unchecked....bgClickedMSLPDay2Lists");
            }
        }

        //bgClickedMSLPDay3Lists[]
        if (_this.context._layer?.group.name == "MSLP Day3") {
            if (layer_name == 'MSLP GFS Day3' || layer_name == 'MSLP NCUM Day3' || layer_name ==
                'MSLP NEPS Day3' || layer_name == 'MSLP WRF Day3' || layer_name == 'MSLP GEFS Day3' ||
                layer_name ==
                'MSLP ECMWF Day3') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMSLPDay3Lists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMSLPDay3Lists.splice(index, 1);
                }
                console.log(bgClickedMSLPDay3Lists,
                    "unchecked....bgClickedMSLPDay3Lists");
            }
        }

        //bgClickedMSLPDay4Lists[]
        if (_this.context._layer?.group.name == "MSLP Day4") {
            if (layer_name == 'MSLP GFS Day4' || layer_name == 'MSLP NCUM Day4' || layer_name ==
                'MSLP NEPS Day4' || layer_name == 'MSLP WRF Day4' || layer_name == 'MSLP GEFS Day4' ||
                layer_name ==
                'MSLP ECMWF Day4') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMSLPDay4Lists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMSLPDay4Lists.splice(index, 1);
                }
                console.log(bgClickedMSLPDay4Lists,
                    "unchecked....bgClickedMSLPDay4Lists");
            }
        }

        //bgClickedMSLPDay5Lists[]
        if (_this.context._layer?.group.name == "MSLP Day5") {
            if (layer_name == 'MSLP FS Day5' || layer_name == 'MSLP NCUM Day5' || layer_name ==
                'MSLP NEPS Day5' || layer_name == 'MSLP WRF Day5' || layer_name == 'MSLP GEFS Day5' ||
                layer_name ==
                'MSLP ECMWF Day5') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedMSLPDay5Lists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedMSLPDay5Lists.splice(index, 1);
                }
                console.log(bgClickedMSLPDay5Lists,
                    "unchecked....bgClickedMSLPDay5Lists");
            }
        }

        //bgClicked10mWINDDay1Lists[]
        if (_this.context._layer?.group.name == "10m Wind Day1") {
            if (layer_name == '10m WIND GFS Day1' || layer_name == '10m WIND NCUM Day1' || layer_name ==
                '10m WIND NEPS Day1' || layer_name == '10m WIND WRF Day1' || layer_name ==
                '10m WIND GEFS Day1' || layer_name ==
                '10m WIND ECMWF Day1') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClicked10mWINDDay1Lists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClicked10mWINDDay1Lists.splice(index, 1);
                }
                console.log(bgClicked10mWINDDay1Lists,
                    "unchecked....bgClicked10mWINDDay1Lists");
            }
        }

        //bgClicked10mWINDDay2Lists[]
        if (_this.context._layer?.group.name == "10m WIND Day2") {
            if (layer_name == '10m WIND GFS Day2' || layer_name == '10m WIND NCUM Day2' || layer_name ==
                '10m WIND NEPS Day2' || layer_name == '10m WIND WRF Day2' || layer_name == '10m WIND GEFS Day2'
            ) {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClicked10mWINDDay2Lists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClicked10mWINDDay2Lists.splice(index, 1);
                }
                console.log(bgClicked10mWINDDay2Lists,
                    "unchecked....bgClicked10mWINDDay2Lists");
            }
        }

        //bgClicked10mWINDDay3Lists[]
        if (_this.context._layer?.group.name == "10m WIND Day3") {
            if (layer_name == '10m WIND GFS Day3' || layer_name == '10m WIND NCUM Day3' || layer_name ==
                '10m WIND NEPS Day3' || layer_name == '10m WIND WRF Day3' || layer_name == '10m WIND GEFS Day3'
            ) {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClicked10mWINDDay3Lists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClicked10mWINDDay3Lists.splice(index, 1);
                }
                console.log(bgClicked10mWINDDay3Lists,
                    "unchecked....bgClicked10mWINDDay3Lists");
            }
        }

        //bgClicked10mWINDDay4Lists[]
        if (_this.context._layer?.group.name == "10m WIND Day4") {
            if (layer_name == '10m WIND GFS Day4' || layer_name == '10m WIND NCUM Day4' || layer_name ==
                '10m WIND NEPS Day4' || layer_name == '10m WIND GEFS Day4') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClicked10mWINDDay4Lists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClicked10mWINDDay4Lists.splice(index, 1);
                }
                console.log(bgClicked10mWINDDay4Lists,
                    "unchecked....bgClicked10mWINDDay4Lists");
            }
        }

        //bgClicked10mWINDDay5Lists[]
        if (_this.context._layer?.group.name == "10m WIND Day5") {
            if (layer_name == '10m WIND GFS Day5' || layer_name == '10m WIND NCUM Day5' || layer_name ==
                '10m WIND NEPS Day5' || layer_name == '10m WIND GEFS Day5') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClicked10mWINDDay5Lists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClicked10mWINDDay5Lists.splice(index, 1);
                }
                console.log(bgClicked10mWINDDay5Lists,
                    "unchecked....bgClicked10mWINDDay5Lists");
            }
        }

        // // // // // // // // // // // // // // // // // //

        // Lightning UNCHECK
        // if (uncheckLayer == 'Lightning Last 00-05 min') {
        //     clickedLightningLists = clickedLightningLists.filter(checkList => {
        //         let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
        //         return clickedLayer != uncheckLayer
        //         console.log(clickedLayer, ".......clickedLayer");
        //     });
        //     panelLayerLightninglists.innerHTML = clickedLightningLists.join("");
        //     console.log(panelLayerLightninglists, "........panelLayerLightninglists");
        //     map.removeLayer(ggg);
        // }
        // if (uncheckLayer == 'Lightning Last 05-10 min') {
        //     clickedLightningLists = clickedLightningLists.filter(checkList => {
        //         let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
        //         return clickedLayer != uncheckLayer
        //     });
        //     panelLayerLightninglists.innerHTML = clickedLightningLists.join("");
        //     map.removeLayer(jaipurMarker);
        // }
        // if (uncheckLayer == 'Lightning Last 10-15 min') {
        //     clickedLightningLists = clickedLightningLists.filter(checkList => {
        //         let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
        //         return clickedLayer != uncheckLayer
        //     });
        //     panelLayerLightninglists.innerHTML = clickedLightningLists.join("");
        //     map.removeLayer(bhopalMarker);
        // }
        // //
        // if (panelLayerLightninglists.innerHTML == '') {
        //     panelLayerLightningTitle.innerHTML = '';
        // }

        // //GroupPanelLayer-collapsible
        // if (panelLayerLightninglists.innerHTML != '') {
        //     var yy = document.querySelectorAll('.collapsible')[0].classList.add('expanded');
        //     document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        //     // console.log(hhh, "yyjjjjjj");
        // }

        //Radar UNCHECK
        // if (uncheckLayer == 'Radar Reflectivity Radar Reflectivity') {
        //     clickedRadarLists = clickedRadarLists.filter(checkList => {
        //         let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
        //         console.log(clickedLayer, "..clickedLayer");
        //         return clickedLayer != uncheckLayer
        //     });
        //     panelLayerRadarlists.innerHTML = clickedRadarLists.join("");
        //     map.removeLayer(lucknowMarker);
        // }
        // if (uncheckLayer == 'Radar Reflectivity Radar Animation') {
        //     clickedRadarLists = clickedRadarLists.filter(checkList => {
        //         let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
        //         return clickedLayer != uncheckLayer
        //     });
        //     panelLayerRadarlists.innerHTML = clickedRadarLists.join("");
        //     map.removeLayer(patnaMarker);
        // }
        // //
        // if (panelLayerRadarlists.innerHTML == '') {
        //     panelLayerRadarTitle.innerHTML = '';
        // }

        //GroupPanelLayer-collapsible
        // if (panelLayerRadarlists.innerHTML != '') {
        //     var yyy = document.querySelectorAll('.collapsible')[1].classList.add('expanded');
        //     document.querySelectorAll('.leaflet-panel-layers-icon')[1].innerHTML = '-';
        //     console.log(yyy);
        // }

        // //
        // if (panelLayerLightninglists.innerHTML == '' && panelLayerRadarlists.innerHTML == '') {
        //     panelLayerLightningTitle.innerHTML = '';
        //     Light_RadarRow.style.display = 'none';
        // }
        console.log(uncheckLayer, "xxxxxxxfffffff");
        //Exposure UNCHECK
        if (uncheckLayer == 'Exposure Layers District Boundaries') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X144;
            remove_layer_or_add(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Exposure Layers Airport') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X121;
            remove_layer_or_add(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Exposure Layers Oil Refineries') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = exp_oil;
            remove_layer_or_add(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Exposure Layers Power Station') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = SolapurMarker;
            remove_layer_or_add(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Exposure Layers Power Plant') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = VijayapuraMarker;
            remove_layer_or_add(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //
        if (uncheckLayer == 'Exposure Layers DEM') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X170;
            remove_layer_or_add(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        if (uncheckLayer == 'Exposure Layers Hospital') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X171;
            remove_layer_or_add(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        if (uncheckLayer == 'Exposure Layers Industrail') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X172;
            remove_layer_or_add(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Exposure Layers sports') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X173;
            remove_layer_or_add(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Exposure Layers Road Network') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X174;
            remove_layer_or_add(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Exposure Layers Socio Economic Zone') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X175;
            remove_layer_or_add(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Exposure Layers Railway Network') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X176;
            remove_layer_or_add(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Exposure Layers LULC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X177;
            remove_layer_or_add(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //
        if (panelLayerExposureLists.innerHTML == '') {
            panelLayerExposureTitle.innerHTML = '';
            EXPOSURE.innerHTML = '';
            ExposureRow.style.display = 'flex';
        }
        console.log(layer_name, "layer_name");
        //GroupPanelLayer-collapsible-Exposure
        if (panelLayerExposureLists.innerHTML != '') {
            var yyy = document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
            console.log("yyy----------");
        }
        // **********************************************

        //METAR UNCHECK 00UTC Temp
        if (uncheckLayer == 'METAR 00UTC Temperature_00') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = met00utc_tem;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 00UTC DPT
        if (uncheckLayer == 'METAR 00UTC Dew Point Temperature_00') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X49;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 00UTC Visi
        if (uncheckLayer == 'METAR 00UTC Visibility_00') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X50;
            removeLayerOrAdd_MetarVisi(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 00UTC WSAD
        if (uncheckLayer == 'METAR 00UTC Wind Speed and Direction_00') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = MeerutMarker;
            removeLayerOrAdd_MetarWSD(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //METAR UNCHECK 01UTC Temp
        if (uncheckLayer == 'METAR 01UTC Temperature_01') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X63;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 01UTC DPT
        if (uncheckLayer == 'METAR 01UTC Dew Point Temperature_01') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X64;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 01UTC Visi
        if (uncheckLayer == 'METAR 01UTC Visibility_01') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X65;
            removeLayerOrAdd_MetarVisi(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 01UTC WSAD
        if (uncheckLayer == 'METAR 01UTC Wind Speed and Direction_01') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X66;
            removeLayerOrAdd_MetarWSD(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        // 
        //METAR UNCHECK 02UTC Temp
        if (uncheckLayer == 'METAR 02UTC Temperature_02') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X67;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 02UTC DPT
        if (uncheckLayer == 'METAR 02UTC Dew Point Temperature_02') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X68;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 02UTC Visi
        if (uncheckLayer == 'METAR 02UTC Visibility_02') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X69;
            removeLayerOrAdd_MetarVisi(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 02UTC WSAD
        if (uncheckLayer == 'METAR 02UTC Wind Speed and Direction_02') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X70;
            removeLayerOrAdd_MetarWSD(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        // 
        //METAR UNCHECK 03UTC Temp
        if (uncheckLayer == 'METAR 03UTC Temperature_03') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X71;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 03UTC DPT
        if (uncheckLayer == 'METAR 03UTC Dew Point Temperature_03') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X72;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 03UTC Visi
        if (uncheckLayer == 'METAR 03UTC Visibility_03') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X73;
            removeLayerOrAdd_MetarVisi(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 03UTC WSAD
        if (uncheckLayer == 'METAR 03UTC Wind Speed and Direction_03') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X74;
            removeLayerOrAdd_MetarWSD(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        // 
        //METAR UNCHECK 04UTC Temp
        if (uncheckLayer == 'METAR 04UTC Temperature_04') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X75;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 04UTC DPT
        if (uncheckLayer == 'METAR 04UTC Dew Point Temperature_04') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X76;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 04UTC Visi
        if (uncheckLayer == 'METAR 04UTC Visibility_04') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X77;
            removeLayerOrAdd_MetarVisi(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 04UTC WSAD
        if (uncheckLayer == 'METAR 04UTC Wind Speed and Direction_04') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X78;
            removeLayerOrAdd_MetarWSD(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        // 
        //METAR UNCHECK 05UTC Temp
        if (uncheckLayer == 'METAR 05UTC Temperature_05') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X79;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 05UTC DPT
        if (uncheckLayer == 'METAR 05UTC Dew Point Temperature_05') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X80;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 05UTC Visi
        if (uncheckLayer == 'METAR 05UTC Visibility_05') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X81;
            removeLayerOrAdd_MetarVisi(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 05UTC WSAD
        if (uncheckLayer == 'METAR 05UTC Wind Speed and Direction_05') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X82;
            removeLayerOrAdd_MetarWSD(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        // 
        //METAR UNCHECK 06UTC Temp
        if (uncheckLayer == 'METAR 06UTC Temperature_06') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X83;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 06UTC DPT
        if (uncheckLayer == 'METAR 06UTC Dew Point Temperature_06') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X84;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 06UTC Visi
        if (uncheckLayer == 'METAR 06UTC Visibility_06') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X85;
            removeLayerOrAdd_MetarVisi(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 06UTC WSAD
        if (uncheckLayer == 'METAR 06UTC Wind Speed and Direction_06') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X86;
            removeLayerOrAdd_MetarWSD(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        // 
        //METAR UNCHECK 07UTC Temp
        if (uncheckLayer == 'METAR 07UTC Temperature_07') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X87;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 07UTC DPT
        if (uncheckLayer == 'METAR 07UTC Dew Point Temperature_07') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X88;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 07UTC Visi
        if (uncheckLayer == 'METAR 07UTC Visibility_07') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X89;
            removeLayerOrAdd_MetarVisi(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 07UTC WSAD
        if (uncheckLayer == 'METAR 07UTC Wind Speed and Direction_07') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X90;
            removeLayerOrAdd_MetarWSD(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        // 
        //METAR UNCHECK 08UTC Temp
        if (uncheckLayer == 'METAR 08UTC Temperature_08') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X91;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 08UTC DPT
        if (uncheckLayer == 'METAR 08UTC Dew Point Temperature_08') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X92;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 08UTC Visi
        if (uncheckLayer == 'METAR 08UTC Visibility_08') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X93;
            removeLayerOrAdd_MetarVisi(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 08UTC WSAD
        if (uncheckLayer == 'METAR 08UTC Wind Speed and Direction_08') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X94;
            removeLayerOrAdd_MetarWSD(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        // 
        //METAR UNCHECK 09UTC Temp
        if (uncheckLayer == 'METAR 09UTC Temperature_09') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X95;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 09UTC DPT
        if (uncheckLayer == 'METAR 09UTC Dew Point Temperature_09') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X96;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 09UTC Visi
        if (uncheckLayer == 'METAR 09UTC Visibility_09') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X97;
            removeLayerOrAdd_MetarVisi(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 09UTC WSAD
        if (uncheckLayer == 'METAR 09UTC Wind Speed and Direction_09') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X98;
            removeLayerOrAdd_MetarWSD(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        // 
        //METAR UNCHECK 10UTC Temp
        if (uncheckLayer == 'METAR 10UTC Temperature_10') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X99;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 10UTC DPT
        if (uncheckLayer == 'METAR 10UTC Dew Point Temperature_10') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X100;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 10UTC Visi
        if (uncheckLayer == 'METAR 10UTC Visibility_10') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X101;
            removeLayerOrAdd_MetarVisi(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 10UTC WSAD
        if (uncheckLayer == 'METAR 10UTC Wind Speed and Direction_10') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X102;
            removeLayerOrAdd_MetarWSD(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        // 
        //METAR UNCHECK 11UTC Temp
        if (uncheckLayer == 'METAR 11UTC Temperature_11') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X103;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 11UTC DPT
        if (uncheckLayer == 'METAR 11UTC Dew Point Temperature_11') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X104;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 11UTC Visi
        if (uncheckLayer == 'METAR 11UTC Visibility_11') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X105;
            removeLayerOrAdd_MetarVisi(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 11UTC WSAD
        if (uncheckLayer == 'METAR 11UTC Wind Speed and Direction_11') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X106;
            removeLayerOrAdd_MetarWSD(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        // 
        //METAR UNCHECK 12UTC Temp
        if (uncheckLayer == 'METAR 12UTC Temperature_12') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X107;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 12UTC DPT
        if (uncheckLayer == 'METAR 12UTC Dew Point Temperature_12') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X108;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 12UTC Visi
        if (uncheckLayer == 'METAR 12UTC Visibility_12') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X109;
            removeLayerOrAdd_MetarVisi(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 12UTC WSAD
        if (uncheckLayer == 'METAR 12UTC Wind Speed and Direction_12') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X110;
            removeLayerOrAdd_MetarWSD(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        // 
        //METAR UNCHECK 13UTC Temp
        if (uncheckLayer == 'METAR 13UTC Temperature_13') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X111;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 13UTC DPT
        if (uncheckLayer == 'METAR 13UTC Dew Point Temperature_13') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X112;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 13UTC Visi
        if (uncheckLayer == 'METAR 13UTC Visibility_13') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X113;
            removeLayerOrAdd_MetarVisi(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 13UTC WSAD
        if (uncheckLayer == 'METAR 13UTC Wind Speed and Direction_13') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X114;
            removeLayerOrAdd_MetarWSD(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        // 
        //METAR UNCHECK 14UTC Temp
        if (uncheckLayer == 'METAR 14UTC Temperature_14') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X115;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 14UTC DPT
        if (uncheckLayer == 'METAR 14UTC Dew Point Temperature_14') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X116;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 14UTC Visi
        if (uncheckLayer == 'METAR 14UTC Visibility_14') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X117;
            removeLayerOrAdd_MetarVisi(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 14UTC WSAD
        if (uncheckLayer == 'METAR 14UTC Wind Speed and Direction_14') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X118;
            removeLayerOrAdd_MetarWSD(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        // 
        //METAR UNCHECK 15UTC Temp
        if (uncheckLayer == 'METAR 15UTC Temperature_15') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X119;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 15UTC DPT
        if (uncheckLayer == 'METAR 15UTC Dew Point Temperature_15') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X120;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 15UTC Visi
        if (uncheckLayer == 'METAR 15UTC Visibility_15') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X121;
            removeLayerOrAdd_MetarVisi(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 15UTC WSAD
        if (uncheckLayer == 'METAR 15UTC Wind Speed and Direction_15') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X122;
            removeLayerOrAdd_MetarWSD(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        // 
        //METAR UNCHECK 16UTC Temp
        if (uncheckLayer == 'METAR 16UTC Temperature_16') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X123;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 16UTC DPT
        if (uncheckLayer == 'METAR 16UTC Dew Point Temperature_16') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X124;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 16UTC Visi
        if (uncheckLayer == 'METAR 16UTC Visibility_16') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X125;
            removeLayerOrAdd_MetarVisi(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 16UTC WSAD
        if (uncheckLayer == 'METAR 16UTC Wind Speed and Direction_16') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X126;
            removeLayerOrAdd_MetarWSD(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        // 
        //METAR UNCHECK 17UTC Temp
        if (uncheckLayer == 'METAR 17UTC Temperature_17') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X127;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 17UTC DPT
        if (uncheckLayer == 'METAR 17UTC Dew Point Temperature_17') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X128;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 17UTC Visi
        if (uncheckLayer == 'METAR 17UTC Visibility_17') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X129;
            removeLayerOrAdd_MetarVisi(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 17UTC WSAD
        if (uncheckLayer == 'METAR 17UTC Wind Speed and Direction_17') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X130;
            removeLayerOrAdd_MetarWSD(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        // 
        //METAR UNCHECK 18UTC Temp
        if (uncheckLayer == 'METAR 18UTC Temperature_18') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X131;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 18UTC DPT
        if (uncheckLayer == 'METAR 18UTC Dew Point Temperature_18') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X132;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 18UTC Visi
        if (uncheckLayer == 'METAR 18UTC Visibility_18') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X133;
            removeLayerOrAdd_MetarVisi(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 18UTC WSAD
        if (uncheckLayer == 'METAR 18UTC Wind Speed and Direction_18') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X134;
            removeLayerOrAdd_MetarWSD(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        // 
        //METAR UNCHECK 19UTC Temp
        if (uncheckLayer == 'METAR 19UTC Temperature_19') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X135;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 19UTC DPT
        if (uncheckLayer == 'METAR 19UTC Dew Point Temperature_19') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X136;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 19UTC Visi
        if (uncheckLayer == 'METAR 19UTC Visibility_19') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X137;
            removeLayerOrAdd_MetarVisi(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 19UTC WSAD
        if (uncheckLayer == 'METAR 19UTC Wind Speed and Direction_19') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X138;
            removeLayerOrAdd_MetarWSD(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        // 
        //METAR UNCHECK 20UTC Temp
        if (uncheckLayer == 'METAR 20UTC Temperature_20') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X139;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 20UTC DPT
        if (uncheckLayer == 'METAR 20UTC Dew Point Temperature_20') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X140;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 20UTC Visi
        if (uncheckLayer == 'METAR 20UTC Visibility_20') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X141;
            removeLayerOrAdd_MetarVisi(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 20UTC WSAD
        if (uncheckLayer == 'METAR 20UTC Wind Speed and Direction_20') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X142;
            removeLayerOrAdd_MetarWSD(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        // 
        //METAR UNCHECK 21UTC Temp
        if (uncheckLayer == 'METAR 21UTC Temperature_21') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X143;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 21UTC DPT
        if (uncheckLayer == 'METAR 21UTC Dew Point Temperature_21') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X144;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 21UTC Visi
        if (uncheckLayer == 'METAR 21UTC Visibility_21') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X145;
            removeLayerOrAdd_MetarVisi(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 21UTC WSAD
        if (uncheckLayer == 'METAR 21UTC Wind Speed and Direction_21') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X146;
            removeLayerOrAdd_MetarWSD(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        // 
        //METAR UNCHECK 22UTC Temp
        if (uncheckLayer == 'METAR 22UTC Temperature_22') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X147;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 22UTC DPT
        if (uncheckLayer == 'METAR 22UTC Dew Point Temperature_22') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X148;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 22UTC Visi
        if (uncheckLayer == 'METAR 22UTC Visibility_22') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X149;
            removeLayerOrAdd_MetarVisi(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 22UTC WSAD
        if (uncheckLayer == 'METAR 22UTC Wind Speed and Direction_22') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X150;
            removeLayerOrAdd_MetarWSD(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        // 
        //METAR UNCHECK 23UTC Temp
        if (uncheckLayer == 'METAR 23UTC Temperature_23') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X151;
            remove_layer_or_add_MetTemp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 23UTC DPT
        if (uncheckLayer == 'METAR 23UTC Dew Point Temperature_23') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X152;
            removeLayerOrAdd_MetarDWP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 23UTC Visi
        if (uncheckLayer == 'METAR 23UTC Visibility_23') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X153;
            removeLayerOrAdd_MetarVisi(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        //METAR UNCHECK 23UTC WSAD
        if (uncheckLayer == 'METAR 23UTC Wind Speed and Direction_23') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X154;
            removeLayerOrAdd_MetarWSD(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        // MetarTemp
        if (panelLayermetarTemp_lists.innerHTML == '') {
            panelLayermetarTemp_Title.innerHTML = '';
            // METAR.innerHTML = '';
            metarTempLegendImage.innerHTML = '';
        }

        // MetarDPT
        if (panelLayermetarDewPoint_lists.innerHTML == '') {
            panelLayermetarDewPoint_Title.innerHTML = '';
            // METAR.innerHTML = '';
            metarDewPointLegendImage.innerHTML = "";
        }

        // MetarVisi
        if (panelLayermetarVisibility_lists.innerHTML == '') {
            panelLayermetarVisibility_Title.innerHTML = '';
            // METAR.innerHTML = '';
            metarVisibilityLegendImage.innerHTML = '';
        }

        // MetarWSAD
        if (panelLayermetarWindSpeedAndDirection_lists.innerHTML == '') {
            panelLayermetarWindSpeedAndDirection_Title.innerHTML = '';
            // METAR.innerHTML = '';
            metarWindSpeedAndDirectionLegendImage.innerHTML = '';
        }

        // METAR.innerHTML
        if (
            panelLayermetarTemp_lists.innerText.trim() === '' &&
            panelLayermetarDewPoint_lists.innerText.trim() === '' &&
            panelLayermetarVisibility_lists.innerText.trim() === '' &&
            panelLayermetarWindSpeedAndDirection_lists.innerText.trim() === ''
        ) {
            METAR.innerHTML = '';
        }

        if (panelLayermetarTemp_lists.innerHTML != '') {
            // alert("hhhhhh");
            var yyyy = document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
            console.log(yyyy);
        }


        // SYNOP
        //UNCHECK SYNOP 00UTC Temp
        if (uncheckLayer == 'SYNOP 00UTC Temperature_00') {
            console.log(uncheckLayer, "UNCHECK SYNOP 00UTC Temp");
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = syn00utc_tem;
            remOrAdSynopTempLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 00UTC MSLP
        if (uncheckLayer == 'SYNOP 00UTC Mean Sea Level Pressure_00') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = HHHHHH;
            remOrAdSynopMeanSeaLevel(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 00UTC CC
        if (uncheckLayer == 'SYNOP 00UTC Cloud Cover_00') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X1;
            remOrAdCloudCoverLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 00UTC GH
        if (uncheckLayer == 'SYNOP 00UTC Geopotential Height_00') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X2;
            remOrAdGeopotentialHeightLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 00UTC RH
        if (uncheckLayer == 'SYNOP 00UTC Relative Humidity_00') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X3;
            remOrAdRelativeHumidityLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 00UTC V
        if (uncheckLayer == 'SYNOP 00UTC Visibility_00') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X4;
            remOrAdVisibilityLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 00UTC V
        if (uncheckLayer == 'SYNOP 00UTC Wind Speed and Direction_00') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X5;
            remOrAdWindSpeedAndDirectionLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 00UTC 3h
        if (uncheckLayer == 'SYNOP 00UTC 3h Rainfall_00') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X6;
            remOrAd3hRainfallLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 03UTC Temp
        if (uncheckLayer == 'SYNOP 03UTC Temperature_03') {
            console.log(uncheckLayer, "UNCHECK SYNOP 03UTC Temp");
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X7;
            remOrAdSynopTempLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 03UTC MSLP
        if (uncheckLayer == 'SYNOP 03UTC Mean Sea Level Pressure_03') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X8;
            remOrAdSynopMeanSeaLevel(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 03UTC CC
        if (uncheckLayer == 'SYNOP 03UTC Cloud Cover_03') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X9;
            remOrAdCloudCoverLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 03UTC GH
        if (uncheckLayer == 'SYNOP 03UTC Geopotential Height_03') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X10;
            remOrAdGeopotentialHeightLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 03UTC RH
        if (uncheckLayer == 'SYNOP 03UTC Relative Humidity_03') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X11;
            remOrAdRelativeHumidityLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 03UTC V
        if (uncheckLayer == 'SYNOP 03UTC Visibility_03') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X12;
            remOrAdVisibilityLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 03UTC V
        if (uncheckLayer == 'SYNOP 03UTC Wind Speed and Direction_03') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X13;
            remOrAdWindSpeedAndDirectionLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 03UTC 3h
        if (uncheckLayer == 'SYNOP 03UTC 3h Rainfall_03') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X14;
            remOrAd3hRainfallLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 06UTC Temp
        if (uncheckLayer == 'SYNOP 06UTC Temperature_06') {
            console.log(uncheckLayer, "UNCHECK SYNOP 06UTC Temp");
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X15;
            remOrAdSynopTempLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 06UTC MSLP
        if (uncheckLayer == 'SYNOP 06UTC Mean Sea Level Pressure_06') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X16;
            remOrAdSynopMeanSeaLevel(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 06UTC CC
        if (uncheckLayer == 'SYNOP 06UTC Cloud Cover_06') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X17;
            remOrAdCloudCoverLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 06UTC GH
        if (uncheckLayer == 'SYNOP 06UTC Geopotential Height_06') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X18;
            remOrAdGeopotentialHeightLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 06UTC RH
        if (uncheckLayer == 'SYNOP 06UTC Relative Humidity_06') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X19;
            remOrAdRelativeHumidityLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 06UTC V
        if (uncheckLayer == 'SYNOP 06UTC Visibility_06') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X20;
            remOrAdVisibilityLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 06UTC V
        if (uncheckLayer == 'SYNOP 06UTC Wind Speed and Direction_06') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X21;
            remOrAdWindSpeedAndDirectionLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 06UTC 3h
        if (uncheckLayer == 'SYNOP 06UTC 3h Rainfall_06') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X22;
            remOrAd3hRainfallLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 09UTC Temp
        if (uncheckLayer == 'SYNOP 09UTC Temperature_09') {
            console.log(uncheckLayer, "UNCHECK SYNOP 09UTC Temp");
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X23;
            remOrAdSynopTempLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 09UTC MSLP
        if (uncheckLayer == 'SYNOP 09UTC Mean Sea Level Pressure_09') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X24;
            remOrAdSynopMeanSeaLevel(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 09UTC CC
        if (uncheckLayer == 'SYNOP 09UTC Cloud Cover_09') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X25;
            remOrAdCloudCoverLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 09UTC GH
        if (uncheckLayer == 'SYNOP 09UTC Geopotential Height_09') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X26;
            remOrAdGeopotentialHeightLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 09UTC RH
        if (uncheckLayer == 'SYNOP 09UTC Relative Humidity_09') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X27;
            remOrAdRelativeHumidityLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 09UTC V
        if (uncheckLayer == 'SYNOP 09UTC Visibility_09') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X28;
            remOrAdVisibilityLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 09UTC V
        if (uncheckLayer == 'SYNOP 09UTC Wind Speed and Direction_09') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X29;
            remOrAdWindSpeedAndDirectionLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 09UTC 3h
        if (uncheckLayer == 'SYNOP 09UTC 3h Rainfall_09') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X30;
            remOrAd3hRainfallLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 12UTC Temp
        if (uncheckLayer == 'SYNOP 12UTC Temperature_12') {
            console.log(uncheckLayer, "UNCHECK SYNOP 12UTC Temp");
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X31;
            remOrAdSynopTempLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 12UTC MSLP
        if (uncheckLayer == 'SYNOP 12UTC Mean Sea Level Pressure_12') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X32;
            remOrAdSynopMeanSeaLevel(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 12UTC CC
        if (uncheckLayer == 'SYNOP 12UTC Cloud Cover_12') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X33;
            remOrAdCloudCoverLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 12UTC GH
        if (uncheckLayer == 'SYNOP 12UTC Geopotential Height_12') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X34;
            remOrAdGeopotentialHeightLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 12UTC RH
        if (uncheckLayer == 'SYNOP 12UTC Relative Humidity_12') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X35;
            remOrAdRelativeHumidityLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 12UTC V
        if (uncheckLayer == 'SYNOP 12UTC Visibility_12') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X36;
            remOrAdVisibilityLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 12UTC V
        if (uncheckLayer == 'SYNOP 12UTC Wind Speed and Direction_12') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X37;
            remOrAdWindSpeedAndDirectionLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 12UTC 3h
        if (uncheckLayer == 'SYNOP 12UTC 3h Rainfall_12') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X38;
            remOrAd3hRainfallLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 15UTC Temp
        if (uncheckLayer == 'SYNOP 15UTC Temperature_15') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X39;
            remOrAdSynopTempLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 15UTC MSLP
        if (uncheckLayer == 'SYNOP 15UTC Mean Sea Level Pressure_15') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X40;
            remOrAdSynopMeanSeaLevel(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 15UTC CC
        if (uncheckLayer == 'SYNOP 15UTC Cloud Cover_15') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X41;
            remOrAdCloudCoverLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 15UTC GH
        if (uncheckLayer == 'SYNOP 15UTC Geopotential Height_15') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X42;
            remOrAdGeopotentialHeightLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 15UTC RH
        if (uncheckLayer == 'SYNOP 15UTC Relative Humidity_15') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X43;
            remOrAdRelativeHumidityLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 15UTC V
        if (uncheckLayer == 'SYNOP 15UTC Visibility_15') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X44;
            remOrAdVisibilityLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 15UTC V
        if (uncheckLayer == 'SYNOP 15UTC Wind Speed and Direction_15') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = Airport;
            remOrAdWindSpeedAndDirectionLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 15UTC 3h
        if (uncheckLayer == 'SYNOP 15UTC 3h Rainfall_15') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X46;
            remOrAd3hRainfallLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 18UTC Temp
        if (uncheckLayer == 'SYNOP 18UTC Temperature_18') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X47;
            remOrAdSynopTempLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 18UTC MSLP
        if (uncheckLayer == 'SYNOP 18UTC Mean Sea Level Pressure_18') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X48;
            remOrAdSynopMeanSeaLevel(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 18UTC CC
        if (uncheckLayer == 'SYNOP 18UTC Cloud Cover_18') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X49;
            remOrAdCloudCoverLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 18UTC GH
        if (uncheckLayer == 'SYNOP 18UTC Geopotential Height_18') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X50;
            remOrAdGeopotentialHeightLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 18UTC RH
        if (uncheckLayer == 'SYNOP 18UTC Relative Humidity_18') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X51;
            remOrAdRelativeHumidityLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 18UTC V
        if (uncheckLayer == 'SYNOP 18UTC Visibility_18') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X52;
            remOrAdVisibilityLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 18UTC V
        if (uncheckLayer == 'SYNOP 18UTC Wind Speed and Direction_18') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X53;
            remOrAdWindSpeedAndDirectionLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 18UTC 3h
        if (uncheckLayer == 'SYNOP 18UTC 3h Rainfall_18') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X54;
            remOrAd3hRainfallLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 21UTC Temp
        if (uncheckLayer == 'SYNOP 21UTC Temperature_21') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X55;
            remOrAdSynopTempLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 21UTC MSLP
        if (uncheckLayer == 'SYNOP 21UTC Mean Sea Level Pressure_21') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X56;
            remOrAdSynopMeanSeaLevel(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 21UTC CC
        if (uncheckLayer == 'SYNOP 21UTC Cloud Cover_21') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X57;
            remOrAdCloudCoverLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 21UTC GH
        if (uncheckLayer == 'SYNOP 21UTC Geopotential Height_21') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X58;
            remOrAdGeopotentialHeightLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 21UTC RH
        if (uncheckLayer == 'SYNOP 21UTC Relative Humidity_21') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X59;
            remOrAdRelativeHumidityLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 21UTC V
        if (uncheckLayer == 'SYNOP 21UTC Visibility_21') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X60;
            remOrAdVisibilityLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 21UTC V
        if (uncheckLayer == 'SYNOP 21UTC Wind Speed and Direction_21') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X61;
            remOrAdWindSpeedAndDirectionLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        //UNCHECK SYNOP 21UTC 3h
        if (uncheckLayer == 'SYNOP 21UTC 3h Rainfall_21') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X62;
            remOrAd3hRainfallLists(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        if (panelLayersynopTemp_lists.innerHTML == '') {
            panelLayersynopTemp_Title.innerHTML = '';
            SYNOP.innerHTML = '';
            synopTempLegendImage.innerHTML = '';
        }

        if (panelLayersynopMeanSeaLevel_lists.innerHTML == '') {
            panelLayersynopMeanSeaLevel_Title.innerHTML = '';
            SYNOP.innerHTML = '';
            synopMeanSeaLevelImage.innerHTML = '';
        }

        if (panelLayersynopCloudCover_lists.innerHTML == '') {
            panelLayersynopCloudCover_Title.innerHTML = '';
            SYNOP.innerHTML = '';
            synopCloudCoverImage.innerHTML = '';
        }

        if (panelLayersynopGeopotentialHeight_lists.innerHTML == '') {
            panelLayersynopGeopotentialHeight_Title.innerHTML = '';
            SYNOP.innerHTML = '';
            synopGeopotentialHeightImage.innerHTML = '';
        }

        if (panelLayersynopRelativeHumidity_lists.innerHTML == '') {
            panelLayersynopRelativeHumidity_Title.innerHTML = '';
            SYNOP.innerHTML = '';
            synopRelativeHumidityImage.innerHTML = '';
        }

        if (panelLayersynopVisibility_lists.innerHTML == '') {
            panelLayersynopVisibility_Title.innerHTML = '';
            SYNOP.innerHTML = '';
            synopVisibilityImage.innerHTML = '';
        }

        if (panelLayersynopWindSpeedAndDirection_lists.innerHTML == '') {
            panelLayersynopWindSpeedAndDirection_Title.innerHTML = '';
            SYNOP.innerHTML = '';
            synopWindSpeedAndDirectionImage.innerHTML = '';
        }

        if (panelLayersynop3hRainfall_lists.innerHTML == '') {
            panelLayersynop3hRainfall_Title.innerHTML = '';
            SYNOP.innerHTML = '';
            synop3hRainfallImage.innerHTML = '';
        }

        // SYNOP.innerHTML
        if (
            panelLayersynopTemp_lists.innerText === '' &&
            panelLayersynopMeanSeaLevel_lists.innerText === '' &&
            panelLayersynopCloudCover_lists.innerText === '' &&
            panelLayersynopGeopotentialHeight_lists.innerText === '' &&
            panelLayersynopRelativeHumidity_lists.innerText === '' &&
            panelLayersynopVisibility_lists.innerText === '' &&
            panelLayersynopWindSpeedAndDirection_lists.innerText === '' &&
            panelLayersynop3hRainfall_lists.innerText === ''
        ) {
            SYNOP.innerHTML = '';
        }


        // SOUNDING UNCHECK
        //UNCHECK Sounding_00UTC
        if (uncheckLayer == 'Sounding_00UTC Wind 1000 hPa Wind') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X178;
            remOrAdd_Sounding_00UTC_W(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_00UTC Wind 850 hPa Wind') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X179;
            remOrAdd_Sounding_00UTC_W(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_00UTC Wind 700 hPa Wind') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X180;
            remOrAdd_Sounding_00UTC_W(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_00UTC Wind 500 hPa Wind') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X181;
            remOrAdd_Sounding_00UTC_W(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_00UTC Wind 300 hPa Wind') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X182;
            remOrAdd_Sounding_00UTC_W(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_00UTC Wind 200 hPa Wind') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X183;
            remOrAdd_Sounding_00UTC_W(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_00UTC Wind 100 hPa Wind') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X184;
            remOrAdd_Sounding_00UTC_W(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_00UTC Wind 50 hPa Wind') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X185;
            remOrAdd_Sounding_00UTC_W(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }


        if (panelLayerSOUNDING00UTCWIND_lists.innerHTML == '') {
            panelLayerSOUNDING00UTCWIND_Title.innerHTML = '';
            SOUNDING.innerHTML = '';
            soundingImage.innerHTML = '';
        }

        //UNCHECK Sounding_12UTC W
        if (uncheckLayer == 'Sounding_12UTC Wind 1000 hPa Wind') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X186;
            remOrAdd_Sounding_12UTC_W(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_12UTC Wind 850 hPa Wind') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X187;
            remOrAdd_Sounding_12UTC_W(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_12UTC Wind 700 hPa Wind') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X188;
            remOrAdd_Sounding_12UTC_W(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_12UTC Wind 500 hPa Wind') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X189;
            remOrAdd_Sounding_12UTC_W(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_12UTC Wind 300 hPa Wind') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X190;
            remOrAdd_Sounding_12UTC_W(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_12UTC Wind 200 hPa Wind') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X191;
            remOrAdd_Sounding_12UTC_W(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_12UTC Wind 100 hPa Wind') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X192;
            remOrAdd_Sounding_12UTC_W(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_12UTC Wind 50 hPa Wind') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X193;
            remOrAdd_Sounding_12UTC_W(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        if (panelLayerSOUNDING12UTCWIND_lists.innerHTML == '') {
            panelLayerSOUNDING12UTCWIND_Title.innerHTML = '';
            SOUNDING.innerHTML = '';
            soundingImage.innerHTML = '';
        }

        //UNCHECK Sounding_00UTC Temp
        if (uncheckLayer == 'Sounding_00UTC Temp 1000 hPa Temp') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X194;
            remOrAdd_Sounding_00UTC_Temp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_00UTC Temp 850 hPa Temp') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X195;
            remOrAdd_Sounding_00UTC_Temp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_00UTC Temp 700 hPa Temp') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X196;
            remOrAdd_Sounding_00UTC_Temp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_00UTC Temp 500 hPa Temp') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X197;
            remOrAdd_Sounding_00UTC_Temp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_00UTC Temp 300 hPa Temp') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X198;
            remOrAdd_Sounding_00UTC_Temp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_00UTC Temp 200 hPa Temp') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X199;
            remOrAdd_Sounding_00UTC_Temp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_00UTC Temp 100 hPa Temp') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X200;
            remOrAdd_Sounding_00UTC_Temp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_00UTC Temp 50 hPa Temp') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X201;
            remOrAdd_Sounding_00UTC_Temp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        if (panelLayerSOUNDING00UTCTEMP_lists.innerHTML == '') {
            panelLayerSOUNDING00UTCTEMP_Title.innerHTML = '';
            SOUNDING.innerHTML = '';
            soundingImage.innerHTML = '';
        }

        //UNCHECK Sounding_12UTC Temp
        if (uncheckLayer == 'Sounding_12UTC Temp 1000 hPa Temp') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X202;
            remOrAdd_Sounding_12UTC_Temp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_12UTC Temp 850 hPa Temp') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X203;
            remOrAdd_Sounding_12UTC_Temp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_12UTC Temp 700 hPa Temp') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X204;
            remOrAdd_Sounding_12UTC_Temp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_12UTC Temp 500 hPa Temp') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X205;
            remOrAdd_Sounding_12UTC_Temp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_12UTC Temp 300 hPa Temp') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X206;
            remOrAdd_Sounding_12UTC_Temp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_12UTC Temp 200 hPa Temp') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X207;
            remOrAdd_Sounding_12UTC_Temp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_12UTC Temp 100 hPa Temp') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X208;
            remOrAdd_Sounding_12UTC_Temp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_12UTC Temp 50 hPa Temp') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X209;
            remOrAdd_Sounding_12UTC_Temp(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        if (panelLayerSOUNDING12UTCTEMP_lists.innerHTML == '') {
            panelLayerSOUNDING12UTCTEMP_Title.innerHTML = '';
            SOUNDING.innerHTML = '';
            soundingImage.innerHTML = '';
        }

        //UNCHECK Sounding_00UTC Dew Point
        if (uncheckLayer == 'Sounding_00UTC Dew Point 1000 hPa Dew Point') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X208;
            remOrAdd_Sounding_00UTC_DP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_00UTC Dew Point 850 hPa Dew Point') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X209;
            remOrAdd_Sounding_00UTC_DP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_00UTC Dew Point 700 hPa Dew Point') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X210;
            remOrAdd_Sounding_00UTC_DP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_00UTC Dew Point 500 hPa Dew Point') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X211;
            remOrAdd_Sounding_00UTC_DP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_00UTC Dew Point 300 hPa Dew Point') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X212;
            remOrAdd_Sounding_00UTC_DP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_00UTC Dew Point 200 hPa Dew Point') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X213;
            remOrAdd_Sounding_00UTC_DP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_00UTC Dew Point 100 hPa Dew Point') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X214;
            remOrAdd_Sounding_00UTC_DP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_00UTC Dew Point 50 hPa Dew Point') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X215;
            remOrAdd_Sounding_00UTC_DP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        if (panelLayerSOUNDING00UTCDEWPOINT_lists.innerHTML == '') {
            panelLayerSOUNDING00UTCDEWPOINT_Title.innerHTML = '';
            SOUNDING.innerHTML = '';
            soundingImage.innerHTML = '';
        }

        //UNCHECK Sounding_12UTC Dew Point
        if (uncheckLayer == 'Sounding_12UTC Dew Point 1000 hPa Dew Point') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X216;
            remOrAdd_Sounding_12UTC_DP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_12UTC Dew Point 850 hPa Dew Point') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X217;
            remOrAdd_Sounding_12UTC_DP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_12UTC Dew Point 700 hPa Dew Point') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X218;
            remOrAdd_Sounding_12UTC_DP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_12UTC Dew Point 500 hPa Dew Point') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X219;
            remOrAdd_Sounding_12UTC_DP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_12UTC Dew Point 300 hPa Dew Point') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X220;
            remOrAdd_Sounding_12UTC_DP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_12UTC Dew Point 200 hPa Dew Point') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X221;
            remOrAdd_Sounding_12UTC_DP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_12UTC Dew Point 100 hPa Dew Point') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X222;
            remOrAdd_Sounding_12UTC_DP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }
        if (uncheckLayer == 'Sounding_12UTC Dew Point 50 hPa Dew Point') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X223;
            remOrAdd_Sounding_12UTC_DP(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        if (panelLayerSOUNDING12UTCDEWPOINT_lists.innerHTML == '') {
            panelLayerSOUNDING12UTCDEWPOINT_Title.innerHTML = '';
            SOUNDING.innerHTML = '';
            soundingImage.innerHTML = '';
        }

        // UNCHECK Ship and Buoy Observation
        if (uncheckLayer == 'Ship and Buoy Observation 00UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = ship_00utc;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_or_add, uncheckLayer);
        }

        if (uncheckLayer == 'Ship and Buoy Observation 01UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X225;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (uncheckLayer == 'Ship and Buoy Observation 02UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X226;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (uncheckLayer == 'Ship and Buoy Observation 03UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X227;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (uncheckLayer == 'Ship and Buoy Observation 04UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X228;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (uncheckLayer == 'Ship and Buoy Observation 05UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X229;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (uncheckLayer == 'Ship and Buoy Observation 06UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X230;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (uncheckLayer == 'Ship and Buoy Observation 07UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X231;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (uncheckLayer == 'Ship and Buoy Observation 08UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X232;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (uncheckLayer == 'Ship and Buoy Observation 09UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X233;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (uncheckLayer == 'Ship and Buoy Observation 10UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X234;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (uncheckLayer == 'Ship and Buoy Observation 11UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X235;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (uncheckLayer == 'Ship and Buoy Observation 12UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X236;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (uncheckLayer == 'Ship and Buoy Observation 13UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X237;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (uncheckLayer == 'Ship and Buoy Observation 14UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X199;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (uncheckLayer == 'Ship and Buoy Observation 15UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X238;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (uncheckLayer == 'Ship and Buoy Observation 16UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X239;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (uncheckLayer == 'Ship and Buoy Observation 17UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X240;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (uncheckLayer == 'Ship and Buoy Observation 18UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X241;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (uncheckLayer == 'Ship and Buoy Observation 19UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X242;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (uncheckLayer == 'Ship and Buoy Observation 20UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X243;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (uncheckLayer == 'Ship and Buoy Observation 21UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X244;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (uncheckLayer == 'Ship and Buoy Observation 22UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X245;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (uncheckLayer == 'Ship and Buoy Observation 23UTC') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X246;
            remove_layer_or_add_SaBO(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (panelLayerSHIPANDBUOY_lists.innerHTML == '') {
            panelLayerSHIPANDBUOY_Title.innerHTML = '';
            SHIPANDBUOY.innerHTML = '';
            SHIPANDBUOYImage.innerHTML = '';
        }

        // 
        // Radar
        if (uncheckLayer == 'Radar Products Radar Reflectivity') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = rad_ref;
            remove_layer_or_add_Radar(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (uncheckLayer == 'Radar Products Radar Animation') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X249;
            remove_layer_or_add_Radar(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (panelLayerRADARPRODUCTS_lists.innerHTML == '') {
            panelLayerRADARPRODUCTS_Title.innerHTML = '';
            RADARPRODUCTS.innerHTML = '';
            RADARImage.innerHTML = '';
        }

        // 
        // Satellite
        if (uncheckLayer == 'Satellite Observation TIR1') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X157;
            remove_layer_or_add_Sat(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (uncheckLayer == 'Satellite Observation VIS') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X158;
            remove_layer_or_add_Sat(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (uncheckLayer == 'Satellite Observation CTBT') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X159;
            remove_layer_or_add_Sat(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (uncheckLayer == 'Satellite Observation Low Level Convergence') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X160;
            remove_layer_or_add_Sat(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (uncheckLayer == 'Satellite Observation Upper Level Divergence') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X161;
            remove_layer_or_add_Sat(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (uncheckLayer == 'Satellite Observation Mid Level Shear') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X162;
            remove_layer_or_add_Sat(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (uncheckLayer == 'Satellite Observation Vorticity at 200hPa') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X163;
            remove_layer_or_add_Sat(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (uncheckLayer == 'Satellite Observation Vorticity at 500hPa') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X164;
            remove_layer_or_add_Sat(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (uncheckLayer == 'Satellite Observation Vorticity at 700hPa') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X165;
            remove_layer_or_add_Sat(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (uncheckLayer == 'Satellite Observation Vorticity at 850hPa') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X166;
            remove_layer_or_add_Sat(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (panelLayerSATELLITE_lists.innerHTML == '') {
            panelLayerSATELLITE_Title.innerHTML = '';
            SATELLITE.innerHTML = '';
        }

        // 
        // Lightning
        if (uncheckLayer == 'Lightning Last 00-05 min') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X3;
            remove_layer_or_add_Light(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'Lightning Last 05-10 min') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = mywmsNcum;
            remove_layer_or_add_Light(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'Lightning Last 10-15 min') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = mywmsNowcast;
            remove_layer_or_add_Light(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'Lightning ILDN Last 05 min') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X1;
            remove_layer_or_add_Light(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'Lightning Nowcast Alerts') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X2;
            remove_layer_or_add_Light(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (panelLayerLIGHTINING_lists.innerHTML == '') {
            panelLayerLIGHTINING_Title.innerHTML = '';
            LIGHTINING.innerHTML = '';
            LIGHTININGImage.innerHTML = '';
        }


        // 
        // mesolscale
        // WRF Reflectivity
        if (uncheckLayer == 'WRF Reflectivity WRF R Next 03 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X250;
            remLayOrAdclickedWRFRef(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'WRF Reflectivity WRF R Next 03-06 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X251;
            remLayOrAdclickedWRFRef(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (panelLayerWRFReflectivity_lists.innerHTML == '') {
            panelLayerWRFReflectivity_Title.innerHTML = '';
            MESOLSCALE.innerHTML = '';
            WRFReflectivityImage.innerHTML = '';
        }

        // WRF Reflectivity
        if (uncheckLayer == 'WRF Lightning Product WRF LP Next 03 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X252;
            remLayOrAdclickedWRF_lig_pro(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'WRF Lightning Product WRF LP Next 03-06 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X253;
            remLayOrAdclickedWRF_lig_pro(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (panelLayerWRFlightningProduct_lists.innerHTML == '') {
            panelLayerWRFlightningProduct_Title.innerHTML = '';
            MESOLSCALE.innerHTML = '';
            WRFlightningProductImage.innerHTML = '';
        }

        // WRF Accumlated Rainfall
        if (uncheckLayer == 'WRF Accumlated Rainfall WRF AR Next 03 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X254;
            remLayOrAdclickedWRF_acc_rain(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'WRF Accumlated Rainfall WRF AR Next 03-06 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X255;
            remLayOrAdclickedWRF_acc_rain(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (panelLayerWRFAccumlatedRainfall_lists.innerHTML == '') {
            panelLayerWRFAccumlatedRainfall_Title.innerHTML = '';
            MESOLSCALE.innerHTML = '';
            WRFAccumlatedRainfallImage.innerHTML = '';
        }

        //Lightning Potential Index
        if (uncheckLayer == 'Lightning Potential Index LP Next 01 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X256;
            remLayOrAdclickedLig_pot(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'Lightning Potential Index LP Next 01-02 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X257;
            remLayOrAdclickedLig_pot(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'Lightning Potential Index LP Next 02-03 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X258;
            remLayOrAdclickedLig_pot(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (panelLayerlightningPotentialindex_lists.innerHTML == '') {
            panelLayerlightningPotentialindex_Title.innerHTML = '';
            MESOLSCALE.innerHTML = '';
            MESOLSCALE.innerHTML = '';
            lightningPotentialindexImage.innerHTML = '';
        }


        //NCUMR Lightning Product
        if (uncheckLayer == 'NCUMR Lightning Product NCUMR LP Next 03 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X259;
            remLayOrAdclickedLig_pro(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'NCUMR Lightning Product NCUMR LP Next 03-06 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X260;
            remLayOrAdclickedLig_pro(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (panelLayerNCUMRlightningProduct_lists.innerHTML == '') {
            panelLayerNCUMRlightningProduct_Title.innerHTML = '';
            MESOLSCALE.innerHTML = '';
            NCUMRlightningProductImage.innerHTML = '';
        }


        //NCUMR Wind Gust
        if (uncheckLayer == 'NCUMR Wind Gust NCUMR WG Next 03 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X261;
            remLayOrAdclickedNCUMR_WG(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'NCUMR Wind Gust NCUMR WG Next 03-06 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X262;
            remLayOrAdclickedNCUMR_WG(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (panelLayerNCUMRWindGust_lists.innerHTML == '') {
            panelLayerNCUMRWindGust_Title.innerHTML = '';
            MESOLSCALE.innerHTML = '';
            NCUMRWindGustImage.innerHTML = '';
        }

        //NCUMR Rainfall
        if (uncheckLayer == 'NCUMR Rainfall NCUMR R Next 03 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X5;
            remLayOrAdclickedNCUMR_RF(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'NCUMR Rainfall NCUMR R Next 03-06 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X263;
            remLayOrAdclickedNCUMR_RF(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (panelLayerNCUMRRainfall_lists.innerHTML == '') {
            panelLayerNCUMRRainfall_Title.innerHTML = '';
            MESOLSCALE.innerHTML = '';
            NCUMRRainfallImage.innerHTML = '';
        }

        //HRRR_SP Hourly DBZ
        if (uncheckLayer == 'HRRR_SP Hourly DBZ HRRR SP Next 01 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X264;
            remLayOrAdclickedHRRR_DBZ(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'HRRR_SP Hourly DBZ HRRR SP Next 01-02 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X266;
            remLayOrAdclickedHRRR_DBZ(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'HRRR_SP Hourly DBZ HRRR SP Next 02-03 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X267;
            remLayOrAdclickedHRRR_DBZ(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (panelLayerHRRR_SPHourlyDBZ_lists.innerHTML == '') {
            panelLayerHRRR_SPHourlyDBZ_Title.innerHTML = '';
            MESOLSCALE.innerHTML = '';
            HRRR_SPHourlyDBZImage.innerHTML = '';
        }

        //HRRR_NE Hourly DBZ
        if (uncheckLayer == 'HRRR_NE Hourly DBZ HRRR NE Next 01 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X268;
            remLayOrAdclickedHRRR_NE_DBZ(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'HRRR_NE Hourly DBZ HRRR NE Next 01-02 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X269;
            remLayOrAdclickedHRRR_NE_DBZ(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'HRRR_NE Hourly DBZ HRRR NE Next 02-03 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X270;
            remLayOrAdclickedHRRR_NE_DBZ(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (panelLayerHRRR_NEHourlyDBZ_lists.innerHTML == '') {
            panelLayerHRRR_NEHourlyDBZ_Title.innerHTML = '';
            MESOLSCALE.innerHTML = '';
            HRRR_NEHourlyDBZImage.innerHTML = '';
        }
        //code missing here for NW dbz 
        //EWRF MaxZ
        if (uncheckLayer == 'EWRF MaxZ EWRF M Next 01 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X274;
            remLayOrAdclickedEWRF_MaxZ(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'EWRF MaxZ EWRF M Next 01-02 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X275;
            remLayOrAdclickedEWRF_MaxZ(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'EWRF MaxZ EWRF M Next 02-03 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X276;
            remLayOrAdclickedEWRF_MaxZ(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (panelLayerEWRFMaxZ_lists.innerHTML == '') {
            panelLayerEWRFMaxZ_Title.innerHTML = '';
            MESOLSCALE.innerHTML = '';
            EWRFMaxZImage.innerHTML = '';
        }

        //EWRF MaxZ
        if (uncheckLayer == 'EWRF Lightning EWRF L Next 01 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X277;
            remLayOrAdclickedEWRF_Light(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'EWRF Lightning EWRF L Next 01-02 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X278;
            remLayOrAdclickedEWRF_Light(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'EWRF Lightning EWRF L Next 02-03 Hrs') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X279;
            remLayOrAdclickedEWRF_Light(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (panelLayerEWRFLightning_lists.innerHTML == '') {
            panelLayerEWRFLightning_Title.innerHTML = '';
            MESOLSCALE.innerHTML = '';
            EWRFLightningImage.innerHTML = '';
        }

        // MediumRange
        //Rainfall Intensity Day1
        if (uncheckLayer == 'Rainfall Intensity Day1 RI GFS DAY1') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = med_gfs1;
            remLayOrAdclickedRI_Day1(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'Rainfall Intensity Day1 RI NCUM Day1') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X281;
            remLayOrAdclickedRI_Day1(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'Rainfall Intensity Day1 RI NEPS Day1') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X282;
            remLayOrAdclickedRI_Day1(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'Rainfall Intensity Day1 RI WRF Day1') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X283;
            remLayOrAdclickedRI_Day1(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'Rainfall Intensity Day1 RI GEFS Day1') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X284;
            remLayOrAdclickedRI_Day1(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'Rainfall Intensity Day1 RI ECMWF Day1') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X285;
            remLayOrAdclickedRI_Day1(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (panelLayerRainfallIntensityDay1_lists.innerHTML == '') {
            panelLayerRainfallIntensityDay1_Title.innerHTML = '';
            MEDIUM.innerHTML = '';
            RainfallIntensityImage.innerHTML = '';
        }

        //Rainfall Intensity Day2
        if (uncheckLayer == 'Rainfall Intensity Day2 RI GFS Day2') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X286;
            remLayOrAdclickedRI_Day2(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'Rainfall Intensity Day2 RI NCUM Day2') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X289;
            remLayOrAdclickedRI_Day2(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'Rainfall Intensity Day2 RI NEPS Day2') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X290;
            remLayOrAdclickedRI_Day2(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'Rainfall Intensity Day2 RI WRF Day2') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X291;
            remLayOrAdclickedRI_Day2(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'Rainfall Intensity Day2 RI GEFS Day2') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X292;
            remLayOrAdclickedRI_Day2(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'Rainfall Intensity Day2 RI ECMWF Day2') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X293;
            remLayOrAdclickedRI_Day2(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (panelLayerRainfallIntensityDay2_lists.innerHTML == '') {
            panelLayerRainfallIntensityDay2_Title.innerHTML = '';
            MEDIUM.innerHTML = '';
            RainfallIntensityImage.innerHTML = '';
        }

        //Rainfall Intensity Day3
        if (uncheckLayer == 'Rainfall Intensity Day3 RI GFS Day3') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X294;
            remLayOrAdclickedRI_Day3(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'Rainfall Intensity Day3 RI NCUM Day3') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X295;
            remLayOrAdclickedRI_Day3(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'Rainfall Intensity Day3 RI NEPS Day3') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X296;
            remLayOrAdclickedRI_Day3(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'Rainfall Intensity Day3 RI WRF Day3') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X297;
            remLayOrAdclickedRI_Day3(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'Rainfall Intensity Day3 RI GEFS Day3') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X298;
            remLayOrAdclickedRI_Day3(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'Rainfall Intensity Day3 RI ECMWF Day3') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X299;
            remLayOrAdclickedRI_Day3(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (panelLayerRainfallIntensityDay3_lists.innerHTML == '') {
            panelLayerRainfallIntensityDay3_Title.innerHTML = '';
            MEDIUM.innerHTML = '';
            RainfallIntensityImage.innerHTML = '';
        }

        //Rainfall Intensity Day4
        if (uncheckLayer == 'Rainfall Intensity Day4 RI GFS Day4') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X300;
            remLayOrAdclickedRI_Day4(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'Rainfall Intensity Day4 RI NCUM Day4') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X301;
            remLayOrAdclickedRI_Day4(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'Rainfall Intensity Day4 RI NEPS Day4') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X302;
            remLayOrAdclickedRI_Day4(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'Rainfall Intensity Day4 RI GEFS Day4') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X303;
            remLayOrAdclickedRI_Day4(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'Rainfall Intensity Day4 RI ECMWF Day4') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X304;
            remLayOrAdclickedRI_Day4(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (panelLayerRainfallIntensityDay4_lists.innerHTML == '') {
            panelLayerRainfallIntensityDay4_Title.innerHTML = '';
            MEDIUM.innerHTML = '';
            RainfallIntensityImage.innerHTML = '';
        }

        //Rainfall Intensity Day5
        if (uncheckLayer == 'Rainfall Intensity Day5 RI GFS Day5') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X305;
            remLayOrAdclickedRI_Day5(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'Rainfall Intensity Day5 RI NCUM Day5') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X306;
            remLayOrAdclickedRI_Day5(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'Rainfall Intensity Day5 RI NEPS Day5') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X307;
            remLayOrAdclickedRI_Day5(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'Rainfall Intensity Day5 RI GEFS Day5') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X308;
            remLayOrAdclickedRI_Day5(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'Rainfall Intensity Day5 RI ECMWF Day5') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X309;
            remLayOrAdclickedRI_Day5(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (panelLayerRainfallIntensityDay5_lists.innerHTML == '') {
            panelLayerRainfallIntensityDay5_Title.innerHTML = '';
            MEDIUM.innerHTML = '';
            RainfallIntensityImage.innerHTML = '';
        }

        //MSLP Day1
        if (uncheckLayer == 'MSLP Day1 MSLP GFS Day1') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X310;
            remLayOrAdclickedMSLP_Day1(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'MSLP Day1 MSLP NCUM Day1') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X11;
            remLayOrAdclickedMSLP_Day1(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'MSLP Day1 MSLP NEPS Day1') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X12;
            remLayOrAdclickedMSLP_Day1(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'MSLP Day1 MSLP WRF Day1') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X13;
            remLayOrAdclickedMSLP_Day1(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'MSLP Day1 MSLP GEFS Day1') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X14;
            remLayOrAdclickedMSLP_Day1(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (panelLayerMSLPDay1_lists.innerHTML == '') {
            panelLayerMSLPDay1_Title.innerHTML = '';
            MEDIUM.innerHTML = '';
            MSLPDayImage.innerHTML = '';
        }

        //MSLP Day2
        if (uncheckLayer == 'MSLP Day2 MSLP GFS Day2') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X15;
            remLayOrAdclickedMSLP_Day2(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'MSLP Day2 MSLP NCUM Day2') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X16;
            remLayOrAdclickedMSLP_Day2(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'MSLP Day2 MSLP NEPS Day2') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X17;
            remLayOrAdclickedMSLP_Day2(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'MSLP Day2 MSLP WRF Day2') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X18;
            remLayOrAdclickedMSLP_Day2(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'MSLP Day2 MSLP GEFS Day2') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X19;
            remLayOrAdclickedMSLP_Day2(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (panelLayerMSLPDay2_lists.innerHTML == '') {
            panelLayerMSLPDay2_Title.innerHTML = '';
            MEDIUM.innerHTML = '';
            MSLPDayImage.innerHTML = '';
        }

        //MSLP Day3
        if (uncheckLayer == 'MSLP Day3 MSLP GFS Day3') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X20;
            remLayOrAdclickedMSLP_Day3(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'MSLP Day3 MSLP NCUM Day3') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X21;
            remLayOrAdclickedMSLP_Day3(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'MSLP Day3 MSLP NEPS Day3') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X22;
            remLayOrAdclickedMSLP_Day3(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'MSLP Day3 MSLP WRF Day3') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X23;
            remLayOrAdclickedMSLP_Day3(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'MSLP Day3 MSLP GEFS Day3') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X24;
            remLayOrAdclickedMSLP_Day3(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (panelLayerMSLPDay3_lists.innerHTML == '') {
            panelLayerMSLPDay3_Title.innerHTML = '';
            MEDIUM.innerHTML = '';
            MSLPDayImage.innerHTML = '';
        }

        //MSLP Day4
        if (uncheckLayer == 'MSLP Day4 MSLP GFS Day4') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X25;
            remLayOrAdclickedMSLP_Day4(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'MSLP Day4 MSLP NCUM Day4') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X26;
            remLayOrAdclickedMSLP_Day4(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'MSLP Day4 MSLP NEPS Day4') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X27;
            remLayOrAdclickedMSLP_Day4(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'MSLP Day4 MSLP GEFS Day4') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X28;
            remLayOrAdclickedMSLP_Day4(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (panelLayerMSLPDay4_lists.innerHTML == '') {
            panelLayerMSLPDay4_Title.innerHTML = '';
            MEDIUM.innerHTML = '';
            MSLPDayImage.innerHTML = '';
        }

        //MSLP Day5
        if (uncheckLayer == 'MSLP Day5 MSLP GFS Day5') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X29;
            remLayOrAdclickedMSLP_Day5(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'MSLP Day5 MSLP NCUM Day5') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X30;
            remLayOrAdclickedMSLP_Day5(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'MSLP Day5 MSLP NEPS Day5') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X31;
            remLayOrAdclickedMSLP_Day5(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == 'MSLP Day5 MSLP GEFS Day5') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X32;
            remLayOrAdclickedMSLP_Day5(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (panelLayerMSLPDay5_lists.innerHTML == '') {
            panelLayerMSLPDay5_Title.innerHTML = '';
            MEDIUM.innerHTML = '';
            MSLPDayImage.innerHTML = '';
        }

        //10m Wind Day1
        if (uncheckLayer == '10m Wind Day1 10m WIND GFS Day1') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X33;
            remLayOrAdclicked_10W_Day1(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == '10m Wind Day1 10m WIND NCUM Day1') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X34;
            remLayOrAdclicked_10W_Day1(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == '10m Wind Day1 10m WIND NEPS Day1') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X35;
            remLayOrAdclicked_10W_Day1(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == '10m Wind Day1 10m WIND WRF Day1') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X36;
            remLayOrAdclicked_10W_Day1(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == '10m Wind Day1 10m WIND GEFS Day1') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X37;
            remLayOrAdclicked_10W_Day1(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (panelLayer10mWINDDay1_lists.innerHTML == '') {
            panelLayer10mWINDDay1_Title.innerHTML = '';
            MEDIUM.innerHTML = '';
            mWINDDayImage.innerHTML = '';
        }

        //10m Wind Day2
        if (uncheckLayer == '10m Wind Day2 10m WIND GFS Day2') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X33;
            remLayOrAdclicked_10W_Day2(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == '10m Wind Day2 10m WIND NCUM Day2') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X38;
            remLayOrAdclicked_10W_Day2(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == '10m Wind Day2 10m WIND NEPS Day2') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X39;
            remLayOrAdclicked_10W_Day2(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == '10m Wind Day2 10m WIND WRF Day2') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X40;
            remLayOrAdclicked_10W_Day2(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == '10m Wind Day2 10m WIND GEFS Day2') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X41;
            remLayOrAdclicked_10W_Day2(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (panelLayer10mWINDDay2_lists.innerHTML == '') {
            panelLayer10mWINDDay2_Title.innerHTML = '';
            MEDIUM.innerHTML = '';
            mWINDDayImage.innerHTML = '';
        }

        //10m Wind Day3
        if (uncheckLayer == '10m Wind Day3 10m WIND GFS Day3') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X43;
            remLayOrAdclicked_10W_Day3(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == '10m Wind Day3 10m WIND NCUM Day3') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X44;
            remLayOrAdclicked_10W_Day3(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == '10m Wind Day3 10m WIND NEPS Day3') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = Airport;
            remLayOrAdclicked_10W_Day3(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == '10m Wind Day3 10m WIND WRF Day3') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X46;
            remLayOrAdclicked_10W_Day3(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == '10m Wind Day3 10m WIND GEFS Day3') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X47;
            remLayOrAdclicked_10W_Day3(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (panelLayer10mWINDDay3_lists.innerHTML == '') {
            panelLayer10mWINDDay3_Title.innerHTML = '';
            MEDIUM.innerHTML = '';
            mWINDDayImage.innerHTML = '';
        }

        //10m Wind Day4
        if (uncheckLayer == '10m Wind Day4 10m WIND GFS Day4') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X48;
            remLayOrAdclicked_10W_Day4(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == '10m Wind Day4 10m WIND NCUM Day4') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X49;
            remLayOrAdclicked_10W_Day4(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == '10m Wind Day4 10m WIND NEPS Day4') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X50;
            remLayOrAdclicked_10W_Day4(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == '10m Wind Day4 10m WIND GEFS Day4') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X51;
            remLayOrAdclicked_10W_Day4(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (panelLayer10mWINDDay4_lists.innerHTML == '') {
            panelLayer10mWINDDay4_Title.innerHTML = '';
            MEDIUM.innerHTML = '';
            mWINDDayImage.innerHTML = '';
        }

        //10m Wind Day4
        if (uncheckLayer == '10m Wind Day5 10m WIND GFS Day5') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X52;
            remLayOrAdclicked_10W_Day5(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == '10m Wind Day5 10m WIND NCUM Day5') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X53;
            remLayOrAdclicked_10W_Day5(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == '10m Wind Day5 10m WIND NEPS Day5') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X54;
            remLayOrAdclicked_10W_Day5(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (uncheckLayer == '10m Wind Day5 10m WIND GEFS Day5') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X55;
            remLayOrAdclicked_10W_Day5(_context_layer, _layer_to_remove_add, uncheckLayer);
        }
        if (panelLayer10mWINDDay5_lists.innerHTML == '') {
            panelLayer10mWINDDay5_Title.innerHTML = '';
            MEDIUM.innerHTML = '';
            mWINDDayImage.innerHTML = '';
        }


    }

    getLayer_name = layer_name;
    // console.log(getLayer_name, "getLayer_name");

    updateBackgroundColor();

});
//

// _B - layer BOTTOM name
$(document).ready(function() {
    let selectedLayers = [];

    $("body").on("change", "input[type=checkbox]", function() {
        var _this = $(this);
        let isChecked_B = _this.prop('checked');

        let layer_group_name_B = _this.context._layer.group.name;

        let layer_name_B = _this.context._layer.name;

        if (isChecked_B) {
            let forExistLayer_B = layer_group_name_B + ' ' + layer_name_B;
            selectedLayers.push(forExistLayer_B);
            console.log(forExistLayer_B, "forExistLayer_B");
            console.log(selectedLayers, "selectedLayers_B");
        } else {
            let uncheckLayer_B = layer_group_name_B + ' ' + layer_name_B;
            selectedLayers = selectedLayers.filter(layer => layer !== uncheckLayer_B);
            console.log(uncheckLayer_B, "uncheckLayer_B");
            console.log(selectedLayers, "selectedLayers_B");
        }

        if (selectedLayers.length > 0) {
            document.getElementById("bottomLayer").innerHTML = selectedLayers[selectedLayers.length -
                1];
        } else {
            document.getElementById("bottomLayer").innerHTML = "Layers Selected None";
        }
    });
});




// ***********************************************************************
function metarTempImageAndLegend(layer_group_name, layer_name, forExistLayer) {
    METAR.innerHTML = "METAR"
    panelLayermetarTemp_lists.style.display = 'flex';

    panelLayermetarTemp_Title.innerHTML = layer_name
    let AlreadyExit = clickedMetarTempLists.find(x => {
        return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
    })
    if (!AlreadyExit) {
        clickedMetarTempLists.push(
            `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
            <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_group_name}
        </span>`
        );
    }




    panelLayermetarTemp_lists.innerHTML = clickedMetarTempLists.join("");

    metarTempLegendImage.innerHTML = `<span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
        <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
        <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
        <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
        <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
        <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
    </span>`
}

function metarDewPointImageAndLegend(layer_group_name, layer_name, forExistLayer) {
    METAR.innerHTML = "METAR"
    panelLayermetarDewPoint_lists.style.display = 'flex';

    panelLayermetarDewPoint_Title.innerHTML = layer_name
    let AlreadyExit = clickedMetarDewPointLists.find(x => {
        return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
    })
    if (!AlreadyExit) {
        clickedMetarDewPointLists.push(
            `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
            <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_group_name}
        </span>`
        );
    }

    panelLayermetarDewPoint_lists.innerHTML = clickedMetarDewPointLists.join("");

    metarDewPointLegendImage.innerHTML = `<span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
        <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
        <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
        <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
        <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
        <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
    </span>`
}

function metarVisibilityImageAndLegend(layer_group_name, layer_name, forExistLayer) {
    METAR.innerHTML = "METAR"
    panelLayermetarVisibility_lists.style.display = 'flex';

    panelLayermetarVisibility_Title.innerHTML = layer_name
    let AlreadyExit = clickedMetarVisibilityLists.find(x => {
        return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
    })
    if (!AlreadyExit) {
        clickedMetarVisibilityLists.push(
            `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
            <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_group_name}
        </span>`
        );
    }
    panelLayermetarVisibility_lists.innerHTML = clickedMetarVisibilityLists.join("");

    metarVisibilityLegendImage.innerHTML = `<span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
        <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
            <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #2f7eb6; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">0-1000</span>
            <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #63abb3; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">1000-2000</span>
            </span>
            <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
            <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #9ed1a1; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">2000-4000</span> 
            <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #c4ebaa; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">4000-8000</span>
            </span>
            <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
            <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #edf5bf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">8000-12000</span>
            <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fcecaf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">12000-20000</span>
            </span>
            <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
            <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fdca82; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">20000-30000</span>
            <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #f59a4e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">30000-40000</span>
            </span>
            <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
            <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #e35d2b; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">40000-45000</span>
            <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #df1327; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">>45000-50000</span>
        </span>
    </span>`
}

function metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name, forExistLayer) {
    METAR.innerHTML = "METAR"
    panelLayermetarWindSpeedAndDirection_lists.style.display = 'flex';

    panelLayermetarWindSpeedAndDirection_Title.innerHTML = layer_name
    let AlreadyExit = clickedMetarWindSpeedAndDirectionLists.find(x => {
        return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
    })
    if (!AlreadyExit) {
        clickedMetarWindSpeedAndDirectionLists.push(
            `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
            <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_group_name}
        </span>`
        );
    }
    panelLayermetarWindSpeedAndDirection_lists.innerHTML = clickedMetarWindSpeedAndDirectionLists.join("");

    metarWindSpeedAndDirectionLegendImage.innerHTML = `<svg width="60" height="50" style="transform: rotate(90deg);">
        <g>
            <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
            <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
            <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
        </g>
    </svg>`
}



function synopTempImageAndLegend(layer_group_name, layer_name, forExistLayer) {
    SYNOP.innerHTML = "SYNOP"
    SYNOP_Row.style.display = 'block';
    panelLayersynopTemp_lists.style.display = 'flex';

    panelLayersynopTemp_Title.innerHTML = layer_name;
    let AlreadyExit = clickedSynopTempLists.find(x => {
        return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
    })
    if (!AlreadyExit) {
        clickedSynopTempLists.push(
            `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
            <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_group_name}
        </span>`
        );
    }

    panelLayersynopTemp_lists.innerHTML = clickedSynopTempLists.join("");

    synopTempLegendImage.innerHTML = `  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
  <span style="align-items: center; width:35px; height:18px; border-radius: 15%; background-color: #6230fa; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 0;">10-15</span>
    <span style="align-items: center; width:35px; height:18px; border-radius: 15%; background-color: #ff30ac; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 0;">15-30</span>
    <span style="align-items: center; width:35px; height:18px; border-radius: 15%; background-color: #fdff2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 0;">30-35</span>
    <span style="align-items: center; width:35px; height:18px; border-radius: 15%; background-color: #ffab2a; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 0;">35-40</span>
    <span style="align-items: center; width:35px; height:18px; border-radius: 15%; background-color: #f86929; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 0;">40-45</span>
    <span style="align-items: center; width:35px; height:18px; border-radius: 15%; background-color: #ff342e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 0;">45</span>
  </span>`
}


function synopMeanSeaLevelImageAndLegend(layer_group_name, layer_name, forExistLayer) {
    SYNOP.innerHTML = "SYNOP"
    SYNOP_Row.style.display = 'block';
    panelLayersynopMeanSeaLevel_lists.style.display = 'flex';

    panelLayersynopMeanSeaLevel_Title.innerHTML = layer_name;
    let AlreadyExit = clickedSynopMeanSeaLevelLists.find(x => {
        return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
    })
    if (!AlreadyExit) {
        clickedSynopMeanSeaLevelLists.push(
            `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
            <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_group_name}
        </span>`
        );
    }
    panelLayersynopMeanSeaLevel_lists.innerHTML = clickedSynopMeanSeaLevelLists.join("");

    synopMeanSeaLevelLegendImage.innerHTML = `<span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:55px; height:18px; border-radius: 15%; background-color: #c8021d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;"><998</span>
    <span style="align-items: center; width:55px; height:18px; border-radius: 15%; background-color: #d213c6; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">998-1000</span>
    <span style="align-items: center; width:55px; height:18px; border-radius: 15%; background-color: #ad67e1; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">1000-1002</span>
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:55px; height:18px; border-radius: 15%; background-color: #f5ed8c; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">1002-1004</span>
    <span style="align-items: center; width:55px; height:18px; border-radius: 15%; background-color: #e3f5b6; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">1004-1006</span>
    <span style="align-items: center; width:55px; height:18px; border-radius: 15%; background-color: #f8e8e3; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">1006-1008</span>
   
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:55px; height:18px; border-radius: 15%; background-color: #e1eef5; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">1008-1010</span>
    <span style="align-items: center; width:55px; height:18px; border-radius: 15%; background-color: #c2dbeb; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">1010-1012</span>
    <span style="align-items: center; width:55px; height:18px; border-radius: 15%; background-color: #9ccbe1; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">1012-1014</span>
   
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:55px; height:18px; border-radius: 15%; background-color: #70acd4; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">1014-1016</span>
    <span style="align-items: center; width:55px; height:18px; border-radius: 15%; background-color: #3590c5; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">1016-1018</span>
    <span style="align-items: center; width:55px; height:18px; border-radius: 15%; background-color: #0573bf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">>1018</span>
    </span>
    </span>`
}

function synopCloudCoverImageAndLegend(layer_group_name, layer_name, forExistLayer) {
    SYNOP.innerHTML = "SYNOP"
    SYNOP_Row.style.display = 'block';
    panelLayersynopCloudCover_lists.style.display = 'flex';

    panelLayersynopCloudCover_Title.innerHTML = layer_name;
    let AlreadyExit = clickedSynopCloudCoverLists.find(x => {
        return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
    })
    if (!AlreadyExit) {
        clickedSynopCloudCoverLists.push(
            `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
            <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_group_name}
        </span>`
        );
    }
    panelLayersynopCloudCover_lists.innerHTML = clickedSynopCloudCoverLists.join("");

    synopCloudCoverLegendImage.innerHTML = `<span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:75px; height:18px; border-radius: 15%; background-color: #fbf9fa; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">0.000-20.000</span>
    <span style="align-items: center; width:75px; height:18px; border-radius: 15%; background-color: #bbbbbb; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">20.000-40.000</span>
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:75px; height:18px; border-radius: 15%; background-color: #7f7f7f; color:white; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">40.000-60.000</span>
    <span style="align-items: center; width:75px; height:18px; border-radius: 15%; background-color: #424242; color:white; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">60.000-80.000</span>
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:75px; height:18px; border-radius: 15%; background-color: #050505; color:white; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">80.000-100.000</span>
  </span>
  </span>`
}

function synopGeopotentialHeightImageAndLegend(layer_group_name, layer_name, forExistLayer) {
    SYNOP.innerHTML = "SYNOP"
    SYNOP_Row.style.display = 'block';
    panelLayersynopGeopotentialHeight_lists.style.display = 'flex';

    panelLayersynopGeopotentialHeight_Title.innerHTML = layer_name;
    let AlreadyExit = clickedSynopGeopotentialHeightLists.find(x => {
        return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
    })
    if (!AlreadyExit) {
        clickedSynopGeopotentialHeightLists.push(
            `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
            <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_group_name}
        </span>`
        );
    }
    panelLayersynopGeopotentialHeight_lists.innerHTML = clickedSynopGeopotentialHeightLists.join("");

    synopGeopotentialHeightLegendImage.innerHTML = `<span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:42px; height:18px; border-radius: 15%; background-color: #bbdd07; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">0-50</span>
    <span style="align-items: center; width:42px; height:18px; border-radius: 15%; background-color: #0edf06; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">50-100</span>
    <span style="align-items: center; width:42px; height:18px; border-radius: 15%; background-color: #ffab61; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">100-200</span>
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:42px; height:18px; border-radius: 15%; background-color: #ffea9f; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">200-300</span>
    <span style="align-items: center; width:42px; height:18px; border-radius: 15%; background-color: #fffdbe; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">300-400</span>
    <span style="align-items: center; width:42px; height:18px; border-radius: 15%; background-color: #d4efb1; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">400-500</span>
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:42px; height:18px; border-radius: 15%; background-color: #addba3; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">500-600</span>
    <span style="align-items: center; width:42px; height:18px; border-radius: 15%; background-color: #68b2b0; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">600-700</span>
    <span style="align-items: center; width:42px; height:18px; border-radius: 15%; background-color: #2b83bb; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">>700</span>
    </span>
    </span>`
}

function synopRelativeHumidityImageAndLegend(layer_group_name, layer_name, forExistLayer) {
    SYNOP.innerHTML = "SYNOP"
    SYNOP_Row.style.display = 'block';
    panelLayersynopRelativeHumidity_lists.style.display = 'flex';

    panelLayersynopRelativeHumidity_Title.innerHTML = layer_name;
    let AlreadyExit = clickedSynopRelativeHumidityLists.find(x => {
        return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
    })
    if (!AlreadyExit) {
        clickedSynopRelativeHumidityLists.push(
            `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
            <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_group_name}
        </span>`
        );
    }
    panelLayersynopRelativeHumidity_lists.innerHTML = clickedSynopRelativeHumidityLists.join("");

    synopRelativeHumidityLegendImage.innerHTML = `<span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
  <span style="align-items: center; width:35px; height:18px; border-radius: 15%; background-color: #29ff2a; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 0;">10-15</span>
    <span style="align-items: center; width:35px; height:18px; border-radius: 15%; background-color: #fcff32; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 0;">25-50</span>
    <span style="align-items: center; width:35px; height:18px; border-radius: 15%; background-color: #fbaf33; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 0;">50-70</span>
    <span style="align-items: center; width:35px; height:18px; border-radius: 15%; background-color: #fa6529; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 0;">70-85</span>
    <span style="align-items: center; width:35px; height:18px; border-radius: 15%; background-color: #f93c35; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 0;">>85</span>
  </span>`
}

function synopVisibilityImageAndLegend(layer_group_name, layer_name, forExistLayer) {
    SYNOP.innerHTML = "SYNOP"
    SYNOP_Row.style.display = 'block';
    panelLayersynopVisibility_lists.style.display = 'flex';

    panelLayersynopVisibility_Title.innerHTML = layer_name;
    let AlreadyExit = clickedSynopVisibilityLists.find(x => {
        return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
    })
    if (!AlreadyExit) {
        clickedSynopVisibilityLists.push(
            `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
            <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_group_name}
        </span>`
        );
    }
    panelLayersynopVisibility_lists.innerHTML = clickedSynopVisibilityLists.join("");

    synopVisibilityLegendImage.innerHTML = `<span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #2f7eb6; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">0-1000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #63abb3; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">1000-2000</span>
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #9ed1a1; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">2000-4000</span> 
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #c4ebaa; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">4000-8000</span>
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #edf5bf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">8000-12000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fcecaf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">12000-20000</span>
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fdca82; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">20000-30000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #f59a4e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">30000-40000</span>
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #e35d2b; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">40000-45000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #df1327; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">>45000-50000</span>
  </span>
  </span>`
}

function synopWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name, forExistLayer) {
    SYNOP.innerHTML = "SYNOP"
    SYNOP_Row.style.display = 'block';
    panelLayersynopWindSpeedAndDirection_lists.style.display = 'flex';

    panelLayersynopWindSpeedAndDirection_Title.innerHTML = layer_name;
    let AlreadyExit = clickedSynopWindSpeedAndDirectionLists.find(x => {
        return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
    })
    if (!AlreadyExit) {
        clickedSynopWindSpeedAndDirectionLists.push(
            `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
            <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_group_name}
        </span>`
        );
    }
    panelLayersynopWindSpeedAndDirection_lists.innerHTML = clickedSynopWindSpeedAndDirectionLists.join("");

    synopWindSpeedAndDirectionLegendImage.innerHTML = `<svg width="60" height="50" style="transform: rotate(90deg);">
                <g>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
                </g>
                </svg>`
}

function synop3hRainfallImageAndLegend(layer_group_name, layer_name, forExistLayer) {
    SYNOP.innerHTML = "SYNOP"
    SYNOP_Row.style.display = 'block';
    panelLayersynop3hRainfall_lists.style.display = 'flex';

    panelLayersynop3hRainfall_Title.innerHTML = layer_name;
    let AlreadyExit = clickedSynop3hRainfallLists.find(x => {
        return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
    })
    if (!AlreadyExit) {
        clickedSynop3hRainfallLists.push(
            `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
            <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_group_name}
        </span>`
        );
    }
    panelLayersynop3hRainfall_lists.innerHTML = clickedSynop3hRainfallLists.join("");

    synop3hRainfallLegendImage.innerHTML = `<span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
  <span style="align-items: center; width:40px; height:18px; border-radius: 15%; background-color: #7cfd08; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 0;">0-15</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #0101fc; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 0;">15.5-64.4</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #ffeb01; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 0;">64.4-115.5</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #fe582e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 0;">115.6-204.4</span>
  </span>`
}

function soundingLegendImage() {
    soundingImage.innerHTML = `<span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>`
}

function LIGHTININGLegendImage() {
    LIGHTININGImage.innerHTML = `<img src="img/lighting.jpg" style="width: 125px; height: 20px;">`
}

function RADARLegendImage() {
    RADARImage.innerHTML = `<span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #c30432; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;"><58.3->60.0</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #e32201; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">54.7-57.3</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #fe5c05; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">52.0-54.7</span>
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #fda000; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">49.3-52.0</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #fed100; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">46.7-49.3</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #faef5e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">44.0-46.7</span>
   
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #faef5ebf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">41.3-44.0</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #b0f6ff; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">38.7-41.3</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #6de3fd; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">36.0-38.7</span>
   
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #31baff; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">33.3-36.0</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #0f92fd; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">30.7-33.3</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #004dfd; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">28.0-30.7</span>
    </span>

    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #0117df; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">25.3-28.0</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #2002b5; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">22.7-25.3</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #3901a0; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">20.0-22.7</span>
    </span>
    </span>`
}

function SHIPANDBUOYLegendImage() {
    SHIPANDBUOYImage.innerHTML = `<svg width="60" height="50" style="transform: rotate(90deg);">
    <g>
        <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
        <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
        <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
    </g>
    </svg>`
}

function WRFReflectivityLegendImage() {
    WRFReflectivityImage.innerHTML = `  <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #c30432; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;"><58.3->60.0</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #e32201; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">54.7-57.3</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #fe5c05; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">52.0-54.7</span>
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #fda000; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">49.3-52.0</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #fed100; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">46.7-49.3</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #faef5e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">44.0-46.7</span>
   
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #faef5ebf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">41.3-44.0</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #b0f6ff; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">38.7-41.3</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #6de3fd; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">36.0-38.7</span>
   
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #31baff; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">33.3-36.0</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #0f92fd; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">30.7-33.3</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #004dfd; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">28.0-30.7</span>
    </span>

    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #0117df; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">25.3-28.0</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #2002b5; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">22.7-25.3</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #3901a0; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">20.0-22.7</span>
    </span>
    </span>`
}

function WRFlightningProductLegendImage() {
    WRFlightningProductImage.innerHTML = `<span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #00bfff; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">1-5</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #00ff00; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">5-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32cd32; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">10-15</span>
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #228b22; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">15-20</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffff00; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">20-25</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffd700; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">25-30</span>
   
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffa500; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">30-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #b80000; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">40-50</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #850000; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">>50</span>
    </span>
    </span>`
}

function WRFAccumlatedRainfallLegendImage() {
    WRFAccumlatedRainfallImage.innerHTML = `  <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:40px; height:18px; border-radius: 15%; background-color: #fbfae5; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">0.1-10</span>
    <span style="align-items: center; width:40px; height:18px; border-radius: 15%; background-color: #a0e632; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">10-20</span>
    <span style="align-items: center; width:40px; height:18px; border-radius: 15%; background-color: #00dc00; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">20-30</span>
    <span style="align-items: center; width:40px; height:18px; border-radius: 15%; background-color: #009aff; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">30-40</span>
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:40px; height:18px; border-radius: 15%; background-color: #1e3cff; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">40-50</span>
    <span style="align-items: center; width:40px; height:18px; border-radius: 15%; background-color: #f08228; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">50-60</span>
    <span style="align-items: center; width:40px; height:18px; border-radius: 15%; background-color: #fa3c3c; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">>60</span>
   
    </span>`
}

function lightningPotentialindexLegendImage() {
    lightningPotentialindexImage.innerHTML = `  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:50px; height:18px; border-radius: 15%; background-color: #ffc14b; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">LOW</span>
    <span style="align-items: center; width:50px; height:18px; border-radius: 15%; background-color: #ff611e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">MEDIUM</span>
    <span style="align-items: center; width:50px; height:18px; border-radius: 15%; background-color: #a80108; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">>01</span>
    </span>`
}

function NCUMRlightningProductLegendImage() {
    NCUMRlightningProductImage.innerHTML = `<img src="img/lighting.jpg" style="width: 125px; height: 20px;">`
}

function NCUMRWindGustLegendImage() {
    NCUMRWindGustImage.innerHTML = `  <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #feebe2; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">1-5</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fccbc9; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">5-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #bd20fb; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">10-15</span>
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #f98ead; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">15-20</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #f768a1; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">20-25</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #de4195; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">25-30</span>
   
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #c51b8a; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #9f0e80; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #7a0177; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">>40</span>
   
    </span>

    </span>`
}

function NCUMRRainfallLegendImage() {
    NCUMRRainfallImage.innerHTML = `  <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:40px; height:18px; border-radius: 15%; background-color: #fbfae5; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">0.1-10</span>
    <span style="align-items: center; width:40px; height:18px; border-radius: 15%; background-color: #a0e632; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">10-20</span>
    <span style="align-items: center; width:40px; height:18px; border-radius: 15%; background-color: #00dc00; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">20-30</span>
    <span style="align-items: center; width:40px; height:18px; border-radius: 15%; background-color: #009aff; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">30-40</span>
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:40px; height:18px; border-radius: 15%; background-color: #1e3cff; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">40-50</span>
    <span style="align-items: center; width:40px; height:18px; border-radius: 15%; background-color: #f08228; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">50-60</span>
    <span style="align-items: center; width:40px; height:18px; border-radius: 15%; background-color: #fa3c3c; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">>60</span>
   
    </span>`
}

function HRRR_SPHourlyDBZLegendImage() {
    HRRR_SPHourlyDBZImage.innerHTML = `  <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #c30432; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;"><58.3->60.0</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #e32201; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">54.7-57.3</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #fe5c05; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">52.0-54.7</span>
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #fda000; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">49.3-52.0</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #fed100; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">46.7-49.3</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #faef5e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">44.0-46.7</span>
   
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #faef5ebf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">41.3-44.0</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #b0f6ff; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">38.7-41.3</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #6de3fd; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">36.0-38.7</span>
   
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #31baff; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">33.3-36.0</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #0f92fd; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">30.7-33.3</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #004dfd; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">28.0-30.7</span>
    </span>

    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #0117df; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">25.3-28.0</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #2002b5; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">22.7-25.3</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #3901a0; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">20.0-22.7</span>
    </span>
    </span>`
}

function HRRR_NEHourlyDBZLegendImage() {
    HRRR_NEHourlyDBZImage.innerHTML = `  <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #c30432; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;"><58.3->60.0</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #e32201; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">54.7-57.3</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #fe5c05; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">52.0-54.7</span>
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #fda000; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">49.3-52.0</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #fed100; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">46.7-49.3</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #faef5e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">44.0-46.7</span>
   
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #faef5ebf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">41.3-44.0</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #b0f6ff; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">38.7-41.3</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #6de3fd; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">36.0-38.7</span>
   
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #31baff; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">33.3-36.0</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #0f92fd; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">30.7-33.3</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #004dfd; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">28.0-30.7</span>
    </span>

    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #0117df; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">25.3-28.0</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #2002b5; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">22.7-25.3</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #3901a0; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">20.0-22.7</span>
    </span>
    </span>`
}

function HRRR_NWHourlyDBZLegendImage() {
    HRRR_NWHourlyDBZImage.innerHTML = `  <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #c30432; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;"><58.3->60.0</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #e32201; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">54.7-57.3</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #fe5c05; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">52.0-54.7</span>
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #fda000; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">49.3-52.0</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #fed100; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">46.7-49.3</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #faef5e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">44.0-46.7</span>
   
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #faef5ebf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">41.3-44.0</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #b0f6ff; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">38.7-41.3</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #6de3fd; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">36.0-38.7</span>
   
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #31baff; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">33.3-36.0</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #0f92fd; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">30.7-33.3</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #004dfd; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">28.0-30.7</span>
    </span>

    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #0117df; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">25.3-28.0</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #2002b5; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">22.7-25.3</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #3901a0; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">20.0-22.7</span>
    </span>
    </span>`
}

function EWRFMaxZLegendImage() {
    EWRFMaxZImage.innerHTML = `  <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #c30432; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;"><58.3->60.0</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #e32201; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">54.7-57.3</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #fe5c05; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">52.0-54.7</span>
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #fda000; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">49.3-52.0</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #fed100; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">46.7-49.3</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #faef5e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">44.0-46.7</span>
   
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #faef5ebf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">41.3-44.0</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #b0f6ff; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">38.7-41.3</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #6de3fd; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">36.0-38.7</span>
   
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #31baff; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">33.3-36.0</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #0f92fd; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">30.7-33.3</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #004dfd; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">28.0-30.7</span>
    </span>

    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #0117df; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">25.3-28.0</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #2002b5; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">22.7-25.3</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #3901a0; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">20.0-22.7</span>
    </span>
    </span>`
}

function EWRFLightningLegendImage() {
    EWRFLightningImage.innerHTML = `<img src="img/lighting.jpg" style="width: 125px; height: 20px;">`
}

function RainfallIntensityLegendImage() {
    RainfallIntensityImage.innerHTML = `<span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:45px; height:18px; border-radius: 15%; background-color: #fedf08; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">0.1-10</span>
    <span style="align-items: center; width:45px; height:18px; border-radius: 15%; background-color: #b9dd08; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">10-20</span>
    <span style="align-items: center; width:45px; height:18px; border-radius: 15%; background-color: #0add08; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">20-40</span>
    <span style="align-items: center; width:45px; height:18px; border-radius: 15%; background-color: #069af3; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">40-70</span>
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:45px; height:18px; border-radius: 15%; background-color: #0652ff; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">70-130</span>
    <span style="align-items: center; width:45px; height:18px; border-radius: 15%; background-color: #e3671b; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">130-200</span>
    <span style="align-items: center; width:45px; height:18px; border-radius: 15%; background-color: #ff0000; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">>200</span>
   
    </span>
    </span>`
}

function MSLPDayLegendImage() {
    MSLPDayImage.innerHTML = `<span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #f00082; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;"><998</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #fa3c3c; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">998-1000</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #fe5c05; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">1000-1002</span>
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #f08228; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">1002-1004</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #e6af2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">1004-1006</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #e6dc32; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">1006-1008</span>
   
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #a0e632; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">1008-1010</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #00dc00; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">1010-1012</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #00c8c8; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">1012-1014</span>
   
    </span>
    <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #00a0ff; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">1014-1016</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #1e3cff; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">1016-1018</span>
    <span style="align-items: center; width:58px; height:18px; border-radius: 15%; background-color: #8200dc; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0;">>1018</span>
    </span>

    </span>`
}

function mWINDDayLegendImage() {
    mWINDDayImage.innerHTML = `<svg width="60" height="50" style="transform: rotate(90deg);">
    <g>
        <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
        <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
        <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
    </g>
    </svg>`
}

///drag popup
// model popup for legend starts here
let model = document.querySelector('.model');
let modelBody = document.querySelector('.model-body');
let closeModel = document.querySelector('.model-body legend');

//closeModel
closeModel.onclick = () => {
    model.style.display = 'none';
}

function MacroGroupUsers_close() {
    modelForMacroGroup.style.display = 'none';
}

function onDrag({
    movementX,
    movementY
}) {
    let getStyle = window.getComputedStyle(model);
    let leftValue = parseInt(getStyle.left);
    let topValue = parseInt(getStyle.top);
    model.style.left = `${leftValue + movementX}px`;
    model.style.top = `${topValue + movementY}px`;
}
//
document.addEventListener('mousedown', () => {
    modelBody.style.cursor = 'all-scroll';
    modelBody.addEventListener('mousemove', onDrag);
})
//
document.addEventListener('mouseup', () => {
    modelBody.style.cursor = 'default';
    modelBody.removeEventListener('mousemove', onDrag);
})
// model popup for legend endsHere



// model popup- createMacro startsHere
let createMacroDrag = document.querySelector('.create_Macro');
let createMacroBody = document.querySelector('.create_Macro_body');
let closeModelCreateMac = document.querySelector('.create_Macro_body .macroLegend');

//closeModel createMacro
closeModelCreateMac.onclick = () => {
    createMacroDrag.style.display = 'none';
    closCreatMac();
}

function onDragCreateMacro({
    movementX,
    movementY
}) {
    let getStyle = window.getComputedStyle(createMacroDrag);
    let leftValue = parseInt(getStyle.left);
    let topValue = parseInt(getStyle.top);
    createMacroDrag.style.left = `${leftValue + movementX}px`;
    createMacroDrag.style.top = `${topValue + movementY}px`;
}
//
document.addEventListener('mousedown', () => {
    createMacroBody.style.cursor = 'all-scroll';
    createMacroBody.addEventListener('mousemove', onDragCreateMacro);
})
//
document.addEventListener('mouseup', () => {
    createMacroBody.style.cursor = 'default';
    createMacroBody.removeEventListener('mousemove', onDragCreateMacro);
})
// model popup- createMacro endsHere




// model popup- viewMacro startsHere
let viewCreateMacrodrag = document.querySelector('.view_Create_Macro');
let viewCreateMacroBody = document.querySelector('.view_Create_Macro_body');
let closeModelViewMac = document.querySelector('.view_Create_Macro_body .viewMacroLegend');

//closeModel viewMacro
closeModelViewMac.onclick = () => {
    viewCreateMacrodrag.style.display = 'none';
}

function onDragViewMacro({
    movementX,
    movementY
}) {
    let getStyle = window.getComputedStyle(viewCreateMacrodrag);
    let leftValue = parseInt(getStyle.left);
    let topValue = parseInt(getStyle.top);
    viewCreateMacrodrag.style.left = `${leftValue + movementX}px`;
    viewCreateMacrodrag.style.top = `${topValue + movementY}px`;
}
//
document.addEventListener('mousedown', () => {
    viewCreateMacroBody.style.cursor = 'all-scroll';
    viewCreateMacroBody.addEventListener('mousemove', onDragViewMacro);
})
//
document.addEventListener('mouseup', () => {
    viewCreateMacroBody.style.cursor = 'default';
    viewCreateMacroBody.removeEventListener('mousemove', onDragViewMacro);
})
// model popup- viewMacro endsHere


// model popup- UserFilterMacro startsHere
let modelForMacroGroup1 = document.querySelector('.modelForMacroGroup1');
let modelForMacroGroup2 = document.querySelector('.modelForMacroGroup2');
let modelForMacroGroupClose = document.querySelector('.modelForMacroGroup2 .modelForMacroGroupLegend');

//closeModel viewMacro
modelForMacroGroupClose.onclick = () => {
    modelForMacroGroup1.style.display = 'none';
    selectedUserId = "";
    showSavedMacroList();
}

function onDragUserFilterMacro({
    movementX,
    movementY
}) {
    let getStyle = window.getComputedStyle(modelForMacroGroup1);
    let leftValue = parseInt(getStyle.left);
    let topValue = parseInt(getStyle.top);
    modelForMacroGroup1.style.left = `${leftValue + movementX}px`;
    modelForMacroGroup1.style.top = `${topValue + movementY}px`;
}
//
document.addEventListener('mousedown', () => {
    modelForMacroGroup2.style.cursor = 'all-scroll';
    modelForMacroGroup2.addEventListener('mousemove', onDragUserFilterMacro);
})
//
document.addEventListener('mouseup', () => {
    modelForMacroGroup2.style.cursor = 'default';
    modelForMacroGroup2.removeEventListener('mousemove', onDragUserFilterMacro);
})

// model popup- UserFilterMacro endsHere


// MOdels time update BOX starts here
let model_MM = document.querySelector('.model_MM');
let modelBody_MM = document.querySelector('.model-body_MM');

function onDragModelTimeUP({
    movementX,
    movementY
}) {
    let getStyle_MM = window.getComputedStyle(model_MM);
    let leftValue_MM = parseInt(getStyle_MM.left);
    let topValue_MM = parseInt(getStyle_MM.top);
    model_MM.style.left = `${leftValue_MM + movementX}px`;
    model_MM.style.top = `${topValue_MM + movementY}px`;
}
//
document.addEventListener('mousedown', () => {
    modelBody_MM.style.cursor = 'all-scroll';
    modelBody_MM.addEventListener('mousemove', onDragModelTimeUP);
})
//
document.addEventListener('mouseup', () => {
    modelBody_MM.style.cursor = 'default';
    modelBody_MM.removeEventListener('mousemove', onDragModelTimeUP);
})
// MOdels time update BOX endsHere
</script>