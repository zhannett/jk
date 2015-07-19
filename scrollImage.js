// Based on findPos*, by ppk (http://www.quirksmode.org/js/findpos.html)
function findPosX(obj) {
  var curLeft = 0;
  if (obj.offsetParent) {
    do {
      curLeft += obj.offsetLeft;
    } while (obj = obj.offsetParent);
  }
  else if (obj.x) {
    curLeft += obj.x;
  }
  return curLeft;
}

function findPosY(obj) {
  var curTop = 0;
  if (obj.offsetParent) {
    do {
      curTop += obj.offsetTop;
    } while (obj = obj.offsetParent);
  }
  else if (obj.y) {
    curTop += obj.y;
  }
  return curTop;
}

// cross-browser event handling for IE5+, NS6+ and Mozilla/Gecko
// By Scott Andrew
function addEvent(obj, evType, fn, useCapture) {
  if (obj.addEventListener) {
    obj.addEventListener(evType, fn, useCapture);
    return true;
  } else if (obj.attachEvent) {
    var r = obj.attachEvent('on' + evType, fn);
    return r;
  } else {
    obj['on' + evType] = fn;
  }
}

var isIE = !window.opera && navigator.userAgent.indexOf('MSIE') != -1;

addEvent(window, 'load', scrollInit, false);

function scrollInit() {
  if (!document.getElementsByTagName)
    return;
  var allLinks = document.getElementsByTagName('a');
  for (var i = 0; i < allLinks.length; i++) {
    var link = allLinks[i];
    if ((' ' + link.className + ' ').indexOf(' scrollimage ') != -1) {
      addEvent(link, 'mousemove', moveListener, false);
    }
  }
}

function attVal(element, attName) {
  return parseInt(element.getAttribute(attName));
}

function moveListener(ev) {
  var e = window.event ? window.event : ev;
  var t = e.target ? e.target : e.srcElement;

  var mX, mY;
  if (e.pageX && e.pageY) {
    mX = e.pageX;
    mY = e.pageY;
  } else if (e.clientX && e.clientY) {
    mX = e.clientX;
    mY = e.clientY;
    if (isIE) {
      mX += document.body.scrollLeft;
      mY += document.body.scrollTop;
    }
  }

  var xPos = mX - findPosX(t);
  var yPos = mY - findPosY(t);

  if (t.nodeName.toLowerCase() == 'img')
    t = t.parentNode;
  if (t.nodeName.toLowerCase() == 'a') {
    // scaleFactorY = (width(big) - width(small)) / width(small)
    var scaleFactorY =
        (attVal(t, 'mainy') - attVal(t, 'thumby')) / attVal(t, 'thumby');
    var scaleFactorX =
        (attVal(t, 'mainx') - attVal(t, 'thumbx')) / attVal(t, 'thumbx');

    t.style.backgroundPosition =
        (-parseInt(xPos * scaleFactorX)) + 'px ' +
        (-parseInt(yPos * scaleFactorY)) + 'px';
  }
}

