/**
 * @class DemoGri
 */
DemoGrid = Ext.extend(Ext.grid.GridPanel, {	
	
	initComponent : function() {	
		  
        this.columns = [
            new Ext.grid.RowNumberer(),
			/*
            {header: "Company", width: 40, sortable: true, dataIndex: 'name'},
            {header: "Price", width: 20, sortable: true, renderer: Ext.util.Format.usMoney, dataIndex: 'price'},
            {header: "Change", width: 20, sortable: true, dataIndex: 'change'},
            {header: "% Change", width: 20, sortable: true, dataIndex: 'pctChange'},
            {header: "Last Updated", width: 20, sortable: true, renderer: Ext.util.Format.dateRenderer('m/d/Y'), dataIndex: 'last_updated'}
			*/
			
			{header: "Name", width: 40, sortable: true, dataIndex: 'name'},
            {header: "Variable ID", width: 20, sortable: true, dataIndex: 'variable_id'},
            {header: "Is Percent", width: 20, sortable: true, dataIndex: 'is_percent'},
            {header: "Is count", width: 20, sortable: true, dataIndex: 'is_count'},
            {header: "Is Average", width: 20, sortable: true, dataIndex: 'is_average'}
        ];
        this.viewConfig = {
            forceFit:true,
			getRowClass: this.getRowClass
		};
		this.bbar = new Ext.PagingToolbar({
			store:this.store,
			pageSize:3
		});
		// super
		DemoGrid.superclass.initComponent.call(this);		
	},	
		
	getRowClass: function(rec, idx, rowParams, store){
       /*
	    if(rec.data.pctChange < 0){
            return 'negative';
        }
        else if(rec.data.pctChange > 0.5){
            return 'positive';
        }
        */
    }

});
Ext.reg('demogrid', DemoGrid);