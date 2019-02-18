/* BASIC FUNCTIONS */
// Javascript System Error Reporting
var printError = function (logs) {
    console.error(logs);
};

// Javascript System Warning Reporting
var printWarning = function (logs) {
    console.warn(logs);
};

// Javascript System Event Reporting
var printEvent = function (logs) {
    console.log(logs);
};

// Application Error Reporting
var echoError = function (logs) {
    console.log("%cApp Error: " + logs, 
                "background-color: #ffffff; color: #ff0000; font-weight: bold;");
};

// Application Warning Reporting 
var echoWarn = function (logs) {
    console.log("%cApp Warning: " + logs, 
                "background-color: #ffffff; color: #baaa00; font-weight: bold;");
}

// Application Information Reporting
var echoInfo = function (logs) {
    console.log("%cApp Info: " + logs, 
                "background-color: #ffffff; color: #000000; font-weight: bold;");
}

// Custom Application Reporting 
var echoRep = function (logs, style) {
    console.log("%cResponse: " + logs, 
                style);
}

// Application Error Handlers 
var errorReport = function (data) {
    var message = "Error(s): " + "\n";
    var data = data.responseJSON;

    for (datum in data) {
        message += data[datum] + "\n";
    }

    return (message);
}