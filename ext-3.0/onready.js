Ext.onReady(function() {
	var panel = new Ext.Window({
		title : 'Test Window',
		width : 100,
		height : 100,
		frame : true,
		html : 'I love Ext JS!'
	});
	panel.show()
});