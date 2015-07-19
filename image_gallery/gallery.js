var curImage = null;

function adjust(){		
		var obj = id("gallery");	
		if (!obj) return;		
		var w = getWidth(obj);
		var h = getHeight(obj);		
		var t = scrollY() + (windowHeight()/2)-(h/2);		
		if (t<0) t = 0;		
		var l = scrollX() + (windowWidth()/2)-(w/ 2 );	
		if (l < 0) l = 0;
		setY(obj, t);
		setX(obj, l);
};

window.onresize = document.onscroll = adjust;

function startShow(obj) {		
		var elem = tag( "li", obj );
		var gallery = id("gallery");	
		for (var i=0; i<elem.length; i++)  new function() {				
				var cur = elem[i];
				setTimeout(function(){						
						showImage(cur);	
						setTimeout(function(){
								fadeOut( gallery, 0, 10 );
						}, 3500 );
				}, i * 5000 );						
		};
		setTimeout(hideOverlay, 5000 * elem.length);
		showOverlay();
}

function hideOverlay() {		
		curImage = null;	
		hide( id("overlay") );
		hide( id("gallery") );
}

function showOverlay() {		
		var over = id("overlay");
		over.style.height = pageHeight() + "px";
		over.style.width = pageWidth() + "px";
		fadeIn( over, 50, 10 );
}

function prevImage() {		
		showImage(prev(curImage));		
		return false;
}

function nextImage() {		
		showImage(next(curImage));
		return false;
}

function showImage(cur) {		
		curImage = cur;		
		var img = id("gallery_image");
		if (img.firstChild) {
				img.removeChild(img.firstChild);
		}		
		img.appendChild(cur.firstChild.cloneNode(true));		
		id("gallery_title").innerHTML = cur.firstChild.firstChild.alt;	
		if (!next(cur)){
				hide(id("gallery_next"));
		}		
		else {
				show(id("gallery_next"));
		}		
		if (!prev(cur)) {
				hide(id("gallery_prev"));
		}		
		else {
				show(id("gallery_prev"));
		}		
		var gallery = id("gallery");
		gallery.className = cur.className;
		fadeIn( gallery, 100, 10 );		
		adjust();
}

window.onload = function() {		
		var overlay = document.createElement("div");
		overlay.id = "overlay";		
		overlay.onclick = hideOverlay;
		document.body.appendChild(overlay);
		
		var gallery = document.createElement("div");
		gallery.id = "gallery";		
		gallery.innerHTML = '<div id="gallery_image"></div>' +
				'<div id="gallery_prev"><a href="">&laquo; Prev</a></div>' +
				'<div id="gallery_next"><a href="">Next &raquo;</a></div>' +
				'<div id="gallery_title"></div>';
		document.body.appendChild(gallery);
		
		id("gallery_next").onclick = nextImage;
		id("gallery_prev").onclick = prevImage;		
		
		var g = byClass("gallery","ul");
		for (var i = 0; i < g.length; i++) {		
				var link = tag("a", g[i]);	
				for (var j = 0; j < link.length; j++) {
						link[j].onclick = function(){
								showOverlay();								
								showImage(this.parentNode);
								return false;
						};
				}				
				var div = document.createElement("div");
				div.className = "slideshow";				
				
				var span = document.createElement("span");
				span.innerHTML = g[i].title;
				div.appendChild(span);				
				
				var a = document.createElement("a");
				a.href = "";
				a.innerHTML = "&raquo; View as a Slideshow";				
				
				a.onclick = function(){
						startShow( this.parentNode.nextSibling );
						return false;
				};				
				
				div.appendChild(a);
				g[i].parentNode.insertBefore(div, g[i]);
		}
};