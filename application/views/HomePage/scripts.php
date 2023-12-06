<script>
let modelNamesArr = ["", 'Metar', 'Synop', 'Radar', 'Satellite', 'Lightning', 'Sounding', 'Ship And Buoy'];

//Parameters
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
    // alert(value)
    let getsubparameterNames = document.getElementById("subparameter");
    let pushsubparameterNames = '';

    // console.log(subParametersList)
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

//toggleFunction for legend
// function toggleFunction() {
//     var x = document.getElementById("toggleImage");
//     var toggleMap = document.getElementById("map");
//     if (x.style.display === "none") {
//         x.style.display = "block";
//         toggleMap.style.width = "95%";
//     } else {
//         x.style.display = "none";
//         toggleMap.style.width = "130%";
//     }

// };

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
//

//Observation-toggleObservation
function toggleObservation() {
    var observationContainerFn = document.getElementById("ObservationContainer");
    var map = document.getElementById('map');
    var isHidden = observationContainerFn.classList.contains('hidden');
    observationContainerFn.classList.toggle('hidden');
    map.style.width = isHidden ? '80%' : '99%';
}
// var observationContainerFn = document.getElementById("ObservationContainer");
// observationContainerFn.addEventListener('click', toggleObservation);

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

// Create a custom control button for model popup
var LegendButton = L.Control.extend({
    options: {
        position: 'topleft'
    },
    onAdd: function() {
        // Create a button element
        var button = L.DomUtil.create('div', 'leaflet-bar leaflet-control leaflet-control-custom');
        button.innerHTML = 'Legend';
        button.id = 'popup';
        //click event listener
        L.DomEvent.on(button, 'click', function() {
            // alert('Button clicked!');
        });
        return button;
    }
});
map.addControl(new LegendButton());

// Create a custom control button for ObservationButton
var ObservationButton = L.Control.extend({
    options: {
        position: 'topleft'
    },
    onAdd: function() {
        var obsbtn = L.DomUtil.create('div', 'leaflet-bar leaflet-control leaflet-control-custom');
        obsbtn.innerHTML = 'Observation';
        //click event
        L.DomEvent.on(obsbtn, 'click', function() {
            // alert('Button clicked!');
            toggleObservation();
        });

        return obsbtn;
    }
});
map.addControl(new ObservationButton());

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


