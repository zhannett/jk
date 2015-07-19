/**
 * @class DemoGri
 */
DemoGrid = Ext.extend(Ext.grid.GridPanel, {	
	
	initComponent : function() {	
		  
        this.columns = [
            new Ext.grid.RowNumberer(),			
			{header: "Name", width: 40, sortable: true, dataIndex: 'name'},
            {header: "Variable ID", width: 20, sortable: true, dataIndex: 'variable_id'},
            {header: "Is Percent", width: 20, sortable: true, dataIndex: 'is_percente'},
            {header: "Is count", width: 20, sortable: true, dataIndex: 'is_count'},
            {header: "Is Average", width: 20, sortable: true, dataIndex: 'is_average'}
        ];
        this.viewConfig = {
            forceFit:true,
			getRowClass: this.getRowClass
		};
		this.bbar = new Ext.PagingToolbar({
			store:this.store,
			pageSize:20
		});
		// super
		DemoGrid.superclass.initComponent.call(this);		
	},	
		
	getRowClass: function(rec, idx, rowParams, store){      
    }

});
Ext.reg('demogrid', DemoGrid);