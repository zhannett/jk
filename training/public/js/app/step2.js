Ext.onReady(function(){
	var tabs = new Ext.TabPanel({
		id:'tabs',
		region:'center',
		border:false,
		resizeTabs:true,
		enableTabScroll:true,
		activeItem:0,
		defaults:
			{
				autoScroll:true
			},
			items:[
				{
					title:'ProductInventory',
					id:'tab1'
				},
				{
					title:'New Product',
					id:'tab2'
				}
			]
		});
	
		new Ext.Viewport({
			layout:'border',
			items:[
			{				
				region: 'west',
				title:'Categories',
				width: 200,
				collapsible:true,
				split:true,
				cmargins: '10 10 10 10',
				collapseMode:'mini'
				
			},
			tabs,
			{
				region:'south',
				title:'South',
				collapsible:true, 
				height:100,
				html: "This is a south region"
				
			}
			]
		})
});