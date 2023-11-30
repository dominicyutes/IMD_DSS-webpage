<script>
// nav button starts here
// document.getElementById("parent").addEventListener("click", function(e) {
// const targetElement = e.target;
// const currentColor = targetElement.style.backgroundColor;
// console.log(e);
// console.log(e.target);
// console.log(e.target.id);

// var isClicked = false;
// if (e.target && e.target.id == "exposure" || e.target.id == "metar" || e.target.id == "synop" || e.target
//     .id == "radar" || e.target.id == "satellite" ||
//     e.target.id == "lightning" || e.target.id == "sounding" || e.target.id == "ship_and_buoy" || e.target
//     .id == "mesolscale" || e.target.id == "medium_range") {
//     if (currentColor === 'rgb(245, 222, 179)') {
//         targetElement.style.backgroundColor = 'rgb(240, 240, 240)'; // Reset to default color
//         isClicked = false
//     } else {
//         targetElement.style.backgroundColor = 'rgb(245, 222, 179)';
//         isClicked = true
//     }
// }

// console.log('switch--/>case', isClicked);
// const legendImage1 = document.getElementById('legend1');
// const legendImage2 = document.getElementById('legend2');

// switch (isClicked == true ? e.target.id : 'default') {
//     case 'exposure':
//         legendImage1.src =
//             'http://103.215.208.18/dwr_img/GIS/metar_nowcast.jpg';
//         legendImage2.src =
//             'http://103.215.208.18/dwr_img/GIS/legend/mmetar_time.png';
//         break;
//     case 'metar':
//         legendImage1.src =
//             'http://103.215.208.18/dwr_img/GIS/metar_nowcast.jpg';
//         legendImage2.src =
//             'http://103.215.208.18/dwr_img/GIS/legend/mmetar_time.png';
//         break;
//     case 'synop':
//         legendImage1.src =
//             '	http://103.215.208.18/dwr_img/GIS/synop_nowcast.jpg';
//         legendImage2.src =
//             'http://103.215.208.18/dwr_img/GIS/legend/synop_time.png';
//         break;
//     case 'radar':
//         legendImage1.src =
//             'http://103.215.208.18/dwr_img/GIS/radar_nowcast.jpg';
//         legendImage2.src =
//             'http://103.215.208.18/dwr_img/GIS/legend/hrrr_final.png';
//         break;
//     case 'satellite':
//         legendImage1.src =
//             '	http://103.215.208.18/dwr_img/GIS/legend/sat_nowcast.png';
//         legendImage2.src =
//             'http://103.215.208.18/dwr_img/GIS/legend/insat_windtime.png';
//         break;
//     case 'lightning':
//         legendImage1.src =
//             'http://103.215.208.18/dwr_img/GIS/light_nowcast.jpg';
//         legendImage2.src =
//             'http://103.215.208.18/dwr_img/GIS/legend/light_time.png';
//         break;
//     case 'sounding':
//         legendImage1.src =
//             'http://103.215.208.18/dwr_img/GIS/sounding_nowcast.jpg';
//         legendImage2.src =
//             'http://103.215.208.18/dwr_img/GIS/legend/temp12_time.png';
//         break;
//     case 'ship_and_buoy':
//         legendImage1.src =
//             'http://103.215.208.18/dwr_img/GIS/legend/exp_legend2.PNG';
//         legendImage2.src =
//             'http://103.215.208.18/dwr_img/GIS/legend/ship_time.png';
//         break;
//     case 'mesolscale':
//         legendImage1.src =
//             'http://103.215.208.18/dwr_img/GIS/legend/model_nowcast.png';
//         legendImage2.src =
//             'http://103.215.208.18/dwr_img/GIS/legend/hrrr_final.png';
//         break;
//     case 'medium_range':
//         legendImage1.src =
//             'http://103.215.208.18/dwr_img/GIS/legend/model_123.png';
//         legendImage2.src =
//             'http://103.215.208.18/dwr_img/GIS/legend/date11_mslp.png';
//         break;
//     case 'default':
//         legendImage1.src =
//             'http://103.215.208.18/dwr_img/GIS/legend/model_nowcast.png';
//         legendImage2.src =
//             'http://103.215.208.18/dwr_img/GIS/legend/hrrr_final.png';
//         break;

// }

// });

let modelNamesArr = ["", 'Metar', 'Synop', 'Radar', 'Satellite', 'Lightning', 'Sounding', 'Ship And Buoy'];

//metarParameters
let Parameters = [{
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
        name: 'Ship And Buoy Observation',
        category: 'Ship And Buoy'
    },

];

//metarParametersList
let Metar_00UTC = ['Temperature_00', 'Dew Point temperature_00', 'Visibility_00',
    'Wind Speed And Direction_00'
];

let Metar_01UTC = ['Temperature_01', 'Dew Point temperature_02', 'Visibility_02',
    'Wind Speed And Direction_02'
];

let Metar_02UTC = ['Temperature_02', 'Dew Point temperature_02', 'Visibility_02',
    'Wind Speed And Direction_02'
];

let Metar_03UTC = ['Temperature_03', 'Dew Point temperature_03', 'Visibility_03',
    'Wind Speed And Direction_03'
];

let Metar_04UTC = ['Temperature_04', 'Dew Point temperature_04', 'Visibility_04',
    'Wind Speed And Direction_04'
];

let Metar_05UTC = ['Temperature_05', 'Dew Point temperature_05', 'Visibility_05',
    'Wind Speed And Direction_05'
];

let Metar_06UTC = ['Temperature_06', 'Dew Point temperature_06', 'Visibility_06',
    'Wind Speed And Direction_06'
];

let Metar_07UTC = ['Temperature_07', 'Dew Point temperature_07', 'Visibility_07',
    'Wind Speed And Direction_07'
];

let Metar_08UTC = ['Temperature_08', 'Dew Point temperature_08', 'Visibility_08',
    'Wind Speed And Direction_08'
];

let Metar_09UTC = ['Temperature_09', 'Dew Point temperature_09', 'Visibility_09',
    'Wind Speed And Direction_09'
];

let Metar_10UTC = ['Temperature_10', 'Dew Point temperature_10', 'Visibility_10',
    'Wind Speed And Direction_10'
];

let Metar_11UTC = ['Temperature_11', 'Dew Point temperature_11', 'Visibility_11',
    'Wind Speed And Direction_11'
];

let Metar_12UTC = ['Temperature_12', 'Dew Point temperature_12', 'Visibility_12',
    'Wind Speed And Direction_12'
];

let Metar_13UTC = ['Temperature_13', 'Dew Point temperature_13', 'Visibility_13',
    'Wind Speed And Direction_13'
];

let Metar_14UTC = ['Temperature_14', 'Dew Point temperature_14', 'Visibility_14',
    'Wind Speed And Direction_14'
];

let Metar_15UTC = ['Temperature_15', 'Dew Point temperature_15', 'Visibility_15',
    'Wind Speed And Direction_15'
];

let Metar_16UTC = ['Temperature_16', 'Dew Point temperature_16', 'Visibility_16',
    'Wind Speed And Direction_16'
];

let Metar_17UTC = ['Temperature_17', 'Dew Point temperature_17', 'Visibility_17',
    'Wind Speed And Direction_17'
];

let Metar_18UTC = ['Temperature_18', 'Dew Point temperature_18', 'Visibility_18',
    'Wind Speed And Direction_18'
];

let Metar_19UTC = ['Temperature_19', 'Dew Point temperature_19', 'Visibility_19',
    'Wind Speed And Direction_19'
];

let Metar_20UTC = ['Temperature_20', 'Dew Point temperature_20', 'Visibility_20',
    'Wind Speed And Direction_20'
];

let Metar_21UTC = ['Temperature_21', 'Dew Point temperature_21', 'Visibility_21',
    'Wind Speed And Direction_21'
];

let Metar_22UTC = ['Temperature_22', 'Dew Point temperature_22', 'Visibility_22',
    'Wind Speed And Direction_22'
];

let Metar_23UTC = ['Temperature_23', 'Dew Point temperature_23', 'Visibility_23',
    'Wind Speed And Direction_23'
];

//metarParametersList
let subParametersList = [{
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
        name: 'Temperature_03',
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
        name: 'MID Level Shear',
        category: 'Satellite Observation'
    }, , {
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
        category: 'Sounding_00 UTC Wind'
    },
    {
        name: '1000 hpa Temp_12',
        category: 'Sounding_12 UTC Wind'
    },
    {
        name: '850 hpa Temp_12',
        category: 'Sounding_12 UTC Wind'
    },
    {
        name: '700 hpa Temp_12',
        category: 'Sounding_12 UTC Wind'
    },
    {
        name: '500 hpa Temp_12',
        category: 'Sounding_12 UTC Wind'
    },
    {
        name: '300 hpa Temp_12',
        category: 'Sounding_12 UTC Wind'
    },
    {
        name: '200 hpa Temp_12',
        category: 'Sounding_12 UTC Wind'
    },
    {
        name: '100 hpa Temp_12',
        category: 'Sounding_12 UTC Wind'
    },
    {
        name: '50 hpa Temp_12',
        category: 'Sounding_12 UTC Wind'
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
        category: 'Ship And Buoy Observation'
    },
    {
        name: '01UTC',
        category: 'Ship And Buoy Observation'
    },
    {
        name: '02UTC',
        category: 'Ship And Buoy Observation'
    },
    {
        name: '03UTC',
        category: 'Ship And Buoy Observation'
    },
    {
        name: '04UTC',
        category: 'Ship And Buoy Observation'
    },
    {
        name: '05UTC',
        category: 'Ship And Buoy Observation'
    },
    {
        name: '06UTC',
        category: 'Ship And Buoy Observation'
    },
    {
        name: '07UTC',
        category: 'Ship And Buoy Observation'
    },
    {
        name: '08UTC',
        category: 'Ship And Buoy Observation'
    },
    {
        name: '09UTC',
        category: 'Ship And Buoy Observation'
    },
    {
        name: '10UTC',
        category: 'Ship And Buoy Observation'
    },
    {
        name: '11UTC',
        category: 'Ship And Buoy Observation'
    },
    {
        name: '12UTC',
        category: 'Ship And Buoy Observation'
    },
    {
        name: '13UTC',
        category: 'Ship And Buoy Observation'
    },
    {
        name: '14UTC',
        category: 'Ship And Buoy Observation'
    },
    {
        name: '15UTC',
        category: 'Ship And Buoy Observation'
    },
    {
        name: '16UTC',
        category: 'Ship And Buoy Observation'
    },
    {
        name: '17UTC',
        category: 'Ship And Buoy Observation'
    },
    {
        name: '18UTC',
        category: 'Ship And Buoy Observation'
    },
    {
        name: '19UTC',
        category: 'Ship And Buoy Observation'
    },
    {
        name: '20UTC',
        category: 'Ship And Buoy Observation'
    },
    {
        name: '21UTC',
        category: 'Ship And Buoy Observation'
    },
    {
        name: '22UTC',
        category: 'Ship And Buoy Observation'
    },
    {
        name: '23UTC',
        category: 'Ship And Buoy Observation'
    },



];

