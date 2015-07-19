Ext.onReady(function(){
	var tabs = new Ext.TabPanel({
		id:'panel1',
		border:false,
		resizeTabs:true,
		enableTabScroll:true,
		activeItem:0,
		defaults:
			{
				autoScroll:true
			},
			items:[
				{title:'ProductInventory'},
				{title:'New Product'}
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
			{
				region:'center',
				title:'Content', 
				autoLoad: {
					url:'remote/data.php',
					callback: function(el, success, response, options) {
						if(success===true) {
							var res = Ext.decode(response.responseText);	
							if(res.success===true) {
								el.update(res.data);
							}else {
								Ext.MessageBox.show({
									title:'Exception',
									msg: 'res.data',
									icon: Ext.MessageBox.ERROR
								})
							}					
							el.update(res.data)
						} else {
							Ext.MessageBox.alert('Failyre','Failed to load panel')	
						
						}
					}
				}
			},
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