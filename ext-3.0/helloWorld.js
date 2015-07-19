function buildWindow() {
	var win = new Ext.Window({ // 1
		id : 'myWindow',
		title : 'My first Ext JS Window',
		width : 300,
		height : 150,
		layout : 'fit',
		autoLoad : { // 2
			url : 'sayHi.html',
			scripts : true
		}
	});
	win.show(); // 3
}
Ext.onReady(buildWindow); // 4
//1) Instantiation of a new instance of Ext.Window.
//2) Specifying an autoLoad configuration object
//3) Calling upon our window to show().
//4) Passing buildWindow to Ext.onReady.