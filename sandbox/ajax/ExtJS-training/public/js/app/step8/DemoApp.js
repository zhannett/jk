/**
 * @author Janet
 */

Demo.App = function(){
	var store, editWin, grid, dv, detail;
	return{
		init:function(){
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
			
			var viewport = new Ext.Viewport({
		        layout: 'border',
		        items: [{
					region: 'west',
					xtype: 'demotree',
					title: 'Demo Tree',
					split: true,
					width: 200
				}, {
		            border: false,
		            region:'center',
		            layout:'border',
		            margins:'5 5 0 0',
		            items: [{
		                xtype: 'tabpanel',
		                region: 'center',
		                activeTab: 1,
		                items: [ {
							xtype: 'demogrid',
							id: 'demogrid',
							title: 'My Grid',
							store: store,
							listeners: {
								rowdblclick: function(grid, rowindex, e){									
									var store = grid.store;
									var rec = store.getAt(rowindex);
									editWin.show();
									editWin.loadRecord(rec);
								},
								rowclick: function(grid, rowindex, e){									
									var store = grid.store;
									var rec = store.getAt(rowindex);
									var detailPanel = Ext.ComponentMgr.get('detail-panel');
									detailPanel.loadRecord(rec);
								}
							}
						}, {
		                    title: 'Card View',
		                    layout: 'fit',
		                    autoScroll: true,
		                    bodyStyle: 'padding:0 0 10px 10px;',
		                    items: {
								xtype: 'demoview',
								id: 'dv',
								store: store
							}
		                }]
		            }, {
						xtype: 'detailpanel',
						id: 'detail-panel',
						region: 'south',
						height:  100,
						split: true
					}]
		        }]
			});
			
			editWin = new Demo.EditWin ({
				title: "Edit Company",
				id:"eidt-win",
				listeners: {
					
				}
			});
			

		}
	}
}();
