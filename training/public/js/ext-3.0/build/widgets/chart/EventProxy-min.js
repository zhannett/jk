/*
 * Ext JS Library 3.0 RC2
 * Copyright(c) 2006-2009, Ext JS, LLC.
 * licensing@extjs.com
 * 
 * http://extjs.com/license
 */


Ext.FlashEventProxy={onEvent:function(id,e){var fp=Ext.getCmp(id);if(fp){fp.onFlashEvent(e);}else{arguments.callee.defer(10,this,[id,e]);}}}