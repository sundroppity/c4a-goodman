document.createElement('section');

// the difference timestamp (UNIX) calculated from event timestamp minus current timestamp
var timestamp = 1463176800 - Math.round(new Date().getTime() / 1000);
function component(x, v) {
  return Math.floor(x / v);
}

var $coundown = [$('.countdown .left'), $('.countdown .right')];

setInterval(function() {
  timestamp--;
  var days    = component(timestamp, 24 * 60 * 60),  // calculate days from timestamp
      hours   = component(timestamp,      60 * 60) % 24, // hours
      minutes = component(timestamp,           60) % 60, // minutes
      seconds = component(timestamp,            1) % 60, // seconds
  width = $(window).width(),
  left='', right='';

  if(width >= 1200) {
    left = days + ' days ' + hours + ' hours';
    right = minutes + ' minutes ' + seconds + ' seconds ';
  } else if(width >= 992) {
    left = days + ' days ' + hours + ' hours';
    right = minutes + ' minutes ';
  } else if(width >= 768) {
    left = days + ' days ';
    right = hours + ' hours';
  } else if(width >= 670) {
    left = days + ' days ';
    right = hours + ' hours';
  } else {
    left = days + ' days ';
    right = '';
  }

  $coundown[0].text(left);
  $coundown[1].text(right);
}, 1000);
