

    var imgs = document.getElementsByTagName ( "img" );
    var pImgs = new Array();
    var x = 0;
    while ( imgs[x] ) {
        if ( imgs[x].className == "productImage" )
            pImgs[pImgs.length] = imgs[x];
        x++;
    }

    ixf.imgsLen = pImgs.length * 2;
    ixf.cache = [];
	var imgPath = "";
	var slot = null;
    for ( var i = 0; i < pImgs.length; i++ ) {
		imgPath = pImgs[i].src;
		slot = ixf.cache.length;
        ixf.cache[slot] = new Image;
        ixf.cache[slot].src = imgPath;

		slot = ixf.cache.length;
		ixf.cache[slot] = new Image;
        ixf.cache[slot].src = imgPath.replace ( ".gif", ".ingr.gif" );
    }



