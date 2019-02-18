/**
 * securitystop.js
 * Security stopper of JS console
 */

var showStopMessage = function () {
    console.log("%cSTOP!", "background-color: #ffffff; color: #ff0000; font-weight: bold; font-size: 38pt;");
    console.log("%cPlease close this window. " + 
                "If someone told you to paste a text here, please don't continue. " + 
                "You might be a victim of identity hacking!", 
                "background-color: #ffffff; color: #ff0000; font-weight: bold; font-size: 16pt;");
};

showStopMessage();
