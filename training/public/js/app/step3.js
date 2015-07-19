Ext.onReady(function(){	
	
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
				border:false,
				layout:'border',				
				defaults:
					{
						bodyStyle:'padding:5px'
					},
					items:[
						{
							title:'Center "Fill" Region with Inner Border Layout',
							region:'center',
							html:'Blah-blah-blah'
						},
						{
							region:'south',
							collapsible:true, 
							height:200,
							html: "This is a south region",
							split:true,
							collapseMode:'mini'				
						}			
					]
			},
			
			]
		})
});