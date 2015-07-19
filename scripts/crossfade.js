//global object
var ixf = { 'clock' : null, 'count' : 1, 'timeouts' : new Array() }
/*******************************************************



// List the images that need to be cached
/* This will be populated by the page loading the script */
/*
ixf.imgs = [
	'buttons/udm4-whitebutton88x31.gif',
	'buttons/udm4-greenbutton88x31.gif',
	'buttons/udm4-purplebutton88x31.gif'
	];
*/
/*****************************************************************************
*****************************************************************************/


/*
//cache the images
ixf.imgsLen = ixf.imgs.length;
ixf.cache = [];
for(var i=0; i<ixf.imgsLen; i++)
{
	ixf.cache[i] = new Image;
	ixf.cache[i].src = ixf.imgs[i];
}

*/
//crossfade setup function
function crossfade()
{
	//if the timer is not already going
	if(ixf.clock == null)
	{
		//copy the image object 
		ixf.obj = arguments[0];
		//copy the image src argument 
		ixf.src = arguments[1];
		
		
		//store the supported form of opacity
		if(typeof ixf.obj.style.opacity != 'undefined')
		{
			ixf.type = 'w3c';
		}
		else if(typeof ixf.obj.style.MozOpacity != 'undefined')
		{
			ixf.type = 'moz';
		}
		else if(typeof ixf.obj.style.KhtmlOpacity != 'undefined')
		{
			ixf.type = 'khtml';
		}
		else if(typeof ixf.obj.filters == 'object')
		{
			//weed out win/ie5.0 by testing the length of the filters collection (where filters is an object with no data)
			//then weed out mac/ie5 by testing first the existence of the alpha object (to prevent errors in win/ie5.0)
			//then the returned value type, which should be a number, but in mac/ie5 is an empty string
			//ixf.type = (ixf.obj.filters.length > 0 && typeof ixf.obj.filters.alpha == 'object' && typeof ixf.obj.filters.alpha.opacity == 'number') ? 'ie' : 'none';
			//ixf.obj.filters.item.progId = "DXImageTransform.Microsoft.Alpha(opacity=100)";
			ixf.type = "ie";
		}
		else
		{
			ixf.type = 'none';
		}
		
		//change the image alt text if defined
		if(typeof arguments[3] != 'undefined' && arguments[3] != '')
		{
			ixf.obj.alt = arguments[3];
		}
		// fifth argument used in mouse over method.
		if ( typeof arguments[4] != 'undefined' && arguments[4] != '')
        {
			ixf.obj.onmouseoverStore = ixf.obj.onmouseover;
			ixf.obj.onmouseover = null;
			ixf.timeouts[ixf.timeouts.length] = setTimeout ( "crossfade(document.getElementById('" + arguments[0].id + "'),'" 
					+ arguments[4] + "','" + arguments[2] + "','" + arguments[3] + "')", arguments[5] );

        }
		else {
			if ( ixf.obj.onmouseoverStore ) {
				ixf.obj.onmouseover = ixf.obj.onmouseoverStore;	
			}	
		}	

		// 
		if (typeof arguments[6] != 'undefined' && arguments[6] != '')
		{
			ixf.callBack = arguments[6];	
		}
		else
			ixf.callBack = false;
		
		//if any kind of opacity is supported
		if(ixf.type != 'none')
		{
			//create a new image object and append it to body
			//detecting support for namespaced element creation, in case we're in the XML DOM
			ixf.newimg = document.getElementsByTagName('body')[0].appendChild((typeof document.createElementNS != 'undefined') ? document.createElementNS('http://www.w3.org/1999/xhtml', 'img') : document.createElement('img'));

			//set positioning classname
			ixf.newimg.className = 'idupe';
			
			//set src to new image src
			ixf.newimg.src = ixf.src

			//move it to superimpose original image
			ixf.newimg.style.left = ixf.getRealPosition(ixf.obj, 'x') + 'px';
			ixf.newimg.style.top = ixf.getRealPosition(ixf.obj, 'y') + 'px';
			
			//copy and convert fade duration argument 
			ixf.length = parseInt(arguments[2], 10) * 1000;
			
			//create fade resolution argument as 20 steps per transition
			ixf.resolution = parseInt(arguments[2], 10) * ( ixf.type == "ie" ? 5 : 20 );
			//ixf.resolution = parseInt(arguments[2], 10) * 20;
			
			//start the timer
			ixf.clock = setInterval('ixf.crossfade()',  ixf.length/ixf.resolution );
		}
		
		//otherwise if opacity is not supported
		else
		{
			//just do the image swap
			ixf.obj.src = ixf.src;
		}
		
	}
};


