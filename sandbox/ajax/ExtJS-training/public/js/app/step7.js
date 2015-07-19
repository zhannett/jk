Ext.onReady(function(){
	
	
	Ext.QuickTips.init();
	
    var detailsTpl = new Ext.Template(
        '<p><b>Company:</b> {name}</p>',
		'<p><b>Price:</b> {price:usMoney}</p>',
        '<p><b>Change:</b> {change}</p>',
		'<p><b>% Change:</b> {pctChange}</p>',
		'<p><b>Last Updated:</b> {last_updated:date}</p>'
    );
    var details = new Ext.Panel({
        region: 'south',
        split: 'true',
        height: 100,
        margins: '0 0 5 0',
        cmargins: '0 0 0 0',
        collapsible: true,
        collapseMode: 'mini',
        autoScroll:true,
        html: '<p>Click on a company to see the details.</p>'
    })

	
	var proxy = new Ext.data.HttpProxy({		
		api: {
			read: 'remote/companies.php',
			create: 'remote/create_company.php',
			update: 'remote/update_company.php',
			destroy: 'remote/destroy_company.php'
		}
	});

    var reader = new Ext.data.JsonReader({
			idProperty:'id' ,
			root:'data',
			totalProperty:'total',
			successProperty:'success'         //data.ArrayReader		
	}, [   
	   {name: 'id'},
       {name: 'name'},
       {name: 'price', type: 'float'},
       {name: 'change', type: 'float'},
       {name: 'pctChange', type: 'float'},
       {name: 'last_updated', type: 'date', dateFormat: 'n/j h:ia'},
       {name: 'industry'},
       {name: 'desc'}
    ]);
	
	// new in Ext3 -- Ext.data.DataWriter
	var writer = new Ext.data.JsonWriter({});
	
    var store = new Ext.data.Store({
		proxy:proxy,
		id:'companies',
		restful: true,
        reader: reader,
		writer: writer,
		listeners : {
			write : function() {
				console.info('SUCCESS: wrote soomething: ', arguments);
			},
			exception: function() {
				console.error('WTF???: ', arguments);
			}
		}
                              // data: Ext.grid.dummyData
    });
	store.load();



    var grid = new Ext.grid.GridPanel({
        title: 'Companies Grid',
        store: store,
        columns: [
            new Ext.grid.RowNumberer(),
            {header: "Company", width: 40, sortable: true, dataIndex: 'name'},
            {header: "Price", width: 20, sortable: true, renderer: Ext.util.Format.usMoney, dataIndex: 'price'},
            {header: "Change", width: 20, sortable: true, dataIndex: 'change'},
            {header: "% Change", width: 20, sortable: true, dataIndex: 'pctChange'},
            {header: "Last Updated", width: 20, sortable: true, renderer: Ext.util.Format.dateRenderer('m/d/Y'), dataIndex: 'last_updated'}
        ],
        viewConfig: {
            forceFit:true,
			getRowClass: function(rec, idx, rowParams, store){
		        if(rec.data.pctChange < 0){
		            return 'negative';
		        }
		        else if(rec.data.pctChange > 0.5){
		            return 'positive';
		        }
		    }
        }
    });
	//Grid this, Number rowIndex, Ext.EventObject e
	grid.on('rowclick',function(gri, index, ev){
		console.log(index);
		var s = Ext.StoreMgr.get('companies');
		var rec = s.getAt(index);
		detailsTpl.append(details.body, rec.data);
		//rec.set('name','foo');
		console.log(rec);
	});
	
	
	
	  /*
     * Define the FormPanel used in the popup editing window.
     */
    var companyForm = new Ext.FormPanel({
        id: 'company-form',
        border: false,
        bodyStyle: 'padding:15px',
        defaultType: 'textfield',
        labelWidth: 100,
        defaults: {
            msgTarget: 'side',
            anchor:'90%'
        },
        items: [{
            fieldLabel: 'Company Name',
            name: 'name',
            allowBlank:false   //,
			// autoCreate:{type:'file', tag:'input', size:'20'}
        },{
            xtype: 'numberfield',
            fieldLabel: 'Price',
            name: 'price',
            allowNegative: false
        },{
            xtype: 'numberfield',
            fieldLabel: 'Change',
            name: 'change'
        }]
    });

    /*
     * Display the edit window for the row that is double-clicked
     * in the grid.  BasicForm (FormPanel.getForm()) provides utility
     * methods for dealing with records as shown below, so there's no
     * need to manually populate and update fields individually.
     */
    var editWin, rec;
    grid.on('rowdblclick', function(grid, rowIndex, e){
        rec = grid.store.getAt(rowIndex);
        if(!editWin){
            editWin = new Ext.Window({
                id: 'company-window',
                title: 'Edit Company',
                closeAction: 'hide',
                modal: true,
                width: 400,
                autoHeight: true,
                items: companyForm,
                buttons: [{
                    text: 'Save',
                    handler: function(){
                        companyForm.getForm().updateRecord(rec);
                        detailsTpl.overwrite(details.body, rec.data);
                        details.body.highlight();
                        editWin.hide();
                    }
                },{
                    text: 'Cancel',
                    handler: function(){
                        editWin.hide();
                    }
                }]
            });
        }
        editWin.show(grid.getView().getRow(rowIndex));
        companyForm.getForm().loadRecord(rec);
    });

	//Grid this, Number rowIndex, Ext.EventObject e
	grid.on('rowclick',function(gri, index, ev){
		console.log(index);
		var s = Ext.StoreMgr.get('companies');
		var rec = s.getAt(index);
		detailsTpl.append(details.body, rec.data);
		//rec.set('name','foo');
		console.log(rec);
	});
	
	

    var tree = new Ext.tree.TreePanel({
        title: 'West Region',
        region:'west',
        split:true,
        width:200,
        margins:'5 0 5 5',
        cmargins:'5 5 5 5',
        collapsible:true
    });

    var root = new Ext.tree.TreeNode({
        text: 'Root Node',
        expanded: true
    });
    tree.setRootNode(root);

    root.appendChild(new Ext.tree.TreeNode({text: 'Item 1'}));
    root.appendChild(new Ext.tree.TreeNode({text: 'Item 2'}));
    root.appendChild(new Ext.tree.TreeNode({text: 'Item 3'}));

    tree.on('click', function(n){
		Ext.Msg.prompt('Edit Paragraph', 
			'<b>Current value:</b><br />' + n.text, 
			function(btn, text){
			if(text != '' && btn == 'ok'){
				n.setText(text);
				Ext.fly(n.getUI().getTextEl()).highlight();
			}
		}, this, true);
    });
    
	/*
     * Custom view tab: XTemplate and DataView definitions
     */
    var viewTpl = new Ext.XTemplate(
        '<tpl for=".">',
            '<div class="company-wrap" id="{name}">',
                '<div class="company-name">{name}</div>',
                '<div class="company-details">',
                    '<b>Price</b>: {price:usMoney}<br />',
                    '<b>Last Updated</b>: {last_updated:date("n/j h:ia")}<br />',
                    '<b>Industry</b>: {industry}',
                '</div>',
            '</div>',
        '</tpl>'
    );
    var view = new Ext.DataView({
        store: store,
        autoWidth: true, // fixes horiz scrollbar
        tpl: viewTpl,
        overClass:'company-over',
        itemSelector:'div.company-wrap',
        emptyText: 'No companies to display',
        listeners: {
            click: {
                fn: function(dv, index, node, e){
                    Ext.fly(node).radioClass('company-sel');
                    var rec = store.getAt(store.find('company', node.id));
                    detailsTpl.overwrite(details.body, rec.data);
                    details.body.highlight();
                }
            }
        }
    });


    var viewport = new Ext.Viewport({
        layout: 'border',
        items: [tree, {
            border: false,
            region:'center',
            layout:'border',
            margins:'5 5 0 0',
            items: [{
                xtype: 'tabpanel',
                region: 'center',
                activeTab: 1,
                items: [ grid, {
                    title: 'Card View',
                    layout: 'fit',
                    autoScroll: true,
                    bodyStyle: 'padding:0 0 10px 10px;',
                    items: view
                }]
            }, details]
        }]
    });

});


