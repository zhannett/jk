/**
 * @class DemoTree
 */
DemoTree = Ext.extend(Ext.tree.TreePanel, {
	dataUrl:'remote/tree.php',
	
	initComponent : function() {
		
		var root = new Ext.tree.AsyncTreeNode({
			text: 'Root Node',
			expanded:true,
			id:'root_element'
		});
		
		// super
		DemoTree.superclass.initComponent.call(this);
		
		this.setRootNode(root);
		var loader = this.getLoader();
		loader.on('beforeload', function(tl, node) {
			tl.baseParams.type = node.attributes.type || 'root';		
		});
	}
});
Ext.reg('demotree', DemoTree);