const overLayers = [{
        group: "Lightning",
        collapsed: true,
        layers: [{
                active: false,
                name: "Last 00-05 min",
                class: "Last 00-05 min",
                layer: ggg,
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
                layer: ggg
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
        if (currentColorsynop === 'rgb(165, 175, 198)') { // highlighted color
            targetElement_synop.style.backgroundColor = '#ffffff'; // Reset to default color
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
        } else {
            targetElement_synop.style.backgroundColor = 'rgb(165, 175, 198)'; // highlighted color
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
        if (currentColormetar === 'rgb(165, 175, 198)') { // highlighted color
            targetElement_metar.style.backgroundColor = '#ffffff'; // Reset to default color
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
        } else {
            targetElement_metar.style.backgroundColor = 'rgb(165, 175, 198)'; // highlighted color
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
        if (currentColormesolscale === 'rgb(165, 175, 198)') { // highlighted color
            targetElement_mesolscale.style.backgroundColor =
                '#ffffff'; // Reset to default color
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
        } else {
            targetElement_mesolscale.style.backgroundColor = 'rgb(165, 175, 198)'; // highlighted color
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
        if (currentColormedium === 'rgb(165, 175, 198)') { // highlighted color
            targetElement_medium.style.backgroundColor = '#ffffff'; // Reset to default color
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
        } else {
            targetElement_medium.style.backgroundColor = 'rgb(165, 175, 198)'; // highlighted color
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
        if (currentColorsatellite === 'rgb(165, 175, 198)') { // highlighted color
            targetElement_satellite.style.backgroundColor =
                '#ffffff'; // Reset to default color
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
        } else {
            targetElement_satellite.style.backgroundColor = 'rgb(165, 175, 198)'; // highlighted color
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
        if (currentColorradar === 'rgb(165, 175, 198)') { // highlighted color
            targetElement_radar.style.backgroundColor = '#ffffff'; // Reset to default color
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
        } else {
            targetElement_radar.style.backgroundColor = 'rgb(165, 175, 198)'; // highlighted color
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
        if (currentColorlightning === 'rgb(165, 175, 198)') { // highlighted color
            targetElement_lightning.style.backgroundColor =
                '#ffffff'; // Reset to default color
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
        } else {
            targetElement_lightning.style.backgroundColor = 'rgb(165, 175, 198)'; // highlighted color
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
        if (currentColorsounding === 'rgb(165, 175, 198)') { // highlighted color
            targetElement_sounding.style.backgroundColor =
                '#ffffff'; // Reset to default color
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
        } else {
            targetElement_sounding.style.backgroundColor = 'rgb(165, 175, 198)'; // highlighted color
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
        if (currentColorexpo === 'rgb(165, 175, 198)') { // highlighted color
            targetElement_expo.style.backgroundColor = '#ffffff'; // Reset to default color
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
        } else {
            targetElement_expo.style.backgroundColor = 'rgb(165, 175, 198)'; // highlighted color
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
        if (currentColorship === 'rgb(165, 175, 198)') { // highlighted color
            targetElement_ship.style.backgroundColor = '#ffffff'; // Reset to default color
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
        } else {
            targetElement_ship.style.backgroundColor = 'rgb(165, 175, 198)'; // highlighted color
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

let panelLayerMETAR16UTC_Title = document.querySelector('#METAR16UTC-Title')
let panelLayerMETAR16UTC_lists = document.querySelector('#METAR16UTC-lists')

let panelLayerMETAR17UTC_Title = document.querySelector('#METAR17UTC-Title')
let panelLayerMETAR17UTC_lists = document.querySelector('#METAR17UTC-lists')

let panelLayerMETAR18UTC_Title = document.querySelector('#METAR18UTC-Title')
let panelLayerMETAR18UTC_lists = document.querySelector('#METAR18UTC-lists')

let panelLayerMETAR19UTC_Title = document.querySelector('#METAR19UTC-Title')
let panelLayerMETAR19UTC_lists = document.querySelector('#METAR19UTC-lists')

let panelLayerMETAR20UTC_Title = document.querySelector('#METAR20UTC-Title')
let panelLayerMETAR20UTC_lists = document.querySelector('#METAR20UTC-lists')

let panelLayerMETAR21UTC_Title = document.querySelector('#METAR21UTC-Title')
let panelLayerMETAR21UTC_lists = document.querySelector('#METAR21UTC-lists')

let panelLayerMETAR22UTC_Title = document.querySelector('#METAR22UTC-Title')
let panelLayerMETAR22UTC_lists = document.querySelector('#METAR22UTC-lists')

let panelLayerMETAR23UTC_Title = document.querySelector('#METAR23UTC-Title')
let panelLayerMETAR23UTC_lists = document.querySelector('#METAR23UTC-lists')

//SYNOP//
let panelLayerSYNOP00UTC_Title = document.querySelector('#SYNOP00UTC-Title')
let panelLayerSYNOP00UTC_lists = document.querySelector('#SYNOP00UTC-lists')

let panelLayerSYNOP03UTC_Title = document.querySelector('#SYNOP03UTC-Title')
let panelLayerSYNOP03UTC_lists = document.querySelector('#SYNOP03UTC-lists')

let panelLayerSYNOP06UTC_Title = document.querySelector('#SYNOP06UTC-Title')
let panelLayerSYNOP06UTC_lists = document.querySelector('#SYNOP06UTC-lists')

let panelLayerSYNOP09UTC_Title = document.querySelector('#SYNOP09UTC-Title')
let panelLayerSYNOP09UTC_lists = document.querySelector('#SYNOP09UTC-lists')

let panelLayerSYNOP12UTC_Title = document.querySelector('#SYNOP12UTC-Title')
let panelLayerSYNOP12UTC_lists = document.querySelector('#SYNOP12UTC-lists')

let panelLayerSYNOP15UTC_Title = document.querySelector('#SYNOP15UTC-Title')
let panelLayerSYNOP15UTC_lists = document.querySelector('#SYNOP15UTC-lists')

let panelLayerSYNOP18UTC_Title = document.querySelector('#SYNOP18UTC-Title')
let panelLayerSYNOP18UTC_lists = document.querySelector('#SYNOP18UTC-lists')

let panelLayerSYNOP21UTC_Title = document.querySelector('#SYNOP21UTC-Title')
let panelLayerSYNOP21UTC_lists = document.querySelector('#SYNOP21UTC-lists')

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
    console.log(openModel, "__openModel");
    openModel.onclick = () => {
        console.log("openModel working!!!");
        model.style.display = 'block';
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
let clickedMETAR16UTCLists = [];
let clickedMETAR17UTCLists = [];
let clickedMETAR18UTCLists = [];
let clickedMETAR19UTCLists = [];
let clickedMETAR20UTCLists = [];
let clickedMETAR21UTCLists = [];
let clickedMETAR22UTCLists = [];
let clickedMETAR23UTCLists = [];


let clickedSYNOP00UTCLists = [];
let clickedSYNOP03UTCLists = [];
let clickedSYNOP06UTCLists = [];
let clickedSYNOP09UTCLists = [];
let clickedSYNOP12UTCLists = [];
let clickedSYNOP15UTCLists = [];
let clickedSYNOP18UTCLists = [];
let clickedSYNOP21UTCLists = [];

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


$("body").on("change", "input[type=checkbox]", function() {
    var _this = $(this);
    console.log(_this, '_this');
    var isChecked = $(this).attr('checked');
    var layer_group_name = _this.context._layer ? _this.context._layer.group.name : '';
    console.log(layer_group_name, "layer_group_name");

    if (isChecked) { // True
        console.log("Checked");
        var layer_name = _this.context._layer ? _this.context._layer.name : _this.context
            .className;
        console.log(layer_name, "layer_name");

        //HomePage_Lightning
        if (_this.context._layer.group.name == "Lightning") {

            // if (panelLayerLightningTitle.innerHTML == '') {
            //     panelLayerLightningTitle.innerHTML = _this.context._layer.group.name + ':';
            //     // legendModel1.src = 'http://103.215.208.18/dwr_img/GIS/legend/model_nowcast.png';
            //     // legendModel1.style.height = '35vh';
            //     // legendModel1.style.width = '72%';
            //     Light_RadarRow.style.display = 'block';
            // }

            // if (layer_name == 'Last 00-05 min') {
            //     clickedLightningLists.push(
            //         `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
            //     );
            //     map.addLayer(delhiMarker);
            // }
            // if (layer_name == 'Last 05-10 min') {
            //     clickedLightningLists.push(
            //         `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
            //     );
            //     map.addLayer(jaipurMarker);
            // }
            // if (layer_name == 'Last 10-15 min') {
            //     clickedLightningLists.push(
            //         `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
            //     );
            //     map.addLayer(bhopalMarker);
            // }
            // panelLayerLightninglists.innerHTML = clickedLightningLists.join("");

            // if (layer_name == 'TEMPERATURE') {
            //     clickedMETAR00UTCLists.push(
            //         _this
            //         // `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} <img src="img/temp.jpeg" style="width: 125px; height: 150px;"><br>`
            //     );
            // }
            // if (layer_name == 'DEW POINT TEMPERATURE') {
            //     clickedMETAR00UTCLists.push(
            //         `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} <img src="img/temp.jpeg" style="width: 125px; height: 150px;"><br>`
            //     );
            // }
            // if (layer_name == 'VISIBILITY') {
            //     clickedMETAR00UTCLists.push(
            //         `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} <img src="img/visiblity.jpeg" style="width: 125px; height: 150px;"><br>`
            //     );
            // }
            // if (layer_name == 'WIND SPEED AND DIRECTION') {
            //     clickedMETAR00UTCLists.push(
            //         `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br> <div style="width: 30px; 
            //         height: 15px;
            //         display: flex;
            //         border: 2px solid black;">
            //         <div style="flex: 1; background-color: green;"></div>
            //         <div style="flex: 1; background-color: black;"></div>
            //         </div><br>`
            //     );
            // }
            // panelLayerMETAR00UTC_lists.innerHTML = clickedMETAR00UTCLists.join("");
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
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'Radar Animation') {
                clickedRadarLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
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
                    `<span style=" flex-direction: column; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} ` + `<span style="width: 30px; 
                        height: 1px; 
                        border-bottom: 2px dashed #000;
                        display: inline-block;"></span>` +
                    `</span><br>`
                );
            }

            if (layer_name == 'Airport') {
                clickedExposureLists.push(
                    `<span style=" flex-direction: column; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} ` +
                    `<i class="fas fa-plane"></i>` +
                    `</span><br>`
                );
            }
            if (layer_name == 'Hospital') {
                clickedExposureLists.push(
                    `<span style=" flex-direction: column; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} ` +
                    `<i class="fas fa-hospital"></i>` +
                    `</span>
                        <br>`
                );
            }
            if (layer_name == 'sports') {
                clickedExposureLists.push(
                    `<span style=" flex-direction: column; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} ` + `<i class="fas fa-football-ball"></i>
                        ` +
                    `</span><br>`
                );
            }
            if (layer_name === 'Power Plant') {
                clickedExposureLists.push(
                    `<span style=" flex-direction: column; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}  ` + `
                         <img src="img/powerplant.jpeg" width="20" height="20" />` +
                    `</span><br>`
                );
            }


            if (layer_name == 'Power Station') {
                clickedExposureLists.push(
                    `<span style=" flex-direction: column; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} ` + `
                        <img src="img/powerstation.png" width="20" height="20" />` +
                    `</span><br>`
                );
            }
            if (layer_name == 'Oil Refineries') {
                clickedExposureLists.push(
                    `<span style=" flex-direction: column; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <i class="fas fa-industry"></i>` +
                    `</span><br>`
                );
            }
            if (layer_name == 'Industrail') {
                clickedExposureLists.push(
                    `<span style=" flex-direction: column; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` + ` 
                        <img src="img/industry.jpeg" width="20" height="20" />` +
                    `</span><br>`
                );
            }
            if (layer_name === 'Socio Economic Zone') {
                clickedExposureLists.push(
                    `<span style=" flex-direction: column; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} ` + `
                         <img src="img/socio_economic_zone.jpeg" width="20" height="20" />` +
                    `</span><br>`
                );
            }

            if (layer_name == 'Road Network') {
                clickedExposureLists.push(
                    `<span style=" flex-direction: column; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/road_network.jpeg" style="width: 25px; height: auto;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'Railway Network') {
                clickedExposureLists.push(
                    `<span style=" flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/railway.jpeg" style="width: 25px; height: auto;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'DEM') {
                clickedExposureLists.push(
                    `<span style=" flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    `<img src="img/DEM.jpeg" style="width: 125px; height: auto;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'LULC') {
                clickedExposureLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    `<img src="img/LULC.jpeg" style="width: 175px; height: 250px;">` +
                    `</span><br>`
                );
            }

            // if (layer_name == 'LULC') {
            //     clickedExposureLists.push(
            //         `<span style="display: flex; flex-direction: column; align-items: center;">` +
            //         `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
            //         `<img src="img/LULC.jpeg" style="width: 175px; height: 250px; margin-top: 5px;">` +
            //         `</span><br>`
            //     );
            // }


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
                panelLayerMETAR00UTC_lists.style.display = 'flex';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR00UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR00UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR00UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #2f7eb6; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">0-1000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #63abb3; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">1000-2000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #9ed1a1; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">2000-4000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #c4ebaa; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">4000-8000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #edf5bf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">8000-12000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fcecaf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">12000-20000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fdca82; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">20000-30000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #f59a4e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">30000-40000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #e35d2b; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">40000-45000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #df1327; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">>45000-50000</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR00UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` + `<svg width="60" height="50" style="transform: rotate(90deg);">
                <g>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
                </g>
                </svg>` + `</span><br>`
                );
            }
            panelLayerMETAR00UTC_lists.innerHTML = clickedMETAR00UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 01UTC") {
            if (panelLayerMETAR01UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR01UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                panelLayerMETAR01UTC_lists.style.display = 'flex';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR01UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR01UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR01UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #2f7eb6; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">0-1000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #63abb3; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">1000-2000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #9ed1a1; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">2000-4000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #c4ebaa; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">4000-8000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #edf5bf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">8000-12000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fcecaf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">12000-20000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fdca82; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">20000-30000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #f59a4e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">30000-40000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #e35d2b; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">40000-45000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #df1327; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">>45000-50000</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR01UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` + `<svg width="60" height="50" style="transform: rotate(90deg);">
                <g>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
                </g>
                </svg>` + `</span><br>`
                );
            }
            panelLayerMETAR01UTC_lists.innerHTML = clickedMETAR01UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 02UTC") {
            if (panelLayerMETAR02UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR02UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                panelLayerMETAR02UTC_lists.style.display = 'flex';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR02UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR02UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR02UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #2f7eb6; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">0-1000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #63abb3; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">1000-2000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #9ed1a1; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">2000-4000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #c4ebaa; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">4000-8000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #edf5bf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">8000-12000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fcecaf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">12000-20000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fdca82; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">20000-30000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #f59a4e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">30000-40000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #e35d2b; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">40000-45000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #df1327; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">>45000-50000</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR02UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` + `<svg width="60" height="50" style="transform: rotate(90deg);">
                <g>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
                </g>
                </svg>` + `</span><br>`
                );
            }
            panelLayerMETAR02UTC_lists.innerHTML = clickedMETAR02UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 03UTC") {
            if (panelLayerMETAR03UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR03UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                panelLayerMETAR03UTC_lists.style.display = 'flex';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR03UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR03UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR03UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #2f7eb6; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">0-1000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #63abb3; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">1000-2000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #9ed1a1; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">2000-4000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #c4ebaa; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">4000-8000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #edf5bf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">8000-12000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fcecaf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">12000-20000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fdca82; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">20000-30000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #f59a4e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">30000-40000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #e35d2b; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">40000-45000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #df1327; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">>45000-50000</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR03UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` + `<svg width="60" height="50" style="transform: rotate(90deg);">
                <g>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
                </g>
                </svg>` + `</span><br>`
                );
            }
            panelLayerMETAR03UTC_lists.innerHTML = clickedMETAR03UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 04UTC") {
            if (panelLayerMETAR04UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR04UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                panelLayerMETAR04UTC_lists.style.display = 'flex';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR04UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR04UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR04UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #2f7eb6; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">0-1000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #63abb3; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">1000-2000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #9ed1a1; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">2000-4000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #c4ebaa; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">4000-8000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #edf5bf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">8000-12000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fcecaf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">12000-20000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fdca82; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">20000-30000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #f59a4e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">30000-40000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #e35d2b; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">40000-45000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #df1327; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">>45000-50000</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR04UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` + `<svg width="60" height="50" style="transform: rotate(90deg);">
                <g>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
                </g>
                </svg>` + `</span><br>`
                );
            }
            panelLayerMETAR04UTC_lists.innerHTML = clickedMETAR04UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 05UTC") {
            if (panelLayerMETAR05UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR05UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                panelLayerMETAR05UTC_lists.style.display = 'flex';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR05UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR05UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR05UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #2f7eb6; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">0-1000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #63abb3; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">1000-2000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #9ed1a1; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">2000-4000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #c4ebaa; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">4000-8000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #edf5bf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">8000-12000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fcecaf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">12000-20000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fdca82; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">20000-30000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #f59a4e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">30000-40000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #e35d2b; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">40000-45000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #df1327; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">>45000-50000</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR05UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` + `<svg width="60" height="50" style="transform: rotate(90deg);">
                <g>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
                </g>
                </svg>` + `</span><br>`
                );
            }
            panelLayerMETAR05UTC_lists.innerHTML = clickedMETAR05UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 06UTC") {
            if (panelLayerMETAR06UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR06UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                panelLayerMETAR06UTC_lists.style.display = 'flex';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR06UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR06UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR06UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #2f7eb6; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">0-1000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #63abb3; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">1000-2000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #9ed1a1; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">2000-4000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #c4ebaa; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">4000-8000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #edf5bf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">8000-12000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fcecaf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">12000-20000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fdca82; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">20000-30000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #f59a4e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">30000-40000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #e35d2b; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">40000-45000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #df1327; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">>45000-50000</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR06UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` + `<svg width="60" height="50" style="transform: rotate(90deg);">
                <g>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
                </g>
                </svg>` + `</span><br>`
                );
            }
            panelLayerMETAR06UTC_lists.innerHTML = clickedMETAR06UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 07UTC") {
            if (panelLayerMETAR07UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR07UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                panelLayerMETAR07UTC_lists.style.display = 'flex';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR07UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR07UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR07UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #2f7eb6; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">0-1000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #63abb3; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">1000-2000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #9ed1a1; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">2000-4000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #c4ebaa; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">4000-8000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #edf5bf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">8000-12000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fcecaf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">12000-20000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fdca82; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">20000-30000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #f59a4e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">30000-40000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #e35d2b; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">40000-45000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #df1327; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">>45000-50000</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR07UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` + `<svg width="60" height="50" style="transform: rotate(90deg);">
                <g>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
                </g>
                </svg>` + `</span><br>`
                );
            }
            panelLayerMETAR07UTC_lists.innerHTML = clickedMETAR07UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 08UTC") {
            if (panelLayerMETAR08UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR08UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                panelLayerMETAR08UTC_lists.style.display = 'flex';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR08UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR08UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR08UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #2f7eb6; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">0-1000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #63abb3; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">1000-2000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #9ed1a1; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">2000-4000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #c4ebaa; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">4000-8000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #edf5bf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">8000-12000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fcecaf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">12000-20000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fdca82; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">20000-30000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #f59a4e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">30000-40000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #e35d2b; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">40000-45000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #df1327; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">>45000-50000</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR08UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` + `<svg width="60" height="50" style="transform: rotate(90deg);">
                <g>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
                </g>
                </svg>` + `</span><br>`
                );
            }
            panelLayerMETAR08UTC_lists.innerHTML = clickedMETAR08UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 09UTC") {
            if (panelLayerMETAR09UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR09UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                panelLayerMETAR09UTC_lists.style.display = 'flex';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR09UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR09UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR09UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #2f7eb6; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">0-1000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #63abb3; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">1000-2000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #9ed1a1; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">2000-4000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #c4ebaa; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">4000-8000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #edf5bf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">8000-12000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fcecaf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">12000-20000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fdca82; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">20000-30000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #f59a4e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">30000-40000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #e35d2b; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">40000-45000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #df1327; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">>45000-50000</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR09UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` + `<svg width="60" height="50" style="transform: rotate(90deg);">
                <g>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
                </g>
                </svg>` + `</span><br>`
                );
            }
            panelLayerMETAR09UTC_lists.innerHTML = clickedMETAR09UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 10UTC") {
            if (panelLayerMETAR10UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR10UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                panelLayerMETAR10UTC_lists.style.display = 'flex';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR10UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR10UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR10UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #2f7eb6; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">0-1000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #63abb3; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">1000-2000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #9ed1a1; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">2000-4000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #c4ebaa; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">4000-8000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #edf5bf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">8000-12000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fcecaf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">12000-20000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fdca82; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">20000-30000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #f59a4e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">30000-40000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #e35d2b; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">40000-45000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #df1327; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">>45000-50000</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR10UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` + `<svg width="60" height="50" style="transform: rotate(90deg);">
                <g>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
                </g>
                </svg>` + `</span><br>`
                );
            }
            panelLayerMETAR10UTC_lists.innerHTML = clickedMETAR10UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 11UTC") {
            if (panelLayerMETAR11UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR11UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                panelLayerMETAR11UTC_lists.style.display = 'flex';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR11UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR11UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR11UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #2f7eb6; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">0-1000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #63abb3; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">1000-2000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #9ed1a1; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">2000-4000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #c4ebaa; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">4000-8000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #edf5bf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">8000-12000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fcecaf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">12000-20000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fdca82; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">20000-30000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #f59a4e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">30000-40000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #e35d2b; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">40000-45000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #df1327; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">>45000-50000</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR11UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` + `<svg width="60" height="50" style="transform: rotate(90deg);">
                <g>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
                </g>
                </svg>` + `</span><br>`
                );
            }
            panelLayerMETAR11UTC_lists.innerHTML = clickedMETAR11UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 12UTC") {
            if (panelLayerMETAR12UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR12UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                panelLayerMETAR12UTC_lists.style.display = 'flex';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR12UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR12UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR12UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #2f7eb6; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">0-1000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #63abb3; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">1000-2000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #9ed1a1; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">2000-4000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #c4ebaa; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">4000-8000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #edf5bf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">8000-12000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fcecaf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">12000-20000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fdca82; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">20000-30000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #f59a4e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">30000-40000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #e35d2b; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">40000-45000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #df1327; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">>45000-50000</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR12UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` + `<svg width="60" height="50" style="transform: rotate(90deg);">
                <g>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
                </g>
                </svg>` + `</span><br>`
                );
            }
            panelLayerMETAR12UTC_lists.innerHTML = clickedMETAR12UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 13UTC") {
            if (panelLayerMETAR13UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR13UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                panelLayerMETAR13UTC_lists.style.display = 'flex';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR13UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR13UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR13UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #2f7eb6; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">0-1000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #63abb3; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">1000-2000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #9ed1a1; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">2000-4000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #c4ebaa; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">4000-8000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #edf5bf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">8000-12000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fcecaf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">12000-20000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fdca82; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">20000-30000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #f59a4e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">30000-40000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #e35d2b; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">40000-45000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #df1327; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">>45000-50000</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR13UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` + `<svg width="60" height="50" style="transform: rotate(90deg);">
                <g>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
                </g>
                </svg>` + `</span><br>`
                );
            }
            panelLayerMETAR13UTC_lists.innerHTML = clickedMETAR13UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 14UTC") {
            if (panelLayerMETAR14UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR14UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                panelLayerMETAR14UTC_lists.style.display = 'flex';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR14UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR14UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR14UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #2f7eb6; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">0-1000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #63abb3; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">1000-2000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #9ed1a1; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">2000-4000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #c4ebaa; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">4000-8000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #edf5bf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">8000-12000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fcecaf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">12000-20000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fdca82; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">20000-30000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #f59a4e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">30000-40000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #e35d2b; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">40000-45000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #df1327; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">>45000-50000</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR14UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` + `<svg width="60" height="50" style="transform: rotate(90deg);">
                <g>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
                </g>
                </svg>` + `</span><br>`
                );
            }
            panelLayerMETAR14UTC_lists.innerHTML = clickedMETAR14UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 15UTC") {
            if (panelLayerMETAR15UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR15UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                panelLayerMETAR15UTC_lists.style.display = 'flex';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR15UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR15UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR15UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #2f7eb6; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">0-1000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #63abb3; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">1000-2000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #9ed1a1; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">2000-4000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #c4ebaa; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">4000-8000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #edf5bf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">8000-12000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fcecaf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">12000-20000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fdca82; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">20000-30000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #f59a4e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">30000-40000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #e35d2b; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">40000-45000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #df1327; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">>45000-50000</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR15UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` + `<svg width="60" height="50" style="transform: rotate(90deg);">
                <g>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
                </g>
                </svg>` + `</span><br>`
                );
            }
            panelLayerMETAR15UTC_lists.innerHTML = clickedMETAR15UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 16UTC") {
            if (panelLayerMETAR16UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR16UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                panelLayerMETAR16UTC_lists.style.display = 'flex';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR16UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR16UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR16UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #2f7eb6; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">0-1000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #63abb3; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">1000-2000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #9ed1a1; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">2000-4000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #c4ebaa; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">4000-8000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #edf5bf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">8000-12000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fcecaf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">12000-20000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fdca82; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">20000-30000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #f59a4e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">30000-40000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #e35d2b; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">40000-45000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #df1327; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">>45000-50000</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR16UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` + `<svg width="60" height="50" style="transform: rotate(90deg);">
                <g>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
                </g>
                </svg>` + `</span><br>`
                );
            }
            panelLayerMETAR16UTC_lists.innerHTML = clickedMETAR16UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 17UTC") {
            if (panelLayerMETAR17UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR17UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                panelLayerMETAR17UTC_lists.style.display = 'flex';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR17UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR17UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR17UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #2f7eb6; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">0-1000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #63abb3; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">1000-2000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #9ed1a1; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">2000-4000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #c4ebaa; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">4000-8000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #edf5bf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">8000-12000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fcecaf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">12000-20000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fdca82; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">20000-30000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #f59a4e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">30000-40000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #e35d2b; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">40000-45000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #df1327; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">>45000-50000</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR17UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` + `<svg width="60" height="50" style="transform: rotate(90deg);">
                <g>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
                </g>
                </svg>` + `</span><br>`
                );
            }
            panelLayerMETAR17UTC_lists.innerHTML = clickedMETAR17UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 18UTC") {
            if (panelLayerMETAR18UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR18UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                panelLayerMETAR18UTC_lists.style.display = 'flex';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR18UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR18UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR18UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #2f7eb6; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">0-1000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #63abb3; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">1000-2000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #9ed1a1; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">2000-4000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #c4ebaa; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">4000-8000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #edf5bf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">8000-12000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fcecaf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">12000-20000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fdca82; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">20000-30000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #f59a4e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">30000-40000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #e35d2b; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">40000-45000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #df1327; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">>45000-50000</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR18UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` + `<svg width="60" height="50" style="transform: rotate(90deg);">
                <g>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
                </g>
                </svg>` + `</span><br>`
                );
            }
            panelLayerMETAR18UTC_lists.innerHTML = clickedMETAR18UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 19UTC") {
            if (panelLayerMETAR19UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR19UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                panelLayerMETAR19UTC_lists.style.display = 'flex';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR19UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR19UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR19UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #2f7eb6; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">0-1000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #63abb3; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">1000-2000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #9ed1a1; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">2000-4000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #c4ebaa; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">4000-8000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #edf5bf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">8000-12000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fcecaf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">12000-20000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fdca82; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">20000-30000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #f59a4e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">30000-40000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #e35d2b; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">40000-45000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #df1327; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">>45000-50000</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR19UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` + `<svg width="60" height="50" style="transform: rotate(90deg);">
                <g>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
                </g>
                </svg>` + `</span><br>`
                );
            }
            panelLayerMETAR19UTC_lists.innerHTML = clickedMETAR19UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 20UTC") {
            if (panelLayerMETAR20UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR20UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                panelLayerMETAR20UTC_lists.style.display = 'flex';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR20UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR20UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR20UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #2f7eb6; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">0-1000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #63abb3; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">1000-2000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #9ed1a1; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">2000-4000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #c4ebaa; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">4000-8000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #edf5bf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">8000-12000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fcecaf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">12000-20000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fdca82; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">20000-30000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #f59a4e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">30000-40000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #e35d2b; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">40000-45000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #df1327; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">>45000-50000</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR20UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` + `<svg width="60" height="50" style="transform: rotate(90deg);">
                <g>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
                </g>
                </svg>` + `</span><br>`
                );
            }
            panelLayerMETAR20UTC_lists.innerHTML = clickedMETAR20UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 21UTC") {
            if (panelLayerMETAR21UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR21UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                panelLayerMETAR21UTC_lists.style.display = 'flex';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR21UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR21UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR21UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #2f7eb6; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">0-1000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #63abb3; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">1000-2000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #9ed1a1; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">2000-4000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #c4ebaa; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">4000-8000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #edf5bf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">8000-12000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fcecaf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">12000-20000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fdca82; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">20000-30000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #f59a4e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">30000-40000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #e35d2b; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">40000-45000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #df1327; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">>45000-50000</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR21UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` + `<svg width="60" height="50" style="transform: rotate(90deg);">
                <g>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
                </g>
                </svg>` + `</span><br>`
                );
            }
            panelLayerMETAR21UTC_lists.innerHTML = clickedMETAR21UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 22UTC") {
            if (panelLayerMETAR22UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR22UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                panelLayerMETAR22UTC_lists.style.display = 'flex';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR22UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR22UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR22UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #2f7eb6; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">0-1000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #63abb3; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">1000-2000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #9ed1a1; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">2000-4000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #c4ebaa; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">4000-8000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #edf5bf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">8000-12000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fcecaf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">12000-20000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fdca82; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">20000-30000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #f59a4e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">30000-40000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #e35d2b; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">40000-45000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #df1327; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">>45000-50000</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR22UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` + `<svg width="60" height="50" style="transform: rotate(90deg);">
                <g>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
                </g>
                </svg>` + `</span><br>`
                );
            }
            panelLayerMETAR22UTC_lists.innerHTML = clickedMETAR22UTCLists.join("");
        }
        if (_this.context._layer.group.name == "METAR 23UTC") {
            if (panelLayerMETAR23UTC_Title.innerHTML == '') {
                METAR.innerHTML = "METAR"
                panelLayerMETAR23UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                panelLayerMETAR23UTC_lists.style.display = 'flex';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedMETAR23UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                clickedMETAR23UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
     <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
    <span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedMETAR23UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #2f7eb6; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">0-1000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #63abb3; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">1000-2000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #9ed1a1; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">2000-4000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #c4ebaa; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">4000-8000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #edf5bf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">8000-12000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fcecaf; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">12000-20000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #fdca82; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">20000-30000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #f59a4e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">30000-40000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #e35d2b; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">40000-45000</span>
    <span style="align-items: center; width:69px; height:18px; border-radius: 15%; background-color: #df1327; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;">>45000-50000</span>
  </span>
</span><br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedMETAR23UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` + `<svg width="60" height="50" style="transform: rotate(90deg);">
                <g>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
                </g>
                </svg>` + `</span><br>`
                );
            }
            panelLayerMETAR23UTC_lists.innerHTML = clickedMETAR23UTCLists.join("");
        }
        // SYNOP--
        if (_this.context._layer.group.name == "SYNOP 00UTC") {
            if (panelLayerSYNOP00UTC_Title.innerHTML == '') {
                SYNOP.innerHTML = "SYNOP"
                panelLayerSYNOP00UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                SYNOP_Row.style.display = 'block';
            }

                if (layer_name == 'TEMPERATURE') {
                    clickedSYNOP00UTCLists.push(
                        `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
  <span style="align-items: center; width:35px; height:18px; border-radius: 15%; background-color: #6230fa; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 0;">10-15</span>
    <span style="align-items: center; width:35px; height:18px; border-radius: 15%; background-color: #ff30ac; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 0;">15-30</span>
    <span style="align-items: center; width:35px; height:18px; border-radius: 15%; background-color: #fdff2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 0;">30-35</span>
    <span style="align-items: center; width:35px; height:18px; border-radius: 15%; background-color: #ffab2a; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 0;">35-40</span>
    <span style="align-items: center; width:35px; height:18px; border-radius: 15%; background-color: #f86929; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 0;">40-45</span>
    <span style="align-items: center; width:35px; height:18px; border-radius: 15%; background-color: #ff342e; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 0;">45</span>
  </span>
</span><br>`
                    );
                }
                if (layer_name == 'MEAN SEA LEVEL PRESSURE') {
                    clickedSYNOP00UTCLists.push(
                        `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                        ` <img src="img/synop/synop_mslp.jpg" style="width: 125px; height: 150px;">` +
                        `</span><br>`
                    )
                }
                if (layer_name == 'CLOUD COVER') {
                    clickedSYNOP00UTCLists.push(
                        `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                        ` <img src="img/synop/synop_cloud.jpg" style="width: 125px; height: 150px;">` +
                        `</span><br>`
                    );
                }
                if (layer_name == 'GEOPOTENTIAL HEIGHT') {
                    clickedSYNOP00UTCLists.push(
                        `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                        ` <img src="img/synop/synop_Geo.jpg" style="width: 125px; height: 150px;">` +
                        `</span><br>`
                    );
                }
                if (layer_name == 'RELATIVE HUMIDITY') {
                    clickedSYNOP00UTCLists.push(
                        `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                        ` <img src="img/synop/synop_humidity.jpg" style="width: 125px; height: 150px;">` +
                        `</span><br>`
                    );
                }
                if (layer_name == 'VISIBILITY') {
                    clickedSYNOP00UTCLists.push(
                        `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                        ` <img src="img/synop/synop_visibility.jpg" style="width: 125px; height: 150px;">` +
                        `</span><br>`
                    );
                }
                if (layer_name == 'WIND SPEED AND DIRECTION') {
                    clickedSYNOP00UTCLists.push(
                        `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` + `<svg width="60" height="50" style="transform: rotate(90deg);">
                <g>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
                </g>
                </svg>` + `</span><br>`
                );
            }
            if (layer_name == '3h RAINFALL') {
                clickedSYNOP00UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_rainfall.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }

            panelLayerSYNOP00UTC_lists.innerHTML = clickedSYNOP00UTCLists.join("");
        }

        if (_this.context._layer.group.name == "SYNOP 03UTC") {
            if (panelLayerSYNOP03UTC_Title.innerHTML == '') {
                SYNOP.innerHTML = "SYNOP"
                panelLayerSYNOP03UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                SYNOP_Row.style.display = 'block';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedSYNOP03UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_temperature.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'MEAN SEA LEVEL PRESSURE') {
                clickedSYNOP03UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_mslp.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'CLOUD COVER') {
                clickedSYNOP03UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_cloud.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'GEOPOTENTIAL HEIGHT') {
                clickedSYNOP03UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_Geo.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'RELATIVE HUMIDITY') {
                clickedSYNOP03UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_humidity.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedSYNOP03UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_visibility.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedSYNOP03UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` + `<svg width="60" height="50" style="transform: rotate(90deg);">
                <g>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
                </g>
                </svg>` + `</span><br>`
                );
            }
            if (layer_name == '3h RAINFALL') {
                clickedSYNOP03UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_rainfall.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }

            panelLayerSYNOP03UTC_lists.innerHTML = clickedSYNOP03UTCLists.join("");
        }
        if (_this.context._layer.group.name == "SYNOP 06UTC") {
            if (panelLayerSYNOP06UTC_Title.innerHTML == '') {
                SYNOP.innerHTML = "SYNOP"
                panelLayerSYNOP06UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                SYNOP_Row.style.display = 'block';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedSYNOP06UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_temperature.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'MEAN SEA LEVEL PRESSURE') {
                clickedSYNOP06UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_mslp.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'CLOUD COVER') {
                clickedSYNOP06UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_cloud.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'GEOPOTENTIAL HEIGHT') {
                clickedSYNOP06UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_Geo.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'RELATIVE HUMIDITY') {
                clickedSYNOP06UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_humidity.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedSYNOP06UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_visibility.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedSYNOP06UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` + `<svg width="60" height="50" style="transform: rotate(90deg);">
                <g>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
                </g>
                </svg>` + `</span><br>`
                );
            }
            if (layer_name == '3h RAINFALL') {
                clickedSYNOP06UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_rainfall.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }

            panelLayerSYNOP06UTC_lists.innerHTML = clickedSYNOP06UTCLists.join("");
        }
        if (_this.context._layer.group.name == "SYNOP 09UTC") {
            if (panelLayerSYNOP09UTC_Title.innerHTML == '') {
                SYNOP.innerHTML = "SYNOP"
                panelLayerSYNOP09UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                SYNOP_Row.style.display = 'block';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedSYNOP09UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_temperature.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'MEAN SEA LEVEL PRESSURE') {
                clickedSYNOP09UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_mslp.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'CLOUD COVER') {
                clickedSYNOP09UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_cloud.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'GEOPOTENTIAL HEIGHT') {
                clickedSYNOP09UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_Geo.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'RELATIVE HUMIDITY') {
                clickedSYNOP09UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_humidity.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedSYNOP09UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_visibility.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedSYNOP09UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` + `<svg width="60" height="50" style="transform: rotate(90deg);">
                <g>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
                </g>
                </svg>` + `</span><br>`
                );
            }
            if (layer_name == '3h RAINFALL') {
                clickedSYNOP09UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_rainfall.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }

            panelLayerSYNOP09UTC_lists.innerHTML = clickedSYNOP09UTCLists.join("");
        }
        if (_this.context._layer.group.name == "SYNOP 12UTC") {
            if (panelLayerSYNOP12UTC_Title.innerHTML == '') {
                SYNOP.innerHTML = "SYNOP"
                panelLayerSYNOP12UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                SYNOP_Row.style.display = 'block';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedSYNOP12UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_temperature.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'MEAN SEA LEVEL PRESSURE') {
                clickedSYNOP12UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_mslp.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'CLOUD COVER') {
                clickedSYNOP12UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_cloud.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'GEOPOTENTIAL HEIGHT') {
                clickedSYNOP12UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_Geo.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'RELATIVE HUMIDITY') {
                clickedSYNOP12UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_humidity.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedSYNOP12UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_visibility.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedSYNOP12UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` + `<svg width="60" height="50" style="transform: rotate(90deg);">
                <g>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
                </g>
                </svg>` + `</span><br>`
                );
            }
            if (layer_name == '3h RAINFALL') {
                clickedSYNOP12UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_rainfall.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }

            panelLayerSYNOP12UTC_lists.innerHTML = clickedSYNOP12UTCLists.join("");
        }
        if (_this.context._layer.group.name == "SYNOP 15UTC") {
            if (panelLayerSYNOP15UTC_Title.innerHTML == '') {
                SYNOP.innerHTML = "SYNOP"
                panelLayerSYNOP15UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                SYNOP_Row.style.display = 'block';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedSYNOP15UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_temperature.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'MEAN SEA LEVEL PRESSURE') {
                clickedSYNOP15UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_mslp.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'CLOUD COVER') {
                clickedSYNOP15UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_cloud.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'GEOPOTENTIAL HEIGHT') {
                clickedSYNOP15UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_Geo.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'RELATIVE HUMIDITY') {
                clickedSYNOP15UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_humidity.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedSYNOP15UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_visibility.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedSYNOP15UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` + `<svg width="60" height="50" style="transform: rotate(90deg);">
                <g>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
                </g>
                </svg>` + `</span><br>`
                );
            }
            if (layer_name == '3h RAINFALL') {
                clickedSYNOP15UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_rainfall.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }

            panelLayerSYNOP15UTC_lists.innerHTML = clickedSYNOP15UTCLists.join("");
        }
        if (_this.context._layer.group.name == "SYNOP 18UTC") {
            if (panelLayerSYNOP18UTC_Title.innerHTML == '') {
                SYNOP.innerHTML = "SYNOP"
                panelLayerSYNOP18UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                SYNOP_Row.style.display = 'block';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedSYNOP18UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_temperature.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'MEAN SEA LEVEL PRESSURE') {
                clickedSYNOP18UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_mslp.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'CLOUD COVER') {
                clickedSYNOP18UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_cloud.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'GEOPOTENTIAL HEIGHT') {
                clickedSYNOP18UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_Geo.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'RELATIVE HUMIDITY') {
                clickedSYNOP18UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_humidity.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedSYNOP18UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_visibility.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedSYNOP18UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` + `<svg width="60" height="50" style="transform: rotate(90deg);">
                <g>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
                </g>
                </svg>` + `</span><br>`
                );
            }
            if (layer_name == '3h RAINFALL') {
                clickedSYNOP18UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_rainfall.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }

            panelLayerSYNOP18UTC_lists.innerHTML = clickedSYNOP18UTCLists.join("");
        }
        if (_this.context._layer.group.name == "SYNOP 21UTC") {
            if (panelLayerSYNOP21UTC_Title.innerHTML == '') {
                SYNOP.innerHTML = "SYNOP"
                panelLayerSYNOP21UTC_Title.innerHTML = _this.context._layer.group.name + ':'
                SYNOP_Row.style.display = 'block';
            }

            if (layer_name == 'TEMPERATURE') {
                clickedSYNOP21UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_temperature.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'MEAN SEA LEVEL PRESSURE') {
                clickedSYNOP21UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_mslp.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'CLOUD COVER') {
                clickedSYNOP21UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_cloud.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'GEOPOTENTIAL HEIGHT') {
                clickedSYNOP21UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_Geo.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'RELATIVE HUMIDITY') {
                clickedSYNOP21UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_humidity.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'VISIBILITY') {
                clickedSYNOP21UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_visibility.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                clickedSYNOP21UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` + `<svg width="60" height="50" style="transform: rotate(90deg);">
                <g>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
                </g>
                </svg>` + `</span><br>`
                );
            }
            if (layer_name == '3h RAINFALL') {
                clickedSYNOP21UTCLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/synop/synop_rainfall.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }

            panelLayerSYNOP21UTC_lists.innerHTML = clickedSYNOP21UTCLists.join("");
        }
        // RADAR--
        if (_this.context._layer.group.name == "Radar Products") {
            if (panelLayerRADARPRODUCTS_Title.innerHTML == '') {
                RADARPRODUCTS.innerHTML = "RADAR"
                panelLayerRADARPRODUCTS_Title.innerHTML = _this.context._layer.group.name + ':'
                RADAR_Row.style.display = 'block';
            }

            if (layer_name == 'Radar Reflectivity') {
                clickedRADARPRODUCTSLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/radar/radar_reflectivity.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'Radar Animation') {
                clickedRADARPRODUCTSLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayerRADARPRODUCTS_lists.innerHTML = clickedRADARPRODUCTSLists.join("");
        }
        if (_this.context._layer.group.name == "Satellite Observation") {
            if (panelLayerSATELLITE_Title.innerHTML == '') {
                SATELLITE.innerHTML = "SATELLITE"
                panelLayerSATELLITE_Title.innerHTML = _this.context._layer.group.name + ':'
                SATELLITE_Row.style.display = 'block';
            }

            if (layer_name == 'TIR1') {
                clickedSATELLITELists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'VIS') {
                clickedSATELLITELists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'CTBT') {
                clickedSATELLITELists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'LOW LEVEL CONVERGENCE') {
                clickedSATELLITELists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'UPPER LEVEL DIVEGENCE') {
                clickedSATELLITELists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'MID LEVEL SHEAR') {
                clickedSATELLITELists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'VORTICITY AT 200hPa') {
                clickedSATELLITELists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'VORTICITY AT 500hPa') {
                clickedSATELLITELists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'VORTICITY AT 700hPa') {
                clickedSATELLITELists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'VORTICITY AT 850hPa') {
                clickedSATELLITELists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayerSATELLITE_lists.innerHTML = clickedSATELLITELists.join("");
        }
        if (_this.context._layer.group.name == "Lightning") {
            if (panelLayerLIGHTINING_Title.innerHTML == '') {
                LIGHTINING.innerHTML = "LIGHTINING"
                panelLayerLIGHTINING_Title.innerHTML = _this.context._layer.group.name + ':'
                LIGHTINING_Row.style.display = 'block';
            }

            if (layer_name == 'Last 00-05 min') {
                clickedLIGHTININGLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/light_nowcast.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'Last 05-10 min') {
                clickedLIGHTININGLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/light_nowcast.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'Last 10-15 min') {
                clickedLIGHTININGLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/light_nowcast.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'ILDN Last 05 min') {
                clickedLIGHTININGLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/light_nowcast.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }
            if (layer_name == 'Nowcast Alerts') {
                clickedLIGHTININGLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/light_nowcast.jpg" style="width: 125px; height: 150px;">` +
                    `</span><br>`
                );
            }

            panelLayerLIGHTINING_lists.innerHTML = clickedLIGHTININGLists.join("");
        }


        if (_this.context._layer.group.name == "SOUNDING_00_UTC WIND") {
            if (panelLayerSOUNDING00UTCWIND_Title.innerHTML == '') {
                SOUNDING.innerHTML = "SOUNDING"
                panelLayerSOUNDING00UTCWIND_Title.innerHTML = _this.context._layer.group.name + ':'
                SOUNDING_Row.style.display = 'block';
            }

            if (layer_name == '1000 hpa WIND') {
                clickedSOUNDING00UTCWINDLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '850 hpa WIND') {
                clickedSOUNDING00UTCWINDLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '700 hpa WIND') {
                clickedSOUNDING00UTCWINDLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '500 hpa WIND') {
                clickedSOUNDING00UTCWINDLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '300 hpa WIND') {
                clickedSOUNDING00UTCWINDLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '200 hpa WIND') {
                clickedSOUNDING00UTCWINDLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '100 hpa WIND') {
                clickedSOUNDING00UTCWINDLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '50 hpa WIND') {
                clickedSOUNDING00UTCWINDLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayerSOUNDING00UTCWIND_lists.innerHTML = clickedSOUNDING00UTCWINDLists.join("");
        }

        if (_this.context._layer.group.name == "SOUNDING_12_UTC WIND") {
            if (panelLayerSOUNDING12UTCWIND_Title.innerHTML == '') {
                SOUNDING.innerHTML = "SOUNDING"
                panelLayerSOUNDING12UTCWIND_Title.innerHTML = _this.context._layer.group.name + ':'
                SOUNDING_Row.style.display = 'block';
            }

            if (layer_name == '1000 hpa WIND') {
                clickedSOUNDING12UTCWINDLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '850 hpa WIND') {
                clickedSOUNDING12UTCWINDLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '700 hpa WIND') {
                clickedSOUNDING12UTCWINDLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '500 hpa WIND') {
                clickedSOUNDING12UTCWINDLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '300 hpa WIND') {
                clickedSOUNDING12UTCWINDLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '200 hpa WIND') {
                clickedSOUNDING12UTCWINDLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '100 hpa WIND') {
                clickedSOUNDING12UTCWINDLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '50 hpa WIND') {
                clickedSOUNDING12UTCWINDLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayerSOUNDING12UTCWIND_lists.innerHTML = clickedSOUNDING12UTCWINDLists.join("");
        }

        if (_this.context._layer.group.name == "SOUNDING_00UTC TEMP") {
            if (panelLayerSOUNDING00UTCTEMP_Title.innerHTML == '') {
                SOUNDING.innerHTML = "SOUNDING"
                panelLayerSOUNDING00UTCTEMP_Title.innerHTML = _this.context._layer.group.name + ':'
                SOUNDING_Row.style.display = 'block';
            }

            if (layer_name == '1000 hpa TEMP') {
                clickedSOUNDING00UTCTEMPLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '850 hpa TEMP') {
                clickedSOUNDING00UTCTEMPLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '700 hpa TEMP') {
                clickedSOUNDING00UTCTEMPLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '500 hpa TEMP') {
                clickedSOUNDING00UTCTEMPLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '300 hpa TEMP') {
                clickedSOUNDING00UTCTEMPLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '200 hpa TEMP') {
                clickedSOUNDING00UTCTEMPLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '100 hpa TEMP') {
                clickedSOUNDING00UTCTEMPLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '50 hpa TEMP') {
                clickedSOUNDING00UTCTEMPLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayerSOUNDING00UTCTEMP_lists.innerHTML = clickedSOUNDING00UTCTEMPLists.join("");
        }

        if (_this.context._layer.group.name == "SOUNDING_12UTC TEMP") {
            if (panelLayerSOUNDING12UTCTEMP_Title.innerHTML == '') {
                SOUNDING.innerHTML = "SOUNDING"
                panelLayerSOUNDING12UTCTEMP_Title.innerHTML = _this.context._layer.group.name + ':'
                SOUNDING_Row.style.display = 'block';
            }

            if (layer_name == '1000 hpa TEMP') {
                clickedSOUNDING12UTCTEMPLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '850 hpa TEMP') {
                clickedSOUNDING12UTCTEMPLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '700 hpa TEMP') {
                clickedSOUNDING12UTCTEMPLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '500 hpa TEMP') {
                clickedSOUNDING12UTCTEMPLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '300 hpa TEMP') {
                clickedSOUNDING12UTCTEMPLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '200 hpa TEMP') {
                clickedSOUNDING12UTCTEMPLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '100 hpa TEMP') {
                clickedSOUNDING12UTCTEMPLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '50 hpa TEMP') {
                clickedSOUNDING12UTCTEMPLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayerSOUNDING12UTCTEMP_lists.innerHTML = clickedSOUNDING12UTCTEMPLists.join("");
        }

        if (_this.context._layer.group.name == "SOUNDING_00UTC DEW POINT") {
            if (panelLayerSOUNDING00UTCDEWPOINT_Title.innerHTML == '') {
                SOUNDING.innerHTML = "SOUNDING"
                panelLayerSOUNDING00UTCDEWPOINT_Title.innerHTML = _this.context._layer.group.name + ':'
                SOUNDING_Row.style.display = 'block';
            }

            if (layer_name == '1000 hpa DEW POINT') {
                clickedSOUNDING00UTCDEWPOINTLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '850 hpa DEW POINT') {
                clickedSOUNDING00UTCDEWPOINTLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '700 hpa DEW POINT') {
                clickedSOUNDING00UTCDEWPOINTLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '500 hpa DEW POINT') {
                clickedSOUNDING00UTCDEWPOINTLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '300 hpa DEW POINT') {
                clickedSOUNDING00UTCDEWPOINTLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '200 hpa DEW POINT') {
                clickedSOUNDING00UTCDEWPOINTLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '100 hpa DEW POINT') {
                clickedSOUNDING00UTCDEWPOINTLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '50 hpa DEW POINT') {
                clickedSOUNDING00UTCDEWPOINTLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayerSOUNDING00UTCDEWPOINT_lists.innerHTML = clickedSOUNDING00UTCDEWPOINTLists.join("");
        }

        if (_this.context._layer.group.name == "SOUNDING_12UTC DEW POINT") {
            if (panelLayerSOUNDING12UTCDEWPOINT_Title.innerHTML == '') {
                SOUNDING.innerHTML = "SOUNDING"
                panelLayerSOUNDING12UTCDEWPOINT_Title.innerHTML = _this.context._layer.group.name + ':'
                SOUNDING_Row.style.display = 'block';
            }

            if (layer_name == '1000 hpa DEW POINT') {
                clickedSOUNDING12UTCDEWPOINTLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '850 hpa DEW POINT') {
                clickedSOUNDING12UTCDEWPOINTLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '700 hpa DEW POINT') {
                clickedSOUNDING12UTCDEWPOINTLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '500 hpa DEW POINT') {
                clickedSOUNDING12UTCDEWPOINTLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '300 hpa DEW POINT') {
                clickedSOUNDING12UTCDEWPOINTLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '200 hpa DEW POINT') {
                clickedSOUNDING12UTCDEWPOINTLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '100 hpa DEW POINT') {
                clickedSOUNDING12UTCDEWPOINTLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '50 hpa DEW POINT') {
                clickedSOUNDING12UTCDEWPOINTLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayerSOUNDING12UTCDEWPOINT_lists.innerHTML = clickedSOUNDING12UTCDEWPOINTLists.join("");
        }

        if (_this.context._layer.group.name == "SHIP AND BUOY OBSERVATION") {
            if (panelLayerSHIPANDBUOY_Title.innerHTML == '') {
                SHIPANDBUOY.innerHTML = "SHIP AND BUOY"
                panelLayerSHIPANDBUOY_Title.innerHTML = _this.context._layer.group.name + ':'
                SHIPANDBUOY_Row.style.display = 'block';
            }

            if (layer_name == '00UTC') {
                clickedSHIPANDBUOYLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '01UTC') {
                clickedSHIPANDBUOYLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '02UTC') {
                clickedSHIPANDBUOYLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '03UTC') {
                clickedSHIPANDBUOYLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '04UTC') {
                clickedSHIPANDBUOYLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '05UTC') {
                clickedSHIPANDBUOYLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '06UTC') {
                clickedSHIPANDBUOYLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '07UTC') {
                clickedSHIPANDBUOYLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '08UTC') {
                clickedSHIPANDBUOYLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '09UTC') {
                clickedSHIPANDBUOYLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '10UTC') {
                clickedSHIPANDBUOYLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '11UTC') {
                clickedSHIPANDBUOYLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '12UTC') {
                clickedSHIPANDBUOYLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '13UTC') {
                clickedSHIPANDBUOYLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '14UTC') {
                clickedSHIPANDBUOYLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '15UTC') {
                clickedSHIPANDBUOYLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '16UTC') {
                clickedSHIPANDBUOYLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '17UTC') {
                clickedSHIPANDBUOYLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '18UTC') {
                clickedSHIPANDBUOYLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '19UTC') {
                clickedSHIPANDBUOYLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '20UTC') {
                clickedSHIPANDBUOYLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '21UTC') {
                clickedSHIPANDBUOYLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '22UTC') {
                clickedSHIPANDBUOYLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == '23UTC') {
                clickedSHIPANDBUOYLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayerSHIPANDBUOY_lists.innerHTML = clickedSHIPANDBUOYLists.join("");
        }
        if (_this.context._layer.group.name == "WRF Reflectivity") {
            if (panelLayerWRFReflectivity_Title.innerHTML == '') {
                MESOLSCALE.innerHTML = "MESOLSCALE FORECAST"
                panelLayerWRFReflectivity_Title.innerHTML = _this.context._layer.group.name + ':'
                MESOLSCALE_Row.style.display = 'block';
            }

            if (layer_name == 'Next 03 Hrs') {
                clickedWRFReflectivityLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'Next 03-06 Hrs') {
                clickedWRFReflectivityLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayerWRFReflectivity_lists.innerHTML = clickedWRFReflectivityLists.join("");
        }
        if (_this.context._layer.group.name == "WRF lightning Product") {
            if (panelLayerWRFlightningProduct_Title.innerHTML == '') {
                MESOLSCALE.innerHTML = "MESOLSCALE FORECAST"
                panelLayerWRFlightningProduct_Title.innerHTML = _this.context._layer.group.name + ':'
                MESOLSCALE_Row.style.display = 'block';
            }

            if (layer_name == 'Next 03 Hrs') {
                clickedWRFlightningProductLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'Next 03-06 Hrs') {
                clickedWRFlightningProductLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayerWRFlightningProduct_lists.innerHTML = clickedWRFlightningProductLists.join("");
        }
        if (_this.context._layer.group.name == "WRF Accumlated Rainfall") {
            if (panelLayerWRFAccumlatedRainfall_Title.innerHTML == '') {
                MESOLSCALE.innerHTML = "MESOLSCALE FORECAST"
                panelLayerWRFAccumlatedRainfall_Title.innerHTML = _this.context._layer.group.name + ':'
                MESOLSCALE_Row.style.display = 'block';
            }

            if (layer_name == 'Next 03 Hrs') {
                clickedWRFAccumlatedRainfallLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'Next 03-06 Hrs') {
                clickedWRFAccumlatedRainfallLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayerWRFAccumlatedRainfall_lists.innerHTML = clickedWRFAccumlatedRainfallLists.join("");
        }
        if (_this.context._layer.group.name == "lightning Potential index") {
            if (panelLayerlightningPotentialindex_Title.innerHTML == '') {
                MESOLSCALE.innerHTML = "MESOLSCALE FORECAST"
                panelLayerlightningPotentialindex_Title.innerHTML = _this.context._layer.group.name + ':'
                MESOLSCALE_Row.style.display = 'block';
            }

            if (layer_name == 'Next 01 Hrs') {
                clickedlightningPotentialindexLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'Next 01-02 Hrs') {
                clickedlightningPotentialindexLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'Next 02-03 Hrs') {
                clickedlightningPotentialindexLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayerlightningPotentialindex_lists.innerHTML = clickedlightningPotentialindexLists.join("");
        }
        if (_this.context._layer.group.name == "NCUMR lightning Product") {
            if (panelLayerNCUMRlightningProduct_Title.innerHTML == '') {
                MESOLSCALE.innerHTML = "MESOLSCALE FORECAST"
                panelLayerNCUMRlightningProduct_Title.innerHTML = _this.context._layer.group.name + ':'
                MESOLSCALE_Row.style.display = 'block';
            }

            if (layer_name == 'Next 03 Hrs') {
                clickedNCUMRlightningProductLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'Next 03-06 Hrs') {
                clickedNCUMRlightningProductLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayerNCUMRlightningProduct_lists.innerHTML = clickedNCUMRlightningProductLists.join("");
        }
        if (_this.context._layer.group.name == "NCUMR Wind Gust") {
            if (panelLayerNCUMRWindGust_Title.innerHTML == '') {
                MESOLSCALE.innerHTML = "MESOLSCALE FORECAST"
                panelLayerNCUMRWindGust_Title.innerHTML = _this.context._layer.group.name + ':'
                MESOLSCALE_Row.style.display = 'block';
            }

            if (layer_name == 'Next 03 Hrs') {
                clickedNCUMRWindGustLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'Next 03-06 Hrs') {
                clickedNCUMRWindGustLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayerNCUMRWindGust_lists.innerHTML = clickedNCUMRWindGustLists.join("");
        }
        if (_this.context._layer.group.name == "NCUMR Rainfall") {
            if (panelLayerNCUMRRainfall_Title.innerHTML == '') {
                MESOLSCALE.innerHTML = "MESOLSCALE FORECAST"
                panelLayerNCUMRRainfall_Title.innerHTML = _this.context._layer.group.name + ':'
                MESOLSCALE_Row.style.display = 'block';
            }

            if (layer_name == 'Next 03 Hrs') {
                clickedNCUMRRainfallLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'Next 03-06 Hrs') {
                clickedNCUMRRainfallLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayerNCUMRRainfall_lists.innerHTML = clickedNCUMRRainfallLists.join("");
        }
        if (_this.context._layer.group.name == "HRRR_SP Hourly DBZ") {
            if (panelLayerHRRR_SPHourlyDBZ_Title.innerHTML == '') {
                MESOLSCALE.innerHTML = "MESOLSCALE FORECAST"
                panelLayerHRRR_SPHourlyDBZ_Title.innerHTML = _this.context._layer.group.name + ':'
                MESOLSCALE_Row.style.display = 'block';
            }

            if (layer_name == 'Next 01 Hrs') {
                clickedHRRR_SPHourlyDBZLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'Next 01-02 Hrs') {
                clickedHRRR_SPHourlyDBZLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'Next 02-03 Hrs') {
                clickedHRRR_SPHourlyDBZLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayerHRRR_SPHourlyDBZ_lists.innerHTML = clickedHRRR_SPHourlyDBZLists.join("");
        }
        if (_this.context._layer.group.name == "HRRR_NE Hourly DBZ") {
            if (panelLayerHRRR_NEHourlyDBZ_Title.innerHTML == '') {
                MESOLSCALE.innerHTML = "MESOLSCALE FORECAST"
                panelLayerHRRR_NEHourlyDBZ_Title.innerHTML = _this.context._layer.group.name + ':'
                MESOLSCALE_Row.style.display = 'block';
            }

            if (layer_name == 'Next 01 Hrs') {
                clickedHRRR_NEHourlyDBZLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'Next 01-02 Hrs') {
                clickedHRRR_NEHourlyDBZLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'Next 02-03 Hrs') {
                clickedHRRR_NEHourlyDBZLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayerHRRR_NEHourlyDBZ_lists.innerHTML = clickedHRRR_NEHourlyDBZLists.join("");
        }
        if (_this.context._layer.group.name == "HRRR_NW Hourly DBZ") {
            if (panelLayerHRRR_NWHourlyDBZ_Title.innerHTML == '') {
                MESOLSCALE.innerHTML = "MESOLSCALE FORECAST"
                panelLayerHRRR_NWHourlyDBZ_Title.innerHTML = _this.context._layer.group.name + ':'
                MESOLSCALE_Row.style.display = 'block';
            }

            if (layer_name == 'Next 01 Hrs') {
                clickedHRRR_NWHourlyDBZLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'Next 01-02 Hrs') {
                clickedHRRR_NWHourlyDBZLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'Next 02-03 Hrs') {
                clickedHRRR_NWHourlyDBZLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayerHRRR_NWHourlyDBZ_lists.innerHTML = clickedHRRR_NWHourlyDBZLists.join("");
        }
        if (_this.context._layer.group.name == "EWRF MaxZ") {
            if (panelLayerEWRFMaxZ_Title.innerHTML == '') {
                MESOLSCALE.innerHTML = "MESOLSCALE FORECAST"
                panelLayerEWRFMaxZ_Title.innerHTML = _this.context._layer.group.name + ':'
                MESOLSCALE_Row.style.display = 'block';
            }

            if (layer_name == 'Next 01 Hrs') {
                clickedEWRFMaxZLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'Next 01-02 Hrs') {
                clickedEWRFMaxZLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'Next 02-03 Hrs') {
                clickedEWRFMaxZLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayerEWRFMaxZ_lists.innerHTML = clickedEWRFMaxZLists.join("");
        }
        if (_this.context._layer.group.name == "EWRF Lightning") {
            if (panelLayerEWRFLightning_Title.innerHTML == '') {
                MESOLSCALE.innerHTML = "MESOLSCALE FORECAST"
                panelLayerEWRFLightning_Title.innerHTML = _this.context._layer.group.name + ':'
                MESOLSCALE_Row.style.display = 'block';
            }

            if (layer_name == 'Next 01 Hrs') {
                clickedEWRFLightningLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'Next 01-02 Hrs') {
                clickedEWRFLightningLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'Next 02-03 Hrs') {
                clickedEWRFLightningLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayerEWRFLightning_lists.innerHTML = clickedEWRFLightningLists.join("");
        }
        // MEDIUM
        if (_this.context._layer.group.name == "Rainfall Intensity Day1") {
            if (panelLayerRainfallIntensityDay1_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayerRainfallIntensityDay1_Title.innerHTML = _this.context._layer.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }

            if (layer_name == 'GFS DAY1') {
                clickedRainfallIntensityDay1Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'NCUM DAY1') {
                clickedRainfallIntensityDay1Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'NEPS DAY1') {
                clickedRainfallIntensityDay1Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'WRF DAY1') {
                clickedRainfallIntensityDay1Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'GEFS DAY1') {
                clickedRainfallIntensityDay1Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'ECMWF DAY1') {
                clickedRainfallIntensityDay1Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayerRainfallIntensityDay1_lists.innerHTML = clickedRainfallIntensityDay1Lists.join("");
        }
        if (_this.context._layer.group.name == "Rainfall Intensity Day2") {
            if (panelLayerRainfallIntensityDay2_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayerRainfallIntensityDay2_Title.innerHTML = _this.context._layer.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }

            if (layer_name == 'GFS DAY2') {
                clickedRainfallIntensityDay2Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'NCUM DAY2') {
                clickedRainfallIntensityDay2Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'NEPS DAY2') {
                clickedRainfallIntensityDay2Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'WRF DAY2') {
                clickedRainfallIntensityDay2Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'GEFS DAY2') {
                clickedRainfallIntensityDay2Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'ECMWF DAY2') {
                clickedRainfallIntensityDay2Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayerRainfallIntensityDay2_lists.innerHTML = clickedRainfallIntensityDay2Lists.join("");
        }
        if (_this.context._layer.group.name == "Rainfall Intensity Day3") {
            if (panelLayerRainfallIntensityDay3_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayerRainfallIntensityDay3_Title.innerHTML = _this.context._layer.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }

            if (layer_name == 'GFS DAY3') {
                clickedRainfallIntensityDay3Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'NCUM DAY3') {
                clickedRainfallIntensityDay3Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'NEPS DAY3') {
                clickedRainfallIntensityDay3Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'WRF DAY3') {
                clickedRainfallIntensityDay3Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'GEFS DAY3') {
                clickedRainfallIntensityDay3Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'ECMWF DAY3') {
                clickedRainfallIntensityDay3Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayerRainfallIntensityDay3_lists.innerHTML = clickedRainfallIntensityDay3Lists.join("");
        }
        if (_this.context._layer.group.name == "Rainfall Intensity Day4") {
            if (panelLayerRainfallIntensityDay4_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayerRainfallIntensityDay4_Title.innerHTML = _this.context._layer.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }

            if (layer_name == 'GFS DAY4') {
                clickedRainfallIntensityDay4Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'NCUM DAY4') {
                clickedRainfallIntensityDay4Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'NEPS DAY4') {
                clickedRainfallIntensityDay4Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'WRF DAY4') {
                clickedRainfallIntensityDay4Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'GEFS DAY4') {
                clickedRainfallIntensityDay4Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'ECMWF DAY4') {
                clickedRainfallIntensityDay4Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayerRainfallIntensityDay4_lists.innerHTML = clickedRainfallIntensityDay4Lists.join("");
        }
        if (_this.context._layer.group.name == "Rainfall Intensity Day5") {
            if (panelLayerRainfallIntensityDay5_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayerRainfallIntensityDay5_Title.innerHTML = _this.context._layer.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }

            if (layer_name == 'GFS DAY5') {
                clickedRainfallIntensityDay5Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'NCUM DAY5') {
                clickedRainfallIntensityDay5Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'NEPS DAY5') {
                clickedRainfallIntensityDay5Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'WRF DAY5') {
                clickedRainfallIntensityDay5Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'GEFS DAY5') {
                clickedRainfallIntensityDay5Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'ECMWF DAY5') {
                clickedRainfallIntensityDay5Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayerRainfallIntensityDay5_lists.innerHTML = clickedRainfallIntensityDay5Lists.join("");
        }










        if (_this.context._layer.group.name == "MSLP Day1") {
            if (panelLayerMSLPDay1_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayerMSLPDay1_Title.innerHTML = _this.context._layer.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }

            if (layer_name == 'GFS DAY1') {
                clickedMSLPDay1Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'NCUM DAY1') {
                clickedMSLPDay1Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'NEPS DAY1') {
                clickedMSLPDay1Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'WRF DAY1') {
                clickedMSLPDay1Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'GEFS DAY1') {
                clickedMSLPDay1Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'ECMWF DAY1') {
                clickedMSLPDay1Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayerMSLPDay1_lists.innerHTML = clickedMSLPDay1Lists.join("");
        }
        if (_this.context._layer.group.name == "MSLP Day2") {
            if (panelLayerMSLPDay2_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayerMSLPDay2_Title.innerHTML = _this.context._layer.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }

            if (layer_name == 'GFS DAY2') {
                clickedMSLPDay2Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'NCUM DAY2') {
                clickedMSLPDay2Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'NEPS DAY2') {
                clickedMSLPDay2Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'WRF DAY2') {
                clickedMSLPDay2Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'GEFS DAY2') {
                clickedMSLPDay2Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'ECMWF DAY2') {
                clickedMSLPDay2Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayerMSLPDay2_lists.innerHTML = clickedMSLPDay2Lists.join("");
        }
        if (_this.context._layer.group.name == "MSLP Day3") {
            if (panelLayerMSLPDay3_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayerMSLPDay3_Title.innerHTML = _this.context._layer.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }

            if (layer_name == 'GFS DAY3') {
                clickedMSLPDay3Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'NCUM DAY3') {
                clickedMSLPDay3Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'NEPS DAY3') {
                clickedMSLPDay3Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'WRF DAY3') {
                clickedMSLPDay3Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'GEFS DAY3') {
                clickedMSLPDay3Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'ECMWF DAY3') {
                clickedMSLPDay3Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayerMSLPDay3_lists.innerHTML = clickedMSLPDay3Lists.join("");
        }
        if (_this.context._layer.group.name == "MSLP Day4") {
            if (panelLayerMSLPDay4_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayerMSLPDay4_Title.innerHTML = _this.context._layer.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }

            if (layer_name == 'GFS DAY4') {
                clickedMSLPDay4Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'NCUM DAY4') {
                clickedMSLPDay4Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'NEPS DAY4') {
                clickedMSLPDay4Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'WRF DAY4') {
                clickedMSLPDay4Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'GEFS DAY4') {
                clickedMSLPDay4Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'ECMWF DAY4') {
                clickedMSLPDay4Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayerMSLPDay4_lists.innerHTML = clickedMSLPDay4Lists.join("");
        }
        if (_this.context._layer.group.name == "MSLP Day5") {
            if (panelLayerMSLPDay5_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayerMSLPDay5_Title.innerHTML = _this.context._layer.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }

            if (layer_name == 'GFS DAY5') {
                clickedMSLPDay5Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'NCUM DAY5') {
                clickedMSLPDay5Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'NEPS DAY5') {
                clickedMSLPDay5Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'WRF DAY5') {
                clickedMSLPDay5Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'GEFS DAY5') {
                clickedMSLPDay5Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'ECMWF DAY5') {
                clickedMSLPDay5Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayerMSLPDay5_lists.innerHTML = clickedMSLPDay5Lists.join("");
        }





        if (_this.context._layer.group.name == "10m WIND Day1") {
            if (panelLayer10mWINDDay1_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayer10mWINDDay1_Title.innerHTML = _this.context._layer.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }

            if (layer_name == 'GFS DAY1') {
                clicked10mWINDDay1Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'NCUM DAY1') {
                clicked10mWINDDay1Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'NEPS DAY1') {
                clicked10mWINDDay1Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'WRF DAY1') {
                clicked10mWINDDay1Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'GEFS DAY1') {
                clicked10mWINDDay1Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'ECMWF DAY1') {
                clicked10mWINDDay1Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayer10mWINDDay1_lists.innerHTML = clicked10mWINDDay1Lists.join("");
        }
        if (_this.context._layer.group.name == "10m WIND Day2") {
            if (panelLayer10mWINDDay2_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayer10mWINDDay2_Title.innerHTML = _this.context._layer.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }

            if (layer_name == 'GFS DAY2') {
                clicked10mWINDDay2Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'NCUM DAY2') {
                clicked10mWINDDay2Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'NEPS DAY2') {
                clicked10mWINDDay2Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'WRF DAY2') {
                clicked10mWINDDay2Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'GEFS DAY2') {
                clicked10mWINDDay2Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'ECMWF DAY2') {
                clicked10mWINDDay2Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayer10mWINDDay2_lists.innerHTML = clicked10mWINDDay2Lists.join("");
        }
        if (_this.context._layer.group.name == "10m WIND Day3") {
            if (panelLayer10mWINDDay3_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayer10mWINDDay3_Title.innerHTML = _this.context._layer.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }

            if (layer_name == 'GFS DAY3') {
                clicked10mWINDDay3Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'NCUM DAY3') {
                clicked10mWINDDay3Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'NEPS DAY3') {
                clicked10mWINDDay3Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'WRF DAY3') {
                clicked10mWINDDay3Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'GEFS DAY3') {
                clicked10mWINDDay3Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'ECMWF DAY3') {
                clicked10mWINDDay3Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayer10mWINDDay3_lists.innerHTML = clicked10mWINDDay3Lists.join("");
        }
        if (_this.context._layer.group.name == "10m WIND Day4") {
            if (panelLayer10mWINDDay4_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayer10mWINDDay4_Title.innerHTML = _this.context._layer.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }

            if (layer_name == 'GFS DAY4') {
                clicked10mWINDDay4Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'NCUM DAY4') {
                clicked10mWINDDay4Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'NEPS DAY4') {
                clicked10mWINDDay4Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'WRF DAY4') {
                clicked10mWINDDay4Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'GEFS DAY4') {
                clicked10mWINDDay4Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'ECMWF DAY4') {
                clicked10mWINDDay4Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayer10mWINDDay4_lists.innerHTML = clicked10mWINDDay4Lists.join("");
        }
        if (_this.context._layer.group.name == "10m WIND Day5") {
            if (panelLayer10mWINDDay5_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayer10mWINDDay5_Title.innerHTML = _this.context._layer.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }

            if (layer_name == 'GFS DAY5') {
                clicked10mWINDDay5Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'NCUM DAY5') {
                clicked10mWINDDay5Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'NEPS DAY5') {
                clicked10mWINDDay5Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'WRF DAY5') {
                clicked10mWINDDay5Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'GEFS DAY5') {
                clicked10mWINDDay5Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }
            if (layer_name == 'ECMWF DAY5') {
                clicked10mWINDDay5Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}<br>`
                );
            }

            panelLayer10mWINDDay5_lists.innerHTML = clicked10mWINDDay5Lists.join("");
        }


    } else {
        console.log("Not Checked");
        var uncheckLayer = _this.context._layer ? layer_group_name + ' ' + _this.context._layer.name : _this
            .context
            .className;
        //Lightning UNCHECK
        if (uncheckLayer == 'Lightning Last 00-05 min') {
            clickedLightningLists = clickedLightningLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerLightninglists.innerHTML = clickedLightningLists.join("");
            map.removeLayer(ggg);
        }
        if (uncheckLayer == 'Lightning Last 05-10 min') {
            clickedLightningLists = clickedLightningLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerLightninglists.innerHTML = clickedLightningLists.join("");
            map.removeLayer(jaipurMarker);
        }
        if (uncheckLayer == 'Lightning Last 10-15 min') {
            clickedLightningLists = clickedLightningLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
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

        //Radar UNCHECK
        if (uncheckLayer == 'Radar Reflectivity Radar Reflectivity') {
            clickedRadarLists = clickedRadarLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRadarlists.innerHTML = clickedRadarLists.join("");
            map.removeLayer(lucknowMarker);
        }
        if (uncheckLayer == 'Radar Reflectivity Radar Animation') {
            clickedRadarLists = clickedRadarLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
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
            Light_RadarRow.style.display = 'none';
        }

        //Exposure UNCHECK
        if (uncheckLayer == 'Exposure Layers District Boundaries') {
            clickedExposureLists = clickedExposureLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerExposureLists.innerHTML = clickedExposureLists.join("");
            map.removeLayer(PuneMarker);
        }
        if (uncheckLayer == 'Exposure Layers Airport') {
            clickedExposureLists = clickedExposureLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerExposureLists.innerHTML = clickedExposureLists.join("");
            map.removeLayer(MumbaiMarker);
        }
        if (uncheckLayer == 'Exposure Layers Hospital') {
            clickedExposureLists = clickedExposureLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerExposureLists.innerHTML = clickedExposureLists.join("");
            map.removeLayer(BidarMarker);
        }
        if (uncheckLayer == 'Exposure Layers sports') {
            clickedExposureLists = clickedExposureLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerExposureLists.innerHTML = clickedExposureLists.join("");
            map.removeLayer(PuneMarker);
        }
        if (uncheckLayer === 'Power Plant') {
            clickedExposureLists = clickedExposureLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerExposureLists.innerHTML = clickedExposureLists.join("");
            map.removeLayer(VijayapuraMarker);
        }
        if (uncheckLayer == 'Exposure Layers Power Station') {
            clickedExposureLists = clickedExposureLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerExposureLists.innerHTML = clickedExposureLists.join("");
            map.removeLayer(SolapurMarker);
        }
        if (uncheckLayer == 'Exposure Layers Oil Refineries') {
            clickedExposureLists = clickedExposureLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerExposureLists.innerHTML = clickedExposureLists.join("");
            map.removeLayer(RanchiMarker);
        }
        if (uncheckLayer == 'Exposure Layers Industrail') {
            clickedExposureLists = clickedExposureLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerExposureLists.innerHTML = clickedExposureLists.join("");
            map.removeLayer(BidarMarker);
        }
        if (uncheckLayer === 'Socio Economic Zone') {
            clickedExposureLists = clickedExposureLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerExposureLists.innerHTML = clickedExposureLists.join("");
            map.removeLayer(PuneMarker);
        }

        if (uncheckLayer == 'Exposure Layers Road Network') {
            clickedExposureLists = clickedExposureLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerExposureLists.innerHTML = clickedExposureLists.join("");
            map.removeLayer(PuneMarker);
        }
        if (uncheckLayer == 'Exposure Layers Railway Network') {
            clickedExposureLists = clickedExposureLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerExposureLists.innerHTML = clickedExposureLists.join("");
            map.removeLayer(PuneMarker);
        }
        if (uncheckLayer == 'Exposure Layers DEM') {
            clickedExposureLists = clickedExposureLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerExposureLists.innerHTML = clickedExposureLists.join("");
            map.removeLayer(BidarMarker);
        }
        if (uncheckLayer == 'Exposure Layers LULC') {
            clickedExposureLists = clickedExposureLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerExposureLists.innerHTML = clickedExposureLists.join("");
            map.removeLayer(PuneMarker);
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
            console.log(yyy);
        }

        //METAR UNCHECK
        if (uncheckLayer == 'METAR 00UTC TEMPERATURE') {
            clickedMETAR00UTCLists = clickedMETAR00UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerMETAR00UTC_lists.innerHTML = clickedMETAR00UTCLists.join("");
            map.removeLayer(SuratMarker);
        }
        if (uncheckLayer == 'METAR 00UTC DEW POINT TEMPERATURE') {
            clickedMETAR00UTCLists = clickedMETAR00UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerMETAR00UTC_lists.innerHTML = clickedMETAR00UTCLists.join("");
            map.removeLayer(JodhpurMarker);
        }
        if (uncheckLayer == 'METAR 00UTC VISIBILITY') {
            clickedMETAR00UTCLists = clickedMETAR00UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerMETAR00UTC_lists.innerHTML = clickedMETAR00UTCLists.join("");
            map.removeLayer(KanpurMarker);
        }
        if (uncheckLayer == 'METAR 00UTC WIND SPEED AND DIRECTION') {
            clickedMETAR00UTCLists = clickedMETAR00UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerMETAR00UTC_lists.innerHTML = clickedMETAR00UTCLists.join("");
            map.removeLayer(MeerutMarker);
        }

        if (panelLayerMETAR00UTC_lists.innerHTML == '') {
            panelLayerMETAR00UTC_Title.innerHTML = '';
            METAR.innerHTML = '';
        }

        //GroupPanelLayer-collapsible-METAR00UTC
        if (panelLayerMETAR00UTC_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        }



        // SYNOP UNCHECK
        if (uncheckLayer == 'SYNOP 00UTC TEMPERATURE') {
            clickedSYNOP00UTCLists = clickedSYNOP00UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP00UTC_lists.innerHTML = clickedSYNOP00UTCLists.join("");

            map.removeLayer(JodhpurMarker);
        }
        if (uncheckLayer == 'SYNOP 00UTC MEAN SEA LEVEL PRESSURE') {
            clickedSYNOP00UTCLists = clickedSYNOP00UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP00UTC_lists.innerHTML = clickedSYNOP00UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 00UTC CLOUD COVER') {
            clickedSYNOP00UTCLists = clickedSYNOP00UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP00UTC_lists.innerHTML = clickedSYNOP00UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 00UTC GEOPOTENTIAL HEIGHT') {
            clickedSYNOP00UTCLists = clickedSYNOP00UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP00UTC_lists.innerHTML = clickedSYNOP00UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 00UTC RELATIVE HUMIDITY') {
            clickedSYNOP00UTCLists = clickedSYNOP00UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP00UTC_lists.innerHTML = clickedSYNOP00UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 00UTC VISIBILITY') {
            clickedSYNOP00UTCLists = clickedSYNOP00UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP00UTC_lists.innerHTML = clickedSYNOP00UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 00UTC WIND SPEED AND DIRECTION') {
            clickedSYNOP00UTCLists = clickedSYNOP00UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP00UTC_lists.innerHTML = clickedSYNOP00UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 00UTC 3h RAINFALL') {
            clickedSYNOP00UTCLists = clickedSYNOP00UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP00UTC_lists.innerHTML = clickedSYNOP00UTCLists.join("");

        }


        if (uncheckLayer == 'SYNOP 03UTC TEMPERATURE') {
            clickedSYNOP03UTCLists = clickedSYNOP03UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP03UTC_lists.innerHTML = clickedSYNOP03UTCLists.join("");

            map.removeLayer(JodhpurMarker);
        }
        if (uncheckLayer == 'SYNOP 03UTC MEAN SEA LEVEL PRESSURE') {
            clickedSYNOP03UTCLists = clickedSYNOP03UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP03UTC_lists.innerHTML = clickedSYNOP03UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 03UTC CLOUD COVER') {
            clickedSYNOP03UTCLists = clickedSYNOP03UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP03UTC_lists.innerHTML = clickedSYNOP03UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 03UTC GEOPOTENTIAL HEIGHT') {
            clickedSYNOP03UTCLists = clickedSYNOP03UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP03UTC_lists.innerHTML = clickedSYNOP03UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 03UTC RELATIVE HUMIDITY') {
            clickedSYNOP03UTCLists = clickedSYNOP03UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP03UTC_lists.innerHTML = clickedSYNOP03UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 03UTC VISIBILITY') {
            clickedSYNOP03UTCLists = clickedSYNOP03UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP03UTC_lists.innerHTML = clickedSYNOP03UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 03UTC WIND SPEED AND DIRECTION') {
            clickedSYNOP03UTCLists = clickedSYNOP03UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP03UTC_lists.innerHTML = clickedSYNOP03UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 03UTC 3h RAINFALL') {
            clickedSYNOP03UTCLists = clickedSYNOP03UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP03UTC_lists.innerHTML = clickedSYNOP03UTCLists.join("");

        }


        if (uncheckLayer == 'SYNOP 06UTC TEMPERATURE') {
            clickedSYNOP06UTCLists = clickedSYNOP06UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP06UTC_lists.innerHTML = clickedSYNOP06UTCLists.join("");

            map.removeLayer(JodhpurMarker);
        }
        if (uncheckLayer == 'SYNOP 06UTC MEAN SEA LEVEL PRESSURE') {
            clickedSYNOP06UTCLists = clickedSYNOP06UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP06UTC_lists.innerHTML = clickedSYNOP06UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 06UTC CLOUD COVER') {
            clickedSYNOP06UTCLists = clickedSYNOP06UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP06UTC_lists.innerHTML = clickedSYNOP06UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 06UTC GEOPOTENTIAL HEIGHT') {
            clickedSYNOP06UTCLists = clickedSYNOP06UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP06UTC_lists.innerHTML = clickedSYNOP06UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 06UTC RELATIVE HUMIDITY') {
            clickedSYNOP06UTCLists = clickedSYNOP06UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP06UTC_lists.innerHTML = clickedSYNOP06UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 06UTC VISIBILITY') {
            clickedSYNOP06UTCLists = clickedSYNOP06UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP06UTC_lists.innerHTML = clickedSYNOP06UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 06UTC WIND SPEED AND DIRECTION') {
            clickedSYNOP06UTCLists = clickedSYNOP06UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP06UTC_lists.innerHTML = clickedSYNOP06UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 06UTC 3h RAINFALL') {
            clickedSYNOP06UTCLists = clickedSYNOP06UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP06UTC_lists.innerHTML = clickedSYNOP06UTCLists.join("");

        }


        if (uncheckLayer == 'SYNOP 09UTC TEMPERATURE') {
            clickedSYNOP09UTCLists = clickedSYNOP09UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP09UTC_lists.innerHTML = clickedSYNOP09UTCLists.join("");

            map.removeLayer(JodhpurMarker);
        }
        if (uncheckLayer == 'SYNOP 09UTC MEAN SEA LEVEL PRESSURE') {
            clickedSYNOP09UTCLists = clickedSYNOP09UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP09UTC_lists.innerHTML = clickedSYNOP09UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 09UTC CLOUD COVER') {
            clickedSYNOP09UTCLists = clickedSYNOP09UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP09UTC_lists.innerHTML = clickedSYNOP09UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 09UTC GEOPOTENTIAL HEIGHT') {
            clickedSYNOP09UTCLists = clickedSYNOP09UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP09UTC_lists.innerHTML = clickedSYNOP09UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 09UTC RELATIVE HUMIDITY') {
            clickedSYNOP09UTCLists = clickedSYNOP09UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP09UTC_lists.innerHTML = clickedSYNOP09UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 09UTC VISIBILITY') {
            clickedSYNOP09UTCLists = clickedSYNOP09UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP09UTC_lists.innerHTML = clickedSYNOP09UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 09UTC WIND SPEED AND DIRECTION') {
            clickedSYNOP09UTCLists = clickedSYNOP09UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP09UTC_lists.innerHTML = clickedSYNOP09UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 09UTC 3h RAINFALL') {
            clickedSYNOP09UTCLists = clickedSYNOP09UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP09UTC_lists.innerHTML = clickedSYNOP09UTCLists.join("");

        }


        if (uncheckLayer == 'SYNOP 12UTC TEMPERATURE') {
            clickedSYNOP12UTCLists = clickedSYNOP12UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP12UTC_lists.innerHTML = clickedSYNOP12UTCLists.join("");

            map.removeLayer(JodhpurMarker);
        }
        if (uncheckLayer == 'SYNOP 12UTC MEAN SEA LEVEL PRESSURE') {
            clickedSYNOP12UTCLists = clickedSYNOP12UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP12UTC_lists.innerHTML = clickedSYNOP12UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 12UTC CLOUD COVER') {
            clickedSYNOP12UTCLists = clickedSYNOP12UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP12UTC_lists.innerHTML = clickedSYNOP12UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 12UTC GEOPOTENTIAL HEIGHT') {
            clickedSYNOP12UTCLists = clickedSYNOP12UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP12UTC_lists.innerHTML = clickedSYNOP12UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 12UTC RELATIVE HUMIDITY') {
            clickedSYNOP12UTCLists = clickedSYNOP12UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP12UTC_lists.innerHTML = clickedSYNOP12UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 12UTC VISIBILITY') {
            clickedSYNOP12UTCLists = clickedSYNOP12UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP12UTC_lists.innerHTML = clickedSYNOP12UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 12UTC WIND SPEED AND DIRECTION') {
            clickedSYNOP12UTCLists = clickedSYNOP12UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP12UTC_lists.innerHTML = clickedSYNOP12UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 12UTC 3h RAINFALL') {
            clickedSYNOP12UTCLists = clickedSYNOP12UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP12UTC_lists.innerHTML = clickedSYNOP12UTCLists.join("");

        }


        if (uncheckLayer == 'SYNOP 15UTC TEMPERATURE') {
            clickedSYNOP15UTCLists = clickedSYNOP15UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP15UTC_lists.innerHTML = clickedSYNOP15UTCLists.join("");

            map.removeLayer(JodhpurMarker);
        }
        if (uncheckLayer == 'SYNOP 15UTC MEAN SEA LEVEL PRESSURE') {
            clickedSYNOP15UTCLists = clickedSYNOP15UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP15UTC_lists.innerHTML = clickedSYNOP15UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 15UTC CLOUD COVER') {
            clickedSYNOP15UTCLists = clickedSYNOP15UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP15UTC_lists.innerHTML = clickedSYNOP15UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 15UTC GEOPOTENTIAL HEIGHT') {
            clickedSYNOP15UTCLists = clickedSYNOP15UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP15UTC_lists.innerHTML = clickedSYNOP15UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 15UTC RELATIVE HUMIDITY') {
            clickedSYNOP15UTCLists = clickedSYNOP15UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP15UTC_lists.innerHTML = clickedSYNOP15UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 15UTC VISIBILITY') {
            clickedSYNOP15UTCLists = clickedSYNOP15UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP15UTC_lists.innerHTML = clickedSYNOP15UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 15UTC WIND SPEED AND DIRECTION') {
            clickedSYNOP15UTCLists = clickedSYNOP15UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP15UTC_lists.innerHTML = clickedSYNOP15UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 15UTC 3h RAINFALL') {
            clickedSYNOP15UTCLists = clickedSYNOP15UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP15UTC_lists.innerHTML = clickedSYNOP15UTCLists.join("");

        }


        if (uncheckLayer == 'SYNOP 18UTC TEMPERATURE') {
            clickedSYNOP18UTCLists = clickedSYNOP18UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP18UTC_lists.innerHTML = clickedSYNOP18UTCLists.join("");

            map.removeLayer(JodhpurMarker);
        }
        if (uncheckLayer == 'SYNOP 18UTC MEAN SEA LEVEL PRESSURE') {
            clickedSYNOP18UTCLists = clickedSYNOP18UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP18UTC_lists.innerHTML = clickedSYNOP18UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 18UTC CLOUD COVER') {
            clickedSYNOP18UTCLists = clickedSYNOP18UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP18UTC_lists.innerHTML = clickedSYNOP18UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 18UTC GEOPOTENTIAL HEIGHT') {
            clickedSYNOP18UTCLists = clickedSYNOP18UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP18UTC_lists.innerHTML = clickedSYNOP18UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 18UTC RELATIVE HUMIDITY') {
            clickedSYNOP18UTCLists = clickedSYNOP18UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP18UTC_lists.innerHTML = clickedSYNOP18UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 18UTC VISIBILITY') {
            clickedSYNOP18UTCLists = clickedSYNOP18UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP18UTC_lists.innerHTML = clickedSYNOP18UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 18UTC WIND SPEED AND DIRECTION') {
            clickedSYNOP18UTCLists = clickedSYNOP18UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP18UTC_lists.innerHTML = clickedSYNOP18UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 18UTC 3h RAINFALL') {
            clickedSYNOP18UTCLists = clickedSYNOP18UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP18UTC_lists.innerHTML = clickedSYNOP18UTCLists.join("");

        }


        if (uncheckLayer == 'SYNOP 21UTC TEMPERATURE') {
            clickedSYNOP21UTCLists = clickedSYNOP21UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP21UTC_lists.innerHTML = clickedSYNOP21UTCLists.join("");

            map.removeLayer(JodhpurMarker);
        }
        if (uncheckLayer == 'SYNOP 21UTC MEAN SEA LEVEL PRESSURE') {
            clickedSYNOP21UTCLists = clickedSYNOP21UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP21UTC_lists.innerHTML = clickedSYNOP21UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 21UTC CLOUD COVER') {
            clickedSYNOP21UTCLists = clickedSYNOP21UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP21UTC_lists.innerHTML = clickedSYNOP21UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 21UTC GEOPOTENTIAL HEIGHT') {
            clickedSYNOP21UTCLists = clickedSYNOP21UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP21UTC_lists.innerHTML = clickedSYNOP21UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 21UTC RELATIVE HUMIDITY') {
            clickedSYNOP21UTCLists = clickedSYNOP21UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP21UTC_lists.innerHTML = clickedSYNOP21UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 21UTC VISIBILITY') {
            clickedSYNOP21UTCLists = clickedSYNOP21UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP21UTC_lists.innerHTML = clickedSYNOP21UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 21UTC WIND SPEED AND DIRECTION') {
            clickedSYNOP21UTCLists = clickedSYNOP21UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP21UTC_lists.innerHTML = clickedSYNOP21UTCLists.join("");

        }
        if (uncheckLayer == 'SYNOP 21UTC 3h RAINFALL') {
            clickedSYNOP21UTCLists = clickedSYNOP21UTCLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSYNOP21UTC_lists.innerHTML = clickedSYNOP21UTCLists.join("");

        }

        // RADAR UNCHECk
        if (uncheckLayer == 'Radar Products Radar Reflectivity') {
            clickedRADARPRODUCTSLists = clickedRADARPRODUCTSLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRADARPRODUCTS_lists.innerHTML = clickedRADARPRODUCTSLists.join("");
        }
        if (uncheckLayer == 'Radar Products Radar Animation') {
            clickedRADARPRODUCTSLists = clickedRADARPRODUCTSLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRADARPRODUCTS_lists.innerHTML = clickedRADARPRODUCTSLists.join("");
        }


        // Satellite Observation UNCHECk
        if (uncheckLayer == 'Satellite Observation TIR1') {
            clickedSATELLITELists = clickedSATELLITELists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSATELLITE_lists.innerHTML = clickedSATELLITELists.join("");

        }
        if (uncheckLayer == 'Satellite Observation VIS') {
            clickedSATELLITELists = clickedSATELLITELists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSATELLITE_lists.innerHTML = clickedSATELLITELists.join("");

        }
        if (uncheckLayer == 'Satellite Observation CTBT') {
            clickedSATELLITELists = clickedSATELLITELists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSATELLITE_lists.innerHTML = clickedSATELLITELists.join("");

        }
        if (uncheckLayer == 'Satellite Observation LOW LEVEL CONVERGENCE') {
            clickedSATELLITELists = clickedSATELLITELists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSATELLITE_lists.innerHTML = clickedSATELLITELists.join("");

        }
        if (uncheckLayer == 'Satellite Observation UPPER LEVEL DIVEGENCE') {
            clickedSATELLITELists = clickedSATELLITELists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSATELLITE_lists.innerHTML = clickedSATELLITELists.join("");

        }
        if (uncheckLayer == 'Satellite Observation MID LEVEL SHEAR') {
            clickedSATELLITELists = clickedSATELLITELists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSATELLITE_lists.innerHTML = clickedSATELLITELists.join("");

        }
        if (uncheckLayer == 'Satellite Observation VORTICITY AT 200hPa') {
            clickedSATELLITELists = clickedSATELLITELists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSATELLITE_lists.innerHTML = clickedSATELLITELists.join("");

        }
        if (uncheckLayer == 'Satellite Observation VORTICITY AT 500hPa') {
            clickedSATELLITELists = clickedSATELLITELists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSATELLITE_lists.innerHTML = clickedSATELLITELists.join("");

        }
        if (uncheckLayer == 'Satellite Observation VORTICITY AT 700hPa') {
            clickedSATELLITELists = clickedSATELLITELists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSATELLITE_lists.innerHTML = clickedSATELLITELists.join("");

        }
        if (uncheckLayer == 'Satellite ObservationVORTICITY AT 850hPa') {
            clickedSATELLITELists = clickedSATELLITELists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSATELLITE_lists.innerHTML = clickedSATELLITELists.join("");

        }

        // Lightining Uncheck
        if (uncheckLayer == 'Lightning Last 00-05 min') {
            clickedLIGHTININGLists = clickedLIGHTININGLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerLIGHTINING_lists.innerHTML = clickedLIGHTININGLists.join("");

        }
        if (uncheckLayer == 'Lightning Last 05-10 min') {
            clickedLIGHTININGLists = clickedLIGHTININGLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerLIGHTINING_lists.innerHTML = clickedLIGHTININGLists.join("");
        }
        if (uncheckLayer == 'Lightning Last 10-15 min') {
            clickedLIGHTININGLists = clickedLIGHTININGLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerLIGHTINING_lists.innerHTML = clickedLIGHTININGLists.join("");
        }
        if (uncheckLayer == 'Lightning ILDN Last 05 min') {
            clickedLIGHTININGLists = clickedLIGHTININGLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerLIGHTINING_lists.innerHTML = clickedLIGHTININGLists.join("");
        }
        if (uncheckLayer == 'Lightning Nowcast Alerts') {
            clickedLIGHTININGLists = clickedLIGHTININGLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerLIGHTINING_lists.innerHTML = clickedLIGHTININGLists.join("");
        }


        // SOUNDING UNCHECK
        if (uncheckLayer == 'SOUNDING_00_UTC WIND 1000 hpa WIND') {
            clickedSOUNDING00UTCWINDLists = clickedSOUNDING00UTCWINDLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING00UTCWIND_lists.innerHTML = clickedSOUNDING00UTCWINDLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_00_UTC WIND 850 hpa WIND') {
            clickedSOUNDING00UTCWINDLists = clickedSOUNDING00UTCWINDLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING00UTCWIND_lists.innerHTML = clickedSOUNDING00UTCWINDLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_00_UTC WIND 700 hpa WIND') {
            clickedSOUNDING00UTCWINDLists = clickedSOUNDING00UTCWINDLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING00UTCWIND_lists.innerHTML = clickedSOUNDING00UTCWINDLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_00_UTC WIND 500 hpa WIND') {
            clickedSOUNDING00UTCWINDLists = clickedSOUNDING00UTCWINDLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING00UTCWIND_lists.innerHTML = clickedSOUNDING00UTCWINDLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_00_UTC WIND 300 hpa WIND') {
            clickedSOUNDING00UTCWINDLists = clickedSOUNDING00UTCWINDLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING00UTCWIND_lists.innerHTML = clickedSOUNDING00UTCWINDLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_00_UTC WIND 200 hpa WIND') {
            clickedSOUNDING00UTCWINDLists = clickedSOUNDING00UTCWINDLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING00UTCWIND_lists.innerHTML = clickedSOUNDING00UTCWINDLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_00_UTC WIND 100 hpa WIND') {
            clickedSOUNDING00UTCWINDLists = clickedSOUNDING00UTCWINDLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING00UTCWIND_lists.innerHTML = clickedSOUNDING00UTCWINDLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_00_UTC WIND 50 hpa WIND') {
            clickedSOUNDING00UTCWINDLists = clickedSOUNDING00UTCWINDLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING00UTCWIND_lists.innerHTML = clickedSOUNDING00UTCWINDLists.join("");
        }

        if (uncheckLayer == 'SOUNDING_12_UTC WIND 1000 hpa WIND') {
            clickedSOUNDING12UTCWINDLists = clickedSOUNDING12UTCWINDLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING12UTCWIND_lists.innerHTML = clickedSOUNDING12UTCWINDLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_12_UTC WIND 850 hpa WIND') {
            clickedSOUNDING12UTCWINDLists = clickedSOUNDING12UTCWINDLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING12UTCWIND_lists.innerHTML = clickedSOUNDING12UTCWINDLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_12_UTC WIND 700 hpa WIND') {
            clickedSOUNDING12UTCWINDLists = clickedSOUNDING12UTCWINDLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING12UTCWIND_lists.innerHTML = clickedSOUNDING12UTCWINDLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_12_UTC WIND 500 hpa WIND') {
            clickedSOUNDING12UTCWINDLists = clickedSOUNDING12UTCWINDLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING12UTCWIND_lists.innerHTML = clickedSOUNDING12UTCWINDLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_12_UTC WIND 300 hpa WIND') {
            clickedSOUNDING12UTCWINDLists = clickedSOUNDING12UTCWINDLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING12UTCWIND_lists.innerHTML = clickedSOUNDING12UTCWINDLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_12_UTC WIND 200 hpa WIND') {
            clickedSOUNDING12UTCWINDLists = clickedSOUNDING12UTCWINDLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING12UTCWIND_lists.innerHTML = clickedSOUNDING12UTCWINDLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_12_UTC WIND 100 hpa WIND') {
            clickedSOUNDING12UTCWINDLists = clickedSOUNDING12UTCWINDLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING12UTCWIND_lists.innerHTML = clickedSOUNDING12UTCWINDLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_12_UTC WIND 50 hpa WIND') {
            clickedSOUNDING12UTCWINDLists = clickedSOUNDING12UTCWINDLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING12UTCWIND_lists.innerHTML = clickedSOUNDING12UTCWINDLists.join("");
        }

        if (uncheckLayer == 'SOUNDING_00UTC TEMP 1000 hpa TEMP') {
            clickedSOUNDING00UTCTEMPLists = clickedSOUNDING00UTCTEMPLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING00UTCTEMP_lists.innerHTML = clickedSOUNDING00UTCTEMPLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_00UTC TEMP 850 hpa TEMP') {
            clickedSOUNDING00UTCTEMPLists = clickedSOUNDING00UTCTEMPLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING00UTCTEMP_lists.innerHTML = clickedSOUNDING00UTCTEMPLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_00UTC TEMP 700 hpa TEMP') {
            clickedSOUNDING00UTCTEMPLists = clickedSOUNDING00UTCTEMPLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING00UTCTEMP_lists.innerHTML = clickedSOUNDING00UTCTEMPLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_00UTC TEMP 500 hpa TEMP') {
            clickedSOUNDING00UTCTEMPLists = clickedSOUNDING00UTCTEMPLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING00UTCTEMP_lists.innerHTML = clickedSOUNDING00UTCTEMPLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_00UTC TEMP 300 hpa TEMP') {
            clickedSOUNDING00UTCTEMPLists = clickedSOUNDING00UTCTEMPLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING00UTCTEMP_lists.innerHTML = clickedSOUNDING00UTCTEMPLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_00UTC TEMP 200 hpa TEMP') {
            clickedSOUNDING00UTCTEMPLists = clickedSOUNDING00UTCTEMPLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING00UTCTEMP_lists.innerHTML = clickedSOUNDING00UTCTEMPLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_00UTC TEMP 100 hpa TEMP') {
            clickedSOUNDING00UTCTEMPLists = clickedSOUNDING00UTCTEMPLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING00UTCTEMP_lists.innerHTML = clickedSOUNDING00UTCTEMPLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_00UTC TEMP 50 hpa TEMP') {
            clickedSOUNDING00UTCTEMPLists = clickedSOUNDING00UTCTEMPLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING00UTCTEMP_lists.innerHTML = clickedSOUNDING00UTCTEMPLists.join("");
        }

        if (uncheckLayer == 'SOUNDING_12UTC TEMP 1000 hpa TEMP') {
            clickedSOUNDING12UTCTEMPLists = clickedSOUNDING12UTCTEMPLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING12UTCTEMP_lists.innerHTML = clickedSOUNDING12UTCTEMPLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_12UTC TEMP 850 hpa TEMP') {
            clickedSOUNDING12UTCTEMPLists = clickedSOUNDING12UTCTEMPLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING12UTCTEMP_lists.innerHTML = clickedSOUNDING12UTCTEMPLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_12UTC TEMP 700 hpa TEMP') {
            clickedSOUNDING12UTCTEMPLists = clickedSOUNDING12UTCTEMPLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING12UTCTEMP_lists.innerHTML = clickedSOUNDING12UTCTEMPLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_12UTC TEMP 500 hpa TEMP') {
            clickedSOUNDING12UTCTEMPLists = clickedSOUNDING12UTCTEMPLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING12UTCTEMP_lists.innerHTML = clickedSOUNDING12UTCTEMPLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_12UTC TEMP 300 hpa TEMP') {
            clickedSOUNDING12UTCTEMPLists = clickedSOUNDING12UTCTEMPLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING12UTCTEMP_lists.innerHTML = clickedSOUNDING12UTCTEMPLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_12UTC TEMP 200 hpa TEMP') {
            clickedSOUNDING12UTCTEMPLists = clickedSOUNDING12UTCTEMPLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING12UTCTEMP_lists.innerHTML = clickedSOUNDING12UTCTEMPLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_12UTC TEMP 100 hpa TEMP') {
            clickedSOUNDING12UTCTEMPLists = clickedSOUNDING12UTCTEMPLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING12UTCTEMP_lists.innerHTML = clickedSOUNDING12UTCTEMPLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_12UTC TEMP 50 hpa TEMP') {
            clickedSOUNDING12UTCTEMPLists = clickedSOUNDING12UTCTEMPLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING12UTCTEMP_lists.innerHTML = clickedSOUNDING12UTCTEMPLists.join("");
        }

        if (uncheckLayer == 'SOUNDING_00UTC DEW POINT 1000 hpa DEW POINT') {
            clickedSOUNDING00UTCDEWPOINTLists = clickedSOUNDING00UTCDEWPOINTLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING00UTCDEWPOINT_lists.innerHTML = clickedSOUNDING00UTCDEWPOINTLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_00UTC DEW POINT 850 hpa DEW POINT') {
            clickedSOUNDING00UTCDEWPOINTLists = clickedSOUNDING00UTCDEWPOINTLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING00UTCDEWPOINT_lists.innerHTML = clickedSOUNDING00UTCDEWPOINTLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_00UTC DEW POINT 700 hpa DEW POINT') {
            clickedSOUNDING00UTCDEWPOINTLists = clickedSOUNDING00UTCDEWPOINTLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING00UTCDEWPOINT_lists.innerHTML = clickedSOUNDING00UTCDEWPOINTLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_00UTC DEW POINT 500 hpa DEW POINT') {
            clickedSOUNDING00UTCDEWPOINTLists = clickedSOUNDING00UTCDEWPOINTLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING00UTCDEWPOINT_lists.innerHTML = clickedSOUNDING00UTCDEWPOINTLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_00UTC DEW POINT 300 hpa DEW POINT') {
            clickedSOUNDING00UTCDEWPOINTLists = clickedSOUNDING00UTCDEWPOINTLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING00UTCDEWPOINT_lists.innerHTML = clickedSOUNDING00UTCDEWPOINTLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_00UTC DEW POINT 200 hpa DEW POINT') {
            clickedSOUNDING00UTCDEWPOINTLists = clickedSOUNDING00UTCDEWPOINTLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING00UTCDEWPOINT_lists.innerHTML = clickedSOUNDING00UTCDEWPOINTLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_00UTC DEW POINT 100 hpa DEW POINT') {
            clickedSOUNDING00UTCDEWPOINTLists = clickedSOUNDING00UTCDEWPOINTLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING00UTCDEWPOINT_lists.innerHTML = clickedSOUNDING00UTCDEWPOINTLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_00UTC DEW POINT 50 hpa DEW POINT') {
            clickedSOUNDING00UTCDEWPOINTLists = clickedSOUNDING00UTCDEWPOINTLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING00UTCDEWPOINT_lists.innerHTML = clickedSOUNDING00UTCDEWPOINTLists.join("");
        }

        if (uncheckLayer == 'SOUNDING_12UTC DEW POINT 1000 hpa DEW POINT') {
            clickedSOUNDING12UTCDEWPOINTLists = clickedSOUNDING12UTCDEWPOINTLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING12UTCDEWPOINT_lists.innerHTML = clickedSOUNDING12UTCDEWPOINTLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_12UTC DEW POINT 850 hpa DEW POINT') {
            clickedSOUNDING12UTCDEWPOINTLists = clickedSOUNDING12UTCDEWPOINTLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING12UTCDEWPOINT_lists.innerHTML = clickedSOUNDING12UTCDEWPOINTLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_12UTC DEW POINT 700 hpa DEW POINT') {
            clickedSOUNDING12UTCDEWPOINTLists = clickedSOUNDING12UTCDEWPOINTLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING12UTCDEWPOINT_lists.innerHTML = clickedSOUNDING12UTCDEWPOINTLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_12UTC DEW POINT 500 hpa DEW POINT') {
            clickedSOUNDING12UTCDEWPOINTLists = clickedSOUNDING12UTCDEWPOINTLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING12UTCDEWPOINT_lists.innerHTML = clickedSOUNDING12UTCDEWPOINTLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_12UTC DEW POINT 300 hpa DEW POINT') {
            clickedSOUNDING12UTCDEWPOINTLists = clickedSOUNDING12UTCDEWPOINTLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING12UTCDEWPOINT_lists.innerHTML = clickedSOUNDING12UTCDEWPOINTLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_12UTC DEW POINT 200 hpa DEW POINT') {
            clickedSOUNDING12UTCDEWPOINTLists = clickedSOUNDING12UTCDEWPOINTLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING12UTCDEWPOINT_lists.innerHTML = clickedSOUNDING12UTCDEWPOINTLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_12UTC DEW POINT 100 hpa DEW POINT') {
            clickedSOUNDING12UTCDEWPOINTLists = clickedSOUNDING12UTCDEWPOINTLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING12UTCDEWPOINT_lists.innerHTML = clickedSOUNDING12UTCDEWPOINTLists.join("");
        }
        if (uncheckLayer == 'SOUNDING_12UTC DEW POINT 50 hpa DEW POINT') {
            clickedSOUNDING12UTCDEWPOINTLists = clickedSOUNDING12UTCDEWPOINTLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSOUNDING12UTCDEWPOINT_lists.innerHTML = clickedSOUNDING12UTCDEWPOINTLists.join("");
        }


        // SHIPANDBUOY UNCHECK
        if (uncheckLayer == 'SHIP AND BUOY OBSERVATION 00UTC') {
            clickedSHIPANDBUOYLists = clickedSHIPANDBUOYLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSHIPANDBUOY_lists.innerHTML = clickedSHIPANDBUOYLists.join("");
        }
        if (uncheckLayer == 'SHIP AND BUOY OBSERVATION 01UTC') {
            clickedSHIPANDBUOYLists = clickedSHIPANDBUOYLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSHIPANDBUOY_lists.innerHTML = clickedSHIPANDBUOYLists.join("");
        }
        if (uncheckLayer == 'SHIP AND BUOY OBSERVATION 02UTC') {
            clickedSHIPANDBUOYLists = clickedSHIPANDBUOYLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSHIPANDBUOY_lists.innerHTML = clickedSHIPANDBUOYLists.join("");
        }
        if (uncheckLayer == 'SHIP AND BUOY OBSERVATION 03UTC') {
            clickedSHIPANDBUOYLists = clickedSHIPANDBUOYLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSHIPANDBUOY_lists.innerHTML = clickedSHIPANDBUOYLists.join("");
        }
        if (uncheckLayer == 'SHIP AND BUOY OBSERVATION 04UTC') {
            clickedSHIPANDBUOYLists = clickedSHIPANDBUOYLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSHIPANDBUOY_lists.innerHTML = clickedSHIPANDBUOYLists.join("");
        }
        if (uncheckLayer == 'SHIP AND BUOY OBSERVATION 05UTC') {
            clickedSHIPANDBUOYLists = clickedSHIPANDBUOYLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSHIPANDBUOY_lists.innerHTML = clickedSHIPANDBUOYLists.join("");
        }
        if (uncheckLayer == 'SHIP AND BUOY OBSERVATION 06UTC') {
            clickedSHIPANDBUOYLists = clickedSHIPANDBUOYLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSHIPANDBUOY_lists.innerHTML = clickedSHIPANDBUOYLists.join("");
        }
        if (uncheckLayer == 'SHIP AND BUOY OBSERVATION 07UTC') {
            clickedSHIPANDBUOYLists = clickedSHIPANDBUOYLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSHIPANDBUOY_lists.innerHTML = clickedSHIPANDBUOYLists.join("");
        }
        if (uncheckLayer == 'SHIP AND BUOY OBSERVATION 08UTC') {
            clickedSHIPANDBUOYLists = clickedSHIPANDBUOYLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSHIPANDBUOY_lists.innerHTML = clickedSHIPANDBUOYLists.join("");
        }
        if (uncheckLayer == 'SHIP AND BUOY OBSERVATION 09UTC') {
            clickedSHIPANDBUOYLists = clickedSHIPANDBUOYLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSHIPANDBUOY_lists.innerHTML = clickedSHIPANDBUOYLists.join("");
        }
        if (uncheckLayer == 'SHIP AND BUOY OBSERVATION 10UTC') {
            clickedSHIPANDBUOYLists = clickedSHIPANDBUOYLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSHIPANDBUOY_lists.innerHTML = clickedSHIPANDBUOYLists.join("");
        }
        if (uncheckLayer == 'SHIP AND BUOY OBSERVATION 11UTC') {
            clickedSHIPANDBUOYLists = clickedSHIPANDBUOYLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSHIPANDBUOY_lists.innerHTML = clickedSHIPANDBUOYLists.join("");
        }
        if (uncheckLayer == 'SHIP AND BUOY OBSERVATION 12UTC') {
            clickedSHIPANDBUOYLists = clickedSHIPANDBUOYLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSHIPANDBUOY_lists.innerHTML = clickedSHIPANDBUOYLists.join("");
        }
        if (uncheckLayer == 'SHIP AND BUOY OBSERVATION 13UTC') {
            clickedSHIPANDBUOYLists = clickedSHIPANDBUOYLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSHIPANDBUOY_lists.innerHTML = clickedSHIPANDBUOYLists.join("");
        }
        if (uncheckLayer == 'SHIP AND BUOY OBSERVATION 14UTC') {
            clickedSHIPANDBUOYLists = clickedSHIPANDBUOYLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSHIPANDBUOY_lists.innerHTML = clickedSHIPANDBUOYLists.join("");
        }
        if (uncheckLayer == 'SHIP AND BUOY OBSERVATION 15UTC') {
            clickedSHIPANDBUOYLists = clickedSHIPANDBUOYLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSHIPANDBUOY_lists.innerHTML = clickedSHIPANDBUOYLists.join("");
        }
        if (uncheckLayer == 'SHIP AND BUOY OBSERVATION 16UTC') {
            clickedSHIPANDBUOYLists = clickedSHIPANDBUOYLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSHIPANDBUOY_lists.innerHTML = clickedSHIPANDBUOYLists.join("");
        }
        if (uncheckLayer == 'SHIP AND BUOY OBSERVATION 17UTC') {
            clickedSHIPANDBUOYLists = clickedSHIPANDBUOYLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSHIPANDBUOY_lists.innerHTML = clickedSHIPANDBUOYLists.join("");
        }
        if (uncheckLayer == 'SHIP AND BUOY OBSERVATION 18UTC') {
            clickedSHIPANDBUOYLists = clickedSHIPANDBUOYLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSHIPANDBUOY_lists.innerHTML = clickedSHIPANDBUOYLists.join("");
        }
        if (uncheckLayer == 'SHIP AND BUOY OBSERVATION 19UTC') {
            clickedSHIPANDBUOYLists = clickedSHIPANDBUOYLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSHIPANDBUOY_lists.innerHTML = clickedSHIPANDBUOYLists.join("");
        }
        if (uncheckLayer == 'SHIP AND BUOY OBSERVATION 20UTC') {
            clickedSHIPANDBUOYLists = clickedSHIPANDBUOYLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSHIPANDBUOY_lists.innerHTML = clickedSHIPANDBUOYLists.join("");
        }
        if (uncheckLayer == 'SHIP AND BUOY OBSERVATION 21UTC') {
            clickedSHIPANDBUOYLists = clickedSHIPANDBUOYLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSHIPANDBUOY_lists.innerHTML = clickedSHIPANDBUOYLists.join("");
        }
        if (uncheckLayer == 'SHIP AND BUOY OBSERVATION 22UTC') {
            clickedSHIPANDBUOYLists = clickedSHIPANDBUOYLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSHIPANDBUOY_lists.innerHTML = clickedSHIPANDBUOYLists.join("");
        }
        if (uncheckLayer == 'SHIP AND BUOY OBSERVATION 23UTC') {
            clickedSHIPANDBUOYLists = clickedSHIPANDBUOYLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSHIPANDBUOY_lists.innerHTML = clickedSHIPANDBUOYLists.join("");
        }

        if (uncheckLayer == 'WRF Reflectivity Next 03 Hrs') {
            clickedWRFReflectivityLists = clickedWRFReflectivityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerWRFReflectivity_lists.innerHTML = clickedWRFReflectivityLists.join("");
        }
        if (uncheckLayer == 'WRF Reflectivity Next 03-06 Hrs') {
            clickedWRFReflectivityLists = clickedWRFReflectivityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerWRFReflectivity_lists.innerHTML = clickedWRFReflectivityLists.join("");
        }

        if (uncheckLayer == 'WRF lightning Product Next 03 Hrs') {
            clickedWRFlightningProductLists = clickedWRFlightningProductLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerWRFlightningProduct_lists.innerHTML = clickedWRFlightningProductLists.join("");

        }
        if (uncheckLayer == 'WRF lightning Product Next 03-06 Hrs') {
            clickedWRFlightningProductLists = clickedWRFlightningProductLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerWRFlightningProduct_lists.innerHTML = clickedWRFlightningProductLists.join("");
        }

        if (uncheckLayer == 'WRF Accumlated Rainfall Next 03 Hrs') {
            clickedWRFAccumlatedRainfallLists = clickedWRFAccumlatedRainfallLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerWRFAccumlatedRainfall_lists.innerHTML = clickedWRFAccumlatedRainfallLists.join("");
        }
        if (uncheckLayer == 'WRF Accumlated Rainfall Next 03-06 Hrs') {
            clickedWRFAccumlatedRainfallLists = clickedWRFAccumlatedRainfallLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerWRFAccumlatedRainfall_lists.innerHTML = clickedWRFAccumlatedRainfallLists.join("");
        }

        if (uncheckLayer == 'lightning Potential index Next 01 Hrs') {
            clickedlightningPotentialindexLists = clickedlightningPotentialindexLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerlightningPotentialindex_lists.innerHTML = clickedlightningPotentialindexLists.join(
                "");
        }
        if (uncheckLayer == 'lightning Potential index Next 01-02 Hrs') {
            clickedlightningPotentialindexLists = clickedlightningPotentialindexLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerlightningPotentialindex_lists.innerHTML = clickedlightningPotentialindexLists.join(
                "");
        }
        if (uncheckLayer == 'lightning Potential index Next 02-03 Hrs') {
            clickedlightningPotentialindexLists = clickedlightningPotentialindexLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerlightningPotentialindex_lists.innerHTML = clickedlightningPotentialindexLists.join(
                "");
        }

        if (uncheckLayer == 'NCUMR lightning Product Next 03 Hrs') {
            clickedlightningPotentialindexLists = clickedlightningPotentialindexLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerNCUMRlightningProduct_lists.innerHTML = clickedNCUMRlightningProductLists.join("");
        }
        if (uncheckLayer == 'NCUMR lightning Product Next 03-06 Hrs') {
            clickedlightningPotentialindexLists = clickedlightningPotentialindexLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerNCUMRlightningProduct_lists.innerHTML = clickedNCUMRlightningProductLists.join("");
        }

        if (uncheckLayer == 'NCUMR Wind Gust Next 03 Hrs') {
            clickedlightningPotentialindexLists = clickedlightningPotentialindexLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerNCUMRWindGust_lists.innerHTML = clickedNCUMRWindGustLists.join("");
        }
        if (uncheckLayer == 'NCUMR Wind Gust Next 03-06 Hrs') {
            clickedlightningPotentialindexLists = clickedlightningPotentialindexLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerNCUMRWindGust_lists.innerHTML = clickedNCUMRWindGustLists.join("");
        }

        if (uncheckLayer == 'NCUMR Rainfall Next 03 Hrs') {
            clickedNCUMRRainfallLists = clickedNCUMRRainfallLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerNCUMRRainfall_lists.innerHTML = clickedNCUMRRainfallLists.join("");
        }
        if (uncheckLayer == 'NCUMR Rainfall Next 03-06 Hrs') {
            clickedNCUMRRainfallLists = clickedNCUMRRainfallLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerNCUMRRainfall_lists.innerHTML = clickedNCUMRRainfallLists.join("");
        }

        if (uncheckLayer == 'HRRR_SP Hourly DBZ Next 01 Hrs') {
            clickedHRRR_SPHourlyDBZLists = clickedHRRR_SPHourlyDBZLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerHRRR_SPHourlyDBZ_lists.innerHTML = clickedHRRR_SPHourlyDBZLists.join("");
        }
        if (uncheckLayer == 'HRRR_SP Hourly DBZ Next 01-02 Hrs') {
            clickedHRRR_SPHourlyDBZLists = clickedHRRR_SPHourlyDBZLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerHRRR_SPHourlyDBZ_lists.innerHTML = clickedHRRR_SPHourlyDBZLists.join("");
        }
        if (uncheckLayer == 'HRRR_SP Hourly DBZ Next 02-03 Hrs') {
            clickedHRRR_SPHourlyDBZLists = clickedHRRR_SPHourlyDBZLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerHRRR_SPHourlyDBZ_lists.innerHTML = clickedHRRR_SPHourlyDBZLists.join("");
        }

        if (uncheckLayer == 'HRRR_NE Hourly DBZ Next 01 Hrs') {
            clickedHRRR_NEHourlyDBZLists = clickedHRRR_NEHourlyDBZLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerHRRR_NEHourlyDBZ_lists.innerHTML = clickedHRRR_NEHourlyDBZLists.join("");
        }
        if (uncheckLayer == 'HRRR_NE Hourly DBZ Next 01-02 Hrs') {
            clickedHRRR_NEHourlyDBZLists = clickedHRRR_NEHourlyDBZLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerHRRR_NEHourlyDBZ_lists.innerHTML = clickedHRRR_NEHourlyDBZLists.join("");
        }
        if (uncheckLayer == 'HRRR_NE Hourly DBZ Next 02-03 Hrs') {
            clickedHRRR_NEHourlyDBZLists = clickedHRRR_NEHourlyDBZLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerHRRR_NEHourlyDBZ_lists.innerHTML = clickedHRRR_NEHourlyDBZLists.join("");
        }

        if (uncheckLayer == 'HRRR_NW Hourly DBZ Next 01 Hrs') {
            clickedHRRR_NWHourlyDBZLists = clickedHRRR_NWHourlyDBZLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerHRRR_NWHourlyDBZ_lists.innerHTML = clickedHRRR_NWHourlyDBZLists.join("");
        }
        if (uncheckLayer == 'HRRR_NW Hourly DBZ Next 01-02 Hrs') {
            clickedHRRR_NWHourlyDBZLists = clickedHRRR_NWHourlyDBZLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerHRRR_NWHourlyDBZ_lists.innerHTML = clickedHRRR_NWHourlyDBZLists.join("");
        }
        if (uncheckLayer == 'HRRR_NW Hourly DBZ Next 02-03 Hrs') {
            clickedHRRR_NWHourlyDBZLists = clickedHRRR_NWHourlyDBZLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerHRRR_NWHourlyDBZ_lists.innerHTML = clickedHRRR_NWHourlyDBZLists.join("");
        }
        if (uncheckLayer == 'EWRF MaxZ Next 01 Hrs') {
            clickedEWRFMaxZLists = clickedEWRFMaxZLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerEWRFMaxZ_lists.innerHTML = clickedEWRFMaxZLists.join("");
        }
        if (uncheckLayer == 'EWRF MaxZ Next 01-02 Hrs') {
            clickedEWRFMaxZLists = clickedEWRFMaxZLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerEWRFMaxZ_lists.innerHTML = clickedEWRFMaxZLists.join("");
        }
        if (uncheckLayer == 'EWRF MaxZ Next 02-03 Hrs') {
            clickedEWRFMaxZLists = clickedEWRFMaxZLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerEWRFMaxZ_lists.innerHTML = clickedEWRFMaxZLists.join("");
        }
        if (uncheckLayer == 'EWRF Lightning Next 01 Hrs') {
            clickedEWRFLightningLists = clickedEWRFLightningLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerEWRFLightning_lists.innerHTML = clickedEWRFLightningLists.join("");
        }
        if (uncheckLayer == 'EWRF Lightning Next 01-02 Hrs') {
            clickedEWRFLightningLists = clickedEWRFLightningLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerEWRFLightning_lists.innerHTML = clickedEWRFLightningLists.join("");
        }
        if (uncheckLayer == 'EWRF Lightning Next 02-03 Hrs') {
            clickedEWRFLightningLists = clickedEWRFLightningLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerEWRFLightning_lists.innerHTML = clickedEWRFLightningLists.join("");
        }

        // MEDIUM UNCHECK
        if (uncheckLayer == 'Rainfall Intensity Day1 GFS DAY1') {
            clickedRainfallIntensityDay1Lists = clickedRainfallIntensityDay1Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRainfallIntensityDay1_lists.innerHTML = clickedRainfallIntensityDay1Lists.join("");
        }
        if (uncheckLayer == 'Rainfall Intensity Day1 NCUM DAY1') {
            clickedRainfallIntensityDay1Lists = clickedRainfallIntensityDay1Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRainfallIntensityDay1_lists.innerHTML = clickedRainfallIntensityDay1Lists.join("");
        }
        if (uncheckLayer == 'Rainfall Intensity Day1 NEPS DAY1') {
            clickedRainfallIntensityDay1Lists = clickedRainfallIntensityDay1Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRainfallIntensityDay1_lists.innerHTML = clickedRainfallIntensityDay1Lists.join("");
        }
        if (uncheckLayer == 'Rainfall Intensity Day1 WRF DAY1') {
            clickedRainfallIntensityDay1Lists = clickedRainfallIntensityDay1Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRainfallIntensityDay1_lists.innerHTML = clickedRainfallIntensityDay1Lists.join("");
        }
        if (uncheckLayer == 'Rainfall Intensity Day1 GEFS DAY1') {
            clickedRainfallIntensityDay1Lists = clickedRainfallIntensityDay1Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRainfallIntensityDay1_lists.innerHTML = clickedRainfallIntensityDay1Lists.join("");
        }
        if (uncheckLayer == 'Rainfall Intensity Day1 ECMWF DAY1') {
            clickedRainfallIntensityDay1Lists = clickedRainfallIntensityDay1Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRainfallIntensityDay1_lists.innerHTML = clickedRainfallIntensityDay1Lists.join("");
        }

        if (uncheckLayer == 'Rainfall Intensity Day2 GFS DAY2') {
            clickedRainfallIntensityDay2Lists = clickedRainfallIntensityDay2Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRainfallIntensityDay2_lists.innerHTML = clickedRainfallIntensityDay2Lists.join("");
        }
        if (uncheckLayer == 'Rainfall Intensity Day2 NCUM DAY2') {
            clickedRainfallIntensityDay2Lists = clickedRainfallIntensityDay2Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRainfallIntensityDay2_lists.innerHTML = clickedRainfallIntensityDay2Lists.join("");
        }
        if (uncheckLayer == 'Rainfall Intensity Day2 NEPS DAY2') {
            clickedRainfallIntensityDay2Lists = clickedRainfallIntensityDay2Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRainfallIntensityDay2_lists.innerHTML = clickedRainfallIntensityDay2Lists.join("");
        }
        if (uncheckLayer == 'Rainfall Intensity Day2 WRF DAY2') {
            clickedRainfallIntensityDay2Lists = clickedRainfallIntensityDay2Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRainfallIntensityDay2_lists.innerHTML = clickedRainfallIntensityDay2Lists.join("");
        }
        if (uncheckLayer == 'Rainfall Intensity Day2 GEFS DAY2') {
            clickedRainfallIntensityDay2Lists = clickedRainfallIntensityDay2Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRainfallIntensityDay2_lists.innerHTML = clickedRainfallIntensityDay2Lists.join("");
        }
        if (uncheckLayer == 'Rainfall Intensity Day2 ECMWF DAY2') {
            clickedRainfallIntensityDay2Lists = clickedRainfallIntensityDay2Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRainfallIntensityDay2_lists.innerHTML = clickedRainfallIntensityDay2Lists.join("");
        }

        if (uncheckLayer == 'Rainfall Intensity Day3 GFS DAY3') {
            clickedRainfallIntensityDay3Lists = clickedRainfallIntensityDay3Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRainfallIntensityDay3_lists.innerHTML = clickedRainfallIntensityDay3Lists.join("");
        }
        if (uncheckLayer == 'Rainfall Intensity Day3 NCUM DAY3') {
            clickedRainfallIntensityDay3Lists = clickedRainfallIntensityDay3Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRainfallIntensityDay3_lists.innerHTML = clickedRainfallIntensityDay3Lists.join("");
        }
        if (uncheckLayer == 'Rainfall Intensity Day3 NEPS DAY3') {
            clickedRainfallIntensityDay3Lists = clickedRainfallIntensityDay3Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRainfallIntensityDay3_lists.innerHTML = clickedRainfallIntensityDay3Lists.join("");
        }
        if (uncheckLayer == 'Rainfall Intensity Day3 WRF DAY3') {
            clickedRainfallIntensityDay3Lists = clickedRainfallIntensityDay3Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRainfallIntensityDay3_lists.innerHTML = clickedRainfallIntensityDay3Lists.join("");
        }
        if (uncheckLayer == 'Rainfall Intensity Day3 GEFS DAY3') {
            clickedRainfallIntensityDay3Lists = clickedRainfallIntensityDay3Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRainfallIntensityDay3_lists.innerHTML = clickedRainfallIntensityDay3Lists.join("");
        }
        if (uncheckLayer == 'Rainfall Intensity Day3 ECMWF DAY3') {
            clickedRainfallIntensityDay3Lists = clickedRainfallIntensityDay3Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRainfallIntensityDay3_lists.innerHTML = clickedRainfallIntensityDay3Lists.join("");
        }

        if (uncheckLayer == 'Rainfall Intensity Day4 GFS DAY4') {
            clickedRainfallIntensityDay4Lists = clickedRainfallIntensityDay4Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRainfallIntensityDay4_lists.innerHTML = clickedRainfallIntensityDay4Lists.join("");
        }
        if (uncheckLayer == 'Rainfall Intensity Day4 NCUM DAY4') {
            clickedRainfallIntensityDay4Lists = clickedRainfallIntensityDay4Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRainfallIntensityDay4_lists.innerHTML = clickedRainfallIntensityDay4Lists.join("");
        }
        if (uncheckLayer == 'Rainfall Intensity Day4 NEPS DAY4') {
            clickedRainfallIntensityDay4Lists = clickedRainfallIntensityDay4Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRainfallIntensityDay4_lists.innerHTML = clickedRainfallIntensityDay4Lists.join("");
        }
        if (uncheckLayer == 'Rainfall Intensity Day4 WRF DAY4') {
            clickedRainfallIntensityDay4Lists = clickedRainfallIntensityDay4Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRainfallIntensityDay4_lists.innerHTML = clickedRainfallIntensityDay4Lists.join("");
        }
        if (uncheckLayer == 'Rainfall Intensity Day4 GEFS DAY4') {
            clickedRainfallIntensityDay4Lists = clickedRainfallIntensityDay4Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRainfallIntensityDay4_lists.innerHTML = clickedRainfallIntensityDay4Lists.join("");
        }
        if (uncheckLayer == 'Rainfall Intensity Day4 ECMWF DAY4') {
            clickedRainfallIntensityDay4Lists = clickedRainfallIntensityDay4Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRainfallIntensityDay4_lists.innerHTML = clickedRainfallIntensityDay4Lists.join("");
        }
        if (uncheckLayer == 'Rainfall Intensity Day5 GFS DAY5') {
            clickedRainfallIntensityDay5Lists = clickedRainfallIntensityDay5Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRainfallIntensityDay5_lists.innerHTML = clickedRainfallIntensityDay5Lists.join("");
        }
        if (uncheckLayer == 'Rainfall Intensity Day5 NCUM DAY5') {
            clickedRainfallIntensityDay5Lists = clickedRainfallIntensityDay5Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRainfallIntensityDay5_lists.innerHTML = clickedRainfallIntensityDay5Lists.join("");
        }
        if (uncheckLayer == 'Rainfall Intensity Day5 NEPS DAY5') {
            clickedRainfallIntensityDay5Lists = clickedRainfallIntensityDay5Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRainfallIntensityDay5_lists.innerHTML = clickedRainfallIntensityDay5Lists.join("");
        }
        if (uncheckLayer == 'Rainfall Intensity Day5 WRF DAY5') {
            clickedRainfallIntensityDay5Lists = clickedRainfallIntensityDay5Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRainfallIntensityDay5_lists.innerHTML = clickedRainfallIntensityDay5Lists.join("");
        }
        if (uncheckLayer == 'Rainfall Intensity Day5 GEFS DAY5') {
            clickedRainfallIntensityDay5Lists = clickedRainfallIntensityDay5Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRainfallIntensityDay5_lists.innerHTML = clickedRainfallIntensityDay5Lists.join("");
        }
        if (uncheckLayer == 'Rainfall Intensity Day5 ECMWF DAY5') {
            clickedRainfallIntensityDay5Lists = clickedRainfallIntensityDay5Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRainfallIntensityDay5_lists.innerHTML = clickedRainfallIntensityDay5Lists.join("");
        }


        if (uncheckLayer == 'MSLP Day1 GFS DAY1') {
            clickedMSLPDay1Lists = clickedMSLPDay1Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerMSLPDay1_lists.innerHTML = clickedMSLPDay1Lists.join("");
        }
        if (uncheckLayer == 'MSLP Day1 NCUM DAY1') {
            clickedMSLPDay1Lists = clickedMSLPDay1Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerMSLPDay1_lists.innerHTML = clickedMSLPDay1Lists.join("");
        }
        if (uncheckLayer == 'MSLP Day1 NEPS DAY1') {
            clickedMSLPDay1Lists = clickedMSLPDay1Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerMSLPDay1_lists.innerHTML = clickedMSLPDay1Lists.join("");
        }
        if (uncheckLayer == 'MSLP Day1 WRF DAY1') {
            clickedMSLPDay1Lists = clickedMSLPDay1Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerMSLPDay1_lists.innerHTML = clickedMSLPDay1Lists.join("");
        }
        if (uncheckLayer == 'MSLP Day1 GEFS DAY1') {
            clickedMSLPDay1Lists = clickedMSLPDay1Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerMSLPDay1_lists.innerHTML = clickedMSLPDay1Lists.join("");
        }
        if (uncheckLayer == 'MSLP Day1 ECMWF DAY1') {
            clickedMSLPDay1Lists = clickedMSLPDay1Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerMSLPDay1_lists.innerHTML = clickedMSLPDay1Lists.join("");
        }


        if (uncheckLayer == 'MSLP Day2 GFS DAY2') {
            clickedMSLPDay2Lists = clickedMSLPDay2Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerMSLPDay2_lists.innerHTML = clickedMSLPDay2Lists.join("");
        }
        if (uncheckLayer == 'MSLP Day2 NCUM DAY2') {
            clickedMSLPDay2Lists = clickedMSLPDay2Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerMSLPDay2_lists.innerHTML = clickedMSLPDay2Lists.join("");
        }
        if (uncheckLayer == 'MSLP Day2 NEPS DAY2') {
            clickedMSLPDay2Lists = clickedMSLPDay2Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerMSLPDay2_lists.innerHTML = clickedMSLPDay2Lists.join("");
        }
        if (uncheckLayer == 'MSLP Day2 WRF DAY2') {
            clickedMSLPDay2Lists = clickedMSLPDay2Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerMSLPDay2_lists.innerHTML = clickedMSLPDay2Lists.join("");
        }
        if (uncheckLayer == 'MSLP Day2 GEFS DAY2') {
            clickedMSLPDay2Lists = clickedMSLPDay2Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerMSLPDay2_lists.innerHTML = clickedMSLPDay2Lists.join("");
        }
        if (uncheckLayer == 'MSLP Day2 ECMWF DAY2') {
            clickedMSLPDay2Lists = clickedMSLPDay2Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerMSLPDay2_lists.innerHTML = clickedMSLPDay2Lists.join("");
        }


        if (uncheckLayer == 'MSLP Day3 GFS DAY3') {
            clickedMSLPDay3Lists = clickedMSLPDay3Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerMSLPDay3_lists.innerHTML = clickedMSLPDay3Lists.join("");
        }
        if (uncheckLayer == 'MSLP Day3 NCUM DAY3') {
            clickedMSLPDay3Lists = clickedMSLPDay3Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerMSLPDay3_lists.innerHTML = clickedMSLPDay3Lists.join("");
        }
        if (uncheckLayer == 'MSLP Day3 NEPS DAY3') {
            clickedMSLPDay3Lists = clickedMSLPDay3Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerMSLPDay3_lists.innerHTML = clickedMSLPDay3Lists.join("");
        }
        if (uncheckLayer == 'MSLP Day3 WRF DAY3') {
            clickedMSLPDay3Lists = clickedMSLPDay3Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerMSLPDay3_lists.innerHTML = clickedMSLPDay3Lists.join("");
        }
        if (uncheckLayer == 'MSLP Day3 GEFS DAY3') {
            clickedMSLPDay3Lists = clickedMSLPDay3Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerMSLPDay3_lists.innerHTML = clickedMSLPDay3Lists.join("");
        }
        if (uncheckLayer == 'MSLP Day3 ECMWF DAY3') {
            clickedMSLPDay3Lists = clickedMSLPDay3Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerMSLPDay3_lists.innerHTML = clickedMSLPDay3Lists.join("");
        }


        if (uncheckLayer == 'MSLP Day4 GFS DAY4') {
            clickedMSLPDay4Lists = clickedMSLPDay4Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerMSLPDay4_lists.innerHTML = clickedMSLPDay4Lists.join("");
        }
        if (uncheckLayer == 'MSLP Day4 NCUM DAY4') {
            clickedMSLPDay4Lists = clickedMSLPDay4Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerMSLPDay4_lists.innerHTML = clickedMSLPDay4Lists.join("");
        }
        if (uncheckLayer == 'MSLP Day4 NEPS DAY4') {
            clickedMSLPDay4Lists = clickedMSLPDay4Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerMSLPDay4_lists.innerHTML = clickedMSLPDay4Lists.join("");
        }
        if (uncheckLayer == 'MSLP Day4 WRF DAY4') {
            clickedMSLPDay4Lists = clickedMSLPDay4Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerMSLPDay4_lists.innerHTML = clickedMSLPDay4Lists.join("");
        }
        if (uncheckLayer == 'MSLP Day4 GEFS DAY4') {
            clickedMSLPDay4Lists = clickedMSLPDay4Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerMSLPDay4_lists.innerHTML = clickedMSLPDay4Lists.join("");
        }
        if (uncheckLayer == 'MSLP Day4 ECMWF DAY4') {
            clickedMSLPDay4Lists = clickedMSLPDay4Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerMSLPDay4_lists.innerHTML = clickedMSLPDay4Lists.join("");
        }


        if (uncheckLayer == 'MSLP Day5 GFS DAY5') {
            clickedMSLPDay5Lists = clickedMSLPDay5Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerMSLPDay5_lists.innerHTML = clickedMSLPDay5Lists.join("");
        }
        if (uncheckLayer == 'MSLP Day5 NCUM DAY5') {
            clickedMSLPDay5Lists = clickedMSLPDay5Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerMSLPDay5_lists.innerHTML = clickedMSLPDay5Lists.join("");
        }
        if (uncheckLayer == 'MSLP Day5 NEPS DAY5') {
            clickedMSLPDay5Lists = clickedMSLPDay5Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerMSLPDay5_lists.innerHTML = clickedMSLPDay5Lists.join("");
        }
        if (uncheckLayer == 'MSLP Day5 WRF DAY5') {
            clickedMSLPDay5Lists = clickedMSLPDay5Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerMSLPDay5_lists.innerHTML = clickedMSLPDay5Lists.join("");
        }
        if (uncheckLayer == 'MSLP Day5 GEFS DAY5') {
            clickedMSLPDay5Lists = clickedMSLPDay5Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerMSLPDay5_lists.innerHTML = clickedMSLPDay5Lists.join("");
        }
        if (uncheckLayer == 'MSLP Day5 ECMWF DAY5') {
            clickedMSLPDay5Lists = clickedMSLPDay5Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerMSLPDay5_lists.innerHTML = clickedMSLPDay5Lists.join("");
        }


        if (uncheckLayer == '10m WIND Day 1 GFS DAY1') {
            clicked10mWINDDay1Lists = clicked10mWINDDay1Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayer10mWINDDay1_lists.innerHTML = clicked10mWINDDay1Lists.join("");
        }
        if (uncheckLayer == '10m WIND Day 1 NCUM DAY1') {
            clicked10mWINDDay1Lists = clicked10mWINDDay1Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayer10mWINDDay1_lists.innerHTML = clicked10mWINDDay1Lists.join("");
        }
        if (uncheckLayer == '10m WIND Day 1 NEPS DAY1') {
            clicked10mWINDDay1Lists = clicked10mWINDDay1Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayer10mWINDDay1_lists.innerHTML = clicked10mWINDDay1Lists.join("");
        }
        if (uncheckLayer == '10m WIND Day 1 WRF DAY1') {
            clicked10mWINDDay1Lists = clicked10mWINDDay1Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayer10mWINDDay1_lists.innerHTML = clicked10mWINDDay1Lists.join("");
        }
        if (uncheckLayer == '10m WIND Day 1 GEFS DAY1') {
            clicked10mWINDDay1Lists = clicked10mWINDDay1Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayer10mWINDDay1_lists.innerHTML = clicked10mWINDDay1Lists.join("");
        }
        if (uncheckLayer == '10m WIND Day 1 ECMWF DAY1') {
            clicked10mWINDDay1Lists = clicked10mWINDDay1Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayer10mWINDDay1_lists.innerHTML = clicked10mWINDDay1Lists.join("");
        }


        if (uncheckLayer == '10m WIND Day 2 GFS DAY2') {
            clicked10mWINDDay2Lists = clicked10mWINDDay2Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayer10mWINDDay2_lists.innerHTML = clicked10mWINDDay2Lists.join("");
        }
        if (uncheckLayer == '10m WIND Day 2 NCUM DAY2') {
            clicked10mWINDDay2Lists = clicked10mWINDDay2Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayer10mWINDDay2_lists.innerHTML = clicked10mWINDDay2Lists.join("");
        }
        if (uncheckLayer == '10m WIND Day 2 NEPS DAY2') {
            clicked10mWINDDay2Lists = clicked10mWINDDay2Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayer10mWINDDay2_lists.innerHTML = clicked10mWINDDay2Lists.join("");
        }
        if (uncheckLayer == '10m WIND Day 2 WRF DAY2') {
            clicked10mWINDDay2Lists = clicked10mWINDDay2Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayer10mWINDDay2_lists.innerHTML = clicked10mWINDDay2Lists.join("");
        }
        if (uncheckLayer == '10m WIND Day 2 GEFS DAY2') {
            clicked10mWINDDay2Lists = clicked10mWINDDay2Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayer10mWINDDay2_lists.innerHTML = clicked10mWINDDay2Lists.join("");
        }
        if (uncheckLayer == '10m WIND Day 2 ECMWF DAY2') {
            clicked10mWINDDay2Lists = clicked10mWINDDay2Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayer10mWINDDay2_lists.innerHTML = clicked10mWINDDay2Lists.join("");
        }


        if (uncheckLayer == '10m WIND Day 3 GFS DAY3') {
            clicked10mWINDDay3Lists = clicked10mWINDDay3Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayer10mWINDDay3_lists.innerHTML = clicked10mWINDDay3Lists.join("");
        }
        if (uncheckLayer == '10m WIND Day 3 NCUM DAY3') {
            clicked10mWINDDay3Lists = clicked10mWINDDay3Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayer10mWINDDay3_lists.innerHTML = clicked10mWINDDay3Lists.join("");
        }
        if (uncheckLayer == '10m WIND Day 3 NEPS DAY3') {
            clicked10mWINDDay3Lists = clicked10mWINDDay3Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayer10mWINDDay3_lists.innerHTML = clicked10mWINDDay3Lists.join("");
        }
        if (uncheckLayer == '10m WIND Day 3 WRF DAY3') {
            clicked10mWINDDay3Lists = clicked10mWINDDay3Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayer10mWINDDay3_lists.innerHTML = clicked10mWINDDay3Lists.join("");
        }
        if (uncheckLayer == '10m WIND Day 3 GEFS DAY3') {
            clicked10mWINDDay3Lists = clicked10mWINDDay3Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayer10mWINDDay3_lists.innerHTML = clicked10mWINDDay3Lists.join("");
        }
        if (uncheckLayer == '10m WIND Day 3 ECMWF DAY3') {
            clicked10mWINDDay3Lists = clicked10mWINDDay3Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayer10mWINDDay3_lists.innerHTML = clicked10mWINDDay3Lists.join("");
        }


        if (uncheckLayer == '10m WIND Day 4 GFS DAY4') {
            clicked10mWINDDay4Lists = clicked10mWINDDay4Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayer10mWINDDay4_lists.innerHTML = clicked10mWINDDay4Lists.join("");
        }
        if (uncheckLayer == '10m WIND Day 4 NCUM DAY4') {
            clicked10mWINDDay4Lists = clicked10mWINDDay4Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayer10mWINDDay4_lists.innerHTML = clicked10mWINDDay4Lists.join("");
        }
        if (uncheckLayer == '10m WIND Day 4 NEPS DAY4') {
            clicked10mWINDDay4Lists = clicked10mWINDDay4Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayer10mWINDDay4_lists.innerHTML = clicked10mWINDDay4Lists.join("");
        }
        if (uncheckLayer == '10m WIND Day 4 WRF DAY4') {
            clicked10mWINDDay4Lists = clicked10mWINDDay4Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayer10mWINDDay4_lists.innerHTML = clicked10mWINDDay4Lists.join("");
        }
        if (uncheckLayer == '10m WIND Day 4 GEFS DAY4') {
            clicked10mWINDDay4Lists = clicked10mWINDDay4Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayer10mWINDDay4_lists.innerHTML = clicked10mWINDDay4Lists.join("");
        }
        if (uncheckLayer == '10m WIND Day 4 ECMWF DAY4') {
            clicked10mWINDDay4Lists = clicked10mWINDDay4Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayer10mWINDDay4_lists.innerHTML = clicked10mWINDDay4Lists.join("");
        }


        if (uncheckLayer == '10m WIND Day 5 GFS DAY5') {
            clicked10mWINDDay5Lists = clicked10mWINDDay5Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayer10mWINDDay5_lists.innerHTML = clicked10mWINDDay5Lists.join("");
        }
        if (uncheckLayer == '10m WIND Day 5 NCUM DAY5') {
            clicked10mWINDDay5Lists = clicked10mWINDDay5Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayer10mWINDDay5_lists.innerHTML = clicked10mWINDDay5Lists.join("");
        }
        if (uncheckLayer == '10m WIND Day 5 NEPS DAY5') {
            clicked10mWINDDay5Lists = clicked10mWINDDay5Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayer10mWINDDay5_lists.innerHTML = clicked10mWINDDay5Lists.join("");
        }
        if (uncheckLayer == '10m WIND Day 5 WRF DAY5') {
            clicked10mWINDDay5Lists = clicked10mWINDDay5Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayer10mWINDDay5_lists.innerHTML = clicked10mWINDDay5Lists.join("");
        }
        if (uncheckLayer == '10m WIND Day 5 GEFS DAY5') {
            clicked10mWINDDay5Lists = clicked10mWINDDay5Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayer10mWINDDay5_lists.innerHTML = clicked10mWINDDay5Lists.join("");
        }
        if (uncheckLayer == '10m WIND Day 5 ECMWF DAY5') {
            clicked10mWINDDay5Lists = clicked10mWINDDay5Lists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayer10mWINDDay5_lists.innerHTML = clicked10mWINDDay5Lists.join("");
        }

    }
});
//



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