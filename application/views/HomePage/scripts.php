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
    for (let SD = 0; SD < SecondDropdown.length; SD++) {
        if (SecondDropdown[SD].name) {
            pushparameterNames += `<option>${SecondDropdown[SD].name}</option><br/><br/>`;
        }
    }
    getparameterNames.innerHTML = pushparameterNames;
    showSubParameterNames(SecondDropdown[0].name);
}

//OBSERVATION thirdDropdown-SD
function showSubParameterNames(value) {
    let getsubparameterNames = document.getElementById("subparameter");
    let pushsubparameterNames = '';
    var SecondDropdown = subParametersList.filter(x => x.category == value);
    for (let SD = 0; SD < SecondDropdown.length; SD++) {
        if (SecondDropdown[SD].name) {
            pushsubparameterNames += `<option>${SecondDropdown[SD].name}</option><br/><br/>`;
        }
    }
    getsubparameterNames.innerHTML = pushsubparameterNames;
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

//submitForm for observation
function submitForm() {
    let model_Names = document.getElementById('modelNames').value;
    let parameter_Names = document.getElementById('parameterNames').value;
    let sub_parameter = document.getElementById('subparameter').value;
    let fromDate = document.getElementById('start_date').value;
    let toDate = document.getElementById('end_date').value;
    let hour_Select = document.getElementById('hourSelect').value;
    let minute_Select = document.getElementById('minuteSelect').value;

    let message = "OBSERVATION" + "\n" + "Model: " + model_Names + "\n" +
        "Parameter: " + parameter_Names + "\n" +
        "SubParameter: " + sub_parameter + "\n" +
        "Start Date: " + fromDate + "\n" +
        "End Date: " + toDate + "\n" +
        "Time: " + hour_Select + ":" + minute_Select;
    alert(message);
}

//Observation-toggleObservation
function toggleObservation() {
    let observationContainerFn = document.getElementById("ObservationContainer");
    let map = document.getElementById('map');
    let isHidden = observationContainerFn.classList.contains('hidden');
    observationContainerFn.classList.toggle('hidden');
    map.style.width = isHidden ? '83%' : '99%';
}
//

// MACRO
//macro ModelNames-Dropdown    MA-ModelsArray
let getMacModelNames = document.getElementById("mac_modelNames");
let pushMacModelNames = '';
for (let MA = 0; MA < modelNamesArr.length; MA++) {
    pushMacModelNames += `<option class="test">${modelNamesArr[MA]}</option><br/><br/>`;
}
getMacModelNames.innerHTML = pushMacModelNames;

console.log(pushMacModelNames, "hhhhhhhhhhhhhhhhhhhh")

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

// for disabled the ADD and SAVE buttons
function handleInputChange() {
    const inputValue = document.getElementById("macroNames").value.trim();
    console.log(inputValue, "dfghjk");
    const buttons = document.querySelectorAll(".macSubmitBtn");

    if (inputValue) {
        for (const button of buttons) {
            button.disabled = false;
        }
    } else {
        for (const button of buttons) {
            button.disabled = true;
        }
    }
    if (!document.getElementById("macroNames").classList.contains("blurred-listener")) {
        document.getElementById("macroNames").addEventListener("blur", handleInputChange);
        document.getElementById("macroNames").classList.add("blurred-listener");
    }
}
handleInputChange();

// AddButtonForm for MACRO
let macroData = []; // for add btn, saving 3 list 
let saveMacro = []; //for save btn
let counter = 0;

function macAddForm() {
    event.preventDefault();

    let addedInfoContainerDiv = document.getElementById("addedInfoContainer");

    let mac_macroNames = document.getElementById('macroNames').value;
    let mac_model_Names = document.getElementById('mac_modelNames').value;
    let mac_parameter_Names = document.getElementById('mac_parameterNames').value;
    let mac_sub_parameter = document.getElementById('mac_subparameter').value;

    let ulId = "listContainerMacro_" + counter++;

    let addedInfoDiv = `<div id="toggleDiv">
        <span onclick="MacroPlusToggle('${ulId}')">+ Macro Name: ${mac_macroNames}</span>
        <ul id="${ulId}" class="listContainerMacro">
            <li>${mac_model_Names}</li>
            <li>${mac_parameter_Names}</li>
            <li>${mac_sub_parameter}</li>
        </ul>
    </div>`;

    macroData.push(addedInfoDiv);

    saveMacro.push({
        ulId: ulId,
        macroName: mac_macroNames,
        mac_model_Names: mac_model_Names,
        mac_parameter_Names: mac_parameter_Names,
        mac_sub_parameter: mac_sub_parameter
    });

    addedInfoContainerDiv.innerHTML = macroData.join("");
    console.log(ulId, ": ", "macroData: ", macroData, "saveMacro: ", saveMacro);
    handleInputChange();
}


//MacroGroupList Toggle 
function MacroPlusToggle(ulId) {
    let macListContainer = document.getElementById(ulId);
    if (macListContainer.style.display === "none" || macListContainer.style.display === "") {
        macListContainer.style.display = "block";
    } else {
        macListContainer.style.display = "none";
    }
}

// submitForm for MACRO
function macSubmitForm() {
    event.preventDefault();
    //
    let mac_macroNames = document.getElementById('macroNames').value;
    let mac_model_Names = document.getElementById('mac_modelNames').value;
    let mac_parameter_Names = document.getElementById('mac_parameterNames').value;
    let mac_sub_parameter = document.getElementById('mac_subparameter').value;

    let addedInfoContainerSub = document.getElementById('addedInfoContainer');

    // Create a new button
    let newButton = document.createElement('button');
    newButton.classList.add('save-button');
    newButton.id = mac_macroNames;
    newButton.innerText = mac_macroNames;

    newButton.addEventListener('click', function() {
        let showMacro = [];
        let filteredMicro = saveMacro.filter(x => x.macroName == mac_macroNames);
        filteredMicro.forEach(macro => {
            console.log(macro, mac_macroNames, "kkkkkk");
            if (macro) {
                showInfoDiv = `<div id="toggleDiv">
                <span onclick="MacroPlusToggle('${macro.ulId}')">+ Macro Name: ${macro.macroName}</span>
                <ul id="${macro.ulId}" class="listContainerMacro">
                    <li>${macro.mac_model_Names}</li>
                    <li>${macro.mac_parameter_Names}</li>
                    <li>${macro.mac_sub_parameter}</li>
                </ul>
                <button class="edit-button" onclick="editMacro('${macro.ulId}', '${macro.macroName}', '${macro.mac_model_Names}', '${macro.mac_parameter_Names}', '${macro.mac_sub_parameter}')">E</button>
                <button class="delete-button" onclick="deleteMacro('${macro.ulId}')">D</button>
            </div>`;
                showMacro.push(showInfoDiv);
            } else {
                console.log('Details not found for:', newButton.id);
            }
        })
        addedInfoContainer.innerHTML = showMacro.join('');
    });

    // Append the new button to the dropdown content

    let listOfMacro = [];
    saveMacro.forEach(macro => {
        console.log(macro, mac_macroNames, "kkkkkk");
        if (macro) {
            showInfoDiv = `<div id="toggleDiv">
			<span onclick="MacroPlusToggle('${macro.ulId}')">${macro.macroName}</span>
			<ul id="${macro.ulId}" class="listContainerMacro">
				<li>${macro.mac_model_Names}</li>
				<li>${macro.mac_parameter_Names}</li>
				<li>${macro.mac_sub_parameter}</li>
			</ul>
			<button class="delete-button" onclick="runMacro('${macro.ulId}')">R</button>
			<button class="edit-button" onclick="editMacro('${macro.ulId}', '${macro.macroName}', '${macro.mac_model_Names}', '${macro.mac_parameter_Names}', '${macro.mac_sub_parameter}')">E</button>
			<button class="delete-button" onclick="deleteMacro('${macro.ulId}')">D</button>
		</div>`;
            listOfMacro.push(showInfoDiv);
        } else {
            console.log('Details not found for:', newButton.id);
        }
    })

    console.log(listOfMacro, "hhhhhhhhhhhhhhhhhhhhhh")
    let hh = document.getElementById('listOfMacro');
    hh.innerHTML = listOfMacro.join('');


    // // Clear the form fields
    document.getElementById('macroNames').value = '';
    document.getElementById('mac_modelNames').value = '';
    document.getElementById('mac_parameterNames').value = '';
    document.getElementById('mac_subparameter').value = '';
    //
    handleInputChange();
    macroData = [];
    addedInfoContainer.innerHTML = "";
    let macroFormContainerFn = document.getElementById("macroFormContainer");
    macroFormContainerFn.style.display = "none";;

    let macroListContainerFn = document.getElementById("macroListContainer");
    macroListContainerFn.style.display = "block";;

}

//*********** */
function editMacro(ulId, macroName, modelNames, parameterNames, subParameter) {
    // // Set values in the form for editing
    document.getElementById('macroNames').value = macroName;
    document.getElementById('mac_modelNames').value = modelNames;
    document.getElementById('mac_parameterNames').value = parameterNames;
    document.getElementById('mac_subparameter').value = subParameter;

    let findID = saveMacro.find(x => x.ulId == ulId);
    console.log(findID, "jacob");
    handleInputChange();
}



//*********** */

//Delete for macroList
function deleteMacro(ulId) {
    removeElementById(ulId);
}

function removeElementById(elementId) {
    let element = document.getElementById(elementId);
    if (element) {
        element.parentNode.removeChild(element);
        // Update the saveMacro array by removing the corresponding entry
        saveMacro = saveMacro.filter(macro => macro.ulId !== elementId);
        // Update the macroData array by regenerating the HTML
        macroData = saveMacro.map(macro => generateAddedInfoDiv(macro)).join("");
        document.getElementById('addedInfoContainer').innerHTML = macroData;
    }
    handleInputChange();
}

function generateAddedInfoDiv(macro) {
    return `<div id="toggleDiv">
        <span onclick="MacroPlusToggle('${macro.ulId}')">+ Macro Name: ${macro.macroName}</span>
        <ul id="${macro.ulId}" class="listContainerMacro">
            <li>${macro.mac_model_Names}</li>
            <li>${macro.mac_parameter_Names}</li>
            <li>${macro.mac_sub_parameter}</li>
        </ul>
        <button class="edit-button" onclick="editMacro('${macro.ulId}', '${macro.macroName}', '${macro.mac_model_Names}', '${macro.mac_parameter_Names}', '${macro.mac_sub_parameter}')">E</button>
        <button class="delete-button" onclick="deleteMacro('${macro.ulId}')">D</button>
    </div>`;
}


//********************************************************* */
//Macro Create Macro Toggle
function createMacroForm() {
    let clickMacro = document.getElementById("showCreateMacroLayers");
    if (clickMacro.style.display === "block" || clickMacro.style.display === "") {
        clickMacro.style.display = "none";
    } else {
        clickMacro.style.display = "block";
    }

    let macroListContainerFn = document.getElementById("macroListContainer");
    macroListContainerFn.style.display = "none";;

    let macroFormContainerFn = document.getElementById("macroFormContainer");
    let map = document.getElementById('map');
    let isHidden = macroFormContainerFn.classList.contains('hidden');
    macroFormContainerFn.classList.toggle('hidden');
    map.style.width = isHidden ? '83%' : '99%';

}

//MACRO-toggleObservation
function macToggleObservation() {
    let macroListContainerFn = document.getElementById("macroListContainer");
    let map = document.getElementById('map');
    let isHidden = macroListContainerFn.classList.contains('hidden');
    macroListContainerFn.classList.toggle('hidden');
    map.style.width = isHidden ? '83%' : '99%';
}

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

//MAP
var map = L.map('map', {
    zoom: 5,
    timeDimension: true,
    timeDimensionControl: true,
    timeDimensionOptions: {
        timeInterval: "2023-12-05/2023-12-06",
        period: "PT1H",
        validTimeRange: "00:00/23:00",
        currentTime: startDate
    },

    timeDimensionControlOptions: {
        autoPlay: false,
        playerOptions: {
            buffer: 10,
            transitionTime: 500,
            loop: true,
        }
    },
    center: [22.79459, 80.06406],
});

//timeDimension
var today = new Date();
var today_month = today.getMonth() + 1;
var date = today.getFullYear() + '-' + today_month + '-' + today.getDate();
var time = today.getHours() + ":00:00";
var time = '00:00:00';
var dateTime = date + ' ' + time;

var startDate = new Date(dateTime);
// console.log("startDate::" + startDate);

var endDate_TM = new Date();
endDate_TM.setDate(endDate_TM.getDate() + 1);
endDate_TM.setUTCMinutes(0, 0, 0);
// console.log("endDate_TM:::" + endDate_TM);

Date.prototype.format = function(mask, utc) {
    return dateFormat(this, mask, utc);
};

L.Control.TimeDimensionCustom = L.Control.TimeDimension.extend({
    _getDisplayDateFormat: function(date) {
        return moment(date).format("LL h A");
    }
});
var timeDimensionControl = new L.Control.TimeDimensionCustom({
    autoPlay: false,
    playerOptions: {
        buffer: 10,
        transitionTime: 500,
        loop: true,
    }
});

// Add the GeoJSON data to the map
// _dist_geojson = "<?php echo base_url(); ?>DATA/INDIA_COUNTRY.json";
// var geojson = new L.GeoJSON.AJAX(_dist_geojson, {
//     color: 'black',
//     weight: 1,
//     style: {
//         color: '#3f51b5',
//         opacity: 0.5,
//         fillOpacity: 0.5,
//         weight: 1
//     }
// });

// geojson.on('data:loaded', function() {
//     geojson.addTo(map);
// });
//

//
// const Stadia_Outdoors = L.tileLayer('https://tiles.stadiamaps.com/tiles/outdoors/{z}/{x}/{y}{r}.{ext}', {
//     minZoom: 0,
//     maxZoom: 20,
//     attribution: '&copy; <a href="https://www.stadiamaps.com/" target="_blank">Stadia Maps</a> &copy; <a href="https://openmaptiles.org/" target="_blank">OpenMapTiles</a> &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
//     ext: 'png'
// });

//
const Stadia_Outdoors = L.tileLayer('https://tiles.stadiamaps.com/tiles/outdoors/{z}/{x}/{y}{r}.{ext}', {
    minZoom: 0,
    maxZoom: 20,
    attribution: '&copy; <a href="https://www.stadiamaps.com/" target="_blank">Stadia Maps</a> &copy; <a href="https://openmaptiles.org/" target="_blank">OpenMapTiles</a> &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    ext: 'png'
});
Stadia_Outdoors.addTo(map);

//
const OpenStreetMap = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
});
// OpenStreetMap.addTo(map);

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

const Stadia_StamenToner = L.tileLayer('https://tiles.stadiamaps.com/tiles/stamen_toner/{z}/{x}/{y}{r}.{ext}', {
    minZoom: 0,
    maxZoom: 20,
    attribution: '&copy; <a href="https://www.stadiamaps.com/" target="_blank">Stadia Maps</a> &copy; <a href="https://www.stamen.com/" target="_blank">Stamen Design</a> &copy; <a href="https://openmaptiles.org/" target="_blank">OpenMapTiles</a> &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    ext: 'png'
});

// const darkGreyCanvas = L.tileLayer(
//     'https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/{z}/{y}/{x}', {
//         maxZoom: 20,
//         subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
//     }
// );
// darkGreyCanvas.addTo(map);

// 
const mywmsIITM = L.tileLayer.wms("http://103.215.208.107:8585/geoserver/cite/wms", {
    layers: 'cite:awssample',
    format: 'image/png',
    transparent: true,
    version: '1.1.0',
    attribution: "awssample",
    layerName: "mywmsIITM"
});

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

//Leaflet-sideBySide
let sideBySideControl = null;
let sideBySideVisible = false;

function toggleSideBySide() {
    if (sideBySideVisible) {
        if (sideBySideControl !== null) {
            map.removeControl(sideBySideControl);
            sideBySideControl = null;
        }
        sideBySideVisible = false;
    } else {
        sideBySideControl = L.control.sideBySide(mywmsIITM, mywmsNcum, mywmsNowcast).addTo(map);
        sideBySideVisible = true;
    }
}

const ToggleControl = L.Control.extend({
    onAdd: function(map) {
        const button = L.DomUtil.create('button', 'toggle-button');
        button.textContent = 'Toggle Layers';

        // Function to handle button click
        function handleButtonClick() {
            alert('Select Only Two Layers!');
            L.DomEvent.off(button, 'click', handleButtonClick);
        }

        L.DomEvent.on(button, 'click', handleButtonClick);

        button.onclick = function() {
            toggleSideBySide();
            button.textContent = sideBySideVisible ? 'Hide side-by-side' : 'Show side-by-side';
        };
        return button;
    },

    onRemove: function(map) {}
});

(new ToggleControl()).addTo(map);


//leaflet Fullscreen
map.addControl(new L.Control.Fullscreen({
    title: {
        'false': 'View Fullscreen',
        'true': 'Exit Fullscreen'
    }
}));

var baseMaps = [{
        name: "Stadia_Outdoors",
        layer: Stadia_Outdoors
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
        name: "Stadia_StamenToner",
        layer: Stadia_StamenToner
    },

];

// styleEditor starts here
map.addControl(L.control.styleEditor({
    position: "topleft"
}))

// drawControl starts here
// let drawnItems = new L.FeatureGroup();
// map.addLayer(drawnItems);

// let drawControl = new L.Control.Draw({
//     draw: {
//         polyline: true,
//         polygon: true,
//         rectangle: true,
//         circle: true,
//         marker: true
//     },
//     edit: {
//         featureGroup: drawnItems
//     }
// });

// if (drawControl) {
//     map.addControl(drawControl);
//     console.log("draw working");
// } else {
//     console.error('draw not working');
// }

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
    console.log(e, "eeeeeeeeee");
    const layer = e.layer;
    console.log(layer, "layer");
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
// L.control.scale().addTo(map);

var customButtonsContainer = L.DomUtil.create('div', 'leaflet-bar leaflet-control customClass');
// Create a custom control button for ObservationButton
var ObservationButton = L.Control.extend({
    options: {
        position: 'bottomleft'
    },
    onAdd: function() {
        var obsbtn = L.DomUtil.create('span',
            'leaflet-bar leaflet-control leaflet-control-custom custom-btn');
        obsbtn.innerHTML = 'Observation';
        // obsbtn.style = "margin-left:30px;"
        //click event
        L.DomEvent.on(obsbtn, 'click', function() {
            // alert('Button clicked!');
            toggleObservation();
        });

        return obsbtn;
    }
});
// map.addControl(new ObservationButton());
// buttonContainer.appendChild(new ObservationButton().onAdd(map));



// Create a custom control button for ObservationButton
var MacroButton = L.Control.extend({
    options: {
        position: 'bottomleft'
    },
    onAdd: function() {
        var macbtn = L.DomUtil.create('span',
            'leaflet-bar leaflet-control leaflet-control-custom custom-btn2');
        macbtn.innerHTML = 'Macro';
        // macbtn.style = "margin-left:30px;"
        //click event
        L.DomEvent.on(macbtn, 'click', function() {
            // alert('MACRO Button clicked!');
            macToggleObservation();
        });

        return macbtn;
    }
});

// var CustomControls = L.Control.extend({
//     options: {
//         position: 'topright'
//     },

//     onAdd: function(map) {
//         var container = L.DomUtil.create('div');

//         var dropdown = L.DomUtil.create('select', 'custom-dropdown', container);
//         dropdown.innerHTML = `
//             <option value="pdf">PDF</option>
//             <option value="jpg">JPEG</option>
//             <option value="png">PNG</option>
//         `;

//         var ExportButton = L.DomUtil.create('button', 'custom-btn', container);
//         ExportButton.innerHTML = 'Export';

//         var loadingSymbol = document.createElement('div');
//         loadingSymbol.className = 'loading-symbol';
//         loadingSymbol.innerHTML = 'Loading...';
//         loadingSymbol.style.display = 'none';

//         dropdown.style.margin = '0';
//         ExportButton.style.margin = '0';