Ext.grid.dummyData = [
    ['3m Co',71.72,0.02,0.03,'9/1 12:00am', 'Manufacturing'],
    ['Alcoa Inc',29.01,0.42,1.47,'9/1 12:00am', 'Manufacturing'],
    ['Altria Group Inc',83.81,0.28,0.34,'9/1 12:00am', 'Manufacturing'],
    ['American Express Company',52.55,0.01,0.02,'9/1 12:00am', 'Finance'],
    ['American International Group, Inc.',64.13,0.31,0.49,'9/1 12:00am', 'Services'],
    ['AT&T Inc.',31.61,-0.48,-1.54,'9/1 12:00am', 'Services'],
    ['Boeing Co.',75.43,0.53,0.71,'9/1 12:00am', 'Manufacturing'],
    ['Caterpillar Inc.',67.27,0.92,1.39,'9/1 12:00am', 'Services'],
    ['Citigroup, Inc.',49.37,0.02,0.04,'9/1 12:00am', 'Finance'],
    ['E.I. du Pont de Nemours and Company',40.48,0.51,1.28,'9/1 12:00am', 'Manufacturing'],
    ['Exxon Mobil Corp',68.1,-0.43,-0.64,'9/1 12:00am', 'Manufacturing'],
    ['General Electric Company',34.14,-0.08,-0.23,'9/1 12:00am', 'Manufacturing'],
    ['General Motors Corporation',30.27,1.09,3.74,'9/1 12:00am', 'Automotive'],
    ['Hewlett-Packard Co.',36.53,-0.03,-0.08,'9/1 12:00am', 'Computer'],
    ['Honeywell Intl Inc',38.77,0.05,0.13,'9/1 12:00am', 'Manufacturing'],
    ['Intel Corporation',19.88,0.31,1.58,'9/1 12:00am', 'Computer'],
    ['International Business Machines',81.41,0.44,0.54,'9/1 12:00am', 'Computer'],
    ['Johnson & Johnson',64.72,0.06,0.09,'9/1 12:00am', 'Medical'],
    ['JP Morgan & Chase & Co',45.73,0.07,0.15,'9/1 12:00am', 'Finance'],
    ['McDonald\'s Corporation',36.76,0.86,2.40,'9/1 12:00am', 'Food'],
    ['Merck & Co., Inc.',40.96,0.41,1.01,'9/1 12:00am', 'Medical'],
    ['Microsoft Corporation',25.84,0.14,0.54,'9/1 12:00am', 'Computer'],
    ['Pfizer Inc',27.96,0.4,1.45,'9/1 12:00am', 'Services', 'Medical'],
    ['The Coca-Cola Company',45.07,0.26,0.58,'9/1 12:00am', 'Food'],
    ['The Home Depot, Inc.',34.64,0.35,1.02,'9/1 12:00am', 'Retail'],
    ['The Procter & Gamble Company',61.91,0.01,0.02,'9/1 12:00am', 'Manufacturing'],
    ['United Technologies Corporation',63.26,0.55,0.88,'9/1 12:00am', 'Computer'],
    ['Verizon Communications',35.57,0.39,1.11,'9/1 12:00am', 'Services'],
    ['Wal-Mart Stores, Inc.',45.45,0.73,1.63,'9/1 12:00am', 'Retail'],
    ['Walt Disney Company (The) (Holding Company)',29.89,0.24,0.81,'9/1 12:00am', 'Services']
];

// add in some dummy descriptions
for(var i = 0; i < Ext.grid.dummyData.length; i++){
    Ext.grid.dummyData[i].push('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed metus nibh, sodales a, porta at, vulputate eget, dui. Pellentesque ut nisl. Maecenas tortor turpis, interdum non, sodales non, iaculis ac, lacus. Vestibulum auctor, tortor quis iaculis malesuada, libero lectus bibendum purus, sit amet tincidunt quam turpis vel lacus. In pellentesque nisl non sem. Suspendisse nunc sem, pretium eget, cursus a, fringilla vel, urna.<br/><br/>Aliquam commodo ullamcorper erat. Nullam vel justo in neque porttitor laoreet. Aenean lacus dui, consequat eu, adipiscing eget, nonummy non, nisi. Morbi nunc est, dignissim non, ornare sed, luctus eu, massa. Vivamus eget quam. Vivamus tincidunt diam nec urna. Curabitur velit.');
}