//SynopParameters
// let synopParameters = ['Synop 00UTC', 'Synop 03UTC', 'Synop 06UTC', 'Synop 09UTC', 'Synop 12UTC',
//     'Synop 15UTC',
//     'Synop 18UTC', 'Synop 21UTC'
// ];

//SynopParametersList
let Synop_00UTC = ['Temperature_00', 'Mean Sealevel Pressure_00', 'Cloud Cover_00',
    'Geopotential Height_00',
    'Relative Humidity_00',
    'Visibility_00', 'Wind Speed And Direction_00', '3h Rainfall_00'
];

let Synop_03UTC = ['Temperature_03', 'Mean Sealevel Pressure_03', 'Cloud Cover_03',
    'Geopotential Height_03',
    'Relative Humidity_03',
    'Visibility_03', 'Wind Speed And Direction_03', '3h Rainfall_03'
];

let Synop_06UTC = ['Temperature_06', 'Mean Sealevel Pressure_06', 'Cloud Cover_06',
    'Geopotential Height_06',
    'Relative Humidity_06',
    'Visibility_06', 'Wind Speed And Direction_06', '3h Rainfall_06'
];

let Synop_09UTC = ['Temperature_09', 'Mean Sealevel Pressure_09', 'Cloud Cover_09',
    'Geopotential Height_09',
    'Relative Humidity_09',
    'Visibility_09', 'Wind Speed And Direction_09', '3h Rainfall_09'
];

let Synop_12UTC = ['Temperature_12', 'Mean Sealevel Pressure_12', 'Cloud Cover_12',
    'Geopotential Height_12',
    'Relative Humidity_12',
    'Visibility_12', 'Wind Speed And Direction_12', '3h Rainfall_12'
];

let Synop_15UTC = ['Temperature_15', 'Mean Sealevel Pressure_15', 'Cloud Cover_15',
    'Geopotential Height_15',
    'Relative Humidity_15',
    'Visibility_15', 'Wind Speed And Direction_15', '3h Rainfall_15'
];

let Synop_18UTC = ['Temperature_18', 'Mean Sealevel Pressure_18', 'Cloud Cover_18',
    'Geopotential Height_18',
    'Relative Humidity_18',
    'Visibility_18', 'Wind Speed And Direction_18', '3h Rainfall_18'
];

let Synop_21UTC = ['Temperature_21', 'Mean Sealevel Pressure_21', 'Cloud Cover_21',
    'Geopotential Height_21',
    'Relative Humidity_21',
    'Visibility_21', 'Wind Speed And Direction_21', '3h Rainfall_21'
];

let SynopParametersList = [Synop_00UTC, Synop_03UTC, Synop_06UTC, Synop_09UTC, Synop_12UTC, Synop_15UTC,
    Synop_18UTC,
    Synop_21UTC
];
//

//RadarParameters
// let radarParameters = ['Radar Products'];

//RadarParametersList
let Radar_Products = ['Radar Reflectivity', 'Radar Animation'];
//

//SatelliteParameters
let SatelliteParameters = ['Satellite Observation'];

//SatelliteParametersLists
let SatelliteObservation = ['TIR1', 'VIS', 'CTBT', 'Low Level Convergence', 'Upper Level Convergence',
    'MID Level Shear',
    'Vorticity at 200hPa', 'Vorticity at 500hPa', 'Vorticity at 700hPa', 'Vorticity at 850hPa'
];
//

//LightningParameters
let LightningParameter = ['Lightning'];

//LightningParametersLists
let LightningList = ['Last 00-05 min', 'Last 05-10 min', 'Last 10-15 min', 'ILDN Last 05 min',
    'Nowcast Alert'
];
//

//SoundingParameters
let SoundingParameters = ['Sounding_00 UTC Wind', 'Sounding_12 UTC Wind', 'Sounding_00 UTC Temp',
    'Sounding_12 UTC Temp', 'Sounding_00 UTC Dew Point', 'Sounding_12 UTC Dew Point'
];

//SoundingParametersLists
let Sounding_00UTC_Wind = ['1000 hpa Wind_00', '850 hpa Wind_00', '700 hpa Wind_00', '500 hpa Wind_00',
    '300 hpa Wind_00',
    '200 hpa Wind_00', '100 hpa Wind_00', '50 hpa Wind_00',
];

let Sounding_12UTC_Wind = ['1000 hpa Wind_12', '850 hpa Wind_12', '700 hpa Wind_12', '500 hpa Wind_12',
    '300 hpa Wind_12',
    '200 hpa Wind_12', '100 hpa Wind_12', '50 hpa Wind_12',
];

let Sounding_00UTC_Temp = ['1000 hpa Temp_00', '850 hpa Temp_00', '700 hpa Temp_00', '500 hpa Temp_00',
    '300 hpa Temp_00',
    '200 hpa Temp_00', '100 hpa Temp_00', '50 hpa Temp_00',
];

let Sounding_12UTC_Temp = ['1000 hpa Temp_12', '850 hpa Temp_12', '700 hpa Temp_12', '500 hpa Temp_12',
    '300 hpa Temp_12',
    '200 hpa Temp_12', '100 hpa Temp_12', '50 hpa Temp_12',
];

let Sounding_00UTC_DewPoint = ['1000 hpa DewPoint_00', '850 hpa DewPoint_00', '700 hpa DewPoint_00',
    '500 hpa DewPoint_00',
    '300 hpa DewPoint_00',
    '200 hpa DewPoint_00', '100 hpa DewPoint_00', '50 hpa DewPoint_00',
];

let Sounding_12UTC_DewPoint = ['1000 hpa DewPoint_12', '850 hpa DewPoint_12', '700 hpa DewPoint_12',
    '500 hpa DewPoint_12',
    '300 hpa DewPoint_12',
    '200 hpa DewPoint_12', '100 hpa DewPoint_12', '50 hpa DewPoint_12',
];

let SoundingParametersLists = [Sounding_00UTC_Wind, Sounding_12UTC_Wind, Sounding_00UTC_Temp,
    Sounding_12UTC_Temp,
    Sounding_00UTC_DewPoint, Sounding_12UTC_DewPoint
];
//

//Ship&BuoyParameters
let ShipBuoyParameters = ['Ship And Buoy Observation'];

//Ship&BuoyParametersLists
let ShipAndBuoyObservation = ['00UTC', '01UTC', '02UTC', '03UTC', '04UTC', '05UTC', '06UTC', '07UTC',
    '08UTC', '09UTC',
    '10UTC',
    '11UTC', '12UTC', '13UTC', '14UTC', '15UTC', '16UTC', '17UTC', '18UTC', '19UTC', '20UTC',
    '21UTC', '22UTC',
    '23UTC'
];
//

//ModelNames-Dropdown    MA-ModelsArray
let getModelNames = document.getElementById("modelNames");
let pushModelNames = '';
for (let MA = 0; MA < modelNamesArr.length; MA++) {
    pushModelNames += `<option class="test">${modelNamesArr[MA]}</option><br/><br/>`;
}
getModelNames.innerHTML = pushModelNames;

//secondDropdown-SD
function showParameterNames(value) {
    let getparameterNames = document.getElementById("parameterNames");
    let pushparameterNames = '';
    var SecondDropdown = Parameters.filter(x => x.category == value);
    for (let SD = 0; SD < SecondDropdown.length; SD++) {
        if (SecondDropdown[SD].name) {
            pushparameterNames += `<option>${SecondDropdown[SD].name}</option><br/><br/>`;
        }
    }
    getparameterNames.innerHTML = pushparameterNames;
    showSubParameterNames(SecondDropdown[0].name);
}


//secondDropdown-SD
function showSubParameterNames(value) {
    alert(value)
    let getsubparameterNames = document.getElementById("subparameter");
    let pushsubparameterNames = '';

    console.log(subParametersList)
    var SecondDropdown = subParametersList.filter(x => x.category == value);
    for (let SD = 0; SD < SecondDropdown.length; SD++) {
        if (SecondDropdown[SD].name) {
            pushsubparameterNames += `<option>${SecondDropdown[SD].name}</option><br/><br/>`;
        }
    }
    getsubparameterNames.innerHTML = pushsubparameterNames;
}

//DATE
function startDate() {
    // Get the date input element
    var dateInput = document.getElementById('start_date');

    // Get the selected date value
    var selectedStart_Date = dateInput.value;
    console.log('selectedStart_Date:', selectedStart_Date);
}