//         L.DomEvent.on(ExportButton, 'click', function(e) {
//             var selectedOption = dropdown.options[dropdown.selectedIndex].value;
//             loadingSymbol.style.display = 'inline-block';

//             if (selectedOption === 'pdf') {
//                 console.log('Downloading as PDF');
//                 // Add logic for downloading as PDF if needed
//             } else if (selectedOption === 'jpg') {
//                 var currentDate = new Date().toLocaleString('en-GB', {
//                     timeZone: 'UTC'
//                 }).replace(/[^\d]/g, '_').replace(/_/g, '/', 2).replace(/_/g, ':', 2).replace(
//                     /_/g, '');

//                 htmlToImage.toJpeg(document.getElementById('map'), {
//                         quality: 0.95
//                     })
//                     .then(function(dataUrl) {
//                         var link = document.createElement('a');
//                         link.download = 'IMD-DSS_' + currentDate + '.jpeg';
//                         link.href = dataUrl;

//                         link.click();
//                         loadingSymbol.style.display = 'none';
//                     })
//                     .catch(function(error) {
//                         console.error('Error:', error);
//                     });
//             } else if (selectedOption === 'png') {
//                 var currentDate = new Date().toLocaleString('en-GB', {
//                     timeZone: 'UTC'
//                 }).replace(/[^\d]/g, '_').replace(/_/g, '/', 2).replace(/_/g, ':', 2).replace(
//                     /_/g, '');

//                 htmlToImage.toPng(document.getElementById('map'))
//                     .then(function(dataUrl) {
//                         var link = document.createElement('a');
//                         link.download = 'IMD-DSS_' + currentDate + '.png';
//                         link.href = dataUrl;

//                         link.click();
//                         loadingSymbol.style.display = 'none';
//                     })
//                     .catch(function(error) {
//                         console.error('Error:', error);
//                     });
//             }
//         });

//         container.appendChild(loadingSymbol);

//         return container;
//     }
// });



// var customControl = new CustomControls();
// customControl.addTo(map);





// map.addControl(new MacroButton());
// buttonContainer.appendChild(new MacroButton().onAdd(map));

// Create a custom control button for model popup
var LegendButton = L.Control.extend({
    options: {
        position: 'bottomleft'
    },
    onAdd: function() {
        // Create a button element
        var button = L.DomUtil.create('span',
            'leaflet-bar leaflet-control leaflet-control-custom custom-btn3');
        button.innerHTML = 'Legend';
        button.id = 'popup';
        // button.style = "margin-left:30px;"
        //click event listener
        L.DomEvent.on(button, 'click', function() {
            // alert('Button clicked!');
        });
        return button;
    }
});
// map.addControl(new LegendButton());
// buttonContainer.appendChild(new LegendButton().onAdd(map));

customButtonsContainer.appendChild(new ObservationButton().onAdd());
customButtonsContainer.appendChild(new MacroButton().onAdd());
customButtonsContainer.appendChild(new LegendButton().onAdd());

// Add the container to the map
map.getContainer().appendChild(customButtonsContainer);
// ************

// Custom Control
// var customControl = L.control({
//     position: 'topleft'
// });

// customControl.onAdd = function(map) {
//     var container = L.DomUtil.create('div', 'leaflet-bar leaflet-control');

//     container.innerHTML = '<div class="custom-buttons-container">' +
//         '<div class="custom-button" onclick="alert(\'Legend!\')">Legend</div>' +
//         '<div class="custom-button" onclick="observationBtn()">Observation</div>' +
//         '<div class="custom-button" onclick="alert(\'Button 3 clicked!\')">Button</div>' +
//         '</div>';

//     return container;
// };

// customControl.addTo(map);



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

var X45 = L.marker([18.5657, 83.3657]);
X45.bindPopup("<b>X45</b>").openPopup();

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



// mywmsIITM mywmsNcum mywmsNowcast
const overLayers = [{
        group: "Lightning",
        collapsed: true,
        layers: [{
                active: false,
                name: "Last 00-05 min",
                class: "Last 00-05 min",
                layer: mywmsIITM,
            },
            {
                active: false,
                name: "Last 05-10 min",
                layer: mywmsNcum,
                // layer: jaipurMarker,
            },
            {
                active: false,
                name: "Last 10-15 min",
                layer: mywmsNowcast,
                // layer: bhopalMarker,
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
                layer: HHHHHH
            },
            {
                active: false,
                name: "MEAN SEA LEVEL PRESSURE",
                layer: ggg
            },
            {
                active: false,
                name: "CLOUD COVER",
                layer: X1
            },
            {
                active: false,
                name: "GEOPOTENTIAL HEIGHT",
                layer: X2
            },
            {
                active: false,
                name: "RELATIVE HUMIDITY",
                layer: X3
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: X4
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: X5
            },
            {
                active: false,
                name: "3h RAINFALL",
                layer: X6
            },
        ]
    },
    {

        group: "SYNOP 03UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: X7
            },
            {
                active: false,
                name: "MEAN SEA LEVEL PRESSURE",
                layer: X8
            },
            {
                active: false,
                name: "CLOUD COVER",
                layer: X9
            },
            {
                active: false,
                name: "GEOPOTENTIAL HEIGHT",
                layer: X10
            },
            {
                active: false,
                name: "RELATIVE HUMIDITY",
                layer: X11
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: X12
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: X13
            },
            {
                active: false,
                name: "3h RAINFALL",
                layer: X14
            },
        ]
    },
    {

        group: "SYNOP 06UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: X15
            },
            {
                active: false,
                name: "MEAN SEA LEVEL PRESSURE",
                layer: X16
            },
            {
                active: false,
                name: "CLOUD COVER",
                layer: X17
            },
            {
                active: false,
                name: "GEOPOTENTIAL HEIGHT",
                layer: X18
            },
            {
                active: false,
                name: "RELATIVE HUMIDITY",
                layer: X19
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: X20
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: X21
            },
            {
                active: false,
                name: "3h RAINFALL",
                layer: X22
            },
        ]
    },
    {

        group: "SYNOP 09UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: X23
            },
            {
                active: false,
                name: "MEAN SEA LEVEL PRESSURE",
                layer: X24
            },
            {
                active: false,
                name: "CLOUD COVER",
                layer: X25
            },
            {
                active: false,
                name: "GEOPOTENTIAL HEIGHT",
                layer: X26
            },
            {
                active: false,
                name: "RELATIVE HUMIDITY",
                layer: X27
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: X28
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: X29
            },
            {
                active: false,
                name: "3h RAINFALL",
                layer: X30
            },
        ]
    },
    {

        group: "SYNOP 12UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: X31
            },
            {
                active: false,
                name: "MEAN SEA LEVEL PRESSURE",
                layer: X32
            },
            {
                active: false,
                name: "CLOUD COVER",
                layer: X33
            },
            {
                active: false,
                name: "GEOPOTENTIAL HEIGHT",
                layer: X34
            },
            {
                active: false,
                name: "RELATIVE HUMIDITY",
                layer: X35
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: X36
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: X37
            },
            {
                active: false,
                name: "3h RAINFALL",
                layer: X38
            },
        ]
    },
    {

        group: "SYNOP 15UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: X39
            },
            {
                active: false,
                name: "MEAN SEA LEVEL PRESSURE",
                layer: X40
            },
            {
                active: false,
                name: "CLOUD COVER",
                layer: X41
            },
            {
                active: false,
                name: "GEOPOTENTIAL HEIGHT",
                layer: X42
            },
            {
                active: false,
                name: "RELATIVE HUMIDITY",
                layer: X43
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: X44
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: X45
            },
            {
                active: false,
                name: "3h RAINFALL",
                layer: X46
            },
        ]
    },
    {

        group: "SYNOP 18UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: X47
            },
            {
                active: false,
                name: "MEAN SEA LEVEL PRESSURE",
                layer: X48
            },
            {
                active: false,
                name: "CLOUD COVER",
                layer: X49
            },
            {
                active: false,
                name: "GEOPOTENTIAL HEIGHT",
                layer: X50
            },
            {
                active: false,
                name: "RELATIVE HUMIDITY",
                layer: X51
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: X52
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: X53
            },
            {
                active: false,
                name: "3h RAINFALL",
                layer: X54
            },
        ]
    },
    {

        group: "SYNOP 21UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: X55
            },
            {
                active: false,
                name: "MEAN SEA LEVEL PRESSURE",
                layer: X56
            },
            {
                active: false,
                name: "CLOUD COVER",
                layer: X57
            },
            {
                active: false,
                name: "GEOPOTENTIAL HEIGHT",
                layer: X58
            },
            {
                active: false,
                name: "RELATIVE HUMIDITY",
                layer: X59
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: X60
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: X61
            },
            {
                active: false,
                name: "3h RAINFALL",
                layer: X62
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
                layer: X63
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: X64
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: X65
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: X66
            },

        ]
    },
    {

        group: "METAR 02UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: X67
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: X68
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: X69
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: X70
            },

        ]
    },
    {

        group: "METAR 03UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: X71
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: X72
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: X73
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: X74
            },

        ]
    },

    {

        group: "METAR 04UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: X75
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: X76
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: X77
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: X78
            },

        ]
    },
    {

        group: "METAR 05UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: X79
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: X80
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: X81
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: X82
            },

        ]
    },
    {

        group: "METAR 06UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: X83
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: X84
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: X85
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: X86
            },

        ]
    },
    {

        group: "METAR 07UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: X87
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: X88
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: X89
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: X90
            },

        ]
    },
    {

        group: "METAR 08UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: X91
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: X92
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: X93
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: X94
            },

        ]
    },
    {

        group: "METAR 09UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: X95
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: X96
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: X97
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: X98
            },

        ]
    },
    {

        group: "METAR 10UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: X99
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: X100
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: X101
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: X102
            },

        ]
    },
    {

        group: "METAR 11UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: X103
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: X104
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: X105
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: X106
            },

        ]
    },
    {

        group: "METAR 12UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: X107
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: X108
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: X109
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: X110
            },

        ]
    },
    {

        group: "METAR 13UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: X111
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: X112
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: X113
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: X114
            },

        ]
    },
    {

        group: "METAR 14UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: X115
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: X116
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: X117
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: X118
            },

        ]
    },
    {

        group: "METAR 15UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: X119
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: X120
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: X121
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: X122
            },

        ]
    },
    {

        group: "METAR 16UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: X123
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: X124
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: X125
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: X126
            },

        ]
    },
    {

        group: "METAR 17UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: X127
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: X128
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: X129
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: X130
            },

        ]
    },
    {

        group: "METAR 18UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: X131
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: X132
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: X133
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: X134
            },

        ]
    },
    {

        group: "METAR 19UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: X135
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: X136
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: X137
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: X138
            },

        ]
    },
    {

        group: "METAR 20UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: X139
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: X140
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: X141
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: X142
            },

        ]
    },
    {

        group: "METAR 21UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: X143
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: X144
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: X145
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: X146
            },

        ]
    },
    {

        group: "METAR 22UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: X147
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: X148
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: X149
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
                layer: X150
            },

        ]
    },
    {

        group: "METAR 23UTC",
        collapsed: true,
        layers: [{
                active: false,
                name: "TEMPERATURE",
                layer: X151
            },
            {
                active: false,
                name: "DEW POINT TEMPERATURE",
                layer: X152
            },
            {
                active: false,
                name: "VISIBILITY",
                layer: X153
            },
            {
                active: false,
                name: "WIND SPEED AND DIRECTION",
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
                layer: X159
            },
            {
                active: false,
                name: "LOW LEVEL CONVERGENCE",
                layer: X160
            },
            {
                active: false,
                name: "UPPER LEVEL DIVEGENCE",
                layer: X161
            },
            {
                active: false,
                name: "MID LEVEL SHEAR",
                layer: X162
            },
            {
                active: false,
                name: "VORTICITY AT 200hPa",
                layer: X163
            },
            {
                active: false,
                name: "VORTICITY AT 500hPa",
                layer: X164
            },
            {
                active: false,
                name: "VORTICITY AT 700hPa",
                layer: X165
            },
            {
                active: false,
                name: "VORTICITY AT 850hPa",
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
                layer: X155
            },
            {
                active: false,
                name: "Radar Animation",
                layer: X156
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
        if (currentColorsynop === 'rgb(180, 194, 224)') { // highlighted color
            targetElement_synop.style.backgroundColor = '#eff4ff'; // Reset to default color
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
            targetElement_synop.style.backgroundColor = 'rgb(180, 194, 224)'; // highlighted color
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
        if (currentColormetar === 'rgb(180, 194, 224)') { // highlighted color
            targetElement_metar.style.backgroundColor = '#eff4ff'; // Reset to default color
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
            targetElement_metar.style.backgroundColor = 'rgb(180, 194, 224)'; // highlighted color
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
        if (currentColormesolscale === 'rgb(180, 194, 224)') { // highlighted color
            targetElement_mesolscale.style.backgroundColor =
                '#eff4ff'; // Reset to default color
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
            targetElement_mesolscale.style.backgroundColor = 'rgb(180, 194, 224)'; // highlighted color
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
        if (currentColormedium === 'rgb(180, 194, 224)') { // highlighted color
            targetElement_medium.style.backgroundColor = '#eff4ff'; // Reset to default color
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
            targetElement_medium.style.backgroundColor = 'rgb(180, 194, 224)'; // highlighted color
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
        if (currentColorsatellite === 'rgb(180, 194, 224)') { // highlighted color
            targetElement_satellite.style.backgroundColor =
                '#eff4ff'; // Reset to default color
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
            targetElement_satellite.style.backgroundColor = 'rgb(180, 194, 224)'; // highlighted color
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
        if (currentColorradar === 'rgb(180, 194, 224)') { // highlighted color
            targetElement_radar.style.backgroundColor = '#eff4ff'; // Reset to default color
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
            targetElement_radar.style.backgroundColor = 'rgb(180, 194, 224)'; // highlighted color
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
        if (currentColorlightning === 'rgb(180, 194, 224)') { // highlighted color
            targetElement_lightning.style.backgroundColor =
                '#eff4ff'; // Reset to default color
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
            targetElement_lightning.style.backgroundColor = 'rgb(180, 194, 224)'; // highlighted color
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
        if (currentColorsounding === 'rgb(180, 194, 224)') { // highlighted color
            targetElement_sounding.style.backgroundColor =
                '#eff4ff'; // Reset to default color
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
            targetElement_sounding.style.backgroundColor = 'rgb(180, 194, 224)'; // highlighted color
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
        if (currentColorexpo === 'rgb(180, 194, 224)') { // highlighted color
            targetElement_expo.style.backgroundColor = '#eff4ff'; // Reset to default color
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
            targetElement_expo.style.backgroundColor = 'rgb(180, 194, 224)'; // highlighted color
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
        if (currentColorship === 'rgb(180, 194, 224)') { // highlighted color
            targetElement_ship.style.backgroundColor = '#eff4ff'; // Reset to default color
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
            targetElement_ship.style.backgroundColor = 'rgb(180, 194, 224)'; // highlighted color
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

// //METAR-METAR01UTC
// let panelLayerMETAR00UTC_Title = document.querySelector('#METAR00UTC-Title')
// let panelLayerMETAR00UTC_lists = document.querySelector('#METAR00UTC-lists')
// //METAR01UTC
// let panelLayerMETAR01UTC_Title = document.querySelector('#METAR01UTC-Title')
// let panelLayerMETAR01UTC_lists = document.querySelector('#METAR01UTC-lists')
// //METAR02UTC
// let panelLayerMETAR02UTC_Title = document.querySelector('#METAR02UTC-Title')
// let panelLayerMETAR02UTC_lists = document.querySelector('#METAR02UTC-lists')
// //METAR03UTC
// let panelLayerMETAR03UTC_Title = document.querySelector('#METAR03UTC-Title')
// let panelLayerMETAR03UTC_lists = document.querySelector('#METAR03UTC-lists')
// //METAR04UTC
// let panelLayerMETAR04UTC_Title = document.querySelector('#METAR04UTC-Title')
// let panelLayerMETAR04UTC_lists = document.querySelector('#METAR04UTC-lists')
// //METAR05UTC
// let panelLayerMETAR05UTC_Title = document.querySelector('#METAR05UTC-Title')
// let panelLayerMETAR05UTC_lists = document.querySelector('#METAR05UTC-lists')

// let panelLayerMETAR06UTC_Title = document.querySelector('#METAR06UTC-Title')
// let panelLayerMETAR06UTC_lists = document.querySelector('#METAR06UTC-lists')

// let panelLayerMETAR07UTC_Title = document.querySelector('#METAR07UTC-Title')
// let panelLayerMETAR07UTC_lists = document.querySelector('#METAR07UTC-lists')

// let panelLayerMETAR08UTC_Title = document.querySelector('#METAR08UTC-Title')
// let panelLayerMETAR08UTC_lists = document.querySelector('#METAR08UTC-lists')

// let panelLayerMETAR09UTC_Title = document.querySelector('#METAR09UTC-Title')
// let panelLayerMETAR09UTC_lists = document.querySelector('#METAR09UTC-lists')

// let panelLayerMETAR10UTC_Title = document.querySelector('#METAR10UTC-Title')
// let panelLayerMETAR10UTC_lists = document.querySelector('#METAR10UTC-lists')

// let panelLayerMETAR11UTC_Title = document.querySelector('#METAR11UTC-Title')
// let panelLayerMETAR11UTC_lists = document.querySelector('#METAR11UTC-lists')

// let panelLayerMETAR12UTC_Title = document.querySelector('#METAR12UTC-Title')
// let panelLayerMETAR12UTC_lists = document.querySelector('#METAR12UTC-lists')

// let panelLayerMETAR13UTC_Title = document.querySelector('#METAR13UTC-Title')
// let panelLayerMETAR13UTC_lists = document.querySelector('#METAR13UTC-lists')

// let panelLayerMETAR14UTC_Title = document.querySelector('#METAR14UTC-Title')
// let panelLayerMETAR14UTC_lists = document.querySelector('#METAR14UTC-lists')

// let panelLayerMETAR15UTC_Title = document.querySelector('#METAR15UTC-Title')
// let panelLayerMETAR15UTC_lists = document.querySelector('#METAR15UTC-lists')

// let panelLayerMETAR16UTC_Title = document.querySelector('#METAR16UTC-Title')
// let panelLayerMETAR16UTC_lists = document.querySelector('#METAR16UTC-lists')

// let panelLayerMETAR17UTC_Title = document.querySelector('#METAR17UTC-Title')
// let panelLayerMETAR17UTC_lists = document.querySelector('#METAR17UTC-lists')

// let panelLayerMETAR18UTC_Title = document.querySelector('#METAR18UTC-Title')
// let panelLayerMETAR18UTC_lists = document.querySelector('#METAR18UTC-lists')

// let panelLayerMETAR19UTC_Title = document.querySelector('#METAR19UTC-Title')
// let panelLayerMETAR19UTC_lists = document.querySelector('#METAR19UTC-lists')

// let panelLayerMETAR20UTC_Title = document.querySelector('#METAR20UTC-Title')
// let panelLayerMETAR20UTC_lists = document.querySelector('#METAR20UTC-lists')

// let panelLayerMETAR21UTC_Title = document.querySelector('#METAR21UTC-Title')
// let panelLayerMETAR21UTC_lists = document.querySelector('#METAR21UTC-lists')

// let panelLayerMETAR22UTC_Title = document.querySelector('#METAR22UTC-Title')
// let panelLayerMETAR22UTC_lists = document.querySelector('#METAR22UTC-lists')

// let panelLayerMETAR23UTC_Title = document.querySelector('#METAR23UTC-Title')
// let panelLayerMETAR23UTC_lists = document.querySelector('#METAR23UTC-lists')

//SYNOP//
// let panelLayerSYNOP00UTC_Title = document.querySelector('#SYNOP00UTC-Title')
// let panelLayerSYNOP00UTC_lists = document.querySelector('#SYNOP00UTC-lists')

// let panelLayerSYNOP03UTC_Title = document.querySelector('#SYNOP03UTC-Title')
// let panelLayerSYNOP03UTC_lists = document.querySelector('#SYNOP03UTC-lists')

// let panelLayerSYNOP06UTC_Title = document.querySelector('#SYNOP06UTC-Title')
// let panelLayerSYNOP06UTC_lists = document.querySelector('#SYNOP06UTC-lists')

// let panelLayerSYNOP09UTC_Title = document.querySelector('#SYNOP09UTC-Title')
// let panelLayerSYNOP09UTC_lists = document.querySelector('#SYNOP09UTC-lists')

// let panelLayerSYNOP12UTC_Title = document.querySelector('#SYNOP12UTC-Title')
// let panelLayerSYNOP12UTC_lists = document.querySelector('#SYNOP12UTC-lists')

// let panelLayerSYNOP15UTC_Title = document.querySelector('#SYNOP15UTC-Title')
// let panelLayerSYNOP15UTC_lists = document.querySelector('#SYNOP15UTC-lists')

// let panelLayerSYNOP18UTC_Title = document.querySelector('#SYNOP18UTC-Title')
// let panelLayerSYNOP18UTC_lists = document.querySelector('#SYNOP18UTC-lists')

// let panelLayerSYNOP21UTC_Title = document.querySelector('#SYNOP21UTC-Title')
// let panelLayerSYNOP21UTC_lists = document.querySelector('#SYNOP21UTC-lists')

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
// let clickedMETAR00UTCLists = [];
// let clickedMETAR01UTCLists = [];
// let clickedMETAR02UTCLists = [];
// let clickedMETAR03UTCLists = [];
// let clickedMETAR04UTCLists = [];
// let clickedMETAR05UTCLists = [];
// let clickedMETAR06UTCLists = [];
// let clickedMETAR07UTCLists = [];
// let clickedMETAR08UTCLists = [];
// let clickedMETAR09UTCLists = [];
// let clickedMETAR10UTCLists = [];
// let clickedMETAR11UTCLists = [];
// let clickedMETAR12UTCLists = [];
// let clickedMETAR13UTCLists = [];
// let clickedMETAR14UTCLists = [];
// let clickedMETAR15UTCLists = [];
// let clickedMETAR16UTCLists = [];
// let clickedMETAR17UTCLists = [];
// let clickedMETAR18UTCLists = [];
// let clickedMETAR19UTCLists = [];
// let clickedMETAR20UTCLists = [];
// let clickedMETAR21UTCLists = [];
// let clickedMETAR22UTCLists = [];
// let clickedMETAR23UTCLists = [];


// let clickedSYNOP00UTCLists = [];
// let clickedSYNOP03UTCLists = [];
// let clickedSYNOP06UTCLists = [];
// let clickedSYNOP09UTCLists = [];
// let clickedSYNOP12UTCLists = [];
// let clickedSYNOP15UTCLists = [];
// let clickedSYNOP18UTCLists = [];
// let clickedSYNOP21UTCLists = [];

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
        if (_this.context._layer.group.name == "Radar Reflectivity") {
            if (panelLayerRadarTitle.innerHTML == '') {
                panelLayerRadarTitle.innerHTML = _this.context._layer.group.name + ':'
                Light_RadarRow.style.display = 'block';
            }

            if (layer_name == 'Radar Reflectivity') {
                clickedRadarLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}`
                );
            }
            if (layer_name == 'Radar Animation') {
                clickedRadarLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}`
                );
            }
            panelLayerRadarlists.innerHTML = clickedRadarLists.join("");
        }
        //EXPOSURE
        if (_this.context._layer.group.name == "Exposure Layers") {
            if (panelLayerExposureTitle.innerHTML == '') {
                EXPOSURE.innerHTML = "EXPOSURE"
                panelLayerExposureTitle.innerHTML = _this.context._layer.group.name + ':'
                ExposureRow.style.display = 'block';
            }

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

            // if (layer_name == 'LULC') {
            //     clickedExposureLists.push(
            //         `<span style="display: flex; flex-direction: column; align-items: center;">` +
            //         `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
            //         `<img src="img/LULC.jpeg" style="width: 175px; height: 250px; margin-top: 5px;">` +
            //         `</span>`
            //     );
            // }


            panelLayerExposureLists.innerHTML = clickedExposureLists.join("");
        }

        //METAR
        if (_this.context._layer.group.name == "METAR 00UTC") {
            if (layer_name == 'TEMPERATURE') {
                metarTempImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                metarDewPointImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'VISIBILITY') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name)
            }
        }
        if (_this.context._layer.group.name == "METAR 01UTC") {
            if (layer_name == 'TEMPERATURE') {
                metarTempImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                metarDewPointImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'VISIBILITY') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name)
            }
        }
        if (_this.context._layer.group.name == "METAR 02UTC") {
            if (layer_name == 'TEMPERATURE') {
                metarTempImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                metarDewPointImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'VISIBILITY') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name)
            }
        }
        if (_this.context._layer.group.name == "METAR 03UTC") {
            if (layer_name == 'TEMPERATURE') {
                metarTempImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                metarDewPointImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'VISIBILITY') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name)
            }
        }
        if (_this.context._layer.group.name == "METAR 04UTC") {
            if (layer_name == 'TEMPERATURE') {
                metarTempImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                metarDewPointImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'VISIBILITY') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name)
            }
        }
        if (_this.context._layer.group.name == "METAR 05UTC") {
            if (layer_name == 'TEMPERATURE') {
                metarTempImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                metarDewPointImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'VISIBILITY') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name)
            }
        }
        if (_this.context._layer.group.name == "METAR 06UTC") {
            if (layer_name == 'TEMPERATURE') {
                metarTempImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                metarDewPointImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'VISIBILITY') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name)
            }
        }
        if (_this.context._layer.group.name == "METAR 07UTC") {
            if (layer_name == 'TEMPERATURE') {
                metarTempImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                metarDewPointImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'VISIBILITY') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name)
            }
        }
        if (_this.context._layer.group.name == "METAR 08UTC") {
            if (layer_name == 'TEMPERATURE') {
                metarTempImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                metarDewPointImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'VISIBILITY') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name)
            }
        }
        if (_this.context._layer.group.name == "METAR 09UTC") {
            if (layer_name == 'TEMPERATURE') {
                metarTempImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                metarDewPointImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'VISIBILITY') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name)
            }
        }
        if (_this.context._layer.group.name == "METAR 10UTC") {
            if (layer_name == 'TEMPERATURE') {
                metarTempImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                metarDewPointImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'VISIBILITY') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name)
            }
        }
        if (_this.context._layer.group.name == "METAR 11UTC") {
            if (layer_name == 'TEMPERATURE') {
                metarTempImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                metarDewPointImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'VISIBILITY') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name)
            }
        }
        if (_this.context._layer.group.name == "METAR 12UTC") {
            if (layer_name == 'TEMPERATURE') {
                metarTempImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                metarDewPointImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'VISIBILITY') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name)
            }
        }
        if (_this.context._layer.group.name == "METAR 13UTC") {
            if (layer_name == 'TEMPERATURE') {
                metarTempImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                metarDewPointImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'VISIBILITY') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name)
            }
        }
        if (_this.context._layer.group.name == "METAR 14UTC") {
            if (layer_name == 'TEMPERATURE') {
                metarTempImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                metarDewPointImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'VISIBILITY') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name)
            }
        }
        if (_this.context._layer.group.name == "METAR 15UTC") {
            if (layer_name == 'TEMPERATURE') {
                metarTempImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                metarDewPointImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'VISIBILITY') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name)
            }
        }
        if (_this.context._layer.group.name == "METAR 16UTC") {
            if (layer_name == 'TEMPERATURE') {
                metarTempImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                metarDewPointImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'VISIBILITY') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name)
            }
        }
        if (_this.context._layer.group.name == "METAR 17UTC") {
            if (layer_name == 'TEMPERATURE') {
                metarTempImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                metarDewPointImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'VISIBILITY') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name)
            }
        }
        if (_this.context._layer.group.name == "METAR 18UTC") {
            if (layer_name == 'TEMPERATURE') {
                metarTempImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                metarDewPointImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'VISIBILITY') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name)
            }
        }
        if (_this.context._layer.group.name == "METAR 19UTC") {
            if (layer_name == 'TEMPERATURE') {
                metarTempImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                metarDewPointImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'VISIBILITY') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name)
            }
        }
        if (_this.context._layer.group.name == "METAR 20UTC") {
            if (layer_name == 'TEMPERATURE') {
                metarTempImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                metarDewPointImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'VISIBILITY') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name)
            }
        }
        if (_this.context._layer.group.name == "METAR 21UTC") {
            if (layer_name == 'TEMPERATURE') {
                metarTempImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                metarDewPointImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'VISIBILITY') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name)
            }
        }
        if (_this.context._layer.group.name == "METAR 22UTC") {
            if (layer_name == 'TEMPERATURE') {
                metarTempImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                metarDewPointImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'VISIBILITY') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name)
            }
        }
        if (_this.context._layer.group.name == "METAR 23UTC") {
            if (layer_name == 'TEMPERATURE') {
                metarTempImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'DEW POINT TEMPERATURE') {
                metarDewPointImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'VISIBILITY') {
                metarVisibilityImageAndLegend(layer_group_name, layer_name)
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name)
            }
        }


        // SYNOP--
        if (_this.context._layer.group.name == "SYNOP 00UTC") {
            if (layer_name == 'TEMPERATURE') {
                synopTempImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'MEAN SEA LEVEL PRESSURE') {
                synopMeanSeaLevelImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'CLOUD COVER') {
                synopCloudCoverImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'GEOPOTENTIAL HEIGHT') {
                synopGeopotentialHeightImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'RELATIVE HUMIDITY') {
                synopRelativeHumidityImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'VISIBILITY') {
                synopVisibilityImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                synopWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == '3h RAINFALL') {
                synop3hRainfallImageAndLegend(layer_group_name, layer_name);
            }
        }
        if (_this.context._layer.group.name == "SYNOP 03UTC") {
            if (layer_name == 'TEMPERATURE') {
                synopTempImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'MEAN SEA LEVEL PRESSURE') {
                synopMeanSeaLevelImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'CLOUD COVER') {
                synopCloudCoverImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'GEOPOTENTIAL HEIGHT') {
                synopGeopotentialHeightImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'RELATIVE HUMIDITY') {
                synopRelativeHumidityImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'VISIBILITY') {
                synopVisibilityImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                synopWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == '3h RAINFALL') {
                synop3hRainfallImageAndLegend(layer_group_name, layer_name);
            }
        }
        if (_this.context._layer.group.name == "SYNOP 06UTC") {
            if (layer_name == 'TEMPERATURE') {
                synopTempImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'MEAN SEA LEVEL PRESSURE') {
                synopMeanSeaLevelImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'CLOUD COVER') {
                synopCloudCoverImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'GEOPOTENTIAL HEIGHT') {
                synopGeopotentialHeightImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'RELATIVE HUMIDITY') {
                synopRelativeHumidityImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'VISIBILITY') {
                synopVisibilityImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                synopWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == '3h RAINFALL') {
                synop3hRainfallImageAndLegend(layer_group_name, layer_name);
            }
        }
        if (_this.context._layer.group.name == "SYNOP 09UTC") {
            if (layer_name == 'TEMPERATURE') {
                synopTempImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'MEAN SEA LEVEL PRESSURE') {
                synopMeanSeaLevelImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'CLOUD COVER') {
                synopCloudCoverImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'GEOPOTENTIAL HEIGHT') {
                synopGeopotentialHeightImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'RELATIVE HUMIDITY') {
                synopRelativeHumidityImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'VISIBILITY') {
                synopVisibilityImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                synopWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == '3h RAINFALL') {
                synop3hRainfallImageAndLegend(layer_group_name, layer_name);
            }
        }
        if (_this.context._layer.group.name == "SYNOP 12UTC") {
            if (layer_name == 'TEMPERATURE') {
                synopTempImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'MEAN SEA LEVEL PRESSURE') {
                synopMeanSeaLevelImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'CLOUD COVER') {
                synopCloudCoverImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'GEOPOTENTIAL HEIGHT') {
                synopGeopotentialHeightImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'RELATIVE HUMIDITY') {
                synopRelativeHumidityImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'VISIBILITY') {
                synopVisibilityImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                synopWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == '3h RAINFALL') {
                synop3hRainfallImageAndLegend(layer_group_name, layer_name);
            }
        }
        if (_this.context._layer.group.name == "SYNOP 15UTC") {
            if (layer_name == 'TEMPERATURE') {
                synopTempImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'MEAN SEA LEVEL PRESSURE') {
                synopMeanSeaLevelImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'CLOUD COVER') {
                synopCloudCoverImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'GEOPOTENTIAL HEIGHT') {
                synopGeopotentialHeightImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'RELATIVE HUMIDITY') {
                synopRelativeHumidityImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'VISIBILITY') {
                synopVisibilityImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                synopWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == '3h RAINFALL') {
                synop3hRainfallImageAndLegend(layer_group_name, layer_name);
            }
        }
        if (_this.context._layer.group.name == "SYNOP 18UTC") {
            if (layer_name == 'TEMPERATURE') {
                synopTempImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'MEAN SEA LEVEL PRESSURE') {
                synopMeanSeaLevelImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'CLOUD COVER') {
                synopCloudCoverImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'GEOPOTENTIAL HEIGHT') {
                synopGeopotentialHeightImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'RELATIVE HUMIDITY') {
                synopRelativeHumidityImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'VISIBILITY') {
                synopVisibilityImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                synopWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == '3h RAINFALL') {
                synop3hRainfallImageAndLegend(layer_group_name, layer_name);
            }
        }
        if (_this.context._layer.group.name == "SYNOP 21UTC") {
            if (layer_name == 'TEMPERATURE') {
                synopTempImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'MEAN SEA LEVEL PRESSURE') {
                synopMeanSeaLevelImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'CLOUD COVER') {
                synopCloudCoverImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'GEOPOTENTIAL HEIGHT') {
                synopGeopotentialHeightImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'RELATIVE HUMIDITY') {
                synopRelativeHumidityImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'VISIBILITY') {
                synopVisibilityImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == 'WIND SPEED AND DIRECTION') {
                synopWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name);
            }
            if (layer_name == '3h RAINFALL') {
                synop3hRainfallImageAndLegend(layer_group_name, layer_name);
            }
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
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
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

    
    
    </span>
