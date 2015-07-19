var dhtmlPopup = {
	"handle":			false,
	"opacityType":		false
}


dhtmlPopup.makeOpaque = function ( type, obj, value ) {
	switch(type)
    {
        case 'ie' :
            /* this function only runs 1 time in ie, We'll use IE's native DX Filters
                instead.  Using the opacity filter in IE is slooooooooowwwwwww.
				also note that a 'filter' property must be defined in the css for
				 this element */
            break;

        case 'khtml' :
            style.KhtmlOpacity = ixf.count;
            break;

        case 'moz' :
            //restrict max opacity to prevent a visual popping effect in firefox
            obj.style.MozOpacity = (value == 1 ? 0.9999999 : value);
            break;
		case 'none' :
			break;

        default :
            //restrict max opacity to prevent a visual popping effect in firefox
            obj.style.opacity = (value == 1 ? 0.9999999 : value);
    }

}


dhtmlPopup.init = function ( ixf ) {

	var tmp, tmpCont;
	if ( document.getElementById ( "dhtmlPopupNode" ) )
		document.getElementById ( "dhtmlPopupNode" ).removeNode ( true );
	dhtmlPopup.handle = _createElement ( "div" );
	document.getElementById ( "contentArea" ).insertAdjacentElement ( "afterBegin", dhtmlPopup.handle );
	dhtmlPopup.handle.id = "dhtmlPopupNode";
    dhtmlPopup.handle.className = "popupContainer";
    dhtmlPopup.handle.style.top = ixf.getRealPosition(ixf.obj, 'y')-24 + ( ixf.type == "ie" ? 2 : 0 ) + "px";
    dhtmlPopup.handle.style.left = ixf.getRealPosition(ixf.obj, 'x' ) + ( ixf.type == "ie" ? 1 : 0 ) + "px";

	if ( ixf.type == "ie" )
	dhtmlPopup.handle.style.pixelHeight = "176px";
	//dhtmlPopup.makeOpaque ( ixf.type, dhtmlPopup.handle, .65 );	
	
	//tmp = _createElement ( "div" );
	//tmp.id = "closeTab";

	//dhtmlPopup.handle.insertAdjacentElement ( "afterBegin", tmp );

	tmpCont = _createElement ( "div" );
	tmpCont.id = "innerContainer";

	dhtmlPopup.handle.insertAdjacentElement ( "beforeEnd", tmpCont );

	tmp = _createElement ( "div" );
    tmp.id = "imageSpacer";

	tmpCont.insertAdjacentElement ( "afterBegin", tmp );
	dhtmlPopup.makeOpaque ( ixf.type, document.getElementById("imageSpacer"), .35 );
	
	tmp = _createElement ( "div" );
    tmp.id = "textCell";

    tmpCont.insertAdjacentElement ( "beforeEnd", tmp );

	tmp.innerHTML = "<div style='padding:10px;text-align:left;'>" 
		+ ixf.obj.parentNode.parentNode.childNodes[0].innerHTML 
		+ " &mdash; <a href=\"javascript:void document.getElementById('dhtmlPopupNode').removeNode(true);\">[CLOSE]</a></div>";
	// have to get the position right....a
	
	//dhtmlPopup.handle.innerHTML = popupInnerHTML;
	
	//alert ( dhtmlPopup.handle.getElementById ( "textCell" ).innerHTML );	
	// insert a div to keep the underlying image visible...	
}

function _createElement ( type ) {
	return ((typeof document.createElementNS != 'undefined') ?
                document.createElementNS('http://www.w3.org/1999/xhtml', type ) :
                    document.createElement(type));
}

function _createAndInsertElement ( type ) {
	return document.getElementsByTagName('body')[0].appendChild( _createElement ( "div" ));
}
