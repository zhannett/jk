function scrollX() {
    var de = document.documentElement;
    return self.pageXOffset || ( de && de.scrollLeft ) || document.body.scrollLeft;
}    

function scrollY() {   
    var de = document.documentElement;    
    return self.pageYOffset || ( de && de.scrollTop ) || document.body.scrollTop;
}

function windowHeight() {    
    var de = document.documentElement;    
    return self.innerHeight || ( de && de.clientHeight ) || document.body.clientHeight;
}

function windowWidth() {   
    var de = document.documentElement;   
    return self.innerWidth ||  ( de && de.clientWidth ) || document.body.clientWidth;
}

function getHeight( elem ) {    
    return parseInt( getStyle( elem, "height" ) );
}

function getWidth( elem ) {  
    return parseInt( getStyle( elem, "width" ) );
}

function setX(elem, pos) {
    elem.style.left = pos + "px";
}

function setY(elem, pos) {  
    elem.style.top = pos + "px";
}

function getStyle( elem, name ) {   
    if (elem.style[name]) {
        return elem.style[name];
		}   
    else if (elem.currentStyle) {
        return elem.currentStyle[name];
		}   
    else if (document.defaultView && document.defaultView.getComputedStyle) {        
        name = name.replace(/([A-Z])/g,"-$1");
        name = name.toLowerCase();      
        var s = document.defaultView.getComputedStyle(elem,"");
        return s && s.getPropertyValue(name);   
    } else {
        return null;
		}
}

function setOpacity( elem, level ) {    
    if ( elem.filters ) {
        elem.filters.alpha.opacity = level;
		}    
    else {
        elem.style.opacity = level / 100;
		}
}

function hide(elem) {   
    var curDisplay = getStyle(elem, "display");   
    if (curDisplay != "none") {
        elem.$oldDisplay = curDisplay;
		}    
    elem.style.display = "none";
}

function show(elem) {   
    elem.style.display = elem.$oldDisplay || "block";
}

function pageHeight() {
    return document.body.scrollHeight;
}

function pageWidth() {
    return document.body.scrollWidth;
}

function fadeIn(elem,to,speed) {   
    setOpacity(elem, 0);    
    show(elem);    
    for (var i = 0;i <= 100;i += 5) {        
        (function(){
        		var opacity = i;  
            setTimeout(function(){                
                setOpacity( elem, (opacity/100)*to);
            }, (i+1)*speed);
        })();
    }
}

function fadeOut(elem,to,speed) {    
    for (var i=0; i<100; i += 5) {        
        (function(){
        		var opacity = i;  
            setTimeout(function(){               
                setOpacity(elem, 100-opacity);                
                if (opacity == 95) {
                    hide(elem);
								}
            }, (i+1)*speed);
        })();
    }
}

function id(name) {
    return document.getElementById(name);
}

function tag(name,root) {
    return (root || document).getElementsByTagName(name);
}

function byClass(name,type) {
    var r = [];    
    var re = new RegExp("(^|\\s)" + name + "(\\s|$)");    
    var e = document.getElementsByTagName(type || "*");
    for ( var j = 0; j < e.length; j++ ) {        
        if ( re.test(e[j].className) ) r.push( e[j] );
		}    
    return r;
}

function next(elem) {
    do {
        elem = elem.nextSibling;
    } while (elem && elem.nodeType != 1);
    return elem;
}

function prev(elem) {
    do {
        elem = elem.previousSibling;
    } while (elem && elem.nodeType != 1);
    return elem;
}