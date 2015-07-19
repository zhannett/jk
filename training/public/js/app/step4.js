Ext.onReady(function(){	
		
		var tree = new Ext.tree.TreePanel({			
			title:'West Region',
			region:'west',
			split:true,
			width:200,
			margins: '5 0 5 5',
			cmargins: '5 5 5 5',
			//rootVisible:false,
			collarsible:true,
			dataUrl:'remote/tree.php'
		});
		var loader = tree.getLoader();
		loader.on('beforeload', function(tl, node) {
			tl.baseParams.type = node.attributes.type || 'root';		
		});
		
		var root = new Ext.tree.AsyncTreeNode({
			text: 'Root Node',
			expanded:true,
			id:'root_element'
		});
		tree.setRootNode(root);
		
		
		
		new Ext.Viewport({
			layout:'border',
			items:[
			tree,
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