</span>`
                );
            }
            if (layer_name == 'Radar Animation') {
                clickedRADARPRODUCTSLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
  <input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}
  <span style="display: flex; flex-direction: column; font-family: Arial, sans-serif;">
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

    
    
    </span>
</span>`
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
            if (layer_name == 'LOW LEVEL CONVERGENCE') {
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
            if (layer_name == 'UPPER LEVEL DIVEGENCE') {
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
            if (layer_name == 'MID LEVEL SHEAR') {
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
            if (layer_name == 'VORTICITY AT 200hPa') {
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
            if (layer_name == 'VORTICITY AT 500hPa') {
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
            if (layer_name == 'VORTICITY AT 700hPa') {
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
            if (layer_name == 'VORTICITY AT 850hPa') {
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
                    ` <img src="img/lighting.jpg" style="width: 125px; height: 20px;">` +
                    `</span>`
                );
            }
            if (layer_name == 'Last 05-10 min') {
                clickedLIGHTININGLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/lighting.jpg" style="width: 125px; height: 20px;">` +
                    `</span>`
                );
            }
            if (layer_name == 'Last 10-15 min') {
                clickedLIGHTININGLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/lighting.jpg" style="width: 125px; height: 20px;">` +
                    `</span>`
                );
            }
            if (layer_name == 'ILDN Last 05 min') {
                clickedLIGHTININGLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/lighting.jpg" style="width: 125px; height: 20px;">` +
                    `</span>`
                );
            }
            if (layer_name == 'Nowcast Alerts') {
                clickedLIGHTININGLists.push(
                    `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">` +
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name}` +
                    ` <img src="img/lighting.jpg" style="width: 125px; height: 20px;">` +
                    `</span>`
                );
            }

            panelLayerLIGHTINING_lists.innerHTML = clickedLIGHTININGLists.join("");
        }

        // SOUNDING //
        if (_this.context._layer.group.name == "SOUNDING_00_UTC WIND") {
            if (panelLayerSOUNDING00UTCWIND_Title.innerHTML == '') {
                SOUNDING.innerHTML = "SOUNDING"
                panelLayerSOUNDING00UTCWIND_Title.innerHTML = _this.context._layer.group.name + ':'
                SOUNDING_Row.style.display = 'block';
            }

            if (layer_name == '1000 hpa WIND') {
                clickedSOUNDING00UTCWINDLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '850 hpa WIND') {
                clickedSOUNDING00UTCWINDLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '700 hpa WIND') {
                clickedSOUNDING00UTCWINDLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '500 hpa WIND') {
                clickedSOUNDING00UTCWINDLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '300 hpa WIND') {
                clickedSOUNDING00UTCWINDLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '200 hpa WIND') {
                clickedSOUNDING00UTCWINDLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '100 hpa WIND') {
                clickedSOUNDING00UTCWINDLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '50 hpa WIND') {
                clickedSOUNDING00UTCWINDLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
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
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '850 hpa WIND') {
                clickedSOUNDING12UTCWINDLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '700 hpa WIND') {
                clickedSOUNDING12UTCWINDLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '500 hpa WIND') {
                clickedSOUNDING12UTCWINDLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '300 hpa WIND') {
                clickedSOUNDING12UTCWINDLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '200 hpa WIND') {
                clickedSOUNDING12UTCWINDLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '100 hpa WIND') {
                clickedSOUNDING12UTCWINDLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '50 hpa WIND') {
                clickedSOUNDING12UTCWINDLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
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
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '850 hpa TEMP') {
                clickedSOUNDING00UTCTEMPLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '700 hpa TEMP') {
                clickedSOUNDING00UTCTEMPLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '500 hpa TEMP') {
                clickedSOUNDING00UTCTEMPLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '300 hpa TEMP') {
                clickedSOUNDING00UTCTEMPLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '200 hpa TEMP') {
                clickedSOUNDING00UTCTEMPLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '100 hpa TEMP') {
                clickedSOUNDING00UTCTEMPLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '50 hpa TEMP') {
                clickedSOUNDING00UTCTEMPLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
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
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '850 hpa TEMP') {
                clickedSOUNDING12UTCTEMPLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '700 hpa TEMP') {
                clickedSOUNDING12UTCTEMPLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '500 hpa TEMP') {
                clickedSOUNDING12UTCTEMPLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '300 hpa TEMP') {
                clickedSOUNDING12UTCTEMPLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '200 hpa TEMP') {
                clickedSOUNDING12UTCTEMPLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '100 hpa TEMP') {
                clickedSOUNDING12UTCTEMPLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '50 hpa TEMP') {
                clickedSOUNDING12UTCTEMPLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
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
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '850 hpa DEW POINT') {
                clickedSOUNDING00UTCDEWPOINTLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '700 hpa DEW POINT') {
                clickedSOUNDING00UTCDEWPOINTLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '500 hpa DEW POINT') {
                clickedSOUNDING00UTCDEWPOINTLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '300 hpa DEW POINT') {
                clickedSOUNDING00UTCDEWPOINTLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '200 hpa DEW POINT') {
                clickedSOUNDING00UTCDEWPOINTLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '100 hpa DEW POINT') {
                clickedSOUNDING00UTCDEWPOINTLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '50 hpa DEW POINT') {
                clickedSOUNDING00UTCDEWPOINTLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
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
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '850 hpa DEW POINT') {
                clickedSOUNDING12UTCDEWPOINTLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '700 hpa DEW POINT') {
                clickedSOUNDING12UTCDEWPOINTLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '500 hpa DEW POINT') {
                clickedSOUNDING12UTCDEWPOINTLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '300 hpa DEW POINT') {
                clickedSOUNDING12UTCDEWPOINTLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '200 hpa DEW POINT') {
                clickedSOUNDING12UTCDEWPOINTLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '100 hpa DEW POINT') {
                clickedSOUNDING12UTCDEWPOINTLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
            }
            if (layer_name == '50 hpa DEW POINT') {
                clickedSOUNDING12UTCDEWPOINTLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                soundingLegendImage();
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
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                WRFReflectivityLegendImage();
            }
            if (layer_name == 'Next 03-06 Hrs') {
                clickedWRFReflectivityLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                WRFReflectivityLegendImage();
            }
            panelLayerWRFReflectivity_lists.innerHTML = clickedWRFReflectivityLists.join("");
        }
        if (_this.context._layer.group.name == "WRF lightning Product") {
            if (panelLayerWRFlightningProduct_Title.innerHTML == '') {
                MESOLSCALE.innerHTML = "MESOLSCALE FORECAST"
                panelLayerWRFlightningProduct_Title.innerHTML = _this.context._layer.group.name + ':'
                MESOLSCALE_Row.style.display = 'block';
            }

            if (layer_name == 'Next 03Hrs') {
                clickedWRFlightningProductLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                WRFlightningProductLegendImage();
            }
            if (layer_name == 'Next 03-06 Hrs') {
                clickedWRFlightningProductLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                WRFlightningProductLegendImage();
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
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                WRFAccumlatedRainfallLegendImage();
            }
            if (layer_name == 'Next 03-06 Hrs') {
                clickedWRFAccumlatedRainfallLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                WRFAccumlatedRainfallLegendImage();
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
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                lightningPotentialindexLegendImage();
            }
            if (layer_name == 'Next 01-02 Hrs') {
                clickedlightningPotentialindexLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                lightningPotentialindexLegendImage();
            }
            if (layer_name == 'Next 02-03 Hrs') {
                clickedlightningPotentialindexLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                lightningPotentialindexLegendImage();
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
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                NCUMRlightningProductLegendImage();
            }
            if (layer_name == 'Next 03-06 Hrs') {
                clickedNCUMRlightningProductLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                NCUMRlightningProductLegendImage();
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
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                NCUMRWindGustLegendImage();
            }
            if (layer_name == 'Next 03-06 Hrs') {
                clickedNCUMRWindGustLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                NCUMRWindGustLegendImage();
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
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                NCUMRRainfallLegendImage();
            }
            if (layer_name == 'Next 03-06 Hrs') {
                clickedNCUMRRainfallLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                NCUMRRainfallLegendImage();
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
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                HRRR_SPHourlyDBZLegendImage();
            }
            if (layer_name == 'Next 01-02 Hrs') {
                clickedHRRR_SPHourlyDBZLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                HRRR_SPHourlyDBZLegendImage();
            }
            if (layer_name == 'Next 02-03 Hrs') {
                clickedHRRR_SPHourlyDBZLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                HRRR_SPHourlyDBZLegendImage();
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
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                HRRR_NEHourlyDBZLegendImage();
            }
            if (layer_name == 'Next 01-02 Hrs') {
                clickedHRRR_NEHourlyDBZLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                HRRR_NEHourlyDBZLegendImage();
            }
            if (layer_name == 'Next 02-03 Hrs') {
                clickedHRRR_NEHourlyDBZLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                HRRR_NEHourlyDBZLegendImage();
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
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                HRRR_NWHourlyDBZLegendImage();
            }
            if (layer_name == 'Next 01-02 Hrs') {
                clickedHRRR_NWHourlyDBZLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                HRRR_NWHourlyDBZLegendImage();
            }
            if (layer_name == 'Next 02-03 Hrs') {
                clickedHRRR_NWHourlyDBZLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                HRRR_NWHourlyDBZLegendImage();
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
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                EWRFMaxZLegendImage();
            }
            if (layer_name == 'Next 01-02 Hrs') {
                clickedEWRFMaxZLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                EWRFMaxZLegendImage();
            }
            if (layer_name == 'Next 02-03 Hrs') {
                clickedEWRFMaxZLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                EWRFMaxZLegendImage();
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
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                EWRFLightningLegendImage();
            }
            if (layer_name == 'Next 01-02 Hrs') {
                clickedEWRFLightningLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                EWRFLightningLegendImage();
            }
            if (layer_name == 'Next 02-03 Hrs') {
                clickedEWRFLightningLists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                EWRFLightningLegendImage();
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
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                RainfallIntensityLegendImage();
            }
            if (layer_name == 'NCUM DAY1') {
                clickedRainfallIntensityDay1Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                RainfallIntensityLegendImage();
            }
            if (layer_name == 'NEPS DAY1') {
                clickedRainfallIntensityDay1Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                RainfallIntensityLegendImage();
            }
            if (layer_name == 'WRF DAY1') {
                clickedRainfallIntensityDay1Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                RainfallIntensityLegendImage();
            }
            if (layer_name == 'GEFS DAY1') {
                clickedRainfallIntensityDay1Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                RainfallIntensityLegendImage();
            }
            if (layer_name == 'ECMWF DAY1') {
                clickedRainfallIntensityDay1Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                RainfallIntensityLegendImage();
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
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                RainfallIntensityLegendImage();
            }
            if (layer_name == 'NCUM DAY2') {
                clickedRainfallIntensityDay2Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                RainfallIntensityLegendImage();
            }
            if (layer_name == 'NEPS DAY2') {
                clickedRainfallIntensityDay2Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                RainfallIntensityLegendImage();
            }
            if (layer_name == 'WRF DAY2') {
                clickedRainfallIntensityDay2Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                RainfallIntensityLegendImage();
            }
            if (layer_name == 'GEFS DAY2') {
                clickedRainfallIntensityDay2Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                RainfallIntensityLegendImage();
            }
            if (layer_name == 'ECMWF DAY2') {
                clickedRainfallIntensityDay2Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                RainfallIntensityLegendImage();
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
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                RainfallIntensityLegendImage();
            }
            if (layer_name == 'NCUM DAY3') {
                clickedRainfallIntensityDay3Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                RainfallIntensityLegendImage();
            }
            if (layer_name == 'NEPS DAY3') {
                clickedRainfallIntensityDay3Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                RainfallIntensityLegendImage();
            }
            if (layer_name == 'WRF DAY3') {
                clickedRainfallIntensityDay3Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                RainfallIntensityLegendImage();
            }
            if (layer_name == 'GEFS DAY3') {
                clickedRainfallIntensityDay3Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                RainfallIntensityLegendImage();
            }
            if (layer_name == 'ECMWF DAY3') {
                clickedRainfallIntensityDay3Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                RainfallIntensityLegendImage();
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
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                RainfallIntensityLegendImage();
            }
            if (layer_name == 'NCUM DAY4') {
                clickedRainfallIntensityDay4Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                RainfallIntensityLegendImage();
            }
            if (layer_name == 'NEPS DAY4') {
                clickedRainfallIntensityDay4Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                RainfallIntensityLegendImage();
            }
            if (layer_name == 'WRF DAY4') {
                clickedRainfallIntensityDay4Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                RainfallIntensityLegendImage();
            }
            if (layer_name == 'GEFS DAY4') {
                clickedRainfallIntensityDay4Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                RainfallIntensityLegendImage();
            }
            if (layer_name == 'ECMWF DAY4') {
                clickedRainfallIntensityDay4Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                RainfallIntensityLegendImage();
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
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                RainfallIntensityLegendImage();
            }
            if (layer_name == 'NCUM DAY5') {
                clickedRainfallIntensityDay5Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                RainfallIntensityLegendImage();
            }
            if (layer_name == 'NEPS DAY5') {
                clickedRainfallIntensityDay5Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                RainfallIntensityLegendImage();
            }
            if (layer_name == 'WRF DAY5') {
                clickedRainfallIntensityDay5Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                RainfallIntensityLegendImage();
            }
            if (layer_name == 'GEFS DAY5') {
                clickedRainfallIntensityDay5Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                RainfallIntensityLegendImage();
            }
            if (layer_name == 'ECMWF DAY5') {
                clickedRainfallIntensityDay5Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                RainfallIntensityLegendImage();
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
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                MSLPDayLegendImage();
            }
            if (layer_name == 'NCUM DAY1') {
                clickedMSLPDay1Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                MSLPDayLegendImage();
            }
            if (layer_name == 'NEPS DAY1') {
                clickedMSLPDay1Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                MSLPDayLegendImage();
            }
            if (layer_name == 'WRF DAY1') {
                clickedMSLPDay1Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                MSLPDayLegendImage();
            }
            if (layer_name == 'GEFS DAY1') {
                clickedMSLPDay1Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                MSLPDayLegendImage();
            }
            if (layer_name == 'ECMWF DAY1') {
                clickedMSLPDay1Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                MSLPDayLegendImage();
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
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                MSLPDayLegendImage();
            }
            if (layer_name == 'NCUM DAY2') {
                clickedMSLPDay2Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                MSLPDayLegendImage();
            }
            if (layer_name == 'NEPS DAY2') {
                clickedMSLPDay2Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                MSLPDayLegendImage();
            }
            if (layer_name == 'WRF DAY2') {
                clickedMSLPDay2Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                MSLPDayLegendImage();
            }
            if (layer_name == 'GEFS DAY2') {
                clickedMSLPDay2Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                MSLPDayLegendImage();
            }
            if (layer_name == 'ECMWF DAY2') {
                clickedMSLPDay2Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                MSLPDayLegendImage();
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
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                MSLPDayLegendImage();
            }
            if (layer_name == 'NCUM DAY3') {
                clickedMSLPDay3Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                MSLPDayLegendImage();
            }
            if (layer_name == 'NEPS DAY3') {
                clickedMSLPDay3Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                MSLPDayLegendImage();
            }
            if (layer_name == 'WRF DAY3') {
                clickedMSLPDay3Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                MSLPDayLegendImage();
            }
            if (layer_name == 'GEFS DAY3') {
                clickedMSLPDay3Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                MSLPDayLegendImage();
            }
            if (layer_name == 'ECMWF DAY3') {
                clickedMSLPDay3Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                MSLPDayLegendImage();
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
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                MSLPDayLegendImage();
            }
            if (layer_name == 'NCUM DAY4') {
                clickedMSLPDay4Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                MSLPDayLegendImage();
            }
            if (layer_name == 'NEPS DAY4') {
                clickedMSLPDay4Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                MSLPDayLegendImage();
            }
            if (layer_name == 'WRF DAY4') {
                clickedMSLPDay4Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                MSLPDayLegendImage();
            }
            if (layer_name == 'GEFS DAY4') {
                clickedMSLPDay4Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                MSLPDayLegendImage();
            }
            if (layer_name == 'ECMWF DAY4') {
                clickedMSLPDay4Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                MSLPDayLegendImage();
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
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                MSLPDayLegendImage();
            }
            if (layer_name == 'NCUM DAY5') {
                clickedMSLPDay5Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                MSLPDayLegendImage();
            }
            if (layer_name == 'NEPS DAY5') {
                clickedMSLPDay5Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                MSLPDayLegendImage();
            }
            if (layer_name == 'WRF DAY5') {
                clickedMSLPDay5Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                MSLPDayLegendImage();
            }
            if (layer_name == 'GEFS DAY5') {
                clickedMSLPDay5Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                MSLPDayLegendImage();
            }
            if (layer_name == 'ECMWF DAY5') {
                clickedMSLPDay5Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                MSLPDayLegendImage();
            }

            panelLayerMSLPDay5_lists.innerHTML = clickedMSLPDay5Lists.join("");
        }





        if (_this.context._layer.group.name == "10m WIND Day 1") {
            if (panelLayer10mWINDDay1_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayer10mWINDDay1_Title.innerHTML = _this.context._layer.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }

            if (layer_name === 'GFS DAY1') {
                clicked10mWINDDay1Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                mWINDDayLegendImage();
            }

            if (layer_name == 'NCUM DAY1') {
                clicked10mWINDDay1Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                mWINDDayLegendImage();
            }
            if (layer_name == 'NEPS DAY1') {
                clicked10mWINDDay1Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                mWINDDayLegendImage();
            }
            if (layer_name == 'WRF DAY1') {
                clicked10mWINDDay1Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                mWINDDayLegendImage();
            }
            if (layer_name == 'GEFS DAY1') {
                clicked10mWINDDay1Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                mWINDDayLegendImage();
            }
            if (layer_name == 'ECMWF DAY1') {
                clicked10mWINDDay1Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                mWINDDayLegendImage();
            }

            panelLayer10mWINDDay1_lists.innerHTML = clicked10mWINDDay1Lists.join("");
        }
        if (_this.context._layer.group.name == "10m WIND Day 2") {
            if (panelLayer10mWINDDay2_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayer10mWINDDay2_Title.innerHTML = _this.context._layer.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }

            if (layer_name == 'GFS DAY2') {
                clicked10mWINDDay2Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                mWINDDayLegendImage();
            }
            if (layer_name == 'NCUM DAY2') {
                clicked10mWINDDay2Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                mWINDDayLegendImage();
            }
            if (layer_name == 'NEPS DAY2') {
                clicked10mWINDDay2Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                mWINDDayLegendImage();
            }
            if (layer_name == 'WRF DAY2') {
                clicked10mWINDDay2Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                mWINDDayLegendImage();
            }
            if (layer_name == 'GEFS DAY2') {
                clicked10mWINDDay2Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                mWINDDayLegendImage();
            }
            if (layer_name == 'ECMWF DAY2') {
                clicked10mWINDDay2Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                mWINDDayLegendImage();
            }

            panelLayer10mWINDDay2_lists.innerHTML = clicked10mWINDDay2Lists.join("");
        }
        if (_this.context._layer.group.name == "10m WIND Day 3") {
            if (panelLayer10mWINDDay3_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayer10mWINDDay3_Title.innerHTML = _this.context._layer.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }

            if (layer_name == 'GFS DAY3') {
                clicked10mWINDDay3Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                mWINDDayLegendImage();
            }
            if (layer_name == 'NCUM DAY3') {
                clicked10mWINDDay3Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                mWINDDayLegendImage();
            }
            if (layer_name == 'NEPS DAY3') {
                clicked10mWINDDay3Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                mWINDDayLegendImage();
            }
            if (layer_name == 'WRF DAY3') {
                clicked10mWINDDay3Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                mWINDDayLegendImage();
            }
            if (layer_name == 'GEFS DAY3') {
                clicked10mWINDDay3Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                mWINDDayLegendImage();
            }
            if (layer_name == 'ECMWF DAY3') {
                clicked10mWINDDay3Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                mWINDDayLegendImage();
            }

            panelLayer10mWINDDay3_lists.innerHTML = clicked10mWINDDay3Lists.join("");
        }
        if (_this.context._layer.group.name == "10m WIND Day 4") {
            if (panelLayer10mWINDDay4_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayer10mWINDDay4_Title.innerHTML = _this.context._layer.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }

            if (layer_name == 'GFS DAY4') {
                clicked10mWINDDay4Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                mWINDDayLegendImage();
            }
            if (layer_name == 'NCUM DAY4') {
                clicked10mWINDDay4Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                mWINDDayLegendImage();
            }
            if (layer_name == 'NEPS DAY4') {
                clicked10mWINDDay4Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                mWINDDayLegendImage();
            }
            if (layer_name == 'WRF DAY4') {
                clicked10mWINDDay4Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                mWINDDayLegendImage();
            }
            if (layer_name == 'GEFS DAY4') {
                clicked10mWINDDay4Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                mWINDDayLegendImage();
            }
            if (layer_name == 'ECMWF DAY4') {
                clicked10mWINDDay4Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                mWINDDayLegendImage();
            }

            panelLayer10mWINDDay4_lists.innerHTML = clicked10mWINDDay4Lists.join("");
        }
        if (_this.context._layer.group.name == "10m WIND Day 5") {
            if (panelLayer10mWINDDay5_Title.innerHTML == '') {
                MEDIUM.innerHTML = "MEDIUM RANGE"
                panelLayer10mWINDDay5_Title.innerHTML = _this.context._layer.group.name + ':'
                MEDIUM_Row.style.display = 'block';
            }

            if (layer_name == 'GFS DAY5') {
                clicked10mWINDDay5Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                mWINDDayLegendImage();
            }
            if (layer_name == 'NCUM DAY5') {
                clicked10mWINDDay5Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                mWINDDayLegendImage();
            }
            if (layer_name == 'NEPS DAY5') {
                clicked10mWINDDay5Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                mWINDDayLegendImage();
            }
            if (layer_name == 'WRF DAY5') {
                clicked10mWINDDay5Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                mWINDDayLegendImage();
            }
            if (layer_name == 'GEFS DAY5') {
                clicked10mWINDDay5Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                mWINDDayLegendImage();
            }
            if (layer_name == 'ECMWF DAY5') {
                clicked10mWINDDay5Lists.push(
                    `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} </br>`
                );
                mWINDDayLegendImage();
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
            clickedMetarTempLists = clickedMetarTempLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarTemp_lists.innerHTML = clickedMetarTempLists.join("");
            map.removeLayer(SuratMarker);
        }
        if (uncheckLayer == 'METAR 00UTC DEW POINT TEMPERATURE') {
            clickedMetarDewPointLists = clickedMetarDewPointLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarDewPoint_lists.innerHTML = clickedMetarDewPointLists.join("");
            map.removeLayer(JodhpurMarker);
        }
        if (uncheckLayer == 'METAR 00UTC VISIBILITY') {
            clickedMetarVisibilityLists = clickedMetarVisibilityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarVisibility_lists.innerHTML = clickedMetarVisibilityLists.join("");
            map.removeLayer(KanpurMarker);
        }
        if (uncheckLayer == 'METAR 00UTC WIND SPEED AND DIRECTION') {
            clickedMetarWindSpeedAndDirectionLists = clickedMetarWindSpeedAndDirectionLists.filter(
                checkList => {
                    let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                    return clickedLayer != uncheckLayer
                });
            panelLayermetarWindSpeedAndDirection_lists.innerHTML = clickedMetarWindSpeedAndDirectionLists.join(
                "");
            map.removeLayer(MeerutMarker);
        }

        // if (panelLayerMETAR00UTC_lists.innerHTML == '') {
        //     panelLayerMETAR00UTC_Title.innerHTML = '';
        //     METAR.innerHTML = '';
        // }

        // //GroupPanelLayer-collapsible-METAR00UTC
        // if (panelLayerMETAR00UTC_lists.innerHTML != '') {
        //     document.querySelectorAll('.collapsible')[0].classList.add('expanded');
        //     document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        // }


        if (uncheckLayer == 'METAR 01UTC TEMPERATURE') {
            clickedMetarTempLists = clickedMetarTempLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarTemp_lists.innerHTML = clickedMetarTempLists.join("");
            map.removeLayer(X63);
        }
        if (uncheckLayer == 'METAR 01UTC DEW POINT TEMPERATURE') {
            clickedMetarDewPointLists = clickedMetarDeoPointLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarDewPoint_lists.innerHTML = clickedMetarDewPointLists.join("");
            map.removeLayer(X64);
        }
        if (uncheckLayer == 'METAR 01UTC VISIBILITY') {
            clickedMetarVisibilityLists = clickedMetarVisibilityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarVisibility_lists.innerHTML = clickedMetarVisibilityLists.join("");
            map.removeLayer(X65);
        }
        if (uncheckLayer == 'METAR 01UTC WIND SPEED AND DIRECTION') {
            clickedMetarWindSpeedAndDirectionLists = clickedMetarWindSpeedAndDirectionLists.filter(
                checkList => {
                    let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                    return clickedLayer != uncheckLayer
                });
            panelLayermetarWindSpeedAndDirection_lists.innerHTML = clickedMetarWindSpeedAndDirectionLists.join(
                "");
            map.removeLayer(X66);
        }

        // if (panelLayerMETAR01UTC_lists.innerHTML == '') {
        //     panelLayerMETAR01UTC_Title.innerHTML = '';
        //     METAR.innerHTML = '';
        // }

        // //GroupPanelLayer-collapsible-METAR01UTC
        // if (panelLayerMETAR01UTC_lists.innerHTML != '') {
        //     document.querySelectorAll('.collapsible')[0].classList.add('expanded');
        //     document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        // }


        if (uncheckLayer == 'METAR 02UTC TEMPERATURE') {
            clickedMetarTempLists = clickedMetarTempLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarTemp_lists.innerHTML = clickedMetarTempLists.join("");
            map.removeLayer(X67);
        }
        if (uncheckLayer == 'METAR 02UTC DEW POINT TEMPERATURE') {
            clickedMetarDewPointLists = clickedMetarDeoPointLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarDewPoint_lists.innerHTML = clickedMetarDewPointLists.join("");
            map.removeLayer(X68);
        }
        if (uncheckLayer == 'METAR 02UTC VISIBILITY') {
            clickedMetarVisibilityLists = clickedMetarVisibilityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarVisibility_lists.innerHTML = clickedMetarVisibilityLists.join("");
            map.removeLayer(X69);
        }
        if (uncheckLayer == 'METAR 02UTC WIND SPEED AND DIRECTION') {
            clickedMetarWindSpeedAndDirectionLists = clickedMetarWindSpeedAndDirectionLists.filter(
                checkList => {
                    let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                    return clickedLayer != uncheckLayer
                });
            panelLayermetarWindSpeedAndDirection_lists.innerHTML = clickedMetarWindSpeedAndDirectionLists.join(
                "");
            map.removeLayer(X70);
        }

        // if (panelLayerMETAR02UTC_lists.innerHTML == '') {
        //     panelLayerMETAR02UTC_Title.innerHTML = '';
        //     METAR.innerHTML = '';
        // }

        // //GroupPanelLayer-collapsible-METAR02UTC
        // if (panelLayerMETAR02UTC_lists.innerHTML != '') {
        //     document.querySelectorAll('.collapsible')[0].classList.add('expanded');
        //     document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        // }

        if (uncheckLayer == 'METAR 03UTC TEMPERATURE') {
            clickedMetarTempLists = clickedMetarTempLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarTemp_lists.innerHTML = clickedMetarTempLists.join("");
            map.removeLayer(X71);
        }
        if (uncheckLayer == 'METAR 03UTC DEW POINT TEMPERATURE') {
            clickedMetarDewPointLists = clickedMetarDeoPointLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarDewPoint_lists.innerHTML = clickedMetarDewPointLists.join("");
            map.removeLayer(X72);
        }
        if (uncheckLayer == 'METAR 03UTC VISIBILITY') {
            clickedMetarVisibilityLists = clickedMetarVisibilityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarVisibility_lists.innerHTML = clickedMetarVisibilityLists.join("");
            map.removeLayer(X73);
        }
        if (uncheckLayer == 'METAR 03UTC WIND SPEED AND DIRECTION') {
            clickedMetarWindSpeedAndDirectionLists = clickedMetarWindSpeedAndDirectionLists.filter(
                checkList => {
                    let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                    return clickedLayer != uncheckLayer
                });
            panelLayermetarWindSpeedAndDirection_lists.innerHTML = clickedMetarWindSpeedAndDirectionLists.join(
                "");
            map.removeLayer(X74);
        }

        // if (panelLayerMETAR03UTC_lists.innerHTML == '') {
        //     panelLayerMETAR03UTC_Title.innerHTML = '';
        //     METAR.innerHTML = '';
        // }

        // //GroupPanelLayer-collapsible-METAR03UTC
        // if (panelLayerMETAR03UTC_lists.innerHTML != '') {
        //     document.querySelectorAll('.collapsible')[0].classList.add('expanded');
        //     document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        // }

        if (uncheckLayer == 'METAR 04UTC TEMPERATURE') {
            clickedMetarTempLists = clickedMetarTempLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarTemp_lists.innerHTML = clickedMetarTempLists.join("");
            map.removeLayer(X75);
        }
        if (uncheckLayer == 'METAR 04UTC DEW POINT TEMPERATURE') {
            clickedMetarDewPointLists = clickedMetarDeoPointLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarDewPoint_lists.innerHTML = clickedMetarDewPointLists.join("");
            map.removeLayer(X76);
        }
        if (uncheckLayer == 'METAR 04UTC VISIBILITY') {
            clickedMetarVisibilityLists = clickedMetarVisibilityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarVisibility_lists.innerHTML = clickedMetarVisibilityLists.join("");
            map.removeLayer(X77);
        }
        if (uncheckLayer == 'METAR 04UTC WIND SPEED AND DIRECTION') {
            clickedMetarWindSpeedAndDirectionLists = clickedMetarWindSpeedAndDirectionLists.filter(
                checkList => {
                    let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                    return clickedLayer != uncheckLayer
                });
            panelLayermetarWindSpeedAndDirection_lists.innerHTML = clickedMetarWindSpeedAndDirectionLists.join(
                "");
            map.removeLayer(X78);
        }

        // if (panelLayerMETAR04UTC_lists.innerHTML == '') {
        //     panelLayerMETAR04UTC_Title.innerHTML = '';
        //     METAR.innerHTML = '';
        // }

        // //GroupPanelLayer-collapsible-METAR04UTC
        // if (panelLayerMETAR04UTC_lists.innerHTML != '') {
        //     document.querySelectorAll('.collapsible')[0].classList.add('expanded');
        //     document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        // }


        if (uncheckLayer == 'METAR 05UTC TEMPERATURE') {
            clickedMetarTempLists = clickedMetarTempLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarTemp_lists.innerHTML = clickedMetarTempLists.join("");
            map.removeLayer(X79);
        }
        if (uncheckLayer == 'METAR 05UTC DEW POINT TEMPERATURE') {
            clickedMetarDewPointLists = clickedMetarDeoPointLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarDewPoint_lists.innerHTML = clickedMetarDewPointLists.join("");
            map.removeLayer(X80);
        }
        if (uncheckLayer == 'METAR 05UTC VISIBILITY') {
            clickedMetarVisibilityLists = clickedMetarVisibilityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarVisibility_lists.innerHTML = clickedMetarVisibilityLists.join("");
            map.removeLayer(X81);
        }
        if (uncheckLayer == 'METAR 05UTC WIND SPEED AND DIRECTION') {
            clickedMetarWindSpeedAndDirectionLists = clickedMetarWindSpeedAndDirectionLists.filter(
                checkList => {
                    let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                    return clickedLayer != uncheckLayer
                });
            panelLayermetarWindSpeedAndDirection_lists.innerHTML = clickedMetarWindSpeedAndDirectionLists.join(
                "");
            map.removeLayer(X82);
        }

        // if (panelLayerMETAR05UTC_lists.innerHTML == '') {
        //     panelLayerMETAR05UTC_Title.innerHTML = '';
        //     METAR.innerHTML = '';
        // }

        // //GroupPanelLayer-collapsible-METAR05UTC
        // if (panelLayerMETAR05UTC_lists.innerHTML != '') {
        //     document.querySelectorAll('.collapsible')[0].classList.add('expanded');
        //     document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        // }

        if (uncheckLayer == 'METAR 06UTC TEMPERATURE') {
            clickedMetarTempLists = clickedMetarTempLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarTemp_lists.innerHTML = clickedMetarTempLists.join("");
            map.removeLayer(X83);
        }
        if (uncheckLayer == 'METAR 06UTC DEW POINT TEMPERATURE') {
            clickedMetarDewPointLists = clickedMetarDeoPointLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarDewPoint_lists.innerHTML = clickedMetarDewPointLists.join("");
            map.removeLayer(X84);
        }
        if (uncheckLayer == 'METAR 06UTC VISIBILITY') {
            clickedMetarVisibilityLists = clickedMetarVisibilityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarVisibility_lists.innerHTML = clickedMetarVisibilityLists.join("");
            map.removeLayer(X85);
        }
        if (uncheckLayer == 'METAR 06UTC WIND SPEED AND DIRECTION') {
            clickedMetarWindSpeedAndDirectionLists = clickedMetarWindSpeedAndDirectionLists.filter(
                checkList => {
                    let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                    return clickedLayer != uncheckLayer
                });
            panelLayermetarWindSpeedAndDirection_lists.innerHTML = clickedMetarWindSpeedAndDirectionLists.join(
                "");
            map.removeLayer(X86);
        }

        // if (panelLayerMETAR06UTC_lists.innerHTML == '') {
        //     panelLayerMETAR06UTC_Title.innerHTML = '';
        //     METAR.innerHTML = '';
        // }

        // //GroupPanelLayer-collapsible-METAR06UTC
        // if (panelLayerMETAR06UTC_lists.innerHTML != '') {
        //     document.querySelectorAll('.collapsible')[0].classList.add('expanded');
        //     document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        // }

        if (uncheckLayer == 'METAR 07UTC TEMPERATURE') {
            clickedMetarTempLists = clickedMetarTempLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarTemp_lists.innerHTML = clickedMetarTempLists.join("");
            map.removeLayer(X87);
        }
        if (uncheckLayer == 'METAR 07UTC DEW POINT TEMPERATURE') {
            clickedMetarDewPointLists = clickedMetarDeoPointLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarDewPoint_lists.innerHTML = clickedMetarDewPointLists.join("");
            map.removeLayer(X88);
        }
        if (uncheckLayer == 'METAR 07UTC VISIBILITY') {
            clickedMetarVisibilityLists = clickedMetarVisibilityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarVisibility_lists.innerHTML = clickedMetarVisibilityLists.join("");
            map.removeLayer(X89);
        }
        if (uncheckLayer == 'METAR 07UTC WIND SPEED AND DIRECTION') {
            clickedMetarWindSpeedAndDirectionLists = clickedMetarWindSpeedAndDirectionLists.filter(
                checkList => {
                    let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                    return clickedLayer != uncheckLayer
                });
            panelLayermetarWindSpeedAndDirection_lists.innerHTML = clickedMetarWindSpeedAndDirectionLists.join(
                "");
            map.removeLayer(X90);
        }

        // if (panelLayerMETAR07UTC_lists.innerHTML == '') {
        //     panelLayerMETAR07UTC_Title.innerHTML = '';
        //     METAR.innerHTML = '';
        // }

        // //GroupPanelLayer-collapsible-METAR07UTC
        // if (panelLayerMETAR07UTC_lists.innerHTML != '') {
        //     document.querySelectorAll('.collapsible')[0].classList.add('expanded');
        //     document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        // }

        if (uncheckLayer == 'METAR 08UTC TEMPERATURE') {
            clickedMetarTempLists = clickedMetarTempLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarTemp_lists.innerHTML = clickedMetarTempLists.join("");
            map.removeLayer(X91);
        }
        if (uncheckLayer == 'METAR 08UTC DEW POINT TEMPERATURE') {
            clickedMetarDewPointLists = clickedMetarDeoPointLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarDewPoint_lists.innerHTML = clickedMetarDewPointLists.join("");
            map.removeLayer(X92);
        }
        if (uncheckLayer == 'METAR 08UTC VISIBILITY') {
            clickedMetarVisibilityLists = clickedMetarVisibilityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarVisibility_lists.innerHTML = clickedMetarVisibilityLists.join("");
            map.removeLayer(X93);
        }
        if (uncheckLayer == 'METAR 08UTC WIND SPEED AND DIRECTION') {
            clickedMetarWindSpeedAndDirectionLists = clickedMetarWindSpeedAndDirectionLists.filter(
                checkList => {
                    let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                    return clickedLayer != uncheckLayer
                });
            panelLayermetarWindSpeedAndDirection_lists.innerHTML = clickedMetarWindSpeedAndDirectionLists.join(
                "");
            map.removeLayer(X94);
        }

        // if (panelLayerMETAR08UTC_lists.innerHTML == '') {
        //     panelLayerMETAR08UTC_Title.innerHTML = '';
        //     METAR.innerHTML = '';
        // }

        // //GroupPanelLayer-collapsible-METAR08UTC
        // if (panelLayerMETAR08UTC_lists.innerHTML != '') {
        //     document.querySelectorAll('.collapsible')[0].classList.add('expanded');
        //     document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        // }


        if (uncheckLayer == 'METAR 09UTC TEMPERATURE') {
            clickedMetarTempLists = clickedMetarTempLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarTemp_lists.innerHTML = clickedMetarTempLists.join("");
            map.removeLayer(X95);
        }
        if (uncheckLayer == 'METAR 09UTC DEW POINT TEMPERATURE') {
            clickedMetarDewPointLists = clickedMetarDeoPointLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarDewPoint_lists.innerHTML = clickedMetarDewPointLists.join("");
            map.removeLayer(X96);
        }
        if (uncheckLayer == 'METAR 09UTC VISIBILITY') {
            clickedMetarVisibilityLists = clickedMetarVisibilityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarVisibility_lists.innerHTML = clickedMetarVisibilityLists.join("");
            map.removeLayer(X97);
        }
        if (uncheckLayer == 'METAR 09UTC WIND SPEED AND DIRECTION') {
            clickedMetarWindSpeedAndDirectionLists = clickedMetarWindSpeedAndDirectionLists.filter(
                checkList => {
                    let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                    return clickedLayer != uncheckLayer
                });
            panelLayermetarWindSpeedAndDirection_lists.innerHTML = clickedMetarWindSpeedAndDirectionLists.join(
                "");
            map.removeLayer(X98);
        }

        // if (panelLayerMETAR09UTC_lists.innerHTML == '') {
        //     panelLayerMETAR09UTC_Title.innerHTML = '';
        //     METAR.innerHTML = '';
        // }

        // //GroupPanelLayer-collapsible-METAR09UTC
        // if (panelLayerMETAR09UTC_lists.innerHTML != '') {
        //     document.querySelectorAll('.collapsible')[0].classList.add('expanded');
        //     document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        // }

        if (uncheckLayer == 'METAR 10UTC TEMPERATURE') {
            clickedMetarTempLists = clickedMetarTempLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarTemp_lists.innerHTML = clickedMetarTempLists.join("");
            map.removeLayer(X99);
        }
        if (uncheckLayer == 'METAR 10UTC DEW POINT TEMPERATURE') {
            clickedMetarDewPointLists = clickedMetarDeoPointLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarDewPoint_lists.innerHTML = clickedMetarDewPointLists.join("");
            map.removeLayer(X100);
        }
        if (uncheckLayer == 'METAR 10UTC VISIBILITY') {
            clickedMetarVisibilityLists = clickedMetarVisibilityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarVisibility_lists.innerHTML = clickedMetarVisibilityLists.join("");
            map.removeLayer(X101);
        }
        if (uncheckLayer == 'METAR 10UTC WIND SPEED AND DIRECTION') {
            clickedMetarWindSpeedAndDirectionLists = clickedMetarWindSpeedAndDirectionLists.filter(
                checkList => {
                    let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                    return clickedLayer != uncheckLayer
                });
            panelLayermetarWindSpeedAndDirection_lists.innerHTML = clickedMetarWindSpeedAndDirectionLists.join(
                "");
            map.removeLayer(X102);
        }

        // if (panelLayerMETAR10UTC_lists.innerHTML == '') {
        //     panelLayerMETAR10UTC_Title.innerHTML = '';
        //     METAR.innerHTML = '';
        // }

        // //GroupPanelLayer-collapsible-METAR10UTC
        // if (panelLayerMETAR10UTC_lists.innerHTML != '') {
        //     document.querySelectorAll('.collapsible')[0].classList.add('expanded');
        //     document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        // }


        if (uncheckLayer == 'METAR 11UTC TEMPERATURE') {
            clickedMetarTempLists = clickedMetarTempLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarTemp_lists.innerHTML = clickedMetarTempLists.join("");
            map.removeLayer(X103);
        }
        if (uncheckLayer == 'METAR 11UTC DEW POINT TEMPERATURE') {
            clickedMetarDewPointLists = clickedMetarDeoPointLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarDewPoint_lists.innerHTML = clickedMetarDewPointLists.join("");
            map.removeLayer(X104);
        }
        if (uncheckLayer == 'METAR 11UTC VISIBILITY') {
            clickedMetarVisibilityLists = clickedMetarVisibilityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarVisibility_lists.innerHTML = clickedMetarVisibilityLists.join("");
            map.removeLayer(X105);
        }
        if (uncheckLayer == 'METAR 11UTC WIND SPEED AND DIRECTION') {
            clickedMetarWindSpeedAndDirectionLists = clickedMetarWindSpeedAndDirectionLists.filter(
                checkList => {
                    let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                    return clickedLayer != uncheckLayer
                });
            panelLayermetarWindSpeedAndDirection_lists.innerHTML = clickedMetarWindSpeedAndDirectionLists.join(
                "");
            map.removeLayer(X106);
        }

        // if (panelLayerMETAR11UTC_lists.innerHTML == '') {
        //     panelLayerMETAR11UTC_Title.innerHTML = '';
        //     METAR.innerHTML = '';
        // }

        // //GroupPanelLayer-collapsible-METAR11UTC
        // if (panelLayerMETAR11UTC_lists.innerHTML != '') {
        //     document.querySelectorAll('.collapsible')[0].classList.add('expanded');
        //     document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        // }


        if (uncheckLayer == 'METAR 12UTC TEMPERATURE') {
            clickedMetarTempLists = clickedMetarTempLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarTemp_lists.innerHTML = clickedMetarTempLists.join("");
            map.removeLayer(X107);
        }
        if (uncheckLayer == 'METAR 12UTC DEW POINT TEMPERATURE') {
            clickedMetarDewPointLists = clickedMetarDeoPointLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarDewPoint_lists.innerHTML = clickedMetarDewPointLists.join("");
            map.removeLayer(X108);
        }
        if (uncheckLayer == 'METAR 12UTC VISIBILITY') {
            clickedMetarVisibilityLists = clickedMetarVisibilityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarVisibility_lists.innerHTML = clickedMetarVisibilityLists.join("");
            map.removeLayer(X109);
        }
        if (uncheckLayer == 'METAR 12UTC WIND SPEED AND DIRECTION') {
            clickedMetarWindSpeedAndDirectionLists = clickedMetarWindSpeedAndDirectionLists.filter(
                checkList => {
                    let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                    return clickedLayer != uncheckLayer
                });
            panelLayermetarWindSpeedAndDirection_lists.innerHTML = clickedMetarWindSpeedAndDirectionLists.join(
                "");
            map.removeLayer(X110);
        }

        // if (panelLayerMETAR12UTC_lists.innerHTML == '') {
        //     panelLayerMETAR12UTC_Title.innerHTML = '';
        //     METAR.innerHTML = '';
        // }

        // //GroupPanelLayer-collapsible-METAR12UTC
        // if (panelLayerMETAR12UTC_lists.innerHTML != '') {
        //     document.querySelectorAll('.collapsible')[0].classList.add('expanded');
        //     document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        // }


        if (uncheckLayer == 'METAR 13UTC TEMPERATURE') {
            clickedMetarTempLists = clickedMetarTempLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarTemp_lists.innerHTML = clickedMetarTempLists.join("");
            map.removeLayer(X111);
        }
        if (uncheckLayer == 'METAR 13UTC DEW POINT TEMPERATURE') {
            clickedMetarDewPointLists = clickedMetarDeoPointLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarDewPoint_lists.innerHTML = clickedMetarDewPointLists.join("");
            map.removeLayer(X112);
        }
        if (uncheckLayer == 'METAR 13UTC VISIBILITY') {
            clickedMetarVisibilityLists = clickedMetarVisibilityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarVisibility_lists.innerHTML = clickedMetarVisibilityLists.join("");
            map.removeLayer(X113);
        }
        if (uncheckLayer == 'METAR 13UTC WIND SPEED AND DIRECTION') {
            clickedMetarWindSpeedAndDirectionLists = clickedMetarWindSpeedAndDirectionLists.filter(
                checkList => {
                    let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                    return clickedLayer != uncheckLayer
                });
            panelLayermetarWindSpeedAndDirection_lists.innerHTML = clickedMetarWindSpeedAndDirectionLists.join(
                "");
            map.removeLayer(X114);
        }

        // if (panelLayerMETAR13UTC_lists.innerHTML == '') {
        //     panelLayerMETAR13UTC_Title.innerHTML = '';
        //     METAR.innerHTML = '';
        // }

        // //GroupPanelLayer-collapsible-METAR13UTC
        // if (panelLayerMETAR13UTC_lists.innerHTML != '') {
        //     document.querySelectorAll('.collapsible')[0].classList.add('expanded');
        //     document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        // }


        if (uncheckLayer == 'METAR 14UTC TEMPERATURE') {
            clickedMetarTempLists = clickedMetarTempLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarTemp_lists.innerHTML = clickedMetarTempLists.join("");
            map.removeLayer(X115);
        }
        if (uncheckLayer == 'METAR 14UTC DEW POINT TEMPERATURE') {
            clickedMetarDewPointLists = clickedMetarDeoPointLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarDewPoint_lists.innerHTML = clickedMetarDewPointLists.join("");
            map.removeLayer(X116);
        }
        if (uncheckLayer == 'METAR 14UTC VISIBILITY') {
            clickedMetarVisibilityLists = clickedMetarVisibilityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarVisibility_lists.innerHTML = clickedMetarVisibilityLists.join("");
            map.removeLayer(X117);
        }
        if (uncheckLayer == 'METAR 14UTC WIND SPEED AND DIRECTION') {
            clickedMetarWindSpeedAndDirectionLists = clickedMetarWindSpeedAndDirectionLists.filter(
                checkList => {
                    let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                    return clickedLayer != uncheckLayer
                });
            panelLayermetarWindSpeedAndDirection_lists.innerHTML = clickedMetarWindSpeedAndDirectionLists.join(
                "");
            map.removeLayer(X118);
        }

        // if (panelLayerMETAR14UTC_lists.innerHTML == '') {
        //     panelLayerMETAR14UTC_Title.innerHTML = '';
        //     METAR.innerHTML = '';
        // }

        // //GroupPanelLayer-collapsible-METAR14UTC
        // if (panelLayerMETAR14UTC_lists.innerHTML != '') {
        //     document.querySelectorAll('.collapsible')[0].classList.add('expanded');
        //     document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        // }


        if (uncheckLayer == 'METAR 15UTC TEMPERATURE') {
            clickedMetarTempLists = clickedMetarTempLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarTemp_lists.innerHTML = clickedMetarTempLists.join("");
            map.removeLayer(X119);
        }
        if (uncheckLayer == 'METAR 15UTC DEW POINT TEMPERATURE') {
            clickedMetarDewPointLists = clickedMetarDeoPointLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarDewPoint_lists.innerHTML = clickedMetarDewPointLists.join("");
            map.removeLayer(X120);
        }
        if (uncheckLayer == 'METAR 15UTC VISIBILITY') {
            clickedMetarVisibilityLists = clickedMetarVisibilityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarVisibility_lists.innerHTML = clickedMetarVisibilityLists.join("");
            map.removeLayer(X121);
        }
        if (uncheckLayer == 'METAR 15UTC WIND SPEED AND DIRECTION') {
            clickedMetarWindSpeedAndDirectionLists = clickedMetarWindSpeedAndDirectionLists.filter(
                checkList => {
                    let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                    return clickedLayer != uncheckLayer
                });
            panelLayermetarWindSpeedAndDirection_lists.innerHTML = clickedMetarWindSpeedAndDirectionLists.join(
                "");
            map.removeLayer(X122);
        }

        // if (panelLayerMETAR15UTC_lists.innerHTML == '') {
        //     panelLayerMETAR15UTC_Title.innerHTML = '';
        //     METAR.innerHTML = '';
        // }

        // //GroupPanelLayer-collapsible-METAR15UTC
        // if (panelLayerMETAR15UTC_lists.innerHTML != '') {
        //     document.querySelectorAll('.collapsible')[0].classList.add('expanded');
        //     document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        // }


        if (uncheckLayer == 'METAR 16UTC TEMPERATURE') {
            clickedMetarTempLists = clickedMetarTempLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarTemp_lists.innerHTML = clickedMetarTempLists.join("");
            map.removeLayer(X123);
        }
        if (uncheckLayer == 'METAR 16UTC DEW POINT TEMPERATURE') {
            clickedMetarDewPointLists = clickedMetarDeoPointLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarDewPoint_lists.innerHTML = clickedMetarDewPointLists.join("");
            map.removeLayer(X124);
        }
        if (uncheckLayer == 'METAR 16UTC VISIBILITY') {
            clickedMetarVisibilityLists = clickedMetarVisibilityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarVisibility_lists.innerHTML = clickedMetarVisibilityLists.join("");
            map.removeLayer(X125);
        }
        if (uncheckLayer == 'METAR 16UTC WIND SPEED AND DIRECTION') {
            clickedMetarWindSpeedAndDirectionLists = clickedMetarWindSpeedAndDirectionLists.filter(
                checkList => {
                    let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                    return clickedLayer != uncheckLayer
                });
            panelLayermetarWindSpeedAndDirection_lists.innerHTML = clickedMetarWindSpeedAndDirectionLists.join(
                "");
            map.removeLayer(X126);
        }

        // if (panelLayerMETAR16UTC_lists.innerHTML == '') {
        //     panelLayerMETAR16UTC_Title.innerHTML = '';
        //     METAR.innerHTML = '';
        // }

        // //GroupPanelLayer-collapsible-METAR16UTC
        // if (panelLayerMETAR16UTC_lists.innerHTML != '') {
        //     document.querySelectorAll('.collapsible')[0].classList.add('expanded');
        //     document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        // }


        if (uncheckLayer == 'METAR 17UTC TEMPERATURE') {
            clickedMetarTempLists = clickedMetarTempLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarTemp_lists.innerHTML = clickedMetarTempLists.join("");
            map.removeLayer(X127);
        }
        if (uncheckLayer == 'METAR 17UTC DEW POINT TEMPERATURE') {
            clickedMetarDewPointLists = clickedMetarDeoPointLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarDewPoint_lists.innerHTML = clickedMetarDewPointLists.join("");
            map.removeLayer(X128);
        }
        if (uncheckLayer == 'METAR 17UTC VISIBILITY') {
            clickedMetarVisibilityLists = clickedMetarVisibilityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarVisibility_lists.innerHTML = clickedMetarVisibilityLists.join("");
            map.removeLayer(X129);
        }
        if (uncheckLayer == 'METAR 17UTC WIND SPEED AND DIRECTION') {
            clickedMetarWindSpeedAndDirectionLists = clickedMetarWindSpeedAndDirectionLists.filter(
                checkList => {
                    let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                    return clickedLayer != uncheckLayer
                });
            panelLayermetarWindSpeedAndDirection_lists.innerHTML = clickedMetarWindSpeedAndDirectionLists.join(
                "");
            map.removeLayer(X130);
        }

        // if (panelLayerMETAR17UTC_lists.innerHTML == '') {
        //     panelLayerMETAR17UTC_Title.innerHTML = '';
        //     METAR.innerHTML = '';
        // }

        // //GroupPanelLayer-collapsible-METAR17UTC
        // if (panelLayerMETAR17UTC_lists.innerHTML != '') {
        //     document.querySelectorAll('.collapsible')[0].classList.add('expanded');
        //     document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        // }


        if (uncheckLayer == 'METAR 18UTC TEMPERATURE') {
            clickedMetarTempLists = clickedMetarTempLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarTemp_lists.innerHTML = clickedMetarTempLists.join("");
            map.removeLayer(X131);
        }
        if (uncheckLayer == 'METAR 18UTC DEW POINT TEMPERATURE') {
            clickedMetarDewPointLists = clickedMetarDeoPointLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarDewPoint_lists.innerHTML = clickedMetarDewPointLists.join("");
            map.removeLayer(X132);
        }
        if (uncheckLayer == 'METAR 18UTC VISIBILITY') {
            clickedMetarVisibilityLists = clickedMetarVisibilityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarVisibility_lists.innerHTML = clickedMetarVisibilityLists.join("");
            map.removeLayer(X133);
        }
        if (uncheckLayer == 'METAR 18UTC WIND SPEED AND DIRECTION') {
            clickedMetarWindSpeedAndDirectionLists = clickedMetarWindSpeedAndDirectionLists.filter(
                checkList => {
                    let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                    return clickedLayer != uncheckLayer
                });
            panelLayermetarWindSpeedAndDirection_lists.innerHTML = clickedMetarWindSpeedAndDirectionLists.join(
                "");
            map.removeLayer(X134);
        }

        // if (panelLayerMETAR18UTC_lists.innerHTML == '') {
        //     panelLayerMETAR18UTC_Title.innerHTML = '';
        //     METAR.innerHTML = '';
        // }

        // //GroupPanelLayer-collapsible-METAR18UTC
        // if (panelLayerMETAR18UTC_lists.innerHTML != '') {
        //     document.querySelectorAll('.collapsible')[0].classList.add('expanded');
        //     document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        // }


        if (uncheckLayer == 'METAR 19UTC TEMPERATURE') {
            clickedMetarTempLists = clickedMetarTempLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarTemp_lists.innerHTML = clickedMetarTempLists.join("");
            map.removeLayer(X135);
        }
        if (uncheckLayer == 'METAR 19UTC DEW POINT TEMPERATURE') {
            clickedMetarDewPointLists = clickedMetarDeoPointLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarDewPoint_lists.innerHTML = clickedMetarDewPointLists.join("");
            map.removeLayer(X136);
        }
        if (uncheckLayer == 'METAR 19UTC VISIBILITY') {
            clickedMetarVisibilityLists = clickedMetarVisibilityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarVisibility_lists.innerHTML = clickedMetarVisibilityLists.join("");
            map.removeLayer(X137);
        }
        if (uncheckLayer == 'METAR 19UTC WIND SPEED AND DIRECTION') {
            clickedMetarWindSpeedAndDirectionLists = clickedMetarWindSpeedAndDirectionLists.filter(
                checkList => {
                    let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                    return clickedLayer != uncheckLayer
                });
            panelLayermetarWindSpeedAndDirection_lists.innerHTML = clickedMetarWindSpeedAndDirectionLists.join(
                "");
            map.removeLayer(X138);
        }

        // if (panelLayerMETAR19UTC_lists.innerHTML == '') {
        //     panelLayerMETAR19UTC_Title.innerHTML = '';
        //     METAR.innerHTML = '';
        // }

        // //GroupPanelLayer-collapsible-METAR19UTC
        // if (panelLayerMETAR19UTC_lists.innerHTML != '') {
        //     document.querySelectorAll('.collapsible')[0].classList.add('expanded');
        //     document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        // }

        if (uncheckLayer == 'METAR 20UTC TEMPERATURE') {
            clickedMetarTempLists = clickedMetarTempLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarTemp_lists.innerHTML = clickedMetarTempLists.join("");
            map.removeLayer(X139);
        }
        if (uncheckLayer == 'METAR 20UTC DEW POINT TEMPERATURE') {
            clickedMetarDewPointLists = clickedMetarDeoPointLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarDewPoint_lists.innerHTML = clickedMetarDewPointLists.join("");
            map.removeLayer(X140);
        }
        if (uncheckLayer == 'METAR 20UTC VISIBILITY') {
            clickedMetarVisibilityLists = clickedMetarVisibilityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarVisibility_lists.innerHTML = clickedMetarVisibilityLists.join("");
            map.removeLayer(X141);
        }
        if (uncheckLayer == 'METAR 20UTC WIND SPEED AND DIRECTION') {
            clickedMetarWindSpeedAndDirectionLists = clickedMetarWindSpeedAndDirectionLists.filter(
                checkList => {
                    let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                    return clickedLayer != uncheckLayer
                });
            panelLayermetarWindSpeedAndDirection_lists.innerHTML = clickedMetarWindSpeedAndDirectionLists.join(
                "");
            map.removeLayer(X142);
        }

        // if (panelLayerMETAR20UTC_lists.innerHTML == '') {
        //     panelLayerMETAR20UTC_Title.innerHTML = '';
        //     METAR.innerHTML = '';
        // }

        // //GroupPanelLayer-collapsible-METAR20UTC
        // if (panelLayerMETAR20UTC_lists.innerHTML != '') {
        //     document.querySelectorAll('.collapsible')[0].classList.add('expanded');
        //     document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        // }


        if (uncheckLayer == 'METAR 21UTC TEMPERATURE') {
            clickedMetarTempLists = clickedMetarTempLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarTemp_lists.innerHTML = clickedMetarTempLists.join("");
            map.removeLayer(X143);
        }
        if (uncheckLayer == 'METAR 21UTC DEW POINT TEMPERATURE') {
            clickedMetarDewPointLists = clickedMetarDeoPointLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarDewPoint_lists.innerHTML = clickedMetarDewPointLists.join("");
            map.removeLayer(X144);
        }
        if (uncheckLayer == 'METAR 21UTC VISIBILITY') {
            clickedMetarVisibilityLists = clickedMetarVisibilityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarVisibility_lists.innerHTML = clickedMetarVisibilityLists.join("");
            map.removeLayer(X145);
        }
        if (uncheckLayer == 'METAR 21UTC WIND SPEED AND DIRECTION') {
            clickedMetarWindSpeedAndDirectionLists = clickedMetarWindSpeedAndDirectionLists.filter(
                checkList => {
                    let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                    return clickedLayer != uncheckLayer
                });
            panelLayermetarWindSpeedAndDirection_lists.innerHTML = clickedMetarWindSpeedAndDirectionLists.join(
                "");
            map.removeLayer(X146);
        }

        // if (panelLayerMETAR21UTC_lists.innerHTML == '') {
        //     panelLayerMETAR21UTC_Title.innerHTML = '';
        //     METAR.innerHTML = '';
        // }

        // //GroupPanelLayer-collapsible-METAR21UTC
        // if (panelLayerMETAR21UTC_lists.innerHTML != '') {
        //     document.querySelectorAll('.collapsible')[0].classList.add('expanded');
        //     document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        // }


        if (uncheckLayer == 'METAR 22UTC TEMPERATURE') {
            clickedMetarTempLists = clickedMetarTempLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarTemp_lists.innerHTML = clickedMetarTempLists.join("");
            map.removeLayer(X147);
        }
        if (uncheckLayer == 'METAR 22UTC DEW POINT TEMPERATURE') {
            clickedMetarDewPointLists = clickedMetarDeoPointLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarDewPoint_lists.innerHTML = clickedMetarDewPointLists.join("");
            map.removeLayer(X148);
        }
        if (uncheckLayer == 'METAR 22UTC VISIBILITY') {
            clickedMetarVisibilityLists = clickedMetarVisibilityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarVisibility_lists.innerHTML = clickedMetarVisibilityLists.join("");
            map.removeLayer(X149);
        }
        if (uncheckLayer == 'METAR 22UTC WIND SPEED AND DIRECTION') {
            clickedMetarWindSpeedAndDirectionLists = clickedMetarWindSpeedAndDirectionLists.filter(
                checkList => {
                    let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                    return clickedLayer != uncheckLayer
                });
            panelLayermetarWindSpeedAndDirection_lists.innerHTML = clickedMetarWindSpeedAndDirectionLists.join(
                "");
            map.removeLayer(X150);
        }

        // if (panelLayerMETAR22UTC_lists.innerHTML == '') {
        //     panelLayerMETAR22UTC_Title.innerHTML = '';
        //     METAR.innerHTML = '';
        // }

        // //GroupPanelLayer-collapsible-METAR22UTC
        // if (panelLayerMETAR22UTC_lists.innerHTML != '') {
        //     document.querySelectorAll('.collapsible')[0].classList.add('expanded');
        //     document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        // }


        if (uncheckLayer == 'METAR 23UTC TEMPERATURE') {
            clickedMetarTempLists = clickedMetarTempLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarTemp_lists.innerHTML = clickedMetarTempLists.join("");
            map.removeLayer(X151);
        }
        if (uncheckLayer == 'METAR 23UTC DEW POINT TEMPERATURE') {
            clickedMetarDewPointLists = clickedMetarDeoPointLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarDewPoint_lists.innerHTML = clickedMetarDewPointLists.join("");
            map.removeLayer(X152);
        }
        if (uncheckLayer == 'METAR 23UTC VISIBILITY') {
            clickedMetarVisibilityLists = clickedMetarVisibilityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayermetarVisibility_lists.innerHTML = clickedMetarVisibilityLists.join("");
            map.removeLayer(X153);
        }
        if (uncheckLayer == 'METAR 23UTC WIND SPEED AND DIRECTION') {
            clickedMetarWindSpeedAndDirectionLists = clickedMetarWindSpeedAndDirectionLists.filter(
                checkList => {
                    let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                    return clickedLayer != uncheckLayer
                });
            panelLayermetarWindSpeedAndDirection_lists.innerHTML = clickedMetarWindSpeedAndDirectionLists.join(
                "");
            map.removeLayer(X154);
        }

        // if (panelLayerMETAR23UTC_lists.innerHTML == '') {
        //     panelLayerMETAR23UTC_Title.innerHTML = '';
        //     METAR.innerHTML = '';
        // }

        // //GroupPanelLayer-collapsible-METAR23UTC
        // if (panelLayerMETAR23UTC_lists.innerHTML != '') {
        //     document.querySelectorAll('.collapsible')[0].classList.add('expanded');
        //     document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        // }

        // SYNOP UNCHECK
        if (uncheckLayer == 'SYNOP 00UTC TEMPERATURE') {
            clickedSynopTempLists = clickedSynopTempLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopTemp_lists.innerHTML = clickedSynopTempLists.join("");

            map.removeLayer(HHHHHH);
        }
        if (uncheckLayer == 'SYNOP 00UTC MEAN SEA LEVEL PRESSURE') {
            clickedSynopMeanSeaLevelLists = clickedSynopMeanSeaLevelLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopMeanSeaLevel_lists.innerHTML = clickedSynopMeanSeaLevelLists.join("");
            map.removeLayer(ggg);
        }
        if (uncheckLayer == 'SYNOP 00UTC CLOUD COVER') {
            clickedSynopCloudCoverLists = clickedSynopCloudCoverLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopCloudCover_lists.innerHTML = clickedSynopCloudCoverLists.join("");
            map.removeLayer(X1);
        }
        if (uncheckLayer == 'SYNOP 00UTC GEOPOTENTIAL HEIGHT') {
            clickedSynopGeopotentialHeightLists = clickedSynopGeopotentialHeightLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopGeopotentialHeight_lists.innerHTML = clickedSynopGeopotentialHeightLists.join("");
            map.removeLayer(X2);
        }
        if (uncheckLayer == 'SYNOP 00UTC RELATIVE HUMIDITY') {
            clickedSynopRelativeHumidityLists = clickedSynopRelativeHumidityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopRelativeHumidity_lists.innerHTML = clickedSynopRelativeHumidityLists.join("");
            map.removeLayer(X3);
        }
        if (uncheckLayer == 'SYNOP 00UTC VISIBILITY') {
            clickedSynopVisibilityLists = clickedSynopVisibilityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopVisibility_lists.innerHTML = clickedSynopVisibilityLists.join("");
            map.removeLayer(X4);
        }
        if (uncheckLayer == 'SYNOP 00UTC WIND SPEED AND DIRECTION') {
            clickedSynopWindSpeedAndDirectionLists = clickedSynopWindSpeedAndDirectionLists.filter(
                checkList => {
                    let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                    return clickedLayer != uncheckLayer
                });
            panelLayersynopWindSpeedAndDirection_lists.innerHTML = clickedSynopWindSpeedAndDirectionLists.join(
                "");
            map.removeLayer(X5);
        }
        if (uncheckLayer == 'SYNOP 00UTC 3h RAINFALL') {
            clickedSynop3hRainfallLists = clickedSynop3hRainfallLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynop3hRainfall_lists.innerHTML = clickedSynop3hRainfallLists.join("");
            map.removeLayer(X6);
        }

        // if (panelLayerSYNOP00UTC_lists.innerHTML == '') {
        //     panelLayerSYNOP00UTC_Title.innerHTML = '';
        //     SYNOP.innerHTML = '';
        // }

        // if (panelLayerSYNOP00UTC_lists.innerHTML != '') {
        //     document.querySelectorAll('.collapsible')[0].classList.add('expanded');
        //     document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        // }


        if (uncheckLayer == 'SYNOP 03UTC TEMPERATURE') {
            clickedSynopTempLists = clickedSynopTempLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopTemp_lists.innerHTML = clickedSynopTempLists.join("");
            map.removeLayer(X7);
        }
        if (uncheckLayer == 'SYNOP 03UTC MEAN SEA LEVEL PRESSURE') {
            clickedSynopMeanSeaLevelLists = clickedSynopMeanSeaLevelLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopMeanSeaLevel_lists.innerHTML = clickedSynopMeanSeaLevelLists.join("");
            map.removeLayer(X8);
        }
        if (uncheckLayer == 'SYNOP 03UTC CLOUD COVER') {
            clickedSynopCloudCoverLists = clickedSynopCloudCoverLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopCloudCover_lists.innerHTML = clickedSynopCloudCoverLists.join("");
            map.removeLayer(X9);
        }
        if (uncheckLayer == 'SYNOP 03UTC GEOPOTENTIAL HEIGHT') {
            clickedSynopGeopotentialHeightLists = clickedSynopGeopotentialHeightLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopGeopotentialHeight_lists.innerHTML = clickedSynopGeopotentialHeightLists.join("");
            map.removeLayer(X10);
        }
        if (uncheckLayer == 'SYNOP 03UTC RELATIVE HUMIDITY') {
            clickedSynopRelativeHumidityLists = clickedSynopRelativeHumidityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopRelativeHumidity_lists.innerHTML = clickedSynopRelativeHumidityLists.join("");
            map.removeLayer(X11);
        }
        if (uncheckLayer == 'SYNOP 03UTC VISIBILITY') {
            clickedSynopVisibilityLists = clickedSynopVisibilityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopVisibility_lists.innerHTML = clickedSynopVisibilityLists.join("");
            map.removeLayer(X12);
        }
        if (uncheckLayer == 'SYNOP 03UTC WIND SPEED AND DIRECTION') {
            clickedSynopWindSpeedAndDirectionLists = clickedSynopWindSpeedAndDirectionLists.filter(
                checkList => {
                    let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                    return clickedLayer != uncheckLayer
                });
            panelLayersynopWindSpeedAndDirection_lists.innerHTML = clickedSynopWindSpeedAndDirectionLists.join(
                "");
            map.removeLayer(X3);
        }
        if (uncheckLayer == 'SYNOP 03UTC 3h RAINFALL') {
            clickedSynop3hRainfallLists = clickedSynop3hRainfallLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynop3hRainfall_lists.innerHTML = clickedSynop3hRainfallLists.join("");
            map.removeLayer(X14);
        }

        // if (panelLayerSYNOP03UTC_lists.innerHTML == '') {
        //     panelLayerSYNOP03UTC_Title.innerHTML = '';
        //     SYNOP.innerHTML = '';
        // }

        // if (panelLayerSYNOP03UTC_lists.innerHTML != '') {
        //     document.querySelectorAll('.collapsible')[0].classList.add('expanded');
        //     document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        // }

        if (uncheckLayer == 'SYNOP 06UTC TEMPERATURE') {
            clickedSynopTempLists = clickedSynopTempLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopTemp_lists.innerHTML = clickedSynopTempLists.join("");
            map.removeLayer(X15);
        }
        if (uncheckLayer == 'SYNOP 06UTC MEAN SEA LEVEL PRESSURE') {
            clickedSynopMeanSeaLevelLists = clickedSynopMeanSeaLevelLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopMeanSeaLevel_lists.innerHTML = clickedSynopMeanSeaLevelLists.join("");
            map.removeLayer(X16);
        }
        if (uncheckLayer == 'SYNOP 06UTC CLOUD COVER') {
            clickedSynopCloudCoverLists = clickedSynopCloudCoverLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopCloudCover_lists.innerHTML = clickedSynopCloudCoverLists.join("");
            map.removeLayer(X17);
        }
        if (uncheckLayer == 'SYNOP 06UTC GEOPOTENTIAL HEIGHT') {
            clickedSynopGeopotentialHeightLists = clickedSynopGeopotentialHeightLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopGeopotentialHeight_lists.innerHTML = clickedSynopGeopotentialHeightLists.join("");
            map.removeLayer(X18);
        }
        if (uncheckLayer == 'SYNOP 06UTC RELATIVE HUMIDITY') {
            clickedSynopRelativeHumidityLists = clickedSynopRelativeHumidityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopRelativeHumidity_lists.innerHTML = clickedSynopRelativeHumidityLists.join("");
            map.removeLayer(X19);
        }
        if (uncheckLayer == 'SYNOP 06UTC VISIBILITY') {
            clickedSynopVisibilityLists = clickedSynopVisibilityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopVisibility_lists.innerHTML = clickedSynopVisibilityLists.join("");
            map.removeLayer(X20);
        }
        if (uncheckLayer == 'SYNOP 06UTC WIND SPEED AND DIRECTION') {
            clickedSynopWindSpeedAndDirectionLists = clickedSynopWindSpeedAndDirectionLists.filter(
                checkList => {
                    let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                    return clickedLayer != uncheckLayer
                });
            panelLayersynopWindSpeedAndDirection_lists.innerHTML = clickedSynopWindSpeedAndDirectionLists.join(
                "");
            map.removeLayer(X21);
        }
        if (uncheckLayer == 'SYNOP 06UTC 3h RAINFALL') {
            clickedSynop3hRainfallLists = clickedSynop3hRainfallLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynop3hRainfall_lists.innerHTML = clickedSynop3hRainfallLists.join("");
            map.removeLayer(X22);
        }

        // if (panelLayerSYNOP06UTC_lists.innerHTML == '') {
        //     panelLayerSYNOP06UTC_Title.innerHTML = '';
        //     SYNOP.innerHTML = '';
        // }

        // if (panelLayerSYNOP06UTC_lists.innerHTML != '') {
        //     document.querySelectorAll('.collapsible')[0].classList.add('expanded');
        //     document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        // }

        if (uncheckLayer == 'SYNOP 09UTC TEMPERATURE') {
            clickedSynopTempLists = clickedSynopTempLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopTemp_lists.innerHTML = clickedSynopTempLists.join("");
            map.removeLayer(X23);
        }
        if (uncheckLayer == 'SYNOP 09UTC MEAN SEA LEVEL PRESSURE') {
            clickedSynopMeanSeaLevelLists = clickedSynopMeanSeaLevelLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopMeanSeaLevel_lists.innerHTML = clickedSynopMeanSeaLevelLists.join("");
            map.removeLayer(X24);
        }
        if (uncheckLayer == 'SYNOP 09UTC CLOUD COVER') {
            clickedSynopCloudCoverLists = clickedSynopCloudCoverLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopCloudCover_lists.innerHTML = clickedSynopCloudCoverLists.join("");
            map.removeLayer(X25);
        }
        if (uncheckLayer == 'SYNOP 09UTC GEOPOTENTIAL HEIGHT') {
            clickedSynopGeopotentialHeightLists = clickedSynopGeopotentialHeightLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopGeopotentialHeight_lists.innerHTML = clickedSynopGeopotentialHeightLists.join("");
            map.removeLayer(X26);
        }
        if (uncheckLayer == 'SYNOP 09UTC RELATIVE HUMIDITY') {
            clickedSynopRelativeHumidityLists = clickedSynopRelativeHumidityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopRelativeHumidity_lists.innerHTML = clickedSynopRelativeHumidityLists.join("");
            map.removeLayer(X27);
        }
        if (uncheckLayer == 'SYNOP 09UTC VISIBILITY') {
            clickedSynopVisibilityLists = clickedSynopVisibilityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopVisibility_lists.innerHTML = clickedSynopVisibilityLists.join("");
            map.removeLayer(X28);
        }
        if (uncheckLayer == 'SYNOP 09UTC WIND SPEED AND DIRECTION') {
            clickedSynopWindSpeedAndDirectionLists = clickedSynopWindSpeedAndDirectionLists.filter(
                checkList => {
                    let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                    return clickedLayer != uncheckLayer
                });
            panelLayersynopWindSpeedAndDirection_lists.innerHTML = clickedSynopWindSpeedAndDirectionLists.join(
                "");
            map.removeLayer(X29);
        }
        if (uncheckLayer == 'SYNOP 09UTC 3h RAINFALL') {
            clickedSynop3hRainfallLists = clickedSynop3hRainfallLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynop3hRainfall_lists.innerHTML = clickedSynop3hRainfallLists.join("");
            map.removeLayer(X30);
        }

        // if (panelLayerSYNOP09UTC_lists.innerHTML == '') {
        //     panelLayerSYNOP09UTC_Title.innerHTML = '';
        //     SYNOP.innerHTML = '';
        // }

        // if (panelLayerSYNOP09UTC_lists.innerHTML != '') {
        //     document.querySelectorAll('.collapsible')[0].classList.add('expanded');
        //     document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        // }


        if (uncheckLayer == 'SYNOP 12UTC TEMPERATURE') {
            clickedSynopTempLists = clickedSynopTempLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopTemp_lists.innerHTML = clickedSynopTempLists.join("");
            map.removeLayer(X31);
        }
        if (uncheckLayer == 'SYNOP 12UTC MEAN SEA LEVEL PRESSURE') {
            clickedSynopMeanSeaLevelLists = clickedSynopMeanSeaLevelLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopMeanSeaLevel_lists.innerHTML = clickedSynopMeanSeaLevelLists.join("");
            map.removeLayer(X32);
        }
        if (uncheckLayer == 'SYNOP 12UTC CLOUD COVER') {
            clickedSynopCloudCoverLists = clickedSynopCloudCoverLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopCloudCover_lists.innerHTML = clickedSynopCloudCoverLists.join("");
            map.removeLayer(X33);
        }
        if (uncheckLayer == 'SYNOP 12UTC GEOPOTENTIAL HEIGHT') {
            clickedSynopGeopotentialHeightLists = clickedSynopGeopotentialHeightLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopGeopotentialHeight_lists.innerHTML = clickedSynopGeopotentialHeightLists.join("");
            map.removeLayer(X34);
        }
        if (uncheckLayer == 'SYNOP 12UTC RELATIVE HUMIDITY') {
            clickedSynopRelativeHumidityLists = clickedSynopRelativeHumidityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopRelativeHumidity_lists.innerHTML = clickedSynopRelativeHumidityLists.join("");
            map.removeLayer(X35);
        }
        if (uncheckLayer == 'SYNOP 12UTC VISIBILITY') {
            clickedSynopVisibilityLists = clickedSynopVisibilityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopVisibility_lists.innerHTML = clickedSynopVisibilityLists.join("");
            map.removeLayer(X36);
        }
        if (uncheckLayer == 'SYNOP 12UTC WIND SPEED AND DIRECTION') {
            clickedSynopWindSpeedAndDirectionLists = clickedSynopWindSpeedAndDirectionLists.filter(
                checkList => {
                    let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                    return clickedLayer != uncheckLayer
                });
            panelLayersynopWindSpeedAndDirection_lists.innerHTML = clickedSynopWindSpeedAndDirectionLists.join(
                "");
            map.removeLayer(X37);
        }
        if (uncheckLayer == 'SYNOP 12UTC 3h RAINFALL') {
            clickedSynop3hRainfallLists = clickedSynop3hRainfallLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynop3hRainfall_lists.innerHTML = clickedSynop3hRainfallLists.join("");
            map.removeLayer(X38);
        }

        // if (panelLayerSYNOP12UTC_lists.innerHTML == '') {
        //     panelLayerSYNOP12UTC_Title.innerHTML = '';
        //     SYNOP.innerHTML = '';
        // }

        // if (panelLayerSYNOP12UTC_lists.innerHTML != '') {
        //     document.querySelectorAll('.collapsible')[0].classList.add('expanded');
        //     document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        // }


        if (uncheckLayer == 'SYNOP 15UTC TEMPERATURE') {
            clickedSynopTempLists = clickedSynopTempLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopTemp_lists.innerHTML = clickedSynopTempLists.join("");
            map.removeLayer(X39);
        }
        if (uncheckLayer == 'SYNOP 15UTC MEAN SEA LEVEL PRESSURE') {
            clickedSynopMeanSeaLevelLists = clickedSynopMeanSeaLevelLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopMeanSeaLevel_lists.innerHTML = clickedSynopMeanSeaLevelLists.join("");
            map.removeLayer(X40);
        }
        if (uncheckLayer == 'SYNOP 15UTC CLOUD COVER') {
            clickedSynopCloudCoverLists = clickedSynopCloudCoverLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopCloudCover_lists.innerHTML = clickedSynopCloudCoverLists.join("");
            map.removeLayer(X41);
        }
        if (uncheckLayer == 'SYNOP 15UTC GEOPOTENTIAL HEIGHT') {
            clickedSynopGeopotentialHeightLists = clickedSynopGeopotentialHeightLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopGeopotentialHeight_lists.innerHTML = clickedSynopGeopotentialHeightLists.join("");
            map.removeLayer(X42);
        }
        if (uncheckLayer == 'SYNOP 15UTC RELATIVE HUMIDITY') {
            clickedSynopRelativeHumidityLists = clickedSynopRelativeHumidityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopRelativeHumidity_lists.innerHTML = clickedSynopRelativeHumidityLists.join("");
            map.removeLayer(X43);
        }
        if (uncheckLayer == 'SYNOP 15UTC VISIBILITY') {
            clickedSynopVisibilityLists = clickedSynopVisibilityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopVisibility_lists.innerHTML = clickedSynopVisibilityLists.join("");
            map.removeLayer(X44);
        }
        if (uncheckLayer == 'SYNOP 15UTC WIND SPEED AND DIRECTION') {
            clickedSynopWindSpeedAndDirectionLists = clickedSynopWindSpeedAndDirectionLists.filter(
                checkList => {
                    let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                    return clickedLayer != uncheckLayer
                });
            panelLayersynopWindSpeedAndDirection_lists.innerHTML = clickedSynopWindSpeedAndDirectionLists.join(
                "");
            map.removeLayer(X45);
        }
        if (uncheckLayer == 'SYNOP 15UTC 3h RAINFALL') {
            clickedSynop3hRainfallLists = clickedSynop3hRainfallLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynop3hRainfall_lists.innerHTML = clickedSynop3hRainfallLists.join("");
            map.removeLayer(X46);
        }

        // if (panelLayerSYNOP15UTC_lists.innerHTML == '') {
        //     panelLayerSYNOP15UTC_Title.innerHTML = '';
        //     SYNOP.innerHTML = '';
        // }

        // if (panelLayerSYNOP15UTC_lists.innerHTML != '') {
        //     document.querySelectorAll('.collapsible')[0].classList.add('expanded');
        //     document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        // }


        if (uncheckLayer == 'SYNOP 18UTC TEMPERATURE') {
            clickedSynopTempLists = clickedSynopTempLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopTemp_lists.innerHTML = clickedSynopTempLists.join("");
            map.removeLayer(X47);
        }
        if (uncheckLayer == 'SYNOP 18UTC MEAN SEA LEVEL PRESSURE') {
            clickedSynopMeanSeaLevelLists = clickedSynopMeanSeaLevelLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopMeanSeaLevel_lists.innerHTML = clickedSynopMeanSeaLevelLists.join("");
            map.removeLayer(X48);
        }
        if (uncheckLayer == 'SYNOP 18UTC CLOUD COVER') {
            clickedSynopCloudCoverLists = clickedSynopCloudCoverLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopCloudCover_lists.innerHTML = clickedSynopCloudCoverLists.join("");
            map.removeLayer(X49);
        }
        if (uncheckLayer == 'SYNOP 18UTC GEOPOTENTIAL HEIGHT') {
            clickedSynopGeopotentialHeightLists = clickedSynopGeopotentialHeightLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopGeopotentialHeight_lists.innerHTML = clickedSynopGeopotentialHeightLists.join("");
            map.removeLayer(X50);
        }
        if (uncheckLayer == 'SYNOP 18UTC RELATIVE HUMIDITY') {
            clickedSynopRelativeHumidityLists = clickedSynopRelativeHumidityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopRelativeHumidity_lists.innerHTML = clickedSynopRelativeHumidityLists.join("");
            map.removeLayer(X51);
        }
        if (uncheckLayer == 'SYNOP 18UTC VISIBILITY') {
            clickedSynopVisibilityLists = clickedSynopVisibilityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopVisibility_lists.innerHTML = clickedSynopVisibilityLists.join("");
            map.removeLayer(X52);
        }
        if (uncheckLayer == 'SYNOP 18UTC WIND SPEED AND DIRECTION') {
            clickedSynopWindSpeedAndDirectionLists = clickedSynopWindSpeedAndDirectionLists.filter(
                checkList => {
                    let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                    return clickedLayer != uncheckLayer
                });
            panelLayersynopWindSpeedAndDirection_lists.innerHTML = clickedSynopWindSpeedAndDirectionLists.join(
                "");
            map.removeLayer(X53);
        }
        if (uncheckLayer == 'SYNOP 18UTC 3h RAINFALL') {
            clickedSynop3hRainfallLists = clickedSynop3hRainfallLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynop3hRainfall_lists.innerHTML = clickedSynop3hRainfallLists.join("");
            map.removeLayer(X54);
        }

        // if (panelLayerSYNOP18UTC_lists.innerHTML == '') {
        //     panelLayerSYNOP18UTC_Title.innerHTML = '';
        //     SYNOP.innerHTML = '';
        // }

        // if (panelLayerSYNOP18UTC_lists.innerHTML != '') {
        //     document.querySelectorAll('.collapsible')[0].classList.add('expanded');
        //     document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        // }


        if (uncheckLayer == 'SYNOP 21UTC TEMPERATURE') {
            clickedSynopTempLists = clickedSynopTempLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopTemp_lists.innerHTML = clickedSynopTempLists.join("");
            map.removeLayer(X55);
        }
        if (uncheckLayer == 'SYNOP 21UTC MEAN SEA LEVEL PRESSURE') {
            clickedSynopMeanSeaLevelLists = clickedSynopMeanSeaLevelLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopMeanSeaLevel_lists.innerHTML = clickedSynopMeanSeaLevelLists.join("");
            map.removeLayer(X56);
        }
        if (uncheckLayer == 'SYNOP 21UTC CLOUD COVER') {
            clickedSynopCloudCoverLists = clickedSynopCloudCoverLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopCloudCover_lists.innerHTML = clickedSynopCloudCoverLists.join("");
            map.removeLayer(X57);
        }
        if (uncheckLayer == 'SYNOP 21UTC GEOPOTENTIAL HEIGHT') {
            clickedSynopGeopotentialHeightLists = clickedSynopGeopotentialHeightLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopGeopotentialHeight_lists.innerHTML = clickedSynopGeopotentialHeightLists.join("");
            map.removeLayer(X58);
        }
        if (uncheckLayer == 'SYNOP 21UTC RELATIVE HUMIDITY') {
            clickedSynopRelativeHumidityLists = clickedSynopRelativeHumidityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopRelativeHumidity_lists.innerHTML = clickedSynopRelativeHumidityLists.join("");
            map.removeLayer(X59);
        }
        if (uncheckLayer == 'SYNOP 21UTC VISIBILITY') {
            clickedSynopVisibilityLists = clickedSynopVisibilityLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynopVisibility_lists.innerHTML = clickedSynopVisibilityLists.join("");
            map.removeLayer(X60);
        }
        if (uncheckLayer == 'SYNOP 21UTC WIND SPEED AND DIRECTION') {
            clickedSynopWindSpeedAndDirectionLists = clickedSynopWindSpeedAndDirectionLists.filter(
                checkList => {
                    let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                    return clickedLayer != uncheckLayer
                });
            panelLayersynopWindSpeedAndDirection_lists.innerHTML = clickedSynopWindSpeedAndDirectionLists.join(
                "");
            map.removeLayer(X61);
        }
        if (uncheckLayer == 'SYNOP 21UTC 3h RAINFALL') {
            clickedSynop3hRainfallLists = clickedSynop3hRainfallLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayersynop3hRainfall_lists.innerHTML = clickedSynop3hRainfallLists.join("");
            map.removeLayer(X62);
        }

        // if (panelLayerSYNOP21UTC_lists.innerHTML == '') {
        //     panelLayerSYNOP21UTC_Title.innerHTML = '';
        //     SYNOP.innerHTML = '';
        // }

        // if (panelLayerSYNOP21UTC_lists.innerHTML != '') {
        //     document.querySelectorAll('.collapsible')[0].classList.add('expanded');
        //     document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        // }

        // RADAR UNCHECk
        if (uncheckLayer == 'Radar Products Radar Reflectivity') {
            clickedRADARPRODUCTSLists = clickedRADARPRODUCTSLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRADARPRODUCTS_lists.innerHTML = clickedRADARPRODUCTSLists.join("");
            map.removeLayer(X155);
        }
        if (uncheckLayer == 'Radar Products Radar Animation') {
            clickedRADARPRODUCTSLists = clickedRADARPRODUCTSLists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerRADARPRODUCTS_lists.innerHTML = clickedRADARPRODUCTSLists.join("");
            map.removeLayer(X156);
        }

        if (panelLayerRADARPRODUCTS_lists.innerHTML == '') {
            panelLayerRADARPRODUCTS_Title.innerHTML = '';
            RADARPRODUCTS.innerHTML = '';
        }

        if (panelLayerRADARPRODUCTS_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        }

        // Satellite Observation UNCHECk
        if (uncheckLayer == 'Satellite Observation TIR1') {
            clickedSATELLITELists = clickedSATELLITELists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSATELLITE_lists.innerHTML = clickedSATELLITELists.join("");
            map.removeLayer(X157);
        }
        if (uncheckLayer == 'Satellite Observation VIS') {
            clickedSATELLITELists = clickedSATELLITELists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSATELLITE_lists.innerHTML = clickedSATELLITELists.join("");
            map.removeLayer(X158);
        }
        if (uncheckLayer == 'Satellite Observation CTBT') {
            clickedSATELLITELists = clickedSATELLITELists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSATELLITE_lists.innerHTML = clickedSATELLITELists.join("");
            map.removeLayer(X159);
        }
        if (uncheckLayer == 'Satellite Observation LOW LEVEL CONVERGENCE') {
            clickedSATELLITELists = clickedSATELLITELists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSATELLITE_lists.innerHTML = clickedSATELLITELists.join("");
            map.removeLayer(X160);
        }
        if (uncheckLayer == 'Satellite Observation UPPER LEVEL DIVEGENCE') {
            clickedSATELLITELists = clickedSATELLITELists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSATELLITE_lists.innerHTML = clickedSATELLITELists.join("");
            map.removeLayer(X161);
        }
        if (uncheckLayer == 'Satellite Observation MID LEVEL SHEAR') {
            clickedSATELLITELists = clickedSATELLITELists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSATELLITE_lists.innerHTML = clickedSATELLITELists.join("");
            map.removeLayer(X162);
        }
        if (uncheckLayer == 'Satellite Observation VORTICITY AT 200hPa') {
            clickedSATELLITELists = clickedSATELLITELists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSATELLITE_lists.innerHTML = clickedSATELLITELists.join("");
            map.removeLayer(X163);
        }
        if (uncheckLayer == 'Satellite Observation VORTICITY AT 500hPa') {
            clickedSATELLITELists = clickedSATELLITELists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSATELLITE_lists.innerHTML = clickedSATELLITELists.join("");
            map.removeLayer(X164);
        }
        if (uncheckLayer == 'Satellite Observation VORTICITY AT 700hPa') {
            clickedSATELLITELists = clickedSATELLITELists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSATELLITE_lists.innerHTML = clickedSATELLITELists.join("");
            map.removeLayer(X165);
        }
        if (uncheckLayer == 'Satellite ObservationVORTICITY AT 850hPa') {
            clickedSATELLITELists = clickedSATELLITELists.filter(checkList => {
                let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
                return clickedLayer != uncheckLayer
            });
            panelLayerSATELLITE_lists.innerHTML = clickedSATELLITELists.join("");
            map.removeLayer(X166);
        }

        if (panelLayerRADARPRODUCTS_lists.innerHTML == '') {
            panelLayerRADARPRODUCTS_Title.innerHTML = '';
            SATELLITE.innerHTML = '';
        }

        if (panelLayerRADARPRODUCTS_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayerLIGHTINING_lists.innerHTML == '') {
            panelLayerLIGHTINING_Title.innerHTML = '';
            LIGHTINING.innerHTML = '';
        }

        if (panelLayerLIGHTINING_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayerSOUNDING00UTCWIND_lists.innerHTML == '') {
            panelLayerSOUNDING00UTCWIND_Title.innerHTML = '';
            SOUNDING.innerHTML = '';
        }

        if (panelLayerSOUNDING00UTCWIND_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayerSOUNDING12UTCWIND_lists.innerHTML == '') {
            panelLayerSOUNDING12UTCWIND_Title.innerHTML = '';
            SOUNDING.innerHTML = '';
        }

        if (panelLayerSOUNDING12UTCWIND_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayerSOUNDING00UTCTEMP_lists.innerHTML == '') {
            panelLayerSOUNDING00UTCTEMP_Title.innerHTML = '';
            SOUNDING.innerHTML = '';
        }

        if (panelLayerSOUNDING00UTCTEMP_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayerSOUNDING12UTCTEMP_lists.innerHTML == '') {
            panelLayerSOUNDING12UTCTEMP_Title.innerHTML = '';
            SOUNDING.innerHTML = '';
        }

        if (panelLayerSOUNDING12UTCTEMP_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayerSOUNDING00UTCDEWPOINT_lists.innerHTML == '') {
            panelLayerSOUNDING00UTCDEWPOINT_Title.innerHTML = '';
            SOUNDING.innerHTML = '';
        }

        if (panelLayerSOUNDING00UTCDEWPOINT_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayerSOUNDING12UTCDEWPOINT_lists.innerHTML == '') {
            panelLayerSOUNDING12UTCDEWPOINT_Title.innerHTML = '';
            SOUNDING.innerHTML = '';
        }

        if (panelLayerSOUNDING12UTCDEWPOINT_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayerSHIPANDBUOY_lists.innerHTML == '') {
            panelLayerSHIPANDBUOY_Title.innerHTML = '';
            SHIPANDBUOY.innerHTML = '';
        }

        if (panelLayerSHIPANDBUOY_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayerWRFReflectivity_lists.innerHTML == '') {
            panelLayerWRFReflectivity_Title.innerHTML = '';
            MESOLSCALE.innerHTML = '';
        }

        if (panelLayerWRFReflectivity_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayerWRFlightningProduct_lists.innerHTML == '') {
            panelLayerWRFlightningProduct_Title.innerHTML = '';
            MESOLSCALE.innerHTML = '';
        }

        if (panelLayerWRFlightningProduct_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayerWRFAccumlatedRainfall_lists.innerHTML == '') {
            panelLayerWRFAccumlatedRainfall_Title.innerHTML = '';
            MESOLSCALE.innerHTML = '';
        }

        if (panelLayerWRFAccumlatedRainfall_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayerlightningPotentialindex_lists.innerHTML == '') {
            panelLayerlightningPotentialindex_Title.innerHTML = '';
            MESOLSCALE.innerHTML = '';
        }

        if (panelLayerlightningPotentialindex_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayerNCUMRlightningProduct_lists.innerHTML == '') {
            panelLayerNCUMRlightningProduct_Title.innerHTML = '';
            MESOLSCALE.innerHTML = '';
        }

        if (panelLayerNCUMRlightningProduct_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayerNCUMRWindGust_lists.innerHTML == '') {
            panelLayerNCUMRWindGust_Title.innerHTML = '';
            MESOLSCALE.innerHTML = '';
        }

        if (panelLayerNCUMRWindGust_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayerNCUMRRainfall_lists.innerHTML == '') {
            panelLayerNCUMRRainfall_Title.innerHTML = '';
            MESOLSCALE.innerHTML = '';
        }

        if (panelLayerNCUMRRainfall_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayerHRRR_SPHourlyDBZ_lists.innerHTML == '') {
            panelLayerHRRR_SPHourlyDBZ_Title.innerHTML = '';
            MESOLSCALE.innerHTML = '';
        }

        if (panelLayerHRRR_SPHourlyDBZ_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayerHRRR_NEHourlyDBZ_lists.innerHTML == '') {
            panelLayerHRRR_NEHourlyDBZ_Title.innerHTML = '';
            MESOLSCALE.innerHTML = '';
        }

        if (panelLayerHRRR_NEHourlyDBZ_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayerHRRR_NWHourlyDBZ_lists.innerHTML == '') {
            panelLayerHRRR_NWHourlyDBZ_Title.innerHTML = '';
            MESOLSCALE.innerHTML = '';
        }

        if (panelLayerHRRR_NWHourlyDBZ_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayerEWRFMaxZ_lists.innerHTML == '') {
            panelLayerEWRFMaxZ_Title.innerHTML = '';
            MESOLSCALE.innerHTML = '';
        }

        if (panelLayerEWRFMaxZ_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayerEWRFLightning_lists.innerHTML == '') {
            panelLayerEWRFLightning_Title.innerHTML = '';
            MESOLSCALE.innerHTML = '';
        }

        if (panelLayerEWRFLightning_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayerRainfallIntensityDay1_lists.innerHTML == '') {
            panelLayerRainfallIntensityDay1_Title.innerHTML = '';
            MEDIUM.innerHTML = '';
        }

        if (panelLayerRainfallIntensityDay1_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayerRainfallIntensityDay2_lists.innerHTML == '') {
            panelLayerRainfallIntensityDay2_Title.innerHTML = '';
            MEDIUM.innerHTML = '';
        }

        if (panelLayerRainfallIntensityDay2_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayerRainfallIntensityDay3_lists.innerHTML == '') {
            panelLayerRainfallIntensityDay3_Title.innerHTML = '';
            MEDIUM.innerHTML = '';
        }

        if (panelLayerRainfallIntensityDay3_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayerRainfallIntensityDay4_lists.innerHTML == '') {
            panelLayerRainfallIntensityDay4_Title.innerHTML = '';
            MEDIUM.innerHTML = '';
        }

        if (panelLayerRainfallIntensityDay4_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayerRainfallIntensityDay5_lists.innerHTML == '') {
            panelLayerRainfallIntensityDay5_Title.innerHTML = '';
            MEDIUM.innerHTML = '';
        }

        if (panelLayerRainfallIntensityDay5_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayerMSLPDay1_lists.innerHTML == '') {
            panelLayerMSLPDay1_Title.innerHTML = '';
            MEDIUM.innerHTML = '';
        }

        if (panelLayerMSLPDay1_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayerMSLPDay2_lists.innerHTML == '') {
            panelLayerMSLPDay2_Title.innerHTML = '';
            MEDIUM.innerHTML = '';
        }

        if (panelLayerMSLPDay2_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayerMSLPDay3_lists.innerHTML == '') {
            panelLayerMSLPDay3_Title.innerHTML = '';
            MEDIUM.innerHTML = '';
        }

        if (panelLayerMSLPDay3_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayerMSLPDay4_lists.innerHTML == '') {
            panelLayerMSLPDay4_Title.innerHTML = '';
            MEDIUM.innerHTML = '';
        }

        if (panelLayerMSLPDay4_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayerMSLPDay5_lists.innerHTML == '') {
            panelLayerMSLPDay5_Title.innerHTML = '';
            MEDIUM.innerHTML = '';
        }

        if (panelLayerMSLPDay5_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayer10mWINDDay1_lists.innerHTML == '') {
            panelLayer10mWINDDay1_Title.innerHTML = '';
            MEDIUM.innerHTML = '';
        }

        if (panelLayer10mWINDDay1_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayer10mWINDDay2_lists.innerHTML == '') {
            panelLayer10mWINDDay2_Title.innerHTML = '';
            MEDIUM.innerHTML = '';
        }

        if (panelLayer10mWINDDay2_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayer10mWINDDay3_lists.innerHTML == '') {
            panelLayer10mWINDDay3_Title.innerHTML = '';
            MEDIUM.innerHTML = '';
        }

        if (panelLayer10mWINDDay3_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayer10mWINDDay4_lists.innerHTML == '') {
            panelLayer10mWINDDay4_Title.innerHTML = '';
            MEDIUM.innerHTML = '';
        }

        if (panelLayer10mWINDDay4_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
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

        if (panelLayer10mWINDDay5_lists.innerHTML == '') {
            panelLayer10mWINDDay5_Title.innerHTML = '';
            MEDIUM.innerHTML = '';
        }

        if (panelLayer10mWINDDay5_lists.innerHTML != '') {
            document.querySelectorAll('.collapsible')[0].classList.add('expanded');
            document.querySelectorAll('.leaflet-panel-layers-icon')[0].innerHTML = '-';
        }
    }
});
//

function metarTempImageAndLegend(layer_group_name, layer_name) {
    METAR.innerHTML = "METAR"
    panelLayermetarTemp_lists.style.display = 'flex';

    panelLayermetarTemp_Title.innerHTML = layer_name
    clickedMetarTempLists.push(
        `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
			<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_group_name}
		</span>`
    );

    panelLayermetarTemp_lists.innerHTML = clickedMetarTempLists.join("");

    metarTempLegendImage.innerHTML = `<span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
		<span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
		<span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
		<span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
		<span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
		<span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
	</span>`
}

function metarDewPointImageAndLegend(layer_group_name, layer_name) {
    METAR.innerHTML = "METAR"
    panelLayermetarDewPoint_lists.style.display = 'flex';

    panelLayermetarDewPoint_Title.innerHTML = layer_name
    clickedMetarDewPointLists.push(
        `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
			<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_group_name}
		</span>`
    );

    panelLayermetarDewPoint_lists.innerHTML = clickedMetarDewPointLists.join("");

    metarDewPointLegendImage.innerHTML = `<span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
		<span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
		<span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
		<span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
		<span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
		<span style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
	</span>`
}

function metarVisibilityImageAndLegend(layer_group_name, layer_name) {
    METAR.innerHTML = "METAR"
    panelLayermetarVisibility_lists.style.display = 'flex';

    panelLayermetarVisibility_Title.innerHTML = layer_name
    clickedMetarVisibilityLists.push(
        `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
			<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_group_name}
		</span>`
    );

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

function metarWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name) {
    METAR.innerHTML = "METAR"
    panelLayermetarWindSpeedAndDirection_lists.style.display = 'flex';

    panelLayermetarWindSpeedAndDirection_Title.innerHTML = layer_name
    clickedMetarWindSpeedAndDirectionLists.push(
        `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
			<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_group_name}
		</span>`
    );

    panelLayermetarWindSpeedAndDirection_lists.innerHTML = clickedMetarWindSpeedAndDirectionLists.join("");

    metarWindSpeedAndDirectionLegendImage.innerHTML = `<svg width="60" height="50" style="transform: rotate(90deg);">
		<g>
			<path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
			<path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
			<path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
		</g>
	</svg>`
}


function synopTempImageAndLegend(layer_group_name, layer_name) {
    SYNOP.innerHTML = "SYNOP"
    SYNOP_Row.style.display = 'block';
    SYNOP_Row.style.display = 'block';
    panelLayersynopTemp_lists.style.display = 'flex';

    panelLayersynopTemp_Title.innerHTML = layer_name;
    clickedSynopTempLists.push(
        `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
			<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_group_name}
		</span>`
    );

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

function synopMeanSeaLevelImageAndLegend(layer_group_name, layer_name) {
    SYNOP.innerHTML = "SYNOP"
    SYNOP_Row.style.display = 'block';
    panelLayersynopMeanSeaLevel_lists.style.display = 'flex';

    panelLayersynopMeanSeaLevel_Title.innerHTML = layer_name;
    clickedSynopMeanSeaLevelLists.push(
        `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
			<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_group_name}
		</span>`
    );

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

function synopCloudCoverImageAndLegend(layer_group_name, layer_name) {
    SYNOP.innerHTML = "SYNOP"
    SYNOP_Row.style.display = 'block';
    panelLayersynopCloudCover_lists.style.display = 'flex';

    panelLayersynopCloudCover_Title.innerHTML = layer_name;
    clickedSynopCloudCoverLists.push(
        `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
			<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_group_name}
		</span>`
    );

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

function synopGeopotentialHeightImageAndLegend(layer_group_name, layer_name) {
    SYNOP.innerHTML = "SYNOP"
    SYNOP_Row.style.display = 'block';
    panelLayersynopGeopotentialHeight_lists.style.display = 'flex';

    panelLayersynopGeopotentialHeight_Title.innerHTML = layer_name;
    clickedSynopGeopotentialHeightLists.push(
        `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
			<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_group_name}
		</span>`
    );

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

function synopRelativeHumidityImageAndLegend(layer_group_name, layer_name) {
    SYNOP.innerHTML = "SYNOP"
    SYNOP_Row.style.display = 'block';
    panelLayersynopRelativeHumidity_lists.style.display = 'flex';

    panelLayersynopRelativeHumidity_Title.innerHTML = layer_name;
    clickedSynopRelativeHumidityLists.push(
        `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
			<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_group_name}
		</span>`
    );

    panelLayersynopRelativeHumidity_lists.innerHTML = clickedSynopRelativeHumidityLists.join("");

    synopRelativeHumidityLegendImage.innerHTML = `<span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
  <span style="align-items: center; width:35px; height:18px; border-radius: 15%; background-color: #29ff2a; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 0;">10-15</span>
    <span style="align-items: center; width:35px; height:18px; border-radius: 15%; background-color: #fcff32; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 0;">25-50</span>
    <span style="align-items: center; width:35px; height:18px; border-radius: 15%; background-color: #fbaf33; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 0;">50-70</span>
    <span style="align-items: center; width:35px; height:18px; border-radius: 15%; background-color: #fa6529; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 0;">70-85</span>
    <span style="align-items: center; width:35px; height:18px; border-radius: 15%; background-color: #f93c35; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 0;">>85</span>
  </span>`
}

function synopVisibilityImageAndLegend(layer_group_name, layer_name) {
    SYNOP.innerHTML = "SYNOP"
    SYNOP_Row.style.display = 'block';
    panelLayersynopVisibility_lists.style.display = 'flex';

    panelLayersynopVisibility_Title.innerHTML = layer_name;
    clickedSynopVisibilityLists.push(
        `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
			<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_group_name}
		</span>`
    );

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

function synopWindSpeedAndDirectionImageAndLegend(layer_group_name, layer_name) {
    SYNOP.innerHTML = "SYNOP"
    SYNOP_Row.style.display = 'block';
    panelLayersynopWindSpeedAndDirection_lists.style.display = 'flex';

    panelLayersynopWindSpeedAndDirection_Title.innerHTML = layer_name;
    clickedSynopWindSpeedAndDirectionLists.push(
        `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
			<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_group_name}
		</span>`
    );

    panelLayersynopWindSpeedAndDirection_lists.innerHTML = clickedSynopWindSpeedAndDirectionLists.join("");

    synopWindSpeedAndDirectionLegendImage.innerHTML = `<svg width="60" height="50" style="transform: rotate(90deg);">
                <g>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 39.5,45 H 24.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 L 19.5,37.5"></path>
                    <path stroke="#000000" stroke-width="3" stroke-linecap="butt" d="M 24.5,45 H 19.5"></path>
                </g>
                </svg>`
}

function synop3hRainfallImageAndLegend(layer_group_name, layer_name) {
    SYNOP.innerHTML = "SYNOP"
    SYNOP_Row.style.display = 'block';
    panelLayersynop3hRainfall_lists.style.display = 'flex';

    panelLayersynop3hRainfall_Title.innerHTML = layer_name;
    clickedSynop3hRainfallLists.push(
        `<span style="flex-direction: column; align-items: center; margin-right: 20px; margin-bottom: 10px;">
			<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_group_name}
		</span>`
    );

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