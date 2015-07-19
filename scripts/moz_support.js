/* $Id: moz_support.js,v 1.3 2005/12/15 13:47:49 scottd Exp $ */

// insertAdjacentElement, insertAdjacentHTML, insertAdjacentText and removeNode support.
// Just like IE. :)

// Also adds primitive XMLDocument support to mimic IE's data island support.  The xmlDocument object
// is at the end of this code segment.
 
if ( typeof HTMLElement!="undefined" && !HTMLElement.prototype.insertAdjacentElement ) {
	
	HTMLElement.prototype.XMLDocument = new xmlDocument( document.getElementsByTagName ( "xml" ) );

	HTMLElement.prototype.insertAdjacentElement = function ( where, parsedNode ) {
		switch ( where) {
			case 'beforeBegin':
				this.parentNode.insertBefore ( parsedNode, this )
				break;
			case 'afterBegin':
				this.insertBefore ( parsedNode, this.firstChild );
				break
			case 'beforeEnd':
				this.appendChild ( parsedNode );
				break;
			case 'afterEnd':
				if ( this.nextSibling ) 
					this.parentNode.insertBefore ( parsedNode, this.nextSibling );
				else 
					this.parentNode.appendChild ( parsedNode );
				break;
		}
	}

	HTMLElement.prototype.insertAdjacentHTML = function ( where, htmlStr ) {
		var r = this.ownerDocument.createRange();
		r.setStartBefore ( this );
		var parsedHTML = r.createContextualFragment ( htmlStr );
		this.insertAdjacentElement ( where, parsedHTML );
	}


	HTMLElement.prototype.insertAdjacentText = function ( where, txtStr ) {
		var parsedText = document.createTextNode ( txtStr )
		this.insertAdjacentElement ( where, parsedText )
	}

	HTMLElement.prototype.removeNode = function ( removeChildren ) {
		if ( removeChildren ) 
			while ( this.childNodes.length > 0 )
				this.removeChild ( this.childNodes[0] );
		this.parentNode.removeChild ( this.parentNode.childNodes[0] );

	}
}


// ** XMLDocument object constructor.

function xmlDocument( xmlDoc ) {
	this.name	= "XML Document Object Implentation for Mozilla";
	this.xmlDoc	= xmlDoc;
	this.xmlNodes 	= false;
	this.objStore   = false;
	this.callBack	= false;
	document.xmlDocument = this;
	return this;
}


// xmlDocument object method(s)...
xmlDocument.prototype.load		= _pmiMO_loadXMLDocument;
xmlDocument.prototype.selectNodes 	= _pmiMO_selectNodes;
xmlDocument.prototype.selectSingleNode	= _pmiMO_selectNode;

var objStore = false;
var callBack = false;
var target = false;

var xmlFile;

function _pmiMO_loadXMLDocument( uriXmlDoc, htmlElTarget, onLoadCall ) {

	var obj = document.implementation.createDocument ( '', 'doc', null );	
	xmlFile = obj;

	objStore = htmlElTarget;
	callBack = onLoadCall;

	obj.onload = _pmiMO_insertXMLDocument;

	obj.load ( uriXmlDoc );
}

function _pmiMO_insertXMLDocument () {
	var str = "";
	var i = 0;
	for ( i in objStore )
		str += i + ", ";
	alert ( str );
	var tags = xmlFile.getElementsByTagName ( "pages" );

	alert ( "tags " + tags.length );
	while ( tags[i] ) {
		alert ( i );
		
		objStore.insertAdjacentElement ( afterBegin, tags[i]);
		i++;
	}
	callBack();
}


function _pmiMO_selectNodes ( nodeName ) {

	/* returns an array of nodes that match 'nodeName' 
	   extremely rough implementation, just proof of concept. */

	var nodeNames = nodeName.split ( "/" );
	var targNodes = this.xmlDoc[0].childNodes[1];
	var nodesOut = new Array();
	var nodeSlot;
	var i = 0;

	if ( targNodes.hasChildNodes() ) {
		while ( targNodes.childNodes[i] ) {
			node = targNodes.childNodes[i];
						
			if ( node.nodeName == nodeNames[nodeNames.length-1].toUpperCase() ) {
				nodeSlot = nodesOut.length;
				nodesOut[nodeSlot] = node;
				nodesOut[nodeSlot].selectSingleNode = _pmiMO_selectSingleNode;
			}
			i++;
		}
	}
	this.xmlNodes = nodesOut;
	return nodesOut;

}

function _pmiMO_selectNode ( nodeName ) {
	var nodeNames = nodeName.split ( "/" );
        var targNodes = this.xmlDoc[0].childNodes[1];
        var nodesOut = new Array();
        var nodeSlot;
        var i = 0;
	var nNode;
	if ( targNodes.hasChildNodes() ) {
                while ( targNodes.childNodes[i] ) {
                        node = targNodes.childNodes[i];

                        if ( node.nodeName == nodeNames[nodeNames.length-1].toUpperCase() ) {

				nNode = new Object();
	                        nNode.text = node.textContent;

                        }
                        i++;
                }
        }
	//alert ( "returning " + nNode.text );
	return nNode;
	
} 

function _pmiMO_selectSingleNode ( nodeName ) {

	/* selects a single node by name (nodeName) from an array returned by XMLDocument.selectNodes
	   returns false if not found. */
	
	var i = 0;
	var nNode = false;

	//if ( !this.childNodes ) {
	//	//this.selectNodes ( nodeName );
	//	return;
		//alert ( "no childNodes, prepping!"  + this.name );
	//}

	var nodeNames= nodeName.split ( "/" );

        nodeName = nodeNames[nodeNames.length - 1];
	
	while ( this.childNodes[i] && nodeName ) {
		if ( this.childNodes[i].nodeName == nodeName.toUpperCase() ) { 
			nNode = new Object();
			nNode.text = this.childNodes[i].textContent;	
		}
		i++;
	}
	return nNode;
}