function endDate() {
    // Get the date input element
    var dateInput = document.getElementById('end_Date');

    // Get the selected date value
    var selectedEnd_Date = dateInput.value;
    console.log('selectedEnd_Date:', selectedEnd_Date);
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

//submitForm
function submitForm() {
    let source = document.getElementById('source');
    let parameter = document.getElementById('parameter');
    let subparameter = document.getElementById('subparameter');
    let start_date = document.getElementById('start_date');
    let end_date = document.getElementById('end_date');
    let timeInput = document.getElementById('timeInput');

    console.log('source:', source,
        'parameter:', parameter,
        'subparameter:', subparameter,
        'start_date:', start_date,
        'end_date:', end_date,
        'timeInput:', timeInput);
}
//

//toggleObservation
function toggleObservation() {
    var observationContainerFn = document.getElementById("ObservationContainer");
    observationContainerFn.classList.toggle("hidden");
}

//toggleFunction for legend
function toggleFunction() {
    var x = document.getElementById("toggleImage");
    var toggleMap = document.getElementById("map");
    if (x.style.display === "none") {
        x.style.display = "block";
        toggleMap.style.width = "95%";
    } else {
        x.style.display = "none";
        toggleMap.style.width = "130%";
    }

};

//leaflet starts here
const map = L.map('map', {
    cursor: true,
}).setView([22.79459, 80.06406], 5);

// Add the GeoJSON data to the map
_dist_geojson = "<?php echo base_url(); ?>DATA/INDIA_COUNTRY.json";
var geojson = new L.GeoJSON.AJAX(_dist_geojson, {
    color: 'black',
    weight: 1,
    style: {
        color: '#3f51b5',
        opacity: 0.5,
        fillOpacity: 0.5,
        weight: 1
    }
});

geojson.on('data:loaded', function() {
    geojson.addTo(map);
});

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


//leaflet Fullscreen
map.addControl(new L.Control.Fullscreen({
    title: {
        'false': 'View Fullscreen',
        'true': 'Exit Fullscreen'
    }
}));

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
map.addControl(L.control.styleEditor({
    position: "topleft"
}))

// drawControl starts here
const drawnItems = new L.FeatureGroup();
map.addLayer(drawnItems);

const drawControl = new L.Control.Draw({
    edit: {
        featureGroup: drawnItems
    }
});
map.addControl(drawControl);

map.on('draw:created', function(e) {
    const layer = e.layer;
    drawnItems.addLayer(layer);
});

//searchControl starts here
L.Control.geocoder({
    position: "topleft"
}).addTo(map);

//add mousePosition
L.control.mousePosition({
    position: "bottomleft"
}).addTo(map);

//add map scale
L.control.scale().addTo(map);

//
var myIcon = L.icon({
    iconUrl: 'https://icons8.com/icon/59725/airdrop',
    iconSize: [10, 10],
    iconAnchor: [3, 5],
    popupAnchor: [-3, -86],
});

// coords1 = [];
// var lightningLayer1 = " ";
// var lightningLayer1 = L.geoJson(null, {
//     pointToLayer: function(feature, latlng) {
//         return L.marker(latlng, {
//             icon: myIcon
//         });
//     },
//     onEachFeature: function(feature, layer) {
//         layer.bindPopup(' Lightning detected on ' + ' <br> ' +
//             feature.properties.Lightning_Time + ' UTC' + ' <br> ' + 'at ' +
//             feature.properties.La + 'N' + ', ' +
//             feature.properties.Lo + 'E'
//         );
//         coords2.push([feature.properties.La, feature.properties.Lo]);
//     }
// });

// coords2 = [];
// var lightningLayer2 = " ";
// var lightningLayer2 = L.geoJson(null, {
//     pointToLayer: function(feature, latlng) {
//         return L.marker(latlng, {
//             icon: myIcon
//         });
//     },
//     onEachFeature: function(feature, layer) {
//         layer.bindPopup(' Lightning detected on ' + ' <br> ' +
//             feature.properties.Lightning_Time + ' UTC' + ' <br> ' + 'at ' +
//             feature.properties.La + 'N' + ', ' +
//             feature.properties.Lo + 'E'
//         );
//         coords2.push([feature.properties.La, feature.properties.Lo]);
//     }

// });

// coords3 = [];
// var lightningLayer3 = " ";
// var lightningLayer3 = L.geoJson(null, {
//     pointToLayer: function(feature, latlng) {
//         return L.marker(latlng, {
//             icon: myIcon
//         });
//     },
//     onEachFeature: function(feature, layer) {
//         layer.bindPopup(' Lightning detected on ' + ' <br> ' +
//             feature.properties.Lightning_Time + ' UTC' + ' <br> ' + 'at ' +
//             feature.properties.La + 'N' + ', ' +
//             feature.properties.Lo + 'E'
//         );
//         coords3.push([feature.properties.La, feature.properties.Lo]);
//     }

// });

// var heat1 = L.heatLayer(coords1, {
//     minOpacity: 0.9,
//     radius: 6,
//     blur: 10,
//     maxZoom: 14,
//     max: 1.0,
//     gradient: null
// });

// var heat2 = L.heatLayer(coords2, {
//     minOpacity: 0.9,
//     radius: 6,
//     blur: 10,
//     maxZoom: 14,
//     max: 1.0,
//     gradient: null
// });

// var heat3 = L.heatLayer(coords3, {
//     minOpacity: 0.9,
//     radius: 6,
//     blur: 10,
//     maxZoom: 14,
//     max: 1.0,
//     gradient: null
// });

// delhiMarker jaipurMarker jaipurMarker

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
// var BobbiliMarker = L.marker([18.5697, 83.3666]);
// BobbiliMarker.bindPopup("<b>Bobbili</b>").openPopup();


const overLayers = [{
        group: "Lightning",
        collapsed: true,
        layers: [{
                active: false,
                name: "Last 00-05 min",
                class: "Last 00-05 min",
                layer: delhiMarker,
            },
            {
                active: false,
                name: "Last 05-10 min",
                layer: jaipurMarker,
            },
            {
                active: false,
                name: "Last 10-15 min",
                layer: bhopalMarker,
            },
        ]
    },
    {
        group: "Radar Reflectivity",
        collapsed: true,
        layers: [{
                active: false,
                name: "Radar Reflectivity",
                layer: lucknowMarker
            },
            {
                active: false,
                name: "Radar Animation",
                layer: patnaMarker
            },

        ]
    }
];

// PanelLayers collapse group
var panelLayers = new L.Control.PanelLayers(baseMaps, overLayers, {
    collapsibleGroups: true,
    collapsed: false,
    position: "topright"
});
map.addControl(panelLayers);

//SYNOP
var overLayers2 = [{
        group: "SYNOP 00UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "MEAN SEA LEVEL PRESSURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "CLOUD COVER",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "GEOPOTENTIAL HEIGHT",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "RELATIVE HUMIDITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "3h RAINFALL",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
        ]
    },
    {

        group: "SYNOP 03UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "MEAN SEA LEVEL PRESSURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "CLOUD COVER",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "GEOPOTENTIAL HEIGHT",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "RELATIVE HUMIDITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "3h RAINFALL",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
        ]
    },
    {

        group: "SYNOP 06UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "MEAN SEA LEVEL PRESSURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "CLOUD COVER",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "GEOPOTENTIAL HEIGHT",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "RELATIVE HUMIDITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "3h RAINFALL",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
        ]
    },
    {

        group: "SYNOP 09UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "MEAN SEA LEVEL PRESSURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "CLOUD COVER",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "GEOPOTENTIAL HEIGHT",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "RELATIVE HUMIDITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "3h RAINFALL",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
        ]
    },
    {

        group: "SYNOP 12UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "MEAN SEA LEVEL PRESSURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "CLOUD COVER",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "GEOPOTENTIAL HEIGHT",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "RELATIVE HUMIDITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "3h RAINFALL",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
        ]
    },
    {

        group: "SYNOP 15UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "MEAN SEA LEVEL PRESSURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "CLOUD COVER",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "GEOPOTENTIAL HEIGHT",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "RELATIVE HUMIDITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "3h RAINFALL",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
        ]
    },
    {

        group: "SYNOP 18UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "MEAN SEA LEVEL PRESSURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "CLOUD COVER",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "GEOPOTENTIAL HEIGHT",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "RELATIVE HUMIDITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "3h RAINFALL",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
        ]
    },
    {

        group: "SYNOP 21UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "MEAN SEA LEVEL PRESSURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "CLOUD COVER",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "GEOPOTENTIAL HEIGHT",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "RELATIVE HUMIDITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "3h RAINFALL",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
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
                name: "TEMPERATURE",
                layer: SuratMarker
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: JodhpurMarker
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: KanpurMarker
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: MeerutMarker
            },

        ]
    },
    {

        group: "METAR 01UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {

        group: "METAR 02UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {

        group: "METAR 03UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },

    {

        group: "METAR 04UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {

        group: "METAR 05UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {

        group: "METAR 06UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {

        group: "METAR 07UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {

        group: "METAR 08UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {

        group: "METAR 09UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {

        group: "METAR 10UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {

        group: "METAR 11UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {

        group: "METAR 12UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {

        group: "METAR 13UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {

        group: "METAR 14UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {

        group: "METAR 15UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {

        group: "METAR 16UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {

        group: "METAR 17UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {

        group: "METAR 18UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {

        group: "METAR 19UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {

        group: "METAR 20UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {

        group: "METAR 21UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {

        group: "METAR 22UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {

        group: "METAR 23UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
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
                name: "Next 03 Hrs",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "Next 03-06 Hrs",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
        ]
    },


    {
        group: "WRF lightning Product",
        collapsed: true,
        layers: [{
                active: false,
                name: "Next 03Hrs",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "Next 03-06 Hrs",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
        ]
    },

    {
        group: "WRF Accumlated Rainfall",
        collapsed: true,
        layers: [{
                active: false,
                name: "Next 03 Hrs",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "Next 03-06 Hrs",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
        ]
    },


    {
        group: "lightning Potential index",
        collapsed: true,
        layers: [{
                active: false,
                name: "Next 01 Hrs",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "Next 01-02 Hrs",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "Next 02-03 Hrs",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
        ]
    },


    {
        group: "NCUMR lightning Product",
        collapsed: true,
        layers: [{
                active: false,
                name: "Next 03 Hrs",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "Next 03-06 Hrs",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
        ]
    },

    {
        group: "NCUMR Wind Gust",
        collapsed: true,
        layers: [{
                active: false,
                name: "Next 03 Hrs",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "Next 03-06 Hrs",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
        ]
    },


    {
        group: "NCUMR Rainfall",
        collapsed: true,
        layers: [{
                active: false,
                name: "Next 03 Hrs",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "Next 03-06 Hrs",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
        ]
    },


    {
        group: "HRRR_SP Hourly DBZ",
        collapsed: true,
        layers: [{
                active: false,
                name: "Next 01 Hrs",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "Next 01-02 Hrs",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "Next 02-03 Hrs",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
        ]
    },
    {
        group: "HRRR_NE Hourly DBZ",
        collapsed: true,
        layers: [{
                active: false,
                name: "Next 01 Hrs",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "Next 01-02 Hrs",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "Next 02-03 Hrs",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
        ]
    },
    {
        group: "HRRR_NW Hourly DBZ",
        collapsed: true,
        layers: [{
                active: false,
                name: "Next 01 Hrs",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "Next 01-02 Hrs",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "Next 02-03 Hrs",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
        ]
    },
    {
        group: "EWRF MaxZ",
        collapsed: true,
        layers: [{
                active: false,
                name: "Next 01 Hrs",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "Next 01-02 Hrs",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "Next 02-03 Hrs",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
        ]
    },
    {
        group: "EWRF Lightning",
        collapsed: true,
        layers: [{
                active: false,
                name: "Next 01 Hrs",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "Next 01-02 Hrs",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "Next 02-03 Hrs",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
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
                name: "GFS DAY1",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "NCUM DAY1",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "NEPS DAY1",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WRF DAY1",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "GEFS DAY1",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "ECMWF DAY1",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {
        group: "Rainfall Intensity Day2",
        collapsed: true,
        layers: [{
                active: false,
                name: "GFS DAY2",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "NCUM DAY2",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "NEPS DAY2",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WRF DAY2",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "GEFS DAY2",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "ECMWF DAY2",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {
        group: "Rainfall Intensity Day3",
        collapsed: true,
        layers: [{
                active: false,
                name: "GFS DAY3",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "NCUM DAY3",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "NEPS DAY3",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WRF DAY3",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "GEFS DAY3",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "ECMWF DAY3",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {
        group: "Rainfall Intensity Day4",
        collapsed: true,
        layers: [{
                active: false,
                name: "GFS DAY4",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "NCUM DAY4",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "NEPS DAY4",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

            {
                active: false,
                name: "GEFS DAY4",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "ECMWF DAY4",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {
        group: "Rainfall Intensity Day5",
        collapsed: true,
        layers: [{
                active: false,
                name: "GFS DAY5",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "NCUM DAY5",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "NEPS DAY5",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

            {
                active: false,
                name: "GEFS DAY5",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "ECMWF DAY5",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {
        group: "MSLP Day1",
        collapsed: true,
        layers: [{
                active: false,
                name: "GFS DAY1",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "NCUM DAY1",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "NEPS DAY1",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WRF DAY1",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "GEFS DAY1",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {
        group: "MSLP Day2",
        collapsed: true,
        layers: [{
                active: false,
                name: "GFS DAY2",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "NCUM DAY2",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "NEPS DAY2",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WRF DAY2",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "GEFS DAY2",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {
        group: "MSLP Day3",
        collapsed: true,
        layers: [{
                active: false,
                name: "GFS DAY3",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "NCUM DAY3",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "NEPS DAY3",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WRF DAY3",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "GEFS DAY3",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {
        group: "MSLP Day4",
        collapsed: true,
        layers: [{
                active: false,
                name: "GFS DAY4",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "NCUM DAY4",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "NEPS DAY4",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

            {
                active: false,
                name: "GEFS DAY4",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {
        group: "MSLP Day5",
        collapsed: true,
        layers: [{
                active: false,
                name: "GFS DAY5",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "NCUM DAY5",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "NEPS DAY5",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

            {
                active: false,
                name: "GEFS DAY5",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {
        group: "10m WIND Day 1",
        collapsed: true,
        layers: [{
                active: false,
                name: "GFS DAY1",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "NCUM DAY1",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "NEPS DAY1",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WRF DAY1",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "GEFS DAY1",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {
        group: "10m WIND Day 2",
        collapsed: true,
        layers: [{
                active: false,
                name: "GFS DAY2",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "NCUM DAY2",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "NEPS DAY2",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WRF DAY2",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "GEFS DAY2",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {
        group: "10m WIND Day 3",
        collapsed: true,
        layers: [{
                active: false,
                name: "GFS DAY3",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "NCUM DAY3",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "NEPS DAY3",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "WRF DAY3",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "GEFS DAY3",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {
        group: "10m WIND Day 4",
        collapsed: true,
        layers: [{
                active: false,
                name: "GFS DAY4",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "NCUM DAY4",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "NEPS DAY4",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

            {
                active: false,
                name: "GEFS DAY4",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {
        group: "10m WIND Day 5",
        collapsed: true,
        layers: [{
                active: false,
                name: "GFS DAY5",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "NCUM DAY5",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "NEPS DAY5",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

            {
                active: false,
                name: "GEFS DAY5",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
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
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VIS",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "CTBT",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "LOW LEVEL CONVERGENCE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "UPPER LEVEL DIVEGENCE",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "MID LEVEL SHEAR",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VORTICITY AT 200hPa",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VORTICITY AT 500hPa",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VORTICITY AT 700hPa",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "VORTICITY AT 850hPa",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
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
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "Radar Animation",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },

];

//Lightning
var overLayers8 = [{
        group: "Lightning",
        collapsed: false,
        layers: [

            {
                active: false,
                name: "Last 00-05 min",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "Last 05-10 min",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "Last 10-15 min",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "ILDN Last 05 min",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "Nowcast Alerts",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
        ]
    },

];

//SOUNDING
var overLayers9 = [{
        group: "SOUNDING_00_UTC WIND",
        collapsed: true,
        layers: [{
                active: false,
                name: "1000 hpa WIND",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "850 hpa WIND",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "700 hpa WIND",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "500 hpa WIND",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "300 hpa WIND",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "200 hpa WIND",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "100 hpa WIND",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "50 hpa WIND",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {
        group: "SOUNDING_12_UTC WIND",
        collapsed: true,
        layers: [{
                active: false,
                name: "1000 hpa WIND",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "850 hpa WIND",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "700 hpa WIND",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "500 hpa WIND",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "300 hpa WIND",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "200 hpa WIND",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "100 hpa WIND",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "50 hpa WIND",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },

        ]
    },
    {
        group: "SOUNDING_00UTC TEMP",
        collapsed: true,
        layers: [

            {
                active: false,
                name: "1000 hpa TEMP",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "850 hpa TEMP",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "700 hpa TEMP",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "500 hpa TEMP",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "300 hpa TEMP",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "200 hpa TEMP",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "100 hpa TEMP",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "50 hpa TEMP",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
        ]
    },
    {
        group: "SOUNDING_12UTC TEMP",
        collapsed: true,
        layers: [

            {
                active: false,
                name: "1000 hpa TEMP",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "850 hpa TEMP",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "700 hpa TEMP",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "500 hpa TEMP",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "300 hpa TEMP",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "200 hpa TEMP",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "100 hpa TEMP",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "50 hpa TEMP",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
        ]
    },
    {
        group: "SOUNDING_00UTC DEW POINT",
        collapsed: true,
        layers: [

            {
                active: false,
                name: "1000 hpa DEW POINT",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "850 hpa DEW POINT",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "700 hpa DEW POINT",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "500 hpa DEW POINT",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "300 hpa DEW POINT",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "200 hpa DEW POINT",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "100 hpa DEW POINT",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "50 hpa DEW POINT",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
        ]
    },
    {
        group: "SOUNDING_12UTC DEW POINT",
        collapsed: true,
        layers: [

            {
                active: false,
                name: "1000 hpa DEW POINT",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "850 hpa DEW POINT",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "700 hpa DEW POINT",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "500 hpa DEW POINT",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "300 hpa DEW POINT",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "200 hpa DEW POINT",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "100 hpa DEW POINT",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
            {
                active: false,
                name: "50 hpa DEW POINT",
                layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
            },
        ]
    },


];

//Exposure 
var overLayers10 = [{
    group: "Exposure Layers",
    collapsed: true,
    layers: [{
            active: false,
            name: "District Boundaries",
            layer: PuneMarker
        },
        {
            active: false,
            name: "Airport",
            layer: MumbaiMarker
        },
        {
            active: false,
            name: "Oil Refineries",
            layer: RanchiMarker
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
            layer: BidarMarker
        },
        {
            active: false,
            name: "Hospital",
            layer: BidarMarker
        },
        {
            active: false,
            name: "Industrail",
            layer: BidarMarker
        },

        {
            active: false,
            name: "sports",
            layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
        },
        {
            active: false,
            name: "Road Network",
            layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
        },
        {
            active: false,
            name: "Socio Economic Zone",
            layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
        },


        {
            active: false,
            name: "Railway Network",
            layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
        },
        {
            active: false,
            name: "LULC",
            layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
        },


    ]
}, ];

//SHIP AND BUOY
var overLayers11 = [{
    group: "SHIP AND BUOY OBSERVATION",
    collapsed: false,
    layers: [{
            active: false,
            name: "00UTC",
            layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
        },
        {
            active: false,
            name: "01UTC",
            layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
        },
        {
            active: false,
            name: "02UTC",
            layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
        },
        {
            active: false,
            name: "03UTC",
            layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
        },
        {
            active: false,
            name: "04UTC",
            layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
        },
        {
            active: false,
            name: "05UTC",
            layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
        },
        {
            active: false,
            name: "06UTC",
            layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
        },
        {
            active: false,
            name: "07UTC",
            layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
        },
        {
            active: false,
            name: "08UTC",
            layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
        },
        {
            active: false,
            name: "09UTC",
            layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
        },
        {
            active: false,
            name: "10UTC",
            layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
        },
        {
            active: false,
            name: "11UTC",
            layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
        },
        {
            active: false,
            name: "12UTC",
            layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
        },
        {
            active: false,
            name: "13UTC",
            layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
        },
        {
            active: false,
            name: "14UTC",
            layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
        },
        {
            active: false,
            name: "15UTC",
            layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
        },
        {
            active: false,
            name: "16UTC",
            layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
        },
        {
            active: false,
            name: "17UTC",
            layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
        },
        {
            active: false,
            name: "18UTC",
            layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
        },
        {
            active: false,
            name: "19UTC",
            layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
        },
        {
            active: false,
            name: "20UTC",
            layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
        },
        {
            active: false,
            name: "21UTC",
            layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
        },
        {
            active: false,
            name: "22UTC",
            layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
        },
        {
            active: false,
            name: "23UTC",
            layer: L.tileLayer('https://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
        },
    ]
}, ];


var panelLayers2 = new L.Control.PanelLayers(baseMaps, overLayers2, {
    collapsibleGroups: true,
    // collapsed: true
});

var panelLayers3 = new L.Control.PanelLayers(baseMaps, overLayers3, {
    collapsibleGroups: true
});

var panelLayers4 = new L.Control.PanelLayers(baseMaps, overLayers4, {
    collapsibleGroups: true
});
var panelLayers5 = new L.Control.PanelLayers(baseMaps, overLayers5, {
    collapsibleGroups: true
});
var panelLayers6 = new L.Control.PanelLayers(baseMaps, overLayers6, {
    collapsibleGroups: true
});
var panelLayers7 = new L.Control.PanelLayers(baseMaps, overLayers7, {
    collapsibleGroups: true
});
var panelLayers8 = new L.Control.PanelLayers(baseMaps, overLayers8, {
    collapsibleGroups: true
});
var panelLayers9 = new L.Control.PanelLayers(baseMaps, overLayers9, {
    collapsibleGroups: true
});
var panelLayers10 = new L.Control.PanelLayers(baseMaps, overLayers10, {
    collapsibleGroups: true,
    // collapsed: true
    //exposure
});
var panelLayers11 = new L.Control.PanelLayers(baseMaps, overLayers11, {
    collapsibleGroups: true
});

const legendImage1 = document.getElementById('legendModel1');
const legendImage2 = document.getElementById('legendModel2');
const legendModelExpo = document.getElementById('legendModelExposure');
const legendModelMet = document.getElementById('legendModelMetar');


// synop
function clickHandler_synop(event_synop) {
    const targetElement_synop = event_synop.target;
    const currentColorsynop = targetElement_synop.style.backgroundColor;

    if (event_synop.target && event_synop.target.id == "synop") {
        if (currentColorsynop === 'rgb(245, 222, 179)') { // highlighted color
            targetElement_synop.style.backgroundColor = 'rgb(240, 240, 240)'; // Reset to default color
            map.addControl(panelLayers);
            map.removeControl(panelLayers2);
            map.removeControl(panelLayers3);
            map.removeControl(panelLayers4);
            map.removeControl(panelLayers5);
            map.removeControl(panelLayers6);
            map.removeControl(panelLayers7);
            map.removeControl(panelLayers8);
            map.removeControl(panelLayers9);
            map.removeControl(panelLayers11);
            map.removeControl(panelLayers10);
            legend1.src =
                'http://103.215.208.18/dwr_img/GIS/legend/model_nowcast.png';
            legend2.src =
                'http://103.215.208.18/dwr_img/GIS/legend/hrrr_final.png';
        } else {
            targetElement_synop.style.backgroundColor = 'rgb(245, 222, 179)'; // highlighted color
            map.removeControl(panelLayers);
            map.removeControl(panelLayers3);
            map.removeControl(panelLayers4);
            map.removeControl(panelLayers5);
            map.removeControl(panelLayers6);
            map.removeControl(panelLayers7);
            map.removeControl(panelLayers8);
            map.removeControl(panelLayers9);
            map.removeControl(panelLayers10);
            map.removeControl(panelLayers11);
            map.addControl(panelLayers2);
            legend1.src =
                'http://103.215.208.18/dwr_img/GIS/synop_nowcast.jpg';
            legend2.src =
                'http://103.215.208.18/dwr_img/GIS/legend/synop_time.png';
        }

    }
    console.log(event_synop.target.id);
}
document.getElementById("parent").addEventListener("click", clickHandler_synop);

//metar
function clickHandler_metar(event_metar) {
    const targetElement_metar = event_metar.target;
    const currentColormetar = targetElement_metar.style.backgroundColor;

    if (event_metar.target && event_metar.target.id == "metar") {
        if (currentColormetar === 'rgb(245, 222, 179)') { // highlighted color
            targetElement_metar.style.backgroundColor = 'rgb(240, 240, 240)'; // Reset to default color
            map.addControl(panelLayers);
            map.removeControl(panelLayers2);
            map.removeControl(panelLayers3);
            map.removeControl(panelLayers4);
            map.removeControl(panelLayers5);
            map.removeControl(panelLayers6);
            map.removeControl(panelLayers7);
            map.removeControl(panelLayers8);
            map.removeControl(panelLayers9);
            map.removeControl(panelLayers11);
            map.removeControl(panelLayers10);
            legend1.src =
                'http://103.215.208.18/dwr_img/GIS/legend/model_nowcast.png';
            legend2.src =
                'http://103.215.208.18/dwr_img/GIS/legend/hrrr_final.png';
        } else {
            targetElement_metar.style.backgroundColor = 'rgb(245, 222, 179)'; // highlighted color
            map.removeControl(panelLayers);
            map.removeControl(panelLayers2);
            map.removeControl(panelLayers4);
            map.removeControl(panelLayers5);
            map.removeControl(panelLayers6);
            map.removeControl(panelLayers7);
            map.removeControl(panelLayers8);
            map.removeControl(panelLayers9);
            map.removeControl(panelLayers10);
            map.removeControl(panelLayers11);
            map.addControl(panelLayers3);
            legend1.src =
                'http://103.215.208.18/dwr_img/GIS/metar_nowcast.jpg';
            legend2.src =
                'http://103.215.208.18/dwr_img/GIS/legend/mmetar_time.png';
        }

    }
    console.log(event_metar.target.id);
}
document.getElementById("parent").addEventListener("click", clickHandler_metar);

//mesolscale
function clickHandler_mesolscale(event_mesolscale) {
    const targetElement_mesolscale = event_mesolscale.target;
    const currentColormesolscale = targetElement_mesolscale.style.backgroundColor;

    if (event_mesolscale.target && event_mesolscale.target.id == "mesolscale") {
        if (currentColormesolscale === 'rgb(245, 222, 179)') { // highlighted color
            targetElement_mesolscale.style.backgroundColor =
                'rgb(240, 240, 240)'; // Reset to default color
            map.addControl(panelLayers);
            map.removeControl(panelLayers2);
            map.removeControl(panelLayers3);
            map.removeControl(panelLayers4);
            map.removeControl(panelLayers5);
            map.removeControl(panelLayers6);
            map.removeControl(panelLayers7);
            map.removeControl(panelLayers8);
            map.removeControl(panelLayers9);
            map.removeControl(panelLayers11);
            map.removeControl(panelLayers10);
            legend1.src =
                'http://103.215.208.18/dwr_img/GIS/legend/model_nowcast.png';
            legend2.src =
                'http://103.215.208.18/dwr_img/GIS/legend/hrrr_final.png';
        } else {
            targetElement_mesolscale.style.backgroundColor = 'rgb(245, 222, 179)'; // highlighted color
            map.removeControl(panelLayers);
            map.removeControl(panelLayers2);
            map.removeControl(panelLayers3);
            map.removeControl(panelLayers5);
            map.removeControl(panelLayers6);
            map.removeControl(panelLayers7);
            map.removeControl(panelLayers8);
            map.removeControl(panelLayers9);
            map.removeControl(panelLayers10);
            map.removeControl(panelLayers11);
            map.addControl(panelLayers4);
            // legendImage1.src =
            //     'http://103.215.208.18/dwr_img/GIS/legend/model_nowcast.png';
            // legendImage2.src =
            //     'http://103.215.208.18/dwr_img/GIS/legend/hrrr_final.png';
        }

    }
    console.log(event_mesolscale.target.id);
}
document.getElementById("parent").addEventListener("click", clickHandler_mesolscale);

//medium_range
function clickHandler_medium(event_medium) {
    const targetElement_medium = event_medium.target;
    const currentColormedium = targetElement_medium.style.backgroundColor;

    if (event_medium.target && event_medium.target.id == "medium_range") {
        if (currentColormedium === 'rgb(245, 222, 179)') { // highlighted color
            targetElement_medium.style.backgroundColor = 'rgb(240, 240, 240)'; // Reset to default color
            map.addControl(panelLayers);
            map.removeControl(panelLayers2);
            map.removeControl(panelLayers3);
            map.removeControl(panelLayers4);
            map.removeControl(panelLayers5);
            map.removeControl(panelLayers6);
            map.removeControl(panelLayers7);
            map.removeControl(panelLayers8);
            map.removeControl(panelLayers9);
            map.removeControl(panelLayers11);
            map.removeControl(panelLayers10);
            legend1.src =
                'http://103.215.208.18/dwr_img/GIS/legend/model_nowcast.png';
            legend2.src =
                'http://103.215.208.18/dwr_img/GIS/legend/hrrr_final.png';
        } else {
            targetElement_medium.style.backgroundColor = 'rgb(245, 222, 179)'; // highlighted color
            map.removeControl(panelLayers);
            map.removeControl(panelLayers2);
            map.removeControl(panelLayers3);
            map.removeControl(panelLayers4);
            map.removeControl(panelLayers6);
            map.removeControl(panelLayers7);
            map.removeControl(panelLayers8);
            map.removeControl(panelLayers9);
            map.removeControl(panelLayers10);
            map.removeControl(panelLayers11);
            map.addControl(panelLayers5);
            legend1.src =
                'http://103.215.208.18/dwr_img/GIS/legend/model_123.png';
            legend2.src =
                'http://103.215.208.18/dwr_img/GIS/legend/date11_mslp.png';
        }

    }
    console.log(event_medium.target.id);
}
document.getElementById("parent").addEventListener("click", clickHandler_medium);

//satellite
function clickHandler_satellite(event_satellite) {
    const targetElement_satellite = event_satellite.target;
    const currentColorsatellite = targetElement_satellite.style.backgroundColor;

    if (event_satellite.target && event_satellite.target.id == "satellite") {
        if (currentColorsatellite === 'rgb(245, 222, 179)') { // highlighted color
            targetElement_satellite.style.backgroundColor =
                'rgb(240, 240, 240)'; // Reset to default color
            map.addControl(panelLayers);
            map.removeControl(panelLayers2);
            map.removeControl(panelLayers3);
            map.removeControl(panelLayers4);
            map.removeControl(panelLayers5);
            map.removeControl(panelLayers6);
            map.removeControl(panelLayers7);
            map.removeControl(panelLayers8);
            map.removeControl(panelLayers9);
            map.removeControl(panelLayers11);
            map.removeControl(panelLayers10);
            legend1.src =
                'http://103.215.208.18/dwr_img/GIS/legend/model_nowcast.png';
            legend2.src =
                'http://103.215.208.18/dwr_img/GIS/legend/hrrr_final.png';
        } else {
            targetElement_satellite.style.backgroundColor = 'rgb(245, 222, 179)'; // highlighted color
            map.removeControl(panelLayers);
            map.removeControl(panelLayers2);
            map.removeControl(panelLayers3);
            map.removeControl(panelLayers4);
            map.removeControl(panelLayers5);
            map.removeControl(panelLayers7);
            map.removeControl(panelLayers8);
            map.removeControl(panelLayers9);
            map.removeControl(panelLayers10);
            map.removeControl(panelLayers11);
            map.addControl(panelLayers6);
            legend1.src =
                'http://103.215.208.18/dwr_img/GIS/legend/sat_nowcast.png';
            legend2.src =
                'http://103.215.208.18/dwr_img/GIS/legend/insat_windtime.png';
        }

    }
    console.log(event_satellite.target.id);
}
document.getElementById("parent").addEventListener("click", clickHandler_satellite);

// radar
function clickHandler_radar(event_radar) {
    const targetElement_radar = event_radar.target;
    const currentColorradar = targetElement_radar.style.backgroundColor;

    if (event_radar.target && event_radar.target.id == "radar") {
        if (currentColorradar === 'rgb(245, 222, 179)') { // highlighted color
            targetElement_radar.style.backgroundColor = 'rgb(240, 240, 240)'; // Reset to default color
            map.addControl(panelLayers);
            map.removeControl(panelLayers2);
            map.removeControl(panelLayers3);
            map.removeControl(panelLayers4);
            map.removeControl(panelLayers5);
            map.removeControl(panelLayers6);
            map.removeControl(panelLayers7);
            map.removeControl(panelLayers8);
            map.removeControl(panelLayers9);
            map.removeControl(panelLayers11);
            map.removeControl(panelLayers10);
            legend1.src =
                'http://103.215.208.18/dwr_img/GIS/legend/model_nowcast.png';
            legend2.src =
                'http://103.215.208.18/dwr_img/GIS/legend/hrrr_final.png';
        } else {
            targetElement_radar.style.backgroundColor = 'rgb(245, 222, 179)'; // highlighted color
            map.removeControl(panelLayers);
            map.removeControl(panelLayers2);
            map.removeControl(panelLayers3);
            map.removeControl(panelLayers4);
            map.removeControl(panelLayers5);
            map.removeControl(panelLayers6);
            map.removeControl(panelLayers8);
            map.removeControl(panelLayers9);
            map.removeControl(panelLayers10);
            map.removeControl(panelLayers11);
            map.addControl(panelLayers7);
            legend1.src =
                'http://103.215.208.18/dwr_img/GIS/radar_nowcast.jpg';
            legend2.src =
                'http://103.215.208.18/dwr_img/GIS/legend/hrrr_final.png';
        }

    }
    console.log(event_radar.target.id);
}
document.getElementById("parent").addEventListener("click", clickHandler_radar);

//lightning
function clickHandler_lightning(event_lightning) {
    const targetElement_lightning = event_lightning.target;
    const currentColorlightning = targetElement_lightning.style.backgroundColor;

    if (event_lightning.target && event_lightning.target.id == "lightning") {
        if (currentColorlightning === 'rgb(245, 222, 179)') { // highlighted color
            targetElement_lightning.style.backgroundColor =
                'rgb(240, 240, 240)'; // Reset to default color
            map.addControl(panelLayers);
            map.removeControl(panelLayers2);
            map.removeControl(panelLayers3);
            map.removeControl(panelLayers4);
            map.removeControl(panelLayers5);
            map.removeControl(panelLayers6);
            map.removeControl(panelLayers7);
            map.removeControl(panelLayers8);
            map.removeControl(panelLayers9);
            map.removeControl(panelLayers11);
            map.removeControl(panelLayers10);
            legend1.src =
                'http://103.215.208.18/dwr_img/GIS/legend/model_nowcast.png';
            legend2.src =
                'http://103.215.208.18/dwr_img/GIS/legend/hrrr_final.png';
        } else {
            targetElement_lightning.style.backgroundColor = 'rgb(245, 222, 179)'; // highlighted color
            map.removeControl(panelLayers);
            map.removeControl(panelLayers2);
            map.removeControl(panelLayers3);
            map.removeControl(panelLayers4);
            map.removeControl(panelLayers5);
            map.removeControl(panelLayers6);
            map.removeControl(panelLayers7);
            map.removeControl(panelLayers9);
            map.removeControl(panelLayers10);
            map.removeControl(panelLayers11);
            map.addControl(panelLayers8);
            legend1.src =
                'http://103.215.208.18/dwr_img/GIS/light_nowcast.jpg';
            legend2.src =
                'http://103.215.208.18/dwr_img/GIS/legend/light_time.png';
        }

    }
    console.log(event_lightning.target.id);
}
document.getElementById("parent").addEventListener("click", clickHandler_lightning);

//sounding
function clickHandler_sounding(event_sounding) {
    const targetElement_sounding = event_sounding.target;
    const currentColorsounding = targetElement_sounding.style.backgroundColor;

    if (event_sounding.target && event_sounding.target.id == "sounding") {
        if (currentColorsounding === 'rgb(245, 222, 179)') { // highlighted color
            targetElement_sounding.style.backgroundColor =
                'rgb(240, 240, 240)'; // Reset to default color
            map.addControl(panelLayers);
            map.removeControl(panelLayers2);
            map.removeControl(panelLayers3);
            map.removeControl(panelLayers4);
            map.removeControl(panelLayers5);
            map.removeControl(panelLayers6);
            map.removeControl(panelLayers7);
            map.removeControl(panelLayers8);
            map.removeControl(panelLayers9);
            map.removeControl(panelLayers11);
            map.removeControl(panelLayers10);
            legend1.src =
                'http://103.215.208.18/dwr_img/GIS/legend/model_nowcast.png';
            legend2.src =
                'http://103.215.208.18/dwr_img/GIS/legend/hrrr_final.png';
        } else {
            targetElement_sounding.style.backgroundColor = 'rgb(245, 222, 179)'; // highlighted color
            map.removeControl(panelLayers);
            map.removeControl(panelLayers2);
            map.removeControl(panelLayers3);
            map.removeControl(panelLayers4);
            map.removeControl(panelLayers5);
            map.removeControl(panelLayers6);
            map.removeControl(panelLayers7);
            map.removeControl(panelLayers8);
            map.removeControl(panelLayers10);
            map.removeControl(panelLayers11);
            map.addControl(panelLayers9);
            legend1.src =
                'http://103.215.208.18/dwr_img/GIS/sounding_nowcast.jpg';
            legend2.src =
                'http://103.215.208.18/dwr_img/GIS/legend/temp12_time.png';
        }

    }
    console.log(event_sounding.target.id);
}
document.getElementById("parent").addEventListener("click", clickHandler_sounding);

// exposure
function clickHandler_expo(event_expo) {
    const targetElement_expo = event_expo.target;
    const currentColorexpo = targetElement_expo.style.backgroundColor;

    if (event_expo.target && event_expo.target.id == "exposure") {
        if (currentColorexpo === 'rgb(245, 222, 179)') { // highlighted color
            targetElement_expo.style.backgroundColor = 'rgb(240, 240, 240)'; // Reset to default color
            map.addControl(panelLayers);
            map.removeControl(panelLayers2);
            map.removeControl(panelLayers3);
            map.removeControl(panelLayers4);
            map.removeControl(panelLayers5);
            map.removeControl(panelLayers6);
            map.removeControl(panelLayers7);
            map.removeControl(panelLayers8);
            map.removeControl(panelLayers9);
            map.removeControl(panelLayers11);
            map.removeControl(panelLayers10);
            legend1.src =
                'http://103.215.208.18/dwr_img/GIS/legend/model_nowcast.png';
            legend2.src =
                'http://103.215.208.18/dwr_img/GIS/legend/hrrr_final.png';
        } else {
            targetElement_expo.style.backgroundColor = 'rgb(245, 222, 179)'; // highlighted color
            map.removeControl(panelLayers);
            map.removeControl(panelLayers2);
            map.removeControl(panelLayers3);
            map.removeControl(panelLayers4);
            map.removeControl(panelLayers5);
            map.removeControl(panelLayers6);
            map.removeControl(panelLayers7);
            map.removeControl(panelLayers8);
            map.removeControl(panelLayers9);
            map.removeControl(panelLayers11);
            map.addControl(panelLayers10);
            legend1.src =
                'http://103.215.208.18/dwr_img/GIS/legend/exp_legend2.PNG';
            legend2.src =
                'http://103.215.208.18/dwr_img/GIS/legend/ddate.png';
        }

    }
    // console.log(event_expo.target.id);
}

document.getElementById("parent").addEventListener("click", clickHandler_expo);

//ship_and_buoy
function clickHandler_ship(event_ship) {
    const targetElement_ship = event_ship.target;
    const currentColorship = targetElement_ship.style.backgroundColor;

    if (event_ship.target && event_ship.target.id == "ship_and_buoy") {
        if (currentColorship === 'rgb(245, 222, 179)') { // highlighted color
            targetElement_ship.style.backgroundColor = 'rgb(240, 240, 240)'; // Reset to default color
            map.addControl(panelLayers);
            map.removeControl(panelLayers2);
            map.removeControl(panelLayers3);
            map.removeControl(panelLayers4);
            map.removeControl(panelLayers5);
            map.removeControl(panelLayers6);
            map.removeControl(panelLayers7);
            map.removeControl(panelLayers8);
            map.removeControl(panelLayers9);
            map.removeControl(panelLayers11);
            map.removeControl(panelLayers10);
            legend1.src =
                'http://103.215.208.18/dwr_img/GIS/legend/model_nowcast.png';
            legend2.src =
                'http://103.215.208.18/dwr_img/GIS/legend/hrrr_final.png';
        } else {
            targetElement_ship.style.backgroundColor = 'rgb(245, 222, 179)'; // highlighted color
            map.removeControl(panelLayers);
            map.removeControl(panelLayers2);
            map.removeControl(panelLayers3);
            map.removeControl(panelLayers4);
            map.removeControl(panelLayers5);
            map.removeControl(panelLayers6);
            map.removeControl(panelLayers7);
            map.removeControl(panelLayers8);
            map.removeControl(panelLayers9);
            map.removeControl(panelLayers10);
            map.addControl(panelLayers11);
            legend1.src =
                'http://103.215.208.18/dwr_img/GIS/legend/exp_legend2.PNG';
            legend2.src =
                'http://103.215.208.18/dwr_img/GIS/legend/ship_time.png';
        }

    }
}

document.getElementById("parent").addEventListener("click", clickHandler_ship);
//


// model popup
let model = document.querySelector('.model');
let modelBody = document.querySelector('.model-body');
let closeModel = document.querySelector('.model-body legend');
//
let panelLayerLightningTitle = document.querySelector('#panelLayer-Lightning-Title')
let panelLayerLightninglists = document.querySelector('#panelLayer-Lightning-lists')
//
let panelLayerRadarTitle = document.querySelector('#panelLayer-radar-Title')
let panelLayerRadarlists = document.querySelector('#panelLayer-radar-lists')

//EXPOSURE
let panelLayerExposureTitle = document.querySelector('#exposure-layers-Title')
let panelLayerExposureLists = document.querySelector('#exposure-layers-lists')
//

//METAR-METAR01UTC
let panelLayerMETAR00UTC_Title = document.querySelector('#METAR00UTC-Title')
let panelLayerMETAR00UTC_lists = document.querySelector('#METAR00UTC-lists')
//METAR01UTC
let panelLayerMETAR01UTC_Title = document.querySelector('#METAR01UTC-Title')
let panelLayerMETAR01UTC_lists = document.querySelector('#METAR01UTC-lists')
//METAR02UTC
let panelLayerMETAR02UTC_Title = document.querySelector('#METAR02UTC-Title')
let panelLayerMETAR02UTC_lists = document.querySelector('#METAR02UTC-lists')
//METAR03UTC
let panelLayerMETAR03UTC_Title = document.querySelector('#METAR03UTC-Title')
let panelLayerMETAR03UTC_lists = document.querySelector('#METAR03UTC-lists')
//METAR04UTC
let panelLayerMETAR04UTC_Title = document.querySelector('#METAR04UTC-Title')
let panelLayerMETAR04UTC_lists = document.querySelector('#METAR04UTC-lists')
//METAR05UTC
let panelLayerMETAR05UTC_Title = document.querySelector('#METAR05UTC-Title')
let panelLayerMETAR05UTC_lists = document.querySelector('#METAR05UTC-lists')

let panelLayerMETAR06UTC_Title = document.querySelector('#METAR06UTC-Title')
let panelLayerMETAR06UTC_lists = document.querySelector('#METAR06UTC-lists')

let panelLayerMETAR07UTC_Title = document.querySelector('#METAR07UTC-Title')
let panelLayerMETAR07UTC_lists = document.querySelector('#METAR07UTC-lists')

let panelLayerMETAR08UTC_Title = document.querySelector('#METAR08UTC-Title')
let panelLayerMETAR08UTC_lists = document.querySelector('#METAR08UTC-lists')

let panelLayerMETAR09UTC_Title = document.querySelector('#METAR09UTC-Title')
let panelLayerMETAR09UTC_lists = document.querySelector('#METAR09UTC-lists')

let panelLayerMETAR10UTC_Title = document.querySelector('#METAR10UTC-Title')
let panelLayerMETAR10UTC_lists = document.querySelector('#METAR10UTC-lists')

let panelLayerMETAR11UTC_Title = document.querySelector('#METAR11UTC-Title')
let panelLayerMETAR11UTC_lists = document.querySelector('#METAR11UTC-lists')

let panelLayerMETAR12UTC_Title = document.querySelector('#METAR12UTC-Title')
let panelLayerMETAR12UTC_lists = document.querySelector('#METAR12UTC-lists')

let panelLayerMETAR13UTC_Title = document.querySelector('#METAR13UTC-Title')
let panelLayerMETAR13UTC_lists = document.querySelector('#METAR13UTC-lists')

let panelLayerMETAR14UTC_Title = document.querySelector('#METAR14UTC-Title')
let panelLayerMETAR14UTC_lists = document.querySelector('#METAR14UTC-lists')

let panelLayerMETAR15UTC_Title = document.querySelector('#METAR15UTC-Title')
let panelLayerMETAR15UTC_lists = document.querySelector('#METAR15UTC-lists')


document.querySelectorAll('#popup').forEach(function(openModel) {
    console.log(openModel, "__openModel");
    openModel.onclick = () => {
        console.log("openModel working!!!");
        model.style.display = 'block';
        //
        // legendModel1.src = "";
        // legendModel1.alt = "";
        // legendModel1.style.height = 0;
        // legendModel1.style.width = 0;

        //EXPOSURE
        // legendModelExpo.src = "";
        // legendModelExpo.alt = "";
        // legendModelExpo.style.height = 0;
        // legendModelExpo.style.width = 0;

        //METAR
        // legendModelMet.src = "";
        // legendModelMet.alt = "";
        // legendModelMet.style.height = 0;
        // legendModelMet.style.width = 0;
    }
});
//
let clickedLightningLists = [];
let clickedRadarLists = [];
let clickedExposureLists = [];
let clickedMETAR00UTCLists = [];
let clickedMETAR01UTCLists = [];
let clickedMETAR02UTCLists = [];
let clickedMETAR03UTCLists = [];
let clickedMETAR04UTCLists = [];
let clickedMETAR05UTCLists = [];
let clickedMETAR06UTCLists = [];
let clickedMETAR07UTCLists = [];
let clickedMETAR08UTCLists = [];
let clickedMETAR09UTCLists = [];
let clickedMETAR10UTCLists = [];
let clickedMETAR11UTCLists = [];
let clickedMETAR12UTCLists = [];
let clickedMETAR13UTCLists = [];
let clickedMETAR14UTCLists = [];
let clickedMETAR15UTCLists = [];

$("body").on("change", "input[type=checkbox]", function() {
    var _this = $(this);
    console.log(_this, '_this');

    var layer_name = _this.context._layer ? _this.context._layer.name : _this.context
        .className;
    console.log(layer_name, "layer_name");
    var isChecked = $(this).attr('checked');

    if (isChecked) { // True
        console.log("Checked");
        //HomePage_Lightning
        if (_this.context._layer.group.name == "Lightning") {

            if (panelLayerLightningTitle.innerHTML == '') {
                panelLayerLightningTitle.innerHTML = _this.context._layer.group.name + ':';
                // legendModel1.src = 'http://103.215.208.18/dwr_img/GIS/legend/model_nowcast.png';
                // legendModel1.style.height = '35vh';
                // legendModel1.style.width = '72%';
                Light_RadarRow.style.display = 'block';
            }

            if (layer_name == 'Last 00-05 min') {
                clickedLightningLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
                map.addLayer(delhiMarker);
            }
            if (layer_name == 'Last 05-10 min') {
                clickedLightningLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
                map.addLayer(jaipurMarker);
            }
            if (layer_name == 'Last 10-15 min') {
                clickedLightningLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
                map.addLayer(bhopalMarker);
            }
            panelLayerLightninglists.innerHTML = clickedLightningLists.join("");

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR00UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name} <img src="img/temp.jpeg" style="width: 125px; height: 150px;"><br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR00UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name} <img src="img/temp.jpeg" style="width: 125px; height: 150px;"><br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR00UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name} <img src="img/visiblity.jpeg" style="width: 125px; height: 150px;"><br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR00UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br> <div style="width: 30px; 
                    height: 15px;
                    display: flex;
                    border: 2px solid black;">
                    <div style="flex: 1; background-color: green;"></div>
                    <div style="flex: 1; background-color: white;"></div>
                    </div><br>`
                );
            }
            panelLayerMETAR00UTC_lists.innerHTML = clickedMETAR00UTCLists.join("");
        }
        //HomePage_Radar
        if (_this.context._layer.group.name == "Radar Reflectivity") {
            if (panelLayerRadarTitle.innerHTML == '') {
                panelLayerRadarTitle.innerHTML = _this.context._layer.group.name + ':'
                // legendModel1.src = 'http://103.215.208.18/dwr_img/GIS/legend/model_nowcast.png';
                // legendModel1.style.height = '35vh';
                // legendModel1.style.width = '72%';
                Light_RadarRow.style.display = 'block';
            }

            if (layer_name == 'Radar Reflectivity') {
                clickedRadarLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'Radar Animation') {
                clickedRadarLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            panelLayerRadarlists.innerHTML = clickedRadarLists.join("");
        }
        //EXPOSURE
        if (_this.context._layer.group.name == "Exposure Layers") {
            if (panelLayerExposureTitle.innerHTML == '') {
                EXPOSURE.innerHTML = "EXPOSURE"
                panelLayerExposureTitle.innerHTML = _this.context._layer.group.name + ':'
                // legendModelExpo.src = 'http://103.215.208.18/dwr_img/GIS/legend/exp_legend2.PNG';
                // legendModelExpo.style.height = '35vh';
                // legendModelExpo.style.width = '72%';
                ExposureRow.style.display = 'block';
            }

            if (layer_name == 'District Boundaries') {
                clickedExposureLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name} <span style="width: 30px; 
                        height: 1px; 
                        border-bottom: 2px dashed #000;
                        display: inline-block;"></span><br>`
                );
            }
            if (layer_name == 'Airport') {
                clickedExposureLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name} <i class="fas fa-plane"></i><br>`
                );
            }
            if (layer_name == 'Hospital') {
                clickedExposureLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name} <i class="fas fa-hospital"></i>
                        <br>`
                );
            }
            if (layer_name == 'sports') {
                clickedExposureLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name} <i class="fas fa-football-ball"></i>
                         <br>`
                );
            }
            if (layer_name === 'Power Plant') {
                clickedExposureLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}  
                         <img src="img/powerplant.jpeg" width="20" height="20" /><br>`
                );
            }


            if (layer_name == 'Power Station') {
                clickedExposureLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name} 
                        <img src="img/powerstation.png" width="20" height="20" /><br>`
                );
            }
            if (layer_name == 'Oil Refineries') {
                clickedExposureLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name} <i class="fas fa-industry"></i><br>`
                );
            }
            if (layer_name == 'Industrail') {
                clickedExposureLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name} 
                        <img src="img/industry.jpeg" width="20" height="20" /><br>`
                );
            }
            if (layer_name === 'Socio Economic Zone') {
                clickedExposureLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name} 
                         <img src="img/socio_economic_zone.jpeg" width="20" height="20" /><br>`
                );
            }

            if (layer_name == 'Road Network') {
                clickedExposureLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name} <img src="img/road_network.jpeg" style="width: 25px; height: auto;"><br>`
                );
            }
            if (layer_name == 'Railway Network') {
                clickedExposureLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name} <img src="img/railway.jpeg" style="width: 25px; height: auto;"><br>`
                );
            }
            if (layer_name == 'DEM') {
                clickedExposureLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name} <img src="img/DEM.jpeg" style="width: 125px; height: auto;"><br>`
                );
            }
            if (layer_name == 'LULC') {
                clickedExposureLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name} <img src="img/LULC.jpeg" style="width: 175px; height: 250px;"><br>`
                );
            }

            panelLayerExposureLists.innerHTML = clickedExposureLists.join("");
        }

        //METAR
        if (_this.context._layer.group.name == "METAR 00UTC") {
            if (panelLayerMETAR00UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR00UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                // legendModelMet.src = "";
                // legendModelMet.src = 'http://103.215.208.18/dwr_img/GIS/metar_nowcast.jpg';
                // legendModelMet.style.height = '35vh';
                // legendModelMet.style.width = '72%';
                METAR_Row.style.display = 'block';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR00UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name} <img src="img/temp.jpeg" style="width: 125px; height: 150px;"><br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR00UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name} <img src="img/temp.jpeg" style="width: 125px; height: 150px;"><br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR00UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name} <img src="img/visiblity.jpeg" style="width: 125px; height: 150px;"><br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR00UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br> <div style="width: 30px; 
                    height: 15px;
                    display: flex;
                    border: 2px solid black;">
                    <div style="flex: 1; background-color: green;"></div>
                    <div style="flex: 1; background-color: white;"></div>
                    </div><br>`
                );
            }
            panelLayerMETAR00UTC_lists.innerHTML = clickedMETAR00UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 01UTC") {
            if (panelLayerMETAR01UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR01UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                METAR_Row.style.display = 'block';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR01UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR01UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR01UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR01UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            panelLayerMETAR01UTC_lists.innerHTML = clickedMETAR01UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 02UTC") {
            if (panelLayerMETAR02UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR02UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                METAR_Row.style.display = 'block';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR02UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR02UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR02UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR02UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            panelLayerMETAR02UTC_lists.innerHTML = clickedMETAR02UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 03UTC") {
            if (panelLayerMETAR03UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR03UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                METAR_Row.style.display = 'block';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR03UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR03UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR03UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR03UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            panelLayerMETAR03UTC_lists.innerHTML = clickedMETAR03UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 04UTC") {
            if (panelLayerMETAR04UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR04UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                METAR_Row.style.display = 'block';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR04UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR04UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR04UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR04UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            panelLayerMETAR04UTC_lists.innerHTML = clickedMETAR04UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 05UTC") {
            if (panelLayerMETAR05UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR05UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                METAR_Row.style.display = 'block';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR05UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR05UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR05UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR05UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            panelLayerMETAR05UTC_lists.innerHTML = clickedMETAR05UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 06UTC") {
            if (panelLayerMETAR06UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR06UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                METAR_Row.style.display = 'block';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR06UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR06UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR06UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR06UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            panelLayerMETAR06UTC_lists.innerHTML = clickedMETAR06UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 07UTC") {
            if (panelLayerMETAR07UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR07UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                METAR_Row.style.display = 'block';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR07UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR07UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR07UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR07UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            panelLayerMETAR07UTC_lists.innerHTML = clickedMETAR07UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 08UTC") {
            if (panelLayerMETAR08UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR08UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                METAR_Row.style.display = 'block';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR08UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR08UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR08UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR08UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            panelLayerMETAR08UTC_lists.innerHTML = clickedMETAR08UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 09UTC") {
            if (panelLayerMETAR09UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR09UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                METAR_Row.style.display = 'block';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR09UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR09UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR09UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR09UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            panelLayerMETAR09UTC_lists.innerHTML = clickedMETAR09UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 10UTC") {
            if (panelLayerMETAR10UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR10UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                METAR_Row.style.display = 'block';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR10UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR10UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR10UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR10UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            panelLayerMETAR10UTC_lists.innerHTML = clickedMETAR10UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 11UTC") {
            if (panelLayerMETAR11UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR11UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                METAR_Row.style.display = 'block';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR11UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR11UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR11UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR11UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            panelLayerMETAR11UTC_lists.innerHTML = clickedMETAR11UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 12UTC") {
            if (panelLayerMETAR12UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR12UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                METAR_Row.style.display = 'block';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR12UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR12UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR12UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR12UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            panelLayerMETAR12UTC_lists.innerHTML = clickedMETAR12UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 13UTC") {
            if (panelLayerMETAR13UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR13UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                METAR_Row.style.display = 'block';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR13UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR13UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR13UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR13UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            panelLayerMETAR13UTC_lists.innerHTML = clickedMETAR13UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 14UTC") {
            if (panelLayerMETAR14UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR14UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                METAR_Row.style.display = 'block';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR14UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR14UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR14UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR14UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            panelLayerMETAR14UTC_lists.innerHTML = clickedMETAR14UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 15UTC") {
            if (panelLayerMETAR15UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR15UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                METAR_Row.style.display = 'block';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR15UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR15UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR15UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR15UTCLists.push(
                    `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            panelLayerMETAR15UTC_lists.innerHTML = clickedMETAR15UTCLists.join("");
        }


    } else {
        console.log("Not Checked");
        //Lightning
        if (layer_name == 'Last 00-05 min') {
            clickedLightningLists = clickedLightningLists.filter(checkList => checkList !=
                `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
            );
            panelLayerLightninglists.innerHTML = clickedLightningLists.join("");
            map.removeLayer(delhiMarker);
        }
        if (layer_name == 'Last 05-10 min') {
            clickedLightningLists = clickedLightningLists.filter(checkList => checkList !=
                `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
            );
            panelLayerLightninglists.innerHTML = clickedLightningLists.join("");
            map.removeLayer(jaipurMarker);
        }
        if (layer_name == 'Last 10-15 min') {
            clickedLightningLists = clickedLightningLists.filter(checkList => checkList !=
                `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
            );
            panelLayerLightninglists.innerHTML = clickedLightningLists.join("");
            map.removeLayer(bhopalMarker);
        }
        //
        if (panelLayerLightninglists.innerHTML == '') {
            panelLayerLightningTitle.innerHTML = '';
        }

        ////GroupPanelLayer-collapsible
        if (panelLayerLightninglists.innerHTML != '') {
            var yy = document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
            // console.log(hhh, "yyjjjjjj");
        }



        //Radar
        if (layer_name == 'Radar Reflectivity') {
            clickedRadarLists = clickedRadarLists.filter(checkList => checkList !=
                `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
            );
            panelLayerRadarlists.innerHTML = clickedRadarLists.join("");
            map.removeLayer(lucknowMarker);
        }
        if (layer_name == 'Radar Animation') {
            clickedRadarLists = clickedRadarLists.filter(checkList => checkList !=
                `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
            );
            panelLayerRadarlists.innerHTML = clickedRadarLists.join("");
            map.removeLayer(patnaMarker);
        }
        //
        if (panelLayerRadarlists.innerHTML == '') {
            panelLayerRadarTitle.innerHTML = '';
        }

        //GroupPanelLayer-collapsible
        if (panelLayerRadarlists.innerHTML != '') {
            var yyy = document.querySelectorAll('.collapsible')[1].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[1].innerHTML = '-';
            console.log(yyy);
        }

        //
        if (panelLayerLightninglists.innerHTML == '' && panelLayerRadarlists.innerHTML == '') {
            panelLayerLightningTitle.innerHTML = '';
            // legendModel1.src = "";
            // legendModel1.alt = "";
            // legendModel1.style.height = 0;
            // legendModel1.style.width = 0;
            Light_RadarRow.style.display = 'none';
        }


        //Exposure
        if (layer_name == 'District Boundaries') {
            clickedExposureLists = clickedExposureLists.filter(checkList =>
                checkList !=
                `<input type="checkbox" class="${layer_name}" checked/> ${layer_name} <span style="width: 30px; 
                        height: 1px; 
                        border-bottom: 2px dashed #000;
                        display: inline-block;"></span><br>`
            );
            panelLayerExposureLists.innerHTML = clickedExposureLists.join("");
            map.removeLayer(PuneMarker);
        }
        if (layer_name == 'Airport') {
            clickedExposureLists = clickedExposureLists.filter(checkList => checkList !=
                `<input type="checkbox" class="${layer_name}" checked/> ${layer_name} <i class="fas fa-plane"></i><br>`
            );
            panelLayerExposureLists.innerHTML = clickedExposureLists.join("");
            map.removeLayer(MumbaiMarker);
        }
        if (layer_name == 'Hospital') {
            clickedExposureLists = clickedExposureLists.filter(checkList =>
                checkList !=
                `<input type="checkbox" class="${layer_name}" checked/> ${layer_name} <i class="fas fa-hospital"></i>
                        <br>`
            );
            panelLayerExposureLists.innerHTML = clickedExposureLists.join("");
            map.removeLayer(BidarMarker);
        }
        if (layer_name == 'sports') {
            clickedExposureLists = clickedExposureLists.filter(checkList =>
                checkList !=
                `<input type="checkbox" class="${layer_name}" checked/> ${layer_name} <i class="fas fa-football-ball"></i>
                         <br>`
            );
            panelLayerExposureLists.innerHTML = clickedExposureLists.join("");
            map.removeLayer(PuneMarker);
        }
        if (layer_name === 'Power Plant') {
            clickedExposureLists = clickedExposureLists.filter(checkList =>
                checkList !=
                `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}  
                         <img src="img/powerplant.jpeg" width="20" height="20" /><br>`
            );
            panelLayerExposureLists.innerHTML = clickedExposureLists.join("");
            map.removeLayer(VijayapuraMarker);
        }


        if (layer_name == 'Power Station') {
            clickedExposureLists = clickedExposureLists.filter(checkList =>
                checkList !=
                `<input type="checkbox" class="${layer_name}" checked/> ${layer_name} 
                        <img src="img/powerstation.png" width="20" height="20" /><br>`
            );
            panelLayerExposureLists.innerHTML = clickedExposureLists.join("");
            map.removeLayer(SolapurMarker);
        }
        if (layer_name == 'Oil Refineries') {
            clickedExposureLists = clickedExposureLists.filter(checkList =>
                checkList !=
                `<input type="checkbox" class="${layer_name}" checked/> ${layer_name} <i class="fas fa-industry"></i><br>`
            );
            panelLayerExposureLists.innerHTML = clickedExposureLists.join("");
            map.removeLayer(RanchiMarker);
        }
        if (layer_name == 'Industrail') {
            clickedExposureLists = clickedExposureLists.filter(checkList =>
                checkList !=
                `<input type="checkbox" class="${layer_name}" checked/> ${layer_name} 
                        <img src="img/industry.jpeg" width="20" height="20" /><br>`
            );
            panelLayerExposureLists.innerHTML = clickedExposureLists.join("");
            map.removeLayer(BidarMarker);
        }
        if (layer_name === 'Socio Economic Zone') {
            clickedExposureLists = clickedExposureLists.filter(checkList =>
                checkList !=
                `<input type="checkbox" class="${layer_name}" checked/> ${layer_name} 
                         <img src="img/socio_economic_zone.jpeg" width="20" height="20" /><br>`
            );
            panelLayerExposureLists.innerHTML = clickedExposureLists.join("");
            map.removeLayer(PuneMarker);
        }

        if (layer_name == 'Road Network') {
            clickedExposureLists = clickedExposureLists.filter(checkList =>
                checkList !=
                `<input type="checkbox" class="${layer_name}" checked/> ${layer_name} <img src="img/road_network.jpeg" style="width: 25px; height: auto;"><br>`
            );
            panelLayerExposureLists.innerHTML = clickedExposureLists.join("");
            map.removeLayer(PuneMarker);
        }
        if (layer_name == 'Railway Network') {
            clickedExposureLists = clickedExposureLists.filter(checkList =>
                checkList !=
                `<input type="checkbox" class="${layer_name}" checked/> ${layer_name} <img src="img/railway.jpeg" style="width: 25px; height: auto;"><br>`
            );
            panelLayerExposureLists.innerHTML = clickedExposureLists.join("");
            map.removeLayer(PuneMarker);
        }
        if (layer_name == 'DEM') {
            clickedExposureLists = clickedExposureLists.filter(checkList =>
                checkList !=
                `<input type="checkbox" class="${layer_name}" checked/> ${layer_name} <img src="img/DEM.jpeg" style="width: 125px; height: auto;"><br>`
            );
            panelLayerExposureLists.innerHTML = clickedExposureLists.join("");
            map.removeLayer(BidarMarker);
        }
        if (layer_name == 'LULC') {
            clickedExposureLists = clickedExposureLists.filter(checkList =>
                checkList !=
                `<input type="checkbox" class="${layer_name}" checked/> ${layer_name} <img src="img/LULC.jpeg" style="width: 175px; height: 250px;"><br>`
            );
            panelLayerExposureLists.innerHTML = clickedExposureLists.join("");
            map.removeLayer(PuneMarker);
        }

        //

        //
        if (panelLayerExposureLists.innerHTML == '') {
            panelLayerExposureTitle.innerHTML = '';
            EXPOSURE.innerHTML = '';
            // legendModelExpo.src = "";
            // legendModelExpo.alt = "";
            // legendModelExpo.style.height = 0;
            // legendModelExpo.style.width = 0;
            ExposureRow.style.display = 'flex';

        }
        console.log(layer_name, "layer_name");

        //GroupPanelLayer-collapsible-Exposure
        if (panelLayerExposureLists.innerHTML != '') {
            var yyy = document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
            console.log(yyy);
        }

        //
        METAR
        if (layer_name == 'TEMPERATURE') {
            clickedMETAR00UTCLists = clickedMETAR00UTCLists.filter(checkList => checkList !=
                `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
            );
            console.log(layer_name, "layer_name TEMP");
            panelLayerMETAR00UTC_lists.innerHTML = clickedMETAR00UTCLists.join("");
            map.removeLayer(SuratMarker);
        }
        if (layer_name == 'DEW POINT TEMPERATURE') {
            clickedMETAR00UTCLists = clickedMETAR00UTCLists.filter(checkList => checkList !=
                `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
            );
            panelLayerMETAR00UTC_lists.innerHTML = clickedMETAR00UTCLists.join("");
            map.removeLayer(JodhpurMarker);
        }
        if (layer_name == 'VISIBILITY') {
            clickedMETAR00UTCLists = clickedMETAR00UTCLists.filter(checkList => checkList !=
                `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
            );
            panelLayerMETAR00UTC_lists.innerHTML = clickedMETAR00UTCLists.join("");
            map.removeLayer(KanpurMarker);
        }
        if (layer_name == 'WIND SPEED AND DIRECTION') {
            clickedMETAR00UTCLists = clickedMETAR00UTCLists.filter(checkList => checkList !=
                `<input type="checkbox" class="${layer_name}" checked/> ${layer_name}<br>`
            );
            panelLayerMETAR00UTC_lists.innerHTML = clickedMETAR00UTCLists.join("");
            map.removeLayer(MeerutMarker);
        }
        //

        //
        if (panelLayerMETAR00UTC_lists.innerHTML == '') {
            panelLayerMETAR00UTC_Title.innerHTML = '';
            METAR.innerHTML = '';
            // legendModelMet.src = "";
            // legendModelMet.alt = "";
            // legendModelMet.style.height = 0;
            // legendModelMet.style.width = 0;
            METAR_Row.style.display = 'block';
        }
        console.log(layer_name, "layer_name");

        //GroupPanelLayer-collapsible-METAR00UTC
        if (panelLayerMETAR00UTC_lists.innerHTML != '') {
            var yyy = document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
            console.log(yyy);
        }

    }
});
//


function tempImage() {

}

//closeModel
closeModel.onclick = () => {
    model.style.display = 'none';
}

//drag popup
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
</script>