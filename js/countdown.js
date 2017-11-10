$(function(){
    "use strict";

    var $countdown = $('#countdown');
    var $days      = $countdown.find('.days');
    var $hours     = $countdown.find('.hours');
    var $minutes   = $countdown.find('.minutes');
    var $seconds   = $countdown.find('.seconds');
    var target     = new Date('May 19, 2017 18:00:00').getTime();
    var floor      = function(x, y){
        return Math.floor(x / y);
    };
    var clockDigit = function(str, len){
        return str.padLeft(len, '0');
    };

    var tick = function(){
        "use strict";
        var now  = new Date().getTime();
        var time = Math.round((target - now) / 1000);
        $days.text(   clockDigit(floor(time, 24 * 60 * 60), 2)); // calculate days from timestamp
        $hours.text(  clockDigit(floor(time, 60 * 60) % 24, 2)); // hours
        $minutes.text(clockDigit(floor(time, 60) % 60, 2));      // minutes
        $seconds.text(clockDigit(floor(time, 1) % 60, 2));       // seconds
        $countdown.show();
    };
    setInterval(tick, 1000);
    tick();
});