//crossfade timer function
ixf.crossfade = function()
{
	//decrease the counter on a linear scale
	ixf.count -= (1 / ixf.resolution);
	
	//if the counter has reached the bottom
	if(ixf.count < (1 / ixf.resolution))
	{
		//clear the timer
		clearInterval(ixf.clock);
		ixf.clock = null;
		
		//reset the counter
		ixf.count = 1;
		
		//set the original image to the src of the new image
		if ( ixf.type != "ie" )
			ixf.obj.src = ixf.src;
		if ( ixf.callBack ) {
                ixf.callBack ( ixf);
        }

	}
	
	//set new opacity value on both elements
	//using whatever method is supported
	switch(ixf.type)
	{
		case 'ie' :
			/* this function only runs 1 time in ie, We'll use IE's native DX Filters
				instead.  Using the opacity filter in IE is slooooooooowwwwwww. */
			ixf.obj.filters.item(0).Apply();
			ixf.obj.src = ixf.newimg.src;
			ixf.obj.filters.item(0).Play();
			ixf.count = -1;
			if ( ixf.callBack ) {
				ixf.callBack ( ixf );
			}	
			// GTFO.... we're done here.	
			return;
			break;
			
		case 'khtml' :
			ixf.obj.style.KhtmlOpacity = ixf.count;
			ixf.newimg.style.KhtmlOpacity = (1 - ixf.count);
			break;
			
		case 'moz' : 
			//restrict max opacity to prevent a visual popping effect in firefox
			ixf.obj.style.MozOpacity = (ixf.count == 1 ? 0.9999999 : ixf.count);
			ixf.newimg.style.MozOpacity = (1 - ixf.count);
			break;
			
		default : 
			//restrict max opacity to prevent a visual popping effect in firefox
			ixf.obj.style.opacity = (ixf.count == 1 ? 0.9999999 : ixf.count);
			ixf.newimg.style.opacity = (1 - ixf.count);
	}
	
	//now that we've gone through one fade iteration 
	//we can show the image that's fading in
	ixf.newimg.style.visibility = 'visible';
	ixf.newimg.height = ixf.obj.height;
	ixf.newimg.width = ixf.obj.width;
	
	//keep new image in position with original image
	//in case text size changes mid transition or something
	ixf.newimg.style.left = ixf.getRealPosition(ixf.obj, 'x') + 'px';
	ixf.newimg.style.top = ixf.getRealPosition(ixf.obj, 'y') + 'px';
	
	//if the counter is at the top, which is just after the timer has finished
	if( ( ixf.count == 1 ) && ( ixf.type != "ie" ) )
	{
		//remove the duplicate image
		ixf.newimg.parentNode.removeChild(ixf.newimg);
	}
};



//get real position method
ixf.getRealPosition = function()
{
	this.pos = (arguments[1] == 'x') ? arguments[0].offsetLeft : arguments[0].offsetTop;
	this.tmp = arguments[0].offsetParent;
	while(this.tmp != null)
	{
		this.pos += (arguments[1] == 'x') ? this.tmp.offsetLeft : this.tmp.offsetTop;
		this.tmp = this.tmp.offsetParent;
	}
	
	return this.pos;
};
