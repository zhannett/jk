


var imageCollections = new Array();

function imageCollection () {
	var x = 0;
	this.id			= arguments[0];
	this.images		= arguments[1].split ( ";" );
	this.htmlEl		= arguments[2];
	this.htmlEl.imageCollection = this;
	this.htmlEl.onclick = this.nextImage;
	this.currIndex	= 0;
	this.target		= false;

	// feed crossfade.js here.
	while ( this.images[x] ) {
        if ( !ixf.imgs )
            ixf.imgs = new Array();
        if ( !ixf.cache )
            ixf.cache =  new Array();
        //ixf.imgs[ixf.imgs.length] = "images/results/" + this.images[x];
        ixf.cache[ixf.imgs.length-1] = new Image();
        ixf.cache[ixf.imgs.length-1].src = "images/results/" + this.images[x];
        x++;
    }


}

function _nextImage( e, noFade ) {
	if ( !e )
		e = event.srcElement;
	else 
		e = e.target;

	crossfade ( e.imageCollection.htmlEl, "images/results/" + e.imageCollection.images[e.imageCollection.currIndex], 1, '');

	e.imageCollection.currIndex++;
	
	if ( e.imageCollection.currIndex >= e.imageCollection.images.length )
		e.imageCollection.currIndex = 0;
}

imageCollection.prototype.nextImage = _nextImage;


// inline page code, immediately executed.
// feeds the imageCollection objects.

var els = document.getElementsByTagName("div" );

// walk els, find all the resultContainers classes..
for ( var i = 0; i < els.length; i++ ) {
	if ( els[i].className == "resultContainer" ) {
		imageCollections[imageCollections.length] = new imageCollection( imageCollections.length,
					els[i].childNodes[0].innerHTML,
					document.getElementById ( els[i].childNodes[2].childNodes[0].id ) );
			// hack to not show the default image, start with the first image in the list.
		document.getElementById ( els[i].childNodes[2].childNodes[0].id ).src = "images/results/" + imageCollections[imageCollections.length-1].images[0];
		imageCollections[imageCollections.length-1].currIndex++;
			
	}

}
